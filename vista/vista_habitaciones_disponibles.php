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
<div class="col-sm-1"><p>habitacion</p></div>
<div class="col-sm-2"><p>tipo</p></div>
<div class="col-sm-4"><p>Descripcion</p></div>
<div class="col-sm-1"><p>capacidad</p></div>
<div class="col-sm-2"><p>valor</p></div>
<div class="col-sm-1"></div>
</div>
<?php

if(empty ($arreglo_habitaciones)){

echo "no hay nada";
} else {

foreach ($arreglo_habitaciones as $habitaciones){
?>
  <div class="row">
  <div class="col-sm-1"><p><?php echo $habitaciones->get_habitacion_id();?></p></div>
  <div class="col-sm-2"><p><?php echo $habitaciones->get_tipo();?></p></div>
  <div class="col-sm-4"><p><?php echo $habitaciones->get_descripcion();?></p></div>
  <div class="col-sm-1"><p><?php echo $habitaciones->get_capacidad();?></p></div>
  <div class="col-sm-2"><p><?php echo $habitaciones->get_valor();?></p></div>
  <div class="col-sm-1 colelim"><a href="/curso_php/proyecto hotel/vista/vista_reservar.php?
  hab_id=<?php echo $habitaciones->get_habitacion_id();?>&
  hab_valor=<?php echo $habitaciones->get_valor();?>&
  hab_capacidad=<?php echo $habitaciones->get_capacidad();?>&
  fecha_entrada=<?php echo $fecha_in;?>&
  fecha_salida=<?php echo $fecha_sal;?>
  ">
  <input type="button" value="seleccionar" name="btn_cltar_res" class="btn btn-outline-success"></a></div>
  </div>
<?php
}
}
?>
</div>
</form>
</section>
</body>
</html>
