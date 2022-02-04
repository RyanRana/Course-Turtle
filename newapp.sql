-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2022 at 09:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(65) NOT NULL,
  `school` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school`) VALUES
(6, 'Watchung Regional High School'),
(12, 'e'),
(13, 'fewqads'),
(14, '22'),
(15, '9'),
(16, 'r3edw'),
(17, 'ryan5023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(65) NOT NULL,
  `age` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `school` varchar(200) NOT NULL,
  `grade` int(200) NOT NULL,
  `p1` varchar(200) NOT NULL,
  `p2` varchar(200) NOT NULL,
  `p3` varchar(200) NOT NULL,
  `p4` varchar(200) NOT NULL,
  `p5` varchar(200) NOT NULL,
  `p6` varchar(200) NOT NULL,
  `p7` varchar(200) NOT NULL,
  `p8` varchar(200) NOT NULL,
  `p1t` varchar(200) NOT NULL,
  `p2t` varchar(200) NOT NULL,
  `p3t` varchar(200) NOT NULL,
  `p4t` varchar(200) NOT NULL,
  `p5t` varchar(200) NOT NULL,
  `p6t` varchar(200) NOT NULL,
  `p7t` varchar(200) NOT NULL,
  `p8t` varchar(200) NOT NULL,
  `random` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `age`, `name`, `pass`, `email`, `state`, `school`, `grade`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p1t`, `p2t`, `p3t`, `p4t`, `p5t`, `p6t`, `p7t`, `p8t`, `random`) VALUES
