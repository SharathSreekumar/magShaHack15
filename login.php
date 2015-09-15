<html>
<body>
<?php 
if($_POST['uname']!=="" && $_POST['uname']!==" "){
  $con = mysql_connect("localhost","root","");
  if (!$con){
      die('Could not connect: ' . mysql_error());
  }
  session_start();
  if ( isset($_SESSION['user1'])){
	 $name1=$_POST['uname'];
	 $pwd1=$_POST['pword'];

	 $query = "SELECT * FROM `hackathon`.`account` WHERE `uname`='$name1'  AND `pword`='$pwd1'; ";

    $result = mysql_query($query,  $con) or die ("Error in query: ".mysql_error());

    if (mysql_num_rows($result) > 0) { 
		  $_SESSION['user1']=$_POST['uname'];
      $cookie_name=$_POST['uname'];
      setcookie($cookie_name, time() + (600000));// 60 sec
		  include("indexa.php");
    }else{  
    	echo <<<EOF
    	<script type="text/javascript">
    	window.onload=function(){alert("Invalid Username and password");}
    	</script>
EOF;
      include ("index.html");
      exit();
    }
  }
}else{
  echo <<<EOF
      <script type="text/javascript">
      window.onload=function(){alert("Please enter Username and password");}
      </script>
EOF;
  include ("index.html");
  exit();
} 
?>
</body>
</html>