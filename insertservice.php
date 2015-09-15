<?php
	if($_POST['ser']!="" && $_POST['ser']!=" "){
		$con = mysql_connect("localhost","root","");
		if (!$con)
  		{
	  		die('Could not connect: ' . mysql_error());
  		}
		mysql_select_db("hackathon", $con);
		echo <<<EOF
    			<script type="text/javascript">
    				window.onload=function(){alert("Adding");}
    			</script>
EOF;
		$ser1=$_POST['ser'];

		$query = "SELECT * FROM `hackathon`.`service` WHERE `type`='$ser1'; ";

    	$result = mysql_query($query,  $con) or die ("Error in query: ".mysql_error());
    	echo <<<EOF
    		<script type="text/javascript">
    			window.onload=function(){alert("Adding");}
    		</script>
EOF;

    	if (mysql_num_rows($result) <= 0) { 
			$sql="INSERT INTO `hackathon`.`service` (`type`) VALUES ('$_REQUEST[ser]')";
			
			if (!mysql_query($sql,$con))
  			{
	  			die('Error: ' . mysql_error());
	  		}

			mysql_close($con);
			echo <<<EOF
    			<script type="text/javascript">
    				window.onload=function(){alert("Added successfully");}
    			</script>
EOF;
			include('indexa.php');
    	}else{
    		mysql_close($con);
			echo <<<EOF
    			<script type="text/javascript">
    				window.onload=function(){alert("Location exists");}
    			</script>
EOF;
			include('indexa.php');	
    	}
	}else{
		echo <<<EOF
    		<script type="text/javascript">
    			window.onload=function(){alert("Please enter location");}
    		</script>
EOF;
		include('indexa.php');
	}
?>