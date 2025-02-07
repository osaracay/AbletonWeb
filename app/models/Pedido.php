<?php
require_once __DIR__ . '/../core/Database.php';
// Esta clase permitira registrar pedidos
class Pedido{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

}

?>