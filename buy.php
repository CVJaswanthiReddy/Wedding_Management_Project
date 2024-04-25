<!DOCTYPE html>
<html>
    <head>
         <link href="bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
           body {
    background-image: url('login.jpg');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed;
     background-position: center center; 
    width: 100vw; 
    height: 100vh; 
   
}
        
        </style>
    </head>
    <body>
    <br><br><br><br><br><br><br><br><br><br>
    <div align="center">
     <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">REGISTER</button>
     </div>
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ORDER DETAILS</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: pink;">
                    <form method="post" action="project.php">
                        <div class="form-group">
                            <div class="input-group  mb-3">
                                <span class="input-group-text" ><b>NAME:</b></span>
                                <input type="text" class="form-control" placeholder="Username" name="name" required>
                        </div>
                        <div class="input-group mb-3 ">
                            <span class="input-group-text" ><b>EMAIL:</b></span>
                            <input type="email" class="form-control" placeholder="Enter email" name="email" required >
                        </div>
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" ><b>PHONE NUMBER:</b></span>
                        <input type="text" class="form-control" placeholder="Enter number" name="phone" required>
                     </div>
                <div class="input-group mb-3 ">
                    <span class="input-group-text" ><b>ADDRESS:</b></span>
                    <textarea class="form-control" placeholder="Enter address" name="address" required></textarea>
                </div>
            <div class="input-group mb-3 ">
                <span class="input-group-text" ><b>PINCODE:</b></span>
                <input type="text" class="form-control" placeholder="Enter pincode" name="pincode" required>
            </div>
            <div class="input-group mb-3 ">
                <span class="input-group-text" ><b>SELECT PLAN:</b></span>
                <select class="form-select" name="plan" required>
                    <option value="choose">BASIC PLAN</option>
                    <option value="PREMIUM PLAN">PREMIUM PLAN</option>
                    <option Value="ULTIMATE PLAN">ULTIMATE PLAN</option>
                    
                </select>
            </div>
            <div class="mt-3">
                <input type="reset" value="Reset" class="btn w-100" name="reset" style="background-color: red;" >
                </div>
                <div class="mt-3">
                <button type="submit" name="submit" class="btn w-100" style="background-color: green;" >Submit</button>
                </div>
            </form>
                </div>
              </div>
            </div>
          </div>
</body>
</html>

      
