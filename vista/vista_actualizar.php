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
<input type="hidden"  value="<?php echo $_GET['res_id']; ?>"  name="reserva_id">
<div class="contenedor">
<div class="row">
<div class="col"><P>Reserva id</P></div>
<div class="col"><input type="number" class="form-control" value="<?php echo $_GET['res_id']; ?>"  required disabled ></div>
</div>
<div class="row">
<div class="col"><p>Cliente id</p></div>
<div class="col"><input type="text" class="form-control" value="<?php echo $_GET['cl_id']; ?>" name="cliente_id" required disabled></div>
</div>
<div class="row">
<div class="col"><p>Habitacion id</p></div>
<div class="col"><input type="text" class="form-control" value="<?php echo $_GET['hab_id']; ?>" name="habitacion_id" required disabled></div>
</div>
<div class="row">
<div class="col"><p>Check-in</p></div>
<div class="col"><input type="date" class="form-control"  value="<?php echo $_GET['fecha_entrada']; ?>" name="fecha_ingreso" required disabled></div>
</div>
<div class="row">
<div class="col"><p>Check-out</p></div>
<div class="col"><input type="date" class="form-control" value="<?php echo $_GET['fecha_salida']; ?>" name="fecha_salida" required disabled></div>
</div>
<div class="row">
<div class="col"><p>Valor</p></div>
<div class="col"><input type="text" class="form-control" value="<?php echo $_GET['valor']; ?>" name="valor" required disabled></div>
</div>
<div class="row">
<div class="col"><p>Estado</p></div>
<div class="col"><select  name="estado"  required class="form-control" value="<?php echo $_GET['estado']; ?>" >
	      <option></option>
		    <option>Reservada</option>
	      <option >Pagada</option>
	      <option >Cancelada</option>
        </select>
</div>
</div>
<div class="row">
<div class="col"><p>Observacion</p></div>
<div class="col"><input type="text" class="form-control" value="<?php echo $_GET['observacion']; ?>" name="observacion" required></div>
</div>

<div class="row">
<div class="col"><input type="submit" value="enviar" name="btn_actualizar" class="btn btn-outline-success"></div>
</div>
</div>
</form>
</section>
</body>
</html>
