@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create New Gallery Item</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('galeri.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" required class="form-control">
                    </div>

                    <a href="{{route('galeri.index')}}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection