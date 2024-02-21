<?php include 'includes/header.php';

$nombreCliente = "     Alex José";
//Conocer la extension de un string.
echo strlen($nombreCliente);  //Es para que muestre la cantidad de caracteres que tiene la variable
echo "<br>";
var_dump($nombreCliente);  
//Eliminar espacios en blnaco.
echo "<br>";
$texto = trim($nombreCliente);
echo $texto;
echo "<br>";
echo strlen($texto);
//Como convertirlo a mayusculas.
echo "<br>";
Echo strtoupper($nombreCliente);
//Como convertirlo a minusculas.
echo "<br>";
echo strtolower($nombreCliente);

echo "<br>";
$mail1 = "albrix@gmail.com";
$mail2 = "Albrix@Gmail.com";

var_dump($mail1 == $mail2);  //Es falso.
var_dump(strtolower($mail1) == strtolower($mail2));  //Es verdadero.
echo "<br>";
echo str_replace("Alex" ,"a",$nombreCliente);
//revisar si un string existe o no.

echo "<br>";
echo strpos($nombreCliente, "Luis");
$tipoClientes = "premiun";
echo "El cliente" . $nombreCliente . " es " . $tipoClientes;
echo "<br>";
echo "El cliente {$nombreCliente} es {$tipoClientes}";
 


include 'includes/footer.php';