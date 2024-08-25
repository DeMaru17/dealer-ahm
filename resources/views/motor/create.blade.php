<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Albi Honda Motor</title>
    <link rel="icon" href="{{asset('template/img/honda-logo-ico.ico')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('template/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('template/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('template/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('template/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('template/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    {{-- responsive navbar brand --}}
    <style>
        @media (max-width: 991px) {
        .navbar-brand span {
        display: none;
        }
    }
    </style>
</head>

@include('inc.navbar')


{{-- Form for Adding Data --}}
<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('motor.store')}}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <input type="text" class="form-control" id="nama_motor" name="nama_motor" value="" required>
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori Motor</option>
                        <option value="matic">Matic</option>
                        <option value="cub">Cub</option>
                        <option value="sports">Sports</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Harga Motor</label>
                    <input type="number" class="form-control" id="harga_motor" name="harga_motor" value="" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" value="" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

{{-- End Form --}}





    <!--::footer_part start::-->
    @include('inc.footer')
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{asset('template/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('template/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('template/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    {{-- <script src="{{asset('template/js/jquery.nice-select.min.js')}}"></script> --}}
    <!-- slick js -->
    <script src="{{asset('template/js/slick.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('template/js/waypoints.min.js')}}"></script>
    <script src="{{asset('template/js/contact.js')}}"></script>
    <script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.form.js')}}"></script>
    <script src="{{asset('template/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('template/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('template/js/custom.js')}}"></script>