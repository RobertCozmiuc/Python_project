<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <title>Magic Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  
    <link href="style.css" rel="stylesheet">
  
</head>
<body>
<div id="navigation sticky">
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<div class="container-fluid">
<a class="navbar-brand">
            <img src="img/logo.png">
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="GoodFoods.php">Home</a>
            </li>
             <li class="nav-item active">
                <a class="nav-link" href="#">New Recipe</a>
            </li>
                <li class="nav-item ">
             <a class="nav-link" href="YourRecipes.php">Retetele tale</a>
            </li>
                <li class="nav-item ">
             <a class="nav-link" href="Top.php">Top retete</a>
            </li>
            
            
    </ul> 
    <a href="logout.php" class="btn btn-danger">Logout</a>     
  </div>
</div>
</nav>

<div class="bg">
  <img src="img/background.png " style="visibility: hidden;">
</div>

<div class="col-12">
        <hr class="invis-100">
    </div>
</div>

<section>
<div class="container">
<div class="row">
  
  <div class="col"><h2 class="centertext">Creat new recipe</h2>
        <form action="/recipe" method="post" class="container filebg border border-dark">
    <label for="nume">Nume reteta:</label>
    <input type="text" class="form-control" id="nume" placeholder="Introduceti numele" name="nume" required> <br>
    
           
    
</div>
</div>
</div>

<section>
  <div class="col-12">
</div>
<div id="emoji" >
    <div class="container-fluid padding">
    <div class="row text-center">

<div class="col-sm-6">
    Pasii de preparare
    
    <textarea cols='40' rows='5' id="pasii" name="pasii" type='text'class='form-control' placeholder='Raspuns' ></textarea>
    
    
</div>


<div class="col-sm-6">
    Tip
    
    <input class="form-control" list="tip" name="tip">
        <datalist id="tip">
        <option value="Friptura">
        <option value="Supa">
        <option value="Desert">
        <option value="Bautura">
        <option value="Paste">
        </datalist>
    
    
</div>
<input class="btn btn-primary col-sm-12" name="submit" type="submit">
    </form>

</div>
</div>
</section>

<section>
<div class="container">
<div class="row">
  
</form></div>
</div>
</div>
<div class="col-12">
        <hr class="dark-100">
    </div>
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