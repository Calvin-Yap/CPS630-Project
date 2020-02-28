<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="shopping.css">
  <style>
    /* Set the size of the div element that contains the map */
   #map {
     height: 400px;  /* The height is 400 pixels */
     width: 100%;  /* The width is the width of the web page */
    }
 </style>
   <?php
   /*
session_start();
if ( isset( $_SESSION['user_id'] ) ) 
 {
  } 
   else 
  {
    header("Location: http://localhost:8080/login-request.php");
 }
 */
?>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6" id="abcd">
        <h1> Travel Plans </h1>
        <button type="button" class="btn btn-info" id= "flip" onclick="myTravelNA()">Travel in North America</button>
        <button type="button" class="btn btn-info" id= "flip2" onclick="myTravelSA()">Travel in South America</button>
        <button type="button" class="btn btn-info" id= "flip3" onclick="myTravelCA()">Travel in Central America</button>
        <button type="button" class="btn btn-info" id= "flip4" onclick="myTravelA()">Travel in Asia</button>

        <div id="NorthAmerica">
          <p class="bold">Start Date:</p>
          <p>Saturday, February 29th, 2020</p>
          <p class="bold">End Date:</p>
          <p>Saturday, March 7th, 2020</p>
          <p class="bold">Total Duration:</p>
          <p>7 days </p>
          <p class="bold">Air Fare/Cruise Fare:</p>
          <p>$5000 </p>
          <p class="bold">Tour ID Number:</p>
          <p>100</p>
          <p class="bold">Total Price:</p>
          <p>$10000</p>
          <div id="destination">
            <ul>
               <li>Destination 1: CN Tower, Canada</li>
               <li>Destination 2: Banff National Park, Canada</li>
               <li>Destination 3: Statue of Liberty, USA</li>
            </ul>
          </div>
        </div>

        <div id="SouthAmerica">
          <p class="bold">Start Date:</p>
          <p>Saturday, February 29th, 2020</p>
          <p class="bold">End Date:</p>
          <p>Saturday, March 7th, 2020</p>
          <p class="bold">Total Duration:</p>
          <p>7 days </p>
          <p class="bold">Air Fare/Cruise Fare:</p>
          <p>$7000 </p>
          <p class="bold">Tour ID Number:</p>
          <p>200</p>
          <p class="bold">Total Price:</p>
          <p>$12000</p>
          <div id="destination">
            <ul>
               <li>Destination 1: Christ the Redeemer, Brazil</li>
               <li>Destination 2: Sugarloaf Mountain, Brazil</li>
               <li>Destination 3: La Boca, Agentina</li>
            </ul>
          </div>
        </div>

        <div id="CentralAmerica">
          <p class="bold">Start Date:</p>
          <p>Saturday, February 29th, 2020</p>
          <p class="bold">End Date:</p>
          <p>Saturday, March 7th, 2020</p>
          <p class="bold">Total Duration:</p>
          <p>7 days </p>
          <p class="bold">Air Fare/Cruise Fare:</p>
          <p>$3000 </p>
          <p class="bold">Tour ID Number:</p>
          <p>100</p>
          <p class="bold">Total Price:</p>
          <p>$13000</p>
          <div id="destination">
            <ul>
               <li>Destination 1: Gatun Lake, Panama </li>
               <li>Destination 2: San Blas Islands, Panama </li>
               <li>Destination 3: Arenal Volcano, Costa Rica</li>
            </ul>
          </div>
        </div>
        <div id="Asia">
          <p class="bold">Start Date:</p>
          <p>Saturday, February 29th, 2020</p>
          <p class="bold">End Date:</p>
          <p>Saturday, March 7th, 2020</p>
          <p class="bold">Total Duration:</p>
          <p>7 days </p>
          <p class="bold">Air Fare/Cruise Fare:</p>
          <p>$7000 </p>
          <p class="bold">Tour ID Number:</p>
          <p>100</p>
          <p class="bold">Total Price:</p>
          <p>$15000</p>
          <div id="destination">
            <ul>
               <li>Destination 1: Great Wall of China, China</li>
               <li>Destination 2: N Seol Tower, Korea</li>
               <li>Destination 3: Gyeonbokgung Palace, Korea</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-6" id = "abcd">
        <form action="" method="get">

          <h1>Order Information</h1>
          <h4>Number of Travelers</h4>
          <input class="form-check-input" type="radio" name="traveler"onclick="addVal(1)" id="traveler1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">1</label>
          <input class="form-check-input" type="radio" name="traveler" onclick="addVal(2)"id="traveler2" value="2">
          <label class="form-check-label" for="exampleRadios1">2</label>
          <input class="form-check-input" type="radio" name="traveler" onclick="addVal(3)"id="traveler3" value="3">
          <label class="form-check-label" for="exampleRadios1">3</label>
          <input class="form-check-input" type="radio" name="traveler" onclick="addVal(4)"id="traveler4" value="4">
          <label class="form-check-label" for="exampleRadios1">4</label>
          <br>
          <div id="age"></div>
          <h4> Total Price with Tax: </h4>
          <p id="Cost" style="font-size: 20px">$0.00</p>

          <input type="submit" button type="button" class="btn btn-info"></input>
        </form>
      </div>
    </div>
  </div>
  <div id="map"></div>


      <script>
        var name;
        var defined = 0;
        var x;
        function myTravelNA() {
          if( defined == 0){
           x = document.getElementById("NorthAmerica");
            x.style.display = "block";
          defined = 1;
        }
        else {
           x.style.display = "none";
           x = document.getElementById("NorthAmerica");
            x.style.display = "block";
        }
        name = "NA";
        initMap();
        printCost("$12,000.00");
        }
        function myTravelSA() {
          if( defined == 0){
           x = document.getElementById("SouthAmerica");
            x.style.display = "block";

          defined = 1;
        }
        else {
           x.style.display = "none";
           x = document.getElementById("SouthAmerica");
        //  if (x.style.display === "none") {
            x.style.display = "block";
        }
        name = "SA";
        initMap();
        printCost("$13,000.00");
        }
        function myTravelCA() {
          if( defined == 0){
           x = document.getElementById("CentralAmerica");
        //  if (x.style.display === "none") {
            x.style.display = "block";

          defined = 1;
        }
        else {
           x.style.display = "none";
           x = document.getElementById("CentralAmerica");
        //  if (x.style.display === "none") {
            x.style.display = "block";
        }
        name = "CA";
        initMap();
        printCost("$15,000.00");
        }
        function myTravelA() {
          if( defined == 0){
           x = document.getElementById("Asia");
        //  if (x.style.display === "none") {
            x.style.display = "block";

          defined = 1;
        }
        else {
           x.style.display = "none";
           x = document.getElementById("Asia");
        //  if (x.style.display === "none") {
            x.style.display = "block";
        }
        name = "Asia";
        initMap();
        printCost("$20,000.00");
        }

        function printCost(price){
          var selectage = document.getElementById("Cost");
          var contents = price;

          selectage.innerHTML = contents;

        }


        function initMap() {

          //var location = "NA";
          switch(name){
            case "NA":
                var place1 = {lat: 43.6426, lng: -79.3871};
                var place2 = {lat: 51.1784, lng: -115.5708};
                var place3 = {lat: 40.6892, lng: -74.0445};
                var desc = ['CN Tower', 'Banff National Park', 'Statue of Liberty'];
                break;
            case "SA":
                var place1 = {lat: -22.9519, lng: -43.2105};
                var place2 = {lat: -22.9493, lng: -43.154};
                var place3 = {lat: -34.6345, lng: -58.3631};
                var desc = ['Christ the Redeemer', 'Sugarloaf Mountain', 'La Boca'];
                break;
            case "CA":
                var place1 = {lat: 9.1921, lng: -79.9081};
                var place2 = {lat: 9.5700, lng: -78.8200};
                var place3 = {lat: 10.4626, lng: -84.7032};
                var desc = ['Gatun Lake', 'San Blas Islands', 'Arenal Volcano'];
                break;
            case "Africa":
                var place1 = {lat: 43.6426, lng: -79.3871};
                var place2 = {lat: 51.1784, lng: -115.5708};
                var place3 = {lat: 40.6892, lng: -74.0445};
                var desc = ['CN Tower', 'Banff National Park', 'Statue of Liberty'];
                break;
            case "Asia":
                var place1 = {lat: 40.4319, lng: 116.570};
                var place2 = {lat: 37.5512, lng: 126.9882};
                var place3 = {lat: 37.5796, lng: 126.9770};
                var desc = ['Great Wall of China', 'N Seol Tower', 'Gyeonbokgung Palace'];
                break;

          }

          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 4, center: place1});
          // The marker, positioned at Uluru
          var marker1 = new google.maps.Marker({position: place1, map: map});
          var marker2 = new google.maps.Marker({position: place2, map: map});
          var marker3 = new google.maps.Marker({position: place3, map: map});
          var infowindow1 =  new google.maps.InfoWindow({
            content: desc[0],
            map: map,
            position: place1
          });
            infowindow1.close();

            var infowindow2 =  new google.maps.InfoWindow({
            content: desc[1],
            map: map,
            position: place2
          });
            infowindow2.close();

            var infowindow3 =  new google.maps.InfoWindow({
            content: desc[2],
            map: map,
            position: place3
          });
          infowindow3.close();
          marker1.addListener('mouseover', function() {
            infowindow1.open(map, this);
          });

          // assuming you also want to hide the infowindow when user mouses-out
          marker1.addListener('mouseout', function() {
            infowindow1.close();
          });
          marker2.addListener('mouseover', function() {
            infowindow2.open(map, this);
          });

          // assuming you also want to hide the infowindow when user mouses-out
          marker2.addListener('mouseout', function() {
            infowindow2.close();
          });
          marker3.addListener('mouseover', function() {
            infowindow3.open(map, this);
          });

          // assuming you also want to hide the infowindow when user mouses-out
          marker3.addListener('mouseout', function() {
            infowindow3.close();
          });


          }

        function addVal(a){
          var selectage = document.getElementById("age");
          var contents = "<label for=\"Age\">Select Age:</label>"
          for(let i =0; i<a; i++){
            contents += "<select><option name=\"age\" value=\"Infant\">Infant (0 - 2)</option><option value=\"Child\">Child (2 - 11)</option><option value=\"Youth\">Youth (12 - 25)</option><option value=\"Adult\">Adult (26 - 59)</option><option value=\"Senior\">Senior (60+)</option></select>";
          }
          selectage.innerHTML = contents;
        }

      </script>
    <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACWTlnsvRfilkzCbmEn7-TsVUvdWZtoHg&callback=initMap">
          </script>

        <?php
        if ( ! empty( $_GET ) ) 
        {
          $val = $_GET['traveler'];
          echo $val;
          echo $_GET['age'];
        }
        ?>

      
</body>
</html>
