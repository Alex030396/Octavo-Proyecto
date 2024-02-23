<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 200,
        'disponibles' => true
    ],
    [
        'nombre' => 'televisión 24"',
        'precio' => 300,
        'disponibles' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponibles' => false 
    ]
];
echo "<pre>";
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);  //Paar que los acentos los lea y los agregue al string. //Para transformar el arreglo a string.
$json_array = json_decode($json); //Como trasformar un string a un arreglo.
var_dump($json);  
var_dump($json_array);  
echo "</pre>";





include 'includes/footer.php';