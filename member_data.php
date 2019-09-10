<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Member List</title>
</head>
<body>
  <?php
  $mAccount = $_POST["uact"];
  $mPassword = $_POST['upas'];
  $mName = $_POST['uname'];
  $mBirthday = $_POST['ubirthday'];
  $mGender = $_POST['ugender'];
  $mEmail = $_POST['uemail'];
  $mTel = $_POST['utel'];

  //student
  $sGrade = $_POST['ugrade'];
  $sSubject = $_POST['usubject'];
  $sStatus = $_POST['ustatus'];

  //teacher
  $tSalary = $_POST['usalary'];
  $tTimeEnd = $_POST['utimeEnd'];
  $tLocation = $_POST['ulocation'];

?>
  <h1>Congratulation!</h1><br>
  <h1>You have register the account successfullly.</h1><br><br>
  <h2>Basic Information:</h2><br><br>
  <form action="Home_Page.php" method="post">
    <p>Account:<?PHP echo $mAccount;?></p><br>
    <p>Password:<?PHP echo $mPassword;?></p><br>
    <p>Name:<?PHP echo $mName;?></p><br>
    <p>Birthday:<?PHP echo $mBirthday;?></p><br>
    <p>Gender:<?PHP echo $mGender;?></p><br>
    <P>Email:<?PHP echo $mEmail;?></p><br>
    <p>Tel:<?PHP echo $mTel;?></p><br>

    <h2>Student Information:</h2><br><br>
    <p>Grade:<?PHP echo $sGrade;?></p><br>
    <p>Subject:<?PHP echo $sSubject;?></p><br>
    <p>Status:<?PHP echo $sStatus;?></p><br>

    <h2>Teacher Information:</h2><br><br>
    <p>Teaching Salary:<?PHP echo $tSalary;?></p><br>
    <p>Teaching TimeEnd:<?PHP echo $tTimeEnd;?></p><br>
    <p>Teaching Locatin:<?PHP echo $tLocation;?></p><br>
</form>
  <a href="Home_Page.php">
    <input type="button" value="Home Page">
  </a>
</body>
</html>
