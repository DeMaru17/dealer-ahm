@extends('layouts.app')
@section('content')

{{-- Main table --}}
<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Tabel Dimensi Motor</h4>
        </div>
        <div class="card-body">
            <a href="{{route('dimensi.create')}}" class="btn btn-primary mb-3">Add Data</a>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Motor</th>
                            <th>Panjang x Lebar x Tinggi</th>
                            <th>Jarak Sumbu Roda</th>
                            <th>Jarak Terendah Ke Tanah</th>
                            <th>Ketinggian tempat duduk</th>
                            <th>Berat Kosong</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($spekDimensi as $sd)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $sd->motor->nama_motor }}</td>
                            <td>{{ $sd->panjangxlebarxtinggi }}</td>
                            <td>{{ $sd->jarak_sumbu_roda }}</td>
                            <td>{{ $sd->jarak_terendah_ke_tanah }}</td>
                            <td>{{ $sd->ketinggian_tempat_duduk }}</td>
                            <td>{{ $sd->berat_kosong }}</td>
                            <td class="d-flex align-items-center">
                                    <a href="{{ route('dimensi.edit', $sd->id) }}" class="btn btn-primary btn-sm mr-2 ">Edit</a>
                                    <a href="{{ route('dimensi.destroy', $sd->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
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