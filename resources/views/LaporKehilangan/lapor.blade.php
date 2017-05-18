@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Laporan Kehilangan</h2>
  </div>
<div class="panel-body">

  <form class="form-inline my-10 my-lg-5 pull-right" method="get" action="{{ url('LaporKehilangan/lapor') }}">
              <input class="form-control mr-sm-2" type="text" placeholder="Jenis Bencana" name="search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
          </form>

  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th width="15%">Jenis Bencana</th>
              <th width="30%">Nama Mangsa</th>
              <th width="15%">Tarikh Hilang</th>
              <th width="20%">Status</th>
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
          <td>{{ $LaporKehilangan->tarikhHilang }}</td>
          <td>{{ $LaporKehilangan->status }}</td>
          <td>

          <a href="{{ action('LaporKehilangansController@edit2', $LaporKehilangan->id) }}"
          class="btn btn-info btn-sm">Maklumat</a>

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
