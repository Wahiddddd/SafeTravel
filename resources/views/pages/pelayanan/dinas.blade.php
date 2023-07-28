@extends('layouts.master')

@section('title', 'Pelayanan Dinas')
@section('content')
<div class="container">
    <h2 class="text-center my-5 ">
        Pelayanan Dinas
    </h2>
    <div class="px-3">
        <img src={{asset('storage/images/gedung-pancasila.png')}} alt="" class="img-fluid">
    </div>
    <div class="card border-0 my-5" style="border-radius: 20px;background-color: #E7F4FF">
        <div class="card-body">
            <p class="text-start mb-0">
                Paspor Diplomatik dan Paspor Dinas <br>
                Pelayanan dilakukan di loket pelayanan Direktorat Konsuler, Kementerian Luar Negeri (Jl. Taman Pejambon
                No.
                06, Jakarta Pusat) <br>
                Jam pelayanan : Senin s/d Jumat (09.00 – 16.00 WIB)
            </p>
        </div>
    </div>
    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item" style="background-color: #E7F4FF">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne" style="background-color: #2071B8">
                    <span class="text-white"> PELAYANAN PASPOR BARU/PENGGANTIAN PASPOR</span>

                </button>
            </h2>

            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <p>
                        Pelayanan permohonan paspor baru dilakukan dalam 3 hari kerja.

                    </p>
                    <li>
                        Persyaratan
                        <ul>
                            <li>Melampirkan paspor lama (khusus penggantian paspor)*</li>
                            <li>Asli Surat Persetujuan dari Kemensetneg (bagi pemohon PNS)</li>
                            <li>Asli Surat Perintah (khusus TNI/POLRI)</li>
                            <li>Asli Surat Izin Fraksi/Komisi dan Surat dari Kesekjenan (khusus anggota DPR, DPD, MPR)
                            </li>
                            <li>Salinan Surat Keputusan Menteri Luar Negeri (khusus untuk penempatan di Perwakilan RI di
                                luar
                                negeri)</li>
                            <li>Asli Surat Pengantar dari instansi terkait kepada Direktorat Konsuler</li>
                            <li>Mengisi formulir dengan lengkap, teliti dan sebenar-benarnya.** Formulir dapat
                                diunduh.....
                                (link)</li>
                            <li>Fotokopi Kartu Pegawai/Kartu Tanda Anggota (khusus TNI/POLRI)/Surat Keputusan
                                Pengangkatan
                                Sebagai
                                Pegawai Negeri Sipil dilegalisir cap basah</li>
                            <li>
                                Fotokopi Kartu Tanda Penduduk (KTP)
                            </li>
                            <li> Pas foto terbaru ukuran 4x6 latar belakang putih sebanyak 3 lembar****) Dalam hal
                                penggantian paspor
                                disebabkan paspor hilang, diwajibkan menyertakan surat keterangan kehilangan dari
                                kepolisian.**)
                                Ketentuan terkait nama dijelaskan lebih lanjut di bawah ini***) Ketentuan terkait foto
                                dijelaskan
                                lebih lanjut di bawah ini</li>

                        </ul>
                    </li>

                </div>
            </div>
        </div>
        <div class="accordion-item" style="background-color: #E7F4FF">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo" style="background-color: #2071B8">
                    <span class="text-white">PELAYANAN PASPOR LAMA</span>

                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">

                    Pelayanan permohonan paspor lama dilakukan dalam 2 hari kerja.
                    <li> Persyaratan Pengajuan Permohonan Paspor Lama </li>

                    <ul>
                        <li>
                            Melampirkan paspor
                        </li>
                        <li>
                            Asli Surat Persetujuan dari Kemensetneg (bagi pemohon PNS)
                        </li>
                        <li>
                            Asli Surat Perintah (khusus TNI/POLRI)
                        </li>
                        <li>
                            Asli Surat Izin Fraksi/Komisi dan Surat dari Kesekjenan (khusus anggota DPR, DPD, MPR)
                        </li>
                        <li>
                            Asli Surat Pengantar dari instansi terkait
                        </li>
                        <li>
                            Mengisi formulir dengan lengkap, teliti dan sebenar-benarnya. Formulir dapat diunduh.....
                            (Formulir 1 dan Formulir 2?)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item" style="background-color: #E7F4FF">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree" style="background-color: #2071B8">

                    <span class="text-white">KETENTUAN LAINNYA</span>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <li>
                        Ketentuan Terkait Penulisan Nama
                    </li>
                    <ul>
                        <li>
                            Penulisan nama pada paspor didasarkan pada dokumen negara yang sah (KTP/Karpeg/Akte
                            Kelahiran)
                            Karakter maksimal untuk nama adalah 38 karakter
                        </li>
                        <li>
                            Tidak dibenarkan menulis nama dengan singkatan
                        </li>
                        <li>
                            Untuk nama yang terdapat apostrof (') atau tanda baca lainnya, penulisan nama pada paspor
                            dilakukan dengan menghilangkan tanda baca tersebut.
                        </li>
                        <li>
                            Tidak dibenarkan menulis gelar/jabatan
                        </li>
                    </ul>
                    <li>
                        Ketentuan Terkait Foto
                    </li>
                    <ul>
                        <li>
                            Foto terbaru dalam 6 bulan terakhir
                        </li>
                        <li>
                            Kualitas foto baik (foto studio)
                        </li>
                        <li>
                            Foto berlatar belakang putih
                        </li>
                        <li>
                            Foto tidak boleh sama dengan paspor lamanya
                        </li>
                        <li>
                            Foto tidak boleh terlihat gigi
                        </li>
                        <li>
                            Tidak boleh memakai kacamata
                        </li>
                        <li>
                            Untuk tampilan
                        </li>
                        <li>
                            Pria
                            <ol>
                                <li>
                                    Memakai Pakaian Sipil Lengkap (kemeja, jas, dasi)
                                </li>
                                <li>

                                    Tidak diperkenankan untuk memakai topi/peci.
                                </li>
                            </ol>
                        </li>
                        <li>
                            Wanita
                            <ol>
                                <li>
                                    Untuk yang berjilbab (jilbab menutupi leher dan telinga, jilbab berwarna tidak
                                    putih)
                                </li>
                                <li>
                                    Untuk yang tidak berjilbab telinga harus terlihat.
                                </li>
                                <li>
                                    Berpakaian rapi dan sopan
                                </li>
                            </ol>
                        </li>
                    </ul>
                    <li>Ketentuan Terkait Rekomendasi Visa</li>
                    <ul>
                        <li>Khusus permohonan rekomendasi visa ke Amerika Serikat, diwajibkan untuk menjabarkan dalam
                            bahasa
                            inggris jabatan sekarang, tempat tujuan (kota), deskripsi kedinasan, tanggal keberangkatan,
                            lama
                            bertugas, serta melampirkan fotokopi surat undangan resmi.</li>
                    </ul>


                </div>
            </div>
        </div>
    </div>


</div>
@endsection
