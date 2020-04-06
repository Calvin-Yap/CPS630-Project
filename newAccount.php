<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email=$_POST['email'];
$name = $_POST['name'];
$address = $_POST['address'];
$number = $_POST['number'];

if (!empty($username) || !empty($password) || !empty($email) || !empty($name)|| !empty($address)|| !empty($number) ) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cps630";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
     $SELECT = "SELECT Username From userlogin Where Username = ? Limit 1";
     $SELECT2 = "SELECT Email From userlogin Where Email = ? Limit 1";

     $INSERT = ("INSERT Into userlogin ( Username, Password, Email, FullName, Address, Phone) values( ?,?,?, ?, ?, ?)");
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();

     $stmt = $conn->prepare($SELECT2);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();

     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssi", $username,$password, $email, $name, $address, $phone);
if ($stmt === false) {
   echo var_dump($conn->errorInfo());
   echo "fuckasdsadasdasfasf";
} else {
    $stmt->execute();
    echo "New account created sucessfully";
    sleep(3);
    header("refresh:1;login-request.php");}
      
     } else {
      echo "The Current Username or Email is currently in use";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>