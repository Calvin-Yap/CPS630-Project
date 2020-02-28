<?php
$id = $_POST['id'];
$conn = mysqli_connect("localhost", "root", "", "cps630");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM travelPhoto WHERE id='$id'";

if(mysqli_query($conn,$sql))
		header("refresh:1; url=lab3-Team9.php");
else
		echo "Not Deleted";
		

?>