-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 04:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_now`
--

CREATE TABLE `book_now` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `book_date` varchar(20) DEFAULT NULL,
  `book_time` varchar(50) DEFAULT NULL,
  `movie_name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `seat` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_now`
--

INSERT INTO `book_now` (`id`, `user_name`, `phone`, `book_date`, `book_time`, `movie_name`, `class`, `seat`, `children`, `total`) VALUES
(5, 'kashif khan kk', '03168603143', '2022-12-27', '5 PM to 7 PM', 'London Nahi Jaunga ', '1000', '12', '2', 13000),
(6, 'rameez ', '', '3 PM to 5 PM', '', 'London Nahi Jaunga ', '3000', '1', '1', 4500),
(7, 'rameez ', 'Nueplex Cinemas', '2022-12-29', '3 PM to 5 PM', 'London Nahi Jaunga ', '3000', '12', '3', 40500);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_price` int(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_price`, `status`) VALUES
(2, 'box', 1000, 0),
(3, 'gold', 3000, 0),
(5, 'platinum', 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `massage` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `massage`) VALUES
(5, 'shoaib', 'sh123@gmail.com', 'can we downlode this', 'hey my name is ghufiii'),
(6, 'kashif', 'kk1397442@gmail.com', 'hey , can we talk', 'i lub it ...');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(50) DEFAULT NULL,
  `movie_description` text DEFAULT NULL,
  `movie_year` int(11) DEFAULT NULL,
  `genres` varchar(50) DEFAULT NULL,
  `movie_poster` text DEFAULT NULL,
  `threter_link` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_description`, `movie_year`, `genres`, `movie_poster`, `threter_link`, `country`) VALUES
(1, 'Black panther-wakanda forever', 'In \"Avengers: Endgame,\" T\'Challa returned from the events of the Blip in 2023. After his death in \"Wakanda Forever,\" the movie moves forward a year in time. If you infer that T\'Challa died shortly after returning in 2023, then it\'s at least 2024.', 2022, 'Action', 'p_disney_wakandaforever_522-1_1_0bc89eac.webp', 'https://www.youtube.com/watch?v=_Z3QKkl1WyM', 'Hollywood'),
(2, 'London Nahi Jaunga ', 'London Nahi Jaunga transl. I will not go to London) is a 2022 \r\nPakistani drama comedy film, directed by Nadeem Baig, produced \r\nby Humayun Saeed under the banner of Six Sigma Plus, and written \r\nby Khalil-ur-Rehman Qamar. It is a spin-off of the 2017 film \r\nPunjab Nahi Jaungi\r\n', 2022, 'Drama', 'WhatsApp Image 2022-12-13 at 12.54.10 PM.jpeg', 'https://www.youtube.com/watch?v=qAHhNCosiF8', 'Lollywood'),
(3, 'Pushpa The Rise', 'Pushpa: The Rise – Part 01 is a 2021 Indian Telugu-language action drama film written and directed by Sukumar.', 2021, 'Action', 'pushpa-indian-movie-poster-md.jpg', 'https://www.youtube.com/watch?v=pKctjlxbFDQ', 'Bollywood'),
(5, 'Kamali ', ' Kamali from a village called Nadukkaveri) is a 2021 Indian Tamil language drama film written and directed by Rajasekar Duraisamy on his directorial debut. The film stars Anandhi, Rohit Saraf and Prathap Pothen. ', 2022, 'Romance', 'lollywood-jamlii.jfif', 'https://www.youtube.com/results?search_query=kamli+trailer', 'Lollywood');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_name`, `user_email`, `rating`, `message`, `movie_id`) VALUES
(1, ' Shoaib Hussain', 'sh12@gmail.com', '5', 'ummmmmmmmm', 0),
(5, 'kashif ', 'kk@gmail.com', '3', 'it was lovely', 5),
(6, 'rameez  ', 'test@gmail.com', '4', 'qqq  qqqq qqqq    qq qqqq qqqqq', 2),
(7, 'rameez  ', 'sh12@gmail.com', '4', 'asdsa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `show_time`
--

CREATE TABLE `show_time` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `theater_name` varchar(255) NOT NULL,
  `show_time` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_time`
--

INSERT INTO `show_time` (`id`, `movie_id`, `theater_name`, `show_time`, `status`) VALUES
(2, 1, 'Capri Cinema', '10 AM to 12 PM', 0),
(3, 3, 'Nueplex Cinema', '1 PM to 3 PM', 0),
(4, 2, 'Nueplex Cinemas DHA', '3 PM to 5 PM', 0),
(5, 5, 'Bambino Cinema', '7 PM to 9 PM', 0),
(6, 4, 'Nueplex Cinema', '5 PM to 7 PM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `theater_id` int(11) NOT NULL,
  `theater_name` varchar(30) DEFAULT NULL,
  `theater_address` varchar(50) DEFAULT NULL,
  `theater_seat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`theater_id`, `theater_name`, `theater_address`, `theater_seat`) VALUES
(5, 'Capri Cinema', 'Address: V28P+W64، Capri Cinema, M.A Jinnah Rd, Ce', '2'),
(6, 'Nueplex Cinema', ' Nueplex Cinemas Askari IV, Main Rashid Minhas Rd,', '3'),
(7, 'Nueplex Cinemas DHA', 'Address: The Place, Khayaban-e-Shaheen, DHA Karach', '5'),
(8, 'Bambino Cinema', 'Address: V27G+M49, Bambino Cinema, Garden Rd, Sadd', '9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `PASSWORD`, `role`) VALUES
(5, 'kashif khan kk', 'kk1397442@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(7, 'rameez ', 'rameez@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(11, 'shuja ', 'shuja12@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(12, 'shoaib hussain ', 'sh123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(13, 'hassan ', 'mh2608976@gmail.com', '95cbc692d5886145900695dce809834a', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_now`
--
ALTER TABLE `book_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_time`
--
ALTER TABLE `show_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`theater_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_now`
--
ALTER TABLE `book_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `show_time`
--
ALTER TABLE `show_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `theater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
