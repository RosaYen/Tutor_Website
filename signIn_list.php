<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Member List</title>
  <link rel=stylesheet type="text/css" href="signUp.css">
</head>
<body>
  <h1>Member List</h1>
<form action="Home_Page.php" method="post">

    <?PHP
    include("connect_group11.php");

    $account = $_POST['uact'];
    $password = $_POST['upas'];
    //select
    $sql_select = "SELECT mId FROM member ORDER BY mId DESC";
    $mId        = $db -> prepare($sql_select);
    $mId              -> execute();
    $result     = $mId ->fetchAll(PDO::FETCH_BOTH);

    $count      = $result[0][0];
    $count      = $count + 1;

    $account_select = "SELECT `mAccount` FROM `member` WHERE `mAccount` = :account AND `mPassword` = :password";
    $mId	= $db		->	prepare($account_select);
    $mId				->	execute(array(':account' => $account,':password' => $password));
    $result		= $mId	->	fetchAll(PDO::FETCH_BOTH);

    if($result){
      echo("<h1>Sign In Successed! Welcome!</h1>");
      echo("<a href=\"Home_Page.php\"><input type=\"button\" value=\"Home Page\"></a>");
    }
    //insert
    else{
      echo("<h1>Error: Wrong Account or Password! Please try again!</h1>");
      echo("<a href=\"signIn.php\"><input type=\"button\" value=\"Back To Sign In\"></a>");

    // $sql_insert_member = "INSERT INTO `member`(mId,mAccount,mPassword,mName,mBirth,mSex,
    //   mEmail,mPhone)
    //                       VALUES(:mId,:mAccount,:mPassword,:mName,:mBirth,:mSex,
    //                         :mEmail,:mPhone)";
    // $insert_member = $db -> prepare($sql_insert_member);
    // $insert_member -> execute(array(':mId'        => $count,
    //                                 ':mAccount'   => $_POST['uact'],
    //                                 ':mPassword'  => md5($_POST['upas']),
    //                                 ':mName'      => $_POST['uname'],
    //                                 ':mBirth'     => $_POST['ubirthday'],
    //                                 ':mSex'       => $_POST['ugender'],
    //                                 ':mEmail'     => $_POST['uemail'],
    //                                 ':mPhone'     => $_POST['uphone']
    //                                 ));
    //
    // //include("assignment5_connection.php");

    //$park_select = "SELECT * FROM park";
    //$park = $db -> prepare($park_select);
    //$park -> execute();
    /*while($v1=$park->fetch(PDO::FETCH_ASSOC))
    {*/
      ?>
      <!-- ID:<b><?php echo $count;?></b><br><br>
      <P name="postAccount">Account:<b><?php echo $_POST['uact'];?></b></p><br><br>
      Password:<b><?php echo $_POST['upas'];?></b><br><br>
      Name:<b><?php echo $_POST['uname'];?></b><br><br>
      Birthday:<b><?php echo $_POST['ubirthday'];?></b><br><br>
      Gender:<b><?php echo $_POST['ugender'];?></b><br><br>
      Email:<b><?php echo $_POST['uemail'];?></b><br><br>
      Phone:<b><?php echo $_POST['uphone'];?></b><br><br>
      <b><input type="hidden" value="<?php echo $_POST['uact']?>" name="postAct"></b><br><br>

      <a href="Home_Page.php"><input type="button" value="Home Page"></a><br><br> -->

  <?php
    }
  ?>

</form>

  </body>
