<?php

	include_once ROOT."controller".DS."validateconfigpayout.php";

	$configurate = new ControllerConfig;
	
	if($configurate->is_configured()){
		include_once ROOT."views".DS."formpay.php";
	}else{
		include_once ROOT."views".DS."admin.php";
	}