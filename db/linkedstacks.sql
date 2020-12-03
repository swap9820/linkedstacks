-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 10:02 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkedstacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE `bio` (
  `User ID` int NOT NULL,
  `Bio` text NOT NULL,
  `Dept` text NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Likes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`User ID`, `Bio`, `Dept`, `Year`, `Likes`) VALUES
(1, 'flutter dev hello', 'COMP', 'FE', 100),
(2, 'web dev | IOT expert', 'IT', 'TE', 9),
(3, 'Android development', 'Elec', 'SE', 43),
(4, 'Wordpress developer', 'COMP', 'BE', 33);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `User ID` int NOT NULL,
  `Project ID` int NOT NULL,
  `Comment` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `User ID` int NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`User ID`, `username`, `password`) VALUES
(1, 'sid', '1234'),
(2, '1234', '1234'),
(3, 'testing', 'user'),
(4, 'hello', 'hello1'),
(8, 'hello', 'user'),
(9, 'hello', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Project ID` int NOT NULL,
  `Project Name` varchar(30) NOT NULL,
  `Project Info` text NOT NULL,
  `Project Tags` varchar(256) NOT NULL,
  `User ID` int NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Likes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project ID`, `Project Name`, `Project Info`, `Project Tags`, `User ID`, `Timestamp`, `Likes`) VALUES
(1, 'Hellow Word', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat ex odio, sed pretium tellus iaculis ac. Fusce non venenatis tortor. Cras bibendum finibus tristique. Sed in ultricies tortor. Duis ornare mattis suscipit. Etiam non molestie purus. Pellentesque ac magna nec ipsum posuere dictum sit amet vitae velit. In scelerisque quam in metus tempus, a efficitur leo dignissim. Vivamus malesuada turpis arcu, vitae pharetra nisl elementum sed. Integer blandit mauris libero, quis tincidunt ante ultrices quis. Duis finibus vulputate orci. Pellentesque ac egestas diam, id condimentum orci. Mauris eros enim, faucibus a posuere fermentum, interdum et risus. Nam faucibus consectetur nulla, quis pulvinar dolor euismod nec. Curabitur ornare nibh libero, mattis aliquam felis consectetur vel.\r\n\r\nDonec at leo nec felis hendrerit tincidunt sed ac tortor. Praesent eget diam et leo maximus commodo et ac quam. Vestibulum ut eros lectus. Vestibulum sed facilisis ipsum, quis congue nibh. Vestibulum vel porttitor risus, sit amet scelerisque tortor. Donec a arcu pulvinar, consequat tortor sed, imperdiet felis. Pellentesque luctus vitae velit eu semper. In ullamcorper iaculis nisi, ac mollis nulla sollicitudin nec. Nullam aliquam porta arcu vel suscipit. Nam congue ex sed convallis eleifend. Maecenas a odio a augue pellentesque volutpat. Quisque nisi augue, accumsan at pretium ut, ornare vitae enim. Morbi placerat convallis neque ac varius. Phasellus rhoncus est ut sem malesuada porttitor. Donec pretium molestie est eu varius.\r\n\r\nSed commodo lectus ut ipsum tempus ullamcorper. Donec vitae augue eget nibh dignissim mattis ut a massa. Aliquam lacinia tincidunt felis, eu rhoncus tortor tincidunt gravida. Nam lacinia sodales lectus. Aenean magna orci, efficitur eget maximus eu, tincidunt nec nibh. Sed et est eget lacus vehicula efficitur sit amet at ligula. Suspendisse potenti. Aenean vitae molestie risus. Nam id sapien arcu. Fusce malesuada felis vel orci auctor facilisis. Duis non dictum magna. Nulla fringilla eget eros vel vulputate. Nulla facilisi. Nam vel nibh in leo laoreet egestas eget sed leo. Maecenas hendrerit congue urna, ac cursus enim vehicula et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'Web Development', 1, '2020-12-03 08:08:51', 12),
(2, 'Career Buddy', 'This a an app which helps in the dev of career', 'Flutter', 1, '2020-12-03 08:11:33', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`User ID`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`User ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `User ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Project ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
