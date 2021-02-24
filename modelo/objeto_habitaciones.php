<?php
class objeto_habitacion {
	
	
//--------- propiedades objeto habitacion----//
	
private $habitacion_id;
	
private $tipo;
	
private $descripcion;
	
private $capacidad;
	
private $valor;
	
//-------- metodos de acceso objeto habitacion------//
	
public function get_habitacion_id(){

	return $this->habitacion_id;
}	

public function set_habitacion_id($habitacion_id){
	
$this->habitacion_id=$habitacion_id;	

}	

public function get_tipo(){

	return $this->tipo;
}	

public function set_tipo($tipo){
	
$this->tipo=$tipo;	

}	

public function get_descripcion(){

	return $this->descripcion;
}	

public function set_descripcion($descripcion){
	
$this->descripcion=$descripcion;	

}	

public function get_capacidad(){

	return $this->capacidad;
}	

public function set_capacidad($capacidad){
	
$this->capacidad=$capacidad;	

}	

public function get_valor(){

	return $this->valor;
}	

public function set_valor($valor){
	
$this->valor=$valor;	

}	
	
}

?>