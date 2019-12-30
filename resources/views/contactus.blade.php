<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/secondary/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
        <title>Sabikick.com</title><!-- Favicon -->
          <!-- Favicon -->
        @laravelPWA

        <!--  -->

        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">
        <script src="{{asset('libs/typed.js/lib/typed.min.js')}}"></script>
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
     
      <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
                                        <h6 class="dropdown-header">{{ Auth::user()->username}}</h6>
                                        <a class="dropdown-item" href="/{{Auth::user()->username}}">
                                            <i class="far fa-user"></i>Account
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

  <div class="main-content">
    <section class="slice bg-primary pb-250" data-offset-top="#header-main">
      <!-- SVG background -->
      <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
        <figure class="w-100 d-none d-lg-block">
          <img alt="Image placeholder" src="{{asset('img/svg/backgrounds/bg-3.svg')}}" class="svg-inject">
        </figure>
      </div>
      <div class="container py-5 pt-lg-6 position-relative zindex-100">
        <div class="row">
          <div class="col-lg-5">
            <h1 class="text-white">Have anything in mind?</h1>
            <p class="lead text-white mt-4">we are always available to hear from you 24/7.</p>
            <a href="#sct_contact_form" class="btn btn-secondary rounded-pill btn-icon hover-translate-y-n3 mt-4" data-scroll-to data-scroll-to-offset="140">
              <span class="btn-inner--icon"><i class="far fa-pencil-alt"></i></span>
              <span class="btn-inner--text">Write a message</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="slice slice-lg pt-lg-5">
      <div class="container position-relative zindex-100">
        <div class="row mt--200">
          <div class="col-lg-6">
            <div class="card bg-dark opacity-container text-white overflow-hidden shadow border-0">
              <a href="#" data-fancybox data-type="iframe" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.565017836055!2d-122.41879278507707!3d37.77679637975909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c6c8f4459%3A0xb10ed6d9b5050fa5!2sTwitter+HQ!5e0!3m2!1sen!2sro!4v1524131359924">
                <div class="card-img-bg" style="background-image: url('../../assets/img/theme/light/city-1.jpg');"></div>
                <span class="mask bg-gradient-primary opacity-9 opacity-8--hover"></span>
                <div class="card-body px-5 py-5">
                  <div style="min-height: 250px;">
                    <h2 class="h2 text-white font-weight-bold mb-4">Branch Office</h2>
                    <h5 class="text-white mt-4 mb-2">sabikick@gmail.com</h5>
                    <h5 class="text-white">08121461792</h5>
                  </div>
                  <span class="text-white text-uppercase font-weight-bold">
                    See on map
                    <i class="far fa-angle-right ml-2"></i>
                  </span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card bg-dark opacity-container text-white overflow-hidden shadow border-0">
              <a href="#" data-fancybox data-type="iframe" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.8888618501214!2d-73.97667638497174!3d40.7644690793262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f07d5da561%3A0x61f6aa300ba8339d!2sThe+Plaza!5e0!3m2!1sen!2sro!4v1524131511734">
                <div class="card-img-bg" style="background-image: url('../../assets/img/theme/light/city-2.jpg');"></div>
                <span class="mask bg-gradient-dark opacity-9 opacity-8--hover"></span>
                <div class="card-body px-5 py-5">
                  <div style="min-height: 250px;">
                    <h2 class="h2 text-white font-weight-bold mb-4">Head Office</h2>
                    <h5 class="text-white mt-4 mb-2">sabikick@gmail.com</h5>
                    <h5 class="text-white">08121461792</h5>
                  </div>
                  <span class="text-white text-uppercase font-weight-bold">
                    See on map
                    <i class="far fa-angle-right ml-2"></i>
                  </span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="sct_contact_form" class="slice slice-lg" data-delimiter-before="1">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-lg-6">
            <h3>Contact us</h3>
            <p class="lead">If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help</p>
            <form class="mt-5">
              <div class="form-group">
                <label class="sr-only">Your name</label>
                <input class="form-control form-control-lg" placeholder="Your name" type="text">
              </div>
              <div class="form-group">
                <label class="sr-only">Email address</label>
                <input class="form-control form-control-lg" placeholder="Email address" type="text">
              </div>
              <div class="form-group">
                <label class="sr-only">Type your message</label>
                <textarea class="form-control form-control-lg textarea-autosize" rows="5" placeholder="Type your message"></textarea>
              </div>
              <button type="submit" class="btn btn-dark rounded-pill mt-4">Send message</button>
            </form>
          </div>
          <div class="col-lg-5 ml-lg-auto">
            <h3>2, Oguntokun Street,<br>Olodi Apapa,Lagos</h3>
            <p class="lead my-4">E: <a href="#">sabikick@gmail.com</a><br>08121461792</p>
            <p>Sabikick, Connecting African talent.</p>
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
            <a href="">
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
              <li><a href="/showallposts">News & Events</a></li>
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
              &copy; 2018-2019 <a href="http://sabikick.com" class="font-weight-bold" target="_blank">Sabikick</a>. All rights reserved.
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
 
  <script src="{{ asset('js/app.js') }}"></script>
        <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
      <script  src="{{asset('js/purpose.core.js')}}"></script>
      
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
      
        <script src="{{asset('js/purpose.js')}}"></script>
       
        <script src="{{asset('js/demo.js')}}"></script>
     
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


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/secondary/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:52 GMT -->
</html>