@extends('front.layouts.app')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{asset('front/img/page-banner-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <!-- <h2>Our Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav> -->
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @foreach ($ourservices as $ourservices_list)
        <section id="{{$ourservices_list->service_slug}}" class="pt-120 pb-50 gray-bg">
            <div class="container">
                <div class="events-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="events-left">
                                <h3> {{$ourservices_list->service_title}} </h3>
                                <img src="{{asset('ourservice_image/'.$ourservices_list->service_image)}}" alt="Event">
                                {{-- <p> Tulua Empire helps customers with the best options of flight tickets and discounted airfares to or from places around the world. Our Flights Search results provides the customer with the most up-to-date flight status and real-time prices, flight durations, departure time, arrival times and economic prices to help the customers find economic flight tickets quickly. We take extra care of the security of the data and deployed the latest security methods. </p> --}}
                                {!! $ourservices_list->description !!}
                            </div> <!-- events left -->
                        </div>

                    </div> <!-- row -->
                </div> <!-- events-area -->
            </div> <!-- container -->
        </section>
    @endforeach
    {{-- <section id="service2" class=" pb-50 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3> Local Attractions </h3>
                            <img src="img/Local Attractions.jpg" alt="Event">
                            <p>
                            Planning a trip to the Dubai ?, you can book with Tulua Empire. The top attractions of Dubai like an evening of dune bashing in the Arabian Desert followed by a sunset barbecue meal with music and dancing, A day long tour of attractions like the Burj Al Arab hotel, the Gold Souq, The Atlantis, Palm Islands and Al Fahidi Fort or even a visit a camel farm or even try sand boarding followed by dinner on a the magical dhow cruise . A full day tour of the capital, Abu Dhabi to see the a few highlights like Sheikh Zayed Mosque, Yas Island, Ferrari theme park Sadiyat Islands, Al Husn palace the carpet souk, Heritage village.
                            </p>
                        </div> <!-- events left -->
                    </div>

                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section> --}}

    {{-- <section id="service3" class=" pb-50 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3> Holiday Packages </h3>
                            <img src="img/Holiday Packages.jpg" alt="Event">
                            <p>
                            Tulua Empire provides Various holiday packages includes:
                            </p>
                            <ul>
                                <li>• &nbsp;Leisure tours and packages</li>
                                <li>• &nbsp;Adventure tours</li>
                                <li>• &nbsp;Educational tours</li>
                                <li>• &nbsp;Specialised holiday consultants</li>
                                <li>• &nbsp;Corporate travel packages</li>
                                <li>• &nbsp;Dynamic holiday packages</li>
                            </ul>
                        </div> <!-- events left -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section> --}}

    {{-- <section id="service4" class=" pb-50 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3> Hotel Booking </h3>
                            <img src="img/hotel_booking.jpg" alt="Event">
                            <p>
                            We at Tulua Empire provides the services of hotel booking in UAE. Our commitment is making every visitor stay at best hotel and at best rates. We have tie up with some leading hotels in major cities of UAE like Dubai, Abu Dhabi, Sharjah and other cities. As we take all your hotel arrangements visitors are stress free in enjoying the purpose of their visit in dubai. we ensure our visitors get optimum luxury and comfort at the hotels we booked. so our service makes us as the desired destination for getting cheap hotel booking in UAE.
                            </p>
                            <!-- <p>
                            Shoreline Tourism Company offers a huge selection of hotels as a premium as well, and Economy Class at competitive prices that have been developed between the hotels and the company for the guests who wish to visit this beautiful country of the United Arab Emirates
                            </p> -->
                        </div> <!-- events left -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section> --}}

    {{-- <section id="service5" class=" pb-50 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3> Meet & Greet Services </h3>
                            <img src="img/Meet.jpg" alt="Event">
                            <p>
                            Worried about travelling alone or with family or your loved ones travelling for the first time, we can ensure you will be looked after well on your arrival at the airport. All the airport formalities will be fast tracked for clearance, baggage worries will be taken care of and a professional team will assist until the arrivals or departures area either to ensuring a smooth and swift passage through the airport. Even have lounge access is reserved exclusively for customers.
                            </p>
                        </div> <!-- events left -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section> --}}
{{--
    <section id="service6" class=" pb-50 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3> M.I.C.E </h3>
                            <img src="img/MICE.jpg" alt="Event">
                            <p>
                            Through our phenomenal relationship with the travel world including airlines, hotels, transport companies and regional authorities Tulua Empire helps your business host an amazing forum to achieve your desired outcome, we can make logistics, travel and entertainment easier for you and assist in creating a lasting impression for every meeting, incentive, conference or other event be it conferences, to incentives, to product launches, exclusive dinners or corporate forums of any shape or size.
                            </p>
                        </div> <!-- events left -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section> --}}

    {{-- <section id="service7" class=" pb-50 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3> Visa Services </h3>
                            <img src="img/visa.jpg" alt="Event">
                            <p>
                            Tulua Empire takes away the hassle of tedious visa application procedures for those who wish to visit the UAE
                            </p>
                            <p>
                            Your UAE tourist visa is just a few clicks away. Avoiding long queues and complicated visa formalities! Get your UAE tourist visa in less than a week and the element of worry is lost as you could also track the visa progress online.
                            </p>
                            <p>
                            Find below general list of documents for a UAE visa application.
                            </p>
                            <ul>
                                <li>• &nbsp;Clear copy of passport of Visitor</li>
                                <li>• &nbsp;Passport size photograph in white background</li>
                            </ul>
                        </div> <!-- events left -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section> --}}

    {{-- <section id="service8" class=" pb-50 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3> Travel Insurance </h3>
                            <img src="img/Travel Insurance.jpg" alt="Event">
                            <p>
                            Are you travelling, Instead of being occupied with the what ifs, whatever your needs are you can be protected on your family holiday, business trip or short weekend away against any unexpected events such as accident, illness, injury, sickness, trip cancellation, curtailment, loss or damage to your baggage, delays and much more. Travel with peace of mind if you get Travel Insurance by Tulua Empire when you travel in UAE. From trip cancellation to loss baggage, delays and personal accidents, we've got you covered. So leave your worries behind and let us deal with them instead.
                            </p>
                            <p>
                            Please feel free to contact us in on +971 567173839 in case of any further information or clarification.
                            </p>
                        </div> <!-- events left -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section> --}}

<div class="hidden-xs wave__footer">
            <div class="wave__ft1"></div>
</div>
@endsection
