@extends('front.layouts.app')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{asset('front/img/page-banner-1.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <!-- <h2>Cheap Things to Do in Dubai</h2> -->
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cheap Things to Do in Dubai</li>
                        </ol>
                    </nav> -->
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<section id="service1" class="pt-120 gray-bg">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center">   {{$title}}   </h2>
        </div>
    </div>
</div>
</section>

    {{-- <div style="text-align: center"> <h2>   {{$title}}   </h2></div> --}}



<div class="hidden-xs wave__footer">
        <div class="wave__ft1"></div>
</div>
@endsection
