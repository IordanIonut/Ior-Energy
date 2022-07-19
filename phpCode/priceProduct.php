<?php 
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");
        
        if(isset($_POST['category']))
            foreach ($_POST['category'] as $category);
        $price=$_POST['price'];

        $comande="UPDATE product, type_product SET
            type_product.price_per_minute='$price' WHERE type_product.idtype='$category'";
        $rez=mysql_query($comande);
        
        //echo "<script>window.location.href='admin.php#delete/price';</script>";
    
?>