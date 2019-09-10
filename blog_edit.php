<!DOCTYPE html>
<html>
<head>
	<title>MIS家教blog</title>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body style="background-image: url(http://140.117.68.56/web2017/B044012038/140.117.68.56/web2017/B044012038/final/ht.PNG);background-repeat:no-repeat;background-size:1250px 600px;background-color: whitesmoke;;">




<div style="margin-top: 130px;width:100%;height:60px;background-color: none">
<span style="font-size: 35px;color:dimgray;margin-left:57%; ">MIS家教部落格</span><br><br>
<span style="font-size: 20px;color:gray;margin-left:57%; ">   最貼心的家教仲介服務
<span style="font-size: 20px;color:gray;margin-left:57%; "> 上千名優質家教供您選擇</span>


</div>
<br>
<center>
<div style="margin-top:450px;border-style:solid;width:800px;height:300px;background-color: none">
   <div style="margin-top: 20px"><center>
	     <div id="Photo" style="margin-left:50px ">

     </div></center>
   <form action="Blog_display_edit.php" method="post" enctype="multipart/form-data">  
<br>
<!-- <img src="cindy.jpg" name="postphoto1">
 -->    <div id="Name" style="text-align: center;font-size: 15px">
    <center>
   <span><b>輸入招牌名稱:</b></span></center>
    
     <center><input type="text" name="name"></center>
    </div>
   <br>


    <HR color="gray" size="3" width="70%"></HR>
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
</div></center>
<br>
 <br><center> <button type="submit" style="font-size: 15px;" >編輯完成</button></center>
<!---->
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
  <HR color="lightgray" size="1" width="100%"></HR>
  <textarea style="width:600px;height:100px" name="area_intr"></textarea>
</div>

<div id="content" class="tabcontent">
 <h3>服務內容</h3>
  <HR color="lightgray" size="1" width="100%"></HR>
 <textarea style="width:600px;height:100px" name="area_ser"></textarea>
</div>


<div id="essay" class="tabcontent">
 <h3>我的文章</h3>
  <HR color="lightgray" size="1" width="100%"></HR>
 <div id="first01" style="word-break: break-all;"></div>
 
 <textarea  id="area1" style="width:500px;height:100px" name="area_es"></textarea>
 <br><br>

 </div>






<div id="comments" class="tabcontent">
 <h3>留言板</h3>
  <HR color="lightgray" size="1" width="100%"></HR>

		<div class="middle">
			<textarea style="width:600px;height:70px" name="left"></textarea>
		</div>
</div>

<style type="text/css">


#Photo01,#Name{
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
<button type="submit" style="font-size: 15px" >編輯完成</button>
</center>
<br><br>
</form>
</body>
</html>
