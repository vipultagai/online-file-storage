<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<link rel="stylesheet" href="index.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Online File Storage</title>





<script>


function checkboxchange(){
	                      var terms_policy     = document.getElementById("terms_policy").value;
						  if(terms_policy==0){document.getElementById("terms_policy").value="1";
						                      document.getElementById("registerbuttonz").disabled = false;
											  }
						  if(terms_policy==1){document.getElementById("terms_policy").value="0";
						                      document.getElementById("registerbuttonz").disabled = true;
						                      }
						  }

function My_progress1(){
document.getElementById("box1").style.display="block";
var z   = document.getElementById("box1").offsetWidth;  
var y = 0;
var k = setInterval(function(){
                               var x   = document.getElementById("box2"); 
					           y=y+1;
							   if(y==100){
							              document.getElementById("box1").style.display="none";
										  clearInterval(k);
										  }
							   x.style.width = y +"%";
                               
							  
					   
					           },5);
}




function home() {
My_progress1();


var k = setInterval(function(){
                               if(flag=1){clearInterval(k);}
var homepage   = document.getElementById("homepage");
var aboutus   = document.getElementById("aboutus");
var help   = document.getElementById("help");
var contact   = document.getElementById("contact");
var login   = document.getElementById("login");
var storage   = document.getElementById("storage");
storage.style.display = "none";
homepage.style.display = "block";
aboutus.style.display = "none";
help.style.display = "none";                                     
contact.style.display = "none";
login.style.display = "none";

var flag=1;							
					           },500);
}
function aboutus() {
My_progress1();


var k = setInterval(function(){
                               if(flag=1){clearInterval(k);}
var homepage   = document.getElementById("homepage");
var aboutus   = document.getElementById("aboutus");
var help   = document.getElementById("help");
var contact   = document.getElementById("contact");
var login   = document.getElementById("login");
var storage   = document.getElementById("storage");
storage.style.display = "none";
homepage.style.display = "none";
aboutus.style.display = "block";
help.style.display = "none";                                     
contact.style.display = "none";
login.style.display = "none";

var flag=1;							
					           },500);
}
function contact() {
My_progress1();


var k = setInterval(function(){
                               if(flag=1){clearInterval(k);}
var homepage   = document.getElementById("homepage");
var aboutus   = document.getElementById("aboutus");
var help   = document.getElementById("help");
var contact   = document.getElementById("contact");
var login   = document.getElementById("login");
var storage   = document.getElementById("storage");
storage.style.display = "none";
homepage.style.display = "none";
aboutus.style.display = "none";
help.style.display = "none";                                     
contact.style.display = "block";
login.style.display = "none";

var flag=1;							
					           },500);
}
function help() {
My_progress1();


var k = setInterval(function(){
                               if(flag=1){clearInterval(k);}
var homepage   = document.getElementById("homepage");
var aboutus   = document.getElementById("aboutus");
var help   = document.getElementById("help");
var contact   = document.getElementById("contact");
var login   = document.getElementById("login");
var storage   = document.getElementById("storage");
storage.style.display = "none";
homepage.style.display = "none";
aboutus.style.display = "none";
help.style.display = "block";                                     
contact.style.display = "none";
login.style.display = "none";

var flag=1;							
					           },500);
}

function MyStorage() {
My_progress1();


var k = setInterval(function(){
                               if(flag=1){clearInterval(k);}
var homepage   = document.getElementById("homepage");
var aboutus    = document.getElementById("aboutus");
var help       = document.getElementById("help");
var contact    = document.getElementById("contact");
var login      = document.getElementById("login");
var storage    = document.getElementById("storage");

storage.style.display = "block";
homepage.style.display = "none";
aboutus.style.display = "none";
help.style.display = "none";                                     
contact.style.display = "none";
login.style.display = "none";

var flag=1;							
					           },500);
}

