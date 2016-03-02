<?php

$id = $_POST['id'];

mkdir("pdf/$id",0777);

$target_dir = "pdf/$id/";
#$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$nombre = basename($_FILES["fileToUpload"]["name"]);
$select = date('ymdhis');
# time()
$target_file = $target_dir . $select . '.cotizacion.' . $nombre;




$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if file already exists
if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 9000000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "dotx" && $imageFileType != "odt") {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
} 

else {
	
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		
		header("Location: cliente.php?id=$id&file=1");
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

	} 

	else {
		echo "Sorry, there was an error uploading your file.";
	}

}

?> 