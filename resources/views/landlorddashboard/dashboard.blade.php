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
      <i class="fas fa-bell"style="color: red;"></i>
      <div class="account">
      <i class="fas fa-user"></i>
        <h4>{{$username}}</h4>
      </div>
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

       
        
        <li><a href="{{url('/')}}/landlord/notifications">
          <i class="fas fa-bell"style="color: red;"></i>
          <span class="nav-item">Notifications</span>
        </a></li>

        

        <li><a href="{{url('/')}}/logout" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
        
      </ul>
    </nav>
   
    <section class="main">
    <div class="promo_card">
        <h1>Welcome to My Second Home</h1>
        <span>Find easy rentals.</span>
        <button>Learn More</button>
      </div>
      <br>
      
      <h3>Total properties: {{$totalproperties}}</h3>
      @if($totalproperties > 0)
    <table>
        <thead>
            <tr>
                <th>Address</th>
                <th>Number of rooms</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
            <tr>
                <td>{{ $property->address }}</td>
                <td>{{ $property->number_of_rooms }}</td>
                <td>
                    @foreach($units as $unit)
                        @if($unit->property_id == $property->property_id)
                            {{ $unit->price }}
                            @break
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($units as $unit)
                        @if($unit->property_id == $property->property_id)
                            {{ $unit->status }}
                            @break
                        @endif
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No properties available.</p>
@endif


<br>
<h3>Total tenants: {{count($rents)}}</h3>
@if ($rents->isEmpty())
        <p> Currently there are no tenants in your property.</p>
    @else
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact no.</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
      
               @foreach ($rents as $rent)
                @php
                    $user = $users->where('user_id', $rent->tenant_id)->first();
                    $tenant = $tenants->where('user_id', $rent->tenant_id)->first();
                @endphp
                <tr>
                    <td>{{ $user->Fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $tenant->phone_number }}</td>
                    <td>{{ $tenant->temporary_address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    @endif
      </section>
 

    </div>
  </div>
  </div>
</body>
</html>