<?php
include'classes.php';
$user = new userinfo;
$cookiename          =  "anantsangrahuserdetails";

if(!isset($_COOKIE[$cookiename])){echo"error";}

else {
	  
	  $user_JSON = json_decode($_COOKIE[$cookiename]);
	  $user->email=$user_JSON->email;
	  $user->password=$user_JSON->password;
	  $user->db_userinfo_select();
	  
	  if($user->flag==1){
	                    $user_JSON           =   json_encode($user);
						$cookiename          =  "anantsangrahuserdetails";
						$anantsangrahvalue   =   $user_JSON;
						setcookie($cookiename,$anantsangrahvalue, time() + (86400), "/");
						echo $user_JSON;
					    }
	  
      }


?>
