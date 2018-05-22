
<!--Middle Section Start-->

<div class="ft-middle-row">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-8 col-xs-12">
        <!--Widget Start-->
        <div class="widget widget-about">
          <div>
          <strong class="ft-logo">
            <a href="index.html">
              <img src="{{ asset('front/images/SSFS_LOGO.png') }}" height= "113" alt="">
            </a>
          </strong>
          </div>
          <div>
            <ul class="about-info-listed">
              <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <p class="footer-address">{!! $headerData['full_address'] !!}</p>
              </li>
              <li style="margin-top: 5px;">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>
                  <span><a href="tel:{{ $headerData['contact_number'] }}">{{ $headerData['contact_number'] }}</a></span>
                </p>
              </li>
              <li>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <p><a href="mailto:{{ $headerData['contact_email'] }}">{{ $headerData['contact_email'] }}</a></p>
              </li>
            </ul>
          </div>
        </div><!--Widget End-->
      </div>
      <div class="col-md-4 col-sm-8 col-xs-12">
        <!--Widget Start-->
        <div class="widget widget-links">
          <h4>Footer Links</h4>
          <ul class="ft-nav">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about-us') }}">About</a></li>
            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
            <li><a href="{{ route('careers') }}">Careers</a></li>
          </ul>
        </div><!--Widget End-->
      </div>
      <div class="col-md-4 col-sm-8 col-xs-12">
        <!--Widget Start-->
        <div class="widget widget-links">
          <h4>Our Services</h4>
          <ul class="ft-nav">
            @foreach($headerData['services'] as $service)
              <li><a href="{{ route('service',$service['url']) }}">{{ $service['title'] }}</a></li>
            @endforeach
          </ul>
        </div><!--Widget End-->
      </div>
 {{--      <div class="col-md-3 col-sm-6 col-xs-12">
        <!--Widget Start-->
        <div class="widget widget-payment">
          <h4>Payment Methods</h4>
          <ul class="payment-listed">
            <li>
              <a href="#"><img src="{{ asset('front/images/payment-img-01.png') }}" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="{{ asset('front/images/payment-img-02.png') }}" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="{{ asset('front/images/payment-img-03.png') }}" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="{{ asset('front/images/payment-img-04.png') }}" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="{{ asset('front/images/payment-img-01.png') }}" alt=""></a>
            </li>
          </ul>
        </div><!--Widget End-->
      </div> --}}
    </div>

    <ul class="tnit-social-links tnit-social-links_v3">
        <li>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </li>
    </ul><!--Socail Links End--> 
   
  </div>
</div>

<!--Middle Section End-->
<!--CopyRight Row Start-->

<div class="tnit-copyright-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
              <p>Copyright © {{ \Carbon\Carbon::now()->format('Y') }} - <span>SSFS</span> - All rights reserved.</p>
            </div>
        </div>
    </div>
</div><!--CopyRight Row End-->

