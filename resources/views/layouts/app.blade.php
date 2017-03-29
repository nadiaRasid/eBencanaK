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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse " id="app-navbar-collapse">
                                   <!-- Left Side Of Navbar -->
                                   <ul class="nav navbar-nav">
                                       @if(Auth::check())
                                           <!-- <li><a href="{{ url('profile') }}">Kemaskini Profil</a></li> -->
                                           <li><a href="{{ url('/home') }}">Laman Utama</a></li>
                                           <li><a href="{{ url('3') }}">Amaran Bencana</a></li>
                                           <li class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                              Laporan Kehilangan Mangsa <span class="caret"></span>  </a>
                                              <ul class="dropdown-menu" role="menu">
                                              <li><a href="{{ url('LaporKehilangan') }}">Laporan Kehilangan Mangsa Bencana</a></li>
                                              <li><a href="{{ url('#') }}">Semakan Status Mangsa Bencana</a></li>
                                              <li><a href="{{ url('/#') }}">Maklumat Mangsa Bencana</a></li>
                                            </ul>
                                            </li>
                                            <li class="dropdown">
                                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                               Pusat Pemindahan <span class="caret"></span>  </a>
                                               <ul class="dropdown-menu" role="menu">
                                               <li><a href="{{ url('/pusatPemindahan') }}">Senarai Pusat Pemindahan</a></li>
                                               <li><a href="{{ url('/pusatPemindahan2') }}">Daftar Pusat Pemindahan</a></li>
                                             </ul>
                                             </li>

                                             <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                              Maklumat Mangsa Bencana <span class="caret"></span>  </a>
                                                <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ url('#') }}">Data Bencana</a></li>
                                                <li><a href="{{ url('#') }}">Maklumat Mangsa Bencana</a></li>
                                                <li><a href="{{ url('#') }}">Laporan Kehilangan Mangsa Bencana</a></li>
                                              </ul>
                                              </li>
                                           {{-- <li><a href="{{ url('/PusatPemindahanU') }}">Pusat Pemindahan</a></li> --}}
                                           <li><a href="{{ url('/#') }}">Statistik Bencana</a></li>

                                           <unread></unread>
                                       @endif
                                   </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Log Masuk</a></li>
                            <li><a href="{{ route('register') }}">Daftar Masuk</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                     <li><a href="{{ url('profile') }}"><i class="fa fa-btn fa-user"></i>Profil</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Log Keluar
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
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
</body>
</html>
