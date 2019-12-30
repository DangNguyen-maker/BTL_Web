-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2019 lúc 03:30 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id12091386_btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classroom`
--

CREATE TABLE `classroom` (
  `id` int(11) NOT NULL,
  `NAME` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classroom`
--

INSERT INTO `classroom` (`id`, `NAME`) VALUES
(1, '123-A1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`) VALUES
(1, 'CÔNG BỐ QUYẾT ĐỊNH BỔ NHIỆM VIÊN CHỨC QUẢN LÝ CẤP BỘ MÔN KHOA CNTT', 'Trong những ngày đầu tháng 1 năm 2019, thừa ủy quyền của Hiệu trưởng trường Đại học Thủy Lợi, Đảng ủy - Ban Chủ nhiệm khoa Công nghệ thông tin đã tiến hành trao quyết định bổ nhiệm chức vụ Trưởng Bộ môn Toán học cho TS Nguyễn Hữu Thọ, Phó trưởng Bộ môn Toán học cho TS Đỗ Lân, Phó trưởng Bộ môn Hệ thống thông tin đối với TS Trần Mạnh Tuấn, Khoa Công nghệ thông tin.', 'new1.jpg'),
(2, 'Danh sách ứng viên được đề nghị bổ nhiệm chức danh giáo sư, phó giáo sư năm 2019', 'Trường Đại học Thủy lợi thông báo Danh sách ứng viên được đề nghị bổ nhiệm chức danh giáo sư, phó giáo sư năm 2019.', 'new2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DESCRIBE_PLANTS` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, 'CÔNG NGHỆ WEB'),
(2, 'TIN ĐẠI CƯƠNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teaching_schedule`
--

CREATE TABLE `teaching_schedule` (
  `id` int(11) NOT NULL,
  `id_subject` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_classroom` int(11) DEFAULT NULL,
  `hocky` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namhoc` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giaidoan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TGBD` date DEFAULT NULL,
  `TGKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teaching_schedule`
--

INSERT INTO `teaching_schedule` (`id`, `id_subject`, `id_user`, `id_classroom`, `hocky`, `namhoc`, `giaidoan`, `TGBD`, `TGKT`) VALUES
(1, 1, 1, 1, '1', '2019-2020', '1', '2019-01-01', '2019-06-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `LEVEL` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `LEVEL`) VALUES
(1, 'admin', '123456', 0),
(2, 'giangvien', '123456', 1),
(3, 'quantri', '123456', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NAME` (`NAME`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `teaching_schedule`
--
ALTER TABLE `teaching_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_classroom` (`id_classroom`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `classroom`
--
ALTER TABLE `classroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `teaching_schedule`
--
ALTER TABLE `teaching_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `teaching_schedule`
--
ALTER TABLE `teaching_schedule`
  ADD CONSTRAINT `teaching_schedule_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `teaching_schedule_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `teaching_schedule_ibfk_3` FOREIGN KEY (`id_classroom`) REFERENCES `classroom` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
