<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado() :string { //Despues de los dos puntos es para especificar que se va a traer.
    return "El usuario esta autenticado";
}
$usuario = usuarioAutenticado();
echo $usuario;
echo '<br>';

function usuarioAutenticado1(bool $autenticado) :void {  //Es para poder trae el valor con echo sin return //void trae cualquier valor de string, bool, float, int. //Tambien puedes usar | para traer dos, "?" para traer o no traer como expression regular.
    if($autenticado) {
        echo "El usuario esta autenticado";
    } else {
        echo "El usuario no esta autenticado"; "El usuario no esta autenticado";
    }
}
$usuario1 = usuarioAutenticado1(true);
echo $usuario1;


include 'includes/footer.php';