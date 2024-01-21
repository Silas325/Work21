-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 04:18 PM
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
-- Database: `webster`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_answers`
--

CREATE TABLE `exam_answers` (
  `User_id` int(11) NOT NULL,
  `Exam_name` varchar(255) NOT NULL,
  `Question_number` int(11) NOT NULL,
  `Question_text` text NOT NULL,
  `Answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`User_id`, `Exam_name`, `Question_number`, `Question_text`, `Answer`) VALUES
(5, 'GEO & ENV', 1, 'What is geography?', 'the study of earth.');

-- --------------------------------------------------------

--
-- Table structure for table `exam_data`
--

CREATE TABLE `exam_data` (
  `ExamId` int(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `Exam_name` varchar(255) NOT NULL,
  `Question_number` int(255) NOT NULL,
  `Question_type` varchar(255) NOT NULL,
  `Question_text` longtext NOT NULL,
  `Answer` longtext NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_data`
--

INSERT INTO `exam_data` (`ExamId`, `User_id`, `Exam_name`, `Question_number`, `Question_type`, `Question_text`, `Answer`, `CreatedAt`) VALUES
(1, 5, 'GEO & ENV', 1, 'short_answer', 'What is Geography?', 'It is the study of earth.', '2024-01-20 22:32:24'),
(2, 5, 'GEO & ENV', 2, 'true_false', 'Is geography a lesson studied in secondary school?', 'True', '2024-01-20 22:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Studentid` int(255) NOT NULL,
  `Firstname` longtext NOT NULL,
  `MiddleName` longtext NOT NULL,
  `Lastname` longtext NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `Registration_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Studentid`, `Firstname`, `MiddleName`, `Lastname`, `Class`, `Subject`, `User_id`, `Registration_time`) VALUES
(1, 'Claire', 'Marie', 'Uwamariya', 'senior 2', 'Entrepreneurship', 5, '2024-01-20 21:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `subject_category`
--

CREATE TABLE `subject_category` (
  `SubjectId` int(11) NOT NULL,
  `User_id` int(255) NOT NULL,
  `TeacherFirstname` varchar(255) NOT NULL,
  `TeacherMiddleName` varchar(255) DEFAULT NULL,
  `TeacherLastname` varchar(255) NOT NULL,
  `Subject_category` varchar(255) NOT NULL,
  `Subcategory` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_category`
--

INSERT INTO `subject_category` (`SubjectId`, `User_id`, `TeacherFirstname`, `TeacherMiddleName`, `TeacherLastname`, `Subject_category`, `Subcategory`, `Class`, `Subject`, `Description`, `CreatedAt`) VALUES
(1, 1, 'Silas', 'Karamage', 'HAKUZWIMANA', 'Advanced level', 'Science', 'Senior 6', 'Mathematics', 'Required subject for all mathematics related subject in advanced level', '2024-01-20 05:06:32'),
(2, 1, 'Silas', '', 'HAKUZWIMANA', 'Primary', 'Science', 'Primary 6', 'Science and elementary technologies', 'To be taught in upper primary six', '2024-01-21 10:36:34'),
(3, 1, 'Emmanuel', '', 'MUSHIMIYIMANA', 'Ordinary level', 'Science', 'Senior 1', 'Chemistry', 'To be taught in lower secondary senior 1', '2024-01-21 10:37:36'),
(4, 1, 'Eline', '', 'MUKAMANA', 'pre_primary', 'Arts and languages', 'Nursery 1', 'English', 'Fundamental languages to all students in pre-primary', '2024-01-21 10:38:45'),
(5, 1, 'Jeanne', 'Marie', 'UWITIJE', 'pre_primary', 'Arts and languages', 'Nursery 2', 'Kinyarwanda', 'Iri somo rizajya ryigishwa mu mashuri yinshuke.', '2024-01-21 10:39:44'),
(6, 1, 'Anne', 'Marie', 'MUKAZIBERA', 'Primary', 'Science', 'Primary 1', 'Mathematics', 'To be taught in lower primary 1', '2024-01-21 10:40:40'),
(7, 1, 'Anne', 'Marie', 'NYIRANKWAYA', 'Advanced level', 'Science', 'Senior 5', 'Mathematics', 'To be taught in lower primary 1', '2024-01-21 10:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `DocumentId` int(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `File_name` varchar(255) NOT NULL,
  `Document_type` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`DocumentId`, `User_id`, `File_name`, `Document_type`, `Description`, `CreatedAt`) VALUES
(1, 5, 'UR-CST MODULES FOR CSE.pdf', 'document', 'Learn about your modules!', '2024-01-20 23:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Registration_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `reset_token` varchar(255) NOT NULL,
  `Reset_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Fname`, `Lname`, `Username`, `Email`, `Password`, `Status`, `Registration_time`, `reset_token`, `Reset_time`) VALUES
(1, 'Silas', 'HAKUZWIMANA', 'Silas#123@', 'hakusilas@gmail.com', '$2y$10$KAcqUQ4rtyBhv5FFI7N0AeMUWuPJzhMzqvk7/lfVoB/PyMvrShLWy', 'Admin', '2024-01-20 04:43:39', '', NULL),
(2, 'Mubaraka', 'NDIZEYE', 'Muabarka@12#', 'mubarakandizeye41@gmail.com', '$2y$10$rfA9Z0BjVvoPsWWNqC0iP.av3ecALexgPLSLez9dpAJQZv1ccCnbq', 'Student', '2024-01-20 19:55:39', '', NULL),
(3, 'Laurence', 'MUKAMANA', 'Laurence@123$', 'mukamalaurence2005@gmail.com', '$2y$10$mPqBLelhBwsPxUn9cfAY3ucLmiI8.z26ArUEeOv2HjofXngg4gP7e', 'Teacher', '2024-01-20 20:03:28', '', NULL),
(4, 'Jean Nepomuscene', 'KANYAMAHANGA', 'kanyamahanganepo112@gmail.com', 'hakus123ilas@gmail.com', '$2y$10$ZOqODBH9sf9SWRidj37AS.GOtCOI8IHO1tKdLTGNPVuPFfPzy9mme', 'Student', '2024-01-20 21:18:58', '', NULL),
(5, 'Eric', 'IDUFASHE', 'Ericidufash', 'iduferic2003@gmail.com', '$2y$10$4ofbEigiWrWHi6nHzqnUveWtWx9yyppLjL74p1NbO0pklATkkxYam', 'Teacher', '2024-01-20 21:28:19', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `Message_id` int(11) NOT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Middle_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_number` varchar(20) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `Submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`Message_id`, `First_name`, `Middle_name`, `Last_name`, `Username`, `Email`, `Phone_number`, `Message`, `Submission_date`) VALUES
(1, 'Silas', '', 'HAKUZWIMANA', 'Admin', 'hakusilas@gmail.com', '+250783749019', 'Who is there?', '2024-01-20 04:51:59'),
(2, 'Silas', '', 'HAKUZWIMANA', 'Mr silas', 'hakusilas@gmail.com', '+250783749019', 'I want help to sign up in this system.', '2024-01-21 07:48:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`User_id`,`Exam_name`,`Question_number`);

--
-- Indexes for table `exam_data`
--
ALTER TABLE `exam_data`
  ADD PRIMARY KEY (`ExamId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Studentid`);

--
-- Indexes for table `subject_category`
--
ALTER TABLE `subject_category`
  ADD PRIMARY KEY (`SubjectId`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`DocumentId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`Message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_data`
--
ALTER TABLE `exam_data`
  MODIFY `ExamId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Studentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject_category`
--
ALTER TABLE `subject_category`
  MODIFY `SubjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `DocumentId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `Message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
