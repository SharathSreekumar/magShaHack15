<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/dashboard.css">
	<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
	<title>Dashboard - Kadamba</title>
	<script>
		function check(){
			if($("#src").val()==$("#dest").val())
				alert("Source and Destination cannot be same");
		}

		function loadin(){
			$('.bust').addClass('active');
			$('.createbl').removeClass('active');
			$('#one').css('display', 'block');
			$('#two').css('display', 'none');
		}

	</script>
</head>
<body onload="loadin()">
	<div><br/></div>
	<div class="container dashmain">
		<div class="jumbotron">
			<h2>Welcome</h2><?php echo $_REQUEST["uname"];?>
			<ul class="nav nav-tabs">
				<li role="presentation" class="active bust"><a href="#">Add Bus Route</a></li>
				<li role="presentation" class="createbl"><a href="#">Add New Location</a></li>
			</ul>
			
			<div class="panel panel-default" id="three">
				<form method="POST" action="insertroute.php" class="panel-body jumbotron users">
					<select name="origin" id="src" class="form-control" onclick="index.php?value=1">
						<option value=0>Source</option>
						<?php
							$con = mysql_connect("localhost","root","");
							if (!$con)
  							{
  								die('Could not connect: ' . mysql_error());
  							}

							mysql_select_db("hackathon", $con);
							$result1 = mysql_query("SELECT * FROM source");
							while($row1 = mysql_fetch_array($result1))
							{
								echo "<option "."value=".$row1['location'].">".$row1['location']."</option>";
							}
						?>
					</select>
					<select name="destination" id="dest" class="form-control">
						<option value=0>Destination</option>
						<?php
							$con = mysql_connect("localhost","root","");
							if (!$con)
  							{
  								die('Could not connect: ' . mysql_error());
  							}

							mysql_select_db("hackathon", $con);
							$result1 = mysql_query("SELECT * FROM source");
							while($row1 = mysql_fetch_array($result1))
							{
								echo "<option "."value=".$row1['location'].">".$row1['location']."</option>";
							}
						?>
					</select>
					<select name="service" id="service" class="form-control" onclick="index.php?value=1">
						<option value=0>Service Type</option>
						<?php
							$con = mysql_connect("localhost","root","");
							if (!$con)
  							{
  								die('Could not connect: ' . mysql_error());
  							}

							mysql_select_db("hackathon", $con);
							$result1 = mysql_query("SELECT * FROM service");
							while($row1 = mysql_fetch_array($result1))
							{
								echo "<option "."value=".$row1['type'].">".$row1['type']."</option>";
							}
						?>
					</select>
					<input type="time" class="form-control" id="time" name="time"/>
					<div><input type="submit"  class="form-control btn btn-success" style="width:150px;" onclick="check()" value="Add new route" name="submit"/></div>
				</form>
			</div>
			<div  class="panel panel-default" id="four">
				<form method="POST" action="insertlocation.php" class="panel-body jumbotron users">
					<input type="text" id="newloc" name="loc" class="form-control" placeholder="New Location"/>
					<div><input type="submit"  class="form-control btn btn-success" style="width:150px;" onclick="checkEmp()" value="Add new bus stand" name="submit"/></div>
					<ul class="list-group">
						<?php
							$con = mysql_connect("localhost","root","");
							if (!$con)
  							{
  								die('Could not connect: ' . mysql_error());
  							}

							mysql_select_db("hackathon", $con);
							$result1 = mysql_query("SELECT * FROM source");
							while($row1 = mysql_fetch_array($result1))
							{
								echo "<li "."class="."\"list-group-item\">".$row1['location']."</li>";
							}
						?>
					</ul>
				</form>
			</div>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="lib/notify.min.js"></script>
	<script src="dist/js/main.js"></script>
</body>
</html>