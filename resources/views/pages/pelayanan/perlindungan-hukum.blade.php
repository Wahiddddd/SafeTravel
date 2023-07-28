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
                <p style="margin: 0px"> Persyaratan
                </p>
                <p>Pemerintah Indonesia melalui perwakilannya di luar negeri memberikan perlindungan kepada Warga Negara
                    Indonesia (WNI) dan Badan Hukum Indoensia (BHI) di luar negeri.</p>
                <p> Perlindungan kepada WNI dan BHI di wilayah Swedia dilakukan berdasarkan dua tindakan, yaitu tindakan
                    perlindungan preventif dan tindakan perlindungan represif. Langkah tersebut akan dilakukan oleh
                    Perwakilan RI bekerjasama dengan instansi-instansi terkait setempat, seperti Kementrian Luar Negeri,
                    Kementrian Dalam Negeri, Polisi, Dinas Intelijen dan Imigrasi setempat.
                </p>
                <p style="margin: 0px"> Tindakan Perlindungan Preventif
                </p>
                <p>Tindakan perlindungan preventif tidak saja dimaksudkan untuk mencegah terjadinya hal-hal yang tidak
                    diinginkan, aka tetapi juga dimaksudkan untuk membekali WNI denga pengetahuan-pengetahuan mengenai
                    peraturan-peraturan setempat agara apabila terjadi sesuatu hal yang tidak diinginkan, maka WNI
                    tersebut dapat mengambil tindakan yang tepat.
                </p>
                <p>Tindakan perlindungan preventif dilaksanakan secara terus-menerus tanpa mengenal batas waktu dan
                    tempat.</p>
                <p style="margin: 0px"> Tindakan Perlindungan Represif
                </p>
                <p>Pada dasarkan tindakan represif yang dilakukan oleh Perwakilan RI adalah tindakan yang dilakukan
                    setelah adanya tindakan aparat setempat, seperti pengawasan oleh aparat setempat, penangkapan,
                    penahanan, pemanggilan proses hukum, permintaan informasi, integrosi, dll. Tindkan perwakilan
                    selanjutnya adalah memberikan bantuan hukum dan bantuan-bantuan kekonsuleran lainnya agar WNI yang
                    bersangkutan diperlakukan secara adil, sesuai dengan hak-haknya.
                </p>
                <p style="margin: 0px"> HIMBAUAN:
                </p>
                <p>Untuk memberikan perlindungan yang maksimal, diharapkan bagi seluruh warga negara Indonesia yang
                    berdomisili di Swedia dan Latvia melaporkan keberadaannya ke KBRI Stockholm. Jika alamat, nomor
                    telepon, dan alamat e-mail mengalami perubahan atau sudah tidak sesuai dengan data yang pernah
                    diberikan terdahulu, KBRI Stockholm mengharapkan agar masyarakat atau warga negara Indonesia di
                    Swedia dan Latvia untuk memberikan alamat, nomor telepon, dan alamat e-mail terbaru. Ini untuk
                    memudahkan komunikasi antara KBRI Stockholm dan warga negara Indonesia yang berdomisili di Swedia
                    dan Latvia.

                </p>

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
                <p style="margin: 0px"> Jadwal Pelayanan
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
