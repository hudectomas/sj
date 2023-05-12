<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['email'])){
 
    $data = [
        'email' => $_POST["email"],
    ];
    try{
        $query = "INSERT INTO newsletter (email) VALUES (:email)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }   
}else{
    print_r("Nepodarilo sa odoslať správu. Skúste to prosím neskôr alebo si dôkladne preštudujte, či ste zadany správne a platné údaje.");
}
?>