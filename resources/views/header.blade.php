<!DOCTYPE html>
<html>
<head>
  @stack('title');
  <style>
    /* CSS styles for the header */
    header {
      background-color: #f2f2f2;
      padding: 20px;
    }

    h1 {
      color: #333;
      margin: 0;
    }

    nav {
      margin-top: 10px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    nav ul li {
      float: left;
    }

    nav ul li a {
      display: block;
      color: #333;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav ul li a:hover {
      background-color: #ddd;
    }
    

        .buttons {
            display: none;
            position: absolute;
            top: 18%;
            left: 20%;
            transform: translate(-50%, -50%);
        }

        .container:hover .buttons {
            display: block;
        }

        .button {
            padding: 10px 20px;
            margin: 5px;
            background-color:orange ;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }
    </style>
  </style>
</head>
<body>
  <header>
    <h1>My Website</h1>
    <nav>
      <ul>
        <li><a href="{{url('/')}}/home">Home</a></li>
        <li><a href="{{url('/')}}/about">About</a></li>
        <li><a href="{{url('/')}}/login">Login</a></li>
        <div class="container">
        <h1>SignUp</h1>
        <div class="buttons">
        <a href="{{url('/')}}/lanlord"> <button class="button" >Lanlord</button></a>
        <a href="{{url('/')}}/tenant"> <button class="button" >Tenant</button></a>   
        </div>
    </div>
      </ul>
    </nav>
  </header>
</body>
</html>