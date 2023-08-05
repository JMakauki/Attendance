-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 09:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `fullname`, `phone`, `sex`, `birthdate`, `password`) VALUES
('admin', 'Group leader', '0745471623', 'Female', '1999-02-01', 'admin'),
('admin1', 'michael jordan', '0712345678', 'Male', '1997-12-31', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ispresent` varchar(3) NOT NULL,
  `student` varchar(100) NOT NULL,
  `lecture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ispresent`, `student`, `lecture`) VALUES
('no', '13301002', '1654299906'),
('yes', '13301003', '1654299906'),
('yes', '13301004', '1654299906'),
('yes', '13301005', '1654299906'),
('yes', '13301006', '1654299906'),
('no', '13301007', '1654299906'),
('yes', '13301008', '1654299906'),
('yes', '13301009', '1654299906'),
('yes', '13301010', '1654298282'),
('yes', '13301011', '1654298282'),
('no', '13301012', '1654298282'),
('no', '13301013', '1654298282'),
('yes', '13301014', '1654298282'),
('yes', '13301015', '1654298282'),
('no', '13301061', '1654414081'),
('yes', '13301062', '1654414081'),
('yes', '13301063', '1654414081'),
('yes', '13301064', '1654414081'),
('yes', '13301065', '1654414081'),
('yes', '13301066', '1654414081'),
('yes', '13301067', '1654414081'),
('no', '13301068', '1654414081'),
('no', '13301069', '1654414081'),
('no', '13301070', '1654414081'),
('no', '13301071', '1654414081'),
('yes', '13301072', '1654414081'),
('yes', '13301073', '1654414081'),
('yes', '13301074', '1654414081'),
('yes', '13301075', '1654414081'),
('no', '13301076', '1654414081'),
('yes', '13301077', '1654414081'),
('yes', '13301078', '1654414081'),
('no', '13301079', '1654414081'),
('no', '13301080', '1654414081'),
('yes', '13301081', '1654414081'),
('yes', '13301082', '1654414081'),
('yes', '13301083', '1654414081'),
('yes', '13301084', '1654414081'),
('yes', '13301085', '1654414081'),
('yes', '13301086', '1654414081'),
('no', '13301087', '1654414081'),
('no', '13301088', '1654414081'),
('no', '13301095', '1654414081');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
('css111', 'introduction to IT'),
('css112', 'intro to finance'),
('css113', 'communication skills'),
('css114', 'algebra'),
('css116', 'statistics'),
('css12', 'computer programming'),
('css121', 'data warehousing'),
('CSS123', 'Introduction to networking'),
('css124', 'Database management systems'),
('css211', 'advanced networking'),
('css212', 'graphics'),
('css236', 'software engineering'),
('mss126', 'discrete mathematics'),
('mss214', 'project management');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lecture_id` varchar(100) NOT NULL,
  `time` date NOT NULL,
  `lecturer_id` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lecture_id`, `time`, `lecturer_id`, `course_id`) VALUES
('1654298282', '2022-06-21', '1', 'css212'),
('1654298505', '2022-06-21', '1', 'css116'),
('1654299906', '2022-06-21', '1', 'css124'),
('1654414081', '2022-06-14', '1', 'mss214');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` varchar(100) NOT NULL,
  `lecturer_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_name`, `gender`, `phone_number`, `password`) VALUES
