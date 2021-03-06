<!DOCTYPE html>
<html lang="en">
<head>
<title>Tugas Online - Keperawatan</title>
<link rel="shortcut icon" href="img/poltekkes.png"/>
<script src="js/jquery.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Tugas Online, Politeknik Kesehatan Keperawatan Bandung"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="js/responsiveslides.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font/css/fontello.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="" href="index.php"><img src="img/poltekkes.png" alt="" width="80" height="80" border="0"></a>
      <ul class="nav nav-collapse pull-right">
        <li><a href="index.php?p=home" ><i class="icon-user"></i> Home</a></li>
        <li><a href="index.php?p=tentang"><i class="icon-trophy"></i> Pengumuman</a></li>
        <li><a href="index.php?p=home"><i class="icon-doc-text"></i> Tugas</a></li>
        <li><a href="index.php?p=login"><i class=""></i> Login</a></li>
      </ul></a>
      <div class="nav-collapse collapse"></div>
    </div>
  </div>
</div>
<div id="konten>
    	<?php
		$pages_dir = 'pages';
		if(!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
 
			$p = $_GET['p'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir.'/home.php');
		}
		?>
		</div>
<div class="row social">
  <ul class="social-icons">
    <li><a href="http://jurwatbandung.com/"><img src="img/P.png" alt="" width="48"></a></li>
	 <li><a href="http://absensi.jurwatbandung.com/"><img src="img/E.png" alt="" width="48"></a></li>
    <li><a href="http://tugas.jurwatbandung.com/"><img src="img/T.png" alt="" width="48" height="48"></a></li>  
    <li><a href="http://alumni.jurwatbandung.com/"><img src="img/A.png" alt="" width="48" height="48"></a></li>
	<li><a href="http://poltekkesbandung.ac.id/"><img src="img/P.png" alt="" width="48"></a></li>
    
 
  </ul>
</div>
<div class="footer" href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
  <div class="container">
    <p class="pull-left"><a href="http://algysetiawan.web.id/">Copyright &copy;2017 All rights Reserved | by Madness Studio</a></p>

    <p class="pull-right"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
  </div>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
  </div>
  <div class="modal-body">
    <form action="#">
      <input type="text" placeholder="Yopur Name">
      <input type="text" placeholder="Your Email">
      <input type="text" placeholder="Website (Optional)">
      <textarea rows="3" style="width:80%"></textarea>
      <br>
      <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
    </form>
  </div>
</div>
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#myModal').modal('hidden')
</script>
</body>
</html>