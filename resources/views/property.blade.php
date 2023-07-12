<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('/')}}/property"method="POST" enctype="multipart/form-data" >
            @csrf
         <input type="file" name="image"><br>
         <input type="text" name="address" placeholder="Address"><br>
         <input type="text" name="condition" placeholder="Condition"><br>
         <input type="number" name="rooms" placeholder="Number of rooms"><br>
         <input type="number" name="latitude" placeholder="Latitude"><br>
         <input type="number" name="longitude" placeholder="Longitude"><br>
         <input type="number" name="price" placeholder="Price"><br>
         <input type="number" name="rating" placeholder="Rating"><br>
         <input type="submit" name="submit">
          </form>
</body>
</html>