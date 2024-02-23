<?php 
declare(strict_types=1);   //Para que se subraye los errores que esten el codigo.
include 'includes/header.php';

// function sumar() {
//     echo 2 + 2;
// }
// sumar();
function sumar(int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 + $numero2;
    echo $numero1 - $numero2;
}
sumar(10, 20);
echo "<br>";
sumar(10,);
echo "<br>";
// sumar(10,'hola');
echo "<br>";
sumar(numero2: 10, numero1: 20);


include 'includes/footer.php';