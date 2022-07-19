<?php
   if(isset($_POST['submite7'])){
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");

        $cod=$_POST['cod'];
        $image=$_POST['file1'];
        $date=date("Y/m/d");
        $time=date("h:i:s");
        $name_client=$_SESSION['name'];
        $idclient=$_SESSION['id'];
        
        if(isset($_POST['place']))
            foreach ($_POST['place'] as $place);
        if(isset($_POST['cat']))
            foreach ($_POST['cat'] as $cat);
       
        $comande="SELECT category, cod, stare, location  FROM product WHERE category like '$cat' AND cod like '$cod'";
        $rez=mysql_query($comande);
        $x = mysql_fetch_array($rez);

        if($cod==$x['cod'] && $cat==$x['category'] && $x['stare']==2){
            $_SESSION['codProduct']=$cod;
            $_SESSION['imagePay']=$image;
            $_SESSION['cat']=$cat;
            $_SESSION['place']=$place;
            echo "<script>window.location.href='pay.php';</script>";
        }
        else{
            ?> 
                <p>The data entered cannot be found, please try again.</p> 
            <?php 
        }
        
     }
?>