@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Edit Pedaftaran Pusat Pemindahan</h2>
          <!-- <a href="{{ url('/pusatPemindahan/create') }}" class="btn btn-info pull-right" role="button">Senarai Pusat Pemindahan</a></h2> -->
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                {{-- <form class="form-horizontal" action="{{ action('PusatPemindahanUsController@update', $pusatPemindahan->id) }}" method="POST" enctype="multipart/form-data"> --}}
                  {!! Form::model($pusatPemindahan, ['method' => 'PATCH','action' =>  ['PusatPemindahanUsController@update', $pusatPemindahan->id], 'files' => true]) !!}
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Jenis Bencana:</strong>
                          {{ Form::select('jenisBencana', ['Pilih Bencana' => 'Pilih Bencana','Banjir' => 'Banjir', 'Jerebu' => 'Jerebu', 'Tanah Runtuh' => 'Tanah Runtuh','Taufan' => 'Taufan'], null, ['class' => 'form-control']) }}
                      </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Name Pusat:</strong>
                          {!! Form::text('namaPusat', null, array('placeholder' => 'Name Pusat','class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Name Kawasan:</strong>
                          {!! Form::text('namaKawasan', null, array('placeholder' => 'Name Kawasan','class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>No.Tel Pusat Pemindahan:</strong>
                          {!! Form::text('noTelPusat', null, array('placeholder' => '000-0000000','class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Tarikh Buka:</strong>
                          {!! Form::date('tarikhBuka', null, array('placeholder' => 'Tarikh Buka','class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Tarikh Tutup:</strong>
                          {!! Form::date('tarikhTutup', null, array('placeholder' => 'Tarikh Tutup','class' => 'form-control')) !!}
                      </div>
                  </div>


                  <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                            <a href="{{ action('PusatPemindahanUsController@index2') }}" class="btn btn-default">Batal</a>
                              <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                  </div>
                                      {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('js/warning.js') }}"></script>
                    @endsection
