<?php
if($_POST['origin']!=$_POST['destination'])
{
	$con = mysql_connect("localhost","root","");
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}
	mysql_select_db("hackathon", $con);
	$sql="INSERT INTO `hackathon`.`busroute`(`origin`,`dest`,`time`,`service`)VALUES('$_REQUEST[origin]','$_REQUEST[destination]','$_REQUEST[time]','$_REQUEST[service]');";

	if (!mysql_query($sql,$con))
  	{
  		die('Error: ' . mysql_error());
  	}
//echo "1 record added";
	mysql_close($con);
	echo <<<EOF
    	<script type="text/javascript">
    	window.onload=function(){alert("Added successfully");}
    	</script>
EOF;
	include('indexa.php');
}
else
{
	include('indexa.php');	
}
?>