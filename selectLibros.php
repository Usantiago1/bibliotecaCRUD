<?php

require 'php/conexion.php';


$consultar = $bd->query("SELECT * FROM libros");
$query = $consultar->fetchAll(PDO::FETCH_OBJ);