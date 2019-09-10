<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imgaray = array();
$number = 0;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png" && $fileType != "gif"){
    echo("Error: only JPG, JPEG, PNG, or GIF file are allowed to upload.");
  }
  else{
    if(file_exists($target_file)){
      echo("The file has already existed<br>");
    }
    else{
      move_uploaded_file($_FILES["userfile"]["tmp_name"],$target_file);
    }
  }

  if(move_uploaded_file($_FILES["userfile"]["tmp_name"],$target_file)){
    echo("The file has been uploaded.<br>");
    echo("name of file:".$_FILES["userfile"]["name"]."<br>");
    echo("type of file:".$_FILES["userfile"]["type"]."<br>");
    echo("size of file:".($_FILES["userfile"]["size"]/1024)."KB<br>");

    $imgarray[$number] = basename($_FILES["userfile"]["name"]);
    $number++;
  }
  else{
    echo("Sorry, there was an error uploading your file.");

    if($_FILES["userfile"]["error"]>0){
      echo("error代碼：".$_FILES["userfile"]["error"]."<br/>");
    }
  }

  $show_imgarray = scandir($target_dir);
  for($key = 0;$key < count($show_imgarray);$key++){
    echo ("<img src=\"".$show_imgarray[$key]."\" alt=\"".$show_imgarray[$key]."\" width=\"10%\" height=\"10%\">");
  }

}

?>
