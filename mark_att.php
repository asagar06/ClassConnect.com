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
	<title>Mark Attendance</title>
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
    background-color:#E1DFE3;}
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

table#t01{
	border-spacing: 0;
}
table#t01 th:first-child{
	border-radius: 6px 0 0 0 ;
}
table#t01 th:last-child{
	border-radius: 0 6px 0 0 ;
}
table#t01 th:only-child{
	border-radius: 6px 6px 0 0;
}
table#t01 tr:last-child td:first-child{
	border-radius: 0 0 0 6px;
}
table#t01 tr:last-child td:last-child{
	border-radius: 0 0 6px 0 ;
}
table#t01 tr:nth-child(even) {
    background-color: 	#8F6BB2;
}
table#t01 tr:nth-child(odd) {
   background-color:#DBB8FF;
}
table#t01 th	{
    background-color: black;
    color: white;
}  
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
<div align="center">
<form action="markattendance.php" method="post" align="center">
			<table id="t01" align="center" style="padding-top:2em;" cellpadding="3">
				<tr>
					<td><label>Select Subject:</label></td>
					<td colspan="2"><select name="subject">
							<option value="mp_th">Microprocessors</option>
							<option value="os_th">Operating Systems</option>
							<option value="sooad_th">Structured and Object Oriented Analysis and Design</option>
							<option value="cn_th">Computer Networks</option>
							<option value="wt_th">Web Technology</option>
							<option value="bce">Business Communication and Ethics</option>
						</select></td>
				</tr>
				<tr>
					<td><label>Select Date:</label></td>
					<td colspan="2"><input type="date" name="lec_date"></td>
				</tr>
				<tr>
					<th>Roll No.</th>
					<th>Name</th>
					<th>Present</th>
				</tr>
				<tr>
					<td align="center">1</td>
					<td align="center">Nikita Ahuja</td>
					<td align="center"><input type="radio" name="1" value="present"></td>
				</tr>
				<tr>
					<td align="center">2</td>
					<td align="center">Satyen Amonkar</td>
					<td align="center"><input type="radio" name="2" value="present"></td>
				</tr>
				<tr>
					<td align="center">3</td>
					<td align="center">Anoosha Sagar</td>
					<td align="center"><input type="radio" name="3" value="present"></td>
				</tr>
				<tr>
					<td align="center">4</td>
					<td align="center">Chetan Basantani</td>
					<td align="center"><input type="radio" name="4" value="present"></td>
				</tr>
				<tr>
					<td align="center">5</td>
					<td align="center">Harsh Basantani</td>
					<td align="center"><input type="radio" name="5" value="present"></td>
				</tr>
				<tr>
					<td align="center">6</td>
					<td align="center">Amarjeet Bathija</td>
					<td align="center"><input type="radio" name="6" value="present"></td>
				</tr>
				<tr>
					<td align="center">7</td>
					<td align="center">Prashant Brahme</td>
					<td align="center"><input type="radio" name="7" value="present"></td>
				</tr>
				<tr>
					<td align="center">8</td>
					<td align="center">Shital Choudhari</td>
					<td align="center"><input type="radio" name="8" value="present"></td>
				</tr>
				<tr>
					<td align="center">9</td>
					<td align="center">Tarun Dash</td>
					<td align="center"><input type="radio" name="9" value="present"></td>
				</tr>
				<tr>
					<td align="center">10</td>
					<td align="center">Kavin Desai</td>
					<td align="center"><input type="radio" name="10" value="present"></td>
				</tr>
				<tr>
					<td align="center">11</td>
					<td align="center">Kalyani Deshmukh</td>
					<td align="center"><input type="radio" name="11" value="present"></td>
				</tr>
				<tr>
					<td align="center">12</td>
					<td align="center">Nandan Doddihal</td>
					<td align="center"><input type="radio" name="12" value="present"></td>
				</tr>
				<tr>
					<td align="center">13</td>
					<td align="center">Chalonsh D'silva</td>
					<td align="center"><input type="radio" name="13" value="present"></td>
				</tr>
				<tr>
					<td align="center">14</td>
					<td align="center">Tanvi Gangan</td>
					<td align="center"><input type="radio" name="14" value="present"></td>
				</tr>
				<tr>
					<td align="center">15</td>
					<td align="center">Bhaskar Gurram</td>
					<td align="center"><input type="radio" name="15" value="present"></td>
				</tr>
				<tr>
					<td align="center">16</td>
					<td align="center">Akash Indani</td>
					<td align="center"><input type="radio" name="16" value="present"></td>
				</tr>
				<tr>
					<td align="center">17</td>
					<td align="center">Disha Jagwani</td>
					<td align="center"><input type="radio" name="17" value="present"></td>
				</tr>
				<tr>
					<td align="center">18</td>
					<td align="center">Preetima Jagwani</td>
					<td align="center"><input type="radio" name="18" value="present"></td>
				</tr>
				<tr>
					<td align="center">19</td>
					<td align="center">Vinayak Jaiswal</td>
					<td align="center"><input type="radio" name="19" value="present"></td>
				</tr>
				<tr>
					<td align="center">20</td>
					<td align="center">Surabhi Kanth</td>
					<td align="center"><input type="radio" name="20" value="present"></td>
				</tr>
			</table>
			<p><input type="submit" value="Mark Attendance">&nbsp;&nbsp;<input type="reset"></p>
		</form>
</div>
</div>
<script>
function pop()
{
alert("LAST DATE OF SUBMISSION:10/10/14");
}

function toggle(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

function button() {
    confirm("CONFIRM");
}
</script>
</body>
</html>