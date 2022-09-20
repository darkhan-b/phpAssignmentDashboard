<?php
require_once('db_connection.php');
class Exception1 extends Exception{
    public function ExceptionDec(){ // CLASS EXCEPTION
        echo "Please, empty all forms<p>";
    }
}

function Exception2($exception1)
{
    echo "Message Exception: " . $exception1->getMessage(); echo "<br></p>"; // FUNCTION EXCEPTION
}
set_exception_handler('Exception2'); // SET HANDLER

function err($error_1, $error_msg) // FUNCTION ERROR
{
    echo "Error: [$error_1] $error_msg "; echo "<br>";


    exit(); // EXIT
}

set_error_handler("err"); // SET ERROR


$submit = $_POST['submit'];
if(isset($submit)){
$target_dir = "images/"; // CONNECTION IMAGES
$target_file = $target_dir.basename($_FILES["ff"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    try{
      if(empty($legalname) || empty($ofchoice) || empty($website) || empty($description) || empty($model) || // TRY FROM DB
      empty($sales) || empty($fname) ||empty($lname) || empty($em) || empty($phone)){
            throw new Exception1();
        }
    }
      catch(Exception1 $exception1){
          $exception1->ExceptionDec(); // CATCH FOR CLASS EXCEPTION OVERRIDING
      }

      if(
    $imageFileType != "jpg"  &&
    $imageFileType != "png"  && // INSTALLING IMAGE
    $imageFileType != "jpeg"

  )
  {
    echo "Your file not uploaded.";
    exit();
}
if (move_uploaded_file($_FILES["ff"]["tmp_name"], $target_file)) // IMAGES BLOB FROM DB
    {
      echo "The file ". basename( $_FILES["ff"]["name"]). " has been uploaded.";
    }
    else
    {
      echo "Sorry, there was an error uploading your file.<br>";
    }
}
?>
