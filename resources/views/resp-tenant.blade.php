<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Signup Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <style>
        /* Add the CSS styles here */

        body {
            font-family: Arial, sans-serif;
        }

        .logo-container {
            text-align: center;
            margin-top: 20px;
        }

        .logo-container img {
            width: 150px;
            height: auto;
        }

        .signup-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ffa559;
        }

        S .signup-form h2 {
            text-align: center;
        }

        .signup-form form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: repeat(3, auto);
            grid-gap: 16px;
        }

        .signup-form label {
            margin-bottom: 8px;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="tel"],
        .signup-form input[type="password"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .signup-form input[type="submit"] {
            margin-top: 16px;
            grid-column: span 2;
            justify-self: center;
            padding: 14px 24px;
            font-size: 16px;
            background-color: hwb(23 0% 0%);
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .signup-form input[type="submit"]:hover {
            background-color: #b34720;
        }

        .login-text {
            text-align: center;
            margin-top: 16px;
        }

        .login-text a {
            color: #440fe3;
            text-decoration: none;
        }

        .login-text a:hover {
            text-decoration: underline;
        }

        .social-login {
            text-align: center;
            margin-top: 16px;
        }

        .social-login button {
            margin-right: 8px;
            padding: 8px 16px;
            font-size: 14px;
            background-color: #0f9d58;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .social-login button.google {
            background-color: #3018e9;
        }

        .social-login button:hover {
            opacity: 0.8;
        }

        .toggle-password {
            position: relative;
            top: -27px;
            right: -150px;
            cursor: pointer;
            color: #aaa;
        }

        .toggle-password:hover {
            color: #666;
        }

        .form_heading {
            text-align: center;
        }

        @media screen and (max-width: 600px) {
            .signup-form form {
                display: flex;
                flex-direction: column;
                align-items: center;
                /* Center the form inputs vertically */
            }

            .signup-form label {
                text-align: center;
                /* Center the labels horizontally */
            }

            .signup-form input[type="text"],
            .signup-form input[type="email"],
            .signup-form input[type="tel"],
            .signup-form input[type="password"] {
                width: 320px;
                /* Make sure the input fields take the full width of the form */
                box-sizing: border-box;
                /* Include padding and border in the total width */
                padding: 10px;
                /* Add padding to the input fields */
                border: 1px solid #ccc;
                /* Add a border to the input fields */
                border-radius: 4px;
                /* Add border radius for rounded corners */
            }

            .fas {
                margin-left: 140px;
            }
        }

        div {
            padding: 10px;
            /* Adding padding for spacing */
        }
    </style>
</head>

<body>
    <div class="logo-container">
        <img src="mainlogo.png" alt="Logo" />
    </div>
    <br />

    <div class="signup-form">
        <h2 class="form_heading">Create A Tenant Account</h2>
        <form>
            <div>
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required />
            </div>

            <div>
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required />
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div>
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required />
            </div>
            <div>
                <label for="address">Permanent Address:</label>
                <input type="text" id="address" name="address" required />
            </div>

            <div>
                <label for="address2">Temporary Address:</label>
                <input type="text" id="address" name="address" required />
            </div>

            <div>
                <label for="password1">Password:</label>
                <input type="password" id="password1" name="password1" required />
                <i class="fas fa-eye toggle-password" data-target="password1"></i>
            </div>

            <div>
                <label for="password2">Confirm Password:</label>
                <input type="password" id="password2" name="password2" required />
                <i class="fas fa-eye toggle-password" data-target="password2"></i>
            </div>

            <input type="submit" value="Sign Up" />
        </form>
    </div>

    <div class="login-text">
        <p>Already have an account? <a href="#">Login</a></p>
    </div>

    <div class="social-login">
        <button>Sign in with Google</button>
        <button class="google">Sign in with Facebook</button>
    </div>
    <script>
        const toggleButtons = document.querySelectorAll(".toggle-password");
        const passwordInputs = document.querySelectorAll(
            'input[type="password"]'
        );

        toggleButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const targetId = button.getAttribute("data-target");
                const targetInput = document.getElementById(targetId);

                if (targetInput.type === "password") {
                    targetInput.type = "text";
                    button.classList.remove("fa-eye");
                    button.classList.add("fa-eye-slash");
                } else {
                    targetInput.type = "password";
                    button.classList.remove("fa-eye-slash");
                    button.classList.add("fa-eye");
                }
            });
        });
    </script>
</body>

</html>