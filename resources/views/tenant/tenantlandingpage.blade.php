<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <title>MSH</title>
    <link rel="stylesheet" href="{{asset('css/landingpage.css')}}">
    
    
  </head>
  <body>
    <header>
      <div class="logo-con">
        <!-- Place your logo here -->
        <img class="logo" src="{{asset('images/logoPrototype.png')}}" alt="Logo" />
      </div>
      <div class="header-buttons">
        <a id="home" href="/landingpage">Home</a>
        <a href="">How It Works</a>
        <a href="">Help</a>
        <a href="{{url('/')}}/logout">Logout</a>
        
        <i class="fas fa-user"style="color: black;">
        <span class="nav-item" >{{$username}}</span></i>
        </div>
        
      </div>
      <button class="filter-button"><i class="fas fa-filter"></i></button>
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

      <!-- The filter modal -->
      <div id="filterModal" class="modal">
        <div class="modal-content">
          <!-- Your filter content goes here -->
          <h2>Filter</h2>

          <div class="filter-block">
            <div class="price">
              <h3>Price Range</h3>
              <ul class="filter-list">
                <li>
                  <input type="checkbox" id="price-range-1" value="1500-2000" />
                  <label for="price-range-1">rs.1500 - rs.2000</label>
                </li>
                <li>
                  <input type="checkbox" id="price-range-2" value="2001-2500" />
                  <label for="price-range-2"> rs.2001 - rs.2500</label>
                </li>
                <li>
                  <input type="checkbox" id="price-range-3" value="2501-3000" />
                  <label for="price-range-3">rs.2501 - rs.3000</label>
                </li>
                <li>
                  <input type="checkbox" id="price-range-4" value="3000+" />
                  <label for="price-range-4">rs.3000+</label>
                </li>
              </ul>
            </div>
          </div>
          <div class="filter-block">
            <div class="duration">
              <h3>Duration</h3>
              <ul class="filter-list">
                <li>
                  <input
                    type="checkbox"
                    id="duration-flexible"
                    value="flexible"
                  />
                  <label for="duration-flexible">Flexible</label>
                </li>
                <li>
                  <input type="checkbox" id="duration-fixed" value="fixed" />
                  <label for="duration-fixed">Fixed</label>
                </li>
                <li>
                  <input
                    type="checkbox"
                    id="duration-12months"
                    value="12months"
                  />
                  <label for="duration-12months">12 Months</label>
                </li>
              </ul>
            </div>
          </div>
          <div class="filter-block">
            <div class="distance">
              <h3>Size Range</h3>
              <ul class="filter-list">
                <li>
                  <input type="checkbox" id="size-range-1" value="200m-500m" />
                  <label for="size-range-1">200m - 500m</label>
                </li>
                <li>
                  <input type="checkbox" id="size-range-2" value="500m-1000m" />
                  <label for="size-range-2">500m - 1000m</label>
                </li>
                <li>
                  <input type="checkbox" id="size-range-3" value="1000m-more" />
                  <label for="size-range-3">1000m+</label>
                </li>
              </ul>
            </div>
          </div>

          <div class="filter-block">
            <div class="amenities">
              <h3>Amenities</h3>
              <ul class="filter-list">
                <li>
                  <input type="checkbox" id="amenity-wifi" value="wifi" />
                  <label for="amenity-wifi">WiFi</label>
                </li>
                <li>
                  <input type="checkbox" id="amenity-balcony" value="balcony" />
                  <label for="amenity-balcony">Balcony</label>
                </li>
                <li>
                  <input type="checkbox" id="amenity-parking" value="parking" />
                  <label for="amenity-parking">Parking</label>
                </li>
                <li>
                  <input
                    type="checkbox"
                    id="amenity-furniture"
                    value="furniture"
                  />
                  <label for="amenity-furniture">Furniture</label>
                </li>
              </ul>
            </div>
          </div>
          <!-- ... -->
          <button class="apply-filter-button">Filter</button>
        </div>
      </div>
    </header>
    <div class="mid">
      <filter class="flt"
        ><div class="filter-section">
          <h2>Filter</h2>

          <div class="filter-block">
            <div class="price">
              <h3>Price Range</h3>
              <ul class="filter-list">
                <li>
                  <input type="checkbox" id="price-range-1" value="1500-2000" />
                  <label for="price-range-1">rs.1500 - rs.2000</label>
                </li>
                <li>
                  <input type="checkbox" id="price-range-2" value="2001-2500" />
                  <label for="price-range-2"> rs.2001 - rs.2500</label>
                </li>
                <li>
                  <input type="checkbox" id="price-range-3" value="2501-3000" />
                  <label for="price-range-3">rs.2501 - rs.3000</label>
                </li>
                <li>
                  <input type="checkbox" id="price-range-4" value="3000+" />
                  <label for="price-range-4">rs.3000+</label>
                </li>
              </ul>
            </div>
          </div>

          <div class="filter-block">
            <div class="duration">
              <h3>Duration</h3>
              <ul class="filter-list">
                <li>
                  <input
                    type="checkbox"
                    id="duration-flexible"
                    value="flexible"
                  />
                  <label for="duration-flexible">Flexible</label>
                </li>
                <li>
                  <input type="checkbox" id="duration-fixed" value="fixed" />
                  <label for="duration-fixed">Fixed</label>
                </li>
                <li>
                  <input
                    type="checkbox"
                    id="duration-12months"
                    value="12months"
                  />
                  <label for="duration-12months">12 Months</label>
                </li>
              </ul>
            </div>
          </div>

          <div class="filter-block">
            <div class="distance">
              <h3>Size Range</h3>
              <ul class="filter-list">
                <li>
                  <input type="checkbox" id="size-range-1" value="200m-500m" />
                  <label for="size-range-1">200m - 500m</label>
                </li>
                <li>
                  <input type="checkbox" id="size-range-2" value="500m-1000m" />
                  <label for="size-range-2">500m - 1000m</label>
                </li>
                <li>
                  <input type="checkbox" id="size-range-3" value="1000m-more" />
                  <label for="size-range-3">1000m+</label>
                </li>
              </ul>
            </div>
          </div>

          <div class="filter-block">
            <div class="amenities">
              <h3>Amenities</h3>
              <ul class="filter-list">
                <li>
                  <input type="checkbox" id="amenity-wifi" value="wifi" />
                  <label for="amenity-wifi">WiFi</label>
                </li>
                <li>
                  <input type="checkbox" id="amenity-balcony" value="balcony" />
                  <label for="amenity-balcony">Balcony</label>
                </li>
                <li>
                  <input type="checkbox" id="amenity-parking" value="parking" />
                  <label for="amenity-parking">Parking</label>
                </li>
                <li>
                  <input
                    type="checkbox"
                    id="amenity-furniture"
                    value="furniture"
                  />
                  <label for="amenity-furniture">Furniture</label>
                </li>
              </ul>
            </div>
          </div>

          <button class="apply-filter-button">Filter</button>
        </div>
      </filter>
      <main>
        <div class="search-bar-container">
          <div class="search-bar">
          <form action="">
            <input type="text" name="search" placeholder="Search by location" value="{{$searchQuery}}"/>
            <button type="submit"><span class="fas fa-search"></span></button>
            </form>
          </div>
        </div>
        <!-- <div class="search-bar-container">
        <div class="search-bar">
          <form action="">
          <input type="search" name="search" placeholder="Search by location" value="{{$searchQuery}}"/>
          <button type="submit">Search</button>
          </form>
        </div> -->

        <div class="room-grid">
        @foreach ($properties as $property)
    @foreach ($property->medias as $photo)
        @foreach ($property->units as $unit)
            <a href="{{ url('/tenant/productpage/') }}/{{ $photo->media_id }}/{{ $unit->unit_id }}/{{ $property->property_id }}/{{ $property->user_id }}" class="room-card">
                {{ $photo->name }}<img src="{{ asset('storage/images/' . $photo->Media_file) }}" width="200" height="150"style='border-radius: 20px;' alt="Room 1">

                <div>
              
              <p><i class="fas fa-map-marker-alt"></i>  {{ $property->address }} </p>
              <p class="room-price">Rs. {{ $unit->price }}</p>
              <p class="yellow-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i
                ><i class="fas fa-star"></i><i class="fas fa-star"></i
                ><i class="fas fa-star"></i>
              </p>
            </div>
          </a>
          @endforeach
    @endforeach
