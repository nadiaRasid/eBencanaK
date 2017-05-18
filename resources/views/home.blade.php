@extends('layouts.app')
@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

              <a href="#" class="image fit"><img src="images/logo1.png" alt=""  height="100" width="200" /></a>
              <a href="#" class="image fit"><img src="images/logo2.png" alt=""  height="110" width="140" /></a>
              <h3>Sistem Maklumat Pengurusan Bencana</h3>
              <p> @ eBencana Kemaman</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <h4><font color="red">{{ Auth::user()->name }} </font><font color="blue"> Anda telah berjaya log masuk!</h4>


            </div>
        </div>
    </div>


@endsection
