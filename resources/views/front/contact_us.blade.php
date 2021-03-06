@extends('front.layouts.app')
@section('content')
<style>
    .contact-code .iti input, .iti input[type=text], .iti input[type=tel] {
        position: relative;
        z-index: 0;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        padding-right: 36px;
        margin-right: 0;
        width: 100%;
        height: 50px !important;
        padding: 1.375rem 2.75rem !important;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #a1a1a1 !important;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
    .contact-code .iti { margin-top: 20px;  width: 100% !important;}
    .contact-code .iti__country-list {z-index: 9;}
</style>
    </head>
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{asset('front/img/page-banner-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <!-- <h2> Contact Us </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Contact Us </li>
                            </ol>
                        </nav> -->
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from">
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h2>Keep in touch</h2>

                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form id="contact-form" action="{{url('send_contactus')}}" method="post" data-toggle="validator" novalidate="true">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group has-error has-danger">
                                            <input name="name" type="text" placeholder="Your name*" data-error="Name is required." required="required">
                                        </div>
                                        @error('name')
                                            <div class="input_error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="Email*" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        @error('email')
                                            <div class="input_error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 contact-code">

                                        <input id="phonewater" type="tel" name="phone" required="required" />

                                    </div>
                                    @error('phone')
                                            <div class="input_error">{{ $message }}</div>
                                        @enderror

                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="messege" placeholder="Messege*" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    @error('messege')
                                        <div class="input_error">{{ $message }}</div>
                                    @enderror

                                    <p class="form-message">
                                    </p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn disabled contact ">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-address">
                        <div class="contact-heading">
                            <h5>Address</h5>
                            <p>If you have any further questions, please don???t hesitate to contact me.</p>
                        </div>
                        <br>
                        @foreach ($contact_detail as $contact_detail_list)
                        @if($contact_detail_list->barnch_name!="")
                            <h5>{{$contact_detail_list->barnch_name}}</h5>
                        @endif
                        <ul>
                            @if($contact_detail_list->address!="")
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p> {{$contact_detail_list->address}} </p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            @endif
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p> +{{$contact_detail_list->phone1}} </p>
                                        <p> +{{$contact_detail_list->phone2}}  </p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p> {{$contact_detail_list->email}}  </p>
                                        <!-- <p>info@yourmail.com</p> -->
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <br>

                        </ul>
                        @endforeach
                    </div> <!-- contact address -->

                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!-- <section id="contact-page" class="pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="map map-big">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.1155986909275!2d55.37883981545018!3d25.30031993371655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c7332a7b81b%3A0x42bdd0c29c70f7b6!2sAl%20Buhaira%20Towers%20-%20Al%20Nahda%20St%20-%20Al%20Qusais%20Industrial%20AreaAl%20Qusais%20Industrial%20Area%203%20-%20Sharjah%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1621357456601!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                <div class="map map-big">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.5900713114956!2d72.94391841541822!3d22.557023739225713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e8738ffff87%3A0x336ee6150486e613!2sSiddhi%20Darshan%20Flats!5e0!3m2!1sen!2sin!4v1621357501673!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section> -->


<div class="hidden-xs wave__footer">
   <div class="wave__ft1"></div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(".contact").on("click",function(){

    jQuery("div .messages").animate({ scrollTop: jQuery(window).height()}, 1500);

});


</script>
@endsection
