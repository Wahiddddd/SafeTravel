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
                <p class="fw-bold">PERSYARATAN LEGALISASI DOKUMEN (SURAT KUASA, FOTOKOPI PASPOR, AKTE KELAHIRAN, AKTE
                    PERKAWINAN, IJAZAH, FOTOKOPI IJAZAH)</p>
                <ul>
                    <li>
                        Membawa dokumen asli yang akan dilegalisasi
                    </li>
                    <li> Membawa tanda pengenal jati diri (Paspor / SIM / ID Card) Membawa tanda pengenal jati diri
                        (Paspor / SIM / ID Card)</li>
                    <li> Biaya Legalisasi Dokumen Bisnis: SEK 1.150,00</li>
                    <li> Biaya Legalisasi Dokumen Personal: SEK 250,00</li>
                    <li> Biaya Surat Keterangan Perkawinan: SEK 0.00</li>
                    <li> Biaya Surat Keterangan Kelahiran: SEK 0.00</li>
                    <li> Biaya Surat Keterangan Kematian: SEK 0.00</li>
                    <li> Proses Pelayanan: 3 hari kerja setelah dokumen persyaratan lengkap</li>
                </ul>

            </div>



            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>
    </div>


</div>
@endsection
