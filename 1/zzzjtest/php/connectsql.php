<?php
	header('content-type:text/html;charset=utf-8');
	$con = mysql_connect("localhost","zzzj","zzzj");
	mysql_query("SET NAMES 'UTF8'"); 
	$num=null;
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("questions");
	
	
?>