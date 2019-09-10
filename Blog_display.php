<!DOCTYPE html>
<html>
<head>
	<title>MIS家教blog</title>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<div>
<span style="align-self: center;font-size: 20px">MIS家教blog</span>

<HR color="gray" size="5" width="100%">
</div>

<br>


<div style="border-style:solid;width:800px;height:300px;margin:0 auto;">
   <div style="margin-top: 20px">
	<div id="Photo" style="margin-left:100px ">
	<?php
		$imgs = array();
		$imgs=scandir('./uploads');
	
		$arrlength = count($imgs);
		echo $arrlength;
		echo "<br>There are ".($arrlength-2)."images in the file.<br><br>";
		for($i = 2; $i < $arrlength; $i++) {
    			echo ($i-1).".img<br>name:".$imgs[$i]."<br>";
    			echo "<img src=\"".$target_dir.$imgs."\" alt=\"img".$i."\" width='20'><br>";
    			echo "<br>";
			}	
	?>		
	
    </div>
   
    <div id="Name" style="display: inline;font-size: 30px; ">
    <center><span id="name"><?PHP $name=$_POST["name"]; 	print("$name");	?></span></center>
    </div>
    </div>

    <HR color="gray" size="3" width="70%">
    
    <div id="DIV_01">
       <span id="r1"><b>內容:</b></span>
       <span id="w1"><?PHP $cont=$_POST["content"]; 	print("$cont");	?>	</span> 
       <span id="r2"><b>年級:</b></span>
       <span id="w2"><?PHP $grad=$_POST["grade"]; 	print("$grad");	?></span>
       <span id="r3"><b>特色:</b></span>
       <span id="w3"><?PHP $feat=$_POST["feature"]; 	print("$feat");	?></span>
    </div> 

    <div id="DIV_02">
       <span id="r4"><b>地點:</b></span>
       <span id="w4"><?PHP $loca=$_POST["location"]; 	print("$loca");	?></span> 
       <span id="r5"><b>經驗:</b></span>
       <span id="w5"><?PHP $expe=$_POST["experience"]; 	print("$expe");	?></span>
       <span id="r6"><b>費用:</b></span>
       <span id="w6"><?PHP $cost=$_POST["cost"]; 	print("$cost");	?></span>
    </div>

    <div id="DIV_03">
       <span id="r7"><b>時間:</b></span>
       <span id="w7"><?PHP $time=$_POST["time"]; 	print("$time");	?></span>
       <span id="r8"><b>方式:</b></span>
       <span id="w8"><?PHP $way=$_POST["way"]; 	print("$way");	?></span>
       <span id="r9"><b>教材:</b></span>
       <span id="w9"><?PHP $book=$_POST["book"]; 	print("$book");	?></span>
    </div>
   <div style="margin-right: 10px ">
   
    </div>
</div>
<br>
<br>
<div class="tab">
  
  
  <button class="tablinks" onclick="openCity(event, 'self_intro')">自我介紹</button>
  <button class="tablinks" onclick="openCity(event, 'content')">服務內容</button>
  <button class="tablinks" onclick="openCity(event, 'essay')">我的文章</button>
  <button class="tablinks" onclick="openCity(event, 'comments')">留言板</button>
</div>

<div id="T_ex">
	<span style="font-size: 20px;">教學經歷</span>
	
	<br>
	<br>
    <div style="border-style:solid;width:300px;height:600px" >
    	<div style="; margin-left: 10px; margin-right:10px;margin-top: 10px ;word-break: break-all;">
 	<span><b>教學專長:</b></span><br>
    <span><?PHP $grea=$_POST["great"]; 	print("$grea");	?></span><br><br>
    <span><b>教學經驗:</b></span><br>
    
    <span><?PHP $ex_1=$_POST["expe_1"]; 	print("$ex_1");	?></span><br><br>
    <span><b>教學優勢:</b></span><br>
    <span><?PHP $adva=$_POST["advantage"]; 	print("$adva");	?></span>
       </div>
    </div>
