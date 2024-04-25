<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <style>
        body {
               margin: 0; /* Reset default margin */
               padding: 0; /* Reset default padding */
               background-image: url('car3.jpeg'); /* Replace with your image URL */
               background-size: cover; /* Scale image to cover the entire background */
               background-position: center; /* Center the image */
               background-repeat: no-repeat; /* Prevent image repetition */
               background-attachment: fixed; /* Keep the background fixed while scrolling */
               font-family: Arial, sans-serif; /* Optional: Choose a font family */
               color: #fff; /* Optional: Set text color */
           }
       </style>
</head>

<body>
    <br><br>
    <h1 align="center" style="color:blue;">Fill the Details To Rent a car</h1>
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <form action="renty.php" method="post">
                <label for="one" class="form-label" required><b>Name:</b></label>
                <input type="text" name="uname" id="one" class="form-control bg-dark">
                <label for="two" class="form-label" required><b>phone:</b></label>
                <input type="text" name="phone" id="two" class="form-control  bg-dark">
                <label for="six" class="form-label" required><b>Start date:</b></label>
                <input type="date" name="date" id="six" class="form-control  bg-dark">
                <label for="three" class="form-label" required><b>No.of days:</b></label>
                <input type="text" name="day" id="three" class="form-control  bg-dark">
                <label for="four" class="form-label" required><b>Please upload license:</b></label>
                <input type="file" name="file" id="four" class="form-control  bg-dark">
                <label for="five" class="form-label" required><b>code:</b></label>
                <input type="text" name="code" id="five" class="form-control bg-dark"><br>
                <input type="submit">
            </form>
        </div>
        <div class="col">
        </div>
    </div>

</body>

</html>
