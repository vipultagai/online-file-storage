<?php


include'classes.php';
$userdir   = new userdirectories;
$currentfolder=$_COOKIE["currentlocation"];
$newfoldername    =    $_REQUEST["newfoldername"];

$user=$_COOKIE["anantsangrahuserdetails"];
$user = json_decode($user);



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 


$sql="SELECT *from userdirectories where dir_parent='$currentfolder' and dir_owner_id='$user->user_id' and dir_name='$newfoldername' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
	$userdir->dir_flag = 00;
    $JSON_userdir=json_encode($userdir);
	echo $JSON_userdir;	
}


else{


$currentfolder=$_COOKIE["currentlocation"];

date_default_timezone_set("Asia/Calcutta");
$today = date("Y-m-d H:i:s"); 
							
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 



$sql="INSERT INTO `userdirectories` (`dir_id`, `dir_name`, `dir_parent`, `dir_owner_id`, `dir_size`, `dir_upload_date`, `dir_last_access_date`, `dir_sharing_type`, `dir_access_list`, `dir_flag`) 
VALUES (null, '$newfoldername', '$currentfolder', '$user->user_id', 0, '$today', '$today', 'onlyme', '', 1);";
																							  
if ($conn->query($sql) === TRUE) {
	                              
								  $sql = "SELECT *FROM userdirectories where dir_parent='$currentfolder' and dir_owner_id='$user->user_id' ;";
                                  $result = mysqli_query($conn, $sql);
                                  $dataq=array();
								  $i=1;
								  if (mysqli_num_rows($result) > 0){
									
                                  while($row = mysqli_fetch_assoc($result)) {
																			 $folderlist[0]=$i;
									                                         $folderlist[$i]=$row["dir_name"];
																			 
																			 $folderuploaddate[0]=$i;
									                                         $folderuploaddate[$i]=$row["dir_upload_date"];
																			 
																			 $folderaccessdate[0]=$i;
									                                         $folderaccessdate[$i]=$row["dir_last_access_date"];
																			 
																			 $foldersize[0]=$i;
									                                         $foldersize[$i]=$row["dir_size"];
																			 
																			 
								                                             $i++;
																			 }
																			 
																	 
																	 
																	 $userdir->dir_name                      = $folderlist;
																	 $userdir->dir_upload_date               = $folderuploaddate;
																	 $userdir->dir_last_access_date          = $folderaccessdate;
																	 $userdir->dir_size                      = $foldersize;
																	 $userdir->dir_flag                      = 11;
																	 
																	 $JSON_userdir=json_encode($userdir);
																	 echo $JSON_userdir;																	 
                                                                     }
                                 else {
									   $userdir->dir_flag = 99;
									   $JSON_userdir=json_encode($userdir);
						               echo $JSON_userdir;	
									   }
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  } 
else {
	  
	  $sql = "SELECT *FROM userdirectories where dir_parent='$currentfolder' ;";
                                  $result = mysqli_query($conn, $sql);
                                  $dataq=array();
								  $i=1;
								  if (mysqli_num_rows($result) > 0){
									
                                  while($row = mysqli_fetch_assoc($result)) {
																			 $folderlist[0]=$i;
									                                         $folderlist[$i]=$row["dir_name"];
																			 
																			 $folderuploaddate[0]=$i;
									                                         $folderuploaddate[$i]=$row["dir_upload_date"];
																			 
																			 $folderaccessdate[0]=$i;
									                                         $folderaccessdate[$i]=$row["dir_last_access_date"];
																			 
																			 $foldersize[0]=$i;
									                                         $foldersize[$i]=$row["dir_size"];
																			 
																			 
								                                             $i++;
																			 }
																			 
																	 
																	 
																	 $userdir->dir_name                      = $folderlist;
																	 $userdir->dir_upload_date               = $folderuploaddate;
																	 $userdir->dir_last_access_date          = $folderaccessdate;
																	 $userdir->dir_size                      = $foldersize;
																	 $userdir->dir_flag                      = 01;
																	 
																	 $JSON_userdir=json_encode($userdir);
																	 echo $JSON_userdir;																	 
                                                                     }
                                 else {
									   $userdir->dir_flag = 99;
									   $JSON_userdir=json_encode($userdir);
						               echo $JSON_userdir;	
									   }
	  
	  
	  
	  
	  
	  
	  
	  
	  }
}

$conn->close();




?>