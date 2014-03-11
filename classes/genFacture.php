<?php

class genFacture{

	

	public $pdf;

	

	public function __construct(){

		$this->pdf = new factPdf( 'P', 'mm', 'A4' );

        $this->pdf->Open();

        $this->pdf->AddPage();

	}

	

	public function extend_facnumber($val) {
		
		$facnumber = $val;
	   	$nbchar = 0;
		
		$intinial_char_lenght = strlen($facnumber);

	   	if($intinial_char_lenght < 10)
	   		$nbchar = 10 - $intinial_char_lenght;

	   

	   for($i = 0; $i< $nbchar; $i++) 
	   	$facnumber = "0".$facnumber;


	   return $facnumber;

	}

	public function getFactureEbay($id_facture){

		$efacture = new EntrepriseFacturation();

	    $efacture->getObjectById(1);

	    $logo = "../images/logo.jpg";

	    

	    

	    $fact = new Facture();

	    $fact->getObjectById($id_facture);

	    

	    $addrf = new AdresseFacturation();

	    $addrf->getObjectByIdfacture($id_facture);

	    

	    $clebay = new ClientEbay();

	    $clebay->getObjectByIdfacture($id_facture);

	    

	    //$eltfacture = new ElementsFacture();

	    //$eltfacture->getObjectByIdfacture($id_facture);

	

	    

		$this->pdf->addSociete( $logo,$efacture->raison_sociale."\n\n",

                  $efacture->code_postal." ".$efacture->ville."\n".

                  (!empty($efacture->adresse_ligne1)? $efacture->adresse_ligne1."\n":"" ).

                  (!empty($efacture->adresse_ligne2)? $efacture->adresse_ligne2."\n":"" ).

                  ((!empty($efacture->telephone1) or !empty($efacture->telephone2))? "Tel. ".(!empty($efacture->telephone1)?$efacture->telephone1:"").(!empty($efacture->telephone2)?((!empty($efacture->telephone1) and !empty($efacture->telephone2))?'/':'').$efacture->telephone2:"")."\n":"" ).

                  (!empty($efacture->adresse_ligne2)? $efacture->adresse_ligne2."\n":"" ).

                  (!empty($efacture->fax )? "Fax: ".$efacture->fax ."\n":"" ).

                  (!empty($efacture->email)? "E-mail: ".$efacture->email."\n":"" ).

                  (!empty($efacture->rcs )? "RCS: ".$efacture->rcs ."\n":"" ).

                  (!empty($efacture->numsiret)? "Numéro Siret: ".$efacture->numsiret."\n":"" )

                   );

                   

        //$numcmd =  explode("-", $fact->id_ebay);  $fact->id_ebay       

        $this->pdf->fact_dev("N° Commande: " .$this->extend_facnumber($fact->numfacture));//200

        $this->pdf->temporaire("Facture");

        

        

        $this->pdf->addDate(Tools::transformDate($fact->date_facturation,'fr',true));



        $this->pdf->addClientAdresse($clebay->nom."\n\n".

             $addrf->f_code_postal." ".$addrf->f_ville."\n\n".

                  (!empty($addrf->f_adresse_ligne1)? $addrf->f_adresse_ligne1."\n\n":"" ).

                  (!empty($addrf->f_adresse_ligne2)? $addrf->f_adresse_ligne2."\n\n":"" ).

                  ((!empty($addrf->f_telephone1) or !empty($addrf->f_telephone2))? "Tel. ".(!empty($addrf->f_telephone1)?$addrf->f_telephone1:"").(!empty($addrf->f_telephone2)?'/'.$addrf->f_telephone2:"")."\n\n":"" ).

                  (!empty($addrf->f_adresse_ligne2)? $addrf->f_adresse_ligne2."\n\n":"" )

                  );           

        $this->pdf->addReglement($fact->mode_paiement);

        $this->pdf->addNumTVA($efacture->tva."%");

        

        

        

        $cols=array( "REFERENCE"    => 35,

             "DESIGNATION"  => 66,

             "QTE"     => 10,

             "P.U. HT"      => 26,

             "MONTANT H.T." => 30,

             "TVA"          => 23 );

       $this->pdf->addCols( $cols);

       $cols=array( "REFERENCE"    => "L",

             "DESIGNATION"  => "L",

             "QTE"     => "C",

             "P.U. HT"      => "R",

             "MONTANT H.T." => "R",

             "TVA"          => "C" );

      $this->pdf->addLineFormat( $cols);

     // $this->pdf->addLineFormat($cols);



      $y    = 109;

      $total = 0;

      $totaltva = 0;

      $result = Db::getInstance()->ExecuteS("SELECT * FROM elements_facture WHERE id_facture='".$id_facture."'");

      foreach($result as $eltfacture){//print_r($eltfacture);

      $line = array( "REFERENCE" => $eltfacture['id_ebay_element'],

               "DESIGNATION"  => $eltfacture['titre'],

               "QTE"     => $eltfacture['quantite'],

               "P.U. HT"      => $eltfacture['prix_unitaire'].$fact->devise,

               "MONTANT H.T." => ($eltfacture['prix_unitaire']*$eltfacture['quantite']).$fact->devise,

               "TVA"          => ($eltfacture['prix_unitaire']*$efacture->tva/100).$fact->devise );

     $size = $this->pdf->addLine( $y, $line );

     $y   += $size + 2;

     $total += $eltfacture['prix_unitaire']*$eltfacture['quantite'];

     $totaltva += $eltfacture['prix_unitaire']*$efacture->tva/100;

      }

      $result = Db::getInstance()->ExecuteS("SELECT * FROM service_livraison WHERE id_facture='".$id_facture."'");

      foreach($result as $eltfacture){//print_r($eltfacture);

       $line = array( "REFERENCE" => "LIVRAISON",

               "DESIGNATION"  => $eltfacture['nom_livreur'],

               "QTE"     => "1",

               "P.U. HT"      => $eltfacture['montant_livraison'].$eltfacture['devise'],

               "MONTANT H.T." => $eltfacture['montant_livraison'].$eltfacture['devise'],

               "TVA"          => "0.00".$eltfacture['devise'] );

     $size = $this->pdf->addLine( $y, $line );

     $y   += $size + 2;

     $total += $eltfacture['montant_livraison'];

     

     }

     

	 $r1  = $this->pdf->w - 80;

	 $r2  = $r1 + 68;

	 $y1  = $this->pdf->h - 45;

	 $y2  = 24 ;

	 $mid = $y1+16 ;

	 $this->pdf->RoundedRect($r1, $y1, ($r2 - $r1), $y2, 3.5, 'D');

	 $this->pdf->Line( $r1, $mid, $r2, $mid);

	 $this->pdf->SetXY( $r1+15, $y1+3 );

	 $this->pdf->SetFont( "Helvetica", "", 10);

	 $this->pdf->Cell(10,5, "Montant HT: ".number_format($total,2,'.','').$fact->devise, 0, 0, "C");

	 $this->pdf->SetXY( $r1+11, $y1+9 );

	 $this->pdf->SetFont( "Helvetica", "", 10);

	 $this->pdf->Cell(10,5,"TVA: ".number_format($totaltva,2,'.','').$fact->devise, 0,0, "L");

	 $this->pdf->SetXY( $r1+15, $y1+17 );

	 $this->pdf->SetFont( "Helvetica", "B", 10);

	 $this->pdf->Cell(10,5,"Net à payer: ".number_format($total + $totaltva,2,'.','').$fact->devise, 0,0, "C");

     if($efacture->appliquertva == 1)

	 $this->pdf->addRemarque("TVA non applicable, article 293 B du CGI");

	 

	 $filename = '../factures/'.$fact->id_ebay.'.pdf';

	 if (is_writable("../factures/")){

     $this->pdf->Output($filename,"F");

     

     return $filename;

     

     

	 }else {

	 	echo "<div class=\"alert\" style=\"text-align:center;\">Le repertoire \"/factures\" doit être accessible en écriture. veuillez mettre les droits à 777";

	 	return false;

	 }



	}

}