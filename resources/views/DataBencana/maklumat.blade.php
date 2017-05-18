
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Data Mangsa Bencana </h2>
  </div>
<div class="panel-body">
  <form class="form-inline my-10 my-lg-5 pull-right" method="get" action="{{ url('maklumat') }}">
              <input class="form-control mr-sm-2" type="text" placeholder="Nama Mangsa" name="search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </form>
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>

              <th width="15%">Jenis Bencana</th>
              <th width="15%">Nama Mangsa</th>
              <th width="15%">ic</th>
              <th width="15%">No.Tel </th>
              <th width="15%">Tarikh </th>
              <th width="15%">Status</th>
              <th width="15%">Nama Pusat</th>

            </tr>
          </thead>
          <tbody pull-{right}>
          <?php $i = 0 ?>
          @forelse($data_bencanas as $DataBencana)
          <tr>
          {{-- <td>{{$data_bencanas->firstItem() + $i }}</td> --}}
          <td>{{ $DataBencana->jenisBencana }}</td>
          <td>{{ $DataBencana->namaMangsa }}</td>
          <td>{{ $DataBencana->ic }}</td>
          <td>{{ $DataBencana->phoneMangsa }}</td>
          <td>{{ $DataBencana->tarikh }}</td>
          <td>{{ $DataBencana->status }}</td>
          <td>{{ $DataBencana->namaPusat }}</td>

          </tr>
          <?php $i++ ?>
          @empty
          <tr>
          {{-- <td colspan="10">Tiada Data Mangsa yang telah direkodkan .</td> --}}
          </tr>
          @endforelse
          </tbody>
          </table>
          {{ $data_bencanas->links() }}
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>



              </tr>
            </thead>
            <tbody pull-{right}>
            <?php $i = 0 ?>
            @forelse($lapor_kehilangans as $LaporKehilangan)
            <tr>
            {{-- <td>{{$lapor_kehilangans->firstItem() + $i }}</td> --}}
            <td width="15%">{{ $LaporKehilangan->jenisBencana }}</td>
            <td width="15%">{{ $LaporKehilangan->namaMangsa }}</td>
            <td width="15%">{{ $LaporKehilangan->ic }}</td>
            <td width="15%">{{ $LaporKehilangan->phoneMangsa }}</td>
            <td width="15%">{{ $LaporKehilangan->tarikhHilang }}</td>
            <td width="15%">{{ $LaporKehilangan->status }}</td>
            <td width="15%">{{ $LaporKehilangan->namaPusat }}</td>

            </tr>
            <?php $i++ ?>
            @empty
            <tr>
            {{-- <td colspan="10">Tiada Data Mangsa yang telah direkodkan .</td> --}}
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
