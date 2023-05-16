<?php
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['user_name'])){
        header("Location:no-permission.php");
    }
?>
<!DOCTYPE html>
<html lang="sk">
<?php
    include('partials/header.php');
    include('partials/nav.php');
  ?>
<body class="container">
    <section>
        <h1>Admin rozhranie</h1>
        <p>Vítaj admin <?php echo($_SESSION['user_name']);?></p><br>
        <a href="inc/login/logout.php">Odhlásiť sa</a>
    </section>
    <section>
        <h2>Lektori</h2>
        <?php $teachers = $Teachers->get_teachers(); ?>
        <form action="inc/teachers/insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Meno">
            <input type="text" name="image" id="image" placeholder="Cesta k obrázku">
            <input type="submit" value="Pridať" name="add_teachers">
        </form>
        <?php
            $teachers = $Teachers->get_teachers();
            echo '<table class="admin-table">';
                foreach($teachers as $p){
                    echo '<tr>';
                    echo '<td>'.$p->name;'</td>';
                    echo '<td>'.'<img width="150" src = "'.$p->image.'">';
                    echo '<td>
                            <form action="inc/teachers//delete.php" method="post">
                                <button type = "submit" name="delete_teachers" value="'.$p->id.'"'.'>Vymazať</button>
                            </form>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    <section>
        <h2>Newsletter</h2>
        <?php $qna = $Qna->get_qna(); ?>
        <form action="inc/newsletter/insert.php" method="post">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="submit" value="Pridať" name="add_qna">
        </form>
        <?php
            $qna = $Qna->get_qna();
            echo '<table class="admin-table">';
                foreach($qna as $q){
                    echo '<tr>';
                    echo '<td>'.$q->email;'</td>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    <section>
        <h2>Správy z kontaktného formulára</h2>
        <?php
            $contact = $Contact->get_contact();
            echo "<table class='cont-head'>";
echo "<tr >";
echo "<td>P.c.</td><td>Meno</td><td>Email</td><td>Sprava</td>"; 
echo "</td>";
echo "</tr>";
echo "</table><hr>";
echo "<table class='cont table table-hover table-dark'>";
                foreach($contact as $c){
                    echo '<tr>';
                    echo '<td>'.$c->contact_name;'</td>';
                    echo '<td>'.$c->contact_email;'</td>';
                    echo '<td>'.$c->contact_message;'</td>';
                    echo '<td>
                            <form action="inc/contact/delete.php" method="post">
                                <button type = "submit" name="delete_contact" value="'.$c->id.'"'.'>Vymazať</button>
                            </form></td>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    <?php
    include('partials/footer.php');?>
</body>
</html>