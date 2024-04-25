<html>
  <head>
    <title>
      wedding website
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
    background-image: url('proje2.jpg');
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
    <div class="cover">
    <nav class="navbar navbar-expand-lg bg-body-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          
        </a>
        <div class="logo-s"> 
        <a class="navbar-brand text-light" href="#">Wedding
          <p >Best Management</p>
        </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="portfolio.php">portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="pricing.php">Pricing</a>
            </li>
             <li class="nav-item">
          <a class="nav-link text-light" href="services.php" >Services</a>
        </li>
             <li class="nav-item">
          <a class="nav-link text-light" href="reviews.php" >Reviews</a>
        </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="buy.php">Contact</a>
            </li>

	<li class="nav-item"><a class="nav-link" href="#suggestion" data-bs-toggle="modal" data-bs-target="#modal2" style="color:white">Suggestions</a></li>
            </ul>
        </div>
      </div>
    </nav>
    
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
    
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h1 class="pt-5 py-4 hero-text text-danger">Wel<span>come</span></h1>
            <h1 class="text-light"></h1>
            <p class="text-light">Wedding management is the art of orchestrating a couple's most cherished day with meticulous planning, attention to detail, and a touch of creativity. It involves taking the couple's dreams and transforming them into a tangible, seamless, and unforgettable experience. From envisioning the perfect venue and curating exquisite decor to coordinating with vendors and ensuring every timeline is met, wedding management weaves together the threads of love and logistics.</p>
            <a href="buy.php" class="btn btn-danger">Visit now</a>
          </div>
        </div>
      </div>
    </section>
    
  </div>
  
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