function loginnext(){   
                        var email      = document.getElementById("inputEmail").value;
						var password   = document.getElementById("inputPassword").value;
                        var xmlhttp = new XMLHttpRequest();
						
                        xmlhttp.onreadystatechange = function() {
                                                                 if (this.readyState == 4 && this.status == 200){
																	          var user_JSON = JSON.parse(this.responseText);
							                                                  if(user_JSON.flag!=0){   
																			 
																			                        $('#myModal').modal('hide');
						                                                                            document.getElementById("loginbutton")    .style.display="none";
																		                            document.getElementById("registerbutton") .style.display="none";                                                     
															     		                            document.getElementById("username_dropdown").innerHTML ="Welcome, "+ user_JSON.first_name;
												                                                    document.getElementById("userinfobutton") .style.display="block";
																		                            document.getElementById("storagebutton") .style.display="block";
																									MyStorage(); 
																									document.cookie = "currentlocation=root";
																									load_directories();
																									load_files();
																		                           }
																			  else{
																				   
																				   document.getElementById("loginerror1") .style.display="block";
																			                        }					   
																		 
															    }
																};
                        xmlhttp.open("POST", "login.php", true);
						xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xmlhttp.send("email="+email+"&password="+password);
                        }	
						
function load_directories(){
	                          var xhttp = new XMLHttpRequest();
							  xhttp.onreadystatechange = function() {
							  if (this.readyState == 4 && this.status == 200) {
																				var dir_JSON  = JSON.parse(this.responseText);
													                            var dir_flag   = dir_JSON.dir_flag;
																				if(dir_flag==1){
																					                  var foldercount    = dir_JSON.dir_name[0];
																									  
																									  var divstart    =  "<button <button oncontextmenu='javascript:options(this.id);return false;' style= 'border:none;max-width:100px;margin:10px;background-color:white;' onclick='openfolder(this.id)' class='folders21' id='";
																									  var divstart2   =  "'><img src='/img/folder-icon.png' alt='Smiley face' height='62' width='62'><br><div style='max-width:100px;max-height:50px;overflow:auto;'>";
																									  var divend      =  "</div></button>";
																									  var explorermain="";
																									  while(foldercount>0){
																									                       var part1 = explorermain +divstart+dir_JSON.dir_name[foldercount];
																									                       var part2 = divstart2    +dir_JSON.dir_name[foldercount] +divend;
																									                       explorermain=part1+part2;
																									                       foldercount=foldercount-1;
																									                       }
																									 document.getElementById("explorermain") .innerHTML    =explorermain;
                                                                                                     	
																									 																							 
																									}
																									 
                                                                                }
                                         };
  xhttp.open("GET", "loadfolders.php", true);
  xhttp.send();
                            }


function load_files(){
	                          var xhttp = new XMLHttpRequest();
							  xhttp.onreadystatechange = function() {
							  if (this.readyState == 4 && this.status == 200) {
																				var file_JSON  = JSON.parse(this.responseText);
													                            var file_flag   = file_JSON.file_flag;
																				if(file_flag==1){
																					                  var filecount    = file_JSON.file_name[0];
																									  
																									  var divstart    =  "<button oncontextmenu='javascript:options(this.id);return false;' style= 'border:none;max-width:150px;margin:10px;background-color:white;' onclick='openfile(this.id)' class='folders21' id='";
																									  var divstart2   =  "'><img src='/img/file.png' alt='Smiley face' height='62' width='62'><br><div style='max-width:100px;max-height:50px;overflow:auto;'>";
																									  var divend      =  "</div></button>";
																									  
																									  
																									  
																									  var filesfinal  =  "";
																									  while(filecount>0){
																									                       var part1 = filesfinal+divstart+file_JSON.file_name[filecount];
																									                       var part2 = divstart2    +file_JSON.file_name[filecount] +divend;
																									                       filesfinal=part1+part2;
																									                       filecount=filecount-1;
																														   
																									                       }
																									var expmain  = document.getElementById("explorermain") .innerHTML;
																									var final2   = expmain+filesfinal;		
																									document.getElementById("explorermain") .innerHTML   = final2 ;	
																									}
																								 
							                                                         
							  }
                                         };
  xhttp.open("GET", "loadfiles.php", true);
  xhttp.send();
                            }
							
							
function options(elementid){
							document.getElementById("optiondiv1q").style.visibility="visible";
                            var eid=elementid;
							document.getElementById("deletebutton").value=eid;
							}

