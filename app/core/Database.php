<?php 
    class Database {
        private static $instance = null;
        private string $db_host;
        private string $db_nombre;
        private string $db_usuario;
        private string $db_pw;            
        private $conn; //si yo le indico el tipo mysqli a esta variable vale ñonga no lo hagas. Te pide inicializar la variable a tipo mysqli antes de validar si es nula o vacia

        private function __construct() {
            $this->db_host = getenv('MYSQL_DB_HOST') . ':'.getenv('MYSQL_DB_PORT'); 
            $this->db_nombre = getenv('MYSQL_DB_NAME');
            $this->db_usuario = getenv('MYSQL_DB_USER');
            $this->db_pw = '';
            $this->conn = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_nombre, $this->db_usuario, $this->db_pw);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public static function getInstance() {
            if (!self::$instance) {
                self::$instance = new Database();
            }
            return self::$instance;
        }

        public function getConnection() {
            return $this->conn;
        }
    }
?>