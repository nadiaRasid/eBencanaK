@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
        <table class="table table-bordered" border="1" style="border-collapse: collapse; width: 80%; border-color: #adadad;">
    <thead style="">
    <tr>
       <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;"> Statistik 2017 </td>
        <td width="30%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;">
            <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Statistik Setiap Bulan tahun 2017</title>

        {!! Charts::assets() !!}

    </head>
    <body>
        <center>
            {!! $chart1->render() !!}
        </center>
    </body>
</html>


    </tr>

    <tr>
       <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;"> Statistik Jenis Bencana </td>
       <td width="30%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;">
            <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Statistik Jenis Bencana</title>

        {!! Charts::assets() !!}

    </head>
    <body>
        <center>
            {!! $chart2->render() !!}
        </center>
    </body>
</html>
    </tr>

    </thead>

</table>
        </div>
    </div>
</div>
@endsection
