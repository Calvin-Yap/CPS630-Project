<?php
$conn = mysqli_connect("localhost", "root", "", "loginit3");
$info = json_decode(file_get_contents('php://input'));

$username1 = mysqli_real_escape_string($conn, $info->username1);
$password1 = mysqli_real_escape_string($conn, $info->password1);
$email = mysqli_real_escape_string($conn, $info->email);
$fname = mysqli_real_escape_string($conn, $info->fname);
$lname = mysqli_real_escape_string($conn, $info->lname);
$address = mysqli_real_escape_string($conn, $info->address);
$phone = mysqli_real_escape_string($conn, $info->phone);
$query = "INSERT INTO `users`(`username`, `password`, `email`, `fname`, `lname`, `address`, `phone`) VALUES ('$username1', '$password1', '$email', '$fname', '$lname', '$address', '$phone')"; 
if(mysqli_query($conn, $query)) {
echo "Account Created";
}
else {
echo "Please Change Username or Email as it has already been used";
}
?>