-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-08-30 05:57:47
-- サーバのバージョン： 10.4.18-MariaDB
-- PHP のバージョン: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kintaikanri`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kintai`
--

CREATE TABLE `kintai` (
  `userid` int(11) NOT NULL,
  `start_work` varchar(128) NOT NULL,
  `end_work` varchar(128) NOT NULL,
  `absence` varchar(500) NOT NULL,
  `half_holiday` varchar(128) NOT NULL,
  `absence_day` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `kintai`
--

INSERT INTO `kintai` (`userid`, `start_work`, `end_work`, `absence`, `half_holiday`, `absence_day`) VALUES
(4258, '2021-08-27 14:49:43', '', '', '', ''),
(5467, '', '', '', '', ''),
(7777, '2021-08-27 14:56:05', '', '', '', ''),
(9999, '2021-08-28 01:26:44', '2021-08-27 15:35:25', 'ワクチン接種のため欠勤致します。', '2021-08-28 00:45:47', '2021年08月30日');

-- --------------------------------------------------------

--
-- テーブルの構造 `kintaim`
--

CREATE TABLE `kintaim` (
  `name` varchar(20) NOT NULL,
  `userid` int(4) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `kintaim`
--

INSERT INTO `kintaim` (`name`, `userid`, `pass`) VALUES
('USER(1)', 4258, 'abc123');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kintai`
--
ALTER TABLE `kintai`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- テーブルのインデックス `kintaim`
--
ALTER TABLE `kintaim`
  ADD UNIQUE KEY `password` (`pass`,`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
