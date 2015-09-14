<?php 
$con = mysql_connect("localhost","root","");
  if (!$con){
    die('Could not connect: ' . mysql_error());
  }
 session_start();
 if ( !isset($_SESSION['user1'])){
	 $name1=$_POST['uname'];
	 $pwd1=$_POST['pword'];

	 $query = "SELECT * FROM `hackathon`.`account` WHERE `uname`='$name1'  AND `pwrd`='$pwd1'; "; 

    $result = mysql_query($query,  $con) or die ("Error in query: ".mysql_error());

    if (mysql_num_rows($result) > 0) { 
		  $_SESSION['user1']=$_POST['uname'];
    }else{  
      echo "Invalid login";
      include ("index.html");
      exit();
    }
  } 
include("dashboard/index.php");
?>