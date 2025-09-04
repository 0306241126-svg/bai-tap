<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        td {
            width: 60px;
            height: 60px;
        }

    </style>
</head>
<body>

<?php
echo "<table border='1'>";
for ($a = 0; $a < 8; $a++) {
    echo "<tr>";
    for ($b = 0; $b < 8; $b++) {
        // Ô trắng nếu tổng hàng + cột là chẵn
        $color = ($a + $b) % 2 == 0 ? 'white' : 'black';
        echo "<td class='$color'></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
