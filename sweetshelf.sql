-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 01:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweetshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookstock`
--

CREATE TABLE `bookstock` (
  `bookID` int(9) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookstock`
--

INSERT INTO `bookstock` (`bookID`, `bookname`, `author`, `price`, `category`, `thumbnail`) VALUES
(100000001, 'Mystic Mirror', 'Hilary Larry', 15, 'Fiction', 'mysticmirror.jpg'),
(100000002, ' The Biscuit', 'Dean Richards', 9, 'Fiction', 'theeyesofdarkness.jpg'),
(100000003, 'One Day', 'Marian Smith', 12, 'Fiction', 'grownups.jpg'),
(100000004, 'The Song Birds of Yore', 'Delia Oliver', 13, 'Fiction', 'wherethecrewdadssing.jpg'),
(100000005, 'Sam, Private Eye', 'Matt Rollwhip', 5, 'Fiction', 'thecrossing.jpg'),
(100000006, 'They Came From The Stars', 'Lee Vivaldi', 9, 'Fiction', 'thevisitor.jpg'),
(100000007, 'The Family of Yesterday', 'Ali Michael', 8, 'Fiction', 'hissecretfamily.jpg'),
(100000008, 'Dr. Vector', 'Stan Howard', 29, 'Fiction', 'thesilentpatient.jpg'),
(100000009, 'Witch Song', 'Kara South', 11, 'Fiction', 'thewhisperman.jpg'),
(100000010, 'Derelict Nation', 'Carlton Weatherly', 9, 'Fiction', 'americandirt.jpg'),
(100000011, 'Justice For John ', 'David Foley', 15, 'Fiction', 'redemption.jpg'),
(100000012, 'Sanguine Curiousity', 'Erin Truman', 8, 'Fiction', 'thestrangerswife.jpg'),
(100000013, 'Theory of Magic', 'Irvin Butcher', 9, 'Fiction', 'theguestlist.jpg'),
(100000014, 'Plutos Child', 'Erik Hillenbrand', 10, 'Fiction', 'bluemoon.jpg'),
(100000015, 'Sky Warden', 'Dean Scott', 5, 'Fiction', 'skywarden.jpg'),
(100000016, 'Cold Fury', 'Abbie Jane Douglas', 12, 'Fiction', 'coldfury.jpg'),
(100000017, 'All the Gold ', 'Nick Hunter', 6, 'Fiction', 'allthegold.jpg'),
(100000019, 'How I Found Success', 'Johnny Skloot', 6, 'Non-fiction', 'howifoundsuccess.jpg'),
(100000020, 'The Football Frank Story', 'Abbie Kirby', 9, 'Non-fiction', 'thefootballfrankstory.jpg'),
(100000021, 'Private Tom', 'Erik Capote ', 10, 'Non-fiction', 'privatetom.jpg'),
(100000022, 'Henrietta Morgan', 'Sarah Jane Larson', 5, 'Non-fiction', 'henriettamorgan.jpg'),
(100000024, 'Skyscrapers and Art', 'Joe Yalom', 5, 'Non-fiction', 'skyscrapersandart.jpg'),
(100000029, 'How To Be A Positive Influence', 'Gillian Allan', 6, 'Non-fiction', 'positiveinfluence.jpg'),
(100000031, 'Get Fit In A Month', 'Fearne Kirby', 8, 'Non-fiction', 'getfitinamonth.jpg'),
(100000032, 'Joyous', 'Tom Mansoulie', 3, 'Non-fiction', 'joyous.jpg'),
(100000033, 'Mindfulness in Life', 'Joe Higgins ', 8, 'Non-fiction', 'mindfulnessinlife.jpg'),
(100000034, 'Conquering Earth', 'Victoria Brogan', 16, 'Non-fiction', 'conqueringearth.jpg'),
(100000035, 'Optimising Your Brain', 'Scott Perlmutter', 14, 'Non-fiction', 'optimisingyourbrain.jpg'),
(100000036, 'Get Started', 'Robert Smith', 9, 'Non-fiction', 'getstarted.jpg'),
(100000037, 'Textbook of Medical Physiology', 'Josh Craft', 66, 'Educational', 'textbookofmedicalphysiology.jpg'),
(100000038, 'Textbook of Natural Medicine', 'Joseph E. Dominic', 125, 'Educational', 'textbookofnaturalmedicine.jpg'),
(100000039, 'Textbook of Veterinary Nursing', 'Greg Cooper', 51, 'Educational', 'textbookofveterinarynursing.jpg'),
(100000040, 'Edexcel AS and A level Mathematics Textbook', 'Victoria Hollins', 20, 'Educational', 'asandalevelmathematics.jpg'),
(100000041, 'Textbook For Dental Nurses', 'Susan Lissauer', 21, 'Educational', 'textbookfordentalnurses.jpg'),
(100000042, 'Veterinary Anatomy and Physiology Textbook', 'Melanie Mansoulie', 28, 'Educational', 'veterinaryanatomyandphysiologytextbook.jpg'),
(100000043, 'Key Physics Formulae', 'Tom Turner', 21, 'Educational', 'keyphysicsformulae.jpg'),
(100000044, 'Textbook of Paediatrics', 'Will Whiting', 34, 'Educational', 'textbookofpaediatrics.jpg'),
(100000045, 'Human Nutrition ', 'Susan Hill', 49, 'Educational', 'humannutrition.jpg'),
(100000046, 'Contract Law', 'Paul Merkin', 31, 'Educational', 'contractlaw.jpg'),
(100000047, 'Education and Training Textbook', 'Amanda Whiting', 18, 'Educational', 'educationandtrainingtextbook.jpg'),
(100000048, 'Commercial Law', 'Dr. Josh Nuttal', 29, 'Educational', 'commerciallaw.jpg'),
(100000049, 'Abnormal and Clinical Psychology', 'Marianne Dickson', 32, 'Educational', 'clinicalpsychology.jpg'),
(100000050, 'A-Level Maths Textbook', 'JJM Books', 28, 'Educational', 'alevelmathstextbook.jpg'),
(100000051, 'GCSE and IGCSE Maths Textbook', 'JJM Books', 15, 'Educational', 'gcseandigcsemaths.jpg'),
(100000052, 'Dermatology', 'David R Arden-Jones', 31, 'Educational', 'dermatology.jpg'),
(100000053, 'Surgical Nursing on Small Animals', 'Marianne Durham', 51, 'Educational', 'surgicalnursingonsmallanimals.jpg'),
(100000054, 'Non-Medical Prescribing', 'Dilyse Hamilton', 30, 'Educational', 'nonmedicalprescribing.jpg'),
(100000055, 'The Little Lion', 'Abbie Violet', 6, 'Children\'s', 'littlelion.jpg'),
(100000056, 'What Is That', 'Kate Andreae', 6, 'Children\'s', 'whatisthat.jpg'),
(100000057, 'The Talking Pencil', 'Craig Pankhurst', 4, 'Children\'s', 'thetalkingpencil.jpg'),
(100000058, 'Silly Monkey', 'Judith Rees', 4, 'Children\'s', 'sillymonkey.jpg'),
(100000059, 'Yellow Tiger', 'Sylva Russel', 8, 'Children\'s', 'yellowtiger.jpg'),
(100000060, 'Pirate Warriors', 'Eric Smallman', 5, 'Children\'s', 'piratewarriors.jpg'),
(100000061, 'Fox Knight', 'Maizie Carle', 4, 'Children\'s', 'fox.jpg'),
(100000062, '10 Fun Trampoline Tricks', 'Sierra West', 4, 'Children\'s', 'trampoline.jpg'),
(100000064, 'Just Kate!', 'Kate O\'Neill', 6, 'Children\'s', 'justkate.jpg'),
(100000065, 'Curious Seahorse', 'Hanno Rosen', 5, 'Children\'s', 'seahorse.jpg'),
(100000066, 'Professor Wizard', 'David Rauf', 6, 'Children\'s', 'profwizard.jpg'),
(100000067, 'The Frog & The Butterfly', 'Amy Smallman', 6, 'Children\'s', 'frogbutterfly.jpg'),
(100000068, 'Goofy Gecko', 'Poppy Hailwood', 4, 'Children\'s', 'gecko.jpg'),
(100000069, 'Going on a Boat', 'David Oliver', 6, 'Children\'s', 'boat.jpg'),
(100000070, 'Charlie In Space', 'Kevin Jefferson', 6, 'Children\'s', 'charlieinspace.jpg'),
(100000071, 'Alice In Wonderland', 'Lewis Carroll', 5, 'Children\'s', 'aliceinwonderland.jpg'),
(100000072, 'Cinderella', 'Charles Perrault', 11, 'Children\'s', 'cinderella.jpg'),
(100000073, 'The Dark Lamposts', 'M.M. Bogart', 10, 'Fiction', 'thedancinggirls.jpg'),
(100000074, 'The Righteous Hand', 'Mark Williams', 12, 'Fiction', 'righteoushand.jpg'),
(100000075, 'Eldest Gambit', 'J.W.Weil', 14, 'Fiction', 'theforgottenempire.jpg'),
(100000079, 'Sleeping Beauty', 'Charles Perrault', 8, 'Children\'s', 'sleepingbeauty.jpg'),
(100000080, 'Rapunzel', 'Wilhelm Grimm & Jacob Grimm', 12, 'Children\'s', 'rapunzel.jpg'),
(100000081, 'Hansel and Gretel', 'Wilhelm Grimm, Jacob Grimm & Audrey Daly', 5, 'Children\'s', 'hanselandgretel.jpg'),
(100000082, 'King Arthur and His Knights of the Round Table', 'Roger Lancelyn Green', 7, 'Children\'s', 'kingarthurandhisknightsoftheroundtable.jpg'),
(100000083, 'A Miner and His Canary', 'Bob Irwin', 8, 'Non-fiction', 'aminerandhiscanary.jpg'),
(100000084, 'My Life So Far', 'Kiran Thorne', 12, 'Non-fiction', 'mylifesofar.jpg'),
(100000085, 'The Day of Regret', 'Rhett Thomas', 9, 'Non-fiction', 'thedayofregret.jpg'),
(100000086, 'Dry Waters', 'Stanley Wilbert', 5, 'Non-fiction', 'drywaters.jpg'),
(100000087, 'The Journey of Eleven', 'Markus Parker', 14, 'Non-fiction', 'thejourneyofeleven.jpg'),
(100000088, 'When the Sky Was Clear', 'Allan Troy', 9, 'Non-fiction', 'whentheskywasclear.jpg'),
(100000089, 'The Warrior Who Fell', 'Don Palmer', 8, 'Fiction', 'warriorwhofell.jpg'),
(100000090, 'The Mummy Disaster', 'Tara Anders', 13, 'Fiction', 'mummy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Email` varchar(50) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Region` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Email`, `Name`, `Password`, `Date of Birth`, `Region`) VALUES
('newuser@gmail.com', 'newuser', 'newuser', '2000-01-01', 'UK'),
('testna@gmail.com', 'test', 'test', '2000-01-01', 'North America'),
('testredundant@gmail.com', 'testredundant', 'testredundant', '2000-01-01', 'UK'),
('testuk@gmail.com', 'testuk', 'testuk', '2000-01-01', 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `email` varchar(100) NOT NULL,
  `ticket_content` varchar(300) NOT NULL,
  `ticket_category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support_tickets`
--

INSERT INTO `support_tickets` (`email`, `ticket_content`, `ticket_category`) VALUES
('newticket@gmail.com', 'New ticket', 'Delivery'),
('testredundant@gmail.com', 'testredundant', 'Prices & Payment Methods');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookstock`
--
ALTER TABLE `bookstock`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
