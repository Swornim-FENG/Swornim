@extends('main');
@section('main-section')
@push('title')
   <title>About</title>
   @endpush
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
          #about {
  background-color: #f1f1f1;
  padding: 50px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
}

h2 {
  font-size: 28px;
  color: #333;
  margin-bottom: 20px;
}

p {
  font-size: 16px;
  color: #555;
  line-height: 1.5;
  margin-bottom: 10px;
}

    </style>
</head>
<body>
    <section id="about">
  <div class="container">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu justo ac sapien mollis tincidunt nec et diam. Nunc vestibulum sodales libero, sed rutrum libero varius id. Aenean vitae diam eget est bibendum eleifend. In hac habitasse platea dictumst.</p>
    <p>Fusce rutrum urna in felis facilisis fringilla. Nullam ac ipsum ut arcu molestie gravida. Maecenas consectetur consequat efficitur. Mauris pretium vestibulum mi vel aliquet. Donec non est id ex bibendum egestas. Mauris id malesuada nisl. Donec sodales justo tellus, nec commodo nunc aliquam sit amet.</p>
  </div>
</section>

</body>
</html>
@endsection