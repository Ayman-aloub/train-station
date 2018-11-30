<?php
function CreateDB($dbname){
  $host="localhost";
  $root="root";
  $root_password="";
  try {
       $dbh = new PDO("mysql:host=$host", $root, $root_password);
       $dbh->exec("CREATE DATABASE IF NOT EXISTS $dbname;")
            or die(print_r($dbh->errorInfo(), true));
    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }
   }
CreateDB("train");
include_once('database.php');
$r = $db->Execute(file_get_contents('data.SQL'));
if($r !== false)
  echo  "Data are added successfully!<br/>";
  else
 echo  "Error.<br/>";
 ?>

