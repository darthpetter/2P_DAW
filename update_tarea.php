<?php
    include('base_datos.php');
    $query="UPDATE tareas SET titulo='$_POST[titulo]',descripcion='$_POST[descripcion]'  WHERE ID='$_POST[ID]';";
    echo $query;
    $result=mysqli_query($connexion,$query);
    if($result)
        echo "bien";
    else
       echo "mal";
    header('Location: '.'index.php');
?>