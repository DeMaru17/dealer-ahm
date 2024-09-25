@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Tabel Galeri</h4>
        </div>
        <div class="card-body">
            <a href="{{route('galeri.create')}}" class="btn btn-primary mb-3">Add Data</a>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto Galeri</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galeri as $g)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $g->foto) }}" alt="Gallery Image" class="img-fluid">
                            </td>
                            <td class="d-flex align-items-center">
                                    <a href="{{ route('galeri.edit', $g->id) }}" class="btn btn-primary btn-sm mr-2 ">Edit</a>
                                    <a href="{{ route('galeri.destroy', $g->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
