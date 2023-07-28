@extends('layouts.info-negara')
@section('sub-judul', 'Tempat Wisata')
@section('sub-info-negara')

<h2 class=" text-center">@yield('sub-judul')</h2>
<div class="card my-3  border-0" style="background-color: #E7F4FF">
    <div class="card-body text-white">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <a href="{{route('tempat-wisata-detail')}}" style="text-decoration: none;">
                    <div class="card" style="background-color: black; border-radius:26px">
                        <img src={{asset('storage/images/tempat-wisata/penguin.png')}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Penguin Beach</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/grant.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Grant Museum of Zoology</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/museum.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Museum of London</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/bettersea.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Battersea Park Children's Zoo</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/penguin.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Penguin Beach</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/amorino.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Amorino</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/nordic.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nordic Bakery</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/costa-coffee.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Costa Coffee</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/bakery.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">The Hummingbird Bakery</h5>
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
                <div class="card" style="background-color: black; border-radius:26px">
                    <img src={{asset('storage/images/tempat-wisata/amorino.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Amorino</h5>
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
