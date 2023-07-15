<!DOCTYPE html>
<html>
<head>
  <title>About MSH</title>
  
<style>
  /* styles.css */
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
        background-color: #ffa559;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
      }

      .header-buttons button#lgn:hover,
      .header-buttons button#abus:hover {
        background-color: #ff6000;
      }

      .header-buttons button:hover {
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
      .signup-popup button {
        margin-top: 5px;
      }
      .signup-button:hover + .signup-popup,
      .signup-popup:hover {
        display: block;
      }


section.about {
  background-color: #f9f9f9;
  padding: 50px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  flex : 1;
}

h1 {
  font-size: 36px;
  margin-bottom: 20px;
}

p {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 10px;
}

a.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #000;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  
}
a.button:hover{
    color : white;
    background-color : #E07546;
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
    margin-top: 0px;
    position: fixed;
    color: #fff;
    left: 0;
    right: 0;
   
    padding: 20px;
    flex-grow: 1;
    background-color: #dd660b;
    color: rgb(52, 23, 3);
  }

</style>
</head>
<body>
  <header>
      <?php include 'header.blade.php';?>
  </header>

  <section class="about">
    <div class="container">
      <h1>About MSH</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor ante at leo eleifend, ac rutrum tortor maximus. Integer lobortis ipsum nec finibus fermentum. Curabitur vulputate rutrum dolor in mattis. Duis lacinia dignissim eros, nec iaculis quam gravida id.</p>
      <p>Nulla lobortis ex sapien, vitae tempus lacus rutrum eget. Ut aliquet tristique ante, eget pharetra nisl efficitur et. Integer facilisis, sapien in malesuada venenatis, turpis dolor pellentesque sem, nec ultricies enim est eget velit. Nam accumsan vestibulum nisl sed vestibulum.</p>
      <a href="" class="button">Contact Us</a>
    </div>
  </section>

  <footer>
    <?php include 'footer.blade.php';?>
  </footer>
</body>
</html>
