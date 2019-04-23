<!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head><center>
	<body>
		<div id="kotak">
			<div id="atas">LOGIN ADMINISTRASI</div>
			<div id="bawah">

				<form method="post" action="form_login_proses.php">	
				<input class="masuk" placeholder="Username" name="user"><br/>	
				<input class="masuk" type="Password" placeholder="Password" name="pass"><br/>
				<input id="tombol" type="submit" name="login" value="login">
				</form>

			</div>
		</div>
	</body>
</html>