<?php
$conn = mysqli_connect("localhost", "root", "", "loginit3");
$info = json_decode(file_get_contents('php://input'));

$locname = mysqli_real_escape_string($conn, $info->locname);
$city = mysqli_real_escape_string($conn, $info->city);
$country = mysqli_real_escape_string($conn, $info->country);
$price = mysqli_real_escape_string($conn, $info->price);
$description = mysqli_real_escape_string($conn, $info->description);
$image = mysqli_real_escape_string($conn, $info->image);
$lat = mysqli_real_escape_string($conn, $info->lat);
$long = mysqli_real_escape_string($conn, $info->long);
$query = "INSERT INTO `locationdata`(`name`, `city`, `country`, `description`, `image`, `price`, `latitude`, `longitude`) VALUES ('$locname', '$city', '$country', '$description', '$image', '$price', '$lat' ,'$long' )"; 
if(mysqli_query($conn, $query)) {
echo "Entry Added";
}
else {
echo "Entry Invalid Please check input";
}
?>