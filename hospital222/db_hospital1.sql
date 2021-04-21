-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 09:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hospital1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill`
--

CREATE TABLE `tb_bill` (
  `Bill_ID` int(11) NOT NULL,
  `Bill_Status` text NOT NULL,
  `P_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bill`
--

INSERT INTO `tb_bill` (`Bill_ID`, `Bill_Status`, `P_ID`) VALUES
(11, 'Paid', 1),
(12, 'Paid', 2),
(13, 'Paid', 3),
(14, 'Paid', 4),
(15, 'Paid', 5),
(16, 'Paid', 6),
(17, 'Paid', 7),
(18, 'Paid', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_doctor`
--

CREATE TABLE `tb_doctor` (
  `D_ID` int(11) NOT NULL,
  `D_NAME` varchar(20) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `P_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doctor`
--

INSERT INTO `tb_doctor` (`D_ID`, `D_NAME`, `Contact`, `Designation`, `P_ID`) VALUES
(21, 'DR. Adnan Hossain', 1712, 'FCPS', 1),
(22, 'Dr.Habib', 1972, 'MBBS', 2),
(23, 'Dr.Akbar Hossain', 19800, 'DMS', 3),
(24, 'Dr.Shamim', 17712, 'FCPS', 4),
(25, 'Dr.Abir', 16243, 'MBBS', 5),
(26, 'Dr.Hannan', 1521, 'FCPS', 6),
(27, 'Dr.Sharmin', 19234, 'FCPS', 7),
(28, 'Dr.Abdullah', 1712, 'MBBS', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pathology`
--

CREATE TABLE `tb_pathology` (
  `Sample_ID` int(30) NOT NULL,
  `Sample_Name` varchar(30) NOT NULL,
  `C_Date` date NOT NULL,
  `P_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pathology`
--

INSERT INTO `tb_pathology` (`Sample_ID`, `Sample_Name`, `C_Date`, `P_ID`) VALUES
(12, 'Blood', '2019-10-30', 1),
(13, 'Blood', '2019-10-30', 2),
(15, 'Blood', '2019-10-30', 3),
(16, 'Blood', '2019-10-30', 4),
(17, 'Blood', '2019-10-30', 5),
(18, 'Blood', '2019-10-30', 6),
(19, 'Blood', '2019-10-30', 7),
(20, 'Blood', '2019-10-30', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_patient`
--

CREATE TABLE `tb_patient` (
  `P_ID` int(30) NOT NULL,
  `P_NAME` text NOT NULL,
  `Age` int(30) NOT NULL,
  `Contact` int(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Disease` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_patient`
--

INSERT INTO `tb_patient` (`P_ID`, `P_NAME`, `Age`, `Contact`, `Address`, `Disease`) VALUES
(1, 'Akram', 21, 1771, 'Bharidhara', 'Diarrhea'),
(2, 'Abir', 23, 1713, 'Badda', 'Cancer'),
(3, 'Akram', 22, 17132, 'Uttora', 'Maleria'),
(4, 'Babul', 55, 1521, 'Badda', 'Maleria'),
(5, 'Amina', 40, 1913, 'Rampura', 'Hart Attack'),
(6, 'Rahi', 24, 1675, 'Gajipur', 'Cancer'),
(7, 'Kuddus', 23, 152123, 'Abdullapur', 'Diarrhea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`Bill_ID`);

--
-- Indexes for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `tb_pathology`
--
ALTER TABLE `tb_pathology`
  ADD PRIMARY KEY (`Sample_ID`);

--
-- Indexes for table `tb_patient`
--
ALTER TABLE `tb_patient`
  ADD PRIMARY KEY (`P_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
