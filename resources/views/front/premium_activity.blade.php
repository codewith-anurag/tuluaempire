@extends('front.layouts.app')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{asset('front/img/page-banner-1.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <!-- <h2> Premium Activities </h2>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Desert safari</li>
                           </ol>
                        </nav> -->
                </div>
                <!-- page banner cont -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
@foreach ($premium_activity as $premium_activity_list)
<section id="{{$premium_activity_list->premiumactivity_slug}}" class="pt-120 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{asset('premiumactivity_image/'.$premium_activity_list->image)}}" alt="Course">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>{{$premium_activity_list->premiumactivity_title}}</h4>
                                </a>
                                <div class="course-teacher">
                                    {!! $premium_activity_list->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
@endforeach
{{-- <section id="gems_2" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>La-Perle Show</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify">La Perle was created and produced by world renowned Artistic Director, Franco Dragone. Internationally recognized for reinventing the genre of theatre and changing the face of live entertainment in Las Vegas. Some of his most celebrated shows in the last decade include Celine Dion- A New Day, Le Rêve (Las Vegas) and The House of Dancing Water (Macau).</p>
                                    <!-- <h4>Inclusions</h4>
                                        <ul>
                                           <li>- &nbsp; Dune Bashing,</li>
                                           <li>- &nbsp; Camel riding,</li>
                                           <li>- &nbsp; Refreshments,</li>
                                           <li>- &nbsp; BBQ dinner,</li>
                                           <li>- &nbsp; Live Tanura show,</li>
                                           <li>- &nbsp; Live Fire show,</li>
                                           <li>- &nbsp; Live Arabic belly dance,</li>
                                           <li>- &nbsp; Free sheesha,</li>
                                           <li>- &nbsp; Hot breakfast,</li>
                                           <li>- &nbsp; Desert wildlife on a morning drive,</li>
                                           <li>- &nbsp; Overnight camp</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/course/t/t-50.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section> --}}
{{-- <section id="gems_3" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/course/t/t-51.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>Helicopter Ride</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify">Make the most of your time in Dubai with a shared helicopter tour that lets you view it from an angle most never experience. Fly around landmarks such as the Burj Khalifa, see beaches and waterways, and snap impressive bird’s-eye photos. With commentary from your pilot, the tour provides a great overview of the city for first-time visitors.</p>
                                    <!-- <h4>Inclusions</h4>
                                        <ul>
                                           <li>- &nbsp; Dune Bashing,</li>
                                           <li>- &nbsp; Camel riding,</li>
                                           <li>- &nbsp; Refreshments,</li>
                                           <li>- &nbsp; BBQ dinner,</li>
                                           <li>- &nbsp; Live Tanura show,</li>
                                           <li>- &nbsp; Live Fire show,</li>
                                           <li>- &nbsp; Live Arabic belly dance,</li>
                                           <li>- &nbsp; Free sheesha,</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section> --}}
{{-- <section id="gems_4" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>Sea Plane Dubai</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify"> Experience spectacular views of Dubai’s skyscrapers, beaches, and architectural wonders on a 40-minute seaplane flight. Step aboard a state-of-the-art Cessna seaplane and thrill as you swoop around top Dubai attractions such as the Burj Khalifa, Burj Al-Arab and palm-shaped island archipelago of the Palm Jumeirah. </p>
                                    <!-- <h4>Inclusions</h4>
                                        <ul>
                                           <li>- &nbsp; Dune Bashing,</li>
                                           <li>- &nbsp; Camel riding,</li>
                                           <li>- &nbsp; Refreshments,</li>
                                           <li>- &nbsp; BBQ dinner,</li>
                                           <li>- &nbsp; Live Tanura show,</li>
                                           <li>- &nbsp; Live Fire show,</li>
                                           <li>- &nbsp; Live Arabic belly dance,</li>
                                           <li>- &nbsp; Free sheesha,</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/course/t/t-52.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section> --}}
{{-- <section id="gems_5" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/Hot_Air.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>Hot Air Balloon</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify">For those dreamers and adventurers seeking out a truly once-in-a-lifetime experience, a hot air balloon tour is an essential part of any visit in Dubai. From the moment of take-off, around sunrise, the spectacular landscape of Dubai enchants the passenger. You will feel as if you are in a dream, drifting gently past the deserts. The diverse colours and vistas of the balloon flight will make for beautiful photographs and unforgettable memories.</p>
                                    <!-- <h4>Inclusions</h4>
                                        <ul>
                                           <li>- &nbsp; Dune Bashing,</li>
                                           <li>- &nbsp; Camel riding,</li>
                                           <li>- &nbsp; Refreshments,</li>
                                           <li>- &nbsp; BBQ dinner,</li>
                                           <li>- &nbsp; Live Tanura show,</li>
                                           <li>- &nbsp; Live Fire show,</li>
                                           <li>- &nbsp; Live Arabic belly dance,</li>
                                           <li>- &nbsp; Free sheesha,</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section> --}}
{{-- <section id="gems_6" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>The Rotunda Show Dubai</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify">Transporting audiences into a world of mystery and fantasy, “WOW” features over 30 acrobats, aerialists, dancers and performing artists who fly, flip, fold, and dance, in an immersive theatrical experience that enraptures the audience from the dimming of the lights to the final curtain. With multi-media three-dimensional projections, and holograms accompanied by gravity-defying acrobatic feats, mesmerizing choreography, thrilling theatrical lighting and magnificent music; audiences are bound-to-be-wowed!</p>
                                    <!-- <h4>Inclusions</h4> -->
                                    <!-- <ul>
                                        <li>- &nbsp; Fantastic 360 Panoramic Views</li>
                                        <li>- &nbsp; Bird-Like Sensation of Freedom</li>
                                        <li>- &nbsp; Your Favorite Drink</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/course/t/t-54.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section id="gems_7" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/Dubai_Sightseeing.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>Dubai Sightseeing Bus</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify">Enjoy panoramic views of Dubai's dramatic skyline, perfect sandy beaches, and the world's tallest building. Hop off to explore historical souks, forts, and palaces, and enjoy ultra-chic dining and ambient nightlife.</p>
                                    <!-- <h4>Inclusions</h4>
                                        <ul>
                                           <li>- &nbsp; Dune Bashing,</li>
                                           <li>- &nbsp; Camel riding,</li>
                                           <li>- &nbsp; Refreshments,</li>
                                           <li>- &nbsp; BBQ dinner,</li>
                                           <li>- &nbsp; Live Tanura show,</li>
                                           <li>- &nbsp; Live Fire show,</li>
                                           <li>- &nbsp; Live Arabic belly dance,</li>
                                           <li>- &nbsp; Free sheesha,</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section id="gems_8" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>The Green Planet</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify">The Green Planet is Dubai’s very own tropical rainforest. With more than 3,000 species of plants, animals and birds, this green oasis is a sanctuary of exotic flora and fauna. Aiming to educate guests about the important role the tropical forest plays in the future of our planet, The Green Planet exposes Dubai to another world within its glass dome, including Dubai's very own tropical rainforest – all responsibly sourced.</p>
                                    <!-- <h4>Inclusions</h4>
                                        <ul>
                                           <li>- &nbsp; Dune Bashing,</li>
                                           <li>- &nbsp; Camel riding,</li>
                                           <li>- &nbsp; Refreshments,</li>
                                           <li>- &nbsp; BBQ dinner,</li>
                                           <li>- &nbsp; Live Tanura show,</li>
                                           <li>- &nbsp; Live Fire show,</li>
                                           <li>- &nbsp; Live Arabic belly dance,</li>
                                           <li>- &nbsp; Free sheesha,</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/Green_Planet.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section id="gems_9" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/course/t/t-57.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>SKYDIVE Dubai</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify">Experience a breathtaking free-fall and parachute experience with Skydive Dubai. Take the leap above the iconic Palm Jumeirah or over the Arabian desert and see the emirate from an entirely different perspective. If you have no experience, you don’t need to worry. The instructors will guide you through the whole process including a demonstration before even setting foot on a plane. Both the skydive locations in Dubai are world-renowned, with the best qualified instructors to gently guide you back on to the ground.</p>
                                    <!-- <h4>Inclusions</h4>
                                        <ul>
                                           <li>- &nbsp; Dune Bashing,</li>
                                           <li>- &nbsp; Camel riding,</li>
                                           <li>- &nbsp; Refreshments,</li>
                                           <li>- &nbsp; BBQ dinner,</li>
                                           <li>- &nbsp; Live Tanura show,</li>
                                           <li>- &nbsp; Live Fire show,</li>
                                           <li>- &nbsp; Live Arabic belly dance,</li>
                                           <li>- &nbsp; Free sheesha,</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section id="gems_10" class="pt-20 pb-50 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="singel-course mt-30">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="cont">
                                <a href="#">
                                    <h4>Private Yatch</h4>
                                </a>
                                <div class="course-teacher">
                                    <p class="text-justify">If you’re keen to experience Dubai from the sea, either sightseeing or fishing, simply charter a boat and plan your itinerary with Yachts Sport Fishing & Yacht Charter. Enjoy a private boat ride for up to 10 guests from Dubai Marina to take in the impressive sights of modern Dubai. Marvel at views of the Lagoon, Skydive area, JBR, and Atlantis from the water. Stop for a swim at a JBR if you like.</p>
                                    <!-- <h4>Inclusions</h4>
                                        <ul>
                                           <li>- &nbsp; Dune Bashing,</li>
                                           <li>- &nbsp; Camel riding,</li>
                                           <li>- &nbsp; Refreshments,</li>
                                           <li>- &nbsp; BBQ dinner,</li>
                                           <li>- &nbsp; Live Tanura show,</li>
                                           <li>- &nbsp; Live Fire show,</li>
                                           <li>- &nbsp; Live Arabic belly dance,</li>
                                           <li>- &nbsp; Free sheesha,</li>
                                        </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thum">
                                <div class="image">
                                    <img src="img/course/t/t-58.jpg" alt="Course">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row  -->
                </div>
                <!-- singel course -->
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section> --}}
<div class="hidden-xs wave__footer">
    <div class="wave__ft1"></div>
</div>
@endsection
