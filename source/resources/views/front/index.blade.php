
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
          <h2>What Is Shree Shraddha Foods Services?</h2>
          {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet turpis ex. Vestibulum commodo eget ipsum id mollis. Mauris maximus, diam id euismod egestas, justo orci molestie massa, sed accumsan eros ipsum sollicitudin quam.</p>
          <p>Ut est ligula, ullamcorper a imperdiet a, ullamcorper eget quam. Nulla luctus sagittis tellus, in suscipit turpis pharetra fermentum. Fusce in ornare ex. Suspendisse eu mollis ligula, ut aliquam sapien. Donec aliquam rhoncus feugiat.</p> --}}

          {!! $content['about_us']->content !!}
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
          
        <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="tnit-services-item">
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
          <h4>{{ $service->title }}</h4>
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
    <div id="our_clients_slider" class="owl-carousel">
        <div class="item">
          <img src="{{ asset('front/images/our_clients/AurionPro-Logo.png') }}">
        </div>
        <div class="item">
          <img src="{{ asset('front/images/our_clients/blue_box.png') }}">
        </div>
        <div class="item">
          <img src="{{ asset('front/images/our_clients/cntrls.png') }}">
        </div>
        <div class="item">
          <img src="{{ asset('front/images/our_clients/new_gen.svg') }}">
        </div>
        <div class="item">
          <img src="{{ asset('front/images/our_clients/power_hf.png') }}">
        </div>
        <div class="item">
          <img src="{{ asset('front/images/our_clients/techflow.png') }}">
        </div>
        <div class="item">
          <img src="{{ asset('front/images/our_clients/vautid_shah.png') }}">
        </div>
        <div class="item">
          <img src="{{ asset('front/images/our_clients/vishal_shipping.jpg') }}">
        </div>
    </div>

</section><!--Menu Section End-->


<!--Reservation Row Start-->
<section class="tnit-reservation-row_v2">
  <div class="container">
    <!--Top listed Start-->
     <ul class="tnit-top-listed tnit-top-listed_v2">
         <li class="listed-inner">
              <span class="icon-box">
                  <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
             <div class="text">
                 <span>Reach Us by phone at number below:</span>
                 <p><a href="tel:8000000000">800-000-00-00</a></p>
             </div>
         </li>
         <li class="listed-inner">
              <span class="icon-box">
                  <i class="fa fa-envelope-open" aria-hidden="true"></i>
              </span>
             <div class="text">
                 <span>Reach Us by email below: </span>
                 <p><a href="mailto:email@foodnotch.com">email@foodnotch.com</a></p>
             </div>
         </li>
         <li class="listed-inner">
              <span class="icon-box">
                  <i class="fa fa-clock-o" aria-hidden="true"></i>
              </span>
             <div class="text">
                <span>07:00 am - 11:00 am ( Breakfast )</span>
                <p>11:00 am - 01:00 am ( Lunch / Dinner )</p>
             </div>
         </li>
     </ul><!--Top listed End-->
  </div>
</section> <!--Reservation Row End-->

@endsection