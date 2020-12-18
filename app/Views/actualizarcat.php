<?php 
    $idNombre = $datos[0]['id_categoria'];
    $categoria = $datos[0]['categoria']; 
    $descripcion = $datos[0]['descripcion'];
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
					Tabla Categorias
				</div>
				<div class="card-body">
					<h2 class="text-center">Actualizar categorias</h2>
					<hr>
					<form method="POST" action="<?php echo base_url().'/actualizarCategoria' ?>">
						<input type="text" id="idNombre" name="idNombre" hidden="idNombre" value="<?php echo $idNombre ?>">
						<label for="categoria">Categoria</label>
						<input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $categoria ?>">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion ?>"><br>
						<button class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	

</body>
</html>