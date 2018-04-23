<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ups Normal - History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Date Time -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- table  -->
	<link rel="stylesheet" href="css/table.css">
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.php">Ups Normal<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="reservation.php">Reservation</a></li>
							<li><a href="about.php">About</a></li>
							<li class="active"><a href="history.php">History</a></li>
							<li><a href="testimoni.php">Testimony</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>Check <em>your</em> History</h1>
							<h2>Brought to you by</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-reservation-form" class="fh5co-section">
	<div class="container">
	<div class="row">
		<div class="col-md-12 fh5co-heading animate-box">
			<h2>List Your Reservation</h2>
		<table class="points_table">
			<thead>
				<tr>
					<th class="col-xs-3">No</th>
					<th class="col-xs-4">Date and Time</th>
					<th class="col-xs-5">Amount of Chair</th>
				</tr>
			</thead>

			<tbody class="points_table_scrollbar">
				
				<?php
					require('koneksi.php');
					$i=1;
					$query = "SELECT r.Tanggal_reservasi || ' ' || r.Jam_reservasi, m.Jumlah_kursi FROM `user` u JOIN `reservasi` r ON u.ID_user = r.ID_user JOIN `meja` m ON r.ID_meja = m.ID_meja WHERE u.Nama_user='ryan'";
					$result = mysqli_query($con,$query) or die(mysqli_error());
				
				if(mysqli_num_rows($result)==0 ){ ?>
					<tr class = "odd">
						<td class="empty"> <?php echo "Data tidak di temukan!"; ?> </td>
					</tr>
				
				<?php }
				else{
					while($row = mysqli_fetch_array($result)){
				
					if ($i %2 != 0){
				?>
						<tr class="odd">
							<td class="col-xs-3"> <?php echo $i; ?></td>
							<td class="col-xs-4"> <?php echo $row[0]; ?> </td>
							<td class="col-xs-5"> <?php echo $row[1]; ?> </td>
						</tr>
						<?php  $i = $i+1;
					}

					else
						{ ?>
							<tr class="even">
								<td class="col-xs-3"> <?php echo $i; ?></td>
								<td class="col-xs-4"> <?php echo $row[0]; ?> </td>
								<td class="col-xs-5"> <?php echo $row[1]; ?> </td>
							</tr>
							<?php  $i = $i+1;}	?>
						<?php }	}?>
				
				<tr class="even">
					<td class="col-xs-3">2</td>
					<td class="col-xs-4">2  persons</td>
					<td class="col-xs-5">Available</td>
				</tr>
				
				<tr class="odd">
					<td class="col-xs-3">3</td>
					<td class="col-xs-4">4  persons</td>
					<td class="col-xs-5">Available</td>
				</tr>

				<tr class="even">
					<td class="col-xs-3">4</td>
					<td class="col-xs-4">4  persons</td>
					<td class="col-xs-5">Available</td>
				</tr>

				<tr class="odd">
					<td class="col-xs-3">5</td>
					<td class="col-xs-4">2  persons</td>
					<td class="col-xs-5">Available</td>
				</tr>

				<tr class="even">
					<td class="col-xs-3">6</td>
					<td class="col-xs-4">4  persons</td>
					<td class="col-xs-5">Available</td>
				</tr>

				<tr class="odd">
					<td class="col-xs-3">7</td>
					<td class="col-xs-4">6 persons</td>
					<td class="col-xs-5">Available</td>
				</tr>

				<tr class="even">
					<td class="col-xs-3">8</td>
					<td class="col-xs-4">6  persons</td>
					<td class="col-xs-5">Available</td>
				</tr>

				<tr class="odd">
					<td class="col-xs-3">9</td>
					<td class="col-xs-4">2  persons</td>
					<td class="col-xs-5">Available</td>
				</tr>

				<tr class="even">
					<td class="col-xs-3">10</td>
					<td class="col-xs-4">4  persons</td>
					<td class="col-xs-5">Available</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
</div>
</div>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>Tasty</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					
				</div>

				<div class="col-md-2 col-md-push-1 fh5co-widget">
					
				</div>

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>Senayan City <br>Lower Ground floor #L76-77</li>
						<li><a href="tel://1234567920">(+62)21 29908880</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://https://freehtml5.co">upsnormal</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
						<small class="block">Designed by Smart Tech</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>