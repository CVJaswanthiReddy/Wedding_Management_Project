<html>
<head>
<title>portfolio</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
    body {
    background-image: url('project3.jpg');
    background-size: contain; 
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-position: center center; 
    width: 100vw; 
    height: 100vh; 
}
    </style>
</head>
<body>



<!-- NAVBAR-->
	<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Wedding</a>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    	</button>
    	<form>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pricing.php" >Pricing</a>
        </li>
         </li>
         <li class="nav-item">
          <a class="nav-link " href="services.php" >Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="reviews.php" >Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="buy.php" >Contact</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="#suggestion" data-bs-toggle="modal" data-bs-target="#modal2" style="color:white">Suggestions</a></li>
      </ul>
    </div>
  </div>
  </form>
</nav>



<!--SUGGESTIONS-->
<!-- suggestions--><div class="modal w-450" id="modal2"  >
            <div class="modal-dialog">
                <div class="modal-content ">
                    <div class="modal-body " style="background-color:papayawhip">
                     <div class="modal-header">
                        <h2 class="modal-title">Suggestion</h2>
                <button class="btn btn-danger" data-bs-dismiss="modal">X</button>
                      </div>
                        <form id="suggestion" action="fileupload.php" method="post" enctype="multipart/form-data">
                              <div class="mb-3">
                               <p>if have any idea  which is not available in our website you can suggest us by uploading their images here.</p>
                              <label for="Fileupload" class="form-label">upload your file</label>
                              <input class="form-control" type="file" name="file" id="Fileupload">
                               </div>
                        
                            <input type="submit" value="Submit" class="btn  w-100" name="submit" style="background-color:rgb(13, 155, 25)">
                         </form>
                         
                        </div>
                    </div>
                </div>
            </div>  -->


<center>
<h4><OUR PRICING </h3>
</center>

<!-- PRICING -->
<div class="row">

  <div class="col-lg-3 col-sm-6  col-md-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
      <center>
        <h5 class="card-title"><i> Basic Plan</i></h5>
        </center>
        <p class="card-text"><mark> RS.18000/-  </mar></p>
        <ul>
        <li>photography</li>
         <li>bride makeup</li>
          <li>wedding ceremony</li>
           <li>meals & drinks</li>
            <li>guests invitations</li>
        <a href="#" class="btn btn-primary">Choose Plan</a>
      </div>
    </div>
  </div>
 <div class="col-lg-6">
 </div>
 <div class="col-lg-3 col-sm-6  col-md-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
      <center>
        <h5 class="card-title"><i> Premium Plan</i></h5>
        </center>
        <p class="card-text"><mark> RS.48000/-  </mar></p>
        <ul>
        <li>photography</li>
         <li>bride makeup</li>
          <li>wedding ceremony</li>
           <li>meals & drinks</li>
            <li>guests invitations</li>
        <a href="#" class="btn btn-primary">Choose Plan</a>
      </div>
    </div>
  </div>
  
  
  <div class="col-lg-3 col-sm-6  col-md-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
      <center>
        <h5 class="card-title"><i> Ultimate Plan</i></h5>
        </center>
        <p class="card-text"><mark> RS.90000/-  </mar></p>
        <ul>
        <li>photography</li>
         <li>bride makeup</li>
          <li>wedding ceremony</li>
           <li>meals & drinks</li>
            <li>guests invitations</li>
        <a href="#" class="btn btn-primary">Choose Plan</a>
      </div>
    </div>
  </div>
   <div class="col-lg-6">
 </div>
 <div class="col-lg-3 col-sm-6  col-md-4 mb-3 mb-sm-0">
 <img src="project5.jpg" class="card-img-top" alt="width="250" height="250"">
    <div class="card">
      </div>
     </div>
     
     
<?php
include 'footer.php';
?>




</body>
</html>
