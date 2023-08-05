<!DOCTYPE html>
<html>
  <head>
    <title>Property Submission Form</title>
    <link rel="stylesheet" href= "{{asset('css/landlorddashboard/propertyadd.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landlorddashboard.css')}}" />
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
    <h1>{{$title}}</h1>
    <form action="{{$url}}"method="POST" enctype="multipart/form-data" >
            @csrf
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" value="{{$property->address}}" required /><br /><br />
      <label for="condition">Room Condition:</label>
      <select id="condition" name="condition" required>
          <option value="good"{{$property->condition =="Good" ? "selected" : ""}}>Good</option>
          <option value="average"{{$property->condition =="Average" ? "selected" : ""}}>Average</option>
          <option value="poor"{{$property->condition =="Poor" ? "selected" : ""}}>Poor</option>
      </select><br><br>
      
      
      
      <label for="num_rooms">Number of Rooms:</label>
      <input
        type="number"
        id="num_rooms"
        name="rooms"
        value="{{$property->number_of_rooms}}"
        required
      /> <br /><br />

      <label for="price">Price (per month):</label>
      <input type="number" id="price" name="price"value="{{$units->price}}" required /><br /><br />

      <label for="latitude">Latitude:</label>
      <input type="text" id="latitude" name="latitude"value="{{$property->Latitude}}" required /><br /><br />

      <label for="longitude">Longitude:</label>
      <input type="text" id="longitude" name="longitude"value="{{$property->Longitude}}" required /><br /><br />

      <!-- Modify the "Choose Image" field to a button -->
      <label for="images">Room Images:</label>
      <input
        type="file"
        id="images"
        name="image"
        accept="image/*"
        multiple
        required
      />
      <label for="images" class="choose-image-button">Choose Images</label>
      <span id="file-names"></span><br /><br />

      <!-- Add JavaScript to display selected file names -->
      <script>
        document
          .getElementById("images")
          .addEventListener("change", function () {
            const fileInput = this;
            const fileNames = document.getElementById("file-names");
            fileNames.textContent =
              fileInput.files.length > 1
                ? fileInput.files.length + " files selected"
                : fileInput.files[0].name;
          });
      </script>

     
        
      <label for="extra_facilities">Extra Facilities:</label><br />
      @foreach($facilities as $facility)
      <input
        type="checkbox"
        id="facility-{{$facility->facility_id}}"
        name="extra_facilities[]"
        value="{{$facility->facility_id}}"
        @if(in_array($facility->facility_id, $facilityid))
            checked
        @endif
      />
      <label for="facility-{{$facility->facility_id}}">{{$facility->name}}</label><br />
      @endforeach

      <br /><br />

      <input type="submit" value="Submit"name="Upload" />
      </section>
        
  </body>
</html>