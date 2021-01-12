<?php
include'classes.php';

														       $user= new userinfo;
	                                                           $user->email     =    $_REQUEST["email"];
														       $user->password  =    $_REQUEST["password"];
														       $user->db_userinfo_select();
															   
															   $k=$user->flag;
														       if($k==1){
														                 $user_JSON = json_encode($user);
																		 $cookiename          =  "anantsangrahuserdetails";
																		 $anantsangrahvalue   =   $user_JSON;
																		 setcookie($cookiename,$anantsangrahvalue, time() + (86400), "/");
																		 echo $_COOKIE["$cookiename"];
																		}
																else{
																	 $user_JSON = json_encode($user);
																				   echo $user_JSON;
																     
																	 }		
                                                               
  
?>