-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 03 月 10 日 09:25
-- 服务器版本: 5.6.21
-- PHP 版本: 5.4.34

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
  `time` timestamp NOT NULL COMMENT '时间戳',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `qh_account`
--

INSERT INTO `qh_account` (`id`, `mid`, `amount`, `consume`, `balance`, `amovoucher`, `convoucher`, `voucher`, `taocan`, `isshow`, `time`) VALUES
(1, 7, '100.00', '0.00', '100.00', '200.00', '0.00', '200.00', 1, 0, '2017-03-03 03:56:55'),
(2, 7, '600.00', '0.00', '700.00', '1000.00', '0.00', '1200.00', 3, 1, '2017-03-03 03:57:04'),
(3, 7, '3000.00', '0.00', '3700.00', '3000.00', '0.00', '4200.00', 5, 1, '2017-03-03 03:57:15'),
(4, 7, '3000.00', '0.00', '6700.00', '0.00', '0.00', '4200.00', 8, 1, '2017-03-03 04:03:03'),
(5, 7, '300.00', '0.00', '7000.00', '0.00', '0.00', '4200.00', 9, 1, '2017-03-03 05:45:09'),
(6, 7, '1000.00', '0.00', '8000.00', '0.00', '0.00', '4200.00', 9, 1, '2017-03-06 06:45:24'),
(7, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4180.00', 0, 1, '2017-03-07 02:33:34'),
(8, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4160.00', 0, 1, '2017-03-07 02:44:57'),
(9, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4140.00', 0, 1, '2017-03-07 02:47:21'),
(10, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4120.00', 0, 1, '2017-03-07 02:55:09'),
(11, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4100.00', 0, 1, '2017-03-07 02:58:39'),
(12, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4080.00', 0, 1, '2017-03-07 03:10:19'),
(13, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4060.00', 0, 1, '2017-03-07 03:11:18'),
(14, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4040.00', 0, 1, '2017-03-07 03:12:29'),
(15, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4020.00', 0, 1, '2017-03-07 03:26:50'),
(16, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '4000.00', 0, 1, '2017-03-07 03:32:34'),
(17, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3980.00', 0, 1, '2017-03-07 03:39:24'),
(18, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3960.00', 0, 1, '2017-03-07 03:44:27'),
(19, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3940.00', 0, 1, '2017-03-07 03:47:11'),
(20, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3920.00', 0, 1, '2017-03-07 04:01:16'),
(21, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3900.00', 0, 1, '2017-03-07 04:01:45'),
(22, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3880.00', 0, 1, '2017-03-07 04:03:53'),
(23, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3860.00', 0, 1, '2017-03-07 04:04:02'),
(24, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3840.00', 0, 1, '2017-03-07 04:04:50'),
(25, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3820.00', 0, 1, '2017-03-07 04:04:58'),
(26, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3800.00', 0, 1, '2017-03-07 08:55:35'),
(27, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3780.00', 0, 1, '2017-03-08 01:16:24'),
(28, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3760.00', 0, 1, '2017-03-08 03:08:37'),
(29, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3740.00', 0, 1, '2017-03-08 07:25:31'),
(30, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3720.00', 0, 1, '2017-03-08 08:12:02'),
(31, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3670.00', 0, 1, '2017-03-08 09:18:48'),
(32, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3620.00', 0, 1, '2017-03-08 09:20:31'),
(33, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3600.00', 0, 1, '2017-03-08 09:22:29'),
(34, 7, '0.00', '0.00', '8000.00', '0.00', '20.00', '3580.00', 0, 1, '2017-03-08 09:30:43'),
(35, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3530.00', 0, 1, '2017-03-08 09:32:01'),
(36, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3480.00', 0, 1, '2017-03-08 09:32:46'),
(37, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3430.00', 0, 1, '2017-03-08 09:45:34'),
(38, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3380.00', 0, 1, '2017-03-08 09:52:54'),
(39, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3330.00', 0, 1, '2017-03-08 10:01:05'),
(40, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3280.00', 0, 1, '2017-03-08 10:05:46'),
(41, 7, '0.00', '0.00', '8000.00', '0.00', '50.00', '3230.00', 0, 1, '2017-03-08 10:07:46');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品表' AUTO_INCREMENT=1 ;

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
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='会员表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `qh_member`
--

INSERT INTO `qh_member` (`id`, `name`, `pwd`, `phone`, `autoLogin`, `time`) VALUES
(1, '', 'e10adc3949ba59abbe56e057f20f883e', '13231986087', 1, '2017-03-09 09:18:59');

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
  `time` timestamp NOT NULL COMMENT '时间戳',
  `mid` int(11) NOT NULL COMMENT '会员id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- qh_category
-- 

CREATE  TABLE IF NOT EXISTS `qh_category` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` CHAR(20) NOT NULL DEFAULT '' COMMENT '分类名称' ,
  `keywords` VARCHAR(120) NOT NULL DEFAULT '' COMMENT '分类关键字' ,
  `title` VARCHAR(60) NOT NULL DEFAULT '' COMMENT '分类标题' ,
  `description` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '分类描述' ,
  `sort` SMALLINT UNSIGNED NOT NULL COMMENT '排序' ,
  `display` TINYINT UNSIGNED NOT NULL DEFAULT 1 COMMENT '是否显示' ,
  `pid` SMALLINT UNSIGNED NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`cid`) ,
  UNIQUE INDEX `cid_UNIQUE` (`cid` ASC) ,
  UNIQUE INDEX `cname_UNIQUE` (`cname` ASC) )
ENGINE = InnoDB
COMMENT = '分类表';

-- 
-- qh_admin
-- 
CREATE  TABLE IF NOT EXISTS `qh_admin` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '名称' ,
  `pwd` char(32) NOT NULL DEFAULT '' COMMENT '密码' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = '管理员';

-- 
-- qh_content
-- 

CREATE  TABLE IF NOT EXISTS `qh_article` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cid` SMALLINT UNSIGNED NOT NULL COMMENT '分类id'  ,
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '文章标题' ,
  `subtitle` varchar(200) NOT NULL DEFAULT '' COMMENT '副标题' ,
  `intro` varchar(500) NOT NULL DEFAULT '' COMMENT '简介' ,
  `content` text COMMENT '内容' ,
  `author` varchar(20) NOT NULL DEFAULT '' COMMENT '作者' ,
  `copyfrom` varchar(20) NOT NULL DEFAULT '' COMMENT '来源' ,
  `inputer` varchar(20) NOT NULL DEFAULT '' COMMENT '录入者' ,
  `http_url` varchar(200) NOT NULL DEFAULT '' COMMENT '转向链接' ,
  `keyword` varchar(200) NOT NULL DEFAULT '' COMMENT '关键字' ,
  `hits` int NOT NULL COMMENT '点击数' ,
  `add_time` datetime NOT NULL  COMMENT '添加时间' ,
  `update_time` datetime NOT NULL  COMMENT '更新时间' ,
  `create_time` datetime NOT NULL  COMMENT '生成时间' ,
  `owner_tag` int NOT NULL COMMENT '自定义属性' ,
  `owner_remark` varchar(1024) NOT NULL COMMENT '备注' ,
  `html_path` varchar(200) NOT NULL COMMENT 'html地址' ,
  `file_path` varchar(200) NOT NULL COMMENT '上传文件地址' ,
  `temp_path` varchar(200) NOT NULL COMMENT '模板地址' ,
  `thumb_img` varchar(200) NOT NULL COMMENT '缩略图地址' ,
  `path_img` varchar(200) NOT NULL COMMENT '图地址' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = '文章表';



-- 物品寄送信息qh_info

CREATE  TABLE IF NOT EXISTS `qh_info` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` varchar(30) NOT NULL COMMENT '姓名' ,
  `phone` varchar(20) NOT NULL COMMENT '电话' ,
  `addr` varchar(200) NOT NULL COMMENT '地址' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = '物品寄送信息';