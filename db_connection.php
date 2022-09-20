<?php
$server = "localhost";
$db_name = "assignment9";
$user = "user9";
$password = "123456d";
try {
  $pdo = new PDO('mysql:host=localhost;post=3306;dbname=assignment9',$user,$password); // PDO + TRY + CATCH
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Successful connection!";
  $connection = mysqli_connect($server, $user, $password, $db_name);

} catch (PDOException $e) {
  echo "Connection was failed" . $e->getMessage();
  die(); // DIE
}
 ?>
