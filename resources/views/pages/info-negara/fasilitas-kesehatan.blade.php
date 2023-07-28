@extends('layouts.info-negara')
@section('sub-judul', 'Fasilitas Kesehatan')
@section('sub-info-negara')

<h2 class=" text-center">@yield('sub-judul')</h2>
<div class="card my-3  border-0" style="background-color: #E7F4FF">
    <div class="card-body text-white">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <a href="{{route('fasilitas-kesehatan-detail')}}" style="text-decoration: none;">
                    <div class="card" style="background-color: black;border-radius:26px">
                        <img src={{asset('storage/images/fasilitas-kesehatan/st-thomas1.png')}} class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">St Thomas' Hospital</h5>
                            <div class="mt-1 d-flex justify-content-between align-items-center">
                                <div class="small-ratings">
                                    <i class="fa fa-star rating-color"></i>
                                    <i class="fa fa-star rating-color"></i>
                                    <i class="fa fa-star rating-color"></i>
                                    <i class="fa fa-star rating-color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/st-thomas.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ST Bartholomew's Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/university-collage.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">University College Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/st-thomas.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">University College Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/st-bartholomew.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">University College Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/st-thomas.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">University College Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/st-thomas.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">University College Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/st-thomas.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">University College Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/st-thomas.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">University College Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/fasilitas-kesehatan/st-thomas.png')}} class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">University College Hospital</h5>
                        <div class="mt-1 d-flex justify-content-between align-items-center">
                            <div class="small-ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection