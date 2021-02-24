<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
<title>Menu</title>
<link rel="stylesheet" href="../css/estilos.css">
<script src="js/jquerylibreria.js"></script>
<script src="js/jquery.js"></script>
<script src="../js/all.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/jquerylibreria.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<nav class="barra_nav">
<input type="checkbox" id="btn-menu" class="btn-menu">
  <label for="btn-menu"><i class="fas fa-bars"></i></label>
  <ul class="nav nav-pills">
    <li class="nav-item">
    <a class="nav-link" href="vista_principal.php">Inicio</a>
    </li>
	<li class="nav-item dropdown">
    <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Habitaciones</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="vista_habitaciondoble.php">2 personas</a>
      <a class="dropdown-item" href="vista_habitaciontriple.php">3 personas</a>
      <a class="dropdown-item" href="vista_habitacioncuatropersonas.php">4 personas</a>
      <a class="dropdown-item" href="vista_habitacioncincopersonas.php">5 personas</a>
      <a class="dropdown-item" href="vista_suite.php">Suite</a>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="vista_principal.php#restaurante">Restaurante & bar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="vista_principal.php#servicios">Servicios</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="galeria.php">Galeria</a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="/curso_php/proyecto hotel/vista/vista_reservas.php">Consultar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Reseña</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Contacto</a>
    </li>
	</ul>
</nav>
<section class="formulario reserva">
<form class="formulario" method="post" action="../controlador/transacciones.php">
<div class="contenedor">
<input type="hidden" name="habitacion_id" value="<?php echo $_GET["hab_id"];?>" >
<input type="hidden" name="observacion" value="" >
<input type="hidden" name="valor" value="<?php echo $_GET["hab_valor"];?>" >

<div class="row">
<div class="col"><p>Cedula</p></div>
<div class="col"><input type="text" class="form-control"  name="cliente_id" required></div>
</div>
<div class="row">
<div class="col"><p>Nombre</p></div>
<div class="col"><input type="text" class="form-control" name="nombre_cl" required></div>
</div>
<div class="row">
<div class="col"><p>Celular</p></div>
<div class="col"><input type="text" class="form-control" name="celular_cl" required></div>
</div>
<div class="row">
<div class="col"><p>Pais</p></div>
<div class="col"><input type="text" class="form-control" name="pais_cl" required></div>
</div>
<div class="row">
<div class="col"><p>Correo electronico</p></div>
<div class="col"><input type=email class="form-control" name="correo_cl" required></div>
</div>
<div class="row">
<div class="col"><p>Check-in</p></div>
<div class="col"><input type="date" class="form-control"  name="fecha_ingreso" value="<?php echo $_GET["fecha_entrada"];?>" required></div>
</div>
<div class="row">
<div class="col"><p>Check-out</p></div>
<div class="col"><input type="date" class="form-control"  name="fecha_salida" value="<?php echo $_GET["fecha_salida"];?>" required></div>
</div>
<div class="row">
<div class="col"><input type="submit" value="enviar" name="btn_reservar" class="btn btn-outline-success"></div>
</div>
</div>
</form>
</section>
</body>
</html>
