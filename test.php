<?php
/**********************************************


**********************************************/
define("DEBUG", true);
define("DEBUG2", true);
define("DEBUG3", true);
require_once("classes/phpactiveresource/ActiveResource.php");
require_once("classes/RemoteBills/RemoteCustomer.php");
require_once("classes/RemoteBills/RemoteItem.php");
require_once("classes/RemoteBills/RemoteBill.php");


//$remoteCustomer = new RemoteCustomer();
/*
$remoteCustomer->api_custom 	= "TEST_USER_DJON";
$remoteCustomer->api_id			= 121;
$remoteCustomer->city			= "Alexandria";
$remoteCustomer->civility		= "Mr";
$remoteCustomer->company_name 	= "venus";
$remoteCustomer->country		= "US";
$remoteCustomer->email 			= "armel.koudoum@gmail.com";
$remoteCustomer->fax			= "";
$remoteCustomer->first_name		= "DJON";
$remoteCustomer->last_name		= "KANA";
$remoteCustomer->pay_before		= 0;
$remoteCustomer->penalty		= "";
$remoteCustomer->phone			= "+14433748688";
$remoteCustomer->short_name		= "TEST_USER_DJON";
$remoteCustomer->street			= "7122 rock ridge ln";
$remoteCustomer->zip_code		= "23915";

print_r($remoteCustomer->InsertCustomer());
*/
$remoteBill = new RemoteBill();

//$remoteBill->api_custom = "NEW-BILL";
$remoteBill->api_custom = "110109052926";
$remoteBill->api_id = 2;
//$remoteBill->customer_id = 136740;
$remoteBill->customer_id = 141501;

$remoteItem = new RemoteItem(array("position" => 1,
			"product_id" => 0,
			"quantity" => 2,
			"title" => "strou vise",
			"nature" => 2,
			"unit_price" => 154));

$remoteBill->AddItem($remoteItem->GetItem());

$remoteItem = new RemoteItem(array("position" => 2,
		"product_id" => "Super vise 3",
		"quantity" => 4,
		"title" => "Super strou",
		"nature" => "good",
		"unit_price" => 54));

$rep = $remoteBill->AddItem($remoteItem->GetItem());

$rep = $remoteBill->InsertBill();
//$rep = $remoteBill->FindBill(array("api_custom"=>"NEW-BILL8"));
//$rep = $remoteCustomer->FindCustomer(array("api_custom"=>"TEST_USER_DJON4"));
//print_r($rep);
echo is_array($rep)?"array":"not array";
//echo isset($rep[0])?"Good":"No Entry";
//print_r($remoteCustomer->FindCustomer(array("company" => "1&1 Internet S.A.R.L.")));
//$invoices = new Invoices(array ('id' => '267160'));
//$invoices = $invoices->get('');//, array('invoice_ref' => "2012-50"));

//print_r($invoices);

?>