<?php
session_start();
 ?>
<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>LAB8</title>
</head>
<body>
  <h1>Registration Form</h1>
  <p>Please fill in all fields and click Register</p>

  <h1>User Information</h1>
  <form action="w12_ex2.php" method="post">
    First name:
    <input type="text" name="firstname" size="25" maxlength="30" required/><br><br>

    Last name:
    <input type="text" name="lastname" size="25" maxlength="30" required/><br><br>

    Email:
    <input type="email" name="useremail" size="29" maxlength="30"><br><br>

    <h1>Publications</h1>
    <p>Which book would you like information about?</p>
      <select name="book">
        <option value="program">Internet and WWW How to Program</option>
        <option value="mis">Management Information System</option>
        <option value="statistic">Statistic</option>
      </select>

      <h1>Operating System</h1>
      <p>Which operatiog system do you use?</p>
      <input type="radio" name="system" value="windows">Windows
      <input type="radio" name="system" value="macosx">Mac OS X
      <input type="radio" name="system" value="linux">Linux
      <input type="radio" name="system" value="other">Other

<p>
  <input type="submit" value="submit">
</p>
</form>
<?php

  echo"Session variables are set.<br>";
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION["name"] = $_POST["firstname"].$_POST["lastname"];
    $_SESSION["email"] = $_POST["useremail"];
    $_SESSION["book"] = $_POST["book"];
    $_SESSION["system"] = $_POST["system"];

  if(filter_var($_SESSION["email"],FILTER_VALIDATE_EMAIL)){
    outputdata($_SESSION["name"],$_SESSION["email"],$_SESSION["book"],$_SESSION["system"]);
  }
  else{
    if(empty($_SESSION["email"])){
      echo("<p>The email is empty</p>");
    }
    else{
      echo($_SESSION["email"]." is not a valid email address.<p>hit back to correct it!");
    }
  }
  if(!preg_match("/^[a-zA-Z ]*$/",$_SESSION["name"])){
    echo("<p>Only letters and white apace allowed</p>");
  }
  }
  function outputdata($username,$useremail,$userbook,$useros){
    echo("Welcome $username.Your email address is $useremail.<br>");
    echo("The book you choose is $userbook<br>");
    echo("The system you use is $useros<br>");
  }
?>
</body>
</html>
