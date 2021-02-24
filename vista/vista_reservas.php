<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
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
<section class="tabla_consulta_reservas">
<div class="tabla_reservas">
<form action="../controlador/transacciones.php" method="post">
<div class="row">
<div class="col "><p>Id reserva</p></div>
<div class="col"><p>Id cliente</p></div>
<div class="col"><p>Id habitacion</p></div>
<div class="col"><p>fecha ingreso</p></div>
<div class="col"><p>fecha salida</p></div>
<div class="col"><p>valor</p></div>
<div class="col"><p>estado</p></div>
<div class="col"><p>observacion</p></div>
<div class="col"><p></p></div>
</div>
<div class="row">
<div class="col "><input type="number" name="reserva_id"></div>
<div class="col"><input type="number" name="cliente_id"></div>
<div class="col"><input type="number" name="habitacion_id"></div>
<div class="col"><input type="date" name="fecha_ingreso" value="2020-02-10"></div>
<div class="col"><input type="date" name="fecha_salida" value="2020-02-10"></div>
<div class="col"><input type="number" name="valor"></div>
<div class="col"><input type="text" name="estado"></div>
<div class="col"><input type="text" name="observacion" value="0"></div>
<div class="col"><input type="submit" value="consultar" name="btn_consultar_res" class="btn btn-outline-success"></div>
</div>
</form>
</div>
<?php
if(empty($arreglo)){
echo "No hay registros";
?>
</section>
<?php
}else{
?>
<div class="tabla_reservas tabla_resultado">
<div class="row rowtab">
<div class="col "><p>Id reserva</p></div>
<div class="col"><p>Id cliente</p></div>
<div class="col"><p>Id habitacion</p></div>
<div class="col"><p>fecha ingreso</p></div>
<div class="col"><p>fecha salida</p></div>
<div class="col"><p>valor</p></div>
<div class="col"><p>estado</p></div>
<div class="col"><p>observacion</p></div>
<div class="col"><p></p></div>

</div>
<?php
foreach($arreglo as $contenido){
?>
<div class="row rowtab">
<div class="col"><p><?php echo $contenido->get_reserva_id();?></p></div>
<div class="col"><p><?php echo $contenido->get_cliente_id();?></p></div>
<div class="col"><p><?php echo $contenido->get_habitacion_id();?></p></div>
<div class="col"><p><?php echo $contenido->get_fecha_ingreso();?></p></div>
<div class="col"><p><?php echo $contenido->get_fecha_salida();?></p></div>
<div class="col"><p><?php echo $contenido->get_valor();?></p></div>
<div class="col"><p><?php echo $contenido->get_estado();?></p></div>
<div class="col"><p><?php echo $contenido->get_observacion();?></p></div>
<div class="col colact"><a href="/curso_php/proyecto hotel/vista/vista_actualizar.php?
res_id=<?php echo $contenido->get_reserva_id();?>&
cl_id=<?php echo $contenido->get_cliente_id();?>&
hab_id=<?php echo $contenido->get_habitacion_id();?>&
fecha_entrada=<?php echo $contenido->get_fecha_ingreso();?>&
fecha_salida=<?php echo $contenido->get_fecha_salida();?>&
valor=<?php echo $contenido->get_valor();?>&
estado=<?php echo $contenido->get_estado();?>&
observacion=<?php echo $contenido->get_observacion();?>
">
<input type="submit" value="actualizar" name="btn_cultar_res" class="btn btn-outline-success"></a></div>

</div>
<?php

}?>
</div>
<?php
}
?>

</div>
</section>



</body>
</html>
