-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2015 at 08:07 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `winterfb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbox`
--

CREATE TABLE IF NOT EXISTS `chatbox` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_frm` int(11) NOT NULL,
  `chat_to` int(11) NOT NULL,
  `chat_msg` varchar(255) NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=65 ;

--
-- Dumping data for table `chatbox`
--

INSERT INTO `chatbox` (`chat_id`, `chat_frm`, `chat_to`, `chat_msg`) VALUES
(1, 2, 0, 'b'),
(2, 2, 0, 'bn'),
(3, 2, 0, 'b'),
(4, 2, 0, 'bb'),
(5, 2, 3, ' nnmn'),
(6, 2, 3, 'hhhj'),
(7, 2, 3, 'nnbnb'),
(8, 2, 3, 'dfrg'),
(9, 2, 3, 'dfrg'),
(10, 3, 2, 'hello mr'),
(11, 2, 3, 'jmj'),
(12, 2, 3, 'bb'),
(13, 2, 3, 'bb'),
(14, 2, 3, 'bb'),
(15, 2, 3, 'bb'),
(16, 2, 3, 'bb'),
(17, 2, 3, 'bbmn'),
(18, 2, 3, 'bbmn'),
(19, 2, 3, 'bbmn'),
(20, 2, 3, 'bbmn'),
(21, 2, 3, 'bbmn'),
(22, 2, 3, 'njhhb'),
(23, 2, 3, 'njhhb'),
(24, 2, 1, 'bn'),
(25, 2, 3, 'nb'),
(26, 2, 3, ' v'),
(27, 2, 3, 'nnnn'),
(28, 2, 3, 'dcc'),
(29, 2, 3, 'ss'),
(30, 2, 3, 'dnmsmnds'),
(31, 2, 3, 'jhsahj'),
(32, 2, 3, 'nh'),
(33, 2, 3, 'hghg'),
(34, 2, 3, 'd'),
(35, 2, 3, 'dccd'),
(36, 3, 2, 'hello xcccn'),
(37, 2, 3, 'dskj'),
(38, 2, 3, 'hh'),
(39, 2, 3, 'ah'),
(40, 3, 2, 'nmsn'),
(41, 1, 3, 'dd'),
(42, 1, 3, 'ddty'),
(43, 3, 1, 'er'),
(44, 3, 1, 'b'),
(45, 1, 3, 'nh'),
(46, 1, 3, 'ew'),
(47, 1, 3, 'ew'),
(48, 1, 3, 'nn'),
(49, 1, 3, 'm'),
(50, 0, 1, 'hi'),
(51, 1, 3, ''''),
(52, 1, 3, 'nnn'),
(53, 1, 3, 'nnnp'),
(54, 1, 3, 'hello'),
(55, 3, 1, 'hi there'),
(56, 3, 1, 'hi'),
(57, 1, 3, 'helo mr abc'),
(58, 3, 1, 'hi jhfg'),
(59, 1, 3, 'hjh'),
(60, 3, 1, 'hello abc'),
(61, 1, 3, 'hello'),
(62, 1, 3, 'gfgg'),
(63, 1, 3, 'heelo'),
(64, 3, 1, 'i m abc');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cm_id` int(11) NOT NULL AUTO_INCREMENT,
  `cm_cm` varchar(50) NOT NULL,
  `cm_ub` int(11) NOT NULL,
  `cm_dt` date NOT NULL,
  `cm_co` int(11) NOT NULL,
  PRIMARY KEY (`cm_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=15 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cm_id`, `cm_cm`, `cm_ub`, `cm_dt`, `cm_co`) VALUES
(3, 'hello pic', 2, '2015-01-02', 1),
(5, 'mn ', 2, '2015-01-02', 1),
(14, 'gfggh', 1, '2015-01-15', 16);

-- --------------------------------------------------------

--
-- Table structure for table `friendrequests`
--

