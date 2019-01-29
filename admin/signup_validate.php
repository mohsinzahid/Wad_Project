<!DOCTYPE html>
<html>
<head>
	<title>Redirecting...</title>
</head>
<body>

<?php
	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wad_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

	$user_name = $_POST["userame"];
	$user_email = $_POST["email"];
	$user_password = $_POST["user_password"];
	$confirm_password = $_POST["confirm_password"];

	if($user_password != $confirm_password)
	{
		echo "Password and confirm_password does not match.";
		?>
		<meta http-equiv="refresh" content="4; URL='../signUp.php'" />
		<?php
	}
	else
	{

		$sql = "INSERT INTO users (user_name, user_email, user_password)
		VALUES ('$user_name', '$user_email', '$user_password')";
		$conn->query($sql);

		?>
		<meta http-equiv="refresh" content="0; URL='../login.php'" />
		<?php
	}

$conn->close();
?>

</body>
</html>
