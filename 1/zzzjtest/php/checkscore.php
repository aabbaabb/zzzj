<?php
	session_start();
	require_once("connectsql.php");
	$string = "update user set quesnum=100 where id= (".$_SESSION['userid'].")";
	mysql_query($string);
	$scoretemp= $_SESSION['score']+5;
	$string = "select count(*) from user where score > $scoretemp ";
	$result=mysql_query($string);
	$percent=mysql_fetch_array($result);
	$string = "select count(*) from user ";
	$result=mysql_query($string);
	$usernum=mysql_fetch_array($result);
	$datawrap['score'] = $_SESSION['score'];
	$datawrap['percent'] = $percent[0];
	$datawrap['usernum'] = $usernum[0];
	echo json_encode($datawrap);
?>