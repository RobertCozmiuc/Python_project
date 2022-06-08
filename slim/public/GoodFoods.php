<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <title>Magic Forms</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css">   
</head>
<body>
<div id="navigation sticky"></div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<div class="container-fluid">
<a class="navbar-brand" >
            <img src="img/logo.png">
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">HOME</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="NewRecipe.php">New Recipe</a>
            </li>
                <li class="nav-item">
             <a class="nav-link" href="YourRecipes.php">Retetele tale</a>
            </li>
            <li class="nav-item ">
             <a class="nav-link" href="Top.php">Top retete</a>
            </li>
            
            
    </ul>
    <a href="logout.php" class="btn btn-danger">Log out</a>           
  </div>
</div>
</nav>
<div class="bg2">
  <img src="img/background.png " style="visibility: hidden;">
</div>
<div class="col-12">
        <hr class="invis-100">
    </div>
<section>

    <h1 class="centertext"><b>Information</b><h1>
    
    <div class="col-12">
        <hr class="invis-100">
    </div>
    <div class="container">
        <div class="col align-items-center large">
            
            
            <div  class="col">
              <p class="stext"></p>
            </div>
        </div>
        <div class="row align-items-center small">
            
            
            <div  class="col">
              <p>Wellcome to GoodFoods, this is a nonprofit website for you to post your delicios recipes or look for others that you like.</p>
            </div>
        </div>
    </div>
    
    
    


<div class="col-12">
        <hr class="invis-100">
    </div>


<!-- Footer -->
<section>
  
      <footer id="footer">
          <div class="container-fluid padding">
          <div class="row text-center">
              <div class="col-md-4">
                  <img src="img/logo.png">
                  <hr class="light">
                  <p>555-555-5555</p>
                  <p>GoodFoods@gmail.com</p>
                  <p>Bulevardul Vasile Parvan</p>
                  <p>Timisoara, Timis</p>
          
              </div>
              <div class="col-md-4">
                  <hr class="light">
                  <h5>Social Media<h5>
                  <hr class="light">
                  <p>Instagram: GoodFoods_</p>
                  <p>Facebook: GoodFoods.co</p>
                  <p>Twitter: @GoodFoods</p>
              </div>
              <div class="col-md-4">
                  <hr class="light">
                  <h5>Informatii<h5>
                  <hr class="light">
                  <p>Va asteptam si in anul acesta cu servicii de calitate</p>
              </div>
              <div class="col-12">
                  <hr class="light-100">
                  <h5>&copy; GoodFoods.com</h5>
              </div>
          </div>
          </div>
          </footer>
  </section>
</body>
</html>
