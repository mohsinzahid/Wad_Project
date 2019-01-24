<?phps
session_start();
include ('admin/db_connection.php');
$error_msg = '';
if(isset($_POST['login'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $sel_user = "select * from users where (name='$name' OR Email='$name') AND password='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or username is wrong, try again';
    }
    else{
        // $_SESSION['username'] = $email;
        // if(!empty($_POST['remember'])) {
        //     setcookie('username', $email, time() + (10 * 365 * 24 * 60 * 60));
        //     setcookie('password', $pass, time() + (10 * 365 * 24 * 60 * 60));
        // } else {
        //     setcookie('username','' );
        //     setcookie('password', '');
        // }
        header('location:admin/insert_product.php?logged_in=You have successfully logged in!');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="loginbox">
 <img src="images/logo2.jpg" class="avater">
 	<h1>Login Here</h1>
 	<form method="POST">
 		<p>User name</p>
 		<center><input type="text" name="username" placeholder="Enter userame"></center>
 		<p>Password</p>
 		<center><input type="Password" name="password" placeholder="Enter Password"></center>
 		<center><input type="Submit" name="login" value="login"></center><br>
 		<a href="forgot-password.html">Forgot Password?</a><br>
 		<a href="signUp.php">Donn't have an account? </a>

 	</form>
 <i class="fa fa-instagram" aria-hidden="true"></i>

 </div>


</body>
</head>
</html>
