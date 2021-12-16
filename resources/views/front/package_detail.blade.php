@extends('front.layouts.app')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{asset('front/img/page-banner-1.jpg')}})">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <!-- <h2> Affordable Dubai  </h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hidden Gems of UAE</li>
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
<section class="pt-120 pb-50 gray-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2> {{$package_detail->package_title}} </h2>
         </div>
      </div>
   </div>
</section>
<section class="pb-50 gray-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3> Tour Overview </h3>
         </div>
      </div>
      <br><br>
      <div class="row">
        <?php $ouverview = explode(",",$package_detail->tour_overview);
        if(in_array('hotel',$ouverview)){ ?>
            <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                <div class="icon-block style-5">
                <img class="icon-img" src="{{asset('front/img/hotel.png')}}" alt="">
                <!-- <img class="icon-img img-top" src="img/m_icon_1.1.png" alt=""> -->
                <h5 class="icon-title color-dark-2">Hotel</h5>
                <!-- <div class="icon-text color-dark-2-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat sint magnam rerum facili.</div> -->
                </div>
            </div>
         <?php } ?>

         <?php if(in_array('meal',$ouverview)){ ?>
            <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                <div class="icon-block style-5">
                <img class="icon-img" src="{{asset('front/img/meal.png')}}" alt="">
                <h5 class="icon-title color-dark-2">Meal</h5>
                <!-- <div class="icon-text color-dark-2-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat sint magnam rerum facili.</div> -->
                </div>
            </div>
         <?php } ?>
         <?php if(in_array('sightseeing',$ouverview)){ ?>
            <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                <div class="icon-block style-5">
                <img class="icon-img" src="{{asset('front/img/sight.png')}}" alt="">
                <h5 class="icon-title color-dark-2">Sightseeing</h5>
                <!-- <div class="icon-text color-dark-2-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat sint magnam rerum facili.</div> -->
                </div>
            </div>
          <?php } ?>
          <?php if(in_array('transport',$ouverview)){ ?>
            <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                <div class="icon-block style-5">
                <img class="icon-img" src="{{asset('front/img/trans.png')}}" alt="">
                <h5 class="icon-title color-dark-2">transport</h5>
                <!-- <div class="icon-text color-dark-2-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat sint magnam rerum facili.</div> -->
                </div>
            </div>
            <?php } ?>
      </div>
   </div>
</section>
<section class="pt-30 pb-50 gray-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3> Tour Highlights </h3>
         </div>
      </div>
      <br>
      <div class="row">
         <div class="col-md-12">
           {!! $package_detail->tour_highligts !!}
         </div>
      </div>
   </div>
</section>
<section class="pt-10 pb-10 gray-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3> Sightseeing </h3>
         </div>
      </div>
   </div>
</section>
<section id="shop-singel" class="pt-50 pb-120 gray-bg">
   <div class="container">
      <div class="shop-destails">
          @foreach ($subpackage_detail as $subpackage_detail_value)
            <div class="row">
                <div class="col-lg-5">
                <div class="shop-left pt-30">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="clearfix">
                            <?php $slider_data = DB::select('select * from subpackagesliders where subpackage_id = ?', [$subpackage_detail_value->id]); ?>
                                <ul id="image-gallery_{{$subpackage_detail_value->id}}" class="gallery list-unstyled cS-hidden">
                                    @foreach ( $slider_data as $slider_data_value)
                                        <li data-thumb="{{asset('subpackage_slider_image/'.$slider_data_value->image)}}"> <img src="{{asset('subpackage_slider_image/'.$slider_data_value->image)}}" /></li>
                                    @endforeach
                                </ul>
                            <script>
                                $(document).ready(function() {
                                    $('#image-gallery_<?php echo $subpackage_detail_value->id;?>').lightSlider({
                                            gallery:true,
                                            item:1,
                                            thumbItem:4,
                                            slideMargin: 0,
                                            speed:700,
                                            auto:true,
                                            loop:true,
                                            onSliderLoad: function() {
                                                $('#image-gallery_<?php echo $subpackage_detail_value->id;?>').removeClass('cS-hidden');
                                            }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <!-- shop left -->
                </div>
                </div>
                <div class="col-lg-7">
                <div class="shop-right pt-30">
                    <h6> <a href="#" class="ancor "> {{$subpackage_detail_value->subpackage_title}} </a></h6>
                    <!-- <span>Lorem ipsum dolor sit amet.</span> -->
                    {!! $subpackage_detail_value->description !!}
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="add-btn pt-15">
                            <button type="button" class="main-btn"  data-toggle="modal" data-target="#exampleModalCenter"> Know More.. </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                </div>
            </div>
         <br>
         <hr>
         @endforeach


      </div>
      <!-- shop-destails -->
      <br><br>
      <div class="shop-destails">
         <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
               <div class="shop-right pt-30">
                  <h6> <a href="#" class="ancor highlite"> Inclusion </a></h6>

                     {!! $package_detail->inclusion !!}

               </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
               <div class="shop-right pt-30">
                  <h6> <a href="#" class="ancor highlite"> Exclusion </a></h6>
                  {!! $package_detail->exclusion !!}
               </div>
            </div>
         </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-12">
           <div class="contact-from">
              <div class="section-title">
                 <!-- <h5>Contact Us</h5> -->
                 <h2>Keep in touch</h2>
              </div>
              <!-- section title -->
              <div class="main-form pt-45">
                 <form id="contact-form" action="test.php" method="post" data-toggle="validator" novalidate="true">
                    <div class="row">
                       <div class="col-md-6">
                          <div class="singel-form form-group has-error has-danger">
                             <input name="name" type="text" placeholder="Your name*" data-error="Name is required." required="required">
                             <!-- <div class="help-block with-errors"><ul class="list-unstyled"><li>Name is required.</li></ul></div> -->
                          </div>
                          <!-- singel form -->
                       </div>
                       <div class="col-md-6">
                          <div class="singel-form form-group">
                             <input name="email" type="email" placeholder="Email*" data-error="Valid email is required." required="required">
                             <div class="help-block with-errors"></div>
                          </div>
                          <!-- singel form -->
                       </div>
                       <div class="col-md-12 contact-code">
                          <input id="phonewater" type="tel" name="phone" required="required" />
                       </div>
                       <div class="col-md-12">
                          <div class="singel-form form-group">
                             <textarea name="messege" placeholder="Messege*" data-error="Please,leave us a message." required="required"></textarea>
                             <div class="help-block with-errors"></div>
                          </div>
                          <!-- singel form -->
                       </div>
                       <p class="form-message"></p>
                       <div class="col-md-12">
                          <div class="singel-form">
                             <button type="submit" class="main-btn disabled">Send</button>
                          </div>
                          <!-- singel form -->
                       </div>
                    </div>
                    <!-- row -->
                 </form>
              </div>
              <!-- main form -->
           </div>
        </div>
     </div>
   </div>
   <!-- container -->
</section>
<div class="hidden-xs wave__footer">
   <div class="wave__ft1"></div>
</div>


<script>
   $(document).ready(function() {
     $("#content-slider").lightSlider({
            loop:true,
            keyPress:true
        });


   });
</script>
@endsection
