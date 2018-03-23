<?php
	session_start();
	$email=strval($_SESSION['email']);
	mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
	mysql_select_db('users') or trigger_error("Unable to switch to the database: " . mysql_error()); 
	$query=mysql_query("select `Fname` from `userdata` where `EmailID`='$emailid'");
	$row=mysql_fetch_array($query);
?>
<head>
	<title>Add Profile Pic</title>
<style type="text/css">
    #topframe1{
	       position: absolute;
		   top:0px;
		   left:0px;
		   bottom:0px;
		   right:0;
		   width:100%;
		   height:95px;
		   overflow:hidden;
		   color:white;
		   background:#AE1B1B;
		  }
	body{
		background-image: url("back4.jpg");
	}
	#topframe2{
	       position: absolute;
		   top:50px;
		   left:0px;
		   bottom:0px;
		   right:0;
		   width:100%;
		   height:50px;
		   overflow:hidden;
		   color:white;
		   background:#D9DCD8;
		  }	  
  #bold1{
padding: 5px 7px ;
border: 1px solid #778;
color: white;
border: 1px solid gray;
background:red;
border-radius:8px;
box-shadow:3px 3px 4px rgba(0,0,0,.5);
-webkit-box-shadow:3px 3px 4px rgpa(0,0,0,.5);
background:-webkit-gradient(linear,center top,center bottom,from(#525268),color-stop(25%,#525268),color-stop(45%,#525268),color-stop(85%,#525268),to(#525268));
width:100px;
}  

#leftframe{
	       position:absolute;
		   top:100px;
		   left:0px;
		   bottom:0px;
		   right:0;
		   width:200px;
		   height:100%;
		   overflow:hidden;
		   background:#5BFC2F;
		   color:white;
		  }
#message{
			position:absolute;
			top:200px;
			border-radius: 20px;
			overflow:hidden;
			background:#AE1B1B;	
			left:250px;
			width:800px;
			height:250px;

}


h1{
  font-family:'Futura Bk BT';} 
		  
</style>

</head>
<body><font face="calibri" color="white" size="5">
	<div id="topframe1">
		<h1 style="margin-left: 5em;margin-bottom:0px; "><font size="6" color="white">classconnect.com</font></h1>
	</div>
	<div id="message">
		<p align="center"> Registration is almost complete...<br>it is now time to upload a profile picture</p>
		<form action="upl1.php" method="post" enctype="multipart/form-data">
		<center>Select image to upload:
    	<input type="file" name="fileToUpload" id="fileToUpload"><br><br></center>
    	 <center><input id="bold1" type="submit" value="Upload Image" name="submit"></center>
	</form>

	</div></font>	
</body>