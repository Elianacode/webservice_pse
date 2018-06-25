<?php
/**
* 
*/

include_once ROOT."model".DS."basicmodels.php";

include_once ROOT."config".DS."database.php";
include_once ROOT."model".DS."basicmodels.php";

$database = new Database();
$db = $database->getConnection();

$config = new Config($db);

$config->language = $_POST['total'];
$config->document = $_POST['document']; 
$config->documentType = $_POST['documentType']; 
$config->firstName = $_POST['firstName']; 
$config->lastName = $_POST['lastName']; 
$config->company = $_POST['company']; 
$config->emailAddress = $_POST['emailAddress']; 
$config->address = $_POST['address']; 
$config->city = $_POST['city']; 
$config->province = $_POST['province']; 
$config->country = $_POST['country']; 
$config->phone = $_POST['phone']; 
$config->mobile = $_POST['mobile'];

if($config->add_config()){
	$url = URLPSE;
	#Llave​ ​transacciona
	$tranKey = TRANKEY;
	$dataauth = new Authentication;
	#Identificador
	$dataauth->login = LOGIN;
	$dataauth->seed = "s";
	$key = sha1($dataauth->seed . $tranKey,false);
	$dataauth->tranKey = $key;
	$dataauth->additional = array();
	$arrayauth = array('auth' => $dataauth);
	try {
		$client = new SoapClient($url, [ "trace" => 1 ] );
		$result = $client->getBankList($arrayauth);
		$banks = $result->getBankListResult->item;
	} catch ( SoapFault $e ) {
		echo $e->getMessage();
	}
    include_once ROOT."views".DS."formpay.php";
}
else{
    echo "<div class='alert alert-danger'>Hubo un error.</div>";
}

