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