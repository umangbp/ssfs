<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="HTML5 and CSS3 Food Responsive Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Food Responsive HTML5 Template</title>

        <!--All CSS-->
        <link rel="stylesheet" href="{{ mix('front/css/all.css') }}" media='all'>
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <script language="javascript" type="text/javascript" src="../excanvas.js"></script>
        <![endif]-->

    </head>
    <body>
    	<!--Wrapper Content Start-->
    	<div class="tnit-wrapper">

    		<!--Header Content Start-->
    		<header class="tnit-header">
            	@include('front.header')
    		</header><!--Header Content End-->

    		@hasSection('home-banner')
    			<!-- Home Banner Content Start-->
				<div class="tnit-banner">
					@yield('home-banner')
				</div>
				<!-- Home Banner Content End -->
    		@endif

    		@hasSection('inner-banner')
    			<!-- Inner Banner Start -->
    				@yield('inner-banner')
    			<!-- Inner Banner End -->
    		@endif

            <!--Main Content Start-->
            <div class="tnit-main-content">
                @yield('main-content')
            </div><!--Main Content End-->

           <!--Footer Content Start-->
            <footer class="tnit-footer">
                @include('front.footer')
            </footer><!--Footer Content End-->

    	</div><!--Wrapper Content End-->
        
    	<!--JQuery Files Start-->
        
        <script src="{{ mix('front/js/all.js') }}"></script>
        <script src="{{ asset('front/js/script.js') }}"></script>

        <script type="text/javascript">
            
            $(document).ready(function(){

                $('#our_clients_slider').owlCarousel();

            });

        </script>

	</body>
</html>