-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2016 at 10:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Bid` int(11) NOT NULL,
  `mode of payment` varchar(50) NOT NULL,
  `final amount` int(11) NOT NULL,
  `past record` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`Bid`, `mode of payment`, `final amount`, `past record`) VALUES
(1, 'cash', 100, 0),
(2, 'cash', 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Cid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `reviews` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Cid`, `username`, `rname`, `reviews`) VALUES
(1, 'FATIMA', 'BURGER KING', 'NOT A VERY GOOD PLACE TO GO WITH FRIENDS!!!!'),
(2, 'aiysha', 'MCDONALDS', 'Amazing place to have fun with friends and family!!!!!'),
(3, 'sarosh', 'KFC', 'good'),
(4, 'shadab', 'DOMINOZ', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `Fid` int(11) NOT NULL,
  `Rname` varchar(50) NOT NULL,
  `items` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `reviews` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`Fid`, `Rname`, `items`, `price`, `availability`, `reviews`) VALUES
(1, 'MCDONALDS', 'CHICKEN BURGER', 110, 'YES', 'ITS TASTY MUST EAT!!'),
(2, 'MCDONALDS', 'CHOCOLATE RAFFLE', 100, 'YES', ''),
(3, 'MCDONALDS', 'SOFT SERVE', 50, 'YES', ''),
(4, 'MCDONALDS', 'MC FLOAT', 70, 'YES', ''),
(5, 'MCDONALDS', 'OREO ICECREAM', 150, 'YES', ''),
(6, 'DOMINOZ', 'CHEESE BURST PIZZA', 150, 'YES', ''),
(7, 'DOMINOZ', 'CAPSICUM/CORN PIZZA(SMALL)', 60, 'YES', ''),
(8, 'DOMINOZ', 'CHOCO LAVA CAKE', 80, 'YES', ''),
(9, 'DOMINOZ', 'COKE', 50, 'YES', ''),
(11, 'KFC', 'CHICKEN BUCKET', 400, 'YES', ''),
(12, 'KFC', 'CRUSHERS', 100, 'YES', ''),
(13, 'KFC', 'CHOCOLATE SHAKE', 70, 'YES', ''),
(15, 'BURGER KING', 'CHICKEN BURGER', 180, 'YES', ''),
(16, 'BURGER KING', 'VEG BURGER', 100, 'YES', ''),
(17, 'AL NOOR', 'CHICKEN QORMA', 150, 'YES', ''),
(18, 'AL NOOR', 'MUTTON KADHAI', 400, 'YES', ''),
(19, 'AL NOOR', ' CHICKEN BIRYANI', 250, 'YES', ''),
(20, 'AL NOOR', 'MUTTON BIRYANI', 350, 'YES', ''),
(21, 'BURGER KING', 'whooper', 150, 'YES', 'bvbvsnvnmc;ascas'),
(22, 'BURGER KING', 'cold drink', 75, 'YES', 'bvbvsnvnmc;ascas'),
(24, 'MCDONALDS', 'capachino', 4627, 'YES', ''),
(25, 'MCDONALDS', 'ccd', 212, 'YES', ''),
(26, 'MCDONALDS', 'ccd', 8187281, 'YES', ''),
(27, 'MCDONALDS', 'cold', 556, 'YES', ''),
(28, 'MCDONALDS', 'cold drink', 13, 'YES', ''),
(31, 'KFC', 'CHICKEN WINGS', 90, 'YES', ''),
(32, 'KFC', 'jgjfyjfkv', 557, 'YES', '');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `oid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `dish` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `mode of payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registereduser`
--

CREATE TABLE `registereduser` (
  `Rid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registereduser`
--

INSERT INTO `registereduser` (`Rid`, `name`, `password`, `email`) VALUES
(1, 'anas', 12345, 'anas@anas.com'),
(2, 'aiysha', 12345, 'aiysha@gmail.com'),
(3, 'FATIMA', 1234, 'fatty@gmail.com'),
(4, 'Amir', 12345, 'amir@amir.com'),
(5, 'Saba', 12345, 'saba@saba.com'),
(6, 'Shoeb', 12345, 'shoeb@shoeb.com'),
(7, 'Dellight', 12345, 'dellight@dellight.com'),
(8, 'huzaifa', 12345, 'huzaifa@huzaifa.com'),
(9, 'shadab', 12345, 'shadab@shadab.com'),
(10, 'sarosh', 12345, 'sarosh@sarosh.com');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantdetails`
--

