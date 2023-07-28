@extends('layouts.master')

@section('title', 'Fun Facts')
@section('content')

<h2 class="text-center my-5 ">
    <strong>Fun Facts</strong>
</h2>
<div id="funfact" class="card border-0"
    style="border-top-left-radius: 35px; border-top-right-radius: 35px;background-color: #E7F4FF">
    <div class="center container p-5">
        <div class="card border-0 shadow-none m-auto" style="max-width: 500px;background-color: transparent;">
            <div class="row g-0">
                <div class="col">
                    <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}} class="img-fluid rounded-start"
                        alt="...">
                    <span style="display: none;">Afrika selatan</span>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
