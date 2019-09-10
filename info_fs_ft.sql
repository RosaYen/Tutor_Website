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
-- 資料庫： `tutor_info_fs_ft`
--

-- --------------------------------------------------------

--
-- 資料表結構 `find_student_info`
--

CREATE TABLE IF NOT EXISTS `find_student_info` (
  `fsId`int(11) NOT NULL AUTO_INCREMENT,
  `fsAccount`varchar(255) NOT NULL,
  `fsT_name`varchar(20) NOT NULL,
  `fsNote_of_teacher`varchar(1000) NOT NULL,/**/
  `fsNote_of_class`varchar(1000) NOT NULL,/**/
  `fsT_profile`varchar(1000) NOT NULL,/**/
  `fsNumber_of_student`int(10) NOT NULL,
  `fsStu_edu_level`varchar(10) NOT NULL,
  `fsStu_grade`int(10) NOT NULL,
  `fsGender`varchar(10) NOT NULL,
  `fsNo_required`varchar(10) ,
  `fsSubject`varchar(20) NOT NULL,
  `fsClasshour`int(10) NOT NULL,
  `fsWeek_or_month`varchar(10) NOT NULL,
  `fsClass_times`int(20) NOT NULL,
  `fsClass_start_time`date(20) NOT NULL,
  `fsStartnow`varchar(20) ,
  `fsTeaching_material`varchar(20) NOT NULL,
  `fsCCity`varchar(20) NOT NULL,
  `fsClassplace`varchar(20) NOT NULL,
  `fsHEarning`int(20) NOT NULL,
  `fsTEmail`varchar(20) NOT NULL,
  `fsTTelephone`varchar(20) NOT NULL,
  PRIMARY KEY (`fsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;
--
-- 資料表的匯出資料 `find_student_info`
--

INSERT INTO `find_student_info` (`fsId`,`fsAccount`,`fsT_name`,`fsNote_of_teacher`,`fsNote_of_class`,`fsT_profile`,`fsNumber_of_student`,
                                 `fsStu_edu_level`,`fsStu_grade`,`fsGender`,`fsNo_required`,`fsSubject`,`fsClasshour`,`fsWeek_or_month`,
                                 `fsClass_times`,`fsClass_start_time`,`fsStartnow`,`fsTeaching_material`,`fsCCity`,`fsClassplace`,
                                 `fsHEarning`,`fsTEmail`,`fsTTelephone`) VALUES

(1,'Cindy','蔡老師','中山資管大二','勤奮認真','曾任web助教','3','elementary_school','3','皆可','no_required','web程式設計','3','each_week',
  '3','2010-12-31','startnow','self-compiled-textbook','桃園市','thome','3000','cafe@yahoo.com','0911-234-567'),
(2,'Becky','劉老師','清華機電大三','專攻數理','曾任資料結構助教','2','junior_high_school','2','只限男生',,'微積分','6','each_month',
  '4','2018-02-31','startnow','market-reference-textbook','台東市','thome','4000','cake@gmail.com','0922-555-666'),
(3,'Cindy','蔡老師','中山資管大二','勤奮認真','曾任web助教','1','elementary_school','3','只限女生',,'web程式設計','5','each_month',
  '6','2018-02-11',,'other','台南市','other','3000','sing@nsysu.com','0911-234-567');
-- --------------------------------------------------------

--
-- 資料表結構 `find_teacher_info`
--

CREATE TABLE IF NOT EXISTS `find_teacher_info` (
  `ftId` int(11) NOT NULL AUTO_INCREMENT,
  `ftAccount`varchar(20) NOT NULL,
  `ftConn_name`varchar(20) NOT NULL,
  `ftHEarning`int(20) NOT NULL,
  `ftNumber_of_student`int(20) NOT NULL,
  `ftGender`varchar(20) NOT NULL,
  `ftSchool`varchar(20) NOT NULL,
  `ftStudent_grade`int(20) NOT NULL,
  `ftSubject`varchar(20) NOT NULL,
  `ftNote_of_student`varchar(500) NOT NULL,
  `ftClasshour`int(20) NOT NULL,
  `ftWeek_or_month`varchar(20) NOT NULL,
  `ftClass_times`int(20) NOT NULL,
  `ftClass_start_time`date(20) NOT NULL,
  `ftStartnow`varchar(20) ,
  `ftTeaching_material`varchar(20) NOT NULL,
  `ftCCity`varchar(20) NOT NULL,
  `ftClassplace`varchar(20) NOT NULL,
  `ftSEmail`varchar(20) NOT NULL,
  `ftSTelephone`varchar(20) NOT NULL,
  PRIMARY KEY (`ftId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 資料表的匯出資料 `find_teacher_info`
--

INSERT INTO `find_teacher_info` (`ftId`,`ftAccount`,`ftConn_name`,`ftHEarning`,`ftNumber_of_student`,`ftGender`,`ftSchool`,
                                 `ftStudent_grade`,`ftSubject`,`ftNote_of_student`,`ftClasshour`,`ftWeek_or_month`,`ftClass_times`,
                                `ftClass_start_time`,`ftStartnow`,`ftTeaching_material`,`ftCCity`,`ftClassplace`,`ftSEmail`,`ftSTelephone`) VALUES

(1,'Anna','安娜','1000','2','女','國小','2','國文','安靜有禮','3','each_week','3','2018-01-01','startnow','textbook',
'台北市','company','mis@gmail.com','0939-752-303'),
(2,'Bella','貝拉','1500','3','女','國中','3','數學','活潑好動','3','each_month','2','2018-02-14','','bothOk',
'桃園市','home','learn@mis.com','0972-554-886'),
(3,'Andy','安迪','3000','1','男','高中','4','國文','有想像力','3','each_month','1','2017-12-31','startnow','other',
'台中市','thome','book@nsysu.com','0911-111-223');

-- --------------------------------------------------------
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
