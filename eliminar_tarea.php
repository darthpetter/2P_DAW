<?php
    include('base_datos.php');
    $query="DELETE FROM tareas WHERE ID =$_GET[ID];";
    $result=mysqli_query($connexion,$query);
    header('Location: '.'index.php');
?>