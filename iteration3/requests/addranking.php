<?php
$conn = mysqli_connect("localhost", "root", "", "loginit3");
$info = json_decode(file_get_contents('php://input'));

$username = mysqli_real_escape_string($conn, $info->username);


$query = "INSERT INTO `rankings`(`username`) VALUES ('$username')"; 
if(mysqli_query($conn, $query)) {
echo "Entry Added";
}
else {
echo "Entry Invalid Please check input";
}
?>