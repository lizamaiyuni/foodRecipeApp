@extends('master.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4 cropper-wrapper">
          <div id="uploadAvatar"></div>
          <input type="file" id="browseFileInput" name="avatar">
          <button type="button" class="btn btn-primary btn-block" id="browseFileBtn">Browse</button>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Profil</h3>
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
                          <label for="email"> Email</label>
                          <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Email" required>
                          @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                              @else
                              <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan email Anda ke siapa pun.</small>
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="biodata">Biodata</label>
                          <textarea name="biodata" class="form-control{{ $errors->has('biodata') ? ' is-invalid' : '' }}" rows="5"></textarea>
                          @if ($errors->has('biodata'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('biodata') }}</strong>
                              </span>
                          @endif
                        </div>

                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
