<?php 
$contrasena = "root";
$usuario = "root";
$nombre_bd = "bibliotecaVitual";


	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);

?>









