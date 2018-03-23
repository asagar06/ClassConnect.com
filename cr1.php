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
	<title>CR</title>
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
		  
	 
	#leftframe{
	       position:absolute;
		   top:50px;
		   left:0px;
		   bottom:0px;
		   right:0;
		   width:175px;
		   height:100%;
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

nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}

nav ul {
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
	nav ul:after {
		content: ""; clear: both; display: block;
	}
	
nav ul li {
	float: left;
}
	nav ul li:hover {
		background:#3282c2;
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
	background:#3282c2; border-radius: 0px; padding: 0;
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
</style>		  

</head>
<body>
<div id="leftframe" style="background-color:#3282c2;height:91.3%;">
<div id="photo" style="position: absolute;left:2px; width:170px; height:170px; background-color:#E5E7E5;">
<?php echo '<img src="',$path,'" width="173" height="170">';
?>
</div>

<marquee direction="up" height=100%>
KAMAL BOOK DEPOT<BR> PRESENTS<BR>15% OFF ON <BR>SOOAD TECHNICAL.
OFFER VALID TILL STOCKS LAST<BR>...HURRY..!!!<br><br><br><br><a href="SOOAD Marksheet 2014 - 15 - Google Sheets.pdf">CHECK YOUR SOOAD TEST 1 MARKS NOW!!!</a>
</marquee>

</div>

<div id="topframe1">
<h1 style="margin-bottom:0;text-align:CENTER"><font size="5" color="white">classconnect.com</font></h1>
</div>


<div id="main">
<div id="buttons" style="background-color:#E1DFE3" align="center">
<nav>
	<ul>
		<li><a href="home.php">HOME</a></li>
		<li><a href="time.php">TIME TABLE</a></li>
		<li><a href="#">COUNCIL</a>
		    <ul>
				          <li><a href="cr1.php">CLASS REPRESENTATIVES</a></li>
				          <li><a href="sports1.php">SPORTS</a></li>
						  <li><a href="cultural.php">CULTURAL</a></li>
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
				         <li><a href="utsav.php">UTSAV</a></li>
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
		<li><a href="logout.php">LOGOUT</a></li>
	</ul>
</nav>
</div>
<table align="center">
<tr>
<td>
<img src="council//shreyawagle.jpg" alt="cr" height="400" width="400"> 
<p align="center"><font size="5" face="Calibri" color="black">Shreya Wagle</font><p>
</td>
<td>
<img src="council//aakash chhatlani.jpg" alt="cr" height="400" width="400">
<p align="center"><font size="5" face="Calibri" color="black">Aakash Chhatlani</font><p>
</td>
</tr>
</table>
</table>
</div>
<script>
function pop()
{
alert("LAST DATE OF SUBMISSION:10/10/14");
}
</script>
</body>
</html>