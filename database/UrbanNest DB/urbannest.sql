-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 12:00 PM
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
  `locality` varchar(50) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`pid`, `state`, `city`, `locality`, `pincode`) VALUES
(1000, 'Delhi', 'New Delhi', 'Connaught Place', '110001'),
(1001, 'Maharashtra', 'Mumbai', 'Marine Drive', '400001'),
(1002, 'Uttar Pradesh', 'Lucknow', 'Hazratganj', '226001'),
(1003, 'Kolkata', 'Kolkata', 'Park Street', '700001'),
(1004, 'Gujarat', 'Ahmedabad', 'Law Garden', '380001'),
(1005, 'Rajasthan', 'Jaipur', 'Ashok Nagar', '302001'),
(1006, 'Tamil Nadu', 'Chennai', 'Anna Salai', '600001'),
(1007, 'Telangana', 'Hyderabad', 'Banjara Hills', '500001'),
(1008, 'Punjab', 'Amritsar', 'Mall Road', '143001'),
(1009, 'Karnataka', 'Bengaluru', 'Residency Road', '560001'),
(1010, 'Haryana', 'Gurgaon', 'Cyber Hub', '122002'),
(1011, 'West Bengal', 'Darjeeling', 'Mall Road', '734101'),
(1012, 'Kerala', 'Kochi', 'Marine Drive', '682031'),
(1013, 'Madhya Pradesh', 'Bhopal', 'Arera Colony', '462016'),
(1014, 'Uttarakhand', 'Dehradun', 'Rajpur Road', '248001'),
(1015, 'Goa', 'Panaji', 'Campal', '403001'),
(1016, 'Jharkhand', 'Ranchi', 'Kanke Road', '834008'),
(1017, 'Chhattisgarh', 'Raipur', 'Pandri Market', '492004'),
(1018, 'Himachal Pradesh', 'Shimla', 'Mall Road', '171001'),
(1019, 'Bihar', 'Patna', 'Fraser Road', '800001'),
(1020, 'Assam', 'Guwahati', 'Paltan Bazaar', '781001'),
(1021, 'Odisha', 'Bhubaneswar', 'Jayadev Vihar', '751013'),
(1022, 'Manipur', 'Imphal', 'Thangal Bazar', '795001'),
(1023, 'Meghalaya', 'Shillong', 'Police Bazaar', '793001'),
(1024, 'Nagaland', 'Kohima', 'Main Town', '797001'),
(1025, 'Mizoram', 'Aizawl', 'Chanmari', '796007'),
(1026, 'Tripura', 'Agartala', 'Kaman Chowmuhani', '799001'),
(1027, 'Sikkim', 'Gangtok', 'MG Marg', '737101'),
(1028, 'Arunachal Pradesh', 'Itanagar', 'Bank Tinali', '791111'),
(1029, 'Andhra Pradesh', 'Vishakhapatnam', 'RK Beach', '530017');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `sn` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`sn`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Anil', 'anil@gmail.com', 'abc subject', 'sdzbk kjdsnio jdsnjl nsdiu sdHBn'),
(9, 'Ishita Desai', 'ishita.desai@example.com', 'Selling Property', 'I want to list my house for sale. What are the steps involved?'),
(10, 'Naman Kapoor', 'naman.kapoor@example.com', 'Broker Charges', 'Could you clarify the broker charges for rental properties?'),
(11, 'Tanya Mehta', 'tanya.mehta@example.com', 'Property Availability', 'Is the villa in Banjara Hills still available for rent?');

-- --------------------------------------------------------

--
-- Table structure for table `finance_details`
--

