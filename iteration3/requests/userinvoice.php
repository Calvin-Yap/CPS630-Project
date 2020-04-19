<?php  
  $conn= new mysqli("localhost","root", "", "loginit3");
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $result = $conn->query("SELECT * FROM `invoices` WHERE `username`= '$username'");
  $outp = array();
  while( $rs = $result->fetch_array(MYSQLI_ASSOC)) {
		$outp[] = $rs;
  }
	echo json_encode($outp);	

?>



