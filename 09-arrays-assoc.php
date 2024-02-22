<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Alex',
    'Saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente['nombre']);
echo "<pre/>";
echo $cliente['nombre'];
echo "<pre/>";
echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 1234567890;
echo "<pre>";
var_dump($cliente);
echo "<pre/>";

include 'includes/footer.php';