
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` float(6,1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `publisers`;
CREATE TABLE IF NOT EXISTS `publisers` (
  `P_id` int(11) NOT NULL AUTO_INCREMENT,
  `P_name` varchar(255) NOT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

INSERT INTO `books` (`id`, `name`, `price`,`rating`) VALUES
(1, 'A Promised Land', 60, 4.8),
(2, 'The Kinfolk Entrepreneur', 80, 4.7),
(3, 'Will', 50, 4.6),
(4, 'Harry Potter and the Prisoner of Azkaban', 50, 4.5),
(5, 'Bible', 130, 4.4),
(6, 'Bhagwat Gita', 200, 4.3),
(7, 'German Dictionary', 220, 4.2),
(8, 'French Dictionary', 200, 4.1),
(9, 'Mercedes', 80, 4.0),
(10, 'Vistara', 100, 3.9),
(11, 'Airports', 150, 3.8),
(12, 'Compass', 100, 3.7);

INSERT INTO `publisers` (`P_id`, `P_name`) VALUES
(1, 'VMH Publishing'),
(2, 'Allwrite Publishing'),
(3, 'FC&A Publishing'),
(4, 'Pinnacle Point Publishing Inc.'),
(5, 'The Mezzo Agency'),
(6, 'iWriteBooks Publishing'),
(7, 'BookLogix'),
(8, 'KLE Publishing'),
(9, 'Mynd Matters Publishing'),
(10, 'L.B Publishing'),
(11, 'Dake Publishing'),
(12, 'CKC Publishing House');


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
