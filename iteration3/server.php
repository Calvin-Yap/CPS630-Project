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

if(mysqli_num_rows($result) > 0) {
        $response['status'] = 'loggedadmin';
        $response['user'] = 'admin';
        $response['useruiqueid'] = md5(uniqid());
        $_SESSION['useruiqueid'] = $response['useruiqueid'];
} else{
    $response['status']= 'notadmin';
}

echo json_encode($response);