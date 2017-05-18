@extends('layouts.app')
@section('content')
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['task', 'bilangan'],
        ['Bilangan Mangsa Terkorban',     {{ $KawasanBencana->noKorban }} ],
        ['Bilangan Mangsa Pindah',      {{ $KawasanBencana->noPindah }}  ],

      ]);

      var options = {
        
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }
  </script>
</head>


<div class="panel panel-default">
    <div class="panel-heading">
      <h3><strong><font color="red">{{ $KawasanBencana->jenisBencana }} di {{ $KawasanBencana->namaKawasan }}</font></strong>

        <a href="{{ action('KawasanBencanasController@notifikasi', $KawasanBencana->id) }}"
        class="btn btn-info pull-right"  role="button">Kembali</a>

</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
              <div class="panel-heading">
                <h3><strong>Maklumat Bencana</strong></h3>
              </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama:</strong>
                            {{ $KawasanBencana->jenisBencana }} di {{ $KawasanBencana->namaKawasan }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Bencana:</strong>
                          {{ $KawasanBencana->jenisBencana }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tarikh Kejadian Berlaku:</strong>
                          {{ $KawasanBencana->tarikhBerlaku }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Punca:</strong>
                          {{ $KawasanBencana->punca }}
                        </div>
                    </div>
                    &nbsp
                    <div class="panel-heading">
                    <h3><strong>Statistik Mangsa Bencana</strong></h3>
                  </div>
                  <div class="form-group">
                        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                        </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <script src="{{ asset('js/warning.js') }}"></script>
                  @endsection
