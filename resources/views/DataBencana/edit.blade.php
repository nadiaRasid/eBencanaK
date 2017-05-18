@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2> Edit Data Mangsa Bencana </h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">

              {!! Form::model($DataBencana, ['method' => 'PATCH','action' =>  ['DataBencanasController@update', $DataBencana->id], 'files' => true]) !!}


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Bencana:</strong>
                            {{ Form::select('jenisBencana', ['Pilih Bencana' => 'Pilih Bencana','Banjir' => 'Banjir', 'Jerebu' => 'Jerebu', 'Tanah Runtuh' => 'Tanah Runtuh','Taufan' => 'Taufan'], null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name Mangsa:</strong>
                            {!! Form::text('namaMangsa', null, array('placeholder' => 'Name Mangsa','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>No Kad Pengenalan(Jika ada):</strong>
                            {!! Form::text('ic', null, array('placeholder' => 'No Kad Pengenalan','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Umur (Anggaran):</strong>
                            {!! Form::text('umur', null, array('placeholder' => 'Umur','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Bangsa:</strong>
                            {{ Form::select('bangsa', ['Pilih Bencana' => 'Pilih Bangsa','Melayu' => 'Melayu', 'Cina' => 'Cina', 'India' => 'India','Lain-lain' => 'Lain-lain'], null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Alamat Mangsa:</strong>
                            {!! Form::textarea('alamatMangsa', null, array('placeholder' => 'Alamat Mangsa','class' => 'form-control')) !!}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>No.Tel Mangsa:</strong>
                            {!! Form::text('phoneMangsa', null, array('placeholder' => 'No.Tel Mangsa Mangsa','class' => 'form-control')) !!}

                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tarikh Hilang:</strong>
                            {!! Form::date('tarikh', null, array('placeholder' => 'Tarikh Hilang','class' => 'form-control')) !!}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Status Mangsa:</strong>
                            {{ Form::select('status', ['Pilih Status' => 'Pilih Status','Hidup' => 'Hidup', 'Meninggal Dunia' => 'Meninggal Dunia', 'Tidak Dijumpai' => 'Tidak Dijumpai'], null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name Pusat Pemindahan:</strong>
                            {!! Form::text('namaPusat', null, array('placeholder' => 'Name Pusat Pemindahan','class' => 'form-control')) !!}
                        </div>
                    </div>

                      <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                              <a href="{{ action('DataBencanasController@index') }}" class="btn btn-default">Padam</a>
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
