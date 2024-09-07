@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Kelistrikan Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('kelistrikan.store')}}" method="POST">
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
                    <label for="harga_motor">Tipe Aki</label>
                    <input type="text" class="form-control" id="tipe_aki" name="tipe_aki" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Sistem Pengapian</label>
                    <input type="text" class="form-control" id="sistem_pengapian" name="sistem_pengapian" value="" >
                </div>
                
                <div class="form-group">
                    <label for="harga_motor">Tipe Busi</label>
                    <input type="text" class="form-control" id="tipe_busi" name="tipe_busi" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Power Charger</label>
                    <input type="text" class="form-control" id="power_charger" name="power_charger" value="" >
                </div>



                <a href="{{route('kelistrikan.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
