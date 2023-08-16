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
    <!-- Add jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Add jQuery UI library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI library -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <style>
      body {
        font-family: Arial, sans-serif;

        margin: 0;
        padding-left: 20px;
        background-color: #f5f5f5;
      }
      header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #ebecf0;
        color: #f7ac0c;
        padding: auto;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1;
        margin-bottom: 10px;
      }
      .logo-con {
        display: flex;
        align-items: center;
        position: relative;
      }
      .logo {
        width: 100px;
        margin-right: 10px;
        margin-left: 10px;
      }
      .header-buttons {
        display: flex;
        align-items: center;
        margin-right: 10px;
        z-index: 2;
        justify-content: flex-start; /* Align the buttons to the left in desktop view */
      }
      .header-buttons a {
        margin: 5px 10px;
        padding: 10px 20px;
        color: black;
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

      /* Menu icon style */
      .menu-icon {
        display: none; /* Hide the menu icon on desktop view */
      }

      h1 {
        text-align: center;
        font-size: 2em;
      }

      main {
        display: flex;
        padding-top: 100px;
        margin-top: 5px;
      }

      .page-container {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        flex-direction: column;
        height: auto;
        padding-top: 100px;
        margin-left: 10px;
      }
      .left-section {
        width: 400px;
        margin-right: 20px;
        margin-bottom: 10px;
      }

      .main-heading {
        text-align: left;
      }

      .rating-section {
        margin-top: 10px;
      }

      .rating {
        font-size: 24px;
        color: #f7ac0c;
      }

      .rating-star {
        font-size: 20px;
      }

      .review-count {
        font-weight: bold;
      }

      .address {
        margin-top: 10px;
      }
      .border {
        border: 2px solid #beb4b4;
      }

      .big-image {
        width: 600px;
        height: 400px;
      }

      .small-image {
       width:100%;
        height: 150px;
        margin: 15px;
      }

      .product-images {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        width: 100%;
        
      }

      .big-image-container {
        width: 50%;
      }

      .small-images-container {
        width: 50%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
      }

      .image-grid {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-left: 35px;
        padding: 1px;
      }

      .owner-info-container {
        position: relative;
      }

      .owner-info {
        display: flex;
        align-items: center;
        cursor: pointer;
      }

      .owner-image {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 10px;
        border: 2px solid #000;
      }

      .owner-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .owner-name {
        font-size: 18px;
        font-weight: bold;
      }

      .owner-popup {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 2;
        display: none;
        padding: 10px;
        background-color: #ffffff;
        border: 1px solid #000;
      }

      .owner-popup.show {
        display: block;
      }

      .product-features-container {
        width: 100%;
      }

      .product-features {
        flex-grow: 1;
      }

      .about-product {
        display: flex;
        flex-wrap: wrap;
        font-size: 16px;
        margin-bottom: -5px;
        width: calc(50% - 5px);
        box-sizing: border-box;
        padding: 10px;
        margin-top: -5px;
        width: 100%;
        font-size: 20px;
      }
      .product-descreption-container {
        width: 100%;
        font-size: 20px;
      }

      .about-product h2 {
        font-size: 20px;
        font-weight: bold;
      }

      .product-features-container {
        margin-bottom: 10px;
        margin-top: 20px;
      }

      .about-product .product-features h2 {
        font-size: 18px;
        font-weight: bold;
      }

      .about-product .product-features ul {
        list-style: disc;
        padding-left: 20px;
        width: 100%;
      }

      .about-product .product-features ul li {
        font-size: 14px;
        margin-bottom: 5px;
        width: 100%;
      }

      .book-now-box {
        height: 400px;
        width: 300px;
        background-color: #f0f0f0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        margin-left: 1px;
        margin-bottom: 10px;
        border: 1px solid #000;
        position: sticky;
        top: 100px;
        border-radius: 5px;
      }

      .book-now-box input {
        width: 100%;
        margin-bottom: 5px;
        padding: 5px;
        border: 1px solid #000;
      }

      .book-now-box p {
        font-size: 14px;
        color: #000;
        text-align: center;
        margin: 0;
      }

      .book-now-box button {
        margin-top: auto;
        display: block;
        width: 100%;
        padding: 10px;
      }
      .book-now-button {
        background-color: #ffa559; /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }

      .book-now-box input.checkin-date {
        flex: 1 1 48%;

        margin-bottom: 5px;
        margin-right: 5px;
      }

      .book-now-box input.checkout-date {
        flex: 1 1 48%;
        margin-bottom: 5px;
        margin-left: 1px;
      }

      .book-now-box select.number-of-tenants {
        width: 100%;
        margin-bottom: 5px;
        padding: 5px;
        border: 1px solid #000;
        margin-bottom: 20px;
      }
      .book-now-box select.payment-medium {
        width: 100%;
        margin-bottom: 5px;
        padding: 5px;
        border: 1px solid #000;
      }
      .fee-container {
        margin-top: 10px;
      }

      .fee-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 5px;
      }

      .fee-separator {
        border: none;
        border-top: 1px solid #ccc;
        margin: 10px 0;
      }

      .total-fee {
        font-weight: bold;
      }
      .user-reviews-container {
        margin-top: 20px;
        width: 100%;

        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .user-review {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        width: calc(50% - 10px);
      }

      .user-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 5px;
      }

      .user-name {
        font-weight: bold;
      }

      .user-rating {
        color: #f7ac0c;
      }

      .review-text {
        font-style: italic;
      }
      .hd,
      .reviews {
        width: 100%;
      }

      .btns {
        display: flex;
        flex-direction: row;
      }
      /* Define the styles for bt class */
      .bt button {
        background-color: #ffa559;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        margin: 2px;
      }
      .bt button:hover {
        background-color: #ff7700; /* Change the color on hover */
      }

      /* Define the styles for bt2 class */
      .bt2 button {
        background-color: #ffa559;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        margin: 2px;
      }
      .bt2 button:hover {
        background-color: #ff7700; /* Change the color on hover */
      }
      .user-review {
        width: 90%;
      }

      .reviews {
        display: grid;
        grid-template-columns: repeat(
          2,
          1fr
        ); /* Adjust the number of columns as per your design */
      }

      .map-container {
        margin-top: 20px;
        text-align: left;
        width: 100%;
      }

      .map-container h2 {
        font-size: 24px;
        margin-bottom: 10px;
      }

      .map-container img {
        width: 100%;
        max-width: 700px;
        height: auto;
        border: 2px solid #000;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      }
      .things-to-know-container {
        margin-top: 20px;
        width: 100%;
        display: flex;
      }

      .things-to-know-container h2 {
        font-size: 24px;
        margin-bottom: 10px;
      }

      .rules-list {
        list-style-type: disc;
        padding-left: 20px;
      }

      .rules-list li {
        font-size: 16px;
        margin-bottom: 5px;
      }

      .rules1,
      .rules2,
      .rules3 {
        flex-grow: 1;
        padding: 10px;
      }

      .mid-container {
        display: flex;
      }

      .mid-left-container,
      .mid-right-container {
        flex-basis: 100%;
      }

      .mid-right-container {
        position: relative;
        top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .bottom-container {
        width: 100%;
      }

      .ui-datepicker {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 10px;
        z-index: 9999;
      }

      .ui-datepicker-header {
        background-color: #f0f0f0;
        color: #333;
      }

      .ui-datepicker-calendar {
        background-color: #fff;
      }

      .ui-datepicker-prev,
      .ui-datepicker-next {
        background-color: #f0f0f0;
        color: #333;
      }
      .ui-datepicker-calendar td {
        padding: 5px;
      }

      .ui-datepicker-calendar td:hover {
        background-color: #e0e0e0;
      }

      footer {
        background-color: #ffa559;
        color: #000000;
        padding: 5px 0px;
        display: flex;
        flex-direction: column; /* Change to column layout for mobile view */
        align-items: center; /* Center items in mobile view */
        border-radius: 4px;
        margin-top: 100px;
      }

      .container {
        width: 100%;

        margin: auto;
        padding: 0 20px; /* Add padding to create space between content and screen edges */
      }

      .footer-content {
        display: flex;
        flex-wrap: wrap; /* Wrap content for mobile view */
        justify-content: space-between;
        align-items: center;
      }

      .social-icons a {
        margin-left: 10px;
        color: #555555;
        font-size: 24px;
      }

      .customer-care,
      .footer-links,
      .social-icons,
      .footer-links h3 {
        flex: 1;
        text-align: center;
        margin: 10px;
      }

      h3 {
        color: #000000;
        font-size: 20px;
        margin-bottom: 10px;
      }

      .customer-care p {
        margin: 0;
        color: #000000;
      }

      .footer-links ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      .footer-links li {
        margin-bottom: 5px; /* Add margin between list items */
      }

      .footer-links a {
        color: #000000;
        text-decoration: none;
      }

      .copy {
        text-align: center;
        color: #fff;
        padding: 20px; /* Add padding to the .copy container */
        background-color: #dd660b;
        color: rgb(52, 23, 3);
        border-radius: 4px;
        margin-right: 35px;
      }
      .book-now-mb {
        display: none;
      }
      .popup {
        display: none;
      }

      /* Media query for mobile view */
      @media screen and (max-width: 768px) {
        .header-buttons {
          display: none; /* Hide the header buttons on mobile view */
        }
        .menu-icon {
          cursor: pointer;
          display: block;
          padding: 10px;
        }
        .header-buttons.show-dropdown {
          display: flex;
          flex-direction: column;
          position: absolute;
          top: 60px;
          left: 0;
          width: 100%;
          background-color: #ebecf0;
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
          z-index: 2;
        }
        .header-buttons.show-dropdown a {
          margin: 5px 10px;
        }

        .footer {
          padding-bottom: 40px; /* Add extra padding to the bottom of the footer */
          padding-right: 20px;
          width: 100%;
        }
        .footer-content {
          flex-direction: column; /* Change to column layout for tablet view */
          align-items: center;
        }

        .footer-links,
        .social-icons {
          margin-top: 20px; /* Add margin to separate sections in tablet view */
        }
        /* Adjust the grid layout for smaller screens */
        .reviews {
          grid-template-columns: 1fr;
        }
        .product-images {
          flex-direction: column; /* Change to column layout for mobile view */
          align-items: center; /* Center items in mobile view */
        }

        .big-image-container,
        .small-images-container {
          width: 100%; /* Take full width in mobile view */
        }
        .mid-container {
          flex-direction: column;
        }

        .mid-left-container {
          flex-basis: 100%;
          width: 600px;
          margin-top: 20px;
          padding-left: 40px;
        }
        .mid-right-container {
          flex-basis: 100%;
          width: 100%;
          margin-top: 20px;
        }
        .bottom-container {
          width: 600px;
          padding-left: 40px;
        }

        .book-now-box {
          display: none;
        }

        .ft {
          width: 670px;
          margin-right: -100px;
        }
        .book-now-box {
          display: none;
        }
        .book-now-mb {
          display: block;
          background-color: #ffa559; /* Green */
          border: none;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 4px;
        }
        .popup-book-now-button {
          display: block;
          background-color: #ffa559; /* Green */
          border: none;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 4px;
        }
        /* Popup styles */

        .popup {
          display: none;
          height: 295px;
          width: 300px;
          background-color: #f0f0f0;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          align-items: center;
          padding: 10px;
          margin-left: 1px;
          margin-bottom: 10px;
          border: 1px solid #000;
          position: fixed;
          top: 29%;
          left: 25%;

          transform: translate(-50%, -50%);
        }

        .popup-content {
          background-color: #ebecf0;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .popup-close {
          /* Position the close button at the top right corner */
          position: absolute;
          top: 10px;
          right: 10px;
          cursor: pointer;
          font-size: 1.2rem; /* Adjust the size as needed */
          /* Add some padding to make it easier to click */
          padding: 5px;
        }

        /* Add a bit of styling to the close button */
        .popup-close i {
          color: #999; /* Adjust the color */
        }

        .popup-close i:hover {
          color: #333; /* Adjust the color on hover */
        }
      }

      /* Signup popup style */
      .signup-popup {
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #ffe6c7;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        padding: 10px;
        display: none;
        z-index: 3;
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
      .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
      }

      .popup-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
      }

      .popup-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
      }

      .popup-close {
        cursor: pointer;
      }

      .popup-body textarea {
        width: 100%;
        height: 100px;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .rating-stars {
        display: flex;
        gap: 5px;
      }

      .rating-stars .star {
        font-size: 24px;
        cursor: pointer;
      }

      #submit-review {
        background-color: #ffa559;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      .rating-stars .star.selected {
        color: gold;
      }
    </style>
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
            <div class="popup-overlay" id="review-popup-overlay">
              <div class="popup-content" id="review-popup-content">
                <div class="popup-header">
                  <h2>Add Review and Rating</h2>
                </div>
                <div class="popup-body">
                  <textarea
                    id="review-text"
                    placeholder="Write your review"
                  ></textarea>
                  <div class="rating-stars">
                    <span class="star" data-rating="1">★</span>
                    <span class="star" data-rating="2">★</span>
                    <span class="star" data-rating="3">★</span>
                    <span class="star" data-rating="4">★</span>
                    <span class="star" data-rating="5">★</span>
                  </div>
                  
                  <button id="submit-review">Submit Review</button>
                </div>
              </div>
            </div>

            <div class="btns">
              <div class="bt">
                <button>see more</button>
              </div>
              <div class="bt2">
             
                <button>Add review</button>
                
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
var latitude = <?php echo $properties->Latitude; ?> ;
var longitude = <?php echo $properties->Longitude; ?>;

var coord = { lat: latitude, lng: longitude };
 var map=new google.maps.Map(document.getElementById("map"), {
 zoom: 10,
center: coord,
 });

 new google.maps.Marker({
  position:coord,
  map:map
 })
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