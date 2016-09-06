-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-06 16:39:55
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_message`
--

CREATE TABLE IF NOT EXISTS `tp_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `filename` varchar(30) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tp_message`
--

INSERT INTO `tp_message` (`id`, `title`, `content`, `filename`, `time`, `uid`) VALUES
(1, '测试1', '内容1', '57c791dc008d3.png', 1472696796, 1),
(2, '题目2', '内容2', '57c7b8382e132.png', 1472706616, 1),
(3, 'title 1', 'content1', '57c7b8ea1913e.jpg', 1472706794, 2),
(4, '我是陈伟霆', '我长得很是帅', '57c7b91ec27ab.jpg', 1472706846, 2),
(5, '我是张爱玲', '我的第一篇发表的短小说叫做霸王别姬', '57c7b989f0a71.jpg', 1472706953, 3),
(6, '我是顾城', '黑夜给我了一双黑色眼睛，我却用它来寻找光明', '57c7b9eb20dd0.jpg', 1472707051, 5),
(7, '我是张艺兴', '我就是帅 你拿我怎么样\r\n', '57caf54b6ef20.jpg', 1472918859, 1),
(8, '我是张艺兴', '我是张艺兴 你是谁', '57cd7fd0b0743.jpg', 1473085392, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `sex` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `password`, `sex`) VALUES
(1, '张艺兴', '123', 1),
(2, '陈伟霆', '123', 1),
(3, '张爱玲', '123', 0),
(4, '123', '123', 0),
(5, '顾城', '123', 1),
(6, '你好', '123', 0),
(7, '', '', 1),
(8, '高尔基', '123', 1),
(9, '霍金', '123', 1),
(10, '苏菲', '123', 1),
(11, '海明威', '123', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
