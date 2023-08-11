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
       
      </div>
    </div>
  </header>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          
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
          
          </body>
          </html>