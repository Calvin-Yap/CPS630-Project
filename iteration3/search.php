<?php 
  $conn = new mysqli("localhost","root", "", "loginit3");
  $result = $conn->query("SELECT * FROM locationdata");
  $outp = array();
  while( $rs = $result->fetch_array(MYSQLI_ASSOC)) {
		$outp[] = $rs;
  }
	echo json_encode($outp);	
?>