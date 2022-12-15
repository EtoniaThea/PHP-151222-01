<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tipe Data PHP</h2>
    <?php
    $var1="Halo";
    $var2=1;
    $var3=3.14;
    echo("\Svar1 = $var1<br>");
    echo("\Svar2 = $var2<br>");
    echo("\Svar3 = $var3<br>");
    echo("Tipe data \Svar1 adalah " .gettype($var1)."<br>");
    echo("Tipe data \Svar2 adalah " .gettype($var2)."<br>");
    echo("Tipe data \Svar3 adalah " .gettype($var3));
    ?>
</body>
</html>