<?php

include 'php/conexion.php';

$id = $_GET['id_libro'];

$eliminar = $bd->prepare("DELETE FROM libros WHERE id_libro = ?;");
$resultado = $eliminar->execute([$id]);


if($resultado){
    echo "<script> alert('Datos Eliminados Correctamente');
    location.href = '../html/crearCuenta.html'
    </script>";

}else{
    echo "<script> alert('Intentalo de nuevo')</script>";
}