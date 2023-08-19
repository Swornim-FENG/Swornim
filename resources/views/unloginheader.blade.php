<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
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
        <img class="logo" src="{{asset('images/mainlogo.png')}}" alt="Logo" />
      </div>
      </div>
      <div class="header-buttons">
        <a id="home" href="/landingpage">Home</a>
        <a href="">How It Works</a>
        <a href="{{url('/')}}/lanlord">I am a Landlord</a>
        <a href="">Help</a>
        <a href="{{url('/')}}/login">Login</a>
        <a id="signup">Signup</a>
        <div class="signup-popup">
          <a href="{{url('/')}}/tenant">Tenant Signup</a>
          <a href="{{url('/')}}/lanlord">Landlord Signup</a>
        </div>
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

    <script>
      // Call the function when the page loads
      window.addEventListener("load", highlightActivePage);
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
      // Function to highlight the active page
      function highlightActivePage() {
        // Get the current URL path
        const currentURL = window.location.pathname;

        // Get all menu buttons
        const menuButtons = document.querySelectorAll(".header-buttons a");

        // Loop through the menu buttons and check for a matching URL
        for (const button of menuButtons) {
          if (button.href.endsWith(currentURL)) {
            // Add a class to highlight the active button
            button.classList.add("active");
          } else {
            // Remove the class if it's not the active button
            button.classList.remove("active");
          }
        }
      }
    </script>
  </body>
</html>