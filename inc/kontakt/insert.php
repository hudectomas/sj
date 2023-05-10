<?php
    require('../kontakt.php');
    $db = new Database_kontakt();
    if(isset($_POST['insert_kontakt'])){
        $data = [
            'meno' => $_POST['meno'],
            'email'=> $_POST['email'],
            'sprava'=> $_POST['sprava'],
        ];
        $query = "INSERT INTO kontaktne_udaje(meno, email, sprava) VALUES (:meno, :email, :sprava)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        
    }

?>