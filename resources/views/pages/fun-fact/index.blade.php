@extends('layouts.master')

@section('title', 'Fun Facts')
@section('content')

<h2 class="text-center my-5 ">
    <strong>Fun Facts</strong>
</h2>
<div id="funfact" class="card border-0"
    style="border-top-left-radius: 35px; border-top-right-radius: 35px;background-color: #E7F4FF">
    <div class="center container datatable-card">
        <div class="col-md-5 mx-auto search-box my-5">
            <div class="large fw-light">Cari Negara</div>
            <div class="input-group rounded">
                <input type="search" class="form-control rounded"
                    placeholder="Masukan nama negara yang ingin kamu cari informasinya" aria-label="Search"
                    aria-describedby="search-addon" id="searchInput" />
                <span class="input-group-append">
                    <span class="input-group-text border-0">
                        <i class="fas fa-search"></i>
                    </span>
                </span>

            </div>
        </div>
        <div class="datatable justify-content-center" id="datatable">
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color: transparent;">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">Afrika selatan</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afganistan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">Afganistan</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">afrika selatan</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">afrika selatan</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">afrika selatan</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">afrika selatan</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">afrika selatan</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">afrika selatan</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                        <span style="display: none;">afrika selatan</span>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow-none mx-4 my-4" style="max-width: 200px;background-color:transparent">
                <a href="{{route('fun-fact-detail')}}">
                    <div class="row g-0">
                        <div class="col">
                            <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                                class="img-fluid rounded-start" alt="...">
                            <span style="display: none;">afrika selatan</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
