@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Kelistrikan Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('kelistrikan.update', $kelistrikan->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_motor">Kategori Motor</label>
                    <select class="form-control" name="kategori_motor" id="kategori_motor" @readonly(true)>
                        <option value="">Pilih Kategori Motor</option>
                        <option value="{{$kelistrikan->motor->kategori}}" selected>{{$kelistrikan->motor->kategori}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <select class="form-control" name="nama_motor" id="nama_motor" @readonly(true)>
                        <option value="">Pilih Motor</option>
                        <option value="{{$kelistrikan->motor->nama_motor}}" selected>{{$kelistrikan->motor->nama_motor}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Tipe Aki</label>
                    <input type="text" class="form-control" id="tipe_aki" name="tipe_aki" value="{{$kelistrikan->tipe_baterai_atau_aki}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Sistem Pengapian</label>
                    <input type="text" class="form-control" id="sistem_pengapian" name="sistem_pengapian" value="{{$kelistrikan->sistem_pengapian}}" >
                </div>
                
                <div class="form-group">
                    <label for="harga_motor">Tipe Busi</label>
                    <input type="text" class="form-control" id="tipe_busi" name="tipe_busi" value="{{$kelistrikan->tipe_busi}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Power Charger</label>
                    <input type="text" class="form-control" id="power_charger" name="power_charger" value="{{$kelistrikan->power_charger}}" >
                </div>



                <a href="{{route('kelistrikan.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
