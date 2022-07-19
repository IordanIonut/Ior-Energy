<?php
    if(isset($_POST['submite5'])){
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");


        $name=$_POST['name2'];
        $model=$_POST['model2'];
        $cod=$_POST['cod2'];
        $battery=100;
        if(isset($_POST['place']))
            foreach ($_POST['place'] as $location);
        if(isset($_POST['category']))
            foreach ($_POST['category'] as $category);

        $comande="SELECT idzone FROM  zone_product where idzone='$location'";
        $rez=mysql_query($comande);
        $row = mysql_fetch_array($rez);
        $nr_zone =  $row['idzone'];

        $city=$_SESSION['city'];

        $stare=1;
        $date=date("Y/m/d");
        $time=date("h:i:s");
        $image="images/product/";
        $image=$image.$model.".jpg";

        $comande="SELECT cod from product where cod='$cod'";
        $rez=mysql_query($comande);
        $x = mysql_fetch_array($rez);
        //echo $x['cod'];
        if(!$x['cod']){
            $comande="INSERT INTO product (name,model,cod,battery,location,city,date,category,time,image,nr_zone,stare)
                VALUES('$name','$model','$cod','$battery','$location','$city','$date','$category','$time','$image','$nr_zone','$stare')";
            $rez=mysql_query($comande);
            //echo $comande;
            ?> 
            <br>
            <p style="text-align: center;">The product has been successfully registered.</p> 
        <?php 
        }
        else if(!$x['cod']==null){
            ?> 
            <br>
            <p style="text-align: center;">Product code already exists. Please enter the correct data or leave <a href="index.php">this</a> page.</p> 
        <?php 
        }
        //echo "<script>window.location.href='admin.php';</script>";
    }
?>