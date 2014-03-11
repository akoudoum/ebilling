<?php
class SynchronisationEbay{
	protected $sp;
	protected $req;
	protected $fact;
	protected $efact;
	
	
	public function __construct(){
		$session = new EbatNs_Session(SESSIONPATH); //'../config/ebay.config.php'
		$this->sp = new EbatNs_ServiceProxy($session); 
        $this->req = new GetOrdersRequestType();
        $this->fact = new Facture(); 
		$this->efact = new EntrepriseFacturation();
        
        
          $this->req->CreateTimeFrom = "2011-06-01T00:00:00+02:00"; 
          $this->req->CreateTimeTo = "2011-06-15T00:00:00+01:00"; 
          $this->req->OrderRole = "Seller";
          //$this->req->OrderStatus = "Completed";
	
	}
	
	public function getFactureEbay(){

		$res = new GetOrdersResponseType();
		
		$ordertyp = new OrderArrayType();
		$order = new OrderType();
		
		$ft = new Facture();
		
		$compteur = 0;
		$f_row = $ft->getLastObject();
	
		
		$reqEbayTime = new GeteBayOfficialTimeRequestType();
		$reqEbayTime = $this->sp->GeteBayOfficialTime($reqEbayTime);
		list($dateEbay, $heureEbeay) = explode(" ", $reqEbayTime->Timestamp);
		list($yearEbay, $monthEbay, $dayEbay) = explode("-",$dateEbay);
		list($heureEbay, $minuteEbay, $secEbay) = explode(":",$heureEbeay);
		
		if(!$f_row)
		{//die("here");
		   $adebut = date("Y") - 1;
		   
			$this->req->CreateTimeFrom = $adebut."-01-01T00:00:00+02:00"; 
			$this->req->CreateTimeTo = date("c",mktime($heureEbay, $minuteEbay, $secEbay, $monthEbay, $dayEbay,$yearEbay));
				
			$res = $this->sp->GetOrders($this->req);//print_r($res);
			$ordertyp = $res->OrderArray;//echo count($ordertyp);
		   ///die(); 

		   if (count($ordertyp) > 0)
			  foreach($ordertyp as $order){
				  $return = $this->makeFacture($order);
				  if($return)
					$compteur++;
			 }
		   
		   
		}
		else
		{
		   list($date,$heure) = explode(" ", $ft->date_commande); //die($ft->date_commande);
		   list($y,$m,$d) = explode("-", $date);
		   $this->req->CreateTimeFrom = $y."-".$m."-".$d."T".$heure."+02:00"; 
           	$this->req->CreateTimeTo = date("c",mktime($heureEbay, $minuteEbay, $secEbay, $monthEbay, $dayEbay,$yearEbay));
           
		   $res = $this->sp->GetOrders($this->req);
		   $ordertyp = $res->OrderArray;
		   
		   if (count($ordertyp) > 0)
		      foreach($ordertyp as $order){
		   	      $return = $this->makeFacture($order);
				  if($return)
				  	$compteur++;
			 }
		 
		}
		
		echo "nombre de nouvelle facture ramenées : ".$compteur." -- ".$this->req->CreateTimeFrom." / ".$this->req->CreateTimeTo;
		
	}
	
