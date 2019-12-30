@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/board-connections.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sabikick.. Africa to the world">
 <meta name="author" content="Habib">
  @section('title','|{{$user->username}}')
 <!-- Favicon -->
 @laravelPWA
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                                     
                                        <a class="dropdown-item" href="/settings/{{Auth::user()->username}}">
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
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" data-offset-top="#header-main">
      <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row">
          <div class=" col-lg-12">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-md-5 mb-4 mb-md-0">
                <span class="h2 mb-0 text-white d-block">Morning, Name here</span>
                <span class="text-white">Have a nice day!</span>
              </div>
             
            </div>
            <!-- Account navigation -->
        
          </div>
        </div>
      </div>
    </section>
    <section class="slice bg-section-secondary">
      <div class="container">
    
      <?php
$recever=Route::input('id');	
$id=Auth::id();
$user = DB::table('users')->where('id',$recever)->first();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1" > 
            <div >
            
         
          <div class="msg_history">
          <div class="panel-body" id="scrolltoheight">
          <div   id="chat-message"> 
                       </div>
</div>
          </div>
          <div class="type_msg">
          <div class="typing"><p id="typing"></p></div> 
          <form id="message-submit" action="{{URL::to('/send-message')}}" method="post"> 
          <input type="hidden" name="_token"id="token-message"value="{{csrf_token()}}">

            <div class="input_msg_write">
        
              <input onkeyup="typing()" id="message" type="text"name="message"required class="write_msg" placeholder="Type your message here..." />
            
              <button class="msg_send_btn" type="submit" id="btn-chat"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
</form>

          </div>
        </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
  


<script> 

 setInterval(ajaxCall,1000); 
 setInterval(typinc_receve,1000); 

 function ajaxCall() {
    

    var oldMessage=$("#chat-message li").length;
    var oldscrollHeight = $("#scrolltoheight").prop("scrollHeight");
     $.ajax({
         type:'get',
         url:'{{URL::to('/chat')}}/'+<?php echo $recever;?>,
         datatype:'html',
         success:function(response){
                $('#chat-message').html(response);
                var newscrollHeight = $("#scrolltoheight").prop("scrollHeight"); //Scroll height after the request
                var newMessage=$("#chat-message li").length;
                if(newscrollHeight > oldscrollHeight){
					$("#scrolltoheight").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div

                }
              
            }
         });
 }
 function typinc_receve() {

     $.ajax({
         type:'get',
         url:'{{URL::to('/typing-receve')}}/'+<?php echo $recever;?>,
         datatype:'html',
         success:function(response){
                if(response==0){
                  $('#typing').hide('slow');
                }else{
                    $('#typing').show();
                    $('#typing').html(response);

                }
               
              
            }
         });
 }
 function typing() {
    var text=$('#message').val();
    var token=$('#token-message').val();
   
     $.ajax({
         type:'post',
         url:'{{URL::to('/typing')}}',
         datatype:'html',
         success:function(response){
               console.log(response); 
            },
         data:{
                 text:text,
                 recever:<?php echo $recever;?>,
                 _token:token,
                 
             }
         });
 }
function deleteMessage(id){
    $('#'+id).hide();
    var sender=id;
    $.ajax({
        type:'get',
        url:'{{URL::to('/deletemessage')}}/'+sender,
        datatype:'html'
        });
}
 $('#message-submit').on('submit',function(e){
    $('#message').focus();
 e.preventDefault();
 var message=$('#message').val();
 var token=$('#token-message').val();
     $.ajax({
             type:'post',
             url:'{{URL::to('/send-message')}}',
             data:{
                 message:message,
                 recever:<?php echo $recever;?>,
                 sender:<?php echo $id;?>,
                 _token:token,
                 
             }
         
             });
             document.getElementById('message-submit').reset();
           
 });


   </script>
   

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
  

  <script src="{{ asset('js/app.js') }}"></script>

  <script  src="{{asset('js/purpose.core.js')}}"></script>
        <!-- Page JS -->
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
        <!-- Purpose JS -->
        <script src="{{asset('js/purpose.js')}}"></script>
        <!-- Demo JS - remove it when starting your project -->
        <script src="{{asset('js/demo.js')}}"></script>
        <script src="{{asset('js/chat.js')}}"></script>
     
</body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/board-connections.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:11 GMT -->
</html>