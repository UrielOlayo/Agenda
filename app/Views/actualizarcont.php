<?php
$idNombre = $datos[0]['id_contacto'];
$nombre = $datos[0]['nombre'];
$paterno = $datos[0]['paterno'];
$materno = $datos[0]['materno'];
$telefono = $datos[0]['telefono'];
$email = $datos[0]['email'];
$id_categoria = $datos[0]['id_categoria'];
?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'agenda');
?>
<!DOCTYPE html>
<html>

<head>
	<title>AGENDA</title>
	<link rel="shortcut icon" href="<?php echo base_url('libro.ico')?>" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fontawesome/css/all.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>
</head>

<body>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-sm-8">
				<div class="card-header">
					Contactos
				</div>
				<div class="card-body">
					<h2 class="text-center">Actualizacion de Contactos</h2>
					<hr>
					<form method="POST" action="<?php echo base_url() . '/actualizarContacto' ?>">
						<label>Categoria</label>
						<select name="id_categoria" id="id_categoria" class="form-control">
							<?php
							$query = $mysqli->query("SELECT id_categoria, Categoria FROM t_categorias");
							while ($fila = mysqli_fetch_array($query)) { ?>
								<option value="<?php echo $fila[0] ?>"><?php echo $fila[1] ?></option>
							<?php } ?>
						</select>
						<input type="text" id="idNombre" name="idNombre" hidden="idNombre" value="<?php echo $idNombre ?>">
						<label> Nombre </label>
						<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">
						<label> Apellido Paterno </label>
						<input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo $paterno ?>">
						<label> Apellido Materno </label>
						<input type="text" name="materno" id="materno" class="form-control" value="<?php echo $materno ?>">
						<label> Telefono </label>
						<input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $telefono ?>">
						<label> E-mail </label>
						<input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">

						<button class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>