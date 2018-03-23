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
<title>
Utsav
</title>

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
		   background:#3282c2;
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
		   height:25%;
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
background:-webkit-gradient(linear,center top,center bottom,from(#a4ccec),color-stop(25%,#72a6b4),color-stop(45%,#3282c2),color-stop(85%,#357cbd),to(#72a6d4));
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
	  
body {
    background-image: url("back2.jpg");}
h1{
  font-family:"Calibri";} 	

#buttons nav ul ul {
	display: none;
}

	#buttons nav ul li:hover > ul {
		display: block;
	}

#buttons nav ul {
	background:#3282c2; 
	background: linear-gradient(top, BLUE 0%, BLUE 100%);  
	background: -moz-linear-gradient(top, #3282c2 0%, #3282c2 100%); 
	background: -webkit-linear-gradient(top, #3282c2 0%,#3282c2 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
#buttons nav ul:after {
		content: ""; clear: both; display: block;
	}
	
#buttons nav ul li {
	float: left;
}
#buttons nav ul li:hover {
		background:#3282c2;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
	#buttons nav ul li:hover a {
			color: #fff;
		}
	
#buttons	nav ul li a {
		display: block; padding: 5px 5px;
		color: WHITE; text-decoration: none;
	}

#buttons nav ul ul {
	background:#3282c2; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
}
#buttons nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
#buttons nav ul ul li a {
			padding: 5px 5px;
			color: #fff;
		}	
		#buttons	nav ul ul li a:hover {
				background: #4b545f;
			}	
#buttons nav ul ul ul {
	position: absolute; left: 100%; top:0;
}   
h1{
  font-family:'Futura Bk BT';}  

#vert{
	position:fixed;
	top:150px;
	left:200px;
}

#vert nav ul {
	background:#3282c2; 
	background: linear-gradient(top, BLUE 0%, BLUE 100%);  
	background: -moz-linear-gradient(top, #3282c2 0%, #3282c2 100%); 
	background: -webkit-linear-gradient(top, #3282c2 0%,#3282c2 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
	font-family: calibri;
	font-size: 22px;
}

#vert	nav ul li a {
		display: block; padding: 5px 5px;
		color: WHITE; text-decoration: none;
	}

</style>

</head>

<body>

<div id="photo" style="position: absolute;left:2px; width:175px; height:170px; background-color:#E5E7E5;">
<?php echo '<img src="',$path,'" width="173" height="170">';?>
</div>

<div id="leftframe" style="background-color:#3282c2;height:64.8%;" ALIGN="CENTER" color="white">
 
<marquee direction="up" height="100%">
<font color="black" size="4" face="calibri">
Congratulations to the drama team on becoming the champions of utsav drama 2014! 
</marquee></font></div>
</div>


<div id="topframe1">
<h1 style="margin-bottom:0;text-align:CENTER"><font size="5" color="white">classconnect</font></h1>
</div>


<div id="main">

<div id="buttons" style="background-color:#E1DFE3" align="center">
<nav>
<font face="calibri">
	<ul>
		<li><a href="home.php">HOME</a></li>
		<li><a href="time.php">TIME TABLE</a></li>
		<li><a href="#">COUNCIL</a>
		    <ul>
				          <li><a href="cr1.php">CLASS REPRESENTATIVES</a></li>
				          <li><a href="sports1.php">SPORTS</a></li>
						  <li><a href="cultural.php">CULTURAL</a></li8
				          <li><a href="music.php">MUSIC</a></li>
						  <li><a href="sort.php">SORT</a></li>
				        
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
				<li><a href="att_st.php">VIEW ATTENDANCE SHEET</a></li>
				<li><a href="att_stat.php">VIEW ATTENDANCE STATISTICS</a></li>
			</ul>
		</li>
		<li><a href="#">EVENTS</a>
		    <ul>
				<li><a href="#">CULTURAL</a>
				    <ul>
				         <li><a href="illusions.php">ILLUSIONS</a></li>
				         <li><a href="#">UTSAV</a></li>
				    </ul>
				</li>
				<li><a href="#">SPORTS</a>
				    <ul>
				     <li><a href="indoorsphurti.php">INDOOR SPHURTI</a></li>
				     <li><a href="outdoorsphurti.php">OUTDOOR SPHURTI</a></li>
				    </ul>
				</li>
				<li><a href="#">MUSIC</a>
				    <ul>
				     <li><a href="#">OCTAVES</a></li>
				    </ul>
				</li>
				<li><a href="#">SORT</a>
				    <ul>
				     <li><a href="sort2.php">SORT WEEK</a></li>
				    </ul>
				</li>
			</ul>
		</li>
		<li><a href="logout.php">LOGOUT</li>
	</ul>
</font>
</nav>
</div>


<div id="vert" >
<nav>
	<ul>
		<li style="display:block;"><a href="#">Utsav</a></li>
		<li style="display:block;"><a href="registerutsav.php">Register</a></li>
		<li style="display:block;"><a href="https://www.facebook.com/pages/UTSAV-14/279028758921434">Facebook</a></li>
	</ul>
</nav>
</div>

<div id="im" align="center">

<img src="utsav.jpg"  width="750" height="475">
</div>
</div>


</body>
</html>