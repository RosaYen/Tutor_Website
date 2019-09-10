<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>MIS全國家教網-找學生</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	  <?php
    include("connect_group11.php");
    $fsaccount=$_POST['uAccount'];

    $sql_select = "SELECT fsId FROM find_student_info ORDER BY fsId DESC";
    $fsId        =  $db -> prepare($sql_select);
    $fsId               -> execute();
    $result     =  $fsId-> fetchAll(PDO::FETCH_BOTH);

    $fscount      = $result[0][0];
    $fscount      = $fscount + 1;

    $account_select = "SELECT `fsAccount` FROM `find_student_info` WHERE fsAccount = :account";
    $fsId = $db   ->  prepare($account_select);
    $fsId         ->  execute(array(':account' => $fsaccount));
    $result   = $fsId ->  fetchAll(PDO::FETCH_BOTH);


    if($result){
      }
      else{
      $sql_insert_member= "INSERT INTO `find_student_info`(fsId,fsAccount,fsT_name,fsNote_of_teacher,fsNote_of_class,fsT_profile,fsNumber_of_student,fsStu_edu_level,fsStu_grade,fsGender,fsNo_required,fsSubject,fsClasshour,fsWeek_or_month,fsClass_times,fsClass_start_time,fsStartnow,fsTeaching_material,fsCCity,fsClassplace,fsHEarning,fsTEmail,fsTTelephone)

                          VALUES(:fsId,:fsAccount,:fsT_name,:fsNote_of_teacher,:fsNote_of_class,:fsT_profile,:fsNumber_of_student,:fsStu_edu_level,:fsStu_grade,:fsGender,:fsNo_required,:fsSubject,:fsClasshour,:fsWeek_or_month,:fsClass_times,:fsClass_start_time,:fsStartnow,:fsTeaching_material,:fsCCity,:fsClassplace,:fsHEarning,:fsTEmail,:fsTTelephone)";
      $insert_member = $db -> prepare($sql_insert_member);
      $insert_member -> execute(array(
                                      ':fsId'               => $fscount,
                                      ':fsAccount'          => $_POST['uAccount'],
                                      ':fsT_name'           => $_POST['t_name'],
                                      ':fsNote_of_teacher'  => $_POST['note_of_teacher'],
                                      ':fsNote_of_class'    => $_POST['note_of_class'],
                                      ':fsT_profile'        => $_POST['t_profile'],
                                      ':fsNumber_of_student'=> $_POST['number_of_student'],
                                      ':fsStu_edu_level'    => $_POST['stu_edu_level'],
                                      ':fsStu_grade'        => $_POST['stu_grade'],
                                      ':fsGender'           => $_POST['gender'],
                                      ':fsNo_required'      => $_POST['no_required'],
                                      ':fsSubject'          => $_POST['subject'],
                                      ':fsClasshour'        => $_POST['classhour'],
                                      ':fsWeek_or_month'    => $_POST['week_or_month'],
                                      ':fsClass_times'      => $_POST['class_times'],
                                      ':fsClass_start_time' => $_POST['class_start_time'],
                                      ':fsStartnow'         => $_POST['startnow'],
                                      ':fsTeaching_material'=> $_POST['teaching_material'],
                                      ':fsCCity'            => $_POST['cCity'],
                                      ':fsClassplace'       => $_POST['classplace'],
                                      ':fsHEarning'         => $_POST['hEarning'],
                                      ':fsTEmail'           => $_POST['tEmail'],
                                      ':fsTTelephone'       => $_POST['tTelephone']));
      }
      echo "輸入成功!";
      ?>

  </head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="Home_Page.php">MIS <span>全國家教網</span></a></div>
				<a href="#menu">目錄</a>
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
								<h1>找學生</h1>
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
							<h4>學生資訊</h4>
							      <div class="table-wrapper">
							        <table class="alt">
							          <thead>
							            <tr>
							              <th>聯絡人姓名</th>
							              <th>性別</th>
							              <th>徵學科目</th>
							              <th>學生級數</th>
							              <th>學生狀況</th>
							              <th>email</th>
							              <th>連絡電話</th>
							              <th>是否徵到家教(是:1/否:0)</th>
							              <th>報名</th>
							            </tr>
							          </thead>
							          <tbody>
							            <tr>
							              <td>索隆</td>
							              <td>男</td>
							              <td>地理</td>
							              <td>國二</td>
							              <td>普通</td>
							              <td>zoro1234@gmail.com</td>
							              <td>0918901234</td>
							              <td id="number0">1</td>
							              <td><input type="button" value="報名" id="enroll0" onclick="enroll_0()"></td>
							            </tr>
							            <tr>
							              <td>羅賓</td>
							              <td>男</td>
							              <td>數學</td>
							              <td>高三</td>
							              <td>良好</td>
							              <td>robin1989@gmail.com</td>
							              <td>0933111222</td>
							              <td id="number1">0</td>
							              <td><input type="button" value="報名" id="enroll1" onclick="enroll_1()"></td>
							            </tr>
							            <tr>
							              <td>花媽</td>
							              <td>女</td>
							              <td>英文</td>
							              <td>小一</td>
							              <td>不認真</td>
							              <td>flower@gmail.com</td>
							              <td>0912345678</td>
							              <td id="number2">0</td>
							              <td><input type="button" value="報名" id="enroll2" onclick="enroll_2()"></td>
							            </tr>
							            <tr>
							              <td>香吉士</td>,
							              <td>男</td>
							              <td>微積分</td>
							              <td>大二</td>
							              <td>認真</td>
							              <td>19781116@gmail.com</td>
							              <td>0911222333</td>
							              <td id="number3">0</td>
							              <td><input type="button" value="報名" id="enroll3" onclick="enroll_3()"></td>
							            </tr>
							            <tr>
							              <td>喬巴</td>
							              <td>男</td>
							              <td>資料庫</td>
							              <td>碩二</td>
							              <td>認真</td>
							              <td>chopppp@gmail.com</td>
							              <td>0914567890</td>
							              <td id="number4">1</td>
							              <td><input type="button" value="報名" id="enroll4" onclick="enroll_4()"></td>
							            </tr>
							          </tbody>
							          <tfoot>
							            <tr>
							              <td colspan="8"></td>
							              <td>任何問題，歡迎來信洽詢。</td>
							            </tr>
							          </tfoot>
							        </table>
							      </div>
								<br>
	<form method="post" autocomplete="on">
  <table border="0" align="center" style="color: #FFDDAA" bgcolor="#880000">
      <h1 style="color:#191970">職缺資訊表</h1>

      <p size="5" style="color: #191970;">感謝您的填寫，祝早日配對成功!</p>

      <h2>職缺資訊</h2>
      <tr>案件編號<?php echo $fscount?><br>
      </tr>
      <tr>
        帳號<?php echo $_POST['uAccount']?><br>
      </tr>
      <tr>
        教師姓名<?php echo $_POST['t_name']?><br><br>
      </tr>
      <tr>
        1.教育程度<?php echo $_POST['note_of_teacher']?><br><br>
      </tr>
      <tr>
        2.教學經歷<?php echo $_POST['note_of_class']?><br><br>
      </tr>

      <tr>
        3.個人及教學簡介
        <?php echo $_POST['t_profile']?><br><br>
      </tr>

      <hr>

      <strong>教學條件</strong>
      <tr>
        1.上課人數(1-10人)<?php echo $_POST['number_of_student']?><br>
      </tr>
      <tr>
        2.教學程度<?php echo $_POST['stu_edu_level']?><br>
      </tr>

      <tr>
        3.學生級數<?php echo $_POST['stu_grade']?>年級<br>
      </tr>

      <tr>
        4.接受學生性別<?php echo $_POST['gender']?><br>
          性別限制<?php echo $_POST['no_required']?><br><br>
        <br>
      </tr>

      <tr>
        5.上課科目<?php echo $_POST['subject']?><br>
      </tr>

      <hr>

      <strong>上課方式</strong><br>
      <tr>
        1.每次上課時數<?php echo $_POST['classhour']?>小時
        <br><br>
      </tr>
      <tr>
        2.上課頻率<?php echo $_POST['week_or_month']?>
          次數<?php echo $_POST['class_times']?>次
        <br><br>
      </tr>
      <tr>
        3.希望開始日期<?php echo $_POST['class_start_time']?>
        立刻開始<br><br><?php echo $_POST['startnow']?><br>
      </tr>
      <tr>
        4.教材<?php echo $_POST['teaching_material']?><br>
      </tr>
      <tr>
        5.授課縣市<?php echo $_POST['cCity']?><br>
      </tr>
      <tr>
        6.授課環境:可在<?php echo $_POST['classplace']?><br>
      </tr>
      <hr>

      <strong>教師待遇</strong><br>
      <tr>
        薪資待遇
        時薪:新台幣<?php echo $_POST['hEarning']?>元<br>
      </tr>
      <hr>

      <strong>聯絡方式</strong><br>
      <tr>email<?php echo $_POST['tEmail']?><br>
      </tr>
      <tr>電話<?php echo $_POST['tTelephone']?><br>
      </tr>
  </table>
</form>

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
				var number = parseInt(document.getElementById("number0").innerHTML);

				if(number<1){
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
				var number = parseInt(document.getElementById("number1").innerHTML);

				if(number<1){
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
					document.getElementById("number1").innerHTML = "1";
				}
			}

			function enroll_2(){
				var number = parseInt(document.getElementById("number2").innerHTML);

				if(number<1){
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
				var number = parseInt(document.getElementById("number3").innerHTML);

				if(number<1){
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
				var number = parseInt(document.getElementById("number4").innerHTML);

				if(number<1){
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
