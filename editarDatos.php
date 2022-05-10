<?php

require 'php/conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$editorial = $_POST['editorial'];
$autor = $_POST['autor'];



$actualizar = $bd->prepare("UPDATE libros SET 
    nombre_libro = ?, 
    categoria_libro = ?, 
    editorial = ?,
    autor = ? 
    WHERE
    id_libro = ?;");

$query = $actualizar->execute([$nombre, $categoria, $editorial,$autor,$id]);
