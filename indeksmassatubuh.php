<!DOCTYPE html>
<html>
    <head>
        <title>Ideks Massa Tubuh</title>
    </head>
    <body>
        <center>
        <form action="indeksmassatubuh.php" method="post">
            <h1> Ideks Massa Tubuh </h1>
            Masukkan massa tubuh Anda (kg)<br>
            <input type="number" name="berat"><p>
            Masukkan tinggi tubuh Anda (cm)<br>
            <input type="number" name="tinggi"><p>
            <input type="submit" value="Hitung IMT">
        </form>

        <?php
        function IMT($x,$y)
        {$imt=$x/$y;
         return $imt;}

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {$berat=$_POST["berat"];
         $tinggi=$_POST["tinggi"];
         $tmeter=pow(($tinggi/100),2);
         $hasil=IMT($berat,$tmeter);
         echo "IMT Anda = ";
         echo round($hasil,1,PHP_ROUND_HALF_UP);
         echo "<br>";

         switch($hasil)
         {case $hasil<=18.4:
          echo "berat badan KURANG!";
          break;
          case $hasil<=24.9:
          echo "berat badan IDEAL!";
          break;
          case $hasil<=29.9:
          echo "berat badan BERLEBIH!";
          break;
          case $hasil<=39.9:
          echo "berat badan SANGAT BERLEBIH!";
          break;
          case $hasil>39.9:
          echo "OBESITAS!!!!";
          break;
          default:
          echo "Hitungan IMT error";
         }
        }
        ?>
        </center>
    </body>
</html>
