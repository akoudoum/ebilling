<?php
/**
 * 
 * Classe de la table facture ebay
 * @author dev.goldprint@gmail.com
 * @copyright tous droits reservés
 *
 */
 class Facture{
	
 protected  $id_facture;
 protected  $id_ebay;
 protected  $montant;
 protected  $mode_paiement;
 protected  $id_trasaction;
 protected  $date_commande;
 protected $date_facturation;
 protected  $date_paiment;
 protected  $legende;
 
 
 /**
  * constructeur. initialise l'id de facture
  * @param entier $id
  */
 public function __construct($id=0){
 	$this->id_facture = $id;
 }
 
 /**
  * 
  * ascensseurs de id_facture
  */
 public function getIdFacture(){
 
 	return $this->id_facture;
 }
 
 public function setIdFacture($idfacture){
 
 	$this->id_facture = $idfacture;
 }
 
 /**
  * 
  * Ascenseurs id_ebay ...
  */
 
 public function getIdEbay(){
 	return $this->id_ebay; 
 }
 
 public function setIdEbay($idEbay){
 	$this->id_ebay = $idEbay; 
 }
 
 /**
  * 
  * Ascenseurs montant ...
  */
 public function getMontant(){
 	return $this->montant;
 }
 
 public function setMontant($montant){
 	$this->montant = $montant;
 }
 
 /**
  * 
  * Ascenseur modepaiement ...
  */
 public function getModePaiement(){
 	return $this->mode_paiement;
 }
 
 public function setModePaiement($modepaiment){
 	$this->mode_paiement = $modepaiment;
 }
 
 /**
  * 
  * Ascenseur Id Transaction ...
  */
 public function getIdTransaction(){
 	return $this->id_trasaction;
 }
 
 public function setIdTransaction($idtransaction){
 	$this->id_trasaction = $idtransaction;
 }
 
 /**
  * 
  * Ascenseur date commande ...
  */
 public function getDateCommande(){
 	return $this->date_commande;
 }
 
 public function getDateCommande($datecommande){
 	$this->date_commande = $datecommande;
 }
 
 /**
  * 
  * Ascenseur Date Paiement ...
  */
 public function getDatePaiement(){
 	return $this->date_paiment;
 }
 
 public function setDatePaiement($datepaiement){
 	$this->date_paiment = $datepaiement;
 }
 
 /**
  * 
  * Ascenseur Date Facturation ...
  */
 public function getDateFacturation(){
 	return $this->date_facturation;
 }
 
 public function setDateFacturation($datefacturation){
 	$this->date_facturation = $datefacturation;
 }
 
 /**
  * 
  * Ascenseur Legende ...
  */
 public function getLegende(){
 	return $this->legende;
 }
 
 public function setLegende($legende){
 	$this->legende = $legende;
 }
 
}

?>