<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo.
$carrito = ['Tablet', 'Computadora', 'Television'];
var_dump (in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));
//Ordenador elementos de un arreglo.
$nuemro = array(1,3,4,5,1,2);
sort($nuemro); //De menor a mayor
rsort($nuemro); //De mayor a menor
echo "<pre>";
var_dump($nuemro);
echo "<pre/>";
//Ordenar arreglo asociativo.
$cliente = array(
    'Saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Alex'
);

asort($cliente);  //Ordena por valores (orden alfabetico)
arsort($cliente);  //Ordena por valores (orden alfabetico reversa Z a A)
ksort($cliente);  //Ordena por llaves (orden alfabetico)
krsort($cliente);  //Ordena por llaves (orden alfabetico reversa Z a A)
echo "<pre>";
var_dump($cliente);
echo "<pre/>";

include 'includes/footer.php';