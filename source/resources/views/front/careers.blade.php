@extends('front.layout')

@section('meta')

    <title>{{ $metaData['meta_title'] }}</title>
    <meta name="description" content="{{ $metaData['meta_description'] }}">
    <meta name="keywords" content="{{ $metaData['meta_keywords'] }}">
  
@endsection

@section('inner-banner')
	
	<!--Inner Banner Content Start-->
    <div class="tnit-inner-banner" id="tinit-career-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-12">
            
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <h2>Job Openings</h2>
          </div>
          <div class="col-md-4 col-sm-3 col-xs-12">
            
          </div>
        </div>
      </div>
    </div><!--Inner Banner Content End-->

@endsection

@section('main-content')
  
  <section class="tnit-career-section pd-tb70">
      <div class="container">
        <div class="tnit-heading-outer text-center">
            <h2>WE ARE HIRING</h2>
            <span class="small">-  Join our team   -</span>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div>
                <p class="join-us-description">It's not only about doing your job when you are working with Sai Shraddha Foods Services, but it's about the beautiful journey that you live with us.</p><br/>
              </div>
              <div class="job-openings-block">
                
                @if(!empty($careers))

                <ul>
                  @foreach($careers as $career)
                    <li>
                      <div class="opening">
                        <span class="job-title">{{ $career->job_title }}</span>

                        @if($career->job_location !== '')
                        <span class="job-location"> - {{ $career->job_location }}</span>
                        @endif
                      </div>
                      <div class="job-description">
                        <p>{{ $career->job_description }}</p>
                      </div>
                    </li>
                  @endforeach
                </ul>

                <div class="pd-tb70">
                  <p>If you are interested for any of the above openings, Please <a href="{{ route('contact-us') }}">contact us</a> on our contact details available on contact us page</p>
                </div>

                @else 
                  <div class="text-center pd-tb70">
                    <h3>Sorry.... Currently we don't have any openings</h3>
                  </div>
                @endif

              </div>
          </div>
        </div>
      </div>
  </section>

@endsection