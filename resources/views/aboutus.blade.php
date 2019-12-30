<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/secondary/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <title>Sabikick.com</title><!-- Favicon -->
        <!-- Favicon -->
        @laravelPWA
        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">

        
        <script src="{{asset('libs/typed.js/lib/typed.min.js')}}"></script>
     
    </head>
<body>
  <header class="header header-transparent" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
                <div class="container px-0">
                    <div class="navbar-nav align-items-center">
                        <div class="d-none d-lg-inline-block">
                    
                        </div>
                   
                        <div class="ml-auto">
                            <ul class="nav">
                                <li class="nav-item">
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="far fa-search"></i></a>
                                </li>
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                    </a>

                                    @guest
                             
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <h6 class="dropdown-header">User menu</h6>
                                        <a class="dropdown-item" href="/login">
                                            <i class="far fa-user"></i>Login
                                        </a>
                                        @if (Route::has('register'))
                                        <a class="dropdown-item" href="/register">
                                            <i class="far fa-user"></i>Register
                                        </a>
                                        @endif
                                    </div>
                                @else
                                   
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <h6 class="dropdown-header">User menu</h6>
                                        <a class="dropdown-item" href="#">
                                            <i class="far fa-user"></i>Account
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="float-right badge badge-primary">4</span>
                                            <i class="far fa-envelope"></i>Messages
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="far fa-cog"></i>Settings
                                        </a>
                                        <div class="dropdown-divider" role="presentation"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   
                                      
                                            <i class="far fa-sign-out-alt"></i>Sign out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                    @endguest

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
                <div class="container px-lg-0">
                    <!-- Logo -->
                    <a class="navbar-brand mr-lg-5" href="#">
                    
                    <img alt="Image placeholder" src="{{asset('img/newlogo.png')}}" id="navbar-logo" style="height: 50px;">
                 
                   <!-- <p style="padding-top:15px;font-family: 'Shadows Into Light', cursive;font-size:30px">Sabikick</p> -->
                       <!-- <h6 id="navbar-logo" style="height: 50px;padding-top:7px;color:#ffffff;font-size:30px">Sabikick</h6> -->
                     </a>
                    <!-- Navbar collapse trigger -->
                    <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Navbar nav -->
                    <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                            <!-- Home - Overview  -->
                           
                            <!-- Pages menu -->
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listplayers" >Players</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listscouts" >Scouts</a>
                            </li>
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listcoaches" >Coaches</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listagents" >Agents</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listclubs" >Clubs</a>
                            </li>
                            <!-- Sections menu -->
                          
                           
                        </ul>
                        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-sm dropdown-menu-arrow p-0">
                                    <ul class="list-group list-group-flush">
                                    <li>
                                            <a href="/contactus" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    
                                                    <!-- Media body -->
                                                    <div class="media-body">
                                                  <p class="mb-0">Contact us</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/aboutus" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                        
                                                    <!-- Media body -->
                                             
                                                        <p class="mb-0">About Us</p>
                                      
                                                </div>
                                            </a>

                                            <a href="/showallposts" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                        
                                                    <!-- Media body -->
                                            
                                                        <p class="mb-0">Faqs</p>
                                              
                                                </div>
                                            </a>
                                            <a href="/faqs" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                        
                                                    <!-- Media body -->
                                            
                                                        <p class="mb-0">News & Events</p>
                                              
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                 
                                </div>
                            </li>
                          
                         
                        </ul>
                    </div>
                </div>
            </nav>
            </header>
  <div id="omnisearch" class="omnisearch">
            <div class="container">
                <!-- Search form -->
                <form class="omnisearch-form">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-search"></i></span>
                            </div>
                            <input type="text" name="country_name" id="country_name"  class="form-control" value="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="omnisearch-suggestions">
                    <h6 class="heading">Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                        <div id="countryList">
    </div>

                        </div>

                    </div>
                    {{ csrf_field() }}
                </div>
            </div>
        </div>
  <div class="main-content">
    <!-- Cover (v2) -->
    <section class="spotlight bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('{{asset('img/slide-3.jpg')}}');">
      <span class="mask bg-dark opacity-7"></span>
      <div class="spotlight-holder pt-9 pb-6 py-lg-0">
        <div class="container d-flex align-items-center px-0">
          <div class="col">
            <div class="row row-grid">
              <div class="col-lg-6">
                <div class="py-6 text-center text-lg-left">
                  <h2 class="display-4 text-white mb-4">About us</h2>
                  <p class="lead lh-180 text-white">A soccer recruiting cum social platform.We connect soccer players with agents,coaches,clubs and fellow soccer players in order to help them realise their dreams.</p>
                  <div class="mt-5">
                    <a href="/contactus" class="btn btn-white rounded-pill px-5 mr-lg-4 box-shadow-2">Contact us</a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features (v31) -->
    <section class="slice slice-lg bg-section-secondary" style="padding-bottom: 200px;">
      <div class="container">
        <div class="mb-5 text-center">
          <span class="badge badge-soft-success badge-pill badge-lg">
          About Us
          </span>
          <h3 class=" mt-4">Sabikick.. Africa to the world.</h3>
       
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
              <img alt="Image placeholder" src="{{asset('img/mission.png')}}" class="svg-inject" style="height: 64px; width: auto;">
            
               </div>
              <div class="px-4 pb-5">

                <h5>Our Mission</h5>
                <p class="text-muted">Creating the right platform that connects young African football players with scout,agents, coaches, clubs and fellow players to enable them showcase their talent and get the right career opportunity</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
              <img alt="Image placeholder" src="{{asset('img/value.png')}}" class="svg-inject" style="height: 64px; width: auto;">
            
               </div>
              <div class="px-4 pb-5">
                <h5>Our Values</h5>
                <p class="text-muted">Restoring the glory of African players. <br> we find hope in players <br> We showcase players based on excellence and integrity</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
              <img alt="Image placeholder" src="{{asset('img/vision.png')}}" class="svg-inject" style="height: 64px; width: auto;">
            
             </div>
              <div class="px-4 pb-5">
                <h5>Our Vision</h5>
                <p class="text-muted">Bridging the gap in the way scouting is done in Africa</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <!-- Features (v32) -->
   
    <!-- Team (v1) -->
    <!-- <section class="slice slice-lg">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class=" mt-4">The awesome team</h3>
          <div class="fluid-paragraph mt-3">
            <p class="lead lh-180">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
          </div>
        </div>
        <div class="row row-grid">
          <div class="col-lg-3">
            <div data-animate-hover="2">
              <div class="animate-this">
                <a href="#">
                  <img alt="Image placeholder" class="img-fluid rounded shadow" src="../../assets/img/theme/light/team-1-800x800.jpg">
                </a>
              </div>
              <div class="mt-3">
                <h5 class="card-title mb-0">Heather Wright</h5>
                <p class="text-muted mb-0">CEO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div data-animate-hover="2">
              <div class="animate-this">
                <a href="#">
                  <img alt="Image placeholder" class="img-fluid rounded shadow" src="../../assets/img/theme/light/team-2-800x800.jpg">
                </a>
              </div>
              <div class="mt-3">
                <h5 class="card-title mb-0">Monroe Parker</h5>
                <p class="text-muted mb-0">CTO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div data-animate-hover="2">
              <div class="animate-this">
                <a href="#">
                  <img alt="Image placeholder" class="img-fluid rounded shadow" src="../../assets/img/theme/light/team-3-800x800.jpg">
                </a>
              </div>
              <div class="mt-3">
                <h5 class="card-title mb-0">John Sullivan</h5>
                <p class="text-muted mb-0">CTO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div data-animate-hover="2">
              <div class="animate-this">
                <a href="#">
                  <img alt="Image placeholder" class="img-fluid rounded shadow" src="../../assets/img/theme/light/team-4-800x800.jpg">
                </a>
              </div>
              <div class="mt-3">
                <h5 class="card-title mb-0">James Lewis</h5>
                <p class="text-muted mb-0">CTO</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-grid">
          <div class="col-lg-3">
            <div data-animate-hover="2">
              <div class="animate-this">
                <a href="#">
                  <img alt="Image placeholder" class="img-fluid rounded shadow" src="../../assets/img/theme/light/team-5-800x800.jpg">
                </a>
              </div>
              <div class="mt-3">
                <h5 class="card-title mb-0">Danielle Levin</h5>
                <p class="text-muted mb-0">CTO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div data-animate-hover="2">
              <div class="animate-this">
                <a href="#">
                  <img alt="Image placeholder" class="img-fluid rounded shadow" src="../../assets/img/theme/light/team-6-800x800.jpg">
                </a>
              </div>
              <div class="mt-3">
                <h5 class="card-title mb-0">Martin Gray</h5>
                <p class="text-muted mb-0">CTO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div data-animate-hover="2">
              <div class="animate-this">
                <a href="#">
                  <img alt="Image placeholder" class="img-fluid rounded shadow" src="../../assets/img/theme/light/team-7-800x800.jpg">
                </a>
              </div>
              <div class="mt-3">
                <h5 class="card-title mb-0">George Squier</h5>
                <p class="text-muted mb-0">CTO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div data-animate-hover="2">
              <div class="animate-this">
                <a href="#">
                  <img alt="Image placeholder" class="img-fluid rounded shadow" src="../../assets/img/theme/light/team-8-800x800.jpg">
                </a>
              </div>
              <div class="mt-3">
                <h5 class="card-title mb-0">Jesse Stevens</h5>
                <p class="text-muted mb-0">CTO</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Testimonials (v5) -->
    <!-- <section class="slice">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <blockquote class="blockquote blockquote-card py-5 px-5 rounded-right bg-neutral hover-scale-110">
              <h3 class="h2 font-weight-700">Wise words!</h3>
              <p class="lead">Purpose is a professional theme reviewed and approved by the Bootstrap Creators themeselves. With each purchase you get a pack of high quality components and page layouts to start building your website instantly.</p>
              <footer class="blockquote-footer">CEO of AfriKick.com <cite class="font-weight-600" title="Source Title">Afrikick Ceo</cite>
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Testimonials (v6) -->

    <!-- Call to action (v5) -->
    <!-- <section class="slice slice-lg bg-section-secondary" id=sct-call-to-action><a href="#sct-call-to-action" class="tongue tongue-up tongue-section-primary" data-scroll-to>
        <i class="far fa-angle-up"></i>
      </a>
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-8 text-center">
            <h3 class="font-weight-400">I am ready to start a new project with <span class="font-weight-700">Purpose</span> UI Kit.</h3>
            <div class="mt-5">
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="btn btn-primary rounded-pill hover-translate-y-n3">
                Purchase now<span class="badge badge-pill badge-soft-warning badge-floating border-section-secondary">$ 59</span>
              </a>
              <a href="../../docs/index.html" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Official documentation">Purpose Docs</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  </div>
  <footer id="footer-main">
    <div class="footer footer-dark bg-gradient-primary">
      <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="/">
            <p style="padding-top:15px;font-family: 'Shadows Into Light', cursive;font-size:30px">Sabikick</p>
              
                 </a>
                 <p>Restoring the glory of African players. <br> we find hope in players <br> We showcase players based on excellence and integrity</p>
                       </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">More</h6>
            <ul class="list-unstyled">
              <li><a href="/contactus">Contact Us</a></li>
              <li><a href="/aboutus">About Us</a></li>
              <li><a href="/faqs">Faq</a></li>
              <li><a href="#">News & Events</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Menu</h6>
            <ul class="list-unstyled text-small">
              <li><a href="/listplayers">Players</a></li>
              <li><a href="/listagents">Agents</a></li>
              <li><a href="/listscouts">Scouts</a></li>
              <li><a href="/listcoaches">Coaches</a></li>
              <li><a href="/listclubs">Clubs</a></li>
            </ul>
          </div>
       
        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
          <div class="col-md-6">
            <div class="copyright text-sm font-weight-bold text-center text-md-left">
              &copy; 2018-2019 <a href="https://webpixels.io/" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
 
      <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
      <script  src="{{asset('js/purpose.core.js')}}"></script>
        <!-- Page JS -->
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
        <!-- Purpose JS -->
        <script src="{{asset('js/purpose.js')}}"></script>
        <!-- Demo JS - remove it when starting your project -->
        <script src="{{asset('js/demo.js')}}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
       

        <script>
$(document).ready(function(){

 $('#country_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script>

</body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/secondary/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:50 GMT -->
</html>