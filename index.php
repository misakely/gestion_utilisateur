<!--  -->
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js" defer></script>
</head>
<body>

<!--  -->
	<div class="formulaire">
		<form class="text-center border border-light p-5" action="login.php" method="post">

	    <p class="h4 mb-4">Sign in</p>

	    <input type="text" id="nom" class="form-control mb-4" placeholder="Nom" name=nom required="">
	   	<input type="text" id="prenom" class="form-control mb-4" placeholder="Prenom" name=prenom required="">
	    <input type="text" id="adresse" class="form-control mb-4" placeholder="Adresse" name=adresse required="">
	    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password" required="">
	  
	    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

	</form>

	</div>
</body>
</html>