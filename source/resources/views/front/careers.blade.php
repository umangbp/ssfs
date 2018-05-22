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

@endsection