<!DOCTYPE html>
<html>
  <head>
    <title>Signup Page</title> 
    <link rel="stylesheet" href={{asset('css/signup.css')}}>
  </head>
  <body>
    <div class="logo-container">
      <img src="images/logoPrototype.png" alt="Logo" />
    </div>
    <br />

    <div class="signup-form">
      <h2>Create an Account</h2>
      <form action="{{url('/')}}/signup" method="post">
        @csrf
        <div>
          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" name="firstName" value="{{old('firstName')}}" />
          <span class="text-danger">
            @error('firstName')
               {{$message}}
               @enderror
          </span>
        </div>

        <div>
          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" name="lastName" value="{{old('lastName')}}" />
          <span class="text-danger">
          @error('lastName')
               {{$message}}
               @enderror
          </span>
        </div>

        <div>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username"value="{{old('username')}}"  />
          <span class="text-danger">
          @error('username')
               {{$message}}
               @enderror
          </span>
        </div>

        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="{{old('email')}}" />
          <span class="text-danger">
          @error('email')
               {{$message}}
               @enderror
          </span>
        </div>

        <div>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" />
          <span class="text-danger">
          @error('password')
               {{$message}}
               @enderror
          </span>
        </div>

        <div>
          <label for="password_confirmation">Confirm Password:</label>
          <input type="password" id="password_confirmation" name="password_confirmation"  />
          <span class="text-danger">
          @error('password_confirmation')
               {{$message}}
               @enderror
          </span>
        </div>

        <input type="submit" value="Sign Up" />
      </form>
    </div>

    <div class="login-text">
      <p>Already have an account? <a href="{{url('/')}}/login">Login</a></p>
    </div>

    <
  </body>
</html>