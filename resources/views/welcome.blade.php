@extends('master.app')

@section('content')
  <div class="container mt-4">
    <div class="search-wrapper">
      <div class="btn-group btn-group-toggle search-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="radio" name="options" id="option1" value="0" autocomplete="off" checked>
          <img src="{{ asset('icon\paper.svg') }}" alt="cari berdasarkan judul">
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option2" value="1" autocomplete="off">
          <img src="{{ asset('icon\onion.svg') }}" alt="cari berdasarkan bahan">
        </label>
      </div>
      <div class="search-bar">
        <input class="search-input" id="searchInput" type="text" name="search" placeholder="Cari resep berdasarkan judul...">
        <button class="search-icon">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </div>
    </div>
    <div class="row mt-4">
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
