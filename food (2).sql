-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 02:14 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `address` char(16) COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`address`, `timestamp`) VALUES
('::1', '2017-10-12 03:28:28'),
('::1', '2017-10-12 03:28:32'),
('::1', '2017-10-12 03:28:35'),
('::1', '2017-10-12 03:28:38'),
('::1', '2017-10-12 03:28:40'),
('::1', '2017-10-12 06:21:49'),
('::1', '2017-10-12 06:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `LoginStatus` int(1) NOT NULL,
  `LastUpdate` datetime NOT NULL,
  `IP` char(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `LoginStatus`, `LastUpdate`, `IP`) VALUES
(017, 'admin', '$2y$10$6bM1Xt0Y14fsf9eRrCjCFeHC600QWUjEVjgTZKYBKRCdve5IAStEO', '', 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `info` text,
  `tel` text,
  `open_time` text,
  `close_time` text,
  `day` varchar(300) DEFAULT NULL,
  `food_style` varchar(255) DEFAULT NULL,
  `pricing` int(11) DEFAULT NULL,
  `latitude` text,
  `longtitude` text,
  `folder` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `info`, `tel`, `open_time`, `close_time`, `day`, `food_style`, `pricing`, `latitude`, `longtitude`, `folder`) VALUES
(1, 'Wine Connection', 'Within a French inspired décor, a Bistro offers a full range of dishes from salad, pizza, and pasta to fish and main courses inspired by Europe. This is the place to taste delicious char grilled beef from USA and Australia. The sharing concept is also featured through authentic specialties from Europe designed for two people.\r\n\r\nAddress: 191 Silom Complex Bldg., Basement Floor, Unit B11, B11-A and B11-B, Silom Road, Silom, Bangkok, 10500\r\n\r\nOpening Hours: (Open 10:30 / Last order 21:15 / Close 22:00)\r\n\r\nContact: Tel 02-231-3149  \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\necho nl2br($);', '08348', '10:00', '22:00', 'mon,tue,wed,thu,fri,sun', 'asian,western,fastfood', 4, '13.728522', '100.536387', 'wineconnection'),
(2, 'Ayame Japanese Restaurant Bangkok', 'Within a French inspired décor, a Bistro offers a full range of dishes from salad, pizza, and pasta to fish and main courses inspired by Europe. This is the place to taste delicious char grilled beef from USA and Australia. The sharing concept is also featured through authentic specialties from Europe designed for two people.\r\n\r\nAddress: 191 Silom Complex Bldg., Basement Floor, Unit B11, B11-A and B11-B, Silom Road, Silom, Bangkok, 10500\r\n\r\nOpening Hours: (Open 10:30 / Last order 21:15 / Close 22:00)\r\n\r\nContact: Tel 02-231-3149  \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '83', '10.00', '22.00', '1000', 'as', 5, '13.646281', '100.680721', 'ayame'),
(55, 'Tsu Japanese Restaurant ', 'Tsu Japanese Restaurant is the city&#039;s choice for simply classic, simply exquisite Japanese cuisine and is widely celebrated for its extraordinary lunch and dinner experiences. Operation Hours: Lunch 11:30 am - 2:30 pm Dinner 6:00 pm - 10:30 pm Reservations recommended\r\n\r\nAddress: 4 Sukhumvit Road, Soi 2 | JW Marriott Hotel, Bangkok 10110, Thailand\r\nLocation: Asia  &gt;  Thailand  &gt;  Bangkok&gt;  &gt; Sukhumvit\r\nNeighborhood: Sukhumvit\r\nPhone Number: +66 2 656 7700', '+66 2 656 7700', '10.00', '24.00', 'SUNDAY', 'Asian', 4, '13.748521', '100.551590', 'tsujp'),
(56, 'Tables Grill', 'Designed by world renowned designer, Tony Chi, Tables Grill is a striking destination serving up European cuisine with a sensational French flare and remarkable straight from the grill favourites.\r\n\r\nSpanning the entire mezzanine level of the Grand Hyatt, Tables Grill features a main dining-room with a combination of lounge and formal seating spaces and 5 “live” cooking tables doling out exceptional fare. With intricately designed cooking tables providing a little dose of entertainment, it’s safe to say, the dining experience here is memorable from the get-go.\r\n\r\nHowever, the most rave-worthy aspect of Tables Grill has to be their Sunday Brunch Buffet. With offerings like creamy Boston Lobster Bisque, Flamed Tiger Prawns, Champagne Risotto, and the most amazing Flamed Bombe Alaska we’ve ever devoured, this may just be one of our favourite spots in the city to indulge in all our cravings! (Nov 2015', '+66 2 254 6250', '10.00', '24.00', 'SUNDAY', 'Asian', 5, '13.749182', '100.538770', 'tablesgrill'),
(57, 'TEST SHOP', 'test', '', '', '', 'SUNDAY', 'Asian', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
