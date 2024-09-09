@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="{{asset('template/css/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('template/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/price_rangs.css')}}">
</head>

<body>
<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Tipe Motor</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="#">Matic</a>
                                </li>
                                <li>
                                    <a href="#">Sports</a>
                                </li>
                                <li class="active">
                                    <a href="#">Cub</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar justify-content-center">
                            <h1>Pilih Motor Favorit Anda</h1>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center latest_product_inner">
                    @foreach ($motor as $m)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img style="height:200px; width:auto;" src="{{asset('storage/'.$m->gambarMotor->gambar_produk)}}" alt="">
                            <div class="single_product_text">
                                <h4>{{$m->nama_motor}}</h4>
                                <h6>Harga Mulai</h6>
                                <h3><strong>{{ 'Rp. ' . number_format($m->harga_motor, 0, ',', '.') }}</strong></h3>
                                <a href="{{ route('Motor.detail', str_replace(' ', '-', $m->nama_motor)) }}" class="detail">Selengkapnya<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>    
                    </div>    
                    @endforeach
                    {{-- <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="img/product/product_2.png" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="img/product/product_3.png" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="img/product/product_4.png" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="img/product/product_5.png" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="img/product/product_6.png" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="img/product/product_7.png" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="img/product/product_8.png" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6"> --}}
                        {{-- <div class="single_product_item">
                            <img src="img/product/product_2.png" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <div class="pageination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="ti-angle-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="ti-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<script src="{{asset('template/js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('template/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('template/js/lightslider.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('template/js/masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('template/js/jquery.nice-select.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('template/js/slick.min.js')}}"></script>
<script src="{{asset('template/js/swiper.jquery.js')}}"></script>
<script src="{{asset('template/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('template/js/waypoints.min.js')}}"></script>
<script src="{{asset('template/js/contact.js')}}"></script>
<script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('template/js/jquery.form.js')}}"></script>
<script src="{{asset('template/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('template/js/mail-script.js')}}"></script>
<script src="{{asset('template/js/stellar.js')}}"></script>
<script src="{{asset('template/js/price_rangs.js')}}"></script>
<!-- custom js -->
<script src="{{asset('template/js/theme.js')}}"></script>
<script src="{{asset('template/js/custom.js')}}"></script>

</body>

@endsection