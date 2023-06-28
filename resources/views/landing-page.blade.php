<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/unloginheader.css')}}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Room Rental Website</title>
    <style>
        /* CSS styles for the website */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        main {
            display: flex;
            padding-top: 100px;
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
        }

        .copy {
            padding: 20px 0px;
            max-width: 800px;
            background-color: #e07546;
            color: rgb(52, 23, 3);
        }

        .show-more-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            align-items: center;
            text-align: center;
        }

        .show-more-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #ff7700;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            justify-content: center;
            margin: 0 auto;
        }

        .filter-section {
            flex-basis: 20%;
            padding: 20px;
            margin-right: 10px;
            border: 2px solid #ff7700;
            border-radius: 4px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #555555;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        header {
            position: relative;
            width: 100%;
            height: 75px;
            background: white;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            border: bottom 1px #ff7700;
        }

        .brand {
            display: flex;
            align-items: center;
            height: 100%;
            padding: 4%;
            width: 20%;
        }

        .brand h1 {
            margin-left: 5%;
        }

        .navbar {
            position: relative;
            width: 70%;
            padding: 5%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .searchBox {
            position: relative;
            width: 40%;
            display: flex;
            align-items: center;
        }

        .searchBox input {
            width: 100%;
            height: 35px;
            border: none;
            border-radius: 8px;
            padding: 1%;
            text-indent: 10px;
            font-size: 18px;
        }

        #searchIcon {
            position: relative;
            left: -30px;
            font-size: 22px;
            color: rgb(77, 77, 77);
            cursor: pointer;
            z-index: 221;
        }

        ul {
            width: 60%;
            text-align: center;
        }

        ul li {
            display: inline-block;
            margin-left: 4%;
            transition: all 0.5s ease;
            text-align: center;
            cursor: pointer;
            padding: 1%;
            height: 20px;
            overflow: hidden;
        }

        ul li:hover {
            height: 45px;
        }

        ul li #headIcon {
            display: block;
            font-size: 22px;
        }

        ul li a {
            text-decoration: none;
            font-size: 18px;
            color: rgb(213, 101, 15);
        }

        ul li a:active,
        :focus {
            text-decoration: underline;
            font-weight: 700;
        }

        #menuIcon {
            display: none;
        }

        @media (max-width: 768px) {
            .navbar {
                position: relative;
                display: block;
                width: 60%;
                display: none;
            }

            .navbar.navactive {
                display: inline;
            }

            .searchBox {
                position: relative;
                width: 100%;
                top: 60px;
                z-index: 221;
                left: 5%;
            }

            #menuIcon {
                display: inline;
                position: fixed;
                font-size: 25px;
                margin-left: 88%;
                z-index: 222;
                float: right;
                padding: 1%;
                border-radius: 4px;
                cursor: pointer;
                border: 1px solid rgb(221, 221, 221);
            }

            .navbar ul {
                position: absolute;
                width: 100%;
                height: 100vh;
                background-color: rgb(8, 9, 19);
            }

            .navbar ul li {
                display: block;
                margin-top: 20px;
                width: 100%;
                height: 40px;
                text-align: left;
                position: relative;
                top: 50px;
                padding: 2%;
            }

            ul li #headIcon {
                display: inline-block;
                font-size: 33px;
            }

            ul li:hover {
                background: rgb(35, 36, 51);
            }

            ul li a {
                margin-left: 40px;
                font-family: 600;
            }
        }

        .logo {
            width: 100px;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div class="brand">
            <img class="logo" src="C:\Users\Hi-Tech\OneDrive\Desktop\may 23\logoPrototype.png" alt="Logo" />
            <h1>MSH</h1>
        </div>
        <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>
        <div class="navbar" id="nav">

            <ul>
                <li>
                    <span class="fas fa-home" id="headIcon"></span>
                    <a href="{{url('/')}}/msh"> Home </a>
                </li>
                <li>
                    <span class="fa fa-user-about" id="headIcon"></span>
                    <a href="#">About Us </a>
                </li>
                <li>
                    <span class="fas fa-question-circle" id="headIcon"></span>
                    <a href="#"> Help </a>
                </li>
                <li>
                    <span class="fas fa-question-login" id="headIcon"></span>
                    <a href="{{url('/')}}/login"> Log In </a>
                </li>
                <li>

                    <option value="">Sign up</option>

                    <select onchange="navigateToLink(this)">
                        <option value="value3"></option>>
                        <option value="value2" data-url="{{url('/')}}/tenant">Tenant</option>>
                        <option value="value1" data-url="{{url('/')}}/lanlord">Lanlord</option>
                    </select>


                </li>
            </ul>
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
        <div class="search-bar-container">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </div>
            <div class="room-grid">
                <div class="room-card">
                    <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\may 23\royal enfield.jpg" alt="Room 1" />
                    <div>
                        <h3>Room 1</h3>
                        <p>Location: 28-kilo</p>
                        <p>Price: 1700</p>
                        <button>Book Now</button>
                    </div>
                </div>
                <div class="room-card">
                    <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\may 23\crf.jpg" alt="Room 2" />
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
                <div class="show-more-button">
                    <button>Show More</button>
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

        filterButton.addEventListener("click", function(event) {
            event.preventDefault();
            const selectedPrice = priceFilter.value;
            const selectedLocation = locationFilter.value;

            Array.from(roomList.children).forEach(function(roomCard) {
                const price = roomCard.querySelector("p:nth-child(3)").textContent;
                const numericPrice = parseInt(price.match(/\d+/)[0]); // Extract numeric portion of price

                const isPriceMatch =
                    selectedPrice === "" ||
                    (numericPrice >= parseInt(selectedPrice.split("-")[0]) &&
                        numericPrice <= parseInt(selectedPrice.split("-")[1]));
                const isLocationMatch =
                    selectedLocation === "" ||
                    roomCard
                    .querySelector("p:nth-child(2)")
                    .textContent.includes(selectedLocation);

                if (isPriceMatch && isLocationMatch) {
                    roomCard.style.display = "flex";
                } else {
                    roomCard.style.display = "none";
                }
            });
        });
        const toggle = () => {
            document.getElementById("nav").classList.toggle("navactive");
        };

        function navigateToLink(selectElement) {
            var selectedIndex = selectElement.selectedIndex;
            var selectedOption = selectElement.options[selectedIndex];
            var url = selectedOption.getAttribute('data-url');

            if (url) {
                window.location.href = url;
            }
        }
    </script>
</body>

</html>