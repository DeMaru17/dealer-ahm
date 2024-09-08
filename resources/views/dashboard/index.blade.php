@extends('layouts.app')
@section('content')

{{-- Banner Section --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('template/img/carousel/home-stylo-banner.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('template/img/carousel/home-banner-beat.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('template/img/carousel/home-banner-vario160.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('template/img/carousel/home-banner-adv.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('template/img/carousel/home-banner-cbr150.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('template/img/carousel/home-banner-pcx160.png')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>

  <!-- product_list start-->
  <section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Pilih Motor Favorit Anda </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    @foreach ($motor->sortBy('id')->chunk(8) as $chunk)
                        <div class="single_product_list_slider">
                            <div class="row align-items-center">
                                @foreach ($chunk as $m)
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="{{asset('storage/'.$m->gambarMotor->gambar_produk)}}" alt="">
                                            <div class="single_product_text">
                                                <h4>{{$m->nama_motor}}</h4>
                                                <h6>Harga Mulai</h6>
                                                <h3><strong>{{ 'Rp. ' . number_format($m->harga_motor, 0, ',', '.') }}</strong></h3>
                                                <a href="{{ route('Motor.detail', str_replace(' ', '-', $m->nama_motor)) }}" class="detail">Selengkapnya<i class="bi bi-arrow-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part start-->





@endsection

