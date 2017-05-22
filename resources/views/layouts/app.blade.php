<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eBencana Kemaman') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
      body{
        background-image: url("images/pic06.jpg");
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">

            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'eBencana Kemaman') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse " id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-left">
                    @if(Auth::guest())
                          <li><a href="{{ url('/notifikasi') }}"><span class="glyphicon glyphicon-map-marker"></span>Kawasan Bencana</a></li>
                          <li><a href="{{ url('/infobencana') }}"><span class="glyphicon glyphicon-info-sign"></span>  Info Bencana</a></li>
                          <li><a href="{{ url('/contact') }}"><span class="glyphicon glyphicon-envelope"> </span> Hubungi Kami</a></li>
                  </ul>
                    <ul class="nav navbar-nav navbar-right">
                          <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span>  Log Masuk</a></li>
                          <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span>  Daftar Masuk</a></li>

                          <!-- Authentication Links -->
                    @elseif (Auth::user()->role === 'Admin')
                          <li><a href="{{ url('/home') }}"> <span class="glyphicon glyphicon-home"></span></a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-bell"></span>Amaran Awal<span class="caret"></span>  </a>
                            <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('AmaranBencana') }}"><span class="glyphicon glyphicon-pencil"></span>  Hebahan Bencana</a></li>
                          <li><a href="{{ url('/noti') }}"><span class="glyphicon glyphicon-th-list"></span>  Notifikasi Bencana</a></li>
                        </ul>
                        </li>

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-map-marker"></span>Kawasan Bencana  <span class="caret"></span>  </a>
                          <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('KawasanBencana') }}"><span class="glyphicon glyphicon-pencil"></span>  Daftar Kawasan Benacana</a></li>
                          <li><a href="{{ url('/notifikasi') }}"><span class="glyphicon glyphicon-th-list"></span>  Hebahan Kawasan Bencana</a></li>
                        </ul>
                        </li>

                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-map-marker"></span>
                           Pusat Pemindahan <span class="caret"></span>  </a>
                           <ul class="dropdown-menu" role="menu">
                           <li><a href="{{ url('/pusatPemindahan2') }}"><span class="glyphicon glyphicon-pencil"></span>  Daftar Pusat Pemindahan</a></li>
                         </ul>
                         </li>

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-folder-open"></span>
                          Maklumat Mangsa <span class="caret"></span>  </a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/DataBencana') }}"> <span class="glyphicon glyphicon-pencil"></span> Data Bencana</a></li>
                            <li><a href="{{ url('/maklumat') }}"><span class="glyphicon glyphicon-th-list"></span>  Maklumat Mangsa Bencana</a></li>
                            <li><a href="{{ url('/LaporKehilangan2/lapor') }}"><span class="glyphicon glyphicon-th-list"></span>  Laporan Kehilangan Mangsa Bencana</a></li>
                          </ul>
                          </li>

                          <li><a href="{{ url('/statistic2') }}"><span class="glyphicon glyphicon-signal"></span>  Statistik</a></li>

                          <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user"></span>  {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>

                                  <ul class="dropdown-menu" role="menu">

                                      <li>
                                          <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span>
                                              Log Keluar
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                    @elseif (Auth::user()->role === 'OrangAwam')
                      <li><a href="{{ url('/home') }}"><span class="glyphicon glyphicon-home"></span> Laman Utama</a></li>

                      <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">  <span class="glyphicon glyphicon-bell"></span>
                         Amaran Bencana  <span class="caret"></span>  </a>
                         <ul class="dropdown-menu" role="menu">
                         <li><a href="{{ url('/noti') }}"> <span class="glyphicon glyphicon-th-list"></span>  Notifikasi Bencana</a></li>
                       </ul>
                       </li>

                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-folder-open"></span>
                           Laporan Kehilangan <span class="caret"></span>  </a>
                           <ul class="dropdown-menu" role="menu">
                           <li><a href="{{ url('LaporKehilangan') }}"><span class="glyphicon glyphicon-pencil"></span>  Laporan Kehilangan Mangsa Bencana</a></li>
                           <li><a href="{{ url('/semakan') }}"><span class="glyphicon glyphicon-th-list"></span>  Semakan Status Mangsa Bencana</a></li>
                           <li><a href="{{ url('/maklumat') }}"><span class="glyphicon glyphicon-th-list"></span>  Maklumat Mangsa Bencana</a></li>
                         </ul>
                         </li>

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-map-marker"></span>
                            Pusat Pemindahan <span class="caret"></span>  </a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/pusatPemindahan') }}"><span class="glyphicon glyphicon-signal"></span>  Senarai Pusat Pemindahan</a></li>
                          </ul>
                          </li>

                          <li><a href="{{ url('/statistic2') }}"><span class="glyphicon glyphicon-signal"></span>  Statistik</a></li>

                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/profile') }}">  <span class="glyphicon glyphicon-user"></span>  Profile</a></li>
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out"></span>  Log Keluar

                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>

                    @else
                    @endif

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  @if (session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @endif
                  @if (isset($errors))
                      @foreach ($errors->all() as $error)
                          <div class="alert alert-danger">
                              {{ $error }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      @endforeach
                  @endif
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  @yield('content')
              </div>
          </div>
      </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    $(document).on("click", "#confirm-modal", function(e) {
           window.console&&console.log('foo');
           var url = $(this).attr("href");
           window.console&&console.log(url);
           e.preventDefault();

           $('#destroy-form').attr('action', url);
           $('#destroy-modal').modal({ show: true });
       });
    </script>
    <script src="{{ asset('js/add-image.js') }}"></script>
    @yield('scripts')
</body>
</html>
