<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Add jQuery UI CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
    />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/productpage.css')}}" />

    <!-- Add jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Add jQuery UI library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI library -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
  </head>
  <body>
    <header>
      <div class="logo-con">
        <!-- Place your logo here -->
        <img class="logo" src="{{asset('images/mainlogo.png')}}" alt="Logo" />
      </div>
      <div class="header-buttons">
        <a id="home" href="/landingpage">Home</a>
        <a href="">How It Works</a>
        <a href="">Help</a>
        <a href="{{url('/')}}/logout">Logout</a>
        <i class="fas fa-user"style="color: black;">
        <span class="nav-item" >{{$username}}</span></i>
      </div>
      <!-- Menu icon -->
      <div class="menu-icon" onclick="toggleDropdown()">
        <!-- Insert your menu icon here -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          width="24"
          height="24"
        >
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M4 6h16M4 12h16m-7 6h7"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </div>
    </header>
    <div class="page-container">
      <div class="top-container">
        <div class="popup" id="popup">
          <div class="popup-content">
            <div class="popup-close" id="popup-close-button">
              <i class="fas fa-times"></i>
            </div>
            <h2>Book Now</h2>
            <!-- Add your booking form or content here -->
            <p>Check-in Date: <input type="text" id="popup-checkin-date" /></p>
            <p>
              Check-out Date: <input type="text" id="popup-checkout-date" />
            </p>
            <p>
              Number of Tenants:
              <select id="popup-number-of-tenants">
                <option value="" disabled selected hidden>
                  Number of Tenants
                </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </p>
            <button class="popup-book-now-button" id="popup-book-now-button">
              Book Now
            </button>
          </div>
        </div>
        <div class="left-section">
          <h1 class="main-heading">Room for Rent</h1>
          <div class="border">
            <div class="rating-section">
              <div class="rating">
                <span class="rating-value">4.5</span>
                <span class="rating-star">★</span>
              </div>
              <div class="reviews">
                <span class="review-count">250 Reviews</span>
              </div>
              <div class="address">{{$properties->address}}</div>
            </div>
            <button class="book-now-mb">Book now</button>
          </div>
        </div>
        <div class="product-images">
          <div class="big-image-container">
            <img
            src="{{asset('storage/images/'.$photos->Media_file)}}" alt="Room 1"
              class="big-image"
              id="big-image"
              onclick="openImage('big-image')"
            />
          </div>
          <div class="small-images-container">
            <div class="image-grid">
              <img
              src="{{asset('storage/images/'.$photos->Media_file)}}" alt="Room 1"
                class="small-image"
                id="small-image-1"
                onclick="openImage('small-image-1')"
              />
              <img
              src="{{asset('storage/images/'.$photos->Media_file)}}" alt="Room 1"
                class="small-image"
                id="small-image-2"
                onclick="openImage('small-image-2')"
              />
            </div>
            <div class="image-grid">
              <img
              src="{{asset('storage/images/'.$photos->Media_file)}}"alt="Room 1"
                class="small-image"
                id="small-image-3"
                onclick="openImage('small-image-3')"
              />
              <img
              src="{{asset('storage/images/'.$photos->Media_file)}}" alt="Room 1"
                class="small-image"
                id="small-image-4"
                onclick="openImage('small-image-4')"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="mid-container">
        <div class="mid-left-container">
          <div class="owner-info-container">
            <div class="owner-info">
              <div class="owner-image" onclick="openOwnerInfo()">
                <img src="owner.jpg" alt="Owner Image" />
              </div>
              <div class="owner-name" onclick="openOwnerInfo()">{{$user->Fullname}}</div>
            </div>
            <div class="owner-popup" id="owner-popup">
              <h2>Owner Info</h2>
              <p>Owner Name: {{$user->Fullname}}</p>
              <p>Owner Email: {{ $user->email}}</p>
              <p>Owner Phone: {{$landlord->phone_number}}</p>
            </div>
          </div>
          <div class="about-product">
            <div class="product-description-container">
              <h2>Description</h2>
              <p class="product-description">
                This is a great product that you will love. It is made with
                high-quality materials and it is very durable. This is a great
                product that you will love. It is made with high-quality
                materials and it is very durable. This is a great product that
                you will love. It is made with high-quality materials and it is
                very durable. This is a great product that you will love. It is
                made with high-quality materials and it is very durable.
              </p>
            </div>
          </div>
          <div class="product-features-container">
            <div class="product-features">
              <h2>What this place offers:</h2>
              <ul class="product-description">
                <li>It is made with high-quality materials.</li>
                <li>It is very durable.</li>
                <li>It is easy to use.</li>
                <li>It is affordable.</li>
              </ul>
            </div>
          </div>
          <div class="user-reviews-container">
            <div class="hd">
              <h2>User Reviews</h2>
            </div>
            <div class="reviews">
              <div class="user-review">
                <div class="user-info">
                  <div class="user-name">John Doe</div>
                  <div class="user-rating">4.5 ★</div>
                </div>
                <div class="review-text">
                  "This place exceeded my expectations. The amenities were
                  great, and the location was perfect."
                </div>
              </div>

              <div class="user-review">
                <div class="user-info">
                  <div class="user-name">Jane Smith</div>
                  <div class="user-rating">5 ★</div>
                </div>
                <div class="review-text">
                  "I had a fantastic stay here. The room was clean, and the
                  staff was very friendly and helpful."
                </div>
              </div>
              <div class="user-review">
                <div class="user-info">
                  <div class="user-name">Jenna Ortega</div>
                  <div class="user-rating">1 ★</div>
                </div>
                <div class="review-text">
                  "Heh! It was too colorful for my liking"
                </div>
              </div>
              <div class="user-review">
                <div class="user-info">
                  <div class="user-name">Emma Myers</div>
                  <div class="user-rating">5 ★</div>
                </div>
                <div class="review-text">
                  "I loved it! It was bright, colorful and exiting. "
                </div>
              </div>
            </div>
            

            
            <div class="btns">
              <div class="review-form">
                <h3>Add your Review</h3>
                <form id="reviewForm" action="{{url('/tenant/feedback')}}/{{$units->unit_id}}"method="post">
                   @csrf
                  <label for="review">Your Review:</label><br />
                  <textarea
                    id="review"
                    
                    rows="4"
                    cols="50"
                    name="feedback"
                    required
                  ></textarea
                  ><br /><br />

                  <button type="submit">Submit Review</button>
                </form>
              </div>
            </div>
          </div>

          <div class="map-container">
            <h2>Location</h2>
            
            
               <div id ="map" style="width:100%;height:400px;"></div>
              
   
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZFB7MhJB2peynjvmV1jZkCNs5yr9o55M&callback=initMap" async defer></script>
       </div>
       </div>
       
        <div class="mid-right-container">
          <div class="book-now-box">
            <div class="dates">
            <form action="{{url('/tenant/bookings')}}/{{$units->unit_id}}"method="post">
          @csrf
              <input
                type="text"
                class="checkin-date"
                id="checkin-date"
                name="checkin"
                placeholder="Check-in Date" required
              />
              <input
                type="text"
                class="checkout-date"
                id="checkout-date"
                name="checkout"
                placeholder="Check-out Date" required
              />
            </div>
            <select class="number-of-tenants" id="number-of-tenants"name="number_of_tenants" required >
              <option value="" disabled selected hidden>
                Number of Tennants
              </option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <select class="payment-medium" id="payment-medium">
              <option value="" disabled selected hidden>payment medium</option>
              <option value="1">mobile payments</option>
              <option value="2">online banking</option>
              <option value="3">cash</option>
            </select>
            <div class="fee-container">
              <div class="fee-item">
                <span>Rent Fee:</span>
                <span> Rs. {{$units->price}}</span>
              </div>
              <div class="fee-item">
                <span>Amenities Fee:</span>
                <span>Rs. 0</span>
              </div>
              <hr class="fee-separator" />
              <div class="fee-item total-fee">
                <span>Total Fee:</span>
                <span>Rs. {{$units->price}}</span>
              </div>
            </div>
            <button class="book-now-button" type="submit" >Book Now</button>
            </form>
          </div>
        </div>
      </div>
      
      
      <div class="bottom-container">
        <div class="bottom-section">
          <div class="things-to-know-container">
            <div class="rules1">
              <h2>Things You Need to Know</h2>
              <ul class="rules-list">
                <li>No smoking allowed</li>
                <li>No pets allowed</li>
                <li>Quiet hours after 10 PM</li>
                <li>No parties or events</li>
                <li>Guests must be respectful of neighbors</li>
              </ul>
            </div>
            <div class="rules2">
              <h2>Safety and Property</h2>
            </div>
            <div class="rules3">
              <h2>Termination Policy</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="ft">
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
            <h3>Follow us on</h3>
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
        <div class="copy-container">
          <p class="copy">
            &copy; 2023 Online Rental System. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
    <script>
     
     function initMap() {
    var latitude = <?php echo $properties->Latitude; ?>;
    var longitude = <?php echo $properties->Longitude; ?>;
    var ownerName = "{{$user->Fullname}}" ; // Replace with the actual property owner's name

    var additionalText = "Property"; // Your additional text

    var coord = { lat: latitude, lng: longitude };
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: coord,
    });

    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });

    var contentString = '<div style="background-color: #ff6000;color:white; border: 1px solid black; border-radius: 8px; padding: 10px; max-width: 200px; overflow: hidden;">' + ownerName + ' ' + additionalText + '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        pixelOffset: new google.maps.Size(0, -10), // Offset to adjust the position
    });

    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
}
       
            
      $(document).ready(function () {

       

        // Initialize datepicker for check-in and check-out dates
        $("#checkin-date").datepicker();
        $("#checkout-date").datepicker();

        // Show datepicker when check-in date input is clicked
        $("#checkin-date").click(function () {
          $(this).datepicker("show");
        });

        // Show datepicker when check-out date input is clicked
        $("#checkout-date").click(function () {
          $(this).datepicker("show");
        });
      });

      // Code for owner info popup
      function openOwnerInfo() {
        const ownerPopup = document.getElementById("owner-popup");
        ownerPopup.classList.toggle("show");
      }

      function toggleDropdown() {
        const headerButtons = document.querySelector(".header-buttons");
        headerButtons.classList.toggle("show-dropdown");
      }

      const signupButton = document.getElementById("signup");
      const signupPopup = document.querySelector(".signup-popup");

      signupButton.addEventListener("click", () => {
        signupPopup.style.display = "block";
      });

      // Close the popup when clicking outside the signup button and popup
      document.addEventListener("click", (event) => {
        if (
          !event.target.matches("#signup") &&
          !event.target.matches(".signup-popup")
        ) {
          signupPopup.style.display = "none";
        }
      });

      const bookNowMbButton = document.querySelector(".book-now-mb");
      const popup = document.getElementById("popup");
      const popupCheckinDate = document.getElementById("popup-checkin-date");
      const popupCheckoutDate = document.getElementById("popup-checkout-date");
      const popupNumberOfTenants = document.getElementById(
        "popup-number-of-tenants"
      );
      const popupBookNowButton = document.getElementById(
        "popup-book-now-button"
      );
      const popupCloseButton = document.getElementById("popup-close-button");

      // Show the popup when the book-now-mb button is clicked
      bookNowMbButton.addEventListener("click", () => {
        popup.style.display = "flex";
      });

      // Hide the popup when the Close button is clicked
      popupCloseButton.addEventListener("click", () => {
        popup.style.display = "none";
      });
      //
      document.addEventListener("DOMContentLoaded", () => {
        const bt2Button = document.querySelector(".bt2 button");
        const reviewPopupOverlay = document.getElementById(
          "review-popup-overlay"
        );

        const submitReviewButton = document.getElementById("submit-review");
        const reviewTextArea = document.getElementById("review-text");
        const ratingStars = document.querySelectorAll(".rating-stars .star");

        bt2Button.addEventListener("click", () => {
          reviewPopupOverlay.style.display = "flex";
        });

        submitReviewButton.addEventListener("click", () => {
          const reviewText = reviewTextArea.value;
          let rating = 0;

          ratingStars.forEach((star) => {
            if (star.classList.contains("selected")) {
              rating = star.getAttribute("data-rating");
            }
          });

          // Perform actions with reviewText and rating, e.g., send data to server
          console.log("Review:", reviewText);
          console.log("Rating:", rating);

          reviewPopupOverlay.style.display = "none";
        });

        ratingStars.forEach((star) => {
          star.addEventListener("click", () => {
            const selectedRating = star.getAttribute("data-rating");
            ratingStars.forEach((s) => {
              const starRating = s.getAttribute("data-rating");
              if (starRating <= selectedRating) {
                s.classList.add("selected");
              } else {
                s.classList.remove("selected");
              }
            });
          });
        });
      });
</script>
  </body>
</html>