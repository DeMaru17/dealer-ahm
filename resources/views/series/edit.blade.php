@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Series Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('series.update',  $series->id)}}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_motor">Kategori Motor</label>
                    <select class="form-control" name="kategori_motor" id="kategori_motor" @readonly(true)>
                        <option value="">Pilih Kategori Motor</option>
                        <option value="{{$series->motor->kategori}}" selected>{{$series->motor->kategori}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <select class="form-control" name="nama_motor" id="nama_motor" @readonly(true)>
                        <option value="">Pilih Motor</option>
                        <option value="{{$series->motor->nama_motor}}" selected>{{$series->motor->nama_motor}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Nama Series</label>
                    <input type="text" class="form-control" id="nama_series" name="nama_series" value="{{$series->nama_series}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{$series->harga}}" >
                </div>

    



                <a href="{{route('series.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection