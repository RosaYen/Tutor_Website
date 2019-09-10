<!DOCTYPE html>
<html>
<head>
	<title>lab9</title>
</head>
<body>
	<span>
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
		<form action="#" method="post" enctype="multipart/form-data">
			Please select an image to upload:
			<input type="file" name="userfile" id="userfile">
			<input type="submit" value="Upload Image" name="submit">
		</form>
		<hr>
	</span>
	<span>
		<p>Image display</p>		
		<input type="submit" value="display Image" name="Image display">
	<?php
		$imgs = array();
		$imgs=scandir('./uploads');
	
		$arrlength = count($imgs);
		echo $arrlength;
		echo "<br>There are ".($arrlength-2)."images in the file.<br><br>";
		for($i = 2; $i < $arrlength; $i++) {
    			echo ($i-1).".img<br>name:".$imgs[$i]."<br>";
    			echo "<img src=\"".$target_dir.$imgs[$i]."\" alt=\"img".$i."\" width='20'><br>";
    			echo "<br>";
			}	
	?>		

	</span>
</body>
</html>