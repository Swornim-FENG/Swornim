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
          <i class="fas fa-check-circle"></i>
          <span class="nav-item">Bookings</span>
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
    <h1>Enter Details of Your Property</h1>
    <form action="{{url('/')}}/properties"method="POST" enctype="multipart/form-data" >
            @csrf
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required /><br /><br />
      <label for="condition">Room Condition:</label>
      <select id="condition" name="condition" required>
          <option value="good">Good</option>
          <option value="average">Average</option>
          <option value="poor">Poor</option>
      </select><br><br>
      
      
      
      <label for="num_rooms">Number of Rooms:</label>
      <input
        type="number"
        id="num_rooms"
        name="rooms"
        required
      /> <br /><br />

      <label for="price">Price (per month):</label>
      <input type="number" id="price" name="price" required /><br /><br />

      <label for="latitude">Latitude:</label>
      <input type="text" id="latitude" name="latitude" required /><br /><br />

      <label for="longitude">Longitude:</label>
      <input type="text" id="longitude" name="longitude" required /><br /><br />

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
      <input
        type="checkbox"
        id="wifi"
        name="extra_facilities"
        value="Free WiFi"
      />
      <label for="wifi">Free WiFi</label><br />

      <input
        type="checkbox"
        id="heated_water"
        name="extra_facilities"
        value="Heated Water Supply"
      />
      <label for="heated_water">Heated Water Supply</label><br />

      <input
        type="checkbox"
        id="24hr_water"
        name="extra_facilities"
        value="24hr Running Water"
      />
      <label for="24hr_water">24hr Running Water</label><br />

      <input
        type="checkbox"
        id="parking"
        name="extra_facilities"
        value="Parking"
      />
      <label for="parking">Parking</label><br />

      <input
        type="checkbox"
        id="flexible_hours"
        name="extra_facilities"
        value="Flexible Entry/Exit Hours"
      />
      <label for="flexible_hours">Flexible Entry/Exit Hours</label><br /><br />

      <input type="submit" value="Submit"name="Upload" />
      </section>
  </body>
</html>