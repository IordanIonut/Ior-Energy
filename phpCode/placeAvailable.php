<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");
    
    require 'citySend.php';

    $comande="SELECT * from zone_product where cityid='$city' order by idzone";
    $rez=mysql_query($comande);

    while ($x = mysql_fetch_array($rez)){
        echo "<option value='".$x['idzone']."'>".$x['name_zone']."</option>";
    } 
?>