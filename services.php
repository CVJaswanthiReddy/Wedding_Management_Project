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
         </li>
        <li class="nav-item">
          <a class="nav-link " href="buy.php" >Contact</a>
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




<center>
<h2>OUR SERVICES</h2>
</center>
<div class="row gap=3">
  <div class="col">
    <div class="card">
      <img src="eleven.jpg" class="card-img-top" alt="width="250" height="250"">
      <div class="card-body">
        <h5 class="card-title">PHOTOGRAPHY</h5>
        <p class="card-text"> We work closely with the couple to understand their preferences,style & the specific moments they want to be captured.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="service.jpg" class="card-img-top" alt="width="250" height="250"">
      <div class="card-body">
        <h5 class="card-title">WEDDING REGISTORY</h5>
        <p class="card-text">Many online platforms offer wedding registry services,making it easy for couples to select items they desire & for guests to purchase those gifts.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="guest.jpeg" class="card-img-top" alt="width="250" height="250"">
      <div class="card-body">
        <h5 class="card-title">GUEST LIST</h5>
        <p class="card-text">We manages the guest list is a pivotal aspect of wedding planning that requires thoughtful consideration and careful decision-making</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="cake.jpeg" class="card-img-top" alt="width="250" height="250"">
      <div class="card-body">
        <h5 class="card-title">WEDDING CAKE</h5>
        <p class="card-text"> We work closely with baker to create a cake that looks stunning & also delights your taste buds and adds a touch of sweetness to your special day.</p>
      </div>
    </div>
  </div>
  
  
</div>

<br>
<br>
<div class="row">
<div class="col-2">
</div>
<div class="col-4">
<div class="card" style="width: 18rem;">
  <img src="service-5.jpg" class="card-img-top" alt="width="250" height="250"">
  <div class="card-body">
    <h5 class="card-title">WEDDING CEREMONY</h5>
    <p class="card-text">A wedding ceremony is a deeply significant and cherished event where two individuals publicly declare their love, commitment, and intention to spend their lives together as a married couple.</p>
    
  </div>
</div>
</div>
<div class="col-1">
</div>
<div class="col-3">
<div class="card" style="width: 18rem;">
  <img src="dining.jpg" class="card-img-top" alt="width="250" height="250"">
  <div class="card-body">
    <h5 class="card-title">FINE DINING</h5>
    <p class="card-text">We will help in fine dining often that involves multiple courses, each served in smaller portions to allow guests to savor and appreciate the complexity of flavors in each dish.</p>
  </div>
  </div>
</div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>
