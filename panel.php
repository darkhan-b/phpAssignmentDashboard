<style>
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
    }


</style>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script>
            $(document).ready(function(){ // JQUERY+ AJAX
                var $clicked = false;
                $("#bts").click(function(){
                    if(!$clicked){
                        $("#info").hide(); // HIDE AND SHOW JQUERY
                        $clicked = true;
                    }else{
                        $("#info").show();
                        $clicked = false;
                    }
                });

            })
        </script>
        <script>
            var request = new XMLHttpRequest(); // JQUERY+ AJAX
            xhttp.onreadystatechange = function() {
                if(request.readyState === 4) {
                    if(request.status === 200) {
                        alert('Success access to data!');
                    }
                }
            }
            xhttp.open('POST', 'panel.php'); // JQUERY+ AJAX
            xhttp.send();
        </script>
<?php
require_once ('db_connection.php'); // Connecting to DB
session_start();
$cookie_name = "Darkhan";
$cookie_value = "xxlabbesxx@gmail.com";
setcookie($cookie_name, $cookie_value, time() + 5400 * 28);
if(!isset($_COOKIE[$cookie_name])) {
  echo "Position non found";
}
else {
  echo "<p>Cookie connection email: ".$_COOKIE[$cookie_name];
}

function table_user(){ // Function for demonstration columns of table
    echo '<tr>
    <td><b>Legal Name</b></td>
    <td><b>Choice Name</b></td>
    <td><b>Description</b></td>
    <td><b>Website</b></td>
    <td><b>Model</b></td>
    <td><b>Sales</b></td>
    <td><b>Fname</b></td>
    <td><b>Lname</b></td>
    <td><b>Email</b></td>
    <td><b>Phone</b></td>
    <td><b>Image</b></td>
    </tr>';
}
?>
<center><h2>Welcome to adminpanel, <?php echo $_SESSION["admin"]; ?>!</h2>
</center><p><p><p>  <center><button id = "bts" style="width: 200px; height: 30px;">Information</button></center><p><p>
    <div id = "info"><center><table>
<?php
table_user();
 $us1 = $pdo->query("SELECT * FROM startup"); // ALL DATA FROM USER_TABLE (INFO FOR ADMIN) [PDO]
while ($ud = $us1->fetch(PDO::FETCH_ASSOC)){ // PDO
    echo '<tr><td>'.$ud['legalname'].'</td>'.
        '<td>'.$ud['othername'].'</td>'.
        '<td>'.$ud['description'].'</td>'.
        '<td>'.$ud['website'].'</td>'.
        '<td>'.$ud['model'].'</td>'.
        '<td>'.$ud['sales'].'</td>'.
        '<td>'.$ud['fname'].'</td>'.
        '<td>'.$ud['lname'].'</td>'.
        '<td>'.$ud['email'].'</td>'.
        '<td>'.$ud['phone'].'</td>';
        ?><td><img src="<?= $ud['images'] ?>" width="250"></td>
        <?php // OUTPUT IMAGES FROM DB
        echo '</tr>';
}
?></table>
</center></div><p><p>
<?php
$ff = $pdo->query("select*from startup");
$jsoninfo=array();
while($us1 = $ff->fetch(PDO::FETCH_ASSOC)){
    $json = $us1;
    $json_clients = json_encode($json, JSON_PRETTY_PRINT);
    echo $json_clients."<p>";
}





 ?>
