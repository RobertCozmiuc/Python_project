<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
    
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style_login.css" rel="stylesheet">
    
</head>
<body>





<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6 wrapper">
    
      <form name="f1" action="/auth" method="GET">
<h2 class="centertext">Login</h2>
  <div class="container">
    <label for="Username" class="ltext"><b>Username:</b></label>
    <input type="text" placeholder="Enter username" id="user" name="user" required>

    <label for="pass" class="ltext"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" id="pass" name="pass" required>
    
    <button type="submit" id="btn" value="Login" >Login</button>
    
    <span class="psw">No <a href="/Comun/Register.php"> account?  </a></span>
    <label>&nbsp;</label>
    
   
    
  </div>

  
</form>
    </div>
    <div class="col">
    </div>
  </div>
</div>

</body>
</html>
