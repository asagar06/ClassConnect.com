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
	<title>Defaulter List</title>
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

table{
	border-spacing: 0;
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
    background-color: 	#8F6BB2;
}
table tr:nth-child(odd) {
   background-color:#DBB8FF;
}
table th	{
    background-color: black;
    color: white;

}  
</style>
</head>

<body>
<div id="photo" style="position: absolute;left:2px; width:175px; height:170px; background-color:#E5E7E5;">
<?php echo '<img src="',$path,'" width="173" height="170">';?>
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
<div id="php" align="center" width="100%">
<?php
	mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
	mysql_select_db('dummy') or trigger_error("Unable to switch to the database: " . mysql_error()); 

	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_bce'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for BCE are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `bce`>='$crit' and `bce`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for BCE are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `bce`>=0 and `bce`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';

	mysql_free_result($result);
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_cn_th'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for CN Theory are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `cn_th`>='$crit' and `cn_th`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for CN Theory are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `cn_th`>=0 and `cn_th`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';
    $lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_mp_th'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for Microprocessors Theory are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `mp_th`>='$crit' and `mp_th`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for Microprocessors Theory are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `mp_th`>=0 and `mp_th`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';
    mysql_free_result($result);
$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_os_th'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for OS Theory are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `os_th`>='$crit' and `os_th`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for OS Theory are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `os_th`>=0 and `os_th`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';
    mysql_free_result($result);
$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_sooad_th'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for SOOAD Theory are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `sooad_th`>='$crit' and `sooad_th`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for SOOAD Theory are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `sooad_th`>=0 and `sooad_th`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';
    $lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_wt_th'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for WT Theory are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `wt_th`>='$crit' and `wt_th`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for WT Theory are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `wt_th`>=0 and `wt_th`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';

mysql_free_result($result);
	$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_cn_pr'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for CN Practicals are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `cn_pr`>='$crit' and `cn_pr`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for CN Practicals are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `cn_pr`>=0 and `cn_pr`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';

mysql_free_result($result);
	
$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_mp_pr'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for Microprocessors Practicals are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `mp_pr`>='$crit' and `mp_pr`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for Microprocessors Practicals are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `mp_pr`>=0 and `mp_pr`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';

mysql_free_result($result);

$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_os_pr'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for OS Practicals are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `os_pr`>='$crit' and `os_pr`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for OS Practicals are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `os_pr`>=0 and `os_pr`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';



mysql_free_result($result);
$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_sooad_pr'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for SOOAD Practicals are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `sooad_pr`>='$crit' and `sooad_pr`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for SOOAD Practicals are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `sooad_pr`>=0 and `sooad_pr`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';



mysql_free_result($result);
$lecs=mysql_query("select count(*) as count from information_schema.columns where table_schema='dummy' and table_name='dummy_wt_pr'");
	$row=mysql_fetch_array($lecs);
	$count=($row['count'])-2;
	$crit=0.5*$count;
	$def=0.75*$count;
	echo '<h4><font face="Calibri" size="6">Defaulters for WT Practicals are</font></h4>';
	$result = mysql_query("SELECT `Roll no`,`Name` FROM `dummy_final` where `wt_pr`>='$crit' and `wt_pr`<'$def'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    

mysql_free_result($result);
echo '</table><h4><font face="Calibri" size="6">Critical Defaulters for WT Practicals are</font></h4>';
$result = mysql_query("SELECT `Roll No`,`Name` FROM `dummy_final` where `wt_pr`>=0 and `wt_pr`<'$crit'")or die(mysql_error());

	$fields_num = mysql_num_fields($result);

		echo "<table><tr>";
		// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
    	$field = mysql_fetch_field($result);
    	echo "<th>{$field->name}</th>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>";

    	// $row is array... foreach( .. ) puts every element
    	// of $row to $cell variable
     	foreach($row as $cell)
        	echo "<td align='center'>$cell</td>";

    	echo "</tr>\n";
    }
    echo '</table>';

mysql_free_result($result);

?>
</div>
</div>
<script>
function pop()
{
alert("LAST DATE OF SUBMISSION:10/10/14");
}
</script>
</body>
</html>
