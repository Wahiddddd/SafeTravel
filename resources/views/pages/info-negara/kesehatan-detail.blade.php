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
            <h3 class="my-2  text-center"><b>St Thomas Hospital</b></h3>
            <div class="card pt-4 border-0 mt-3" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
                <div class="m-5">
                    <div class="card" style="border-radius: 30px">
                        <img src={{asset('storage/images/hospital.png')}} class="card-img">
                    </div>

                    <style>
                        /* Gaya tambahan untuk iframe */
                        .map-iframe {
                          border-radius: 30px;
                          overflow: hidden;
                        }
                      </style>

                      <div class="card mt-3" style="border-radius: 30px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.7662313645233!2d-0.12146082423567081!3d51.49915721130649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c0dd16877b%3A0x43c4966ccbc12d1!2sSt%20Thomas&#39;%20Hospital!5e0!3m2!1sid!2sid!4v1689956828440!5m2!1sid!2sid"
                          style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" class="map-iframe">
                        </iframe>
                      </div>

                    <div class="deskripsi mt-5" style="font-weight: bold;">
                        <span> St Thomas' Hospital</span><br>
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
                        <p>Rumah Sakit, Kesehatan, Tempat Menarik, BangunanNomor Telepon:+44 20 7188 7188</p>
                        <p> Website:https://www.guysandstthomas.nhs.uk</p>
                    </div>
                </div>
            </div>






        </div>
    </div>

</div>

@endsection
