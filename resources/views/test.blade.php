<!DOCTYPE html>
<html>
  <head>
    <title>Room Rental Website</title>
    <style>
      /* CSS styles for the website */
      body {
        font-family: Arial, sans-serif;
        margin: 5px;
        padding: 75px;
      }
      header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #ffffff;
        color: #f7ac0c;
        border-bottom: 2px solid #ff7700;
        padding: 1px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1;
      }
      .logo {
        width: 100px;
        margin-right: 20px;
      }
​
      .header-buttons {
        display: flex;
        align-items: center;
      }
      .header-buttons button {
        margin-left: 10px;
      }
      .signup-popup {
        position: absolute;
        top: 40px;
        right: 20px;
        background-color: #c4670a;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        padding: 10px;
        display: none;
      }
      .signup-popup button {
        margin-top: 5px;
      }
      .signup-button:hover + .signup-popup,
      .signup-popup:hover {
        display: block;
      }
      main {
        display: flex;
      }
      .filter-section {
        flex-basis: 20%;
        padding: 20px;
        margin-right: 10px;
      }
      h2 {
        margin-top: 0;
      }
      .filter-list {
        list-style-type: none;
        padding: 0;
      }
      .filter-list li {
        margin-bottom: 10px;
      }
      .room-grid {
        flex-grow: 1;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
      }
      .room-card {
        display: flex;
        align-items: center;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        padding: 20px;
      }
      .room-image {
        width: 150px;
        height: 150px;
        margin-right: 20px;
      }
​
      footer {
        background-color: #ffa559;
        color: #000000;
        padding: 5px 0px;
      }
​
      .container {
        max-width: 650px;
        margin: 0 auto;
      }
​
      .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
      }
​
      .customer-care {
        flex: 1;
      }
​
      .customer-care h3 {
        color: #000000;
        font-size: 20px;
        margin-bottom: 10px;
      }
​
      .customer-care p {
        margin: 0;
        color: #000000;
      }
​
      .footer-links ul {
        list-style-type: none;
        padding: 0;
        margin: 10px;
      }
      .footer-links h3 {
        color: #000000;
        font-size: 20px;
        margin-bottom: 10px;
        text-align: right;
      }
​
      .footer-links li {
        margin-right: 0%;
      }
​
      .footer-links a {
        color: #000000;
        text-decoration: none;
      }
