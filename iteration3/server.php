<?php
header('Content-Type: application/json');
if(!isset($_POST)) die();

session_start();

$response = [];

$con = mysqli_connect('localhost', 'root', '', 'loginit3');

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";

$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0 && $username=="admin") {
        $response['status'] = 'loggedadmin';
        $response['user'] = $username;
        $response['id'] = md5(uniqid());
        $_SESSION['id'] = $response['id'];
        $_SESSION['user'] = $username;
} else{
    $response['status']= 'notadmin';
}

echo json_encode($response);
