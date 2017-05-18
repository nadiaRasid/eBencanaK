@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
      <h2>Edit Laporan Kehilangan Mangsa</h2>
        <!-- <h2>Laporan Kehilangan Mangsa<a href="{{ url('/LaporKehilangan/create') }}" class="btn btn-info pull-right" role="button">Senarai Laporan Kehilangan Mangsa</a></h2> -->
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <!-- <form class="form-horizontal" action="{{ action('LaporKehilangansController@simpan', $LaporKehilangan->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }} -->

                    {!! Form::model($LaporKehilangan, ['method' => 'PATCH','action' =>  ['LaporKehilangansController@simpan', $LaporKehilangan->id], 'files' => true]) !!}

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Bencana:</strong>
                            {{ $LaporKehilangan->jenisBencana }}

                            {{-- {{ Form::select('jenisBencana', ['Pilih Bencana' => 'Pilih Bencana','Banjir' => 'Banjir', 'Jerebu' => 'Jerebu', 'Tanah Runtuh' => 'Tanah Runtuh','Taufan' => 'Taufan'], null, ['class' => 'form-control']) }} --}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name Mangsa:</strong>
                            {{ $LaporKehilangan->namaMangsa }}
                            {{-- {!! Form::text('namaMangsa', null, array('placeholder' => 'Name Mangsa','class' => 'form-control')) !!} --}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>No Kad Pengenalan:</strong>
                            {{ $LaporKehilangan->ic }}
                            {{-- {!! Form::text('namaMangsa', null, array('placeholder' => 'Name Mangsa','class' => 'form-control')) !!} --}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Umur:</strong>
                            {{ $LaporKehilangan->umur }}
                            {{-- {!! Form::text('namaMangsa', null, array('placeholder' => 'Name Mangsa','class' => 'form-control')) !!} --}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Bangsa:</strong>
                            {{ $LaporKehilangan->bangsa }}
                            {{-- {!! Form::text('namaMangsa', null, array('placeholder' => 'Name Mangsa','class' => 'form-control')) !!} --}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Alamat Mangsa:</strong>
                            {{ $LaporKehilangan->alamatMangsa }}
                            {{-- {!! Form::textarea('alamatMangsa', null, array('placeholder' => 'Alamat Mangsa','class' => 'form-control')) !!} --}}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>No.Tel Mangsa:</strong>
                            {{ $LaporKehilangan->phoneMangsa }}
                            {{-- {!! Form::text('phoneMangsa', null, array('placeholder' => 'No.Tel Mangsa Mangsa','class' => 'form-control')) !!} --}}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tarikh Hilang:</strong>
                              {{ $LaporKehilangan->tarikhHilang }}
                            {{-- {!! Form::date('tarikhHilang', null, array('placeholder' => 'Tarikh Hilang','class' => 'form-control')) !!} --}}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Pusat Pemindahan:</strong>
                            {!! Form::text('namaPusat', null, array('placeholder' => 'Pusat Pemindahan','class' => 'form-control')) !!}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Status:</strong>
                                    <button name="status" id="status" type="submit" class="btn btn-success" value="Selamat">Selamat</button>
                                    <button name="status" id="status" type="submit" class="btn btn-danger" value="Terkorban">Terkorban</button>
                                    <button name="status" id="status" type="submit" class="btn btn-warning" value="Tidak Dapat Dikesan">Tidak Dapat Dikesan</button>
                          </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <a href="{{ action('LaporKehilangansController@lapor') }}" class="btn btn-default">Batal</a>
                            {{-- <button type="submit" class="btn btn-success">Simpan</button> --}}
                        </div>
                    </div>
                                    {!! Form::close() !!}
                                  </div>
                              </div>
                          </div>
                      </div>
                      <script src="{{ asset('js/warning.js') }}"></script>
                      @endsection
