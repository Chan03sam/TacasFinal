-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 04:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tacas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive_list`
--

CREATE TABLE `archive_list` (
  `id` int(30) NOT NULL,
  `archive_code` varchar(100) NOT NULL,
  `curriculum_id` int(30) NOT NULL,
  `year` year(4) NOT NULL,
  `title` text NOT NULL,
  `abstract` text NOT NULL,
  `members` text NOT NULL,
  `banner_path` text NOT NULL,
  `document_path` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `student_id` int(30) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `views_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive_list`
--

INSERT INTO `archive_list` (`id`, `archive_code`, `curriculum_id`, `year`, `title`, `abstract`, `members`, `banner_path`, `document_path`, `status`, `student_id`, `date_created`, `date_updated`, `views_count`) VALUES
(4, '2024010001', 14, 2024, 'Example', '&lt;p&gt;Example&lt;/p&gt;', '&lt;p&gt;Example&lt;/p&gt;', 'uploads/banners/archive-4.png?v=1706539369', 'uploads/pdf/archive-4.pdf?v=1706539369', 1, NULL, '2024-01-29 22:42:48', '2024-02-14 23:01:35', 8),
(6, '2024010002', 14, 2024, 'Impact of Socio-Economic Status on the Academic Performance', '&lt;p&gt;&lt;span style=&quot;font-family: S&ouml;hne, ui-sans-serif, system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, Ubuntu, Cantarell, &amp;quot;Noto Sans&amp;quot;, sans-serif, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; white-space-collapse: preserve;&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;This study examines the correlation between socio-economic status (SES) and academic performance, focusing on how the economic and social background of students influences their educational outcomes. It investigates the potential impact of various socio-economic factors, such as family income, parental education, and access to resources, on students\' academic achievements. By analyzing the relationship between SES and academic performance, the research aims to provide insights into the disparities in educational outcomes and shed light on potential areas for intervention and support to ensure equitable access to quality education for all students. The findings may contribute to educational policy development and implementation of targeted interventions to address socio-economic disparities in academic performance.&lt;/font&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '&lt;p&gt;Author:&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;span style=&quot;font-size: 1rem;&quot;&gt;Samonte, Christian A.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'uploads/banners/archive-6.png?v=1706661798', 'uploads/pdf/archive-6.pdf?v=1706661798', 1, 9, '2024-01-31 08:43:15', '2024-02-14 23:06:17', 51),
(27, 'sadasdadas', 17, 0000, 'asdasdas', '&lt;p&gt;asdas&lt;/p&gt;', '&lt;p&gt;asdasd&lt;/p&gt;', 'uploads/banners/archive-27.png?v=1707575825', 'uploads/pdf/archive-27.pdf?v=1707575825', 1, NULL, '2024-02-10 22:37:05', '2024-02-10 22:37:53', 2),
(28, 'Test10', 13, 0000, 'Test10', '&lt;p&gt;sadasdasd&lt;/p&gt;', '&lt;p&gt;asdasdsad&lt;/p&gt;', 'uploads/banners/archive-28.png?v=1707668903', 'uploads/pdf/archive-28.pdf?v=1707668903', 1, NULL, '2024-02-12 00:28:22', '2024-02-12 00:31:24', 2),
(29, 'Test12', 20, 2024, 'Test12', '&lt;p&gt;asdasdsa&lt;/p&gt;', '&lt;p&gt;asdasdas&lt;/p&gt;', 'uploads/banners/archive-29.png?v=1707670027', 'uploads/pdf/archive-29.pdf?v=1707670027', 1, NULL, '2024-02-12 00:47:07', '2024-02-12 00:47:46', 2);

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_list`
--

