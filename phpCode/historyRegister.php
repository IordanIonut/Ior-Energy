<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");

    $comande="SELECT name, email, number_of_phone, date, time
        from client  order by idclient desc Limit 5";

    $rez=mysql_query($comande);
    while ($x = mysql_fetch_array($rez)){
        echo "<div class='card swiper-slide'>";
        echo "<div class='image-content'>";
        echo "<span class='overlay'></span>";
        echo "<div class='card-image' style='position: initial;'>";
       // echo "<img src='".$x['image']."' alt='' class='card-img'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='card-content'>";
        echo "<h2 class='name'>Client Name: ".$x['name']."</h2>";
        echo "<p class='description'>Email: ".$x['email']."<br>Number Of Phone: ".$x['number_of_phone']."</p>";
        echo "<p class='name' style='text-align: center';>Date: ".$x['date']."<br>Time: ".$x['time']."<br></p>";
       // echo  "<button class='button'>".$x['battery']."%</button>";
        echo "</div>";
        echo "</div>";
    } 
?>
