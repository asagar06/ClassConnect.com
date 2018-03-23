<?php
session_start();
$email=$_SESSION['email'];
$emailid=strval($email);
mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
mysql_select_db('documents') or trigger_error("Unable to switch to the database: " . mysql_error()); 
$query=mysql_query("select `path` from `profilepics` where email='$emailid'")or die(mysql_error());
$row=mysql_fetch_array($query);
$path=$row['path'];
?>
<html>
<head>
	<title>Attendance Marked Successfully</title>
<style type="text/css">
 #topframe1{
	       position: absolute;
		   top:0px;
		   left:0px;
		   bottom:0px;
		   right:0;
		   width:100%;
		   height:50px;
		   overflow:hidden;
		   color:white;
		   background:#833BDC;
		  }
	
    	
	#photo{
	       position:absolute;
		   top:50px;
		   left:0px;
		   bottom:0px;
           width:170px;
		   
           overflow:hidden;
		   background:"#E6E6FA"; 
		   color:white;
		  }	  
	 
	#leftframe{
	       position:absolute;
		   top:220px;
		   left:0px;
		   bottom:0px;
		   right:0;
		   width:175px;
		   height:10%;
		   overflow:hidden;
		   background: white;
		   color:white;
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

#main{
         position:fixed;
         top:50px;
         left:175px;
		 width:85%;
         bottom: 0px;
         overflow: auto;
		
       	} 	
 #message{
 		position:fixed;
         top:250px;
         left:550px;
		 width:400px;
		 height:270px;
    	border-radius: 50px 50px 50px 50px;
         overflow: auto;
         background:#833BDC;
 }
a{
	text-decoration: none;
}	  
body {
    background-color:#E1DFE3;}
    }
h1{
  font-family:"Calibri";} 	

nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}

nav ul {
	background:#833BDC; 
	background: linear-gradient(top, BLUE 0%, BLUE 100%);  
	background: -moz-linear-gradient(top, #833BDC 0%, #833BDC 100%); 
	background: -webkit-linear-gradient(top, #833BDC 0%,#833BDC 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}
	
nav ul li {
	float: left;
}
	nav ul li:hover {
		background:#833BDC;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		nav ul li:hover a {
			color: #fff;
		}
	
	nav ul li a {
		display: block; padding: 5px 5px;
		color: WHITE; text-decoration: none;
	}

nav ul ul {
	background:#833BDC; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
}
	nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
		nav ul ul li a {
			padding: 5px 5px;
			color: #fff;
		}	
			nav ul ul li a:hover {
				background: #4b545f;
			}	
nav ul ul ul {
	position: absolute; left: 100%; top:0;
} 
h1{
  font-family:'Futura Bk BT';}      
</style>

</head>
<body>
<div id="photo" style="position: absolute;left:2px; width:175px; height:170px; background-color:#E5E7E5;">
<?php echo '<img src="',$path,'" width="173" height="170">';
?>
</div>
<div id="leftframe" style="background-color:#833BDC;height:64.8%;">
<marquee direction="up" height=100%>
ACCREDATION COMING UP SOON!!!<BR><br>GET ALL THE PREPARATIONS DONE SOON!!
</marquee>

</div>

<div id="topframe1">
<h1 style="margin-bottom:0;text-align:CENTER"><font size="5" color="white">classconnect.com</font></h1>
</div>


<div id="main">
<div id="buttons" style="background-color:#E1DFE3" align="center">
<nav>
	<ul>
		<li><a href="teacher.php">HOME</a></li>
		<li><a href="time_t.php">TIME TABLE</a></li>
		<li><a href="#">COUNCIL</a>
		    <ul>
				          <li><a href="cr1_t.php">CLASS REPRESENTATIVES</a></li>
				          <li><a href="sports1_t.php">SPORTS</a></li>
						  <li><a href="cultural_t.php">CULTURAL</a></li>
				          <li><a href="music_t.php">MUSIC</a></li>
						  <li><a href="sort_t.php">SORT</a></li>
				        
			</ul>
		
		</li>
		<li><a href="#">ASSIGNMENTS</a>
		     <ul>
		<li><a href="#">COMPUTER NETWORKS</a>
		    <ul>
				<li><a href="#">ASSIGNMENT 1</a></li>
				<li><a href="#">ASSIGNMENT 2</a></li>
				<li><a href="#">ASSIGNMENT 3</a></li>
			</ul>
		
		</li>
		<li><a href="#">OPERATING SYSTEMS</a>
			<ul>
				<li><a href="#">ASSIGNMENT 1</a></li>
				<li><a href="#">ASSIGNMENT 2</a></li>
				<li><a href="#">ASSIGNMENT 3</a></li>
			</ul>
		</li>
		<li><a href="#">MICROPROCESSOR</a>
			<ul>
				<li><a href="micro1.pdf" onClick="pop()">ASSIGNMENT 1</a></li>
				<li><a href="micro2.pdf">ASSIGNMENT 2</a></li>
				<li><a href="#">ASSIGNMENT 3</a></li>
			</ul>
		</li>
		<li><a href="#">SOOAD</a>
		<ul>
				<li><a href="#">ASSIGNMENT 1</a></li>
				<li><a href="#">ASSIGNMENT 2</a></li>
		</ul>
		</li>
		<li><a href="#">WEB TECHNOLOGY</a>
			<ul>
				<li><a href="#">ASSIGNMENT 1</a></li>
				<li><a href="#">ASSIGNMENT 2</a></li>
				<li><a href="#">ASSIGNMENT 3</a></li>
			</ul>
		
		
	</ul>
		
		
		</li>
		<li><a href="#">ATTENDANCE</a>
			<ul>
				<li><a href="mark_att.php">MARK THEORY ATTENDANCE</a></li>
				<li><a href="mark_attpr.php">MARK PRACTICAL ATTENDANCE</a></li>
				<li><a href="display attendance.php">VIEW ATTENDANCE</a></li>
				<li><a href="defaulterlist.php">DEFAULTER LIST</a></li>
			</ul>
		</li>
		
		<li><a href="logout.php">LOGOUT</a></li>
		
	</ul>
</nav>
</div>
</div>
<div id="message" >
	<p align="center"><font size="5"face="Calibri"color="white">Attendance Marked Sucessfully!!
		<br><br><a id="bold1" href="teacher.php">Go back to home</a><br><br><a id="bold1" href="mark_att.php">Mark Theory Attendance</a>
		<br><br><a id="bold1" href="mark_attpr.php">Mark Practical Attendance</a></font></p>
</div>
<script>
function pop()
{
alert("LAST DATE OF SUBMISSION:10/10/14");
}
</script>
</body>
</html>