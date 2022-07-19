<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");

    $name_client=$_SESSION['name'];
    $idclient=$_SESSION['id'];
    $date=date("Y/m/d");

    $comande="SELECT data as z, codProduct, image as q, b.time as y, price_per_minute , a.name as p, model, a.location, type_name as n
    from product as a inner join command as b on a.cod=b.codProduct inner join client as c on c.idclient=b.idclient
       inner join type_product as d on d.idtype=a.category
       where a.stare='2' and name_client='$name_client' and c.idclient='$idclient'  and b.strare=1
       order by b.data, b.time desc Limit 5";

    $rez=mysql_query($comande);
    
        while ($x = mysql_fetch_array($rez)){
            echo "<div class='card swiper-slide'>";
            echo "<div class='image-content'>";
            echo "<span class='overlay'></span>";
            echo "<div class='card-image'>";
            echo "<img src='".$x['q']."' alt='' class='card-img'>";
            echo "</div>";
            echo "</div>";
            echo "<div class='card-content'>";
            echo "<h2 class='name'>Product Code: ".$x['codProduct']."</h2>";
            echo "<p class='description'>Start Date: ".$x['z']."<br>Start Hour: ".$x['y']."<br>Price of minute: ".$x['price_per_minute']."<br>Type Product: ".$x['n']."</p>";
            echo "<p class='name' style='text-align: center';>Model: ".$x['model']."<br>Product Name: ".$x['p']."<br></p>";
            //echo  "<button  onclick='NewTab(this); return false' id='".$i."' class='button'>Ivoice</button>";
            echo "</div>";
            echo "</div>";
        } 
?>
