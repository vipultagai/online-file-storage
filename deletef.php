<?php
$newf                 =  $_REQUEST["eid"];
$currentfolder        =  $_COOKIE["currentlocation"];
$user                 =  $_COOKIE["anantsangrahuserdetails"];
$user                 =  json_decode($user);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 

$sql="SELECT *from userdirectories where dir_parent='$currentfolder' and dir_owner_id='$user->user_id' and dir_name='$newf';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){ $flag=1;}
else{
     $sql="SELECT *from userfiles where file_parent='$currentfolder' and file_owner_id='$user->user_id' and file_name='$newf';";
     $result = mysqli_query($conn, $sql);	
     if (mysqli_num_rows($result) > 0){ $flag=2;}
	 else{$flag=0;echo"0";}
	 }
	 
if($flag==1){
             $sql="DELETE FROM userdirectories where dir_parent='$currentfolder' and dir_owner_id='$user->user_id' and dir_name='$newf';";
		     if ($conn->query($sql) === TRUE) {echo "1";}
             }
if($flag==2){
             $sql="DELETE FROM  userfiles where file_parent='$currentfolder' and file_owner_id='$user->user_id' and file_name='$newf';";
		     if ($conn->query($sql) === TRUE) {echo "1";}
             }
$conn->close();
?>