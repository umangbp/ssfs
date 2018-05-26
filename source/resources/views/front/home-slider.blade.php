<div class="tnit-banner">
    <!--Banner Slider Start-->
    <div id="tnit-banner-slider" class="owl-carousel">
        
        @foreach($banners as $banner)
        <div class="item">
            {{-- <img src="{{ asset('front/images/banner-img-01.jpg') }}" alt=""> --}}
            <img src="{{ $banner->banner_image }}" alt="">
            <!--Banner Caption Start-->
             <div class="banner-caption">
                <div class="container">
                    <h2>{{ $banner->banner_text }}</h2>
                     <strong>{{ $banner->banner_sub_text }}</strong>
                </div>
             </div><!--Banner Caption End-->
        </div>
        @endforeach
    </div><!--Banner Slider End-->
</div>

