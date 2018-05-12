
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
<section class="tnit-menu-section pd-tb70">
  <div class="container">
    <div class="tnit-heading-outer">
      <h2>We Have Menu</h2>
      <span>-  Our  Recipes   -</span>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <!--Menu Item Start-->
        <div class="tnit-menu-item">
          <div class="text-holder">
            <h4>Breakfast</h4>
            <p>We value the importance of breakfast and that is why we provide one of the best and healthy breakfast menu for your employees.</p>
          </div>
          <figure class="tnit-menu-thumb">
            <img src="{{ asset('front/images/menu-img-01.jpg') }}" alt="">
          </figure>
          <a href="menu.html" class="btn-menu">View Menu</a>
        </div><!--Menu Item End-->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <!--Menu Item Start-->
        <div class="tnit-menu-item tnit-menu-item-right">
          <div class="text-holder">
            <h4>Lunch</h4>
            <p>Etiam aliquam eleifend ante, at vestibulum mauris pharetra eu. Maecenas sed risus urna. Aenean eu elit eget sem vestibulum malesuada. Vestibulum. </p>
          </div>
          <figure class="tnit-menu-thumb">
            <img src="{{ asset('front/images/menu-img-02.jpg') }}" alt="">
          </figure>
          <a href="menu.html" class="btn-menu">View Menu</a>
        </div><!--Menu Item End-->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <!--Menu Item Start-->
        <div class="tnit-menu-item">
          <div class="text-holder">
            <h4>High Tea</h4>
            <p>Etiam aliquet arcu sit amet sodales cursus. Sed auctor lectus id diam egestas fermentum. Suspendisse et tortor posuere, facilisis eros et, laoreet ipsum. </p>
          </div>
          <figure class="tnit-menu-thumb">
            <img src="{{ asset('front/images/menu-img-03.jpg') }}" alt="">
          </figure>
          <a href="menu.html" class="btn-menu">View Menu</a>
        </div><!--Menu Item End-->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <!--Menu Item Start-->
        <div class="tnit-menu-item tnit-menu-item-right">
          <div class="text-holder">
            <h4>Dinner</h4>
            <p>Etiam aliquam eleifend ante, at vestibulum mauris pharetra eu. Maecenas sed risus urna. Aenean eu elit eget sem vestibulum malesuada. Vestibulum. </p>
          </div>
          <figure class="tnit-menu-thumb">
            <img src="{{ asset('front/images/menu-img-04.jpg') }}" alt="">
          </figure>
          <a href="menu.html" class="btn-menu">View Menu</a>
        </div><!--Menu Item End-->
      </div>
    </div>
  </div>
</section><!--Menu Section End-->

<!--Today Section Start-->
{{-- <section class="tnit-today-section pd-t70" style="display: none;">
  <div class="first-section">
    <div class="container">
        <div class="tnit-heading-outer">
          <h2>Today What We Have</h2>
          <span>-  Daily Menu   -</span>
        </div>
    </div>
    <!--Tabs Outer Start-->
    <div class="tnit-tabs-outer">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tnit-tabs-nav" role="tablist">
          <li role="presentation" class="active">
              <a href="#tab1" aria-controls="tab1" data-toggle="tab">
                Breakfast
              </a>
          </li>
          <li role="presentation">
              <a href="#tab2" aria-controls="tab2" data-toggle="tab">
                Brunch
              </a>
          </li>
          <li role="presentation">
              <a href="#tab3" aria-controls="tab3" data-toggle="tab">
                Lunch
              </a>
          </li>
          <li role="presentation">
              <a href="#tab4" aria-controls="tab4" data-toggle="tab">
                Hi Tea
              </a>
          </li>
          <li role="presentation">
              <a href="#tab5" aria-controls="tab5" data-toggle="tab">
                Dinner
              </a>
          </li>
        </ul>
    </div><!--Tabs Outer End-->
 </div>
  <div class="today-middle-section" style="display: none">
    <div class="container">
       <!-- Tab Holder Start-->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
                <div class="tnit-tabs-inner">
                  <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <!--Tabs Text Holder Start-->
                      <ul class="recipe-listed">
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                       
                      </ul><!--Tabs Text Holder End-->
                      <a href="menu.html" class="btn-full-menu">View Full Menu</a>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="food-img">
                        <img src="{{ asset('front/images/tab-img-01.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab2">
               <div class="tnit-tabs-inner">
                  <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <!--Tabs Text Holder Start-->
                      <ul class="recipe-listed">
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                       
                      </ul><!--Tabs Text Holder End-->
                      <a href="menu.html" class="btn-full-menu">View Full Menu</a>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="food-img">
                        <img src="{{ asset('front/images/tab-img-01.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab3">
              <div class="tnit-tabs-inner">
                  <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <!--Tabs Text Holder Start-->
                      <ul class="recipe-listed">
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                      
                      </ul><!--Tabs Text Holder End-->
                      <a href="menu.html" class="btn-full-menu">View Full Menu</a>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="food-img">
                        <img src="{{ asset('front/images/tab-img-01.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab4">
              <div class="tnit-tabs-inner">
                  <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <!--Tabs Text Holder Start-->
                      <ul class="recipe-listed">
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                       
                      </ul><!--Tabs Text Holder End-->
                      <a href="menu.html" class="btn-full-menu">View Full Menu</a>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="food-img">
                        <img src="{{ asset('front/images/tab-img-01.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab5">
              <div class="tnit-tabs-inner">
                  <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <!--Tabs Text Holder Start-->
                      <ul class="recipe-listed">
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                        <li>
                          <!--Recipe Info Start-->
                          <div class="tnit-recipe-info">
                            <h4>Basic Scrambled Eggs Recipe</h4>
                            <p>Phasellus euismod consequat egestas .................................. <span>$16.00</span></p>
                            <ul class="recipe-bottom-list">
                              <li>
                               <i class="fa fa-clock-o" aria-hidden="true"></i> 5M  -  
                              </li>
                              <li>
                                <span class="tnit-star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                              </li>
                            </ul>
                          </div>
                          <!--Recipe Info End-->
                        </li>
                       
                      </ul><!--Tabs Text Holder End-->
                      <a href="menu.html" class="btn-full-menu">View Full Menu</a>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="food-img">
                        <img src="{{ asset('front/images/tab-img-01.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div><!-- Tab Holder End-->
    </div>
  </div>
</section>  --}}<!--Today Section End-->


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