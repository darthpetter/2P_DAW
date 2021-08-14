<?php
$hostname= '127.0.0.1';
$user    =  'petter';
$pwd     =  'KRSN98*petter*';
$datebase = 'agencia';

$connexion = mysqli_connect($hostname , $user, $pwd, $datebase);
if (!$connexion)
    die("Falló la conexión<br>" . mysqli_connect_error());
?>
