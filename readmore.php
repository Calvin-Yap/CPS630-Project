<!DOCTYPE html>
<html>
<head>
<?php
   /*
session_start();
if ( isset( $_SESSION['user_id'] ) ) 
 {
  } 
   else 
  {
    header("Location: http://localhost:8080/login-request.php");
 }
 */
?>
 <title>Assignment 1 Iteration 1</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="about.css">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <?php
include('travel-data.php');
 $Place=$_GET['setThis']; 
 $Index =$_GET['index'];
 
 if($Index == 0){
	$img1= $images[25];
	$img2= $images[26];
	$desc = $images[0]->__getDes();
 }elseif( $Index == 1){
	$img1= $images[27];
	$img2= $images[28]; 
	$desc = $images[1]->__getDes();
}elseif( $Index == 2){
	$img1= $images[29];
	$img2= $images[30];	
	$desc = $images[2]->__getDes();
	
 }elseif( $Index == 3){
	$img1= $images[31];
	$img2= $images[32];
	$desc = $images[3]->__getDes();

 }elseif( $Index == 4){
	$img1= $images[33];
	$img2= $images[34];
	$desc = $images[4]->__getDes();

 }elseif( $Index == 5){
	$img1= $images[35];
	$img2= $images[36];
	$desc = $images[5]->__getDes();

 }elseif( $Index == 6){
	$img1= $images[37];
	$img2= $images[38];
	$desc = $images[6]->__getDes();

 }elseif( $Index == 7){
	$img1= $images[39];
	$img2= $images[40];
	$desc = $images[7]->__getDes();

 }elseif( $Index == 8){
	$img1= $images[41];
	$img2= $images[42];
	$desc = $images[8]->__getDes();

 }elseif( $Index == 9){
	$img1= $images[43];
	$img2= $images[44];
	$desc = $images[9]->__getDes();

 }elseif( $Index == 10){
	$img1= $images[45];
	$img2= $images[46];
	$desc = $images[10]->__getDes();

 }elseif( $Index == 11){
	$img1= $images[47];
	$img2= $images[48];
	$desc = $images[11]->__getDes();

 }elseif( $Index == 12){
	$img1= $images[49];
	$img2= $images[50];
	$desc = $images[12]->__getDes();

 }elseif( $Index == 13){
	$img1= $images[51];
	$img2= $images[52];
	$desc = $images[13]->__getDes();

 }elseif( $Index == 14){
	$img1= $images[53];
	$img2= $images[54];
	$desc = $images[14]->__getDes();

 }elseif( $Index == 15){
	$img1= $images[55];
	$img2= $images[56];
	$desc = $images[15]->__getDes();

 }elseif( $Index == 16){
	$img1= $images[57];
	$img2= $images[58];
	$desc = $images[16]->__getDes();

 }elseif( $Index == 17){
	$img1= $images[59];
	$img2= $images[60];
	$desc = $images[17]->__getDes();

 }elseif( $Index == 18){
	$img1= $images[61];
	$img2= $images[62];
	$desc = $images[18]->__getDes();

 }elseif( $Index == 19){
	$img1= $images[63];
	$img2= $images[64];
	$desc = $images[19]->__getDes();

 }elseif( $Index == 20){
	$img1= $images[65];
	$img2= $images[66];
	$desc = $images[20]->__getDes();

 }elseif( $Index == 21){
	$img1= $images[67];
	$img2= $images[68];
	$desc = $images[21]->__getDes();

 }elseif( $Index == 22){
	$img1= $images[69];
	$img2= $images[70];
	$desc = $images[22]->__getDes();

 }elseif( $Index == 23){
	$img1= $images[71];
	$img2= $images[72];
	$desc = $images[23]->__getDes();

 }else{
	$img1= $images[73];
	$img2= $images[74];
	$desc = $images[24]->__getDes();

 }
?>
</head>
<body>


  <div id="overlay" onclick="off()">
    <div class="square">
      <p><span style="font-size:25px;">About Us</span></p>
      <p>
        Calvin Yap
        <br>Computer Science Student at Ryerson
      </p>
      <p>
        Nicky Dam
        <br>Computer Science Student at Ryerson
      </p>
      <p>
        Anderson Luan
        <br>Computer Science Student at Ryerson
      </p>
      </div>
    </div>


  <div id="overlayContact" onclick="offContact()">
    <div class="square">
      <p><span style="font-size:25px;">Contact Us</span></p>
      <p>
        Calvin Yap
        <br>calvin.yap@ryerson.ca
      </p>
      <p>
        Nicky Dam
        <br>t1dam@ryerson.ca
      </p>
      <p>
        Anderson Luan
        <br>email
      </p>
      </div>
    </div>
  </div>
<script>
  function on() {
    document.getElementById("overlay").style.display = "block";
  }
  function off() {
    document.getElementById("overlay").style.display = "none";
  }
  function onContact() {
    document.getElementById("overlayContact").style.display = "block";
  }
  function offContact() {
    document.getElementById("overlayContact").style.display = "none";
  }
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1 class="navbar-brand" >Plan Your Travel</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="on()" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="onContact()" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shoppingCart.php">Shopping Cart</a>
      </li>
    </ul>
  </div>
</nav>
<style>
.title{
	text-align:center;
	font-size:300%;
	padding:15x;
}
.imgr{
	width:100%;
	height:auto;
}
.text{
	font-size:100%;
}
</style>
<h1 class= "title">Welcome to <?php echo $Place ?><h1>

<div class="container-fluid">
<div class="row">
<div class="col-3">
<img class="imgr" src="<?php echo $img1->__getFile();?>" >
</div>
<div class="col-3">
<img class="imgr" src="<?php echo $img2->__getFile();?>" >
</div>
<div class="col-6">
<p class="text">"<?php echo $desc ?>"</p>
<a  href="shoppingCart.php">Shopping Cart</a>
</div>
</div>
<hr>
<br>
<div class="row">
<div class="col-4">
<h1>Name: Robert Smith</h1>
<h1>Rating: ⭐⭐⭐⭐⭐</h1>
</div>
<div class="col-8">
<p>This attraction was incredibly beautiful, I would love to go to <?php echo $Place ?> again!</p>
</div>

</div>
<br>
<br>
<div class="row">
<div class="col-4">
<h1>Name: Alex Fu</h1>
<h1>Rating: ⭐⭐⭐</h1>
</div>
<div class="col-8">
<p>This place is trash! Overpriced! Will not be bringing my 6 kids here again! I hate <?php echo $Place ?></p>
</div>

</div>
</div>


</body>
</html>