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

		<div class="row d-flex justify-content-center">
			<div class="col-sm-8">
				<div class="card-header">
					Tabla Categorias
				</div>
				<div class="card-body">
					<h2>Categorias</h2>
					<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
						<span class="far fa-folder-open"></span> Agregar nuevo
					</button>
					<hr>
					<div class="table-responsive">
						<table class="table table-hover" id="tablaload">
							<thead>
								<tr>
									<td>Categoria</td>
									<td>Descripción</td>
									<td>Editar</td>
									<td>Eliminar</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($datos as $fila) : ?>
									<tr>

										<td><?php echo $fila->categoria ?></td>
										<td><?php echo $fila->descripcion ?></td>
										<td>
											<a href="<?php echo base_url() . '/editarCategoria/' . $fila->id_categoria ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
										</td>
										<td>
											<a href="<?php echo base_url() . '/eliminarCategoria/' . $fila->id_categoria ?>" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i></a>
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

	<!-- Modal -->
	<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Categorias </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?php echo base_url() . '/crearCategoria' ?>">
						<label> Categoria </label>
						<input type="text" name="categoria" id="categoria" class="form-control input-sm">
						<label> Descripcion </label>
						<input type="text" name="descripcion" id="descripcion" class="form-control input-sm">
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