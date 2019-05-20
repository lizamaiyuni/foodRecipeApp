@extends('master.app')

@section('content')
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      {{-- <h1 class="display-4">Fluid jumbotron</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> --}}
      <div class="row profile-wrapper">
        <div class="col-12 col-sm-6 col-md-2">
          <img class="profile-avatar" src="{{ asset('image/avatar.png') }}" alt="">
        </div>
        <div class="col">
          <h1>Fatimah Sutra</h1>
          <p class="profile-info">
            <span>
              <i class="fa fa-file-text-o" aria-hidden="true"></i> 10 Resep
            </span>
            <span>
              <i class="fa fa-envelope" aria-hidden="true"></i> fatimah@gmail.com
            </span>
          </p>
          <p class="profile-biodata">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut nisl dui. Vivamus condimentum malesuada mi, a lobortis ex tincidunt eget. Duis scelerisque sodales quam sed semper. Nullam nisl erat, blandit eget fermentum a, tincidunt quis ipsum. Phasellus tempus purus quis augue rutrum, vel molestie metus semper. Fusce tristique magna vitae erat condimentum aliquam.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row">
      @for ($i=0; $i < 10; $i++)
        <div class="col-md-4 col-lg-3">
          <div class="card card-thumbnail mb-4">
            <img class="card-img-top" src="https://jatenglive.com/images/news/Adi-Culinary--Makanan-Ala-Barat-Harga-Kaki-Lima-news20171020-adiss.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="recipe-title">Fusilli Bayam Rasa Lokal</p>
              <p class="recipe-author">oleh Mama Ayes</p>
              <div class="recipe-action">
                <a href="#" class="btn btn-love">
                  <i class="fa fa-heart" aria-hidden="true"></i>
                </a>
                <a href="#" class="btn btn-share">
                  <i class="fa fa-share-alt" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endfor
    </div>
  </div>
@endsection
