<?php
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['user_name'])){
        header("Location:no-permission.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
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
        <h2>Portfólio</h2>
        <?php $portfolio = $Portfolio->get_portfolio(); ?>
        <form action="inc/portfolio/insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Názov portfólia">
            <input type="text" name="image" id="image" placeholder="Cesta k obrázku">
            <input type="submit" value="Pridať" name="add_portfolio">
        </form>
        <?php
            $portfolio = $Portfolio->get_portfolio();
            echo '<table class="admin-table">';
                foreach($portfolio as $p){
                    echo '<tr>';
                    echo '<td>'.$p->name;'</td>';
                    echo '<td>'.'<img width="150" src = "'.$p->image.'">';
                    echo '<td>
                            <form action="inc/portfolio//delete.php" method="post">
                                <button type = "submit" name="delete_portfolio" value="'.$p->id.'"'.'>Vymazať</button>
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

$i=0;
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$usernamew = "root";
$passwordw = "";
$db = "web";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn){
echo "Connection error";
}
else{
echo "";
$sql = "Select * from contact order by contact_name asc";
$result = mysqli_query($conn,$sql);
echo "<table class='cont-head'>";
echo "<tr >";
echo "<td>P.c.</td><td>Meno</td><td>Email</td><td>Sprava</td>"; 
echo "</td>";
echo "</tr>";
echo "</table><hr>";
echo "<table class='cont table table-hover table-dark'>";
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
    $i++;
echo "<tr >";

echo  "<td >".$i."</td>"."<td>".$row["contact_name"]."</td><td>".$row["contact_email"]."</td><td>".$row["contact_message"]."</td><td><button >Delete</button>";
echo "</td>";
echo "</tr>";


}
echo "</table>";



}
else{

echo "0 results";
}
}
}
?>
    </section>
    <?php
    include('partials/footer.php');?>
</body>
</html>