<?php

class objeto_cliente{
	
//-------propiedades objeto cliente------//
	
private $cliente_id;
	
private $nombre;
	
private $celular;
	
private $pais;
	
private $correo;
	
public function get_cliente_id(){
	
return $this->cliente_id;	
}	
	
public function set_cliente_id($cliente_id){
	
$this->cliente_id=$cliente_id;	
}
	

public function get_nombre(){
	
return $this->nombre;	
}	
	
public function set_nombre($nombre){
	
$this->nombre=$nombre;	
}
	
public function get_celular(){
	
return $this->celular;	
}	
	
public function set_celular($celular){
	
$this->celular=$celular;	
}
		
public function get_pais(){
	
return $this->pais;	
}	
	
public function set_pais($pais){
	
$this->pais=$pais;	
}

public function get_correo(){
	
return $this->correo;	
}	
	
public function set_correo($correo){
	
$this->correo=$correo;	
}
		
}



?>