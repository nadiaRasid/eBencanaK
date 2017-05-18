
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Laporan Lengkap Amaran Bencana</h2>
  </div>
<div class="panel-body">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <h4><b> <font color="red"><u>{{ $AmaranBencana->tajuk }}</u></font><b></h4>
              <h6><i> Tarikh Kemaskini: {{ $AmaranBencana->tarikhKemaskini }}</i></h6>
                &nbsp;
                &nbsp;
                &nbsp;
              <p><font size="4", color="black"> {{ $AmaranBencana->berita }}</font> </p>
                &nbsp;
                &nbsp;
              <h6><i> Sumber: {{ $AmaranBencana->sumber }}</i></h6>
                </div>
                  &nbsp;
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      <a href="{{ action('AmaranBencanasController@noti', $AmaranBencana->id) }}"
                      class="btn btn-primary btn-sm">Kembali</a>
                        </div>

      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset('js/warning.js') }}">

  function goBack() {
      window.history.back();
  }

  </script>
@endsection
