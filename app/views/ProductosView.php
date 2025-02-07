<?php include 'layouts/header.php'; 

/** Este archivo redirige todas las solicitudes a routes/web.php. 
* require_once __DIR__ . '/../routes/web.php';
*/
?>

<h2>Lista de Productos</h2>
<ul>
    <?php foreach ($productos as $producto) : ?>
        <li><?php echo $producto['nombre'] . " - $" . $producto['precio']; ?></li>
    <?php endforeach; ?>
</ul>

<?php include 'layouts/footer.php'; ?>