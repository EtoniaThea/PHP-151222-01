<html>
    <head>
        <title>Fungsi : String</title>
    </head>
    <body>
        <h2>Fungsi : String substr</h2>
        <?php
        $string="pemograman web PHP";
        $word=substr($string,16,3);
        echo("<i>\"$string\"</i><or>");
        echo("Hasil substr (16,3) adalah $word");
        ?>
    </body>
</html>