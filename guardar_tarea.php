<?php
    include('base_datos.php');

    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    $query="INSERT INTO tareas(titulo,descripcion) VALUES('$titulo','$descripcion');";

    $result=mysqli_query($connexion,$query);

    if(!$result){
        echo "Error al guardar";
    }else{
        header('Location: '.'index.php');
    }
?>