<!DOCTYPE html>
<html>
<head>
  <title>Assignment 1 Iteration 1</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="about.css">
  <link rel="stylesheet" type="text/css" href="home.css">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
 $(document).ready(function(){
    $(".fade1").hide();
	$(".cap").hide();

    $("#fade").change(function(){
		$(".cap").fadeIn();
        $(".fade1").fadeIn();
		$(".cap2").fadeOut();
		$(".fade2").fadeOut();
    });
});
 </script>
 <script>
 $(document).ready(function(){
    $(".fade2").hide();
	$(".cap2").hide();
    $(".fade1").change(function(){
			$(".cap2").fadeIn();
        $(".fade2").fadeIn();
    });
});
 </script>
<?php
include('travel-data.php');

?>

  </head>
<!-- overlay for about us and contact us-->
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h1 class="navbar-brand" >Plan Your Travel</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

<br>
<div class="container-fluid"> 
<div class="row">
<div class="col-2"></div>
<div class="col-8">
<label class="captiontxt">Continents</label>
 <select name="continents" id="fade"  >
			<option value ="0">Select a Continent</option>
            <option value ="p1">North America</option>
            <option value ="p2">South America</option>
            <option value ="p3">Central America</option>
            <option value ="p4">Asia</option>
			<option value ="p5">Africa</option>
</select>



<label class="cap">Countries</label>
<select id = "country" name="country" class="fade1">
<script>
	 let countries = {
        "p1": [
		{
		value: "Country",
		desc:"Select a Country"
		},{
          value: "Canada",
          desc: "Canada"
        },{
          value: "USA",
          desc: "USA"
        }],
		 "p2": [{
		value: "Country",
		desc:"Select a Country"
		},{
          value: "Brazil",
          desc: "Brazil"
        }, {
          value: "Argentina",
          desc: "Argentina"
        }],
        "p3": [{
		value: "Country",
		desc:"Select a Country"
		},{
          value: "Panama",
          desc: "Panama"
        }, {
          value: "Rica",
          desc: "Coasta Rica"
        }],
        "p4": [{
		value: "Country",
		desc:"Select a Country"
		},{
          value: "China",
          desc: "China"
        }, {
          value: "Korea",
          desc: "Korea"
        }],
        "p5": [{
		value: "Country",
		desc:"Select a Country"
		},{
          value: "South Africa",
          desc: "South Africa"
        }, {
          value: "Nigeria",
          desc: "Nigeria"
        }]
      }
		document.getElementsByName('continents')[0].addEventListener('change', function(e) {
        document.getElementsByName('country')[0].innerHTML = countries[this.value].reduce((acc, elem) => `${acc}<option value="${elem.value}">${elem.desc}</option>`, "");
	  });
 </script>
</select>
<label class="cap2">Attractions</label>
 <select id = "changeImage" name="attraction" class="fade2">
<script>
	 let attractions = {
        "Canada": [
		{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "5",
          desc: "CN Tower"
        }, {
          value: "6",
          desc: "Banff National Park"
        }],
		 "USA": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "7",
          desc: "Statue of Liberty"
        }, {
          value: "8",
          desc: "Grand Canyon"
        }],
        "Brazil": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "9",
          desc: "Christ the Redeemer"
        }, {
          value: "10",
          desc: "Sugarloaf Moutain"
        }],
        "Argentina": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "11",
          desc: "Perito Moreno Glacier"
        }, {
          value: "12",
          desc: "La Boca"
        }],
        "Panama": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "13",
          desc: "Gatun Lake"
        }, {
          value: "14",
          desc: "San Blas Island"
        }],
		"Rica": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "15",
          desc: "Areal Volcano"
        }, {
          value: "16",
          desc: "Parque Nacional Manuel Antonio"
        }],
        "China": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "17",
          desc: "Great Wall of China"
        }, {
          value: "18",
          desc: "Forbidden City"
        }],
        "Korea": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "19",
          desc: "N Seoul Tower"
        }, {
          value: "20",
          desc: "Gyeongbokgung Palace"
        }],
        "South Africa": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "21",
          desc: "Cape of Good Hope"
        }, {
          value: "22",
          desc: "Kruger National Park"
        }],
        "Nigeria": [{
		value: "0",
		desc:"Select an Attraction"
		},{
          value: "23",
          desc: "Zuma Rock"
        }, {
          value: "24",
          desc: "Yankari National Park"
        }]
		}
		document.getElementsByName('country')[0].addEventListener('change', function(e) {
        document.getElementsByName('attraction')[0].innerHTML = attractions[this.value].reduce((acc, elem) => `${acc}<option value="${elem.value}">${elem.desc}</option>`, "");

	 });
 </script>
 </select>
 <br>
<label class="captiontxt">Popular Places </label>
 <select id="changeImage1">
            <option value ="0">Popular Places</option>
            <option value ="0" selected>Eiffel Tower, Paris, France</option>
            <option value ="1">Colosseum, Rome, Italy</option>
            <option value ="2">Louvre Museum, Paris, France</option>
            <option value ="3">Golden Gate Bridge, California, USA</option>
			<option value ="4">Walt Disney World, Florida, USA </option>
</select>
<br>
<div class="container-fluid">
<div class="row>
<div class="col">
<img id="image" class="img" src="images/eiffel.jpg">
<label class="read" id="nameP" >Eiffel Tower, Paris, France</label>
<div class="submit">
<form action="readmore.php" method="get">
<input type="hidden" id="setThis" name="setThis" value="Eiffel Tower, Paris, France">
<input type="hidden" id="index" name="index" value="0">
<input  class="buttonSub" type="submit" value="Read More">
</form>
</div>
</div> 

</div>
<div class="row">
<div class="col-12">
<div id="container">
  <div class="photobanner">
