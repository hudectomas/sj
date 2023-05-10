<?php
    class Database_kontakt{
        public $conn;
        function __construct(){
                $this->conn = new PDO('mysql:host=localhost;dbname=kontakt', 'root', '');      
        } 
    } 
    $db = new Database_kontakt();
    $db->conn;

?>