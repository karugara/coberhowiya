<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}

$consulta = $conexion -> prepare("
	SELECT * FROM usuarios limit 5");

$consulta ->execute();
$consulta = $consulta ->fetchAll();
if(!$consulta){
	$mensaje .= 'NO HAY USUARIOS PARA MOSTRAR';
}
?>
<?php include 'plantillas/header.php'; ?>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>DATOS DE AFILIACION</h2>
						<h4>Contratante</h4>
					</div>
					<!-- <a class="agregar" href="registrarusuarios.php">Agregar Usuarios</a>
						<table class="tabla">

						  <tr>
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
              <th>Usuario</th>
							<th>Rol</th>
              <th colspan="2">Opciones</th>
						  </tr>
						<?php foreach ($consulta as $Sql): ?>
						<tr>
							<?php echo "<td>". $Sql['nombres']. "</td>"; ?>
                            <?php echo "<td>". $Sql['apellidos']. "</td>"; ?>
                            <?php echo "<td>". $Sql['usuario']. "</td>"; ?>
                            <?php echo "<td>". $Sql['Roll']. "</td>"; ?>
                            <?php echo "<td class='centrar'>"."<a href='actualizarusuario.php?id=".$Sql['id']."' class='editar'>Editar</a>". "</td>"; ?>
						  <?php echo "<td class='centrar'>"."<a href='eliminar_usuario.php?id=".$Sql['id']."' class='eliminar'>Eliminar</a>". "</td>"; ?>
						</tr>
						<?php endforeach; ?>

					</table> -->

							<?php  if(!empty($mensaje)): ?>
							  <ul>
								  <?php echo $mensaje; ?>
							  </ul>
							<?php  endif; ?>
							<?php include 'usuarios_vista2.php'; ?>
				</article>

	</section>


<?php include 'plantillas/footer.php'; ?>


		<script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</body>
</html>
