<!DOCTYPE HTML>

<html>
	<head>
		<title>eBencana Kemaman</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">eBencana Kemaman</a></h1>
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
    </section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
                  <div id="googleMap" style="width:650px;height:400px;background:blue"></div>
								</div>
								<div class="6u">
								</div>
							</div>
						</div>
						<div class="6u">
							<h2>Hubungi Kami</h2>
							<p>Untuk sebarang pertanyaan mengenai Sistem eBencana Kemaman atau hal-hal berkaitan bencana silah hubungi:</p>

              <ul class="icons">
                <li><a href="#" class="icon fa fa-institution"><span class="p"> &nbsp; Pejabat Daerah and Tanah Kemaman 24000 Kemaman Terengganu</span></a></li>
								<li><a href="#" class="icon fa-phone"><span class="p"> &nbsp; +609-8591616</span></a></li>
                <li>&nbsp;</li>
								<li><a href="#" class="icon fa fa-envelope"><span class="p">  &nbsp;upmn@terengganu.gov.my</span></a></li>
							</ul>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<li>&copy; eBencana Kemaman 2017</li>
					</ul>
				</div>
			</footer>
	</body>
  <script>
  function myMap() {
  var mapProp= {
      center:new google.maps.LatLng(4.1902321,103.4367274),
      zoom:5,
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNmjZtKAbfJK_VOE15dAPG9pM91G_azSg&callback=myMap"></script>
</html>
