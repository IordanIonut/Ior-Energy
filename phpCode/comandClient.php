<?php
    session_start();
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");

        $date=date("Y/m/d");
        $time=date("h:i:s");

        $name_client=$_SESSION['name'];
        $idclient=$_SESSION['id'];
        $a=$_GET['test1'];
        $all=$_SESSION['toate1'][$a];

        $category=$all[3];
        $cod=$all[6];
        $place=$all[0];

        $com="SELECT DISTINCT location  FROM product as a inner join zone_product as b on a.location=b.idzone where name_zone like '$place'";
        $rez=mysql_query($com);
        $x = mysql_fetch_array($rez);
        $test=$x['location'];
        echo $test.' ';

        echo $category.' '.$cod.' '.$place.' ';
        $comande="SELECT category, cod, location, stare  FROM product WHERE category like '$category' AND cod like '$cod' AND location like '$test'";
        $rez=mysql_query($comande);
        $x = mysql_fetch_array($rez);

        if($cod==$x['cod'] && $category==$x['category'] && $test==$x['location'] && $x['stare']==1){
            $comande="INSERT INTO command (category,codProduct,data,time,name_client,idclient,location) 
                VALUES ('$category','$cod','$date','$time','$name_client','$idclient','$test')";
            $rez=mysql_query($comande);

            $comande="UPDATE product set stare='2' WHERE category like '$category' AND cod like '$cod' AND location like '$test'";
            $rez=mysql_query($comande);
            
            unset($_SESSION['toate1']);
            
            echo "<script>window.location.href='../client.php';</script>";

        }
        else{
            ?> 
                <p>Sorry. Please enter the correct data or leave <a href="../client.php#command">this</a> page.</p> 
            <?php 
        }
?>