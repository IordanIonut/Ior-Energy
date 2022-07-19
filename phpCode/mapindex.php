<?php
    $conectare = mysql_connect("localhost", "root", "Pasword879.");
    if(!$conectare){
        echo "The connection could not be made.";
        exit;
    }
    $db = mysql_select_db("draexlmaier");
    require 'citySend.php';

    $comande="SELECT lat ,lon , name_zone, category,model, battery,cod, image, c.name as x  FROM 
        zone_product as a inner join product as b on a.idzone=b.location inner join category_table as c on c.idcategory=b.category 
        where stare='1' and city='$city' and b.conditionid=3";
    $rez=mysql_query($comande); 
    $markers = array();         
    while ($x = mysql_fetch_array($rez)){
        $markers[]=array(
            $x['name_zone'],$x['lat'],$x['lon'],$x['category'],$x['model'],$x['battery'],$x['cod'],$x['image'],$x['x']
        );
  
    }
?>
    <div id="map_container" style="width: 170%; height: 670px; margin-left:auto; margin-right:auto"> </div>
    <script type="text/javascript" charset="utf-8">
        function getRandomInt(max) {
            var foo=0;
            for(i=0; i<19; ++i) 
                foo += Math.floor(Math.random() * max);
            return foo;
        }

        function toFixed(x) {
            if (Math.abs(x) < 1.0) {
                var e = parseInt(x.toString().split('e-')[1]);
                if (e) {
                    x *= Math.pow(10,e-1);
                    x = '0.' + (new Array(e)).join('0') + x.toString().substring(2);
                }
            } else {
                var e = parseInt(x.toString().split('+')[1]);
                if (e > 20) {
                    e -= 20;
                    x /= Math.pow(10,e);
                    x += (new Array(e+1)).join('0');
                }
            }
            return x;
        }
        
        function initMapIndex() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            
            var mapOptions = {
                mapTypeId: "roadmap",
                center: new google.maps.LatLng(45.85877890904945, 24.820414926162083), 
                zoom: 0,
            };
            
            map = new google.maps.Map(document.getElementById("map_container"), mapOptions);
            map.setTilt(45);
            var markers = <?php echo json_encode( $markers );?>;
            var infoWindow = new google.maps.InfoWindow();
            var marker;
            var i;

            for (i = 0; i < markers.length; i++) {
                var rand1=toFixed(getRandomInt(100000000)/10000000000000); 
                var rand2=toFixed(getRandomInt(100000000)/10000000000000);

                var lat =markers[i][1]-rand1;
                var lon =markers[i][2]-rand2; 

                const image = {
                    url:"../"+markers[i][7],
                    scaledSize: new google.maps.Size(50, 50), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(0, 0) // anchor
                };
                
                var position = new google.maps.LatLng(lat, lon);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    icon: image,
                    title: markers[i][0],
                });
                if(markers[i][3]==1 || markers[i][3]==3){
                    google.maps.event.addListener(marker, 'click',  (function (marker, i) {
                        return function () {
                            let address = '<button type="button" onclick="Command(this); return false" id="testtest" value='+i+' class="button">Command</button><div style="color: black; text-align: center;"><p><b>Place: '+markers[i][0]+'<br>Category: '+markers[i][8]+'<br>Model: '+markers[i][4]+'<br>Battery: '+markers[i][5]+' %<br>Product: '+markers[i][6]+'</p></div>';
                            infoWindow.setContent(address);
                            infoWindow.open(map, marker);
                        }
                    })(marker, i));
                    map.fitBounds(bounds);
                }
                else{
                    google.maps.event.addListener(marker, 'click',  (function (marker, i) {
                    return function () {
                        let address = '<button type="button" onclick="Command(this); return false" id="testtest" value='+i+' class="button">Command</button><div style="color: black; text-align: center;"><p><b>Place: '+markers[i][0]+'<br>Category: '+markers[i][8]+'<br>Model: '+markers[i][4]+'<br>Product: '+markers[i][6]+'</p></div>';

                        infoWindow.setContent(address);
                        infoWindow.open(map, marker);
                    }
                    })(marker, i));
                    map.fitBounds(bounds);
                }    
            }
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
                this.setZoom(7);
                google.maps.event.removeListener(boundsListener);
            });
        }
        google.maps.event.addDomListener(window, 'load', initMapIndex);
    </script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEZq1VmaUc6R3xRJuHIRYXi4lH14oqwMs&callback=initMapIndex">    </script>
<script  type="text/javascript">
    
    function Command(btn){
            window.location.href='index.php#create/login';
        }
</script>