function deletef(elementid){
	                        
							var r = confirm("Are you sure you want to delete "+elementid+" ?");
							if (r == true) {
											
                                            var xmlhttp = new XMLHttpRequest();
						                    xmlhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200){
												                   if(this.responseText==1){
																	                        alert(elementid+" was deleted successfully");
																	                        load_directories();
																						    load_files();
																						    }
																			            else{
																				             alert("Error! Please try again.");
																							 load_directories();
																							 load_files();
																			                 }					   
																		 
															    }
																};
											xmlhttp.open("POST", "deletef.php", true);
											xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
											xmlhttp.send("eid="+elementid);
											} 
							else {
								  alert(elementid+" was not deleted");
								  load_directories();
								  load_files();
								  }
                   }							
												
							
$(window).click(function() {
document.getElementById("optiondiv1q").style.visibility="hidden";
});

function openfile(fileid){
	                      var durl="userdata/"+fileid;
						  window.open(durl,'_blank');
                          }						

function load_initial_script() {
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
                                                     var user_JSON = JSON.parse(this.responseText);
													 userid=user_JSON.email;
	                                                 if(user_JSON.flag==1){
														                   $('#myModal').modal('hide');
						                                                   document.getElementById("loginbutton")    .style.display="none";
															   			   document.getElementById("registerbutton") .style.display="none";                                                     
															     		   document.getElementById("username_dropdown").innerHTML ="Welcome, "+ user_JSON.first_name;
																		   document.getElementById("userinfobutton") .style.display="block";
																		   document.getElementById("storagebutton") .style.display="block";
																		   MyStorage();
																		   document.cookie = "currentlocation=root";
																		   load_directories();
																		   load_files();
																		   }
                                                     }
                                         };
  xhttp.open("GET", "initial_script.php", true);
  xhttp.send();
}




function registernext(){
	
                        var first_name       = document.getElementById("first_name").value;
	                    var regex = /^[a-zA-Z]+$/;
                        if(regex.test(first_name) == false){
                                                            document.getElementById("invalidfname").style.display="block";
															
															}	
						else{document.getElementById("invalidfname").style.display="none";}
						
						var last_name        = document.getElementById("last_name").value;
						if(regex.test(last_name) == false){
                                                           document.getElementById("invalidlname").style.display="block";
														   
														   }	
                        else{document.getElementById("invalidlname").style.display="none";}

						var email            = document.getElementById("email").value;
						var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
                        if(regex.test(email)==false){
							                         document.getElementById("invalidemail").style.display="block";
													 
													 }
                        else{document.getElementById("invalidemail").style.display="none";}
						
						
						var password         = document.getElementById("password").value;
						var regex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
						if(regex.test(password)==false){
							                            document.getElementById("invalidpassword").style.display="block";
							                            
														}
						else{document.getElementById("invalidpassword").style.display="none";}
						
						var repeatpassword         = document.getElementById("repeatpassword").value;
						if(password!=repeatpassword){
							document.getElementById("passmatch").style.display="block";
							return;}
						else{document.getElementById("passmatch").style.display="none";}
						
						var date_of_birth    = document.getElementById("date_of_birth").value;
						if ( date_of_birth == null || date_of_birth== ''){
							                                              document.getElementById("invaliddate").style.display="block";
							                                              }
                        else{document.getElementById("invaliddate").style.display="none";}
						
						

						
						var phone            = document.getElementById("phone").value;
						var regex = /^[0-9]{10,10}/;
                        if(regex.test(phone)==false){
							                         document.getElementById("invalidphone").style.display="block";}	
						else{document.getElementById("invalidphone").style.display="none";}
						
						var nationality      = document.getElementById("nationality").value;
						
						if(nationality=="pleaseselect"){
							                           document.getElementById("invalidnationality").style.display="block";
							                           return;}
						else{document.getElementById("invalidnationality").style.display="none";}
						
						var account_type     = document.getElementById("account_type").value;
						var terms_policy     = document.getElementById("terms_policy").value;

		                var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
							
                                                                 if (this.readyState == 4 && this.status == 200){
																            
																			  if(this.responseText==9){
																				                        document.getElementById("emailsame") .style.display="block";
																			                            }
																			  else if(this.responseText==7){
																				                        document.getElementById("phonesame") .style.display="block";
																			                            }							
																	          else if(this.responseText==1){
																				                       $('#myModal2').modal('hide');
																									   $('#myModal').modal('show');
																				                       document.getElementById("registersuccess") .style.display="block";
																			                            }
																              else{
																				  document.getElementById("registrationerror1") .style.display="block";
																				  
																                   }										
																		 
															    }
																};
                        xmlhttp.open("POST", "register.php", true);
						xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xmlhttp.send("first_name="+first_name+"&last_name="+last_name+"&email="+email+"&password="+password+"&date_of_birth="+date_of_birth+"&phone="+phone+"&nationality="+nationality+"&account_type="+account_type+"&terms_policy="+terms_policy);	                    
                        }
						
						
						
