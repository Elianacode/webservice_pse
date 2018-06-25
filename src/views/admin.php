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
		<h1>Adminitracion de pagos</h1>
	 	<form action="?config" method="POST">
			<div class="row">
		  		<div class="form-group col-md-3">
				  <label for="languaje_id">Lenguaje con el cual desea recibir sus pago:</label>
				  <select class="form-control" id="languaje_id" name="language">
					<option value="ES">Español</option>
					<option value="EN">Ingles</option>
				  </select>
				</div>
				<div class="form-group col-md-3">
				  <label for="currency_id">Moneda con la cual desea recibir sus pagos:</label>
				  <select class="form-control" id="currency_id" name="currency">
					<option value="CO">Pesos colombianos</option>
					<option value="EU">Dolares</option>
				  </select>
				</div>
				<div class="form-group col-md-3">
					<label for="tax_id">Porcentaje de impuesto de sus pagos:</label>
					<select class="form-control" id="tax_id" name="percent_tax_amount">
						<?php for($i=0;$i <= 100 ;$i= $i+10){ ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group col-md-3">
					<label for="devolution_id">Porcentaje de devolución base de sus pagos:</label>
					<select class="form-control" id="devolution_id" name="percent_devolution_base">
						<?php for($i=0;$i <= 100 ;$i= $i+10){ ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php } ?> 
					</select>
				</div>
			</div>
			<h1>Información del receptor del pago</h1>
			<div class="row">
				<div class="form-group col-md-3">
					<label for="document_type_id">Tipo de documento:</label> 
					<select class="form-control" name="documentType" id="document_type_id">
						<option>Seleccione...</option>
						<option value="CC">Cédula de ciudanía colombiana</option>
						<option value="CE">Cédula de extranjería</option>
						<option value="TI">Tarjeta de identidad</option>
						<option value="PPN">Pasaporte</option>
					</select>  
				</div>
				<div class="form-group col-md-3">
				  <label for="document_id">Número de documento:</label>
				  <input type="" class="form-control" id="document_id" name="document">  
				</div>
	 			<div class="form-group col-md-3">
				  <label for="name_id">Nombre:</label>
				  <input type="" class="form-control" id="name_id" name="firstName">  
				</div>
				<div class="form-group col-md-3">
				  <label for="last_name_id">Apellido:</label>
				  <input type="" class="form-control" id="last_name_id" name="lastName">  
				</div>
	 		</div>
			<div class="row">			
				<div class="form-group col-md-3">
				  <label for="phone_id">Teléfono fijo:</label>
				  <input type="" class="form-control" id="phone_id" name="phone">  
				</div>
				<div class="form-group col-md-3">
				  <label for="cellphone_id">Teléfono celular:</label>
				  <input type="" class="form-control" id="cellphone_id" name="mobile">  
				</div>
				<div class="form-group col-md-3">
				  <label for="company_id">Compañia:</label>
				  <input type="" class="form-control" id="company_id" name="company">  
				</div>
				<div class="form-group col-md-3">
				  <label for="email_id">Correo Electrónico:</label>
				  <input type="" class="form-control" id="email_id" name="emailAddress">  
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-3">
				  <label for="addres_id">Dirección:</label>
				  <input type="" class="form-control" id="addres_id" name="address">  
				</div>
				<div class="form-group col-md-3">
				  <label for="city_id">Ciudad:</label>
				  <input type="" class="form-control" id="city_id" name="city">  
				</div>
				<div class="form-group col-md-3">
				  <label for="department_id">Departamento:</label>
				  <input type="" class="form-control" id="department_id" name="province">  
				</div>					
				<div class="form-group col-md-3">
				  <label for="country_id">País:</label>
				  <input type="" class="form-control" id="country_id" name="country">  
				</div>
			</div>					
			<div class="row justify-content-md-center">
		  		<button type="submit" class="btn btn-primary">Guardar</button>
		  	</div>
		</form>
	</div>
 </body>
</html>