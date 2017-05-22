<!DOCTYPE HTML>

<html>
<head>
	<title>eBencana Kemaman</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=9">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
	</noscript>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
	.w3-row-padding, .w3-row-padding>.w3-half, .w3-row-padding>.w3-third, .w3-row-padding>.w3-twothird, .w3-row-padding>.w3-threequarter, .w3-row-padding>.w3-quarter, .w3-row-padding>.w3-col {
			padding: 8px;
	}
	</style>
</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h2><a href="#">eBencana Kemaman</a></h2>
				<nav id="nav">
					<ul>
						<li><a href="{{ url('/') }}">Halaman Utama</a></li>
						<li><a href="{{ url('/notifikasi') }}">Kawasan Bencana</a></li>
						<li><a href="{{ url('/infobencana') }}">Info Bencana</a></li>
						<li><a href="{{ url('/contact') }}">Hubungi Kami</a></li>
            @if (Route::has('login'))

              @if (Auth::check())
                <li>  <a href="{{ url('/home') }}">Halaman Utama</a></li>
              @else
						<li><a href="{{ url('/login') }}" class="button special">Log Masuk</a></li>
            <li><a href="{{ url('/register') }}" class="button special">Daftar</a></ii>
          @endif

        @endif
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
          <ul class="actions">
						<li><a href="#" class="image fit"><img src="images/logo1.png" alt=""  height="100" width="40" /></a></li>
						<li><a href="#" class="image"><img src="images/logo2.png" alt=""  height="120" width="200" /></a></li>
					</ul>
					<h3>Sistem Maklumat Pengurusan Bencana</h3>
					<p> @ eBencana Kemaman</p>

				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2  style="color:red;"> <u>TAKRIF BENCANA</u></h2>
          <p>&nbsp</p>
            <p style="color:black;"> "sesuatu kejadian yang berlaku secara mengejut, bersifat kompleks dan mengakibatkan kehilangan nyawa, </p>
            <p style="color:black;">  kemusnahan kepada harta benda atau alam sekitar serta menjejaskan aktiviti masyarakat setempat."</p>
            <p style="color:black;"> "melibatkan sumber, peralatan, kekerapan dan tenaga manusia yang ekstensif daripada banyak agensi serta penyelarasan yang berkesan"</p>
            <p style="color:black;"> &nbsp <i> [Arahan MKN No. 20]</i></p>
				</header>
			</section>

		<!-- Two -->
    <section id="two">
      <header class="major">
        <h2  style="color:red;"> <u>KAWASAN- KAWASAN SERING BANJIR TERENGGANU<u/></h2>
      </header>
      <div class="container-center" align="center" valign="center">
            <a href="#" class="image" align="center" valign="center"><img src="images/sering.jpg" /></a>
      </div>
    </section>

		<br><div id="googleMap" style="width:1430px;height:350px;background:blue"></div></br>
		<h3 class="w3-center">Hubungi Kami</h3>
		<div class="w3-content" style="max-width:800px;position:relative">
			<p>Untuk sebarang pertanyaan mengenai Sistem eBencana Kemaman atau hal-hal berkaitan bencana sila hubungi:</p>
										<ul class="icons">
											<li><a href="#" class="icon fa fa-institution"><span class="p"> &nbsp; Pejabat Daerah and Tanah Kemaman, &nbsp;  Kampung Gong Limau, 24000 Chukai, Terengganu, Malaysia</span></a></li>
											<li><a href="#" class="icon fa-phone"><span class="p"> &nbsp; +609-8591616</span></a></li>
											<li>&nbsp;</li>
											<li><a href="#" class="icon fa fa-envelope"><span class="p">  &nbsp;upmn@terengganu.gov.my</span></a></li>
										</ul>
									</div>
	<!-- Footer -->

		<footer class="w3-container w3-indigo w3-padding-16">
		<p>&copy; eBencana Kemaman. Hak cipta terpelihara 2017</p>
	</footer>
		<script>
		var blink_speed = 1000; var t = setInterval(function () {
			var ele = document.getElementById('blinker');
			 ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden'); }, blink_speed);

		</script>
		<script>
		var slideIndex = 0;
		carousel();

		function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > x.length) {slideIndex = 1}
				x[slideIndex-1].style.display = "block";
				setTimeout(carousel, 2000);
		}
		</script>

<script>
function myMap() {
var mapProp= {
		center:new google.maps.LatLng(4.2403465,103.4190884),
		zoom: 18,

};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNmjZtKAbfJK_VOE15dAPG9pM91G_azSg&callback=myMap"></script>
</body>
</html>
