<?php

class objeto_reserva {
	
//-------propiedades del objeto reserva-------	

private $reserva_id;
	
private $cliente_id;
	
private $habitacion_id;
	
private $fecha_ingreso;
	
private $fecha_salida;
	
private $valor;
	
private $estado;
	
private $observacion;
	
//-------metodos de acceso objeto reserva-----------------	
	
public function get_reserva_id(){

	return $this->reserva_id;
}	

public function set_reserva_id($reserva_id){
	
$this->reserva_id=$reserva_id;	
}
	
public function get_cliente_id(){

	return $this->cliente_id;
}	

public function set_cliente_id($cliente_id){
	
$this->cliente_id=$cliente_id;	
}
public function get_habitacion_id(){

	return $this->habitacion_id;
}	

public function set_habitacion_id($reserva_id){
	
$this->habitacion_id=$reserva_id;	
}
public function get_fecha_ingreso(){

	return $this->fecha_ingreso;
}	

public function set_fecha_ingreso($fecha_ingreso){
	
$this->fecha_ingreso=$fecha_ingreso;	
}
public function get_fecha_salida(){

	return $this->fecha_salida;
}	

public function set_fecha_salida($fecha_salida){
	
$this->fecha_salida=$fecha_salida;	
}

public function get_valor(){

	return $this->valor;
}	

public function set_valor($valor){
	
$this->valor=$valor;	
}
	
public function get_estado(){

	return $this->estado;
}	

public function set_estado($estado){
	
$this->estado=$estado;	
}
	
public function get_observacion(){

	return $this->observacion;
}	

public function set_observacion($observacion){
	
$this->observacion=$observacion;	
}
	
}
?>