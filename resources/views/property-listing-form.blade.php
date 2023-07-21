<!DOCTYPE html>
<html>

<head>
    <title>Property Submission Form</title>
    <link rel="stylesheet" href="your-css-file-path.css" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            width: 100%;
            margin-top: 16px;
            padding: 12px;
            font-size: 16px;
            color: #fff;
            background-color: #ffa559;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #ff7700;
        }

        form br {
            display: block;
            margin: 10px 0;
            content: "";
        }

        form label[for="images"] {
            display: inline-block;
            margin-bottom: 0;
        }

        /* Hide the file input visually */
        form input[type="file"] {
            display: none;
        }

        /* Style the "Choose Image" button */
        .choose-image-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffa559;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .choose-image-button:hover {
            background-color: #ff7700;
        }

        form input[type="checkbox"] {
            display: none;
        }

        form input[type="checkbox"]+label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
        }

        form input[type="checkbox"]+label:before {
            content: "";
            position: absolute;
            left: 0;
            top: 2px;
            width: 20px;
            height: 20px;
            border: 2px solid #ffa559;
            border-radius: 3px;
        }

        form input[type="checkbox"]:checked+label:before {
            background-color: #ff7700;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <h1>Enter Details of Your Property</h1>
    <form action="/submit_room" method="post">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required /><br /><br />
        <label for="condition">Room Condition:</label>
        <select id="condition" name="condition" required>
            <option value="good">Good</option>
            <option value="average">Average</option>
            <option value="poor">Poor</option>
        </select><br><br>



        <label for="num_rooms">Number of Rooms:</label>
        <input type="number" id="num_rooms" name="num_rooms" required /> <br /><br />

        <label for="price">Price (per month):</label>
        <input type="number" id="price" name="price" required /><br /><br />

        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" required /><br /><br />

        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" required /><br /><br />

        <!-- Modify the "Choose Image" field to a button -->
        <label for="images">Room Images:</label>
        <input type="file" id="images" name="images" accept="image/*" multiple required />
        <label for="images" class="choose-image-button">Choose Images</label>
        <span id="file-names"></span><br /><br />

        <!-- Add JavaScript to display selected file names -->
        <script>
            document
                .getElementById("images")
                .addEventListener("change", function() {
                    const fileInput = this;
                    const fileNames = document.getElementById("file-names");
                    fileNames.textContent =
                        fileInput.files.length > 1 ?
                        fileInput.files.length + " files selected" :
                        fileInput.files[0].name;
                });
        </script>



        <label for="extra_facilities">Extra Facilities:</label><br />
        <input type="checkbox" id="wifi" name="extra_facilities" value="Free WiFi" />
        <label for="wifi">Free WiFi</label><br />

        <input type="checkbox" id="heated_water" name="extra_facilities" value="Heated Water Supply" />
        <label for="heated_water">Heated Water Supply</label><br />

        <input type="checkbox" id="24hr_water" name="extra_facilities" value="24hr Running Water" />
        <label for="24hr_water">24hr Running Water</label><br />

        <input type="checkbox" id="parking" name="extra_facilities" value="Parking" />
        <label for="parking">Parking</label><br />

        <input type="checkbox" id="flexible_hours" name="extra_facilities" value="Flexible Entry/Exit Hours" />
        <label for="flexible_hours">Flexible Entry/Exit Hours</label><br /><br />

        <input type="submit" value="Submit" />
</body>

</html>