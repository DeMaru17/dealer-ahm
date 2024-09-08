@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{asset('template/css/lightslider.min.css')}}">
</head>
<body>
   <!--================Single Product Area =================-->
   {{-- {{dd($motor)}} --}}
   <div class="product_image_area section_padding">
     <div class="container">
       <div class="row s_product_inner justify-content-between">
         <div class="col-lg-7 col-xl-7">
           <div class="product_slider_img">
             <div id="vertical">
               <div data-thumb="{{asset('storage/'.$motor->gambarMotor->gambar_1)}}">
                 <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->gambar_1)}}" />
               </div>
               <div data-thumb="{{asset('storage/'.$motor->gambarMotor->gambar_2)}}">
                 <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->gambar_2)}}" />
               </div>
               <div data-thumb="{{asset('storage/'.$motor->gambarMotor->gambar_3)}}">
                 <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->gambar_3)}}" />
               </div>
               <div data-thumb="{{asset('storage/'.$motor->gambarMotor->gambar_4)}}">
                 <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->gambar_4)}}" />
               </div>
               <div data-thumb="{{asset('storage/'.$motor->gambarMotor->gambar_5)}}">
                 <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->gambar_5)}}" />
               </div>
               <div data-thumb="{{asset('storage/'.$motor->gambarMotor->gambar_6)}}">
                <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->gambar_6)}}" />
              </div>
              <div data-thumb="{{asset('storage/'.$motor->gambarMotor->gambar_7)}}">
                <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->gambar_7)}}" />
              </div>
              <div data-thumb="{{asset('storage/'.$motor->gambarMotor->gambar_8)}}">
                <img style="width: 450px; height:auto;" src="{{asset('storage/'.$motor->gambarMotor->gambar_8)}}" />
              </div>
             </div>
           </div>
         </div>
         <div class="col-lg-5 col-xl-4">
           <div class="s_product_text">
             <h3>{{$motor->nama_motor}}</h3>
             <h2>{{ 'Rp. ' . number_format($motor->harga_motor, 0, ',', '.') }}</h2>
             <ul class="list">
               <li>
                 <a class="active" href="#">
                   <span>Category</span> : Household</a>
               </li>
               <li>
                 <a href="#"> <span>Availibility</span> : In Stock</a>
               </li>
             </ul>
             <p>
               First replenish living. Creepeth image image. Creeping can't, won't called.
               Two fruitful let days signs sea together all land fly subdue
             </p>
             <div class="card_area d-flex justify-content-between align-items-center">
               <div class="product_count">
                 <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                 <input class="input-number" type="text" value="1" min="0" max="10">
                 <span class="number-increment"> <i class="ti-plus"></i></span>
               </div>
               <a href="#" class="btn_3">add to cart</a>
               <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!--================End Single Product Area =================-->

   <!--================Product Description Area =================-->
   <section class="product_description_area">
     <div class="container">
       <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
           <a class="nav-link" id="mesin-tab" data-toggle="tab" href="#mesin" role="tab" aria-controls="mesin"
             aria-selected="true">Mesin</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
             aria-selected="false">Specification</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
             aria-selected="false">Comments</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
             aria-selected="false">Reviews</a>
         </li>
       </ul>
       <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade" id="mesin" role="tabpanel" aria-labelledby="home-tab">
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
         <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
           <div class="table-responsive">
             <table class="table">
               <tbody>
                 <tr>
                   <td>
                     <h5>Width</h5>
                   </td>
                   <td>
                     <h5>128mm</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Height</h5>
                   </td>
                   <td>
                     <h5>508mm</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Depth</h5>
                   </td>
                   <td>
                     <h5>85mm</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Weight</h5>
                   </td>
                   <td>
                     <h5>52gm</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Quality checking</h5>
                   </td>
                   <td>
                     <h5>yes</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Freshness Duration</h5>
                   </td>
                   <td>
                     <h5>03days</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>When packeting</h5>
                   </td>
                   <td>
                     <h5>Without touch of hand</h5>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <h5>Each Box contains</h5>
                   </td>
                   <td>
                     <h5>60pcs</h5>
                   </td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
         <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
           <div class="row">
             <div class="col-lg-6">
               <div class="comment_list">
                 <div class="review_item">
                   <div class="media">
                     <div class="d-flex">
                       <img src="img/product/single-product/review-1.png" alt="" />
                     </div>
                     <div class="media-body">
                       <h4>Blake Ruiz</h4>
                       <h5>12th Feb, 2017 at 05:56 pm</h5>
                       <a class="reply_btn" href="#">Reply</a>
                     </div>
                   </div>
                   <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo
                   </p>
                 </div>
                 <div class="review_item reply">
                   <div class="media">
                     <div class="d-flex">
                       <img src="img/product/single-product/review-2.png" alt="" />
                     </div>
                     <div class="media-body">
                       <h4>Blake Ruiz</h4>
                       <h5>12th Feb, 2017 at 05:56 pm</h5>
                       <a class="reply_btn" href="#">Reply</a>
                     </div>
                   </div>
                   <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo
                   </p>
                 </div>
                 <div class="review_item">
                   <div class="media">
                     <div class="d-flex">
                       <img src="img/product/single-product/review-3.png" alt="" />
                     </div>
                     <div class="media-body">
                       <h4>Blake Ruiz</h4>
                       <h5>12th Feb, 2017 at 05:56 pm</h5>
                       <a class="reply_btn" href="#">Reply</a>
                     </div>
                   </div>
                   <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo
                   </p>
                 </div>
               </div>
             </div>
             <div class="col-lg-6">
               <div class="review_box">
                 <h4>Post a comment</h4>
                 <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                   novalidate="novalidate">
                   <div class="col-md-12">
                     <div class="form-group">
                       <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" />
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" />
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <textarea class="form-control" name="message" id="message" rows="1"
                         placeholder="Message"></textarea>
                     </div>
                   </div>
                   <div class="col-md-12 text-right">
                     <button type="submit" value="submit" class="btn_3">
                       Submit Now
                     </button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
         <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
           <div class="row">
             <div class="col-lg-6">
               <div class="row total_rate">
                 <div class="col-6">
                   <div class="box_total">
                     <h5>Overall</h5>
                     <h4>4.0</h4>
                     <h6>(03 Reviews)</h6>
                   </div>
                 </div>
                 <div class="col-6">
                   <div class="rating_list">
                     <h3>Based on 3 Reviews</h3>
                     <ul class="list">
                       <li>
                         <a href="#">5 Star
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i> 01</a>
                       </li>
                       <li>
                         <a href="#">4 Star
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i> 01</a>
                       </li>
                       <li>
                         <a href="#">3 Star
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i> 01</a>
                       </li>
                       <li>
                         <a href="#">2 Star
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i> 01</a>
                       </li>
                       <li>
                         <a href="#">1 Star
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i> 01</a>
                       </li>
                     </ul>
                   </div>
                 </div>
               </div>
               <div class="review_list">
                 <div class="review_item">
                   <div class="media">
                     <div class="d-flex">
                       <img src="img/product/single-product/review-1.png" alt="" />
                     </div>
                     <div class="media-body">
                       <h4>Blake Ruiz</h4>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                     </div>
                   </div>
                   <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo
                   </p>
                 </div>
                 <div class="review_item">
                   <div class="media">
                     <div class="d-flex">
                       <img src="img/product/single-product/review-2.png" alt="" />
                     </div>
                     <div class="media-body">
                       <h4>Blake Ruiz</h4>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                     </div>
                   </div>
                   <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo
                   </p>
                 </div>
                 <div class="review_item">
                   <div class="media">
                     <div class="d-flex">
                       <img src="img/product/single-product/review-3.png" alt="" />
                     </div>
                     <div class="media-body">
                       <h4>Blake Ruiz</h4>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                     </div>
                   </div>
                   <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo
                   </p>
                 </div>
               </div>
             </div>
             <div class="col-lg-6">
               <div class="review_box">
                 <h4>Add a Review</h4>
                 <p>Your Rating:</p>
                 <ul class="list">
                   <li>
                     <a href="#">
                       <i class="fa fa-star"></i>
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       <i class="fa fa-star"></i>
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       <i class="fa fa-star"></i>
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       <i class="fa fa-star"></i>
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       <i class="fa fa-star"></i>
                     </a>
                   </li>
                 </ul>
                 <p>Outstanding</p>
                 <form class="row contact_form" action="contact_process.php" method="post" novalidate="novalidate">
                   <div class="col-md-12">
                     <div class="form-group">
                       <input type="text" class="form-control" name="name" placeholder="Your Full name" />
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <input type="email" class="form-control" name="email" placeholder="Email Address" />
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <input type="text" class="form-control" name="number" placeholder="Phone Number" />
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <textarea class="form-control" name="message" rows="1" placeholder="Review"></textarea>
                     </div>
                   </div>
                   <div class="col-md-12 text-right">
                     <button type="submit" value="submit" class="btn_3">
                       Submit Now
                     </button>
                   </div>
                 </form>
               </div>
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
             <h2>Best Sellers <span>shop</span></h2>
           </div>
         </div>
       </div>
       <div class="row align-items-center justify-content-between">
         <div class="col-lg-12">
           <div class="best_product_slider owl-carousel">
             <div class="single_product_item">
               <img src="img/product/product_1.png" alt="">
               <div class="single_product_text">
                 <h4>Quartz Belt Watch</h4>
                 <h3>$150.00</h3>
               </div>
             </div>
             <div class="single_product_item">
               <img src="img/product/product_2.png" alt="">
               <div class="single_product_text">
                 <h4>Quartz Belt Watch</h4>
                 <h3>$150.00</h3>
               </div>
             </div>
             <div class="single_product_item">
               <img src="img/product/product_3.png" alt="">
               <div class="single_product_text">
                 <h4>Quartz Belt Watch</h4>
                 <h3>$150.00</h3>
               </div>
             </div>
             <div class="single_product_item">
               <img src="img/product/product_4.png" alt="">
               <div class="single_product_text">
                 <h4>Quartz Belt Watch</h4>
                 <h3>$150.00</h3>
               </div>
             </div>
             <div class="single_product_item">
               <img src="img/product/product_5.png" alt="">
               <div class="single_product_text">
                 <h4>Quartz Belt Watch</h4>
                 <h3>$150.00</h3>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- product_list part end-->

   <!--::footer_part start::-->
   <footer class="footer_part">
     <div class="container">
       <div class="row justify-content-around">
         <div class="col-sm-6 col-lg-2">
           <div class="single_footer_part">
             <h4>Top Products</h4>
             <ul class="list-unstyled">
               <li><a href="">Managed Website</a></li>
               <li><a href="">Manage Reputation</a></li>
               <li><a href="">Power Tools</a></li>
               <li><a href="">Marketing Service</a></li>
             </ul>
           </div>
         </div>
         <div class="col-sm-6 col-lg-2">
           <div class="single_footer_part">
             <h4>Quick Links</h4>
             <ul class="list-unstyled">
               <li><a href="">Jobs</a></li>
               <li><a href="">Brand Assets</a></li>
               <li><a href="">Investor Relations</a></li>
               <li><a href="">Terms of Service</a></li>
             </ul>
           </div>
         </div>
         <div class="col-sm-6 col-lg-2">
           <div class="single_footer_part">
             <h4>Features</h4>
             <ul class="list-unstyled">
               <li><a href="">Jobs</a></li>
               <li><a href="">Brand Assets</a></li>
               <li><a href="">Investor Relations</a></li>
               <li><a href="">Terms of Service</a></li>
             </ul>
           </div>
         </div>
         <div class="col-sm-6 col-lg-2">
           <div class="single_footer_part">
             <h4>Resources</h4>
             <ul class="list-unstyled">
               <li><a href="">Guides</a></li>
               <li><a href="">Research</a></li>
               <li><a href="">Experts</a></li>
               <li><a href="">Agencies</a></li>
             </ul>
           </div>
         </div>
         <div class="col-sm-6 col-lg-4">
           <div class="single_footer_part">
             <h4>Newsletter</h4>
             <p>Heaven fruitful doesn't over lesser in days. Appear creeping
             </p>
             <div id="mc_embed_signup">
               <form target="_blank"
                 action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                 method="get" class="subscribe_form relative mail_part">
                 <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                   class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                   onblur="this.placeholder = ' Email Address '">
                 <button type="submit" name="submit" id="newsletter-submit"
                   class="email_icon newsletter-submit button-contactForm">subscribe</button>
                 <div class="mt-10 info"></div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="copyright_part">
       <div class="container">
         <div class="row">
           <div class="col-lg-8">
             <div class="copyright_text">
               <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
             </div>
           </div>
           <div class="col-lg-4">
             <div class="footer_icon social_icon">
               <ul class="list-unstyled">
                 <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                 <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                 <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                 <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </div>
   </footer>
   <!--::footer_part end::-->


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



