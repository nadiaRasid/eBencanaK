@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Edit Kawasan Bencana</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
              {!! Form::model($KawasanBencana, ['method' => 'PATCH','action' =>  ['KawasanBencanasController@update', $KawasanBencana->id], 'files' => true]) !!}
              

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Kawasan:</strong>
                            {!! Form::text('namaKawasan', null, array('placeholder' => 'Nama Kawasan','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Bencana:</strong>
                            {{ Form::select('jenisBencana', ['Pilih Bencana' => 'Pilih Bencana','Banjir' => 'Banjir', 'Jerebu' => 'Jerebu', 'Tanah Runtuh' => 'Tanah Runtuh','Taufan' => 'Taufan'], null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tarikh Berlaku:</strong>
                            {!! Form::date('tarikhBerlaku', null, array('placeholder' => 'Tarikh Berlaku','class' => 'form-control')) !!}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Punca:</strong>
                            {!! Form::textarea('punca', null, array('placeholder' => 'Punca','class' => 'form-control')) !!}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Bilangan Mangsa Pemindahan:</strong>
                            {!! Form::number('noPindah', null, array('placeholder' => '0','class' => 'form-control')) !!}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Bilangan Mangsa Terkorban:</strong>
                            {!! Form::number('noKorban', null, array('placeholder' => '0','class' => 'form-control')) !!}

                        </div>
                    </div>

                      <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                              <a href="{{ action('KawasanBencanasController@create') }}" class="btn btn-default">Padam</a>
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
