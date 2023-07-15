<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - MSH</title>
    <link rel="stylesheet"  href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <style>
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
        
    
    </style>
</head>
<body>
    
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
    
</body>
</html>
