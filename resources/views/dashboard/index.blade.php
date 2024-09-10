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
                        <h2 align="center">Cari Motor Favorit Anda </h2>
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
                                                <img style="height:250px; width:auto;" src="{{asset('storage/'.$m->gambarMotor->gambar_produk)}}" alt="">
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
            <div class="row">
                <div class="col-lg-12 align-item-center text-center">
                    <a  href="{{route('Product')}}" class="btn_3">Semua Produk</a>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

  <!-- Combined Section: Dealer Info, Highlight Features, and Promotions -->
<section class="combined_section section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Informasi Dealer, Fitur Unggulan & Promo Spesial</h2>
                    <p>Dapatkan informasi lengkap mengenai dealer kami, fitur unggulan kendaraan, dan promo spesial yang tersedia.</p>
                </div>
            </div>
        </div>
        <div class="row text-center justify-content-center">
            <!-- promo Information -->
            <div class="col-md-4">
            <div class="card dealer_info_card mb-4" style="border: none; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="icon mb-3">
                        <i class="bi bi-gift" style="font-size: 2rem; color: #ff6f61;"></i>
                    </div>
                        <h4 class="card-title">Skema Penjualan</h4>
                        <p class="card-text">Pesan online Motor Honda impianmu dengan metode pembayaran cash atau kredit di Albi Honda Motor dan dapatkan diskon spesial.</p>
                        <p class="card-text">Hubungi Kami Untuk Mendapatkan informasi diskon & promo pembelian motor baru</p>
                        <h4 class="card-title mt-4">Syarat dan Ketentuan Berlaku</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card dealer_info_card mb-4" style="border: none; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="bi bi-geo-alt" style="font-size: 2rem; color: #ff6f61;"></i>
                        </div>
                        <h4 class="card-title">Area Coverage</h4>
                        <p class="card-text">Jabodetabek, Bandung, Surabaya, Medan, Makassar, Bali</p>
                        <h4 class="card-title mt-4">Kontak Dealer</h4>
                        <p class="card-text">Telepon: (021) 1234 5678</p>
                        <p class="card-text">Email: dealer@example.com</p>
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn_1 mt-3" style="background-color: #25d366; border-color: #25d366;">
                            <i class="bi bi-whatsapp" style="font-size: 1.5rem; margin-right: 8px;"></i>Hubungi Kami di WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Combined Section End -->










@endsection

