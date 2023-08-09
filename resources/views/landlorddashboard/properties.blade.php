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

        <li><a href="{{url('/')}}/tenants">
          <i class="fas fa-users"></i>
          <span class="nav-item">Tenants</span>
        </a></li>

        
        <li><a href="{{url('/')}}/landlord/notifications">
          <i class="fas fa-bell"></i>
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


            <button id="deleteButton">Delete</button>

            <div class="popup" id="popup">
            <p>Are you sure you want to delete this property?</p>

            <a href="{{ url('/properties/delete/'.$photo->unit->property->property_id) }}">
          <button id="yesButton">Yes</button>
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
        <!-- <div class="card">
          <i class="fas fa-home"></i>
          <h3>Flat 1</h3>
          <form action="{{url('/')}}/landlorddashboard" method="POST" enctype="multipart/form-data" >
            @csrf
         <label for="file-upload"></label>
         <input type="file" id="file-upload" name="file-upload" style="display: none">
           <button type="button" onclick="document.getElementById('file-upload').click()">Update</button>
          </form>
          
           
        </div>
        <div class="card">
          <i class="fas fa-home"></i>
          <h3>Room 2</h3>
          <form action="{{url('/')}}/landlorddashboard" method="POST" enctype="multipart/form-data" >
            @csrf
         <label for="file-upload"></label>
         <input type="file" id="file-upload" name="file-upload" style="display: none">
           <button type="button" onclick="document.getElementById('file-upload').click()">Update</button>
          </form>
        </div>

        <div class="card">
          <i class="fas fa-home"></i>
          <h3>Room 3</h3>
          <form  action="{{url('/')}}/landlorddashboard" method="POST" enctype="multipart/form-data" >
            @csrf
         <label for="file-upload"></label>
         <input type="file" id="file-upload" name="file-upload" style="display: none">
           <button type="button" onclick="document.getElementById('file-upload').click()">Update</button>
          </form>
        </div>
      </div> -->
      <!-- <br>
      <h1> Add Properties</h1>
      <form action="{{url('/')}}/properties"method="POST" enctype="multipart/form-data" >
            @csrf
         
            <label for="add">Address:</label><br>
<input type="text" id="add" name="address" placeholder="Enter the Address" style="margin-bottom: 10px;"><br>

<label for="con">Condition:</label><br>
<input type="text" id="con" name="condition" placeholder="Condition" style="margin-bottom: 10px;"><br>

<label for="room">Rooms:</label><br>
<input type="number" id="room" name="rooms" placeholder="Number of rooms" style="margin-bottom: 10px;"><br>

<label for="lat">Latitude:</label><br>
<input type="number" id="lat" name="latitude" placeholder="Latitude" style="margin-bottom: 10px;"><br>

<label for="lon">Longitude:</label><br>
<input type="number" id="lon" name="longitude" placeholder="Longitude" style="margin-bottom: 10px;"><br>

<label for="price">Price:</label><br>
<input type="number" id="price" name="price" placeholder="Price" style="margin-bottom: 10px;"><br>

<label for="rating">Rating:</label><br>
<input type="number" id="rating" name="rating" placeholder="Rating" style="margin-bottom: 10px;"><br>

<label for="image">Image:</label><br>
<input type="file" id="image" name="image" style="margin-bottom: 10px;"><br>

<input type="submit" value="Submit"name="Upload" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">
         </form> -->
         
      
         <script>
  document.getElementById("deleteButton").addEventListener("click", function() {
  document.getElementById("popup").style.display = "block";
});

document.getElementById("yesButton").addEventListener("click", function() {
  // Handle the delete action here
  
  document.getElementById("popup").style.display = "none";
});

document.getElementById("noButton").addEventListener("click", function() {
  document.getElementById("popup").style.display = "none";
});
  </script>
          
          </body>
          </html>