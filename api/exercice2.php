<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #f1f5f9;">
    <?php
    function table_mul($a,$b){
    echo("<table border='1'>");
    for($i=1;$i<=$a;$i++){
        echo("<tr>");
        for($j=1;$j<=$b;$j++){
            
            $res=$i*$j;
            echo("<td>$res</td>");
        }
        echo("</tr>");
    
    echo("</table>");
    
     }
     table_mul(9,9)
    ?>
<?php
function triangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        // spaces
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // stars
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
}

// appel de la fonction
triangle(5);
?>
<br><br><br>

<?php
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    // spaces
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>

</body>
</html>