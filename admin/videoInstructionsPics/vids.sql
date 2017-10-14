-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 03:42 AM
-- Server version: 10.1.25-MariaDB
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
-- Database: `uwalc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `vids`
--

CREATE TABLE `vids` (
  `objId` int(20) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `youtubeURL` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vids`
--

INSERT INTO `vids` (`objId`, `title`, `youtubeURL`, `description`) VALUES
(1, 'United Way 2016', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0AWIAxqKeNY\" frameborder=\"0\" allowfullscreen></iframe>', 'This video conatins a list of our local agencies and what services they provide for the community.'),
(2, 'Hospice of Limestone County- Camp Hope 2016', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/r1017gBoQ38\" frameborder=\"0\" allowfullscreen></iframe>', 'This video is a slideshow of images from Camp Hope 2016'),
(3, 'Give a Dollar Campaign', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9IuG8Nm6vQU\" frameborder=\"0\" allowfullscreen></iframe>', 'This video gives an inside look into the Give a Dollar campaign.'),
(4, 'Live United Video (United Way of Athens-Limestone County)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/y_hEa8_mSh8\" frameborder=\"0\" allowfullscreen></iframe>', 'This is a video produced by the United Way of Athens-Limestone County in Athens, Al. This was made possible only by the support of the community along with individuals who volunteered their energy, time and knowledge. Thank you to all who helped to make this video possible!'),
(5, 'United Way of Athens-Limestone Recovery 2011', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aMGcX4Q05Lc\" frameborder=\"0\" allowfullscreen></iframe>', 'This a video was produced by Mr. Jonathan Keenum. It documents the storms of April 27, 2011 and the recovery efforts that have followed.'),
(6, 'United Way of Athens-Limestone County 2012', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iVAPGLILtt0\" frameborder=\"0\" allowfullscreen></iframe>', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vids`
--
ALTER TABLE `vids`
  ADD PRIMARY KEY (`objId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vids`
--
ALTER TABLE `vids`
  MODIFY `objId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
