<!--Logo Row Start-->
<div class="tnit-logo-row">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3 col-xs-12">
                <!--Logo Start-->
                <strong class="tnit-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('front/images/SSFS_LOGO.png') }}" height="110" alt="SSFS_LOGO"></a>
                </strong><!--Logo End-->
            </div>
            <div class="col-md-8 col-sm-9 col-xs-12">
               <!--Top Row Start-->
               <div class="tnit-top-row">
                   <div class="top-inner">
                       <div class="row">
                           <div class="col-md-6 col-sm-6 col-xs-12">
                               <span class="welcome">Welcome To <a href="#">{{ $headerData['company_name'] }}</a></span>
                           </div>
                       </div>
                   </div>

                   <!--Top listed Start-->
                   <ul class="tnit-top-listed">

                      @if(!empty($headerData['contact_number']))
                       <li class="listed-inner">
                            <span class="icon-box">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                           <div class="text">
                                <p><a href="tel:{{ $headerData['contact_number'] }}">{{ $headerData['contact_number'] }}</a></p>
                               <span>Call Us</span>
                           </div>
                       </li>
                       @endif

                       @if(!empty($headerData['contact_email']))
                       <li class="listed-inner">
                            <span class="icon-box">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                           <div class="text">
                               <p><a href="mailto:{{ $headerData['contact_email'] }}">{{ $headerData['contact_email'] }}</a></p>
                               <span>Email Us</span>
                           </div>
                       </li>
                       @endif

                       @if(!empty($headerData['short_address']))
                       <li class="listed-inner">
                            <span class="icon-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                           <div class="text">
                               {!! str_replace('%tag_name%','p',$headerData['short_address']) !!}
                           </div>
                       </li>
                       @endif
                   </ul><!--Top listed End-->

               </div><!--Top Row End-->
            </div>
        </div>
    </div>
</div><!--Logo Row End-->

<!--Navigation Row Start-->
<div class="tnit-navigation-row">
    <div class="container">
         <!--Nav Holder Start-->
        <div class="tnit-navbar-holder">
             <nav class="navbar navbar-default"> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tnit-navbar-collapse" aria-expanded="false"> <span class="sr-only">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="tnit-navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                    <li class="dropdown"> <a href="menu.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu">

                        @foreach($headerData['services'] as $service)
                          <li><a href="{{ route('service',$service['url']) }}">{{ $service['title'] }}</a></li>
                        @endforeach
                        
                      </ul>
                    </li>
                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ route('careers') }}">Careers</a></li>
                  </ul>
                </div>
                <!-- /.navbar-collapse --> 
              </nav>
        </div><!--Nav Holder End-->
    </div>
</div><!--Navigation Row End-->

