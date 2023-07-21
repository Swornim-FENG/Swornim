
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginheader.css')}}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
   <title>My second Home</title>
   
  </head>
  <body>
    <script>
      const toggle = () => {
        document.getElementById("nav").classList.toggle("navactive");
      };
    </script>
    <header>
      <div class="brand">
        <span class="Logo"></span>
        <h1>Tenant</h1>
      </div>
      <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>
      <div class="navbar" id="nav">
        <div class="searchBox">
          <input type="text" placeholder="Search" />
          <span class="fas fa-search" id="searchIcon"></span>
        </div>
        <ul>
          <li>
            <span class="fas fa-home" id="headIcon"></span>
            <a href="{{url('/')}}/homepage"> Home </a>
          </li>
          <li>
            <span class="fa fa-user-circle" id="headIcon"></span>
            <a href="{{url('/')}}/about"> Profile </a>
          </li>
          <li>
            <span class="fas fa-question-circle" id="headIcon"></span>
            <a href="#"> Help </a>
          </li>
          <li>
            <span class="fas fa-lock" id="headIcon"></span>
            <a href="#"> Account </a>
          </li>
          <li>
            <span class="fa fa-sign-out" id="headIcon"></span>
            <a href="#"> Signout </a>
          </li>
        </ul>
      </div>
    </header>
  </body>
</html>
