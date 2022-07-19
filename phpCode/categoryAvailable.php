<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");

    $comande="SELECT * from category_table";
    $rez=mysql_query($comande);

    while ($x = mysql_fetch_array($rez)){
        echo "<option value='".$x['idcategory']."'>".$x['name']."</option>";
    } 
?>