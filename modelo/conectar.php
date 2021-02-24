	<?php
  require("config_conexion.php");
	class conectar{

	public function conexion(){

	try{
	$conexion= new PDO('mysql:host='.DB_HOST.';port=3308; dbname='.DB_NOMBRE,DB_USUARIO,DB_CONTRA);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET UTF8");


	}catch(Exception $e){

	die("Error". $e->getMessage());
	echo "liena del error " . $e->getLine();
	}
	return $conexion;
	}

	}



	?>
