@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Laporan Amaran Bencana</h2>
  </div>
<div class="panel-body">
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th width="30%">Tajuk Berita</th>
              {{-- <th width="20%">Sumber</th> --}}
              <th width="15%">Tarikh Laporan</th>
              <th width="15%">Tarikh Kemaskini</th>
              <th width="15%">Papar</th>
              <th width="25%">Tindakan</th>
            </tr>
          </thead>
          <tbody pull-{right}>
          <?php $i = 0 ?>
          @forelse($amaran_bencanas as $AmaranBencana)
          <tr>
          <td >{{$amaran_bencanas->firstItem() + $i }}</td>
          <td>{{ $AmaranBencana->tajuk }}</td>
          {{-- <td>{{ $AmaranBencana->sumber }}</td> --}}
          <td>{{ $AmaranBencana->tarikhLaporan }}</td>
          <td>{{ $AmaranBencana->tarikhKemaskini }}</td>
          <td>{{ $AmaranBencana->is_published == 1 ? 'Ya' : 'Tidak' }}</td>
          <td>
          @if( $AmaranBencana->user_id == Auth::user()->id)
          <a <span   class="btn btn-warning btn-sm"href="{{ action('AmaranBencanasController@published', $AmaranBencana) }}">{{ $AmaranBencana->is_published == 1 ? 'Tidak Papar' : 'Papar' }}</a>
          &nbsp
          <a href="{{ action('AmaranBencanasController@edit', $AmaranBencana->id) }}"
          class="btn btn-primary btn-sm">Maklumat</a>
          &nbsp
          <a href="{{ action('AmaranBencanasController@destroy',$AmaranBencana->id) }}"
            class="btn btn-danger btn-sm" id="confirm-modal">Padam</a>
          @endif
          </td>
          </tr>
          <?php $i++ ?>
          @empty
          <tr>
          <td colspan="10">Tiada Amaran Dilaporkan .</td>
          </tr>
          @endforelse
          </tbody>
          </table>
          {{ $amaran_bencanas->links() }}
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset('js/warning.js') }}"></script>
@endsection
