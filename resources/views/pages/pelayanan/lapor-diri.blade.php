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
                <p class="fw-bold">Lapor Diri</p>
                <p>PersyaratanAdapun cara pendaftaran / melapor diri adalah sebagai berikut:</p>
                <ul>
                    <li>Dapat datang sendiri ke KBRI membawa:</li>
                    <li> Formulir Lapor Diri yang telah di tandatangani anggota keluarga yang menyertai.</li>
                    <li>
                        1 lembar photo ukuran 3 X 4</li>
                    <li> Dapat mengirimkan dokumen yang dibutuhkan melalui surat tercatat, sebagai berikut:</li>
                    <li> Formulir Lapor Diri yang telah ditandatangani dan diisi lengkap termasuk jumlah anggota
                        keluarga yang menyertai.</li>
                    <li> 1 lembar photo ukuran 3 X 4</li>
                    <li> Satu buah amplop balasan dengan alamat le gkap pengirim disertai dengan perangko tercatat.</li>
                </ul>

                <p style="margin: 0px"> Pindah Alamat
                </p>
                <p>Bagi WNI yang menetap di Swedia dan Latvia disarankan untuk mengirimkan alamat yang baru ke KBRI bila
                    anda pindah alamat tempat tinggal, ganti nomor telepon, atau alamat email melalui surat. Data
                    tersebut dipergunakan untuk mempermudah tugas KBRI dalam menyampaikan informasi dan hal lainnya yang
                    penting diketahui WNI sendiri.</p>
                <p style="margin: 0px"> Catatan:
                </p>
                <p>
                    Bila terdapat hal yang belum jelas diharapkan dapat menghubungi KBRI untuk mendapat penjelasan lebih
                    lanjut.
                </p>
                <p style="margin: 0px"> Kedutaan Besar Republik Indonesia
                </p>
                <p>
                    Bagian Konsuler dan Pelayanan Masyarakat
                </p>
                <p style="margin: 0px"> Biaya
                </p>
                <p>
                    -
                </p>
                <p style="margin: 0px"> Waktu Pelayanan
                </p>
                <p>
                    3 hari kerja setelah dokumen persyaratan lengkap.

                </p>




            </div>
            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>
    </div>


</div>
@endsection
