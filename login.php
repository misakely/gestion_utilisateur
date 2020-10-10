<?php

function login($nom, $prenom, $password, $adresse)
{

	if (isset($nom)&&isset($prenom)&&isset($password)&&isset($adresse)) 
	{
		$_POST['nom'] = $nom;
		$_POST['prenom'] = $prenom;
		$_POST['password'] = $password;
		$_POST['adresse'] = $adresse;

	}
	
	return $_POST;
}

$res = login($_POST['nom'], $_POST['prenom'],$_POST['password'],$_POST['adresse']);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$name = $res['nom'];
$firstname = $res['prenom'];
$pass = $res['password'];
$addr = $res['adresse'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO utilisateur (nom, prenom, password, adresse)
VALUES ('$name', '$firstname', '$pass', '$addr')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    header("location:home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>