<a href="readmore.php">
  <img  class="first" src="images/eiffel.jpg">
</a>
<img  class="smallimg" src="images/colosseum.jpg">
<img  class="smallimg" src="images/ggb.jpg">
<img  class="smallimg" src="images/disney.jpg">
<img  class="smallimg" src="images/louvre.jpg">

<img  class="smallimg" src="images/can1.jpg">
<img  class="smallimg" src="images/can2.jpg">

<img  class="smallimg" src="images/usa1.jpg">
<img  class="smallimg" src="images/usa2.jpg">

<img  class="smallimg" src="images/br1.jpg">
<img  class="smallimg" src="images/br2.jpg">

<img  class="smallimg" src="images/arg1.jpg">
<img  class="smallimg" src="images/arg2.jpg">

<img  class="smallimg" src="images/pan1.jpg">
<img  class="smallimg" src="images/pan2.jpg">

<img  class="smallimg" src="images/cos1.jpg">
<img  class="smallimg" src="images/cos2.jpg">

<img  class="smallimg" src="images/cn1.jpg">
<img  class="smallimg" src="images/cn2.jpg">

<img  class="smallimg" src="images/kr1.jpg">
<img  class="smallimg" src="images/kr2.jpg">

<img  class="smallimg" src="images/af1.jpg">
<img  class="smallimg" src="images/af2.jpg">

<img  class="smallimg" src="images/ni1.jpg">
<img  class="smallimg" src="images/ni2.jpg">

  </div>
</div>
<div class="col-2"></div>
</div>
</div>
<br>

<div class="row">

<div class="col-4">
<div class="card" style="width: 18rem; margin-left:30px;">
  <img style="height:180px;"class="card-img-top" src="https://cdn.cnn.com/cnnnext/dam/assets/190906095526-american-airlines-mechanic-faces-sabotage-charge-marsh-nr-vpx-00000225-exlarge-169.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Explore The World</h5>
    <p class="card-text">Flights happen daily, with many flexible flying times and accomadations for all.</p>
    <a href="shoppingCart.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-4">
<div class="card" style="width: 18rem;margin-left:30px;">
  <img style="height:180px;" class="card-img-top" src="https://www.ihomes.io/wp-content/uploads/2016/03/Icon-Affordable.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Travel Affordably</h5>
    <p class="card-text">We carry many flexible plans for couples or families looking for fun. Book today and save!</p>
    <a href="shoppingCart.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-4">
<div class="card" style="width: 18rem;margin-left:30px;">
  <img style="height:180px; width:auto;" class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">New Places Waiting</h5>
    <p class="card-text">Our team of expert travelers are looking for new attractions. New travel plans are created weekly.</p>
    <a href="shoppingCart.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>
<script>

var imagesArr =[
	"images/eiffel.jpg",
	"images/colosseum.jpg",
	"images/louvre.jpg",
	"images/ggb.jpg",
	"images/disney.jpg",
	"images/can1.jpg",
	"images/can2.jpg",
	"images/usa1.jpg",
	"images/usa2.jpg",	
	"images/br1.jpg",
	"images/br2.jpg",	
	"images/arg1.jpg",
	"images/arg2.jpg",
	"images/pan1.jpg",
	"images/pan2.jpg",	
	"images/cos1.jpg",
	"images/cos2.jpg",	
	"images/cn1.jpg",
	"images/cn2.jpg",	
	"images/kr1.jpg",
	"images/kr2.jpg",	
	"images/af1.jpg",
	"images/af2.jpg",	
	"images/ni1.jpg",
	"images/ni2.jpg"	
	];
var namesArr =[
	"<?php echo $images[0]->__getTitle();?>",
	"<?php echo $images[1]->__getTitle();?>",
	"<?php echo $images[2]->__getTitle();?>",
	"<?php echo $images[3]->__getTitle();?>",
	"<?php echo $images[4]->__getTitle();?>",
	"<?php echo $images[5]->__getTitle();?>",
	"<?php echo $images[6]->__getTitle();?>",
	"<?php echo $images[7]->__getTitle();?>",
	"<?php echo $images[8]->__getTitle();?>",
	"<?php echo $images[9]->__getTitle();?>",
	"<?php echo $images[10]->__getTitle();?>",
	"<?php echo $images[11]->__getTitle();?>",
	"<?php echo $images[12]->__getTitle();?>",
	"<?php echo $images[13]->__getTitle();?>",
	"<?php echo $images[14]->__getTitle();?>",
	"<?php echo $images[15]->__getTitle();?>",
	"<?php echo $images[16]->__getTitle();?>",
	"<?php echo $images[17]->__getTitle();?>",
	"<?php echo $images[18]->__getTitle();?>",
	"<?php echo $images[19]->__getTitle();?>",
	"<?php echo $images[20]->__getTitle();?>",
	"<?php echo $images[21]->__getTitle();?>",
	"<?php echo $images[22]->__getTitle();?>",
	"<?php echo $images[23]->__getTitle();?>",
	"<?php echo $images[24]->__getTitle();?>",
	];
$('#changeImage').change(function(){
  $('#image')[0].src = imagesArr[this.value];
    document.getElementById('nameP').innerHTML =namesArr[this.value];
	document.getElementById('setThis').value =namesArr[this.value];
    document.getElementById('index').value =this.value;

  });
$('#changeImage1').change(function(){
  $('#image')[0].src = imagesArr[this.value];
  document.getElementById('nameP').innerHTML =namesArr[this.value];
  document.getElementById('setThis').value =namesArr[this.value];
  document.getElementById('index').value =this.value;

});

</script>
</div>
</div>
</div>


<br>

<footer class="footer">
<p class="foottext"> Plan Your Travel Inc. 2020 &copy; <p>
</footer>




</body>
</html>