@endforeach
          
        </div>

        <div class="show-more-button">
          <button>Show More</button>
        </div>
      </main>
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
              <li><a href="resp-about_us.html">About MSH</a></li>
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



      const filterButton = document.querySelector(".filter-button");
      const filterModal = document.getElementById("filterModal");

      filterButton.addEventListener("click", () => {
        filterModal.style.display = "block";
      });

      // Close the modal when clicking outside the modal content
      window.addEventListener("click", (event) => {
        if (event.target === filterModal) {
          filterModal.style.display = "none";
        }
      });
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
      //
      document.addEventListener("DOMContentLoaded", function () {
        var filterButton = document.querySelector(".apply-filter-button");

        filterButton.addEventListener("click", function () {
          var checkedRanges = document.querySelectorAll(
            ".price input[type='checkbox']:checked"
          );

          var roomCards = document.querySelectorAll(".room-card");

          roomCards.forEach(function (card) {
            card.style.display = "none";
          });

          if (checkedRanges.length === 0) {
            roomCards.forEach(function (card) {
              card.style.display = "block";
            });
          } else {
            roomCards.forEach(function (card) {
              var priceElement = card.querySelector(".room-price");
              var price = parseInt(priceElement.textContent);

              var showCard = false;

              checkedRanges.forEach(function (range) {
                var rangeValues = range.value.split("-");
                var min = parseInt(rangeValues[0]);
                var max = parseInt(rangeValues[1]);

                if (range.value === "3000+" && price >= 3000) {
                  showCard = true;
                } else if (price >= min && price <= max) {
                  showCard = true;
                }
              });

              if (showCard) {
                card.style.display = "block";
              }
            });
          }
        });
      });
    </script>
  </body>
</html>