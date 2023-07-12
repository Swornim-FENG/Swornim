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

        <li><a href="{{url('/')}}/properties">
          <i class="fas fa-home"></i>
          <span class="nav-item">Properties</span>
        </a></li>
    
        <li><a href="{{url('/')}}/tenants">
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
        <i class="fa fa-user"></i>
      </div>
      <div class="main-skills">
        <div class="card">
        <i class="fas fa-home"></i>
          <h3>Room 1</h3>
          <form action="{{url('/')}}/landlorddashboard" method="POST" enctype="multipart/form-data" >
            @csrf
         <label for="file-upload"></label>
         <input type="file" id="file-upload" name="file-upload" style="display: none">
           <button type="button" onclick="document.getElementById('file-upload').click()">Update</button>
          </form>
        
        </div>
        <div class="card">
          <i class="fas fa-home"></i>
          <h3>Flat 1</h3>
          <form action="{{url('/')}}/landlorddashboard" method="POST" enctype="multipart/form-data" >
            @csrf
         <label for="file-upload"></label>
         <input type="file" id="file-upload" name="file-upload" style="display: none">
           <button type="button" onclick="document.getElementById('file-upload').click()">Update</button>
          </form>
          
           
        </div>
        <div class="card">
          <i class="fas fa-home"></i>
          <h3>Room 2</h3>
          <form action="{{url('/')}}/landlorddashboard" method="POST" enctype="multipart/form-data" >
            @csrf
         <label for="file-upload"></label>
         <input type="file" id="file-upload" name="file-upload" style="display: none">
           <button type="button" onclick="document.getElementById('file-upload').click()">Update</button>
          </form>
        </div>

        <div class="card">
          <i class="fas fa-home"></i>
          <h3>Room 3</h3>
          <form  action="{{url('/')}}/landlorddashboard" method="POST" enctype="multipart/form-data" >
            @csrf
         <label for="file-upload"></label>
         <input type="file" id="file-upload" name="file-upload" style="display: none">
           <button type="button" onclick="document.getElementById('file-upload').click()">Update</button>
          </form>
        </div>
      </div>
      <br>
      <h1> Add Properties</h1>