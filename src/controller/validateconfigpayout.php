<?php
	/**
	* WsPSE
	* Eliana Marquez
	* Junio 2018
	*/

	include_once ROOT."model".DS."basicmodels.php";
	
	class ControllerConfig 
	{
		
		function is_configured()
		{
			$database = new Database();
			$db = $database->getConnection();

			$config = new Config($db);
			$cont =  $config->read();
			if($cont){
			    return true;
			}else{
				return false;
			}
		}
	}