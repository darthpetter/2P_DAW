<?php
$hostname= 'localhost';
$user    =  'root';
$pwd     =  '';
$datebase = 'agenda_2021ci_65';

$connexion = mysqli_connect($hostname , $user, $pwd, $datebase);
if (!$connexion)
    die("Fallo la coneccion" . mysqli_connect_error());
else
    echo "Conexion exitosa =) ";   
?>