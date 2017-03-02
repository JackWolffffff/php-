<?php 
	//上传文件的限制
	if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "application/x-rar") 
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")) 
		&& ($_FILES["file"]["size"] < 20000000))	 {
		if ($_FILES["file"]["error"] > 0) {
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		} else {
			//打印文件的信息
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type : " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . $_FILES["file"]["size"] . "<br>";
			echo "Stored in: ". $_FILES["file"]["tmp_name"];
			//检测文件是否已经存在
			if (file_exists("upload/" . $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"] . "already exists";
			} else {
				//保存文件
				move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
				echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "disk free space:" . diskfreespace("/")/1000/1000/1000 . "GB";

			}
		}
	} else {
		echo "Invalid file" . $_FILES["file"]["type"];
	}

	
?>