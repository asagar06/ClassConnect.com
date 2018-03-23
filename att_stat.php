<?php
session_start();
$email=$_SESSION['email'];
$emailid=strval($email);
mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
mysql_select_db('documents') or trigger_error("Unable to switch to the database: " . mysql_error()); 
$query=mysql_query("select `path` from `profilepics` where email='$emailid'")or die(mysql_error());
$row=mysql_fetch_array($query);
$path=$row['path'];
mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
mysql_select_db('users') or trigger_error("Unable to switch to the database: " . mysql_error());
$query=mysql_query("select `Fname`,`Lname` from userdata where EmailID='$emailid'")or die (mysql_error());
$row=mysql_fetch_array($query);
$name=$row['Fname']." ".$row['Lname'];
?>
<html>
<head>
	<title>Check Your Attendance Statistics</title>
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
h1{
  font-family:'Futura Bk BT';} 
table{
	border-spacing: 0;
	padding:15px;

}
table th:first-child{
	border-radius: 6px 0 0 0 ;
}
table th:last-child{
	border-radius: 0 6px 0 0 ;
}
table th:only-child{
	border-radius: 6px 6px 0 0;
}
table tr:last-child td:first-child{
	border-radius: 0 0 0 6px;
}
table tr:last-child td:last-child{
	border-radius: 0 0 6px 0 ;
}
table tr:nth-child(even) {
    background-color: 	#3282c2;
}
table tr:nth-child(odd) {
   background-color:#ADCDE7;
}
table th	{
    background-color: black;
    color: white;
    border: 1px solid black;

}     
table td{
	border: 1px solid black;
}
</style>
</head>
<body>
	<div id="photo" style="position: absolute;left:2px; width:175px; height:170px; background-color:#E5E7E5;">
<?php echo '<img src="',$path,'" width="173" height="170">';?>
</div>

<div id="leftframe" style="background-color:#3282c2;height:64.8%;">
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
<?php
	mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
	mysql_select_db('dummy') or trigger_error("Unable to switch to the database: " . mysql_error()); 
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_mp_th'");
	$row=mysql_fetch_array($lecs);
	$count_mpth=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_mp_pr'");
	$row=mysql_fetch_array($lecs);
	$count_mppr=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_os_th'");
	$row=mysql_fetch_array($lecs);
	$count_osth=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_os_pr'");
	$row=mysql_fetch_array($lecs);
	$count_ospr=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_cn_th'");
	$row=mysql_fetch_array($lecs);
	$count_cnth=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_cn_pr'");
	$row=mysql_fetch_array($lecs);
	$count_cnpr=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_sooad_th'");
	$row=mysql_fetch_array($lecs);
	$count_sooadth=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_sooad_pr'");
	$row=mysql_fetch_array($lecs);
	$count_sooadpr=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_wt_th'");
	$row=mysql_fetch_array($lecs);
	$count_wtth=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_wt_pr'");
	$row=mysql_fetch_array($lecs);
	$count_wtpr=($row['count'])-2;
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_bce'");
	$row=mysql_fetch_array($lecs);
	$count_bce=($row['count'])-2;
	$result=mysql_query("SELECT * FROM `dummy_final` WHERE Name='$name'")or die(mysql_error());
	$row1=mysql_fetch_array($result);
	$fields_num = mysql_num_fields($result);
		echo "<table align='center' cellpadding='5'><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th align='center'>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	echo "<tr>";
	echo "<td align='center'>",$row1['Roll No'],"</td>";
	echo "<td align='center'>",$row1['Name'],"</td>";
	echo "<td align='center'>",$row1['mp_th'],"</td>";
	echo "<td align='center'>",$row1['mp_pr'],"</td>";
	echo "<td align='center'>",$row1['os_th'],"</td>";
	echo "<td align='center'>",$row1['os_pr'],"</td>";
	echo "<td align='center'>",$row1['cn_th'],"</td>";
	echo "<td align='center'>",$row1['cn_pr'],"</td>";
	echo "<td align='center'>",$row1['sooad_th'],"</td>";
	echo "<td align='center'>",$row1['sooad_pr'],"</td>";
	echo "<td align='center'>",$row1['wt_th'],"</td>";
	echo "<td align='center'>",$row1['wt_pr'],"</td>";
	echo "<td align='center'>",$row1['bce'],"</td>";
	echo "</tr>\n";
    
	echo "<tr>\n";
	echo "<td colspan='2' align='center'>Total Lectures</td>";
	
	echo "<td align='center'>$count_mpth</td>";
	
	echo "<td align='center'>$count_mppr</td>";
	
	echo "<td align='center'>$count_osth</td>";
	
	echo "<td align='center'>$count_ospr</td>";
	
	echo "<td align='center'>$count_cnth</td>";
	
	echo "<td align='center'>$count_cnpr</td>";
	
	echo "<td align='center'>$count_sooadth</td>";
	
	echo "<td align='center'>$count_sooadpr</td>";
	
	echo "<td align='center'>$count_wtth</td>";
	
	echo "<td align='center'>$count_wtpr</td>";
	
	echo "<td align='center'>$count_bce</td>";
	echo "</tr>\n";
	echo "<tr>\n";
	echo "<td colspan='2' align='center'>Percentage Attended</td>";
	$per=($row1['mp_th']/$count_mpth)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['mp_pr']/$count_mppr)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['os_th']/$count_osth)*100;
	echo "<td>$per</td>";
	$per=($row1['os_pr']/$count_ospr)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['cn_th']/$count_cnth)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['cn_pr']/$count_cnpr)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['sooad_th']/$count_sooadth)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['sooad_pr']/$count_sooadpr)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['wt_th']/$count_wtth)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['wt_pr']/$count_wtpr)*100;
	echo "<td align='center'>$per</td>";
	$per=($row1['bce']/$count_bce)*100;
	echo "<td align='center'>$per</td>";
	echo "</tr>\n";
	echo "</table>";
?>
</body>
</html>