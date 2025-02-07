<h2>Editar Insumo</h2>

<!-- VALIDAR EL ACTION DE LO CONTRARIO SE OBTIENE: The requested resource /autenticar was not found on this server. -->
<form action="/insumo/editar/<?php echo $insumo['id']; ?>" method="POST">
    <label>Nombre:</label><input type="text" name="nombre" value="<?php echo $insumo['nombre']; ?>" required>
    <label>Cantidad:</label><input type="number" name="cantidad" value="<?php echo $insumo['cantidad']; ?>" required>
    <label>Unidad:</label><input type="text" name="unidad" value="<?php echo $insumo['unidad']; ?>" required>
    <label>Proveedor:</label>
    <select name="id_proveedor">
        <?php foreach ($proveedores as $proveedor) : ?>
            <option value="<?php echo $proveedor['id']; ?>" <?php echo ($insumo['id_proveedor'] == $proveedor['id']) ? 'selected' : ''; ?>><?php echo $proveedor['nombre']; ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Actualizar</button>
</form>
<a href="/insumos">Volver</a>
