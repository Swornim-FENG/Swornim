<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/unloginheader.css')}}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
   <title>My second Home</title>
   
  </head>
  <body>
    <script>
      const toggle = () => {
        document.getElementById("nav").classList.toggle("navactive");
      };
      
  function navigateToLink(selectElement) {
    var selectedIndex = selectElement.selectedIndex;
    var selectedOption = selectElement.options[selectedIndex];
    var url = selectedOption.getAttribute('data-url');
    
    if (url) {
      window.location.href = url;
    }
  }
</script>
    
    <header>
      <div class="brand">
        <span class="Logo"></span>
        <h1>MSH</h1>
      </div>
      <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>
      <div class="navbar" id="nav">
        <div class="searchBox">
          <input type="text" placeholder="Search" />
          <span class="fas fa-search" id="searchIcon"></span>
        </div>
        <ul>
          <li>
            <span class="fas fa-home" id="headIcon"></span>
            <a href="{{url('/')}}/msh"> Home </a>
          </li>
          <li>
            <span class="fa fa-user-about" id="headIcon"></span>
            <a href="#">About Us </a>
          </li>
          <li>
            <span class="fas fa-question-circle" id="headIcon"></span>
            <a href="#"> Help </a>
          </li>
          <li>
            <span class="fas fa-question-login" id="headIcon"></span>
            <a href="{{url('/')}}/login"> Log In </a>
          </li>
          <li>
            
            <option value="">Sign up</option>
            
            <select onchange="navigateToLink(this)">
                 <option value="value3"></option>>
                 <option value="value2"data-url="{{url('/')}}/tenant">Tenant</option>> 
                 <option value="value1"data-url="{{url('/')}}/lanlord">Lanlord</option>
                 </select>
                
                
          </li>
        </ul>
      </div>
    </header>
  </body>
</html>