function makenewfolder(){   
                        var newfoldername      = document.getElementById("newfoldername").value;
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
                                                                 if (this.readyState == 4 && this.status == 200){
																	                                             var dir_JSON  = JSON.parse(this.responseText);
													                                                             var dir_flag   = dir_JSON.dir_flag;
																												 
																												 
																	                                             if(dir_flag==11){
																													              $('#myModalfolder').modal('hide');
																																  load_directories(); 
																																  }
																																  
																												 if(dir_flag==01){
																													              document.getElementById("samefoldernameerror") .innerHTML     ="Internal Error, Please try again."; 
																																  
																																  var foldercount    = dir_JSON.dir_name[0];
																																  
																																  var i=1;
																																  
																																  var dir_name                =  dir_JSON.dirname;
																																  var dir_size                =  dir_JSON.dir_size;
																																  var dir_upload_date         =  dir_JSON.dir_upload_date;
																																  var dir_last_access_date    =  dir_JSON.dir_last_access_date;
																																  var folderdetails;
																																  }
																																	
																												 if(dir_flag==99){
																													              document.getElementById("samefoldernameerror") .innerHTML     ="Internal Error, Please try again."; 
																													              document.getElementById("samefoldernameerror") .style.display ="block";
																																  document.getElementById("explorermain") .innerHTML            ="<h2>No Files Found!</h2>";
																																  }
																																  
																												 if(dir_flag==00){
																													              document.getElementById("samefoldernameerror") .style.display="block";       
																																  }							  
																												 
																												 
															                                                     }
																};
                        xmlhttp.open("POST", "makenewfolder.php", true);
						xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xmlhttp.send("newfoldername="+newfoldername);
                        }			


function openfolder(elementid){
	                           
	                           var cooks         =  elementid;
							   
							   var cookie1       =  "currentlocation=";
							   document.cookie   =  cookie1+cooks;
							   var currentstatus =  document.getElementById("breadcrums1").innerHTML;
							   
					           currentstatus     =  currentstatus+"/<button style='background-color:white;border:none;' onclick='openfolder(&quot;"+ cooks + "&quot;)'>" + cooks + "</button>";
					           document.getElementById("breadcrums1").innerHTML=currentstatus;
							   if(cooks=="root"){
							   document.getElementById("breadcrums1").innerHTML="<button style='background-color:white;border:none;' onclick='openfolder(&quot;root&quot;)'>...root</button>";;   
							   }
							   document.getElementById("explorermain").innerHTML="";
							   load_directories(); 
							   load_files();
							   }

</script>

</head>
<body onload="load_initial_script()" style="background-color:white;">


<!--New Folder-->

<!-- Modal -->
<div id="myModalfolder" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h4 class="modal-title">Create New Folder</h4>
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
      <div id="samefoldernameerror" class="alert alert-warning" role="alert" style="display:none;">Another folder with same name already exists.Please enter different folder name.</div>
	  <div class="form-group">
      <label>Folder Name:</label>
      <input type="text" class="form-control" id="newfoldername">
      </div>	  
	  <br>
      <button type="button" id="createnewfolderbutton" onclick="makenewfolder()">Make New Folder</button>




      </div>
	        <div class="modal-footer">
        
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>


<!--New Folder-->



<!--Fileupload-->
<!-- Modal -->
<div id="myModalfile" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h4 class="modal-title">Upload Files   </h4>
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
	  
	 
	  
	  
	  <div class="container">

	    <form action="uploadfile.php" method="post" enctype="multipart/form-data"> 
	    <input type="file" multiple name="fileToUpload" id="fileToUpload" />
		<button type="submit" value="upload" >Upload</button>
		</form>
	    <div id="file-list">
  	    </div>
       </div>



      </div>
	        <div class="modal-footer">
        
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>


