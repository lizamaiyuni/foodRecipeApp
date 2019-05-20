@extends('master.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Password</h3>
                    <hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="passwordLama">Password Lama</label>
                            <input id="passwordLama" type="password" class="form-control{{ $errors->has('password_lama') ? ' is-invalid' : '' }}" name="password_lama" value="" placeholder="Password Lama" required autofocus>
                            @if ($errors->has('password_lama'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_lama') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="" placeholder="Password Baru" required autofocus>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password-confirm" name="password_confirmation"  placeholder="Konfirmasi Password Baru" required>
                        </div>



                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
