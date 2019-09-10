<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>家教網-登入</title>
  <link rel="stylesheet" type="text/css" href="signUp.css">
  <!--<style>
  header,form,p,footer{
    text-align: center;
  }
  form{
    border: 5px solid gray;
  }
  footer{
    color: white;
    background-color: black;
  }
</style>-->
</head>
<body>
  <header>
    <h1>Sign In/登入</h1>
    <h2>Please enter your account and your password</h2><br>
    <h2>請輸入您的帳號和密碼</h2><br>
  </header>
  <form action="signIn_list.php" method="post">
    Account(帳號):<input type="text" name="uact" required/><br><br>
    Password(密碼):<input type="password" name="upas" required/><br><br><br>
    <input type="submit" value="Sign In">
    <input type="reset" value="Clear">
  </form>
  <p>Having not submitted yet?/還沒註冊嗎?<a href="signUp_edit.php">Sign Up/註冊</a></p>

  <footer>
    <h3>Welcome to MIS全國家教網</h3>
  </footer>

</body>
</html>
