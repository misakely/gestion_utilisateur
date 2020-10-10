<?php 
session_start();
function login($nom, $prenom, $password, $adresse)
{

	if (isset($_SESSION['nom'])&&isset($_SESSION['prenom'])&&isset($_SESSION['password'])&&isset($_SESSION['adresse'])) 
	{
			$_SESSION['nom'] = $nom;
			$_SESSION['prenom'] = $prenom;
			$_SESSION['password'] = $password;
			$_SESSION['adresse'] = $adresse;
	}
	
	
}

login($_POST['nom'], $_POST['prenom'],$_POST['password'],$_POST['adresse']);

?>