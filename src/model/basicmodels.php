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
	public $document;
	public $documentType;
	public $firstName;
	public $lastName;
	public $company;
	public $emailAddress;
	public $address;
	public $city;
	public $province;
	public $country;
	public $phone;
	public $mobile;
	public $count;

	public function __construct($db){
		$this->conec = $db;
	}

	function read(){
		$query = "SELECT * FROM tbl_config_payout;";

		$stmt = $this->conec->prepare( $query );
		$stmt->execute();
		$count = $stmt->rowCount();
		return $count;
	}

	function add_config(){

		$query = "INSERT INTO tbl_config_payout SET 
					language:language, currency:currency, 
					percent_tax_amount:percent_tax_amount, 
					percent_devolution_base:percent_devolution_base;";
		$query = "INSERT INTO `tbl_config_payout` 
					(`language`, `currency`, `percent_tax_amount`, `percent_devolution_base`,
					`buyer_identification_type`, `buyer_identification`, `name`,
					`lastname`, `company`, `email`, `addres`, `city`, `department`, `country`, `phone`, `cellphone`)
				VALUES ('".$this->language."', '".$this->currency."', ".
				$this->percent_tax_amount.", ".$this->percent_devolution_base.",
				'".$this->document."', '".$this->documentType."', '".$this->firstName."', 
				'".$this->lastName."', '".$this->company."', '".$this->emailAddress."', 
				'".$this->address."', '".$this->city."', '".$this->province."', 
				'".$this->country."', '".$this->phone."', '".$this->mobile."');";
		
		$stmt = $this->conec->prepare( $query );

        $result = $stmt->execute();

        return $result;
	}
	
}