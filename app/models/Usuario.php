<?php
require_once __DIR__ . '/../core/Database.php';

class Usuario {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // Método para buscar un usuario por email
    public function buscarPorEmail($email) {
        $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
        $consulta->execute([$email]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    // Método para buscar un usuario por username
    public function buscarPorUsuario($user) {
        $consulta = $this->db->prepare("SELECT * FROM usuario WHERE user = ?");
        $consulta->execute([$user]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}
?>