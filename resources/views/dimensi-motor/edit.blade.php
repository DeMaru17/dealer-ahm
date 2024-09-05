@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data Dimensi Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('dimensi.update',$dimensi->id)}}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="nama_motor">Kategori Motor</label>
                    <select class="form-control" name="kategori_motor" id="kategori_motor" @readonly(true)>
                        <option value="">Pilih Kategori Motor</option>
                        <option value="{{$dimensi->motor->kategori}}" selected>{{$dimensi->motor->kategori}}</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <select class="form-control" name="nama_motor" id="nama_motor" @readonly(true)>
                        <option value="">Pilih Motor</option>
                        <option value="{{$dimensi->motor->nama_motor}}" selected>{{$dimensi->motor->nama_motor}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Panjang x Lebar x Tinggi</label>
                    <input type="text" class="form-control" id="plt" name="plt" value="{{$dimensi->panjangxlebarxtinggi}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Jarak Sumbu Roda</label>
                    <input type="text" class="form-control" id="jarak_sumbu_roda" name="jarak_sumbu_roda" value="{{$dimensi->jarak_sumbu_roda}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Jarak Terendah Ke Tanah</label>
                    <input type="text" class="form-control" id="jarak_terendah" name="jarak_terendah" value="{{$dimensi->jarak_terendah_ke_tanah}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Ketinggian Tempat Duduk</label>
                    <input type="text" class="form-control" id="ketinggian_duduk" name="ketinggian_duduk" value="{{$dimensi->ketinggian_tempat_duduk}}" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Berat Kosong</label>
                    <input type="text" class="form-control" id="berat_kosong" name="berat_kosong" value="{{$dimensi->berat_kosong}}" >
                </div>

                <a href="{{route('motor.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection