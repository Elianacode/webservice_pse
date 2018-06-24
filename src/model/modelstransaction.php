<?php
	/**
	* 
	*/
	class Person 
	{
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



		function __construct()
		{
			# code...
		}
	}

	class Authentication{

		public $login;
		public $tranKey;
		public $seed;
		public $additional;	 	
		
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

	class CreditRequest
	{
		public $bankCode;
		public $bankInterface;
		public $returnURL;
		public $reference;
		public $description;
		public $language;
		public $currency;
		public $ipAddress;
		public $userAgent;
	
	}