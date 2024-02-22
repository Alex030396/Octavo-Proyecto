<?php include 'includes/header.php';

$cliente = [];
$clientes = [
    'nombre' => 'Alex',
    'saldo' => 200
];
$cliente1 = array();
$cliente2 = array('Alex', 'John', 'Luis');
//Empty - Revisa si un arreglo esta vacio.
echo '<pre>';
var_dump( empty($cliente));  //Verdadero
var_dump( empty($cliente1)); //Falso
var_dump( empty($cliente2)); //Falso
echo '<pre/>';
// Isset -Revisa si un arregloesta creado o una propiedad esta definida.
echo '<pre>';
var_dump( isset($cliente)); //Verdadero
var_dump( isset($cliente1)); //Verdadero
var_dump( isset($cliente2)); //Verdadero
var_dump( isset($cliente3)); //Falso
echo '<pre/>';
// Isset -Permite revisar si una propiedad de un arrglo asociativa, existe.
echo '<pre>';
var_dump( isset($clientes['nombre'])); //Verdadero
var_dump( isset($clientes['codigo'])); //Falso
var_dump( isset($clientes['saldo'])); //Verdadero
echo '<pre/>';

include 'includes/footer.php';