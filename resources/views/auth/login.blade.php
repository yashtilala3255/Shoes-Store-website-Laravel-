<!DOCTYPE html>
<html lang="en">

<head>
  <title>Adidas || Login Page</title>
  @include('backend.layouts.head')
  <style>
    /* Custom background for the left rectangle */
    .bg-login-image {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #ffffff; /* White background */
    }

    .bg-login-image img {
      max-width: 80%; /* Image scales responsively */
      height: auto;
      border-radius: 10px; /* Optional: rounded corners */
    }
  </style>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- Left Rectangle with Image -->
              <div class="col-lg-6 d-flex justify-content-center align-items-center bg-login-image">
                <img src="{{ asset('login.png') }}" alt="Login Image">
              </div>
              <!-- Right Side: Login Form -->
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>

                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" 
                             name="email" value="{{ old('email') }}" id="exampleInputEmail" 
                             placeholder="Enter Email Address..." required autocomplete="email" autofocus>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" 
                             id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="current-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>

                  <!-- Forgot Password -->
                  <div class="text-center">
                    @if (Route::has('password.request'))
                      <a class="btn btn-link small" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                      </a>
                    @endif
                  </div>

                </div> <!-- End p-5 -->
              </div> <!-- End col-lg-6 -->
            </div> <!-- End row -->
          </div>
        </div>

      </div> <!-- End col-xl-10 -->

    </div> <!-- End row justify-content-center -->

  </div> <!-- End container -->

</body>

</html>

<!-- rating S & M 

58.52  S
96.98  M -->

