<?php
$currentfolder=$_COOKIE["currentlocation"];
$user=$_COOKIE["anantsangrahuserdetails"];

$user = json_decode($user);
date_default_timezone_set("Asia/Calcutta");
$today = date("Y-m-d H:i:s"); 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 

$sql = "SELECT * from userfiles where file_owner_id='$user->userid' and file_parent='$currentfolder';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {$flag1=1;} 
else {$flag1=0;}

if($flag1==0){





$target_dir = "userdata/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filename1  =  $_FILES["fileToUpload"]["name"];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 



$sql="INSERT INTO `userfiles` (`file_id`, `file_name`, `file_parent`, `file_owner_id`, `file_size`, `file_upload_date`, `file_last_access_date`, `file_sharing_type`, `file_access_list`, `file_flag`) 
VALUES (null, '$filename1', '$currentfolder', '$user->user_id', 0, '$today', '$today', 'onlyme', '', 1);";
																							  
if ($conn->query($sql) === TRUE) {
	                              header('Location:index.php');
								  }

} 


else {
	header('Location:index.php');
}
}

else{
	echo "file with similar name already exists";
}
?>