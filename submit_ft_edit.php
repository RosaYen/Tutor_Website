<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>MIS全國家教網-找家教</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

    <?php
    include("connect_group11.php");
    $ftaccount=$_POST['uAccount'];

    $sql_select = "SELECT ftId FROM find_teacher_info ORDER BY ftId DESC";
    $ftId        =  $db -> prepare($sql_select);
    $ftId               -> execute();
    $result     =  $ftId-> fetchAll(PDO::FETCH_BOTH);

    $ftcount      = $result[0][0];
    $ftcount      = $ftcount + 1;

    $account_select = "SELECT `ftAccount` FROM `find_teacher_info` WHERE ftAccount = :account";
    $ftId = $db   ->  prepare($account_select);
    $ftId         ->  execute(array(':account' => $ftaccount));
    $result   = $ftId ->  fetchAll(PDO::FETCH_BOTH);


    if($result){
      }
      else{
      $sql_insert_member= "INSERT INTO `find_teacher_info`(ftId,ftAccount,ftConn_name,ftHEarning,ftNumber_of_student,ftGender,ftSchool,ftStudent_grade,ftSubject,
        ftNote_of_student,ftClasshour,ftWeek_or_month,ftClass_times,        ftClass_start_time,ftStartnow,ftTeaching_material,ftCCity,ftClassplace,ftSEmail,ftSTelephone)

                          VALUES(:ftId,:ftAccount,:ftConn_name,:ftHEarning,:ftNumber_of_student,:ftGender,:ftSchool,:ftStudent_grade,:ftSubject,:ftNote_of_student,:ftClasshour,:ftWeek_or_month,:ftClass_times,:ftClass_start_time,:ftStartnow,:ftTeaching_material,:ftCCity,:ftClassplace,:ftSEmail,:ftSTelephone)";
      $insert_member = $db -> prepare($sql_insert_member);
      $insert_member -> execute(array(
                                      ':ftId'               => $ftcount,
                                      ':ftAccount'          => $_POST['uAccount'],
                                      ':ftConn_name'        => $_POST['conn_name'],
                                      ':ftHEarning'         => $_POST['hEarning'],
                                      ':ftNumber_of_student'=> $_POST['number_of_student'],
                                      ':ftGender'           => $_POST['gender'],
                                      ':ftSchool'           => $_POST['school'],
                                      ':ftStudent_grade'    => $_POST['student_grade'],
                                      ':ftSubject'          => $_POST['subject'],
                                      ':ftNote_of_student'  => $_POST['note_of_student'],
                                      ':ftClasshour'        => $_POST['classhour'],
                                      ':ftWeek_or_month'    => $_POST['week_or_month'],
                                      ':ftClass_times'      => $_POST['class_times'],
                                      ':ftClass_start_time' => $_POST['class_start_time'],
                                      ':ftStartnow'         => $_POST['startnow'],
                                      ':ftTeaching_material'=> $_POST['teaching_material'],
                                      ':ftCCity'            => $_POST['cCity'],
                                      ':ftClassplace'       => $_POST['classplace'],
                                      ':ftSEmail'           => $_POST['sEmail'],
                                      ':ftSTelephone'       => $_POST['sTelephone']));
      }
      /*else
      {
          echo ("無效的帳號，請再輸入一次");
      }*/
      ?>
  </head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="Home_Page.php">MIS <span>全國家教網</span></a></div>
				<a href="#menu">主選單</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="Home_Page.php">主頁/Home</a></li>
          <li><a href="submit_ft.html">找家教/Find Tutor</a></li>
          <li><a href="submit_fs.html">找學生/Find Student</a></li>
          <li><a href="http://140.117.68.56/web2017/B044012038/140.117.68.56/web2017/B044012038/final/blog_edit.php">部落格/Blog</a></li>
          <li><a href="aboutUs.html">關於我們/About Us</a></li>
          <li><a href="edit_Selfinfor">編輯個人資料/Edit Self-Information</a></li>
          <li><a href="Sign_Page.html">登出/Sign Out</a></li>
				</ul>
			</nav>
		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>找家教</h1>
								<blockquote>
								<p>It's not that good students are lacking to our knowledge, but lack of perceiving.<br>
									                                                         -----MIS tutoring website
								</p>
								</blockquote>
							</header>
							<div class="flex flex-2">
								<div class="col col2">
									<h3>Welcome to the MIS tutoring website!</h3>
      								<p>We are proud to offer you the best tutoring porgram in Kaohsiung!<br>
        							Check it around to see if there's anything you want.<br>
        							Have a good time!
      								</p>
									<p>Best tutoring program store.<br>
          							Contact us by your phone or email.<br>
          							phone:0988-365-404<br>
          							mail:mistutor@mis.com<br>
          							It's our pleasure to acieve your message.<br>
          							See you!
        							</p>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="#" class="link"><img src="images/pic02.jpg" alt="" /></a>
									</div>
								</div>
							</div>
							<h4>教師資訊</h4>
							  <div class="table-wrapper">
							    <table class="alt">
							      <thead>
							        <tr>
							          <th>教師姓名</th>
							          <th>性別</th>
							          <th>時薪</th>
							          <th>授課縣市</th>
							          <th>上課時間(起-迄)</th>
							          <th>email</th>
							          <th>連絡電話</th>
							          <th>開課需求人數</th>
							          <th>已報名人數</th>
							          <th>報名</th>
							          <th>部落格</th>
							        </tr>
							      </thead>
							      <tbody>
							        <tr>
							          <td>貝琪</td>
							          <td>女</td>
							          <td>2500</td>
							          <td>新竹市</td>
							          <td>下午04:30-下午06:30</td>
							          <td>990615@gmail.com</td>
							          <td>0910123456</td>
							          <td id="max0">5</td>
							          <td id="number0">3</td>
							          <td><input type="button" value="報名" id="enroll0" onclick="enroll_0()"></td>
							          <td><a href="Becky_blog.php"><input type="button" value="部落格"></a></td>
							        </tr>
							        <tr>
							          <td>安迪</td>
							          <td>男</td>
							          <td>3200</td>
							          <td>新北市</td>
							          <td>上午09:00-上午11:50</td>
							          <td>chopppp@gmail.com</td>
							          <td>0914567890</td>
							          <td id="max1">6</td>
							          <td id="number1">2</td>
							          <td><input type="button" value="報名" id="enroll1" onclick="enroll_1()"></td>
							          <td><a href="Andy_blog.php"><input type="button" value="部落格"></a></td>
							        </tr>
							        <tr>
							          <td>辛蒂</td>
							          <td>女</td>
							          <td>5200</td>
							          <td>台中市</td>
							          <td>下午06:30-下午10:30</td>
							          <td>luffy22@gmail.com</td>
							          <td>0911234567</td>
							          <td id="max2">4</td>
							          <td id="number2">0</td>
							          <td><input type="button" value="報名" id="enroll2" onclick="enroll_2()"></td>
							          <td><a href="Cindy_blog.php"><input type="button" value="部落格"></a></td>
							        </tr>
							        <tr>
							          <td>香吉士</td>
							          <td>男</td>
							          <td>1900</td>
							          <td>台南市</td>
							          <td>下午02:30-下午04:20</td>
							          <td>19781116@gmail.com</td>
							          <td>0911222333</td>
							          <td id="max3">10</td>
							          <td id="number3">8</td>
							          <td><input type="button" value="報名" id="enroll3" onclick="enroll_3()"></td>
							          <td><a href="Sanji_blog.php"><input type="button" value="部落格"></a></td>
							        </tr>
							        <tr>
							          <td>娜美</td>
							          <td>女</td>
							          <td>800</td>
							          <td>苗栗縣</td>
							          <td>上午08:10-下午05:00</td>
							          <td>0631nami@gmail.com</td>
							          <td>0917890123</td>
							          <td id="max4">3</td>
							          <td id="number4">2</td>
							          <td><input type="button" value="報名" id="enroll4" onclick="enroll_4()"></td>
							          <td><a href="Namei._blog.php"><input type="button" value="部落格"></a></td>
							        </tr>
							      </tbody>
							      <tfoot>
							        <tr>
							          <td colspan="9"></td>
							          <td>任何問題，歡迎來信洽詢。</td>
							        </tr>
							      </tfoot>
							    </table>
							  </div><br>

							<form method="post" autocomplete="on">
  <table border="0" align="center" style="color: #FFDDAA" bgcolor="#880000">
      <h1 style="color:#191970">職缺資訊表</h1>

      <p size="5" style="color: #191970;">感謝您的填寫，祝早日配對成功!</p>

      <h2>職缺資訊</h2>
      <tr>案件編號<?php echo $ftcount?><br>
      </tr>
      <tr>
        帳號<?php echo $_POST['uAccount']?><br>
      </tr>
      <hr>
      <tr>
        聯絡人姓名<?php echo $_POST['conn_name']?><br>
      </tr>
      <hr>

      <strong>教師待遇</strong><br>
      <tr>
        薪資待遇<br>
        時薪:新台幣<?php echo $_POST['hEarning']?>元<br>
      </tr>
      <hr>

      <strong>學生狀況</strong><br>
      <tr>
        1.上課人數<?php echo $_POST['number_of_student']?>人<br>
      </tr>
      <tr>
        2.學生性別<?php echo $_POST['gender']?><br>
      </tr>
      <tr>
        3.學生年級<?php echo $_POST['school']?>
          <?php echo $_POST['student_grade']?>年級<br>
      </tr>

      <tr>
        4.上課科目<?php echo $_POST['subject']?><br>
      </tr>
      <tr>
        5.學習狀況<br>
        <?php echo $_POST['note_of_student']?><br>
      </tr>

      <hr>
      <strong>上課方式</strong><br>
      <tr>
        1.每次上課時數<?php echo $_POST['classhour']?>小時
        <br>
      </tr>
      <tr>
        2.上課頻率
        <?php echo $_POST['week_or_month']?>
          次數
        <?php echo $_POST['class_times']?>次<br>
      </tr>
      <tr>
        3.希望開始日期<?php echo $_POST['class_start_time']?><br>
          立刻開始<?php echo $_POST['startnow']?><br>
      </tr>
      <tr>
        4.可否接受自編教材
          <?php echo $_POST['teaching_material']?>
      </tr>
      <tr>
        5.授課縣市
      <?php echo $_POST['cCity']?><br>

      </tr>
      <tr>
        6.授課環境:可在
          <?php echo $_POST['classplace']?><br>
      </tr>
      <hr>

      <strong>聯絡方式</strong><br>
      <tr>email
        <?php echo $_POST['sEmail']?><br>
      </tr>
      <tr>電話
        <?php echo $_POST['sTelephone']?><br>
      </tr>
  </table>


						</div>
					</section>

		<!-- Footer -->
			<footer id="footer" style="background-color: black;">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Copy right to MIS全國家教網.<br> All rights reserved.<br> Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
		  function enroll_0(){
		    var max = parseInt(document.getElementById("max0").innerHTML);
		    var number = parseInt(document.getElementById("number0").innerHTML);

		    if(number<max){
		      if(confirm("確定要報名嗎?")){
		        alert("報名成功\n報名時間:"+Date());
		        document.getElementById("number0").innerHTML = ++number;
		      }
		      else {
		        alert("取消報名");
		      }

		    }
		    else{
		      window.alert("抱歉，目前已額滿。");
		    }
		  }

		  function enroll_1(){
		    var max = parseInt(document.getElementById("max1").innerHTML);
		    var number = parseInt(document.getElementById("number1").innerHTML);

		    if(number<max){
		      if(confirm("確定要報名嗎?")){
		        alert("報名成功\n報名時間:"+Date());
		        document.getElementById("number1").innerHTML = ++number;
		      }
		      else {
		        alert("取消報名");
		      }
		    }
		    else{
		      window.alert("抱歉，目前已額滿。");
		    }
		  }

		  function enroll_2(){
		    var max = parseInt(document.getElementById("max2").innerHTML);
		    var number = parseInt(document.getElementById("number2").innerHTML);

		    if(number<max){
		      if(confirm("確定要報名嗎?")){
		        alert("報名成功\n報名時間:"+Date());
		        document.getElementById("number2").innerHTML = ++number;
		      }
		      else {
		        alert("取消報名");
		      }
		    }
		    else{
		      window.alert("抱歉，目前已額滿。");
		    }
		  }

		  function enroll_3(){
		    var max = parseInt(document.getElementById("max3").innerHTML);
		    var number = parseInt(document.getElementById("number3").innerHTML);

		    if(number<max){
		      if(confirm("確定要報名嗎?")){
		        alert("報名成功\n報名時間:"+Date());
		        document.getElementById("number3").innerHTML = ++number;
		      }
		      else {
		        alert("取消報名");
		      }
		    }
		    else{
		      window.alert("抱歉，目前已額滿。");
		    }
		  }

		  function enroll_4(){
		    var max = parseInt(document.getElementById("max4").innerHTML);
		    var number = parseInt(document.getElementById("number4").innerHTML);

		    if(number<max){
		      if(confirm("確定要報名嗎?")){
		        alert("報名成功\n報名時間:"+Date());
		        document.getElementById("number4").innerHTML = ++number;
		      }
		      else {
		        alert("取消報名");
		      }
		    }
		    else{
		      window.alert("抱歉，目前已額滿。");
		    }
		  }
		  </script>
	</body>
</html>
