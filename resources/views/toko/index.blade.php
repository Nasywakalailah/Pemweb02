@extends('template/main')

@section('content1')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/mobil.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/mobil.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection


@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <a href="" class="btn">
      <img src="/img/gambar1.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">HONDA</h5>
        <p class="card-text">ALL NEW BR-V</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/gambar2.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">DAIHATSU</h5>
        <p class="card-text">ROCKY</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/gambar3.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">SUZUKI</h5>
        <p class="card-text">GRAND VITARA</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/gambar4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">DAIHATSU</h5>
        <p class="card-text">GRAN MAX PICK UP</p>
      </div>
    </a>
    </div>
  </div>
</div>
@endsection