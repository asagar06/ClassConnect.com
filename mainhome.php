<?php
	session_start();
	mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
	mysql_select_db('users') or trigger_error("Unable to switch to the database: " . mysql_error()); 
?>

<html>
<head>
	<title>Welcome to classconnect</title>
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


h1{
  font-family:'Futura Bk BT';} 
  body{
  	font-family: Calibri;
  }
		  
</style>
</head>
<body>
<?php
	if(isset($_SESSION['email']))
		echo $_SESSION['email'];
?>
<div id="topframe1">
<h1 style="margin-left: 5em;margin-bottom:0px; "><font size="6" color="white">classconnect.com</font></h1>
<div id="login-form" align="right">
	<form action="login.php" method="post">
		<table style="padding: 0em 5em 0em 5em">
			<tr>
				<td style="margin-bottom:10px"><p><font color="white">Email ID:</font></p></td><td><input type="email" name="login-email"></td>
				<td><p><font color="white">Password:</font></p></td><td><input type="password" name="login-password"></td>
				<td><input id="bold1" type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</div>
</div>
<div id="slideshow" style="position: absolute; top: 95px; left: 10px; width: 50%; height:85%; background-color:#E5E7E5;">

<img src="vesit.jpg" width="550" height="545">

</div>
<div id="form" style="position: absolute; top: 95px;right: 10px; width: 50%; height:85%; background-color:#E5E7E5; ">
<form action="mainhome.php" name="myForm" method="post" enctype="multipart/form-data">
<p align="center"><font color="crimson" size="5"><em>REGISTER!!</em></font></p>
<table align="center" cellpadding="5" cellspacing="5" bgcolor="#AE1B1B" height="450"> 
<tr><td><font color="white" size="5"><label>First Name:</label></td><td><input type="text" name="form-fname"></font></td></tr>
<tr><td><font color="white" size="5"><label>Last Name:</label></td><td><input type="text" name="form-lname"></font></td></tr>
<tr><td><font color="white" size="5">Date of Birth:</td><td><input type="date" name="form-date"></font></td></tr>
<tr><td><font color="white" size="5">Email ID:</td><td><input type="email" name="form-email"></font></td></tr>
<tr><td><font color="white" size="5">Mobile No.:</td><td><input type="tel" name="form-tel"></font></td></tr>
<tr><td><font color="white" size="5">Password:</td><td><input type="password" name="form-pswd"></font></td></tr>
<tr><td><font color="white" size="5">Category:</font></td><td><label><input type="radio" name="form-type" value="Student" checked>Student</label> 
				<label><input type="radio" name="form-type" value="Teacher">Teacher</label></td></tr>
<tr><td align="center"><input id="bold1" type="submit" value="submit"></td><td align="center"><input id="bold1" type="reset"></td></tr>
</table>
</form>
<?php
	mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
	mysql_select_db('users') or trigger_error("Unable to switch to the database: " . mysql_error()); 
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	

	if(!empty($_POST['form-fname'])&&!empty($_POST['form-lname'])&&!empty($_POST['form-date'])&&!empty($_POST['form-email'])&&!empty($_POST['form-tel'])&&!empty($_POST['form-pswd'])&&!empty($_POST['form-type']))
	{
		$fname=$_POST['form-fname'];
		$lname=$_POST['form-lname'];
		$dob=$_POST['form-date'];
		$email=$_POST['form-email'];
		$tel=$_POST['form-tel'];
		$pswd=$_POST['form-pswd'];
		$type=$_POST['form-type'];
		$check_query=mysql_query("Select * from userdata where EmailID='$email'");
		if(mysql_num_rows($check_query)>0)
			header("Location:acc_exists.php");
		else
		{
			session_start();
			$_SESSION['email']=$email;
			$result=mysql_query("insert into userdata values('','$fname','$lname','$dob','$email','$tel','$pswd','$type')");
			header("Location:addprofile.php");
		}
	}
	else
	header("Location:signup_re.php");
	}
?>
</div>
</body>
</html>