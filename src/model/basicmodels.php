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
		$query = "SELECT COUNT(*) FROM `tbl_config_payout`";
		$stmt = $this->conec->prepare( $query );
		$stmt->execute();

		return $stmt;
	}

	function add_config(){

		$query = "INSERT INTO tbl_config_payout SET 
					language:language, currency:currency, 
					percent_tax_amount:percent_tax_amount, 
					percent_devolution_base:percent_devolution_base;";
		$query = "INSERT INTO `tbl_config_payout` 
					(`language`, `currency`, `percent_tax_amount`, `percent_devolution_base`) 
				VALUES ('".$this->language."', '".$this->currency."', '".
				$this->percent_tax_amount."', '".$this->percent_devolution_base."');";


		
		$stmt = $this->conec->prepare( $query );

        $result = $stmt->execute();

        return $result;
	}
	
}