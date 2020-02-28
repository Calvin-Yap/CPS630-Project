<html>
<body>
 <?php
 
include('travel-data.php');
 $Place=$_GET['setThis']; 
 $Index =$_GET['index'];
 
 if($Index == 0){
	$img1= $images[25];
	$img2= $images[26];

 }elseif( $Index == 1){
		$img1= $images[27];
	$img2= $images[28]; 
 }elseif( $Index == 2){
	$img1= $images[29];
	$img2= $images[30];	 
 }elseif( $Index == 3){
	$img1= $images[31];
	$img2= $images[32];
 }elseif( $Index == 4){
	$img1= $images[33];
	$img2= $images[34];
 }elseif( $Index == 5){
	$img1= $images[35];
	$img2= $images[36];
 }elseif( $Index == 6){
	$img1= $images[37];
	$img2= $images[38];
 }elseif( $Index == 7){
	$img1= $images[39];
	$img2= $images[40];
 }elseif( $Index == 8){
	$img1= $images[41];
	$img2= $images[42];
 }elseif( $Index == 9){
	$img1= $images[43];
	$img2= $images[44];
 }elseif( $Index == 10){
	$img1= $images[45];
	$img2= $images[46];
 }elseif( $Index == 11){
	$img1= $images[47];
	$img2= $images[48];
 }elseif( $Index == 12){
	$img1= $images[49];
	$img2= $images[50];
 }elseif( $Index == 13){
	$img1= $images[51];
	$img2= $images[52];
 }elseif( $Index == 14){
	$img1= $images[53];
	$img2= $images[54];
 }elseif( $Index == 15){
	$img1= $images[55];
	$img2= $images[56];
 }elseif( $Index == 16){
	$img1= $images[57];
	$img2= $images[58];
 }elseif( $Index == 17){
	$img1= $images[59];
	$img2= $images[60];
 }elseif( $Index == 18){
	$img1= $images[61];
	$img2= $images[62];
 }elseif( $Index == 19){
	$img1= $images[63];
	$img2= $images[64];
 }elseif( $Index == 20){
	$img1= $images[65];
	$img2= $images[66];
 }elseif( $Index == 21){
	$img1= $images[67];
	$img2= $images[68];
 }elseif( $Index == 22){
	$img1= $images[69];
	$img2= $images[70];
 }elseif( $Index == 23){
	$img1= $images[71];
	$img2= $images[72];
 }else{
	$img1= $images[73];
	$img2= $images[74];
 }
?>
Welcome to <?php $Place ?>

<img src="<?php echo $img1->__getFile();?>" >




</body>
</html>