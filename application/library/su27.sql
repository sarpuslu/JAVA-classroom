-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- Host: sql.njit.edu
-- Generation Time: Jul 22, 2014 at 01:04 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `su27`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `questionview`
--
CREATE TABLE IF NOT EXISTS `questionview` (
`tid` int(11)
,`username` varchar(45)
,`qid` int(11)
,`qname` varchar(45)
,`subject_Code` int(11)
,`subject_name` varchar(45)
,`wcode` int(11)
,`wname` varchar(35)
,`marks` decimal(10,2)
,`a` varchar(35)
,`b` varchar(35)
,`c` varchar(35)
,`d` varchar(35)
,`answer` varchar(35)
);
-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE IF NOT EXISTS `question_master` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `qname` varchar(45) DEFAULT NULL,
  `subject_code` int(11) DEFAULT NULL,
  `wcode` int(11) DEFAULT NULL,
  `a` varchar(35) DEFAULT NULL,
  `b` varchar(35) DEFAULT NULL,
  `c` varchar(35) DEFAULT NULL,
  `d` varchar(35) DEFAULT NULL,
  `answer` varchar(35) DEFAULT NULL,
  `tid` int(11) NOT NULL,
  PRIMARY KEY (`qid`),
  KEY `subject_code` (`subject_code`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `question_master`
--

INSERT INTO `question_master` (`qid`, `qname`, `subject_code`, `wcode`, `a`, `b`, `c`, `d`, `answer`, `tid`) VALUES
(1, 'What PHP stands for?\r\n', 3, 1, 'Hypertext Preprocessor', 'Pre Hypertext Processor', 'Pre Hyper Processor', 'Pre Hypertext Process', 'd', 4),
(2, 'C is structured query Language', 1, 2, 'True', 'False', '', '', 'a', 4),
(3, 'Variable defined in c?', 1, 1, 'int c', 'const int c', 'int c;', 'var c;', 'c', 4),
(4, 'Under what circumstance is it impossible to a', 3, 1, 'When the parameter is Boolean', 'When the function is being declared', 'When the parameter is being declare', 'When the function contains only one', 'c', 4),
(5, 'Variables always start with a ........ in PHP', 3, 1, 'Pond-sign', 'Yen-sign', 'Dollar-sign', ' Euro-sign', 'c', 4),
(6, 'PHP is an open source software\r\n', 3, 2, 'True', 'False', '', '', 'a', 4),
(7, 'Which of the following is not valid PHP code?', 3, 1, '$_10', '${“MyVar”}', '&$something', '$10_somethings', 'd', 4),
(12, 'What function can you use to create your own ', 3, 1, 'wrapper_register', 'stream_wrapper', 'stream_wrapper_register', ' stream_wrapper_reg', 'c', 4),
(9, 'How does the identity operator === compare tw', 3, 1, 'It converts them to a common compat', 'It returns True only if they are bo', 'If the two values are strings, it p', ' It bases its comparison on the C s', 'a', 4),
(10, 'PHP runs on different platforms (Windows, Lin', 3, 2, 'True', 'False', '', '', 'a', 4),
(11, 'Which of the following tags is not a valid wa', 3, 1, '<%%>', '<??>', '<?=?>', '<! !>', 'b', 4),
(15, 'Java is a object oriented language?', 4, 2, 'True', 'False', '', '', 'a', 4),
(14, 'How do you compile a java code?', 4, 1, 'javac filename.java', 'java filename', 'java filename.java', 'compile filename.java', 'a', 4);

-- --------------------------------------------------------

--
-- Table structure for table `question_weight`
--

CREATE TABLE IF NOT EXISTS `question_weight` (
  `wcode` int(11) NOT NULL AUTO_INCREMENT,
  `wname` varchar(35) DEFAULT NULL,
  `marks` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`wcode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `question_weight`
--

INSERT INTO `question_weight` (`wcode`, `wname`, `marks`) VALUES
(1, 'Multiple Choise', 10.00),
(2, 'True/False', 5.00);

-- --------------------------------------------------------

--
-- Stand-in structure for view `result`
--
CREATE TABLE IF NOT EXISTS `result` (
`testid` int(11)
,`testdate` date
,`qid` int(11)
,`qname` varchar(45)
,`sid` int(11)
,`student_name` varchar(45)
,`subject_code` int(11)
,`subject_name` varchar(45)
,`response` varchar(35)
,`answer` varchar(35)
,`truefalse` varchar(2000)
,`marks` decimal(10,2)
,`result` char(1)
);
-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

CREATE TABLE IF NOT EXISTS `student_test` (
  `testid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `ans` varchar(10) DEFAULT NULL,
  KEY `testid` (`testid`),
  KEY `sid` (`sid`),
  KEY `qid` (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_test`
--

INSERT INTO `student_test` (`testid`, `sid`, `qid`, `ans`) VALUES
(7, 5, 14, 'a'),
(7, 5, 14, 'a'),
(7, 5, 14, 'a'),
(8, 5, 15, 'a'),
(8, 5, 14, 'b'),
(8, 5, 15, 'b'),
(8, 5, 14, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_code` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`subject_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `subject_name`) VALUES
(1, 'c'),
(2, 'c++'),
(3, 'php'),
(4, 'java'),
(5, 'html');

-- --------------------------------------------------------

--
-- Stand-in structure for view `testview`
--
CREATE TABLE IF NOT EXISTS `testview` (
`testid` int(11)
,`testdate` date
,`status` char(1)
,`result` char(1)
,`title` varchar(35)
,`tid` int(11)
,`username` varchar(45)
,`qid` int(11)
,`qname` varchar(45)
,`subject_code` int(11)
,`subject_name` varchar(45)
,`wcode` int(11)
,`wname` varchar(35)
,`marks` decimal(10,2)
,`a` varchar(35)
,`b` varchar(35)
,`c` varchar(35)
,`d` varchar(35)
,`answer` varchar(35)
);
-- --------------------------------------------------------

--
-- Table structure for table `test_details`
--

CREATE TABLE IF NOT EXISTS `test_details` (
  `testid` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  KEY `testid` (`testid`),
  KEY `qid` (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_details`
--

INSERT INTO `test_details` (`testid`, `qid`) VALUES
(1, 3),
(1, 4),
(2, 1),
(7, 14),
(8, 15),
(8, 14);

-- --------------------------------------------------------

--
-- Table structure for table `test_master`
--

CREATE TABLE IF NOT EXISTS `test_master` (
  `testid` int(11) NOT NULL AUTO_INCREMENT,
  `testdate` date DEFAULT NULL,
  `title` varchar(35) NOT NULL,
  `tid` int(11) DEFAULT NULL,
  `subject_code` int(11) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'Y',
  `result` char(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`testid`),
  KEY `subject_code` (`subject_code`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `test_master`
--

INSERT INTO `test_master` (`testid`, `testdate`, `title`, `tid`, `subject_code`, `status`, `result`) VALUES
(8, '0000-00-00', 'Test', 4, 4, 'Y', 'Y'),
(7, '2014-07-20', 'Java Exam', 4, 4, 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`userid`, `username`, `password`, `name`, `type`, `status`) VALUES
(1, 'guri', '123456', NULL, 'teacher', NULL),
(2, 'hgjghj', 'ghjghj', 'hgjhg', 'student', 1),
(3, 'admin', 'admin', 'administrator', 'admin', NULL),
(4, 'teacher', 'teacher', 'teacher', 'teacher', 1),
(5, 'student', 'student', 'student', 'student', 1);

-- --------------------------------------------------------

--
-- Structure for view `questionview`
--
DROP TABLE IF EXISTS `questionview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`su27`@`%.njit.edu` SQL SECURITY DEFINER VIEW `questionview` AS select `a`.`tid` AS `tid`,`d`.`username` AS `username`,`a`.`qid` AS `qid`,`a`.`qname` AS `qname`,`a`.`subject_code` AS `subject_Code`,`c`.`subject_name` AS `subject_name`,`a`.`wcode` AS `wcode`,`b`.`wname` AS `wname`,`b`.`marks` AS `marks`,`a`.`a` AS `a`,`a`.`b` AS `b`,`a`.`c` AS `c`,`a`.`d` AS `d`,`a`.`answer` AS `answer` from (((`question_master` `a` join `question_weight` `b`) join `subject` `c`) join `user_master` `d`) where ((`a`.`wcode` = `b`.`wcode`) and (`a`.`subject_code` = `c`.`subject_code`) and (`a`.`tid` = `d`.`userid`));

-- --------------------------------------------------------

--
-- Structure for view `result`
--
DROP TABLE IF EXISTS `result`;

CREATE ALGORITHM=UNDEFINED DEFINER=`su27`@`%.njit.edu` SQL SECURITY DEFINER VIEW `result` AS select `b`.`testid` AS `testid`,`c`.`testdate` AS `testdate`,`b`.`qid` AS `qid`,`a`.`qname` AS `qname`,`b`.`sid` AS `sid`,`d`.`username` AS `student_name`,`a`.`subject_Code` AS `subject_code`,`a`.`subject_name` AS `subject_name`,(case when (`b`.`ans` = 'a') then `a`.`a` when (`b`.`ans` = 'b') then `a`.`b` when (`b`.`ans` = 'c') then `a`.`c` when (`b`.`ans` = 'd') then `a`.`d` end) AS `response`,(case when (`a`.`answer` = 'a') then `a`.`a` when (`a`.`answer` = 'b') then `a`.`b` when (`a`.`answer` = 'c') then `a`.`c` when (`a`.`answer` = 'd') then `a`.`d` end) AS `answer`,`true_false`(`b`.`ans`,`a`.`answer`) AS `truefalse`,(case when (`true_false`(`b`.`ans`,`a`.`answer`) = 'TRUE') then `a`.`marks` end) AS `marks`,`c`.`result` AS `result` from (((`questionview` `a` join `student_test` `b`) join `test_master` `c`) join `user_master` `d`) where ((`a`.`qid` = `b`.`qid`) and (`b`.`testid` = `c`.`testid`) and (`b`.`sid` = `d`.`userid`));

-- --------------------------------------------------------

--
-- Structure for view `testview`
--
DROP TABLE IF EXISTS `testview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`su27`@`%.njit.edu` SQL SECURITY DEFINER VIEW `testview` AS select `a`.`testid` AS `testid`,`a`.`testdate` AS `testdate`,`a`.`status` AS `status`,`a`.`result` AS `result`,`a`.`title` AS `title`,`a`.`tid` AS `tid`,`c`.`username` AS `username`,`b`.`qid` AS `qid`,`c`.`qname` AS `qname`,`a`.`subject_code` AS `subject_code`,`c`.`subject_name` AS `subject_name`,`c`.`wcode` AS `wcode`,`c`.`wname` AS `wname`,`c`.`marks` AS `marks`,`c`.`a` AS `a`,`c`.`b` AS `b`,`c`.`c` AS `c`,`c`.`d` AS `d`,`c`.`answer` AS `answer` from ((`test_master` `a` join `test_details` `b`) join `questionview` `c`) where ((`b`.`testid` = `a`.`testid`) and (`b`.`qid` = `c`.`qid`) and (`a`.`tid` = `c`.`tid`) and (`a`.`subject_code` = `c`.`subject_Code`));
