<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Landlord</title>
  <link rel="stylesheet" href="{{asset('css/landlorddashboard.css')}}" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          
          <span class="nav-item">DashBoard</span>
        </a></li>

        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>

        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Properties</span>
        </a></li>
    
        <li><a href="">
          <i class="fas fa-users"></i>
          <span class="nav-item">Tenants</span>
        </a></li>

        <li><a href="">
          <i class="fas fa-check-circle"></i>
          <span class="nav-item">Bookings</span>
        </a></li>
        
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>

        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>

        <li><a href="" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
        
      </ul>
    </nav>
   
    <section class="main">
      <div class="main-top">
        <h1>Properties</h1>
        <i class="fa fa-user">-Swornim</i>
      </div>
      <div class="main-skills">
        <div class="card">
        <i class="fas fa-home"></i>
          <h3>Room 1</h3>
          
          <button>Update</button>
        </div>
        <div class="card">
          <i class="fas fa-home"></i>
          <h3>Flat 1</h3>
          
          <button>Update</button>
        </div>
        <div class="card">
          <i class="fas fa-home"></i>
          <h3>Room 2</h3>
          
          <button>Update</button>
        </div>
        <div class="card">
          <i class="fas fa-home"></i>
          <h3>Room 3</h3>
          
          <button>Update</button>
        </div>
      </div>

      <section class="main-course">
        <h1>Tenants</h1>
        <div class="course-box">
          <ul>
            <li class="active">In Agreement</li>
            <li>Requests</li>
            <li>finished</li>
          </ul>
          <div class="course">
            <div class="box">
              <h3>Rikshal</h3>
              <p>80% - Completed</p>
              <button>continue</button>
              <i class="fa fa-user"></i>
            </div>
            <div class="box">
              <h3>Arpan</h3>
              <p>50% - Completed</p>
              <button>continue</button>
              <i class="fa fa-user"></i>
            </div>
            <div class="box">
              <h3>Kundan</h3>
              <p>30% - Completed</p>
              <button>continue</button>
              <i class="fa fa-user"></i>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html>

