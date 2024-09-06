@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Tabel Mesin Motor</h4>
        </div>
        <div class="card-body">
            <a href="{{route('mesin.create')}}" class="btn btn-primary mb-3">Add Data</a>
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
                        @foreach($mesin as $m)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $m->motor->nama_motor }}</td>
                            <td class="d-flex align-items-center">
                                    <a href="{{ route('dimensi.edit', $m->id) }}" class="btn btn-primary btn-sm mr-2 ">Edit</a>
                                    <a href="{{ route('dimensi.destroy', $m->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
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
