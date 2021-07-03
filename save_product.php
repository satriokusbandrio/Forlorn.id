<?php include("connect.php") ?>
<?php
if(!empty($_POST["delete_id"])){
	$sql = "delete from content where id='".$_POST['delete_id']."';";
	if ($mysqli->query($sql) === TRUE) {
		echo "New record created successfully";
		echo "<script>window.location.href='table.php';</script>";
	}else{
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
}
if(empty($_POST["id"])){
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["pic"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["pic"]["tmp_name"]);
	  if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	  } else {
		echo "File is not an image.";
		$uploadOk = 0;
	  }
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}

	// Check file size
	if ($_FILES["pic"]["size"] > 50000000) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["pic"]["name"])). " has been uploaded.";
		$sql = "INSERT INTO content (heading, subheading, color,price,url_pic) VALUES ('".$_POST['heading']."', '".$_POST['subheading']."', '".$_POST['color']."','".$_POST['price']."','".$_FILES["pic"]["name"]."');";
		if ($mysqli->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<script>window.location.href='table.php';</script>";
		}else{
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
		
	  } else {
		echo "Sorry, there was an error uploading your file.";
	  }
	}
}
else{
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["pic"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["pic"]["name"])). " has been uploaded.";
		$sql = "UPDATE content set heading='".$_POST['heading']."', subheading='".$_POST['subheading']."', color='".$_POST['color']."',price='".$_POST['price']."', url_pic='".$_FILES["pic"]["name"]."' where id='".$_POST['id']."';";
		if ($mysqli->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<script>window.location.href='table.php';</script>";
		}else{
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
		
	  } else {
		echo "Sorry, there was an error uploading your file.";
		$sql = "UPDATE content set heading='".$_POST['heading']."', subheading='".$_POST['subheading']."', color='".$_POST['color']."',price='".$_POST['price']."' where id='".$_POST['id']."';";
		if ($mysqli->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<script>window.location.href='table.php';</script>";
		}else{
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
	  }
	}
}

?>