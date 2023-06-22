@extends('main');
@section('main-section')
@push('title')
   <title>Tenant SignUp</title>
   @endpush
<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <title>Signup Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Tenant_signup.css')}}" />
    
  </head>
  <body>
    <div class="logo-container">
      <img src="images/logoPrototype.png" alt="Logo" />
    </div>
    <br />
    <div class="signup-form">
      <h2 class="form_heading">Create Tenant Account</h2>
      <form action="{{url('/')}}/tenant" method="post">
      @csrf
        <div>
          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" name="firstName"value="{{old('firstName')}}"  />
          <span class="text-danger"style="color:red">
            @error('firstName')
               {{$message}}
               @enderror
               </span>
        </div>
        <div>
          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" name="lastName"value="{{old('lastName')}}"  />
          <span class="text-danger"style="color:red">
            @error('lastName')
               {{$message}}
               @enderror
               </span>
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email"value="{{old('email')}}" />
          <span class="text-danger"style="color:red">
            @error('email')
               {{$message}}
               @enderror
               </span>
        </div>
        <div>
          <label for="phoneNumber">Phone Number:</label>
          <input type="tel" id="phoneNumber" name="phoneNumber" value="{{old('phoneNumber')}}" >
          <span class="text-danger"style="color:red">
            @error('phoneNumber')
               {{$message}}
               @enderror
        </div>
        <div>
          <label for="address">Permanent Address:</label>
          <input type="text" id="address" name="per_address" value="{{old('per_address')}}" />
          <span class="text-danger"style="color:red">
            @error('per_address')
               {{$message}}
               @enderror
               </span>
        </div>
        <div>
          <label for="address2">Temporary Address:</label>
          <input type="text" id="address" name="tem_address"value="{{old('tem_address')}}"  />
          <span class="text-danger"style="color:red">
            @error('tem_address')
               {{$message}}
               @enderror
               </span>
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password"  />
          <span class="text-danger"style="color:red">
            @error('password')
               {{$message}}
               @enderror
               </span>
          <i class="fas fa-eye toggle-password" data-target="password"></i>
        </div>
        <div>
          <label for="password_confirmation">Confirm Password:</label>
          <input type="password" id="password_confirmation" name="password_confirmation"  />
          <span class="text-danger" style="color:red">
            @error('password_confirmation')
               {{$message}}
               @enderror
            </span>
          <i class="fas fa-eye toggle-password" data-target="password_confirmation"></i>
        </div>
        <input type="submit" value="Sign Up" />
      </form>
    </div>
    <div class="login-text">
      <p>Already have an account? <a href="{{url('/')}}/login">Login</a></p>
    </div>
    <div class="social-login">
      <button>Sign in with Google</button>
      <button class="google">Sign in with Facebook</button>
    </div>
    <script src="{{asset('js/Tenant_signup.js')}}">
      </script>
  </body>
</html>
@endsection