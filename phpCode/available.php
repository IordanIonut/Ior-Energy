<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");

    $city=$_SESSION['city'];

    $comande="SELECT  count(idproduct) as a FROM product WHERE conditionid='1' AND city='$city'";
    $rez=mysql_query($comande);
    $x = mysql_fetch_array($rez);
        echo "<div class='col-block stats__col' style='width: 33%;'>";
        echo "<div class='stats__count'>".$x['a']."</div>";
        echo "<h5>No battery</h5>";
        echo "</div>";
    
    $comande="SELECT  count(idproduct) as a FROM product WHERE conditionid='2' AND city='$city'";
    $rez=mysql_query($comande);
    $x = mysql_fetch_array($rez);
        echo "<div class='col-block stats__col' style='width: 33%;'>";
        echo "<div class='stats__count'>".$x['a']."</div>";
        echo "<h5>Malfunction</h5>";
        echo "</div>";
    
    $comande="SELECT  count(idproduct) as a FROM product WHERE conditionid='3' AND city='$city'";
    $rez=mysql_query($comande);
    $x = mysql_fetch_array($rez);
        echo "<div class='col-block stats__col' style='width: 33%;'>";
        echo "<div class='stats__count'>".$x['a']."</div>";
        echo "<h5>Function</h5>";
        echo "</div>";

    $comande="SELECT  count(idproduct) as a FROM draexlmaier.product where category=1  AND city='$city';";
    $rez=mysql_query($comande);
    echo "<div class='row about-stats stats block-1-4 block-m-1-2 block-mob-full' data-aos='fade-up'>";
    $x = mysql_fetch_array($rez);
        echo "<div class='col-block stats__col'>";
        echo "<div class='stats__count'>".$x['a']."</div>";
        echo "<h5>Electric Scooter</h5>";
        echo "</div>";
     
    $comande="SELECT  count(idproduct) as a FROM draexlmaier.product where category=2  AND city='$city';";
    $rez=mysql_query($comande);
    $x = mysql_fetch_array($rez);
        echo "<div class='col-block stats__col'>";
        echo "<div class='stats__count'>".$x['a']."</div>";
        echo "<h5>Scooter</h5>";
        echo "</div>";

    $comande="SELECT  count(idproduct) as a FROM draexlmaier.product where category=3  AND city='$city';";
    $rez=mysql_query($comande);
    $x = mysql_fetch_array($rez);
        echo "<div class='col-block stats__col'>";
        echo "<div class='stats__count'>".$x['a']."</div>";
        echo "<h5>Electric Bike</h5>";
        echo "</div>";

    $comande="SELECT  count(idproduct) as a FROM draexlmaier.product where category=4  AND city='$city';";
    $rez=mysql_query($comande);
    $x = mysql_fetch_array($rez);
        echo "<div class='col-block stats__col'>";
        echo "<div class='stats__count'>".$x['a']."</div>";
        echo "<h5>Bike</h5>";
        echo "</div>";
    
        //echo "<script>window.location.href='index.php#create/login';</script>";
?>