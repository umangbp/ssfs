@extends('front.layout')

@section('inner-banner')
	
	<!--Inner Banner Content Start-->
    <div class="tnit-inner-banner" id="tinit-career-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-12">
            
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <h2>Our Team</h2>
          </div>
          <div class="col-md-4 col-sm-3 col-xs-12">
            
          </div>
        </div>
      </div>
    </div><!--Inner Banner Content End-->

@endsection

@section('main-content')

   <!--Team Section Start-->
  <section class="tnit-team-section pd-tb70">
    <div class="container"> 
      <div class="tnit-heading-outer text-center">
        <h2>Professional cook team</h2>
        <span class="small">-  Our  Chefs   -</span>
      </div>
      
        <div>
        @foreach($members as $member)
        <div class="col-md-4 col-sm-6 col-xs-12">
          <!--Team Outer Start-->
          <div class="tnit-team-item">
            <figure class="tnit-team-thumb">
              <img src="{{ $member->image }}" alt="">
            </figure>
            <!--Text Holder Start-->
            <div class="tnit-text">
              <h4>{{ ucfirst($member->first_name ) }} {{ ucfirst($member->last_name) }}</h4>
              <span class="desination">{{ ucwords($member->designation) }}</span>
              <!--Socail Links start-->
              <ul class="tnit-social-links">
                <li>
                    <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul><!--Socail Links End-->
            </div><!--Text Holder end-->
          </div>
        </div>
        @endforeach
        </div>
     
    </div>
  </section><!--Team Section End-->


@endsection