<!DOCTYPE html>
<html>
  <head>
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
      .signup-button:hover + .signup-popup,
      .signup-popup:hover {
        display: block;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo-con">
        <!-- Place your logo here -->
        
        <img class="logo" src="images/logoPrototype.png"  alt="Logo" />
      </div>
      <div class="header-buttons">
        <a id="home" href="/landingpage">Home</a>
        <a href="">How It Works</a>
        <a href="{{url('/')}}/lanlord">I am a Landlord</a>
        <a href="">Help</a>
        <a href="{{url('/')}}/login">Login</a>
        <a id="signup" href="">Signup</a>
        <div class="signup-popup">
          <a href="{{url('/')}}/tenant">Tenant Signup</a>
          <a href="{{url('/')}}/lanlord">Landlord Signup</a>
        </div>
      </div>
    </header>

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
    </script>
  </body>
</html>