<?php
include'classes.php';
$userdir   = new userdirectories;

$currentfolder=$_COOKIE["currentlocation"];
$user=$_COOKIE["anantsangrahuserdetails"];

$user = json_decode($user);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 


	                              
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
																	 $userdir->dir_flag                      = 1;
																	 
																	 $JSON_userdir=json_encode($userdir);
																	 echo $JSON_userdir;																	 
                                                                     }
                                 else {
									   $userdir->dir_flag = 0;
									   $JSON_userdir=json_encode($userdir);
						               echo $JSON_userdir;	
									   }
$conn->close();




?>