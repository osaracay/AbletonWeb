<h2>Editar Proveedor</h2>

<!-- VALIDAR EL ACTION DE LO CONTRARIO SE OBTIENE: The requested resource /autenticar was not found on this server. -->
<form action="/proveedor/editar/<?php echo $proveedor['id']; ?>" method="POST">
    <label>Nombre:</label><input type="text" name="nombre" value="<?php echo $proveedor['nombre']; ?>" required>
    <label>Contacto:</label><input type="text" name="contacto" value="<?php echo $proveedor['contacto']; ?>">
    <label>Teléfono:</label><input type="text" name="telefono" value="<?php echo $proveedor['telefono']; ?>">
    <label>Email:</label><input type="email" name="email" value="<?php echo $proveedor['email']; ?>" required>
    <button type="submit">Actualizar</button>
</form>
<a href="/proveedores">Volver</a>
