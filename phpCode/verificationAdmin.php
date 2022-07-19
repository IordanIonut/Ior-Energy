<?php
    if(isset($_POST['submit12'])){

        $name=$_POST['name'];
        $passord=$_POST['password'];
        $cod=$_POST['cod'];

        if($name=='admin' && $passord=='admin' && $cod=='123456'){
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;

                header("Location: http://localhost:8887/admin.php");
                echo "<script>window.location.href='admin.php';</script>";
            }
        else{
               ?> 
               <p>Sorry. Please enter the correct data or leave <a href="index.php">this</a> page.</p> 
                <?php 
            }
    }
?>