<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>MIS 全國家教網</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<?php
			include("connect_tutor.php");
			//此判斷為判定觀看此頁有沒有權限
			if($_SESSION['username'] == null)
			{
        			echo '您無權限觀看此頁面!';
        			echo '<meta http-equiv=REFRESH CONTENT=2;url=rejust.html>'; 
			}
			?>

	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">MIS <span>全國家教網</span></a></div>
				<a href="#menu">目錄/Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">主頁/Home</a></li>
					<li><a href="find.html">找家教/Find Tutor</a></li>
					<li><a href="#">找學生/Find Student</a></li>
					<li><a href="Blog_display.html">部落格/Blog</a></li>
					<li><a href="aboutUs.html">關於我們/About Us</a></li>
					<li><a href="#">編輯個人資料/Edit Self-Information</a></li>
					<li><a href="Sign_Page.html">登出/Sign Out</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>MIS 全國家教網</h1>
						<p>We are proud to offer you the best tutoring porgram~<br />Check it around to see if there's anything you want.</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">
				<div id="wrap1">
				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="generic.html" class="link"><img src="images/pic01.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>發掘最適合你的家教學生/老師</h3>
										<p>這個網站聚集了各式各樣的學生和老師，在這裡，你可以依照條件（科目/上課時間/上課地點……等等），找到最符合你需求的家教學生或教師。</p>
										<p>透過此網頁的"找家教"功能，來滿足你的需求吧！</p>
										<a href="find.html" class="button">GO!</a>
										<a href="#" class="button">TOP</a>
										<a href="#wrap2" class="button">↓</a>
									</div>
								</div>
						</div>
					</section>
				</div>
				<div id="wrap2">
				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3>瀏覽教師的教學點滴</h3>
									<p>想要查找名師的最新教材嗎？想要了解老師對上課、對學生的想法嗎？這裡設有老師的專屬部落格，可以點進觀看他們的心得喔~</p>
									<p>透過此頁面的<b>"部落格"</b>功能，看看老師到底在想什麼吧！</p>
									<a href="Blog_display.html" class="button">GO!</a>
									<a href="#" class="button">TOP</a>
									<a href="#wrap3" class="button">↓</a>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="generic.html" class="link"><img src="images/pic02.jpg" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div id="wrap3">
				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Join Us!!</h2>
								<p>我們歡迎有創意、有才華、有想法的你加入我們MIS家教網的團隊！</p>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic03.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic05.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic04.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/nsysumis" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
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
