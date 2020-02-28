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
$images [] = new TravelPhoto("images/eiffel.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/colosseum.jpg", "The Colosseum, Rome, Italy","  ", 0,0);
$images [] = new TravelPhoto("images/louvre.jpg", "The Louvre, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/ggb.jpg", "The Golden Gate Bridge, California, USA","  ", 0,0);
$images [] = new TravelPhoto("images/disney.jpg", "Disney World, Florida, USA","  ", 0,0);
$images [] = new TravelPhoto("images/can1.jpg", "CN Tower, Ontario, Canada","  ", 0,0);
$images [] = new TravelPhoto("images/can2.jpg", "Banff National Park, Alberta, Canada","  ", 0,0);
$images [] = new TravelPhoto("images/usa1.jpg", "Statue of Liberty, New York, USA","  ", 0,0);
$images [] = new TravelPhoto("images/usa2.jpg", "Grand Canyon, Nevada, USA","  ", 0,0);
$images [] = new TravelPhoto("images/br1.jpg", "Christ the Redeemer, Rio De Janeiro, Brazil","  ", 0,0);
$images [] = new TravelPhoto("images/br2.jpg", "Sugarloaf Moutain, Rio De Janeiro, Brazil","  ", 0,0);
$images [] = new TravelPhoto("images/arg1.jpg", "Perito Moreno Glacier, Santa Cruz Province, Argentina","  ", 0,0);
$images [] = new TravelPhoto("images/arg2.jpg", "La Boca, Bunenos Aires, Argentina","  ", 0,0);
$images [] = new TravelPhoto("images/pan1.jpg", "Gatun Lake, Colon Panama","  ", 0,0);
$images [] = new TravelPhoto("images/pan2.jpg", "San Blas Island, Panama","  ", 0,0);
$images [] = new TravelPhoto("images/cos1.jpg", "Areal Volcano, Alajuela, Costa Rica","  ", 0,0);
$images [] = new TravelPhoto("images/cos2.jpg", "Parque Nacional Manuel Antonio, Puntarenas Province, Costa Rica","  ", 0,0);
$images [] = new TravelPhoto("images/cn1.jpg", "Great Wall of China, Beijing, China","  ", 0,0);
$images [] = new TravelPhoto("images/cn2.jpg", "The Forbidden City, Beijing, China","  ", 0,0);
$images [] = new TravelPhoto("images/kr1.jpg", "N Seoul Tower, Seoul, South Korea","  ", 0,0);
$images [] = new TravelPhoto("images/kr2.jpg", "Gyeongbokgung Palace, Seoul, Korea","  ", 0,0);
$images [] = new TravelPhoto("images/af1.jpg", "Cape of Good Hope, Headland, South Africa","  ", 0,0);
$images [] = new TravelPhoto("images/af2.jpg", "Kruger National Park, South Africa","  ", 0,0);
$images [] = new TravelPhoto("images/ni2.jpg", "Zuma Rock, Niger State, Nigeria,","  ", 0,0);
$images [] = new TravelPhoto("images/ni1.jpg", "Yankari National Park, Yankari, Nigeria","  ", 0,0);

?>