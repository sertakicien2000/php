<html>
<head>
	<title>Ajouter</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Copleter le champs de Nom.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Copleter le champs de l'Age.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Copleter le champs d'Email.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Essayer encore</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
		
		//display success message
		echo "<font color='green'>Enregistrement succées.";
		echo "<br/><a href='index.php'>Voir le Resultat</a>";
	}
}
?>
</body>
</html>
