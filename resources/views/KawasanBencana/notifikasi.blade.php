@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Kawasan Bencana </h2>
  </div>
<div class="panel-body">

  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th width="25%">Nama Kawasan </th>
              <th width="25%">Jenis Bencana</th>
              <th width="25%">Tarikh Berlaku</th>

            </tr>
          </thead>
          <tbody pull-{right}>
          <?php $i = 0 ?>
          @forelse($kawasan_bencanas as $KawasanBencana)
          <tr>
          <td >{{$kawasan_bencanas->firstItem() + $i }}</td>
          <td><a href="{{ action('KawasanBencanasController@details', $KawasanBencana->id) }}"> {{ $KawasanBencana->namaKawasan }}</a>
          </td>
          <td>{{ $KawasanBencana->jenisBencana }}</td>
          <td>{{ $KawasanBencana->tarikhBerlaku }}</td>
          </tr>
          <?php $i++ ?>
          @empty
          <tr>
          <td colspan="10">Tiada Bencana yang telah dilaporkan .</td>
          </tr>
          @endforelse
          </tbody>
          </table>
          {{ $kawasan_bencanas->links() }}
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset('js/warning.js') }}"></script>
@endsection
