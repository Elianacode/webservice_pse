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
			<div class="col-md-6 col text-center">
				<h1>Pago</h1>
			</div>
		</div>
	 	<form action="?makepay" method="POST">
	 	<div class="row">	 	
			<div class="form-group  col-md-4">
			  <label for="total_id">Valor a pagar:</label>
			  <input type="" class="form-control" id="total_id" name="total">  
			</div>
	  		<div class="form-group col-md-4">
				<label for="document_type_id">Tipo de documento:</label> 
				<select class="form-control" id="document_type_id" name="documentType">
					<option>Seleccione...</option>
					<option value="CC">Cédula de ciudanía colombiana</option>
					<option value="CE">Cédula de extranjería</option>
					<option value="TI">Tarjeta de identidad</option>
					<option value="PPN">Pasaporte</option>
				</select>  
			</div>
			<div class="form-group col-md-4">
			  <label for="document_id">Número de documento:</label>
			  <input type="" class="form-control" id="document_id" name="document">  
			</div>
	 	</div>
	 		<div class="row">
	 			<div class="form-group col-md-6">
				  <label for="name_id">Nombre:</label>
				  <input type="" class="form-control" id="name_id" name="firstName">  
				</div>
				<div class="form-group col-md-6">
				  <label for="last_name_id">Apellido:</label>
				  <input type="" class="form-control" id="last_name_id" name="lastName">  
				</div>
	 		</div>
			<div class="row">
				<div class="form-group col-md-4">
				  <label for="company_id">Compañia:</label>
				  <input type="" class="form-control" id="company_id" name="company">  
				</div>
				<div class="form-group col-md-4">
				  <label for="email_id">Correo Electrónico:</label>
				  <input type="" class="form-control" id="email_id" name="emailAddress">  
				</div>
				<div class="form-group col-md-4">
				  <label for="addres_id">Dirección:</label>
				  <input type="" class="form-control" id="addres_id" name="address">  
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
				  <label for="city_id">Ciudad:</label>
				  <input type="" class="form-control" id="city_id" name="city">  
				</div>
				<div class="form-group col-md-4">
				  <label for="department_id">Departamento:</label>
				  <input type="" class="form-control" id="department_id" name="province">  
				</div>					
				<div class="form-group col-md-4">
				  <label for="country_id">País:</label>
				  <input type="" class="form-control" id="country_id" name="country">  
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
				  <label for="phone_id">Teléfono fijo:</label>
				  <input type="" class="form-control" id="phone_id" name="phone">  
				</div>
				<div class="form-group col-md-4">
				  <label for="cellphone_id">Teléfono celular:</label>
				  <input type="" class="form-control" id="cellphone_id" name="mobile">  
				</div>			
			</div>
			<div class="row justify-content-md-center">
		  		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmData">Pagar</button>
		  	</div>

			
			<div class="modal fade" id="confirmData" tabindex="-1" role="dialog" aria-labelledby="confirmDataLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="confirmDataLabel">Confirmar transacción</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<label for="total_id" class="col-md-2">Valor a pagar:</label>
							<span class="col-md-4"></span>
							<label for="document_type_id" class="col-md-2">Tipo de documento:</label> 
							<span class="col-md-4"></span>
						</div>
						<div class="row">
							<label for="document_id" class="col-md-2">Número de documento:</label>
							<span class="col-md-4"></span>
							<label for="name_id" class="col-md-2">Nombre:</label>
							<span class="col-md-4"></span>
						</div>
						<div class="row">
							<label for="last_name_id" class="col-md-2">Apellido:</label>
							<span class="col-md-4"></span>
							<label for="company_id" class="col-md-2">Compañia:</label>
							<span class="col-md-4"></span>
						</div>
						<div class="row">
							<label for="email_id" class="col-md-2">Correo Electrónico:</label>
							<span class="col-md-4"></span>
							<label for="addres_id" class="col-md-2">Dirección:</label>
							<span class="col-md-4"></span>
						</div>
						<div class="row">
							<label for="city_id" class="col-md-2">Ciudad:</label>
							<span class="col-md-4"></span>
							<label for="department_id" class="col-md-2">Departamento:</label>
							<span class="col-md-4"></span>
						</div>
						<div class="row">
							<label for="country_id" class="col-md-2">País:</label>
							<span class="col-md-4"></span>
							<label for="phone_id" class="col-md-2">Teléfono fijo:</label>
							<span class="col-md-4"></span>
						</div>
						<div class="row">							
							<label for="cellphone_id" class="col-md-2">Teléfono celular:</label>
							<span class="col-md-4"></span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Pagar</button>
					</div>
					</div>
				</div>
			</div>
		</form>
	</div>
 </body>
</html>