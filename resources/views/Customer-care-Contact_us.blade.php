<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - MSH</title>
    <link rel="stylesheet"  href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <style>
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            margin-top: 0;
        }
        
        .contact-form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .form-group textarea {
            resize: vertical;
            height: 150px;
        }
        
        .form-group input[type="submit"] {
            background-color: #E07546;
            color: #ffffff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
        }
        
        .form-group input[type="submit"]:hover {
            background-color: #FF6000;
            
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
    left : 0;
    right : 0;
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
    margin-left : 80px;
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
    margin-left : 300px;
    text-align: left;
     
  }
  .footer-links h3 {
    color: #000000;
    font-size: 20px;
    margin-bottom : 0px;
    margin-left : 300px;
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
    <h1>Contact Us</h1>
    
    <div class="contact-form">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <footer>
    <?php include 'footer.blade.php';?>
    </footer>
</body>
</html>
