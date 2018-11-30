<?php
include_once('constants.php');
class database
{
  function __construct($name)
  {
   $this->pdo= new PDO("mysql:host=localhost;"."dbname=".$name,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
  }
  function getRow($q,$p=array())
  {
   $stm=$this->pdo->prepare($q);
   $stm->execute($p);
   return $stm->fetch();
  }
  function getRows($q,$p=array())
  {
   $stm=$this->pdo->prepare($q);
   $stm->execute($p);
   return $stm->fetchAll();
  }
  function insertRow($q,$p=array())
  {
   $stm=$this->pdo->prepare($q);
   $stm->execute($p);
   return $stm->rowCount();
  }
  function updateRow($q,$p=array())
  {
   $this->insertRow($q,$p=array());
  }
  function deleteRow($q,$p=array())
  {
   $this->insertRow($q,$p=array());
  }
   function myExec($q)
  {
   $this->pdo->exec($q);
  }
  public function Execute($query){
             return $this->pdo->exec($query);
           }
}
    $db = new database('train');
?>
