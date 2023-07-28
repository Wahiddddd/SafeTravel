@extends('layouts.master')
@section('title', 'Info Negara')
@section('content')

<div class="konten-info-umum">
    <div class="country-detail" style="background-image: url('{{ asset('storage/images/inggris-raya.png') }}');">
        <div class="country-name text-center mb-9 pt-5">
            <h1 class="pt-5 text-white"><b>Inggris Raya</b></h1>
        </div>

        <div class="card pt-4 border-0"
            style="border-top-left-radius: 35px; border-top-right-radius: 35px;background-color: #E7F4FF">
            <h3 class="my-2  text-center"><b>Penguin Beach</b></h3>
            <div class="card pt-4 border-0 mt-3" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
                <div class="m-5">
                    <div class="card" style="border-radius: 30px">
                        <img src={{asset('storage/images/wisata-detail.png')}} class="card-img">
                    </div>
                    <div class="card mt-3" style="border-radius: 30px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.7855965578956!2d-0.15514772423306003!3d51.53549220865191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761add55707e79%3A0x94c5ecdd322e4d05!2sPenguin%20Beach!5e0!3m2!1sid!2sid!4v1689957288349!5m2!1sid!2sid"
                          style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" class="map-iframe">
                        </iframe>
                      </div>

                    <div class="deskripsi mt-5" style="font-weight: bold;">
                        <span> Churchill War Rooms</span><br>
                        <p><span>4.3</span>
                            <span>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </p>

                        <span>Jenis Tempat:</span><br>
                        <p>Kebun Binatang, Tourist attraction, Tempat Menarik, Bangunan</p>
                        <span>Nomor Telepon:</span><br>
                        <p>+44 20 7449 6200</p>
                        <span>Website:</span><br>
                        <p>https://zsl.org/zsl-london-zoo/exhibits/penguin-beach</p>

                    </div>
                </div>
            </div>






        </div>
    </div>

</div>

@endsection
