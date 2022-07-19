<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");

    $comande="SELECT b.image as zz, cardnumber, cardName, price_per_minute, battery,d.name as zzz, name_zone,
     a.date as z ,f.data as m,f.time as x, a.time as y  , codProduct
        FROM ivoice as a inner join 
        product as b on a.productid=b.idproduct inner join zone_product as c on a.zoneid=c.idzone inner join client as d on a.clientid=d.idclient
        inner join type_product as e on b.category=e.idtype inner join command as f on a.idcommand=f.idcommand order by idivoice desc  Limit 5";

    $rez=mysql_query($comande);
    while ($x = mysql_fetch_array($rez)){
        $xx=$x['z'].' '.$x['y'];
        $yy=$x['m'].' '.$x['x'];
        $to_time = strtotime($x['z'].' '.$x['y']);
        $from_time = strtotime($x['m'].' '.$x['x']);
        $total=round(abs($to_time - $from_time) / 60);
        $total=$total*$x['price_per_minute'];

        echo "<div class='card swiper-slide'>";
        echo "<div class='image-content'>";
        echo "<span class='overlay'></span>";
        echo "<div class='card-image'>";
        echo "<img src='".$x['zz']."' alt='' class='card-img'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='card-content'>";
        echo "<h2 class='name'>Name Client: ".$x['zzz']."</h2>";
        echo "<p class='description'>Card Name: ".$x['cardName']."<br>Card Number: ".$x['cardnumber']."<br>The Payment: ".$total." Lei </p>";
        echo "<p class='name' style='text-align: center';>Date: ".$x['z']."<br>Time: ".$x['y']."<br>Cod Product: ".$x['codProduct']."</p>";
        echo  "<button class='button'>".$x['battery']."%</button>";
        echo "</div>";
        echo "</div>";
    } 
?>
