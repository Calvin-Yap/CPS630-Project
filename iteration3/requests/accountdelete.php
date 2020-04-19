<?php  
$conn = mysqli_connect("localhost", "root", "", "loginit3");
$info = json_decode(file_get_contents('php://input'));

$userID = mysqli_real_escape_string($conn, $info->userID);

$query = "DELETE FROM `users` WHERE ID =$userID"; 
if(mysqli_query($conn, $query)) {
echo "Entry Deleted";
}
else {
echo "Delete Invalid Please check input";
}
?>