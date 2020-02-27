<!DOCTYPE html>
<html>
<head>
  <title>Assignment 1 Iteration 1</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="about.css">
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
include('travel-photo-class.php');

$continents = array("North America","South America","Central America","Asia","Africa");

$countries = array();
$countries["CA"] = "Canada";
$countries["US"] = "USA";
$countries["BR"] = "Brazil";
$countries["AR"] = "Argentina";
$countries["PA"] = "Panama";
$countries["CR"] = "Costa Rica";
$countries["CN"] = "China";
$countries["KR"] = "Korea";
$countries["SA"] = "South Africa";
$countries["NI"] = "Nigeria";




$images = array();
$images [] = new TravelPhoto("images/eiffel.jpg", "Eiffel Tower","  ", 0,0);
$images [] = new TravelPhoto("images/colosseum.jpg", "The Colosseum","  ", 0,0);
$images [] = new TravelPhoto("images/louvre.jpg", "The Louvre","  ", 0,0);
$images [] = new TravelPhoto("images/ggb.jpg", "The Golden Gate Bridge","  ", 0,0);
$images [] = new TravelPhoto("images/disney.jpg", "Dinsey World","  ", 0,0);
$images [] = new TravelPhoto("images/can1.jpg", "CN Tower","  ", 0,0);
$images [] = new TravelPhoto("images/can2.jpg", "Banff National Park","  ", 0,0);
$images [] = new TravelPhoto("images/usa1.jpg", "Statue of Liberty","  ", 0,0);
$images [] = new TravelPhoto("images/usa2.jpg", "Grand Canyon","  ", 0,0);
$images [] = new TravelPhoto("images/br1.jpg", "Christ the Redeemer","  ", 0,0);
$images [] = new TravelPhoto("images/br2.jpg", "Sugarloaf Moutain","  ", 0,0);
$images [] = new TravelPhoto("images/arg1.jpg", "Perito Moreno Glacier","  ", 0,0);
$images [] = new TravelPhoto("images/arg2.jpg", "La Boca","  ", 0,0);
$images [] = new TravelPhoto("images/pan1.jpg", "Gatun Lake","  ", 0,0);
$images [] = new TravelPhoto("images/pan2.jpg", "San Blas Island","  ", 0,0);
$images [] = new TravelPhoto("images/cos1.jpg", "Areal Volcano","  ", 0,0);
$images [] = new TravelPhoto("images/cos2.jpg", "Parque Nacional Manuel Antonio","  ", 0,0);
$images [] = new TravelPhoto("images/cn1.jpg", "Great Wall of China","  ", 0,0);
$images [] = new TravelPhoto("images/cn2.jpg", "The Forbidden City","  ", 0,0);
$images [] = new TravelPhoto("images/kr1.jpg", "N Seoul Tower","  ", 0,0);
$images [] = new TravelPhoto("images/kr2.jpg", "Gyeongbokgung Palace","  ", 0,0);
$images [] = new TravelPhoto("images/af1.jpg", "Cape of Good Hope","  ", 0,0);
$images [] = new TravelPhoto("images/af2.jpg", "kruger National Park","  ", 0,0);
$images [] = new TravelPhoto("images/ni2.jpg", "Zuma Rock","  ", 0,0);
$images [] = new TravelPhoto("images/ni1.jpg", "Yankari National Park","  ", 0,0);

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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <a class="nav-link" href="#">Shopping Cart</a>
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


<div class="container-fluid"> 
<div class="row">
<div class="col-2"></div>
<div class="col-8">
<caption>Continents</caption>
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
<caption>Popular Places </caption>
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
<label class="read" id="nameP" >Eiffel Tower</label>

</div> 

</div>
<div class="row">
<div class="col-12">
<div id="container">
  <div class="photobanner">
<img  class="first" src="images/eiffel.jpg">
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
  });
$('#changeImage1').change(function(){
  $('#image')[0].src = imagesArr[this.value];
  document.getElementById('nameP').innerHTML =namesArr[this.value];
});

</script>
<?php echo $images[0]->__getfile();?>

</div>
</div>






</body>
</html>
