-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 10 日 17:03
-- 服务器版本: 5.1.69
-- PHP 版本: 5.2.17p1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `qinghuaci`
--

-- --------------------------------------------------------

--
-- 表的结构 `qh_account`
--

CREATE TABLE IF NOT EXISTS `qh_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL COMMENT '会员id',
  `amount` decimal(11,2) NOT NULL COMMENT '充值金额',
  `consume` decimal(11,2) NOT NULL COMMENT '消费金额',
  `balance` decimal(11,2) NOT NULL COMMENT '余额',
  `amovoucher` decimal(11,2) NOT NULL COMMENT '充值代金券',
  `convoucher` decimal(11,2) NOT NULL COMMENT '消费代金券',
  `voucher` decimal(11,2) NOT NULL COMMENT '代金券',
  `taocan` tinyint(100) NOT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1为显示',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单状态',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '时间戳',
  `accnum` char(18) NOT NULL COMMENT '充值订单编号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=209 ;

--
-- 转存表中的数据 `qh_account`
--

INSERT INTO `qh_account` (`id`, `mid`, `amount`, `consume`, `balance`, `amovoucher`, `convoucher`, `voucher`, `taocan`, `isshow`, `status`, `time`, `accnum`) VALUES
(1, 1, 600.00, 0.00, 600.00, 1000.00, 0.00, 1000.00, 3, 1, 0, '2017-03-23 11:20:21', '201703231120217050'),
(2, 2, 500.00, 0.00, 500.00, 0.00, 0.00, 0.00, 0, 1, 1, '2017-03-23 11:34:20', ''),
(3, 2, 300.00, 0.00, 800.00, 0.00, 0.00, 0.00, 9, 1, 0, '2017-03-23 11:36:38', '201703231136388617'),
(4, 2, 1000.00, 0.00, 1800.00, 2000.00, 0.00, 2000.00, 4, 1, 0, '2017-03-23 11:38:28', '201703231138282229'),
(5, 2, 1000.00, 0.00, 2800.00, 2000.00, 0.00, 4000.00, 4, 1, 0, '2017-03-23 11:39:24', '201703231139247575'),
(6, 2, 0.00, 0.00, 2800.00, 0.00, 50.00, 3950.00, 0, 1, 0, '2017-03-23 11:41:47', ''),
(7, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3930.00, 0, 1, 0, '2017-03-23 11:43:33', ''),
(8, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3910.00, 0, 1, 0, '2017-03-23 11:45:45', ''),
(9, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3890.00, 0, 1, 0, '2017-03-23 11:50:28', ''),
(10, 1, 2000.00, 0.00, 2600.00, 0.00, 0.00, 1000.00, 7, 1, 0, '2017-03-23 13:58:01', '201703231357214621'),
(11, 1, 1000.00, 0.00, 3600.00, 0.00, 0.00, 1000.00, 6, 1, 0, '2017-03-23 14:02:03', '201703231401324418'),
(12, 1, 3000.00, 0.00, 6600.00, 3000.00, 0.00, 4000.00, 5, 1, 0, '2017-03-23 14:23:14', '201703231422499710'),
(13, 1, 3000.00, 0.00, 9600.00, 3000.00, 0.00, 7000.00, 5, 1, 0, '2017-03-23 14:57:03', '201703231456415673'),
(14, 1, 2000.00, 0.00, 11600.00, 0.00, 0.00, 7000.00, 7, 1, 0, '2017-03-23 14:58:12', '201703231457372306'),
(15, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6980.00, 0, 1, 0, '2017-03-23 15:00:46', ''),
(16, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6960.00, 0, 1, 0, '2017-03-23 15:01:21', ''),
(17, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3870.00, 0, 1, 0, '2017-03-23 15:11:08', ''),
(18, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3850.00, 0, 1, 0, '2017-03-23 15:13:46', ''),
(19, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6910.00, 0, 1, 0, '2017-03-23 15:22:05', ''),
(20, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6860.00, 0, 1, 0, '2017-03-23 15:25:55', ''),
(21, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6840.00, 0, 1, 0, '2017-03-23 15:42:11', ''),
(22, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6820.00, 0, 1, 0, '2017-03-23 16:17:21', ''),
(23, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6770.00, 0, 1, 0, '2017-03-23 16:18:17', ''),
(24, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6720.00, 0, 1, 0, '2017-03-23 16:25:43', ''),
(25, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6670.00, 0, 1, 0, '2017-03-23 16:27:33', ''),
(26, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6620.00, 0, 1, 0, '2017-03-23 16:34:15', ''),
(27, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6600.00, 0, 1, 0, '2017-03-23 16:36:47', ''),
(28, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6550.00, 0, 1, 0, '2017-03-23 16:39:38', ''),
(29, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6530.00, 0, 1, 0, '2017-03-23 16:47:56', ''),
(30, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6480.00, 0, 1, 0, '2017-03-23 16:48:23', ''),
(31, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6460.00, 0, 1, 0, '2017-03-23 16:53:46', ''),
(32, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6440.00, 0, 1, 0, '2017-03-23 16:54:07', ''),
(33, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6420.00, 0, 1, 0, '2017-03-23 16:56:50', ''),
(34, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6400.00, 0, 1, 0, '2017-03-23 16:57:57', ''),
(35, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6380.00, 0, 1, 0, '2017-03-23 16:59:14', ''),
(36, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6330.00, 0, 1, 0, '2017-03-23 17:02:27', ''),
(37, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6280.00, 0, 1, 0, '2017-03-23 17:08:25', ''),
(38, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6230.00, 0, 1, 0, '2017-03-23 17:12:30', ''),
(39, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3830.00, 0, 1, 0, '2017-03-23 18:45:51', ''),
(40, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3810.00, 0, 1, 0, '2017-03-23 18:46:15', ''),
(41, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3790.00, 0, 1, 0, '2017-03-23 18:47:40', ''),
(42, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3770.00, 0, 1, 0, '2017-03-23 19:35:13', ''),
(43, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3750.00, 0, 1, 0, '2017-03-23 19:54:42', ''),
(44, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3730.00, 0, 1, 0, '2017-03-23 19:58:28', ''),
(45, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6210.00, 0, 1, 0, '2017-03-24 09:13:43', ''),
(46, 1, 0.00, 0.00, 11600.00, 0.00, 50.00, 6160.00, 0, 1, 0, '2017-03-24 09:14:10', ''),
(47, 1, 0.00, 0.00, 11600.00, 0.00, 20.00, 6140.00, 0, 1, 0, '2017-03-24 09:15:04', ''),
(48, 1, 3000.00, 0.00, 14600.00, 3000.00, 0.00, 9140.00, 5, 1, 0, '2017-03-24 09:23:58', ''),
(49, 7, 0.00, 0.00, 500.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 12:02:56', ''),
(50, 7, 0.00, 20.00, 480.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 12:03:13', ''),
(51, 7, 0.00, 20.00, 460.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:30:51', ''),
(52, 7, 0.00, 20.00, 440.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:35:22', ''),
(53, 7, 0.00, 20.00, 420.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:40:41', ''),
(54, 7, 0.00, 20.00, 400.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:43:45', ''),
(55, 7, 0.00, 20.00, 380.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:44:33', ''),
(56, 7, 0.00, 50.00, 330.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:44:40', ''),
(57, 7, 0.00, 50.00, 280.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:45:01', ''),
(58, 7, 0.00, 50.00, 230.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:50:52', ''),
(59, 7, 0.00, 50.00, 180.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 13:51:39', ''),
(60, 7, 0.00, 50.00, 130.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 14:41:39', ''),
(61, 7, 0.00, 20.00, 110.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:08:30', ''),
(62, 7, 0.00, 20.00, 90.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:11:52', ''),
(63, 7, 0.00, 20.00, 70.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:17:01', ''),
(64, 7, 0.00, 20.00, 50.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:17:59', ''),
(65, 7, 0.00, 20.00, 30.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:18:02', ''),
(66, 7, 0.00, 20.00, 10000.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:20:56', ''),
(67, 7, 0.00, 20.00, 9980.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:22:09', ''),
(68, 7, 0.00, 20.00, 9960.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:26:27', ''),
(69, 7, 0.00, 20.00, 9940.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:49:53', ''),
(70, 7, 0.00, 20.00, 9920.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:50:01', ''),
(71, 7, 0.00, 20.00, 9900.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:50:07', ''),
(72, 7, 0.00, 20.00, 9880.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:50:12', ''),
(73, 7, 0.00, 20.00, 9860.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:50:42', ''),
(74, 7, 0.00, 20.00, 9840.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:50:51', ''),
(75, 7, 0.00, 20.00, 9820.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:51:02', ''),
(76, 7, 0.00, 20.00, 9800.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:51:08', ''),
(77, 7, 0.00, 20.00, 9780.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:51:17', ''),
(78, 7, 0.00, 20.00, 9760.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 15:51:40', ''),
(79, 7, 0.00, 20.00, 9740.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-24 17:49:26', ''),
(80, 7, 0.00, 20.00, 9720.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-25 22:20:33', ''),
(81, 7, 1000.00, 0.00, 10720.00, 0.00, 0.00, 0.00, 6, 1, 0, '2017-03-25 22:21:30', ''),
(82, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3710.00, 0, 1, 0, '2017-03-26 14:21:21', ''),
(83, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3690.00, 0, 1, 0, '2017-03-26 14:23:04', ''),
(84, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3670.00, 0, 1, 0, '2017-03-26 14:25:15', ''),
(85, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3650.00, 0, 1, 0, '2017-03-26 14:28:57', ''),
(86, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3630.00, 0, 1, 0, '2017-03-26 14:31:57', ''),
(87, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3610.00, 0, 1, 0, '2017-03-26 14:35:12', ''),
(88, 7, 0.00, 20.00, 10700.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-27 09:19:33', ''),
(89, 7, 0.00, 20.00, 10680.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-27 09:25:00', ''),
(90, 7, 0.00, 20.00, 10660.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-27 09:25:12', ''),
(91, 7, 0.00, 20.00, 10640.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-27 09:25:22', ''),
(92, 7, 0.00, 20.00, 10620.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-27 10:12:08', ''),
(93, 7, 1000.00, 0.00, 11620.00, 0.00, 0.00, 0.00, 6, 1, 0, '2017-03-27 10:12:54', ''),
(94, 7, 0.00, 20.00, 11600.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-27 10:31:13', ''),
(95, 7, 0.00, 20.00, 11580.00, 0.00, 0.00, 0.00, 0, 1, 0, '2017-03-27 10:31:28', ''),
(96, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3590.00, 0, 1, 0, '2017-03-27 10:38:39', ''),
(97, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3570.00, 0, 1, 0, '2017-03-27 10:40:34', ''),
(98, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3550.00, 0, 1, 0, '2017-03-27 10:42:29', ''),
(99, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3530.00, 0, 1, 0, '2017-03-27 10:44:19', ''),
(100, 7, 1000.00, 0.00, 12580.00, 2000.00, 0.00, 2000.00, 4, 1, 0, '2017-03-27 11:10:29', '201703271109472696'),
(101, 7, 1000.00, 0.00, 13580.00, 2000.00, 0.00, 4000.00, 4, 1, 0, '2017-03-27 11:24:01', '201703271123272815'),
(102, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3980.00, 0, 1, 0, '2017-03-27 13:36:46', ''),
(103, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3960.00, 0, 1, 0, '2017-03-27 13:38:15', ''),
(104, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 3910.00, 0, 1, 0, '2017-03-27 14:15:25', ''),
(105, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3890.00, 0, 1, 0, '2017-03-27 14:22:43', ''),
(106, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3870.00, 0, 1, 0, '2017-03-27 14:53:38', ''),
(107, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3510.00, 0, 1, 0, '2017-03-27 15:14:57', ''),
(108, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3850.00, 0, 1, 0, '2017-03-27 15:23:13', ''),
(109, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3490.00, 0, 1, 0, '2017-03-27 15:23:40', ''),
(110, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3830.00, 0, 1, 0, '2017-03-27 15:25:58', ''),
(111, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3810.00, 0, 1, 0, '2017-03-27 15:27:55', ''),
(112, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3470.00, 0, 1, 0, '2017-03-27 15:31:26', ''),
(113, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3790.00, 0, 1, 0, '2017-03-27 15:35:49', ''),
(114, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3770.00, 0, 1, 0, '2017-03-27 15:36:57', ''),
(115, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3450.00, 0, 1, 0, '2017-03-27 15:40:53', ''),
(116, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3750.00, 0, 1, 0, '2017-03-27 15:42:02', ''),
(117, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3730.00, 0, 1, 0, '2017-03-27 15:42:45', ''),
(118, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3430.00, 0, 1, 0, '2017-03-27 15:43:09', ''),
(119, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3410.00, 0, 1, 0, '2017-03-27 15:43:26', ''),
(120, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3390.00, 0, 1, 0, '2017-03-27 15:49:04', ''),
(121, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 3680.00, 0, 1, 0, '2017-03-27 15:52:22', ''),
(122, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3660.00, 0, 1, 0, '2017-03-27 16:10:08', ''),
(123, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 3610.00, 0, 1, 0, '2017-03-27 16:28:03', ''),
(124, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3590.00, 0, 1, 0, '2017-03-27 16:39:20', ''),
(125, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3570.00, 0, 1, 0, '2017-03-27 16:40:41', ''),
(126, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3550.00, 0, 1, 0, '2017-03-27 16:40:48', ''),
(127, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3370.00, 0, 1, 0, '2017-03-27 16:45:19', ''),
(128, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3530.00, 0, 1, 0, '2017-03-27 18:15:21', ''),
(129, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 3480.00, 0, 1, 0, '2017-03-27 18:19:48', ''),
(130, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3350.00, 0, 1, 0, '2017-03-27 21:31:22', ''),
(131, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3330.00, 0, 1, 0, '2017-03-27 22:34:00', ''),
(132, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3310.00, 0, 1, 0, '2017-03-28 13:01:08', ''),
(133, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3290.00, 0, 1, 0, '2017-03-28 14:18:21', ''),
(134, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3270.00, 0, 1, 0, '2017-03-28 14:19:27', ''),
(135, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3250.00, 0, 1, 0, '2017-03-28 14:20:53', ''),
(136, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3230.00, 0, 1, 0, '2017-03-28 14:32:35', ''),
(137, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3210.00, 0, 1, 0, '2017-03-28 14:43:16', ''),
(138, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3460.00, 0, 1, 0, '2017-03-28 15:09:16', ''),
(139, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3440.00, 0, 1, 0, '2017-03-28 15:11:09', ''),
(140, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 3390.00, 0, 1, 0, '2017-03-28 15:12:46', ''),
(141, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 3340.00, 0, 1, 0, '2017-03-28 15:15:26', ''),
(142, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3320.00, 0, 1, 0, '2017-03-28 15:17:31', ''),
(143, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3190.00, 0, 1, 0, '2017-03-28 15:18:03', ''),
(144, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3170.00, 0, 1, 0, '2017-03-28 15:29:51', ''),
(145, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3300.00, 0, 1, 0, '2017-03-28 15:45:10', ''),
(146, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 3250.00, 0, 1, 0, '2017-03-28 15:45:39', ''),
(147, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3230.00, 0, 1, 0, '2017-03-28 15:48:49', ''),
(148, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3210.00, 0, 1, 0, '2017-03-28 15:54:13', ''),
(149, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3190.00, 0, 1, 0, '2017-03-28 15:57:01', ''),
(150, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3170.00, 0, 1, 0, '2017-03-28 16:02:06', ''),
(151, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3150.00, 0, 1, 0, '2017-03-28 16:02:55', ''),
(152, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3130.00, 0, 1, 0, '2017-03-28 16:05:51', ''),
(153, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3110.00, 0, 1, 0, '2017-03-28 16:06:27', ''),
(154, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3150.00, 0, 1, 0, '2017-03-28 16:11:49', ''),
(155, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3090.00, 0, 1, 0, '2017-03-28 16:15:17', ''),
(156, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3070.00, 0, 1, 0, '2017-03-28 16:15:49', ''),
(157, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3050.00, 0, 1, 0, '2017-03-28 16:20:30', ''),
(158, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 3030.00, 0, 1, 0, '2017-03-28 16:47:24', ''),
(159, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 2980.00, 0, 1, 0, '2017-03-28 17:12:15', ''),
(160, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2960.00, 0, 1, 0, '2017-03-28 17:20:55', ''),
(161, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3130.00, 0, 1, 0, '2017-03-28 17:45:04', ''),
(162, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3110.00, 0, 1, 0, '2017-03-28 17:50:19', ''),
(163, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3090.00, 0, 1, 0, '2017-03-28 17:51:41', ''),
(164, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3070.00, 0, 1, 0, '2017-03-28 17:52:07', ''),
(165, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3050.00, 0, 1, 0, '2017-03-29 08:30:55', ''),
(166, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3030.00, 0, 1, 0, '2017-03-29 08:37:49', ''),
(167, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2940.00, 0, 1, 0, '2017-03-29 09:03:58', ''),
(168, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2920.00, 0, 1, 0, '2017-03-29 09:20:59', ''),
(169, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2900.00, 0, 1, 0, '2017-03-29 09:24:12', ''),
(170, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2880.00, 0, 1, 0, '2017-03-29 09:25:46', ''),
(171, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2860.00, 0, 1, 0, '2017-03-29 09:31:34', ''),
(172, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 2810.00, 0, 1, 0, '2017-03-29 09:32:03', ''),
(173, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 3010.00, 0, 1, 0, '2017-03-29 09:50:03', ''),
(174, 2, 0.00, 0.00, 2800.00, 0.00, 50.00, 2960.00, 0, 1, 0, '2017-03-29 09:50:44', ''),
(175, 2, 0.00, 0.00, 2800.00, 0.00, 50.00, 2910.00, 0, 1, 0, '2017-03-29 09:51:18', ''),
(176, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2890.00, 0, 1, 0, '2017-03-29 10:41:31', ''),
(177, 2, 0.00, 0.00, 2800.00, 0.00, 50.00, 2840.00, 0, 1, 0, '2017-03-29 10:43:02', ''),
(178, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2820.00, 0, 1, 0, '2017-03-29 10:45:08', ''),
(179, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2790.00, 0, 1, 0, '2017-03-29 10:51:17', ''),
(180, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2770.00, 0, 1, 0, '2017-03-29 10:51:39', ''),
(181, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2750.00, 0, 1, 0, '2017-03-29 11:20:05', ''),
(182, 7, 0.00, 0.00, 13580.00, 0.00, 50.00, 2700.00, 0, 1, 0, '2017-03-29 11:21:12', ''),
(183, 10, 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0, 1, 0, '2017-03-29 11:44:56', ''),
(184, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2800.00, 0, 1, 0, '2017-03-29 14:06:09', ''),
(185, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2780.00, 0, 1, 0, '2017-03-29 15:06:48', ''),
(186, 11, 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0, 1, 0, '2017-03-29 18:28:31', ''),
(187, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2760.00, 0, 1, 0, '2017-03-29 21:08:40', ''),
(188, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2740.00, 0, 1, 0, '2017-03-30 15:03:34', ''),
(189, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2720.00, 0, 1, 0, '2017-03-30 15:10:14', ''),
(190, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2700.00, 0, 1, 0, '2017-03-30 15:35:33', ''),
(191, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2680.00, 0, 1, 0, '2017-03-30 22:47:08', ''),
(192, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2660.00, 0, 1, 0, '2017-03-30 23:05:25', ''),
(193, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2640.00, 0, 1, 0, '2017-03-30 23:09:38', ''),
(194, 2, 0.00, 0.00, 2800.00, 0.00, 50.00, 2590.00, 0, 1, 0, '2017-03-30 23:32:34', ''),
(195, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2570.00, 0, 1, 0, '2017-03-30 23:44:27', ''),
(196, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2550.00, 0, 1, 0, '2017-03-30 23:44:56', ''),
(197, 7, 0.00, 0.00, 13580.00, 0.00, 20.00, 2680.00, 0, 1, 0, '2017-04-02 19:54:56', ''),
(198, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2530.00, 0, 1, 0, '2017-04-03 13:26:31', ''),
(199, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2510.00, 0, 1, 0, '2017-04-03 13:31:37', ''),
(200, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2490.00, 0, 1, 0, '2017-04-03 13:38:21', ''),
(201, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2470.00, 0, 1, 0, '2017-04-03 17:29:11', ''),
(202, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2450.00, 0, 1, 0, '2017-04-07 14:05:44', ''),
(203, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2430.00, 0, 1, 0, '2017-04-07 15:57:44', ''),
(204, 12, 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0, 1, 0, '2017-04-08 09:28:26', ''),
(205, 2, 0.00, 0.00, 2800.00, 0.00, 20.00, 2410.00, 0, 1, 0, '2017-04-08 10:01:43', ''),
(206, 2, 0.00, 0.00, 2800.00, 0.00, 50.00, 2360.00, 0, 1, 0, '2017-04-08 10:07:03', ''),
(207, 2, 0.00, 0.00, 2800.00, 0.00, 50.00, 2310.00, 0, 1, 0, '2017-04-08 10:08:03', ''),
(208, 2, 0.00, 0.00, 2800.00, 0.00, 50.00, 2260.00, 0, 1, 0, '2017-04-08 10:10:38', '');

-- --------------------------------------------------------

--
-- 表的结构 `qh_admin`
--

CREATE TABLE IF NOT EXISTS `qh_admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '名称',
  `pwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `qh_admin`
--

INSERT INTO `qh_admin` (`id`, `name`, `pwd`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `qh_article`
--

CREATE TABLE IF NOT EXISTS `qh_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` smallint(5) unsigned NOT NULL COMMENT '分类id',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '文章标题',
  `subtitle` varchar(200) NOT NULL DEFAULT '' COMMENT '副标题',
  `intro` varchar(500) NOT NULL DEFAULT '' COMMENT '简介',
  `content` text COMMENT '内容',
  `author` varchar(20) NOT NULL DEFAULT '' COMMENT '作者',
  `copyfrom` varchar(20) NOT NULL DEFAULT '' COMMENT '来源',
  `inputer` varchar(20) NOT NULL DEFAULT '' COMMENT '录入者',
  `http_url` varchar(200) NOT NULL DEFAULT '' COMMENT '转向链接',
  `keyword` varchar(200) NOT NULL DEFAULT '' COMMENT '关键字',
  `hits` int(11) NOT NULL COMMENT '点击数',
  `add_time` datetime NOT NULL COMMENT '添加时间',
  `update_time` datetime NOT NULL COMMENT '更新时间',
  `create_time` datetime NOT NULL COMMENT '生成时间',
  `owner_tag` int(11) NOT NULL COMMENT '自定义属性',
  `owner_remark` varchar(1024) NOT NULL COMMENT '备注',
  `html_path` varchar(200) NOT NULL COMMENT 'html地址',
  `file_path` varchar(200) NOT NULL COMMENT '上传文件地址',
  `temp_path` varchar(200) NOT NULL COMMENT '模板地址',
  `thumb_img` varchar(200) NOT NULL COMMENT '缩略图地址',
  `img_path` varchar(200) NOT NULL COMMENT '图地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `qh_article`
--

INSERT INTO `qh_article` (`id`, `cid`, `title`, `subtitle`, `intro`, `content`, `author`, `copyfrom`, `inputer`, `http_url`, `keyword`, `hits`, `add_time`, `update_time`, `create_time`, `owner_tag`, `owner_remark`, `html_path`, `file_path`, `temp_path`, `thumb_img`, `img_path`) VALUES
(1, 8, '陶瓷', '', '', '谔谔谔谔谔谔谔谔谔谔谔谔谔谔谔谔', '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', '/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Public/kindeditor/attached/file/20170313', '', '', '/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Public/kindeditor/attached/image/20170313'),
(2, 15, '和田', '', '', '和田', '', '', '', '', '', 0, '2017-03-13 17:27:37', '2017-03-13 17:27:37', '2017-03-13 17:27:37', 0, '', '', '/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Public/kindeditor/attached/file/20170313', '', '', '/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Public/kindeditor/attached/image/20170313'),
(3, 13, '1', '', '', '', '', '', '', '', '', 0, '2017-03-13 17:51:58', '2017-03-13 17:51:58', '2017-03-13 17:51:58', 0, '', '', '', '', '', ''),
(4, 16, '2', '', '', '', '', '', '', '', '', 0, '2017-03-13 17:53:41', '2017-03-13 17:53:41', '2017-03-13 17:53:41', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `qh_category`
--

CREATE TABLE IF NOT EXISTS `qh_category` (
  `cid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cname` char(20) NOT NULL DEFAULT '' COMMENT '分类名称',
  `keywords` varchar(120) NOT NULL DEFAULT '' COMMENT '分类关键字',
  `title` varchar(60) NOT NULL DEFAULT '' COMMENT '分类标题',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '分类描述',
  `sort` smallint(5) unsigned NOT NULL COMMENT '排序',
  `display` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  UNIQUE KEY `cid_UNIQUE` (`cid`),
  UNIQUE KEY `cname_UNIQUE` (`cname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='分类表' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `qh_category`
