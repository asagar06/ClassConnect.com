<?php
	
	mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
	mysql_select_db('users') or trigger_error("Unable to switch to the database: " . mysql_error()); 
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{ 
	if(empty($_POST['login-email'])&&empty($_POST['login-password']))
	{
		header("Location:loginfail.php");
	}
	else
	{
		
		$email=$_POST['login-email'];
		
		$sql_query=mysql_query("select password,category from userdata where emailID='$email'")or die(mysql_error());
		if(mysql_num_rows($sql_query)==1)
		{
			
			$row=mysql_fetch_array($sql_query);
			
			if(strcmp($row['password'],$_POST['login-password'])==0)
			{
				
				session_start();
				$_SESSION['email']=$email;
				if($row['category']=='Student')
					header("Location:home.php");
				else
					header("Location:teacher.php");
			}
			else
				header("Location:loginfail.php");
		
		}
		else
			header("Location:no_account.php");
	}
	}
?>