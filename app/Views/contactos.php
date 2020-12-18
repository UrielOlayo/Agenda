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
	<?php
	$mysqli = new mysqli('localhost', 'root', '', 'agenda');
	?>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('/') ?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Categorias') ?>">Categoria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Contactos') ?>">Contactos</a>
					</li>
				</ul>
			</div>
		</nav>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="card-header">
					Tabla Contactos
				</div>
				<div class="card-body">
					<h2>Contactos</h2>
					<br>
					<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
						<span class="fa fa-address-book"></span> Agregar nuevo
					</button>
					<hr>
					<div class="table-responsive">
						<table class="table table-hover" id="tablaload">
							<thead>
								<td>Id</td>
								<td>Nombre</td>
								<td>Apellido Paterno</td>
								<td>Apellido Materno</td>
								<td>Telefono</td>
								<td>E-mail</td>
								<td>Categoria</td>
								<td>Editar</td>
								<td>Eliminar</td>
							</thead>
							<tbody>
								<?php foreach ($datos as $fila) : ?>
									<tr>

										<td><?php echo $fila->id_contacto ?></td>
										<td><?php echo $fila->nombre ?></td>
										<td><?php echo $fila->paterno ?></td>
										<td><?php echo $fila->materno ?></td>
										<td><?php echo $fila->telefono ?></td>
										<td><?php echo $fila->email ?></td>
										<td><?php echo $fila->categoria ?></td>
										<td>
											<a href="<?php echo base_url() . '/editarContacto/' . $fila->id_contacto ?>" class="btn btn-info btn-sm"><i class="fas fa-user-edit"></i></a>
										</td>
										<td>
											<a href="<?php echo base_url() . '/eliminarContacto/' . $fila->id_contacto ?>" class="btn btn-danger btn-sm"><i class="fas fa-user-times"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal agregar-->
	<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Agregar Contacto </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?php echo base_url() . '/crearContacto' ?>">
						<label>Categoria</label>
						<select name="id_categoria" id="id_categoria" class="form-control">
							<option disabled selected>--Selecciona--</option>
							<?php
							$query = $mysqli->query("SELECT id_categoria, Categoria FROM t_categorias");
							while ($fila = mysqli_fetch_array($query)) { ?>
								<option value="<?php echo $fila[0] ?>"><?php echo $fila[1] ?></option>
							<?php } ?>
						</select>
						<label> Nombre </label>
						<input type="text" name="nombre" id="nombre" class="form-control input-sm">
						<label> Apellido Paterno </label>
						<input type="text" name="paterno" id="paterno" class="form-control input-sm">
						<label> Apellido Materno </label>
						<input type="text" name="materno" id="materno" class="form-control input-sm">
						<label> Telefono </label>
						<input type="text" name="telefono" id="telefono" class="form-control input-sm">
						<label> E-mail </label>
						<input type="text" name="email" id="email" class="form-control input-sm">

						<hr>
						<button type="button" class="btn btn-danger" data-dismiss="modal">
							<span class="fas fa-times-circle"></span> Cerrar
						</button>
						<button class="btn btn-primary"><span class="fas fa-plus-circle"></span> Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#tablaload').DataTable();
		});
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		let mensaje = '<?php echo $mensaje ?>';

		if (mensaje == '1') {
			swal('', 'Agregado con exito', 'success');

		} else if (mensaje == '0') {
			swal('', 'Fallo al agregar', 'error');
		} else if (mensaje == '2') {
			swal('', 'Actualizado con exito', 'success');
		} else if (mensaje == '3') {
			swal('', 'Fallo al actualizar', 'error');
		} else if (mensaje == '4') {
			swal('', 'Eliminado con exito', 'success');
		} else if (mensaje == '5') {
			swal('', 'Fallo al eliminar', 'error');
		}
	</script>
</body>

</html>