<?php

include_once 'php/conexion.php';
$id = $_GET['id'];

$query = $bd->prepare("SELECT * FROM libros WHERE id_libro = ?;");
$query->execute([$id]);
$idLibro = $query->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crearCuenta.css" type="text/css">
    <title>Biblioteca virtual | Inicio</title>
</head>
<body> 



<div class="contenedor">
    <form name="form" action="editarDatos.php" method="POST" class="form">
        <div class="header">
            <h1 class="titulo">Editar Libro</h1>
        </div>

        <label for="nombre"  class="form-label">Id de libro:</label>
            <input name="id" value="<?php echo $idLibro->id;?>" type="text" name="nombre" id = "nombre" class="form-input" placeholder="Digita el ID del libro">

            <label for="nombre" class="form-label">Nombre del Libro:</label>
            <input value="<?php echo $idLibro->nombre_libro;?>" type="text" name="nombre" id = "nombre" class="form-input" placeholder="Ingrasa un libro">

            <label for="categoria" class="form-label">Categoria del Libro:</label>
            <input value="<?php echo $idLibro->categoria_libro;?>" type="text" name="categoria" id="categoria" class="form-input" placeholder="Ingresa una categoria">

            <label for="editorial" class="form-label">Editorial del libro:</label>
            <input value="<?php echo $idLibro->editorial;?>" type="text" name="editorial" id="editorial" class="form-input" placeholder="Ingresa una editorial">
            
            <label for="autor" class="form-label">Autor:</label>
            <input value="<?php echo $idLibro->autor;?>" type="text" name="autor" id="autor" class="form-input" placeholder="Ingresa un Autor">
            

            <button type="submit" class="btn-submit"><a type="submit" class="btn-submit" >Editar Datos</a></button>
    </form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../JavaScript/crearCuenta.js"></script>

</body>
</html>


