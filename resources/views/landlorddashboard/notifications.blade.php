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
        <h1>Booking Requests</h1>
        <div class="course-box">
          
        <br>
        @if ($rents->isEmpty())
        <p>Currently there are No booking requests for your property.</p>
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
                
               

             <!-- For Accept Button -->
               <button class="actionButton acceptButton" data-popup-id="accept-popup-{{ $rent->rent_id }}"style="background-color: orangered;">Accept</button>

               <div class="popup" id="accept-popup-{{ $rent->rent_id }}">
               <h3>Are you sure you want to accept this booking?</h3>
              <a href="{{url('/properties/bookings/accept/'.$rent->rent_id)}}">
               <button class="actionButton" id="accept-yesButton"style="background-color: orangered;">Yes</button>
               </a>
              <a href="{{url('/')}}/landlord/notifications">
              <button class="actionButton" id="accept-noButton"style="background-color: orangered;">No</button>
              </a>
              </div>

             <!-- For Reject Button -->
             <button class="actionButton rejectButton" data-popup-id="reject-popup-{{ $rent->rent_id }}"style="background-color: orangered;">Reject</button>

             <div class="popup" id="reject-popup-{{ $rent->rent_id }}">
             <h3>Are you sure you want to reject this booking?</h3>
              <a href="{{url('/properties/bookings/reject/'.$rent->rent_id.'/'.$rent->unit_id)}}">
              <button class="actionButton" id="reject-yesButton"style="background-color: orangered;">Yes</button>
              </a>
              <a href="{{url('/')}}/landlord/notifications">
               <button class="actionButton" id="reject-noButton"style="background-color: orangered;">No</button>
               </a>
              </div>
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