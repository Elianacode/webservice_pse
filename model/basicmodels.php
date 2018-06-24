<?php 
/**
* WebServicePSE
* Rocio Marquez
* Juniio 2018
*/
class BankModelo{

	private $code;
	private $name;

}


class Authentication{

	private $login;
	private $tranKey;
	private $seed;
	private $additional;	 	
	
}

class Transaction{

	private $transactionID;
	private $sessionID;
	private $returnCode;
	private $trazabilityCode;
	private $transactionCycle;
	private $bankCurrency;
	private $bankFactor;
	private $bankURL;
	private $responseCode;
	private $responseReasonCode;
	private $responseReasonText;
	
}
class Config{

	private $conec;

	public $language;
	public $currency;
	public $percent_tax_amount;
	public $percent_devolution_base;

	public function __construct($db){
		$this->conec = $db;
	}

	function read(){
		$query = "SELECT * FROM tbl_config_payout";
		$stmt = $this->conec->prepare( $query );
		$stmt->execute();

		return $stmt;
	}

	function add_config(){
		$query = "INSERT INTO tbl_config_payout 
					('language', 'currency', 'percent_tax_amount', 'percent_devolution_base') 
				VALUES 
					($this->lang, $this->curre, $this->tax, $this->devolution);";
		$stmt = $this->conec->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
}