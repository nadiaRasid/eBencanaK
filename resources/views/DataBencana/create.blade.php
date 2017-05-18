@include('modal.destroy-modal')

@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Data Mangsa Bencana </h2>
  </div>
<div class="panel-body">
  <form class="form-inline my-10 my-lg-5 pull-right" method="get" action="{{ url('DataBencana/create') }}">
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
              <th width="15%">Nama Mangsa</th>
              <th width="15%">No Kad Pengenalan</th>
              <th width="15%">Tarikh </th>
              <th width="15%">Status</th>
              <th width="15%">Pusat Pemindahan</th>
              <th width="15%">Action</th>
            </tr>
          </thead>
          <tbody pull-{right}>
          <?php $i = 0 ?>
          @forelse($data_bencanas as $DataBencana)
          <tr>
          <td>{{$data_bencanas->firstItem() + $i }}</td>
          <td>{{ $DataBencana->jenisBencana }}</td>
          <td>{{ $DataBencana->namaMangsa }}</td>
          <td>{{ $DataBencana->ic }}</td>
          <td>{{ $DataBencana->tarikh }}</td>
          <td>{{ $DataBencana->status }}</td>
          <td>{{ $DataBencana->namaPusat }}</td>
          <td>
          @if( $DataBencana->user_id == Auth::user()->id)
          <a href="{{ action('DataBencanasController@edit', $DataBencana->id) }}"
          class="btn btn-primary btn-sm">Edit</a>
          <a href="{{ action('DataBencanasController@destroy',$DataBencana->id) }}"
            class="btn btn-danger btn-sm" id="confirm-modal">Padam</a>
          @endif
          </td>
          </tr>
          <?php $i++ ?>
          @empty
          <tr>
          <td colspan="10">Tiada Data Mangsa yang telah direkodkan .</td>
          </tr>
          @endforelse
          </tbody>
          </table>
          {{ $data_bencanas->links() }}
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset('js/warning.js') }}"></script>
@endsection
