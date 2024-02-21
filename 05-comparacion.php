<?php include 'includes/header.php';

$numero1 = 10;
$numero2 = 20;
$numero3 = 30;
$numero4 = "30";
var_dump($numero1 > $numero2);  //Son para mayor que y resultado es Boolean.
echo "<br>";
var_dump($numero1 < $numero2);  //Son para menor que y resultado es Boolean.
echo "<br>";
var_dump($numero1 <= $numero2); //Son para mayor o igual que y resultado es Boolean.
echo "<br>";
var_dump($numero1 >= $numero2); //Son para menor o igual que y resultado es Boolean.
echo "<br>";
var_dump($numero3 == $numero4);  //Son para igualdad y resultado es Boolean.
echo "<br>";
var_dump($numero3 === $numero4); //Son para igualdad, pero tienen que ser del mismo tipo, string con string y resultado es Boolean.
echo "<br>";
var_dump($numero1 <=> $numero2);  //-1 si es menor que.
echo "<br>";
var_dump($numero2 <=> $numero2);  //0 si son iguales
echo "<br>";
var_dump($numero2 <=> $numero1);  //1 si es mayor que
echo "<br>";

include 'includes/footer.php';