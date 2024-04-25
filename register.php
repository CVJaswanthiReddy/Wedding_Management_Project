<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
        <style>
     body {
            margin: 0; /* Reset default margin */
            padding: 0; /* Reset default padding */
            background-image: url('car6.jpeg'); /* Replace with your image URL */
            background-size: cover; /* Scale image to cover the entire background */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-attachment: fixed; /* Keep the background fixed while scrolling */
            font-family: Arial, sans-serif; /* Optional: Choose a font family */
            color: #fff; /* Optional: Set text color */
        }
    </style>
</head>

<body bgcolor="#9FE2BF">
    <h1 align="center" style="color: black;">Welcome to RentalHub</h1>
    <marquee>
      <h2 style="color:red;">we're committed to providing you with exceptional service, top-quality vehicles, and a
        seamless renting experience.</h2>
    </marquee>
  <br>
    
    <div class="row">
        <div class="col">

        </div>
        <div class="col">

</div>

        <div class="col">
        <h3 align="center" style="color:black;"><b>Register here</b></h3>
        <form action="regi.php" method="get" onsubmit="return validateForm()">
            <label for="name" class="form-label" style="color:black;" ><b>Username</b></label>
            <input type="text" name="name" class="form-control" required id="name" placeholder="enter name">
            <label for="email" class="form-label" style="color:black;"><b>Email</b></label>
            <input type="email" name="email" class="form-control" required id="email" placeholder="abc@gmail.com">
            <label for="pwd" class="form-label" style="color:black;"><b>Password</b></label>
            <input type="password" name="pwd" class="form-control" required id="pwd" >
            <label for="cpwd" class="form-label" style="color:black;"><b>Confirm Password</b></label>
            <input type="password" name="cpwd" class="form-control" required id="cpwd" >
            <label for="age" class="form-label" style="color:black;"><b>Age</b></label>
            <input type="text" name="age" class="form-control" required id="age"><br>
            <input type="submit">&nbsp;&nbsp;<input type="reset"><br>
          <b> Already Have an Account:</b><a href="login.php">click here to login</a>
        </form>
        </div>
        
    </div>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var age=document.getElementById("age").value;
            var password=document.getElementById("pwd").value;
            var confirmPassword=document.getElementById("cpwd").value;
            // Basic validation for non-empty name and valid email format
            if (name === "") {
                alert("Name must be filled out");
                return false;
            }
            if (age === "") {
                alert("Age must be filled out");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
            
            if (!validateEmail(email)) {
                alert("Invalid email format");
                return false;
            }
            
            return true;
            
        }
        
        
    </script>
</body>

</html>
