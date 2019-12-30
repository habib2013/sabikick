
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/listing-users.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:13 GMT -->
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
                                        <a class="dropdown-item" href="/profile/{{Auth::user()->id}}">
                                            <i class="far fa-user"></i>Account
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="float-right badge badge-primary">4</span>
                                            <i class="far fa-envelope"></i>Messages
                                        </a>
                                        <a class="dropdown-item" href="/settings/{{Auth::user()->id}}">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="index-2.html">Overview</a>
                            </li>
                            <!-- Pages menu -->
                        
                            <!-- Sections menu -->
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sections</a>
                               
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                    <ul class="list-group list-group-flush">
                                        <li>
                                            <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder" src="{{asset('img/icons/essential/detailed/DOC_File.svg')}}"  class="svg-inject img-fluid" style="height: 50px;">
                                                    </figure>
                                                    <!-- Media body -->
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1">General posts</h6>
                                                        <p class="mb-0">Awesome section examples for any scenario.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder" src="{{asset('img/icons/essential/detailed/Mobile_UI.svg')}}"  class="svg-inject img-fluid" style="height: 50px;">
                                                    </figure>
                                                    <!-- Media body -->
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1">From who i follow</h6>
                                                        <p class="mb-0">Awesome section examples for any scenario.</p>
                                                    </div>
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
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" data-offset-top="#header-main">
      <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row">
          <div class=" col-lg-12">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-md-5 mb-4 mb-md-0">
                <span class="h2 mb-0 text-white d-block">Hello Habib</span>
                <span class="text-white">Have a nice day!</span>
              </div>
            
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <a href="account-profile-public.html" class="btn btn-icon btn-group-nav shadow btn-neutral">
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
                    <a class="dropdown-item" href="account-profile-public.html">View Users</a>
                    <a class="dropdown-item" href="/userstats">User statistics</a>
                  
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-boards" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Manage Pages</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                    <a class="dropdown-item" href="board-overview.html">Blog Post</a>
                    <a class="dropdown-item" href="/makefaqs">Faqs</a>
                    <a class="dropdown-item" href="board-tasks.html">Home Page</a>
                    <a class="dropdown-item" href="board-connections.html">Testimonies</a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-listing" type="button" class="btn btn-neutral btn-icon rounded-right" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-list-ul"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Listing</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <span class="dropdown-header">Tables</span>
                    <a class="dropdown-item" href="listing-orders.html">Orders</a>
                    <a class="dropdown-item" href="listing-projects.html">Projects</a>
                    <span class="dropdown-header">Flex</span>
                    <a class="dropdown-item" href="listing-users.html">Users</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice bg-section-secondary">
      <div class="container">
        <!-- Section title -->
        <div class="actions-toolbar py-2 mb-4">
          <div class="actions-search" id="actions-search">
            <div class="input-group input-group-merge input-group-flush">
              <div class="input-group-prepend">
                <span class="input-group-text bg-transparent"><i class="far fa-search"></i></span>
              </div>
              <input type="text" class="form-control form-control-flush" placeholder="Type and hit enter ...">
              <div class="input-group-append">
                <a href="#" class="input-group-text bg-transparent" data-action="search-close" data-target="#actions-search"><i class="far fa-times"></i></a>
              </div>
            </div>
          </div>
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <h5 class="mb-1">Faqs</h5>
             </div>
            <div class="col text-right">
              <div class="actions"><a href="#" class="action-item mr-2" data-action="search-open" data-target="#actions-search"><i class="far fa-search"></i></a>
                <div class="dropdown mr-2">
                  <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-filter"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">
                      <i class="far fa-sort-amount-down"></i>Newest
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="far fa-sort-alpha-down"></i>From A-Z
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="far fa-sort-alpha-up"></i>From Z-A
                    </a>
                  </div>
                </div><a href="#" class="action-item mr-2"><i class="far fa-sync"></i></a>
                <div class="dropdown" data-toggle="dropdown">
                  <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                    <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-change-username" >+ Faqs</button>
                    </a>
                    <a href="#" class="dropdown-item">Manage Widgets</a>
                    <a href="#" class="dropdown-item">Settings</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   
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
                    <h6 class="mb-0"><i class="far fa-file-pdf mr-3"></i>{{$fq->header ?? 'No Header'}}</h6>     
                
                  </div>
                 
                  <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                    <div class="card-body">
                     <p>{{$fq->body ?? 'No body'}}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6"> 
                      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-change-username">
                    <button class="btn btn-primary open-modal" value="{{$fq->id}}">View
                            </button>   
                       
               
                      
                    </a>
                            </div>
                      <div class="col-6">    
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

        <!-- Load more -->
        <div class="mt-4 text-center">
          <a href="#" class="btn btn-sm btn-neutral rounded-pill shadow hover-translate-y-n3">Load more ...</a>
        </div>
      </div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modal-change-username" tabindex="-1" role="dialog" aria-labelledby="modal-change-username" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="modalFormData" name="modalFormData" class="form-horizontal" novalidate="">
        @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title d-flex align-items-center" id="modal-title-change-username">
                        <div>
                            <div class="icon icon-sm icon-shape icon-info rounded-circle shadow mr-3">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-0">Add Faqs</h6>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">Header</label>
                                <input class="form-control" type="text" name="header" id="header">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">Body</label>
                                <input class="form-control" type="text" name="body" id="body">
                            </div>
                        </div>

                   
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary"  id="btn-save" value="add">Add Faqs</button>
                    <input type="hidden" id="faq_id" name="faq_id" value="0">
                  </div>
            </div>
        </form>
    </div>
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
        <script src="{{asset('js/crudfaqs.js')}}"></script>



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




</html>