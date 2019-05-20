@extends('master.app')

@section('content')
<div class="container mt-4">
  <div class="card">
      <div class="card-body">
        <form method="POST" id="recipeForm" action="{{ route('resep.update') }}">
            @csrf
        <div class="row">
          <div class="col-12">
            <h3>Unggah Resep</h3>
            <hr>
          </div>
          <div class="col-12 col-md-7">
                <div class="form-group">
                    <label for="judul">Judul Resep</label>
                    <input id="judul" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judul" value="" placeholder="Judul Resep" required autofocus>
                    @if ($errors->has('judul'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('judul') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select class="custom-select form-control{{ $errors->has('kategori') ? ' is-invalid' : '' }}" id="kategori" name="kategori">
                    <option value="">Pilih Kategori</option>
                    <option>Makanan Utama</option>
                    <option>Makanan</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  @if ($errors->has('kategori'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('kategori') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="password">Bahan</label>
                  <div id="inputBahanWrapper">
                    <div class="form-row mb-2">
                       <div class="col-8">
                         <input type="text" class="form-control" name="nama_bahan[]" placeholder="Nama Bahan">
                       </div>
                       <div class="col">
                         <input type="text" class="form-control" name="kuantitas_bahan[]" placeholder="Kuantitas">
                       </div>
                       <button type="button" class="btn btn-link text-danger bahan-input-delete-btn">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </button>
                     </div>
                   </div>
                   <div class="d-flex justify-content-end mt-2">
                     <button type="button" class="btn btn-flat" id="inputBahanBtn">
                       <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Bahan
                     </button>
                   </div>
                </div>
                <div class="form-group">
                  <label>Prosedur</label>
                  <div class="form-control" id="editor"></div>
                  <input type="hidden" id="editor-result">
                </div>
          </div>
          <div class="col mt-3 mt-md-0">
            <div class="alert alert-danger d-none" id="uploadMessage" role="alert">
               Maksimum upload 5 file
               <button type="button" class="close"
               onclick="document.getElementById('uploadMessage').classList.add('d-none')">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="uploadImage" class="dropzone">
              <div class="fallback">
                <input name="image[]" type="file" multiple />
              </div>
              <div class="card-columns" id="previewContainer">
              </div>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Register</button>
          </div>
        </div>
        </form>
      </div>
  </div>
</div>

@endsection
