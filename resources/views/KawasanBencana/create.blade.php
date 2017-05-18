@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Kawasan Bencana </h2>
  </div>
<div class="panel-body">
  <form class="form-inline my-10 my-lg-5 pull-right" method="get" action="{{ url('KawasanBencana/create') }}">
              <input class="form-control mr-sm-2" type="text" placeholder="Nama Kawasan" name="search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
          </form>
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
              <th width="25%">Action</th>
            </tr>
          </thead>
          <tbody pull-{right}>
          <?php $i = 0 ?>
          @forelse($kawasan_bencanas as $KawasanBencana)
          <tr>
          <td >{{$kawasan_bencanas->firstItem() + $i }}</td>
          <td>{{ $KawasanBencana->namaKawasan }}</td>
          <td>{{ $KawasanBencana->jenisBencana }}</td>
          <td>{{ $KawasanBencana->tarikhBerlaku }}</td>

          <td>
          @if( $KawasanBencana->user_id == Auth::user()->id)
          <a href="{{ action('KawasanBencanasController@edit', $KawasanBencana->id) }}"
          class="btn btn-primary btn-sm">Edit</a>
          <a href="{{ action('KawasanBencanasController@destroy',$KawasanBencana->id) }}"
            class="btn btn-danger btn-sm" id="confirm-modal">Padam</a>
          @endif
          </td>
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
