@extends('layouts.app')

@section('content')


{{-- Form for Edit Data --}}
<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('motor.update', $motor->id)}}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <input type="text" class="form-control" id="nama_motor" name="nama_motor" value="{{$motor->nama_motor}}" required>
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori Motor</option>
                        <option  {{ $motor->kategori == 'matic' ? 'selected' : '' }} value="matic">Matic</option>
                        <option {{ $motor->kategori == 'cub' ? 'selected' : '' }} value="cub">Cub</option>
                        <option {{ $motor->kategori == 'sports' ? 'selected' : '' }} value="sports">Sports</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Harga Motor</label>
                    <input type="number" class="form-control" id="harga_motor" name="harga_motor" value="{{$motor->harga_motor}}" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required>{{$motor->deskripsi}}</textarea>
                </div>

                <a href="{{route('motor.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>

{{-- End Form --}}

@endsection