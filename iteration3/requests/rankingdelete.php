<?php  
$conn = mysqli_connect("localhost", "root", "", "loginit3");
$info = json_decode(file_get_contents('php://input'));

$rankingID = mysqli_real_escape_string($conn, $info->rankingID);

$query = "DELETE FROM `rankings` WHERE ID =$rankingID"; 
if(mysqli_query($conn, $query)) {
echo "Entry Deleted";
}
else {
echo "Delete Invalid Please check input";
}
?>