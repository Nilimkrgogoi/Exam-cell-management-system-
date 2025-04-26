-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 07:49 AM
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
-- Database: `nalpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('[Nilim]', '[2002]');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_registration`
--

CREATE TABLE `alumni_registration` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `phone_no` varchar(45) DEFAULT NULL,
  `email_id` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `passing_year` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alumni_registration`
--

INSERT INTO `alumni_registration` (`id`, `name`, `phone_no`, `email_id`, `department`, `passing_year`) VALUES
(6, 'Mridusmita ray', '9602251256', 'raymidu@gmail.com', 'Computer Science', 2024),
(7, 'Angkita borah', '5827924575', 'angkitaborah@gmail.com', 'Computer Science', 2024),
(8, 'Nilim borah', '7415841225', 'nilimAborah@gmail.com', 'Electrical Engineering', 2026),
(9, 'Ankita Talukdar', '0978653214', 'leee@gmail.com', 'Computer Science', 2024),
(10, 'Manali Kalita', '6002690158', 'manalikali8284@gmail.com', 'Electrical Engineering', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_cse_semester1`
--

CREATE TABLE `attendance_cse_semester1` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `English` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering Drawing` int(11) NOT NULL,
  `Workshop` int(11) NOT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_cse_semester1`
--

INSERT INTO `attendance_cse_semester1` (`id`, `roll_number`, `subject`, `English`, `Physics`, `Chemistry`, `Mathematics`, `Engineering Drawing`, `Workshop`, `attendance_percentage`, `status`) VALUES
(1, 'Nal/23/cs/016', '', 0, 0, 0, 0, 0, 0, 81.40, 'Clear'),
(2, 'NAL/22/CS/045', '', 0, 0, 0, 0, 0, 0, 50.00, 'DC');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_cse_semester2`
--

CREATE TABLE `attendance_cse_semester2` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_cse_semester3`
--

CREATE TABLE `attendance_cse_semester3` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_cse_semester4`
--

CREATE TABLE `attendance_cse_semester4` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_cse_semester4`
--

INSERT INTO `attendance_cse_semester4` (`id`, `roll_number`, `semester`, `subject`, `attendance_percentage`, `status`) VALUES
(1, 'NAL/22/CS/013', '', 'CAO', 83.33, 'Clear');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_cse_semester5`
--

CREATE TABLE `attendance_cse_semester5` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_cse_semester6`
--

CREATE TABLE `attendance_cse_semester6` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_cse_semester6`
--

INSERT INTO `attendance_cse_semester6` (`id`, `roll_number`, `subject`, `attendance_percentage`, `status`) VALUES
(1, 'Nal/21/co/023', 'Cloud Computing', 87.21, 'Clear'),
(3, 'NAL/21/CO/60', 'Software Engineering', 66.67, 'NC'),
(4, 'NAL/21/CO/37', 'Software Engineering', 56.67, 'DC'),
(5, 'NAL/21/C0/044', 'Software Engineering', 66.67, 'NC'),
(6, 'NAL/HKP/21/025', 'Cryptography and Network Security', 33.33, 'DC');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_el_semester1`
--

CREATE TABLE `attendance_el_semester1` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_el_semester2`
--

CREATE TABLE `attendance_el_semester2` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_el_semester3`
--

CREATE TABLE `attendance_el_semester3` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_el_semester4`
--

CREATE TABLE `attendance_el_semester4` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_el_semester4`
--

INSERT INTO `attendance_el_semester4` (`id`, `roll_number`, `semester`, `subject`, `attendance_percentage`, `status`) VALUES
(1, 'NAL/22/EL/027', '', 'Electrical Machines-I', 77.14, 'Clear'),
(2, 'NAL/22/EL/027', '', 'Electrical & Electronics Drawing & Design', 71.43, 'NC');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_el_semester5`
--

CREATE TABLE `attendance_el_semester5` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_el_semester6`
--

CREATE TABLE `attendance_el_semester6` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_pt_semester1`
--

CREATE TABLE `attendance_pt_semester1` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_pt_semester2`
--