CREATE TABLE `finance_details` (
  `pid` int(11) NOT NULL,
  `rent_amount` varchar(10) DEFAULT NULL,
  `security_deposit` varchar(10) DEFAULT NULL,
  `lease_period` varchar(10) DEFAULT NULL,
  `m_charges` varchar(10) DEFAULT NULL,
  `negotiable` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finance_details`
--

INSERT INTO `finance_details` (`pid`, `rent_amount`, `security_deposit`, `lease_period`, `m_charges`, `negotiable`) VALUES
(1000, '20000', '40000', '12 months', '500', 'Yes'),
(1001, '25000', '50000', '24 months', '700', 'No'),
(1002, '15000', '30000', '6 months', '600', 'Yes'),
(1003, '22000', '44000', '12 months', '500', 'Yes'),
(1004, '18000', '36000', '18 months', '450', 'No'),
(1005, '30000', '60000', '24 months', '800', 'Yes'),
(1006, '27000', '54000', '12 months', '650', 'Yes'),
(1007, '35000', '70000', '36 months', '1000', 'No'),
(1008, '12000', '24000', '6 months', '300', 'Yes'),
(1009, '28000', '56000', '18 months', '750', 'Yes'),
(1010, '22000', '44000', '12 months', '500', 'Yes'),
(1011, '26000', '52000', '18 months', '600', 'No'),
(1012, '15000', '30000', '6 months', '400', 'Yes'),
(1013, '24000', '48000', '24 months', '550', 'Yes'),
(1014, '20000', '40000', '12 months', '500', 'No'),
(1015, '32000', '64000', '36 months', '800', 'Yes'),
(1016, '18000', '36000', '18 months', '450', 'Yes'),
(1017, '27000', '54000', '12 months', '700', 'No'),
(1018, '14000', '28000', '6 months', '350', 'Yes'),
(1019, '30000', '60000', '24 months', '750', 'Yes'),
(1020, '25000', '50000', '18 months', '650', 'No'),
(1021, '20000', '40000', '12 months', '500', 'Yes'),
(1022, '17000', '34000', '6 months', '400', 'Yes'),
(1023, '35000', '70000', '36 months', '900', 'No'),
(1024, '21000', '42000', '18 months', '450', 'Yes'),
(1025, '19000', '38000', '12 months', '550', 'Yes'),
(1026, '30000', '60000', '24 months', '800', 'No'),
(1027, '23000', '46000', '12 months', '500', 'Yes'),
(1028, '28000', '56000', '18 months', '650', 'Yes'),
(1029, '31000', '62000', '36 months', '850', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `listing_type` varchar(50) NOT NULL,
  `listed_by` varchar(50) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `house_type` varchar(50) NOT NULL,
  `property_age` varchar(20) DEFAULT 'NA',
  `balcony` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `status` varchar(20) DEFAULT 'Available',
  `parking` varchar(20) DEFAULT 'NA',
  `furnishing_type` varchar(50) NOT NULL,
  `power_backup` varchar(20) DEFAULT 'No',
  `lift` varchar(10) DEFAULT 'No',
  `floor` varchar(10) DEFAULT 'NA',
  `date_of_listing` date NOT NULL,
  `date_of_available` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `uid`, `listing_type`, `listed_by`, `property_type`, `house_type`, `property_age`, `balcony`, `area`, `status`, `parking`, `furnishing_type`, `power_backup`, `lift`, `floor`, `date_of_listing`, `date_of_available`) VALUES
(1000, 9000, 'Rent', 'Owner', 'Residential', '3BHK', '2 years', 'Yes', '1200 sq.ft', 'Available', 'Available', 'Unfurnished', 'Available', 'Yes', '2nd', '2024-12-01', '2025-01-01'),
(1001, 9001, 'Sale', 'Builder', 'Residential', '2BHK', '5 years', 'Yes', '800 sq.ft', 'Available', 'Available', 'Semi-furnished', 'Not Available', 'Yes', '1st', '2024-11-15', '2024-12-15'),
(1002, 9002, 'PG', 'Agent', 'Residential', '1BHK', 'New', 'No', '300 sq.ft', 'Available', 'Not Available', 'Furnished', 'Not Available', 'No', 'Ground', '2024-11-10', '2024-12-10'),
(1003, 9003, 'Rent', 'Owner', 'Residential', '2BHK', '3 years', 'Yes', '1000 sq.ft', 'Available', 'Available', 'Fully Furnished', 'Available', 'Yes', '3rd', '2024-11-05', '2025-01-05'),
(1004, 9004, 'Sale', 'Owner', 'Residential', '1BHK', '10 years', 'No', '600 sq.ft', 'UnAvailable', 'Available', 'Unfurnished', 'Not Available', 'Yes', '1st', '2024-10-25', '2024-11-25'),
(1005, 9005, 'Rent', 'Agent', 'Residential', '3BHK', '4 years', 'Yes', '1400 sq.ft', 'Available', 'Available', 'Semi-furnished', 'Available', 'No', '4th', '2024-12-02', '2025-01-02'),
(1006, 9006, 'PG', 'Owner', 'Residential', '1BHK', 'New', 'No', '250 sq.ft', 'Available', 'Not Available', 'Furnished', 'Available', 'No', 'Ground', '2024-11-12', '2024-12-12'),
(1007, 9007, 'Sale', 'Builder', 'Commercial', '2BHK', '8 years', 'Yes', '1800 sq.ft', 'Available', 'Available', 'Fully Furnished', 'Available', 'Yes', '5th', '2024-12-01', '2025-01-01'),
(1008, 9008, 'Rent', 'Owner', 'Residential', '2BHK', '2 years', 'No', '950 sq.ft', 'Available', 'Not Available', 'Unfurnished', 'Not Available', 'No', '2nd', '2024-11-14', '2025-01-14'),
(1009, 9009, 'PG', 'Agent', 'Residential', '3BHK', 'New', 'Yes', '350 sq.ft', 'Available', 'Available', 'Fully Furnished', 'Available', 'Yes', 'Ground', '2024-11-20', '2024-12-20'),
(1010, 9010, 'Rent', 'Owner', 'Residential', '3BHK', '6 years', 'Yes', '1100 sq.ft', 'UnAvailable', 'Available', 'Semi-furnished', 'Available', 'No', '3rd', '2024-11-25', '2025-01-25'),
(1011, 9011, 'Sale', 'Agent', 'Residential', '1BHK', '7 years', 'No', '650 sq.ft', 'Available', 'Not Available', 'Furnished', 'Available', 'Yes', '1st', '2024-11-18', '2024-12-18'),
(1012, 9012, 'PG', 'Owner', 'Residential', '2BHK', '1 year', 'Yes', '500 sq.ft', 'Available', 'Available', 'Unfurnished', 'Not Available', 'No', 'Ground', '2024-11-09', '2024-12-09'),
(1013, 9013, 'Sale', 'Builder', 'Residential', '4BHK', '3 years', 'Yes', '2000 sq.ft', 'Available', 'Available', 'Fully Furnished', 'Available', 'Yes', '2nd', '2024-11-30', '2025-01-30'),
(1014, 9014, 'Rent', 'Owner', 'Commercial', '1BHK', '5 years', 'No', '900 sq.ft', 'Available', 'Available', 'Semi-furnished', 'Not Available', 'No', '4th', '2024-12-04', '2025-01-04'),
(1015, 9015, 'Sale', 'Agent', 'Residential', '2BHK', '6 years', 'Yes', '1200 sq.ft', 'UnAvailable', 'Available', 'Unfurnished', 'Available', 'Yes', '3rd', '2024-11-22', '2024-12-22'),
(1016, 9016, 'Rent', 'Builder', 'Residential', '5BHK', '4 years', 'Yes', '2500 sq.ft', 'Available', 'Available', 'Fully Furnished', 'Available', 'Yes', '6th', '2024-12-01', '2025-01-01'),
(1017, 9017, 'PG', 'Agent', 'Residential', '2BHK', 'New', 'No', '400 sq.ft', 'Available', 'Not Available', 'Furnished', 'Not Available', 'No', 'Ground', '2024-11-15', '2024-12-15'),
(1018, 9018, 'Sale', 'Owner', 'Commercial', '1BHK', '3 years', 'Yes', '850 sq.ft', 'Available', 'Available', 'Semi-furnished', 'Available', 'Yes', '2nd', '2024-12-03', '2025-01-03'),
(1019, 9019, 'Rent', 'Builder', 'Residential', '2BHK', '9 years', 'No', '1000 sq.ft', 'UnAvailable', 'Not Available', 'Unfurnished', 'Not Available', 'Yes', '1st', '2024-11-26', '2024-12-26'),
(1020, 9020, 'PG', 'Owner', 'Residential', '1BHK', 'New', 'Yes', '350 sq.ft', 'Available', 'Available', 'Fully Furnished', 'Available', 'No', 'Ground', '2024-11-20', '2024-12-20'),
(1021, 9021, 'Rent', 'Agent', 'Residential', '3BHK', '5 years', 'No', '1350 sq.ft', 'Available', 'Available', 'Semi-furnished', 'Available', 'Yes', '4th', '2024-12-05', '2025-01-05'),
(1022, 9022, 'Sale', 'Owner', 'Residential', '2BHK', '6 years', 'Yes', '1000 sq.ft', 'Available', 'Available', 'Furnished', 'Not Available', 'Yes', '2nd', '2024-11-12', '2024-12-12'),
(1023, 9023, 'PG', 'Agent', 'Residential', '1BHK', '3 years', 'No', '500 sq.ft', 'Available', 'Available', 'Unfurnished', 'Available', 'No', 'Ground', '2024-11-08', '2024-12-08'),
(1024, 9024, 'Sale', 'Builder', 'Residential', '2BHK', '7 years', 'Yes', '1100 sq.ft', 'Available', 'Available', 'Semi-furnished', 'Not Available', 'No', '3rd', '2024-12-02', '2025-01-02'),
(1025, 9025, 'Rent', 'Owner', 'Commercial', '3BHK', '2 years', 'Yes', '1500 sq.ft', 'Available', 'Available', 'Fully Furnished', 'Available', 'Yes', '5th', '2024-12-06', '2025-01-06'),
(1026, 9026, 'Sale', 'Agent', 'Residential', '3BHK', '5 years', 'No', '1600 sq.ft', 'Available', 'Available', 'Unfurnished', 'Not Available', 'Yes', '4th', '2024-11-23', '2024-12-23'),
(1027, 9027, 'PG', 'Owner', 'Residential', '1BHK', '1 year', 'Yes', '350 sq.ft', 'Available', 'Not Available', 'Furnished', 'Available', 'No', 'Ground', '2024-11-18', '2024-12-18'),
(1028, 9028, 'Rent', 'Builder', 'Residential', '4BHK', '8 years', 'Yes', '2000 sq.ft', 'Available', 'Available', 'Semi-furnished', 'Available', 'Yes', '2nd', '2024-12-03', '2025-01-03'),
(1029, 9029, 'Sale', 'Owner', 'Residential', '5BHK', '9 years', 'No', '3000 sq.ft', 'Available', 'Available', 'Fully Furnished', 'Available', 'Yes', '3rd', '2024-11-30', '2025-01-30');

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
  `contact` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT './users_profile_images/default_profile_image.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `contact`, `address`, `password`, `profile_pic`) VALUES
(9000, 'Aarav Sharma', 'aarav.sharma@example.com', '9876543210', '123 MG Road, Delhi', 'abc123', './users_profile_images/9000.jpeg'),
(9001, 'Priya Patel', 'priya.patel@example.com', '9876543211', '45 Banjara Hills, Hyderabad', 'xyz789', './users_profile_images/9001.jpeg'),
(9002, 'Rohan Gupta', 'rohan.gupta@example.com', '9876543212', '98 Residency Road, Bengaluru', 'gupta1', './users_profile_images/9002.jpeg'),
(9003, 'Sneha Verma', 'sneha.verma@example.com', '9876543213', '67 Park Street, Kolkata', 'verma2', './users_profile_images/9003.jpeg'),
(9004, 'Kabir Singh', 'kabir.singh@example.com', '9876543214', '11 Marine Drive, Mumbai', 'singh3', './users_profile_images/9004.jpeg'),
(9005, 'Ananya Iyer', 'ananya.iyer@example.com', '9876543215', '22 Anna Salai, Chennai', 'iyer99', './users_profile_images/9005.jpeg'),
(9006, 'Devansh Joshi', 'devansh.joshi@example.com', '9876543216', '34 Gota Road, Ahmedabad', 'joshi22', './users_profile_images/9006.jpeg'),
(9007, 'Ishita Desai', 'ishita.desai@example.com', '9876543217', '88 Law Garden, Ahmedabad', 'desai33', './users_profile_images/9007.jpeg'),
(9008, 'Naman Kapoor', 'naman.kapoor@example.com', '9876543218', '19 Juhu Beach Road, Mumbai', 'kapoor7', './users_profile_images/9008.jpeg'),
(9009, 'Tanya Mehta', 'tanya.mehta@example.com', '9876543219', '15 Charminar Lane, Hyderabad', 'mehta12', './users_profile_images/9009.jpeg'),
(9010, 'Arjun Jain', 'arjun.jain@example.com', '9876543220', '40 Lalbagh Road, Bengaluru', 'jain10', './users_profile_images/default_profile_image.jpeg'),
(9011, 'Sanya Malhotra', 'sanya.malhotra@example.com', '9876543221', '25 Connaught Place, Delhi', 'sm1234', './users_profile_images/default_profile_image.jpeg'),
(9012, 'Ayaan Reddy', 'ayaan.reddy@example.com', '9876543222', '90 Begumpet Road, Hyderabad', 'ar567', './users_profile_images/default_profile_image.jpeg'),
(9013, 'Riya Nair', 'riya.nair@example.com', '9876543223', '77 MG Road, Kochi', 'nair99', './users_profile_images/default_profile_image.jpeg'),
(9014, 'Aditya Roy', 'aditya.roy@example.com', '9876543224', '33 Esplanade, Kolkata', 'roy45', './users_profile_images/default_profile_image.jpeg'),
(9015, 'Kavya Aggarwal', 'kavya.aggarwal@example.com', '9876543225', '50 Ashok Nagar, Jaipur', 'ka890', './users_profile_images/default_profile_image.jpeg'),
(9016, 'Rachit Chawla', 'rachit.chawla@example.com', '9876543226', '18 Hazratganj, Lucknow', 'rc555', './users_profile_images/default_profile_image.jpeg'),
(9017, 'Manisha Thakur', 'manisha.thakur@example.com', '9876543227', '89 Sector 15, Chandigarh', 'mt234', './users_profile_images/default_profile_image.jpeg'),
(9018, 'Vivek Bhardwaj', 'vivek.bhardwaj@example.com', '9876543228', '100 Civil Lines, Kanpur', 'vb66', './users_profile_images/default_profile_image.jpeg'),
(9019, 'Nidhi Saxena', 'nidhi.saxena@example.com', '9876543229', '56 Gomti Nagar, Lucknow', 'ns321', './users_profile_images/default_profile_image.jpeg'),
(9020, 'Ishaan Kaul', 'ishaan.kaul@example.com', '9876543230', '33 Residency Road, Bengaluru', 'ik98', './users_profile_images/default_profile_image.jpeg'),
(9021, 'Pooja Chopra', 'pooja.chopra@example.com', '9876543231', '22 MG Road, Delhi', 'pc12', './users_profile_images/default_profile_image.jpeg'),
(9022, 'Kunal Deshmukh', 'kunal.deshmukh@example.com', '9876543232', '11 FC Road, Pune', 'kd78', './users_profile_images/default_profile_image.jpeg'),
(9023, 'Simran Gill', 'simran.gill@example.com', '9876543233', '88 Mall Road, Amritsar', 'sg23', './users_profile_images/default_profile_image.jpeg'),
(9024, 'Yash Khurana', 'yash.khurana@example.com', '9876543234', '77 GT Road, Ludhiana', 'yk88', './users_profile_images/default_profile_image.jpeg'),
(9025, 'Reena Srivastava', 'reena.srivastava@example.com', '9876543235', '55 Ashok Nagar, Jaipur', 'rs78', './users_profile_images/default_profile_image.jpeg'),
(9026, 'Akash Dubey', 'akash.dubey@example.com', '9876543236', '11 Lalbagh Road, Bengaluru', 'ad123', './users_profile_images/default_profile_image.jpeg'),
(9027, 'Tara Menon', 'tara.menon@example.com', '9876543237', '90 Marine Drive, Mumbai', 'tm45', './users_profile_images/default_profile_image.jpeg'),
(9028, 'Rajiv Das', 'rajiv.das@example.com', '9876543238', '33 Chowringhee, Kolkata', 'rd99', './users_profile_images/default_profile_image.jpeg'),
(9029, 'Meera Bansal', 'meera.bansal@example.com', '9876543239', '45 Banjara Hills, Hyderabad', 'mb56', './users_profile_images/default_profile_image.jpeg');

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
  ADD PRIMARY KEY (`sn`);

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
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1030;

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
