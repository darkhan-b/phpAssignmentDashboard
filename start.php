<?php
require_once("db_connection.php");

include("exception.php");

$legalname = $_POST['legalname']; // VARIABLES FOR DB AND INPUTS
$ofchoice = $_POST['of'];
$sentences = $_POST['sentences'];
$website = $_POST['site'];
$model = $_POST['model1'];
$sales = $_POST['sale2'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$em = $_POST['email1'];
$phone = $_POST['phone'];
$photo = $_POST['ff'];
include("insert.php");

 ?>
