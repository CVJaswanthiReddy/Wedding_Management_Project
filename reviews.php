<html>
<head> 
<title> home</title>

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Wedding</a>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    	</button>
    	<form>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.php">Portfolio</a>
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
         <li class="nav-item">
              <a class="nav-link " href="buy.php">Contact</a>
            </li>

	<li class="nav-item"><a class="nav-link" href="#suggestion" data-bs-toggle="modal" data-bs-target="#modal2" style="color:black">Suggestions</a></li>
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


 <h2 align="center">Client Reviews</h2><br><br>
    <div class="container text-center">
        <div class="row g-5">
            <div class="col">
              <div class="card" style="width: 18rem;">
              <img src="project103.jpeg" class="card-img-top" alt="width="300" height="300"">
              <div class="card-body">
                <h5 class="card-title">s1<br><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span></h5>
                <p class="card-text">"I had a fantastic experience with RentalHub, The booking process was nice, and the vehicle was clean."

                </p>
              
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="project101.jpeg" class="card-img-top" alt="width="300" height="300"">
              <div class="card-body">
                <h5 class="card-title">s2<br><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span></h5>
                <p class="card-text">"My family and I rented a minivan for our vacation, and it was a smooth experience overall."</p>
                
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="project102.jpeg" class="card-img-top" alt="width="300" height="300"">
              <div class="card-body">
                <h5 class="card-title">D<br><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    </h5>
                <p class="card-text">"One of the features of this is the cleanliness of their cars,making for a pleasant driving experience</p>
               
              </div>
            </div>
          </div>
          
    <?php
include 'footer.php';
?>
</body>

</html>
