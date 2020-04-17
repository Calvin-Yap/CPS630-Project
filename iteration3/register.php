<?php
$conn = mysqli_connect("localhost", "root", "", "loginit3");
$info = json_decode(file_get_contents('php://input'), true);
if(count($info) > 0) {
$username = mysqli_real_escape_string($conn, $info->username);
$password = mysqli_real_escape_string($conn, $info->password);
$email = mysqli_real_escape_string($conn, $info->email);
$fname = mysqli_real_escape_string($conn, $info->fname);
$lname = mysqli_real_escape_string($conn, $info->lname);
$address = mysqli_real_escape_string($conn, $info->address);
$phone = mysqli_real_escape_string($conn, $info->phone);
$query = "INSERT INTO users(username, password, email, fname, lname, address, phone ) VALUES ('$username', '$password', '$email', '$fname', '$lname', '$address', '$phone')"; 
if(mysqli_query($conn, $query)) {
echo "Insert Data Successfully";
}
else {
echo "Failed";
}
}
?>