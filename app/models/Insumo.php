<?php
require_once __DIR__ . '/../core/Database.php';
//Esta clase permitira al Usuario administrador gestionar los insumos
class Insumo{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    //VALIDAR CAMPOS
    public function obtenerTodos() {
        $consulta = $this->db->query("SELECT i.*, p.nombre as proveedor FROM insumos i LEFT JOIN proveedores p ON i.id_proveedor = p.id ORDER BY i.created_at DESC");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    //VALIDAR CAMPOS
    public function registrar($nombre, $cantidad, $unidad, $id_proveedor) {
        $consulta = $this->db->prepare("INSERT INTO insumos (nombre, cantidad, unidad, id_proveedor) VALUES (?, ?, ?, ?)");
        return $consulta->execute([$nombre, $cantidad, $unidad, $id_proveedor]);
    }

    // UD
    public function obtenerPorId($id) {
        $consulta = $this->db->prepare("SELECT * FROM insumo WHERE id = ?");
        $consulta->execute([$id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    
    public function editar($id, $nombre, $cantidad, $unidad, $id_proveedor) {
        $consulta = $this->db->prepare("UPDATE insumo SET nombre = ?, cantidad = ?, unidad = ?, id_proveedor = ? WHERE id = ?");
        return $consulta->execute([$nombre, $cantidad, $unidad, $id_proveedor, $id]);
    }
    
    public function eliminar($id) {
        $consulta = $this->db->prepare("DELETE FROM insumo WHERE id = ?");
        return $consulta->execute([$id]);
    }
    
}

?>