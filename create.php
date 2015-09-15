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
	include('index.html');
	echo <<<EOF
      <script type="text/javascript">
      window.onload=function(){alert("Welcome! Please Login with your new Id");}
      </script>
EOF;
}
elseif($_POST['password']!=$_POST['confirmpassword'])
{
	echo <<<EOF
      <script type="text/javascript">
      window.onload=function(){alert("Password not matching");}
      </script>
EOF;
	include('index.html');
}
?>