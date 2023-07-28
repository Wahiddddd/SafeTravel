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
                <p>Persyaratan Menyerahkan dokumen-dokumen berikut ke Bagian Konsuler:</p>
                <ul>
                    <li>Paspor yang masih berlaku minimal enam bulan setelah tanggal rencana masuk ke Indonesia</li>
                    <li>Formulir aplikasi yang telah diisi dari situs web KBRI;</li>
                    <li>
                        Pas foto terbaru ukuran 3x4 cm sebanyak 1 (satu) lembar;</li>
                    <li>Salinan tiket pesawat atau rencana perjalanan (rencana perjalanan
                        harus menjadi bukti saat Anda akan meninggalkan Indonesia);
                    </li>
                    <li>Bukti pembayaran biaya visa 450 kr (salinan kuitansi);</li>
                    <li>Amplop pengembalian beralamat iklan perangko -sebaiknya sebagai surat tercatat (rekomenderat),
                        mengingat Anda mengirimkan paspor (kecuali jika Anda mengunjungi Kedutaan secara langsung).</li>
                </ul>

                <p style="margin: 0px"> PEMBERITAHUAN
                </p>
                <ul>
                    <li>Semua biaya yang telah dibayarkan/ditransfer oleh pemohon melalui rekening bank KBRI untuk biaya
                        konsuler TIDAK DAPAT DIKEMBALIKAN/DIKEMBALIKAN Harap periksa validitas paspor Anda sebelum melakukan
                        perjalanan ke Indonesia.</li>
                    <li>Untuk menjamin keamanan masuk ke Indonesia, masa berlaku paspor Anda harus lebih dari 6 (enam)
                        bulan.</li>
                    <li>Dokumen Perjalanan, Paspor Orang Asing dan Paspor Sementara (Provisorisk Pass) TIDAK dapat diterima
                        sebagai dokumen perjalanan untuk masuk ke Indonesia.</li>
                    <li>Semua visa akan diproses oleh KBRI dalam waktu 3 (tiga) hari kerja (dengan ketentuan pemohon telah melengkapi
                        persyaratan yang diperlukan)</li>
                </ul>
                <p style="margin: 0px"> PENERBITAN
                </p>
                <p>
                    Jika semua dokumen yang diperlukan telah diserahkan, aplikasi akan dirujuk ke Jakarta untuk persetujuan dan Visa
                    Jurnalis akan diterbitkan dalam satu bulan. Visa yang diterbitkan berlaku selama 60 hari dan harus digunakan dalam
                    waktu 90 hari sejak diterbitkan. Jika pemohon gagal masuk ke Indonesia dalam jangka waktu 90 hari, visa akan
                    dinyatakan tidak berlaku.
                </p>
                <p style="margin: 0px"> NOTE
                </p>
                <ul>
                    <li>Perlu diketahui bahwa kepemilikan visa tidak menjamin masuk ke Indonesia. Izin masuk ke Indonesia ada dalam
                        kewenangan Pejabat Imigrasi di tempat pemasukan.</li>
                    <li>Kedutaan tidak akan mengeluarkan visa untuk 'Paspor Orang Asing', 'Dokumen Perjalanan' dan 'Paspor Sementara'</li>
                </ul>
                <p>
                    Harap diperhatikan bahwa formulir aplikasi yang tidak lengkap atau aplikasi yang tidak memiliki dokumen yang diperlukan
                    dapat menyebabkan penolakan untuk pemberian visa.
                </p>

                <p style="margin: 0px"> Cost
                </p>
                <p>
                    -
                </p>
                <p style="margin: 0px"> Service time
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
