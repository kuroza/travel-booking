-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 05:19 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'City Tours'),
(2, 'Temburong Tours'),
(3, 'Promotions'),
(4, 'Brunei & Beyond'),
(5, 'Hotels'),
(6, 'Dining');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Unai Emery', 'emery@gmail.com', 'I have a question', 'How do I pay?');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiryid` int(50) NOT NULL,
  `packageid` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `adult` int(50) NOT NULL,
  `child` int(50) NOT NULL,
  `message` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiryid`, `packageid`, `name`, `mail`, `phone`, `dateFrom`, `dateTo`, `adult`, `child`, `message`) VALUES
(1, 0, 'Ozil', 'mesut@gmail.com', '8801010', '2018-11-01', '2018-11-01', 2, 3, 'We would like to go on a water village tour.'),
(2, 0, 'Lacazette', 'laca@gmail.com', '8809090', '2018-11-07', '2018-11-09', 2, 0, 'We would like to go on a full day city tour.'),
(3, 0, 'Pierre E. Aubameyang', 'pierre@example.com', '8801414', '2018-11-16', '2018-11-17', 2, 3, 'We would like to go on a Mangrove river safari.'),
(4, 0, 'Lacazette', 'laca@gmail.com', '8809090', '2018-11-21', '2018-11-29', 2, 0, 'We would like to go on a brunei by night tour.'),
(5, 0, 'Mkhitaryan', 'miki@gmail.com', '8807070', '2018-11-07', '2018-11-17', 2, 1, 'We would like to go on a temburong adventure.');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packid` int(200) NOT NULL,
  `packagename` varchar(1000) NOT NULL,
  `category` int(200) NOT NULL,
  `priceAdult` int(200) NOT NULL,
  `priceChild` int(200) NOT NULL,
  `priceHotel` int(200) NOT NULL,
  `priceCar` int(11) NOT NULL,
  `detail` varchar(8000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packid`, `packagename`, `category`, `priceAdult`, `priceChild`, `priceHotel`, `priceCar`, `detail`, `image`) VALUES
(2, 'Water Village Tour', 1, 60, 36, 0, 0, 'On this city tour, you will be discovering Brunei. Drive past the Lapau, Dewan Majlis, Sir Omar Ali Saifuddin Mosque and visit the Brunei Museum, The Royal Regalia Centre, Jame Asr Hassanal Bolkiah Mosque.\r\n\r\nTake a boat ride by local \"Water Taxi\" around Brunei River and visit the local houses built on stilts where local cakes and tea will be served to you. The tour will end by a photo at the Istana Nurul Iman (Sultan\'s Palace).', 'water-village.jpg'),
(3, 'Full Day City Tour', 1, 120, 72, 0, 0, 'On this full day tour, you will visit many renowned places of interest. You will be driven past the Lapau, the Dewan Majlis and the Sir Omar Ali Saifuddien Mosque. You will visit the Tamu (Open Market), the Malay Technology Museum, the Brunei Museum, the tomb of the fifth Sultan of Brunei, (Sultan Bolkiah 1485-1524).\r\n<br><br>\r\nYou will proceed for lunch at a local restaurant. You\'ll be continuing your tour after lunch, visiting the Regalia Centre, the Sultan\'s Palace (Istana Nurul Iman) and take a water taxi ride to the water village and visit a house there, where local cakes and tea will be served. Your tour will end after your visit to the new mosque- Jame\' Asr Hassanil Bolkiah Mosque.', 'city.jpg'),
(4, 'Mangrove River Safari', 1, 70, 42, 0, 0, 'Just minutes from the center of Bandar Seri Begawan are isolated mangroves where nature still dominates.  The boat leaves the center of Bandar, traveling past the old and new Water Villages housing towards the mangrove-lined waterways. Moving quietly along the narrow mangrove channels, stopping to listen and look for the birds and animal life that call the mangroves home.<br>\r\n<br>\r\nIf you are lucky you can observe the shy proboscis monkey. (Only found in Borneo) Our guide will explain the mangrove ecology and some of the diversity of plant and animal life in the tangle of mangroves, vines, palms, and trees. The boat returns to the center of Bandar Seri Begawan stopping along the way to visit a local house to have morning or afternoon tea.', 'mangrove.jpg'),
(5, 'Brunei by Night', 1, 75, 45, 0, 0, 'Enjoy your dinner in a local restaurant. Depart for an evening cruising around Bandar Seri Begawan, drive past the city and stop for a photo shot of the Beautiful view of The Omar Ali Saifuddin Mosque and drive pass the Istana Nurul Iman Palace where the sultan resides an from here your will make another stop at the glittering of the Jame\' Asr Hassanil Bolkiah Mosque for a quick photo and from here you make a little shop at the Gadong night local market where you can taste some local delicacies at your own expenses and also can view the various type of vegetables and fruits and well as cloths. You will be transferred back to the hotel after the night market visits.', 'night.jpg'),
(6, 'Seria Oil Field Tour', 1, 120, 72, 0, 0, 'Seria Oilfield operation Centre is situated about 80km in the southwest of Brunei Darussalam. On the way, you will stop at Tutong Town and continue to Sungai Liang Forestry Centre to visit the Forestry Museum.  From the museum we will proceed to Seria Oilfield and stop at the Billionth Barrel Monument. We will stop at Kuala Belait town for lunch. On the return leg, we will make a stop at Brunei LNG plant in Lumut and take a drive around Jerudong Park before return to the capital.', 'seria.jpg'),
(9, 'Temburong Adventure', 2, 150, 90, 0, 0, 'This excursion is a short immersion into an amazing culture and tradition that is found among the people of Temburong. You travel by speedboat through a network of narrow mangrove channels that eventually widen out into the Brunei Bay. Along the way you may see some of the iconic local wildlife as they begin their day by lounging on the river banks soaking up the sun or looking for nice things to eat.  Upon arrival in Bangar, Temburong we will proceed to an Iban longhouse where the locals are usually very welcoming to visitors. We then proceed to Freme Rainforest Lodge where we will demonstrate local recipes such as Bamboo Chicken and Bamboo Rice.', 'temburong4.jpg'),
(10, 'Temburong Experience', 2, 130, 78, 0, 0, 'This excursion is a short immersion into an amazing culture and tradition that is found among the people of Temburong. You travel by speedboat through a network of narrow mangrove channels that eventually widen out into the Brunei Bay. Along the way you may see some of the iconic local wildlife as they begin their day by lounging on the river banks soaking up the sun or looking for nice things to eat.', 'temburong5.jpg'),
(11, 'Temburong Highlights', 2, 240, 144, 0, 0, 'You will travel by local water taxi from Bandar through a network of rivers and channels around the back of Brunei Bay, passing by dense mangrove islands and possibly see wildlife searching for food or enjoying the afternoon sun. The journey will continue you from Bangar, the regional capital of Temburong, to Bukit Patoi nature reserve where you walk to the top of a walkway to a majestic view of the surrounding countryside.', 'temburong6.jpg'),
(13, 'Rent a vehicle', 3, 0, 0, 0, 80, 'Car rentals are a great taxi alternative. Whether you\'re just landing or ready to leave town, you can pick up your car in one location and drop off at another.\r\n<br><br>\r\nKeep the car for up to 12 hours; get a free tank of gas and 150 free miles.', 'car.jpg'),
(14, 'Golfer\'s Delight', 3, 400, 170, 0, 0, 'Meet and assist at airport and transfer to your hotel. Rest of the day will be free at leisure. Enjoy your dinner at a local restaurant. Depart for an evening cruising around Bandar Seri Begawan, drive past the city and stop for a photo shot of the Beautiful view of The Omar Ali Saifuddin Mosque and drive pass the Nurul Iman Palace where the sultan resides.<br><br> From here your will make another stop at the glittering of the Jame Asr Hassanil Bolkiah Mosque for a quick photo and from here you make a little shop at the Gadong night local market where you can taste some local delicacies at your own expenses and also can view the various type of vegetables and fruits and well as cloths. Your will transfers back to hotel after the night market visit.', 'golf.jpg'),
(15, 'Rent a Bicycle', 3, 100, 70, 0, 0, 'Enjoy the streets of Bandar with other cyclist.', 'bike.png'),
(16, 'The Empire Hotel', 5, 0, 0, 300, 0, 'From conception to completion, The Empire Hotel and Country Club was an ambitious project, employing over 300 highly skilled designers, technicians and craftsmen throughout its six-year construction. Since it opened on 16 October 2000, The Empire has become synonymous with Brunei: reflecting the country\'s majestic and cultural heritage.', 'empire.jpg'),
(17, 'Radisson Hotel', 5, 0, 0, 180, 0, 'Situated in Brunei\'s capital city of Bandar Seri Begawan, Radisson Hotel Brunei Darussalam provides the perfect home base for convenient corporate and leisure travel. Our hotel sits just 15 minutes from Brunei International Airport (BWN), and we are located within walking distance of the city\'s best sights.\r\n<br><br>\r\nTake a boat tour of the Kampong Ayer water village, walk three minutes to tour the Royal Regalia Museum, and don\'t miss the Sultan Omar Ali Saifuddien Mosque. After sightseeing, take our complimentary shuttle to browse nearby shopping destinations like Hua Ho Department Store Kiulap.', 'radisson.jpg'),
(18, 'Rizqun International Hotel', 5, 0, 0, 175, 0, ' Located in the heart of Brunei\'s retail and entertainment district - Gadong, the Hotel is only 10 minutes from Brunei International Airport and Bandar Seri Begawan. ', 'rizqun.jpg'),
(19, 'The Centrepoint Hotel', 5, 0, 0, 130, 0, 'Located in the heart of Brunei\'s retail and entertainment district - Gadong, the Hotel is only 10 minutes from Brunei International Airport and Bandar Seri Begawan. ', 'centrepoint.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quotationid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`quotationid`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Harith', 'mesut@gmail.com', 'Water village tour', 'The dates stated are available. Please pay through an online payment system provided.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'harith', 'harith@gmail.com', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'hanisah', 'hanisah@gmail.com', 'user', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'harry', 'harry@gmail.com', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'auba', 'pierre@gmail.com', 'user', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'torreira', 'lucas@gmail.com', 'user', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiryid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packid`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quotationid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiryid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `quotationid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
