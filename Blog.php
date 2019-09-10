<!DOCTYPE html>
<html>
<head>
	<title>MIS家教blog</title>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>




<div>
<span style="align-self: center;font-size: 20px">編輯MIS家教blog</span>

<HR color="gray" size="5" width="100%">
</div>

<br>
 <form action="Blog_display.php" method="post" enctype="multipart/form-data">
<?php
	 


	if($_SERVER['REQUEST_METHOD']=='POST'){//表單傳送	
		$target_dir="uploads/";
		$target_file=$target_dir.basename($_FILES["userfile"]["name"]);
        
	
	
  if(move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)){//檔案上傳成功
      echo "The file has been uploaded.";
    }
    else{
      echo "Sorry, there was an error uploading your file.";
    }
    }
	?>

<div style="border-style:solid;width:800px;height:350px;margin:0 auto;">
   <div style="margin-top: 20px">
	<div id="Photo" style="margin-left:50px ">
	<center><span><b>請上傳大頭貼</b></span><br>
			<input type="file" name="userfile" id="userfile">
			<input type="submit" value="Upload Image" name="submit"></center>
    </div>

    <br><center>
   <span><b>輸入招牌名稱:</b></span></center>
    <div id="Name" style="text-align: center;font-size: 30px">
     <center><input type="text" name="name"></center>
    </div>
    </div>

    <HR color="gray" size="3" width="70%">
    <br>
    <div id="DIV_01">
       <span><b>內容:</b></span>
       <input type="text" name="content">
       <span><b>年級:</b></span>
       <input type="text" name="grade">
       <span><b>特色:</b></span>
       <input type="text" name="feature">
    </div> 
    <br>
    <div id="DIV_02">
       <span><b>地點:</b></span>
       <input type="text" name="location">
       <span><b>經驗:</b></span>
       <input type="text" name="experience">
       <span><b>費用:</b></span>
       <input type="text" name="cost">    
   </div>
<br>
    <div id="DIV_03">
       <span><b>時間:</b></span>
       <input type="text" name="time">     
       <span><b>方式:</b></span>
       <input type="text" name="way">    
       <span><b>教材:</b></span>
       <input type="text" name="book">    
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
    <div style="border-style:solid;width:300px;height:600px">
    	<div style="; margin-left: 10px;margin-top: 10px">
 	<span><b>教學專長:</b></span><br>
    <textarea style="width:200px;height:150px" name="great"></textarea>
    <br><br>
    <span><b>教學經驗:</b></span><br>
     <textarea style="width:200px;height:150px" name="expe_1"></textarea>
     <br><br>
    <span><b>教學優勢:</b></span><br>
     <textarea style="width:200px;height:150px" name="advantage"></textarea>
       </div>
    </div>
</div>
<br>


<div id="self_intro" class="tabcontent">
  <h3>自我介紹</h3>
  <HR color="lightgray" size="1" width="100%">
  <textarea style="width:700px;height:100px" name="area_intr"></textarea>
</div>

<div id="content" class="tabcontent">
 <h3>服務內容</h3>
  <HR color="lightgray" size="1" width="100%">
 <textarea style="width:700px;height:100px" name="area_ser"></textarea>
</div>


<div id="essay" class="tabcontent">
 <h3>我的文章</h3>
  <HR color="lightgray" size="1" width="100%">
 <div id="first01" style="word-break: break-all;"></div>
 <span>請輸入一行標題，新增後再輸入文章內容，不輸入就按新增即可換行:</span>
 <textarea  id="area1" style="width:500px;height:100px" name="area_es"></textarea>
 <br><br>
 
 </div>






<div id="comments" class="tabcontent">
 <h3>留言板</h3>
  <HR color="lightgray" size="1" width="100%">

   
	





  

		
		
		<div class="middle">
			<textarea style="width:700px;height:70px" name="left"></textarea>
		</div>
		
		
		
	

   


</div>

<style type="text/css">
#Photo,#Name{
         display: inline;
}


#DIV_01{
    margin-left:100px;

}
#DIV_02{
	 margin-left:100px;
}
#DIV_03{
	 margin-left:100px;
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
<br><br>
<center>
<button type="submit" style="font-size: 30px" >編輯完成</button>
</center>
<form action="member_data.php" method="post">

</body>
</html>
