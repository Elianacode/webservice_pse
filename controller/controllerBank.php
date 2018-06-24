<?php
/**
* 
*/
class BankController 
{
	include_once "..\model\basicmodels.php";

	$url = "https://test.placetopay.com/soap/pse/?wsdl";
	$tranKey = "024h1IlD";
	$key = sha1("r" . $tranKey,false);
	$dataauth = new Authentication;
	$dataauth->login = "6dd490faf9cb87a9862245da41170ff2";
	$dataauth->tranKey = $key;
	$dataauth->seed = "r";
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