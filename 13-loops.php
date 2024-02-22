<?php include 'includes/header.php';

//While
$i = 0; //Inicializador
while ($i < 10) {
    echo $i . "<br>";
    $i++; //incremento.
}

// Do while
echo "<br>";
$i = 0; //Inicializador
do {
    echo $i. "<br>";
    $i++; //incremento.
} while ($i < 10);
//for loop
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    echo $i. "<br>"; 
}

/***    
 * 3 imprimir fizz
 * 5 imprimir buzz
 * 3 y 5 imprimir FIZZ BUZZ
 */
echo "<br>";
for ($i = 1; $i < 20; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo $i . " -Fizz Buzz <br>";
    }
    elseif($i % 3 === 0) {
        echo $i . " -Fizz <br>";
    }
    elseif($i % 5 === 0) {
        echo $i . " -Buzz <br>";
    }
    else {
        echo $i. "<br>";
    }
}
// For each
$clientes = array('Pedro', 'Juan', 'Karen');
foreach($clientes as $cliente) {
    echo $cliente. "<br>";
}
for($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i]. "<br>";
}
$cliete = [
    'nombre' => 'ALEX',
    'Saldo' => 200,
    'tipo' => 'Premium'
]; 
foreach($cliete as $key => $valor) {
    echo $key . " - " . $valor . "<br>";
}

include 'includes/footer.php';