(23, 'Student', 'Ryan Rana', 'ryan5024', 'ryanrana04@gmail.com', 'New Jersey', 'Watchung Regional High School', 9, 'App Development', 'gamer', 'Keyboarding', 'Graphic design', 'Video game development', 'Video game development', 'Media Technology', 'Media Technology', 'tom hanks', 'gamer', 'jim cramer', 'yeet', 'yeet', 'yeet', 'yeet', 'yeet', 'z61X5lG1rSsMGhSb7QcQHKcqeRSK8v0VRzZ2NzpNBFQ85ecVnr'),
(24, '32qw', 'shaan lehal', 'ryan5024', '43@gmail.com', 'DE', 'Watchung Regional High School', 9, 'rcd', 'rcdxa', '', '', '', '', '', '', 'vrcdexz', 'rvcedxz', '', '', '', '', '', '', 'CgLWSzE2ZzG0pWPTtBDIMX5OJtMJF7U3l0M1z45MMyTqVKxs6j'),
(25, 'Student', 'Ryan Ranar', 'y5024', 'ryanrana04@gmail.comr', 'New Jersey', 'Watchung Regional High School', 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5XsbbRse9ugCTGYoInkXmC3KDZWf74PW1WotgA4mT6gSyuYzNX'),
(26, 'Student', 'Kavita Ranak', 'ryan5024', '243610@whrhs-stu.org', 'New Jersey', 'Watchung Regional High School', 8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'shfoJtjK9kwWRctmQmkHXJzBOCYGWbUHPP0ue2KizLGQRhUfpY'),
(27, 'Parent', 'Ryan Ranawcd', 'ryan5024', 'ryanrana04@gmail.comcdxzz', 'New Jersey', 'Watchung Regional High School', 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'LWHaDvGtfEBrE5JH6r1pw8IJbg82EC8mVE91oz8iVq2QUG1hZP'),
(28, 'Parent', 'todd carr', 'ryan5024', 'toddcar@gmail.com', 'DE', 'e', 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'h45Zj8zhoeXceMvQqb8MmCsGCWcuMQ6Ozt4Hx386EYV26nxsXj'),
(29, 'Parent', 'Ryan Ranaeeeeeeeee', 'ryan5024', 'ryanrana04@gmail.comtre', 'New Jersey', 'Watchung Regional High School', 8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5YNVSLFCEmChiuU8t1lg0VrvV3YREIHOcfdWaGGw1iPmPUNyFx'),
(30, 'Teacher', 'Richard Branson', 'ryan5024', 'richardbranson@gmail.com', 'CT', 'Watchung Regional High School', 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NPafHgZ7MXx03Qc38OtsSW5Flr0xFtMOB24EOobvWSJKXq96oG'),
(31, 'Student', 'Reeves', 'ryan5024', 'reeves@gmail.com', 'New Jersey', 'Watchung Regional High School', 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'f8IyDWhaw4osUvWAvFCcIbhTWwomgw6u5qqSL8XoMAQdC6fF4h'),
(32, 'Parent', 'richtheparent', 'ryan5024', 'rich@gmail.com', 'AL', 'Watchung Regional High School', 12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'GLhSsLWKLxF84aJV8Hq1Zvyd7MsjJnQGp1s64AKP2a7F3XlQtE'),
(33, 'Parent', 'richthegod', 'ryan5024', 'ryanrana04@gmail.converse', 'CT', 'Watchung Regional High School', 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1pgt1sodTBZjk62zZ9ut8YJUFvYhdQ5UdRNlIfDpnCgz6BG58c'),
(34, 'Teacher', 'fadscxz', 'ryan5024', '243610@whrhs-stu.orgr', 'CO', 'Watchung Regional High School', 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HnHgantTRSRw10MrASzTIvHyxvmnHL3T3UR9DHAXE3SZ2zapuR'),
(35, 'Teacher', 'orkle', 'ryan5024', 'orkle@orkle', 'DC', '9', 12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'LGL5aTbV4AuY2Qcy5S48IZSdHHx8RwDNJ5SfxvSuL9yx5kUEX4'),
(36, 'Parent', 'orklex', 'ryan5024', 'orkle@orkles', 'DE', 'Watchung Regional High School', 8, 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'orklex', 'P08A2Y2hwPwgmk0NhWijf1yFL6j3dKvx7gvTWxQHgeqiW6nc4v'),
(37, 'Parent', 'orklexa', 'ryan5024', 'ryanrana04@gmail.comdsz', 'AK', 'Watchung Regional High School', 8, 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'orklexa', 'pl5MErOyTOvmZcDzPWn7Ck9HTyOayweaD0fVwGiTwGY5AkfuPY'),
(38, 'Parent', 'fcszx', 'ryan5024', 'ricflair@gmail.com', 'CT', 'Watchung Regional High School', 8, 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'fcszx', 'ZILkvKaqi6YLTXJgoJ5dZMe0u4xgY01jg7WuphnTU1xTaANRbx'),
(39, 'Parent', 'cdaxz', 'ryan5024', 'rXZ@gmail.com', 'CO', 'ryan5023', 8, 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'cdaxz', 'dNX2zaeepXTsjO0HcEsUD3YtvHODDqyVU6T20raq8QTWWNvDfS'),
(40, 'Parent', 'orklethegod', 'ryan5024', 'orkle@orklethegod', 'CT', 'e', 8, 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', 'orklethegod', '8eDJ4PE2GCYwsJqeAWLpyiflnhBVVhoVTPtSNx0CKT5IABMpxP'),
(41, 'Parent', 'inderjeet Rana', 'ryan5024', 'njhills@gmail.com', 'NJ', 'Watchung Regional High School', 8, 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'inderjeet Rana', 'LObJYDJj12mNrvggVehfroMcpVWBH9eWpgsmwAwQMNRdpVOYhC'),
(42, 'Parent', 'Kavita Rana', 'ryan5024', 'kavitarana@Gmail.com', 'NJ', 'Watchung Regional High School', 8, 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'Kavita Rana', 'kWmLB6eqssdCqNhkWCN6Wz7HNNuV1UM647xXz85H7JqU5iGrfP'),
(43, 'Student', 'ajlaw10', 'ryan5024', 'ajlaw10@gmail.com', 'CA', 'Watchung Regional High School', 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ovl27KxFaNUa4wUfwabgEBZLDXReIXs2ok6C45gVpw4uEI98pH'),
(44, 'Student', 'yeet4', 'ryan5024', 'yeet2@gmail.com4', 'AL', 'Watchung Regional High School', 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Qbb3Jxmx7Pj90ZSSuRiuIcpORkOz6FevFEzDAZPpYN2UixNWvh'),
(45, 'Student', 'yeet5', 'ryan5024', 'yeet2@gmail.com5', 'AK', 'e', 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cPqt70r9JZCJmL8Y3iwFqgsSRyXtzDRLPLRtqe5wyBNEvVHbEh'),
(46, 'Student', 'yeet6', 'ryan5024', 'yeet2@gmail.com6', 'AL', 'Watchung Regional High School', 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'hALm7plXCOu8zUiGyU4KVWfbuoyM0nuyxg8NcWI8IdbrANN2XR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
