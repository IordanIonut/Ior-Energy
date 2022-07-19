<?php
    if(isset($_POST['submite7'])){
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");

        echo '<br><br><br><br><br><br><br><br><br><br><br>';

        $date=date("Y/m/d");
        $time=date("h:i:s");

        $cod=$_SESSION['codProduct'];
        $image=$_SESSION['imagePay'];
        $name_client=$_SESSION['name'];
        $idclient=$_SESSION['id'];
        $cardnumber=$_POST['cardnumber'];
        $cardname=$_POST['cardname'];
        $cardexp=$_POST['cardexp'];
        $cvv=$_POST['cardcvv'];
        $cat=$_SESSION['cat'];
        $place=$_SESSION['place'];

        $comande="SELECT idproduct from product, client
            where category='$cat' AND cod='$cod'";
        $rez=mysql_query($comande);
        $x = mysql_fetch_array($rez);
        $productid=$x['idproduct'];
       // echo $comande.'<br>';;

        $comande="SELECT idcommand FROM command as a inner join product as c on a.codProduct=c.cod
            WHERE c.category like '$cat' AND codProduct like '$cod'  
            and a.idclient like '$idclient' and idproduct='$productid' and name_client like '$name_client' and strare='1'";
        $rez=mysql_query($comande);
        $x = mysql_fetch_array($rez);
        echo $comande.'<br>';;

        $commandid=$x['idcommand'];
        $zoneid=$place;

        $comande="INSERT INTO ivoice (productid,clientid,zoneid,date,time,image,idcommand,cardnumber,cardName,cvv,cardexp) 
            VALUES ('$productid','$idclient','$zoneid','$date','$time','$image','$commandid','$cardnumber','$cardname','$cvv','$cardexp')";
        $rez=mysql_query($comande);
        echo $comande.'<br>';

        $comande="SELECT idivoice from ivoice where productid='$productid' and clientid='$idclient' and zoneid='$zoneid' and 
             date='$date' and time='$time' and idcommand='$commandid' and cardnumber='$cardnumber' and cardName='$cardname' and
             cvv='$cvv' and cardexp='$cardexp' ";
        $rez=mysql_query($comande);
        $x = mysql_fetch_array($rez);
        echo $comande.'<br>';
        if($x['idivoice']){
            
            $com="SELECT data as z , time as y 
            from  command 
                 where idclient='$idclient'  and codProduct='$cod' ORDER BY   z desc, y desc Limit  1";
            $rez=mysql_query($com);
            $x = mysql_fetch_array($rez);
            //echo $com.'<br>';
            //echo $image.'<br>';
            
            $xx=$x['z'].' '.$x['y'];
            $yy=$date.' '.$time;
            $to_time = strtotime($x['z'].' '.$x['y']);
            $from_time = strtotime($date.' '.$time);
            $total=round(abs($to_time - $from_time) / 60);
            $total=$total/5;

            $comande="UPDATE product set stare='1', battery=battery-'$total',  location='$place'  WHERE idproduct='$productid' 
                and category='1' or category='3'";
            $rez=mysql_query($comande);
    
            $comande="UPDATE command set strare='2' WHERE idcommand='$commandid'";
            $rez=mysql_query($comande);
            echo "<script>window.location.href='../client.php';</script>";
        }
        else{
            ?> 
            <br>
            <p>Sorry. Please enter the correct data or leave <a href="index.php">this</a> page.</p> 
        <?php 
        }
    }
?>