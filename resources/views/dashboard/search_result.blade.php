@extends('layouts.app')

@section('content')
    <div style="margin-top: 100px; margin-bottom:100px;" class="container">
        <h2>Hasil Pencarian</h2>

        @if($motors->isEmpty())
            <p>Tidak ada motor yang dicari</p>
        @else
        <div class="row">
            <div class="col-lg-12">
                    @foreach ($motors->sortBy('id')->chunk(8) as $chunk)
                            <div class="row align-items-center">
                                @foreach ($chunk as $m)
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            @if($m->gambarMotor)
                                            <img style="height:250px; width:auto;" src="{{asset('storage/'.$m->gambarMotor->gambar_produk)}}" alt="">
                                            @endif
                                            <div class="single_product_text">
                                                <h4>{{$m->nama_motor}}</h4>
                                                <h6>Harga Mulai</h6>
                                                <h3><strong>{{ 'Rp. ' . number_format($m->harga_motor, 0, ',', '.') }}</strong></h3>
                                                <a href="{{ route('Motor.detail', str_replace(' ', '-', $m->nama_motor)) }}" class="detail">Selengkapnya<i class="bi bi-arrow-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    @endforeach
            </div>
        </div>
        @endif
    </div>
@endsection