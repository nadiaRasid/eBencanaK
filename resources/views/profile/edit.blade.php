@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Kemaskini Profil</a></li>
                </ul>
                <div class="tab-content">

                  <!-- Start of first tab -->
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <form class="form-horizontal" action="{{ action ('PenggunasController@update' , $pengguna->id) }}" method="POST" enctype="multipart/form-data">

                              {{ csrf_field() }}
                              {{ method_field('PATCH') }}

                                <div class="form-group"><label class="col-sm-2 control-label">Nama :</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="name" placeholder="Username" value="{{ old('name', $pengguna->user->name) }}"></input>
                                    </div>
                                </div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" placeholder="" readonly="true" value="{{ old('email', $pengguna->user->email) }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Nama Penuh:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="nama" placeholder="Nama Penuh" value="{{ $pengguna->nama }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Telefon:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="telefon" placeholder="000-0000000" value="{{ $pengguna->telefon }}"></input>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                    <label class="col-md-2 control-label">Alamat</label>

                                    <div class="col-md-10">
                                      <input type="textarea" class="form-control" name="alamat" placeholder="Alamat" value="{{ $pengguna->alamat }}"></input>

                                                          </div>
                                                      </div>

                                                      <div class="form-group">
                                              <label for="gambar" class="col-md-2 control-label">Gambar Profil</label>
                                                  <div class="col-md-10">
                                                  <input type="file" name="gambar" id="gambar" class="hide">
                                                      <label for="gambar" style="width: 300px">
                                                        @if($pengguna->gambar == null)

                                                           <td><img id="gambar_image" src="{{ asset('img/image-placeholder2.jpg') }}" width="100%"/></td>

                                                          @else

                                                              <img class="image-placeholder" id="gambar_image" src="{{asset("$pengguna->gambar") }}" width="100%"/>
                                                          @endif
                                                  </div>
                                          </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- End of first tab -->

                  </div>
                </div>
              </div>
      @endsection
            @section('script')
            @endsection
