@extends('layouts.master')

@section('title', 'Himbauan')
@section('content')



<div class="container">
    <div class="row text-center p-5">
        <h2 class="fw-bold">
            Terjadi kerusuhan di beberapa
            titik di kota Paris
        </h2>
    </div>
    <div class="text-center">

        <img src={{asset('storage/images/himbauan.png')}} class="img-fluid" alt="Full Width Image" width="70%">
    </div>
    <div class="card my-5 border-0" style="border-radius: 30px;background-color: #E7F4FF">
        <div class="card-body">
            <p>
                Pada tgl 23 Maret 2023 siang hingga malam hari waktu Paris terjadi kerusuhan di beberapa titik di kota
                Paris. Kerusuhan tersebut berawal dari aksi demonstrasi menentang reformasi aturan pensiun yang telah
                terjadi sejak awal tahun 2023 hingga mengalami eskalasi dalam beberapa hari terakhir.
            </p>
            <p>
                KBRI Paris terus memantau perkembangan situasi dan menjalin komunikasi dengan para WNI, terutama yang
                berada di sekitar wilayah terjadinya demonstrasi. Berdasarkan hasil pemantauan, hingga saat ini tidak
                ada WNI yang terdampak langsung akibat aksi demonstrasi yang terjadi.
            </p>
            <p>
                KBRI Paris mengimbau para WNI agar:
            </p>
            <ol>
                <li>Dapat menghindari kerumunan massa;</li>
                <li>Tidak ikut serta dalam kegiatan demonstrasi;</li>
                <li>Memonitor situasi dan mengikuti arahan keamaman yang diberkan otoritas setempat;</li>
                <li>Segera menghubungi Hotline KBRI Paris jika terdapat situasi darurat;</li>
                <li>Memanfaatkan aplikasi Safe Travel Kemlu untuk dapatkan informasi serta menghubungi KBRI Paris.</li>
            </ol>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-4">
        <div class="card border-0 p-3" style="border-radius: 30px; display: inline-block;background-color: #E7F4FF">
            <div class="text-center mb-3">
                <p class="fw-bold">share on :</p>
                <div class="social-icons d-flex justify-content-center">
                    <a href="#">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
                <div class="image-row mt-2">
                    <img src={{asset('storage/images/play-store.png')}} alt="" width="100px"
                        style="margin-right: 10px;">
                    <img src={{asset('storage/images/app-store.png')}} alt="" width="100px">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection