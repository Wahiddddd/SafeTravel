@extends('layouts.master')

@section('title', 'Page 1')
@section('content')

<div id="beranda">
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade bottom-element" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators mb-5">
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <div class="overlay">
                <div class="caption-text">
                    <h3 class="text-white"><strong>Daftarkan Perjalanan Luar Negeri Anda</strong></h3>
                </div>
            </div>
            <!-- Single item -->
            <div class="carousel-item active">
                <img src={{asset('storage/images/dashboard.png')}} class="d-block w-100" alt="Sunset Over the City" />

            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src={{asset('storage/images/tembok-cina.png')}} class="d-block w-100" alt="Canyon at Nigh" />

            </div>
            <div class="carousel-item">
                <img src={{asset('storage/images/liberty.png')}} class="d-block w-100" alt="Canyon at Nigh" />

            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="card border-0" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
        <div class="text-center my-4 carousel-multi-image">
            <h2 style="font-weight:bolder;margin-bottom:20px">Himbauan Penting</h2>
            <hr style="width: 20%; margin: 0 auto; border-width: 2px;padding:10px;border-color: black;">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-sm-2">
                                <div class="card shadow-0 border-0 text-start fw-bold p-4">
                                    <img src={{asset('storage/images/himbauan-penting/himbauan1.png')}}
                                        class="card-img-top" alt="..." style="border-radius: 20px">
                                    <a class="card-block stretched-link text-decoration-none"
                                        style="text-decoration: none; color: inherit;"
                                        href="{{route('himbauan-detail')}}">
                                        <p class="card-text mt-2" style="margin-bottom: 0">8 Mei 2023</p>
                                        <p>Imbauan Menjelang Pemilu Turki</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-2">
                                <div class="card shadow-0 border-0 text-start fw-bold p-4">
                                    <img src={{asset('storage/images/himbauan-penting/himbauan2.png')}}
                                        class="card-img-top" alt="...">
                                    <a class="card-block stretched-link text-decoration-none"
                                        style="text-decoration: none; color: inherit;"
                                        href="{{route('himbauan-detail')}}">
                                        <p class="card-text mt-2" style="margin-bottom: 0">8 Mei 2023</p>
                                        <p>Imbauan Menjelang Pemilu Turki</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-2">
                                <div class="card shadow-0 border-0 text-start fw-bold p-4">
                                    <img src={{asset('storage/images/himbauan-penting/himbauan3.png')}}
                                        class="card-img-top" alt="...">
                                    <a class="card-block stretched-link text-decoration-none"
                                        style="text-decoration: none; color: inherit;"
                                        href="{{route('himbauan-detail')}}">
                                        <p class="card-text mt-2" style="margin-bottom: 0">8 Mei 2023</p>
                                        <p>Imbauan Menjelang Pemilu Turki</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-2">
                                <div class="card shadow-0 border-0 text-start fw-bold p-4">
                                    <img src={{asset('storage/images/himbauan-penting/himbauan4.png')}}
                                        class="card-img-top" alt="...">
                                    <a class="card-block stretched-link text-decoration-none"
                                        style="text-decoration: none; color: inherit;"
                                        href="{{route('himbauan-detail')}}">
                                        <p class="card-text mt-2" style="margin-bottom: 0">8 Mei 2023</p>
                                        <p>Imbauan Menjelang Pemilu Turki</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-2">
                                <div class="card shadow-0 border-0 text-start fw-bold p-4">
                                    <img src={{asset('storage/images/himbauan-penting/himbauan5.png')}}
                                        class="card-img-top" alt="...">
                                    <a class="card-block stretched-link text-decoration-none"
                                        style="text-decoration: none; color: inherit;"
                                        href="{{route('himbauan-detail')}}">
                                        <p class="card-text mt-2" style="margin-bottom: 0">8 Mei 2023</p>
                                        <p>Imbauan Menjelang Pemilu Turki</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-2">
                                <div class="card shadow-0 border-0 text-start fw-bold p-4">
                                    <img src={{asset('storage/images/himbauan-penting/himbauan6.png')}}
                                        class="card-img-top" alt="...">
                                    <a class="card-block stretched-link text-decoration-none"
                                        style="text-decoration: none; color: inherit;"
                                        href="{{route('himbauan-detail')}}">
                                        <p class="card-text mt-2" style="margin-bottom: 0">8 Mei 2023</p>
                                        <p>Imbauan Menjelang Pemilu Turki</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-2">
                                <div class="card shadow-0 border-0 text-start fw-bold p-4">
                                    <img src={{asset('storage/images/himbauan-penting/himbauan7.png')}}
                                        class="card-img-top" alt="...">
                                    <a class="card-block stretched-link text-decoration-none"
                                        style="text-decoration: none; color: inherit;"
                                        href="{{route('himbauan-detail')}}">
                                        <p class="card-text mt-2" style="margin-bottom: 0">8 Mei 2023</p>
                                        <p>Imbauan Menjelang Pemilu Turki</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card border-0" style="border-radius: 35px;background-color:#2071B8">
            <div class="text-center text-white py-5">
                <h4 style="font-weight: bolder; margin-bottom: 20px">Fun Facts</h4>
                <p style="width: 300px; margin: 0 auto;">
                    Mengetahui Fakta unik dari negara yang mungkin Kamu tidak ketahui
                </p>
            </div>
            <div class="container text-center my-4 carousel-multi-image">
                <div class="row mx-auto my-auto justify-content-center">
                    <div class="col-md-3">
                        <div class="card shadow-0 border-0 text-start fw-bold p-2 mx-3"
                            style="background-color: transparent; ">
                            <img src={{asset('storage/images/fun-facts/afganistan.png')}} class="card-img-top"
                                alt="...">
                            <a class="card-block stretched-link text-decoration-none"
                                style="text-decoration: none; color: inherit;" href="{{route('fun-fact-detail')}}">

                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-0 border-0 text-start fw-bold p-2 mx-3"
                            style="background-color: transparent">
                            <img src={{asset('storage/images/fun-facts/afganistan.png')}} class="card-img-top"
                                alt="...">
                            <a class="card-block stretched-link text-decoration-none"
                                style="text-decoration: none; color: inherit;" href="{{route('fun-fact-detail')}}">

                            </a>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card shadow-0 border-0 text-start fw-bold p-2 mx-3"
                            style="background-color: transparent">
                            <img src={{asset('storage/images/fun-facts/afganistan.png')}} class="card-img-top"
                                alt="...">
                            <a class="card-block stretched-link text-decoration-none"
                                style="text-decoration: none; color: inherit;" href="{{route('fun-fact-detail')}}">

                            </a>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card shadow-0 border-0 text-start fw-bold p-2 mx-3"
                            style="background-color: transparent">
                            <img src={{asset('storage/images/fun-facts/afganistan.png')}} class="card-img-top"
                                alt="...">
                            <a class="card-block stretched-link text-decoration-none"
                                style="text-decoration: none; color: inherit;" href="{{route('himbauan-detail')}}">

                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center text-white py-5">
                    <a class="card-block" href="{{route('fun-fact')}}" style="color:white; text-decoration: underline;">
                      <h6 class="fw-bold">Lihat Selengkapnya</h6>
                    </a>
                </div>
            </div>

        </div>


        <!-- Carousel wrapper -->
        <div class="container-fluid">
            <div class="row py-5 gx-5">
                <div class="col-md-4 text-end ">
                    {{-- <img src="https://img2.lokercepat.id/files/2023-03-17/telu-doeloer-68.png" alt=""
                        width="100px">
                    --}}
                    <img src={{asset('storage/images/app-review.png')}} alt="" width="300px" class="ml-5">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="card border-0" style="background-color: #E7F4FF;color :black">
                        <div class="card-body text-center">
                            <h3>Download Aplikasi Safe Travel</h3>
                            <div class="detail-app">
                                <p class="text-start">Download dan install Safe Travel di Android atau iPhone untuk
                                    dapat
                                    mengakses fitur lengkap dan manfaat Iainnya:</p>
                                <ul class="text-start">
                                    <li>Mengakses tombol darurat</li>
                                    <li>Mendapatkan poin, level, dan badge</li>
                                    <li>Fitur-fitur menarik Iainnya</li>
                                </ul>
                            </div>
                            <div class="image-row">
                                <img src={{asset('storage/images/play-store.png')}} alt="" width="100px"
                                    style="margin-right: 10px;">
                                <img src={{asset('storage/images/app-store.png')}} alt="" width="100px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>


</div>




@endsection
