<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['add_teachers'])){
    print_r("T");
    $data = [
        'name' => $_POST["name"],
        'image' => $_POST["image"],
    ];
    
    $query = "INSERT INTO teachers (name, image) VALUES (:name, :image)";
    $query_run = $db->conn->prepare($query);
    $query_run->execute($data);
}else{
    print_r("F");
}
?>