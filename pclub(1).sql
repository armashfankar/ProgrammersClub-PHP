-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2014 at 12:13 AM
-- Server version: 5.5.35
-- PHP Version: 5.4.6-1ubuntu1.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pclub`
--
CREATE DATABASE IF NOT EXISTS `pclub` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pclub`;
-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `questionid` int(10) NOT NULL,
  `answerid` int(10) NOT NULL AUTO_INCREMENT,
  `answers` varchar(800) NOT NULL,
  `username` varchar(20) NOT NULL,
  `likess` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answerid`),
  KEY `questionnid` (`questionid`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `commanswer`
--

CREATE TABLE IF NOT EXISTS `commanswer` (
  `commentsid` int(10) NOT NULL AUTO_INCREMENT,
  `answerid` int(10) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`commentsid`),
  KEY `answerid` (`answerid`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `questionid` int(10) NOT NULL,
  `commentid` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(400) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`commentid`),
  KEY `username` (`username`),
  KEY `questionid` (`questionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `questionid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `username` varchar(10) NOT NULL,
  `likes` int(10) NOT NULL DEFAULT '0',
  `views` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`questionid`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(25) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `viewed`
--

CREATE TABLE IF NOT EXISTS `viewed` (
  `viewid` int(10) NOT NULL AUTO_INCREMENT,
  `questionid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`viewid`),
  KEY `questionid` (`questionid`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `voanswer`
--

CREATE TABLE IF NOT EXISTS `voanswer` (
  `answerid` int(10) NOT NULL,
  `votid` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`votid`),
  KEY `questionid` (`answerid`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `questionid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `voteid` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`voteid`),
  KEY `questionid` (`questionid`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`questionid`) REFERENCES `question` (`questionid`),
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `commanswer`
--
ALTER TABLE `commanswer`
  ADD CONSTRAINT `commanswer_ibfk_1` FOREIGN KEY (`answerid`) REFERENCES `answer` (`answerid`),
  ADD CONSTRAINT `commanswer_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`questionid`) REFERENCES `question` (`questionid`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `viewed`
--
ALTER TABLE `viewed`
  ADD CONSTRAINT `viewed_ibfk_1` FOREIGN KEY (`questionid`) REFERENCES `question` (`questionid`),
  ADD CONSTRAINT `viewed_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `voanswer`
--
ALTER TABLE `voanswer`
  ADD CONSTRAINT `voanswer_ibfk_1` FOREIGN KEY (`answerid`) REFERENCES `answer` (`answerid`),
  ADD CONSTRAINT `voanswer_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`questionid`) REFERENCES `question` (`questionid`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
