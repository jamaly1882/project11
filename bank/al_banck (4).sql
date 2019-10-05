-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- المزود: localhost
-- أنشئ في: 10 ديسمبر 2013 الساعة 23:29
-- إصدارة المزود: 5.5.16
--  PHP إصدارة: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `al_banck`
--

-- --------------------------------------------------------

--
-- بنية الجدول `check1`
--

CREATE TABLE IF NOT EXISTS `check1` (
  `check_no` int(11) NOT NULL AUTO_INCREMENT,
  `check_date` date NOT NULL,
  `check_type` varchar(255) NOT NULL,
  `custmer_name` varchar(255) NOT NULL,
  `account` double NOT NULL,
  `form_no` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`check_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1013 ;

--
-- إرجاع أو استيراد بيانات الجدول `check1`
--

INSERT INTO `check1` (`check_no`, `check_date`, `check_type`, `custmer_name`, `account`, `form_no`, `role`) VALUES
(1001, '2013-12-07', '  22', '      Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡ Ø§Ù„Ø¬Ù…Ø§Ù„ÙŠ', 23490, 1, 1),
(1002, '2013-12-07', 'Ø¶Ø±Ø§Ø¦Ø¨', 'Ø¶Ø±Ø§Ø¦Ø¨', 3110, 1, 0),
(1003, '2013-12-09', '   ØµØ§ÙÙŠ', '   Ø¹Ø¨Ø¯Ø§Ù„ÙˆØ§Ø­Ø¯', 234500, 2, 0),
(1004, '2013-12-09', 'Ø¶Ø±Ø§Ø¦Ø¨', 'Ø¶Ø±Ø§Ø¦Ø¨', 2300, 2, 0),
(1005, '2013-12-12', '  ØµØ§ÙÙŠ', '  Ø¹Ø¨Ø§Ø³', 67000, 3, 1),
(1006, '2013-12-12', 'Ø¶Ø±Ø§Ø¦Ø¨', 'Ø¶Ø±Ø§Ø¦Ø¨', 3500, 3, 0),
(1007, '2013-12-20', 'ØµØ§ÙÙŠ', 'Ù‡ÙŠØ«Ù… Ø§Ù„Ø¨Ø®ÙŠØªÙŠ', 33000, 4, 0),
(1008, '2013-12-20', 'Ø¶Ø±Ø§Ø¦Ø¨', 'Ø¶Ø±Ø§Ø¦Ø¨', 3500, 4, 0),
(1009, '2013-12-10', 'ØµØ§ÙÙŠ', 'Ø§Ø­Ù…Ø¯ ØµØ§Ù„Ø­', 21000, 5, 0),
(1010, '2013-12-10', ' Ø¶Ø±Ø§Ø¦Ø¨', ' Ø¶Ø±Ø§Ø¦Ø¨', 3000, 5, 0),
(1011, '2013-12-29', 'ØµØ§ÙÙŠ', 'Ø§Ø­Ù…Ø¯ Ø§Ù„Ø¬Ù…ÙŠÙ„ÙŠ', 23000, 6, 0),
(1012, '2013-12-29', 'Ø¶Ø±Ø§Ø¦Ø¨', 'Ø¶Ø±Ø§Ø¦Ø¨', 3000, 6, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `export`
--

CREATE TABLE IF NOT EXISTS `export` (
  `export_no` int(11) NOT NULL AUTO_INCREMENT,
  `export_date` date NOT NULL,
  `account` double NOT NULL,
  `ts_no` int(11) NOT NULL,
  PRIMARY KEY (`export_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1015 ;

--
-- إرجاع أو استيراد بيانات الجدول `export`
--

INSERT INTO `export` (`export_no`, `export_date`, `account`, `ts_no`) VALUES
(1001, '2013-01-01', 29000, 1),
(1002, '2013-01-02', 27000, 2),
(1003, '2013-01-20', 27000, 3),
(1004, '2013-02-02', 35000, 4),
(1005, '2013-02-13', 25000, 5),
(1006, '2013-02-26', 38000, 6),
(1007, '2013-03-04', 9000, 7),
(1008, '2013-03-19', 125000, 8),
(1009, '2013-03-23', 33000, 9),
(1010, '2013-03-30', 97000, 10),
(1011, '0000-00-00', 2013, 11),
(1014, '2025-00-00', 2013, 14);

-- --------------------------------------------------------

--
-- بنية الجدول `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `form_no` int(11) NOT NULL AUTO_INCREMENT,
  `bine` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`form_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- إرجاع أو استيراد بيانات الجدول `form`
--

INSERT INTO `form` (`form_no`, `bine`, `day`, `month`, `year`) VALUES
(1, 'ØµØ±Ù Ø³Ù„ÙØ©', 7, 12, 2013),
(2, 'ØµØ±Ù Ù…ÙƒØ§ÙØ§Ø©', 9, 12, 2013),
(3, 'ØµØ±Ù ØªØºØ°ÙŠØ©', 12, 12, 2013),
(4, 'ØµØ±Ù Ù…ÙƒØ§ÙØ§Ø©', 20, 12, 2013),
(5, 'ØµØ±Ù ØªØºØ°ÙŠØ©', 22, 12, 2013),
(6, 'ØµØ±Ù Ø³Ù„ÙØ©', 29, 12, 2013);

-- --------------------------------------------------------

--
-- بنية الجدول `ts`
--

CREATE TABLE IF NOT EXISTS `ts` (
  `ts_no` int(11) NOT NULL AUTO_INCREMENT,
  `bine` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`ts_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- إرجاع أو استيراد بيانات الجدول `ts`
--

INSERT INTO `ts` (`ts_no`, `bine`, `day`, `month`, `year`) VALUES
(1, 'ØªÙˆØ±ÙŠØ¯ Ù†Ù‚Ø¯ÙŠ', 1, 1, 2013),
(2, 'ØªÙˆØ±ÙŠØ¯ Ø¨Ø´ÙŠÙƒ', 2, 1, 2013),
(3, 'ØªÙˆØ±ÙŠØ¯ Ù…Ø¨Ù„Øº ØµØ±Ù Ø¨Ø¯ÙˆÙ† ÙˆØ¬Ù‡ Ø­Ù‚', 20, 1, 2013),
(4, 'ØªÙˆØ±ÙŠØ¯ Ø¨Ø´ÙŠÙƒ Ø§Ø¬Ù„', 2, 2, 2013),
(5, 'ØªØ³Ø¯ÙŠØ¯ Ø³Ù„ÙÙ‡', 13, 2, 2013),
(6, 'ØªÙˆØ±ÙŠØ¯ Ø¨Ø´ÙŠÙƒ Ø¹Ø§Ø¬Ù„', 26, 2, 2013),
(7, 'ØªÙˆØ±ÙŠØ¯ Ù…Ø¨Ù„Øº ØµØ±Ù Ø¨Ø¯ÙˆÙ† ÙˆØ¬Ù‡ Ø­Ù‚', 4, 3, 2013),
(8, 'ØªØ³Ø¯ÙŠØ¯ Ø³Ù„ÙÙ‡ Ø¨Ø´ÙŠÙƒØ§Øª', 19, 3, 2013),
(9, 'ØªÙˆØ±ÙŠØ¯ Ù†Ù‚Ø¯ÙŠ', 23, 3, 2013),
(10, 'ØªØ³Ø¯ÙŠØ¯ Ø³Ù„ÙÙ‡ Ù†Ù‚Ø¯Ø£', 30, 3, 2013),
(11, 'ØªÙˆØ±ÙŠØ¯ Ù†Ù‚Ø¯ÙŠ', 31, 4, 2013),
(14, 'ØªÙˆØ±ÙŠØ¯ Ø¨Ø´ÙŠÙƒ', 1, 12, 2013);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
