<html>
    <head>
        <title>Tipe data Object</title>
    </head>
    <body>
        <h2>Tipe data Objek</h2>
        <?php
        class test
        {
            var $str="Validasi Class";
            function set_vars($str)
            {
                $this->str=$str;
            }
        }
        $class=new test;
        echo $class->str;
        $class->set_vars("Variabel Objek");
        echo ("<br>");
        echo $class->str;
        ?>
    </body>
</html>