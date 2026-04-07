<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- index.php --> 
<?php 
for ($i = 5; $i <= 100; $i += 5) { 
 echo "<a href='resultat.php?val=$i'>$i</a> "; 
} 
?> 
<!-- resultat.php --> 
<?php 
$val = $_GET["val"]; 
echo "Vous avez choisi : " . $val; 
?> 
<br>
<!-- formulaire.html --> 
<form method="POST" action="resultat.php"> 
 Nom : <input type="text" name="nom"><br> 
 Prénom : <input type="text" name="prenom"><br> 
 <input type="submit" value="Valider"> 
</form> 
<!-- resultat.php --> 
<?php 
$nom = $_POST["nom"]; 
$prenom = $_POST["prenom"]; 
echo "Bienvenue " . $nom . " " . $prenom; 
?> 
</body>
</html>