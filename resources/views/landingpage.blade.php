<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <title>MSH</title>
    <link rel="stylesheet" href="{{asset('css/landingpage.css')}}">
    <script src="{{asset('js/landingpage.js')}}"></script>
  </head>
  <body>
    <header>
      <div class="logo-con">
        <!-- Place your logo here -->
        <img class="logo" src="images/logoPrototype.png" alt="Logo" />
      </div>
      <div class="header-buttons">
        <a id="home" href="/landingpage">Home</a>
        <a href="">How It Works</a>
        <a href="{{url('/')}}/lanlord">I am a Landlord</a>
        <a href="">Help</a>
        <a href="{{url('/')}}/login">Login</a>
        <a id="signup" href="">Signup</a>
        <div class="signup-popup">
          <a href="{{url('/')}}/tenant">Tenant Signup</a>
          <a href="{{url('/')}}/lanlord">Landlord Signup</a>
        </div>
      </div>
    </header>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #ffffff;
        color: #f7ac0c;
        border-bottom: 2px solid #ff7700;
        padding: auto;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1;
        margin-bottom: 10px;
      }
      .logo {
        width: 100px;
        margin-right: 10px;
      }
      .header-buttons {
        display: flex;
        align-items: center;
      }
      .header-buttons a {
        margin-left: 10px;
        padding: 10px 20px;
        color: #ffa559;
        text-decoration: none;
        font-size: 14px;
      }
      .header-buttons a#home,
      .header-buttons a#signup {
        background-color: #ffa559;
        color: #fff;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
      }
      .header-buttons a#home:hover,
      .header-buttons a#signup:hover {
        background-color: #ff7700;
      }
      .signup-popup {
        position: absolute;
        top: 40px;
        right: 20px;
        background-color: #ffe6c7;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        padding: 10px;
        display: none;
      }
      .signup-popup a {
        display: block;
        margin-bottom: 5px;
        padding: 10px 20px;
        background-color: #ffa559;
        color: #fff;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
        transition: background-color 0.3s ease;
      }
      .signup-popup a:hover {
        background-color: #ff7700;
      }
      .signup-button:hover + .signup-popup,
      .signup-popup:hover {
        display: block;
      }
    </style>
    <script>
      // Show/hide the signup popup on hover
      const signupButton = document.getElementById("signup");
      const signupPopup = document.querySelector(".signup-popup");
      let isHoveringButton = false;
      let isHoveringPopup = false;

      signupButton.addEventListener("mouseenter", () => {
        signupPopup.style.display = "block";
        isHoveringButton = true;
      });

      signupButton.addEventListener("mouseleave", () => {
        isHoveringButton = false;
        setTimeout(() => {
          if (!isHoveringPopup) {
            signupPopup.style.display = "none";
          }
        }, 200);
      });

      signupPopup.addEventListener("mouseenter", () => {
        isHoveringPopup = true;
      });

      signupPopup.addEventListener("mouseleave", () => {
        isHoveringPopup = false;
        if (!isHoveringButton) {
          signupPopup.style.display = "none";
        }
      });
      
      
      
      
    </script>
    <main>
      <div class="filter-section">
        <h2>Filter</h2>
        <h3>Price Range</h3>
        <ul class="filter-list">
            <li>
                <input type="checkbox" id="price-range-1" value="1500-2000">
                <label for="price-range-1">rs.1500 - rs.2000</label>
            </li>
            <li>
                <input type="checkbox" id="price-range-2" value="2001-2500">
                <label for="price-range-2"> rs.2001 - rs.2500</label>
            </li>
            <li>
                <input type="checkbox" id="price-range-3" value="2501-3000">
                <label for="price-range-3">rs.2501 - rs.3000</label>
            </li>
            <li>
                <input type="checkbox" id="price-range-4" value="3000+">
                <label for="price-range-4">rs.3000+</label>
            </li>
        </ul>
        <h3>Duration</h3>
        <ul class="filter-list">
            <li>
                <input type="checkbox" id="duration-flexible" value="flexible">
                <label for="duration-flexible">Flexible</label>
            </li>
            <li>
                <input type="checkbox" id="duration-fixed" value="fixed">
                <label for="duration-fixed">Fixed</label>
            </li>
            <li>
                <input type="checkbox" id="duration-12months" value="12months">
                <label for="duration-12months">12 Months</label>
            </li>
        </ul>
        <h3>Size Range</h3>
        <ul class="filter-list">
            <li>
                <input type="checkbox" id="size-range-1" value="200m-500m">
                <label for="size-range-1">200m - 500m</label>
            </li>
            <li>
                <input type="checkbox" id="size-range-2" value="500m-1000m">
                <label for="size-range-2">500m - 1000m</label>
            </li>
            <li>
                <input type="checkbox" id="size-range-3" value="1000m-more">
                <label for="size-range-3">1000m+</label>
            </li>
        </ul>
        <h3>Amenities</h3>
        <ul class="filter-list">
            <li>
                <input type="checkbox" id="amenity-wifi" value="wifi">
                <label for="amenity-wifi">WiFi</label>
            </li>
            <li>
                <input type="checkbox" id="amenity-balcony" value="balcony">
                <label for="amenity-balcony">Balcony</label>
            </li>
            <li>
                <input type="checkbox" id="amenity-parking" value="parking">
                <label for="amenity-parking">Parking</label>
            </li>
            <li>
                <input type="checkbox" id="amenity-furniture" value="furniture">
                <label for="amenity-furniture">Furniture</label>
            </li>
        </ul>
        <button>filter</button>
    </div>
    
     
    
      
      <div class="search-bar-container">
        <div class="search-bar">
          <form action="">
          <input type="search" name="search" placeholder="Search by location" value="{{$searchQuery}}"/>
          <button type="submit">Search</button>
          </form>
        </div>
        
        

      
      <div class="room-grid">
        
        
        @foreach ($properties as $property)
    @foreach ($property->medias as $photo)
        @foreach ($property->units as $unit)
            <a href="{{ url('/product/') }}/{{ $photo->media_id }}/{{ $unit->unit_id }}/{{ $property->property_id }}/{{ $property->user_id }}" class="room-card">
                {{ $photo->name }}<img src="{{ asset('storage/images/' . $photo->Media_file) }}" width="200" height="150" alt="Room 1">

                <div>
                    <br>
                    Location: {{ $property->address }}
                    <br>
                    <br>
                    Price: {{ $unit->price }}
                    <p>Rating:</p>
                    <div class="star-ratings">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </div>
            </a>
        @endforeach
    @endforeach
@endforeach

</div>
        
      <!-- <div class="show-more-button">
        <button>Show More</button>
      </div> -->
    </main>
    <footer>
        <div class="container">
          <div class="footer-content">
            <div class="customer-care">
              <h3>Customer Care</h3>
              <p>Help Center</p>
              <p>How to rent</p>
              <p>Contact us</p>
              <p>Email: mysecondhome@gmail.com</p>
            </div>
            <div class="footer-links">
              <h3>My Second Home</h3>
              <ul>
                <li><a href="#">About MSH</a></li>
                <li><a href="#">MSH Blog</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
            <div class="social-icons">
              <a
                href="https://www.instagram.com/your-instagram-account"
                target="_blank"
              >
                <i class="fab fa-instagram"></i>
              </a>
              <a
                href="https://www.facebook.com/your-facebook-account"
                target="_blank"
              >
                <i class="fab fa-facebook"></i>
              </a>
              <a
                href="https://www.twitter.com/your-twitter-account"
                target="_blank"
              >
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
          <div class="copy-container"><p class="copy">
            &copy; 2023 Online Rental System. All rights reserved.
          </p></div>
          
        </div>
      </footer>
</body>
</html>
