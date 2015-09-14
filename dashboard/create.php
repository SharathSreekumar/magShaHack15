<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
	<title>Create account - Kadamba</title>
</head>
<body>
	<div class="container dashmain">
		<div class="panel panel-default" id="one">
			<div class="panel-body jumbotron users">
				<input type="text" id="uname" class="form-control" name="uname" placeholder="Username">
				<input type="password" class="form-control" id="pass" onchange="chk()" onkeyup="chk()" onkeydown="chk()" name="pword" placeholder="Password">
				<input type="password" onchange="chk()" onkeyup="chk()" onkeydown="chk()" class="form-control" id="cpass" name="pword" placeholder="Confirm Password">
				<button id="submit" class="form-control btn btn-success disabled">Create User</button>
				<input type="reset" onclick="resettxt()" class="form-control btn btn-info" value="Reset">
			</div>
		</div>
	</div>
</body>