<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    public function index() {
        // 1. Crear una instancia del modelo
        $producto = new Producto();
        // 2. Obtener los productos desde el modelo
        $productos = $producto->obtenerProductos();
        // 3. Cargar la vista y pasarle los productos
        require_once __DIR__ . '/../views/productosView.php';
 
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            /* PENDIENTE AGREGAR ROL  
            if ($_SESSION['rol'] !== 'admin') {
                die("Acceso denegado.");
            }
             */
            
            $nombre = htmlspecialchars($_POST['nombre']); //Protección XSS con htmlspecialchars()
            $descripcion = htmlspecialchars($_POST['descripcion']); //Protección XSS con htmlspecialchars()
            $precio = floatval($_POST['precio']);
            $stock = intval($_POST['stock']);
            
            // Manejo de imagen
            $imagen = null;
            if (!empty($_FILES['imagen']['name'])) {
                $ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
                $nombreArchivo = uniqid() . "." . $ext;
                $ruta = __DIR__ . "/../uploads/" . $nombreArchivo;

                if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta)) {
                    $imagen = "/uploads/" . $nombreArchivo;
                }
            }

            $productoModel = new Producto();
            $productoModel->registrar($nombre, $descripcion, $precio, $stock, $imagen);

            $_SESSION['mensaje'] = "Producto registrado correctamente.";
            header("Location: /productos");
            exit();
        }

        require_once __DIR__ . '/../views/productos/registro.php';
    }

}
?>