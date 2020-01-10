-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2020 lúc 11:41 AM
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
-- Cơ sở dữ liệu: `btl_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `classId` smallint(5) UNSIGNED NOT NULL,
  `className` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classYear` year(4) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `stage` tinyint(4) NOT NULL,
  `subjectId` smallint(5) UNSIGNED NOT NULL,
  `teacherId` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `major`
--

CREATE TABLE `major` (
  `majorId` smallint(5) UNSIGNED NOT NULL,
  `majorName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `majorDes` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `major`
--

INSERT INTO `major` (`majorId`, `majorName`, `majorDes`) VALUES
(2019, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `newId` int(8) UNSIGNED NOT NULL,
  `newTitle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `newImage` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`newId`, `newTitle`, `newContent`, `newImage`) VALUES
(1, 'CÔNG BỐ QUYẾT ĐỊNH BỔ NHIỆM VIÊN CHỨC QUẢN LÝ CẤP BỘ MÔN KHOA CNTT', 'Trong những ngày đầu tháng 1 năm 2019, thừa ủy quyền của Hiệu trưởng trường Đại học Thủy Lợi, Đảng ủy - Ban Chủ nhiệm khoa Công nghệ thông tin đã tiến hành trao quyết định bổ nhiệm chức vụ Trưởng Bộ môn Toán học cho TS Nguyễn Hữu Thọ, Phó trưởng Bộ môn Toán học cho TS Đỗ Lân, Phó trưởng Bộ môn Hệ thống thông tin đối với TS Trần Mạnh Tuấn, Khoa Công nghệ thông tin.', 'new1.jpg'),
(3, 'Danh sách ứng viên được đề nghị bổ nhiệm chức danh giáo sư, phó giáo sư năm 2019', 'Trường Đại học Thủy lợi thông báo Danh sách ứng viên được đề nghị bổ nhiệm chức danh giáo sư, phó giáo sư năm 2019.', 'new2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subjects`
--

CREATE TABLE `subjects` (
  `subjectId` smallint(5) UNSIGNED NOT NULL,
  `subjectName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectDes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `majorId` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subjects`
--

INSERT INTO `subjects` (`subjectId`, `subjectName`, `subjectDes`, `majorId`) VALUES
(100, '', '', 2019);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teaching`
--

CREATE TABLE `teaching` (
  `teachingId` smallint(5) UNSIGNED NOT NULL,
  `Lesson` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `classId` smallint(5) UNSIGNED NOT NULL,
  `teacherId` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachingplan`
--

CREATE TABLE `teachingplan` (
  `teachingplanId` smallint(5) UNSIGNED NOT NULL,
  `Lesson` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `classId` smallint(5) UNSIGNED NOT NULL,
  `teacherId` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userId` mediumint(8) UNSIGNED NOT NULL,
  `userName` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` datetime NOT NULL,
  `userLevel` tinyint(4) NOT NULL,
  `majorId` smallint(5) UNSIGNED NOT NULL,
  `subjectId` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userId`, `userName`, `email`, `password`, `code`, `registration_date`, `userLevel`, `majorId`, `subjectId`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '123654', '2020-01-10 00:00:00', 0, 2019, 100);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classId`),
  ADD KEY `subjectId` (`subjectId`),
  ADD KEY `teacherId` (`teacherId`);

--
-- Chỉ mục cho bảng `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`majorId`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newId`);

--
-- Chỉ mục cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectId`),
  ADD KEY `majorId` (`majorId`);

--
-- Chỉ mục cho bảng `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`teachingId`),
  ADD KEY `classId` (`classId`),
  ADD KEY `teacherId` (`teacherId`);

--
-- Chỉ mục cho bảng `teachingplan`
--
ALTER TABLE `teachingplan`
  ADD PRIMARY KEY (`teachingplanId`),
  ADD KEY `classId` (`classId`),
  ADD KEY `teacherId` (`teacherId`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `majorId` (`majorId`),
  ADD KEY `subjectId` (`subjectId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `classId` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `major`
--
ALTER TABLE `major`
  MODIFY `majorId` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `newId` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectId` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `teaching`
--
ALTER TABLE `teaching`
  MODIFY `teachingId` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `teachingplan`
--
ALTER TABLE `teachingplan`
  MODIFY `teachingplanId` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userId` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`subjectId`) REFERENCES `subjects` (`subjectId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`teacherId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`majorId`) REFERENCES `major` (`majorId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `teaching`
--
ALTER TABLE `teaching`
  ADD CONSTRAINT `teaching_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `class` (`classId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teaching_ibfk_2` FOREIGN KEY (`teacherId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `teachingplan`
--
ALTER TABLE `teachingplan`
  ADD CONSTRAINT `teachingplan_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `class` (`classId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teachingplan_ibfk_2` FOREIGN KEY (`teacherId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`majorId`) REFERENCES `major` (`majorId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`subjectId`) REFERENCES `subjects` (`subjectId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
