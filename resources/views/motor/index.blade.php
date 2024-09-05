@extends('layouts.app')

@section('content')
    


{{-- Main table --}}
<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Tabel Motor</h4>
        </div>
        <div class="card-body">
            <a href="{{route('motor.create')}}" class="btn btn-primary mb-3">Add Data</a>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Motor</th>
                            <th>Kategori</th>
                            <th>Harga Motor</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($motor as $m)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $m->nama_motor }}</td>
                            <td>{{ $m->kategori }}</td>
                            <td>{{ 'Rp ' . number_format($m->harga_motor, 0, ',', '.') }}</td>
                            <td>{{ $m->deskripsi }}</td>
                            <td class="d-flex align-items-center">
                                    <a href="{{ route('motor.edit', $m->id) }}" class="btn btn-primary btn-sm mr-2 ">Edit</a>
                                    <a href="{{ route('motor.destroy', $m->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
                                
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
