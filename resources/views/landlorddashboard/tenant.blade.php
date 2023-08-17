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
        <h1>Tenants</h1>
        <div class="course-box">
          
        <br>
        @if ($rents->isEmpty())
        <p> Currently there are no tenants in your property.</p>
    @else
      
      @foreach ($rents as $rent)
      <div class="box">
           
                @foreach ($users as $user)
                    @if ($user->user_id == $rent->tenant_id)
                       <h1> {{ $user->Fullname }}</h1>
                       <strong>Email:</strong> {{ $user->email }} <br>
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
                <strong>Check-in Date:</strong> {{ $formatted_start_date }} <br>
                <strong>Check-out Date:</strong> {{ $formatted_end_date }}
             
                <button class="actionButton rejectButton" data-popup-id="reject-popup-{{ $rent->rent_id }}"style="background-color: orangered;">Remove</button>

             <div class="popup" id="reject-popup-{{ $rent->rent_id }}">
             <h3>Are you sure you want to remove this tenant?</h3>
              <a href="{{url('/properties/removetenant/'.$rent->rent_id.'/'.$rent->unit_id)}}">
              <button class="actionButton" id="reject-yesButton"style="background-color: orangered;">Yes</button>
              </a>
              <a href="{{url('/')}}/landlord/showtenants">
               <button class="actionButton" id="reject-noButton"style="background-color: orangered;">No</button>
               </a>
                <hr>
                
                
            
            </div>
        @endforeach
    
    @endif
           
            
          
        </div>
      </section>
    </section>
  </div>
  <script>
  const actionButtons = document.querySelectorAll('.actionButton');

actionButtons.forEach(button => {
    button.addEventListener('click', () => {
        const popupId = button.getAttribute('data-popup-id');
        const popup = document.getElementById(popupId);

        if (popup) {
            popup.style.display = 'block';
        }
    });
});

  </script>
  @endsection
</body>
</html>