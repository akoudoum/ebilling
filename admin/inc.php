<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if (file_exists(dirname(__FILE__).'/../include/settings.inc.php'))
	include_once(dirname(__FILE__).'/../include/settings.inc.php');
include_once(dirname(__FILE__)."/../classes/Db.php");
include_once(dirname(__FILE__)."/../classes/Validation.php");
include_once(dirname(__FILE__)."/../classes/Tools.php");
include_once(dirname(__FILE__)."/../classes/Validate.php");
include_once(dirname(__FILE__)."/../classes/ObjectModel.php");
include_once(dirname(__FILE__)."/../classes/Admin.php");
include_once(dirname(__FILE__)."/../classes/Facture.php");
include_once(dirname(__FILE__)."/../classes/AdresseFacturation.php");
include_once(dirname(__FILE__)."/../classes/AdresseLivraison.php");
include_once(dirname(__FILE__)."/../classes/ClientEbay.php");
include_once(dirname(__FILE__)."/../classes/ElementsFacture.php");
include_once(dirname(__FILE__)."/../classes/EntrepriseFacturation.php");
include_once(dirname(__FILE__)."/../classes/ServiceLivraison.php");
include_once(dirname(__FILE__)."/../classes/SynchronisationEbay.php");
include_once(dirname(__FILE__)."/../classes/genFacture.php");
include_once(dirname(__FILE__)."/../classes/SendByEmail.php");

include_once(dirname(__FILE__)."/../classes/phpactiveresource/ActiveResource.php");
include_once(dirname(__FILE__)."/../classes/RemoteBills/RemoteBill.php");
include_once(dirname(__FILE__)."/../classes/RemoteBills/RemoteCustomer.php");
include_once(dirname(__FILE__)."/../classes/RemoteBills/RemoteItem.php");

include_once(dirname(__FILE__)."/../classes/fpdf.php");
include_once(dirname(__FILE__)."/../classes/fpdf.class.php");



ob_start();
/*config ebay*/
require_once dirname(__FILE__)."/../EbatNs/EbatNs_ServiceProxy.php"; 
require_once dirname(__FILE__)."/../EbatNs/GetOrdersRequestType.php";	
require_once dirname(__FILE__)."/../EbatNs/GetOrdersResponseType.php";
require_once dirname(__FILE__)."/../EbatNs/GeteBayOfficialTimeRequestType.php";

ob_end_clean();
define("SESSIONPATH", dirname(__FILE__)."/../config/ebay.config.php");
define("DEBUG", false);
define("DEBUG2", false);
define("DEBUG3", false);


//controleurs
include_once("Ctrl/connexion.php");
include_once("Ctrl/MonCompte.php");
include_once("Ctrl/askpasswd.php");
include_once("Ctrl/GestionAdmin.php");
include_once("Ctrl/GestionFacture.php");

?>