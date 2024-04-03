-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 03:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `AdminName` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ID` int(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `AdminRegdate` date NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminName`, `MobileNumber`, `Email`, `ID`, `UserName`, `AdminRegdate`, `Password`) VALUES
('Andrea Claire Miras', '09199794889', 'miras.andreac@gmail.com', 1, 'mirasac', '2024-03-14', 'pandesal'),
('Resyl Abad', '09111111111', 'abadresyl@gmail.com', 2, 'abadresyl', '2024-03-01', 'britchtiv');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `ID` int(255) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `ClassName` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `CreationDate` date NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `StuID` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `AltenateNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `NoticeMsg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`ID`, `StudentName`, `ClassName`, `Section`, `CreationDate`, `Gender`, `DOB`, `StuID`, `Image`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `NoticeMsg`) VALUES
(1, '', 'a', 'A', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourses`
--

CREATE TABLE `tblcourses` (
  `ID` int(255) NOT NULL,
  `CourseCode` varchar(25) NOT NULL,
  `CourseDescription` varchar(255) NOT NULL,
  `Dean` varchar(255) NOT NULL,
  `CreationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcourses`
--

INSERT INTO `tblcourses` (`ID`, `CourseCode`, `CourseDescription`, `Dean`, `CreationDate`) VALUES
(3, 'BSCRIM', 'Bachelor of Science in Criminology', 'Jessa D. Hermita', 'March-20-2024'),
(4, 'BSN', 'Bachelor of Science in Nursing', 'Robilyn Mersola', 'March-21-2024'),
(6, 'BSEE', 'Bachelor of Science in Electrical Engineering', 'ASD', 'March-21-2024');

-- --------------------------------------------------------

--
-- Table structure for table `tblgrades`
--

CREATE TABLE `tblgrades` (
  `ID` int(255) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `SubjectCode` varchar(255) NOT NULL,
  `PrelimGrade` varchar(10) NOT NULL,
  `MidtermGrade` varchar(10) NOT NULL,
  `SemiGrade` varchar(10) NOT NULL,
  `FinalGrade` varchar(10) NOT NULL,
  `Total` varchar(10) NOT NULL,
  `TeacherName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblgrades`
--

INSERT INTO `tblgrades` (`ID`, `StudentName`, `SubjectCode`, `PrelimGrade`, `MidtermGrade`, `SemiGrade`, `FinalGrade`, `Total`, `TeacherName`) VALUES
(1, 'A', 'GE110', '2.0', '2.0', '2.0', '2.0', '2.0', '012024'),
(2, 'A', 'GE111', '2.0', '2.0', '2.0', '2.0', '2.0', 'S'),
(3, 'A', 'GE112', '2.0', '2.0', '2.0', '2.0', '2.0', 'S'),
(4, 'A', 'GE113', '2.0', '2.0', '2.0', '2.0', '2.0', 'S'),
(5, 'A', 'DICT115', '2.0', '2.0', '2.0', '2.0', '2.0', 'S'),
(6, 'A', 'DICT116', '2.0', '2.0', '2.0', '2.0', '2.0', 'A'),
(7, 'A', 'DICT117', '2.0', '2.0', '2.0', '2.0', '2.0', 'L'),
(8, 'A', 'PE1', '2.0', '2.0', '2.0', '2.0', '2.0', 'E'),
(9, 'A', 'NSTP1', '2.0', '2.0', '2.0', '2.0', '2.0', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tblict`
--

CREATE TABLE `tblict` (
  `ID` int(255) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `SubjectDescription` varchar(255) NOT NULL,
  `Days` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(255) NOT NULL,
  `NoticeTitle` varchar(255) NOT NULL,
  `CreationDate` date NOT NULL,
  `ClassId` varchar(255) NOT NULL,
  `ClassName` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `NoticeMsg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `PageType` varchar(255) NOT NULL,
  `PageTitle` varchar(255) NOT NULL,
  `PageDescription` varchar(500) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`PageType`, `PageTitle`, `PageDescription`, `MobileNumber`, `Email`) VALUES
('aboutus', 'HCCB Portal of Records', 'Holy Child Colleges of Butuan Portal of Records', '09199794889', 'miras.andreac@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblpublicnotice`
--

CREATE TABLE `tblpublicnotice` (
  `ID` int(255) NOT NULL,
  `NoticeTitle` varchar(255) NOT NULL,
  `CreationDate` date NOT NULL,
  `NoticeMessage` varchar(500) NOT NULL,
  `ClassId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpublicnotice`
--

INSERT INTO `tblpublicnotice` (`ID`, `NoticeTitle`, `CreationDate`, `NoticeMessage`, `ClassId`) VALUES
(1, 'HCCB POR BEGINS', '2024-03-14', 'Beginning of Edit', 'ICT4');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(255) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `StudentEmail` varchar(255) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `StuID` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `AltenateNumber` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `DateofAdmission` varchar(255) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `SubjectCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `StudentName`, `StudentEmail`, `Gender`, `DOB`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `Image`, `DateofAdmission`, `Course`, `SubjectCode`) VALUES
(1, 'Jessa Hermita', 'hermitajessa@gmail.com', 'Female', '2001-01-19', '20010119', 'kksks', 'Mother', '0999999999', '0222222222', 'Las Nieves', 'hermitaj', '12345678', '2d87b41f3de518367dc0e51f9dd03bf91710479894.jpg', '', '', ''),
(2, 'A', 'A', 'Female', '2001-01-19', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'ICT', 'ICT111'),
(3, 'B', 'B', 'B', '0000-00-00', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', '', 'B', 'ICT', 'ICT112'),
(4, 'C', 'C', 'C', '0000-00-00', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'CC', 'C', 'C', 'ICT113'),
(5, 'E', 'E', 'E', '0000-00-00', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'ICT', 'ICT111'),
(6, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `ID` int(255) NOT NULL,
  `CollegiateYear` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `CourseCode` varchar(50) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `SubjectDescription` varchar(300) NOT NULL,
  `Schedule` varchar(200) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `Units` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`ID`, `CollegiateYear`, `Semester`, `CourseCode`, `SubjectCode`, `SubjectDescription`, `Schedule`, `Time`, `Units`) VALUES
(1, 'FIRST YEAR', '1st', 'BSIT', 'GE110', 'Understanding the Self', 'MT', '5:30 - 6:30PM', 3),
(2, 'FIRST YEAR', '1st', 'BSIT', 'GE111', 'Purposive Communication', 'MT', '6:30 - 7:30PM', 4),
(3, 'FIRST YEAR', '1st', 'BSIT', 'GE112', 'Reading in Philippine History', 'WTh', '5:30 - 6:30PM', 3),
(4, 'FIRST YEAR', '1st', 'BSIT', 'GE113', 'Contemporary World', 'WTh', '6:30 - 7:30PM', 3),
(5, 'FIRST YEAR', '1st', 'BSIT', 'DICT115', 'Introduction to Computing', 'F', '5:30 - 7:30PM', 2),
(6, 'FIRST YEAR', '1st', 'BSIT', 'DICT116', 'Systems Administration & Maintenance', 'F', '7:30 - 8:30PM', 2),
(7, 'FIRST YEAR', '1st', 'BSIT', 'DICT117', 'Computer Programming 1', 'S', '1:30 - 3:30PM', 2),
(8, 'FIRST YEAR', '1st', 'BSIT', 'PE1', 'Physical Fitness 1', 'S', '3:30 - 4:30PM', 2),
(9, 'FIRST YEAR', '1st', 'BSIT', 'NSTP 1', 'Civic Welfare Training Services', 'S', '4:30 - 5:30', 3),
(10, 'FIRST YEAR', '2nd', 'BSIT', 'GE120', 'Mathematics in the Modern World', 'MT', '5:30 - 6:30PM', 3),
(11, 'FIRST YEAR', '2nd', 'BSIT', 'DICT121', 'Discrete Mathematics', 'MT', '6:30 - 7:30PM', 3),
(12, 'FIRST YEAR', '2nd', 'BSIT', 'DICT122', 'Computer Programming 2', 'MT', '7:30 - 8:30PM', 2),
(13, 'FIRST YEAR', '2nd', 'BSIT', 'DICT123', 'Fundamentals of DBMS', 'A', 'A', 2),
(14, 'FIRST YEAR', '2nd', 'BSIT', 'DICT124', 'Platform Technologies', 'A', 'A', 2),
(15, 'FIRST YEAR', '2nd', 'BSIT', 'DICT125', 'Technopreneurship', 'A', 'A', 2),
(16, 'FIRST YEAR', '2nd', 'BSIT', 'PE2', 'Rhythmic Activities', 'A', 'A', 2),
(17, 'FIRST YEAR', '2nd', 'BSIT', 'NSTP2', 'Civic Welfare Training Services 2', 'A', 'A', 3),
(18, 'FIRST YEAR', 'SUMMER', 'BSIT', 'SIT1', 'SIT/OJT 1', 'A', 'A', 4),
(19, 'SECOND YEAR', '1st', 'BSIT', 'GE210', 'Art Appreciation', 'A', 'A', 3),
(20, 'SECOND YEAR', '1st', 'BSIT', 'DICT211', 'Data Structure and Algorithm', 'A', 'A', 3),
(21, 'SECOND YEAR', '1st', 'BSIT', 'DICT212', 'Fundamentals of Networking', 'A', 'A', 4),
(22, 'SECOND YEAR ', '1st', 'BSIT', 'DICT213', 'Information Management', 'A', 'A', 3),
(23, 'SECOND YEAR', '1st', 'BSIT', 'DICT214', 'Integrative Programming & Technologies', 'A', 'A', 3),
(24, 'SECOND YEAR', '1st', 'BSIT', 'DICT215', 'Object-Oriented Programming', 'AA', 'A', 4),
(25, 'SECOND YEAR', '1st', 'BSIT', 'Fil1', 'An Kurikulum ng Filipino ds Batayang Antas ng Edukasyon', 'A', 'A', 3),
(26, 'SECOND YEAR', '1st', 'BSIT', 'LIT1', 'Philippine Literature and Literature of Mindanao', 'A', 'A', 3),
(27, 'FIRST YEAR', '1st', 'BSIT', 'TOTAL', '', '', '', 28),
(28, 'FIRST YEAR', '2nd', 'BSIT', 'TOTAL', '', '', '', 28),
(29, 'SECOND YEAR', '1st', 'BSIT', 'TOTAL', ' ', ' ', ' ', 28),
(30, 'SECOND YEAR', '2nd', 'BSIT', 'TOTAL', ' ', ' ', ' ', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `ID` int(255) NOT NULL,
  `TeacherID` varchar(255) NOT NULL,
  `TeacherName` varchar(255) NOT NULL,
  `TeacherEmail` varchar(255) NOT NULL,
  `TeacherCourse` varchar(255) NOT NULL,
  `SubjectCode` varchar(255) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `MobileNumber` varchar(25) NOT NULL,
  `AltenateNumber` varchar(25) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `TeacherID`, `TeacherName`, `TeacherEmail`, `TeacherCourse`, `SubjectCode`, `Gender`, `DOB`, `MobileNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `Image`) VALUES
(1, '012024', 'Angelina Monares', 'monaresan@gmail.com', 'ICT', 'GE110', 'Female', '2000-11-28', '09999999999', '08888888888', 'Las Nieves', 'monaresan', '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CreationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `FullName`, `UserName`, `Password`, `CreationDate`) VALUES
(1, 'Andrea Claire Miras', 'mirasac', '12345678', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcourses`
--
ALTER TABLE `tblcourses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblgrades`
--
ALTER TABLE `tblgrades`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblict`
--
ALTER TABLE `tblict`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcourses`
--
ALTER TABLE `tblcourses`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblgrades`
--
ALTER TABLE `tblgrades`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblict`
--
ALTER TABLE `tblict`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
