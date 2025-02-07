<?php include '../layouts/header.php'; 

/** Este archivo redirige todas las solicitudes a routes/web.php. */
require_once __DIR__ . '/../routes/web.php';
?>

    <h2>Registrar Nuevo Producto</h2>

    <!-- VALIDAR EL ACTION DE LO CONTRARIO SE OBTIENE: The requested resource /autenticar was not found on this server. -->
    <form action="/producto/registrar" method="POST" enctype="multipart/form-data">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea>

        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required>

        <label>Stock:</label>
        <input type="number" name="stock" required>

        <label>Imagen:</label>
        <input type="file" name="imagen" accept="image/*">

        <button type="submit">Registrar</button>
    </form>

    <!-- VALIDAR ENLACE -->
    <a href="/productos">Ver Productos</a>
    
    <?php include '../layouts/footer.php'; ?>