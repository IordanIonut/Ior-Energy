<?php
    function minutes($time){
        $timesplit = explode(':', $time);
        $min=($timesplit[0]*60)+($timesplit[1])+($timesplit[2]>30?1:0);
        return $min;
    }

    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");

    $clientid=$_SESSION['id'];
    $name=$_SESSION['name'];
    $password=$_SESSION['password'];

    $comande="SELECT c.data as z ,b.date as m, codProduct, d.image as q, b.time as x, c.time as y, price_per_minute , idivoice, d.name as p, model, zoneid,
     c.location as l , cardnumber, cardname, c.idcommand
          from ivoice as b inner join client as a on a.idclient=b.clientid 
            inner join  command as c on  c.idcommand=b.idcommand inner join product as d on b.productid=d.idproduct      
             inner join type_product as f on d.category=f.idtype
                where clientid='$clientid' and a.name='$name' and password='$password' ORDER BY  m desc, x desc Limit  20";
    $rez=mysql_query($comande);
    $aa=1;
       
   $marks =array();
   
    while ($x = mysql_fetch_array($rez)){
        $xx=$x['z'].' '.$x['y'];
        $yy=$x['m'].' '.$x['x'];
        $to_time = strtotime($x['z'].' '.$x['y']);
        $from_time = strtotime($x['m'].' '.$x['x']);
        $total=round(abs($to_time - $from_time) / 60);

        $cautare1=$x['zoneid'];
        $com="SELECT name_zone from zone_product where idzone='$cautare1'";
        $rez1=mysql_query($com);
        $rez8= mysql_fetch_array($rez1);
        $rezfinal1=$rez8['name_zone'];
            
        $cautare2=$x['l'];
        $com="SELECT name_zone from zone_product where idzone='$cautare2'";
        $rez2=mysql_query($com);
        $rez9= mysql_fetch_array($rez2);
        $rezfinal2=$rez9['name_zone'];

        $total=$total*$x['price_per_minute'];
        $id=$x['idivoice'];

        $marks[]=array($x['m'],$x['codProduct'],$x['q'],$total,$x['price_per_minute'],$x['idivoice'],$x['p'],$x['model'],
            $rezfinal1,$rezfinal2,$x['cardnumber'],$x['cardname']);
            
        echo "<div class='card swiper-slide'>";
        echo "<div class='image-content'>";
        echo "<span class='overlay'></span>";
        echo "<div class='card-image'>";
        echo "<img src='".$x['q']."' alt='' class='card-img'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='card-content'>";
        echo "<h2 class='name'>Product Code: ".$x['codProduct']."</h2>";
        echo "<p class='description'>Start time: ".$xx."<br>Stop time: ".$yy."<br>Total Pay: ".$total." LEI<br></p>";
        echo "<p class='name' style='text-align: center';>Rental date: ".$x['m']."</p>";
        echo "<button  onclick='NewTab(this); return false' id='".$aa."' class='button'>Ivoice</button>";
        echo "</div>";
        echo "</div>";
        $aa=$aa+1;
    } 
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
      <script type="text/javascript">
           
            function NewTab(btn) {
                let test=btn.id;
                document.cookie = "test=" + btn.id;
                //alert(btn.id);
                btn.disabled = false;
             <?php
                $test= $_COOKIE['test'];
                $test=$test-1;
                $_SESSION['alltest']=array();
                $_SESSION['alltest']=$marks[$test];
                unset($marks);
             ?>

                window.open(
                "http://localhost:8887/invoice.php", "_blank");
                window.location.href='client.php';
            }
        </script>