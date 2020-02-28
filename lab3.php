<?php
$id = $_POST['id'];
$date = $_POST['date'];
$fname=$_POST['fname'];
$descr = $_POST['descr'];
$title = $_POST['title'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];

if (!empty($id) || !empty($fname) || !empty($descr) || !empty($title)|| !empty($lat)|| !empty($lon) ) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cps630";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
     $SELECT = "SELECT id From travelPhoto Where id = ? Limit 1";
     $INSERT = ("INSERT Into travelPhoto ( id, date, filename, description, title, latitude, longitude) values( ?,?,?, ?, ?, ?, ?)");
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $id);
     $stmt->execute();
     $stmt->bind_result($id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("issssdd", $id,$date, $fname, $descr, $title, $lat, $lon);
if ($stmt === false) {
   echo var_dump($conn->errorInfo());
   echo "fuckasdsadasdasfasf";
} else {
    $stmt->execute();
    echo "New record inserted sucessfully";
    sleep(3);
    header("refresh:1; url=lab3-Team9.php");}
      
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>