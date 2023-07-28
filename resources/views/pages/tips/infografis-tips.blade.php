@extends('layouts.master')

@section('title', 'Infografis Asuransi Perjalanan')
@section('content')
<div class="container">
    <h2 class="text-center my-5 ">
        <strong>Fun Fact</strong>
    </h2>
    <div id="carouselExampleControls" class="carousel slide text-center carousel-dark my-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src={{asset('storage/images/infogarafis-tips.png')}} alt="" class="img-fluid" width="80%">
            </div>
            <div class="carousel-item">
                <img src={{asset('storage/images/tki.png')}} alt="" class="img-fluid" width="80%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



</div>
@endsection