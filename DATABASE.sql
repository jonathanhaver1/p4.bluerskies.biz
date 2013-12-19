-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2013 at 09:14 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bluerski_comm`
--
CREATE DATABASE IF NOT EXISTS `bluerski_comm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bluerski_comm`;

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE IF NOT EXISTS `addressbook` (
  `addressbook_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pref_comm` int(11) NOT NULL,
  `sip` varchar(255) NOT NULL,
  `emailWork` varchar(255) NOT NULL,
  `mobilePhoneNumber` int(11) NOT NULL,
  `mobilePhoneCarrier` varchar(4) NOT NULL,
  `phoneNumberWork` int(11) NOT NULL,
  `phoneNumberHome` int(11) NOT NULL,
  `emailHome` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `physicalAddress` varchar(255) NOT NULL,
  `interests` text NOT NULL,
  `comments` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`addressbook_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`addressbook_id`, `first_name`, `last_name`, `pref_comm`, `sip`, `emailWork`, `mobilePhoneNumber`, `mobilePhoneCarrier`, `phoneNumberWork`, `phoneNumberHome`, `emailHome`, `skype`, `physicalAddress`, `interests`, `comments`, `user_id`, `created`, `modified`) VALUES
(4, 'Andrew', 'Example', 5, 'andrew@example.com', 'hello@hello.com', 234324234, 'US-T', 2035252555, 2035252555, 'homeExample@example.com', 'test', 'Pine Street 10A, Woodville, NO 89765', 'hello', 'hello', '0', 1386340543, 1386340543);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `todo_id` int(11) NOT NULL AUTO_INCREMENT,
  `addressbook_id` int(11) NOT NULL COMMENT 'FK',
  `topic` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `done` int(1) NOT NULL,
  PRIMARY KEY (`todo_id`),
  KEY `user_id` (`user_id`),
  KEY `addressbook_id` (`addressbook_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todo_id`, `addressbook_id`, `topic`, `priority`, `created`, `modified`, `user_id`, `done`) VALUES
(7, 4, 'efsef', 2, 1386341691, 1386341691, 0, 1),
(8, 4, 'to do 2', 3, 1386347091, 1386347091, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `first_name` int(11) NOT NULL,
  `last_name` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `created`, `modified`, `token`) VALUES
(0, 0, 0, 'hello', '6326b67721ebbfde1b6c8060c5dcce0be695fb40', 1385989224, 1385989224, '80b55a002ececeabe051a91bd8b2f53f2bfd3f81');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `todo_ibfk_1` FOREIGN KEY (`addressbook_id`) REFERENCES `addressbook` (`addressbook_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
