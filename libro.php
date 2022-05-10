<?php

include_once 'php/conexion.php';

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$editorial = $_POST['editorial'];
$autor = $_POST['autor'];

$insertar = $bd->prepare("INSERT INTO libros 
    (nombre_libro,
    categoria_libro,
    editorial,
    autor) 
    VALUES 
    (?, ?, ?, ?);");
$query = $insertar->execute([$nombre,$categoria,$editorial,$autor]);


if($query){
    echo "<script> alert('Datos Ingresados Correctamente');
    location.href = '../html/crearCuenta.html'
    </script>";

}else{
    echo "<script> alert('Intentalo de nuevo')</script>";
}

