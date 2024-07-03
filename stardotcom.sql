-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 06:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stardotcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emailaddress` varchar(40) NOT NULL,
  `contactnumber` bigint(20) NOT NULL,
  `seminar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`firstname`, `lastname`, `emailaddress`, `contactnumber`, `seminar`) VALUES
('suma', 'talluri', '76565655654', 0, 'Essence and Nature of the Zodiac'),
('hhari', 'teja', 'tej@gmail.com', 8783483652, 'Astrologer and Structure of the Solar System '),
('Keerthi', 'Annasarapu', 'sxl56540@ucmo.edu', 87834833433, 'Astrologer and Structure of the Solar System '),
('Keerthi', 'Annasarapu', 'sxl56540@ucmo.edu', 87834833433, 'Astrologer and Structure of the Solar System '),
('FNU', 'SUma', 'sxl56540@ucmo.edu', 8783483652, 'Vedic Astrology'),
('FNU', 'SUma', 'sxl56540@ucmo.edu', 8783483652, 'Vedic Astrology'),
('FNU', 'SUma', 'sxl56540@ucmo.edu', 8783483652, 'Vedic Astrology'),
('suma', 'talluri', 'suma@abc.com', 345322224, 'Introduction to Astrology and Astronomy'),
('suma', 'talluri', 'suma@abc.com', 345322224, 'Introduction to Astrology and Astronomy'),
('suma', 'talluri', 'suma@abc.com', 345322224, 'Introduction to Astrology and Astronomy'),
('suma', 'talluri', 'suma@abc.com', 345322224, 'Introduction to Astrology and Astronomy'),
('rara', 'gara', 'sxl56540@ucmo.edu', 8783483652, 'Astrologer and Structure of the Solar System '),
('rara', 'gara', 'sxl56540@ucmo.edu', 8783483652, 'Astrologer and Structure of the Solar System '),
('rara', 'gara', 'sxl56540@ucmo.edu', 8783483652, 'Astrologer and Structure of the Solar System '),
('rara', 'gara', 'sxl56540@ucmo.edu', 8783483652, 'Astrologer and Structure of the Solar System '),
('FNU', 'ShabnamAra', 'sxl56540@ucmo.edu', 8783483652, 'Essence and Nature of the Zodiac'),
('ghwegw', 'wqeqwe', 'ew@hwh', 234525345, 'Astrologer and Structure of the Solar System '),
('keerthi', 'Annasa', 'annas@gmail.com', 5453626525, 'Movement of the Celestial Sphere'),
('keerthi', 'Annasa', 'annas@gmail.com', 5453626525, 'Movement of the Celestial Sphere'),
('keerthi', 'Annasa', 'annas@gmail.com', 5453626525, 'Movement of the Celestial Sphere'),
('keerthi', 'Annasa', 'annas@gmail.com', 5453626525, 'Introduction to Astrology and Astronomy'),
('keerthi', 'Annasa', 'annas@gmail.com', 5453626525, 'Introduction to Astrology and Astronomy'),
('FNU', 'ShabnamAra', 'sxl56540@ucmo.edu', 8783483652, 'Movement of the Celestial Sphere'),
('suma', 'Talluri', 'suma@gmail.com', 123123123, 'Essence and Nature of the Zodiac'),
('Akash', 'Maddala', 'Akash@gmail.com', 123132334, 'Astrologer and Structure of the Solar System '),
('FNU', 'Ara', 'sxl56540@ucmo.edu', 8783483652, 'Vedic Astrology'),
('FNU', 'Ara', 'sxl56540@ucmo.edu', 8783483652, 'Vedic Astrology'),
('FNU', 'Ara', 'sxl56540@ucmo.edu', 8783483652, 'Vedic Astrology'),
('sarala', 'Annasarapu', 'sarala@gmail.com', 7896914640, 'Essence and Nature of the Zodiac'),
('sarala', 'Annasarapu', 'sarala@gmail.com', 7896914640, 'Essence and Nature of the Zodiac'),
('sarala', 'Annasarapu', 'sarala@gmail.com', 7896914640, 'Vedic Astrology'),
('sarala', 'Annasarapu', 'sarala@gmail.com', 7896914640, 'Astrologer and Structure of the Solar System '),
('sarala', 'Annasarapu', 'sarala@gmail.com', 7896914640, 'Astrologer and Structure of the Solar System '),
('sarala', 'Annasarapu', 'sarala@gmail.com', 7896914640, 'Astrologer and Structure of the Solar System '),
('nani', 'nani', 'abc@abc.com', 123233232, 'Movement of the Celestial Sphere'),
('nani', 'nani', 'abc@abc.com', 123233232, 'Movement of the Celestial Sphere'),
('nani', 'nani', 'abc@abc.com', 123233232, 'Movement of the Celestial Sphere'),
('nani', 'nani', 'abc@abc.com', 123233232, 'Essence and Nature of the Zodiac'),
('nani', 'nani', 'abc@abc.com', 123233232, 'Vedic Astrology'),
('nani', 'nani', 'abc@abc.com', 123233232, 'Astrologer and Structure of the Solar System '),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Astrologer and Structure of the Solar System '),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Essence and Nature of the Zodiac'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Essence and Nature of the Zodiac'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Essence and Nature of the Zodiac'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Keerthi', 'Annasarapu', 'kxa41630@ucmo.edu', 645356473, 'Introduction to Astrology and Astronomy'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Vedic Astrology'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Vedic Astrology'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Essence and Nature of the Zodiac'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Introduction to Astrology and Astronomy'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Astrologer and Structure of the Solar System '),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Astrologer and Structure of the Solar System '),
('Saanvi', 'Sai', 'saani@gmail.com', 3425674536, 'Movement of the Celestial Sphere'),
('Yellaiah', 'Annasa', 'Yellaiah@gmail.com', 8763562556, 'Essence and Nature of the Zodiac');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `aboutus` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `founders` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`aboutus`, `vision`, `mission`, `founders`) VALUES
('', 'To inculcate faith of people in the ancient astrological science by providing them the best solutions to their problems and making a community that is less worried as we are there to help them through just a single tap. We want to convey the righteousness of this beautiful astrological science in this rapidly developing world who has lost its faith somehow in this spiritual science. So just be with us in our journey which starts at just a tap. It is both scientifical and traditional website for stars', 'To help the people who feel trapped by the atrocities and difficult phases of life through astrological guidance by our expert astrologers. Thus making people happy and satisfied through trustworthy relationship and to make them lead a better life with contentment. We also believe that we will find our contentment by helping people in their toughest times by providing them the right guidance in ways that are mentioned in our ancient and glorious astrological science. Life is always beautiful', ''),
('We feel that Astrology can be used as a powerful and fun tool for understanding ourselves, others, and the world around us. At stardotcom, we can use the natal chart (also called a birth chart or horoscope) to define and understand our world. For example, we can use psychological tools and terminology to explore human behavior. Similarly, Astrology gives us rich tools for understanding human character and offers us a language for communicating our observations with others.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `horoscope`
--

CREATE TABLE `horoscope` (
  `name` text NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `dob` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horoscope`
--

INSERT INTO `horoscope` (`name`, `age`, `gender`, `dob`, `time`) VALUES
('', 0, '2022-04-13', '0000-00-00', '00:00:12'),
('', 0, '2022-04-13', '0000-00-00', '00:00:12'),
('kee', 0, '2022-04-11', '0000-00-00', '00:00:55'),
('kee', 0, '2022-04-12', '0000-00-00', '00:00:21'),
('kee', 0, '2022-04-12', '0000-00-00', '00:00:21'),
('kee', 0, '2022-04-12', '0000-00-00', '00:00:21'),
('kee', 0, '2022-04-12', '0000-00-00', '00:00:21'),
('kee', 0, '2022-04-12', '0000-00-00', '00:00:21'),
('kee', 0, '2022-04-12', '0000-00-00', '00:00:21'),
('kee', 0, '2022-04-13', '0000-00-00', '00:00:23'),
('kee', 0, '2022-04-13', '0000-00-00', '00:00:23'),
('kee', 0, '2022-04-13', '0000-00-00', '00:00:23'),
('kee', 0, '2022-04-13', '0000-00-00', '00:00:23'),
('kee', 0, '2022-04-13', '0000-00-00', '00:00:23'),
('gjgmnb', 56, ' ', '2022-04-30', '08:51:00'),
('gjgmnb', 56, ' ', '2022-04-30', '08:51:00'),
('sarala', 45, 'Female', '2022-04-12', '06:52:00'),
('koooo', 45, 'Female', '2022-04-05', '19:20:00'),
('koooo', 45, 'Female', '2022-04-05', '19:20:00'),
('jara', 67, 'Female', '2022-04-14', '08:27:00'),
('kee', 23, 'Female', '2022-04-13', '07:39:00'),
('kee', 23, 'Female', '2022-04-13', '07:39:00'),
('gjgmnb', 23, 'Female', '0000-00-00', '19:38:00'),
('gjgmnb', 23, 'Female', '0000-00-00', '19:38:00'),
('koooo', 23, 'Female', '2022-04-12', '08:42:00'),
('koooo', 23, 'Female', '2022-04-12', '08:42:00'),
('koooo', 23, 'Female', '2022-04-12', '08:42:00'),
('kee', 23, 'Female', '1997-01-20', '08:55:00'),
('koooo', 23, 'Female', '2022-04-12', '08:42:00'),
('koooo', 21, 'Female', '2022-04-08', '10:12:00'),
('gjgmnb', 45, 'Female', '2022-04-19', '11:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `name` text NOT NULL,
  `presenter` text NOT NULL,
  `date and time` datetime NOT NULL,
  `venue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`name`, `presenter`, `date and time`, `venue`) VALUES
('Introduction to Astrology and Astronomy', 'Saint Alexander Tux', '2022-05-08 10:00:00', 'Zoom'),
('Vedic Astrology', 'Prince Maguire Anderson ', '2022-05-15 10:00:00', 'Zoom'),
('Movement of the Celestial Sphere', 'Jackson Young Jr.', '2022-05-22 10:00:00', 'Zoom'),
('Essence and Nature of the Zodiac', 'Zoll Jefferson Zoe', '2022-05-29 10:00:00', 'Zoom'),
('Astrologer and Structure of the Solar System ', 'Gracen Holden Marvellous', '2022-06-05 10:00:00', 'Zoom'),
('Astrology and its Connection to Science', 'Abella Christopher Bean', '2022-06-12 10:00:00', 'Zoom');

-- --------------------------------------------------------

--
-- Table structure for table `stardotcominfo`
--

CREATE TABLE `stardotcominfo` (
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `aboutus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stardotcominfo`
--

INSERT INTO `stardotcominfo` (`vision`, `mission`, `aboutus`) VALUES
('To inculcate the faith of people in ancient astrological science by providing them with the best solutions to their problems and making a community that is less worried as we are there to help them through just a single tap. We want to convey the righteousness of this beautiful astrological science in this rapidly developing world that has lost its faith somehow in this spiritual science. So just be with us in our journey which starts at just a tap. It is both a scientifical and traditional website for stars.', 'To help the people who feel trapped by the atrocities and difficult phases of life through astrological guidance by our expert astrologers. Thus making people happy and satisfied through trustworthy relationships and making them lead a better life with contentment. We also believe that we will find our contentment by helping people in their toughest times by providing them the right guidance in ways that are mentioned in our ancient and glorious astrological science. Life is always beautiful.', 'We, at Stardotcom, feel that Astrology can be used as a powerful and fun tool for understanding ourselves, others, and the world around us. We use many different tools, or languages, to define and understand our world. For example, we can natal chart to explore human behavior. Astrology gives us rich tools for understanding human character and offers us a language for communicating our observations with others.');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `emailaddress` varchar(30) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `text` tinyint(1) NOT NULL,
  `email` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`emailaddress`, `phonenumber`, `name`, `text`, `email`) VALUES
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'hgggg', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'ggggggg', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 1, 0),
('sxl56540@ucmo.edu', 8783483652, 'FNUShabnamAra', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 0),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 0),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 0),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 0),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 0),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 0),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 0, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 1),
('Ramya@gmail.com', 4324235262, 'Ramya', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zodiacsigns`
--

CREATE TABLE `zodiacsigns` (
  `Aries` text NOT NULL,
  `Taurus` text NOT NULL,
  `Gemini` text NOT NULL,
  `Cancer` text NOT NULL,
  `Leo` text NOT NULL,
  `Virgo` text NOT NULL,
  `Libra` text NOT NULL,
  `Socrpio` text NOT NULL,
  `Sagittarius` text NOT NULL,
  `Capricorn` text NOT NULL,
  `Aquarius` text NOT NULL,
  `Pisces` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zodiacsigns`
--

INSERT INTO `zodiacsigns` (`Aries`, `Taurus`, `Gemini`, `Cancer`, `Leo`, `Virgo`, `Libra`, `Socrpio`, `Sagittarius`, `Capricorn`, `Aquarius`, `Pisces`) VALUES
('You will spend time contemplating, and receiving guidance from suitable people, and problems in higher education will go away. There is a chance of success in job interviews, and keep an eye out for the colour red.', 'Creative thoughts will start to form in your mind, and your reputation at work will increase. If you have kids, you\'ll be spending some real quality time with them.', 'You should keep your plans to yourself for now. It\'s a big day for marketing and media people, though family members might get upset with you. Work will be carried out at a slower rate, and excessive praise should be avoided.', 'New business deals will present themselves and don\'t give too much importance to others\' opinions.', 'It\'s important that you try to maintain a disciplined daily routine, and you\'ll have to work extra hard today. You\'re likely to be fearful of an unwanted event.', 'It\'s essential that you strike a balance between your family and work life, and some long-term issues will be resolved today. Your responsibility and authority at work will increase, but don\'t give your trust away so easily.', 'Be careful with lending and borrowing money, pay attention to the rules of the road, and don\'t let the quality of your work slip too much. Remember your goals and don\'t become careless about them.\r\n\r\n', 'Some big decisions about business might need to be made and it\'s important that you complete your work on time.', 'Self-confidence will remain high and thoughts of marriage might cross your mind. There\'s some excitement about work, and things will stay good in your family.', 'You should steer clear of investments without proper planning, and you\'ll have to use your capabilities well.', 'Don\'t overlook your parents\' advice, keep care of your health, and don\'t worry if your daily routine becomes a little more chaotic.', 'Positivity is on its way in your marriage, and the health of your family will stay good. A promotion may be coming, too.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
