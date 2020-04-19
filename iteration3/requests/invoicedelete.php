<?php  
$conn = mysqli_connect("localhost", "root", "", "loginit3");
$info = json_decode(file_get_contents('php://input'));

$invoiceID = mysqli_real_escape_string($conn, $info->invoiceID);

$query = "DELETE FROM `invoices` WHERE ID =$invoiceID"; 
if(mysqli_query($conn, $query)) {
echo "Entry Deleted";
}
else {
echo "Delete Invalid Please check input";
}
?>