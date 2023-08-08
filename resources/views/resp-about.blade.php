<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us page</title>
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

        .about {
            background-color: #ebecf0;
            padding: 30px;
            margin-top: 7%;
            margin-bottom: 300px;
            /* Adjust this value as needed */
        }

        .container {
            max-width: 800px;

            margin: 0 auto;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
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

            .footer {
                padding-bottom: 40px;
                /* Add extra padding to the bottom of the footer */
                padding-right: 20px;
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

            .about {
                margin-top: 55px;
                /* Increase the margin on top for mobile view */
                padding: 30px 20px;
                /* Adjust padding for mobile view */
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
                <a href="tenant-signup.html">Tenant Signup</a>
                <a href="landlord-signup.html">Landlord Signup</a>
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
    <section class="about">
        <div class="container">
            <h1>About MSH</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                porttitor ante at leo eleifend, ac rutrum tortor maximus. Integer
                lobortis ipsum nec finibus fermentum. Curabitur vulputate rutrum dolor
                in mattis. Duis lacinia dignissim eros, nec iaculis quam gravida id.
            </p>
            <p>
                Nulla lobortis ex sapien, vitae tempus lacus rutrum eget. Ut aliquet
                tristique ante, eget pharetra nisl efficitur et. Integer facilisis,
                sapien in malesuada venenatis, turpis dolor pellentesque sem, nec
                ultricies enim est eget velit. Nam accumsan vestibulum nisl sed
                vestibulum.
            </p>
            <p>
                Nulla lobortis ex sapien, vitae tempus lacus rutrum eget. Ut aliquet
                tristique ante, eget pharetra nisl efficitur et. Integer facilisis,
                sapien in malesuada venenatis, turpis dolor pellentesque sem, nec
                ultricies enim est eget velit. Nam accumsan vestibulum nisl sed
                vestibulum.
            </p>
            <p>
                Nulla lobortis ex sapien, vitae tempus lacus rutrum eget. Ut aliquet
                tristique ante, eget pharetra nisl efficitur et. Integer facilisis,
                sapien in malesuada venenatis, turpis dolor pellentesque sem, nec
                ultricies enim est eget velit. Nam accumsan vestibulum nisl sed
                vestibulum.
            </p>
            <a href="" class="button">Contact Us</a>
        </div>
    </section>
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
    </script>
</body>

</html>