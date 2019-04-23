<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Site</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">My Website</a>
        </div>
        <div  class="collapse navbar-collapse js-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo $_GET['page'] == 'Beranda' ? 'active' : '' ?>"><a href="http://localhost/zabran/home.php" class="nav-link active">Beranda</a></li>
            <li class="<?php echo $_GET['page'] == 'My' ? 'active' : '' ?>"><a href="http://localhost/zabran/profil.php" class="nav-link active">My Profile</a></li>
            <li class="<?php echo $_GET['page'] == 'Kontak' ? 'active' : '' ?>"><a href="http://localhost/zabran/kontak.php" class="nav-link active">Kontak</a></li>
            <li class="<?php echo $_GET['page'] == 'Multimedia' ? 'active' : '' ?>"><a href="http://localhost/zabran/multimedia.php" class="nav-link active">Multimedia</a></li>
            <li class="<?php echo $_GET['page'] == 'Test' ? 'active' : '' ?>"><a href="ihttp://localhost/zabran/test_koneksi.php" class="nav-link active">Test Koneksi</a></li>
            <li class="<?php echo $_GET['page'] == 'Logout' ? 'active' : '' ?>"><a href="http://localhost/zabran/form_login2.php" class="nav-link active">Logout</a></li>
          </ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </body>
  </html>
