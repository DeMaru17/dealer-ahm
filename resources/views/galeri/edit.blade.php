@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Gallery Item</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('galeri.update', $galeri->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="foto" class="col-form-label">Foto</label>
                        <input type="file" name="foto" class="form-control">
                        <img src="{{ asset('storage/' . $galeri->foto) }}" width="100" class="img-thumbnail mt-2">
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{route('galeri.index')}}" class="btn btn-danger mr-2">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection