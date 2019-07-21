<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.


$db = mysqli_connect('localhost', 'admin', 'admin123', 'nepadonor');


if($db) {
	
//if connection has been established display connected.
echo "connected";
} 

//if button with the name uploadfilesub has been clicked
if(isset($_POST['child'])) {
//declaring variables

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];

//folder where images will be uploaded
$folder = 'uploadimages/';

//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);

//inserting image details (ie image name) in the database

$sql = "INSERT INTO `child` (`image`)  VALUES ('$filename')";
$qry = mysqli_query($db,  $sql);
if( $qry) {
echo "</br>image uploaded"; 
}
}

?>


<!DOCTYPE html>
<html>
<body>
<!--Make sure to put "enctype="multipart/form-data" inside form tag when uploading files -->
<form action="" method="post">
<!--input tag for file types should have a "type" attribute with value "file"-->
<input type="file" name="uploadfile" />
<input type="submit" name="child" value="upload" />
</form>
</body>
</html>

