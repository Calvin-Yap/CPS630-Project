-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 12:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cps630`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Name` varchar(100) NOT NULL,
  `Price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Username` varchar(100) NOT NULL,
  `Review` varchar(1000) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `travelphoto`
--

CREATE TABLE `travelphoto` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `filename` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelphoto`
--

INSERT INTO `travelphoto` (`id`, `date`, `filename`, `description`, `title`, `latitude`, `longitude`) VALUES
(1, '2020-02-27', 'images/1.jpg', 'Eiffel Tower, Paris, France. The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower.', 'Eifferl Tower', 48.8584, 2.2945),
(2, NULL, 'images/11.jpg', 'Eiffel Tower, Paris, France\",\"The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower.', 'Eiffel Tower', 48.8584, 2.2945),
(3, NULL, 'images/2.jpg', 'The Colosseum, Rome, Italy, The Colosseum or Coliseum, also known as the Flavian Amphitheatre, is an oval amphitheatre in the centre of the city of Rome, Italy. Built of travertine limestone, tuff, and brick-faced concrete, it was the largest amphitheatre ever built at the time and held 50,000 to 80,000 spectators.', 'The Colosseum', 41.8902, 12.4922),
(4, NULL, 'images/22.jpg', 'The Colosseum, Rome, Italy, The Colosseum or Coliseum, also known as the Flavian Amphitheatre, is an oval amphitheatre in the centre of the city of Rome, Italy. Built of travertine limestone, tuff, and brick-faced concrete, it was the largest amphitheatre ever built at the time and held 50,000 to 80,000 spectators.', 'The Colosseum', 41.8902, 12.4922),
(5, NULL, 'images/louvre.jpg', 'he Louvre, Paris, France\",\"The Louvre, or the Louvre Museum, is the world\'s largest art museum and a historic monument in Paris, France. A central landmark of the city, it is located on the Right Bank of the Seine in the city\'s 1st arrondissement', 'Louvre Museum\r\n', 48.8606, 2.3376),
(6, NULL, 'images/ggb.jpg', 'The Golden Gate Bridge, California, USA, The Golden Gate Bridge is a suspension bridge spanning the Golden Gate, the one-mile-wide strait connecting San Francisco Bay and the Pacific Ocean.', 'The Golden Gate Bridge', 37.8199, -122.478),
(7, NULL, 'images/disney.jpg', 'Disney World, Florida, USA, The Walt Disney World Resort, also called Walt Disney World and Disney World, is an entertainment complex in Bay Lake and Lake Buena Vista, Florida, in the United States, near the cities Orlando and Kissimmee.', 'Disney World', 28.3852, -81.5639),
(8, NULL, 'images/can1.jpg', 'CN Tower, Ontario, Canada, The CN Tower is a 553.3 m-high concrete communications and observation tower located in Downtown Toronto, Ontario, Canada. Built on the former Railway Lands, it was completed in 1976. Its name CN originally referred to Canadian National, the railway company that built the tower.', 'CN Tower', 43.6426, -79.3871),
(9, NULL, 'images/can2.jpg', 'Banff National Park, Alberta, Canada, Banff National Park is Canada\'s oldest national park and was established in 1885. Located in Rocky Mountains of Alberta, 110–180 kilometres west of Calgary, Banff encompasses 6,641 square kilometres of mountainous terrain, with many glaciers and ice fields, dense coniferous forest, and alpine landscapes.', 'Banff National Park', 51.4968, -115.928),
(10, NULL, 'images/usa1.jpg', 'Statue of Liberty, New York, USA, The Statue of Liberty is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York, in the United States.', 'Statue of Liberty', 40.6892, -74.0445),
(11, NULL, ' images/usa2.jpg', 'Grand Canyon, Nevada, USA, Grand Canyon National Park, in Arizona, is home to much of the immense Grand Canyon, with its layered bands of red rock revealing millions of years of geological history. Viewpoints include Mather Point, Yavapai Observation Station and architect Mary Colter’s Lookout Studio and her Desert View Watchtower. Lipan Point, with wide views of the canyon and Colorado River, is a popular, especially at sunrise and sunset.', 'Grand Canyon', 36.107, -112.113),
(12, NULL, 'images/br1.jpg', 'Christ the Redeemer, Rio De Janeiro, Brazil, Christ the Redeemer, Portuguese Cristo Redentor, colossal statue of Jesus Christ at the summit of Mount Corcovado, Rio de Janeiro, southeastern Brazil. It was completed in 1931 and stands 98 feet (30 metres) tall, its horizontally outstretched arms spanning 92 feet (28 metres). The statue, made of reinforced concrete clad in a mosaic of thousands of triangular soapstone tiles, sits on a square stone pedestal base about 26 feet (8 metres) high, which itself is situated on a deck atop the mountain’s summit. The statue is the largest Art Deco-style sculpture in the world and is one of Rio de Janeiro’s most recognizable landmarks.', 'Christ the Redeemer', 22.9519, -43.2105),
(13, NULL, 'images/br2.jpg', 'Sugarloaf Moutain, Rio De Janeiro, Brazil\",\"Sugarloaf Mountain is a ski mountain located in Carrabassett Valley, Franklin County, Maine. It is the third highest peak in the state, after Mount Katahdin\'s Baxter and Hamlin peaks. Sugarloaf is flanked to the south by Spaulding Mountain. ', 'Sugarloaf Moutain', 45.0314, 70.3131),
(14, NULL, 'images/arg1.jpg', 'Perito Moreno Glacier, Santa Cruz Province, Argentina\",\"The Perito Moreno Glacier is a glacier located in the Los Glaciares National Park in southwest Santa Cruz Province, Argentina. It is one of the most important tourist attractions in the Argentinian Patagonia.', 'Perito Moreno Glacier', -50.4967, -73.1377),
(15, NULL, 'images/arg2.jpg', 'La Boca, Bunenos Aires, Argentina\",\"La Boca is a working-class area with a cluster of attractions near the Riachuelo River. Steakhouses and street artists surround Caminito, a narrow alley flanked by brightly painted zinc shacks that evoke the district’s early immigrant days. A cauldron of noise on match days, La Bombonera is the home ground of Boca Juniors soccer team. Modern art museum Fundación Proa has temporary exhibits and views of the old docks.', 'La Boca', -34.6345, -58.3631),
(16, NULL, 'images/pan1.jpg', 'Gatun Lake, Colon Panama\",\"Gatun Lake is a large freshwater artificial lake to the south of Colón, Panama. It forms a major part of the Panama Canal, carrying ships for 33 km of their transit across the Isthmus of Panama. The lake was created between 1907 and 1913 by the building of the Gatun Dam across the Chagres River.', 'Gatun Lake', 9.1921, -79.9081),
(17, NULL, 'images/pan2.jpg', 'San Blas Island, Panama\",\"The San Blas Islands of Panama is an archipelago comprising approximately 365 islands and cays, of which 49 are inhabited. They lie off the north coast of the Isthmus of Panama, east of the Panama Canal. A part of the comarca Guna Yala along the Caribbean coast of Panama is home to the Kuna people.', 'San Blas Island', 9.57, -78.82),
(18, NULL, 'images/cos1.jpg', 'Arenal Volcano, Alajuela, Costa Rica\",\"Arenal Volcano is an active andesitic stratovolcano in north-western Costa Rica around 90 km northwest of San José, in the province of Alajuela, canton of San Carlos, and district of La Fortuna. The Arenal volcano measures at least 1,633 metres high. It is conically shaped with a crater 140 metres in diameter.', 'Arenal Volcano', 10.4626, -84.7032),
(19, NULL, 'images/cos2.jpg', 'Parque Nacional Manuel Antonio, Puntarenas Province, Costa Rica\",\"Manuel Antonio National Park, on Costa Rica’s central Pacific coast, encompasses rugged rainforest, white-sand beaches and coral reefs. It’s renowned for its vast diversity of tropical plants and wildlife, from three-toed sloths and endangered white-faced capuchin monkeys to hundreds of bird species. The park’s roughly 680 hectares are crossed with hiking trails, which meander from the coast up into the mountains.', 'Parque Nacional Manuel Antonio', 9.3923, -84.137),
(20, NULL, 'images/cn1.jpg', 'Great Wall of China, Beijing, China\",\"The Great Wall of China is the collective name of a series of fortification systems generally built across the historical northern borders of China to protect and consolidate territories of Chinese states and empires against various nomadic groups of the steppe and their polities.', 'Great Wall of China', 40.4319, 116.57),
(21, NULL, 'images/cn2.jpg', 'The Forbidden City, Beijing, China\",\"The Forbidden City is a palace complex in central Beijing, China. It houses the Palace Museum, and was the former Chinese imperial palace from the Ming dynasty to the end of the Qing dynasty', 'The Forbidden City', 39.9169, 116.391),
(22, NULL, 'images/kr1.jpg', 'N Seoul Tower, Seoul, South Korea\",\"The N Seoul Tower, officially the YTN Seoul Tower and commonly known as the Namsan Tower or Seoul Tower, is a communication and observation tower located on Namsan Mountain in central Seoul, South Korea. At 236 metres, it marks the second highest point in Seoul.', 'N Seoul Tower', 37.5512, 126.988),
(23, NULL, 'images/kr2.jpg', 'Gyeongbokgung Palace, Seoul, Korea\",\"Gyeongbokgung, also known as Gyeongbokgung Palace or Gyeongbok Palace, was the main royal palace of the Joseon dynasty. Built in 1395, it is located in northern Seoul, South Korea.', 'Gyeongbokgung Palace', 37.5796, 126.977),
(24, NULL, 'images/af1.jpg', 'Cape of Good Hope, Headland, South Africa\",\"The Cape of Good Hope is a rocky headland on the Atlantic coast of the Cape Peninsula in South Africa. A common misconception is that the Cape of Good Hope is the southern tip of Africa. This misconception was based on the misbelief that the Cape was the dividing point between the Atlantic and Indian Oceans.', 'Cape of Good Hope', -34.3568, 18.474),
(25, NULL, 'images/af2.jpg', 'Kruger National Park, South Africa\",\"Kruger National Park, in northeastern South Africa, is one of Africa’s largest game reserves. Its high density of wild animals includes the Big 5: lions, leopards, rhinos, elephants and buffalos. Hundreds of other mammals make their home here, as do diverse bird species such as vultures, eagles and storks. Mountains, bush plains and tropical forests are all part of the landscape.', 'Kruger National Park', -23.9884, 31.5547),
(30, NULL, 'images/ni2.jpg', 'Zuma Rock, Niger State, Nigeria,\",\"Zuma Rock is a large monolith, an igneous intrusion composed of gabbro and granodiorite, that is located in Niger State, Nigeria. It rises spectacularly immediately west of Nigeria\'s capital Abuja, along the main road from Abuja to Kaduna off Madala, and is sometimes referred to as the Gateway to Abuja from Suleja', 'Zuma Rock', 9.1256, 7.2289),
(213123, '2020-02-22', 'sadasd', 'asdad', 'asdas', 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Phone` bigint(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Username`, `Password`, `Email`, `FullName`, `Address`, `Phone`) VALUES
('Andy', 'Andy', 'Andy@gmail.com', 'Andy Luan', '1 Kbbq st', 1234567890),
('Calvin', 'Calvin', 'Calvin@gmail.com', 'Calvin Yap', '2 BBT st', 1214567890),
('Nickers', 'Nickers', 'Nicky@gmail.com', 'Tu Ngoc Dam', '1 BBT St', 6666666666);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travelphoto`
--
ALTER TABLE `travelphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travelphoto`
--
ALTER TABLE `travelphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
