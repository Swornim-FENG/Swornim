<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <title>Product Page</title>
    <link rel="stylesheet" href="{{asset('css/productpage.css')}}">
    <script>
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

      // Code for header
      document.addEventListener("DOMContentLoaded", function () {
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
      });
    </script>
  </head>
  <body>
    <header>
      <div class="logo-con">
        <img class="logo" src= "{{asset('images/logoPrototype.png')}}"alt="Logo" />
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
    <div class="page-container">
      <div class="top-container">
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
              <div class="address">
              {{$properties->address}}
          </div>
            </div>
          </div>
        </div>
        <div class="product-images">
          <div class="big-image-container">
            <!-- <img
              src="room.jpg"
              alt="Product Image"
              class="big-image"
              id="big-image"
              onclick="openImage('big-image')"
            /> -->
           
          {{$photos->name}}<img src="{{asset('storage/images/'.$photos->Media_file)}}" width="600px" height="400px"alt="Room 1"onclick="openImage('big-image')">
          
             
          </div>
          <div class="small-images-container">
            <div class="image-grid">
              
              
              
            </div>
            <div class="image-grid">
              
              
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
            <!-- <div class="owner-popup" id="owner-popup">
              <h2>Owner Info</h2>
              <p>Owner Name: username</p>
              <p>Owner Email: john.doe@example.com</p>
              <p>Owner Phone: +1 123-456-7890</p>
            </div> -->
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
                  <div class="user-name">Rikshal Shrestha</div>
                  <div class="user-rating">4.5 ★</div>
                </div>
                <div class="review-text">
                  "This place exceeded my expectations. The amenities were
                  great, and the location was perfect."
                </div>
              </div>

              <div class="user-review">
                <div class="user-info">
                  <div class="user-name">Arpan Adhikari</div>
                  <div class="user-rating">5 ★</div>
                </div>
                <div class="review-text">
                  "I had a fantastic stay here. The room was clean, and the
                  staff was very friendly and helpful."
                </div>
              </div>
              <div class="user-review">
                <div class="user-info">
                  <div class="user-name">Kundan Kumar Das</div>
                  <div class="user-rating">1 ★</div>
                </div>
                <div class="review-text">
                  "Heh! It was too colorful for my liking"
                </div>
              </div>
              <div class="user-review">
                <div class="user-info">
                  <div class="user-name">Manish Koju</div>
                  <div class="user-rating">5 ★</div>
                </div>
                <div class="review-text">
                  "I loved it! It was bright, colorful and exiting. "
                </div>
              </div>
            </div>
            <div class="bt">
              <button>see more</button>
            </div>
          </div>
        </div>
        <div class="mid-right-container">
          <div class="book-now-box">
            <div class="dates-container">
              <input
                type="text"
                class="checkin-date"
                id="checkin-date"
                placeholder="Check-in Date"
              />
              <input
                type="text"
                class="checkout-date"
                id="checkout-date"
                placeholder="Check-out Date"
              />
            </div>
            <select class="number-of-tenants" id="number-of-tenants">
              <option value="" disabled selected hidden>
                Number of Tennants
              </option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <div class="fee-container">
              <div class="fee-item">
                <span>Rent Fee: </span>
                <span> Rs. {{$units->price}}</span>
              </div>
              <div class="fee-item">
                <span>Amenities Fee:</span>
                <span>0</span>
              </div>
              <hr class="fee-separator" />
              <div class="fee-item total-fee">
                <span>Total Fee: </span>
                <span>Rs. {{$units->price}}
              </span>
              </div>
            </div>
            <a href="{{url('/')}}/login"style="text-decoration: none;">
            <button >Book Now</button>
            </a>
            
          </div>
        </div>
      </div>

      <div class="bottom-container">
        <div class="bottom-section">
          <div class="map-container">
            <h2>Location</h2>
            <img src="map.jpg" alt="" id="map-image" />
          </div>
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
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI library -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  </body>

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
      <div class="copy-container">
        <p class="copy">
          &copy; 2023 Online Rental System. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
</html>