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
                <form class="form-horizontal" action="{{ action('LaporKehilangansController@update', $LaporKehilangan->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group{{ $errors->has('jenisBencana') ? ' has-error' : '' }}">
                        <label for="jenisBencana" class="col-md-4 control-label">Jenis Bencana</label>

                        <div class="col-md-6">
                            <input id="jenisBencana" type="text" class="form-control" name="jenisBencana" placeholder="Jenis Bencana" value="{{$LaporKehilangan->jenisBencana }}" required autofocus >

                            @if ($errors->has('jenisBencana'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jenisBencana') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('namaMangsa') ? ' has-error' : '' }}">
                        <label for="namaMangsa" class="col-md-4 control-label">Nama Mangsa</label>

                        <div class="col-md-6">
                            <input id="namaMangsa" type="text" class="form-control" name="namaMangsa" placeholder="Nama Mangsa" value="{{$LaporKehilangan->namaMangsa }}" required autofocus>

                            @if ($errors->has('namaMangsa'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('namaMangsa') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('alamatMangsa') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Alamat Mangsa</label>

                        <div class="col-md-6">
                                                  <textarea class="form-control" name="alamatMangsa" placeholder="Alamat Mangsa" rows="6"
                                                           maxlength="500">{{$LaporKehilangan->alamatMangsa }}</textarea>
                                                  <p class="text-muted">Maxmimum character is 100</p>
                                                  @if($errors->has('alamatMangsa'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('alamatMangsa') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group{{ $errors->has('phoneMangsa') ? ' has-error' : '' }}">
                                              <label for="phoneMangsa" class="col-md-4 control-label">No.Tel Mangsa</label>

                                              <div class="col-md-6">
                                                  <input id="phoneMangsa" type="text" class="form-control" name="phoneMangsa" placeholder="000-0000000" value="{{$LaporKehilangan->phoneMangsa }}" required autofocus>

                                                  @if ($errors->has('phoneMangsa'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('phoneMangsa') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group{{ $errors->has('tarikhHilang') ? ' has-error' : '' }}">
                                              <label for="tarikhHilang" class="col-md-4 control-label">Tarikh Hilang</label>

                                              <div class="col-md-6">
                                                  <input id="tarikhHilang" type="date" class="form-control" name="tarikhHilang" value="{{$LaporKehilangan->tarikhHilang }}" required autofocus>

                                                  @if ($errors->has('tarikhHilang'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('tarikhHilang') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>


                                          <div class="form-group">
                                              <div class="col-sm-offset-4 col-sm-10">
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
