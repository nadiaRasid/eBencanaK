@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Laporan Kehilangan</h2>
  </div>
<div class="panel-body">
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th width="15%">Jenis Bencana</th>
              <th width="15%">Nama Mangsa</th>
              <th width="15%">Alamat Mangsa</th>
              <th width="15%">No.Tel Mangsa</th>
              <th width="15%">Tarikh Hilang</th>
              <th width="15%">Action</th>
            </tr>
          </thead>
          <tbody pull-{right}>
          <?php $i = 0 ?>
          @forelse($lapor_kehilangans as $LaporKehilangan)
          <tr>
          <td >{{$lapor_kehilangans->firstItem() + $i }}</td>
          <td>{{ $LaporKehilangan->jenisBencana }}</td>
          <td>{{ $LaporKehilangan->namaMangsa }}</td>
          <td>{{ $LaporKehilangan->alamatMangsa }}</td>
          <td>{{ $LaporKehilangan->phoneMangsa }}</td>
          <td>{{ $LaporKehilangan->tarikhHilang }}</td>
          <td>
          @if( $LaporKehilangan->user_id == Auth::user()->id)
          <a href="{{ action('LaporKehilangansController@edit', $LaporKehilangan->id) }}"
          class="btn btn-primary btn-sm">Edit</a>
          <a href="{{ action('LaporKehilangansController@destroy',$LaporKehilangan->id) }}"
            class="btn btn-danger btn-sm" id="confirm-modal">Padam</a>
          @endif
          </td>
          </tr>
          <?php $i++ ?>
          @empty
          <tr>
          <td colspan="10">Tiada program yang telah anda daftarkan .</td>
          </tr>
          @endforelse
          </tbody>
          </table>
          {{ $lapor_kehilangans->links() }}
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset('js/warning.js') }}"></script>
@endsection
