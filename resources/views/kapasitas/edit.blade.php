@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data Kapasitas Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('kapasitas.update', $kapasitas->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_motor">Kategori Motor</label>
                    <select class="form-control" name="kategori_motor" id="kategori_motor" @readonly(true)>
                        <option value="">Pilih Kategori Motor</option>
                        <option value="{{$kapasitas->motor->kategori}}" selected>{{$kapasitas->motor->kategori}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <select class="form-control" name="nama_motor" id="nama_motor" @readonly(true)>
                        <option value="">Pilih Motor</option>
                        <option value="{{$kapasitas->motor->nama_motor}}" selected>{{$kapasitas->motor->nama_motor}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Kapasitas Tangki Bahan Bakar</label>
                    <input type="text" class="form-control" id="kapasitas_tangki_bahan_bakar" name="kapasitas_tangki_bahan_bakar" value="{{$kapasitas->kapasitas_tangki_bahan_bakar}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Kapasitas Minyak Pelumas</label>
                    <input type="text" class="form-control" id="kapasitas_minyak_pelumas" name="kapasitas_minyak_pelumas" value="{{$kapasitas->kapasitas_minyak_pelumas}}" >
                </div>


                <a href="{{route('kapasitas.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
