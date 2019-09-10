<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>家教網-註冊</title>
  <link rel=stylesheet type="text/css" href="signUp.css">
</head>
<body>
  <header>
    <h1>Edit Your Information</h1>
  </header>
  <form method="post" action="Home_Page.php" class="formCss">
    Account:<input type="text" name="uact" required/><br><br>
    Password:<input type="text" name="upas" required/><br><br>
    Name:<input type="text" name="uname"><br><br>
    Birthday:<input type="date" name="ubirthday"><br><br>
    Gender:<select name="ugender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br><br>
    Email:<input type="email" name="uemail" placeholder="email@mis.com"><br><br>
    Phone:<input type="tel"  name="uphone" placeholder="請輸入連絡電話"><br><br>
    <hr>
    <table id="studentForm">
      <caption>Student Information Form</caption>
      <tr>
        <th>Basic informtion</th>
        <th>Information Field</th>
      </tr>
      <tr>
        <td>Grade:</td>
        <td><input type="text" name="ugrade"></td>
      </tr>
      <tr>
        <td>Subject needed:</td>
        <td><input type="text" name="usubject"></td>
      </tr>
      <tr>
        <td>Learning Status:</td>
        <td><input type="text" name="ustatus"></td>
      </tr>
    </table>
    <hr>
    <table id="teacherForm">
      <caption>Teacher Information Form</caption>
      <tr>
        <th>Basic informtion</th>
        <th>Information Field</th>
      </tr>
      <tr>
        <td>Salary wanted:</td>
        <td><input type="number" name="usalary"></td>
      </tr>
      <tr>
        <th>Class Information</th>
        <th>Information Field</th>
      </tr>
      <tr>
        <td>Time:</td>
        <td>From<input type="time" name="utimeStart">To<input type="time" name="utimeEnd"></td>
      </tr>
      <tr>
        <td>Location:</td>
        <td><input type="text" name="ulocation"></td>
      </tr>
    <tr>
      <td rowspan="4">Surrounding:</td>
      <td><input type="radio" name="classplace" value="company">公司</td>
    </tr>
    <tr>
      <td><input type="radio" name="classplace" value="home">家裡</td>
    </tr>
    <tr>
      <td><input type="radio" name="classplace" value="thome">教師家裡</td>
    </tr>
    <tr>
      <td><input type="radio" name="classplace" value="other">其他</td>
    </tr>
  </table>
    <a href="Home_Page.php">
      <input type="submit" value="Sign Up">
    </a>
    <input type="reset" value="Clear">
  </form>
  <?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST["uemail"];
    $name = $_POST["uname"];
    $account = $_POST['uact'];

    if(filter_var($_POST["uemail"],FILTER_VALIDATE_EMAIL)){
      echo("Welcome $account,Your email address is $email");
    }
    else{
      if(empty($_POST["uemail"])){
        echo("<p>The email is empty</p>");
      }
      else{
        echo("$email is not a valid email address.<p>hit back to correct it!");
      }

    }
    if(!preg_match("/^[a-zA-Z ]*$/",$account)){
      echo("<p>Only letters and white apace allowed</p>");
    }

  }
   ?>
</body>
</html>
