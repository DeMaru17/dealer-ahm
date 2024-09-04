@extends('layouts.app')

@section('content')


{{-- Form for Adding Data --}}
<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Gambar Motor</h4>
        </div>
        <div class="card-body">
            <form action="{{route('gambar-motor.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="picture">Gambar 1</label>
                    <input type="file" name="gambar1" id="gambar1" class="form-control">
                </div>

                <div class="form-group">
                    <label for="picture">Gambar 2</label>
                    <input type="file" name="gambar2" id="gambar2" class="form-control">
                </div>

                <div class="form-group">
                    <label for="picture">Gambar 3</label>
                    <input type="file" name="gambar3" id="gambar3" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>





{{-- End Form --}}
@endsection