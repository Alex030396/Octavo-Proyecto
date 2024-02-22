<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 200,
        'disponibles' => true
    ],
    [
        'nombre' => 'televisor 24"',
        'precio' => 300,
        'disponibles' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponibles' => false
    ]
];
foreach ($productos as $producto) { ?>
<li>
    <p>Producto : <?php echo $producto['nombre']; ?></p>
    <p>Precio : <?php echo $producto['precio']; ?></p>
    <p><?php echo $producto['disponibles'] ? 'Disponible': 'No disponible' ; ?></p>
    <?php 
    if ($producto['disponibles']) {
        echo "<p>Disponible</p>";
    } else {
        echo "<p>No disponible</p>";
    }
    ?>
</li>
    <?php
    // echo "<pre>";
    // var_dump($producto);
    // echo "</pre>";
}


include 'includes/footer.php';