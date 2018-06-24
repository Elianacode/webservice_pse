<?php
	/* WsPSE 
	* Eliana Marquez 
	* Junio 2018*/

include_once ROOT."config".DS."database.php";
include_once ROOT."model".DS."basicmodels.php";

$database = new Database();
$db = $database->getConnection();

$config = new Config($db);

$config->language = $_POST['language'];
$config->currency = $_POST['currency'];
$config->percent_tax_amount = $_POST['percent_tax_amount'];
$config->percent_devolution_base = $_POST['percent_devolution_base'];
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
    include_once ROOT."views".DS."formpay.php";
}
else{
    echo "<div class='alert alert-danger'>Hubo un error.</div>";
}