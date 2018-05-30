@extends('front.layout')

@section('inner-banner')
	
	<!--Inner Banner Content Start-->
    <div class="tnit-inner-banner" id="tnit-contact-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-12">
            
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <h2>{{ $contact_us_data['contact-us']->title }}</h2>
          </div>
          <div class="col-md-4 col-sm-3 col-xs-12">
            
          </div>
        </div>
      </div>
    </div><!--Inner Banner Content End-->

@endsection

@section('main-content')  

<!--Contact Section Start-->
<section class="tnit-contact-section pd-tb70">
  <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!--Sidebar Outer Start-->
          <aside class="tnit-sidebar-outer">
            <div class="widget widget-contact widget_v2">
              <ul class="tnit-address-listed tnit-address-listed_v2">
                <li>
                  <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                  <h5><a href="tel:{{ $headerData['contact_number'] }}">{{ $headerData['contact_number'] }}</a></h5>
                  <p>Call Us</p>
                </li>
                <li>
                  <i class="fa fa-whatsapp" aria-hidden="true"></i>
                  <h5>{{ $headerData['whatsapp_number'] }}</h5>
                  <p>Whatsapp Us</p>
                </li>
                <li>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  {!! str_replace('%tag_name%','h5',str_replace('span','p',$headerData['short_address'])) !!}
                </li>
                <li>
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  <h5><a href="mailto:{{ $headerData['contact_email'] }}">{{ $headerData['contact_email'] }}</a></h5>
                  <p>Send Us Email</p>
                </li>
              </ul> 
            </div>
          </aside>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!--Get Touch Inner Start-->
          <div class="tnit-get-inner">
            <div class="tnit-heading-outer text-center">
              {!! $contact_us_data['contact-us']->content !!}
            </div>
          </div><!--Get Touch Inner End-->
         
         <!--Contact Map End-->
        </div>
      </div>
  </div>
</section><!--Contact Section End-->


@endsection