 <!DOCTYPE html>
 <?php
    $servername = "192.168.1.24";
    $username = "root";
    $password = "kateisdog";
    $dbname = "terrorist_attack";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }
    ?>
<html>
<body>

<h1>Indian terrorism attack</h1>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(20.5937, 78.9629);
  var mapOptions = {
    center: new google.maps.LatLng(20.5937, 78.9629),
    zoom: 5
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
  /*var marker=new google.maps.Marker({
  position:myCenter,
  icon:'dot.png'
  });*/
  var marker = new google.maps.Marker({position: myCenter});

marker.setMap(map);

//marker.setMap(map);
  
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>



</body>
</html> 