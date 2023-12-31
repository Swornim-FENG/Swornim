<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Room Rental Website</title>
    <link rel="stylesheet" href="landingpage.css">
    <script src="landingpage.js"></script>
    <style>
        footer {
            background-color: #ffa559;
            color: #000000;
            padding: 5px 0px;
            display: flex;
            justify-content: space-between;
        }

        .container {
            max-width: 650px;
            margin: 0 auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .social-icons {
            display: flex;
            align-items: center;
            margin-left: 100px;
            margin-top: 60px;
        }

        .social-icons a {
            margin-left: 10px;
            color: #555555;
            font-size: 24px;
        }

        .customer-care {
            flex: 1;
        }

        .customer-care h3 {
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
            margin: 10px;
        }

        .footer-links h3 {
            color: #000000;
            font-size: 20px;
            margin-bottom: 10px;
            text-align: right;
        }

        .footer-links li {
            margin-right: 0%;
        }

        .footer-links a {
            color: #000000;
            text-decoration: none;
        }

        .copy {
            text-align: center;
            margin-top: 20px;
            color: #fff;

            padding: 20px;
            flex-grow: 1;
            background-color: #dd660b;
            color: rgb(52, 23, 3);
        }

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

        .signup-button:hover+.signup-popup,
        .signup-popup:hover {
            display: block;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

        }

        main {
            display: flex;
            padding-top: 100px;
            margin-top: 5px;
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

        .page-title {
            margin: 0;
            font-size: 20px;
            color: #fff;
        }

        .logo {
            width: 100px;
            margin-right: 10px;

        }

        .header-buttons {
            display: flex;
            align-items: center;
        }

        .header-buttons button {
            margin-left: 10px;
            padding: 10px 20px;
            background-color: #FFA559;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .header-buttons button#lgn:hover,
        .header-buttons button#abus:hover {
            background-color: #FF6000;
        }


        .header-buttons button:hover {
            background-color: #ff7700;
        }

        .signup-popup {
            position: absolute;
            top: 40px;
            right: 20px;
            background-color: #FFE6C7;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 10px;
            display: none;
        }

        .signup-popup button {
            margin-top: 5px;
        }

        .signup-button:hover+.signup-popup,
        .signup-popup:hover {
            display: block;
        }


        .filter-section {
            flex-basis: 20%;
            padding: 20px;
            margin-right: 10px;
            border: 2px solid #ff7700;
            border-radius: 4px;
            margin-bottom: auto;

        }

        .filter-list li {
            margin-bottom: 10px;
        }

        .filter-list input[type="checkbox"] {
            margin-right: 5px;
        }

        h2 {
            margin-top: 0;
        }

        .room-grid {
            flex-grow: 1;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 20px;

        }

        .room-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 10px;
            color: black;
            background-color: #fff;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .room-card:hover {
            background-color: #FFE6C7;
        }

        .room-image {
            width: 100px;
            height: 100px;
            margin-right: 0;
        }


        footer {
            background-color: #ffa559;
            color: #000000;
            padding: 5px 0px;
            display: flex;
            justify-content: space-between;
        }

        .container {
            max-width: 650px;
            margin: 0 auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .social-icons {
            display: flex;
            align-items: center;
            margin-left: 100px;
            margin-top: 60px;
        }

        .social-icons a {
            margin-left: 10px;
            color: #555555;
            font-size: 24px;
        }

        .customer-care {
            flex: 1;
        }

        .customer-care h3 {
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
            margin: 10px;
        }

        .footer-links h3 {
            color: #000000;
            font-size: 20px;
            margin-bottom: 10px;
            text-align: right;
        }

        .footer-links li {
            margin-right: 0%;
        }

        .footer-links a {
            color: #000000;
            text-decoration: none;
        }

        .copy {
            text-align: center;
            margin-top: 20px;
            color: #fff;

            padding: 20px;
            flex-grow: 1;
            background-color: #dd660b;
            color: rgb(52, 23, 3);
        }


        .show-more-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-right: 200px;
            margin-bottom: 1px;
            text-align: center;
        }

        .show-more-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #FFA559;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            justify-content: center;
            margin: 0 auto;
        }

        .show-more-button button:hover {
            background-color: #ff7700;
        }



        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            margin-top: 20px;
            width: 1000px;
            /* Increased width value */
        }

        .search-bar input[type="text"] {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
            width: 500px;
            /* Increased width value */
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #ff7700;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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




        document.addEventListener("DOMContentLoaded", function() {

            var filterButton = document.querySelector(".filter-section button");


            filterButton.addEventListener("click", function() {

                var checkedRanges = document.querySelectorAll(
                    ".filter-section input[type='checkbox']:checked"
                );

                var selectedRanges = [];

                checkedRanges.forEach(function(checkbox) {
                    selectedRanges.push(checkbox.value);
                });

                var roomCards = document.querySelectorAll(".room-card");

                roomCards.forEach(function(card) {
                    card.style.display = "none";
                });

                if (selectedRanges.length === 0) {
                    roomCards.forEach(function(card) {
                        card.style.display = "block";
                    });
                } else {
                    selectedRanges.forEach(function(range) {
                        roomCards.forEach(function(card) {
                            var priceElement = card.querySelector("p:nth-child(3)");
                            var price = parseInt(priceElement.textContent.split(":")[1]);

                            if (range === "3000+" && price >= 3000) {
                                card.style.display = "block";
                            } else {
                                var rangeValues = range.split("-");
                                var min = parseInt(rangeValues[0]);
                                var max = parseInt(rangeValues[1]);

                                if (price >= min && price <= max) {
                                    card.style.display = "block";
                                }
                            }
                        });
                    });
                }
            });
        });
    </script>
</head>

<body>
    <header>
        <div class="logo-con">
            <!-- Place your logo here -->
            <img class="logo" src="mainlogo.png" alt="Logo" />
        </div>
        <div class="header-buttons">
            <a id="home" href="landingpage.html">Home</a>
            <a href="howitworks.html">How It Works</a>
            <a href="landlord.html">I am a Landlord</a>
            <a href="help.html">Help</a>
            <a href="login.html">Login</a>
            <a id="signup" href="signup.html">Signup</a>
            <div class="signup-popup">
                <a href="tenant-signup.html">Tenant Signup</a>
                <a href="landlord-signup.html">Landlord Signup</a>
            </div>
        </div>
    </header>

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
                <input type="text" placeholder="Search..." />
                <button type="submit">Search</button>
            </div>

            <div class="room-grid">
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 1" />
                    <div>
                        <h3>Room 1</h3>
                        <p>Location: 28-kilo</p>
                        <p>Price: 1700</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 2" />
                    <div>
                        <h3>Room 2</h3>
                        <p>Location:bhyandol</p>
                        <p>Price: 2100</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 3" />
                    <div>
                        <h3>Room 3</h3>
                        <p>Location: kathmandu university</p>
                        <p>Price: 3000</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 4" />
                    <div>
                        <h3>Room 4</h3>
                        <p>Location: kathmandu university</p>
                        <p>Price: 3100</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 5" />
                    <div>
                        <h3>Room 5</h3>
                        <p>Location: kathmandu university</p>
                        <p>Price: 2000</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 6" />
                    <div>
                        <h3>Room 6</h3>
                        <p>Location: 28-kilo</p>
                        <p>Price: 2200</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 1" />
                    <div>
                        <h3>Room 7</h3>
                        <p>Location: 28-kilo</p>
                        <p>Price: 1700</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 2" />
                    <div>
                        <h3>Room 8</h3>
                        <p>Location:bhyandol</p>
                        <p>Price: 2100</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 3" />
                    <div>
                        <h3>Room 9</h3>
                        <p>Location: kathmandu university</p>
                        <p>Price: 3000</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 4" />
                    <div>
                        <h3>Room 10</h3>
                        <p>Location: kathmandu university</p>
                        <p>Price: 3100</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="landing-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 5" />
                    <div>
                        <h3>Room 11</h3>
                        <p>Location: kathmandu university</p>
                        <p>Price: 2000</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 6" />
                    <div>
                        <h3>Room 12</h3>
                        <p>Location: 28-kilo</p>
                        <p>Price: 2200</p>
                        <p> Rating:</p>
                        <div class="star-ratings">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>

                    </div>
                </a>

            </div>
            <div class="show-more-button">
                <button>Show More</button>
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
                <div class="social-icons">
                    <a href="https://www.instagram.com/your-instagram-account" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/your-facebook-account" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.twitter.com/your-twitter-account" target="_blank">
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
</body>