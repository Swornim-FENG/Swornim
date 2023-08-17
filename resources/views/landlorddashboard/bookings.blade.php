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
      
      @foreach ($rents as $rent)
      <div class="box">
            
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
                <?php
              // Assuming $rent->start_date and $rent->end_date are in the format 'Y-m-d' (e.g., '2023-08-17')

                $start_date = new DateTime($rent->start_date);
                $end_date = new DateTime($rent->end_date);

             // Format the dates as desired (e.g., "August 17, 2023")
                $formatted_start_date = $start_date->format('F j, Y');
               $formatted_end_date = $end_date->format('F j, Y');
                ?>
                <i class="fa fa-user"></i>
                <strong>Number of tenants:</strong> {{ $rent->number_of_tenants }} <br>
                <strong>Check-in Date:</strong> {{ $formatted_start_date  }} <br>
                <strong>Check-out Date:</strong> {{  $formatted_end_date }} <br>
                
                <hr>
                <br>
                
            
            </div>
        @endforeach
    
    @endif
            
            
          
        </div>
      </section>
    </section>
  </div>

  @endsection
</body>
</html>