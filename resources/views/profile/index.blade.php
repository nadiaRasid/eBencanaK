@extends('layouts.app')

@section('content')
<div class="container">

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


<div class="panel panel-info" style="margin-top:50px">
<div class="panel-heading">
  <h3 class="panel-title">{{ Auth::user()->name }}<p class="pull-right">{{ Auth::user()->created_at }}</p></h3>

</div>
<div class="panel-body">
  <div class="row">
    @foreach ($penggunas as $pengguna)
  <div class="col-md-3 col-lg-3 " align="center">
            @if($pengguna->gambar == null)

               <td><img src="{{ asset('img/image-placeholder2.jpg') }}" width="100%"/></td>

              @else

                <label for="fileUpload" style="width: 500px">
                  <img class="image-placeholder" src="{{ $pengguna->gambar }}" width="100%"/>
                </label>


              @endif
  </div>
    <div class=" col-md-9 col-lg-9 ">
      <table class="table table-user-information">
        <tbody>

          <tr>
            <td>Nama Penuh: </td>
            <td>{{ $pengguna->user->name }}</td>
          </tr>
          <tr>
            <td>Email: </td>
            <td>{{ $pengguna->user->email }}</td>
          </tr>
          <tr>
            <td>Nama: </td>
            <td>{{ $pengguna->nama }}</td>
          </tr>
          <tr>
            <td>Telefon: </td>
            <td>{{ $pengguna->telefon }}</td>
          </tr>
            <td>Alamat: </td>
            <td>{{ $pengguna->alamat }}</td>
          </tr>
          <tr>
            <td>Gambar Profil: </td>
            <td>{{ $pengguna->gambar }}</td>
          </tr>

        </tbody>
      </table>

      <div class="text-center">
        @if( $pengguna->user_id == Auth::user()->id)
          <a href="{{ action ('PenggunasController@edit', $pengguna->user_id) }}" class="btn btn-success">Kemaskini Maklumat Diri</a>
        @endif

      </div>

    </div>
  </div>
  @endforeach
</div>
      <div class="panel-footer">
            <a href="{{ url('home') }}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Keluar</a>
      </div>
</div>
</div>
</div>

@endsection
