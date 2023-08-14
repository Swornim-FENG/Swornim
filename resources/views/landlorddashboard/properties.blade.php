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
   
      <div class="main-skills">
        <div class="card">
       
             @foreach($photos as $photo)
        
        {{$photo->name}}<img src="{{asset('storage/images/'.$photo->Media_file)}}" width="200" height="150" alt="Room 1">

         
          <br>
          Location: {{ $photo->unit->property->address }}
         <br>
         Price: {{ $photo->unit->price }}
         <br>
          Number of rooms: {{ $photo->unit->property->number_of_rooms }}
            <br>


            <button class="deleteButton">Delete</button>

            <div class="popup" >
            <p>Are you sure you want to delete this property?</p>

            <a href="{{ url('/properties/delete/'.$photo->unit->property->property_id) }}">
          <button class="yesButton">Yes</button>
           </a>
            
            <a href="{{url('/')}}/properties"><button id="noButton">No</button></a>
             </div>

             <a href="{{ url('/properties/update/'.$photo->unit->property->property_id.'/'.$photo->unit->unit_id.'/'.$photo->media_id) }}">
          <button >Update</button>
           </a>

           <a href="{{ url('/properties/bookings/'.$photo->unit->unit_id) }}">
          <button >See bookings</button>
           </a>
           
          
           
          
        @endforeach
        </div></div>
        </section>
        
        
      
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