<?php 

class page{
	   var $nb_num_page;//nombre de numero de page à afficher
       var $elt_page;   //nombre d'élément par page
	   var $nom_page;   //nom de la page
	   var $np;          //numero de page
       var $deb;        //début de sélection des enregistremnts
	   var $nb_elt;     //nombre total d'enregistrement
	   var $pg_suivante;
	   var $pg_precedente;
	   var $derniere_pg;
	   var $permiere_pg;
	   var $pg_encour;
	   var $nb_total_pg;
	   var $numero;
	   
//constructeur
function page(){
       $this->nb_num_page = 6;
	   $this->elt_page=10;
	   $this->nom_page="";
	   if(!isset($_REQUEST['np'])) $this->np=0;
	   else $this->np=$_REQUEST['np'];
	   $this->deb = $this->np*$this->elt_page;
}

function nbTotalItem($sql){
$result = Db::Execute($sql);
if ($suppliers === false)
			return false;
$this->nb_elt = $result->NumRows();
}

function Getdata($sql){
$this->deb=$this->np*$this->elt_page;
$result = Db::Execute($sql." LIMIT ".$this->deb.", ".$this->elt_page);
return $result;
}

function print_nb(){

	   $mod=$this->nb_elt%$this->elt_page;
	   if($mod==0) $page=$this->nb_elt/$this->elt_page; else $page=(($this->nb_elt-$mod)/$this->elt_page+1);
	   if($this->np>0){
       $pre1='<strong><a href="'.$this->nom_page.'np=0">&laquo;&laquo;</a></strong>';
	   $this->permiere_pg=$this->nom_page.'np=0';//
       //if($this->np>0){
       $precedent=$this->np-1;
       $pre='<strong><a href="'.$this->nom_page.'np='.$precedent.'">&lt;Pr&eacute;c&eacute;dente</a></strong>';
	   $this->pg_precedente=$this->nom_page.'np='.$precedent;//
       }else{
       $pre1='<strong>&laquo;&laquo;</strong>';/////////
	   $pre='<strong>&lt;Pr&eacute;c&eacute;dent</strong>';
	   $this->pg_precedente="#";//
	   }
 	   
	   if(($this->np+1)<$page){
	   $suiv1='<strong><a href="'.$this->nom_page.'np='.($page-1).'">&raquo;&raquo;</a></strong>';
	   $this->derniere_pg=$this->nom_page.'np='.($page-1);//
	   
       $suivant=$this->np+1;
       $suiv='<strong><a href="'.$this->nom_page.'np='.$suivant.'">suivant&gt;</a></strong>';
	   $this->pg_suivante=$this->nom_page.'np='.$suivant;
	   }else{
	   $suiv1='<strong>&raquo;&raquo;</strong>';
       $suiv='<strong>Suivant&gt;</strong>';
	   $this->pg_suivante="#";
	   }
       $numero='';
	   $cote=($this->nb_num_page-($this->nb_num_page%2))/2;
       $debut=$this->np-$cote; if ($debut<0) {$debut=0; $fin=$debut+$this->nb_num_page-1; if($fin>$page) $fin=$page-1;}
	   else{$fin=$this->np+$cote; if($fin>=$page) $fin=$page-1;}
	   
for($k=$debut;$k<=$fin;$k++) 
if($this->np==$k) $numero.='<b>'.($this->np+1).'</b>';
else $numero.=' <a href="'.$this->nom_page.'np='.($k).'">'.($k+1).'</a>  ';				
		$pg='<span>page : '.($this->np+1)." Sur ".$page.'</span>';	  
       
	    $this->numero = $numero;
	    $this->pg_encour = $this->np+1;
		$this->nb_total_pg = $page;
		
return $pre1.' | '.$pre.'| &nbsp;&nbsp;&nbsp;'.$pg.' &nbsp;&nbsp;&nbsp;&nbsp;'.$numero.'  &nbsp;&nbsp;&nbsp;| '.$suiv.' | '.$suiv1;

}

}		
?>