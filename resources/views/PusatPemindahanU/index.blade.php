
@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Senarai Pusat Pemindahan </h2>
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
              <th width="25%">Nama Kawasan</th>
              <th width="25%">Nama Pusat</th>
              <th width="15%">Tarikh Buka </th>
              <th width="15%">Tarikh Tutup</th>
            </tr>
          </thead>

              <tr>
                <td colspan="6">Tiada Rekod Pusat Pemindahan Terkini .</td>
              </tr>

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="{{ asset('js/warning.js') }}"></script>
@endsection
