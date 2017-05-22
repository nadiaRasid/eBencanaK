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
<div class="container">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
<div class="panel panel-info" style="margin-top:50px">
<div class="panel-heading">
  <h3 class="panel-title">{{ Auth::user()->name }}<p class="pull-right">{{ Auth::user()->created_at }}</p></h3>
</div>
<div class="panel-body">
  <div class="row">

    <div class=" col-md-9 col-lg-9 ">
      <table class="table table-user-information">
        <tbody>
          <tr>
            <td>Nama : </td>
            <td>{{ Auth::user()->name }}</td>
          </tr>
          <tr>
            <td>Email: </td>
            <td>{{ Auth::user()->email }}</td>
          </tr>
          <tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>



@endsection
