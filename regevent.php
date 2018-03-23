<?php
session_start();
$email=$_SESSION['email'];
$emailid=strval($email);
mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
mysql_select_db('documents') or trigger_error("Unable to switch to the database: " . mysql_error()); 
$query=mysql_query("select `path` from `profilepics` where email='$emailid'")or die(mysql_error());
$row=mysql_fetch_array($query);
$path=$row['path'];

mysql_select_db('users') or trigger_error("Unable to switch to the database: " . mysql_error()); 
if(!empty($_POST['form-fname'])&&!empty($_POST['form-lname'])&&!empty($_POST['form-email'])&&!empty($_POST['form-tel']))
	{
		$fname=$_POST['form-fname'];
		$lname=$_POST['form-lname'];
		$email=$_POST['form-email'];
		$tel=$_POST['form-tel'];
		$name=$_POST['event'];
		
		foreach($name as $event){
			mysql_query("insert into register_events values('$fname','$lname','$email','$tel','$event')");}
		header("Location:home.php");
			
	}
?>