CREATE TABLE `curriculum_list` (
  `id` int(30) NOT NULL,
  `department_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curriculum_list`
--

INSERT INTO `curriculum_list` (`id`, `department_id`, `name`, `description`, `status`, `date_created`, `date_updated`) VALUES
(10, 7, 'BS Business Administration Major in Marketing Management', '', 1, '2024-01-29 22:22:36', '2024-01-29 22:23:04'),
(11, 7, 'BS Hospitality Management', '', 1, '2024-01-29 22:22:56', NULL),
(12, 7, 'BS Tourism Management', '', 1, '2024-01-29 22:23:28', NULL),
(13, 8, 'BS Computer Engineering', '', 1, '2024-01-29 22:23:48', NULL),
(14, 8, 'BS Computer Science', '', 1, '2024-01-29 22:23:59', NULL),
(15, 8, 'BS Information System', '', 1, '2024-01-29 22:24:11', NULL),
(16, 8, 'BS Information Technology', '', 1, '2024-01-29 22:24:20', NULL),
(17, 9, 'BS Accountancy', '', 1, '2024-01-29 22:24:34', NULL),
(18, 10, 'BS Education Major in English', '', 1, '2024-01-29 22:24:49', NULL),
(19, 10, 'BS Education Major in Mathematics', '', 1, '2024-01-29 22:24:58', NULL),
(20, 10, 'BS Education Major in Social Science', '', 1, '2024-01-29 22:25:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_list`
--

CREATE TABLE `department_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_list`
--

INSERT INTO `department_list` (`id`, `name`, `description`, `status`, `date_created`, `date_updated`) VALUES
(7, 'CBHTM', 'BS Business Administration Major in Marketing Management\r\nBS Hospitality Management\r\nBS Tourism Management', 1, '2024-01-29 22:20:16', NULL),
(8, 'CEITE', 'BS Computer Engineering\r\nBS Computer Science\r\nBS Information System\r\nBS Information Technology', 1, '2024-01-29 22:21:17', NULL),
(9, 'COA', 'BS Accountancy', 1, '2024-01-29 22:21:35', NULL),
(10, 'COED', 'BS Education Major in English\r\nBS Education Major in Mathematics\r\nBS Education Major in Social Science', 1, '2024-01-29 22:21:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `outsiders_list`
--

CREATE TABLE `outsiders_list` (
  `id` int(11) NOT NULL,
  `duration` int(11) DEFAULT 0,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `user_type` enum('student','outsider') NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time_start` time DEFAULT '00:00:00',
  `time_expiration` time DEFAULT '00:00:00',
  `elapsed_time` time DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outsiders_list`
--

INSERT INTO `outsiders_list` (`id`, `duration`, `firstname`, `middlename`, `lastname`, `gender`, `user_type`, `email`, `password`, `avatar`, `status`, `created_at`, `updated_at`, `time_start`, `time_expiration`, `elapsed_time`) VALUES
(43, 2, 'Christian', 'Amistoso', 'Samonte', 'Male', 'outsider', 'samontechristian120300@gmail.com', '7bbeb82f3733123b3758d0f25078e3fc', 'uploads/outsiders/outsider-43.png?v=1707668002', 1, '2024-01-30 12:54:23', '2024-02-12 11:14:25', '00:00:00', '06:30:00', '00:00:00'),
(44, 0, 'Christian', 'Amistoso', 'Samonte', 'Male', 'outsider', '120300@gmail.com', '7bbeb82f3733123b3758d0f25078e3fc', NULL, 0, '2024-02-09 14:57:48', '2024-02-09 14:57:48', '00:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_list`
--

CREATE TABLE `payment_list` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `refno` varchar(255) NOT NULL,
  `payment_date` date NOT NULL,
  `receipt_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_list`
--

INSERT INTO `payment_list` (`id`, `firstname`, `lastname`, `email`, `payment_method`, `amount`, `refno`, `payment_date`, `receipt_image`, `created_at`, `status`) VALUES
(41, 'Christian', 'Samonte', 'samontechristian120300@gmail.com', 'Paypal', '500', 'sd98c4s651c65d74f87we162', '2024-02-10', 'uploads/payments/receipt-41.png?v=1707552005', '2024-02-10 08:00:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(30) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `department_id` int(30) NOT NULL,
  `curriculum_id` int(30) NOT NULL,
  `email` text NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `password` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `avatar` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `type` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `firstname`, `middlename`, `lastname`, `department_id`, `curriculum_id`, `email`, `user_type`, `password`, `gender`, `status`, `avatar`, `date_created`, `date_updated`, `type`) VALUES
(9, 'Christian', 'Amistoso', 'Samonte', 8, 14, '1-200101@asiatech.edu.ph', 'student', '7bbeb82f3733123b3758d0f25078e3fc', 'Male', 1, 'uploads/students/student-9.png?v=1707564552', '2024-01-30 10:39:41', '2024-02-10 19:29:12', 1),
(20, 'christy', 'Amistoso', 'Samonte', 8, 14, '120300@asiatech.edu.ph', 'student', '7bbeb82f3733123b3758d0f25078e3fc', 'Male', 0, '', '2024-02-09 23:01:41', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Thesis And Capstone Archiving System'),
(6, 'short_name', 'TACAS'),
(11, 'logo', 'uploads/logo-1706583019.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover-1706582690.png'),
(15, 'content', 'Array'),
(16, 'email', 'info@asiatech.edu.ph'),
(17, 'contact', ' 0955 438 1956'),
(18, 'from_time', '11:00'),
(19, 'to_time', '21:30'),
(20, 'address', '1506, Entrance of Golden City, Brgy. Dila, Santa Rosa, Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=not verified, 1 = verified',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `status`, `date_added`, `date_updated`) VALUES
(1, 'Admin', NULL, 'Samonte', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/admins/admin-1.png?v=1707465169', NULL, 2, 1, '2021-01-20 14:02:37', '2024-02-09 15:52:49'),
(3, 'Admin', NULL, 'Juswa', 'juswa', '0192023a7bbd73250516f069df18b500', 'uploads/avatar-3.png?v=1706694611', NULL, 2, 1, '2024-01-31 17:50:11', '2024-01-31 17:50:11'),
(4, 'Admin', NULL, 'Anne', 'Anne', '0192023a7bbd73250516f069df18b500', 'uploads/avatar-4.png?v=1706694671', NULL, 2, 1, '2024-01-31 17:51:11', '2024-01-31 17:51:11'),
(5, 'Admin', NULL, 'Jade', 'Jade', '0192023a7bbd73250516f069df18b500', 'uploads/avatar-5.png?v=1706694688', NULL, 2, 1, '2024-01-31 17:51:28', '2024-01-31 17:51:28'),
(7, 'Admin', NULL, 'Pablo', 'Pablo', '0192023a7bbd73250516f069df18b500', 'uploads/avatar-7.png?v=1706694782', NULL, 2, 1, '2024-01-31 17:53:02', '2024-01-31 17:53:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive_list`
--
ALTER TABLE `archive_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curriculum_id` (`curriculum_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `curriculum_list`
--
ALTER TABLE `curriculum_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `department_list`
--
ALTER TABLE `department_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outsiders_list`
--
ALTER TABLE `outsiders_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_list`
--
ALTER TABLE `payment_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH,
  ADD KEY `department_id` (`department_id`),
  ADD KEY `curriculum_id` (`curriculum_id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive_list`
--
ALTER TABLE `archive_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `curriculum_list`
--
ALTER TABLE `curriculum_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `department_list`
--
ALTER TABLE `department_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `outsiders_list`
--
ALTER TABLE `outsiders_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `payment_list`
--
ALTER TABLE `payment_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archive_list`
--
ALTER TABLE `archive_list`
  ADD CONSTRAINT `archive_list_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_list` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `curriculum_list`
--
ALTER TABLE `curriculum_list`
  ADD CONSTRAINT `curriculum_list_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_list`
--
ALTER TABLE `student_list`
  ADD CONSTRAINT `student_list_ibfk_1` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_list_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
