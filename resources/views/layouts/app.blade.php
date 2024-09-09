<!doctype html>
<html lang="id">

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
        .main_menu {
        z-index: 1000; High value to stay on top */
        width: 100%;

        }

        /* Add padding to the body or margin to the top of the content */
        body {
        padding-top: 73px; /* Adjust this value to be slightly larger than the height of your navbar */
        }

        @media (max-width: 991px) {
        .navbar-brand span {
        display: none;
            }
        }

        .carousel-control-prev, .carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: transparent;
        border: none;
        box-shadow: none;
        }

        #carouselExampleIndicators {
        width: 90vw; /* Mengatur lebar carousel */
         max-width: 1500px; /* Maksimal lebar carousel */
        margin: auto; /* Memusatkan carousel */
        }

        .carousel-inner img {
        width: 100%; /* make the image full width of the carousel item */
        height: auto; /* adjust the height to your liking */
        object-fit: cover; /* make the image cover the entire carousel item */
        border-radius: 10px; /* add some border radius to the image */
        }


        .carousel-item {
        padding: 10px; /* add some padding to the carousel item */
        }

        .footer_part {
        background-color: #16191a; /* or any other hex code for black */
        }

        .copyright_part {
        background-color: #1c2021; /* or any other hex code for black */
        }

        .footer_part,
        .copyright_part {
        color: #fff; /* or any other hex code for white */
        }




    </style>
</head>

<body>
    @include('sweetalert::alert')



    <!--::header part start::-->
    @include('inc.navbar')
    <!-- Header part end-->

    <!-- banner part start-->
    {{-- @include('inc.banner') --}}
    @yield('content')
    <!-- banner part start-->



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
    {{-- sweet alert js --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>



    <script>

        $('#kategori_motor').change(function(){
        let kategori_motor = $(this).val();
        $.ajax({
            type: 'GET',
            url: '{{ route('get-motor-by-kategori') }}',
            data: {kategori_motor: kategori_motor}, // pass the selected category as a parameter
            dataType: 'json',
            success: function(resp){
            // console.log(resp);
            let option = ""; // declare the option variable inside the success callback
            option += "<option value=''>Pilih Motor </option>";
            $.each(resp, function(index, val){
                option += "<option value='"+ val.id +"'>"+ val.nama_motor +"</option>";
            });
            $('#nama_motor').html(option);
            }
        });
    });

    // Tambahkan event listener pada input file
    $('input[type="file"]').on('change', function() {
     // Ambil id dari input file
    var id = $(this).attr('id');
    // Ambil file yang diupload
    var file = $(this).prop('files')[0];
    // Buat reader untuk membaca file
    var reader = new FileReader();
    // Tambahkan event listener pada reader
    reader.onload = function(e) {
    // Ambil hasil pembacaan file
    var result = e.target.result;
    // Tampilkan hasil pembacaan file pada img preview
    $('#' + id + '-preview').attr('src', result);
    };
    // Baca file
    reader.readAsDataURL(file);
    });

    </script>

</body>

</html>
