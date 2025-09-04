<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td {
        width: 50px;
        height: 50px;
    }
</style>

<body>
<?php
echo "<table border='1'>";     
for ($a = 0; $a < 8; $a++) {  
    echo "<tr>";              
    for ($b = 0; $b < 8; $b++) {   
        echo "<td ></td>";
    }
    echo "</tr>";             
}
echo "</table>";        
?>

</body>
</html>
