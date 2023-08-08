<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
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

        /* Media query for tablet view */
        @media screen and (max-width: 768px) {
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
        }
    </style>
</head>

<body>
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
</body>

</html>