	public function makeFacture($order){
		//print_r($order);
		$ordertyp = new OrderType();
		$transaction = new TransactionType();
		$item = new ItemType();
		$shippingaddress = new AddressType();
		
		$ordertyp = $order;
		
		
		$addrfacturation = new AdresseFacturation();
		$addrlivraison = new AdresseLivraison();
		$clebay = new ClientEbay();
		
		$shipper = new ServiceLivraison();
		
		
		
		$idcmd = explode("-", $ordertyp->OrderID);
		$orderid = $idcmd[0];
		$orderstatut = $ordertyp->OrderStatus;
		$amontpaid = $ordertyp->AmountPaid;
		$checkoutstatus = $ordertyp->CheckoutStatus;
		$shippingdetails = $ordertyp->ShippingDetails;
		$createdtime = $ordertyp->CreatedTime;
		$paymentmethods = $ordertyp->PaymentMethods;
		
		$shippingaddress = $ordertyp->ShippingAddress;
		$shippingserviceselected = $ordertyp->ShippingServiceSelected;
		$subtotal = $ordertyp->Subtotal;
		$total = $ordertyp->Total;
		$transaction = $ordertyp->TransactionArray[0];
		$buyeruserid = $ordertyp->BuyerUserID;
		
		$paidtime = explode(".", $transaction->PaidTime);
		$paidtime = str_replace("T", " ", $paidtime);
		
		//facture
		
		$this->fact->id_ebay = $orderid;
	    $this->fact->montant = $total->value;
	    $this->fact->devise = $total->attributeValues['currencyID'];
	    $this->fact->mode_paiement = $paymentmethods[0];
	    $this->fact->id_trasaction = $transaction->TransactionID;
	    $this->fact->date_commande = $createdtime;
	    $this->fact->date_facturation = $createdtime;
	    $this->fact->date_paiment = $createdtime;
	    $this->fact->legande = "";
	
	    if(!$this->fact->Objectexiste()){
		
	    	$last_fact = $this->fact->getLastObject();
		
		
		if(!$last_fact){
		    $this->efact->getObjectById(1);
		    $this->fact->numfacture = $this->efact->firstnumfacture;
		}else $this->fact->numfacture = $last_fact + 1;
		
	    $this->fact->add();
		
	    //print_r($fact);
	    
	   $facture_id = $this->fact->id;
	   
	  
	    //adresse  facturation
	    $nom = explode(" ", $shippingaddress->Name);
	    $addrfacturation->f_nom = $nom[1];
		$addrfacturation->f_prenom = $nom[0];
		$addrfacturation->f_email = "";
		$addrfacturation->f_adresse_ligne1 = $shippingaddress->Street1;
		$addrfacturation->f_adresse_ligne2 = $shippingaddress->Street2;
		$addrfacturation->f_ville = $shippingaddress->CityName;
		$addrfacturation->f_pays = $shippingaddress->CountryName;
		$addrfacturation->f_code_postal = $shippingaddress->PostalCode;
		$addrfacturation->f_telephone1 = $shippingaddress->Phone;
		$addrfacturation->f_telephone2 = $shippingaddress->Phone;
		$addrfacturation->id_facture = $facture_id;	
		//print_r($addrfacturation);
		$addrfacturation->add();
		
		
		//adresse livraison
		$addrlivraison->l_nom = $nom[1];
		$addrlivraison->l_prenom = $nom[0];
		$addrlivraison->l_email = "";
		$addrlivraison->l_adresse_ligne1 = $shippingaddress->Street1;
		$addrlivraison->l_adresse_ligne2 = $shippingaddress->Street2;
		$addrlivraison->l_ville = $shippingaddress->CityName;
		$addrlivraison->l_pays = $shippingaddress->CountryName;
		$addrlivraison->l_code_postal = $shippingaddress->PostalCode;
		$addrlivraison->l_telephone1 = $shippingaddress->Phone;
		$addrlivraison->l_telephone2 = $shippingaddress->Phone;
		$addrlivraison->id_facture = $facture_id;	
		//print_r($addrlivraison);
		$addrlivraison->add();
		
		//client ebay
		$clebay->id_client_ebay = $buyeruserid;
        $clebay->nom = $shippingaddress->Name;
        $clebay->id_facture = $facture_id;
        //print_r($clebay);
        $clebay->add();
        
        
     	//element facture 	
     	//print_r($ordertyp->TransactionArray); echo "---------------";
     	foreach($ordertyp->TransactionArray as $transaction){
     	$eltsfacture = new ElementsFacture();
     	$item = $transaction->Item;	 	 	 	 	
	    $eltsfacture->id_ebay_element = $item->ItemID;
	    $eltsfacture->titre = $transaction->Item->Title;//echo $transaction->Item->Title;
	    $eltsfacture->etat = $transaction->Item->ConditionDisplayName;
	    $eltsfacture->quantite = $transaction->QuantityPurchased;
	    $eltsfacture->prix_unitaire = $transaction->TransactionPrice->value;
	    $eltsfacture->id_facture = $facture_id;
	    //print_r($eltsfacture);
	    $eltsfacture->add();
	    }
	    //service livraison
	    $shipper->nom_livreur = $shippingserviceselected->ShippingService;
	    $shipper->montant_livraison = $shippingserviceselected->ShippingServiceCost->value;
	    $shipper->devise = $shippingserviceselected->ShippingServiceCost->attributeValues['currencyID'];
	    $shipper->date_livraison = $createdtime;
	    $shipper->id_facture = $facture_id;
	    //print_r($shipper);
	    $shipper->add();
	    
	    return true;
	    }
	    else
	    return false;
		
	}
}