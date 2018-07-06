<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css"> -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min,js"></script>
		<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-datepicker.css">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
		<script>
			$(function(){
				$('.dates #user1').datepicker({
					'format':'yyyy-mm-dd',
					'autoclose' : true
				});
			});
		</script>
	</head>
	<body>

    		<div class="container">
          <div class="row">
            <div class="form-inline">
          		<div class="col-lg-3">
    							<div class="input-group">
    							  <label class="form-check-label mr-1" for="nombre">Nombres:</label>
    							  <input type="text" class="form-control" placeholder="" >
    							</div>
    							</div>
    							<div class="col-lg-3">
    									<div class="input-group">
    										<label class="form-check-label mr-1" for="nombre">Apellido Paterno</label>
    										<input type="text" class="form-control" placeholder="" >
    									</div>
    									</div>
    									<div class="col-lg-3">
    											<div class="input-group">
    												<label class="form-check-label mr-1" for="nombre">Apellido Materno</label>
    												<input type="text" class="form-control" placeholder="" >
    											</div>
    											</div>
    											<div class="col-lg-3">
    													<div class="input-group">
    														<label class="form-check-label mr-1" for="nombre">CI:</label>
    														<input type="text" class="form-control" placeholder="" >
    													</div>
    													</div>
          		</div>
          </div>
    			<br>
    			<div class="row">
    				<div class="form-inline">
    					<div class="col-lg-3">
    							<div class="input-group">
    								<label class="form-check-label mr-1" for="nombre">Estado Civil:</label>
    								<input type="text" class="form-control" placeholder="" >
    							</div>
    							</div>
    							<div class="col-lg-3">
    									<div class="input-group">
    										<label for="nombre">Sexo: </label>
    	                  <div class="form-check">
    	                    <label class="form-check-label">
    	                    <input type="radio" name="sexo" id="hombre" class="form-check-input mr-1 ml-2">Hombre
    	                    </label>
    	                  </div>
    	                  <div class="form-check">
    	                    <label class="form-check-label">
    	                    <input type="radio" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Mujer
    	                    </label>
    	                  </div>
    									</div>
    									</div>
    									<div class="col-lg-3">
    											<div class="input-group">
    												<label class="form-check-label mr-1" for="nombre">Edad</label>
    												<input type="text" class="form-control" placeholder="" >
    											</div>
    											</div>
    											<div class="col-lg-3">
    													<div class="input-group">
    														<label class="form-check-label mr-1" for="nombre">Celular</label>
    														<input type="text" class="form-control" placeholder="" >
    													</div>
    													</div>
    					</div>
    			</div>
    <br>
    <div class="row">
    	<div class="form-inline">
    		<div class="col-lg-3">
    				<div class="input-group">
    					<label class="form-check-label mr-1" for="nombre">Lugar de Nacimiento</label>
    					<input type="text" class="form-control" placeholder="" >
    				</div>
    				</div>
    				<div class="col-lg-3">
    						<div class="input-group">
                  <label class="form-check-label mr-1" for="nombre">Fecha de Nacimiento</label>
                  <input type="text" class="form-control" placeholder="" >
    						</div>
    						</div>
    						<div class="col-lg-3">
    								<div class="input-group">
    									<label class="form-check-label mr-1" for="nombre">Nacionalidad</label>
    									<input type="text" class="form-control" placeholder="" >
    								</div>
    								</div>

    		</div>
    </div>
    <br>
    <div class="row">
      <div class="form-inline">
        <div class="col-lg-3">
            <div class="input-group">
              <label class="form-check-label mr-1" for="nombre">Zona Domicilio</label>
              <input type="text" class="form-control" placeholder="" >
            </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                  <label class="form-check-label mr-1" for="nombre">Direccion</label>
                  <input type="text" class="form-control" placeholder="" >
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                      <label class="form-check-label mr-1" for="nombre">Telefono</label>
                      <input type="text" class="form-control" placeholder="" >
                    </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                          <label class="form-check-label mr-1" for="nombre">Ocupacion</label>
                          <input type="text" class="form-control" placeholder="" >
                        </div>
                        </div>
        </div>
    </div>
