<!DOCTYPE html>
<html>
    <head>
        <title>Ranking Siswa</title>
        <style>
            table,th,td {
                border: 2px solid black;
                border-collapse: collapse;}
        </style>
    </head>
    <body>
        <center>
        <?php
        $error="";
        if(empty($_POST["name1"]) || ($_POST["name2"]) || ($_POST["name3"]) || ($_POST["tombol"]))
        {$error="Data tidak boleh kosong";}
        ?>
        <form action="rankingsiswa.php" method="post">
            <h1> Ranking Siswa </h1>
            Nama : <input type="text" name="name1"> Nilai : <input type="number" name="nilai1"><p>
            Nama : <input type="text" name="name2"> Nilai : <input type="number" name="nilai2"><p>
            Nama : <input type="text" name="name3"> Nilai : <input type="number" name="nilai3"><p>
            Ranking Menurut : <input type="radio" name="tombol" value="namaturun"> Nama &#8595;
                              <input type="radio" name="tombol" value="namanaik"> Nama &#8593;
                              <input type="radio" name="tombol" value="nilaiturun"> Nilai &#8595;
                              <input type="radio" name="tombol" value="nilainaik"> Nilai &#8593;<p>
            <input type="submit" value="PROSES">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {$name1=$_POST["name1"];
         $name2=$_POST["name2"];
         $name3=$_POST["name3"];
         $nilai1=$_POST["nilai1"];
         $nilai2=$_POST["nilai2"];
         $nilai3=$_POST["nilai3"];
         $tombol=$_POST["tombol"];
         $array=array($name1=>$nilai1,$name2=>$nilai2,$name3=>$nilai3);
         echo "<table>";
         if($tombol=="namaturun")
         {ksort($array);
          foreach($array as $nama=>$nilai)
          echo "<tr><td>" . $nama . "</td>" . "&nbsp" . "<td>" . $nilai . "</td></tr>" . "<br>"; 
         }
         elseif($tombol=="namanaik")
         {krsort($array);
          foreach($array as $nama=>$nilai)
          echo "<tr><td>" . $nama . "</td>" . "&nbsp" . "<td>" . $nilai . "</td></tr>" . "<br>";
         }
         elseif($tombol=="nilaiturun")
         {asort($array);
          foreach($array as $nama=>$nilai)
          echo "<tr><td>" . $nama . "</td>" . "&nbsp" . "<td>" . $nilai . "</td></tr>" . "<br>";
         }
         elseif($tombol=="nilainaik")
         {arsort($array);
          foreach($array as $nama=>$nilai)
          echo "<tr><td>" . $nama . "</td>" . "&nbsp" . "<td>" . $nilai . "</td></tr>" . "<br>";
        echo "</table>";
         }
        }
        ?>
        </center>
    </body>
</html>
        

                           
