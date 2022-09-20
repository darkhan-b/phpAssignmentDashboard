<?php
require_once('db_connection.php');
session_start(); // SESSION
$_SESSION['admin'] = "Darkhan_Baibulat";
if(isset($_POST['admin']) && isset($_POST['password'])){
    if($_POST['admin'] == 'Darkhan_Baibulat' && $_POST['password'] == "123456d")
    header("Location: panel.php"); // HEADER
}
?>
<center>
  <h3>Adminpanel of Cell(Data): (login: Darkhan_Baibulat; Password: 123456d)</h3><p>
  <form method="post">
  Login : <input type="text" name="admin" placeholder="Your login" style="margin-left: 30px;"><p>
  PassAdmin: <input type="password" name="password" placeholder="Your password"><p>
    <input type="submit" name="btn1" value="Adminpanel">
  </form></center>
