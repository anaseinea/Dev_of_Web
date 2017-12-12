-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2017 at 07:51 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `descriptionS` varchar(1000) NOT NULL,
  `descriptionL` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` float NOT NULL,
  `tag` varchar(1000) NOT NULL,
  PRIMARY KEY (`image`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`descriptionS`, `descriptionL`, `image`, `name`, `price`, `tag`) VALUES
('Soft Leather Chair', 'A carefully selected grain leather of such high quality that it only requires a very light finish. All that has been used is a thin, protective dye that breathes and preserves the leather’s soft warm feeling. This also means that the natural variations and nuances in the leather are visible, and there may be small scars from such things as insect bites received by the animals.', 'Furniture1.jpg', 'Black Office Leather Chair', 1000, 'Furniture'),
('Mesh Chair', 'Black mesh covers both the padded seat of the chair, as well as the back of the chair. In addition to lower-back support and border detailing, the gently curved back of the chair provides mesh-only sections for enhanced breathability. Black, nylon, T-shaped armrests offer added support and comfort.', 'Furniture2.jpg', 'Black Office Mesh Chair', 700, 'Furniture'),
('Brown Wood Table', 'The Zinus modern Studio collection is an ideal combination of function and style. The Soho rectangular table is sturdy, with black steel tubing and a surface panel with rich brown wood grain finish. The modern Studio collection Soho table will add an elegant touch to any décor. Easy to assemble. Worry free limited 1 year warranty.', 'Furniture3.jpg', 'Zinus Studio Desk', 2500, 'Furniture'),
('U-Shaped Table', 'The height adjustable 75-25K U-Shaped Table allows for wheel chair access and features an all laminate top with edge bumper. Table Shape allows 4 wheel chair access. Height adjustable legs with self indexing spring loaded plunger. Easy read number height indicator strips (no holes to count). All laminate top with edge bumper Shipping Charges are dock to dock', 'Furniture4.jpg', 'Vamz E476TK Conference Table', 5000, 'Furniture'),
('Height-Adjustable Table', 'With its open-concept design and clean aesthetic, this contemporary computer desk from Need makes a perfect addition to any office or work space. The metal frame and track-style legs ensure robust stability, sturdy enough to support an all-in-one computer, while the scratch- resistant laminate finish protects the desk\'s surface from daily wear and tear.', 'Furniture5.jpg', 'Brown Wood Adjustable Desk', 2500, 'Furniture'),
('Compact Dot-Matrix Printer', 'A very economical printer to run, the LQ-350 helps save money with its high ribbon yield of 2.5 million characters and its low power consumption. Using just 1.3W in sleep mode and 23W when powered on, the LQ-350 is qualified by ENERGY STAR for its excellent energy efficiency. Easy to integrate, the LQ-350 has Parallel, Serial and USB interfaces as standard, and will fit neatly onto desks.', 'Printer1.jpg', 'EPSON LQ-350', 599, 'Printer'),
('Printer and Scanner', 'The L565 is ideal for small office users looking for fast, good-quality and ultra-low-cost printing, scanning, copying and faxing with Wi-Fi and Ethernet. Featuring high-capacity ink tanks users can print more pages at a lower cost. Setting up the device is hassle-free, improving productivity. Micro Piezo technology and ISO print speeds of up to 9.2ppm1 help produce high-quality, consistent.', 'Printer2.jpg', 'Brother L565 ', 800, 'Printer'),
('Cheap, Reliable Printer', 'HP printer does the printing job efficiently with its simple controls. Buy this HP printer and get all-in-one benefits. The HP Deskjet simplifies your printing and scanning tasks efficiently. You can print, scan and copy what you need quickly with this reliable all-in-one printer. It offers an easy setup and provides seamless printing, scanning, and copying with its easy-to-use controls.', 'Printer3.jpg', 'HP AIO 2130 ', 150, 'Printer'),
('Deskjet Printer', 'Save your space with a sleek, compact all-in-one designed to fit where you need it.\r\nPrint in any room you choose without causing disruptions using the optional quiet mode.\r\nAccess menu planners, news reports, recipes, and more with free Printables delivered on your schedule', 'Printer4.jpg', 'Canon 9876', 1600, 'Printer'),
('Eco-friendly Printer', 'Professional color documents for business for up to 50% less cost per page than lasers. This all-in-one is designed for productivity with smart features and mobile printing to keep business moving at work, home, or on the go.', 'Printer5.jpg', 'EPSON S765G', 400, 'Printer'),
('Black Molskine', 'The Moleskine Large Squared Notebook now comes in green, for a fresh burst of colour. The hard cover is bound in cardboard with rounded corners and a green elastic enclosure and bookmark. The 240 squared pages are made from acid-free, ivory coloured paper. The notebook includes a black expandable inner pocket for loose notes and cards.', 'Notebook1.jpg', 'Moleskine Large Square Hard Notebook - Black', 40, 'Notebook'),
('White Molskine', 'The Moleskine Large Squared Notebook now comes in green, for a fresh burst of colour. The hard cover is bound in cardboard with rounded corners and a green elastic enclosure and bookmark. The 240 squared pages are made from acid-free, ivory coloured paper. The notebook includes a white expandable inner pocket for loose notes and cards.', 'Notebook2.jpg', 'Moleskine Large Square Hard Notebook - White', 40, 'Notebook'),
('Red Molskine', 'The Moleskine Large Squared Notebook now comes in green, for a fresh burst of colour. The hard cover is bound in cardboard with rounded corners and a green elastic enclosure and bookmark. The 240 squared pages are made from acid-free, ivory coloured paper. The notebook includes a red expandable inner pocket for loose notes and cards.', 'Notebook3.jpg', 'Moleskine Large Square Hard Notebook - Red', 40, 'Notebook'),
('Yellow Molskine', 'The Moleskine Large Squared Notebook now comes in green, for a fresh burst of colour. The hard cover is bound in cardboard with rounded corners and a green elastic enclosure and bookmark. The 240 squared pages are made from acid-free, ivory coloured paper. The notebook includes a yellow expandable inner pocket for loose notes and cards.', 'Notebook4.jpg', 'Moleskine Large Square Hard Notebook - Yellow', 40, 'Notebook'),
('Green Molskine', 'The Moleskine Large Squared Notebook now comes in green, for a fresh burst of colour. The hard cover is bound in cardboard with rounded corners and a green elastic enclosure and bookmark. The 240 squared pages are made from acid-free, ivory coloured paper. The notebook includes a green expandable inner pocket for loose notes and cards.', 'Notebook5.jpg', 'Moleskine Large Square Hard Notebook - Green', 40, 'Notebook'),
('Retro-style Backpack 1', 'We stand behind the quality of our products with a Limited Lifetime Warranty — our guarantee that every Herschel Supply item is free of material and manufacturing defects. This warranty covers common and everyday use for the duration of the original purchaser’s lifetime, beginning on the date of purchase from an authorized Herschel Supply retailer.', 'Bag1.jpg', 'Herschel Backpack - Brown', 130, 'Bag'),
('Retro-style Backpack 2', 'We stand behind the quality of our products with a Limited Lifetime Warranty — our guarantee that every Herschel Supply item is free of material and manufacturing defects. This warranty covers common and everyday use for the duration of the original purchaser’s lifetime, beginning on the date of purchase from an authorized Herschel Supply retailer.', 'Bag2.jpg', 'Herschel Backpack - Silver', 150, 'Bag'),
('Premium Backpack', 'Water-Resistant / Includes Rain Cover. Holds Controller with Range Extender. Holds Five Flight Batteries + Charger. Holds Laptop Up to 15\". Works as Shoulder Bag or Backpack.', 'Bag3.jpg', 'Original Phantom Backpack', 350, 'Bag'),
('Dark-brown Leather Backpack', 'Fossil is an American watch and lifestyle company, creatively rooted in authentic vintage and classic design. We strive to create high-quality watches, bags and more that preserve the best of the past while updating it for today. When the clean lines of the mid-century meet the modern looks of today, the result is key items that represent the best.', 'Bag4.jpg', 'Fossil Messenger Bag', 110, 'Bag'),
('Light-brown Leather Backpack', 'A man on-the-go needs something in his back pocket (or over his shoulder) to carry him through the day. In our opinion, the Graham messenger fits the bill—in lighter-weight fabric for spring and extra room for his laptop.\r\n\r\nGet tech smart—this bag is large enough to hold laptops up to 15 inch.', 'Bag5.jpg', 'Graham Messenger Bag', 70, 'Bag');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL,
  `balance` int(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `username`, `balance`) VALUES
('eineao@gmail.com', 'hilD1catY4cJI', 'omar', 9995170);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
