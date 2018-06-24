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
				<h1>Adminitracion de pagos</h1>
			 	<form action="?config" method="POST">
			  		<div class="form-group">
					  <label for="languaje_id">Lenguaje con el cual desea recibir sus pago:</label>
					  <select class="form-control" id="languaje_id" name="language">
						<option value="ES">Español</option>
						<option value="EN">Ingles</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="currency_id">Moneda con la cual desea recibir sus pagos:</label>
					  <select class="form-control" id="currency_id" name="currency">
						<option value="CO">Pesos colombianos</option>
						<option value="EU">Dolares</option>
					  </select>
					</div>
					<div class="form-group">
						<label for="tax_id">Porcentaje de impuesto de sus pagos:</label>
						<select class="form-control" id="tax_id" name="percent_tax_amount">
							<?php for($i=0;$i <= 100 ;$i= $i+10){ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="devolution_id">Porcentaje de devolución base de sus pagos:</label>
						<select class="form-control" id="devolution_id" name="percent_devolution_base">
							<?php for($i=0;$i <= 100 ;$i= $i+10){ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?> 
						</select>
					</div>
					<div class="row justify-content-md-center">
				  		<button type="submit" class="btn btn-primary">Guardar</button>
				  	</div>
				</form>
			</div>	
		</div>
	</div>
 </body>
</html>