​
      .copy {
        text-align: center;
        margin-top: 20px;
        color: #fff;
      }
      .copy {
        padding: 20px 0px;
        max-width: 800px;
        background-color: #e07546;
        color: rgb(52, 23, 3);
      }
    </style>
  </head>
  <body>
    <header>
      <img
        class="logo"
        src="C:\Users\Hi-Tech\OneDrive\Desktop\may 23\logoPrototype.png"
        alt="Logo"
      />
      <h1>My Second Home</h1>
      <div class="header-buttons">
        <button class="login-button">Login</button>
        <button class="signup-button">Signup</button>
        <div class="signup-popup">
          <button>Tenant</button>
          <button>Landlord</button>
        </div>
      </div>
    </header>
    <main>
      <div class="filter-section">
        <h2>Filter Rooms</h2>
        <form id="filter-form">
          <ul class="filter-list">
            <li>
              <label for="price-filter">Price Range:</label>
              <select id="price-filter">
                <option value="">All</option>
                <option value="1000-1500">Rs.1000 - Rs1500</option>
                <option value="1501-2500">Rs.1501-Rs.2500</option>
                <option value="2501-3500">Rs.2501-Rs.3500</option>
              </select>
            </li>
            <li>
              <label for="location-filter">Location:</label>
              <select id="location-filter">
                <option value="">All</option>
                <option value="28-kilo">28-kilo</option>
                <option value="Kathmandu University">
                  Kathmandu University
                </option>
                <option value="bhyandol">bhyandol</option>
              </select>
            </li>
          </ul>
          <button type="submit">Filter</button>
        </form>
      </div>
      <div class="room-grid">
        <div class="room-card">
          <img
            class="room-image"
            src="C:\Users\Hi-Tech\OneDrive\Desktop\may 23\royal enfield.jpg"
            alt="Room 1"
          />
          <div>
            <h3>Room 1</h3>
            <p>Location: 28-kilo</p>
            <p>Price: 1700</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img
            class="room-image"
            src="C:\Users\Hi-Tech\OneDrive\Desktop\may 23\crf.jpg"
            alt="Room 2"
          />
          <div>
            <h3>Room 2</h3>
            <p>Location:bhyandol</p>
            <p>Price: 2100</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room3.jpg" alt="Room 3" />
          <div>
            <h3>Room 3</h3>
            <p>Location: kathmandu university</p>
            <p>Price: 3000</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room4.jpg" alt="Room 4" />
          <div>
            <h3>Room 4</h3>
            <p>Location: kathmandu university</p>
            <p>Price: 3100</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room5.jpg" alt="Room 5" />
          <div>
            <h3>Room 5</h3>
            <p>Location: kathmandu university</p>
            <p>Price: 2000</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room6.jpg" alt="Room 6" />
          <div>
            <h3>Room 6</h3>
            <p>Location: 28-kilo</p>
            <p>Price: 2200</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room1.jpg" alt="Room 1" />
          <div>
            <h3>Room 1</h3>
            <p>Location: 28-kilo</p>
            <p>Price: 1700</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room2.jpg" alt="Room 2" />
          <div>
            <h3>Room 2</h3>
            <p>Location:bhyandol</p>
            <p>Price: 2100</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room3.jpg" alt="Room 3" />
          <div>
            <h3>Room 3</h3>
            <p>Location: kathmandu university</p>
            <p>Price: 3000</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room4.jpg" alt="Room 4" />
          <div>
            <h3>Room 4</h3>
            <p>Location: kathmandu university</p>
            <p>Price: 3100</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room5.jpg" alt="Room 5" />
          <div>
            <h3>Room 5</h3>
            <p>Location: kathmandu university</p>
            <p>Price: 2000</p>
            <button>Book Now</button>
          </div>
        </div>
        <div class="room-card">
          <img class="room-image" src="room6.jpg" alt="Room 6" />
          <div>
            <h3>Room 6</h3>
            <p>Location: 28-kilo</p>
            <p>Price: 2200</p>
            <button>Book Now</button>
          </div>
        </div>
      </div>
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
        </div>
​
        <p class="copy">
          &copy; 2023 Online Rental System. All rights reserved.
        </p>
      </div>
    </footer>
    <script>
      // JavaScript logic for filtering rooms
      const filterForm = document.getElementById("filter-form");
      const priceFilter = document.getElementById("price-filter");
      const locationFilter = document.getElementById("location-filter");
      const roomList = document.querySelector(".room-grid");
      const filterButton = document.querySelector("#filter-form button");
​
      filterButton.addEventListener("click", function (event) {
        event.preventDefault();
        const selectedPrice = priceFilter.value;
        const selectedLocation = locationFilter.value;
​
        Array.from(roomList.children).forEach(function (roomCard) {
          const price = roomCard.querySelector("p:nth-child(3)").textContent;
          const numericPrice = parseInt(price.match(/\d+/)[0]); // Extract numeric portion of price
​
          const isPriceMatch =
            selectedPrice === "" ||
            (numericPrice >= parseInt(selectedPrice.split("-")[0]) &&
              numericPrice <= parseInt(selectedPrice.split("-")[1]));
          const isLocationMatch =
            selectedLocation === "" ||
            roomCard
              .querySelector("p:nth-child(2)")
              .textContent.includes(selectedLocation);
​
          if (isPriceMatch && isLocationMatch) {
            roomCard.style.display = "flex";
          } else {
            roomCard.style.display = "none";
          }
        });
      });
    </script>
  </body>
</html>