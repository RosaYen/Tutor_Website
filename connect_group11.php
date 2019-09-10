<?php
  //connect
  try{
      $dsn = "mysql:dbname=group11; localhost=140.117.68.56";
      $db = new PDO($dsn,'group11','group11',array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
      $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    echo $e->getMessage();
    $db->rollBack();
  }
?>