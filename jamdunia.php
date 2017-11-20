<!DOCTYPE html>
<html>
    <head>
        <title>Jam Dunia</title>
        <meta http-equiv="refresh" content="1"/>
    </head>
    <body>
        <b>
        <?php
            echo date(("H:") , strtotime("-7 hours")); echo date(("i:") , strtotime("-7 minutes")); echo date(("s") , strtotime("-7 seconds")); echo " GMT+0  London, Inggris "; echo "<br>";
            echo date(("H:") , strtotime("-6 hours")); echo date(("i:") , strtotime("-6 minutes")); echo date(("s") , strtotime("-6 seconds")); echo " GMT+1  Paris, Perancis "; echo "<br>";
            echo date(("H:") , strtotime("-5 hours")); echo date(("i:") , strtotime("-5 minutes")); echo date(("s") , strtotime("-5 seconds")); echo " GMT+2  Istanbul, Turki "; echo "<br>";
            echo date(("H:") , strtotime("-4 hours")); echo date(("i:") , strtotime("-4 minutes")); echo date(("s") , strtotime("-4 seconds")); echo " GMT+3  Moscow, Rusia "; echo "<br>";
            echo date(("H:") , strtotime("-3 hours")); echo date(("i:") , strtotime("-3 minutes")); echo date(("s") , strtotime("-3 seconds")); echo " GMT+4  Abu Dhabi, UEA "; echo "<br>";
            echo date(("H:") , strtotime("-2 hours")); echo date(("i:") , strtotime("-2 minutes")); echo date(("s") , strtotime("-2 seconds")); echo " GMT+5  Islamabad, Pakistan "; echo "<br>";
            echo date(("H:") , strtotime("-1 hours")); echo date(("i:") , strtotime("-1 minutes")); echo date(("s") , strtotime("-1 seconds")); echo " GMT+6  Astana, Kazakhstan "; echo "<br>";
            echo "<mark>"; echo date("H:"); echo date("i:"); echo date("s"); echo " GMT+7  Jakarta, Indonesia "; echo "<br>"; echo "</mark>";
            echo date(("H:") , strtotime("+1 hours")); echo date(("i:") , strtotime("+1 minutes")); echo date(("s") , strtotime("+1 seconds")); echo " GMT+8  Beijing, China "; echo "<br>";
            echo date(("H:") , strtotime("+2 hours")); echo date(("i:") , strtotime("+2 minutes")); echo date(("s") , strtotime("+2 seconds")); echo " GMT+9  Tokyo, Jepang "; echo "<br>";
        ?>
        <b>
    </body>
</html>
        
