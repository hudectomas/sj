<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['teacher_id']) && isset($_POST["name"])){
    try{
        $id = $_POST["teacher_id"];
        $new_name = $_POST["name"];
        $sql = "UPDATE teachers SET name ='" . $new_name . "' WHERE id = " . $id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>