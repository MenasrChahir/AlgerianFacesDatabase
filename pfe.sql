-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 06:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
(1, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `profession` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'not-validate',
  `valider` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `username`, `email`, `profession`, `password`, `status`, `valider`) VALUES
(3, 'safa', 'safa@gmail.com', 'doctor', 'arslane', 'validate', 1),
(9, 'arslane', 'arslane@gmail.com', 'Teacher', 'arslane', 'validate', 1),
(10, 'jamel', 'jamel@gmail.com', 'professor ', 'arslane', 'validate', 1),
(11, 'marwa ', 'marwa@gmail.com', 'doctor', 'arslane', 'not-validate', 0),
(12, 'chahir', 'chahir@gmail.com', 'psychologist', 'arslane', 'not-validate', 0),
(13, 'fouad', 'fouad@gmail.com', 'student', 'arslane', 'validate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `age` int(130) NOT NULL,
  `emotion` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'not validate',
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(150) NOT NULL,
  `valider` int(2) NOT NULL DEFAULT 0,
  `date_affect` varchar(150) NOT NULL,
  `affecter` varchar(150) NOT NULL DEFAULT 'not-affected',
  `affect` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `age`, `emotion`, `gender`, `status`, `date`, `image`, `valider`, `date_affect`, `affecter`, `affect`) VALUES
