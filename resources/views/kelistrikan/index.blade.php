@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Tabel Kelistrikan Motor</h4>
        </div>
        <div class="card-body">
            <a href="{{route('kelistrikan.create')}}" class="btn btn-primary mb-3">Add Data</a>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Motor</th>
                            <th>Tipe Aki</th>
                            <th>Sistem Pengapian</th>
                            <th>Tipe Busi</th>
                            <th>Power Charger</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kelistrikan as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->motor->nama_motor }}</td>
                            <td>{{$k->tipe_baterai_atau_aki}}</td>
                            <td>{{$k->sistem_pengapian}}</td>
                            <td>{{$k->tipe_busi}}</td>
                            <td>{{$k->power_charger}}</td>
                            <td class="d-flex align-items-center">
                                    <a href="{{ route('kelistrikan.edit', $k->id) }}" class="btn btn-primary btn-sm mr-2 ">Edit</a>
                                    <a href="{{ route('kelistrikan.destroy', $k->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
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
