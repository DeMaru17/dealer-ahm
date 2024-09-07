@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Tabel Series Motor</h4>
        </div>
        <div class="card-body">
            <a href="{{route('series.create')}}" class="btn btn-primary mb-3">Add Data</a>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Motor</th>
                            <th>Nama Series</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($series as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $s->motor->nama_motor }}</td>
                            <td>{{$s->nama_series}}</td>
                            <td>{{ 'Rp ' . number_format($s->harga, 0, ',', '.') }}</td>
                            <td class="d-flex align-items-center">
                                    <a href="{{ route('series.edit', $s->id) }}" class="btn btn-primary btn-sm mr-2 ">Edit</a>
                                    <a href="{{ route('series.destroy', $s->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
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