CREATE TABLE `attendance_pt_semester2` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_pt_semester3`
--

CREATE TABLE `attendance_pt_semester3` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_pt_semester4`
--

CREATE TABLE `attendance_pt_semester4` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_pt_semester5`
--

CREATE TABLE `attendance_pt_semester5` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_pt_semester6`
--

CREATE TABLE `attendance_pt_semester6` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `attendance_percentage` decimal(5,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `title`) VALUES
(1, 'End Semester'),
(2, 'June-2024'),
(3, 'June-2024'),
(4, 'June-2024'),
(5, 'June-2024'),
(6, 'June-2024'),
(7, 'June-2024'),
(8, 'June-2024'),
(9, 'June-2024'),
(10, 'july 2024');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `name`, `roll_no`, `department`, `semester`, `result`) VALUES
(1, 'Kishor Kalita', 'Nal/21/co/016', 'cse', '6', 'clear'),
(2, 'Nilim Kumar Gogoi', 'NAL/21/CO/022', 'cse', '5', 'clear'),
(3, 'Trideep saikia', 'NAL/21/CO/054', 'cse', '5', 'retest');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `username`, `email`, `password`, `branch`) VALUES
(5, 'Manashi Talukdar', 'Manashi', 'manashi@gmail.com', '12345678', 'Computer Science'),
(7, 'rkc', 'rkc', 'rkc@123', '12345678', 'Computer Science'),
(12, 'Kangka Chakravarty', 'kangka', 'kangka@gmail.com', '1234', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `file_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `file_name`) VALUES
(10, 'mi', 'd3d9446802a44259755d38e6d163e820.jpg'),
(11, 'khfg', '6512bd43d9caa6e02c990b0a82652dca.jpg'),
(12, 'gjf', 'c20ad4d76fe97759aa27a0c99bff6710.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `passwords` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `passwords`) VALUES
(1, 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `marks_cse_semester1`
--

CREATE TABLE `marks_cse_semester1` (
  `roll_no` varchar(40) NOT NULL,
  `English` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering Drawing` int(11) NOT NULL,
  `Workshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks_cse_semester1`
--

INSERT INTO `marks_cse_semester1` (`roll_no`, `English`, `Physics`, `Chemistry`, `Mathematics`, `Engineering Drawing`, `Workshop`) VALUES
('Nal//23/cs/56', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marks_cse_semester2`
--

CREATE TABLE `marks_cse_semester2` (
  `roll_no` varchar(40) NOT NULL,
  `English` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering Mechanics` int(11) NOT NULL,
  `Workshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks_cse_semester2`
--

INSERT INTO `marks_cse_semester2` (`roll_no`, `English`, `Physics`, `Chemistry`, `Mathematics`, `Engineering Mechanics`, `Workshop`) VALUES
('Nal//23/cs/56', 0, 0, 0, 45, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marks_cse_semester3`
--

CREATE TABLE `marks_cse_semester3` (
  `roll_no` varchar(40) NOT NULL,
  `Computer Application and Programming` int(11) NOT NULL,
  `Elements of Multimedia` int(11) NOT NULL,
  `Computer Architecture and Organisation` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Elements of Electrical Engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_cse_semester4`
--

CREATE TABLE `marks_cse_semester4` (
  `roll_no` varchar(40) NOT NULL,
  `Data Structure` int(11) NOT NULL,
  `System Programming` int(11) NOT NULL,
  `MP & Interfacing` int(11) NOT NULL,
  `Advanced C & C++` int(11) NOT NULL,
  `Computer Hardware and Networking` int(11) NOT NULL,
  `Digital Electronics` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_cse_semester5`
--

CREATE TABLE `marks_cse_semester5` (
  `roll_no` varchar(40) NOT NULL,
  `Database Management System` int(11) NOT NULL,
  `Internet & Web Technology` int(11) NOT NULL,
  `Computer Communication & Networking` int(11) NOT NULL,
  `Java Programming` int(11) NOT NULL,
  `Operating System` int(11) NOT NULL,
  `Visual Programming` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks_cse_semester5`
--

INSERT INTO `marks_cse_semester5` (`roll_no`, `Database Management System`, `Internet & Web Technology`, `Computer Communication & Networking`, `Java Programming`, `Operating System`, `Visual Programming`) VALUES
('Nal/21/co/016', 55, 35, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marks_cse_semester6`
--

CREATE TABLE `marks_cse_semester6` (
  `roll_no` varchar(40) NOT NULL,
  `Industrial Management & Entrepreneurship` int(11) NOT NULL,
  `Cryptography and Network Security` int(11) NOT NULL,
  `Mobile Computing` int(11) NOT NULL,
  `Artificial Intelligence` int(11) NOT NULL,
  `Software Engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks_cse_semester6`
--

INSERT INTO `marks_cse_semester6` (`roll_no`, `Industrial Management & Entrepreneurship`, `Cryptography and Network Security`, `Mobile Computing`, `Artificial Intelligence`, `Software Engineering`) VALUES
('Nal/21/co/016', 31, 35, 35, 35, 35),
('Nal/21/co/067', 0, 0, 400, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marks_el_semester1`
--

CREATE TABLE `marks_el_semester1` (
  `roll_no` varchar(40) NOT NULL,
  `English` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering Drawing` int(11) NOT NULL,
  `Workshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_el_semester2`
--

CREATE TABLE `marks_el_semester2` (
  `roll_no` varchar(40) NOT NULL,
  `English` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering Mechanics` int(11) NOT NULL,
  `Workshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_el_semester3`
--

CREATE TABLE `marks_el_semester3` (
  `roll_no` varchar(40) NOT NULL,
  `Computer Application & Programming` int(11) NOT NULL,
  `Engineering Economics & Accountancy` int(11) NOT NULL,
  `Principles of Electrical Engineering` int(11) NOT NULL,
  `Elements of Mechanical Engineering` int(11) NOT NULL,
  `Elements of Electronics & Devices` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks_el_semester3`
--

INSERT INTO `marks_el_semester3` (`roll_no`, `Computer Application & Programming`, `Engineering Economics & Accountancy`, `Principles of Electrical Engineering`, `Elements of Mechanical Engineering`, `Elements of Electronics & Devices`, `Mathematics`) VALUES
('NAL/22/EL/027', 36, 39, 45, 58, 62, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marks_el_semester4`
--

CREATE TABLE `marks_el_semester4` (
  `roll_no` varchar(40) NOT NULL,
  `Electrical Circuit & Network` int(11) NOT NULL,
  `Electrical & Electronics Drawing & Design` int(11) NOT NULL,
  `Electrical Measurement & Measuring Instrument-I` int(11) NOT NULL,
  `Electrical Machines-I` int(11) NOT NULL,
  `Electrical Engineering Material` int(11) NOT NULL,
  `Digital Electronics` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks_el_semester4`
--

INSERT INTO `marks_el_semester4` (`roll_no`, `Electrical Circuit & Network`, `Electrical & Electronics Drawing & Design`, `Electrical Measurement & Measuring Instrument-I`, `Electrical Machines-I`, `Electrical Engineering Material`, `Digital Electronics`) VALUES
('Nal/21/el/016', 0, 53, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marks_el_semester5`
--

CREATE TABLE `marks_el_semester5` (
  `roll_no` varchar(40) NOT NULL,
  `Electrical Machine-II` int(11) NOT NULL,
  `Electrical Measurement & Measuring Instrument-II` int(11) NOT NULL,
  `Electrical Power` int(11) NOT NULL,
  `Microprocessor` int(11) NOT NULL,
  `Control System` int(11) NOT NULL,
  `Non-Conventional Energy Sources` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_el_semester6`
--

CREATE TABLE `marks_el_semester6` (
  `roll_no` varchar(40) NOT NULL,
  `Industrial Management & Entrepreneurship` int(11) NOT NULL,
  `Installation and Maintenance` int(11) NOT NULL,
  `Electrical Estimating and Contracting` int(11) NOT NULL,
  `AC Distribution and Utilisation` int(11) NOT NULL,
  `Switchgear and Protection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_pt_semester1`
--

CREATE TABLE `marks_pt_semester1` (
  `roll_no` varchar(40) NOT NULL,
  `English` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering Drawing` int(11) NOT NULL,
  `Workshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_pt_semester2`
--

CREATE TABLE `marks_pt_semester2` (
  `roll_no` varchar(40) NOT NULL,
  `English` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Engineering Mechanics` int(11) NOT NULL,
  `Workshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_pt_semester3`
--

CREATE TABLE `marks_pt_semester3` (
  `roll_no` varchar(40) NOT NULL,
  `Computer Application & Programming` int(11) NOT NULL,
  `Engineering Economics & Accountancy` int(11) NOT NULL,
  `Element of Electrical Engineering` int(11) NOT NULL,
  `Printing Process` int(11) NOT NULL,
  `Element of Electronics Engineering` int(11) NOT NULL,
  `Prepress Repro Technique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_pt_semester4`
--

CREATE TABLE `marks_pt_semester4` (
  `roll_no` varchar(40) NOT NULL,
  `Visual Design & DTP` int(11) NOT NULL,
  `Image Processing` int(11) NOT NULL,
  `Printers Material Science-I` int(11) NOT NULL,
  `Gravure Flexoghaphe & Screen Printing` int(11) NOT NULL,
  `Typesetting & Composition` int(11) NOT NULL,
  `Theory of Machines` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_pt_semester5`
--

CREATE TABLE `marks_pt_semester5` (
  `roll_no` varchar(40) NOT NULL,
  `Digital Prepress` int(11) NOT NULL,
  `Offset Printing Technology` int(11) NOT NULL,
  `Printers Material Science-II` int(11) NOT NULL,
  `Planographic Printing Technique-I` int(11) NOT NULL,
  `Press Work` int(11) NOT NULL,
  `Printing Machine Maintenance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_pt_semester6`
--

CREATE TABLE `marks_pt_semester6` (
  `roll_no` varchar(40) NOT NULL,
  `Industrial Management & Entrepreneurship` int(11) NOT NULL,
  `Binding and Finishing` int(11) NOT NULL,
  `Estimating and Costing` int(11) NOT NULL,
  `Planographic Printing Technique-II` int(11) NOT NULL,
  `Machine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `registration` varchar(100) DEFAULT NULL,
  `registration_year` int(4) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll_no`, `department`, `email`, `phone`, `registration`, `registration_year`, `semester`, `reg_date`, `status`) VALUES
(1, 'Nilim Kumar Gogoi', 'Nal/21/co/022', 'cse', 'nilim@gmail.com', '09854433421', '117423', 2021, 'alumni', '2024-07-04 03:49:37', 'alumni'),
(2, 'Angkita Borah', 'Nal/21/co/040', 'cse', 'angkitaborah@gmail.com', '987654321', '117423', 2021, '6', '2024-07-04 04:30:49', 'active'),
(3, 'Trideep saikia', 'NAL/21/CO/054', 'cse', 'trideepsaikia6@gmail.com', '09387463059', '117502', 2021, '6', '2024-07-04 04:30:49', 'active'),
(4, 'Kishor Kalita', 'Nal/21/co/016', 'cse', 'kishor@123', '09854433421', '116649', 2021, '6', '2024-07-04 04:30:49', 'active'),
(5, 'Manali Kalita', 'Nal/21/co/003', 'cse', 'manali@gmail.com', '87136413914', '11723', 2021, '6', '2024-07-04 04:35:07', 'active'),
(6, 'Xyz', 'Nal/22/cs/016', 'cse', 'xyz@gmail.com', '09435112247', '116649', 2022, '4', '2024-07-04 04:37:08', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_registration`
--
ALTER TABLE `alumni_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_cse_semester1`
--
ALTER TABLE `attendance_cse_semester1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_cse_semester2`
--
ALTER TABLE `attendance_cse_semester2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_cse_semester3`
--
ALTER TABLE `attendance_cse_semester3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_cse_semester4`
--
ALTER TABLE `attendance_cse_semester4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_cse_semester5`
--
ALTER TABLE `attendance_cse_semester5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_cse_semester6`
--
ALTER TABLE `attendance_cse_semester6`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_number` (`roll_number`);

--
-- Indexes for table `attendance_el_semester1`
--
ALTER TABLE `attendance_el_semester1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_el_semester2`
--
ALTER TABLE `attendance_el_semester2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_el_semester3`
--
ALTER TABLE `attendance_el_semester3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_el_semester4`
--
ALTER TABLE `attendance_el_semester4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_el_semester5`
--
ALTER TABLE `attendance_el_semester5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_el_semester6`
--
ALTER TABLE `attendance_el_semester6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_pt_semester1`
--
ALTER TABLE `attendance_pt_semester1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_pt_semester2`
--
ALTER TABLE `attendance_pt_semester2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_pt_semester3`
--
ALTER TABLE `attendance_pt_semester3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_pt_semester4`
--
ALTER TABLE `attendance_pt_semester4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_pt_semester5`
--
ALTER TABLE `attendance_pt_semester5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_pt_semester6`
--
ALTER TABLE `attendance_pt_semester6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`),
  ADD UNIQUE KEY `unique_username` (`username`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks_cse_semester1`
--
ALTER TABLE `marks_cse_semester1`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_cse_semester2`
--
ALTER TABLE `marks_cse_semester2`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_cse_semester3`
--
ALTER TABLE `marks_cse_semester3`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_cse_semester4`
--
ALTER TABLE `marks_cse_semester4`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_cse_semester5`
--
ALTER TABLE `marks_cse_semester5`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_cse_semester6`
--
ALTER TABLE `marks_cse_semester6`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_el_semester1`
--
ALTER TABLE `marks_el_semester1`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_el_semester2`
--
ALTER TABLE `marks_el_semester2`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_el_semester3`
--
ALTER TABLE `marks_el_semester3`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_el_semester4`
--
ALTER TABLE `marks_el_semester4`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_el_semester5`
--
ALTER TABLE `marks_el_semester5`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_el_semester6`
--
ALTER TABLE `marks_el_semester6`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_pt_semester1`
--
ALTER TABLE `marks_pt_semester1`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_pt_semester2`
--
ALTER TABLE `marks_pt_semester2`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_pt_semester3`
--
ALTER TABLE `marks_pt_semester3`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_pt_semester4`
--
ALTER TABLE `marks_pt_semester4`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_pt_semester5`
--
ALTER TABLE `marks_pt_semester5`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `marks_pt_semester6`
--
ALTER TABLE `marks_pt_semester6`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni_registration`
--
ALTER TABLE `alumni_registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attendance_cse_semester1`
--
ALTER TABLE `attendance_cse_semester1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance_cse_semester2`
--
ALTER TABLE `attendance_cse_semester2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_cse_semester3`
--
ALTER TABLE `attendance_cse_semester3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_cse_semester4`
--
ALTER TABLE `attendance_cse_semester4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance_cse_semester5`
--
ALTER TABLE `attendance_cse_semester5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_cse_semester6`
--
ALTER TABLE `attendance_cse_semester6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `attendance_el_semester1`
--
ALTER TABLE `attendance_el_semester1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_el_semester2`
--
ALTER TABLE `attendance_el_semester2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_el_semester3`
--
ALTER TABLE `attendance_el_semester3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_el_semester4`
--
ALTER TABLE `attendance_el_semester4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance_el_semester5`
--
ALTER TABLE `attendance_el_semester5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_el_semester6`
--
ALTER TABLE `attendance_el_semester6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_pt_semester1`
--
ALTER TABLE `attendance_pt_semester1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_pt_semester2`
--
ALTER TABLE `attendance_pt_semester2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_pt_semester3`
--
ALTER TABLE `attendance_pt_semester3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_pt_semester4`
--
ALTER TABLE `attendance_pt_semester4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_pt_semester5`
--
ALTER TABLE `attendance_pt_semester5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_pt_semester6`
--
ALTER TABLE `attendance_pt_semester6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