</div>
<br>




<div id="self_intro" class="tabcontent" style="word-break: break-all;">
  <h3>自我介紹</h3>  <HR color="lightgray" size="1" width="100%">
  <p> <?PHP $a_in=$_POST["area_intr"]; 	print("$a_in");	?></p>
</div>

<div id="content" class="tabcontent" style="word-break: break-all;"">
 <h3>服務內容</h3>
  <HR color="lightgray" size="1" width="100%">
  <p> <?PHP $a_se=$_POST["area_ser"]; 	print("$a_se");	?></p>
</div>


<div id="essay" class="tabcontent">
 <h3>我的文章</h3>
<span style="word-break: break-all;"><?PHP $a_es=$_POST["area_es"]; 	print("$a_es");	?></span>
<div id="first01" style="word-break: break-all;"></div>
 <span>請輸入一行標題，新增後再輸入文章內容，不輸入就按新增即可換行:</span>
 <textarea  id="area1" style="width:500px;height:100px"></textarea>
<button onclick="gointo01()">新增</button>
 </div>

<div id="comments" class="tabcontent">
 <h3>留言板</h3>
  <HR color="lightgray" size="1" width="100%">
 
  <script>
		var count1 = 0;
		function gointo01() {
			count1++;
			var word1 = document.getElementById('area1').value;
			var firstplace1 = document.getElementById('first01');
			var newplace1 = document.createElement('div');
			newplace1.innerHTML = word1+"<br>";
			firstplace1.appendChild(newplace1);
			document.getElementById('area1').value = "";
		}
	
	</script>
<style type="text/css">

#r1,#r4,#r7{
	position: relative;
	left: 100px;
	right: 500px;

}
#w1,#w4,#w7{
	position: relative;
	left: 110px;
    right: 490px;

}



#r2,#r5,#r8{
	position: relative;
	left: 200px;
    right: 400px;
}
#w2,#w5,#w8{
	position: relative;
	left: 210px;
    right: 390px;
}

#r3,#r6,#r9{
	position: relative;
	left: 300px;
    right: 300px;
}
#w3,#w6,#w9{
	position: relative;
	left: 310px;
    right: 290px;
}


body{
	margin: 0;
	padding: 0;

}

.up{
	overflow: hidden;
}
.Left1{
	float: left;
	margin:2% 3% 0 2%;
}
.Left1 img{	
	width:50px;
	height:50px;
	border-radius:50%;
}
.Right1{
	position: relative;
	margin-top: 18px;
	margin-right: 8px;
	font-size: 20px;
	color: black;
	font-weight: bold;
	height: 50px;
}
.middle{
	height: 90px;
	border-bottom: 1px solid lightgray;
	margin: 0 3% 0 2% ;
}
.comment{
	margin:5px 3% 5px 2%;
	color: gray;
	font-size: 15px;
}
.down{
	padding: 1.5%;
}
.down img{
	width:35px;
	height:35px;
	border-radius:50%;
	margin-left: 1%;
	vertical-align: middle;
}
.com{
	margin-left: 2px;
	margin-right: 2px;
	width: 375px;
	height: 30px;
	font-size: 15px;
	vertical-align: middle;
}
.Great{
	margin-left: 10px;
	margin-right: 40px;
	width: 375px;
	height: 40px;
	font-size: 15px;
}
.but{
	margin-left: 1px;
	margin-right: 1px;
	vertical-align: middle;
}
.first{

	border-top: 1px solid lightgray;
	overflow: hidden;
}
.up1{
	float: left;
	margin:0 3% 0 2%;
}
.up1 img{
	width:35px;
	height:35px;
	border-radius:50%;
	margin-left: 2%;
}
.word1{
	color: black;
	position: relative;
	margin-right: 8px;
	font-size: 20px;
	height: 50px;

}
.up2{
	float: left;
	margin:0 3% 0 7.5%;
}
.up2 img{
	width:25px;
	height:25px;
	border-radius:50%;
	margin-left: 1%;
	vertical-align: middle;
}
.comment1{
	margin:5px 3% 5px 2%;
	color: gray;
	font-size: 10px;
}
.Right2{
	position: relative;
	margin-top: 20px;
	margin-right: 8px;
	font-size: 20px;
	color: black;
	font-weight: bold;
	height: 40px;
}
.but1{
	margin-left: 1px;
	margin-right: 7px;
	float: right;
}
.down1{
	
	padding: 1.5%;
	margin-left: 5%;
}
.down1 img{
	width:25px;
	height:25px;
	border-radius:50%;
	margin-left: 1%;
	vertical-align: middle;
}
.com1{
	margin-left: 2px;
	margin-right: 2px;
	width: 367px;
	height: 15px;
	font-size: 10px;
	vertical-align: middle;
}
.Right3{
	position: relative;
	margin-top: 20px;
	margin-right: 8px;
	font-size: 20px;
	color: black;
	font-weight: bold;
	height: 30px;
}
</style>
<script type="text/javascript">
	var num_great=0;
	var idx_Com=0;
	function add_great()
    {
         
         num_great++;
         document.getElementById("num").innerText=num_great+"人說讚";
    }
