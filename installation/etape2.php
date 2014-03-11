<?php
  ob_start();
  include("../admin/inc.php");
  $gestionfacture = new GestionFacture();
  
  if(isset($_GET['action'])){
   $entreprisefacturation = new EntrepriseFacturation();
   $entreprisefacturation->id = 1;
   $entreprisefacturation->copyFromPost();
   //print_r($entreprisefacturation);
   $gestionfacture->er= $entreprisefacturation->validateControler(true);
   $nb = count($gestionfacture->er);
   
   //print_r($gestionfacture->er);die();
  
   if($nb==0){
   
   if(!$entreprisefacturation->update()){
      //Tools::redirection("fin_install.php");

     
   }
   else{//////////////////////////////////
        
	$addr = 'http://'.$_SERVER["HTTP_HOST"].str_replace("etape2.php","fin_install.php",$_SERVER['PHP_SELF']);
        ob_end_clean();
        Tools::redirection($addr);
   }
	
	}
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gestionnaire d'installation Facturation ebay</title>
<link href="../admin/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{
font-family:Arial, Helvetica, sans-serif;
color:#000000;
font-size:12px;
background-color:#ffffff}

.cellule{
background-color:#091058;
color:#FFFFFF}
.style1 {background-color: #091058; color: #FFFFFF; font-weight: bold; }
</style>

</head>

<body>

  <div style="width:650px; margin:auto"><img src="../images/banner.jpg" width="800" height="66" /></div>
<div style="width:650px; margin:auto">
  <h1 align="center">Configuration principale </h1>
<div align="center" style="margin-top:10px; background-color:#06F; color:#FFF"> #1: Pr&eacute;-installation ||   #2: Configuration de la base de donn&eacute;es  || <strong style="color:#FF0">#3: Configuration principale</strong></div></div>
<div style="width:650px; margin:auto">
<?php if($nb > 0){?>
  <div style="margin:5px; padding:5px; background:#FFCC00; border:#FF0000 solid 1px">
      <ul>
      <?php foreach($gestionfacture->er as $error){?>
      <li><?php echo $error; ?></li>
      <?php }?>
      </ul>
  </div>
  <?php }?>
  
  <div>
   <?php
   ob_start();
   $gestionfacture = new GestionFacture();
   $gestionfacture->EmetteurFacture();
   $form = ob_get_contents(); 
   $form = str_replace("index.php", "etape2.php", $form) ;
   ob_clean();
   echo $form;
   ?>
  </div>
  <div align="center">
  </div>
<div align="center" style="margin-top:15px; border-top:#000066 solid 1px"><?php include("../admin/footer.php"); ?></div>
</div>

</body>
</html>