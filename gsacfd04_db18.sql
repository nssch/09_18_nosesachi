-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 
-- サーバのバージョン： 10.4.6-MariaDB
-- PHP のバージョン: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacfd04_db18`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `hoshi` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `hoshi`, `indate`) VALUES
(2, 'book2', 'bbb@vvv.xx', '悪い', '', '2019-10-05 17:43:56'),
(3, 'book5', 'bbbbb@sss.xx', '悪い', '', '2019-10-05 17:45:43'),
(4, 'book9', 'krydb@www.xx', '非常に良い', '', '2019-10-05 17:46:42'),
(5, 'book12', 'hjdhfa@nnnz.xx', '非常に良い', '', '2019-10-05 17:50:20'),
(6, 'おおおおおおお', 'https://jgvkjb', 'あああああああ', '', '2019-10-08 00:17:16'),
(7, 'あいうえお', 'https://fgneitrgj.hf', '面白い', '', '2019-10-08 11:25:10'),
(8, 'いいいいいい', 'https://jgvkjb', 'うううううううううう', '4', '2019-10-08 23:47:26'),
(9, 'おいうういお', 'https://fgneitrgj.hf', 'ういおういおうお', '2', '2019-10-08 23:54:38');

-- --------------------------------------------------------

--
-- テーブルの構造 `php02_table`
--

CREATE TABLE `php02_table` (
  `id` int(12) NOT NULL,
  `task` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php02_table`
--

INSERT INTO `php02_table` (`id`, `task`, `deadline`, `comment`, `indate`) VALUES
(1, 'kadai1', '2019-10-06', 'test', '2019-10-05 15:54:05'),
(2, 'kadai2', '2019-10-07', 'testtest', '2019-10-05 15:55:21'),
(3, 'kadai3', '2019-10-09', 'testtest', '2019-10-05 15:58:19'),
(4, 'kadai4', '2019-10-10', 'testtesttest', '2019-10-05 15:58:52'),
(5, 'kadai5', '2019-10-11', 'test', '2019-10-05 15:59:26'),
(6, 'kadai6', '2019-10-12', 'testtest', '2019-10-05 15:59:50'),
(7, 'kadai7', '2019-10-13', 'testtesttest', '2019-10-05 16:00:13'),
(8, 'kadai8', '2019-10-14', 'test', '2019-10-05 16:00:37'),
(9, 'kadai9', '2019-10-15', 'testtesttesttest', '2019-10-05 16:01:08'),
(10, 'kadai10', '2019-10-16', 'testtesttesttesttest', '2019-10-05 16:01:30'),
(11, 'ssssss', '2019-10-03', 'aaaaaaaaaa', '2019-10-05 16:51:32'),
(12, 'kkkk', '2019-10-02', 'vvvvvvvv', '2019-10-05 16:51:50'),
(13, 'さち', '2019-10-02', 'あああああ', '2019-10-05 16:52:35'),
(14, 'あやね', '2019-10-01', 'おおおお', '2019-10-05 16:54:10');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `php02_table`
--
ALTER TABLE `php02_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルのAUTO_INCREMENT `php02_table`
--
ALTER TABLE `php02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
