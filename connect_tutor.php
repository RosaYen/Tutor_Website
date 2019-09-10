<?PHP
try{
  $dsn = "mysql:dbname=mis_tutor; localhost=127.0.0.1";
  $db = new PDO($dsn, 'root', "",array(PDO::MYSQL_ATTR_INIT_COMMAND=> "set names utf8"));
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

catch(PODException $e){
  echo $e->getMessage();
  $db->rollBack();
}
?>
