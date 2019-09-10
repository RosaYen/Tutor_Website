<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>MIS全國家教網-徵家教</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">MIS <span>全國家教網</span></a></div>
				<a href="#menu">目錄</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="Home_Page.php">主頁</a></li>
					<li><a href="aboutUs.html">關於我們</a></li>
					<li><a href="submit_ft.html">徵家教</a></li>
					<li><a href="submit_fs.html">找學生</a></li>
					<li><a href="editInfor.php">編輯個人資料</a></li>
					<li><a href="Sign_Page.html">會員登入</a></li>
				</ul>
			</nav>
		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>徵家教</h1>
								<blockquote>
								<p>It's not that good teachers are lacking to our knowledge, but lack of perceiving.<br>
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
							<form method="post" autocomplete="on">
							<table border="0" align="center" style="color: #FFDDAA;;line-height:25px;" bgcolor="#880000" border="1">
								 <h1 style="color:#191970">職缺資訊表</h1>
								 <p size="5" style="color: #191970;">請填寫完整家教職缺資訊，謝謝。</p>
								 <tr>
									 <strong>帳號</strong><br>
									 <?php echo $_POST['uAccount'];?><br>
								 </tr>
								 <tr>
									 <strong>聯絡人姓名</strong><br>
									 <?php echo $_POST['conn_name'];?><br>
								 </tr>
								 <hr>

								 <strong><h3>教師待遇</h3></strong><br>
								 <tr>
									 <strong>薪資待遇</strong><br>
									 <?php echo $_POST['hEarning'];?><br>
								 </tr>
								 <hr>

								 <strong><h3>學生狀況</h3></strong>
								 <tr>
									 <strong>1.上課人數(1-10人)</strong>
									 <?php echo $_POST['number_of_student'];?>人<br><br>
								 </tr>
								 <tr>
									 <strong>2.學生性別</strong>
									 <?php echo $_POST['gender'];?><br>
								 </tr>
								 <tr>
									 <strong>3.學生年級</strong>
									 <?php echo $_POST['school'];?>
									 <?php echo $_POST['student_grade'];?><br><br>
								 </tr>

								 <tr>
									 <strong>4.上課科目</strong>
									 <?php echo $_POST['subject'];?><br>
									</tr>
										<tr>
											<strong>5.學習狀況</strong><br>
											<?php echo $_POST['note_of_student'];?><br>
										</tr>
										<hr>

										<strong><h3>上課方式</h3></strong><br>
										<tr>
											<strong>1.每次上課時數</strong>
											<?php echo $_POST['classhour'];?>小時
											<br><br>
										</tr>
										<tr>
											<strong>2.上課頻率</strong>
											<?php echo $_POST['week_or_month'];?>
											<?php echo $_POST['class_times'];?>次(1-10次)
											<br><br>
										</tr>
										<tr>
											<strong>3.希望開始日期</strong>
											<?php echo $_POST['class_start_time'];?><br>
											<?php echo $_POST['startnow'];?>
										</tr> <br>
										<tr>
											<strong>4.可否接受自編教材</strong><br>
											<?php echo $_POST['teaching_material'];?>
										</tr>  <br>
										<tr>
										 <strong>5.授課縣市</strong>
										 <?php echo $_POST['cCity'];?>
										<br><br>

										</tr>
										<tr>
											<strong>6.授課環境:可在</strong><br>
											<?php echo $_POST['classplace'];?>
										</tr>
										<hr>

										<strong><h3>聯絡方式</h3></strong>
										<tr><strong>email</strong>
											<?php echo $_POST['sEmail'];?><br>
										</tr>
										<tr>
											<strong>電話 </strong>
											<?php echo $_POST['sTelephone'];?><br>
										</tr>
								</table>
								<!--<a href="submit_ft.html">
									<input type = "submit" value="重新編輯" style="color: black;">
									<button>重新編輯</button>
								</a>-->
								<hr>
								</form>




						</div>
					</section>

		<!-- Footer -->
			<footer id="footer" style="background-color: black;">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/nsysumis" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Copy right to MIS全國家教網.<br> All rights reserved.<br> Design: <a href="#">GROUP11</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
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
