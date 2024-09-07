@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Series Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('series.store')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama_motor">Kategori Motor</label>
                    <select class="form-control" name="kategori_motor" id="kategori_motor">
                        <option value="">Pilih Kategori Motor</option>
                        @foreach ($motor as $m )
                        <option value="{{$m->kategori}}">{{$m->kategori}}</option>

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
                    <label for="harga_motor">Nama Series</label>
                    <input type="text" class="form-control" id="nama_series" name="nama_series" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="" >
                </div>

    



                <a href="{{route('series.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection