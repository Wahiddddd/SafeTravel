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
                <p>Persyaratan saat mengajukan Visa Jurnalistik, Anda harus menghubungi KBRI terlebih dahulu. Setelah berkonsultasi dengan Bagian Penerangan, Kebudayaan dan Sosial, Anda perlu mengisi formulir berikut:</p>
                <ul>
                    <li>Formulir Aplikasi Visa Kunjungan</li>
                    <li>Formulir Permohonan Izin Kegiatan Jurnalistik</li>
                    <li> Application Form for Film / Videos Shooting Permit</li>
                </ul>
                <p>Setiap formulir harus diisi dan diisi sebagaimana mestinya, asli ditandatangani dalam rangkap 2 (dua), serta dilampiri dengan::
                </p>
                <ul>
                    <li>Tiga (3) foto ukuran paspor;</li>
                    <li>Fotokopi paspor;</li>
                    <li>Bukti pembayaran biaya visa (salinan kuitansi);</li>
                    <li>Surat keterangan surat kabar/majikan;</li>
                    <li>Surat keterangan kerja dari surat kabar/majikan.</li>
                </ul>
                <p>Biaya Visa: SEK 450</p>

                <p style="margin: 0px"> METODE PEMBAYARAN BIAYA KONSULER
                </p>
                <p>Mohon diperhatikan bahwa KBRI TIDAK DAPAT MENERIMA PEMBAYARAN DENGAN TUNAI. Semua pembayaran harus
                    dilakukan melalui transfer ke rekening bank SEB KBRI nomor 5277-10-01292 dan semua pemohon diminta
                    untuk menyerahkan salinan bukti transfer bank yang MENCANTUMKAN DENGAN JELAS NAMA PEMOHON, kepada
                    KBRI beserta dokumen-dokumen lain yang diperlukan.</p>
                <p style="margin: 0px"> PENTING
                </p>
                <ul>
                    <li>Pada saat transaksi perbankan (atau internet bank), harap tulis dengan jelas NAMA KELUARGA atau
                        NOMOR PRIBADI Anda pada SMS/pesan kepada penerima, untuk verifikasi pembayaran.
                        PEMBERITAHUAN</li>
                </ul>
                <p style="margin: 0px"> PEMBERITAHUAN
                </p>
                <ul>
                    <li>Semua biaya yang telah dibayarkan/ditransfer oleh
                        pemohon melalui rekening KBRI untuk biaya kekonsulerannya TIDAK DAPAT DIKEMBALIKAN/DIKEMBALIKAN</li>
                    <li>Silakan periksa validitas paspor Anda sebelum bepergian ke Indonesia. Untuk menjamin keamanan masuk
                        ke Indonesia, masa berlaku paspor Anda harus lebih dari 6 (enam) bulan.</li>
                    <li>
                        Dokumen Perjalanan, Paspor Orang Asing dan Paspor Sementara (Provisorisk Pass) TIDAK dapat
                        diterima sebagai dokumen perjalanan untuk masuk ke Indonesia.</li>
                </ul>

                <p style="margin: 0px"> Biaya
                </p>
                <p>
                    -
                </p>
                <p style="margin: 0px"> Waktu Pelayanan
                </p>
                <p>
                    -
                </p>
                <p style="margin: 0px"> Jadwal
                </p>
                <p>
                    -
                </p>
            </div>
            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>
    </div>


</div>
@endsection
