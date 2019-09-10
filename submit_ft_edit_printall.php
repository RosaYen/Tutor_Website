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
    include("connect.php");
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
      $sql_insert_member= "INSERT INTO `find_teacher_info`
      (ftId,ftAccount,ftConn_name,ftHEarning,ftNumber_of_student,ftGender,ftSchool,ftStudent_grade,ftSubject,
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
				<div class="logo"><a href="index.html">MIS <span>全國家教網</span></a></div>
				<a href="#menu">主選單</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="Home_Page.php">主頁/Home</a></li>
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
							<div>
                <table border="1">
                <tr>
                      <td>聯絡人姓名</td>
                      <td>學生年級</td>
                      <td>上課科目</td>
                      <td>授課縣市</td>
                      <td>教師待遇</td>
                      <td>電話</td>
                    </tr>

                <?php  
                 
                  $sql_select="SELECT * FROM `find_student_info`";
                  $recordinfo= $db -> prepare($sql_select);
                  $recordinfo -> execute();
                  while($record1=$recordinfo->fetch(PDO::FETCH_ASSOC))
                    {
                      $count=0;
                
                ?>
                  
                    <tr>
                      <td><?php echo $record1['ftConn_name'];?></td>
                      <td><?php echo $record1['ftSchool'];?> <?php echo $record1['ftStudent_grade']?> 年級</td>
                      <td><?php echo $record1['ftSubject'];?></td>
                      <td><?php echo $record1['ftCCity'];?></td>
                      <td><?php echo $record1['ftHEarning'];?></td>
                      <td><?php echo $record1['ftSTelephone'];?></td>
                    </tr>
                  
                <?php
                   $count++;
                   }
                ?>
                   </table>
              </div>  

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

	</body>
</html>