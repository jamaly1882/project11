-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- المزود: localhost
-- أنشئ في: 01 ديسمبر 2013 الساعة 18:18
-- إصدارة المزود: 5.5.16
--  PHP إصدارة: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `teset11`
--

-- --------------------------------------------------------

--
-- بنية الجدول `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `user_email`, `user_image`, `add_date`) VALUES
(1, 'admin', '123456', '', '', '2013-10-16 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `memmber2`
--

CREATE TABLE IF NOT EXISTS `memmber2` (
  `username` varchar(22) NOT NULL,
  `password` int(22) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `memmber2`
--

INSERT INTO `memmber2` (`username`, `password`, `id`) VALUES
('we', 234, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `memmber3`
--

CREATE TABLE IF NOT EXISTS `memmber3` (
  `id` int(22) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `memmber3`
--

INSERT INTO `memmber3` (`id`, `username`, `password`) VALUES
(1, 'er', 123);

-- --------------------------------------------------------

--
-- بنية الجدول `session_t`
--

CREATE TABLE IF NOT EXISTS `session_t` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `session_t`
--

INSERT INTO `session_t` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('AQRXO762118', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1377191706, 'N;'),
('QCXBX990002', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1608.1 Safari/537.36', 1377191832, 'a:3:{s:8:"username";s:5:"admin";s:8:"password";s:40:"7c4a8d09ca3762af61e59520943dc26494f8941b";s:9:"logged_in";b:1;}'),
('EWXFR698287', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1377191514, 'N;'),
('WQKIR443899', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1377191697, 'a:3:{s:8:"username";s:5:"admin";s:8:"password";s:40:"7c4a8d09ca3762af61e59520943dc26494f8941b";s:9:"logged_in";b:1;}'),
('SBPOQ478369', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377192757, 'N;'),
('LURBO292755', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:13.0) Gecko/20100101 Firefox/13.0', 1380033777, 'a:1:{s:8:"username";s:6:"sameer";}'),
('FJDMQ336755', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:13.0) Gecko/20100101 Firefox/13.0', 1380042575, 'a:3:{s:8:"username";s:5:"admin";s:8:"password";s:40:"7c4a8d09ca3762af61e59520943dc26494f8941b";s:9:"logged_in";b:1;}'),
('YIXMP681918', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:13.0) Gecko/20100101 Firefox/13.0', 1380047892, 'N;');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