--

INSERT INTO `qh_category` (`cid`, `cname`, `keywords`, `title`, `description`, `sort`, `display`, `pid`) VALUES
(7, '核心技术', '', '', '', 0, 1, 0),
(8, '陶瓷识别', '', '', '', 0, 1, 7),
(10, '公司与团队', '', '', '', 0, 1, 0),
(11, '帮助中心', '', '', '', 0, 1, 0),
(13, '青铜识别', '', '', '', 0, 1, 7),
(14, '铜镜识别', '', '', '', 0, 1, 7),
(15, '和田玉籽料识别', '', '', '', 0, 1, 7),
(16, '识别库介绍', '', '', '', 0, 1, 11),
(17, '评估库介绍', '', '', '', 0, 1, 11),
(18, '设备使用', '', '', '', 0, 1, 11),
(19, '充值活动', '', '', '', 0, 1, 11);

-- --------------------------------------------------------

--
-- 表的结构 `qh_goods`
--

CREATE TABLE IF NOT EXISTS `qh_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '商品名',
  `pictures` varchar(255) NOT NULL COMMENT '图片信息',
  `infos` varchar(255) NOT NULL COMMENT '动态信息',
  `detail` varchar(255) NOT NULL COMMENT '藏品描述信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品表' AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qh_goods`
