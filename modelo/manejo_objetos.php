<?php
require_once('conectar.php');
require_once('objeto_reservas.php');
require_once('objeto_clientes.php');
require_once('objeto_habitaciones.php');

class manejo_objetos{

////////----------- funcion que devuelve un arreglo con objetos reserva segun las condiciones que utilizo el usuario en el formulario-------//////////

	public function get_reservas(objeto_reserva $reserva){
	try{
	$array_reservas = array();
	$contador =0;
	$resultado = new Conectar();
	$query="select * from reservas where reserva_id=:re_id or cliente_id=:cl_id or habitacion_id=:ha_id or fecha_ingreso=:fe_in or fecha_salida=:fe_sa or valor=:va or estado=:es or observacion=:ob";
	$consulta=$resultado->conexion()->prepare($query);
	$consulta->execute(array(":re_id"=>$reserva->get_reserva_id(),":cl_id"=>$reserva->get_cliente_id(),":ha_id"=>$reserva->get_habitacion_id(), ":fe_in"=>$reserva->get_fecha_ingreso(), ":fe_sa"=>$reserva->get_fecha_salida(),":va"=>$reserva->get_valor(),":es"=>$reserva->get_estado(),":ob"=>$reserva->get_observacion()));

	while($registro=$consulta->fetch(PDO::FETCH_ASSOC)){

	$reserva = new objeto_reserva();

	$reserva->set_reserva_id($registro['reserva_id']);
	$reserva->set_cliente_id($registro['cliente_id']);
	$reserva->set_habitacion_id($registro['habitacion_id']);
	$reserva->set_fecha_ingreso($registro['fecha_ingreso']);
	$reserva->set_fecha_salida($registro['fecha_salida']);
	$reserva->set_valor($registro['valor']);
	$reserva->set_estado($registro['estado']);
	$reserva->set_observacion($registro['observacion']);

	$array_reservas[$contador]=$reserva;

	$contador++;

	}

	return $array_reservas;
	}catch(Exception $e){

	die("error " .$e->getMessage());
	}
	}
//////-------------------------funcion que permite inserar una reserva en la base de datos y devuelve el id de la reserva guardada---------///////




	public function set_reservas(objeto_reserva $reserva){

	$consulta_insertar= new conectar();
  $consulta_insertar = $consulta_insertar->conexion();
	$query=	"insert into reservas (cliente_id, habitacion_id, fecha_ingreso, fecha_salida, valor, estado, observacion) values(:cl_id, :ha_id, :fe_in, :fe_sa, :va, :es, :ob)";

	$resultado=$consulta_insertar->prepare($query);
  $resultado->execute(array(":cl_id"=>$reserva->get_cliente_id(),":ha_id"=>$reserva->get_habitacion_id(), ":fe_in"=>$reserva->get_fecha_ingreso(), ":fe_sa"=>$reserva->get_fecha_salida(),":va"=>$reserva->get_valor(),":es"=>$reserva->get_estado(),":ob"=>$reserva->get_observacion()));

	$id = $consulta_insertar->lastInsertId();

	return $id;
	}

////---------------------funcion que permite insertar un cliente en la base de datos------------------/////




	public function set_clientes(objeto_cliente $cliente){
	$consulta_insertar = new Conectar();
	$consulta_insertar = $consulta_insertar->conexion();
	$query="insert into clientes (cliente_id, nombre, celular, pais, correo) values (:cl_id, :nom, :cel, :pais, :corr)";

	$resultado=$consulta_insertar->prepare($query);

	$resultado->execute(array(":cl_id"=>$cliente->get_cliente_id(),":nom"=>$cliente->get_nombre(),":cel"=>$cliente->get_celular(),":pais"=>$cliente->get_pais(),":corr"=>$cliente->get_correo()));


	}

//////------------------funcion que permite calcular el precio de la reserva, multiplica las noches que esten en el lapzo de la reserva por el valor de la noche-----------------------////

	public function calcular_precio_reserva ($check_in, $check_out, $valor_noche){

	$fecha_ingreso = new DateTime($check_in);
	$fecha_salida = new DateTime($check_out);
	$diferencia = $fecha_ingreso->diff($fecha_salida);
    $dias_diferencia = (int) $diferencia->format('%R%a');
    $valor_reserva=$valor_noche*$dias_diferencia;
	return $valor_reserva;
	}

/////------- fucnon que nos trae las habitaciones disponibles segun los criterios del cliente dependiendo las fechas que introduzca el cliente----------------/////


  public function get_habitaciones($fecha_in, $fecha_sal, $cantidad_personas){
	$resultado = new Conectar();
  $array_habitaciones = array();
	$contador=0;
  $query="select * from habitaciones where not exists (select distinct habitacion_id from reservas where ((fecha_ingreso between :fecha_in and :fecha_sal or fecha_salida between :fecha_in and :fecha_sal) and (estado <> :estado)) and (habitaciones.habitacion_id=reservas.habitacion_id)) and capacidad=:cap";
	$consulta=$resultado->conexion()->prepare($query);
	$consulta->execute(array(":fecha_in"=>$fecha_in,"fecha_sal"=>$fecha_sal,":cap"=>$cantidad_personas,":estado"=>'cancelada'));

	while($registro = $consulta->fetch(PDO::FETCH_ASSOC)){

	$habitacion = new objeto_habitacion;

	$habitacion->set_habitacion_id($registro['habitacion_id']);
	$habitacion->set_tipo($registro['tipo']);
	$habitacion->set_descripcion($registro['Descripcion']);
	$habitacion->set_capacidad($registro['capacidad']);
	$habitacion->set_valor($registro['valor']);

	$array_habitaciones[$contador]=$habitacion;

	$contador++;
	}

	return $array_habitaciones;
   }

//////------------------------- consultar la ultima transaccion--------------------///////

public function traer_reserva_guardada($id){

$pdo = new conectar();

$pdo = $pdo->conexion();

$array_reserva = array();

$contador=0;

$query="select * from reservas where reserva_id=:id_reserva";

$resultado=$pdo->prepare($query);

$resultado->execute(array(":id_reserva"=>$id));

while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

$reserva = new objeto_reserva();

$reserva->set_reserva_id($registro['reserva_id']);
$reserva->set_habitacion_id($registro['habitacion_id']);
$reserva->set_cliente_id($registro['cliente_id']);
$reserva->set_fecha_ingreso($registro['fecha_ingreso']);
$reserva->set_fecha_salida($registro['fecha_salida']);
$reserva->set_valor($registro['valor']);
$reserva->set_estado($registro['estado']);
$reserva->set_observacion($registro['observacion']);

$array_reserva[$contador] = $reserva;
$contador++;

}

return $array_reserva;

}

public function actualizar_reservas(objeto_reserva $reserva){

$pdo = new Conectar();

$pdo = $pdo->conexion();

$query="update reservas set estado=:estado, observacion=:observacion where reserva_id=:reserva_id";

$resultado = $pdo->prepare($query);

$resultado->execute(array(":estado"=>$reserva->get_estado(),":observacion"=>$reserva->get_observacion(),":reserva_id"=>$reserva->get_reserva_id()));


}




}



?>
