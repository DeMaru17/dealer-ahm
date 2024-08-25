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

{{-- Main table --}}
<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Tabel Motor</h4>
        </div>
        <div class="card-body">
            <a href="{{route('motor.create')}}" class="btn btn-primary mb-3">Add Data</a>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Motor</th>
                            <th>Kategori</th>
                            <th>Harga Motor</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($motor as $m)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $m->nama_motor }}</td>
                            <td>{{ $m->kategori }}</td>
                            <td>{{ 'Rp ' . number_format($m->harga_motor, 0, ',', '.') }}</td>
                            <td>{{ $m->deskripsi }}</td>
                            <td class="d-flex align-items-center">
                                    <a href="{{ route('motor.edit', $m->id) }}" class="btn btn-primary btn-sm mr-2 mt-n3">Edit</a>
                                    <form action="{{ route('motor.destroy', $m->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mt-n" onclick="confirmDelete(event)">Delete</button>
                                    </form>
                                
                            </td>
                            
                            
                            
                            
                            
                            
                        </tr>
                        @endforeach    
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: 'Anda akan menghapus data ini',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus Data',
        cancelButtonText: 'Kembali',
    }).then((result) => {
        if (result.value) {
            // Submit the form programmatically
            event.target.form.submit();
        }
    });
}
</script>

{{-- end main table --}}

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
    <script src="{{asset('template/js/jquery.nice-select.min.js')}}"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>