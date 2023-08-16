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
  
@if($photos->count() > 0)

        <div class="room-grid">
            @foreach($photos as $photo)
                <div class="photo-card">
                    <div class="photo">
                        <img src="{{asset('storage/images/'.$photo->Media_file)}}"width="200" height="150" >
                    </div>
                    <div class="details">
                        <p>{{$photo->name}}</p>
                        <p>Location: {{ $photo->unit->property->address }}</p>
                        <p>Price: {{ $photo->unit->price }}</p>
                        <p>Number of rooms: {{ $photo->unit->property->number_of_rooms }}</p>
                        
                        
                        <button class="deleteButton"style="background-color: #ff6000; color: #fff;font-size: 12px; ">Delete</button>
                        <div class="popup">
                            <p>Are you sure you want to delete this property?</p>
                            <a href="{{ url('/properties/delete/'.$photo->unit->property->property_id) }}">
                                <button class="yesButton"style="background-color:#ff6000 ; color: #fff;">Yes</button>
                            </a>
                            <a href="{{url('/')}}/properties">
                                <button id="noButton"style="background-color: #ff6000; color: #fff;">No</button>
                            </a>
                        </div>
                        <a href="{{ url('/properties/update/'.$photo->unit->property->property_id.'/'.$photo->unit->unit_id.'/'.$photo->media_id) }}">
                            <button style="background-color:grey; color: #fff; font-size: 12px;">Update</button>
                        </a>
                       
                        
                        <a href="{{ url('/properties/bookings/'.$photo->unit->unit_id) }}">
                            <button style="background-color: skyblue; color: #fff; font-size: 12px; display:" >See bookings</button>
                        </a>
                       
                    </div>
                
                </div>

                
            @endforeach
            </div>
    </section>
        
    
    @else
        <h3> You have not uploaded properties. </h3>
        @endif
       
        
      
         <script>
  document.querySelectorAll(".deleteButton").forEach(function(button) {
  button.addEventListener("click", function() {
    var popup = this.nextElementSibling; // Get the corresponding popup
    popup.style.display = "block";
  });
});

document.querySelectorAll(".yesButton").forEach(function(button) {
  button.addEventListener("click", function() {
    // Handle the delete action here

    var popup = this.closest(".popup"); // Get the parent popup
    popup.style.display = "none";
  });
});

document.querySelectorAll(".noButton").forEach(function(button) {
  button.addEventListener("click", function() {
    var popup = this.closest(".popup"); // Get the parent popup
    popup.style.display = "none";
  });
});
  </script>
   @endsection

          </body>
          </html>