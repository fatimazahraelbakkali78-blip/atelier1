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