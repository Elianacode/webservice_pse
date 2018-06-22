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
					    <option>Persona</option>
					    <option>Empresa</option>
					  </select>
					</div>
					<div><?php 
					session_start();
					include_once "..\model\basicmodels.php";

					$url = "https://test.placetopay.com/soap/pse/?wsdl";
					$tranKey = "024h1IlD";					
					$key = sha1("c" . $tranKey,false);
					$dataauth = new Authentication;
					$dataauth->login = "6dd490faf9cb87a9862245da41170ff2";
					$dataauth->tranKey = $key;
					$dataauth->seed = "c";
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