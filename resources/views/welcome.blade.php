<!DOCTYPE HTML>
<html>
	<head>
		<title>eBencana Kemaman</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=9">
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
				<section id="INFO" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="8u">
							<section>
								<h2 style="color:red;">PERSEDIAAN BENCANA</h2>
								<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
								<p>Bencana alam perlu perhatian oleh sebab ia mengancam kehidupan dan ekonomi penduduk negara ini.
									 Kenyataan ini mendorong kita untuk mempersiapkan diri, keluarga, dan komuniti di sekitar kita.
									 Persediaan diri diharapkan pada akhirnya mampu untuk menjangka ancaman bencana dan mengurangkan korban jiwa,
									 kecederaan, mahupun kerosakan infrastruktur.
									 Bermula dari dalam diri sendiri, kita dapat membantu keluarga dan komuniti. </p>
									 <p>Berikut beberapa jenis bencana: <p>
										 <p>
											 <ol>
													<li>Gempa Bumi</li>
													<li>Tsunami</li>
													<li>Banjir </li>
													<li>Tanah Longsora></li>
													<li>Angin Taufan</li>
													<li>Wabah Penyakit</li>
													<li>Kebakaran</li>
													<li>Jerebu</li>
												</ol>
														</p>
							</section>
						</div>
						<div class="4u">
							<section>
								<h2 style="color:red;">HEBAHAN AMARAN AWAL BENCANA</h2>
								<tbody pull-{right}>

									<?php $i = 0 ?>
									@forelse($amaran_bencanas as $AmaranBencana)
										<tr>
											<td>
												<a  style="font-size:20px;"  href="{{ action('AmaranBencanasController@details', $AmaranBencana->id) }}"> {{ $AmaranBencana->tajuk }}</a>
											</td>
											<td>  <p><strong> Sumber : {{ $AmaranBencana->sumber }}</strong>
											<i style="color:black;font-size:16px;">Tarikh Laporan : {{ $AmaranBencana->tarikhLaporan}}</i></p></td>
										</tr>
										<?php $i++ ?>
									@empty
										<tr>
											<td colspan="10">Tiada Amaran Dilaporkan .</td>
										</tr>
									@endforelse
								</tbody>

								<div class="col-xs-12 col-sm-12 col-md-12 text-center">

									<p>{{ $amaran_bencanas->links() }} <a href="{{ action('AmaranBencanasController@noti', $AmaranBencana->id) }}"
									class="btn btn-info">Berita</a></p>
										</div>
							</section>
							<hr />
						</div>
					</div>
				</section>


		<!-- Two -->
    <section id="two">
      <header class="major">
         <h2  style="color:red;">LAMAN WEB BERKAITAN BENCANA DAN KAJI CUACA</h2>
      </header>
      <div class="container">
        <div class="row">
          <div class="4u">
            <section class="special box">
              <i><a href="#" class="image fit"><img src="images/logo1.png" /></a></i>
              <a href="http://portalbencana.ndcc.gov.my">Laman Web Portal Becana Seluruh Malaysia</a>
            </section>
          </div>
          <div class="4u">
						<section class="special box">
              <i><a href="#" class="image fit"><img src="images/logo2.png" height="160"/></a></i>
              <a href="http://etindakan.terengganu.gov.my/">Portal Kenyataan Banjir Negeri Terengganu</a>
            </section>

          </div>
          <div class="4u">
						<section class="special box">
              <i><a href="#" class="image fit"><img src="images/logo1.png" /></a></i>
              <a href="http://www.met.gov.my">Laman Web Jabatan Meteorologi Malaysia</a>
            </section>
          </div>
        </div>
      </div>
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
                <li><a href="#" class="icon fa fa-institution"><span class="p"> &nbsp; Pejabat Daerah and Tanah Kemaman, &nbsp;  Kampung Gong Limau, 24000 Chukai, Terengganu, Malaysia</span></a></li>
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
						<li>&copy; eBencana Kemaman. Hak cipta terpelihara 2017.</li>
					</ul>
				</div>
			</footer>

  <script>
  function myMap() {
  var mapProp= {
      center:new google.maps.LatLng(4.2403465,103.4190884),
      zoom:5,
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNmjZtKAbfJK_VOE15dAPG9pM91G_azSg&callback=myMap"></script>
</body>
</html>
