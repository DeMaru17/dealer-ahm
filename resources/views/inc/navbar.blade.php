<header class="main_menu home_menu">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="{{route('dashboard.index')}}">
                        <img style="width: 50px; height: 50px;" src="{{asset('template/img/honda-logo-png.png')}}" alt="logo">
                        <span><b style="color: rgba(200,11,11,255)">Albi Honda Motor</b></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('dashboard.index')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Product</a>
                            </li>
                            @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Admin
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="{{route('motor.index')}}">Tambah Motor</a>
                                    <a class="dropdown-item" href="{{route('series.index')}}">Series Motor</a>
                                    <a class="dropdown-item" href="{{{route('gambar-motor.index')}}}">Gambar Motor</a>
                                    <a class="dropdown-item" href="{{route('dimensi.index')}}">Dimensi Motor</a>
                                    <a class="dropdown-item" href="{{route('mesin.index')}}">Mesin Motor</a>
                                    <a class="dropdown-item" href="{{route('rangka.index')}}">Rangka Motor</a>
                                    <a class="dropdown-item" href="{{route('kapasitas.index')}}">Kapasitas Motor</a>
                                    <a class="dropdown-item" href="{{route('kelistrikan.index')}}">Kelistrikan Motor</a>
                                </div>
                            </li>
                            @endauth
                        </ul>
                    </div>
                    @if (Auth::check())
                        <div class="hearer_icon d-flex ml-auto mr-3">
                            <a style="color: black" name="logout" id="logout" href="#" onclick="confirmLogout(event)">Logout</a>
                        </div>
                    @else
                        <div class="hearer_icon d-flex ml-auto mr-3">
                            <a style="color: black" name="login" id="login" href="{{ route('login') }}">Login</a>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
    function confirmLogout(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Anda akan keluar dari akun anda',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Keluar',
            cancelButtonText: 'Kembali'

        }).then((result) => {
            if (result.value) {
                document.location.href = "{{ route('logout') }}";
            }
        });
    }
</script>
