<html>
<head>
<title>about</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
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
          <a class="nav-link active" href="portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link " href="pricing.php" >Pricing</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="services.php" >Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="reviews.php" >Reviews</a>
        </li>
         </li>
        <li class="nav-item">
          <a class="nav-link " href="buy.php">Contact</a>
        </li>
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
<h3><mark>OUR PORTFOLIO</mark></h3>
</center>
<div class="row">

<div class=" col-lg-4 col-md-6  col-sm-12">
<center><h5><i>Reception</i></h5></center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="portfolio1.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio47.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="24.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
  </div>
  </div>
  </div>
    
 
<div class=" col-lg-4 col-md-6  col-sm-12">
<center><h5><i>Engagement Ceremony</i></h5></center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="portfolio2.jpg" class="d-block w-100" alt="width="300" height="300"" >
    </div>
    <div class="carousel-item">
      <img src="portfolio45.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio20.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
  </div>
  </div>
  </div>

  <div class=" col-lg-4 col-md-6  col-sm-12">
  <center><h5><i>Haldi Ceremony</i></h5></center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="portfolio13.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio12.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio31.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
  </div>
  </div>
  </div>
</div>

<div class="row">
<div class=" col-lg-4 col-md-6  col-sm-12">
<center><h5><i> Wedding Ceremony</i></h5></center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="portfolio14.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio15.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio16.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
  </div>
  </div>
  </div>
    
 
<div class=" col-lg-4 col-md-6  col-sm-12">
<center><h5><i>Destination Wedding</i></h5></center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="portfolio32.jpg" class="d-block w-100" alt="width="300" height="300"" >
    </div>
    <div class="carousel-item">
      <img src="portfolio41.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio39.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
  </div>
  </div>
  </div>

  <div class=" col-lg-4 col-md-6  col-sm-12">
  <center><h5><i>Prewedding Photoshoot</i></h5></center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="portfolio37.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio50.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
    <div class="carousel-item">
      <img src="portfolio51.jpg" class="d-block w-100" alt="width="300" height="300"">
    </div>
  </div>
  </div>
  </div>
</div>



<?php
include 'footer.php';
?>
</body>
</html>
