<?php
require_once __DIR__ . '/../core/Database.php';

class Producto {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function obtenerProductos() {
        $consulta = $this->db->query("SELECT * FROM producto");
        return $consulta->fetchAll(PDO::FETCH_ASSOC); // Devuelve un array ASSOCIATIVO de productos
    }

    public function registrar($nombre, $descripcion, $precio, $stock, $imagen) {
        $consulta = $this->db->prepare("INSERT INTO producto (nombre, descripcion, precio, stock, imagen) VALUES (?, ?, ?, ?, ?)");
        return $consulta->execute([$nombre, $descripcion, $precio, $stock, $imagen]);
    }
    
}
/**Flujo Completo del MVC
1 El usuario visita http://localhost/producto.
2️ Las rutas (web.php) detectan la URL y llaman al ProductoController.
3️ El controlador (ProductoController.php) llama al modelo (Producto.php) para obtener los datos.
4️ El modelo consulta la base de datos y devuelve los resultados.
5️ El controlador recibe los datos y los pasa a la vista (productos.php).
6️ La vista muestra los datos en la web. 

El Modelo maneja la base de datos (consulta los productos).
El Controlador recibe la petición, obtiene los productos del modelo y los pasa a la vista.
La Vista recibe los datos y los muestra al usuario.*/
?>