<!--File Upload-->






<!--Login-->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h4 class="modal-title">Sign In   </h4>
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert" id="loginerror1" style="display:none;">Incorrect E-Mail/Password! Please Try Again.</div> 
      <div class="alert alert-success" role="alert" id="registersuccess" style="display:none;"><strong>Success!</strong> Registration Complete. You may Login now.</div> 	  
		
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="inputEmail">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="inputPassword">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button onclick="loginnext()" class="btn-primary">Login</button>	
		<button onclick="" >Trouble Logging In?</button>
      </div>
      <div class="modal-footer">
        
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>

<!--Login-->

<!--Register-->


<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
	<h4 class="modal-title">Register   </h4>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
	  
    <div class="modal-body">
	
	<div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control" id="first_name">
    </div>
	<div class="alert alert-danger" role="alert" id="invalidfname" style="display:none;">Invalid First Name.</div>
	
	<div class="form-group">
    <label >Last Name:</label>
    <input type="text" class="form-control" id="last_name" >
    </div>
	<div class="alert alert-danger" role="alert" id="invalidlname" style="display:none;">Invalid Last Name.</div>
	
	<div class="form-group">
    <label >Email address:</label>
    <input type="email" class="form-control" id="email" >
    </div>
	<div class="alert alert-danger" role="alert" id="emailsame" style="display:none;">This e-Mail is already associated with another account. Try again with different e-mail. </div>
	<div class="alert alert-danger" role="alert" id="invalidemail" style="display:none;">Invalid e-mail.Try : abc@xyz.com</div>
	
	
	
    <div class="form-group">
    <label >Password:</label>
    <input type="password" class="form-control" id="password">
    </div>
    <div class="alert alert-danger" role="alert" id="invalidpassword" style="display:none;">Password must contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character.</div>	

    <div class="form-group">
    <label >Repeat Password:</label>
    <input type="password" class="form-control" id="repeatpassword">
    </div>	
	<div class="alert alert-danger" role="alert" id="passmatch" style="display:none;">Passwords do not match.</div>
	
	<div class="form-group">
    <label >Date of Birth:</label>
    <input type="date" class="form-control" id="date_of_birth">
    </div>
	<div class="alert alert-danger" role="alert" id="invaliddate" style="display:none;">Invalid Date.</div>
	
	
	<div class="form-group">
    <label >Phone:</label>
    <input type="text" class="form-control" id="phone">
    </div>
	<div class="alert alert-danger" role="alert" id="phonesame" style="display:none;">Phone number already associated with another account.</div>
	<div class="alert alert-danger" role="alert" id="invalidphone" style="display:none;">Invalid Phone Number</div>
	
	<div class="form-group">
    <label >Nationality:</label>
<select class="form-control" id="nationality">
  <option value="pleaseselect">Please Select</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>

    </div>
	<div class="alert alert-danger" role="alert" id="invalidnationality" style="display:none;">Please select nationality.</div>	
	<div class="form-group">
    <label >Account Type:</label>
    <select class="form-control" id="account_type">
	<option>Free</option>
	<option>Premium</option>
    </select>
	</div>

    <div class="checkbox">
    <label><input type="checkbox" id="terms_policy" value="0" onclick="checkboxchange()"> I agree to <a href="">terms & policy</a>.</label>
    </div> 
	
	
	
	<button onclick="registernext()" class="btn-primary" id="registerbuttonz" disabled="true">Register</button>	
    <button onclick="$('#myModal2').modal('hide');" data-toggle="modal" data-target="#myModal" style="border:none;height:6vh;background-color:white;">Login Instead?</button>
    </div>
    <div class="alert alert-danger" role="alert" id="registrationerror1" style="display:none;">Invalid Details!</div>  
  
	<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    </div>
</div>
</div>
</div>

<!--Register-->










