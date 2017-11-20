<!DOCTYPE html>
<html>
    <head>
        <title>Ticket</title>
    </head>
    <body>
        <form action="tiket.php" method="post">
            <h1> Ticket Commuter Line </h1>
            Stasiun Keberangkatan : <p>
            <input type="radio" name="depart" value="1"> Tanah Abang 
            <input type="radio" name="depart" value="2"> Palmerah
            <input type="radio" name="depart" value="3"> Kebayoran
            <input type="radio" name="depart" value="4"> Rawa Buntu
            <input type="radio" name="depart" value="5"> Serpong
            <input type="radio" name="depart" value="6"> Cisauk
            <input type="radio" name="depart" value="7"> Parung Panjang <p>

            Stasiun Tujuan : <p>
            <input type="radio" name="arrive" value="1"> Tanah Abang
            <input type="radio" name="arrive" value="2"> Palmerah
            <input type="radio" name="arrive" value="3"> Kebayoran
            <input type="radio" name="arrive" value="4"> Rawa Buntu
            <input type="radio" name="arrive" value="5"> Serpong
            <input type="radio" name="arrive" value="6"> Cisauk
            <input type="radio" name="arrive" value="7"> Parung Panjang <p>

            <input type="submit" value="Beli Tiket">
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {$depart=$_POST["depart"];
             $arrive=$_POST["arrive"];
             
            

             function jarak($x,$y)
             {if($x>$y)
              {$z=($x-$y)*20;
              return $z;}
              elseif($x<$y)
              {$z=($y-$x)*20;
              return $z;}
             }
            
            $jarak=jarak($depart,$arrive);
             
            if($jarak>=20)
            {$harga=$jarak*100;}
            

            if($depart==1){$tujuan="Tanah Abang";}
            elseif($depart==2){$tujuan="Palmerah";}
            elseif($depart==3){$tujuan="Kebayoran";}
            elseif($depart==4){$tujuan="Rawa Buntu";}
            elseif($depart==5){$tujuan="Serpong";}
            elseif($depart==6){$tujuan="Cisauk";}
            elseif($depart==7){$tujuan="Parung Panjang";}

            if($arrive==1){$tujuan2="Tanah Abang";}
            elseif($arrive==2){$tujuan2="Palmerah";}
            elseif($arrive==3){$tujuan2="Kebayoran";}
            elseif($arrive==4){$tujuan2="Rawa Buntu";}
            elseif($arrive==5){$tujuan2="Serpong";}
            elseif($arrive==6){$tujuan2="Cisauk";}
            elseif($arrive==7){$tujuan2="Parung Panjang";}

            if(empty($_POST["depart"]) || empty($_POST["arrive"]))
             {echo "Mohon pilih stasiun";}
             elseif(($_POST["depart"]) == ($_POST["arrive"]))
             {echo "Anda sudah berada di stasiun tersebut";}
             else{echo  "Dari " . $tujuan . " ke " . $tujuan2 . " jaraknya " . $jarak . " km<br>";
                  echo  "Tarifnya Rp " . $harga;}
            
           
            
            
            }
            
            
            

        ?>
    </body>
</html>