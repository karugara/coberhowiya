<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}

$consulta = $conexion -> prepare("
	SELECT * FROM pacientes");

$consulta ->execute();
$consulta = $consulta ->fetchAll();
if(!$consulta){
	$mensaje .= 'NO HAY PACIENTES PARA MOSTRAR';
}
?>
<?php include 'plantillas/header.php'; ?>
	</div>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>Historia Clinica</h2>
					</div>


          <body>
            <div class="container">
              <div class="row mt-3">
                <div class="col">
                  <form action="">
                      <div class="form-group">
                        <div class="alert alert-primary" role="alert">
                          A. DATOS ADMINISTRATIVOS
                        </div>
                        <div class="alert alert-primary" role="alert">
                          <a href="#" class="alert-link">RESPONSABLE DE FAMILIA</a>
                        </div>
                        <label for="nombre">Apellido Paterno:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="escriba aqui" id="nombre">
                        <label for="nombre">Apellido Materno:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="escriba aqui" id="nombre">
                        <label for="nombre">Nombres:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="escriba aqui" id="nombre">
                        <div class="form-group">
                          <div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 ">
                            <label for="datepicker" class="control-label form-inline">Fecha de nacimiento:</label>
                              <div class="controls">
                                <div class="input-group date">
                                  <input type="text" id="fecha" class="tuiker form-control">
                                  <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-inline">
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
                        <br>
                          <div class="form-inline ">
                        <label class="form-check-label mr-3" for="nombre">Ocupacion:</label>
                        <label for="nombre">Productivas:</label>
                        <input type="text" class="form-control mr-3 ml-2" name="nombre"  id="nombre">
                        <label for="nombre">Reproductivas:</label>
                        <input type="text" class="form-control mr-3 ml-2" name="nombre"  id="nombre">
                        <label for="nombre">Gestion Comunitaria:</label>
                        <input type="text" class="form-control mr-3 ml-2" name="nombre"  id="nombre">
                            </div>
                      </div>


                      <div class="form-inline">
                        <h5>Establecimiento</h5>
                        <label for="nombre">Direcccion<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                        <label for="nombre">Comunidad<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                        <h5>Red de Salud</h5>
                        <label for="nombre">Municipio<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                        <label for="nombre">Provincia<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                        <input type="text" class="form-control" name="nombre" placeholder="" id="nombre">
                      </div>

                      <div class="form-group">
                        <div class="alert alert-primary" role="alert">
                          B. IDENTIFICACION DEL PACIENTE
                        </div>
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre">
                      </div>

                      <div class="form-inline">
                          <label for="nombre">Apellido Paterno<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                          <label for="nombre">Apellido Materno<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                          <label for="nombre">Nombres<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 ">
                          <label for="datepicker" class="control-label form-inline">Fecha de nacimiento:</label>
                            <div class="controls">
                              <div class="input-group date">
                                <input type="text" id="fecha" class="tuiker form-control">
                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="form-inline">
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

                      <label for="nombre">Procedencia<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 ">
                          <label for="datepicker" class="control-label form-inline">Fecha de ingreso:</label>
                            <div class="controls">
                              <div class="input-group date">
                                <input type="text" id="fecha" class="tuiker form-control">
                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="form-inline">
                          <label for="nombre">Idioma Hablado<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                          <label for="nombre">Idioma Materno<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                          <label for="nombre">Auto pertenencia cultural:<input type="text" class="form-control ml-3" name="nombre" placeholder="" id="nombre"></label>
                      </div>

                      <div class="form-inline">
                        <label for="nombre">Quien (s) decidieron para que acuda al servicio de salud? </label>
                        <div class="form-check">
                          <label class="form-check-label">
                          <input type="checkbox" name="sexo" id="hombre" class="form-check-input mr-1 ml-2">Pareja
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                          <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Hijo/a (s)
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                          <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Otro familiar
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                          <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Usted mismo
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                          <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Otros
                          </label>
                        </div>
                        <div class="form-group">

                          <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                        </div>
                      </div>

                        <div class="form-inline">
                          <label for="nombre">Estado civil </label>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="hombre" class="form-check-input mr-1 ml-2">Soltero(a)
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Conviviente
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Casado(a)
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Viudo(a)
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Divorciado(a)
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Separado(a)
                            </label>
                          </div>
                        </div>
                        <br>
                        <div class="form-inline">
                          <label for="nombre">Escolaridad</label>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="hombre" class="form-check-input mr-1 ml-2">Sin Instruccion
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Basico
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Intermedio
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Medio o mas
                            </label>
                          </div>
                        </div>
                        <div class="form-inline">
                          <label for="nombre">Grupo Sanguineo</label>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="hombre" class="form-check-input mr-1 ml-2">Factor RH
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">Otros
                            </label>
                          </div>
                          <div class="form-group">

                            <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                          </div>
                        </div>



                      <div class="form-group row">
                        <div class="col-4">
                          <div class="alert alert-primary" role="alert">
                            C. ANTECEDENTES PEDIATRICOS
                          </div>
                          <label for="nombre">Nombre</label>
                          <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre">
                          <div class="alert alert-primary" role="alert">
                            D. VACUNAS
                          </div>
                          <label for="nombre">Nombre</label>
                          <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre">
                        </div>


                        <div class="col-8">

                          <div class="alert alert-primary" role="alert">
                            E. ANTECEDENTES GINECO-OBSTETRICOS
                          </div>

                          <div class="row">
                                <div class="form-inline">

                          <div class="col-4">
                            <div class="form-inline">
                              <label for="nombre">EMBARAZOS</label>
                              <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" name="sexo" id="hombre" class="form-check-input mr-1 ml-2">G
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">P
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">A
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" name="sexo" id="mujer" class="form-check-input mr-1 ml-2">C
                                </label>
                              </div>
                            </div>
                          </div>
                          </div>

                          <div class="col-2">
                            <h6>PAP</h6>
                            <div class="form-inline">
                            <div class="form-group">
                              <div class="col-sm-3 col-md-3 col-lg-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 ">
                                <label for="datepicker" class="control-label form-inline">Fecha</label>
                                  <div class="controls">
                                    <div class="input-group date">
                                      <input type="text" id="fecha" class="tuiker form-control">
                                      <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <label for="nombre">Resultado</label>
                            <input type="text" class="form-control" name="nombre" placeholder="" id="nombre">
                                </div>
                          </div>
                          <div class="col-2">
                            <h6>Anticoncepcion</h6>
                            <div class="form-inline">
                            <div class="form-group">
                              <div class="col-sm-3 col-md-3 col-lg-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                <label for="datepicker" class="control-label form-inline">Inicio</label>
                                  <div class="controls">
                                    <div class="input-group date">
                                      <input type="text" id="fecha" class="tuiker form-control">
                                      <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <label for="nombre">Metodo</label>
                            <input type="text" class="form-control" name="nombre" placeholder="" id="nombre">
                                </div>
                          </div>
                          </div>
                        </div>

                      </div>

                      <hr>
                    <div class="row justify-content-center">
                    <div class="col-4">
                      <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </div>
                    </div>

                  </form>

                </div>
              </div>
            </div>






        </article>
        </section>
        <?php include 'plantillas/footer.php'; ?>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script>
          $('.tuiker').datepicker({
            dateFormat: "dd/mm/yy",
            firstDay: 1,
            dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            onSelect: function(dateText){
              $('#fecha').val(dateText);
            }
          });
        </script>
        </body>
        </html>
