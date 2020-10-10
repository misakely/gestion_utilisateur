<?php 

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

$sql = "SELECT * FROM utilisateur";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js" defer></script>
</head>
<body>
	<button type="button" class="btn btn-success"> <a href="redirect.php">Insérer</a></button>
	<table class="table table-dark">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Adresse</th>
				<th>Modification</th>
			</tr>
		</thead>
		<?php 
			if ($result->num_rows > 0) 
			{
				while ($row = $result->fetch_assoc()) 
				{
					
		?>
		<tbody>
			<tr>
				<td> <?php echo $row['nom'] ?></td>
				<td><?php echo $row['prenom'] ?></td>
				<td><?php echo $row['adresse'] ?></td>
				<td><button type="button" class="btn btn-info"><a href="modification.php?num=<?php echo $row['id']; ?> ">Traiter</a></button></td>

			</tr>
		</tbody>
		<?php 
			}
		 ?>
	</table>
	<?php 
		}
	?>

</body>
</html>