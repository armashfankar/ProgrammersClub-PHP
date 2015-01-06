-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2014 at 04:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`questionid`, `answerid`, `answers`, `username`, `likess`) VALUES
(59, 10, 'techmax is a good publication', 'irshad', 2),
(60, 11, 'you should first try to clear practical exam kt', 'irshad', 1),
(61, 12, 'you should join classes', 'ravish', 0),
(62, 13, 'you should pclub hard', 'muzammil', 0),
(59, 14, 'you should do assignment first', 'muzammil', 0),
(62, 15, 'forget it', 'irshad', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `commanswer`
--

INSERT INTO `commanswer` (`commentsid`, `answerid`, `comments`, `username`) VALUES
(1, 11, 'thankyou', 'muzammil'),
(2, 10, 'i already knows it', 'ravish');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`questionid`, `commentid`, `comment`, `username`) VALUES
(60, 1, 'plz', 'muzammil');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionid`, `title`, `description`, `username`, `likes`, `views`) VALUES
(59, 'how to pclub dwm', 'please suggest me how to pclub dwm', 'ravish', 0, 2),
(60, 'how to clear mpmc', 'suggest me how to clear mpmc ', 'muzammil', 0, 2),
(61, 'how to clear m4', 'i have kt in both m3 and m4 how to clear it', 'irshad', 0, 3),
(62, 'how can i top in semester', 'i want to top in semester', 'irfan', 2, 3),
(63, 'how i use multiplayer feature for android game please tell me that i will appreciate', 'plz help me out', 'ravish', 0, 0),
(64, 'concept of etl', 'i want to know concept of etl', 'irfan', 0, 0),
(77, 'how to clear cg', 'i want to clear cg', 'irshad', 0, 0),
(90, 'how can i speak good english', 'i want to speaks good english', 'irshad', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `College` varchar(20) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `College`, `Type`, `Password`) VALUES
(17, 'ravish', 'kazi', 'student', 'adil'),
(18, 'irshad', 'aiktc', 'student', 'lal'),
(19, 'muzammil', 'aiktc', 'student', '12345'),
(20, 'irfan', 'aiktc', 'student', 'kapoor');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `viewed`
--

INSERT INTO `viewed` (`viewid`, `questionid`, `username`) VALUES
(1, 59, 'irshad'),
(5, 59, 'muzammil'),
(2, 60, 'irshad'),
(8, 60, 'ravish'),
(6, 61, 'muzammil'),
(3, 61, 'ravish'),
(10, 62, 'irshad'),
(4, 62, 'muzammil'),
(7, 62, 'ravish');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `voanswer`
--

INSERT INTO `voanswer` (`answerid`, `votid`, `type`, `username`) VALUES
(10, 1, 'voted', 'irshad'),
(11, 2, 'voted', 'irshad'),
(10, 3, 'voted', 'muzammil'),
(15, 4, 'voted', 'irshad');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`questionid`, `username`, `type`, `voteid`) VALUES
(62, 'muzammil', 'voted', 1),
(62, 'ravish', 'voted', 2);

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
