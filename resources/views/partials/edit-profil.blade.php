@extends('belakangs.admins.index-master')


@section('konten-tabel')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="header">
            <h2>Edit Profil</h2>
        </div>
        <div class="body">
            <div class="table-responsive">
                <div class="col-md-10 col-md-offset-1">
                    <img src="/img/upload/avatar/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                    <h2>{{ $user->name }}</h2>
                    <form enctype="multipart/form-data" action="/edit-profil" method="POST">
                        <label>Ganti Foto Profil</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="SIMPAN" class="pull-right btn btn-sm bg-gelap waves-effect">
                    </form>
                </div>

                <br><br><br><br>

                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                    <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-col-red">
                         <div class="panel-heading" role="tab" id="headingOne_17">
                            <center><h4 class="panel-title">
                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#lengkap" aria-expanded="false"
                                  aria-controls="lengkap">
                               lihat data lengkapnya...</a>
                            </h4></center>
                         </div>
                         <div id="lengkap" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_17">
                            <form method="POST" type="hidden" name="_method" value="PUT" action="/edit-profil/">
                            {{ csrf_field() }}
                            <div class="panel-body">
                               <div class="col-md-6">
                                    <div class="input-group input-group-lg {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <div class="form-line">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Nama Lengkap" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg {{ $errors->has('username') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{ $user->username }}" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input disabled="disabled" id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Alamat Email" required>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <input id="password" type="password" class="form-control" name="password" minlength="6" placeholder="Password (minimal 6 karakter)">

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-lg bg-gelap waves-effect" type="submit">SIMPAN</button>
                            </form>
                            </div>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection