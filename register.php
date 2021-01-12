<?php
include'classes.php';


if(isset($_REQUEST["email"]) and isset($_REQUEST["password"]) and
 isset($_REQUEST["first_name"]) and isset($_REQUEST["last_name"]) and
 isset($_REQUEST["date_of_birth"]) and isset($_REQUEST["phone"]) and
 isset($_REQUEST["nationality"]) and isset($_REQUEST["account_type"]) ){
	 
															   $user= new userinfo;
															   
															   $user->first_name           =    $_REQUEST["first_name"];
															   $user->last_name            =    $_REQUEST["last_name"];
															   $user->email                =    $_REQUEST["email"];
															   $user->user_id              =    $_REQUEST["phone"];
															   $user->password             =    $_REQUEST["password"];
															   $user->date_of_birth        =    $_REQUEST["date_of_birth"];
														       $user->phone                =    $_REQUEST["phone"];
															   $user->nationality          =    $_REQUEST["nationality"];
															   $user->account_type         =    $_REQUEST["account_type"];
															  
															   if($user->account_type=="Free"){$user->disk_space_allowed=20;$user->disk_space_used=0;}
															   if($user->account_type=="Premium"){$user->disk_space_allowed=20;$user->disk_space_used=0;}
															   
															   $user->db_userinfo_select();
															   $k=$user->flag;
															  
															   if($k==1){
																		 echo"9";
																		 exit();
															            }
															   else{
																    $servername = "localhost";
                                                                    $username = "root";
                                                                    $password = "";
                                                                    $dbname = "cloud1";
                                                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                                                    if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 
												                    $sql = "SELECT * FROM userinfo where phone='$user->phone'";
                                                                    $result = $conn->query($sql);
					                                                 if ($result->num_rows > 0) {echo "7";exit();}
																	 else{
																          $user->first_name           =    $_REQUEST["first_name"];
																	      $user->last_name            =    $_REQUEST["last_name"];
																          $user->email                =    $_REQUEST["email"];
																	      $user->user_id              =    $_REQUEST["phone"];
																	      $user->password             =    $_REQUEST["password"];
																	      $user->date_of_birth        =    $_REQUEST["date_of_birth"];
																	      $user->phone                =    $_REQUEST["phone"];	
																	      $user->nationality          =    $_REQUEST["nationality"];
																	      $user->account_type         =    $_REQUEST["account_type"];
																	      
																		  $user->db_userinfo_insert();
																		  
																		  if($user->flag==2){
																			                  date_default_timezone_set("Asia/Calcutta");
																							  $today = date("Y-m-d H:i:s"); 
																		                      
																							  $servername = "localhost";
																							  $username = "root";
																						      $password = "";
																							  $dbname = "cloud1";
																							  $conn = new mysqli($servername, $username, $password, $dbname);
																							  if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 
																							  
																							  $sql="INSERT INTO `userdirectories` (`dir_id`, `dir_name`, `dir_parent`, `dir_owner_id`, `dir_size`, `dir_upload_date`, `dir_last_access_date`, `dir_sharing_type`, `dir_access_list`, `dir_flag`) 
																							  VALUES ($user->user_id, 'root', '$user->user_id', '$user->user_id', 0, '$today', '$today', 'all', '', 1);";
																							  
																							  
																		                      if ($conn->query($sql) === TRUE) {echo "1";} 
					                                                                          else {echo "Error: " . $sql . "<br>" . $conn->error;}
                                                                                              $conn->close();
																							  
																							  
																							  
																		                      
																		                     }
																		  
																		   }
																	   }
}
																	
															  
                                                               
  
?>