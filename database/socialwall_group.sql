-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 01:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialwall_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0:Inactive,1:Active',
  `createdon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `user_name`, `email_id`, `password`, `pass_word`, `status`, `createdon`) VALUES
(1, 'admin', '', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, '2018-10-30 16:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `i_agree` varchar(255) NOT NULL COMMENT '''Agree'',''Not Agree''',
  `status` enum('Active','Inactive') NOT NULL,
  `createdon` datetime DEFAULT NULL,
  `modifiedon` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_id`, `i_agree`, `status`, `createdon`, `modifiedon`) VALUES
(1, 'Joydeep', 'Ray', 'joydeep.ray1@gmail.com', 'Agree', 'Active', '2018-10-26 10:27:00', '2018-11-19 15:25:04'),
(2, 'vinay', 'jaiswal', 'vinay.jaiswal@shobizexperience.com', 'Agree', 'Active', '2018-10-26 10:27:00', '2018-11-20 11:02:29'),
(3, 'amit', 'pashte', 'amit.pashte@gmail.com', 'Agree', 'Active', '2018-10-26 00:00:00', '2018-11-13 17:13:04'),
(4, 'rahul', 'demo', 'rahul.demo@gmail.com', '', 'Active', '2018-11-03 16:35:01', NULL),
(6, 'vinay', 'jaiswal', 'vinay.jaiswal1@shobizexperience.com', 'Agree', 'Active', '2018-11-13 15:58:16', '2018-11-15 18:02:59'),
(8, 'Joydeep', 'Ray', 'joydeep.ray@gmail.com', 'Agree', 'Active', '2018-11-13 16:53:25', '2018-11-13 17:12:49'),
(9, 'Joydeep', 'ray', 'joydeep123.ray1@gmail.com', 'Agree', 'Active', '2018-11-19 10:44:59', '2018-11-19 15:15:28'),
(10, 'Joydeep', 'ray', 'joydeep12@gmail.com', 'Agree', 'Active', '2018-11-19 10:46:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_bk`
--

CREATE TABLE `users_bk` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `i_agree` varchar(255) NOT NULL COMMENT '''Agree'',''Not Agree''',
  `status` enum('Active','Inactive') NOT NULL,
  `createdon` datetime DEFAULT NULL,
  `modifiedon` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_bk`
--

INSERT INTO `users_bk` (`user_id`, `first_name`, `last_name`, `email_id`, `i_agree`, `status`, `createdon`, `modifiedon`) VALUES
(1, 'G', 'Maruti', 'g.maruti@meta-helix.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(2, 'Mr. Ramakrishna', 'Sataluri', 'r.krishna@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(3, 'Mr. Arun', 'Vidyut', 'akvidyut@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(4, 'Mr. Behram', 'Sabawala', 'bsabawala@tataunistore.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(5, 'Mrs. Nidhi', 'Sahni', 'nidhi.sahni@tmf.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(6, 'Mr. Anirban', 'Bhattacharya', 'anirban.bhattacharya@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(7, 'Mr. Mayank', 'Sangani', 'mayank.sangani@infinitiretail.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(8, 'Mr. Valentine', 'Fernandes', 'valentine.fernandes@tmf.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(9, 'Abhishek', 'Kar', 'abhishek.kar@mjunction.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(10, 'Ms. Sonie', 'Saran', 'sonie.saran@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(11, 'N', 'Prabavathy', 'nprabhav@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(12, 'Prashant', 'Dalvi', 'prashant.dalvi@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(13, 'Ms. Vidya', 'Raut', 'vraut@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(14, 'Ms. Tanya', 'Rego', 'trego@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(15, 'Ms. Vibhuti', 'Shah', 'vibhutishah@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(16, 'Ms. Tania', 'RoyChowdhury', 'trchowdhury@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(17, 'Ms. Sukanya', 'S', 's.sukanya@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(18, 'Ms. Supriya', 'Singh', 'supriya.singh@tatacommunications.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(19, 'Ms. Swati', 'Sinha', 'swatis@iswp.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(20, 'Ms. Smita', 'Agarwal', 'smita.agarwal@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(21, 'Ms. Sucharita', 'Choudhury', 'schoudhury@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(22, 'Ms. Shweta', 'Srivastava', 'ssrivastava@tataunistore.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(23, 'Ms. Seema', 'Prasad', 'seema.prasad@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(24, 'Ms. Sharmila', 'Mukherjee', 'sharmila.mukherjee@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(25, 'Ms. Samprati', 'Chaudhuri', 'samprati.mukherjee@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(26, 'Ms. Sana', 'Adhami', 'sana.adhami@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(27, 'Ms. Satarupa', 'RoySarkar', 'satarupa_rs@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(28, 'Ms. Rukhshana', 'Randelia', 'rukhshana.randelia@infinitiretail.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(29, 'Ms. Ruma', 'Rao', 'rrao@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(30, 'Ms. Roopa', 'Purushothaman', 'roopa.p@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(31, 'Ms. Reena', 'Wahi', 'rwahi@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(32, 'Ms. Rekha', 'Balakrishnan', 'rekha.balakrishnan@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(33, 'Ms. Priyanka', 'Gidwani', 'priyanka.gidwani@tatacoffee.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(34, 'Ms. Radha', 'Sule', 'radha.sule@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(35, 'Ms. Ragini', 'Pasumarthi', 'ragini.pasumarthi@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(36, 'Ms. Poushali', 'Chatterjee', 'chatterjee.poushali@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(37, 'Ms. Preeti', 'Sehgal', 'preeti.sehgal@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(38, 'Ms. Priya', 'Mathilakath Pillai', 'priyam@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(39, 'Ms. Pooja', 'Johar', 'pooja.johar@nelco.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(40, 'Ms. Poornima', 'Mallya', 'poornima.mallya@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(41, 'Ms. Nupur', 'Mallick', 'nupur.mallick@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(42, 'Ms. Pinakshi', 'Khandelwal', 'pkhandelwal@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(43, 'Ms. Neha', 'Parekh', 'neha.parekh@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(44, 'Ms. Mrunal', 'Hatwalne', 'mrunal.h@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(45, 'Ms. Nalini', 'Tolar', 'ntolar@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(46, 'Ms. Neha', 'Pandey', 'neha.pandey@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(47, 'Ms. Meena', 'Almaula', 'malmaula@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(48, 'Ms. Meenu', 'Sharma', 'meenu.sharma@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(49, 'Ms. Kristyl', 'Bhesania', 'kristyl.bhesania@tataaia.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(50, 'Ms. Kalpana', 'Jaishankar', 'kalpanaj@tce.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(51, 'Ms. Komal', 'Rana', 'komalp.rana@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(52, 'Ms. Janaki', 'Chaudhry', 'janaki.chaudhry@tatainternational.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(53, 'Ms. Jaya', 'Singh Panda', 'jaya.singh@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(54, 'Ms. Jayati', 'Paul', 'jayati.paul@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(55, 'Ms. Glenda', 'Cardoza', 'gcardoza@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(56, 'Ms. Guneet', 'Singh', 'guneet.singh@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(57, 'Ms. Foram', 'Nagori', 'foram.nagori@tajhotels.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(58, 'Ms. Dharna', 'Dhamija', 'ddhamija@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(59, 'Ms. Dilith', 'Castleton', 'dilith.castleton@tatametaliks.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(60, 'Ms. Edrina', 'Choudhary', 'edrina@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(61, 'Ms. Deborah', 'Vick', 'debbie.vick@tatasteeleurope.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(62, 'Ms. Deeya', 'Ray', 'deeya.ray@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(63, 'Ms. Brinda', 'Sherman', 'brinda.sherman@tajhotels.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(64, 'Ms. Aarthi', 'Subramanian', 'aarthi.s@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(65, 'Ms. Ankita', 'Sharma', 'ankita.s@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(66, 'Mrs. Sanchita', 'Mustauphy', 'sanchita.mustauphy@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(67, 'Mrs. Sulochana', 'Ghosh', 'gsulochana@tmilltd.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(68, 'Mrs. Susweta', 'Mukherjee', 'susweta.mukherjee@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(69, 'Mrs. Nidhi', 'Basu', 'nidhi.basu@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(70, 'Mrs. Prachi', 'Kulkarni', 'prachi.kulkarni@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(71, 'Mrs. Monika', 'Agarwal', 'monika@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(72, 'Mrs. Manjuvani', 'Nayani', 'manjuvani@tataprojects.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(73, 'Mrs. Manprit', 'Shrivastava', 'manprit@iswp.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(74, 'Mrs. Lakshmi', 'Toshniwal', 'tlakshmi@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(75, 'Mrs. Loveleen', 'Mishra', 'loveleen.mishra@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(76, 'Mrs. Karishma', 'Sanghvi', 'karishma.sanghvi@infinitiretail.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(77, 'Mrs. Lakshmi', 'Nair', 'lakshmi.nair@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(78, 'Mrs. Jignyasa', 'Kurlapkar', 'jignyasa@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(79, 'Mr. YS', 'Chalapathi Rao', 'ysc.rao@tacogroup.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(80, 'Mr. Zarir', 'Langrana', 'zlangrana@tatachemicals.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(81, 'Mrs. Crichelle', 'Mendonca', 'cmendonca@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(82, 'Mr. Vishal', 'Trivedi', 'vishal.trivedi@infinitiretail.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(83, 'Mr. Wallop', 'Chaturongpalathipat', 'wallopc@tatasteelthailand.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(84, 'Mr. Vishal', 'Rally', 'vishal.rally@tatatel.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(85, 'Mr. Vinod', 'Kumar', 'vinod@tatacommunications.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(86, 'Mr. Vishal', 'Badshah', 'vbadshah@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(87, 'Mr. Vineet', 'Shukla', 'vineet.shukla@tatatechnologies.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(88, 'Mr. Vinod', 'Gopalakrishnan Kumar', 'vinodkumar@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(89, 'Mr. Vijay', 'Parikh', 'vijay.parikh@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(90, 'Mr. Vinayak', 'Bhave', 'vinayak.bhave@tatainternational.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(91, 'Mr. Vinayak', 'Deshpande', 'vinayakd@tataprojects.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(92, 'Mr. Veeramani', 'Shankar', 'veeramani.shankar@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(93, 'Mr. Venkatadri', 'Ranganathan', 'venkatadri.kr@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(94, 'Mr. Vibhakar', '.', 'vibhakar@meta-helix.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(95, 'Mr. Vaibhav', 'Bendre', 'vaibhavbendre@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(96, 'Mr. Vaibhav', 'Tambwekar', 'vaibhav.tambwekar@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(97, 'Mr. TV', 'Narendran', 'narendran@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(98, 'Mr. Uttam', 'Kumar Soni', 'uttam.soni@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(99, 'Mr. Thomas', 'Flack', 'thomas.flack@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(100, 'Mr. Tanmoy', 'Chakrabarty', 'tanmoy.chakrabarty@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(101, 'Mr. Tarun', 'Daga', 'tarun.daga@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(102, 'Mr. Sureshnarayanan', 'Sundaresan', 'suresh.narayanan@tataficosa.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(103, 'Mr. Surya', 'Narayan Lenka', 'surya.lenka@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(104, 'Mr. Surajit', 'Sinha', 'surajit.sinha@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(105, 'Mr. Sunil', 'Sinha', 'sunilsinha@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(106, 'Mr. Suprakash', 'Mukhopadhyay', 'suprakash.mukhopadhyay@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(107, 'Mr. Sunil', 'Choudhary', 'sunil.choudhary1@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(108, 'Mr. Sunil', 'Raj', 'sunilr@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(109, 'Mr. Sumant', 'Sood', 'sumant@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(110, 'Mr. Sunil', 'Bhaskaran', 'sunilbhaskaran@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(111, 'Mr. Sujoy', 'Sengupta', 'sujoy.sengupta@tatatinplate.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(112, 'Mr. Suhas', 'Salunkhe', 'salunkhe.suhas@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(113, 'Mr. Sujir', 'L Nayak', 'nayak.sujir@tmf.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(114, 'Mr. Sudipto', 'Kar', 'skar@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(115, 'Mr. Suhas', 'C A', 'suhas.ca@tatainternational.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(116, 'Mr. Sudhir', 'Langer', 'sudhir.langer@tgbl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(117, 'Mr. Sudipta', 'Marjit', 'sudipta.marjit@tacogroup.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(118, 'Mr. Suchiro', 'Chakraborty', 'suchiro@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(119, 'Mr. Subhrajit', 'Basu', 'sbasu@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(120, 'Mr. Subrata', 'Lahiri', 'subrata.lahiri@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(121, 'Mr. Srinu', 'Pitta', 'spitta@tatachemicals.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(122, 'Mr. Subhadip', 'Dutta', 'subhadip.dutta@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(123, 'Mr. Sridhar', 'Sarathy', 's.sarathy@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(124, 'Mr. Srinath', 'Narasimhan', 'srinath.n@tatatel.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(125, 'Mr. Srinivas', 'Shenoy T V', 'tvshenoy@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(126, 'Mr. Somnath', 'Raghavan', 'som@tatasponge.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(127, 'Mr. Soumen', 'Baral', 'soumen.baral@mjunction.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(128, 'Mr. Sourav', 'Roy', 'souravroy@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(129, 'Mr. Siddharth', 'Singh', 'siddharth.singh@tatapower-ddl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(130, 'Mr. SOBHAN', 'KUMAR', 'sobhankumar@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(131, 'Mr. Siddharth', 'Mishra', 'smishra@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(132, 'Mr. Siddharth', 'Mishra', 'siddharth.mishra@tatacommunications.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(133, 'Mr. Siddharth', 'Bhatt', 'sbhatt@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(134, 'Mr. Siddharth', 'Chaudhari', 'siddharth.chaudhari@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(135, 'Mr. Shuva', 'Mandal', 'shuva.mandal@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(136, 'Mr. Shyam', 'Mani', 'shyam.mani@tmf.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(137, 'Mr. Shreyas', 'Desai', 'shreyasdesai@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(138, 'Mr. Shrirang', 'Dhavale', 'sdhavale@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(139, 'Mr. Shaun', 'Thomas', 'sthomas@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(140, 'Mr. Shane', 'Fitzsimons', 'sfitzsimons@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(141, 'Mr. Shankar', 'Rajagopalan', 'rshankar@tataprojects.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(142, 'Mr. Senthil', 'Kumar', 'psenthilkumar@tataprojects.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(143, 'Mr. Shailesh', 'Chandra', 'shailesh.chandra@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(144, 'Mr. Saurav', 'Chakrabarti', 'schakrabarti@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(145, 'Mr. Sayantan', 'Roy', 'sayantanroy@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(146, 'Mr. Saurabh', 'Agrawal', 'saurabh.agrawal@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(147, 'Mr. Sarthak', 'Satpathy', 'sksatpathy@tatasponge.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(148, 'Mr. Satish', 'Borwankar', 'sbborwankar@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(149, 'Mr. Santosh', 'Singh', 'santosh.s.singh@tatatechnologies.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(150, 'Mr. Saroj', 'Kumar Banerjee', 'saroj.banerjee@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(151, 'Mr. Sanjiv', 'Sarin', 'sanjiv.sarin@tatacoffee.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(152, 'Mr. Santosh', 'Kumar Vuppala', 'santoshkv@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(153, 'Mr. Sanjiv', 'Paul', 'sanjivpaul@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(154, 'Mr. Sanjeev', 'Bhalwal', 'sanjeev.bhalwal@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(155, 'Mr. Sanjeev', 'Singh', 'sanjeevsingh@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(156, 'Mr. Sanjay', 'Sinha', 'sanjay.sinha@tacohendrickson.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(157, 'Mr. Sanjay', 'Ubale', 'subale@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(158, 'Mr. Sanjay', 'Rastogi', 'sanjay.rastogi@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(159, 'Mr. Sanjay', 'Razdan', 'sanjay.razdan@tatainternational.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(160, 'Mr. Sanjay', 'Rajasekaran', 'srajasekaran@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(161, 'Mr. Sanjay', 'Banga', 'sanjay.banga@tatapower-ddl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(162, 'Mr. Sanjay', 'Daflapurkar', 'sanjay.daflapurkar@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(163, 'Mr. Sanjay', 'Pattnaik', 'sanjay.pattnaik@tatasponge.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(164, 'Mr. Sandeep', 'Kumar', 'sandeepkumar@tatametaliks.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(165, 'Mr. Sandip', 'Mahajan', 'smahajan@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(166, 'Mr. Sandeep', 'Choudhury', 'sandeep.choudhury@tatametaliks.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(167, 'Mr. Samrat', 'Gupta', 'samrat.gupta@tmf.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(168, 'Mr. Samir', 'Palsule', 'samir.palsule@tatacoffee.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(169, 'Mr. Sampath', 'Kumar Morri', 'skmorri@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(170, 'Mr. Sakti', 'Sankar Bandopadhyay', 'ss.bandopadhyay@tatametaliks.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(171, 'Mr. Sabharatnam', 'Narayanan', 'narayanans@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(172, 'Mr. Sajiv', 'Madhavan', 'sajiv@tataelxsi.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(173, 'Mr. S.', 'Ravi Kant', 'ravi@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(174, 'Mr. S', 'R Mukherjee', 'srmukherjee@tamlindia.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(175, 'Mr. S.', 'Nagarajan', 'snagarajan@meta-helix.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(176, 'Mr. S', 'Hariharasubramanian', 'harisubu@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(177, 'Mr. S', 'Padmanabhan', 'spadmanabhan@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(178, 'Mr. Rohit', 'Saroj', 'rohit.saroj@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(179, 'Mr. Rupesh', 'Kumar Sinha', 'rupeshks@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(180, 'Mr. Rishi', 'Srivastava', 'rishi.srivastava@tataaia.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(181, 'Mr. Ravinder', 'Guleria', 'ravinder.guleria@tacohendrickson.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(182, 'Mr. Rejil', 'Kumar K', 'rejilkumar@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(183, 'Mr. Ravi', 'Chidambar', 'ravi.chidambar@tatatoyo.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(184, 'Mr. Ravi', 'Gupta', 'ravi.gupta@tatagreenbattery.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(185, 'Mr. Ravi', 'Kujur', 'ravi.kujur@tatametaliks.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(186, 'Mr. Rakesh', 'Babu', 'rakesh.babu@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(187, 'Mr. Ratul', 'Neogi', 'ratul.neogi@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(188, 'Mr. Rajkumar', 'S D', 'rajkumar.sd@tatainternational.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(189, 'Mr. Rajiv', 'Mangal', 'rajiv.mangal@tatasteelthailand.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(190, 'Mr. Rajiv', 'Sabharwal', 'rajiv.sabharwal@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(191, 'Mr. Rajesh', 'Roshan', 'rajesh.roshan@tatatinplate.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(192, 'Mr. Rajesh', 'Santlani', 'rajesh.santlani@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(193, 'Mr. Rajesh', 'Khanna', 'rajesh.khanna@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(194, 'Mr. Rajesh', 'Kumar Mahapatra', 'rajeshmahapatra@tatasponge.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(195, 'Mr. Rajesh', 'Deshpande', 'rajesh.deshpande@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(196, 'Mr. Rajendra', 'Petkar', 'rajendra.petkar@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(197, 'Mr. Rajesh', 'Bhatt', 'rbhatt1@jaguarlandrover.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(198, 'Mr. Raj', 'Kumar Shukla', 'rajkumar.shukla@tatapowersolar.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(199, 'Mr. Rajamani', 'Kalpathy Subramanian', 'kalpathy.rajamani@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(200, 'Mr. Rajat', 'Madhur', 'rajatsahay@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(201, 'Mr. Raj', 'Borulkar', 'raj.borulkar@tatatel.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(202, 'Mr. Rahul', 'Rao', 'rahulrao@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(203, 'Mr. R', 'T Wasan', 'rtw@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(204, 'Mr. Rahul', 'Bajaj', 'rahul.bajaj@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(205, 'Mr. R', 'Gopinathan', 'r.gopinathan@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(206, 'Mr. R', 'Mukundan', 'rmukundan@tatachemicals.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(207, 'Mr. R', 'N Murthy', 'murthy@tatatinplate.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(208, 'Mr. Purnoor', 'Sodhi', 'purnoor@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(209, 'Mr. Puneet', 'Chhatwal', 'puneet.chhatwal@tajhotels.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(210, 'Mr. Praveen', 'Shrivastava', 'praveens@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(211, 'Mr. Praveer', 'Sinha', 'praveer.sinha@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(212, 'Mr. Priyadarshan', 'Kshirsagar', 'priyadarshan@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(213, 'Mr. Pravas', 'Kumar Mohapatra', 'pkmohapatra@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(214, 'Mr. Praveen', 'Kadle', 'pkadle@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(215, 'Mr. Prathit', 'Bhobe', 'pbhobe@tataamc.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(216, 'Mr. Prashant', 'Tiwari', 'prashant.tiwari@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(217, 'Mr. Pratap', 'Ramdas', 'pratap.ramdas@tgbl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(218, 'Mr. Prashant', 'Kumar', 'prashant.kumar5@tatacommunications.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(219, 'Mr. Prashant', 'Mahindrakar', 'prashant.mahindrakar@autostampings.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(220, 'Mr. Prasad', 'Kulkarni', 'prasadkulkarni@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(221, 'Mr. Prasanna', 'Kumar Sahu', 'pksahu@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(222, 'Mr. Pradipta', 'Bagchi', 'pradipta.bagchi@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(223, 'Mr. Pradip', 'Nath', 'pradip.nath@nelco.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(224, 'Mr. Pradip', 'Roy', 'pradiproy@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(225, 'Mr. Pracheta', 'Nagar', 'pracheta.nagar@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(226, 'Mr. Pradeep', 'Bakshi', 'pbakshi@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(227, 'Mr. Peter', 'Dsouza', 'peter.dsouza@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(228, 'Mr. Piush', 'Demapure', 'piush.demapure@tatatechnologies.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(229, 'Mr. Prabhakar', 'Ghatage', 'pmghatage@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(230, 'Mr. Pankaj', 'Kumar', 'pkumar@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(231, 'Mr. Pankaj', 'Puri', 'pankaj.puri@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(232, 'Mr. Peeyush', 'Gupta', 'peeyush@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(233, 'Mr. P', 'B Balaji', 'pb.balaji@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(234, 'Mr. P.', 'Venkatesalu', 'p.venkatesalu@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(235, 'Mr. Niranjan', 'Rout', 'niranjan.rout@tatabluescopesteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(236, 'Mr. Nitin', 'Choudhari', 'nchoudhari@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(237, 'Mr. Neeraj', 'Sonker', 'neeraj.sonker@tatacommunications.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(238, 'Mr. Neelesh', 'Tungar', 'neelesh.tungar@tatapowersed.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(239, 'Mr. Neeraj', 'Kant', 'kneeraj@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(240, 'Mr. Navin', 'Goyal', 'ngoyal@tatachemicals.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(241, 'Mr. Neelesh', 'Garg', 'neelesh.garg@tataaig.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(242, 'Mr. Nanda', 'Rackanchath', 'rnanda@tatachemicals.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(243, 'Mr. Nagabhushan', 'Mysore', 'mnagabhushan@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(244, 'Mr. Naman', 'Gupta', 'ngupta@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(245, 'Mr. N', 'Ganapathy Subramaniam', 'ng.subramaniam@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(246, 'Mr. N', 'K Sharan', 'nksharan@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(247, 'Mr. N', 'Vaideeswaran', 'vaideeshwaran@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(248, 'Mr. Muralidharan', 'H V', 'muralidharan@tataelxsi.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(249, 'Mr. N', 'E Sridhar', 'sridharne@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(250, 'Mr. MURALI', 'TR', 'murali.tr@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(251, 'Mr. Milind', 'Shahane', 'mshahane@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(252, 'Mr. Mohammad', 'Danish Eqbal', 'danish.eqbal@tataaia.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(253, 'Mr. Mayank', 'Pareek', 'mayank.pareek@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(254, 'Mr. Mayukh', 'Maiti', 'mayukh.maiti@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(255, 'Mr. Manish', 'Kainth', 'manish.kainth@tgbl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(256, 'Mr. Mark', 'Howden', 'mhowden@jaguarlandrover.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(257, 'Mr. Manish', 'Chourasia', 'manish.chourasia@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(258, 'Mr. Mahesh', 'Salunke', 'tbexgaccounts@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(259, 'Mr. Manas', 'Deep', 'manasdeep@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(260, 'Mr. Maneesh', 'Krishnamurthy', 'maneeshk@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(261, 'Mr. Maarajan', 'M', 'maarajan@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(262, 'Mr. Madhukar', 'Dev', 'mdev@tataelxsi.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(263, 'Mr. M C', 'Thomas', 'mc.thomas@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(264, 'Mr. L.', 'Krishna Kumar', 'l.krishnakumar@tgbl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(265, 'Mr. Kunjvihari', 'Jandhyala', 'kunjviharijandhyala@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(266, 'Mr. Kusal', 'Roy', 'kusal.roy@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(267, 'Mr. Kishore', 'Dalal', 'kishore.dalal@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(268, 'Mr. Koushal', 'Sinha', 'ksinha@tatachemicals.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(269, 'Mr. Koushik', 'Chatterjee', 'kchatterjee@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(270, 'Mr. Kiran', 'Joshi', 'kajoshi@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(271, 'Mr. Keith', 'Steel', 'ksteel@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(272, 'Mr. K.', 'Ananth Krishnan', 'ananth.krishnan@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(273, 'Mr. K.V', 'Rao', 'kvrao@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(274, 'Mr. Kalyan', 'Banerjee', 'kalyan.banerjee@tatametaliks.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(275, 'Mr. K', 'Srinivasan', 'ks.srinivasan@tataglobalbeverages.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(276, 'Mr. K', 'Venkataramanan', 'venkataramanan.k@tatacoffee.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(277, 'Mr. Jupudi', 'Venkata Narasimha Rao', 'jvn.rao@tacohendrickson.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(278, 'Mr. Joseph', 'Sunil Nallapalli', 'josephsunil.s@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(279, 'Mr. Joydip', 'Roy', 'joydip.roy@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(280, 'Mr. Jayshiel', 'K', 'jayshiel@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(281, 'Mr. Jitendra', 'Jadhwani', 'j.jadhwani@tmf.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(282, 'Mr. Jamshed', 'Daboo', 'jamshed.daboo@trenthyper-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(283, 'Mr. Jayakrishnan', 'Nair', 'jayakrishnan.nair@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(284, 'Mr. James', 'Zhan', 'jhzhan@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(285, 'Mr. Hrishikesh', 'Govindankutty', 'hrishikesh.govindankutty@tatainternational.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(286, 'Mr. Jaldeep', 'Virani', 'jaldeepvirani@lalvol.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(287, 'Mr. Harish', 'Bhat', 'harishbhat@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(288, 'Mr. Harit', 'Nagpal', 'harit.nagpal@tatasky.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(289, 'Mr. Himansu', 'Sarangi', 'h.sarangi@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(290, 'Mr. Gugha', 'Prasad K', 'gughap@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(291, 'Mr. Gururaja', 'K V', 'gururajakv@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(292, 'Mr. Girish', 'Wagh', 'girish.wagh@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(293, 'Mr. Gautam', 'Gondil', 'ggondil@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(294, 'Mr. Geetprasad', 'Kagalawadi', 'geetprasad.kagalawadi@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(295, 'Mr. Ganesh', 'Chandan', 'ganeshchandan@tataprojects.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(296, 'Mr. Ganesh', 'Raghavan', 'ganesh.raghavan@tal.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(297, 'Mr. Ernst', 'Hoogenes', 'ernst.hoogenes@tatasteeleurope.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(298, 'Mr. Frank', 'Li', 'lifuran@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(299, 'Mr. Dwaipayan', 'Guha', 'dwaipayanguha@tataprojects.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(300, 'Mr. Dipesh', 'Sutar', 'dsutar@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(301, 'Mr. DK', 'Nanda', 'dknanda@tmilltd.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(302, 'Mr. Dharnish', 'Shetty', 'dgshetty@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(303, 'Mr. Dilip', 'Sharma', 'dksharma@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(304, 'Mr. Dinesh', 'Shastri', 'dinesh@tatanykshipping.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(305, 'Mr. Devendra', 'Gangras', 'devendra.gangras@nelco.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(306, 'Mr. Devi', 'Panthala', 'deviprasad@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(307, 'Mr. Devraj', 'Chattaraj', 'dchattaraj@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(308, 'Mr. Deepak', 'Deshpande', 'ddeshpande@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(309, 'Mr. Devang', 'Parikh', 'devang.parikh@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(310, 'Mr. Deep', 'Seth', 'deep.seth@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(311, 'Mr. Deepak', 'Ahuja', 'deepak.ahuja@tacogroup.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(312, 'Mr. Debdoot', 'Mohanty', 'debdoot.mohanty@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(313, 'Mr. Chetan', 'Chawla', 'chetan.chawla@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(314, 'Mr. Chinmoy', 'Roy', 'chinmoyroy@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(315, 'Mr. C.K', 'Venkataraman', 'venkatckv@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(316, 'Mr. Chanchal', 'Kumar', 'chanchal.kumar@tatatinplate.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(317, 'Mr. C', 'Panneer Selvam', 'panneerselvamc@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(318, 'Mr. C', 'R Srinivasan', 'srinivasan.cr@tatacommunications.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(319, 'Mr. C', 'Kamatchisundaram', 'ckamatch@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(320, 'Mr. Byagathavalli', 'S Prakash', 'prakashbs@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(321, 'Mr. C', 'G Vidyadhar', 'cgvidyadhar@tataamc.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(322, 'Mr. Bilal', 'Ahmad', 'bahmad@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(323, 'Mr. Bimlendra', 'Jha', 'bimlendra.jha@tatasteeleurope.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(324, 'Mr. Boban', 'Chacko', 'chacko@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(325, 'Mr. Bijaya', 'Sahoo', 'bksahoo@tatasponge.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(326, 'Mr. Bhushan', 'Ekbote', 'bekbote@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(327, 'Mr. Bharat', 'Puranik', 'bharat.puranik@tatacommunications.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(328, 'Mr. Bhaskar', 'Bhat', 'bhaskarb@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(329, 'Mr. Behzad', 'Bhesania', 'behzad.bhesania@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(330, 'Mr. Benjamin', 'Rajkumar', 'benjamin@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(331, 'Mr. Barun', 'Mukherjee', 'barun@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(332, 'Mr. Beebu', 'Parangen', 'beebu@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(333, 'Mr. Banmali', 'Agrawala', 'banmali.agrawala@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(334, 'Mr. Ayan', 'Lahiri', 'ayan.lahiri@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(335, 'Mr. Babu', 'Nethaji G E', 'nethaji@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(336, 'Mr. Avilash', 'Dwivedi', 'avilash.dwivedi@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(337, 'Mr. Aviral', 'Bansal', 'aviral.bansal@tatacommunications.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(338, 'Mr. Atul', 'Ranjan Sahay', 'atul.sahay@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(339, 'Mr. Avijit', 'Bhattacharya', 'avijit.bhattacharya@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(340, 'Mr. Atreya', 'Mukherjee', 'atreya.mukherjee@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(341, 'Mr. Ashwin', 'Shastri', 'ashwin.shastri@tacogroup.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(342, 'Mr. Ashwin', 'Tare', 'ashwin.tare@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(343, 'Mr. Asis', 'Mitra', 'asismitra@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(344, 'Mr. ASHISH', 'SHIRBHATE', 'tbexgit@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(345, 'Mr. Ashok', 'Kumar', 'ashokbalyan@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(346, 'Mr. Ashish', 'Mathur', 'ashish.mathur@tatasteelsez.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(347, 'Mr. Arvind', 'Mahuli', 'arvind.mahuli@rallis.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(348, 'Mr. Ashish', 'Gupta', 'ashish@tmilltd.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(349, 'Mr. Arun', 'Varma', 'varma.arun@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(350, 'Mr. Arvind', 'Goel', 'arvind.goel@tacogroup.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(351, 'Mr. Arpit', 'Jain', 'arpitjain@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(352, 'Mr. Arun', 'Karpe', 'arun.karpe@tatatechnologies.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(353, 'Mr. Aravind', 'Srinivas', 'aravind.srinivas@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(354, 'Mr. Anirban', 'Dasgupta', 'anirban.dasgupta@tatatinplate.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(355, 'Mr. Anuj', 'Dewan', 'anuj.dewan@tacogroup.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(356, 'Mr. Arabinda', 'Guha', 'aguha@tataprojects.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(357, 'Mr. Animesh', 'Roy', 'animesh.roy@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(358, 'Mr. Anirban', 'Chatterjee', 'anirban.chatterjee@trent-tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(359, 'Mr. Anil', 'Menghrajani', 'amenghrajani@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(360, 'Mr. Anil', 'Kaul', 'anil.kaul@tatacapital.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(361, 'Mr. Anil', 'Bhogesara', 'anil.bhogesara@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(362, 'Mr. Anil', 'George', 'anilgeorge@voltas.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(363, 'Mr. Anand', 'Sen', 'asen@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(364, 'Mr. Ananthanarayanan', 'Ramachandran', 'anantha.narayanan@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(365, 'Mr. Ananya', 'Singhal', 'ananyasinghal@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(366, 'Mr. Amulya', 'K Goel', 'amulya.goel@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(367, 'Mr. Amitabh', '-', 'c.amitabh@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(368, 'Mr. Amit', 'Sachdev', 'asachdev@tataiq.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(369, 'Mr. Amit', 'Singh', 'amitks@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(370, 'Mr. Amit', 'Tirkey', 'amitandtcs@gmail.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(371, 'Mr. Amit', 'Khanna', 'amit.khanna@tatasteelthailand.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(372, 'Mr. Amit', 'Nangia', 'amit.nangia@tatatel.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(373, 'Mr. Amit', 'Dalal', 'amitdalal@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(374, 'Mr. Amit', 'Agarwal', 'amit.agarwal1@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(375, 'Mr. Amit', 'Chincholikar', 'amit.chincholikar@tgbl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(376, 'Mr. Allwyn', 'Kingsley M', 'allwyn@titan.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(377, 'Mr. Aman', 'Chodha', 'amanc@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(378, 'Mr. Albert', 'Lewis', 'albert.lewis@tataclassedge.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(379, 'Mr. Alexander', 'Ehmann', 'alexander.ehmann@tata.co.uk', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(380, 'Mr. Ajoy', 'Misra', 'ajoy.misra@tataglobalbeverages.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(381, 'Mr. Ajoy', 'Behari Lall', 'ablall@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(382, 'Mr. Ajoy', 'Jauhar', 'ajoy.jauhar@tajhotels.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(383, 'Mr. Ajay', 'Matale', 'amatale@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(384, 'Mr. Ajay', 'Pratap Singh', 'apsingh@tce.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(385, 'Mr. Ajit', 'Maleyvar', 'ajit.maleyvar@tatapower-ddl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(386, 'Mr. Ajay', 'Bhasin', 'ajay.bhasin@tatacoffee.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(387, 'Mr. Ajay', 'Lotlikar', 'tbexgit_mum@outlook.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(388, 'Mr. Adam', 'Barriball', 'adam.barriball@tata.co.uk', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(389, 'Mr. Aditya', 'Mishra', 'akmishra@tce.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(390, 'Mr. Adrian', 'Terron', 'aterron@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(391, 'Mr. Abhishek', 'Kulkarni', 'adkulkarni@tatapower.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(392, 'Mr. Abraham', 'Stephanos', 'abraham@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(393, 'Mr. Abhishek', 'Chaudhary', 'abhishek.c@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(394, 'Mr. Abhishek', 'Jaiswal', 'ajaiswal@tspdl.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(395, 'Mr. Abhisek', 'Moulik', 'abhisek.moulik@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(396, 'Mr. Aaron', 'Du', 'aarondu@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(397, 'Mr. Abhijit', 'Mitra', 'amitra@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(398, 'Miss. Louisa', 'Porter', 'louisa.porter@tatasteeleurope.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(399, 'Miss. Pamela', 'Koh', 'pamelaksh@natsteel.com.sg', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(400, 'Dr. S', 'Jaishankar', 's.jaishankar@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(401, 'Miss. Anyanya', 'Das', 'anyanya.das@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(402, 'Dr. Ratna', 'Sinha', 'ratna.sinha@tatametaliks.co.in', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(403, 'Dr. P', 'V Ramana Murthy', 'pv.murthy@tajhotels.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00');
INSERT INTO `users_bk` (`user_id`, `first_name`, `last_name`, `email_id`, `i_agree`, `status`, `createdon`, `modifiedon`) VALUES
(404, 'Dr. Pranab', 'Das', 'pranabdas@tatahousing.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(405, 'Dr. Pritpal', 'Singh', 'pritpal@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(406, 'Dr. Mukund', 'Vyas', 'mukund.vyas@tatamotors.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(407, 'Dr. Neelima', 'Tirkey', 'neelima.tirkey@tatasteel.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(408, 'Dr. Joy', 'Deshmukh', 'joy.d@tcs.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(409, 'Dr. Henrik', 'Adam', 'henrik.adam@tatasteeleurope.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(410, 'Dr. David', 'Landsman', 'dlandsman@tata.co.uk', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(411, 'Amit', 'Pashte', 'amit.pashte@shobizexperience.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(412, 'Vinay', 'Jaiswal', 'vinay.jaiswal@shobizexperience.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(413, 'Sam', 'Tobaccowala', 'sam@hobnobspace.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(414, 'Mr. Anil', 'Nandakumar', 'anandakumar@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(415, 'Mr. Swaminathan', 'Gopal', 'swamigopal@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(416, 'Manisha', 'Telkar', 'mtelkar@tata.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(417, 'Radhika', 'Mathur', 'radhikam@hobnobspace.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(418, 'Rukhsar', 'Khan', 'rukhsark@hobnobspace.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(419, 'Sameer', 'Popli', 'sameerp@hobnobspace.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00'),
(420, 'Preview', 'Invitee', 'preview@previewapp.com', 'Agree', 'Active', '2018-11-21 14:35:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_comment`
--

CREATE TABLE `users_comment` (
  `user_comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_post_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `status` enum('Accept','Reject') NOT NULL DEFAULT 'Accept',
  `createdon` datetime NOT NULL,
  `modifiedon` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_comment`
--

INSERT INTO `users_comment` (`user_comment_id`, `user_id`, `user_post_id`, `comments`, `status`, `createdon`, `modifiedon`) VALUES
(1, 3, 3, 'demo\'s test', 'Accept', '2018-11-01 13:05:30', NULL),
(2, 3, 3, 'again test', 'Reject', '2018-11-01 13:05:39', '2018-11-03 13:47:46'),
(3, 2, 3, 'demo', 'Accept', '2018-11-01 14:27:08', NULL),
(4, 2, 6, 'vinay post comment', 'Accept', '2018-11-01 14:27:22', NULL),
(5, 1, 7, 'joy comment', 'Accept', '2018-11-01 14:28:10', '2018-11-03 11:24:42'),
(6, 1, 6, 'joy post', 'Reject', '2018-11-01 14:28:18', '2018-11-03 13:48:06'),
(7, 2, 9, 'demo test', 'Accept', '2018-11-03 12:10:04', NULL),
(8, 2, 4, 'demo', 'Accept', '2018-11-03 12:45:34', NULL),
(9, 2, 1, 're', 'Accept', '2018-11-03 15:40:27', NULL),
(10, 2, 2, 'demo', 'Accept', '2018-11-03 15:49:44', NULL),
(11, 4, 12, 'demo', 'Accept', '2018-11-03 16:35:24', NULL),
(12, 4, 12, 'hello', 'Accept', '2018-11-03 16:35:29', NULL),
(13, 4, 12, 'demo test', 'Accept', '2018-11-03 16:49:50', NULL),
(14, 4, 12, 'test', 'Accept', '2018-11-03 16:50:53', NULL),
(15, 4, 12, 'test', 'Accept', '2018-11-03 16:51:30', NULL),
(16, 2, 16, 'test', 'Accept', '2018-11-05 12:00:55', NULL),
(17, 2, 16, 'again test', 'Accept', '2018-11-05 12:01:08', NULL),
(18, 2, 70, 'demo', 'Accept', '2018-11-09 11:46:44', '2018-11-23 13:42:30'),
(19, 2, 70, 'demo', 'Reject', '2018-11-09 11:48:03', '2018-11-23 13:42:18'),
(20, 8, 75, 'test', 'Accept', '2018-11-19 18:22:00', NULL),
(21, 2, 77, 'test', 'Accept', '2018-11-20 18:28:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_like`
--

CREATE TABLE `users_like` (
  `user_like_id` int(11) NOT NULL,
  `user_like` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_post_id` int(11) NOT NULL,
  `createdon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_like`
--

INSERT INTO `users_like` (`user_like_id`, `user_like`, `user_id`, `user_post_id`, `createdon`) VALUES
(1, 0, 1, 3, '2018-11-01 13:09:16'),
(3, 1, 1, 2, '2018-11-01 14:28:53'),
(4, 0, 1, 1, '2018-11-01 14:32:40'),
(5, 1, 3, 2, '2018-11-06 15:28:10'),
(6, 0, 3, 3, '2018-11-01 13:09:16'),
(7, 0, 3, 1, '2018-11-01 14:32:40'),
(8, 1, 2, 3, '2018-11-01 13:09:17'),
(9, 0, 2, 2, '2018-11-01 14:33:45'),
(10, 1, 2, 1, '2018-11-01 17:25:58'),
(11, 1, 2, 4, '2018-11-01 14:33:49'),
(12, 0, 2, 5, '2018-11-01 13:10:06'),
(13, 1, 2, 6, '2018-11-01 15:52:59'),
(14, 1, 1, 7, '2018-11-01 14:28:03'),
(15, 1, 1, 6, '2018-11-01 14:28:23'),
(16, 1, 2, 8, '2018-11-03 12:09:54'),
(17, 1, 2, 7, '2018-11-01 15:52:56'),
(18, 1, 2, 9, '2018-11-03 12:09:51'),
(19, 1, 4, 12, '2018-11-03 16:35:15'),
(20, 1, 2, 16, '2018-11-05 12:00:47'),
(21, 0, 3, 4, '2018-11-06 15:28:07'),
(22, 0, 2, 71, '2018-11-13 16:47:48'),
(23, 1, 2, 77, '2018-11-20 18:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `users_post`
--

CREATE TABLE `users_post` (
  `user_post_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `caption` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `status` enum('Accept','Reject') NOT NULL DEFAULT 'Accept',
  `createdon` datetime NOT NULL,
  `modifiedon` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_post`
--

INSERT INTO `users_post` (`user_post_id`, `image`, `caption`, `user_id`, `group_id`, `status`, `createdon`, `modifiedon`) VALUES
(1, '', 'Test\'s from joydeep', 3, NULL, 'Accept', '2018-11-01 11:38:49', NULL),
(2, '', 'Test\'t two from joydeep', 1, NULL, 'Accept', '2018-11-01 11:43:25', NULL),
(3, '', 'test\'s three from joydeep', 1, NULL, 'Reject', '2018-11-01 11:46:18', '2018-11-03 11:26:03'),
(4, 'b09Cf82dJM.jpg', 'test from vinay he ndls sfllsdf f lf flsdf lfsdlfkflksd fldfs dlfsldf sdflsdfklwelr w werwe lrwer wer wer werwel r', 2, NULL, 'Accept', '2018-11-01 13:06:22', '2018-11-03 11:25:12'),
(5, '', 'vinay test comment hfdh', 2, NULL, 'Accept', '2018-11-01 13:07:29', NULL),
(6, '', 'demo test', 2, NULL, 'Accept', '2018-11-01 13:11:49', NULL),
(7, '', 'joy post comment', 1, NULL, 'Accept', '2018-11-01 14:27:58', NULL),
(8, '', 'demo', 2, NULL, 'Accept', '2018-11-01 14:53:35', NULL),
(9, '', 'hello', 2, NULL, 'Reject', '2018-11-02 11:23:33', '2018-11-03 11:09:09'),
(10, '', 'demo', 2, NULL, 'Accept', '2018-11-03 14:31:31', NULL),
(11, '', 'demo', 2, NULL, 'Accept', '2018-11-03 14:46:13', NULL),
(12, '', 'demo', 4, NULL, 'Accept', '2018-11-03 16:35:12', NULL),
(13, '', 'test', 2, NULL, 'Accept', '2018-11-05 11:54:36', NULL),
(14, '', 'demo', 2, NULL, 'Accept', '2018-11-05 11:55:17', NULL),
(15, 'WVexaZopTJ.jpg', 'chrysanthemum', 2, NULL, 'Accept', '2018-11-05 11:55:42', NULL),
(16, 'wC3FLqn2Lc.jpg', 'demo', 2, NULL, 'Accept', '2018-11-05 12:00:40', NULL),
(17, '', 'demo', 3, NULL, 'Accept', '2018-11-06 16:31:13', NULL),
(18, '', 'demo1', 3, NULL, 'Accept', '2018-11-06 16:38:02', NULL),
(19, '', 'test', 3, NULL, 'Accept', '2018-11-06 16:38:15', NULL),
(20, 'tusiKP6hwS.jpg', 'test', 3, NULL, 'Accept', '2018-11-06 19:29:49', NULL),
(21, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:30:40', NULL),
(22, 'ipcniBHEbG.jpg', 'dets', 3, NULL, 'Accept', '2018-11-06 19:32:37', NULL),
(23, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:32:49', NULL),
(24, '', 'tr', 3, NULL, 'Accept', '2018-11-06 19:32:54', NULL),
(25, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:33:36', NULL),
(26, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:34:51', NULL),
(27, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:35:43', NULL),
(28, '', 'demo', 3, NULL, 'Accept', '2018-11-06 19:36:57', NULL),
(29, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:37:34', NULL),
(30, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:37:54', NULL),
(31, 'BfHeEL8Poz.jpg', 'demo', 3, NULL, 'Accept', '2018-11-06 19:40:13', NULL),
(32, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:40:18', NULL),
(33, '', 'demo', 3, NULL, 'Accept', '2018-11-06 19:40:30', NULL),
(34, '', 'demo', 3, NULL, 'Accept', '2018-11-06 19:50:28', NULL),
(35, '', 'demo', 3, NULL, 'Accept', '2018-11-06 19:52:55', NULL),
(36, '', 'demo', 3, NULL, 'Accept', '2018-11-06 19:53:03', NULL),
(37, '', 'test', 3, NULL, 'Accept', '2018-11-06 19:53:09', NULL),
(38, '', 'tews', 3, NULL, 'Accept', '2018-11-06 19:53:14', NULL),
(39, '', 'test test', 3, NULL, 'Accept', '2018-11-06 19:53:24', NULL),
(40, '', 'demo', 2, NULL, 'Accept', '2018-11-09 10:50:06', NULL),
(41, '', 'test', 2, NULL, 'Accept', '2018-11-09 10:50:19', NULL),
(42, '', 'test', 2, NULL, 'Accept', '2018-11-09 10:50:59', NULL),
(43, '', 'tes', 2, NULL, 'Accept', '2018-11-09 10:51:19', NULL),
(44, '', 'g', 2, NULL, 'Accept', '2018-11-09 10:51:52', NULL),
(45, '', 'a', 2, NULL, 'Accept', '2018-11-09 10:52:05', NULL),
(46, '', 's', 2, NULL, 'Accept', '2018-11-09 10:54:33', NULL),
(47, '', 'd', 2, NULL, 'Accept', '2018-11-09 11:05:50', NULL),
(48, '', 'demo', 2, NULL, 'Accept', '2018-11-09 11:06:00', NULL),
(49, '', 'demo', 2, NULL, 'Accept', '2018-11-09 11:07:04', NULL),
(50, '', 'demo', 2, NULL, 'Accept', '2018-11-09 11:08:08', NULL),
(51, '', 'demo\'s', 2, NULL, 'Accept', '2018-11-09 11:09:50', NULL),
(52, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:10:14', NULL),
(53, '', 'demo;s test', 2, NULL, 'Accept', '2018-11-09 11:11:44', NULL),
(54, '', 'g', 2, NULL, 'Accept', '2018-11-09 11:11:57', NULL),
(55, '', 'demo\'s', 2, NULL, 'Accept', '2018-11-09 11:14:24', NULL),
(56, '', 'fe', 2, NULL, 'Accept', '2018-11-09 11:14:29', NULL),
(57, 'aZWgyvCnW2.jpg', 'test\'s', 2, NULL, 'Accept', '2018-11-09 11:28:14', NULL),
(58, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:36', NULL),
(59, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:37', NULL),
(60, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:38', NULL),
(61, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:39', NULL),
(62, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:40', NULL),
(63, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:41', NULL),
(64, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:42', NULL),
(65, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:43', NULL),
(66, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:44', NULL),
(67, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:45', NULL),
(68, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:46', NULL),
(69, '', 'test', 2, NULL, 'Accept', '2018-11-09 11:28:47', NULL),
(70, 'amFNsvWtfs.jpg', 'de\'ms', 2, 3, 'Reject', '2018-11-09 11:29:47', '2018-11-23 18:10:45'),
(71, '8bvDcARJsw.jpg', 'test', 2, NULL, 'Accept', '2018-11-13 16:46:30', NULL),
(72, '', 'demo', 3, NULL, 'Accept', '2018-11-13 17:09:34', NULL),
(73, '', 'test', 6, NULL, 'Accept', '2018-11-15 18:03:24', NULL),
(74, '', 'demo', 8, NULL, 'Accept', '2018-11-19 18:00:36', NULL),
(75, '', 'test\'s', 8, 5, 'Reject', '2018-11-19 18:21:50', '2018-11-23 13:37:14'),
(76, 'fVKnhSs16k.png', 'test\'s', 2, 3, 'Accept', '2018-11-20 16:17:58', NULL),
(77, 'jrSBuS3kes.jpg', 'test', 2, 4, 'Reject', '2018-11-20 18:28:17', '2018-11-23 13:37:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_bk`
--
ALTER TABLE `users_bk`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_comment`
--
ALTER TABLE `users_comment`
  ADD PRIMARY KEY (`user_comment_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `users_like`
--
ALTER TABLE `users_like`
  ADD PRIMARY KEY (`user_like_id`);

--
-- Indexes for table `users_post`
--
ALTER TABLE `users_post`
  ADD PRIMARY KEY (`user_post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_bk`
--
ALTER TABLE `users_bk`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `users_comment`
--
ALTER TABLE `users_comment`
  MODIFY `user_comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_like`
--
ALTER TABLE `users_like`
  MODIFY `user_like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users_post`
--
ALTER TABLE `users_post`
  MODIFY `user_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_comment`
--
ALTER TABLE `users_comment`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
