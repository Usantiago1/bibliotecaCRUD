<?php
require_once 'selectLibros.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/DiseñoInicio.css">
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Biblioteca vitual | Inicio</title>
</head>

<body>





    <table class="table alingn-middle table-hover">
        <thead >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre del libro</th>
                <th scope="col">Categoria del Libro</th>
                <th scope="col">Editorial</th>
                <th scope="col">Autor</th>
                <th scope="col">Acción</th>                
            </tr>
        </thead> 
            <tbody>
                <?php
                foreach($query as $row){?>
                <tr>
                    <td scope="row"><?php echo $row->id_libro;?></td> 
                    <td ><?php echo $row->nombre_libro;?></td> 
                    <td ><?php echo $row->categoria_libro;?></td> 
                    <td ><?php echo $row->editorial;?></td>
                    <td><?php echo $row->autor;?></td>
                    <td>
                        <button  class="btn btn-outline-success"><a href="editarDatos.php?id_libro=<?php echo $row->id_libro;?>">Editar</a></button>
                        <button class="btn btn-outline-danger"><a href="eliminarDatos.php?id_libro=<?php echo $row->id_libro;?>">Eliminar</a></button> 
                </td> 
                </tr>
            </tbody>
            <?php

                }
            ?>
                
      </table>

      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>


</html>