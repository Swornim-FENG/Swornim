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
      <form action="home.html">
        <div>
          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" name="firstName" required />
        </div>

        <div>
          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" name="lastName" required />
        </div>

        <div>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required />
        </div>

        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
        </div>

        <div>
          <label for="password1">Password:</label>
          <input type="password" id="password1" name="password1" required />
        </div>

        <div>
          <label for="password2">Confirm Password:</label>
          <input type="password" id="password2" name="password2" required />
        </div>

        <input type="submit" value="Sign Up" />
      </form>
    </div>

    <div class="login-text">
      <p>Already have an account? <a href="login.html">Login</a></p>
    </div>

    <
  </body>
</html>