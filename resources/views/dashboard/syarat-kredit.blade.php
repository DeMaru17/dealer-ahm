@extends('layouts.app')
@section('title','Syarat Kredit')
@section('content')

<div class="container my-5">
    <h2 class="text-center mb-4">Syarat Pengajuan Kredit Motor</h2>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Syarat Pengajuan Kredit Perorangan</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Fotocopy KTP pemohon & suami / istri / penjamin</li>
                        <li class="list-group-item">Fotocopy kartu keluarga (bisa digantikan dengan surat nikah atau akte kelahiran)</li>
                        <li class="list-group-item">Data lain (hanya jika diperlukan)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Kredit Perusahaan</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Fotocopy akte pendirian & perubahannya</li>
                        <li class="list-group-item">Fotocopy pengesahan kehakiman</li>
                        <li class="list-group-item">Fotocopy SIUP, NPWP, SITU / Domisili, TDP</li>
                        <li class="list-group-item">Fotocopy Rek. Koran 3 bulan terakhir</li>
                        <li class="list-group-item">Fotocopy KTP direksi & komisaris</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-4">Proses Pengajuan Kredit Motor</h2>

    <ol class="list-group list-group-numbered shadow-sm">
        <li class="list-group-item">Anda menghubungi sales kami atau sales kami menghubungi anda melalui nomor telp yang anda berikan.</li>
        <li class="list-group-item">Kami akan mengkonfirmasi motor pilihan anda, DP dan angsuran yang anda mau.</li>
        <li class="list-group-item">Kami akan mengkonfirmasi waktu dan tempat untuk pelaksanaan survey dari pihak leasing.</li>
        <li class="list-group-item">Surveyor kredit dari pihak leasing akan mendatangi anda untuk proses survey.</li>
        <li class="list-group-item">Pada saat anda disurvey, anda akan mengisi berkas kredit. Di sini juga adalah kesempatan anda bertanya cara pembayaran angsuran. Tidak ada pembayaran apapun saat survey.</li>
        <li class="list-group-item">Surveyor akan memberi kami hasil survey dalam jangka waktu 1-2 hari setelah survey.</li>
        <li class="list-group-item">Apabila alamat anda tinggal sekarang berbeda dengan alamat anda di KTP (contoh: kontrak) maka survey akan dilakukan di alamat anda sekarang.</li>
    </ol>

    <div class="text-center mt-4">
        <a href="https://wa.me/628123456789" style="background-color: rgba(200,11,11,255); color:white;" class="btn">Konsultasi</a>
    </div>
</div>

@endsection