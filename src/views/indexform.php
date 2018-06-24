<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pago PSE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-6 col">
				<h1>Paga con nosotros</h1>
			 	<form action="/action_page.php">
			  		<div class="form-group">
						<label for="sel1">Tipo de cuenta con el cual desea realizar el pago:</label>
						<select class="form-control" id="sel1">
							<option value="0">Persona</option>
							<option value="1">Empresa</option>
						</select>
					</div>
					<div><?php 
					include_once ROOT."model".DS."basicmodels.php";
					include_once ROOT."model".DS."modeltransaction.php";

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
					?></div>
					<div class="form-group">
						<label for="sel1">Banco con el cual desea realizar el pago:</label>
						<select class="form-control" id="sel1">
							<?php for($i=1;$i< count($banks);$i++){ ?>
							<option value="<?php echo $banks[$i]->bankName; ?>"><?php echo $banks[$i]->bankName; ?></option>
							<?php } ?> 
						</select>
					</div>
					<div class="row justify-content-md-center">
				  		<button type="submit" class="btn btn-primary">Pagar</button>
				  	</div>
				</form>
			</div>	
		</div>
	</div>
 </body>
</html>