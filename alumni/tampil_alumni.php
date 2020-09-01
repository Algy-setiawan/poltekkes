<!--

Author: W3layouts

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

-->

<?php



include"conn.php";

?>

<!DOCTYPE html>

<html>

<head>

<title>Alumni Jurwat Bandung</title>

<link rel="shortcut icon" href="logo/poltekkes.png"/>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/jquery.min.js"></script>

<!-- Custom Theme files -->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- Custom Theme files -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Literacy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 

Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- for bootstrap working -->

	<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- //for bootstrap working -->

<script src="js/responsiveslides.min.js"></script>

<script>

    // You can also use "$(window).load(function() {"

    $(function () {

      // Slideshow 1

      $("#slider1").responsiveSlides({

         auto: true,

		 nav: true,

		 speed: 500,

		 namespace: "callbacks",

      });

    });

  </script>

  <!-- web-fonts -->

  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,400italic,600,300italic,300,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- web-fonts -->

<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>

<!--/script-->

<script type="text/javascript">

			jQuery(document).ready(function($) {

				$(".scroll").click(function(event){		

					event.preventDefault();

					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);

				});

			});

</script>

<style type="text/css">

<!--

.style1 {color: #bfe7cd}

-->

</style>

</head>

<body>

	<!-- header-section-starts-here -->

	<div class="header" id="movetop">

		<div class="container">

			<div class="header-top">

				<p><img src="logo/poltekkes.png" width="120" height="120"></p>

				<div class="logo">

					<h1><a href="index.php">Form Alumni </a></h1>

					<h2 class="style1 style1 style1">Politeknik Kesehatan Keperawatan </h2>

				</div>

				<div class="social-icons">

					<ul>

						<li><a class="facebook" href="#"></a></li>

						<li><a class="twitter" href="#"></a></li>

						<li><a class="google-plus" href="#"></a></li>

					</ul>

				</div>

				<div class="clearfix"></div>

			</div>

			<!-- navigation -->

			<div class="navigation">

					<nav class="navbar navbar-default">

					 

						<!-- Brand and toggle get grouped for better mobile display -->

						<div class="navbar-header">

						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

							<span class="sr-only">Toggle navigation</span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

						  </button>

						</div>



						<!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">

							  <ul class="nav navbar-nav">

								<li><a href="index.php">Home </a></li>

								<li><a href="about.php">About</a></li>

								<li><a href="gallery.php">Gallery</a></li>

								<li><a href="login.php">Form Data</a></li>

								<li class="active"><a href="tampil_alumni.php">Form Alumni <span class="sr-only">(current)</span></a></li>

								<li><a href="contact.php">Contact Us</a></li>

							  </ul>

						  <div class="clearfix"></div>

						</div><!-- /.navbar-collapse -->

					</nav>

			</div>

			<!-- //navigation -->

		</div>



	</div>

	<!-- header-section-ends-here -->

	<!-- content-section-starts-here -->

	<div class="content">

		<div class="about-section">

			<div class="about">

				<div class="container">

					<div class="about-top heading">

						<h2 class="heading text-center">Form Alumni</h2><br>

						

					</div>

					<div class="entry">

				

		

		<center><table class="table table-striped">

		<thead>

<td><b><center>No</td>

<td><b><center>Nama</td>



<td><b><center>Jenis Kelamin</td>

<td><center><b>Alamat</td>

<td><center><b>No Tlp/Email</td>

<td><b><center>Tahun Lulus</td>

<td><b><center>Pekerjaan</td>

<td><b><center>Alamat Kerja</td>

</thead>

		</tr>

<?php

  

  /* Pengaturan Paging */

  $per_page=10; /* Jumlah Data yang ditampilkan Setiap Page*/

  $page_query=mysql_query("select COUNT(*) from alumni");

  $pages = ceil(mysql_result($page_query, 0) / $per_page);

  $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

  $start = ($page - 1) * $per_page; 

 /*------------------*/





	



		include "conn.php";	

		$query=mysql_query("select * from alumni  order by thn_lulus asc, nama asc Limit $start, $per_page");

		while($var=mysql_fetch_array($query)){

		?>



	

<tr><tbody>

<td><?php echo $c=$c+1;?></td>

<td><?php echo $var['nama'];?></td>



<td><?php echo $var['jk'];?></td>

<td><?php echo $var['alamat'];?></td>

<td><?php echo $var['no_tlp'];?></td>

<td><?php echo $var['thn_lulus'];?></td>

<td><?php echo $var['pekerjaan'];?></td>

<td><?php echo $var['alamat_kerja'];?></td>

</tbody></td>



</tr>



<?php

}?>

<form action="cetakalumni.php" method="post" name="postform">

<tr><td colspan="5" align="left"><input type="submit" value="Cetak">&nbsp; &nbsp; &nbsp;

</td>

</tr>

  </table>

  <?php

 /* Link Paging */

 if($pages >= 1 && $page <= $pages){

     for($x= 1; $x<=$pages; $x++){

        echo ($x == $page) ?  

    '<a href="?page='.$x.'">'.$x.'</a>' : '<a  href="?page='.$x.'">'.$x.'</a>' ; 

     }

 }

 ?>  

 	</p>

	

		

		

						

					<div class="clearfix"></div>

				</div>

				</div>

			</div>

		</div>

		<!-- //Our-staff-ends -->

		</div>

	</div>

	<!-- //content-section-ends-here -->

	<!-- footer-section-starts-here -->

	<!-- footer-section -->

	<div class="footer">

		<div class="footer-top">

			<div class="container">

				<div class="col-md-4 footer-grid">

					<form>					 

					  <input type="text" class="text" value="Enter Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter Email';}">

					 <input type="submit" value="Submit">

					 <div class="clearfix"></div>

				 </form>

				</div>

				<div class="col-md-4 footer-grid">

				</div>

				<div class="col-md-4 footer-grid">

			<div class="social-icons footer-social-icons">

				<a class="facebook" href="#"></a>

				<a class="twitter" href="#"></a>

				<a class="google-plus" href="#"></a>

			</div>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>

		<div class="footer-bottom">

			<div class="container">

				<div class="copyrights text-center">

					<p>© 2016 Alumni. All Rights Reserved | by   <a href="http://algysetiawan.xyz">  Madness Studio</a></p>						

				</div>

				<div class="footer-nav">

					<ul>

						<li><a href="index.php">Home </a></li>

						<li><a href="about.php">About</a></li>

						<li><a href="gallery.php">Gallery</a></li>

						<li><a href="login.php">Form Data</a></li>

						<li><a class="scroll" href="#movetop">Form Alumni <span class="sr-only">(current)</span></a></li>

						<li><a href="contact.php">Contact Us</a></li>

					</ul>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>

	</div>

	<!-- //footer-section -->

	<!-- //footer-section-ends-here -->

	<script type="text/javascript">

		$(document).ready(function() {

				/*

				var defaults = {

				containerID: 'toTop', // fading element id

				containerHoverID: 'toTopHover', // fading element hover id

				scrollSpeed: 1200,

				easingType: 'linear' 

				};

				*/

		$().UItoTop({ easingType: 'easeOutQuart' });

});

</script>

<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!---->

</body>

</html>