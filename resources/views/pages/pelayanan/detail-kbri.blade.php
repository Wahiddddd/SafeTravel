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
            <div class="row p-3">
                <h3>Alamat KBRI</h3>
                <style>
                    /* Gaya tambahan untuk iframe */
                    .map-iframe {
                      border-radius: 30px;
                      overflow: hidden;
                    }
                </style>

                <div style="border-radius: 30px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.886220237462!2d-0.13352522423583027!3d51.49695541146735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876052cffffffff%3A0x4a9d929a63064552!2sKedutaan%20Besar%20Republik%20Indonesia%20di%20London!5e0!3m2!1sid!2sid!4v1689957710033!5m2!1sid!2sid"
                      style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" class="map-iframe">
                    </iframe>
                </div>
                <p >Kungsbroplan 1, Lantai 4, 112 27 Stockholm, Sweden (P.O.BOX 130 62)</p>
                <h2>Contact Person</h2>
                <p style="margin-bottom: 0%">Email : london.kbri@kemlu.go.id; kbri@btconnect.com</p>
                <p style="margin-bottom: 0%">No. Telp : +44 20 7499-7661, +44 20 7290 9600</p>
            </div>
            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>
    </div>

</div>
@endsection
