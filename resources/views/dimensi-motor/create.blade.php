@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Dimensi Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('dimensi.store')}}" method="POST">
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
                    <label for="harga_motor">Panjang x Lebar x Tinggi</label>
                    <input type="text" class="form-control" id="plt" name="plt" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Jarak Sumbu Roda</label>
                    <input type="text" class="form-control" id="jarak_sumbu_roda" name="jarak_sumbu_roda" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Jarak Terendah Ke Tanah</label>
                    <input type="text" class="form-control" id="jarak_terendah" name="jarak_terendah" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Ketinggian Tempat Duduk</label>
                    <input type="text" class="form-control" id="ketinggian_duduk" name="ketinggian_duduk" value="" >
                </div>

                <div class="form-group">
                    <label for="harga_motor">Berat Kosong</label>
                    <input type="text" class="form-control" id="berat_kosong" name="berat_kosong" value="" >
                </div>

                <a href="{{route('motor.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection