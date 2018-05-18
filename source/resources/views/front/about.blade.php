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
            <h2>About Us</h2>
          </div>
          <div class="col-md-4 col-sm-3 col-xs-12">
            <p class="pull-right">What's behind The Food?</p>
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
              {!! $about_us['content'] !!}
              </div>

              <div class="our-values-section">
                <div class="tnit-heading-outer text-center our-values">
                  <h2>Our Vision</h2>
                  <span class="small">- What We Promise To Deliver -</span>
                </div>

                 <div class="our-vision-list">
                    <ul>
                      <li>
                        <span>We Are Passionate For Quality</span>
                        <div class="our-vision-dropdown-content">
                            <p>It has been always our focus to deliver the best food with the guarantee of high quality service and clear cost advantage. With Sai Shraddha food services you get the best food with a professional service and true value for money.</p>
                        </div>
                      </li>
                      <li>
                        <span>Cutting Edge Food & Supply Chain</span>
                        <div class="our-vision-dropdown-content">
                          <p>We are proud to make use of latest technologies, high-end equipments and professionally equipped setup to prepare and cater food to the satisfaction and expectations of our clients. From most advanced storage systems to maintaining state of the art maintenance protocol to taking care of nutritional value and hygiene of foods, our catering and food processing service is backed by a robust and high quality infrastructure. </p> 
                        </div>
                      </li>
                      <li>
                          <span>Service Beyond Expectation</span>
                          <div class="our-vision-dropdown-content">
                             <p>We are open to learn new recipes, experiment with established recipes and cuisines and deliver the best of class catering and food processing service for diverse clients across establishments and organisations. Our food quality and mastery with the traditional cuisine helped us grow as a catering and food service bringing lasting reputation to our service.</p> 
                        </div>
                      </li>
                    </ul>
                  </div>
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
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!--Counter Item Start-->
            <div class="tnit-counter-item">
              <i class="fa fa-users" aria-hidden="true"></i>
              <span class="counter">3956</span>
              <h5>Happy Clients</h5>
            </div><!--Counter Item End-->
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!--Counter Item Start-->
            <div class="tnit-counter-item">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
              <span class="counter">1260</span>
              <h5>Love People</h5>
            </div><!--Counter Item End-->
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!--Counter Item Start-->
            <div class="tnit-counter-item">
              <i class="fa fa-coffee" aria-hidden="true"></i>
              <span class="counter">790</span>
              <h5>Cup Of Coffee</h5>
            </div><!--Counter Item End-->
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!--Counter Item Start-->
            <div class="tnit-counter-item">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span class="counter">600</span>
              <h5>Chef Recipe</h5>
            </div><!--Counter Item End-->
          </div>
        </div>
      </div>
    </section><!--Stats Section End-->    
</div><!--Main Content End-->

@endsection