<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
  <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script type="text/javascript" src="Functii.js"></script>
    <link href="style.css" rel="stylesheet">
    <script src="https://npmcdn.com/js-alert/dist/jsalert.min.js"></script>
    <link href="style_login.css" rel="stylesheet">
 
    <script src="actions.js"></script>
</head>
<body>





<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6 wrapper">
      <form action="/register" method="post" >
<h2 class="centertext">Register</h2>
  <div class="container">
    <label for="user" class="ltext"><b>Username:</b></label><br>
    <input type="text" id="user" placeholder="Enter username" name="user" required><br>
    
    <label for="psw" class="ltext"><b>Password:</b></label>
    <input id="pass" type="password" placeholder="Enter Password" name="pass" required>
    
    <button type="submit" >Register</button>
    <div class="container">



  </div>
    
  </div>

  
</form>
    </div>
    <div class="col">
    </div>
  </div>
</div>

</body>
</html>
