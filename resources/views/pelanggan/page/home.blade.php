@extends('pelanggan.layout.index')

@section('slide')

<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <img src="{{asset('assets/images/slide.png')}}" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">Slogan kazayya blablabla</p>
                <h1 class="display-1 fw-bolder text-capitalize">Kazayya</h1>
                <button class="btn btn-primary cta px-4 py-2 fs-5 mt-5">Belanja Sekarang</button>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="{{asset('assets/images/slide.png')}}" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">Slogan kazayya blablabla</p>
                <h1 class="display-1 fw-bolder text-capitalize">Kazayya</h1>
                <button class="btn btn-primary cta px-4 py-2 fs-5 mt-5">Belanja Sekarang</button>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="{{asset('assets/images/slide.png')}}" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">Slogan kazayya blablabla</p>
                <h1 class="display-1 fw-bolder text-capitalize">Kazayya</h1>
                <button class="btn btn-primary cta px-4 py-2 fs-5 mt-5">Belanja Sekarang</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection

@section('content')
<section id="content">
    <h4 class="m-5 pt-3" style="text-align: center;">New Arrival</h4>
    <div class="content mt-5 d-flex flex-lg-wrap gap-4 m-5">
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{asset('assets/images/baju.png')}}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Niara Dress</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600">Rp. 200.000</p>
                <button class="btn btn-outline-primary" style="font-size: 24px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{asset('assets/images/baju.png')}}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Niara Dress</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600">Rp. 200.000</p>
                <button class="btn btn-outline-primary" style="font-size: 24px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{asset('assets/images/baju.png')}}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Niara Dress</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600">Rp. 200.000</p>
                <button class="btn btn-outline-primary" style="font-size: 24px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{asset('assets/images/baju.png')}}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Niara Dress</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600">Rp. 200.000</p>
                <button class="btn btn-outline-primary" style="font-size: 24px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{asset('assets/images/baju.png')}}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Niara Dress</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600">Rp. 200.000</p>
                <button class="btn btn-outline-primary" style="font-size: 24px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('home-kategori')
<section id="home-kategori">
    <div class="fe-box">
        <img src="#" alt="">
        <p>Gamis</p>
    </div>
    <div class="fe-box">
        <img src="#" alt="">
        <p>Mukena</p>
    </div>
    <div class="fe-box">
        <img src="#" alt="">
        <p>Daster</p>
    </div>
    <div class="fe-box">
        <img src="#" alt="">
        <p>Jilbab</p>
    </div>
</section>
@endsection