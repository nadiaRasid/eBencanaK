@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2> Edit Amaran Bencana </h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">

              {!! Form::model($AmaranBencana, ['method' => 'PATCH','action' =>  ['AmaranBencanasController@update', $AmaranBencana->id], 'files' => true]) !!}


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tajuk Berita:</strong>
                            {!! Form::text('tajuk', null, array('placeholder' => 'Tajuk Berita','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sumber Berita:</strong>
                            {!! Form::text('sumber', null, array('placeholder' => 'Sumber Berita','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Berita:</strong>
                            {!! Form::textarea('berita', null, array('placeholder' => 'Berita','class' => 'form-control')) !!}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tarikh Laporan:</strong>
                            {!! Form::date('tarikhLaporan', null, array('placeholder' => 'Tarikh Laporan','class' => 'form-control')) !!}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tarikh Kemaskini:</strong>
                            {!! Form::date('tarikhKemaskini', null, array('placeholder' => 'Tarikh Kemaskini','class' => 'form-control')) !!}

                        </div>
                    </div>

                      <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                              <a href="{{ action('AmaranBencanasController@index') }}" class="btn btn-default">Padam</a>
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
