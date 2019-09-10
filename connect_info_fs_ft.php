<?php
  //connect
  try{
      $dsn = "mysql:dbname=tutor_info_fs_ft; localhost=Local Databases";
      $db = new PDO($dsn,'group','group',array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
      $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    echo $e->getMessage();
    $db->rollBack();
  }
?>