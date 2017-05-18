@extends('layouts.app')

@section('content')

<div class="container text-center">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">

                <a href="#" class="image fit"><img src="images/logo1.png" alt=""  height="100" width="200" /></a>
                <a href="#" class="image fit"><img src="images/logo2.png" alt=""  height="110" width="140" /></a>
                <h3>Sistem Maklumat Pengurusan Bencana</h3>
                <p> @ eBencana Kemaman meminta anda untuk membuat mendaftar kedalam sistem ini.. Sila masukkan nama pengguna,email dan kata laluan anda pada borang di bawah.</p>

          </div>
      </div>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dafrar Pengguna</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Pengguna</label>

                            <div class="col-md-6">
                                <div class="input-group">
                              <div class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Alamat Email</label>

                            <div class="col-md-6">
                              <div class="input-group">
                              <div class="input-group-addon">
                              <span class="glyphicon glyphicon-envelope"></span>
                              </div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Kata Laluan</label>

                            <div class="col-md-6">
                              <div class="input-group">
                                <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-lock"></span>
                                  </div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Sahkan Kata Laluan</label>

                            <div class="col-md-6">
                              <div class="input-group">
                                <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-lock"></span>
                                  </div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                      </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Daftar Pengguna
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
