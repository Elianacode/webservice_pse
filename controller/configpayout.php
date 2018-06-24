<?php

include_once '..\config\database.php';
include_once '..\model\basicmodels.php';

$database = new Database();
$db = $database->getConnection();

$config = new Config($db); 




if reques
// set product property values
$config->language = $_POST['language'];
$config->currency = $_POST['currency'];
$config->percent_tax_amount = $_POST['percent_tax_amount'];
$config->percent_devolution_base = $_POST['percent_devolution_base'];

// create the config
if($config->create()){
    echo "<div class='alert alert-success'>config was created.</div>";
}

// if unable to create the config, tell the user
else{
    echo "<div class='alert alert-danger'>Unable to create config.</div>";
}