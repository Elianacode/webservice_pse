<?php
/**
* 
*/

include_once ROOT."model".DS."basicmodels.php";
class BankController 
{

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
}