--


-- --------------------------------------------------------

--
-- 表的结构 `qh_info`
--

CREATE TABLE IF NOT EXISTS `qh_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `phone` varchar(20) NOT NULL COMMENT '电话',
  `addr` varchar(200) NOT NULL COMMENT '地址',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='物品寄送信息' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `qh_info`
--

INSERT INTO `qh_info` (`id`, `name`, `phone`, `addr`, `status`) VALUES
(1, 'zhangsan', '1234', '12345', 1),
(2, 'eeee', 'hhhh', 'bbbb', 1),
(3, '4', '5', '6', 0),
(4, '56', '77', '88', 0);

-- --------------------------------------------------------

--
-- 表的结构 `qh_member`
--

CREATE TABLE IF NOT EXISTS `qh_member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pwd` char(32) NOT NULL,
  `phone` varchar(20) NOT NULL DEFAULT '‘’',
  `autoLogin` tinyint(1) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员表' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `qh_member`
--

INSERT INTO `qh_member` (`id`, `name`, `pwd`, `phone`, `autoLogin`, `time`) VALUES
(7, '', 'e10adc3949ba59abbe56e057f20f883e', '13231986087', 0, '2017-03-24 16:53:52'),
(2, '', '95252152bcaf8df9837dba2a5ab5f9ba', '18910122231', 0, '2017-03-21 09:11:39'),
(3, '', '25d55ad283aa400af464c76d713c07ad', '13911866553', 0, '2017-03-29 08:52:56'),
(4, '', 'c1b6789cf0e874449acd8e3ce8cc6e75', '13911775570', 0, '2017-03-23 00:46:17'),
(5, '', '593bcfd26f0555a5293cd11871851d44', '13401030445', 0, '2017-03-23 08:27:05'),
(6, '', 'd41d8cd98f00b204e9800998ecf8427e', '15101168229', 0, '2017-03-23 16:01:17'),
(8, '', '9ccf2b4af378ca405c7769f3d3cd98f3', '18513959625', 0, '2017-03-27 21:18:37'),
(9, '', 'e10adc3949ba59abbe56e057f20f883e', '13088888888888', 0, '2017-03-28 09:24:32'),
(10, '', 'e10adc3949ba59abbe56e057f20f883e', '18810019197', 0, '2017-03-29 11:44:56'),
(11, '', '25d55ad283aa400af464c76d713c07ad', '18510011582', 0, '2017-03-29 18:28:31'),
(12, '', '86af9de06e65ce9045108ccd5337b01a', '15810140004', 0, '2017-04-08 09:28:26');

-- --------------------------------------------------------

--
-- 表的结构 `qh_order`
--

CREATE TABLE IF NOT EXISTS `qh_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `orderNum` varchar(20) NOT NULL COMMENT '订单编号',
  `goodName` varchar(50) NOT NULL COMMENT '商品名',
  `amount` decimal(11,2) NOT NULL COMMENT '订单金额',
  `num` int(11) NOT NULL COMMENT '商品数量',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '订单状态',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '时间戳',
  `mid` int(11) NOT NULL COMMENT '会员id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='订单表' AUTO_INCREMENT=72 ;

