<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Landlord</title>
  <link rel="stylesheet" href="{{asset('css/landlorddashboard.css')}}" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<header class="header">
    <div class="logo">
    <img class="logo" src="{{asset('images/logoPrototype.png')}}"alt="Logo" style="width: 100px; margin-right: 10px;" />
      
    </div>

    <div class="header-icons">
    @if($rentstatus->count() > 0)
      <i class="fas fa-bell"style="color: #ff6000;"></i>
      @else
      <i class="fas fa-bell"></i>
      @endif

      
      <i class="fas fa-user"></i>
      <h4>{{$username}}</h4>
      
    </div>
  </header>
  
  <div class="container">
    <nav >
      <ul>
        
          
          <span class="nav-item"></span>
        </a></li>

        <li><a href="{{url('/')}}/landlord/dashboard">
          <i class="fas fa-user"></i>
          <span class="nav-item">DashBoard</span>
        </a></li>

        <li><a href="{{url('/')}}/properties">
          <i class="fas fa-home"></i>
          <span class="nav-item">Properties</span>
        </a></li>
    
        <li><a href="{{url('/')}}/landlord/addproperty">
          <i class="fas fa-plus"></i>
          <span class="nav-item">Add Property</span>
        </a></li>

        <li><a href="{{url('/')}}/landlord/showtenants">
          <i class="fas fa-users"></i>
          <span class="nav-item">Tenants</span>
        </a></li>

       
        
        <!-- @if($rentstatus->count() > 0)
    <li>
        <a href="{{ url('/') }}/landlord/notifications">
            <i class="fas fa-bell" style="color: red;"></i>
            <span class="nav-item">Notifications</span>
        </a>
    </li>
@else
    <li>
        <a href="{{ url('/') }}/landlord/notifications">
            <i class="fas fa-bell"></i>
            <span class="nav-item">Notifications</span>
        </a>
    </li>
@endif -->
@if($rentstatus->isEmpty())
    <li>
        <a href="{{ url('/') }}/landlord/notifications">
            <i class="fas fa-bell"></i>
            <span class="nav-item">Notifications</span>
        </a>
    </li>
@else
    <li>
        <a href="{{ url('/') }}/landlord/notifications">
        <i class="fas fa-bell" style="color:#ff6000;"></i>
            <span class="nav-item">Notifications</span>
            <span class="notification-count">{{$rentstatus->count()}} </span>
        </a>
    </li>
@endif

        

        <li><a href="{{url('/')}}/logout" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
        
      </ul>
    </nav>
   @yield('main-section')
    
 

    </div>
  </div>
  </div>
</body>
</html>