<br>
<div class="row">
  <div class="form-inline">
    <div class="col-lg-3">
        <div class="input-group">
          <label class="form-check-label mr-1" for="nombre">Nombre a Facturar</label>
          <input type="text" class="form-control" placeholder="" >
        </div>
        </div>
        <div class="col-lg-3">
            <div class="input-group">
              <label class="form-check-label mr-1" for="nombre">NIT:</label>
              <input type="text" class="form-control" placeholder="" >
            </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                  <label class="form-check-label mr-1" for="nombre">Telefono Oficina</label>
                  <input type="text" class="form-control" placeholder="" >
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                      <label class="form-check-label mr-1" for="nombre">Email</label>
                      <input type="text" class="form-control" placeholder="" >
                    </div>
                    </div>

    </div>
</div>
<hr>
<h4>Beneficiarios:</h4><br>
<div class="row">
  <div class="form-inline">
    <div class="col-lg-3">
        <div class="input-group">
          <label class="form-check-label mr-1" for="nombre">Nombres:</label>
          <input type="text" class="form-control" placeholder="" >
        </div>
        </div>
        <div class="col-lg-3">
            <div class="input-group">
              <label class="form-check-label mr-1" for="nombre">Apellido Paterno</label>
              <input type="text" class="form-control" placeholder="" >
            </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                  <label class="form-check-label mr-1" for="nombre">Apellido Materno</label>
                  <input type="text" class="form-control" placeholder="" >
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                      <label class="form-check-label mr-1" for="nombre">CI:</label>
                      <input type="text" class="form-control" placeholder="" >
                    </div>
                    </div>
    </div>
</div>
<br>
<div class="row">
  <div class="form-inline">
    <div class="col-lg-3">
        <div class="input-group">
          <label class="form-check-label mr-1" for="nombre">Parentesco</label>
          <input type="text" class="form-control" placeholder="" >
        </div>
        </div>
        <div class="col-lg-3">
            <div class="input-group">
              <label for="nombre">Sexo: </label>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" name="sexo" id="hombre" class="form-check-input mr-1 ml-2">Hombre
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Mujer
                </label>
              </div>
            </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                  <label class="form-check-label mr-1" for="nombre">Edad</label>
                  <input type="text" class="form-control" placeholder="" >
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                      <label class="form-check-label mr-1" for="nombre">Telf. Ref.</label>
                      <input type="text" class="form-control" placeholder="" >
                    </div>
                    </div>
    </div>
</div>
<br>
<div class="row">
  <div class="form-inline">
    <div class="col-lg-12">
        <div class="input-group">
          <label class="form-check-label mr-1" for="nombre">Fecha de Nacimiento</label>
          <input type="text" class="form-control" placeholder="" >
        </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
  <div class="form-inline">
    <div class="col-lg-3">
        <div class="input-group">
          <label class="form-check-label mr-1" for="nombre">Gestion</label>
          <input type="text" class="form-control" placeholder="" >
        </div>
        </div>
        <div class="col-lg-3">
            <div class="input-group">
              <label class="form-check-label mr-1" for="nombre">Plan</label>
              <input type="text" class="form-control" placeholder="" >
            </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                  <label class="form-check-label mr-1" for="nombre">Forma de Pago</label>
                  <input type="text" class="form-control" placeholder="" >
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                      <label class="form-check-label mr-1" for="nombre">Descuento</label>
                      <input type="text" class="form-control" placeholder="" >
                    </div>
                    </div>

    </div>
</div>
<br>
<div class="row">
  <div class="form-inline">
    <div class="col-lg-12">
        <div class="input-group">
          <label class="form-check-label mr-1" for="nombre">Costo Total</label>
          <input type="text" class="form-control" placeholder="" >
        </div>
        </div>
    </div>
</div>
    		</div>
<br>
        <div class="row justify-content-center">
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </div>
        </div>

        <br>
<div class="container">
  <label class="form-check-label mr-1" for="nombre">Su codigo generado es el:</label>
</div>


    <!-- <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
</body>
</html>
