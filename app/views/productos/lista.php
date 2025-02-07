<?php include '../layouts/header.php'; 

/** Este archivo redirige todas las solicitudes a routes/web.php. */
require_once __DIR__ . '/../routes/web.php';
?>

    <h2>Productos Disponibles</h2>

    <?php if (!empty($_SESSION['mensaje'])) : ?>
        <p style="color: green;"><?php echo $_SESSION['mensaje']; ?></p>
        <?php unset($_SESSION['mensaje']); ?>
    <?php endif; ?>

    <!-- PRESENTACION DE PRODUCTOS  <table border="1">-->
    <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        <?php foreach ($productos as $producto) : ?>
        <tr>
            <td>
                <?php if ($producto['imagen']) : ?>
                    <img src="<?php echo $producto['imagen']; ?>" width="100">
                <?php else : ?>
                    Sin imagen
                <?php endif; ?>
            </td>
            <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
            <td><?php echo htmlspecialchars($producto['descripcion']); ?></td>
            <td>$<?php echo number_format($producto['precio'], 2); ?></td>
            <td><?php echo intval($producto['stock']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <!-- VALIDAR ENLACE -->
    <a href="/producto/registrar">Registrar Nuevo Producto</a>
    
    <?php include '../layouts/footer.php'; ?>