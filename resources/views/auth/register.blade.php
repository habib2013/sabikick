

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
        <title>Sabikick.com</title><!-- Favicon -->
          <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">
</head>

<body>
 
  <!-- Omnisearch -->

  <div class="main-content" style="margin-top:-130px">
    <section class="slice slice-lg min-vh-100 d-flex align-items-center bg-section-secondary">
      <!-- SVG background -->
      
      <div class="container py-5 px-md-0 d-flex align-items-center">
        <div class="w-100">
          <div class="row row-grid justify-content-center justify-content-lg-between align-items-center">
          <div class="col-sm-8 col-lg-6 col-xl-5 order-lg-2">
              <div class="card shadow zindex-100 mb-0">
                <div class="card-body px-md-5 py-5">
                  <!-- <div class="mb-5">
                    <h6 class="h3">Create account</h6>
                    
                  </div> -->
                 
                  <form role="form" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                      <!-- <label class="form-control-label">Full name</label> -->
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>    
                        <input id="input-email" placeholder="Full Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                      </div>
                    </div>


                    <div class="form-group">
                      <!-- <label class="form-control-label">Username</label> -->
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>    
                        <input id="input-email" placeholder="Username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                      </div>
                    </div>
                    <input id="status" name="status" type="hidden" value="disable">

                    <div class="form-group">
                      <!-- <label class="form-control-label">Email address</label> -->
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-envelope"></i></span>
                        </div>
                     
                        <input id="email" id="input-email" type="email" placeholder="e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                     
                      </div>
                    </div>
                   

                    <div class="form-group mb-4">
                      <!-- <label class="form-control-label">Type</label> -->
                      <div class="input-group input-group-merge">
                      
                 <select name="usertype" id="usertype" class="form-control">
                 <option value="player">Player</option>
                 <option value="coach">Coach</option>
                 <option value="agent">Agent</option>
                 <option value="scout">Scout</option>
                 <option value="club">Club</option>
                 </select>
                      </div>
                      
                    </div>
                    <div class="form-group mb-4">
                      <!-- <label class="form-control-label">Password</label> -->
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-key"></i></span>
                        </div>




                        
                      <input id="input-password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="far fa-eye"></i>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <!-- <label class="form-control-label">Confirm password</label> -->
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-key"></i></span>
                        </div>
                    
                        <input  id="input-password-confirm" placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        
                      </div>
                    </div>
                 
                    <div class="mt-4"><button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                        <span class="btn-inner--text">Create my account</span>
                        <span class="btn-inner--icon"><i class="far fa-long-arrow-alt-right"></i></span>
                      </button></div>
                  </form>
                </div>
                <div class="card-footer px-md-5"><small>Already have an acocunt?</small>
                  <a href="/login" class="small font-weight-bold">Sign in</a></div>
              </div>
            
            </div>
             
            <div class="col-lg-5 order-lg-1 d-none d-lg-block">
              <blockquote>
                <h3 class="h2 mb-4">Keep your face always toward the sunshine - and shadows will fall behind you.</h3>
                <footer>— <cite class="text-lg">John Sulivan</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 
  <!-- Customizer modal -->
 
  <script  src="{{asset('js/purpose.core.js')}}"></script>
        <!-- Page JS -->
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
        <!-- Purpose JS -->
        <script src="{{asset('js/purpose.js')}}"></script>
        <!-- Demo JS - remove it when starting your project -->
        <script src="{{asset('js/demo.js')}}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104437451-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-104437451-1');
        </script>
</body>
</html>
