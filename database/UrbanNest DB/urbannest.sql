-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 12:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbannest`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `pid` int(11) NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `sl` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`sl`, `name`, `email`, `subject`, `message`) VALUES
(7, 'Anil', 'anil@gmail.com', 'jdsni', 'biuxdv'),
(23, 'abc', 'abc@gmail.com', 'abc sub', 'sbc text'),
(24, 'Anil Sahu', 'anilsahu9786@gmail.c', 'wow', 'nice'),
(25, 'Gourav', 'g123@gmail.com', 'abc', 'abc text'),
(26, 'abc', 'abc@gmail.com', 'abc', 'jidfvidu'),
(27, 'abc', 'xyz@gmail.com', 'sdbiu', 'sjdnu jhbsdh bdsuybhae hdbubhsd hbdvuhba hdbuvysbd'),
(28, 'xyz', 'xyz@gmail.com', 'sdbiu', 'sjdnu jhbsdh bdsuybhae hdbubhsd hbdvuhba hdbuvysbd');

-- --------------------------------------------------------

--
-- Table structure for table `finance_details`
--

CREATE TABLE `finance_details` (
  `pid` int(11) NOT NULL,
  `rent_amount` decimal(10,2) DEFAULT NULL,
  `security_deposit` decimal(10,2) DEFAULT NULL,
  `lease_period` int(11) DEFAULT NULL,
  `m_charges` decimal(10,2) DEFAULT NULL,
  `negotiable` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `listing_type` varchar(50) DEFAULT NULL,
  `listed_by` varchar(50) DEFAULT NULL,
  `property_type` varchar(50) DEFAULT NULL,
  `house_type` varchar(50) DEFAULT NULL,
  `property_age` int(11) DEFAULT NULL,
  `balcony` int(11) DEFAULT NULL,
  `area` double DEFAULT NULL,
  `status` enum('Available','UnAvailable') DEFAULT 'Available',
  `parking` tinyint(1) DEFAULT NULL,
  `furnishing_type` varchar(50) DEFAULT NULL,
  `power_backup` tinyint(1) DEFAULT NULL,
  `lift` tinyint(1) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `date_of_listing` date DEFAULT NULL,
  `date_of_available` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `uid`, `listing_type`, `listed_by`, `property_type`, `house_type`, `property_age`, `balcony`, `area`, `status`, `parking`, `furnishing_type`, `power_backup`, `lift`, `floor`, `date_of_listing`, `date_of_available`) VALUES
(1031, 9000, 'Rent', 'Owner', 'Residential', '3BHK', 2, 0, 1200, 'Available', 1, 'Unfurnished', 1, 1, 2, '2024-12-01', '2025-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `property_photo`
--

CREATE TABLE `property_photo` (
  `phid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `imgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `contact`, `address`, `password`, `profile_pic`) VALUES
(9000, 'Aarav Sharma', 'aarav.sharma@example.com', 0, '123 MG Road, Delhi', 'abc123', NULL),
(9001, 'Priya Patel', 'priya.patel@example.com', 0, '45 Banjara Hills, Hyderabad', 'xyz789', NULL),
(9002, 'Rohan Gupta', 'rohan.gupta@example.com', 0, '98 Residency Road, Bengaluru', 'gupta1', NULL),
(9003, 'Sneha Verma', 'sneha.verma@example.com', 0, '67 Park Street, Kolkata', 'verma2', NULL),
(9004, 'Kabir Singh', 'kabir.singh@example.com', 0, '11 Marine Drive, Mumbai', 'singh3', NULL),
(9005, 'Ananya Iyer', 'ananya.iyer@example.com', 0, '22 Anna Salai, Chennai', 'iyer99', NULL),
(9006, 'Devansh Joshi', 'devansh.joshi@example.com', 0, '34 Gota Road, Ahmedabad', 'joshi22', NULL),
(9007, 'Ishita Desai', 'ishita.desai@example.com', 0, '88 Law Garden, Ahmedabad', 'desai33', NULL),
(9008, 'Naman Kapoor', 'naman.kapoor@example.com', 0, '19 Juhu Beach Road, Mumbai', 'kapoor7', NULL),
(9009, 'Tanya Mehta', 'tanya.mehta@example.com', 0, '15 Charminar Lane, Hyderabad', 'mehta12', NULL),
(9010, 'Arjun Jain', 'arjun.jain@example.com', 0, '40 Lalbagh Road, Bengaluru', 'jain10', NULL),
(9011, 'Sanya Malhotra', 'sanya.malhotra@example.com', 0, '25 Connaught Place, Delhi', 'sm1234', NULL),
(9012, 'Ayaan Reddy', 'ayaan.reddy@example.com', 0, '90 Begumpet Road, Hyderabad', 'ar567', NULL),
(9013, 'Riya Nair', 'riya.nair@example.com', 0, '77 MG Road, Kochi', 'nair99', NULL),
(9014, 'Aditya Roy', 'aditya.roy@example.com', 0, '33 Esplanade, Kolkata', 'roy45', NULL),
(9015, 'Kavya Aggarwal', 'kavya.aggarwal@example.com', 0, '50 Ashok Nagar, Jaipur', 'ka890', NULL),
(9016, 'Rachit Chawla', 'rachit.chawla@example.com', 0, '18 Hazratganj, Lucknow', 'rc555', NULL),
(9017, 'Manisha Thakur', 'manisha.thakur@example.com', 0, '89 Sector 15, Chandigarh', 'mt234', NULL),
(9018, 'Vivek Bhardwaj', 'vivek.bhardwaj@example.com', 0, '100 Civil Lines, Kanpur', 'vb66', NULL),
(9019, 'Nidhi Saxena', 'nidhi.saxena@example.com', 0, '56 Gomti Nagar, Lucknow', 'ns321', NULL),
(9020, 'Ishaan Kaul', 'ishaan.kaul@example.com', 0, '33 Residency Road, Bengaluru', 'ik98', NULL),
(9021, 'Pooja Chopra', 'pooja.chopra@example.com', 0, '22 MG Road, Delhi', 'pc12', NULL),
(9022, 'Kunal Deshmukh', 'kunal.deshmukh@example.com', 0, '11 FC Road, Pune', 'kd78', NULL),
(9023, 'Simran Gill', 'simran.gill@example.com', 0, '88 Mall Road, Amritsar', 'sg23', NULL),
(9024, 'Yash Khurana', 'yash.khurana@example.com', 0, '77 GT Road, Ludhiana', 'yk88', NULL),
(9025, 'Reena Srivastava', 'reena.srivastava@example.com', 0, '55 Ashok Nagar, Jaipur', 'rs78', NULL),
(9026, 'Akash Dubey', 'akash.dubey@example.com', 0, '11 Lalbagh Road, Bengaluru', 'ad123', NULL),
(9027, 'Tara Menon', 'tara.menon@example.com', 0, '90 Marine Drive, Mumbai', 'tm45', NULL),
(9028, 'Rajiv Das', 'rajiv.das@example.com', 0, '33 Chowringhee, Kolkata', 'rd99', NULL),
(9029, 'Meera Bansal', 'meera.bansal@example.com', 0, '45 Banjara Hills, Hyderabad', 'mb56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `finance_details`
--
ALTER TABLE `finance_details`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD PRIMARY KEY (`phid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `sl` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1062;

--
-- AUTO_INCREMENT for table `property_photo`
--
ALTER TABLE `property_photo`
  MODIFY `phid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9030;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `property` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `finance_details`
--
ALTER TABLE `finance_details`
  ADD CONSTRAINT `finance_details_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `property` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE;

--
-- Constraints for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD CONSTRAINT `property_photo_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `property` (`pid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
