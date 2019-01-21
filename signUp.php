<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	
<?php include './admin/creatingDB.php';?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style5.css" rel="stylesheet">
	
</head>
<body>

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact us.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="signUpBox">
        <img src="images/logo3.jpg" class="Logo">
        <h1>Sign Up</h1>
        <form method="post" action="./admin/signup_validate.php">
            <center><input type="text" name="userame" placeholder="Userame" required></center>
            <center><input type="Email" name="email" placeholder="Email Address" required></center>
            <center><input id="entered_password" type="Password" name="user_password" placeholder="Password" required></center>
            <center><input id="entered_confirm_password" type="Password" name="confirm_password" placeholder="Confirm Password" required></center>
            <center><input class="signUpButton" type="Submit" name="" value="Sign Up" onclick="password_check();"></center><br>
        </form>
 
    </div>
</body>
</html>
