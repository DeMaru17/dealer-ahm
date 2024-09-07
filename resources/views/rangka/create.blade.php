@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Rangka Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('rangka.store')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama_motor">Kategori Motor</label>
                    <select class="form-control" name="kategori_motor" id="kategori_motor">
                        <option value="">Pilih Kategori Motor</option>
                        @foreach ($rangka as $r )
                        <option value="{{$r->kategori}}">{{$r->kategori}}</option>

                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <select class="form-control" name="nama_motor" id="nama_motor">
                        <option value="">Pilih Motor</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Rangka</label>
                    <input type="text" class="form-control" id="tipe_rangka" name="tipe_rangka" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Suspensi Depan</label>
                    <input type="text" class="form-control" id="tipe_suspensi_depan" name="tipe_suspensi_depan" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Suspensi Belakang</label>
                    <input type="text" class="form-control" id="tipe_suspensi_belakang" name="tipe_suspensi_belakang" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Ukuran Ban Depan</label>
                    <input type="text" class="form-control" id="ukuran_ban_depan" name="ukuran_ban_depan" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Ukuran Ban Belakang</label>
                    <input type="text" class="form-control" id="ukuran_ban_belakang" name="ukuran_ban_belakang" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Rem Depan</label>
                    <input type="text" class="form-control" id="tipe_rem_depan" name="tipe_rem_depan" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Rem Belakang</label>
                    <input type="text" class="form-control" id="tipe_rem_belakang" name="tipe_rem_belakang" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Sistem Pengereman</label>
                    <input type="text" class="form-control" id="sistem_pengereman" name="sistem_pengereman" value="" >
                </div>



                <a href="{{route('rangka.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
