
<?php 

$id = $_GET['num'];
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

$sql = "SELECT * FROM utilisateur WHERE id = $id ";
$result = $conn->query($sql);

/*if ($row = $result->fetch_assoc()) 
{
	
}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Modification</title>
	<link rel="stylesheet" type="text/css" href="modification.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js" defer></script>
	<script type="text/javascript" src="jquery-1.11.0.min.js" defer></script>
	<script type="text/javascript" src="action.js" defer ></script>
	
</head>
<body>
	<div class="form">

		<form class="text-center border border-light p-5" action="traitement.php" method="post">

	    <p class="h4 mb-4">Sign in</p>
	    <?php 
	    	if ($row = $result->fetch_assoc()) 
	    	{
	    		
	    	
	    ?>
	    <input type="text" name="id" class="form-control mb-4" hidden="" name ="id" value="<?php echo $row["id"]; ?>">
	    <input type="text" id="nom" class="form-control mb-4" placeholder="Nom" name=nom required="" value="<?php echo $row["nom"]; ?>">
	   	<input type="text" id="prenom" class="form-control mb-4" placeholder="Prenom" name=prenom required="" value="<?php echo $row["prenom"]; ?>">
	    <input type="text" id="adresse" class="form-control mb-4" placeholder="Adresse" name=adresse required="" value="<?php echo $row["adresse"]; ?>">
	    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password" required="" value="<?php echo $row["password"]; ?>">
	  
	    <button class="btn btn-success btn-block my-4" name ="edit" type="submit">Edition</button>
	    <button class="btn btn-danger btn-block my-4" name="delete" type="submit" id="del">Suppression</button>
	    <?php 
			} 
	    ?>
	</div>
</body>
</html>