</script>





    <script>
		var count = 0;
		function gointo() {
			count++;
			var word = document.getElementById('text1').value;
			var firstplace = document.getElementById('first1');
			var newplace = document.createElement('div');
			newplace.innerHTML = '<div class="up1"><img src="my-melody-flat2.png" ></div><div class="Right2"><span>葉倩如</span>&nbsp<span class = "word1">'+word+'</span></div><div id="f'+count+'"><div id="second'+count+'"></div><div class="down1"><img src="my-melody-flat2.png" ><input type="text" placeholder="  回覆......" autofocus autocomplete="off" id="text2'+count+'" class="com1"><input type="button" id="button2'+count+'" value="send" class="but" onclick="gointo1('+count+')"></div></div>'
			firstplace.appendChild(newplace);
			document.getElementById('text1').value = "";
		}
		function gointo1(good) {
			var word1 = document.getElementById('text2'+good).value;
			var secondplace = document.getElementById('second'+good);
			var newplace1 = document.createElement('div');
			newplace1.innerHTML = '<div class="up2"><img src="my-melody-flat2.png" ></div><div class="Right3"><span>葉倩如</span>&nbsp<span class = "word1">'+word1+'</span></div>'
			secondplace.appendChild(newplace1);
			document.getElementById('text2'+good).value = "";	
		}
		
	</script>
	
	<div class="up">
		
		
		<div class="middle">
			<span style="word-break: break-all;"><?PHP $left=$_POST["left"]; 	print("$left");	?>
			</span>
		</div>
		<div class="Great">
		<button id="great" onclick="add_great()"  style="font-size:20px">讚</button>
       <span id="num"></span>
        </div>
		<div class="comment">
			<span>留言</span>
		</div>
		
		</div>
		<div id="alldown">
			<div class="first" id="first1"></div>
		<div class="down">
			<img src="my-melody-flat2.png" >
			<input type="text" placeholder="  留言......" autofocus autocomplete="off" id="text1" class="com">
			<input type="button" id="button" value="send" class="but" onclick="gointo()">
		</div>
		
	
</div>

   
</script>

</div>

<style type="text/css">
#Photo,#Name{
         display: inline;
}



/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 60%;
    margin-left: 50px; 
    margin-right:50px;　
    float:left;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;

}

/* Style the tab content */
.tabcontent {
    display: inline-block;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    margin-left: 50px;
    width: 58%;
}
#T_ex{
	 display: inline;
	 float:right;
	 margin-right: 70px;
}

</style>



<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>
