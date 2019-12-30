
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/utility/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
        <title>Kick.com</title><!-- Favicon -->
        <!-- Favicon -->
        @laravelPWA
        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
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
                    <a class="navbar-brand mr-lg-5" href="index-2.html">
                    <!-- <img alt="Image placeholder" src="{{asset('img/brand/white.png')}}" id="navbar-logo" style="height: 50px;">
                 -->
                  <p style="padding-top:15px;font-family: 'Shadows Into Light', cursive;font-size:30px">Sabikick</p>
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

                                            <a href="/faqs" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                        
                                                    <!-- Media body -->
                                            
                                                        <p class="mb-0">Faqs</p>
                                              
                                                </div>
                                            </a>
                                            <a href="/showallposts" class="list-group-item list-group-item-action" role="button">
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
  <!-- Omnisearch -->
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
    <!-- Spotlight -->
    <section class="slice slice-lg bg-gradient-primary" data-offset-top="#header-main">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="display-4 text-white">Faq</h2>
            <h5 class="mb-4 text-white">Frequently asked questions</h5>
          </div>
        </div>
      </div>
      <a href="#sct-faq" class="tongue tongue-bottom tongue-section-primary scroll-me">
        <i class="far fa-angle-down"></i>
      </a>
    </section>
    <section class="slice slice-lg" id="sct-faq">
      <div class="container">
        <div class="row row-grid">
          <div class="col-lg-3">
            <!-- Side menu -->
     
          </div>
          <div class="col-lg-8 ml-lg-auto">
            <!-- Theme integration -->
            <div class="mb-5">
              <h4 class="mb-4" id="theme-integration">Our Faqs</h4>
              <!-- Accordion -->
              <div id="accordion-1" class="accordion accordion-spaced">
                <!-- Accordion card 1 -->

                @foreach($faq as $fq)
                <div class="card">
                  <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                    <h6 class="mb-0"><i class="far fa-file-pdf mr-3"></i>{{$fq->header ?? 'No header'}}</h6>
                  </div>
                  <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                    <div class="card-body">
                     <p>{{$fq->body ?? 'N/A'}}</p>
                      </div>
                  </div>
                </div>
               @endforeach

                <!-- Accordion card 2 -->
             
              </div>
              <!-- Scroll to top -->
              <div class="text-right py-4">
                <a href="#theme-integration" data-scroll-to data-scroll-to-offset="50" class="text-sm font-weight-bold">Back to top<i class="far fa-long-arrow-alt-up ml-2"></i></a>
              </div>
            </div>
            <!-- Customization  -->
           
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action (v5) -->
   
  </div>
  <footer id="footer-main">
    <div class="footer footer-dark bg-gradient-primary">
      <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="#">
            <p style="padding-top:15px;font-family: 'Shadows Into Light', cursive;font-size:30px">Sabikick</p>
              
                 </a>
                 <p>Restoring the glory of African players. <br> we find hope in players <br> We shoecase players based on excellence and integrity</p>
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
              <li><a href="#">Footballers</a></li>
              <li><a href="#">Agents</a></li>
              <li><a href="#">Scouts</a></li>
              <li><a href="#">Coaches</a></li>
              <li><a href="#">Clubs</a></li>
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


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/utility/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:17 GMT -->
</html>