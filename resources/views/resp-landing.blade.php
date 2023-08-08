<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
            justify-content: flex-start;
            /* Align the buttons to the left in desktop view */
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
            display: none;
            /* Hide the menu icon on desktop view */
        }

        /* Mid Section Styles */
        .mid {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin-top: 5px;
            /* Adjust the margin-top value */
        }

        /* Filter Styles */
        filter {
            padding: 5px;
            margin-top: 10px;
        }

        .filter-section {
            flex-basis: 20%;
            padding: 20px;
            margin-right: 10px;
            border: 2px;
            border-radius: 4px;
            margin-bottom: auto;
            margin-top: 10px;
            width: 200px;
        }

        .filter-block {
            margin-bottom: 20px;
            width: 100%;
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

        h3 {
            margin-left: 10px;
        }

        .price {
            background-color: #ebecf0;
            border: 2px;
            border-radius: 4px;
        }

        .duration {
            background-color: #ebecf0;
            border: 2px;
            border-radius: 4px;
        }

        .distance {
            background-color: #ebecf0;
            border: 2px;
            border-radius: 4px;
        }

        .amenities {
            background-color: #ebecf0;
            border: 2px;
            border-radius: 4px;
        }

        /* Main Styles */
        main {
            flex-grow: 1;
            width: 100%;
            margin: 5px;
        }

        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 10px;
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
            border-radius: 10px;
        }

        .room-card:hover {
            background-color: #ebecf0;
        }

        .room-image {
            width: 100px;
            height: 100px;
            margin-right: 0;
        }

        .search-bar-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            margin-top: 70px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 100%;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
            width: 100%;
        }

        .search-bar button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #ff7700;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .show-more-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            text-align: center;
        }

        .show-more-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #ffa559;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .show-more-button button:hover {
            background-color: #ff7700;
        }

        footer {
            background-color: #ffa559;
            color: #000000;
            padding: 5px 0px;
            display: flex;
            flex-direction: column;
            /* Change to column layout for mobile view */
            align-items: center;
            /* Center items in mobile view */
            border-radius: 4px;
            /* Add red border to the footer */
        }

        .container {
            width: 100%;
            max-width: 1200px;
            /* Add max-width to limit footer width on larger screens */
            margin: auto;
            padding: 0 20px;
            /* Add padding to create space between content and screen edges */
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            /* Wrap content for mobile view */
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
            margin-bottom: 5px;
            /* Add margin between list items */
        }

        .footer-links a {
            color: #000000;
            text-decoration: none;
        }

        .copy {
            text-align: center;
            color: #fff;
            padding: 20px;
            /* Add padding to the .copy container */
            background-color: #dd660b;
            color: rgb(52, 23, 3);
            border-radius: 4px;
            margin-right: 35px;
        }

        /* Media query for mobile view */
        @media screen and (max-width: 768px) {
            .header-buttons {
                display: none;
                /* Hide the header buttons on mobile view */
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

            .room-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .search-bar {
                flex-direction: column;
                align-items: stretch;
                max-width: 300px;
                margin: auto;
            }

            .search-bar input[type="text"],
            .search-bar button {
                width: 100%;
            }

            .footer {
                padding-bottom: 40px;
                /* Add extra padding to the bottom of the footer */
                padding-right: 20px;
                width: 100%;
            }

            .footer-content {
                flex-direction: column;
                /* Change to column layout for tablet view */
                align-items: center;
            }

            .footer-links,
            .social-icons {
                margin-top: 20px;
                /* Add margin to separate sections in tablet view */
            }

            .ft {
                width: 480px;
                margin-left: 10px;
                margin-right: 1px;
            }

            .flt {
                margin-left: 50px;
                width: 200px;
            }

            .filter-block {
                width: 180px;
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

        .yellow-stars {
            color: gold;
        }

        .header-buttons a.active {
            background-color: #da300e;
            color: #fff;
        }
    </style>
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
            <a id="signup">Signup</a>
            <div class="signup-popup">
                <a href="resp-tenant-signup.html">Tenant Signup</a>
                <a href="resp-Landlord-signup.html">Landlord Signup</a>
            </div>
        </div>
        <!-- Menu icon -->
        <div class="menu-icon" onclick="toggleDropdown()">
            <!-- Insert your menu icon here -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M4 6h16M4 12h16m-7 6h7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </header>
    <div class="mid">
        <filter class="flt">
            <div class="filter-section">
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
                                <input type="checkbox" id="duration-flexible" value="flexible" />
                                <label for="duration-flexible">Flexible</label>
                            </li>
                            <li>
                                <input type="checkbox" id="duration-fixed" value="fixed" />
                                <label for="duration-fixed">Fixed</label>
                            </li>
                            <li>
                                <input type="checkbox" id="duration-12months" value="12months" />
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
                                <input type="checkbox" id="amenity-furniture" value="furniture" />
                                <label for="amenity-furniture">Furniture</label>
                            </li>
                        </ul>
                    </div>
                </div>

                <button>Filter</button>
            </div>
        </filter>
        <main>
            <div class="search-bar-container">
                <div class="search-bar">
                    <input type="text" placeholder="Search..." />
                    <button type="submit">Search</button>
                </div>
            </div>
            <div class="room-grid">
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 1" />
                    <div>
                        <h3>Room 1</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 1700</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 2" />
                    <div>
                        <h3>Room 2</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 1900</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 3" />
                    <div>
                        <h3>Room 3</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 2100</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 4" />
                    <div>
                        <h3>Room 4</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 2200</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 5" />
                    <div>
                        <h3>Room 5</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 3300</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 6" />
                    <div>
                        <h3>Room 6</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 2500</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 1" />
                    <div>
                        <h3>Room 7</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 2900</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 2" />
                    <div>
                        <h3>Room 8</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 3000</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 3" />
                    <div>
                        <h3>Room 9</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 3500</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 4" />
                    <div>
                        <h3>Room 10</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 1900</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 5" />
                    <div>
                        <h3>Room 11</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 2100</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
                <a href="produt-resp.html" class="room-card">
                    <img class="room-image" src="room for rent.jpg" alt="Room 6" />
                    <div>
                        <h3>Room 12</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 28-kilo</p>
                        <p><i class="fas fa-dollar-sign"></i> 2500</p>
                        <p class="yellow-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                    </div>
                </a>
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
    <script>
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
                                } else {
                                    card.style.display = "none"; // Hide the card if it doesn't meet the price range criteria
                                }
                            }
                        });
                    });
                }
            });
        });
    </script>
</body>

</html>