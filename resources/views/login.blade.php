<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In || MSH</title>
    <link rel="stylesheet" href={{asset('css/login.css')}}>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <form action="home.html"method="post">
  <div class="box" >
    <div class="container">
        <div class="top">
            <span>Have an account?</span>
            <header>Login</header>
        </div>
        <div class="input-field">
            <input type="text"name="Username" class="input" placeholder="Username" required>
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="Password" name="Password" class="input" placeholder="Password" required>
            <i class='bx bx-lock-alt'></i>
        </div>
        <div class="input-field">
            <input type="submit" class="submit" value="Login" >
        </div>
        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="remember" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="">Forgot password?</a></label>
            </div>
        </div>
        <div class="b"></div>
        <div class="or">
            ----- or continue with -----</div>
          </p>
          <div class="icons">
            <a href="https://www.google.com/"><i class="fab fa-google"></i></a>
          
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
          </div>
        
    </div>
</div>  
</form>
</body>
</html>