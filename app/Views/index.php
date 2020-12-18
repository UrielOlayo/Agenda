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
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
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
		<br><br>
		<h1 class="h1 text-center">Agenda Personal</h1>
		<br><br>
		<div class="row">
		<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<div class="container">
					<img src="<?php echo base_url('perfil.png') ?>" alt="" width="300" height="300" class="img-fluid">
				</div>
			</div>
			<div class="col-sm-6 form-group">
				<h2 class="text-center">Datos Personales</h2>
				<label>Nombre:</label>
				<p class="mb-0">Uriel Olayo Ramirez</p>
				<br>
				<label>Correo:</label>
				<p class="mb-0">urielolayo@gmail.com</p>
			</div>
		</div>
	</div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		
			swal('Bienvenido', 'Agenda Personal', 'info');
	
	</script>
</html>