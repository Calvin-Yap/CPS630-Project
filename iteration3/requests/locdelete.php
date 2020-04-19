<?php  
$conn = mysqli_connect("localhost", "root", "", "loginit3");
$info = json_decode(file_get_contents('php://input'));

$locname = mysqli_real_escape_string($conn, $info->locname);

$query = "DELETE FROM `locationdata` WHERE ID =$locname"; 
if(mysqli_query($conn, $query)) {
echo "Entry Deleted";
}
else {
echo "Delete Invalid Please check input";
}
?>