--
-- 转存表中的数据 `qh_order`
--

INSERT INTO `qh_order` (`id`, `orderNum`, `goodName`, `amount`, `num`, `status`, `time`, `mid`) VALUES
(1, '201703221639166876', '铜镜', 20.00, 0, 0, '2017-03-22 16:39:16', 1),
(2, '201703231145452860', '陶瓷', 20.00, 0, 0, '2017-03-23 11:45:45', 2),
(3, '201703231150283282', '陶瓷', 20.00, 0, 0, '2017-03-23 11:50:28', 2),
(4, '201703231500463234', '铜镜', 20.00, 0, 0, '2017-03-23 15:00:46', 1),
(5, '201703231501212788', '陶瓷', 20.00, 0, 0, '2017-03-23 15:01:21', 1),
(6, '201703231542115270', '陶瓷', 20.00, 0, 0, '2017-03-23 15:42:11', 1),
(7, '201703231636476309', '陶瓷', 20.00, 0, 0, '2017-03-23 16:36:47', 1),
(8, '201703231653467456', '陶瓷', 20.00, 0, 0, '2017-03-23 16:53:46', 1),
(9, '201703231656505297', '陶瓷', 20.00, 0, 0, '2017-03-23 16:56:50', 1),
(10, '201703231657575675', '陶瓷', 20.00, 0, 0, '2017-03-23 16:57:57', 1),
(11, '201703231659144010', '陶瓷', 20.00, 0, 0, '2017-03-23 16:59:14', 1),
(12, '201703231935136776', '陶瓷', 20.00, 0, 0, '2017-03-23 19:35:13', 2),
(13, '201703240915042305', '铜镜', 20.00, 0, 0, '2017-03-24 09:15:04', 1),
(14, '201703241508309458', '陶瓷', 20.00, 0, 0, '2017-03-24 15:08:30', 7),
(15, '201703241511521778', '陶瓷', 20.00, 0, 0, '2017-03-24 15:11:52', 7),
(16, '201703241517017025', '陶瓷', 20.00, 0, 0, '2017-03-24 15:17:01', 7),
(17, '201703241517598567', '陶瓷', 20.00, 0, 0, '2017-03-24 15:17:59', 7),
(18, '201703241518021888', '陶瓷', 20.00, 0, 0, '2017-03-24 15:18:02', 7),
(19, '201703241518103118', '陶瓷', 20.00, 0, 0, '2017-03-24 15:18:10', 7),
(20, '201703241522094787', '青铜器', 20.00, 0, 0, '2017-03-24 15:22:09', 7),
(21, '201703241526279459', '陶瓷', 20.00, 0, 0, '2017-03-24 15:26:27', 7),
(22, '201703241549531860', '铜镜', 20.00, 0, 0, '2017-03-24 15:49:53', 7),
(23, '201703241550016520', '陶瓷', 20.00, 0, 0, '2017-03-24 15:50:01', 7),
(24, '201703241550074556', '铜镜', 20.00, 0, 0, '2017-03-24 15:50:07', 7),
(25, '201703241550129324', '铜镜', 20.00, 0, 0, '2017-03-24 15:50:12', 7),
(26, '201703241550425668', '陶瓷', 20.00, 0, 0, '2017-03-24 15:50:42', 7),
(27, '201703241550516411', '铜镜', 20.00, 0, 0, '2017-03-24 15:50:51', 7),
(28, '201703241551023267', '铜镜', 20.00, 0, 0, '2017-03-24 15:51:02', 7),
(29, '201703241551085028', '青铜器', 20.00, 0, 0, '2017-03-24 15:51:08', 7),
(30, '201703241551173415', '铜镜', 20.00, 0, 0, '2017-03-24 15:51:17', 7),
(31, '20170324155140485', '铜镜', 20.00, 0, 0, '2017-03-24 15:51:40', 7),
(32, '201703241749266201', '陶瓷', 20.00, 0, 0, '2017-03-24 17:49:26', 7),
(33, '201703252220332310', '青铜器', 20.00, 0, 0, '2017-03-25 22:20:33', 7),
(34, '201703270919334645', '铜镜', 20.00, 0, 0, '2017-03-27 09:19:33', 7),
(35, '201703270925008460', '陶瓷', 20.00, 0, 0, '2017-03-27 09:25:00', 7),
(36, '201703270925129634', '陶瓷', 20.00, 0, 0, '2017-03-27 09:25:12', 7),
(37, '201703270925226843', '陶瓷', 20.00, 0, 0, '2017-03-27 09:25:22', 7),
(38, '201703271031133674', '陶瓷', 20.00, 0, 0, '2017-03-27 10:31:13', 7),
(39, '201703271031282157', '陶瓷', 20.00, 0, 0, '2017-03-27 10:31:28', 7),
(40, '201703271336462088', '陶瓷', 20.00, 0, 0, '2017-03-27 13:36:46', 7),
(41, '201703271453387514', '陶瓷', 20.00, 0, 0, '2017-03-27 14:53:38', 7),
(42, '201703271514571840', '陶瓷', 20.00, 0, 0, '2017-03-27 15:14:57', 2),
(43, '201703271523135479', '陶瓷', 20.00, 0, 0, '2017-03-27 15:23:13', 7),
(44, '201703271523401169', '陶瓷', 20.00, 0, 0, '2017-03-27 15:23:40', 2),
(45, '201703271525583627', '陶瓷', 20.00, 0, 0, '2017-03-27 15:25:58', 7),
(46, '201703271527559513', '陶瓷', 20.00, 0, 0, '2017-03-27 15:27:55', 7),
(47, '201703271535493534', '陶瓷', 20.00, 0, 0, '2017-03-27 15:35:49', 7),
(48, '201703271610085863', '陶瓷', 20.00, 0, 0, '2017-03-27 16:10:08', 7),
(49, '201703271639209508', '铜镜', 20.00, 0, 0, '2017-03-27 16:39:20', 7),
(50, '201703271640413298', '铜镜', 20.00, 0, 0, '2017-03-27 16:40:41', 7),
(51, '201703271640485191', '陶瓷', 20.00, 0, 0, '2017-03-27 16:40:48', 7),
(52, '201703272131226864', '陶瓷', 20.00, 0, 0, '2017-03-27 21:31:22', 2),
(53, '201703281509166199', '陶瓷', 20.00, 0, 0, '2017-03-28 15:09:16', 7),
(54, '201703281511091046', '陶瓷', 20.00, 0, 0, '2017-03-28 15:11:09', 7),
(55, '201703281529516392', '陶瓷', 20.00, 0, 0, '2017-03-28 15:29:51', 2),
(56, '201703281554139140', '陶瓷', 20.00, 0, 0, '2017-03-28 15:54:13', 7),
(57, '201703281557017020', '陶瓷', 20.00, 0, 0, '2017-03-28 15:57:01', 7),
(58, '201703281602064455', '陶瓷', 20.00, 0, 0, '2017-03-28 16:02:06', 7),
(59, '201703281602556949', '陶瓷', 20.00, 0, 0, '2017-03-28 16:02:55', 7),
(60, '201703281605517002', '陶瓷', 20.00, 0, 0, '2017-03-28 16:05:51', 7),
(61, '201703281606275016', '陶瓷', 20.00, 0, 0, '2017-03-28 16:06:27', 7),
(62, '201703281611492854', '铜镜', 20.00, 0, 0, '2017-03-28 16:11:49', 2),
(63, '201703281615179528', '陶瓷', 20.00, 0, 0, '2017-03-28 16:15:17', 7),
(64, '201703281615496007', '陶瓷', 20.00, 0, 0, '2017-03-28 16:15:49', 7),
(65, '201703281647243495', '陶瓷', 20.00, 0, 0, '2017-03-28 16:47:24', 7),
(66, '201703281750193605', '铜镜', 20.00, 0, 0, '2017-03-28 17:50:19', 2),
(67, '201703281751416422', '陶瓷', 20.00, 0, 0, '2017-03-28 17:51:41', 2),
(68, '201703281752071596', '陶瓷', 20.00, 0, 0, '2017-03-28 17:52:07', 2),
(69, '201703290903586038', '陶瓷', 20.00, 0, 0, '2017-03-29 09:03:58', 7),
(70, '201703290950038134', '陶瓷', 20.00, 0, 0, '2017-03-29 09:50:03', 2),
(71, '20170402195456924', '陶瓷', 20.00, 0, 0, '2017-04-02 19:54:56', 7);
