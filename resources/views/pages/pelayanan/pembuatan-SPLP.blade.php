@extends('layouts.master')
@section('title', 'Info Negara')
@section('content')

<div class="konten-info-umum">
    <div class="country-detail" style="background-image: url('{{ asset('storage/images/inggris-raya.png') }}');">
        <div class="country-name text-center mb-10 pt-5">
            <h1 class="text-white"><b>KBRI Inggris Raya</b></h1>
        </div>
        <div class="card" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
            <div class="row justify-content-end p-lg-5">
                <div class="col-4 text-center">
                    <h2 class="text-center"><b>KBRI London</b> </h2>
                </div>
                <div class="col-4 text-end">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm dropdown-toggle text-white" data-mdb-toggle="dropdown"
                            data-mdb-display="static" aria-expanded="false" style="background-color: #2071B8">
                            Informasi Pelayanan Umum
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="{{route('kbri')}}">Informasi Kantor KBRI</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('pembuatan-paspor')}}">Pembuatan Paspor Baru</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('pembuatan-SPLP')}}">Pembuatan SPLP</a></li>
                            <li><a class="dropdown-item" href="{{route('legalisasi-dokumen')}}">Legalisasi Dokumen</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('pelayanan-lain')}}">Pelayanan Lain</a></li>
                            <li><a class="dropdown-item" href="{{route('lapor-diri')}}">Lapor Diri </a></li>
                            <li><a class="dropdown-item" href="{{route('tourist-visa')}}">Tourist/Social Visa</a></li>
                            <li><a class="dropdown-item" href="{{route('diplomatic-service-visa')}}">Diplomatic and
                                    Service Visa</a></li>
                            <li><a class="dropdown-item" href="{{route('journalistic-visa')}}">Journalistic Visa</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('perlindungan-hukum')}}">Perlindungan Hukum</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-5">
                <p class="fw-bold">PERSYARATAN PEMBUATAN SPLP</p>
                <ul>
                    <li> Surat Keterangan Lapor Hilang dari Kepolisian setempat.</li>
                    <li>Formulir penggantian paspor yang telah di lengkapi dan di tandatangani.</li>
                    <li> (Formulir Penggantian paspor baru – Download disini untuk PDF version)</li>
                    <li> (Formulir Penggantian paspor baru – Download disini untuk Word Document version 97-2003)</li>
                    <li>Membawa 2 lembar photo ukuran 3 X 4</li>
                    <li> Bukti biaya transfer biaya penggantian paspor baru.</li>
                </ul>
                <p>Biaya Pembuatan SPLP: SEK 60.00 (Enam Puluh Kronor Swedia)
                </p>
                <p style="margin: 0px"> Kedutaan Besar Republik Indonesia tidak dapat menerima uang tunai, semua
                    pembayaran biaya konsuler dapat
                    dibayar melalui satu cara:
                </p>
                <p style="margin: 0px"> Melalui Bank: Indonesiska Ambassaden
                </p>
                <p>
                    Account: SEB account no: 5277-10-001292
                </p>
                <p> Waktu Pelayanan: 1 (satu) hari kerja setelah dokumen persyaratan lengkap</p>
            </div>
            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>
    </div>


</div>
@endsection
