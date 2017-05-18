@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Hebahan Amaran Bencana</h2>
  </div>
<div class="panel-body">
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th width="30%">Tajuk Berita</a></th>
              <th width="20%">Sumber</th>
              <th width="15%">Tarikh Laporan</th>
              <th width="15%">Tarikh Kemaskini</th>

            </tr>
          </thead>
          <tbody pull-{right}>
          <?php $i = 0 ?>
          @forelse($amaran_bencanas as $AmaranBencana)
          <tr>
          <td >{{$amaran_bencanas->firstItem() + $i }}</td>
          <td>
          <a href="{{ action('AmaranBencanasController@details', $AmaranBencana->id) }}"> {{ $AmaranBencana->tajuk }}</a>
          </td>
          <td>{{ $AmaranBencana->sumber }}</td>
          <td>{{ $AmaranBencana->tarikhLaporan }}</td>
          <td>{{ $AmaranBencana->tarikhKemaskini }}</td>

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
  <footer id="footer" class="wrapper style1-alt">
   <div class="inner">
     <ul class="copyright">
       &copy; eBencana Kemaman. Hak cipta terpelihara 2017.
     </ul>
   </div>
 </footer>
  <script src="{{ asset('js/warning.js') }}"></script>
@endsection
