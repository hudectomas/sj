<?php
require_once("Database.php");
    class Teachers{
        public $db;

        function get_teachers(){
            $this->db = new Database();
           
            try{
                $query = $this->db->conn->query("SELECT * FROM teachers");
                $teachers = $query->fetchAll(PDO::FETCH_OBJ);
                return $teachers;
                }catch(PDOException $e){
                    print_r($e->getMessage());
                } 
            }
    }
    $Teachers = new Teachers();
?>