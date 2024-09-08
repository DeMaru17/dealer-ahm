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
                        {{-- @foreach ($motor as $m ) --}}
                        <option value="matic">Matic</option>
                        <option value="sports">Sports</option>
                        <option value="cub">Cub</option>

                        {{-- @endforeach --}}
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <select class="form-control" name="nama_motor" id="nama_motor">
                        <option value="">Pilih Motor</option>
                    </select>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar Produk Depan</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar_produk" id="gambar_produk" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar_produk-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar Carousel 1</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar_carousel1" id="gambar_carousel1" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar_carousel1-preview" alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar Carousel 2</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar_carousel2" id="gambar_carousel2" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar_carousel2-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar Carousel 3</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar_carousel3" id="gambar_carousel3" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar_carousel3-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar 1</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar1" id="gambar1" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar1-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar 2</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar2" id="gambar2" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar2-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar 3</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar3" id="gambar3" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar3-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar 4</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar4" id="gambar4" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar4-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar 5</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar5" id="gambar5" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar5-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar 6</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar6" id="gambar6" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar6-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar 7</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar7" id="gambar7" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar7-preview"  alt="">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center   border rounded p-3 mb-5">
                    <label for="picture" class="col-sm-2 col-form-label">Gambar 8</label>
                    <div class="col-sm-4">
                        <input type="file" name="gambar8" id="gambar8" class="">
                    </div>
                    <div class="col-sm-6">
                        <img id="gambar8-preview"  alt="">
                    </div>
                </div>

                <a href="{{route('gambar-motor.index')}}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>





{{-- End Form --}}
@endsection
