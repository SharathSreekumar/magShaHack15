<?php
if($_POST['cpword']==$_POST['pword'])
{
	$con = mysql_connect("localhost","root","");
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}
	mysql_select_db("hackathon", $con);
	$sql="INSERT INTO `hackathon`.`account` (`uname`,`pword`) VALUES ('$_REQUEST[uname]', '$_REQUEST[pword]')";

	if (!mysql_query($sql,$con))
  	{
  		die('Error: ' . mysql_error());
  	}
//echo "1 record added";
	mysql_close($con);
	include('dashboard/index.php');
}
elseif($_POST['password']!=$_POST['confirmpassword'])
{
	echo "password incorrect";
	include('index.html');
}
?>