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
			<h1 class="content">Kontak</h1>
			<p class="content"><center>
				Masukkan Kontak Anda
			</center></p>
		</div>
		
	</div>
	<form method="post" action="kontak_proses.php">
		<div style="padding-left: 40%">
			<table>
				<tr>
					<td rowspan="1">Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="Email" required></td>
				</tr>
				<tr>
					<td valign="top">Pertanyaan</td>
					<td valign="top">:</td>
					<td><textarea name="pertanyaan" required rows="10" cols="20"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="kirim"></td>
				</tr>
			</table>
		</div>
	</form>
</body>
</html>