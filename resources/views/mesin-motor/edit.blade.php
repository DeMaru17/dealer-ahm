@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Dimensi Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('mesin.update', $mesin->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_motor">Kategori Motor</label>
                    <select class="form-control" name="kategori_motor" id="kategori_motor" @readonly(true)>
                        <option value="">Pilih Kategori Motor</option>
                        <option value="{{$mesin->motor->kategori}}" selected>{{$mesin->motor->kategori}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <select class="form-control" name="nama_motor" id="nama_motor" @readonly(true)>
                        <option value="">Pilih Motor</option>
                        <option value="{{$mesin->motor->nama_motor}}" selected>{{$mesin->motor->nama_motor}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Mesin</label>
                    <input type="text" class="form-control" id="tipe_mesin" name="tipe_mesin" value="{{$mesin->tipe_mesin}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Transmisi</label>
                    <input type="text" class="form-control" id="tipe_transmisi" name="tipe_transmisi" value="{{$mesin->tipe_transmisi}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Kopling</label>
                    <input type="text" class="form-control" id="tipe_kopling" name="tipe_kopling" value="{{$mesin->tipe_kopling}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Starter</label>
                    <input type="text" class="form-control" id="tipe_starter" name="tipe_starter" value="{{$mesin->tipe_starter}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Diameter x Langkah</label>
                    <input type="text" class="form-control" id="diameterxlangkah" name="diameterxlangkah" value="{{$mesin->diameter_x_langkah}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Volume Langkah</label>
                    <input type="text" class="form-control" id="volume_langkah" name="volume_langkah" value="{{$mesin->volume_langkah}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Daya Maksimum</label>
                    <input type="text" class="form-control" id="daya_maksimum" name="daya_maksimum" value="{{$mesin->daya_maksimum}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Torsi Maksimum</label>
                    <input type="text" class="form-control" id="torsi_maksimum" name="torsi_maksimum" value="{{$mesin->torsi_maksimum}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Busi</label>
                    <input type="text" class="form-control" id="busi" name="busi" value="{{$mesin->busi}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Sistem Bahan Bakar</label>
                    <input type="text" class="form-control" id="sistem_bahan_bakar" name="sistem_bahan_bakar" value="{{$mesin->sistem_bahan_bakar}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Pengapian</label>
                    <input type="text" class="form-control" id="pengapian" name="pengapian" value="{{$mesin->pengapian}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Pendingin</label>
                    <input type="text" class="form-control" id="tipe_pendingin" name="tipe_pendingin" value="{{$mesin->tipe_pendingin}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Perbandingan Kompresi</label>
                    <input type="text" class="form-control" id="perbandingan_kompresi" name="perbandingan_kompresi" value="{{$mesin->perbandingan_kompresi}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Pola Perpindahan Gigi</label>
                    <input type="text" class="form-control" id="pola_perpindahan_gigi" name="pola_perpindahan_gigi" value="{{$mesin->pola_perpindahan_gigi}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Jenis Pelumas</label>
                    <input type="text" class="form-control" id="jenis_pelumas" name="jenis_pelumas" value="{{$mesin->jenis_pelumas}}" >
                </div>

                <a href="{{route('mesin.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
