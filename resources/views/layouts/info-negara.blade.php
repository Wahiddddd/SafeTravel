@extends('layouts.master')
@section('title', 'Info Negara')
@section('content')

<div class="konten-info-umum">
    <div class="country-detail" style="background-image: url('{{ asset('storage/images/inggris-raya.png') }}');">
        <div class="country-name text-center mb-9 pt-5">
            <h1 class="pt-5 text-white"><b>Inggris Raya</b></h1>
        </div>

        <div class="card pt-4" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
            <div class="row p-3">

                <style>
                    /* Gaya untuk card */
                    .custom-card {
                      border-radius: 10px;
                      font-size: 11px;
                      font-weight: bold;
                      background-color: #2071B8;
                      transition: transform 0.2s ease; /* Tambahkan efek transisi saat card ditekan */
                    }

                    /* Gaya untuk card saat ditekan */
                    .custom-card-clicked {
                      transform: scale(0.95); /* Mengurangi ukuran card saat ditekan */
                      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2); /* Tambahkan efek shadow saat ditekan */
                    }
                  </style>

                    <style>

                        .custom-card a:hover{
                        background-color: #0C7FE3;
                        }

                    </style>

                  <div class="card-group card-country-list justify-content-center text-center p-2"
                       style="background-color: #2071B8; border-radius: 30px;">
                      <div class="card card-text-center border-0 p-1 custom-card">
                          <a class="card-block stretched-link text-decoration-none text-white"
                             href="{{route('informasi-umum')}}">
                              <img src={{asset('storage/images/icons/i.png')}} alt="" width="20px">
                              <br>
                              <span class="card-title pt-2">Informasi Umum</span>
                          </a>
                      </div>
                      <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('persyaratan')}}">
                            <img src={{asset('storage/images/icons/visa.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Persyaratan Masuk/Keluar</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('keselamatan-keamanan')}}">
                            <img src={{asset('storage/images/icons/shield.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Keselamatan dan Keamanan</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('hukum-kebiasaan')}}">
                            <img src={{asset('storage/images/icons/timbangan.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Hukum dan Kebiasaan Setempat</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('mata-uang')}}">
                            <img src={{asset('storage/images/icons/uang.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Mata Uang dan Penukaran</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('asuransi-kesehatan')}}">
                            <img src={{asset('storage/images/icons/asuransi.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Asuransi dan Kesehatan</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('telekomunikasi')}}">
                            <img src={{asset('storage/images/icons/telepon.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Telekomunikasi</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('tempat-ibadah')}}">
                            <img src={{asset('storage/images/icons/ibadah.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Tempat Ibadah</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('fasilitas-kesehatan')}}">
                            <img src={{asset('storage/images/icons/hospital.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Fasilitas Kesehatan</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('kuliner')}}">
                            <img src={{asset('storage/images/icons/kuliner.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Kuliner</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 p-1 custom-card">
                        <a class="card-block stretched-link text-decoration-none text-white"
                           href="{{route('tempat-wisata')}}">
                            <img src={{asset('storage/images/icons/koper.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Tempat Wisata</span>
                        </a>
                    </div>
                      <!-- Tambahkan card lainnya sesuai kebutuhan -->
                  </div>




                  <script>
                    // Menggunakan JavaScript untuk menambahkan dan menghapus class pada card ketika diklik
                    const cards = document.querySelectorAll(".custom-card");

                    cards.forEach((card) => {
                      card.addEventListener("click", function () {
                        // Menghapus class "custom-card-clicked" dari semua card terlebih dahulu
                        cards.forEach((c) => {
                          c.classList.remove("custom-card-clicked");
                        });

                        // Menambahkan class "custom-card-clicked" pada card yang diklik
                        card.classList.add("custom-card-clicked");
                      });
                    });
                  </script>
                <div style="background-color: #2071B8;border-radius: 30px">



                </div>
            </div>
            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>

    </div>

</div>

@endsection
