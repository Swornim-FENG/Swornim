@extends('mainn');
@section('main-section')
@push('title')
   <title>Home</title>
   @endpush
<!DOCTYPE html>
<html>
<head>
  
  <style>
    /* CSS Styling */
    body {
      
      margin: 0;
      padding: 0;
    }

    .home-section {
      background-color: #f2f2f2;
      padding: 50px;
      text-align: center;
    }

    .home-section h1 {
      font-size: 32px;
      color: #333;
    }

    .home-section p {
      font-size: 18px;
      color: #666;
      margin-top: 20px;
    }

    .cta-button {
      display: inline-block;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }

    .cta-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <section class="home-section">
    <h1>Welcome to My Website</h1>
    <p>Feel at home with our amazing features.</p>
    <a href="#" class="cta-button">Get Started</a>
  </section>
</body>
</html
@endsection