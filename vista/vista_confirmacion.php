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
    <a class="nav-link" href="/curso_php/proyecto hotel/vista/vista_principal.php">Inicio</a>
    </li>
	<li class="nav-item dropdown">
    <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Habitaciones</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_habitaciondoble.php">2 personas</a>
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_habitaciontriple.php">3 personas</a>
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_habitacioncuatropersonas.php">4 personas</a>
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_habitacioncincopersonas.php">5 personas</a>
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_suite.php">Suite</a>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/curso_php/proyecto hotel/vista/vista_principal.php#restaurante">Restaurante & bar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/curso_php/proyecto hotel/vista/vista_principal.php#servicios">Servicios</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/curso_php/proyecto hotel/vista/galeria.php">Galeria</a>
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

<section class="habitaciones_disponibles">
<form method="post" action="">
<div class="tabla_habitaciones_disponibles">
<div class="row">
<div class="col-sm-1"><p>reserva id</p></div>
<div class="col-sm-2"><p>cliente id</p></div>
<div class="col-sm-1"><p>habitacion id</p></div>
<div class="col-sm-2"><p>fecha ingreso</p></div>
<div class="col-sm-2"><p>fecha salida</p></div>
<div class="col-sm-1"><p>valor</p></div>
<div class="col-sm-1"><p>estado</p></div>
<div class="col-sm-2"><p>observacion</p></div>
</div>
<?php

if(empty ($reser)){

echo "no hay nada";
} else {


foreach ($reser as $reserva){
?>
  <div class="row">
  <div class="col-sm-1"><p><?php echo $reserva->get_reserva_id();?></p></div>
  <div class="col-sm-2"><p><?php echo $reserva->get_cliente_id();?></p></div>
    <div class="col-sm-1"><p><?php echo $reserva->get_habitacion_id();?></p></div>
      <div class="col-sm-2"><p><?php echo $reserva->get_fecha_ingreso();?></p></div>
        <div class="col-sm-2"><p><?php echo $reserva->get_fecha_salida();?></p></div>
          <div class="col-sm-1"><p><?php echo $reserva->get_valor();?></p></div>
            <div class="col-sm-1"><p><?php echo $reserva->get_estado();?></p></div>
                <div class="col-sm-2"><p><?php echo $reserva->get_observacion();?></p></div>
              </div>
<?php
}
}
?>
</div>
</form>
</section>

<script>
alert("Su reserva ha sido guardada con exito con los siguientes datos");

</script>
</body>
</html>
