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
$images [] = new TravelPhoto("images/eiffel.jpg", "Eiffel Tower, Paris, France","The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower.", 0,0);
$images [] = new TravelPhoto("images/colosseum.jpg", "The Colosseum, Rome, Italy","The Colosseum or Coliseum, also known as the Flavian Amphitheatre, is an oval amphitheatre in the centre of the city of Rome, Italy. Built of travertine limestone, tuff, and brick-faced concrete, it was the largest amphitheatre ever built at the time and held 50,000 to 80,000 spectators.  ", 0,0);
$images [] = new TravelPhoto("images/louvre.jpg", "The Louvre, Paris, France","The Louvre, or the Louvre Museum, is the world's largest art museum and a historic monument in Paris, France. A central landmark of the city, it is located on the Right Bank of the Seine in the city's 1st arrondissement.", 0,0);
$images [] = new TravelPhoto("images/ggb.jpg", "The Golden Gate Bridge, California, USA","The Golden Gate Bridge is a suspension bridge spanning the Golden Gate, the one-mile-wide strait connecting San Francisco Bay and the Pacific Ocean.", 0,0);
$images [] = new TravelPhoto("images/disney.jpg", "Disney World, Florida, USA","The Walt Disney World Resort, also called Walt Disney World and Disney World, is an entertainment complex in Bay Lake and Lake Buena Vista, Florida, in the United States, near the cities Orlando and Kissimmee.", 0,0);
$images [] = new TravelPhoto("images/can1.jpg", "CN Tower, Ontario, Canada","The CN Tower is a 553.3 m-high concrete communications and observation tower located in Downtown Toronto, Ontario, Canada. Built on the former Railway Lands, it was completed in 1976. Its name CN originally referred to Canadian National, the railway company that built the tower.", 0,0);
$images [] = new TravelPhoto("images/can2.jpg", "Banff National Park, Alberta, Canada","Banff National Park is Canada's oldest national park and was established in 1885. Located in Rocky Mountains of Alberta, 110–180 kilometres west of Calgary, Banff encompasses 6,641 square kilometres of mountainous terrain, with many glaciers and ice fields, dense coniferous forest, and alpine landscapes.", 0,0);
$images [] = new TravelPhoto("images/usa1.jpg", "Statue of Liberty, New York, USA","The Statue of Liberty is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York, in the United States.", 0,0);
$images [] = new TravelPhoto("images/usa2.jpg", "Grand Canyon, Nevada, USA","Grand Canyon National Park, in Arizona, is home to much of the immense Grand Canyon, with its layered bands of red rock revealing millions of years of geological history. Viewpoints include Mather Point, Yavapai Observation Station and architect Mary Colter’s Lookout Studio and her Desert View Watchtower. Lipan Point, with wide views of the canyon and Colorado River, is a popular, especially at sunrise and sunset.", 0,0);
$images [] = new TravelPhoto("images/br1.jpg", "Christ the Redeemer, Rio De Janeiro, Brazil","Christ the Redeemer, Portuguese Cristo Redentor, colossal statue of Jesus Christ at the summit of Mount Corcovado, Rio de Janeiro, southeastern Brazil. It was completed in 1931 and stands 98 feet (30 metres) tall, its horizontally outstretched arms spanning 92 feet (28 metres). The statue, made of reinforced concrete clad in a mosaic of thousands of triangular soapstone tiles, sits on a square stone pedestal base about 26 feet (8 metres) high, which itself is situated on a deck atop the mountain’s summit. The statue is the largest Art Deco-style sculpture in the world and is one of Rio de Janeiro’s most recognizable landmarks.", 0,0);
$images [] = new TravelPhoto("images/br2.jpg", "Sugarloaf Moutain, Rio De Janeiro, Brazil","Sugarloaf Mountain is a ski mountain located in Carrabassett Valley, Franklin County, Maine. It is the third highest peak in the state, after Mount Katahdin's Baxter and Hamlin peaks. Sugarloaf is flanked to the south by Spaulding Mountain. ", 0,0);
$images [] = new TravelPhoto("images/arg1.jpg", "Perito Moreno Glacier, Santa Cruz Province, Argentina","The Perito Moreno Glacier is a glacier located in the Los Glaciares National Park in southwest Santa Cruz Province, Argentina. It is one of the most important tourist attractions in the Argentinian Patagonia.", 0,0);
$images [] = new TravelPhoto("images/arg2.jpg", "La Boca, Bunenos Aires, Argentina","La Boca is a working-class area with a cluster of attractions near the Riachuelo River. Steakhouses and street artists surround Caminito, a narrow alley flanked by brightly painted zinc shacks that evoke the district’s early immigrant days. A cauldron of noise on match days, La Bombonera is the home ground of Boca Juniors soccer team. Modern art museum Fundación Proa has temporary exhibits and views of the old docks.", 0,0);
$images [] = new TravelPhoto("images/pan1.jpg", "Gatun Lake, Colon Panama","Gatun Lake is a large freshwater artificial lake to the south of Colón, Panama. It forms a major part of the Panama Canal, carrying ships for 33 km of their transit across the Isthmus of Panama. The lake was created between 1907 and 1913 by the building of the Gatun Dam across the Chagres River.", 0,0);
$images [] = new TravelPhoto("images/pan2.jpg", "San Blas Island, Panama","The San Blas Islands of Panama is an archipelago comprising approximately 365 islands and cays, of which 49 are inhabited. They lie off the north coast of the Isthmus of Panama, east of the Panama Canal. A part of the comarca Guna Yala along the Caribbean coast of Panama is home to the Kuna people.", 0,0);
$images [] = new TravelPhoto("images/cos1.jpg", "Areal Volcano, Alajuela, Costa Rica","Arenal Volcano is an active andesitic stratovolcano in north-western Costa Rica around 90 km northwest of San José, in the province of Alajuela, canton of San Carlos, and district of La Fortuna. The Arenal volcano measures at least 1,633 metres high. It is conically shaped with a crater 140 metres in diameter.", 0,0);
$images [] = new TravelPhoto("images/cos2.jpg", "Parque Nacional Manuel Antonio, Puntarenas Province, Costa Rica","Manuel Antonio National Park, on Costa Rica’s central Pacific coast, encompasses rugged rainforest, white-sand beaches and coral reefs. It’s renowned for its vast diversity of tropical plants and wildlife, from three-toed sloths and endangered white-faced capuchin monkeys to hundreds of bird species. The park’s roughly 680 hectares are crossed with hiking trails, which meander from the coast up into the mountains.", 0,0);
$images [] = new TravelPhoto("images/cn1.jpg", "Great Wall of China, Beijing, China","The Great Wall of China is the collective name of a series of fortification systems generally built across the historical northern borders of China to protect and consolidate territories of Chinese states and empires against various nomadic groups of the steppe and their polities.", 0,0);
$images [] = new TravelPhoto("images/cn2.jpg", "The Forbidden City, Beijing, China","The Forbidden City is a palace complex in central Beijing, China. It houses the Palace Museum, and was the former Chinese imperial palace from the Ming dynasty to the end of the Qing dynasty.", 0,0);
$images [] = new TravelPhoto("images/kr1.jpg", "N Seoul Tower, Seoul, South Korea","The N Seoul Tower, officially the YTN Seoul Tower and commonly known as the Namsan Tower or Seoul Tower, is a communication and observation tower located on Namsan Mountain in central Seoul, South Korea. At 236 metres, it marks the second highest point in Seoul.", 0,0);
$images [] = new TravelPhoto("images/kr2.jpg", "Gyeongbokgung Palace, Seoul, Korea","Gyeongbokgung, also known as Gyeongbokgung Palace or Gyeongbok Palace, was the main royal palace of the Joseon dynasty. Built in 1395, it is located in northern Seoul, South Korea.", 0,0);
$images [] = new TravelPhoto("images/af1.jpg", "Cape of Good Hope, Headland, South Africa","The Cape of Good Hope is a rocky headland on the Atlantic coast of the Cape Peninsula in South Africa. A common misconception is that the Cape of Good Hope is the southern tip of Africa. This misconception was based on the misbelief that the Cape was the dividing point between the Atlantic and Indian Oceans.", 0,0);
$images [] = new TravelPhoto("images/af2.jpg", "Kruger National Park, South Africa","Kruger National Park, in northeastern South Africa, is one of Africa’s largest game reserves. Its high density of wild animals includes the Big 5: lions, leopards, rhinos, elephants and buffalos. Hundreds of other mammals make their home here, as do diverse bird species such as vultures, eagles and storks. Mountains, bush plains and tropical forests are all part of the landscape.", 0,0);
$images [] = new TravelPhoto("images/ni2.jpg", "Zuma Rock, Niger State, Nigeria,","Zuma Rock is a large monolith, an igneous intrusion composed of gabbro and granodiorite, that is located in Niger State, Nigeria. It rises spectacularly immediately west of Nigeria's capital Abuja, along the main road from Abuja to Kaduna off Madala, and is sometimes referred to as the Gateway to Abuja from Suleja", 0,0);
$images [] = new TravelPhoto("images/ni1.jpg", "Yankari National Park, Yankari, Nigeria","Yankari National Park is a large wildlife park located in the south-central part of Bauchi State, in northeastern Nigeria. It covers an area of about 2,244 square kilometres and is home to several natural warm water springs, as well as a wide variety of flora and fauna.", 0,0);

$images [] = new TravelPhoto("images/1.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/11.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/2.jpg", "The Colosseum, Rome, Italy,","  ", 0,0);
$images [] = new TravelPhoto("images/22.jpg", "The Colosseum, Rome, Italy","  ", 0,0);
$images [] = new TravelPhoto("images/3.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/33.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/4.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/44.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/5.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/55.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/6.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/66.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/7.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/77.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/8.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/88.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/9.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/99.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/10.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1010.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/11.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1111.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/12.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1212.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/13.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1313.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/14.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1414.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/15.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1515.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/16.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1616.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/17.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1717.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/18.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1818.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/19.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/1919.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/20.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/2020.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/21.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/2121.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/22.jpeg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/2222.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/23.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/2323.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/24.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/2424.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/25.jpg", "Eiffel Tower, Paris, France","  ", 0,0);
$images [] = new TravelPhoto("images/2525.jpg", "Eiffel Tower, Paris, France","  ", 0,0);





?>