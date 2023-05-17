<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['teacher_id']) && isset($_POST["image"])){
    try{
        $id = $_POST["teacher_id"];
        $new_image = $_POST["image"];
        $sql = "UPDATE teachers SET image ='" . $new_image . "' WHERE id = " . $id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>