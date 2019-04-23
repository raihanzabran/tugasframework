<?php include "session.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
	
	<?php include "header.php"; ?>
</head>
<body class="body-beranda">
	<div id="logo">
		<a href="/">
		<a href="">
			<span>                   </span>
		</a>
	</div>
	<div id="container">
		<?php include "menu.php"; ?>
		<div class="main">
			<h1 class="content">Tes Koneksi Database</h1>
			<p class="content">
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "zabran123";

				//create connection
				$conn = new mysqli($servername, $username, $password);

				//check connection
				if ($conn->connect_error) {
					die("Koneksi gagal dengan pesan: ".$conn->connect_error);
				}

				echo "Koneksi ke Database berhasil";
				?>
			</p>
		</div>
	</div>
</body>
</html>