CREATE TABLE `restaurantdetails` (
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `reviews` varchar(1000) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurantdetails`
--

INSERT INTO `restaurantdetails` (`name`, `title`, `location`, `reviews`, `image`) VALUES
('BURGER KING', 'burger king', 'SAKET MALL,NEW DELHI', 'Not a very good experience.The whoopers they served were dry and not up to my expectations.....', 'http://i.kinja-img.com/gawker-media/image/upload/s--4kM11hRp--/1856e3m2f28sbjpg.jpg'),
('DOMINOZ', 'dominoz', 'CANNAUGHT PLACE,NEW DELHI', 'This place makes you feel fresh ......I would suggest going for cheese burts its immensely tasty.......', 'http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/1/8/1389206688886/Slices-of-Dominos-cheese--012.jpg'),
('KFC', 'KFC', 'LANE 12, ANAND VIHAR ,NEW DELHI', 'Best place to visit for all da chicken lovers......', 'https://2.bp.blogspot.com/-Y32L8KZre_w/UrQEiJN9FOI/AAAAAAAASgM/clFh7RMU84c/s640/KFC3.JPG'),
('MCDONALDS', 'MCDONALDS', 'COMMUNITY CENTER ,NEW DELHI ', 'Its is an amazing place to hang out with friends.....', 'https://mcdonalds.com.au/sites/mcdonalds.com.au/files/hero_pdt_value_au.png');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantuser`
--

CREATE TABLE `restaurantuser` (
  `Rid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `restaurant page` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurantuser`
--

INSERT INTO `restaurantuser` (`Rid`, `username`, `name`, `password`, `email`, `header`, `restaurant page`) VALUES
(1, 'MCDONALDS', 'MCDONALDS', 1000, 'mcdi@mcdi.com', '"WELCOME TO MCDONALDS"', 'McDonald''s is the world''s largest chain of hamburger fast food restaurants, serving around 68 million customers daily in 119 countries across 35,000 outlets.[4][5] Founded in the United States in 1940, the company began as a barbecue restaurant operated by Richard and Maurice McDonald. In 1948, they reorganized their business as a hamburger stand using production line principles. Businessman Ray Kroc joined the company as a franchise agent in 1955. He subsequently purchased the chain from the McDonald brothers and oversaw its worldwide growth.[6]\r\n\r\nA McDonald''s restaurant is operated by either a franchisee, an affiliate, or the corporation itself. The McDonald''s Corporation revenues come from the rent, royalties, and fees paid by the franchisees, as well as sales in company-operated restaurants. In 2012, the company had annual revenues of $27.5 billion and profits of $5.5 billion.[7] According to a 2012 BBC report, McDonald''s is the world''s second largest private employer—behind Walma'),
(2, 'DOMINOZ', 'DOMINOZ', 1001, 'domi@domi.com', '"WELCOME TO DOMINOZ"', 'Domino''s is an American restaurant chain and international franchise pizza delivery corporation headquartered at the Domino Farms Office Park (the campus being owned by Domino''s Pizza co-founder Tom Monaghan) in Ann Arbor Charter Township, Michigan, United States, near Ann Arbor, Michigan.[2][3] Founded in 1960, Domino''s is the second-largest pizza chain in the United States (after Pizza Hut)[4] and the largest worldwide, with more than 10,000 corporate and franchised stores[5] in 70 countries.[6] Domino''s Pizza was sold to Bain Capital in 1998 and went public in 2004.\r\n\r\n30-minute guarantee\r\n\r\nStarting in 1973, Domino''s Pizza had a guarantee that customers would receive their pizzas within 30 minutes of placing an order or they would receive the pizzas free. The guarantee was reduced to $3 off in the mid 1980s. In 1992, the company settled a lawsuit brought by the family of an Indiana woman who had been killed by a Domino''s delivery driver, paying the family $2.8 million. In another 1'),
(3, 'KFC', 'KFC', 1002, 'kfc@kfc.com', '"WELCOME TO KFC"', 'KFC (short for Kentucky Fried Chicken) is a fast food restaurant chain that specializes in fried chicken and is headquartered in Louisville, Kentucky, in the United States. It is the world''s second largest restaurant chain (as measured by sales) after McDonald''s, with 18,875 outlets in 118 countries and territories as of December 2013. The company is a subsidiary of Yum! Brands, a restaurant company that also owns the Pizza Hut and Taco Bell chains.\r\n\r\nKFC was founded by Harland Sanders, an entrepreneur who began selling fried chicken from his roadside restaurant in Corbin, Kentucky, during the Great Depression. Sanders identified the potential of the restaurant franchising concept, and the first "Kentucky Fried Chicken" franchise opened in Utah in 1952. KFC popularized chicken in the fast food industry, diversifying the market by challenging the established dominance of the hamburger. By branding himself as "Colonel Sanders," Harland became a prominent figure of American cultural hist'),
(4, 'BURGER KING', 'BURGER KING', 1004, 'bg@bg.com', '"WELCOME TO BURGER KING"', 'Burger King, often abbreviated as BK, is an American global chain of hamburger fast food restaurants headquartered in unincorporated Miami-Dade County, Florida, United States. The company began in 1953 as Insta-Burger King, a Jacksonville, Florida-based restaurant chain. After Insta-Burger King ran into financial difficulties in 1954, its two Miami-based franchisees, David Edgerton and James McLamore, purchased the company and renamed it Burger King. Over the next half century, the company would change hands four times, with its third set of owners, a partnership of TPG Capital, Bain Capital, and Goldman Sachs Capital Partners, taking it public in 2002. In late 2010, 3G Capital of Brazil acquired a majority stake in BK in a deal valued at US$3.26 billion. The new owners promptly initiated a restructuring of the company to reverse its fortunes. 3G, along with partner Berkshire Hathaway, eventually merged the company with Canadian-based doughnut chain Tim Hortons under the auspices of a '),
(5, 'AL NOOR', 'AL NOOR', 1005, 'alnoor@alnoor.com', '"WELCOME TO AL NOOR"', 'ndcndcncncncwncwcnwncncwcnwvwbvw\r\ndvbwvbwiovwv\r\nwdvnwivnwevn\r\ndwvnwiovbewoi'),
(6, 'ccd', 'ccd', 1000, 'ccd@gmail.com', '', 'ccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccdccd ccd'),
(7, 'jamia', 'jamia', 12, 'jamia@jamia.com', '', 'okookokp,lphniokp jojok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Cid`,`username`,`rname`),
  ADD KEY `username` (`username`),
  ADD KEY `comments_ibfk_2` (`rname`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`Fid`),
  ADD KEY `Fid` (`Fid`),
  ADD KEY `items` (`items`,`price`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`oid`,`rid`,`uid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `registereduser`
--
ALTER TABLE `registereduser`
  ADD PRIMARY KEY (`Rid`),
  ADD KEY `name` (`name`),
  ADD KEY `Rid_3` (`name`);

--
-- Indexes for table `restaurantdetails`
--
ALTER TABLE `restaurantdetails`
  ADD PRIMARY KEY (`name`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `restaurantuser`
--
ALTER TABLE `restaurantuser`
  ADD PRIMARY KEY (`Rid`),
  ADD KEY `Rid` (`Rid`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`),
  ADD KEY `Rid_2` (`Rid`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `Bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `registereduser`
--
ALTER TABLE `registereduser`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `restaurantuser`
--
ALTER TABLE `restaurantuser`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `restaurantuser` (`Rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registereduser` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`rname`) REFERENCES `restaurantdetails` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `restaurantuser` (`Rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurantdetails`
--
ALTER TABLE `restaurantdetails`
  ADD CONSTRAINT `restaurantdetails_ibfk_1` FOREIGN KEY (`name`) REFERENCES `restaurantuser` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
