@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Laporan Kehilangan Mangsa<a href="{{ url('/LaporKehilangan/create') }}" class="btn btn-info pull-right" role="button">Senarai Laporan Kehilangan Mangsa</a></h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal" action="{{ action('LaporKehilangansController@store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

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
                            {!! Form::date('tarikhHilang', null, array('placeholder' => 'Tarikh Hilang','class' => 'form-control')) !!}

                        </div>
                    </div>

                      <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                              <a href="{{ action('LaporKehilangansController@index') }}" class="btn btn-default">Cancel</a>
                                  <button type="submit" class="btn btn-success">Save</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <script src="{{ asset('js/warning.js') }}"></script>
                      @endsection
