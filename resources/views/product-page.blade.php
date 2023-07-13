<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="product-page.css" />
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI library -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />

    <script src="product-page.js"></script>
</head>

<body>
    <header>
        <div class="logo-con">
            <img class="logo" src="mainlogo.png" alt="Logo" />
        </div>

        <div class="page-title">
            <h1>My Second Home</h1>
        </div>
        <div class="header-buttons">
            <a href="landingpage.html"><button>Home</button></a>
            <a href="aboutus.html"><button>About Us</button></a>
            <a href="login.html"><button>Login</button></a>
            <button class="signup-button">Signup</button>
            <div class="signup-popup">
                <a href="tenant.html"><button>Tenant</button></a>
                <a href="landlord.html"><button>Landlord</button></a>
            </div>
        </div>
    </header>
    <div class="page-container">
        <div class="left-section">
            <h1 class="main-heading">Room for Rent</h1>
            <div class="rating-section">
                <div class="rating">
                    <span class="rating-value">4.5</span>
                    <span class="rating-star">★</span>
                </div>
                <div class="reviews">
                    <span class="review-count">250</span> Reviews
                </div>
                <div class="address">123 Main St, City, Country</div>
            </div>
        </div>
        <div class="product-images">
            <div class="big-image-container">
                <img src="room.jpg" alt="Product Image" class="big-image" id="big-image" onclick="openImage('big-image')" />
            </div>
            <div class="small-images-container">
                <img src="room.jpg" alt="Product Image" class="small-image" id="small-image-1" onclick="openImage('small-image-1')" />
                <img src="room.jpg" alt="Product Image" class="small-image" id="small-image-2" onclick="openImage('small-image-2')" />
                <img src="room.jpg" alt="Product Image" class="small-image" id="small-image-3" onclick="openImage('small-image-3')" />
                <img src="room.jpg" alt="Product Image" class="small-image" id="small-image-4" onclick="openImage('small-image-4')" />
            </div>
        </div>
        <div class="right-container">
            <div class="book-now-container">
                <div class="book-now-box">
                    <div class="dates-container">
                        <input type="text" class="checkin-date" id="checkin-date" placeholder="Check-in Date" />
                        <input type="text" class="checkout-date" id="checkout-date" placeholder="Check-out Date" />
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
                            <span>Rent Fee:</span>
                            <span>$500</span>
                        </div>
                        <div class="fee-item">
                            <span>Amenities Fee:</span>
                            <span>$50</span>
                        </div>
                        <hr class="fee-separator" />
                        <div class="fee-item total-fee">
                            <span>Total Fee:</span>
                            <span>$550</span>
                        </div>
                    </div>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

        <div class="about-product">
            <div class="product-description-container">
                <h2>Description</h2>
                <p class="product-description">
                    This is a great product that you will love. It is made with
                    high-quality materials and it is very durable. This is a great
                    product that you will love. It is made with high-quality materials
                    and it is very durable. This is a great product that you will love.
                    It is made with high-quality materials and it is very durable. This
                    is a great product that you will love. It is made with high-quality
                    materials and it is very durable.
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
            <h2>User Reviews</h2>
            <div class="user-review">
                <div class="user-info">
                    <div class="user-name">John Doe</div>
                    <div class="user-rating">4.5 ★</div>
                </div>
                <div class="review-text">
                    "This place exceeded my expectations. The amenities were great, and
                    the location was perfect."
                </div>
            </div>
            <div class="user-review">
                <div class="user-info">
                    <div class="user-name">Jane Smith</div>
                    <div class="user-rating">5 ★</div>
                </div>
                <div class="review-text">
                    "I had a fantastic stay here. The room was clean, and the staff was
                    very friendly and helpful."
                </div>
            </div>
            <button>see more</button>
        </div>

        <div class="map-container">
            <h2>Location</h2>
            <img src="map.jpg" alt="location" id="map-image" />
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

</html>