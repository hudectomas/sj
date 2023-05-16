<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_teachers'])){
    try{
        $id = $_POST["delete_teachers"];
        $sql = $sql = 'DELETE FROM teachers WHERE id ='.$id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>