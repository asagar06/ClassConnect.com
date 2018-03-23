<?php
	mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
	mysql_select_db('dummy') or trigger_error("Unable to switch to the database: " . mysql_error()); 
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sub=$_POST['subject'];
		$table='dummy_'.$sub;
		$attdate=$_POST['lec_date'];
		$att_date=strval($attdate);
		mysql_query("ALTER TABLE `$table` ADD `$att_date` VARCHAR(1) NOT NULL ;");
		
		for($i=1;$i<=20;$i++)
			if(isset($_POST["$i"]))
			{
				mysql_query("UPDATE `$table` set `$att_date`='p' where `Roll No`=$i")or die(mysql_error());
				mysql_query("UPDATE `dummy_final` set `$sub`=`$sub`+1 where `Roll No`=$i")or die(mysql_error());
			}
			else 
				mysql_query("UPDATE `$table` set `$att_date`='a' where `Roll No`=$i")or die(mysql_error());
		
		header("Location:att_succ.php");
	}

?>