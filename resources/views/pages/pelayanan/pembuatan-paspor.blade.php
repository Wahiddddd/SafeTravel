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
                            <li><a class="dropdown-item" href="{{route('tourist-visa')}}">Visa Turis/Sosial</a></li>
                            <li><a class="dropdown-item" href="{{route('diplomatic-service-visa')}}">Visa Diplomatik dan Dinas</a></li>
                            <li><a class="dropdown-item" href="{{route('journalistic-visa')}}">Visa Jurnalistik</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('perlindungan-hukum')}}">Perlindungan Hukum</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-5">
                <p class="fw-bold">PERSYARATAN PEMBUATAN PASPOR BARU</p>
                <ul>
                    <li>Membawa formulir penggantian paspor yang telah dilengkapi dan ditandatangani</li>
                    <li> (Formulir Penggantian paspor baru – Download disini untuk PDF version)</li>
                    <li>(Formulir Penggantian paspor baru – Download disini untuk Word Document version 97-2003)</li>
                    <li>Membawa paspor lama yang harus dilampirkan</li>
                    <li>Membawa 2 lembar photo ukuran 3 X 4</li>
                    <li> Membawa personbevis-sebuah dokumen yang dikeluarkan oleh Swedish Tax Authority. (Untuk memesan
                        – ikuti link ini)</li>
                    <li>Membawa bukti biaya transfer biaya penggantian paspor baru. Kedutaan Besar Republik Indonesia
                        tidak dapat menerima uang tunai, semua pembayaran biaya konsuler dapat dibayar melalui satu
                        cara: </li>
                </ul>
                <p class="fw-bold">Melalui Bank: Indonesiska Ambassaden</p>
                <p> Account: SEB account no.: 5277-10-001292</p>
                <ul>
                    <li> Bila melalui pos, harap disertakan satu buah amplop balasan dengan alamat lengkap pegirim
                        disertai
                        perangko tercatat</li>
                </ul>
                <p style="margin: 0px"> Biaya Pembuatan Paspor Baru: SEK 300.00 (Tiga Ratus Kronor Swedia)</p>
                <p>
                    Waktu Pelayanan: 3 (tiga) hari kerja setelah dokumen persyaratan lengkap</p>
            </div>

            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>
    </div>


</div>
@endsection
