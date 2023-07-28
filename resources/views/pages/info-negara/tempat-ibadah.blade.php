@extends('layouts.info-negara')
@section('sub-judul', 'Tempat Ibadah')
@section('sub-info-negara')

<h2 class=" text-center">@yield('sub-judul')</h2>
<div class="card my-3  border-0" style="background-color: #E7F4FF">
    <div class="card-body text-white">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <a href="{{route('tempat-ibadah-detail')}}" style="text-decoration: none;">
                    <div class="card" style="background-color: black;border-radius:26px">
                        <img src={{asset('storage/images/tempat-ibadah/st-martin.png')}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">st martin-in-the-fields</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/st-paul.png')}} class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">st paul's, covent garden</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/st-james.png')}} class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">St James's Piccadilly</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/st-mary.png')}} class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mayfair Islamic Centre</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/baitul-aziz.png')}} class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Baitul Aziz Islamic Cultural</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/london-central.png')}} class=" card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">London Central Mosque</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/st-mary.png')}} class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">St Mary-le-Bow</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/st-james.png')}} class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">St James' Roman Catholic</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/st-james.png')}} class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">St James' Roman Catholic</h5>
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
                    <img src={{asset('storage/images/tempat-ibadah/st-james.png')}} class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">St James' Roman Catholic</h5>
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