('1', 'Kunze boy', 'm', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `programme_id` varchar(100) NOT NULL,
  `programme_name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`programme_id`, `programme_name`, `description`) VALUES
('BAF', 'Bachelor accounting and finance', 'BAF'),
('BBA', 'Bachelor of business administration', 'bba'),
('ICTB', 'Information and communication technology with business', 'business based IT'),
('ICTM', 'Information and communication technology with management', 'ictm'),
('ITS', 'Information technology and systems', 'Pure information technology programme'),
('POM', 'Production management', 'pom');

-- --------------------------------------------------------

--
-- Table structure for table `programme_structure`
--

CREATE TABLE `programme_structure` (
  `programme_programme_id` varchar(100) NOT NULL,
  `course_course_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme_structure`
--

INSERT INTO `programme_structure` (`programme_programme_id`, `course_course_id`) VALUES
('BAF', 'css111'),
('BAF', 'css112'),
('BAF', 'css113'),
('BAF', 'css12'),
('BBA', 'css112'),
('BBA', 'css113'),
('BBA', 'css116'),
('BBA', 'mss214'),
('ICTB', 'css111'),
('ICTB', 'css113'),
('ICTB', 'css116'),
('ICTM', 'css111'),
('ICTM', 'css121'),
('ICTM', 'CSS123'),
('ITS', 'css111'),
('ITS', 'css124'),
('ITS', 'css211'),
('ITS', 'css236'),
('POM', 'css212');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(100) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `programme_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `gender`, `programme_id`) VALUES
('13301002', 'KELVIN MASOUD', 'M', 'ITS'),
('13301003', 'JOHN MWENDA', 'M', 'ITS'),
('13301004', 'AMON MOSES', 'M', 'ITS'),
('13301005', 'DOMINICK KIMASA', 'M', 'ITS'),
('13301006', 'ABRAHAM MWANSANSU', 'M', 'ITS'),
('13301007', 'JOEL MWAKALEBELA', 'M', 'ITS'),
('13301008', 'RICHARD MWAIGE', 'M', 'ITS'),
('13301009', 'FRED MICHAEL', 'M', 'ITS'),
('13301010', 'ABUBAKAR DILUNGA', 'M', 'POM'),
('13301011', 'JUMA KIKULI', 'M', 'POM'),
('13301012', 'VICTOR MWAISIGE', 'M', 'POM'),
('13301013', 'CLEMENCE MWIKABE', 'M', 'POM'),
('13301014', 'ABEL SHAYO', 'M', 'POM'),
('13301015', 'MOSES JAMES', 'M', 'POM'),
('13301016', 'RAMADHAN SUDI', 'M', 'BAF'),
('13301017', 'ALI RAMADHAN', 'M', 'BAF'),
('13301018', 'JONAS MKUDE', 'M', 'BAF'),
('13301019', 'ANTHONY MPOKI', 'M', 'BAF'),
('13301020', 'SHEDRACK ZAKAYO', 'M', 'BAF'),
('13301021', 'INNOCENT MGAVE', 'M', 'BAF'),
('13301022', 'TARIQ SEIF', 'M', 'BAF'),
('13301023', 'AHMED ABED', 'M', 'BAF'),
('13301024', 'ABEID MUSA', 'M', 'BAF'),
('13301025', 'DANFORD KALABA', 'M', 'BAF'),
('13301026', 'DOMINICK SALAMBA', 'M', 'ICTM'),
('13301027', 'RICHARD BISHANGWAYO', 'M', 'ICTM'),
('13301028', 'KENNEDY ANTHONY', 'M', 'ICTM'),
('13301029', 'STEVEN MAUYA', 'M', 'ICTM'),
('13301030', 'COLLINS SHIRIMA', 'M', 'BAF'),
('13301031', 'MICHAEL MASWA', 'M', 'BAF'),
('13301032', 'GABRIEL ASEKI', 'M', 'BAF'),
('13301033', 'FAHAD JUMA', 'M', 'BAF'),
('13301034', 'VICTOR KISANGA', 'M', 'BAF'),
('13301035', 'SOSPETER WANDELA', 'M', 'BAF'),
('13301036', 'ABDALLAH CHISALA', 'M', 'BAF'),
('13301037', 'ATHUMAN KASSIM', 'M', 'BAF'),
('13301038', 'SHUKURU KAWAMBWA', 'M', 'BAF'),
('13301039', 'JOHN GABRIEL', 'M', 'BAF'),
('13301040', 'AYOUB NJONJO', 'M', 'BAF'),
('13301041', 'ANNA MGASA', 'F', 'BAF'),
('13301042', 'ASHURA HAULE', 'F', 'BAF'),
('13301043', 'JANE MASAWE', 'F', 'BAF'),
('13301044', 'JANETH LIVINGSTONE', 'F', 'BAF'),
('13301045', 'JANETH MASONDA', 'F', 'BAF'),
('13301046', 'AGNES MWAKILASA', 'F', 'BAF'),
('13301047', 'IRENE MINGA', 'F', 'BAF'),
('13301048', 'HADIJA RAJABU', 'F', 'BAF'),
('13301049', 'SHAMIRA ALI', 'F', 'BAF'),
('13301050', 'AGNES MWAMBENE', 'F', 'BAF'),
('13301051', 'SHAMIRA ISSAH', 'F', 'BAF'),
('13301052', 'ANETH RICHARD', 'F', 'BAF'),
('13301053', 'JOAN JACKSON', 'F', 'BAF'),
('13301054', 'LINNAH MUSHI', 'F', 'BAF'),
('13301055', 'LISSA CHIKWENDE', 'F', 'ICTM'),
('13301056', 'HAMIDA RASHID', 'F', 'BAF'),
('13301057', 'HAMIDA MUSA', 'F', 'ICTM'),
('13301058', 'GIFT MACHA', 'F', 'BAF'),
('13301059', 'ANGEL JOHN', 'F', 'BAF'),
('13301060', 'CLARA JEREMIA', 'F', 'BAF'),
('13301061', 'KABIR HASSAN', 'M', 'BBA'),
('13301062', 'ABDUL SWAMADU', 'M', 'BBA'),
('13301063', 'BASHIR ABDUL', 'M', 'BBA'),
('13301064', 'MOHAMMED BAKARI', 'M', 'BBA'),
('13301065', 'SALEH MWENDA', 'M', 'BBA'),
('13301066', 'ABEID SWALEHE', 'M', 'BBA'),
('13301067', 'AMANI MAHUNA', 'M', 'BBA'),
('13301068', 'JUNIOR KIMARO', 'M', 'BBA'),
('13301069', 'ALFA RAYMOND', 'M', 'BBA'),
('13301070', 'RAYMOND KIKWETE', 'M', 'BBA'),
('13301071', 'JEREMIAH ANTHONY', 'M', 'BBA'),
('13301072', 'TAREQ KIKEKE', 'M', 'BBA'),
('13301073', 'LUKAS KIKOTI', 'M', 'BBA'),
('13301074', 'NEYMAR MAJOGORO', 'M', 'BBA'),
('13301075', 'NASIB ABDUL', 'M', 'BBA'),
('13301076', 'LUKOSA JUNIOR', 'M', 'BBA'),
('13301077', 'LEBRON JAMES', 'M', 'BBA'),
('13301078', 'SENZO MBATA', 'M', 'BBA'),
('13301079', 'BROWN BRIAN', 'M', 'BBA'),
('13301080', 'WILLIAMS JACKSON', 'M', 'BBA'),
('13301081', 'VIVIAN BROWN', 'F', 'BBA'),
('13301082', 'SOPHIA ALI', 'F', 'BBA'),
('13301083', 'SONIA BRIAN', 'F', 'BBA'),
('13301084', 'MERCY KELVIN', 'F', 'BBA'),
('13301085', 'SAIMA HASSAM', 'F', 'BBA'),
('13301086', 'GRACE JAMES', 'F', 'BBA'),
('13301087', 'NEEMA ANTHONY', 'F', 'BBA'),
('13301088', 'DIANA BENARD', 'F', 'BBA'),
('13301089', 'TECKLA INNOCENT', 'F', 'ICTM'),
('13301090', 'MARIAM URASA', 'F', 'ICTM'),
('13301091', 'AMINA JUMA', 'F', 'ICTM'),
('13301092', 'SURAIYA ABDUL', 'F', 'ICTM'),
('13301093', 'KABULA JAMES', 'F', 'ICTM'),
('13301094', 'VIOLETH AMON', 'F', 'ICTM'),
('13301095', 'GLORY ANORLD', 'F', 'BBA'),
('13301096', 'ALICE DENIS', 'F', 'ICTM'),
('13301097', 'ISABELA OSCAR', 'F', 'ICTM'),
('13301098', 'CAROLINE JASON', 'F', 'ICTM'),
('13301099', 'STELLA PAUL', 'F', 'ICTM'),
('13301100', 'SHADYA HASSAN', 'F', 'ICTM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`student`,`lecture`),
  ADD KEY `fk_attendance_lecture1` (`lecture`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lecture_id`),
  ADD KEY `lecture_ibfk_2` (`lecturer_id`),
  ADD KEY `lecture_ibfk_3` (`course_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`programme_id`);

--
-- Indexes for table `programme_structure`
--
ALTER TABLE `programme_structure`
  ADD PRIMARY KEY (`programme_programme_id`,`course_course_id`),
  ADD KEY `fk_programme_structure_course1` (`course_course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_ibfk_1` (`programme_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk_attendance_lecture1` FOREIGN KEY (`lecture`) REFERENCES `lecture` (`lecture_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_attendance_student1` FOREIGN KEY (`student`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lecture`
--
ALTER TABLE `lecture`
  ADD CONSTRAINT `lecture_ibfk_2` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`lecturer_id`),
  ADD CONSTRAINT `lecture_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `programme_structure`
--
ALTER TABLE `programme_structure`
  ADD CONSTRAINT `fk_programme_structure_course1` FOREIGN KEY (`course_course_id`) REFERENCES `course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_programme_structure_programme1` FOREIGN KEY (`programme_programme_id`) REFERENCES `programme` (`programme_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`programme_id`) REFERENCES `programme` (`programme_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
