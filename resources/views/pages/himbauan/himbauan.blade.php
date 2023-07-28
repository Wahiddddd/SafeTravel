@extends('layouts.master')

@section('title', 'Himbauan')
@section('content')



<div class="container">
    .
    {{-- <div class="alert alert-secondary my-lg-3 text-center" role="alert">
        <span style="font-size: larger; font-weight: bold;">Himbauan</span>
    </div> --}}
    <h2 class="text-center my-5 ">
        Himbauan
    </h2>
    <style>
        /* Gaya untuk card */
        .custom-card {
          background-color: #E7F4FF;
          max-width: 100%;
          width: 2000px; /* Sesuaikan lebar card sesuai kebutuhan */
          border-radius: 15px; /* Untuk membulatkan sudut card */
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek drop shadow */
          transition: box-shadow 0.3s ease; /* Transisi saat hover */
        }

        /* Gaya untuk gambar */
        .custom-image {
          width: 300px; /* Sesuaikan lebar gambar sesuai kebutuhan */
          height: 150px; /* Sesuaikan tinggi gambar sesuai kebutuhan */
          object-fit: cover; /* Untuk memastikan gambar tidak terdistorsi */
          border-radius: 15px 0 0 15px; /* Membulatkan sudut kiri atas dan kiri bawah gambar */
        }

        /* Efek drop shadow selalu nyala */
        .custom-card::after {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          z-index: -1;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek drop shadow */
          border-radius: 15px; /* Untuk membulatkan sudut card */
        }
      </style>

      <div class="col">
        <div class="card mb-3 border-0 custom-card">
          <div class="row g-5">
            <div class="col-md-2">
              <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start custom-image" alt="...">
            </div>
            <div class="col-md-10 d-flex align-items-center">
              <div class="card-body">
                <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa titik di kota Paris</h5>
                <p class="card-text">23 Maret 2023</p>
                <div class="position-absolute bottom-0 end-0">
                  <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                    style="border-radius: 15px;background-color:#2071B8">
                    <span class="text-capitalize">Lihat Selengkapnya</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col">
            <div class="card mb-3 border-0 custom-card">
              <div class="row g-5">
                <div class="col-md-2">
                  <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start custom-image" alt="...">
                </div>
                <div class="col-md-10 d-flex align-items-center">
                  <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa titik di kota Paris</h5>
                    <p class="card-text">23 Maret 2023</p>
                    <div class="position-absolute bottom-0 end-0">
                      <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                        style="border-radius: 15px;background-color:#2071B8">
                        <span class="text-capitalize">Lihat Selengkapnya</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 border-0 custom-card">
              <div class="row g-5">
                <div class="col-md-2">
                  <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start custom-image" alt="...">
                </div>
                <div class="col-md-10 d-flex align-items-center">
                  <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa titik di kota Paris</h5>
                    <p class="card-text">23 Maret 2023</p>
                    <div class="position-absolute bottom-0 end-0">
                      <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                        style="border-radius: 15px;background-color:#2071B8">
                        <span class="text-capitalize">Lihat Selengkapnya</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 border-0 custom-card">
              <div class="row g-5">
                <div class="col-md-2">
                  <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start custom-image" alt="...">
                </div>
                <div class="col-md-10 d-flex align-items-center">
                  <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa titik di kota Paris</h5>
                    <p class="card-text">23 Maret 2023</p>
                    <div class="position-absolute bottom-0 end-0">
                      <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                        style="border-radius: 15px;background-color:#2071B8">
                        <span class="text-capitalize">Lihat Selengkapnya</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 border-0 custom-card">
              <div class="row g-5">
                <div class="col-md-2">
                  <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start custom-image" alt="...">
                </div>
                <div class="col-md-10 d-flex align-items-center">
                  <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa titik di kota Paris</h5>
                    <p class="card-text">23 Maret 2023</p>
                    <div class="position-absolute bottom-0 end-0">
                      <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                        style="border-radius: 15px;background-color:#2071B8">
                        <span class="text-capitalize">Lihat Selengkapnya</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

</div>


@endsection
