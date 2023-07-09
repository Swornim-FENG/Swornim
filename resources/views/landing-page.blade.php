<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Room Rental Website</title>
    <link rel="stylesheet" href="landingpage.css">
    <script src="landingpage.js"></script>
</head>

<body>
    <header>
        <div class="logo-con"><img class="logo" src=C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\logoPrototype.png alt="Logo" /></div>

        <div class="page-title">
            <h1>My Second Home</h1>
        </div>
        <div class="header-buttons">
            <a href="landingpage.html"><button id="home">Home</button></a>
            <a href="aboutus.html"><button id="abus">About Us</button></a>
            <a href="login.html"><button id="lgn">Login</button></a>
            <button class="signup-button">Signup</button>
            <div class="signup-popup">
                <a href="tenant.html"><button>Tenant</button></a>
                <a href="landlord.html"><button>Landlord</button></a>
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
            <button>filter</button>
        </div>

        <div class="search-bar-container">
            <div class="search-bar">
                <input type="text" placeholder="Search..." />
                <button type="submit">Search</button>
            </div>

            <div class="room-grid">
                <a href="product-page.html" class="room-card">
                    <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 1" />
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
                    <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 2" />
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
                    <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 3" />
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
                    <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 4" />
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
                    <a href="product-page.html" class="room-card">
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 4" />
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
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 5" />
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
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 6" />
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
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 1" />
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
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 2" />
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
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 3" />
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
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 4" />
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
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 5" />
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
                        <img class="room-image" src="C:\Users\Hi-Tech\OneDrive\Desktop\codes\images\room for rent.jpg" alt="Room 6" />
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