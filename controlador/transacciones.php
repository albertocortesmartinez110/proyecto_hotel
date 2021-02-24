<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

include_once("../modelo/objeto_reservas.php");
include_once("../modelo/objeto_clientes.php");
include_once("../modelo/manejo_objetos.php");

////-------------------------  consultar reservas----------------////

if (isset($_POST['btn_consultar_res'])){
try{

$manejo_reserva = new manejo_objetos();

$reserva = new objeto_reserva();

$reserva->set_reserva_id(htmlentities(addslashes($_POST["reserva_id"]),ENT_QUOTES));
$reserva->set_cliente_id(htmlentities(addslashes($_POST["cliente_id"]),ENT_QUOTES));
$reserva->set_habitacion_id(htmlentities(addslashes($_POST["habitacion_id"]),ENT_QUOTES));
$reserva->set_fecha_ingreso($_POST['fecha_ingreso']);
$reserva->set_fecha_salida($_POST['fecha_salida']);
$reserva->set_valor(htmlentities(addslashes($_POST["valor"]),ENT_QUOTES));
$reserva->set_estado(htmlentities(addslashes($_POST["estado"]),ENT_QUOTES));
$reserva->set_observacion(htmlentities(addslashes($_POST["observacion"]),ENT_QUOTES));

$arreglo=$manejo_reserva->get_reservas($reserva);

include_once("../vista/vista_reservas.php");

}
catch(Exception $e){
die("Error: " . $e->getMessage());
}

}




if(isset($_POST['btn_reservar'])){
try{

//-----------------------------------insertar reserva------------------///

$manejo_reserva = new manejo_objetos();

$reserva = new objeto_reserva();

$reserva->set_cliente_id(htmlentities(addslashes($_POST["cliente_id"]),ENT_QUOTES));
$reserva->set_habitacion_id(htmlentities(addslashes($_POST["habitacion_id"]),ENT_QUOTES));
$reserva->set_fecha_ingreso($_POST['fecha_ingreso']);
$reserva->set_fecha_salida($_POST['fecha_salida']);
$reserva->set_valor($manejo_reserva->calcular_precio_reserva($_POST['fecha_ingreso'] , $_POST['fecha_salida'],$_POST['valor']));
$reserva->set_estado(htmlentities(addslashes("Reservada"),ENT_QUOTES));
$reserva->set_observacion(htmlentities(addslashes($_POST["observacion"]),ENT_QUOTES));

$id = $manejo_reserva->set_reservas($reserva);

$reser = $manejo_reserva->traer_reserva_guardada($id);

include_once("../vista/vista_confirmacion.php");


//-----------------------------------insertar cliente------------------///




$manejo_cliente = new manejo_objetos();

$cliente = new objeto_cliente();

$cliente->set_cliente_id(htmlentities(addslashes($_POST["cliente_id"]),ENT_QUOTES));
$cliente->set_nombre(htmlentities(addslashes($_POST["nombre_cl"]),ENT_QUOTES));
$cliente->set_celular(htmlentities(addslashes($_POST["celular_cl"]),ENT_QUOTES));
$cliente->set_pais(htmlentities(addslashes($_POST["pais_cl"]),ENT_QUOTES));
$cliente->set_correo(htmlentities(addslashes($_POST["correo_cl"]),ENT_QUOTES));

$manejo_cliente->set_clientes($cliente);

}catch(Exception $e){


}
}
////consultar_habitaciones disponibles-------------////

if (isset($_POST['btn_consultar_hab'])){
try{

$manejo_habitaciones = new manejo_objetos();
$fecha_in=$_POST['fecha_ingreso'];
$fecha_sal=$_POST['fecha_salida'];
$cantidad=$_POST['cantidad'];

$arreglo_habitaciones=$manejo_habitaciones->get_habitaciones($fecha_in, $fecha_sal, $cantidad);

include_once("../vista/vista_habitaciones_disponibles.php");


}
catch(Exception $e){
die("Error: " . $e->getMessage());
}

}

////----actualizar reservas-------------------------////

if(isset($_POST['btn_actualizar'])){

$reserva = new objeto_reserva();

$manejo_reserva = new manejo_objetos();


$reserva->set_reserva_id($_POST['reserva_id']);
$reserva->set_estado($_POST['estado']);
$reserva->set_observacion($_POST['observacion']);

$resultado= $manejo_reserva->actualizar_reservas($reserva);

?>
<script>
alert("Su reserva fue actualizada con exito");
</script>
<?php
include_once("C:/wamp64/www/curso_php/proyecto hotel/vista/vista_principal.php");
}

?>
</body>
</html>
