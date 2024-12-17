-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 02:54 PM
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

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`pid`, `state`, `city`, `locality`, `pincode`) VALUES
(1061, 'Delhi', 'New Delhi', 'Connaught Place', '110001'),
(1062, 'Maharashtra', 'Mumbai', 'Marine Drive', '400001'),
(1063, 'Uttar Pradesh', 'Lucknow', 'Hazratganj', '226001'),
(1064, 'Kolkata', 'Kolkata', 'Park Street', '700001'),
(1065, 'Gujarat', 'Ahmedabad', 'Law Garden', '380001'),
(1066, 'Rajasthan', 'Jaipur', 'Ashok Nagar', '302001'),
(1067, 'Tamil Nadu', 'Chennai', 'Anna Salai', '600001'),
(1068, 'Telangana', 'Hyderabad', 'Banjara Hills', '500001'),
(1069, 'Punjab', 'Amritsar', 'Mall Road', '143001'),
(1070, 'Karnataka', 'Bengaluru', 'Residency Road', '560001');

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
(26, 'abc', 'abc@gmail.com', 'abc', 'jidfvidu');

-- --------------------------------------------------------

--
-- Table structure for table `finance_details`
--

CREATE TABLE `finance_details` (
  `pid` int(11) NOT NULL,
  `rent_amount` decimal(10,2) DEFAULT NULL,
  `security_deposit` decimal(10,2) DEFAULT NULL,
  `lease_period` varchar(11) DEFAULT NULL,
  `m_charges` decimal(10,2) DEFAULT NULL,
  `negotiable` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finance_details`
--

INSERT INTO `finance_details` (`pid`, `rent_amount`, `security_deposit`, `lease_period`, `m_charges`, `negotiable`) VALUES
(1061, 20000.00, 40000.00, '12', 500.00, 1),
(1062, 25000.00, 50000.00, '24', 700.00, 0),
(1063, 15000.00, 30000.00, '6', 600.00, 1),
(1064, 22000.00, 44000.00, '12', 500.00, 1),
(1065, 18000.00, 36000.00, '18', 450.00, 0),
(1066, 30000.00, 60000.00, '24', 800.00, 1),
(1067, 27000.00, 54000.00, '12', 650.00, 1),
(1068, 35000.00, 70000.00, '36', 1000.00, 0),
(1069, 12000.00, 24000.00, '6', 300.00, 1),
(1070, 28000.00, 56000.00, '18', 750.00, 1);

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
(1061, 9000, 'Rent', 'Owner', 'Residential', '3BHK', 2, 0, 1200, 'Available', 1, 'Unfurnished', 1, 1, 2, '2024-12-01', '2025-01-01'),
(1062, 9000, 'Rent', 'Owner', 'Residential', '3BHK', 2, 0, 1200, 'Available', 1, 'Unfurnished', 1, 1, 2, '2024-12-01', '2025-01-01'),
(1063, 9001, 'Sale', 'Builder', 'Residential', '2BHK', 5, 0, 800, 'Available', 1, 'Semi-furnished', 0, 1, 1, '2024-11-15', '2024-12-15'),
(1064, 9002, 'PG', 'Agent', 'Residential', '1BHK', 0, 0, 300, 'Available', 0, 'Furnished', 0, 0, 0, '2024-11-10', '2024-12-10'),
(1065, 9003, 'Rent', 'Owner', 'Residential', '2BHK', 3, 0, 1000, 'Available', 1, 'Fully Furnished', 1, 1, 3, '2024-11-05', '2025-01-05'),
(1066, 9004, 'Sale', 'Owner', 'Residential', '1BHK', 10, 0, 600, 'UnAvailable', 1, 'Unfurnished', 0, 1, 1, '2024-10-25', '2024-11-25'),
(1067, 9005, 'Rent', 'Agent', 'Residential', '3BHK', 4, 0, 1400, 'Available', 1, 'Semi-furnished', 1, 0, 4, '2024-12-02', '2025-01-02'),
(1068, 9006, 'PG', 'Owner', 'Residential', '1BHK', 0, 0, 250, 'Available', 0, 'Furnished', 1, 0, 0, '2024-11-12', '2024-12-12'),
(1069, 9007, 'Sale', 'Builder', 'Commercial', '2BHK', 8, 0, 1800, 'Available', 1, 'Fully Furnished', 1, 1, 5, '2024-12-01', '2025-01-01'),
(1070, 9008, 'Rent', 'Owner', 'Residential', '2BHK', 2, 0, 950, 'Available', 0, 'Unfurnished', 0, 0, 2, '2024-11-14', '2025-01-14'),
(1071, 9009, 'PG', 'Agent', 'Residential', '3BHK', 0, 0, 350, 'Available', 1, 'Fully Furnished', 1, 1, 0, '2024-11-20', '2024-12-20'),
(1072, 9010, 'Rent', 'Owner', 'Residential', '3BHK', 6, 0, 1100, 'UnAvailable', 1, 'Semi-furnished', 1, 0, 3, '2024-11-25', '2025-01-25'),
(1073, 9011, 'Sale', 'Agent', 'Residential', '1BHK', 7, 0, 650, 'Available', 0, 'Furnished', 1, 1, 1, '2024-11-18', '2024-12-18'),
(1074, 9012, 'PG', 'Owner', 'Residential', '2BHK', 1, 0, 500, 'Available', 1, 'Unfurnished', 0, 0, 0, '2024-11-09', '2024-12-09'),
(1075, 9013, 'Sale', 'Builder', 'Residential', '4BHK', 3, 0, 2000, 'Available', 1, 'Fully Furnished', 1, 1, 2, '2024-11-30', '2025-01-30'),
(1076, 9014, 'Rent', 'Owner', 'Commercial', '1BHK', 5, 0, 900, 'Available', 1, 'Semi-furnished', 0, 0, 4, '2024-12-04', '2025-01-04'),
(1077, 9015, 'Sale', 'Agent', 'Residential', '2BHK', 6, 0, 1200, 'UnAvailable', 1, 'Unfurnished', 1, 1, 3, '2024-11-22', '2024-12-22'),
(1078, 9016, 'Rent', 'Builder', 'Residential', '5BHK', 4, 0, 2500, 'Available', 1, 'Fully Furnished', 1, 1, 6, '2024-12-01', '2025-01-01'),
(1079, 9017, 'PG', 'Agent', 'Residential', '2BHK', 0, 0, 400, 'Available', 0, 'Furnished', 0, 0, 0, '2024-11-15', '2024-12-15'),
(1080, 9018, 'Sale', 'Owner', 'Commercial', '1BHK', 3, 0, 850, 'Available', 1, 'Semi-furnished', 1, 1, 2, '2024-12-03', '2025-01-03'),
(1081, 9019, 'Rent', 'Builder', 'Residential', '2BHK', 9, 0, 1000, 'UnAvailable', 0, 'Unfurnished', 0, 1, 1, '2024-11-26', '2024-12-26'),
(1082, 9020, 'PG', 'Owner', 'Residential', '1BHK', 0, 0, 350, 'Available', 1, 'Fully Furnished', 1, 0, 0, '2024-11-20', '2024-12-20'),
(1083, 9021, 'Rent', 'Agent', 'Residential', '3BHK', 5, 0, 1350, 'Available', 1, 'Semi-furnished', 1, 1, 4, '2024-12-05', '2025-01-05'),
(1084, 9022, 'Sale', 'Owner', 'Residential', '2BHK', 6, 0, 1000, 'Available', 1, 'Furnished', 0, 1, 2, '2024-11-12', '2024-12-12'),
(1085, 9023, 'PG', 'Agent', 'Residential', '1BHK', 3, 0, 500, 'Available', 1, 'Unfurnished', 1, 0, 0, '2024-11-08', '2024-12-08'),
(1086, 9024, 'Sale', 'Builder', 'Residential', '2BHK', 7, 0, 1100, 'Available', 1, 'Semi-furnished', 0, 0, 3, '2024-12-02', '2025-01-02'),
(1087, 9025, 'Rent', 'Owner', 'Commercial', '3BHK', 2, 0, 1500, 'Available', 1, 'Fully Furnished', 1, 1, 5, '2024-12-06', '2025-01-06'),
(1088, 9026, 'Sale', 'Agent', 'Residential', '3BHK', 5, 0, 1600, 'Available', 1, 'Unfurnished', 0, 1, 4, '2024-11-23', '2024-12-23'),
(1089, 9027, 'PG', 'Owner', 'Residential', '1BHK', 1, 0, 350, 'Available', 0, 'Furnished', 1, 0, 0, '2024-11-18', '2024-12-18'),
(1090, 9028, 'Rent', 'Builder', 'Residential', '4BHK', 8, 0, 2000, 'Available', 1, 'Semi-furnished', 1, 1, 2, '2024-12-03', '2025-01-03'),
(1091, 9029, 'Sale', 'Owner', 'Residential', '5BHK', 9, 0, 3000, 'Available', 1, 'Fully Furnished', 1, 1, 3, '2024-11-30', '2025-01-30');

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
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1092;

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
