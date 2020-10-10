<?php 
$id = $_POST["id"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];

// var_dump($nom);die;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	if (isset($_POST['edit'])) 
	{
		$sql = "UPDATE utilisateur SET nom = '$nom', prenom = '$prenom', adresse = '$adresse' WHERE id = $id";

		if ($conn->query($sql) === TRUE) 
		{
		    echo "Record updated successfully";
		} else 
		{
		    echo "Error updating record: " . $conn->error;
		}
	}
	elseif (isset($_POST['delete']))
	{
		$sql = "DELETE FROM utilisateur WHERE id= $id";

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}

	}
	else
	{

	}

?>