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
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">MIS <span>全國家教網</span></a></div>
				<a href="#menu">主選單</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="Home_Page.php">主頁</a></li>
					<li><a href="submit_ft.html">找家教/Find Tutor</a></li>
					<li><a href="submit_fs.html">找學生/Find Student</a></li>
					<li><a href="Blog_display.html">部落格/Blog</a></li>
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
										<a href="generic.html" class="link"><img src="images/pic02.jpg" alt="" /></a>
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
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>小丸子</td>
														<td>女</td>
														<td>2500</td>
														<td>新竹市</td>
														<td>下午04:30-下午06:30</td>
														<td>990615@gmail.com</td>
														<td>0910123456</td>
													</tr>
													<tr>  
														<td>喬巴</td>
														<td>男</td>
														<td>3200</td>
														<td>新北市</td>
														<td>上午09:00-上午11:50</td>
														<td>chopppp@gmail.com</td>
														<td>0914567890</td>
													</tr>
													<tr>
														<td>魯夫</td>
														<td>男</td>
														<td>5200</td>
														<td>台中市</td>
														<td>下午06:30-下午10:30</td>
														<td>luffy22@gmail.com</td>
														<td>0911234567</td>
													</tr>
													<tr>
														<td>香吉士</td>
														<td>男</td>
														<td>1900</td>
														<td>台南市</td>
														<td>下午02:30-下午04:20</td>
														<td>19781116@gmail.com</td>
														<td>0911222333</td>
													</tr>
													<tr>
														<td>娜美</td>
														<td>女</td>
														<td>800</td>
														<td>苗栗縣</td>
														<td>上午08:10-下午05:00</td>
														<td>0631nami@gmail.com</td>
														<td>0917890123</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="6"></td>
														<td>任何問題，歡迎來信洽詢。</td>
													</tr>
												</tfoot>
											</table>
										</div>	
		<form method="post" action="find_student.php" autocomplete="on">

	  <table border="0" align="center" style="color: #FFDDAA;;line-height:25px;" bgcolor="#880000" border="1">
	      <h1 style="color:#191970">徵學資訊表</h1>
	      <!--<p size="5" style="color: #191970;">請填寫完整教職資訊，謝謝。</p>-->
	      <strong><h3>教師資料</h3></strong>
	      <hr>
	      <tr>
	        <strong>帳號</strong>
	        <br><?php echo $_POST['uAccount'];?><br>
	      </tr>

	      <tr>
	        <strong>教師姓名</strong>
	        <br><?php echo $_POST['t_name'];?><br><br>
	      </tr>

	      <tr>
	        <strong>1.教育程度</strong>
					<br><?php echo $_POST['note_of_teacher'];?><br><br>
	      </tr>

	      <tr>
	        <strong>2.教學經歷</strong>
	        <br><?php echo $_POST['note_of_class'];?><br><br>
	      </tr>

	      <tr>
	        <strong>3.個人及教學簡介</strong>
	        <br><?php echo $_POST['t_profile'];?><br><br>
	      </tr>
	      <hr>

	      <strong><h3>教學條件</h3></strong>
	      <tr>
	        <strong>1.上課人數(1-10人) </strong>
	        <br><?php echo $_POST['number_of_student'];?>人<br><br>
	      </tr>
	      <tr>
	        <strong>2.教學程度</strong>
					<br><?Php echo $_POST['stu_edu_level'];?><br><br>

	        <strong>3.學生級數</strong>
	        <br><?php echo $_POST['stu_grade'];?><br><br>
	      </tr>

	      <tr>
	        <strong>4.接受學生性別</strong>
	        <br><?php echo $_POST['gender'];?>
					<br><?php echo $_POST['no_required'];?><br><br>
	      </tr>

	      <tr>
	        <strong>5.上課科目</strong>
	        <br><?php echo $_POST['subject'];?><br>
	      </tr>

	      <hr>
	      <strong><h3>上課方式</h3></strong>

	      <tr>
	        <strong>1.每次上課時數 </strong>
	        <br><?php echo $_POST['classhour'];?>小時<br><br>
	      </tr>
	      <tr>
	       <strong> 2.上課頻率</strong>
				 <br><?php echo $_POST['week_or_month'];?><br>
	        次數:<?php echo $_POST['class_times'];?>次(1-10次)
	        <br><br>
	      </tr>
	      <tr>
	        <strong>3.希望開始日期</strong>
	        <br><?php echo $_POST['class_start_time'];?><br>
					<?php echo $_POST['startnow']?><br>
	      </tr>
	      <tr>
	        <strong>4.教材</strong>
					<br><?php echo $_POST['teaching_material'];?><br><br>
	      </tr>
	      <tr>
	        <strong>5.授課縣市</strong>
					<br><?php echo $_POST['cCity']?><br>

	      </tr>
	      <tr>
	        <strong>6.授課環境:可在</strong><br>
					<?php echo $_POST['classplace']?>
	      </tr>
	      <hr>
	      <strong><h3>教師待遇</h3></strong>
	      <tr>
	        <strong>薪資待遇</strong><br>
	        <?php echo $_POST['hEarning'];?>
	      </tr>
	      <hr>
	      <strong><h3>聯絡方式</h3></strong>
	      <tr><strong>email</strong>
	        <?php echo $_POST['tEmail'];?><br>
	      </tr>
	      <tr><strong>電話: </strong>
	        <?php echo $_POST['tTelephone'];?><br>
	      </tr>
	  </table>
		<!--<a href="submit_fs.html">
	  	<input type = "submit" value="重新編輯" style="color: black;">
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

	</body>
</html>
