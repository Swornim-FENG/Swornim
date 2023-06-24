@extends('main2');
@section('main-section')
@push('title')
   <title>Lanlord SignUp</title>
   @endpush
<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <title>Signup Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Lanlord_signup.css')}}" />
    
  </head>
  <body>
    <div class="logo-container">
      <img src="images/logoPrototype.png" alt="Logo" />
    </div>
    <br />
    <div class="signup-form">
      <h2 class="form_heading">Create Lanlord Account</h2>
      <form action="{{url('/')}}/lanlord" method="post">
      @csrf
        <div>
          <label for="Firstname">First Name:</label>
          <input type="text" id="Firstname" name="Firstname"value="{{old('Firstname')}}"  />
          <span class="text-danger"style="color:red">
            @error('Firstname')
               {{$message}}
               @enderror
               </span>
        </div>
        <div>
          <label for="Lastname">Last Name:</label>
          <input type="text" id="Lastname" name="Lastname"value="{{old('Lastname')}}"  />
          <span class="text-danger"style="color:red">
            @error('Lastname')
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
          <label for="phone_number">Phone Number:</label>
          <input type="tel" id="phone_number" name="phone_number" value="{{old('phone_number')}}" >
          <span class="text-danger"style="color:red">
            @error('phone_number')
               {{$message}}
               @enderror
        </div>
        <div>
          <label for="address">Permanent Address:</label>
          <input type="text" id="address" name="permanent_address" value="{{old('permanent_address')}}" />
          <span class="text-danger"style="color:red">
            @error('permanent_address')
               {{$message}}
               @enderror
               </span>
        </div>
        <div>
          <label for="address2">Temporary Address:</label>
          <input type="text" id="address" name="temporary_address"value="{{old('temporary_address')}}"  />
          <span class="text-danger"style="color:red">
            @error('temporary_address')
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
    <script src="{{asset('js/Lanlord_signup.js')}}">
      </script>
  </body>
</html>
@endsection