
@extends('front.layout')

@section('home-banner')
  @include('front.home-slider')
@endsection

@section('main-content')

<!--About Section Start-->
<section class="tnit-about-section pd-t70">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-7 col-xs-12">
        <!--About Text start-->
        <div class="tnit-about-text">
          <h2>What Is Sai Shraddha Foods Services?</h2>
          {!! $content['cms']['home_about_us'] !!}
          <div class="bottom-holder">
            <a href="about.html" class="tnit-btn tnit-btn_v1">Read More</a>
            <span class="signature"></span>
          </div>
        </div><!--About Text End-->
      </div>
      <div class="col-md-5 col-sm-5 col-xs-12">
        <!--About Thumb Start-->
        <figure class="tnit-about-thumb">
          {{-- <img src="{{ asset('front/images/about-img-01.jpg') }}" alt=""> --}}
          <img src="{{ asset('front/images/home_page/home_about_us_side_image.webp') }}" alt="">
          
        </figure><!--About Thumb End-->
      </div>
    </div>
  </div>
</section><!--About Section End-->

<!--Services Section Start-->
<section class="tnit-services-section pd-tb70">
  <div class="container">
    <div class="tnit-heading-outer">
      <h2>We Are Offering</h2>
      <span>-  Our  Services   -</span>
    </div>
    <div class="row">

      @foreach ($content['services'] as $key => $service)
          
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="tnit-services-item">
          <a href="{{ route('service', $service->url) }}">
          <span class="icon-box">
            @if($key == 0)
              <i class="icomoon icon-food"></i>
            @elseif($key == 1)
              <i class="icomoon icon-covered-food-tray-on-a-hand-of-hotel-room-service"></i>
            @elseif($key == 2)
              <i class="icomoon icon-wine-glasses-black-couple"></i>
            @else
              <i class="icomoon icon-hot-coffee-rounded-cup-on-a-plate-from-side-view"></i>
            @endif
          </span>
          </a>
          <h4><a href="{{ route('service', $service->url) }}">{{ $service->title }}</a></h4>
          <p>{{ strip_tags($service->short_desc) }}</p>
        </div>
      </div>

      @endforeach

    </div>
  </div>
</section><!--Services Section End-->

<!--Menu Section Start-->
<section class="tnit-our-clients-section pd-tb70">
  
    <div class="tnit-heading-outer" style="float: none;">
      <h2>Our Clients</h2>
      <span>-  Some of our esteemed clients in the showcase   -</span>
    </div>
    <div>
      <div id="our_clients_slider" class="owl-carousel">
          <div class="clients-item">
            <img src="{{ asset('front/images/our_clients/AurionPro-Logo.png') }}">
          </div>
          <div class="clients-item">
            <img src="{{ asset('front/images/our_clients/blue_box.png') }}">
          </div>
          <div class="clients-item">
            <img src="{{ asset('front/images/our_clients/cntrls.png') }}">
          </div>
          <div class="clients-item">
            <img src="{{ asset('front/images/our_clients/new_gen.svg') }}">
          </div>
          <div class="clients-item">
            <img src="{{ asset('front/images/our_clients/power_hf.png') }}">
          </div>
          <div class="clients-item">
            <img src="{{ asset('front/images/our_clients/techflow.png') }}">
          </div>
          <div class="clients-item">
            <img src="{{ asset('front/images/our_clients/vautid_shah.png') }}">
          </div>
          <div class="clients-item">
            <img src="{{ asset('front/images/our_clients/vishal_shipping.jpg') }}">
          </div>
      </div>
    </div>
</section><!--Menu Section End-->


<!--Reservation Row Start-->
<section class="tnit-reservation-row_v2">
  <div class="container">
    <!--Top listed Start-->
     <ul class="tnit-top-listed tnit-top-listed_v2">

        @if(!empty($headerData['contact_number']))
        <li class="listed-inner">
              <span class="icon-box">
                  <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
             <div class="text">
                 <span>Reach Us by phone at number below:</span>
                 <p><a href="tel:{{ $headerData['contact_number'] }}">{{ $headerData['contact_number'] }}</a></p>
             </div>
        </li>
        @endif

        @if(!empty($headerData['contact_email']))
         <li class="listed-inner">
              <span class="icon-box">
                  <i class="fa fa-envelope-open" aria-hidden="true"></i>
              </span>
             <div class="text">
                 <span>Reach Us by email below: </span>
                 <p><a href="mailto:{{ $headerData['contact_email'] }}">{{ $headerData['contact_email'] }}</a></p>
             </div>
         </li>
         @endif

        @if(!empty($headerData['short_address']))
        <li class="listed-inner">
              <span class="icon-box">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
              </span>
             <div class="text">
               {!! str_replace('%tag_name%','span',$headerData['short_address']) !!}
           </div>
        </li>
        @endif
     </ul><!--Top listed End-->
  </div>
</section> <!--Reservation Row End-->

@endsection