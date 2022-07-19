<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");

    $comande="SELECT date, cod, image , time, name, model, name_zone, battery
    from product as a inner join zone_product as b on a.location=b.idzone
       order by date desc, time desc  Limit 5";

    $rez=mysql_query($comande);
    while ($x = mysql_fetch_array($rez)){
        echo "<div class='card swiper-slide'>";
        echo "<div class='image-content'>";
        echo "<span class='overlay'></span>";
        echo "<div class='card-image'>";
        echo "<img src='".$x['image']."' alt='' class='card-img'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='card-content'>";
        echo "<h2 class='name'>Product Code: ".$x['cod']."</h2>";
        echo "<p class='description'>Date: ".$x['date']."<br>Time: ".$x['time']."<br>Location: ".$x['name_zone']."<br></p>";
        echo "<p class='name' style='text-align: center';>Model: ".$x['model']."<br>Product Name: ".$x['name']."<br></p>";
        echo  "<button class='button'>".$x['battery']."%</button>";
        echo "</div>";
        echo "</div>";
    } 
?>
