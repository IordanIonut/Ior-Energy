<?php
    if(isset($_POST['submite1'])){
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");

        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $tel=$_POST['tel'];
        $date=date("Y/m/d");
        $time=date("h:i:s");

        $comande="INSERT INTO client (name,email,number_of_phone,date,time,password)
             VALUES('$name','$email','$tel','$date','$time','$password')";
        $rez=mysql_query($comande);
        
        echo "<script>window.location.href='index.php#create/login';</script>";
    }
?>