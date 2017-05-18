{{-- @include('modal.destroy-modal') --}}
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Pusat Pemindahan </h2>
  </div>
<div class="panel-body">
  <form class="form-inline my-10 my-lg-5 pull-right" method="get" action="{{ url('pusatPemindahan/index') }}">
              <input class="form-control mr-sm-2" type="text" placeholder="Jenis Bencana" name="search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <span class="glyphicon glyphicon-search"></span></button>
          </form>
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th width="15%">Jenis Bencana</th>
              <th width="25%">Nama Pusat</th>
              <th width="25%">Nama Kawasan</th>
              <th width="15%">No.Tel </th>
              <th width="10%">Tarikh Buka</th>
              <th width="10%">Tarikh Tutup</th>

            </tr>
          </thead>
          <tbody pull-{right}>
          <?php $i = 0 ?>
          @forelse($pusat_pemindahans as $pusatPemindahan)
          <tr>
          <td >{{$pusat_pemindahans->firstItem() + $i }}</td>
          <td>{{ $pusatPemindahan->jenisBencana }}</td>
          <td>{{ $pusatPemindahan->namaPusat }}</td>
          <td>{{ $pusatPemindahan->namaKawasan }}</td>
          <td>{{ $pusatPemindahan->noTelPusat }}</td>
          <td>{{ $pusatPemindahan->tarikhBuka }}</td>
          <td>{{ $pusatPemindahan->tarikhTutup }}</td>
          </tr>
          <?php $i++ ?>
          @empty
          <tr>
          <td colspan="10">Tiada pusat pemindahan yang telah anda daftarkan .</td>
          </tr>
          @endforelse
          </tbody>
          </table>
          {{ $pusat_pemindahans->links() }}
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset('js/warning.js') }}"></script>
@endsection
