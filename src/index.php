<?php	
	/* WsPSE 
	* Eliana Marquez 
	* Junio 2018*/

	setlocale(LC_ALL,"es_ES");
	date_default_timezone_set('America/Bogota');

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)).DS);
	define('BASEPATH', ROOT.'config'.DS);

	require_once BASEPATH . "general_data.php";
	require_once BASEPATH . "database.php";

	if(isset($_GET['config'])){
		require_once ROOT.'controller'.DS."configpayout.php";
	}else if(isset($_GET['pay'])){
		require_once ROOT.'controller'.DS."controllerBank.php";
	}else if(isset($_GET['makepay'])){
		require_once ROOT.'controller'.DS."controllerBank.php";
	}else{		
		require_once BASEPATH . "validateconfig.php";
	}

