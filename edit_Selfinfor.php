<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MIS全國家教網-編輯個人資料</title>
  <link rel=stylesheet type="text/css" href="signUp.css">
</head>
<body>
  <header>
    <h1>Edit Information</h1>
  </header>
  <form method="post" action="member_list.php" class="formCss">

    Account:<input type="text" name="uact" required/><br><br>
    Password:<input type="password" name="upas" required/><br><br>
    Name:<input type="text" name="uname" required/><br><br>
    Birthday:<input type="date" name="ubirthday"><br><br>
    Gender:<select name="ugender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br><br>
    Email:<input type="email" name="uemail"placeholder="email@mis.com"><br><br>
    Phone:<input type="tel" name="uphone" placeholder="請輸入連絡電話"><br><br>

    <a href="Home_Page_edit.php">
      <input type="submit" value="Sign Up">
    </a>
    <input type="reset" value="Clear">
  </form>
</body>
</html>
