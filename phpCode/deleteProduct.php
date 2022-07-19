<?php
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");

        $name=$_POST['name1'];
        $model=$_POST['model1'];
        $cod=$_POST['cod1'];
        if(isset($_POST['category1']))
            foreach ($_POST['category1'] as $category);
      
        $comande="SELECT count(cod) as cod from product where cod='$cod' and model='$model' and name='$name'";
            $rez=mysql_query($comande);
        $x = mysql_fetch_array($rez);

        if($x['cod']==1){
        $comande="DELETE FROM product WHERE name='$name' AND
            model='$model' AND cod='$cod' AND category='$category'";
        $rez=mysql_query($comande);
        ?> 
            <br>
            <p style="text-align: center;">The product has been deleted.</p> 
        <?php 
        
        }
       
       //echo "<script>window.location.href='admin.php#delete/price';</script>";
    
?>