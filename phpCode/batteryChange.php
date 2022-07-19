<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");

    $comande="SELECT idproduct FROM draexlmaier.product where battery<15;";
    $rez=mysql_query($comande);

    while ($x = mysql_fetch_array($rez)){
        $comande="UPDATE product set conditionid=1 where idproduct=".$x['idproduct']."";
        $rez=mysql_query($comande);
    } 
?>