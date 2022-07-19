<?php 
    if(isset($_POST['submite2'])){
        $conectare = mysql_connect("localhost", "root", "Pasword879.");
        if(!$conectare){
            echo "The connection could not be made.";
            exit;
        }
        $db = mysql_select_db("draexlmaier");

        $name=$_POST['name'];
        $password=$_POST['password'];

        $afis = "SELECT * FROM client WHERE name Like '$name' AND password LIKE '$password'";
        $rez = mysql_query($afis);

        $x = mysql_fetch_array($rez);
        if($name==$x['name'] && $password==$x['password']){

            $_SESSION['name'] = $name;
            $_SESSION['password'] = $password;
            $_SESSION['id']=$x['idclient'];

            header("Location: http://localhost:8887/client.php");
            echo "<script>window.location.href='client.php';</script>";
        }
        else{
            ?> 
                <p>Sorry. Please enter the correct data or leave <a href="index.php">this</a> page.</p> 
            <?php 
        }
    }
?>