<div id="box1" style="height:3px;width:99%;background-color:white;display:none;">
<div id="box2" style="opacity:0.7;width:0%;background-color:red;height:3px;">
</div>
</div>



     
	  
	  <nav class="navbar navbar-expand-lg navbar-light" style="opacity:0.8;background-color:white;  box-shadow: 5px 5px 5px grey;">
      <a class="navbar-brand" href="#" style="font-size:48px;" >Online File Storage</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
         <ul class="navbar-nav ml-auto" >
          
		  <li class="nav-item">
          <button onclick="home()" class="nav-link" style="border:none;height:6vh;background-color:white;">Home</button>
		  </li>
		  
		  <li class="nav-item">
          <button onclick="MyStorage()" id="storagebutton" class="nav-link" style="border:none;height:6vh;background-color:white;display:none">My Storage</button>
		  </li>		  
		  
		  <li class="nav-item">
          <button onclick="aboutus()" class="nav-link" style="border:none;height:6vh;background-color:white;">About Us</button>
          </li>
	    
    	  <li class="nav-item">
          <button onclick="contact()" class="nav-link" style="border:none;height:6vh;background-color:white;">Contact</button>
          </li>
          

		  
		  <li class="nav-item">
          <button class="nav-link"  data-toggle="modal" data-target="#myModal2" id="registerbutton"style="border:none;height:6vh;background-color:white;">Register</button>
		  </li>

		  <li class="nav-item">
          <button class="nav-link" data-toggle="modal" data-target="#myModal" id="loginbutton" style="border:none;height:6vh;background-color:white;">Login</button>
		  </li>
		  
		  <li class="nav-item">
          <div class="dropdown" id="userinfobutton" style="display:none;">
  <button class="btn dropdown-toggle" type="button" id="username_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <label id="username_dropdown"></label>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:powderblue;z-index:2;position:relative;">
    <a class="dropdown-item" href="#"          >&nbsp;My Account</a>
    <a class="dropdown-item" href="#"          >&nbsp;Settings</a>
    <a class="dropdown-item" href="logout.php" >&nbsp;Logout</a>
	
  </div>
</div>
         </li>
		  <li class="nav-item">
          <button onclick="help()" class="nav-link" style="border:none;height:6vh;background-color:white;">Help</button>
          </li>
		 </ul>

      </div>
      </nav>
	  

     <div class="container-fluid" style="margin:10px;">
	  

	  
	  
	  <div class="row" id ="homepage">
      
	  
	  
	  
	  
	  </div>
	  
	  
<!---Storage Main -->	  

	  <div id ="storage" class="row" >
	  
	  <div style="margin:5px;width:15%;height:112px;border-right:2px solid silver;float:left;position:fixed;" >
	  <ul style="list-style-type: none;border-bottom:2px solid silver;padding:15px;">
      <li style="padding:5px;"><button data-toggle="modal" data-target="#myModalfile" style="background-color:white;width:150px;">Upload Files</button></li>
	  <li style="padding:5px;"><button data-toggle="modal" data-target="#myModalfolder" style="background-color:white;width:150px;">Create New Folder</button></li>

      <ul>
      

	  </div>
      <div id="optiondiv1q" style="margin-top:117px;margin-left:5px;width:15%;height:395px;border-right:2px solid silver;float:left;position:fixed;visibility:hidden;" >
	  
	  <ul style="list-style-type: none;border-bottom:2px solid silver;padding:15px;">
      <li style="padding:5px;"><button type="button" value="delete" id="deletebutton" onclick="deletef(this.value)" style="background-color:white;width:150px;">Delete</button></li>
      <ul>
      

	  </div>
	  
	  
	  <div id="myexplorerwindow" style="margin-top:10px;margin-left:17%;width:85%;position:fixed;" >
	  
	  <div  id="breadcrums1" style="border-bottom:1px solid silver;width:95%;overflow:auto;"><button style="background-color:white;border:none;" onclick="openfolder('root')">...root</button></div>
	  
	  <div  id="explorermain" style="height:435px;margin-top:5px;width:95%;border-bottom:1px solid silver;overflow:auto;">
	  
      </div>

	  
	  
	  
	  </div>


	  </div>	  
<!---Storage Main -->	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <div class="row" id ="aboutus">
	  aboutus
	  </div>
	  
	  <div class="row" id ="help">
      help
	  </div>
	  	  
	  <div class="row" id ="contact">
      contact
	  </div>
	  

	  
	  </div>




	  
</body>
</html>