<?php include 'includes/header.php';
$autenticado = false;
$dami = true;
if($autenticado || $dami) {   //|| Para cuando uno de los dos sea true y && para cuando los dos sean True obligatoriamentes.
    echo "Usuario autenticado correctamente";
} else{
    echo "Usuario no autenticado";
}
echo '<br/>';
// If anidados...
$cliente = [
    'nombre' => 'Alex',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
        ]
    ];
    if (!empty($cliente)) {
        echo "El arreglo de cliente no esta vacio";
        echo '<br/>';
        if($cliente['saldo'] > 0) {
            echo "El saldo del cliente esta disponible";
        } else {
            echo "No hay saldo disponible";
        }
    }; 
// if (!empty($cliente)) {
//     echo "El arreglo de cliente esta vacio";
// } else {
    //     echo "El arreglo de cliente no esta vacio";
    // }
    
echo '<br/>';
// else if
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo'] === 'premium') {
    echo "El cliente es premium";
} else {
    echo "no hay cliente definido o no tiene saldo o no es premium ";
}
//Swith
echo '<br/>';
$tecnologia = 'HTML';
switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'Javascript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML';
        echo "emmm...";
        break;
    default:
        echo "Algun lenguaje que no se cual es";
        break; 
}

include 'includes/footer.php';