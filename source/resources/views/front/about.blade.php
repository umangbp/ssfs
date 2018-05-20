@extends('front.layout')

@section('inner-banner')
	
	<!--Inner Banner Content Start-->
    <div class="tnit-inner-banner" id="tnit-about-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-12">
            <a href="{{ route('home') }}" class="tnit-btn tnit-btn_v2 pull-left"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Go Back</a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <h2>{!! $about_us['about-us']->title !!}</h2>
          </div>
          <div class="col-md-4 col-sm-3 col-xs-12">
            
          </div>
        </div>
      </div>
    </div><!--Inner Banner Content End-->

@endsection

@section('main-content')
	 
<!--Main Content Start-->
<div class="tnit-main-content">
    <!--About Section Start-->
    <section class="tnit-about-section tnit-about-section_v2 pd-tb70">
        <div class="container">
           <div class="row">
              <div class="col-md-5 col-sm-5 col-xs-12">
                   <!--About Image Start-->
                   <figure class="tnit-about-thumb">
                       <img src="{{ asset('front/images/other/chef-min.png') }}" alt="">
                   </figure><!--About Image End-->
               </div>
               <div class="col-md-7 col-sm-7 col-xs-12">
                 <!--Accordian Outer Start-->
                 <div class="tnit-accordian-outer">
                  <div class="tnit-heading-outer text-left">
                      <h2>{{ $headerData['company_name'] }}</h2>
                  </div>
                  <div id="tnit-accordion">
                    <!--Tab Inner Row Start-->
                    <div class="accordion-tab">
                      <span class="date">2016</span>
                      <h5>
                        Achievements in the year of 2016  
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </h5>
                    </div>
                    <div class="accordion-inner">
                      <p>
                      Praesent enim tellus, rutrum sit amet velit ac, rhoncus gravida dolor. Suspendisse bibendum pharetra urna sit amet aliquet. Maecenas congue metus eu orci fringilla tempor. Vivamus commodo rutrum risus, efficitur porttitor mauris rutrum nec. Suspendisse pulvinar vehicula neque ut ullamcorper. Morbi lorem velit, ullamcorper vitae gravida.
                      </p>
                    </div>
                    <!--Tab Inner Row End-->

                    <!--Tab Inner Row Start-->
                    <div class="accordion-tab">
                      <span class="date">2017</span>
                      <h5>
                        Achievements in the year of 2017  
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </h5>
                    </div>
                    <div class="accordion-inner">
                      <p>
                      Praesent enim tellus, rutrum sit amet velit ac, rhoncus gravida dolor. Suspendisse bibendum pharetra urna sit amet aliquet. Maecenas congue metus eu orci fringilla tempor. Vivamus commodo rutrum risus, efficitur porttitor mauris rutrum nec. Suspendisse pulvinar vehicula neque ut ullamcorper. Morbi lorem velit, ullamcorper vitae gravida.
                      </p>
                    </div>
                    <!--Tab Inner Row End-->

                    <!--Tab Inner Row Start-->
                    <div class="accordion-tab">
                      <span class="date">2018</span>
                      <h5>
                        Achievements in the year of 2018  
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </h5>
                    </div>
                    <div class="accordion-inner">
                      <p>
                      Praesent enim tellus, rutrum sit amet velit ac, rhoncus gravida dolor. Suspendisse bibendum pharetra urna sit amet aliquet. Maecenas congue metus eu orci fringilla tempor. Vivamus commodo rutrum risus, efficitur porttitor mauris rutrum nec. Suspendisse pulvinar vehicula neque ut ullamcorper. Morbi lorem velit, ullamcorper vitae gravida.
                      </p>
                    </div>
                    <!--Tab Inner Row End-->
                  </div>
                 </div><!--Accordian Outer End-->
               </div>
           </div>
        </div>
    </section><!--About Section End-->

    <section class="about-us-section">
      <div class="container">

        <div class="row">
          <div col-md-12 col-sm-12 col-xs-12>
            <div class="about-us-main">
              <div class="about-us-desc">
              {!! $about_us['about-us']->content !!}
              </div>

              <div class="our-values-section">
                {!! $about_us['about-us-vision']->content !!}
              </div>
              <div>
          </div>
        </div>
      </div>
    </section>

    <!--Stats Section Start-->
    <section class="tnit-stats-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!--Counter Item Start-->
            <div class="tnit-counter-item">
              <i class="fa fa-users" aria-hidden="true"></i>
              <span class="counter">{{ $headerData['happy_clients_count'] }}</span>
              <h5>Happy Clients</h5>
            </div><!--Counter Item End-->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!--Counter Item Start-->
            <div class="tnit-counter-item">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
              <span class="counter">{{ $headerData['people_catered_count'] }}</span>
              <h5>People Catered</h5>
            </div><!--Counter Item End-->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!--Counter Item Start-->
            <div class="tnit-counter-item">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span class="counter">{{ $headerData['receipes_count'] }}</span>
              <h5>Chef Recipe</h5>
            </div><!--Counter Item End-->
          </div>
        </div>
      </div>
    </section><!--Stats Section End-->    
</div><!--Main Content End-->

@endsection