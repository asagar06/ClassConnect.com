<html>
<head>
	<title>LOgin Failed</title>
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
		   height:75px;
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
#loginform{
			position:absolute;
			top:200px;
			border-radius: 20px;
			overflow:hidden;
			background:#AE1B1B;	
			left:500px;
			width:400px;
			height:250px;

}


h1{
  font-family:'Futura Bk BT';} 
		  
</style>

</head>
<body>
	<div id="topframe1">
		<h1 style="margin-left: 5em;margin-bottom:0px; "><font face="Calibri" size="6" color="white">classconnect.com</font></h1>
	</div>
	<div id="loginform">
		<p align="center"><font size="5"face="Calibri"color="white">The email id/Password Did Not Match...<br>Please Log In Again</p></font>
		<form action="login.php" method="post">
		<center>
		<table cellpadding="10">
			<tr>
				<td style="margin-bottom:10px"><p><font size="5"face="Calibri"color="white">Email ID:</font></p></td><td><input type="email" name="login-email"></td>
			</tr>
			<tr>
				<td><p><font size="5"face="Calibri"color="white">Password:</font></p></td><td><input type="password" name="login-password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input id="bold1" type="submit" value="Login"></td>
			</tr>
		</table>
	</center>
	</form>
	</div>	
</body>
</html>