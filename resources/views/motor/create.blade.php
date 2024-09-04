@extends('layouts.app')

@section('content')


{{-- Form for Adding Data --}}
<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('motor.store')}}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <input type="text" class="form-control" id="nama_motor" name="nama_motor" value="" required>
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori Motor</option>
                        <option value="matic">Matic</option>
                        <option value="cub">Cub</option>
                        <option value="sports">Sports</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga_motor">Harga Motor</label>
                    <input type="number" class="form-control" id="harga_motor" name="harga_motor" value="" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" value="" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>



{{-- End Form --}}
@endsection