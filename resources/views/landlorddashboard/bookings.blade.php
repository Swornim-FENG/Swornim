@extends('landlorddashboard.main')
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

@section('main-section')
    <section class="main">
      <div class="main-top">
        
        
      </div>

      <section class="main-course">
        <h1>Booking</h1>
        <div class="course-box">
          
        <br>
        @if ($rents->isEmpty())
        <p> There is No booking for your property.</p>
    @else
      <ul>
      @foreach ($rents as $rent)
      <div class="box">
            <li>
                @foreach ($users as $user)
                    @if ($user->user_id == $rent->tenant_id)
                       <h3> {{ $user->Fullname }}</h3>
                    @endif
                @endforeach

                @foreach ($tenants as $tenant)
                    @if ($tenant->user_id == $rent->tenant_id)
                        <strong>Phone Number:</strong> {{ $tenant->phone_number }} <br>
                    @endif
                @endforeach
                <i class="fa fa-user"></i>
                <strong>Number of tenants:</strong> {{ $rent->number_of_tenants }} <br>
                <strong>Check-in Date:</strong> {{ $rent->start_date }} <br>
                <strong>Check-out Date:</strong> {{ $rent->end_date }} <br>
                
                <hr>
                <br>
                
            </li>
            </div>
        @endforeach
    </ul>
    @endif
            
            
          
        </div>
      </section>
    </section>
  </div>

  @endsection
</body>
</html>