(98, 27, 'surprised', 'Women', 'validate', '2021-06-30 19:11:55', 'img/60dcc1fb7a34b0.74218106.png', 1, '', 'affected', 1),
(99, 26, 'sad', 'man', 'validate', '2021-06-30 19:12:40', 'img/60dcc2284e5c16.52374792.png', 1, '21-07-02', 'affected', 1),
(100, 6, 'surprised', 'man', 'validate', '2021-06-30 19:16:22', 'img/60dcc306e6b4e0.04972133.png', 1, '', 'affected', 1),
(101, 30, 'happy', 'man', 'validate', '2021-06-30 19:17:37', 'img/60dcc351146f43.32365100.png', 1, '21-07-02', 'affected', 1),
(102, 25, 'happy', 'Women', 'validate', '2021-06-30 19:21:01', 'img/60dcc41d89b361.48615305.png', 1, '', 'not-affected', 0),
(103, 18, 'surprised', 'man', 'validate', '2021-06-30 19:36:20', 'img/60dcc7b480b8a3.25258589.png', 1, '21-07-02', 'affected', 1),
(104, 27, 'happy', 'Women', 'validate', '2021-06-30 19:37:51', 'img/60dcc80f537d94.67541324.png', 1, '21-07-02', 'affected', 1),
(105, 2, 'surprised', 'man', 'validate', '2021-06-30 19:38:44', 'img/60dcc8443a1a12.03706628.png', 1, '', 'not-affected', 0),
(106, 27, 'angry', 'Women', 'validate', '2021-06-30 19:39:11', 'img/60dcc85f02a9b2.08688325.png', 1, '21-07-02', 'affected', 1),
(107, 10, 'sad', 'man', 'validate', '2021-06-30 19:39:32', 'img/60dcc874eafbf6.36497980.png', 1, '21-07-03', 'affected', 1),
(108, 28, 'happy', 'Women', 'validate', '2021-06-30 19:39:55', 'img/60dcc88b9a4fe3.53879632.png', 1, '', 'not-affected', 0),
(109, 33, 'sad', 'man', 'validate', '2021-06-30 19:41:27', 'img/60dcc8e71aab93.69491990.png', 1, '', 'not-affected', 0),
(110, 16, 'angry', 'man', 'validate', '2021-06-30 19:41:43', 'img/60dcc8f7bdc422.36403610.png', 1, '', 'not-affected', 0),
(111, 24, 'sad', 'Women', 'validate', '2021-06-30 19:43:29', 'img/60dcc96137ec53.96524087.png', 1, '', 'not-affected', 0),
(112, 24, 'happy', 'Women', 'validate', '2021-06-30 19:43:50', 'img/60dcc976e3e7a4.16964826.png', 1, '', 'not-affected', 0),
(113, 25, 'sad', 'Women', 'validate', '2021-06-30 19:44:07', 'img/60dcc987b21c30.91415810.png', 1, '', 'not-affected', 0),
(114, 33, 'happy', 'Women', 'validate', '2021-06-30 19:44:19', 'img/60dcc993e4a3e2.11250851.png', 1, '', 'not-affected', 0),
(115, 5, 'angry', 'man', 'validate', '2021-06-30 19:44:33', 'img/60dcc9a1b03591.42620873.png', 1, '', 'not-affected', 0),
(118, 43, 'happy', 'man', 'validate', '2021-07-05 12:21:49', 'img/60e2f95d915641.61245968.png', 1, '', 'not-affected', 0),
(121, 25, 'happy', 'Women', 'not validate', '2021-07-05 12:31:47', 'img/60e2fbb3e534b6.32405123.png', 0, '21-07-09', 'affected', 1),
(122, 23, 'neutral', 'man', 'validate', '2021-07-05 12:34:43', 'img/60e2fc63a1c228.39326101.png', 1, '', 'not-affected', 0),
(123, 24, 'happy', 'man', 'not validate', '2021-07-05 12:35:38', 'img/60e2fc9a9bdc57.79156727.png', 0, '21-07-09', 'affected', 1),
(124, 30, 'surprised', 'Women', 'not validate', '2021-07-05 12:36:05', 'img/60e2fcb59aed91.43256316.png', 0, '', 'not-affected', 0),
(125, 27, 'happy', 'Women', 'not validate', '2021-07-05 12:37:28', 'img/60e2fd08a9abd4.14585958.png', 0, '21-07-09', 'affected', 1),
(126, 24, 'happy', 'Women', 'not validate', '2021-07-05 12:38:04', 'img/60e2fd2cacae99.45013231.png', 0, '', 'not-affected', 0),
(127, 29, 'angry', 'man', 'validate', '2021-07-05 12:44:18', 'img/60e2fea2516940.24006904.png', 1, '', 'not-affected', 0),
(128, 23, 'sad', 'Women', 'validate', '2021-07-05 13:07:43', 'img/60e3041f24f8d7.29683970.png', 1, '', 'not-affected', 0),
(129, 32, 'angry', 'man', 'validate', '2021-07-05 13:15:00', 'img/60e305d4e85e66.18122109.png', 1, '', 'not-affected', 0),
(131, 33, 'angry', 'man', 'validate', '2021-07-05 13:16:11', 'img/60e3061bb48f60.53563017.png', 1, '', 'not-affected', 0),
(132, 26, 'angry', 'man', 'validate', '2021-07-05 13:17:13', 'img/60e30659ccbda7.53231188.png', 1, '', 'not-affected', 0),
(134, 21, 'surprised', 'Women', 'validate', '2021-07-05 13:57:52', 'img/60e30fe03ac378.09900132.png', 1, '', 'not-affected', 0),
(135, 60, 'surprised', 'man', 'validate', '2021-07-05 13:58:51', 'img/60e3101b97d4f8.39788614.png', 1, '', 'not-affected', 0),
(136, 20, 'neutral', 'man', 'validate', '2021-07-05 13:59:35', 'img/60e310479af8f7.25028831.png', 1, '', 'not-affected', 0),
(137, 19, 'neutral', 'man', 'validate', '2021-07-05 14:00:10', 'img/60e3106a6d7506.15007585.png', 1, '', 'not-affected', 0),
(138, 24, 'neutral', 'man', 'validate', '2021-07-05 14:01:34', 'img/60e310be901b95.76467157.png', 1, '', 'not-affected', 0),
(139, 34, 'neutral', 'Women', 'validate', '2021-07-05 14:01:56', 'img/60e310d48a6ef4.10501821.png', 1, '', 'not-affected', 0),
(140, 3, 'neutral', 'man', 'validate', '2021-07-05 14:02:23', 'img/60e310ef88cb66.26089421.png', 1, '', 'not-affected', 0),
(141, 9, 'neutral', 'Women', 'validate', '2021-07-05 14:08:24', 'img/60e31258c4be94.12428335.png', 1, '', 'not-affected', 0),
(142, 2, 'surprised', 'Women', 'validate', '2021-07-05 14:20:36', 'img/60e31534656ee8.46423812.png', 1, '', 'not-affected', 0);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `expert` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `notes` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`expert`, `image`, `date`, `notes`) VALUES
(3, 98, '2021-07-02 10:12:28', 50),
(3, 99, '2021-07-02 10:13:25', 50),
(3, 100, '2021-07-02 10:13:30', 50),
(3, 101, '2021-07-02 14:36:40', 23),
(3, 103, '2021-07-02 14:36:45', 91),
(3, 104, '2021-07-02 15:01:54', 50),
(3, 106, '2021-07-03 19:25:47', 50),
(3, 121, '2021-07-09 14:55:34', 100),
(3, 123, '2023-02-10 11:59:22', 64),
(9, 98, '2021-07-02 11:01:51', 50),
(9, 99, '2021-07-02 11:02:24', 22),
(9, 101, '2021-07-02 12:21:47', 50),
(9, 121, '2021-07-09 14:58:06', 20),
(13, 99, '2021-07-02 12:30:19', 50),
(13, 101, '2021-07-02 12:31:25', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'not validate',
  `valider` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `valider`) VALUES
(6, 'safa ', 'safa@yahoo.com', 'safa', 'validate', 1),
(7, 'mama', 'mama@yahoo.com', 'arslane', 'validate', 1),
(8, 'souad', 'souad@jhsdkfds', 'souad', 'validate', 1),
(10, 'chahir', 'chahir@gmail.com', 'chahir', 'validate', 1),
(11, 'oussama', 'oussama@gmail.com', 'arslane', 'validate', 1),
(14, 'fou', 'fou@gsdqsd', 'arslane', 'not validat', 0),
(15, 'nounou', 'ouss@gmlqsd', 'arslane', 'not validat', 0),
(16, 'amin', 'amin@gmail.com', 'arslane', 'not validat', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`expert`,`image`),
  ADD KEY `cons_image` (`image`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `cons_expert` FOREIGN KEY (`expert`) REFERENCES `expert` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cons_image` FOREIGN KEY (`image`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
