@extends('layouts.app')
@section('content')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load("current", {packages:["corechart"]});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {

      var record={!! json_encode($kawasan_bencanas) !!};
      console.log(record);
      // Create our data table.
      var data = new google.visualization.DataTable();
       data.addColumn('string', 'jenisBencana');
      data.addColumn('number', 'Total_Signup');
      for(var k in record){
           var v = record[k];

            data.addRow([k,v]);
         console.log(v);
         }
       var options = {
         title: 'My Daily Activities',
         is3D: true,
       };
       var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
       chart.draw(data, options);
     }
   </script>

   <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
@endsection
