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
	<?php include "menu.php"; ?>
	<div id="container">
		
		<div class="main">
			<h1 class="content">Multimedia</h1>
		</div>
		
		<center>
				<h2>Gambar</h2>
				<img src="hipwee-Rose-Wallpaper.jpg" width="300">

				<h2>Audio</h2>
				<audio src="Wiz Khalifa - See You Again (Feat. Charlie Puth).mp3" controls></audio>

				<h2>Video</h2>
				<video controls height="500">
					<source src="Last First Kiss - One Direction (LYRICS + PICTURES) HD 1080 x 1920.mp4" type="video/mp4">
				</video>

				<h2>Youtube</h2>
				<object width="420" height="315" data="https://www.youtube.com/watch?v=JwPZJWgH154">
					
				</object>
			</center>
	</div>
</body>
</html>