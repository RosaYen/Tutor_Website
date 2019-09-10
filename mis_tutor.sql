-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015-04-08: 09:17:54
-- 伺服器版本: 5.6.17
-- PHP 版本： 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `poncafe`
--

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- 資料表結構 `order`
--
CREATE TABLE IF NOT EXISTS `student` (
  `sId` int(11) NOT NULL AUTO_INCREMENT,
  `sAccount` varchar(50) NOT NULL,
  `sName` varchar(30) NOT NULL,
  `tSalary` varchar(30) NOT NULL,
  `cNumber` int(10) NOT NULL,
  `sGender` varchar(20) NOT NULL,
  `sSchool` varchar(20) NOT NULL,
  `sGrade` int(20) NOT NULL,
  `cSubject` varchar(50) NOT NULL,
  `sStatus` varchar(1000) NOT NULL,
  `cHour` int(30) NOT NULL,
  `cWeekMonth` varchar(20) NOT NULL,
  `cTimes` int(10) NOT NULL,
  `cStartTime` varchar(330) NOT NULL,
  `cStart` varchar(20) NOT NULL,
  `tMaterial` varchar(50) NOT NULL,
  `cCity` varchar(30) NOT NULL,
  `cPlace` varchar(30) NOT NULL,
  `sEmail` varchar(30) NOT NULL,
  `sTel` varchar(20) NOT NULL,
  PRIMARY KEY (`sId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 資料表的匯出資料 `order`
--

INSERT INTO `student`
VALUES(1, 'Anna', '安娜', '1000', 2, '女', '國小', 2, '國文', '安靜有禮', 3, 'each_week', 3, '2018-01-01', 'startnow', 'textbook', '台北市', 'company', 'mis@gmail.com', '0939-752-303'),
(2, 'Bella', '貝拉', '1500', 3, '女', '國中', 3, '數學', '活潑好動', 3, 'each_month', 2, '2018-02-14', 'date', 'bothOk', '桃園市', 'home', 'learn@mis.com', '0972-554-886'),
(3, 'Andy', '安迪', '3000', 1, '男', '高中', 4, '國文', '有想像力', 3, 'each_month', 1, '2017-12-31', 'startnow', 'other', '台中市', 'thome', 'book@nsysu.com', '0911-111-223');

-- --------------------------------------------------------

--
-- 資料表結構 `order_detail`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `tId` int(11) NOT NULL AUTO_INCREMENT,
  `tAcccount` varchar(50) NOT NULL,
  `tName` varchar(30) NOT NULL,
  `tSalary` varchar(11) NOT NULL,
  `cNumber` int(10) NOT NULL,
  `sGender`varchar(20) NOT NULL,
  `sSchool` varchar(20) NOT NULL,
  `sGrade` int(20) NOT NULL,
  `cSubject` varchar(50) NOT NULL,
  `sStatus` varchar(1000) NOT NULL,
  `cHour` int(30) NOT NULL,
  `cWeekMonth` varchar(20) NOT NULL,
  `cTimes` int(10) NOT NULL,
  `cStartTime` varchar(330) NOT NULL,
  `cStart` varchar(20) NOT NULL,
  `tMaterial` varchar(50) NOT NULL,
  `cCity` varchar(30) NOT NULL,
  `cPlace` varchar(30) NOT NULL,
  `tEmail` varchar(30) NOT NULL,
  `tTel` varchar(20) NOT NULL,
  PRIMARY KEY (`tId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `order_detail`
--

INSERT INTO `teacher`
VALUES(1, 'Cindy', '蔡老師', '3000', 3, '皆可', 'elementary_school', 3, 'web程式設計', '勤奮認真', 3, 'each_week', 3, '2010-12-31', 'startnow', 'self-compiled-textbook', '桃園市', 'thome', 'cafe@yahoo.com', '0911-234-567'),
(2, 'Becky', '劉老師', '4000', 2, '只限男生', 'junior_high_school', 3, '微積分', '勤奮認真', 6, 'each_week', 3, '2018-02-29', 'startnow', 'market-reference-textbook', '台東市', 'thome', 'cake@gmail.com', '0922-555-666'),
(3, 'David', '王老師', '2500', 3, '皆可', 'senior_high_school', 3, '資料結構', '勤奮認真', 4, 'each_week', 3, '2020-10-11', 'startnow', 'self-compiled-textbook', '高雄市', 'thome', 'sing@nsysu.com', '0987-123-654');

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
