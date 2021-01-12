<?php
include'classes.php';
$userfile   = new userfiles;

$currentfolder=$_COOKIE["currentlocation"];
$user=$_COOKIE["anantsangrahuserdetails"];

$user = json_decode($user);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 


	                              
								  $sql = "SELECT *FROM userfiles where file_parent='$currentfolder' and file_owner_id='$user->user_id' ;";
                                  $result = mysqli_query($conn, $sql);
                                  $dataq=array();
								  $i=1;
								  if (mysqli_num_rows($result) > 0){
									
                                  while($row = mysqli_fetch_assoc($result)) {
																			 $folderlist[0]=$i;
									                                         $folderlist[$i]=$row["file_name"];
																			 
																			 $folderuploaddate[0]=$i;
									                                         $folderuploaddate[$i]=$row["file_upload_date"];
																			 
																			 $folderaccessdate[0]=$i;
									                                         $folderaccessdate[$i]=$row["file_last_access_date"];
																			 
																			 $foldersize[0]=$i;
									                                         $foldersize[$i]=$row["file_size"];
																			 
																			 
								                                             $i++;
																			 }
																			 
																	 
																	 
																	 $userfile->file_name                      = $folderlist;
																	 $userfile->file_upload_date               = $folderuploaddate;
																	 $userfile->file_last_access_date          = $folderaccessdate;
																	 $userfile->file_size                      = $foldersize;
																	 $userfile->file_flag                      = 1;
																	 
																	 $JSON_userfile=json_encode($userfile);
																	 echo $JSON_userfile;																	 
                                                                     }
                                 else {
									   $userfile->file_flag = 0;
									   $JSON_userfile=json_encode($userfile);
						               echo $JSON_userfile;	
									   }
$conn->close();




?>