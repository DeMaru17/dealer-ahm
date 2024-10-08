@extends('layouts.app')

@section('content')


<head>
    <link rel="stylesheet" href="{{asset('template/css/lightslider.min.css')}}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
      #carouselExampleIndicators {
        width: 90vw; /* Mengatur lebar carousel */
         max-width: 1150px; /* Maksimal lebar carousel */
        margin: auto; /* Memusatkan carousel */
        }

        .carousel-inner img {
        width: 100%; /* make the image full width of the carousel item */
        height: auto; /* adjust the height to your liking */
        object-fit: cover; /* make the image cover the entire carousel item */
        border-radius: 10px; /* add some border radius to the image */
        }

        table {
        border-collapse: collapse;
        width: 100%;
        }

        table th, table td {
        border: none;
        padding: 10px;
        text-align: left;
        }

        table th {
        background-color: #f0f0f0;
        }

        .katalog img {
            text-align: center; /* Ensure the content is centered horizontally */
            display: block; /* Ensure the image behaves as a block element */
            margin: 0 auto; /* Center the image horizontally */
        }

    </style>
</head>
<body>
  {{-- buat carousel disini --}}
  <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
    @if($motor->gambarMotor->gambar_carousel1 || $motor->gambarMotor->gambar_carousel2 || $motor->gambarMotor->gambar_carousel3)
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        @if($motor->gambarMotor->gambar_carousel1)
          <div class="carousel-item active">
            <img src="{{asset('storage/'.$motor->gambarMotor->gambar_carousel1)}}" class="d-block w-100" alt="...">
          </div>
        @endif
        @if($motor->gambarMotor->gambar_carousel2)
          <div class="carousel-item">
            <img src="{{asset('storage/'.$motor->gambarMotor->gambar_carousel2)}}" class="d-block w-100" alt="...">
          </div>
        @endif
        @if($motor->gambarMotor->gambar_carousel3)
          <div class="carousel-item">
            <img src="{{asset('storage/'.$motor->gambarMotor->gambar_carousel3)}}" class="d-block w-100" alt="...">
          </div>
        @endif
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    {{-- @else
      <p>No images available.</p> --}}
    @endif
  </div>
   <!--================Single Product Area =================-->
   {{-- {{dd($motor)}} --}}
   <div class="product_image_area section_padding">
     <div class="container">
       <div class="row s_product_inner justify-content-between">
         <div class="col-lg-7 col-xl-7">
           <div class="product_slider_img">
            <div id="vertical">
              @for($i = 1; $i <= 8; $i++)
                @if($motor->gambarMotor->{'gambar_'.$i})
                  <div data-thumb="{{asset('storage/'.$motor->gambarMotor->{'gambar_'.$i})}}">
                    <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->{'gambar_'.$i})}}" />
                  </div>
                @endif
              @endfor
          </div>
           </div>
         </div>
         <div class="col-lg-5 col-xl-4">
           <div class="s_product_text">
             <h2 style="color: black">{{$motor->nama_motor}}</h2>
             <h2>{{ 'Rp. ' . number_format($motor->harga_motor, 0, ',', '.') }}</h2>
             <ul class="list">
               <li>
                <a class="active" id="" href="{{ url('/Product#' . \Illuminate\Support\Str::slug($motor->kategori)) }}">
                <span>Kategori</span> : {{$motor->kategori}}</a>
               </li>
             </ul>
             <hr>
             <table>
              <strong>{{$motor->nama_motor}} Series</strong>
              <span><hr></span>
              @foreach($motor->series as $series)
                <tr>
                  <td style="width: 50%">{{ $series->nama_series }}</td>
                  <td style="text-align: right;">Rp. {{ number_format($series->harga, 0, ',', '.') }}</td>
                </tr>
              @endforeach
            </table>
             {{-- <table>
              <strong>{{$motor->nama_motor}} Series</strong>
              <span><hr></span>
              @foreach($motor->series as $series)
                  <tr>
                      <td >{{ $series->nama_series }}</td>
                      <td style="text-align: left; padding-left: 5px;"> Rp. {{ number_format($series->harga, 0, ',', '.') }}</td>
                  </tr>
              @endforeach
          </table> --}}
             {{-- buat disini --}}
             {{-- <table>
              @foreach($motor->series as $series)
                  <tr>
                      <th colspan="2">{{ $series->nama_series }}</th>
                  </tr>
                  <tr>
                      <td colspan="2">{{ 'Rp. ' . number_format($series->harga, 0, ',', '.') }}</td>
                  </tr>
              @endforeach
             </table> --}}
             <div style="margin-top: 1rem;" align="center" class="card_area">
              <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20motor%20{{$motor->nama_motor}}" target="_blank" class="btn_1 mt-1" style="background-color: #25d366; border-color: #25d366;">
                <i class="bi bi-whatsapp" style="font-size: 1.5rem; margin-right: 8px;"></i>Hubungi Kami
              </a>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!--================End Single Product Area =================-->

   <!--================Product Description Area =================-->
   <section class="product_description_area">
    <h1 align="center" class="mb-5">Spesifikasi Motor {{$motor->nama_motor}}</h1>
     <div class="container">
       <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
           <a class="nav-link active" id="mesin-tab" data-toggle="tab" href="#mesin" role="tab" aria-controls="mesin"
             aria-selected="true">Mesin</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" id="rangka-tab" data-toggle="tab" href="#rangka" role="tab" aria-controls="rangka"
             aria-selected="false">Rangka & Kaki-Kaki</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" id="dimensi-tab" data-toggle="tab" href="#dimensi" role="tab" aria-controls="dimensi"
             aria-selected="false">Dimensi</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" id="kapasitas-tab" data-toggle="tab" href="#kapasitas" role="tab" aria-controls="kapasitas"
             aria-selected="false">Kapasitas</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="kelistrikan-tab" data-toggle="tab" href="#kelistrikan" role="tab" aria-controls="kelistrikan"
              aria-selected="false">Kelistrikan</a>
          </li>
       </ul>
       <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="mesin" role="tabpanel" aria-labelledby="mesin-tab">
            <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <h5>Tipe Mesin</h5>
                      </td>
                      <td>
                        <h5>{{$motor->mesin->tipe_mesin ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Tipe Transmisi</h5>
                      </td>
                      <td>
                        <h5>{{$motor->mesin->tipe_transmisi ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Tipe Kopling</h5>
                      </td>
                      <td>
                        <h5>{{$motor->mesin->tipe_kopling ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Tipe Starter</h5>
                      </td>
                      <td>
                        <h5>{{$motor->mesin->tipe_starter ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Diameter x Langkah</h5>
                      </td>
                      <td>
                        <h5>{{$motor->mesin->diameter_x_langkah ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Volume Langkah</h5>
                      </td>
                      <td>
                        <h5>{{$motor->mesin->volume_langkah ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Daya Maksimum</h5>
                      </td>
                      <td>
                        <h5>{{$motor->mesin->daya_maksimum ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Torsi Maksimum</h5>
                      </td>
                      <td>
                        <h5>{{$motor->mesin->torsi_maksimum ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                        <td>
                          <h5>Busi</h5>
                        </td>
                        <td>
                          <h5>{{$motor->mesin->busi ?? '-'}}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Sistem Bahan Bakar</h5>
                        </td>
                        <td>
                          <h5>{{$motor->mesin->sistem_bahan_bakar ?? '-'}}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Pengapian</h5>
                        </td>
                        <td>
                          <h5>{{$motor->mesin->pengapian ?? '-'}}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Tipe Pendingin</h5>
                        </td>
                        <td>
                          <h5>{{$motor->mesin->tipe_pendingin ?? '-'}}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Perbandingan Kompresi</h5>
                        </td>
                        <td>
                          <h5>{{$motor->mesin->perbandingan_kompresi ?? '-'}}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Pola Perpindahan Gigi</h5>
                        </td>
                        <td>
                          <h5>{{$motor->mesin->pola_perpindahan_gigi ?? '-'}}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Jenis Pelumas</h5>
                        </td>
                        <td>
                          <h5>{{$motor->mesin->jenis_pelumas ?? '-'}}</h5>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
         </div>
         <div class="tab-pane fade" id="rangka" role="tabpanel" aria-labelledby="rangka-tab">
           <div class="table-responsive">
             <table class="table">
               <tbody>
                 <tr>
                   <td>
                     <h5>Tipe Rangka</h5>
                   </td>
                   <td>
                     <h5>{{$motor->rangka->tipe_rangka ?? '-'}}</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Tipe Suspensi Depan</h5>
                   </td>
                   <td>
                     <h5>{{$motor->rangka->tipe_suspensi_depan ?? '-'}}</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Tipe Suspensi Belakang</h5>
                   </td>
                   <td>
                     <h5>{{$motor->rangka->tipe_suspensi_belakang ?? '-'}}</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Ukuran Ban Depan</h5>
                   </td>
                   <td>
                     <h5>{{$motor->rangka->ukuran_ban_depan ?? '-'}}</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Ukuran Ban Belakang</h5>
                   </td>
                   <td>
                     <h5>{{$motor->rangka->ukuran_ban_belakang ?? '-'}}</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Tipe Rem depan</h5>
                   </td>
                   <td>
                     <h5>{{$motor->rangka->tipe_rem_depan ?? '-'}}</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Tipe Rem Belakang</h5>
                   </td>
                   <td>
                     <h5>{{$motor->rangka->tipe_rem_belakang ?? '-'}}</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Sistem Pengereman</h5>
                   </td>
                   <td>
                     <h5>{{$motor->rangka->sistem_pengereman ?? '-'}}</h5>
                   </td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
         <div class="tab-pane fade" id="dimensi" role="tabpanel" aria-labelledby="dimensi-tab">
            <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <h5>Panjang x Lebar x Tinggi</h5>
                      </td>
                      <td>
                        <h5>{{$motor->dimensiMotor->panjangxlebarxtinggi ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Jarak Sumbu Roda</h5>
                      </td>
                      <td>
                        <h5>{{$motor->dimensiMotor->jarak_sumbu_roda ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Jarak Terendah Ke Tanah</h5>
                      </td>
                      <td>
                        <h5>{{$motor->dimensiMotor->jarak_terendah_ke_tanah ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Ketinggian Tempat Duduk</h5>
                      </td>
                      <td>
                        <h5>{{$motor->dimensiMotor->ketinggian_tempat_duduk ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Berat Kosong</h5>
                      </td>
                      <td>
                        <h5>{{$motor->dimensiMotor->berat_kosong ?? '-'}}</h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
         </div>
         <div class="tab-pane fade" id="kapasitas" role="tabpanel" aria-labelledby="kapasitas-tab">
            <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <h5>Kapasitas Tangki Bahan Bakar</h5>
                      </td>
                      <td>
                        <h5>{{$motor->kapasitas->kapasitas_tangki_bahan_bakar ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Kapasitas Minyak Pelumas</h5>
                      </td>
                      <td>
                        <h5>{{$motor->kapasitas->kapasitas_minyak_pelumas ?? '-'}}</h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
         </div>
         <div class="tab-pane fade" id="kelistrikan" role="tabpanel" aria-labelledby="kelistrikan-tab">
            <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <h5>Tipe Baterai Atau Aki</h5>
                      </td>
                      <td>
                        <h5>{{$motor->kelistrikan->tipe_baterai_atau_aki ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Sistem Pengapian</h5>
                      </td>
                      <td>
                        <h5>{{$motor->kelistrikan->sistem_pengapian ?? '-'}}</h5>
                      </td>
                    </tr>
                    <tr>
                        <td>
                          <h5>Tipe Busi</h5>
                        </td>
                        <td>
                          <h5>{{$motor->kelistrikan->tipe_busi ?? '-'}}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Power Charger</h5>
                        </td>
                        <td>
                          <h5>{{$motor->kelistrikan->power_charger ?? '-'}}</h5>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
         </div>
         </div>
       </div>
     </div>
   </section>
   <!--================End Product Description Area =================-->

   <!-- product_list part start-->
   <section class="product_list best_seller">
     <div class="container">
       <div class="row justify-content-center">
         <div class="col-lg-12">
           <div class="section_tittle text-center">
             <h2>Cari Motor lainnya</h2>
           </div>
         </div>
       </div>
       <div class="row align-items-center justify-content-between">
         <div class="col-lg-12">
           <div class="best_product_slider owl-carousel">
            @foreach ($gambar_motor as $m)

            <div class="single_product_item katalog">
                <img style="height:200px; width:auto;" src="{{asset('storage/'.$m->gambarMotor->gambar_produk)}}" alt="">
                <div class="single_product_text">
                    <h4>{{$m->nama_motor}}</h4>
                    <h6>Harga Mulai</h6>
                    <h3><strong>{{ 'Rp. ' . number_format($m->harga_motor, 0, ',', '.') }}</strong></h3>
                    <a href="{{ route('Motor.detail', str_replace(' ', '-', $m->nama_motor)) }}" class="detail">Selengkapnya<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- product_list part end-->


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
  <!-- custom js -->
  <script src="{{asset('template/js/theme.js')}}"></script>
  <script src="{{asset('template/js/custom.js')}}"></script>

 </body>
 @endsection