CREATE TABLE IF NOT EXISTS `friendrequests` (
  `fr_id` int(11) NOT NULL AUTO_INCREMENT,
  `fr_frm` int(11) NOT NULL,
  `fr_to` int(11) NOT NULL,
  `fr_st` int(11) NOT NULL,
  PRIMARY KEY (`fr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED AUTO_INCREMENT=10 ;

--
-- Dumping data for table `friendrequests`
--

INSERT INTO `friendrequests` (`fr_id`, `fr_frm`, `fr_to`, `fr_st`) VALUES
(8, 3, 2, 2),
(9, 1, 2, 2),
(6, 1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_ub` int(11) NOT NULL,
  `p_cp` varchar(50) NOT NULL,
  `p_pl` varchar(50) NOT NULL,
  `p_dt` date NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`p_id`, `p_ub`, `p_cp`, `p_pl`, `p_dt`) VALUES
(1, 2, '', 'uploadedimage/01-01-2015-1420123345.jpg', '2015-01-01'),
(2, 3, 'hello profile pic', 'uploadedimage/01-01-2015-1420145336.jpg', '2015-01-01'),
(3, 3, '', 'uploadedimage/01-01-2015-1420145430.jpg', '2015-01-01'),
(4, 3, '', 'uploadedimage/01-01-2015-1420145588.jpg', '2015-01-01'),
(5, 1, 'hello mr', 'uploadedimage/02-01-2015-1420192836.jpg', '2015-01-02'),
(6, 1, 'hello p', 'uploadedimage/02-01-2015-1420192969.jpg', '2015-01-02'),
(7, 1, 'hello mr india', 'uploadedimage/02-01-2015-1420193872.jpg', '2015-01-02'),
(8, 1, 'hello first', 'uploadedimage/02-01-2015-1420193935.jpg', '2015-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `photoscomment`
--

CREATE TABLE IF NOT EXISTS `photoscomment` (
  `phcm_id` int(11) NOT NULL AUTO_INCREMENT,
  `phcm_cm` varchar(50) NOT NULL,
  `phcm_cb` int(11) NOT NULL,
  `phcm_pl` varchar(50) NOT NULL,
  `phcm_dt` date NOT NULL,
  PRIMARY KEY (`phcm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photoscomment`
--


-- --------------------------------------------------------

--
-- Table structure for table `postscomment`
--

CREATE TABLE IF NOT EXISTS `postscomment` (
  `pocm_id` int(11) NOT NULL AUTO_INCREMENT,
  `pocm_pl` varchar(50) NOT NULL,
  `pocm_dt` date NOT NULL,
  `pocm_ub` int(11) NOT NULL,
  `pocm_cp` varchar(50) NOT NULL,
  PRIMARY KEY (`pocm_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `postscomment`
--

INSERT INTO `postscomment` (`pocm_id`, `pocm_pl`, `pocm_dt`, `pocm_ub`, `pocm_cp`) VALUES
(1, 'uploadedimage/02-01-2015-1420193935.jpg', '2015-01-02', 1, 'hello first'),
(14, 'notuploaded', '2015-01-07', 2, 'hello mr india\r\n'),
(16, 'notuploaded', '2015-01-15', 1, 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `us_fn` varchar(25) NOT NULL,
  `us_ln` varchar(25) NOT NULL,
  `us_un` varchar(25) NOT NULL,
  `us_p` varchar(32) NOT NULL,
  `us_cn` varchar(10) NOT NULL,
  `us_ei` varchar(25) NOT NULL,
  `us_s` varchar(7) NOT NULL,
  `us_bd` date NOT NULL,
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_in` varchar(50) NOT NULL,
  `us_pl` varchar(50) NOT NULL,
  `us_farray` text NOT NULL,
  PRIMARY KEY (`us_id`),
  UNIQUE KEY `us_un` (`us_un`),
  UNIQUE KEY `us_un_2` (`us_un`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`us_fn`, `us_ln`, `us_un`, `us_p`, `us_cn`, `us_ei`, `us_s`, `us_bd`, `us_id`, `us_in`, `us_pl`, `us_farray`) VALUES
('jdx', 'jhjj', ' india', '202cb962ac59075b964b07152d234b70', '56656', 'ftyf', 'Male', '2015-01-05', 1, 'men', 'uploadedimage/16-01-2015-1421391225.jpg', '3,2'),
(' hsdhj', ' djx', ' xcjkcjx', '202cb962ac59075b964b07152d234b70', '3443', ' djkskdjs', 'Male', '2015-01-13', 2, 'men,women', 'uploadedimage/01-01-2015-1420123345.jpg', '3,1'),
('$s', '$p', ' abc', '202cb962ac59075b964b07152d234b70', ' 3434', ' rsdgd', 'Male', '2015-01-19', 3, 'women', 'uploadedimage/01-01-2015-1420145588.jpg', '1,2'),
(' abhishek', ' kumar', ' mowar', '202cb962ac59075b964b07152d234b70', ' 980143660', ' abhishek9114@rediffmail.', 'Male', '1994-01-05', 4, '', 'notuploaded', ''),
(' rani', ' mukherji', ' rani', '202cb962ac59075b964b07152d234b70', ' 45667', ' dsadsds', 'Female', '2015-01-20', 5, '', 'notuploaded', '');
