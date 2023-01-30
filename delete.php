<?php
session_start();
require 'connectionn.php';
$_SESSION['B']=0;
  $_SESSION['F']=0;
  $_SESSION['R']=0;
  $_SESSION['G']=0;
  $_SESSION['P']=0;
  $_SESSION['Bb']=0;
  $_SESSION['V']=0;
  $_SESSION['T']=0;
  $_SESSION['Ga']=0;
  $_SESSION['TOTAL']=0;
  $delete="DELETE FROM cart WHERE customer_id=:customer_id";
  $statement=$pdo->prepare($delete);
  $statement->bindParam(":customer_id",$_SESSION['ID'],PDO::PARAM_INT);
  $statement->execute();
  header("location:after.php");
?>