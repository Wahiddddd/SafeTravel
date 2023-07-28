@extends('layouts.info-negara')
@section('sub-judul', 'Kuliner')
@section('sub-info-negara')

<h2 class=" text-center">@yield('sub-judul')</h2>
<div class="card my-3  border-0" style="background-color: #E7F4FF">
    <div class="card-body text-white">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <a href="{{route('kuliner-detail')}}" style="text-decoration: none;">
                    <div class="card" style="background-color: black;border-radius:26px">
                        <img src={{asset('storage/images/kuliner/costa-coffee.png')}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Costa Coffee</h5>
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
                    <img src={{asset('storage/images/kuliner/amorino.png')}} class="card-img-top" alt="...">
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
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/kuliner/rainforest-cafe.png')}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rainforest Cafe</h5>
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
                    <img src={{asset('storage/images/kuliner/nordic-bakery.png')}} class="card-img-top" alt="...">
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
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/kuliner/hummingbird.png')}} class="card-img-top" alt="...">
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
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/kuliner/costa-coffee.png')}} class="card-img-top" alt="...">
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
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/kuliner/costa-coffee.png')}} class="card-img-top" alt="...">
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
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/kuliner/costa-coffee.png')}} class="card-img-top" alt="...">
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
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/kuliner/costa-coffee.png')}} class="card-img-top" alt="...">
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
                <div class="card" style="background-color: black;border-radius:26px">
                    <img src={{asset('storage/images/kuliner/costa-coffee.png')}} class="card-img-top" alt="...">
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
        </div>
    </div>
</div>

@endsection