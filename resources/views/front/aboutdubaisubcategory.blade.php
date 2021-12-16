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
            <h2>   {{$category_title}}   </h2>
        </div>
    </div>
</div>
</section>

@foreach ($subcategory as $subcategory_list)
    <section id="service1" class="pt-50 pb-50 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3> {{$subcategory_list->title}} </h3>
                            <img src="{{asset('subcategory_image/'.$subcategory_list->subcategory_image)}}" alt="Event">
                                {!! $subcategory_list->description !!}
                            {{-- <p>
                                Roaring horns, shops draped in bold, decorative lights, and people haggling at shops is a common scenario that you will witness upon arrival at Bur Dubai’s Meena Bazaar. This is a holy grail of traditional shopping in Dubai where you can skim through hundreds of items and negotiate as much as you can. The place gets charming by the evenings as shops, lights, the fragrance from perfume souks, food, and chocolates, all scream for your attention. From Iranian spice shops, haute-couture boutiques, lively eateries to exotic chocolates, you will find this to be a shopper’s paradise. You can shop and eat all within your budget at this bustling place in Dubai, which was originally known as Cosmos Lane.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach


<div class="hidden-xs wave__footer">
        <div class="wave__ft1"></div>
</div>
@endsection
