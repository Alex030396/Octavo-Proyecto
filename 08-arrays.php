<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'telefono'];
//Util para ver los contenidos del array.
echo "<pre>";
var_dump($carrito);
echo "<pre/>";
//Acceder a un elemento del array.
var_dump($carrito[1]);
echo $carrito[1];
//Añade un elemento en el indice 3 del array.
$carrito[3] = "nuevo de paquete";
//añadir un elemento al final del array.
array_push($carrito, 'Audifonos');
//añadir un elemento al incio del array.
array_unshift($carrito, 'Reloj');
echo "<pre>";
var_dump($carrito);
echo "<pre/>";

$cliente = array('cliente1', 'cliente2', 'cliente3');
echo "<pre>";
var_dump($cliente);
echo "<pre/>";


include 'includes/footer.php';