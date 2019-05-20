@extends('master.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>Register</h3>
                    <hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nama" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                          <label for="email">Alamat Email</label>
                          <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Masukkan email" required>
                          @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                              @else
                              <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan email Anda ke siapa pun.</small>
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Password" required>
                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="password-confirm">Konfirmasi Password</label>
                          <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password-confirm" name="password_confirmation"  placeholder="Konfirmasi Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
