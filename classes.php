<?php


   class userinfo {
                   /* Member variables */
                   var $first_name=NULL;
                   var $last_name=NULL;
                   var $user_id=NULL;
                   var $password=NULL;
				   var $date_of_birth=NULL;
				   var $email=NULL;
				   var $phone=NULL;
				   var $nationality=NULL;
				   var $account_type=NULL;
				   var $disk_space_allowed=NULL;
				   var $disk_space_used=NULL;
				   var $flag=NULL;
				  
                   /* Member functions */
                   function setfirst_name($u)            {$this->first_name = $u;}
                   function setlast_name($u)             {$this->last_name = $u;}
                   function setuser_id($u)               {$this->user_id = $u;}
				   function setpassword($u)              {$this->password = $u;}
                   function setdate_of_birth($u)         {$this->date_of_birth = $u;}
                   function setemail($u)                 {$this->email = $u;}
				   function setphone($u)                 {$this->phone = $u;}
				   function setnationality($u)           {$this->nationality = $u;}
				   function setaccount_type($u)          {$this->account_type = $u;}
				   function setdisk_space_allowed($u)    {$this->disk_space_allowed = $u;}
				   function setdisk_space_used($u)       {$this->disk_space_used = $u;}

	               function getfirst_name()              {echo $this->first_name;}
	               function getlast_name()               {echo $this->last_name;}
	               function getuser_id()                 {echo $this->user_id;}
	               function getpassword()                {echo $this->password;}
	               function getdate_of_birth()           {echo $this->date_of_birth;}
	               function getemail()                   {echo $this->email;}
				   function getphone()                   {echo $this->phone;}
	               function getnationality()             {echo $this->nationality;}
				   function getaccount_type()            {echo $this->account_type;}
	               function getdisk_space_allowed()      {echo $this->disk_space_allowed;}
				   function getdisk_space_used()         {echo $this->disk_space_used;}
                   
			

                                                 function db_userinfo_insert(){
                                                 $servername = "localhost";
                                                 $username = "root";
                                                 $password = "";
                                                 $dbname = "cloud1";

                                                 // Create connection
                                                 $conn = new mysqli($servername, $username, $password, $dbname);
                                                 // Check connection
                                                 if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 
                                                 $sql = "INSERT INTO userinfo (first_name, last_name,user_id,password,date_of_birth,
												 email,phone,nationality,account_type,disk_space_allowed,disk_space_used)
                                                 VALUES ('$this->first_name','$this->last_name','$this->user_id',
												 '$this->password','$this->date_of_birth','$this->email',$this->phone,
												 '$this->nationality','$this->account_type',$this->disk_space_allowed,
												 $this->disk_space_used);";
                                                 
					                             if ($conn->query($sql) === TRUE) {$this->flag=2;} 
					                             else {echo "Error: " . $sql . "<br>" . $conn->error;}
                                                 $conn->close();
                                                 }



                                                 function db_userinfo_select(){
                                                 $servername = "localhost";
                                                 $username = "root";
                                                 $password = "";
                                                 $dbname = "cloud1";
                                                 $conn = new mysqli($servername, $username, $password, $dbname);
                                                 if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 
												 $sql = "SELECT * FROM userinfo where email='$this->email' and password='$this->password'";
                                                 $result = $conn->query($sql);
					                             if ($result->num_rows > 0) {
					                             while($row = $result->fetch_assoc()){
                                                $this->first_name           =$row["first_name"];
												$this->last_name            =$row["last_name"];
												$this->user_id              =$row["user_id"];
                                                $this->password             =$row["password"];
												$this->date_of_birth        =$row["date_of_birth"];
												$this->email                =$row["email"];
												$this->phone                =$row["phone"];
												$this->nationality          =$row["nationality"];
												$this->account_type         =$row["account_type"];
												$this->disk_space_allowed   =$row["disk_space_allowed"];
												$this->disk_space_used      =$row["disk_space_used"];
												$this->flag  = 1;
												}
								           		} 
												else{$this->flag  = 0;}  
												$conn->close();
                                                }
												 
												 
						  
                }			

class userdirectories{
					  var $dir_id                = NULL;
	                  var $dir_name              = NULL;
					  var $dir_parent            = NULL;
					  var $dir_owner_id          = NULL;
                      var $dir_size              = NULL;
					  var $dir_upload_date       = NULL;
					  var $dir_last_access_date  = NULL;
					  var $dir_sharing_type      = NULL;
					  var $dir_access_list       = NULL;
					  var $dir_flag              = NULL;
					  
					  }
class userfiles{
					  var $file_id                = NULL;
	                  var $file_name              = NULL;
					  var $file_parent            = NULL;
					  var $file_owner_id          = NULL;
                      var $file_size              = NULL;
					  var $file_upload_date       = NULL;
					  var $file_last_access_date  = NULL;
					  var $file_sharing_type      = NULL;
					  var $file_access_list       = NULL;
					  var $file_flag              = NULL;
					  }		


class activity_log{
	                  var $event_id               = NULL;
					  var $user_id                = NULL;
					  var $event_name             = NULL;
					  var $event_date_time        = NULL;
                   }					  
?>





















