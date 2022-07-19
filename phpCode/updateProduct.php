<?php
    if(isset($_POST['submitetest1'])){
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");

        $model=$_POST['model'];
        $cod=$_POST['cod'];
        if(isset($_POST['city']))
            foreach ($_POST['city'] as $city);
        if(isset($_POST['category']))
            foreach ($_POST['category'] as $category);
        if(isset($_POST['condition']))
            foreach ($_POST['condition'] as $condition);

        $comande="SELECT cod from product where cod='$cod' and model='$model'";
        $rez=mysql_query($comande);
        $x = mysql_fetch_array($rez);
        
        if($x['cod']){
        $comande="UPDATE product SET conditionid='$condition'
            WHERE model='$model' AND cod='$cod' AND city='$city'AND category='$category'";
        $rez=mysql_query($comande);
        ?> 
            <br>
            <p style="text-align: center;">Change the status of this product successfully.</p> 
        <?php 
        }
        else{
            ?> 
            <br>
            <p style="text-align: center;">The product does not exist, therefore its condition cannot be changed.</p> 
        <?php 
        }

        //echo "<script>window.location.href='admin.php';</script>";
    }
?>
