
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/board-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
        <title>Sabikick.com</title><!-- Favicon -->
          <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                                <a class="nav-link" href="#" >Footballers</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="#" >Scouts</a>
                            </li>
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="#" >Coaches</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="#" >Agents</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="#" >Clubs</a>
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
  <!-- Omnisearch -->
 
  <div class="main-content">
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" data-offset-top="#header-main">
      <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row">
          <div class=" col-lg-12">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-md-5 mb-4 mb-md-0">
                <span class="h2 mb-0 text-white d-block">Hello, Admin</span>
                <span class="text-white">Have a nice day!</span>
              </div>
         
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
            <a href="/{{Auth::user()->username}}" class="btn btn-icon btn-group-nav shadow btn-neutral">
                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
              </a>
              <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
                <div class="btn-group" role="group">
                  <button id="btn-group-settings" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-sliders-h"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Manage Users</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <a class="dropdown-item" href="/adminhome">View Users</a>
                    <a class="dropdown-item" href="/userstats">User statistics</a>
                  
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-boards" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Manage Pages</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                    <a class="dropdown-item" href="">Blog Post</a>
                    <a class="dropdown-item" href="">Faqs</a>
                    <a class="dropdown-item" href="">Home Page</a>
                    <a class="dropdown-item" href="">Testimonies</a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                 
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice bg-section-secondary">
      <div class="container">
        <!-- Stats -->
        <div class="mb-5">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-primary border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="far fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="far fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="far fa-user"></i>
                      </div>
                    </div>
                    <div class="pl-4">
                      <span class="d-block h5 text-white mr-2 mb-1">{{count($countfootballers)}}</span>
                      <span class="text-white">Footballers</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-info border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="far fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="far fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="far fa-user"></i>
                      </div>
                    </div>
                    <div class="pl-4">
                      <span class="d-block h5 text-white mr-2 mb-1">{{count($countcoaches)}}</span>
                      <span class="text-white">Coaches</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-dark border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="far fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="far fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="far fa-user"></i>
                      </div>
                    </div>
                    <div class="pl-4">
                      <span class="d-block h5 text-white mr-2 mb-1">{{count($countscout)}}</span>
                      <span class="text-white">Scouts</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-primary border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="far fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="far fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="far fa-user"></i>
                      </div>
                    </div>
                    <div class="pl-4">
                      <span class="d-block h5 text-white mr-2 mb-1">{{count($countagent)}}</span>
                      <span class="text-white">Agents</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-info border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="far fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="far fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="far fa-file-alt"></i>
                      </div>
                    </div>
                    <div class="pl-4">
                      <span class="d-block h5 text-white mr-2 mb-1">{{count($countclubs)}}</span>
                      <span class="text-white">Clubs</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
       


            
          </div>
        </div>
        <!-- Today's meetings -->
  
        <!-- Project stats -->
      
      </div>
    </section>
  </div>
  <footer class="footer p-0 footer-light bg-section-secondary" id="footer-main">
    <div class="container">
      <div class="py-4">
        <div class="row align-items-md-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="d-flex align-items-center">
              <p class="text-sm mb-0">&copy; Sabikick.  <a href="https://www.sabikick.com" target="_blank">Sabikick</a>. All rights reserved.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="/aboutus">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contactus">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/faqs">Faqs</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-4">
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
  
  <script  src="{{asset('js/purpose.core.js')}}"></script>
     
     <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>

     <script src="{{asset('js/purpose.js')}}"></script>

     <script src="{{asset('js/demo.js')}}"></script>
     <script src="{{asset('js/crudadmin.js')}}"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>

  
</body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/board-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:55 GMT -->
</html>