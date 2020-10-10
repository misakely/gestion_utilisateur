<?php 
session_start();
if(isset($_SESSION["email"])&& isset($_SESSION["password"]))
{
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome</h1>
	<p><a href="destroy.php">Déconnexion</a></p>
</body>
</html>
<?php 
}
else{
 		header("location:index.php");
	}
 ?>
