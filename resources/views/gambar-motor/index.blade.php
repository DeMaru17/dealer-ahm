@extends('layouts.app')
@section('content')

{{-- Main table --}}
<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Tabel Gambar Motor</h4>
        </div>
        <div class="card-body">
            <a href="{{route('gambar-motor.create')}}" class="btn btn-primary mb-3">Add Data</a>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Motor</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gambar as $g)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $g->motor->nama_motor }}</td>
                            {{-- <td><img width="200" height="200" src="{{asset('storage/'. $g->gambar_1)}}" alt=""></td>
                            <td><img width="200" height="200" src="{{ asset('storage/' . $g->gambar_2) }}" alt=""></td>
                            <td><img width="200" height="200" src="{{asset('storage/'. $g->gambar_3)}}" alt=""></td> --}}
                            <td class="d-flex align-items-center">
                                    <a href="{{ route('gambar-motor.edit', $g->id) }}" class="btn btn-primary btn-sm mr-2 ">Edit</a>
                                    <a href="{{ route('gambar-motor.destroy', $g->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
                                
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