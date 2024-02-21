<?php include 'includes/header.php';

$nombre = "juan"; //Son variables que si se permiten.
$_nombre = "juan";
echo $nombre;
var_dump($nombre);
define('constante', "este es el valor de la constante"); //Es oata crear una constante.
echo constante;
const constante2 = "Hola";

echo constante2;
$nombreCliente = "Alex";  //Son varibles usables
$nombre_cliente = "Alex"; //La mas usada en php es esta.

include 'includes/footer.php';