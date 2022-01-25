
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
                   

                        <div class="loginform">
                            <section class="row justify-content-center">
                            <section class=" col-sm-6 ">
                            <div class="containerlogin">
                                <form method="POST" action="{{ route('login') }}" class="form-container">
                                    @csrf
                                <h2 class="login">Login Form</h2>
                                <div class="details">
                            <div class="form-group">
                              <label class="control-label col-sm-8" for="username">{{ __('E-Mail Address') }}</label>
                              <div class="col-sm-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-8" for="pwd">{{ __('Password') }}</label>
                              <div class="col-sm-12">          
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            </div>
                            <div class="form-group">  
                                <div class="row">     
                              <div class=" col-md-12">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                               

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                              </div>
                              </div>
                            </div>
                            <div class="form-group">  
                              <div class="row">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn login-btn">
                                        {{ __('Login') }}
                                    </button>
                                  </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        </section>
                        </section>
                        </div>

                       
                    </form>
    

