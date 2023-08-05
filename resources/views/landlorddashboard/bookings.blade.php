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

        <li><a href="{{url('/')}}/profile">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>

        <li><a href="{{url('/')}}/properties">
          <i class="fas fa-home"></i>
          <span class="nav-item">Properties</span>
        </a></li>

        <li><a href="{{url('/')}}/landlord/addproperty">
          <i class="fas fa-plus"></i>
          <span class="nav-item">Add Property</span>
        </a></li>
    
        <li><a href="{{url('/')}}/tenants">
          <i class="fas fa-users"></i>
          <span class="nav-item">Tenants</span>
        </a></li>

        
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>


        <li><a href="{{url('/')}}/logout" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
        
      </ul>
    </nav>
   
    <section class="main">
      <div class="main-top">
        
        
      </div>  
      <h1> Bookings</h1>
        <br>
        @if ($rents->isEmpty())
        <p> There is No booking for your property.</p>
    @else
      <ul>
      @foreach ($rents as $rent)
            <li>
                @foreach ($users as $user)
                    @if ($user->user_id == $rent->tenant_id)
                        <strong>Full Name:</strong> {{ $user->Fullname }} <br>
                    @endif
                @endforeach

                @foreach ($tenants as $tenant)
                    @if ($tenant->user_id == $rent->tenant_id)
                        <strong>Phone Number:</strong> {{ $tenant->phone_number }} <br>
                    @endif
                @endforeach

                <strong>Number of tenants:</strong> {{ $rent->number_of_tenants }} <br>
                <strong>Check-in Date:</strong> {{ $rent->start_date }} <br>
                <strong>Check-out Date:</strong> {{ $rent->end_date }} <br>
                <hr>
                <br>
            </li>
        @endforeach
    </ul>
    @endif
    </section>
  </div>
</body>
</html>