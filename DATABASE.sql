-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2013 at 03:56 AM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bluerski_comm`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE IF NOT EXISTS `addressbook` (
  `addressbook_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT 'FK',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pref_comm` int(11) NOT NULL,
  `sip` varchar(255) NOT NULL,
  `emailHome` varchar(255) NOT NULL,
  `emailWork` varchar(255) NOT NULL,
  `phoneNumberHome` int(11) NOT NULL,
  `phoneNumberWork` int(11) NOT NULL,
  `mobilePhoneNumber` int(11) NOT NULL,
  `mobilePhoneCarrier` varchar(5) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `physicalAddress` varchar(255) NOT NULL,
  `interests` text NOT NULL,
  `comments` text NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`addressbook_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`addressbook_id`, `user_id`, `first_name`, `last_name`, `pref_comm`, `sip`, `emailHome`, `emailWork`, `phoneNumberHome`, `phoneNumberWork`, `mobilePhoneNumber`, `mobilePhoneCarrier`, `skype`, `physicalAddress`, `interests`, `comments`, `created`, `modified`) VALUES
(7, 5, 'Jane', 'Doe', 1, 'jane@doe.com', 'jane@homedoe.com', 'jane@workdoe.com', 2147483647, 2147483647, 2147483647, 'US-Vi', 'jane', '5 Any Street, Any Town, NO 37387', 'various interests', 'no comments', 1387528421, 1387528421);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todo_id`, `addressbook_id`, `topic`, `priority`, `created`, `modified`, `user_id`, `done`) VALUES
(12, 7, 'talk to Jane', 5, 1387528442, 1387528442, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `created`, `modified`, `token`) VALUES
(4, 'John', 'Doe', 'john@doe.com', '1ed351ed21dee9d717afff2065318d6cacecfb7b', 1387461776, 1387461776, 'dccad849ee81cf770828a833dee8e1e58777278d'),
(5, 'John', 'Cloud', 'john@cloud.com', '96f45ba15e1b7f8ce3ae27b964584ca6c56ff8b8', 1387467194, 1387467194, 'cbc05735c6d64e4404819fe8dc6562bf573205a3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addressbook`
--
ALTER TABLE `addressbook`
  ADD CONSTRAINT `addressbook_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `todo_ibfk_1` FOREIGN KEY (`addressbook_id`) REFERENCES `addressbook` (`addressbook_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         