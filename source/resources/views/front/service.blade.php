@extends('front.layout')

@section('meta')

    <title>{{ $metaData['meta_title'] }}</title>
    <meta name="description" content="{{ $metaData['meta_description'] }}">
    <meta name="keywords" content="{{ $metaData['meta_keywords'] }}">
  
@endsection

@section('inner-banner')
	
	<!--Inner Banner Content Start-->
    <div class="tnit-inner-banner" id="tnit-services-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2>{{ $service_details->title }}</h2>
          </div>
        </div>
      </div>
    </div><!--Inner Banner Content End-->

@endsection


@section('main-content')

<section class="tinit-service-section pd-tb70">
  <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="service-image">
            <figure class="tnit-service-thumb">
                 <img class="image-responsive" src="{{ $service_details->image }}" alt="{{ $service_details->title }}">
            </figure>  
          </div>
          <div class="service-description">
              {!! $service_details->description !!}
            </div>
        </div>
    </div>
  </div>
</section>  

@endsection