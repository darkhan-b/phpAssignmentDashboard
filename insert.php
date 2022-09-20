<?php
if(isset($_POST['submit'])) {
  try { // TRY + CATCH + FINALLY + THROW
    $a = $pdo->prepare("INSERT INTO startup(legalname,othername,description,website,model,sales,fname,lname,email,phone,images)
    values (:legalname,:othername,:description,:website,:model,:sales,:fname,:lname,:email,:phone,:images)");
    $a->bindParam(":legalname",$legalname);// BIND PARAM
    $a->bindParam(":othername",$ofchoice);
    $a->bindParam(":description",$sentences);// BIND PARAM
    $a->bindParam(":website",$website);// BIND PARAM
    $a->bindParam(":model",$model); // BIND PARAM
    $a->bindParam(":sales",$sales);
    $a->bindParam(":fname",$fname);
    $a->bindParam(":lname",$lname);
    $a->bindParam(":email",$em);
    $a->bindParam(":phone",$phone);
    $a->bindParam(":images",$blob, PDO::PARAM_LOB);
    $blob = fopen($target_file, 'rb');

    if(empty($legalname) || empty($ofchoice) || empty($website) || empty($description) || empty($model) ||
    empty($sales) || empty($fname) ||empty($lname) || empty($em) || empty($phone) || empty($images)) {
      throw new Exception1(); // THROW
    }
    elseif(filter_var($em, FILTER_VALIDATE_EMAIL) == FALSE) {
      throw new Exception("Error Processing Request", 1); // Throw exception

    }

}
catch (isEmptyException $e) { // OBJECT CATCH
$e-> printException();
}
finally { // FINALLY
  $link = "applic.php";
  echo "<a href=".$link.">Go back to the startup</a>";
}
}

 ?>
