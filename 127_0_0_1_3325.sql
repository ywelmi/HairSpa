-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3325
-- Thời gian đã tạo: Th9 17, 2021 lúc 03:09 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hairspa`
--
CREATE DATABASE IF NOT EXISTS `hairspa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hairspa`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cskh`
--

CREATE TABLE `cskh` (
  `MaPhanHoi` int(11) NOT NULL,
  `TenKhachHang` varchar(255) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL,
  `PhanHoi` varchar(255) DEFAULT NULL,
  `NhanVien` varchar(2555) DEFAULT NULL,
  `TinhTrang` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cskh`
--

INSERT INTO `cskh` (`MaPhanHoi`, `TenKhachHang`, `SDT`, `PhanHoi`, `NhanVien`, `TinhTrang`) VALUES
(1, 'Hải Linh', NULL, 'Tôi muốn đăng ký hội viên tại cơ sở Spa có được không ?', 'Hoàn toàn có thể. Hãy đến với spa của chúng tôi và đăng ký hội viên, hàng ngàn ưu đãi đang chờ bạn', b'1'),
(2, 'Ngọc Dung', '0155456235', 'Tôi có hứng thú với một số sản phẩm của cửa hàng, liệu tôi có thể đặt hàng online không', 'Vâng, hiện tại cửa hàng chúng tôi có hỗ trợ ship cod, tuy nhiên khách hàng sẽ phải chuyển khoản chi phí ship trước để đảm bảo hàng sẽ đến đúng thời gian địa điểm và có người nhận. Xin cảm ơn khách hàng đã quan tâm. Mọi thắc mắc thêm khách hàng có thể liên hệ với chúng tôi qua hotline của spa', b'1'),
(4, 'Phương Trang', NULL, 'Tôi muốn đổi ca sử dụng dịch vụ thì bằng cách nào', 'Chúng tôi có thể liên hệ với bạn để hỗ trợ sâu hơn ?', b'1'),
(5, 'Gia Hân', '0976584543', 'Tôi có nhu cầu sử dụng những sản phẩm của cửa hàng trong khi sử dụng dịch vụ có được không ?', '', b'0'),
(7, 'Phương Thảo', '0981064048', 'Tôi muốn hủy lịch được không', NULL, b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `csvc`
--

CREATE TABLE `csvc` (
  `MaVatChat` int(11) NOT NULL,
  `TenVatChat` varchar(255) DEFAULT NULL,
  `DonGia` varchar(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `avatar_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `csvc`
--

INSERT INTO `csvc` (`MaVatChat`, `TenVatChat`, `DonGia`, `SoLuong`, `avatar_img`) VALUES
(1, 'Ghế salon', '5000000', 12, 'http://localhost/Hair_Spa/img/vc1.jpg'),
(2, 'Máy sấy tóc', '500000', 19, 'http://localhost/Hair_Spa/img/vc2.jpg'),
(3, 'Bàn + Gương', '4000000', 10, 'http://localhost/Hair_Spa/img/vc3.jpg'),
(4, 'Lược', '50000', 30, NULL),
(5, 'Giường gội đầu', '7000000', 5, NULL),
(6, 'Máy tính', '20000000', 5, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) DEFAULT NULL,
  `sdt` varchar(11) NOT NULL,
  `dichvu` varchar(110) NOT NULL,
  `ca` int(11) NOT NULL,
  `ngay` varchar(255) DEFAULT NULL,
  `nhanvien` varchar(110) DEFAULT NULL,
  `ghichu` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`id`, `tenkh`, `sdt`, `dichvu`, `ca`, `ngay`, `nhanvien`, `ghichu`, `role`) VALUES
(1, 'Phương Thảo', '0332281426', 'Cắt tóc', 1, 'nay', NULL, 'Nhân viên thiếu', 0),
(2, 'Thanh Huyền', '0332281426', 'Nhuộm tóc', 2, 'mai', NULL, NULL, 1),
(3, 'Tâm Như', '0332281426', 'Gội đầu', 6, 'kia', NULL, NULL, 0),
(5, 'Hồng Ngọc', '0332281426', 'Phục hồi tóc', 5, 'nay', 'Neymar', NULL, 1),
(7, 'Thu Thủy', '0332281426', 'Tẩy tóc', 3, 'nay', 'Salah', NULL, 1),
(8, 'Thu Phương', '0332281426', 'Nối tóc', 4, 'mai', NULL, 'Hết sản phẩm', 0),
(9, 'Kim Anh', '0332281426', 'Cắt tóc', 10, 'nay', NULL, NULL, 0),
(10, 'Thu Hà', '0332281426', 'Uốn tóc', 12, 'mai', NULL, NULL, 0),
(13, 'Phương Mai', '0654982154', 'Nối tóc', 11, 'kia', NULL, NULL, 1),
(14, 'Ngọc Hương', '0213245675', 'Nhuộm tóc', 9, 'kia', 'Ronaldo', NULL, 1),
(17, 'Thanh Bình', '0654982154', 'Nhuộm tóc', 13, 'nay', NULL, NULL, 1),
(24, 'Thanh Bình', '0654982154', 'Phục hồi tóc', 1, 'kia', NULL, NULL, 0),
(25, 'Phương Hoa', '0985462156', 'Tẩy tóc', 8, 'mai', NULL, NULL, 0),
(26, 'Bảo Ngọc', '0145458652', 'Gội đầu', 7, 'mai', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoivien`
--

CREATE TABLE `hoivien` (
  `ID` tinyint(2) NOT NULL,
  `user` char(15) NOT NULL,
  `pw` char(16) NOT NULL,
  `HoTen` varchar(30) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `SDT` char(11) NOT NULL,
  `SoLanSD` int(2) NOT NULL,
  `avatar_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoivien`
--

INSERT INTO `hoivien` (`ID`, `user`, `pw`, `HoTen`, `NgaySinh`, `GioiTinh`, `SDT`, `SoLanSD`, `avatar_img`) VALUES
(1, 'pthaolb', '202710', 'Bùi Thị Phương Thảo ', '2000-10-20', 'Nữ', '0981064048', 3, 'http://localhost/Hair_Spa/img/72920857_181453079687516_6237635704684281856_n.jpg'),
(2, 'ngocanh', 'ngocanh', 'Vũ Thị Ngọc Ánh', '2000-02-13', 'Nữ', '036254288', 1, 'http://localhost/Hair_Spa/img/user.png'),
(3, 'tham08', '070820', 'Nguyễn Thị Thắm', '2000-08-07', 'Nữ', '0968742341', 0, 'http://localhost/Hair_Spa/img/user.png'),
(4, 'moc', '101020', 'Nông Thị Trang', '2000-10-10', 'Nữ', '0335472142', 2, 'http://localhost/Hair_Spa/img/user.png'),
(5, 'mococ', 'chilinh', 'Chu Thị Linh', '2000-09-18', 'Nữ', '0142568315', 1, 'http://localhost/Hair_Spa/img/user.png'),
(6, 'ngangao', '12112000', 'Nguyễn Thị Nga', '2000-11-12', 'Nữ', '0365428710', 1, 'http://localhost/Hair_Spa/img/user.png'),
(7, 'leminh', '27102000', 'Lê Quang Minh', '2000-10-27', 'Nam', '0332281426', 2, 'http://localhost/Hair_Spa/img/Avatar.jpg'),
(8, 'ngocuong', 'ngocuong', 'Ngô Quốc Cường', '2000-03-05', 'Nam', '0124765534', 0, 'http://localhost/Hair_Spa/img/user.png'),
(9, 'huulong', 'huulong', 'Nguyễn Hữu Long', '2000-10-30', 'Nam', '0452864955', 1, 'http://localhost/Hair_Spa/img/user.png'),
(10, 'chipu', '123456', 'Chi Pu', '1996-06-15', 'Nữ', '0213245675', 0, 'http://localhost/Hair_Spa/img/chipu.jpg'),
(12, 'haile', '123456', 'Hải Lê', '2007-01-05', 'Nam', '0213245675', 0, 'http://localhost/Hair_Spa/img/Hải.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listdichvu`
--

CREATE TABLE `listdichvu` (
  `id` int(11) NOT NULL,
  `tendichvu` varchar(255) DEFAULT NULL,
  `giatien` varchar(11) DEFAULT NULL,
  `mota` varchar(2555) DEFAULT NULL,
  `avatar_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `listdichvu`
--

INSERT INTO `listdichvu` (`id`, `tendichvu`, `giatien`, `mota`, `avatar_img`) VALUES
(1, 'Cắt tóc', '200K', 'MT HAIR SPA - Là 1 trong những địa chỉ cắt tóc đẹp quen thuộc của nhiều tín đồ mê làm đẹp, là điểm đến của nhiều nhân vật nổi tiếng Showbiz từ hotgirls, người mẫu, cho đến những Hoa Hậu, Á Hậu đều lựa chọn MT HAIR SPA để tạo những kiểu tóc hoàn hảo ngoài đời thường hay trong cả những sự kiện nổi tiếng', 'https://localhost/Hair_Spa/img/cattoc.png'),
(2, 'Nhuộm tóc', '300K', 'MT HAIR SPA - Là 1 trong những địa chỉ cắt tóc đẹp quen thuộc của nhiều tín đồ mê làm đẹp, là điểm đến của nhiều nhân vật nổi tiếng Showbiz từ hotgirls, người mẫu, cho đến những Hoa Hậu, Á Hậu đều lựa chọn MT HAIR SPA để tạo những kiểu tóc hoàn hảo ngoài đời thường hay trong cả những sự kiện nổi tiếng', 'https://localhost/Hair_Spa/img/nhuomtoc.jpg'),
(3, 'Uốn tóc', '500K', NULL, 'https://localhost/Hair_Spa/img/uontoc.jpg'),
(4, 'Duỗi tóc', '300K', NULL, 'https://localhost/Hair_Spa/img/duoitoc.jpg'),
(5, 'Phục hồi tóc', '400K', NULL, 'https://localhost/Hair_Spa/img/phuchoitoc.jpg'),
(6, 'Nối tóc', '350K', NULL, 'https://localhost/Hair_Spa/img/noitoc.jpg'),
(7, 'Gội đầu', '100K', NULL, 'https://localhost/Hair_Spa/img/goidau.jpg'),
(8, 'Tẩy tóc', '300K', NULL, 'https://localhost/Hair_Spa/img/taytoc.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'supporter', 'e10adc3949ba59abbe56e057f20f883e', 2),
(3, 'user1', 'e10adc3949ba59abbe56e057f20f883e', 4),
(4, 'cashier', 'e10adc3949ba59abbe56e057f20f883e', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhansu`
--

CREATE TABLE `nhansu` (
  `id` int(11) NOT NULL,
  `tennv` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `tuoi` tinyint(4) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `chucvu` varchar(255) DEFAULT NULL,
  `avatar_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhansu`
--

INSERT INTO `nhansu` (`id`, `tennv`, `dob`, `tuoi`, `sdt`, `chucvu`, `avatar_img`) VALUES
(1, 'Messi', '1987-06-15', 22, '0981034321', 'Nhân viên cắt tóc', 'http://localhost/Hair_Spa/img/messi.jpg'),
(2, 'Ronaldo', '1986-12-04', 23, '0483823921', 'Nhân viên nhuộm/uốn tóc', 'http://localhost/Hair_Spa/img/ronaldo.jpg'),
(3, 'Neymar', '1992-06-15', 21, '0954332213', 'Thu ngân', 'http://localhost/Hair_Spa/img/neymar.jpg'),
(4, 'Lewandowski', '1988-04-14', 26, '0934567821', 'CEO', 'http://localhost/Hair_Spa/img/lewandowski.jpg'),
(5, 'Salah', '1989-06-15', 25, '045687321', 'Nhân viên uốn/duỗi tóc', 'http://localhost/Hair_Spa/img/salah.jpg'),
(6, 'Mbappe', '1998-08-18', 20, '0432245673', 'Nhân viên hấp tóc/gội đầu', 'http://localhost/Hair_Spa/img/mbappe.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` tinyint(3) NOT NULL,
  `TenSP` varchar(100) DEFAULT NULL,
  `ThuongHieu` varchar(30) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `Anh` varchar(255) DEFAULT NULL,
  `Gia` int(10) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenSP`, `ThuongHieu`, `MoTa`, `Anh`, `Gia`, `SoLuong`) VALUES
(1, 'Kem ủ làm dày tóc Watsons', 'Watsons', 'Kem Ủ Làm Dày Tóc Watsons Chiết Xuất Bia 500ml\r\nKem Ủ Làm Dày Tóc Watsons Chiết Xuất Bia được sản xuất tại Thái Lan, mang đến cho bạn một bước chăm sóc tóc chuẩn salon ngay tại nhà mình. Kem ủ chứa các thành phần chuyên dụng cho việc dưỡng tóc, giúp tóc mềm mượt, khỏe mạnh và dày hơn.\r\nThành phần và công dụng:\r\n- Kem Ủ Làm Dày Tóc Watsons Chiết Xuất Bia được chiết xuất từ bia, protein lúa mì thủy phân và dưỡng chất biotin giúp cấu tạo tóc sẽ trở nên chắc khỏe hơn trông thấy.\r\n- Tinh chất bia kết hợp cùng biotin giúp tăng cường tuần hoàn máu, tích tụ dưỡng tóc cho mái tóc thêm dày, giảm rụng tóc hiệu quả.\r\n- Protein chiết xuất từ lúa mì thủy phân tóc tóc mềm mượn và khỏe mạnh.\r\n- Tổ hợp dưỡng chất chứa các thành phần dưỡng tóc, để tóc của bạn được nuôi dưỡng sâu, tái hydrat hóa và mềm mại.\r\n- Nhờ vào thành phần chứa hỗn hợp Protein thẩm thấu sâu tới tận từng tế bào tóc giúp tóc nhanh chóng được phục hồi. Mái tóc dần trở nên chắc khỏe và suôn mượt hơn.\r\nĐối tượng sử dụng:\r\nKem Ủ Làm Dày Tóc Watsons Chiết Xuất Bia thích hợp sử dụng cho hầu hết các loại tóc, đặc biệt sản phẩm phù hợp cho tóc khô xơ, hư tổn và mỏng.\r\nHướng dẫn sử dụng:\r\n- Gội sạch tóc.\r\n- Sau khi gội đầu, bạn dùng một lượng kem vừa đủ thoa lên tóc (tránh thoa lên da đầu), quấn một lớp khăn lông và ủ từ 10 đến 15 phút.\r\n- Sau đó xả sạch. Không cần dùng dầu xả.\r\n- Sử dụng thường xuyên để đạt hiệu quả như mong muốn.\"\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất\r\nXuất xứ: Thái Lan\r\nThông tin thương hiệu:\r\nWatsons là thương hiệu chăm sóc da và cơ thể đến từ Thái Lan. Được sản xuất từ những thành phần thiên nhiên, sản phẩm Watsons thân thiện với làn da và môi trường', 'https://localhost/Hair_Spa/img/sp1.png', 110000, 0),
(2, 'Kem ủ bóng mượt tóc Watsons', 'Watsons', 'Kem Ủ Bóng Mượt Tóc Watsons Chiết Xuất Sữa Chua được sản xuất tại Thái Lan, mang đến cho bạn một bước chăm sóc tóc chuẩn salon ngay tại nhà mình. Kem ủ chứa các thành phần chuyên dụng cho việc dưỡng tóc, giúp tóc mềm mượt, khỏe mạnh và dày hơn.\r\nThành phần và công dụng:\r\n- Kem Ủ Bóng Mượt Tóc Watsons Chiết Xuất Sữa Chua được chiết xuất sữa chua và dưỡng chất Pro-vitamin B5 giúp cấu tạo tóc sẽ trở nên chắc khỏe hơn, đẹp hơn.\r\n- Chiết xuất sữa chua kết hợp cùng biotin giúp tăng cường tuần hoàn máu, tích tụ dưỡng tóc cho mái tóc khỏe đẹp hơn.\r\n- Vitamin E được bổ sung trong kem ủ giúp giảm đáng kể việc tóc chẻ ngọn.\r\n- Tổ hợp dưỡng chất chứa các thành phần dưỡng tóc, để tóc của bạn được nuôi dưỡng sâu, giúp tóc hồi sinh và mượt mà hơn.\r\n- Nhờ vào thành phần chứa hỗn hợp dưỡng chất thẩm thấu sâu tới tận từng tế bào tóc giúp tóc nhanh chóng được phục hồi. Mái tóc dần trở nên chắc khỏe và suôn mượt hơn.\r\nĐối tượng sử dụng:\r\nKem Ủ Bóng Mượt Tóc Watsons Chiết Xuất Sữa Chua thích hợp sử dụng cho hầu hết các loại tóc, đặc biệt sản phẩm phù hợp cho tóc khô xơ, hư tổn và mỏng.\r\nHướng dẫn sử dụng:\r\n- Gội sạch tóc.\r\n- Sau khi gội đầu, bạn dùng một lượng kem vừa đủ thoa lên tóc (tránh thoa lên da đầu), quấn một lớp khăn lông và ủ từ 10 đến 15 phút.\r\n- Sau đó xả sạch. Không cần dùng dầu xả.\r\n- Sử dụng thường xuyên để đạt hiệu quả như mong muốn.\r\n- Để có kết quả tốt nhất, hãy sử dụng sau khi gội đầu bằng Dầu gội trị liệu chiết xuất Protein Sữa Watsons.\"\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất\r\nXuất xứ: Thái Lan\r\nThông tin thương hiệu:\r\nWatsons là thương hiệu chăm sóc da và cơ thể đến từ Thái Lan. Được sản xuất từ những thành phần thiên nhiên, sản phẩm Watsons thân thiện với làn da và môi trường.', 'https://localhost/Hair_Spa/img/sp2.png', 110000, 6),
(3, 'Kem ủ dưỡng ẩm cân bằng Watsons', 'Watsons', 'Kem Ủ Dưỡng Ẩm Cân Bằng Tóc Watsons Chiết Xuất Trái Bơ được sản xuất tại Thái Lan phù hợp cho mái tóc khô và yếu. Sản phẩm mang đến cho bạn một bước chăm sóc tóc chuẩn salon ngay tại nhà mình. Kem ủ chứa các thành phần chuyên dụng cho việc dưỡng tóc, giúp tóc mềm mượt, khỏe mạnh và dày hơn.\r\nThành phần và công dụng:\r\n- Kem Ủ Dưỡng Ẩm Cân Bằng Tóc Watsons Chiết Xuất Trái Bơ được chiết xuất từ tinh dầu quả bơ và dưỡng chất biotin giúp cấu tạo tóc sẽ trở nên chắc khỏe hơn, đẹp hơn.\r\n- Tinh chất từ quả bơ kết hợp cùng biotin giúp tăng cường tuần hoàn máu, tích tụ dưỡng tóc cho mái tóc khỏe đẹp hơn.\r\n- Vitamin E được bổ sung trong kem ủ giúp giảm đáng kể việc tóc chẻ ngọn.\r\n- Tổ hợp dưỡng chất chứa các thành phần dưỡng tóc, để tóc của bạn được nuôi dưỡng sâu, giúp tóc hồi sinh và mượt mà hơn.\r\n- Nhờ vào thành phần chứa hỗn hợp Protein thẩm thấu sâu tới tận từng tế bào tóc giúp tóc nhanh chóng được phục hồi. Mái tóc dần trở nên chắc khỏe và suôn mượt hơn.\r\nĐối tượng sử dụng:\r\nKem Ủ Dưỡng Ẩm Cân Bằng Tóc Watsons Chiết Xuất Trái Bơ thích hợp sử dụng cho hầu hết các loại tóc, đặc biệt sản phẩm phù hợp cho tóc khô xơ, hư tổn.\r\nHướng dẫn sử dụng:\r\n- Gội sạch tóc.\r\n- Sau khi gội đầu, bạn dùng một lượng kem vừa đủ thoa lên tóc (tránh thoa lên da đầu), quấn một lớp khăn lông và ủ từ 10 đến 15 phút.\r\n- Sau đó xả sạch. Không cần dùng dầu xả.\r\n- Sử dụng thường xuyên để đạt hiệu quả như mong muốn.\r\n- Để có kết quả tốt nhất, hãy sử dụng sau khi gội đầu bằng Dầu gội trị liệu chiết xuất quả bơ Watsons.\"\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất\r\nXuất xứ: Thái Lan\r\nThông tin thương hiệu:\r\nWatsons là thương hiệu chăm sóc da và cơ thể đến từ Thái Lan. Được sản xuất từ những thành phần thiên nhiên, sản phẩm Watsons thân thiện với làn da và môi trường.', 'https://localhost/Hair_Spa/img/sp2.png', 110000, 7),
(4, 'Dầu Gội Watsons Chiết Xuất Quả Bơ', 'Watsons', 'Dầu Gội  Watsons Chiết Xuất Quả Bơ 400ml là quà tặng dành cho những ai nâng niu mái tóc mình. Dầu gội được chiết xuất từ quả bơ thiên nhiên và vitamin, không chỉ làm sạch nhẹ nhàng mà còn giúp dưỡng ẩm hiệu quả cho mái tóc. Sản phẩm có xuất xứ từ Thái Lan, đảm bảo an toàn cho mái tóc bạn.\r\nThành phần và tác dụng:\r\n- Dầu Gội Dưỡng Ẩm Cân Bằng Watsons Chiết Xuất Quả Bơ chứa thành phần dưỡng ẩm sâu và giúp tóc mềm mượt.\r\n- Dầu bơ: giúp mềm mượt, dầu ô liu: giúp nuôi dưỡng, Vitamin E: giúp hạn chế sự chẻ ngọn.\r\n- Dầu gội đặc biệt cung cấp vitamin Pro B5 giúp phục hồi mái tóc xơ rối hiệu quả hơn.\r\n- Chiết xuất tinh dầu hoa giúp dưỡng ẩm cho da đầu, ngăn ngừa hư tổn từ bên trong giúp tóc khỏe mạnh từ gốc đến ngọn.\r\n- Sự kết hợp tinh túy giữa mật ong và hoa cỏ còn giúp lưu lại hương thơm nhẹ nhàng và quyến rũ trên mái tóc bồng bềnh của bạn.\r\nĐối tượng sử dụng:\r\nDầu Gội  Watsons Chiết Xuất Quả Bơ 400ml thích hợp sử dụng cho tất cả đối tượng nam và nữ, đặc biệt những người có mái tóc khô và chẻ ngọn.\r\nHướng dẫn sử dụng:\r\n- Làm tóc, cho một lượng vừa đủ Dầu Gội Watsons Chiết Xuất Quả Bơ 400ml vào tay và thoa đều lên tóc.\r\n- Massage tóc và da đầu nhẹ nhàng trong 10 phút. Dầu gội chỉ phát huy tác dụng khi được đánh bọt hoàn toàn\r\n- Bóp nhẹ và rũ sạch bọt trước khi xả kỹ bằng nước ấm/lạnh (không dùng nước nóng).\r\n- Lưu ý: rửa ngay lại bằng nước sạch khi dầu gội vào mắt.\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất\r\nXuất xứ: Thái Lan\r\nThông tin thương hiệu:\r\nWatsons là thương hiệu chăm sóc da và cơ thể đến từ Thái Lan. Được sản xuất từ những thành phần thiên nhiên, sản phẩm Watsons thân thiện với làn da và môi trường.', 'https://localhost/Hair_Spa/img/sp4.png', 90000, 8),
(5, 'Dầu Gội Phục Hồi Hư Tổn Hair System By Watsons', 'Watsons', 'Dầu Gội Phục Hồi Hư Tổn Hair System By Watsons với công thức làm sạch nhẹ nhàng và cung cấp nước cùng dưỡng chất cho mái tóc chắc khỏe hơn. Dầu gội làm sạch và nuôi dưỡng tóc và da đầu, đồng thời nuôi dưỡng và phụ hồi đến ngọn. Sản phẩm không chỉ giúp làm sạch tóc, bảo vệ tóc và da đầu mà còn lưu lại trên mái tóc bồng bềnh mùi hương nhẹ nhàng quyến rũ.\r\nThành phần và tác dụng:\r\n- Dầu Gội Phục Hồi Hư Tổn Hair System By Watsons chứa thành phần chiết xuất thiên nhiên an toàn cho sức khoẻ bạn.\r\n- Dầu gội làm sạch và nuôi dưỡng tóc và da đầu, đồng thời nuôi dưỡng và phụ hồi đến ngọn.\r\n- Nhờ vào thành phần chứa hỗn hợp dưỡng chất thẩm thấu sâu tới tận từng tế bào giúp kiểm soát hầu như toàn bộ các vấn đề về tóc, mang lại một mái tóc mềm mượt sáng bóng đầy thu hút mà không gây bết hay nặng tóc.\r\n- Dầu Gội Phục Hồi Hư Tổn Hair System By Watsons với hương thơm nhẹ nhàng tự nhiên giúp bạn thư thái, sảng khoái tinh thần, lấy lại sức sống sau ngày dài làm việc căng thẳng.\r\n- Sản phẩm không chứa paraben, sulfate … hoàn toàn an toàn cho làn da và sức khỏe bạn.\r\nĐối tượng sử dụng:\r\nDầu Gội Phục Hồi Hư Tổn Hair System By Watsons rất thích hợp sử dụng cho mọi loại tóc, dành cho các đối tượng nam lẫn nữ, đặc biệt những mái tóc thô và dễ gãy.\r\nHướng dẫn sử dụng:\r\n- Làm ướt tóc, cho một lượng vừa đủ Dầu Gội Phục Hồi Hư Tổn Hair System By Watsons vào tay và thoa đều lên tóc.\r\n- Massage nhẹ nhàng, tránh mạnh tay sẽ làm tổn hại tóc và da đầu.\r\n- Gội lại bằng nước sạch.\r\n- Sử dụng kết hợp cùng kem xả Hair System by Watsons cho hiệu quả tốt nhất.\"\r\n\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất\r\nXuất xứ: Thái Lan\r\nThông tin thương hiệu:\r\nWatsons là thương hiệu chăm sóc da và cơ thể đến từ Thái Lan. Được sản xuất từ những thành phần thiên nhiên, sản phẩm Watsons thân thiện với làn da và môi trường.', 'https://localhost/Hair_Spa/img/sp5.png', 135000, 9),
(6, 'Kem ủ TRESemmé Keratin Smooth Tinh Dầu Argan', 'TRESemmé', 'Kem ủ tóc TRESemmé Keratin Smooth cho tóc suôn mượt vào nếp suốt ngày dài.\r\n  Sản phẩm phù hợp với tóc nhuộm\r\n  Công thức chứa Tinh dầu dưỡng tóc Argan từ vùng Morocco quí hiếm cùng Keratin giúp nuôi dưỡng mái tóc chuyên sâu.\r\n  Cho mái tóc 5 hiệu quả sau 1 lần sử dụng: Tóc bóng mượt - vào nếp - mềm mại - giảm xơ - gỡ rối.\r\n  Được các chuyên gia tạo mẫu tóc tin dùng\r\n  Khuyên dùng trọn bộ gội xả TRESmmé Keratin Smooth để có 1 trải nghiệm hoàn mỹ\r\n  \r\n  CHỈ CẦN THÊM MỘT BƯỚC KEM Ủ - TRỌN VẸN QUY TRÌNH CHĂM SÓC TÓC CHUẨN SALON TẠI NHÀ\r\n  \r\n  Tóc bạn không còn suôn mượt vào nếp sau cả ngày dài hay dù có thử mọi cách nhưng cũng không thể đẹp như ở salon? Bí quyết của chuyên gia cho mái tóc được chăm sóc chuyên sâu ở salon luôn là thêm một bước kem ủ phục hồi đó! Thông qua việc ủ tóc, mái tóc bạn cũng sẽ nhận được những chất dinh dưỡng cần thiết, phục hồi và trở nên bóng mượt hơn. Tuy nhiên, thay vì phải ra salon thường xuyên mất nhiều thời gian và chi phí, TRESemmé đem lại cho bạn bí quyết dưỡng tóc từ các chuyên gia tạo mẫu tóc trên thế giới, cho mái tóc của bạn đẹp chuẩn salon ngay tại nhà: KEM Ủ TRESEMMÉ KERATIN SMOOTH!\r\n  \r\n  ƯU ĐIỂM NỔI BẬT\r\n  - Tinh dầu Argan - loại dầu được mệnh danh là \"\"tinh dầu vàng\"\" từ vùng Morocco, chứa hàm lượng cao các chất chống oxy hóa, axit béo thiết yếu và Vitamin E\r\n  -Thành phần chứa Keratin, giúp bổ sung thêm lượng Keratin cần thiết cho tóc. Thành phần này có tác dụng giúp tóc khỏe mạnh tự nhiên từ bên trong\r\n  - Hương thơm dịu nhẹ, dễ chịu và thư giãn.\r\n  \r\n  HIỆU QUẢ SỬ DỤNG\r\n  - Tăng cường độ ẩm và độ đàn hồi tự nhiên của tóc, làm giảm và ngăn ngừa tình trạng tóc khô xơ, khó vào nếp\r\n  - Phục hồi và bảo vệ các sợi tóc khỏi hư tổn.\r\n  - Bảo vệ tóc khỏi các tổn thương từ nhiệt độ cao hay hóa chất tạo kiểu, giúp tóc trở nên mềm mại, vào nếp và bóng mượt. \r\n  - Phù hợp cả cho tóc nhuộm.\r\n  \r\n  HƯỚNG DẪN SỬ DỤNG\r\n  - Lấy một lượng vừa đủ thoa đều lên tóc ướt, tập trung từ thân đến ngọn tóc\r\n  - Ủ tóc trong 5 phút\r\n  - Xả sạch với nước.\r\n  - Sử dụng đều đặn hàng ngày để đạt kết quả tối ưu.\r\n  \r\n  SẢN PHẨM CÙNG THƯƠNG HIỆU\r\n  Khuyên dùng trọn bộ sản phẩm TRESemmé Keratin Smooth:\r\n  - Dầu gội TRESemmé Keratin Smooth Cho tóc khô xơ rối với công thức chuẩn salon Hydrolyzed Keratin Vào Nếp Suôn Mượt\r\n  - Dầu xả TRESemmé Keratin Smooth Cho tóc khô xơ rối với công thức chuẩn salon Hydrolyzed Keratin Vào Nếp Suôn Mượt\r\n  - Kem Ủ Tóc TRESemmmé Keratin Smooth Cho tóc khô xơ rối với Dầu Dưỡng Tóc Argan & Keratin Vào Nếp Suôn Mượt 180ml\r\n  - Xịt bảo vệ tóc khỏi nhiệt TRESemmé Keratin Smooth với Dầu Dưỡng tóc Marula & Keratin Cho tóc tạo kiểu 236ml\r\n  - Serum Dưỡng Tóc Bóng Mượt TRESemmé Keratin Smooth với Dầu Dưỡng tóc Marula & Keratin Cho tóc tạo kiểu 97m\r\n  \r\n  Xuất xứ thương hiệu: Mỹ\r\n  Nơi sản xuất: Xem trên bao bì sản phẩm\r\n  Ngày sản xuất: Xem trên bao bì sản phẩm \r\n  Hạn sử dụng: 30 tháng từ ngày sản xuất (xem trên bao bì)\r\n  Thành phần: Xem trên bao bì sản phẩm \r\n  Hướng dẫn bảo quản: Nơi thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín sau khi sử dụng', 'https://localhost/Hair_Spa/img/sp6.png', 130000, 10),
(7, 'Dầu gội TRESemmé Keratin Smooth Tinh dầu Argan và Keratin', 'TRESemmé', 'Lần đầu tiên TRESemmé giới thiệu công nghệ MỚI vượt trội nhất từ trước tới nay từ TRESemmé Keratin Smooth. Công thức ưu việt CHUẨN SALON được đặc chế với dưỡng chất Keratin Thủy Phân và các Hạt Dưỡng Chất Mềm Mượt Siêu Nhỏ  giúp làm sạch và thấm sâu tới 10* lớp cho tới tận lõi tóc, loại bỏ khô - xơ - rối,  cho bạn mái tóc vào nếp suôn mượt chuẩn salon suốt ngày dài. Sản phẩm đi cùng công thức mùi huơng cuốn hút MỚI - Giữ dài lâu tới 48 Giờ.\r\nHSD: 36 tháng kể từ ngày sản xuất\r\nHướng dẫn sử dụng:\r\n- Thoa đều lên tóc ướt, xoa bóp nhẹ nhàng để tạo bọt \r\n- Vuốt nhẹ từ chân tóc đến ngọn tóc và gội sạch với nước \r\n- Sau đó, sử dụng dầu xả TRESemmé để đạt hiệu quả tốt nhất.', 'https://localhost/Hair_Spa/img/sp7.png', 250000, 11),
(8, 'Dầu gội TRESemmé Salon Detox Gừng và Trà xanh', 'TRESemmé', '- Với công thức chứa thành phần thiên nhiên gồm gừng và trà xanh, giúp Detox* và nuôi dưỡng tóc, giúp khôi phục lại mái tóc chắc khỏe đẹp chuẩn Sàn diễn. \r\n- Sản phẩm KHÔNG chứa Parabens và Chất tạo màu, nồng độ Sulfate thấp, thích hợp ngay cả với tóc nhuộm. \r\n- Sử dụng trọn bộ sản phẩm gội, xả, ủ TRESemmé Salon Detox cho mái tóc chắc khỏe - Đẹp chuẩn Sàn diễn mỗi ngày. \r\n*Làm sạch sâu và dưỡng tóc khi sử dụng thường xuyên dòng sản phẩm TRESemmé Salon Detox.\r\nHSD: 36 tháng kể từ ngày sản xuất\r\n\r\nHướng dẫn sử dụng:\r\n- Thoa đều lên tóc ướt, xoa bóp nhẹ nhàng để tạo bọt \r\n- Vuốt nhẹ từ chân tóc đến ngọn tóc và gội sạch với nước \r\n- Sau đó, sử dụng dầu xả TRESemmé để đạt hiệu quả tốt nhất', 'https://localhost/Hair_Spa/img/sp8.png', 200000, 12),
(9, 'Dầu gội TRESemmé Ngăn Gãy Rụng Salon Rebond', 'TRESemmé', 'Việc tạo kiểu thường xuyên (sử dụng nhiệt độ cao, lực tác động, hóa chất tẩy nhuộm) có thể khiến tóc bạn hư tổn và dễ gãy rụng Là nhãn hiệu chăm sóc tóc cao cấp đến từ Mỹ, được sử dụng bởi các chuyên gia tại Tuần lễ Thời trang New York - New York Fashion Week,  TRESemmé giới thiệu cho bạn dòng sản phẩm TRESemmé Salon Rebond giúp phục hồi tóc đã hư tổn, nuôi dưỡng tóc chắc khỏe và giảm hẳn gãy rụng. \r\nDầu gội TRESemmé Salon Rebond dành riêng cho tóc gãy rụng với Công Nghệ Tái Kết Nối - TRESplex Rebond TM len lỏi vào từng sợi tóc để tái kết nối các liên kết hư tổn và bảo vệ tóc, cho TÓC CHẮC KHỎE HƠN GẤP 10 LẦN - GIẢM GÃY RỤNG TỚI 98%*\r\nDành cho tóc gãy rụng\r\n• Thoa đều dầu gội TRESemmé Salon Rebond lên tóc ướt, xoa bóp nhẹ nhàng để tạo bọt. \r\n• Vuốt nhẹ từ chân tóc đến ngọn tóc, đồng thời massage da đầu nhiều lần giúp các mạch máu lưu thông, nuôi dưỡng tóc tốt hơn; sau đó gội sạch với nước.\r\n • Luôn dùng dầu xả TRESemmé Salon Rebond sau mỗi lần gội, tập trung vào phần thân và ngọn tóc, tránh tiếp xúc với da đầu.\r\n• Xả sạch bằng nước lạnh để cố định lớp biểu bì và cho tóc thêm phần sáng bóng. \r\n• Để đạt hiệu quả tốt nhất, sử dụng trọn bộ TRESemmé Salon Rebond. ', 'https://localhost/Hair_Spa/img/sp9.png', 200000, 13),
(10, ' Dầu xả TRESemmé Keratin Smooth Tinh dầu Argan và Keratin vào nếp suôn mượt', 'TRESemmé', 'Lần đầu tiên TRESemmé giới thiệu công nghệ MỚI vượt trội nhất từ trước tới nay từ TRESemmé Keratin Smooth. Công thức ưu việt CHUẨN SALON được đặc chế với dưỡng chất Keratin Thủy Phân và các Hạt Dưỡng Chất Mềm Mượt Siêu Nhỏ  giúp làm sạch và thấm sâu tới 10* lớp cho tới tận lõi tóc, loại bỏ khô - xơ - rối,  cho bạn mái tóc vào nếp suôn mượt chuẩn salon suốt ngày dài. Sản phẩm đi cùng công thức mùi huơng cuốn hút MỚI - Giữ dài lâu tới 48 Giờ.\r\nHướng dẫn sử dụng:\r\n- Sau khi gội đầu, lấy 1 lượng dầu xả vừa đủ ra lòng bàn tay. \r\n- Thoa đều từ thân lên ngọn tóc, xoa bóp 1 đến 3 phút. \r\n- Xả sạch với nước. \r\n- Sử dụng trọn bộ Dầu gội, Dầu xả để có kết quả tốt nhất.\r\n\r\nXuất xứ: Việt Nam \r\nHạn sử dụng: 3 năm kể từ ngày sản xuất (xem trên bao bì)', 'https://localhost/Hair_Spa/img/sp10.png', 150000, 14),
(11, 'Dầu xả TRESemmé Salon Detox Gừng và Trà xanh Detox tóc chắc khoẻ', 'TRESemmé', '- Với công thức chứa thành phần thiên nhiên gồm gừng và trà xanh, giúp Detox* và nuôi dưỡng tóc, giúp khôi phục lại mái tóc chắc khỏe đẹp chuẩn Sàn diễn. \r\n- Sản phẩm KHÔNG chứa Parabens và Chất tạo màu, nồng độ Sulfate thấp, thích hợp ngay cả với tóc nhuộm. \r\n- Sử dụng trọn bộ sản phẩm gội, xả, ủ TRESemmé Salon Detox cho mái tóc chắc khỏe - Đẹp chuẩn Sàn diễnn mỗi ngày. \r\n*Làm sạch sâu và dưỡng tóc khi sử dụng thường xuyên dòng sản phẩm TRESemmé Salon Detox.\r\nHướng dẫn sử dụng:\r\n- Sau khi gội đầu, lấy 1 lượng dầu xả vừa đủ ra lòng bàn tay. \r\n- Thoa đều từ thân lên ngọn tóc, xoa bóp 1 đến 3 phút. \r\n- Xả sạch với nước. \r\n- Sử dụng trọn bộ Dầu gội, Dầu xả để có kết quả tốt nhất.\r\n\r\nXuất xứ: Việt Nam \r\nHạn sử dụng: 3 năm kể từ ngày sản xuất (xem trên bao bì)', 'https://localhost/Hair_Spa/img/sp11.png', 150000, 13),
(12, 'Dầu xả TRESemmé Total Salon Repair Tinh dầu Macadamia ngăn gãy rụng', 'TRESemmé', '- Dầu xả TRESemmé Total Salon Repair nay được bổ sung Tinh dầu hạt Mắc-ca cùng với phức hợp Ion củng cố hàng rào bảo vệ tự nhiên của tóc khỏi hư tổn và gãy rụng. \r\n- Giúp hồi phục và bảo vệ tóc khỏi hư tổn trong tương lai, cho mái tóc khỏe đẹp rạng ngời. \r\n\r\nHướng dẫn sử dụng:\r\n- Sau khi gội đầu, lấy 1 lượng dầu xả vừa đủ ra lòng bàn tay. \r\n- Thoa đều từ thân lên ngọn tóc, xoa bóp 1 đến 3 phút. \r\n- Xả sạch với nước. \r\n- Sử dụng trọn bộ Dầu gội, Dầu xả để có kết quả tốt nhất.\r\n\r\nXuất xứ: Việt Nam \r\nHạn sử dụng: 3 năm kể từ ngày sản xuất (xem trên bao bì)', 'https://localhost/Hair_Spa/img/sp12.png', 150000, 12),
(13, 'Serum Dưỡng tóc bóng mượt TRESemmé Keratin Smooth', 'TRESemmé', 'ông nghệ chuyên sâu Pro Technology System cung cấp dưỡng chất chuyên biệt cho tóc vào nếp đến 72H.\r\n  Công thức chứa Tinh dầu dưỡng tóc Argan từ vùng Morocco quí hiếm cùng Keratin giúp nuôi dưỡng mái tóc chuyên sâu.\r\n  Cho mái tóc 5 hiệu quả sau 1 lần sử dụng: Tóc bóng mượt - vào nếp - mềm mại - giảm xơ - gỡ rối.\r\n  Được các chuyên gia tạo mẫu tóc tin dùng\r\n  Khuyên dùng trọn bộ gội xả ủ TRESmmé Keratin Smooth.\r\n  \r\n  TRỌN BỘ BÍ QUYẾT TỪ CÁC NHÀ TẠO MẪU TÓC CHO MÁI TÓC SUÔN MƯỢT CHUẨN SALON\r\n  \r\n  Tóc bạn không còn suôn mượt vào nếp sau cả ngày dài hay dù có thử mọi cách nhưng cũng không thể đẹp như ở salon? Bạn có biết, để sở hữu một mái tóc vào nếp suôn mượt suốt cả ngày, tóc mình phải được nuôi dưỡng mềm mượt ngay từ sâu bên trong? Và một trong những liệu pháp hiệu quả nhất chính là bổ sung protein Keratin & tinh dầu dưỡng tóc giúp thấm sâu & nuôi dưỡng từng sợi tóc. Thay vì phải ra salon thường xuyên mất nhiều thời gian và chi phí, TRESemmé đem lại cho bạn bí quyết dưỡng tóc từ các chuyên gia tạo mẫu tóc trên thế giới, cho mái tóc của bạn đẹp chuẩn salon ngay tại nhà: SERUM TRESemmé Keratin Smooth!\r\n  \r\n  ƯU ĐIỂM NỔI BẬT\r\n  - Tinh dầu Marula cùng dưỡng chất Keratin được các chuyên gia tin dùng trong việc tạo kiểu bởi khả năng giúp tóc vào nếp nhanh chóng\r\n  - Công nghệ chuyên sâu Pro Technology cung cấp dưỡng chất chuyên biệt, bảo vệ mái tóc khỏi hư tổn do nhiệt\r\n  - Hương thơm dịu nhẹ, dễ chịu và thư giãn\r\n  \r\n  HIỆU QUẢ SỬ DỤNG\r\n  - Giúp tóc vào nếp\r\n  - Dưỡng tóc bóng mượt, mềm mại\r\n  - Giảm xơ rối, giúp tóc suôn mượt \r\n  \r\n  HƯỚNG DẪN SỬ DỤNG\r\n  - Sử dụng khi tóc khô hoặc còn ẩm\r\n  - Lấy một lượng sản phẩm vừa đủ, xoa đều serum trong lòng bàn tay\r\n  - Mát xa serum lên tóc, tập trung từ giữa thân đến ngọn tóc\r\n  \r\n  SẢN PHẨM CÙNG THƯƠNG HIỆU\r\n  Khuyên dùng trọn bộ sản phẩm TRESemmé Keratin Smooth:\r\n  - Dầu gội TRESemmé Keratin Smooth Cho tóc khô xơ rối với công thức chuẩn salon Hydrolyzed Keratin Vào Nếp Suôn Mượt\r\n  - Dầu xả TRESemmé Keratin Smooth Cho tóc khô xơ rối với công thức chuẩn salon Hydrolyzed Keratin Vào Nếp Suôn Mượt\r\n  - Kem Ủ Tóc TRESemmmé Keratin Smooth Cho tóc khô xơ rối với Dầu Dưỡng Tóc Argan & Keratin Vào Nếp Suôn Mượt 180ml\r\n  - Xịt bảo vệ tóc khỏi nhiệt TRESemmé Keratin Smooth với Dầu Dưỡng tóc Marula & Keratin Cho tóc tạo kiểu 236ml\r\n  - Serum Dưỡng Tóc Bóng Mượt TRESemmé Keratin Smooth với Dầu Dưỡng tóc Marula & Keratin Cho tóc tạo kiểu 97ml\r\n  \r\n  Xuất xứ thương hiệu: Mỹ\r\n  Nơi sản xuất: Xem trên bao bì sản phẩm\r\n  Ngày sản xuất: Xem trên bao bì sản phẩm \r\n  Hạn sử dụng: 3 năm từ ngày sản xuất (xem trên bao bì)\r\n  Thành phần: Xem trên bao bì sản phẩm \r\n  Hướng dẫn bảo quản: Nơi thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín sau khi sử dụng', 'https://localhost/Hair_Spa/img/sp13.png', 150000, 11),
(14, 'Xịt bảo vệ tóc khỏi nhiệt TRESemmé Keratin Smooth', 'TRESemmé', 'Xịt bảo vệ tóc khỏi nhiệt TRESemmé Keratin Smooth giúp tóc tránh hư tổn từ nhiệt độ cao lên tới 230 độ C.\r\n  Công nghệ chuyên sâu Pro Technology System tạo lớp màng bảo vệ tóc khỏi nhiệt đến 230 độ C\r\n  Công thức chứa Tinh dầu dưỡng tóc Argan từ vùng Morocco quí hiếm cùng Keratin giúp nuôi dưỡng mái tóc chuyên sâu.\r\n  Cho mái tóc 5 hiệu quả sau 1 lần sử dụng: Tóc bóng mượt - vào nếp - mềm mại - giảm xơ - gỡ rối.\r\n  Được các chuyên gia tạo mẫu tóc tin dùng\r\n  Khuyên dùng trọn bộ gội xả TRESmmé Keratin Smooth để có 1 trải nghiệm hoàn mỹ\r\n  \r\n  BÍ QUYẾT CHỐNG NHIỆT & NẮNG GẮT CHO TÓC ĐƯỢC CÁC CHUYÊN GIA TIN DÙNG\r\n  \r\n  Bạn muốn thỏa sức tạo kiểu bất chấp nhiệt độ? Bạn muốn du lịch ngoài trời cả ngày bất chấp nắng gắt? Vậy thì bạn đừng bỏ qua chọn sản phẩm này nhé!\r\n  Giống như làn da, mái tóc muốn đẹp thì vừa phải được bảo vệ trước các tác hại nhiệt gây hư tổn, vừa phải được nuôi dưỡng chuyên sâu. Thế nên, TRESemmé đem đến cho bạn bí quyết từ các chuyên gia tạo mẫu tóc trên thế giới, cho mái tóc của bạn đẹp chuẩn salon, thỏa sức tạo kiểu và bung mình du lịch dưới nắng: XỊT BẢO VỆ TÓC KHỎI NHIỆT TRESEMMÉ KERATIN SMOOTH!\r\n  \r\n  ƯU ĐIỂM NỔI BẬT\r\n  - Tinh dầu Marula và Keratin giúp nuôi dưỡng tóc vào nếp suôn mượt\r\n  - Công nghệ chuyên sâu Pro Technology System, tạo nên lớp màng bảo vệ mái tóc khỏi hư tổn do nhiệt lên đến 230 độ\r\n  - Hương thơm dịu nhẹ, dễ chịu và thư giãn\r\n  \r\n  HIỆU QUẢ SỬ DỤNG\r\n  - Bảo vệ tóc khỏi hư tổn do nhiệt lên đến 230 độ C\r\n  - Nuôi dưỡng chuyên sâu\r\n  - Giúp tóc vào nếp\r\n  - Dưỡng tóc bóng mượt, mềm mại\r\n  - Giảm xơ rối, giúp tóc suôn mượt\r\n  \r\n  HƯỚNG DẪN SỬ DỤNG\r\n  - Sử dụng trước khi tạo kiểu với nhiệt độ cao hoặc chuẩn bị ra ngoài trời nắng gắt\r\n  - Đặt sản phẩm cách tóc 15-20cm và xịt đều\r\n  - Dùng cho cả tóc khô hay còn ẩm sau khi chải\r\n  \r\n  LƯU Ý\r\n  Sản phẩm dễ bắt cháy khi chưa khô hoàn toàn.\r\n  Không sử dụng gần lửa, nơi có nhiệt độ cao hay đang hút thuốc,\r\n  Không sử dụng lên vết thương hở\r\n  Ngưng sử dụng ngay khi bị kích ứng\r\n  Tránh hít sản phẩm\r\n  Không xịt vào mắt\r\n  Để xa tầm với của trẻ em\r\n  \r\n  SẢN PHẨM CÙNG THƯƠNG HIỆU\r\n  Khuyên dùng trọn bộ sản phẩm TRESemmé Keratin Smooth:\r\n  - Dầu gội TRESemmé Keratin Smooth Cho tóc khô xơ rối với công thức chuẩn salon Hydrolyzed Keratin Vào Nếp Suôn Mượt\r\n  - Dầu xả TRESemmé Keratin Smooth Cho tóc khô xơ rối với công thức chuẩn salon Hydrolyzed Keratin Vào Nếp Suôn Mượt\r\n  - Kem Ủ Tóc TRESemmmé Keratin Smooth Cho tóc khô xơ rối với Dầu Dưỡng Tóc Argan & Keratin Vào Nếp Suôn Mượt 180ml\r\n  - Xịt bảo vệ tóc khỏi nhiệt TRESemmé Keratin Smooth với Dầu Dưỡng tóc Marula & Keratin Cho tóc tạo kiểu 236ml\r\n  - Serum Dưỡng Tóc Bóng Mượt TRESemmé Keratin Smooth với Dầu Dưỡng tóc Marula & Keratin Cho tóc tạo kiểu 97ml\r\n  \r\n  Xuất xứ thương hiệu: Mỹ\r\n  Nơi sản xuất: Xem trên bao bì sản phẩm\r\n  Ngày sản xuất: Xem trên bao bì sản phẩm \r\n  Hạn sử dụng: 3 năm từ ngày sản xuất (xem trên bao bì)\r\n  Thành phần: Xem trên bao bì sản phẩm \r\n  Hướng dẫn bảo quản: Nơi thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín sau khi sử dụng', 'https://localhost/Hair_Spa/img/sp14.png', 150000, 13),
(15, 'Xịt tạo kiểu tóc TRESemme Compressed Micro Mist', 'TRESemmé', 'Xịt tạo kiểu tóc TRESemme Compressed Micro Mist với công nghệ đột phá giúp cố định, giữ nếp tóc luôn mềm mượt.\r\n  Giúp giữ nếp tóc, tạo độ phồng và kiểm soát kiểu tóc cả ngày dài mà vẫn giữ được sự tự nhiên\r\n  Khả năng phun sương siêu mịn nhẹ nhàng phủ đều bề mặt tóc\r\n  Tóc tạo kiểu đẹp thời thượng chuẩn salon mỗi ngày.\r\n  Được các chuyên gia tạo mẫu tóc tin dùng\r\n  Công nghệ chuyên sâu Pro Technology System tạo lớp màng bảo vệ tóc khỏi nhiệt đến 230 độ C\r\n  \r\n  TẠO KIỂU ĐẸP SALON VỚI BÍ QUYẾT CỦA CÁC NHÀ TẠO MẪU TÓC ĐẰNG SAU HẬU TRƯỜNG THỜI TRANG\r\n  \r\n  Để thỏa mãn đam mê thời trang, đổi mới bản thân bằng việc tạo kiểu tóc của nàng, TRESemmé đem lại cho bạn bí quyết từ các chuyên gia tạo mẫu tóc trên thế giới đằng sau các sàn diễn thời trang, cho mái tóc của bạn đẹp chuẩn salon, thỏa sức tạo kiểu: XỊT TẠO KIỂU TÓC TRESEMMÉ COMPRESSED MICRO MIST!\r\n  \r\n  ƯU ĐIỂM NỔI BẬT:\r\n  - Công thức đặc biệt dành cho tóc, chứa lượng Vitamin dồi dào giúp nuôi dưỡng tóc óng mượt hơn mỗi ngày\r\n  - Công nghệ chuyên sâu Pro Technology System tạo lớp màng bảo vệ tóc khỏi nhiệt đến 230 độ C\r\n  - Khả năng phun sương siêu mịn Superfine Micro Mist nhẹ nhàng phủ đều bề mặt tóc, giúp giữ kiểu mà không tạo cảm giác khô cứng.\r\n  - Cung cấp độ ẩm tối đa cho mái tóc, giúp tóc dày và bồng bềnh hơn.\r\n  - Mùi hương dễ chịu khi sử dụng.\r\n  \r\n  HIỆU QUẢ SỬ DỤNG:\r\n  - Giúp giữ nếp và kiểm soát kiểu tóc cả ngày dài mà vẫn giữ được sự tự nhiên.\r\n  - Cung cấp dinh dưỡng cho tóc.\r\n  - Khô ngay tức thì\r\n  - Không để lại dư chất trên tóc.\r\n  \r\n  HƯỚNG DẪN SỬ DỤNG\r\n  - Lắc đều chai keo xịt tóc trước khi xịt\r\n  - Tiếp đến cầm chai thẳng đứng cách xa mái tóc từ 18 – 20cm khi xịt\r\n  - Tạo kiểu trong khi xịt, có thể xịt đi xịt lại vài lần cho tới khi cảm thấy đã đủ.\r\n  \r\n  LƯU Ý\r\n  Sản phẩm dễ bắt cháy khi chưa khô hoàn toàn.\r\n  Không sử dụng gần lửa, nơi có nhiệt độ cao hay đang hút thuốc,\r\n  Không sử dụng lên vết thương hở\r\n  Ngưng sử dụng ngay khi bị kích ứng\r\n  Tránh hít sản phẩm\r\n  Không xịt vào mắt\r\n  Để xa tầm với của trẻ em\r\n  \r\n  SẢN PHẨM CÙNG THƯƠNG HIỆU\r\n  Xịt Tạo Kiểu Tóc TRESemmé Compressed Micro Mist được chia làm 2 dòng chuyên biệt:\r\n  - Xịt Tạo Kiểu Tóc TRESemmé Vào Nếp Mềm Mượt giúp kiểm soát kiểu tóc vào nếp mềm mượt cả ngày dài mà vẫn giữ được sự tự nhiên\r\n  - Xịt Tạo Kiểu Tóc TRESemmé Giữ Độ Phồng giúp giữ nếp tóc, tạo độ phồng cho tóc tạo kiểu mà vẫn giữ được sự tự nhiên \r\n  Khuyên dùng trọn bộ sản phẩm TRESemmé\r\n  - Xịt Tạo Kiểu Tóc TRESemmé Compressed Micro Mist 155g\r\n  - Xịt bảo vệ tóc khỏi nhiệt TRESemmé Keratin Smooth với Dầu Dưỡng tóc Marula & Keratin Cho tóc tạo kiểu 236ml\r\n  - Serum Dưỡng Tóc Bóng Mượt TRESemmé Keratin Smooth với Dầu Dưỡng tóc Marula & Keratin Cho tóc tạo kiểu 97ml\r\n  \r\n  Xuất xứ thương hiệu: Mỹ\r\n  Nơi sản xuất: Xem trên bao bì sản phẩm\r\n  Ngày sản xuất: Xem trên bao bì sản phẩm \r\n  Hạn sử dụng: 3 năm từ ngày sản xuất (xem trên bao bì)\r\n  Thành phần: Xem trên bao bì sản phẩm \r\n  Hướng dẫn bảo quản: Nơi thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín sau khi sử dụng', 'https://localhost/Hair_Spa/img/sp15.png', 180000, 5),
(16, 'Kem ủ tóc bồ kết & vỏ bưởi herbario', 'Herbario', 'Kem ủ tóc bồ kết & vỏ bưởi herbario 200ml thuần chay giúp cung cấp dưỡng chất phục hồi tóc giảm rụng, giúp tóc suôn mượt, mềm mại\r\nChiết xuất từ tinh dầu vỏ bưởi & bồ kết những thảo mộc không thể thiếu trong việc nuôi dưỡng tóc từ xa xưa. Nay đã được vào kem ủ tóc herbario. Cung cấp các dưỡng chất thiết yếu hỗ trợ ngăn ngừa tóc gãy rụng và nuôi dưỡng tóc chắc khỏe.\r\n\r\nCông dụng Kem ủ tóc bồ kết & vỏ bưởi herbario\r\n• Mái tóc suôn mượt, mềm mại, chắc khỏe\r\n• Cân bằng độ ẩm, mang lại mái tóc mềm mượt, bồng bềnh đầy sức sống.\r\n• Cung cấp dưỡng chất phục hồi tóc hư tổn.\r\n• Kéo dài thời gian trẻ của mái tóc\r\n\r\nThành phần chính Kem ủ tóc bồ kết & vỏ bưởi herbario\r\n• Tinh dầu vỏ bưởi: Trong vỏ bưởi hàm lượng vitamin C rất cao đồng thời khả năng chống lại oxy hoá mạnh, Tăng kích thích mọc tóc. sẽ giúp giải phóng paraben và các chất bẩn bám trên tóc. Nó cũng giúp làm sáng màu tóc và khiến tóc bạn trông óng ả hơn.\r\n• Bồ kết: Lượng tóc gãy rụng cũng được giảm đáng kể do hợp chất flavonozit với thành phần chính saponaretin trong bồ kết giúp cung cấp những dưỡng chất cần thiết để nuôi dưỡng tóc từ gốc đến ngọn, Đồng thời, bổ sung dưỡng khí cho tóc, giúp tóc “thở” tốt hơn.\r\n• Dầu dừa: Nhờ chứa các axit béo và các chất dẫn xuất như: chlorid, betain… nên dầu dừa có tác dụng giúp vitamin E, vitamin K và một số khoáng chất thấm sâu vào chân tóc, nuôi dưỡng mái tóc mềm mại, mượt mà.\r\n\r\nCam kết Kem ủ tóc bồ kết & vỏ bưởi herbario\r\n• No Paraben (không Paraben)\r\n• No phthalate (không Phthalate)\r\n• Vegan product (Sản phẩm 100% thuần chay)\r\n• Không thử nghiệm động vật\r\n\r\nCách dùng Kem ủ tóc bồ kết & vỏ bưởi herbario\r\nLấy lượng kem ủ thoa đều từ thân tóc đến ngọn tóc, mát-xa nhẹ nhàng từ 3-5 phút. rồi ủ từ 15-20 phút. sau đó xả lại với nước.\r\n\r\nThành phần đầy đủ Kem ủ tóc bồ kết & vỏ bưởi herbario\r\nAqua, Cetearyl Alcohol, Glycerin, Dimethiconol, TEA-Dodecylbenzenesulfonate, Behentrimonium Chloride, Cocos Nucifera Oil, Bis-(Isostearoyl/Oleoyl Isopropyl) Dimonium, Methosulfate, Amodimethicone, Trideceth-10, Dimethicone, Cocamidopropyl Betaine, C12-15 Pareth-3, Guar Hydroxypropyltrimonium Chloride, Citrus Grandis Peel Oil, Mentha Piperita Oil, Polyquaternium-10, DMDM Hydantoin, Fragrance\r\n\r\nLưu ý: Tránh sản phẩm vây vào mắt\r\n\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất, in trên chai.\r\nMở nắp dùng trong 12 tháng.', 'https://localhost/Hair_Spa/img/sp16.png', 140000, 7),
(17, 'Dầu xả Vỏ bưởi & Bồ kết HERBARIO', 'Herbario', 'Dầu xả Vỏ bưởi & Bồ kết HERBARIO 270ml ngăn ngừa rụng tóc, nuôi dưỡng tóc từ gốc đến ngọn, phục hồi hư tổn và giúp tóc chắc khỏe tự nhiên.\r\nDầu xả vỏ bưởi & bồ kết HERBARIO giúp giảm rụng tóc,nuôi dưỡng tóc óng ả mềm mại, cung cấp dưỡng chất giúp tóc chắc khỏe, phục hồi hư tổn do tác động của môi trường và hóa chất, kéo dài thời gian khỏe đẹp của mái tóc.\r\n\r\nCông dụng dầu xả bưởi & bồ kết herbario\r\n- Giảm rụng tóc, kích thích mọc tóc dài, dày nhanh\r\n- Cho tóc thêm vẻ bồng bềnh và có vẻ dày hơn sau khi gội.\r\n- Cấp ẩm mái tóc, giảm tóc khô và chẻ ngọn, xơ rối.\r\n- Giúp tóc luôn mạnh khỏe, suôn mượt, mềm mại\r\n- Chống nắng, bảo vệ tóc trước tác hại của môi trường\r\n- Kéo dài thời gian trẻ của mái tóc\r\n\r\nThành phần chính dầu xả bưởi & bồ kết herbario\r\n- Tinh dầu vỏ bưởi: Trong vỏ bưởi hàm lượng vitamin C rất cao đồng thời khả năng chống lại oxy hoá mạnh, Tăng kích thích mọc tóc. sẽ giúp giải phóng paraben và các chất bẩn bám trên tóc. Nó cũng giúp làm sáng màu tóc và khiến tóc bạn trông óng ả hơn.\r\n- Bồ kết: Lượng tóc gãy rụng cũng được giảm đáng kể do hợp chất flavonozit với thành phần chính saponaretin trong bồ kết giúp cung cấp những dưỡng chất cần thiết để nuôi dưỡng tóc từ gốc đến ngọn, Đồng thời, bổ sung dưỡng khí cho tóc, giúp tóc “thở” tốt hơn.\r\n- Dầu dừa: Nhờ chứa các axit béo và các chất dẫn xuất như: chlorid, betain… nên dầu dừa có tác dụng giúp vitamin E, vitamin K và một số khoáng chất thấm sâu vào chân tóc, nuôi dưỡng mái tóc mềm mại, mượt mà.\r\n- POLYQUATERNIUM 10 (PQ 10) là một hoạt chất dưỡng ẩm giúp tóc suông mượt siêu việt.\r\n\r\nĐối tượng sử dụng:\r\n- Gội đầu thật sạch xong dùng dầu xả\r\n- Tóc quăn thường bị khô, nên dùng loại dầu xả tăng cường độ ẩm\r\n- Sấy, duỗi nhiều tóc dể gãy rụng.\r\n- Tóc hư tổn do sử dụng hóa chất, nhuộm nhiều lần\r\n- Tóc khô, yếu do làm việc nhiều trong môi trường khói bụi\r\n\r\nThành phần đầy đủ dầu xả bưởi & bồ kết herbario\r\nAqua, Glycerin, cetearyl alcohol, cocos nucifera (dừa) oil, behentrimonium chloride, Sodium lactate, Sodium gluconate, Citrus maxima (BƯỞI) peel oil, Gleditsia australis (BỒ KẾT) seed extract, panthenol,propanediol, Polyquaternium 10, Phenoxyethanol, Ethylhexylglycerin.\r\n\r\nHướng dẫn sử dụng dầu xả bưởi & bồ kết herbario\r\n- Sau khi gội đầu, lấy một lượng dầu xả thoa đều từ thân tóc đến ngọn tóc, cách chân tóc khoảng 2 - 3cm, mát xa nhẹ nhàng khoảng 2 - 3 phút rồi xả lại với nước.\r\n- Kết hợp dầu gội bưởi & bồ kết Herbario để tốt hơn.\r\n\r\nLưu ý: Tránh sản phẩm vây vào mắt\r\n\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất, in trên chai.\r\nMở nắp dùng trong 12 tháng.', 'https://localhost/Hair_Spa/img/sp17.png', 140000, 8),
(18, 'Dầu gội vỏ bưởi và bồ kết HERBARIO', 'Herbario', 'Dầu gội vỏ bưởi & bồ kết HERBARIO 300ml giúp giảm rụng tóc,  nuôi dưỡng tóc từ sâu bên trong, cung cấp dưỡng chất giúp tóc chắc khỏe, phục hồi tóc hư tổn do tác động của môi trường và hóa chất, giúp tóc luôn khỏe mạnh, suôn mượt và mềm mại.\r\n\r\nCông dụng dầu gội bưởi & bồ kết herbario\r\n- Giảm rụng tóc, giúp mọc tóc dài \r\n- Giúp mọc tóc dày\r\n- Bồi bổ dưỡng chất cho tóc, bảo vệ tóc trước tác động của môi trường và hóa chất.\r\n- Giúp tóc luôn mạnh khỏe, suôn mượt, mềm mại\r\n- Nuôi dưỡng mái tóc đẹp một cách tự nhiên tư bên trong\r\n\r\nThành phần chính dầu gội bưởi & bồ kết herbario\r\n- Tinh dầu vỏ bưởi: Trong vỏ bưởi hàm lượng vitamin C rất cao đồng thời khả năng chống lại oxy hoá mạnh, Tăng độ dày mọc tóc. sẽ giúp giải phóng paraben và các chất bẩn bám trên tóc. \r\n- Bồ kết: Lượng tóc gãy rụng cũng được giảm đáng kể do hợp chất flavonozit với thành phần chính saponaretin trong bồ kết giúp cung cấp những dưỡng chất cần thiết để nuôi dưỡng tóc từ gốc đến ngọn, Đồng thời, bổ sung dưỡng khí cho tóc, giúp tóc “thở” tốt hơn.\r\n- Cỏ lúa mạch: giảm gàu, da đầu vấn đề giúp tóc trẻ đen dài.\r\n\r\nƯu điểm dầu gội vỏ bưởi và bồ kết herbario.\r\n- No Paraben (không Paraben).\r\n- No phthalate (không Phthalate).\r\n- Vegan product (Sản phẩm 100% thuần chay).\r\n- Không thử nghiệm động vật.\r\n\r\nThành phần đầy đủ dầu gội bưởi & bồ kết herbario:\r\nAqua, Sodium laureth sulfate, Cocamidopropyl betaine, Glycerin, Sodium peg-7 olive oil carboxylate, Peg-7 Glyceryl cocoate, Panthenol, Propanediol, Peg-120 methyl glucose dioleate, Acrylates copolymer, Hydroxyproryl oxidized starch pg-trimonium chloride, Sodium lactate, Sodium gluconate, Quaternium 98, Citrus maxima (BƯỞI) peel oil, Gleditsia australis (BỒ KẾT) seed extract, Sodium chloride, Urea, Triethanolamine, Tocopheryl acetate, Polyquaternium 10, Lactic acid, Phenoxyethanol, Ethylhexylglycerin, Disodium edta.\r\n\r\nHướng dẫn sử dụng dầu gội bưởi & bồ kết herbario\r\n- Lấy một lượng dầu gội vừa đủ cho vào lòng bàn tay, thoa đều lên tóc, tạo bọt và mát-xa nhẹ nhàng, xả lại với nước. Nên sử dụng liên tục để đạt hiệu quả cao.\r\n\r\nLưu ý: Tránh sản phẩm vây vào mắt\r\n\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất, in trên chai.\r\nMở nắp dùng trong 12 tháng. ', 'https://localhost/Hair_Spa/img/sp18.png', 220000, 45),
(19, 'Nước dưỡng tóc Vỏ Bưởi và Bồ Kết Herbario', 'Herbario', 'Nước dưỡng tóc tinh vỏ Dầu Bưởi và Bồ Kết Herbario (pomelo peel & gleditsia) giảm rụng tóc, nuôi dưỡng tóc từ sâu bên trong, cung cấp dưỡng chất giúp tóc chắc khỏe và làm mềm tóc\r\nNước dưỡng tóc vỏ bưởi & bồ kết HERBARIO giúp giảm gãy rụng tóc*, cung cấp dưỡng chất từ chân tóc đến thân và ngọn tóc. Cho tóc chắc khỏe không còn sơ rối gãy rụng, mang lại mái tóc suôn mượt, làm mềm tóc.\r\n\r\nCông dụng Nước dưỡng tóc vỏ bưởi và bồ kết herbario\r\n- Giảm gãy rụng tóc, giúp mọc tóc dài nhanh\r\n- Bồi bổ dưỡng chất cho tóc, bảo vệ tóc trước tác động của môi trường và hóa chất.\r\n- Giúp tóc giảm khô sơ rối, suôn mượt, mềm mại\r\n- Nuôi dưỡng mái tóc đẹp một cách tự nhiên tư bên trong\r\n- Cung cấp dưỡng chất cho nang tóc, giúp khỏe từ thân đến ngọn\r\n\r\nThành phần chính Nước dưỡng tóc vỏ bưởi và bồ kết herbario\r\n- Vỏ bưởi: Trong vỏ bưởi hàm lượng vitamin C rất cao đồng thời khả năng chống lại oxy hoá mạnh, tăng kích thích mọc tóc. sẽ giúp giải phóng paraben và các chất bẩn bám trên tóc. Nó cũng giúp làm sáng màu tóc và khiến tóc bạn trông óng ả hơn.\r\n- Bồ kết: Lượng tóc gãy rụng cũng được giảm đáng kể do hợp chất flavonozit với thành phần chính saponaretin trong bồ kết giúp cung cấp những dưỡng chất cần thiết để nuôi dưỡng tóc từ gốc đến ngọn.\r\n- Vitamin b5: 95% dưỡng chất nuôi dưỡng tóc được lấy từ máu, trong các thành phần nuôi tóc không thể thiếu vitamin b5 là chủ yếu quyết định sức khỏe tóc. bổ sung trực tiếp lên chân tóc để bảo vệ sức khỏe mái tóc của bạn ngay từ bây giờ.\r\n\r\nThành phần chính Nước dưỡng tóc vỏ bưởi và bồ kết herbario\r\nĐối tượng sử dụng\r\n- Sau sinh tóc yếu không khỏe\r\n- Tóc bắt dầu gãy rụng, tóc ít.\r\n- Sấy, duỗi nhiều tóc dể rụng.\r\n- Tóc hư tổn do sử dụng hóa chất, nhuộm nhiều lần\r\n- Tóc khô, yếu do làm việc nhiều trong môi trường khói bụi\r\n- Tóc yếu tự nhiên do bẩm sinh hoặc do lão hóa.\r\n\r\nƯu điểm Nước dưỡng tóc vỏ bưởi và bồ kết herbario\r\n- No Paraben (không Paraben)\r\n- No phthalate (không Phthalate)\r\n- Vegan product (Sản phẩm thuần chay)\r\n\r\nThành phần đầy đủ\r\nAQUA/WATER, PELVETIA CULATA EXTRACT, XYLITOL, XYLITYL-GLUCOSIDE, MALTITOL, ANHYDRO-XYLITOL, GLEDITSIA SINENSIS SEED EXTRACT (bồ kết), PANTHENOL (Vitamin b5), BETAINE, GLYCERIN, GLYCERETH-26, SODIUM GLUCONATE, ETHYLHEXYLGLYCEIN, SODIUM LACTATE, PEG-40, HYDRO-GENATED CASTOR OIL, POLY-SORBATE 20, TRISODIUM ETHYLENED-AMINE DISUCCINATE,CITRUS GRANDIS PEEL OIL (vỏ bưởi), CITRUS AURANTIUM DULOS (ORANGE) PEEL OIL, PARFUM, PHENOXYETHANOL.\r\n\r\nHướng dẫn sử dụng\r\n- Để tóc khô, sạch rồi xịt lên tóc.\r\n- Xịt lên mái tóc và mát-xa nhẹ nhàng. dùng hàng ngày để đặt hiệu quả tốt.\r\n- Kết hợp serum vỏ bưởi và bồ kết herbario để chăm sóc từ thân đến ngọn.\r\n\r\nDùng bao lâu có hiệu quả\r\n* Tùy theo cơ địa của mỗi người, Nước dưỡng tóc vỏ bưởi và bồ kết Herbario sẽ có thời gian tác dụng khác nhau.\r\n- Trong thời gian đầu mới dùng sản phẩm, bạn sẽ thấy tình trạng rụng tóc giảm đáng kể.\r\n- Tiếp theo các tình trạng như bết tóc, khô xơ, chẻ ngọn sẽ được cải thiện, tóc sẽ suôn mượt và bồng bềnh dần lên.\r\n- Sau một thời gian, tóc sẽ bắt đầu mọc nhiều, mái tóc sẽ dày lên thấy rõ, sợi tóc chắc và rất mượt.\r\n\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất, in trên chai.\r\nMở nắp dùng trong 12 tháng.', 'https://localhost/Hair_Spa/img/sp19.png', 100000, 34),
(20, 'Serum mọc tóc Vỏ Bưởi và Bồ Kết Herbario ', 'Herbario', 'Serum Vỏ Bưởi và Bồ Kết Herbario (pomelo peel & gleditsia Serum Hair) giúp giảm rụng tóc, cung cấp dưỡng chất giúp tóc mọc chắc khỏe, man lại mái tóc đen dày, mềm mại\r\nSerum vỏ bưởi & bồ kết HERBARIO giúp giảm rụng tóc, cung cấp dưỡng chất giúp tóc chắc khỏe, mang lại mái tóc đen dày, mềm mại.\r\n\r\nCông dụng serum vỏ bưởi và bồ kết herbario\r\n- Giảm rụng tóc, giúp mọc tóc dài nhanh.\r\n- Giúp mọc tóc dày và đen.\r\n- Bồi bổ dưỡng chất cho tóc, bảo vệ tóc trước tác động của môi trường và hóa chất.\r\n- Giúp tóc luôn mạnh khỏe, suôn mượt, mềm mại.\r\n- Nuôi dưỡng mái tóc đẹp một cách tự nhiên tư bên trong.\r\n- Cung cấp dưỡng chất cho nang tóc, để nang tóc thở tốt hơn.\r\n\r\nSerum moc toc Vỏ Bưởi và Bồ Kết Herbario 30ml\r\n\r\nThành phần chính serum vỏ bưởi và bồ kết herbario\r\n- Vỏ bưởi: Trong vỏ bưởi hàm lượng vitamin C rất cao đồng thời khả năng chống lại oxy hoá mạnh, Tăng kích thích mọc tóc. sẽ giúp giải phóng paraben và các chất bẩn bám trên tóc. Nó cũng giúp làm sáng màu tóc và khiến tóc bạn trông óng ả hơn.\r\n- Bồ kết: Lượng tóc gãy rụng cũng được giảm đáng kể do hợp chất flavonozit với thành phần chính saponaretin trong bồ kết giúp cung cấp những dưỡng chất cần thiết để nuôi dưỡng tóc từ gốc đến ngọn. Đồng thời, bổ sung dưỡng khí cho tóc, giúp tóc \"thở\" tốt hơn.\r\n- Bạc hà: Giúp giãn mạch và cải thiện lưu lượng máu đến các nang tóc thiếu dinh dưỡng giúp tóc mọc nhanh và dày hơn. Hơn thế, bạc hà có khả năng cải thiện sự phát triển của tóc và giảm rụng tóc vô cùng hiệu quả.\r\n- Vitamin b5: 95% dưỡng chất nuôi dưỡng tóc được lấy từ máu, trong các thành phần nuôi tóc không thể thiếu vitamin b5 là chủ yếu quyết định sức khỏe tóc. bổ sung trực tiếp lên chân tóc để bảo vệ sức khỏe mái tóc của bạn ngay từ bây giờ.\r\n\r\nĐối tượng sử dụng\r\n- Sau sinh tóc yếu không khỏe\r\n- Sấy, duỗi nhiều tóc dể gãy rụng.\r\n- Tóc hư tổn do sử dụng hóa chất, nhuộm nhiều lần\r\n- Tóc khô, yếu do làm việc nhiều trong môi trường khói bụi\r\n- Tóc yếu tự nhiên do bẩm sinh hoặc do lão hóa.\r\n\r\nƯu điểm Serum vỏ bưởi và bồ kết herbario\r\n- No Paraben (không Paraben)\r\n- No phthalate (không Phthalate)\r\n- Vegan product (Sản phẩm 100% thuần chay)\r\n- Không thử nghiệm động vật\r\n\r\nThành phần đầy đủ Serum vỏ bưởi và bồ kết herbario\r\nAQUA, THYMUS VULGARIS (THYME) EXTRACT, TRITICUM VULGARE (WHEAT) SEED EXTRACT, CALCIUM PANTOTHENATE, PYRIDOXINE HCL, PANTHENOL (vitamin b5), PROPANEDIOL, ARGININE, GLYCINE SOJA (SOYBEAN) GERM EXTRACT, SCUTELLARIA BAICA-LENSIS ROOT EXTRACT, PELVETIA CANALICU-LATA EXTRACT, GLEDITSIA SINENSIS SEED EXTRACT (bồ kết), ANHYDROXYLITOL, XYLITOL, XYLITY-LGLUCOSIDE, MALTITOL, EPILOBIUM ABGUS-TIFOLIUM FLOWER/LEAF/STEM EXTRACT, GLYCERETH-26, XANTHAN GUM, TRISODIUM ETHYLENEDIAMINE DISUCCINATE, PEG-40 HYDROGENATED CASTOR OIL, ETHYLHEXYL-GLYCERIN, MENTHA PIPERITA OIL (bạc hà), CITRUS AURANTIUM DULCIS(ORANGE)PEEL OIL, CITRUS GRANDIS PEEL OIL (vỏ bưởi), PARFUM, PHENOXY-ETHANOL, LACTIC ACID.\r\n\r\nHướng dẫn sử dụng\r\n- Bôi trực tiếp lên chân tóc mát-xa nhẹ nhàng để dưỡng chất thấm sâu. Dùng ngày 2 lần để đặt hiệu quả tốt nhất.\r\n- Kết hợp nước dưỡng tóc vỏ bưởi và bồ kết herbario để chăm sóc từ thân đến ngọn.\r\n\r\nDùng bao lâu có hiệu quả\r\n* Tùy theo cơ địa của mỗi người, Serum vỏ bưởi và bồ kết Herbario sẽ có thời gian tác dụng khác nhau.\r\n- Trong thời gian đầu mới dùng sản phẩm, bạn sẽ thấy tình trạng rụng tóc giảm đáng kể.\r\n- Tiếp theo các tình trạng như bết tóc, khô xơ, chẻ ngọn sẽ được cải thiện, tóc sẽ suôn mượt và bồng bềnh dần lên.\r\n- Sau một thời gian, tóc sẽ bắt đầu mọc nhiều, mái tóc sẽ dày lên thấy rõ, sợi tóc chắc và rất mượt.\r\n\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất, in trên chai.\r\nMở nắp dùng trong 12 tháng.', 'https://localhost/Hair_Spa/img/sp20.png', 190000, 12),
(21, 'Bộ dầu gội xả Tigi Bed Head phục hồi cấp độ 3', 'Tigi', 'Bộ dầu gội xả Tigi Bed Head phục hồi cấp độ 3 750ml + 750ml\r\nDầu gội xả Tigi Bed Head phục hồi cấp độ 3 là một trong những sản phẩm chăm sóc tóc đặc biệt dành riêng cho những loại tóc bị hư tổn, mệt mỏi nhằm mang lại vẻ đẹp cường tráng tự nhiên đầy sức sống. Với khả năng bù đắp lại lượng ẩm tự nhiên của tóc, dầu gội Tigi giúp hồi sinh lại những mái tóc yếu chỉ sau vài lần sử dụng.\r\nDầu gội Tigi đỏ có chứa phức hợp hạt nano siêu nhỏ (hay còn gọi là hạt silicon siêu nhỏ) bám vào vùng tóc bị hư tổn (Silicon: giống như một lớp áo choàng bảo vệ tóc). Những hạt silicon này có thể bám dính vào tóc bởi bao quanh chúng là lớp màng tích điện dương (tóc tích điện âm).\r\nĐặc điểm khác biệt với những sản phẩm chứa Silicon khác: Đó là trọng lượng những phân tử Silicon và cách thức chúng bám vào sơi tóc khác nhau. Do vậy, tạo cho tóc cảm giác khỏe khoắn hơn và không gây nặng tóc hay bết dính.\r\nDầu gội xả Tigi Bed Head phục hồi cấp độ 3 dành cho tóc như thế nào?\r\n\r\nDành cho tóc khô xơ hư tổn nặng cấp độ 3, giúp phục hồi tóc, lấy lại độ đàn hồi và giúp tóc chắc khỏe.\r\nCách nhận biết tóc hư tổn cấp 3:\r\nTóc mất hết độ bóng, rất khô và ráp, tóc xốp và rất thấm nước (Thấy nặng tóc khi gội đầu, thậm chí sau khi lau khô rồi mà một lúc sau lại thấy tóc bị ướt nước).\r\nKhi bẻ cong sợi, tóc không hồi lại hình dáng ban đầu, kéo giãn rất dễ bị đứt.\r\nTóc rất rối, kể cả khi khô.\r\nCó thể xuất hiện đứt tóc, chẻ ngọn hoặc rụng nhiều bất thường.\r\nTần suất làm đẹp: Tẩy tóc nhiều lần, duỗi ép trên 4 lần/năm.\r\nHướng dẫn sử dụng:\r\nVới dầu gội: Đầu tiên, làm ướt tóc để trôi phần bụi bẩn. Sau đó, thoa dầu gội lên tóc và da đầu, massage nhẹ nhàng và xả sạch lại với nước.\r\nVới dầu xả: Sau khi làm sạch tóc với dầu gội, bạn cần thấm khô nước và thoa lượng dầu xả thích hợp lên thân và ngọn tóc để trong 5 phút và xả lại với nước.', 'https://localhost/Hair_Spa/img/sp21.png', 6000000, 14),
(22, 'Kem ủ tóc KERATIN COLLAGEN', 'Keratin', 'Keratin là một protein tự nhiên giúp ngăn chặn được tình trạng mất nước của tóc, giảm thiểu tóc khô xơ, rối và gãy rụng. Thế nhưng, qua thời gian thì keratin dần mất đi khiến tóc yếu và nhanh hư tổn. Chính vì điều này nhiều người đã tìm đến dầu gội keratin hoặc kem ủ tóc keratin như một phương pháp tốt nhất giúp phục hồi tóc hư tổn một cách nhanh chóng.\r\n\r\nKem ủ tóc KERATIN COLLAGEN 1000ML thích hợp cho mọi loại tóc, tóc ở tình trạng hư tổn nặng, tóc quăn tít, tóc dập xù, tóc thẳng đuột, lượn sóng, tóc tẩy hóa chất nặng, phục hồi tóc sau khi tẩy sau khi nhuộm màu sáng… thì đều áp dụng được.\r\n\r\nKhông giống với các quy trình chăm dưỡng truyền thống, sử dụng Kem ủ tóc KERATIN COLLAGEN 1000ML sẽ cho ra kết quả tức thì, khôi phục mái tóc mềm mượt, bóng bẩy chỉ sau một lần thực hiện. Luôn là cách chăm sóc tóc được người dùng truyền tai nhau là an toàn, nhanh chóng và tiết kiệm thời gian. Phương pháp ủ tóc bằng keratin sẽ không làm bạn phải thất vọng. \r\n\r\nKhi phục hồi tóc bằng Kem ủ tóc KERATIN COLLAGEN 1000ML bạn sẽ không cần nhiều sản phẩm chăm sóc tóc khác hoặc các thủ tục phức tạp khác để duy trì hiệu quả. Bởi vì những hiệu quả mà keratin mang lại cho mái tóc đã quá đủ, nên dù bạn có sử dụng sản phẩm chăm sóc tóc thông thường thì vẫn giữ được nét đẹp, mềm mại và chắc khoẻ.\r\n\r\nNếu mái tóc của bạn đang trong tình trạng khô xơ, hư tổn và chẻ ngọn trầm trọng thì phương pháp ủ tóc bằng thành phần keratin sẽ mang lại hiệu quả đến 70%. Không chỉ trả lại cho mái tóc trạng thái ban đầu, mà còn giúp cho tóc chắc khoẻ, bồng bềnh và mềm mượt vào nếp hơn.\r\n\r\nBạn có biết bản chất của keratin chính là protein, một thành phần quan trọng để định hình cấu trúc của mái tóc. Và khi bạn sử dụng dầu gội đầu chứa keratin thường xuyên có thể tuỳ chỉnh, tái định hình cấu trúc của tóc theo ý muốn. Mái tóc sẽ trở nên vào nếp chuẩn salon.\r\n-----\r\nƯỚNG DẪN SỬ DỤNG : \r\nBước 1: Gội đầu sạch trước khi ủ tóc\r\nBước 2: Chia tóc thành từng lớp để bôi kem ủ được đều. Ở từng lớp tóc, bôi kem ủ từ gốc tới ngọn.\r\nBước 3: Sau khi bôi kem ủ, quấn quanh tóc bằng khăn bông sạch, hoặc ủ bằng mũ tắm.\r\nBước 4: Sau 20 phút, tháo khăn ra, xả tóc thật sạch với nước mát.', 'https://localhost/Hair_Spa/img/sp22.png', 200000, 6),
(23, 'KEM Ủ TÓC PHỤC HỒI COLLAGEN KARSELL', 'Karsell', 'Công dụng:\r\n– Dầu hấp tóc Hấp lụa Collagen Karseell Maca Siêu Mềm Mượt Tóc 500ml là dịch vụ mới trong tương lai thay thế cho dịch vụ hấp dầu truyền thống, vì ưu điểm, giúp cho tóc mềm mượt hơn, bóng hơn và phục hồi hư tổn nhanh hơn.\r\n– Sử dụng hấp dưỡng cho mái tóc khô hư tổn, với thành phần collagen giúp phục hồi độ ẩm và độ bóng mượt cho mái tóc.\r\nCách dùng:\r\n– Lấy một lượng vừa đủ Hấp lụa Collagen Karseell Maca Siêu Mềm Mượt Tóc 500ml pha tỉ lệ 1:1 với nước ấm hòa tan, bôi lên tóc quấn khăn, để tự nhiên hoặc dùng máy kích nhiệt khoảng 10 – 20ph. Sau đó xả sạch rồi sấy khô tạo kiểu.\r\n– Đối với các bạn không có nhiều thời gian có thể dùng nhanh như dầu xả.\r\nHướng dẫn bảo quản:\r\n-Để sản phẩm ở nhiệt độ phòng,thoáng mát.\r\n-Đậy kín nắp sau khi sử dụng.\r\n-Tránh ánh sáng hoặc nơi gần nguồn điện,ẩm mốc.\r\n-Tránh xa tầm tay trẻ em.', 'https://localhost/Hair_Spa/img/sp23.png', 210000, 7),
(24, 'Kem Ủ Tóc Tigi Bed Head Đỏ', 'Tigi', '🔺 Kem ủ tóc Tigi là một lựa chọn hoàn hảo cung cấp dưỡng chất để tóc vượt qua tình trạng hư tổn nặng, cấp ẩm giúp tóc mềm mượt, giảm xơ rối và gãy rụng. Bảo vệ tóc trước tác động của nhiệt độ và môi trường, hỗ trợ tạo kiểu.\r\n🔺 Giống như dầu gội xả Tigi đỏ, sản phẩm hấp ủ tóc Tigi đỏ cũng là phương pháp dành cho mái tóc hư tổn nặng nề - hư tổn cấp độ 3.\r\nMột số tình trạng tóc ở mức độ này có thể biểu hiện như:\r\n- Tóc khô, xốp, dễ thấm nước và cho cảm giác nặng khi gội đầu.\r\n- Tóc xơ rối và gãy rụng nhiều bất thường.\r\n- Xuất hiện nhiều sợi tóc bị chẻ ngọn, chẻ thân hoặc cháy.\r\n- Tần suất thay đổi kiểu tóc: uốn, duỗi, nhuộm trên 4 lần/năm, thực hiện tẩy tóc.\r\n🔺 CÔNG DỤNG: \r\n✔ Phù hợp cho tóc thường, tóc khô xơ với mức độ trung bình.\r\n✔ Giúp tóc bóng hơn với độ bồng bềnh tự nhiên.\r\n✔ Cải thiện các vấn đề hư tổn, cho mái tóc suôn mượt \r\n✔ Nuôi dưỡng tóc từ gốc đến ngọn, phục hồi cấu trúc sợi tóc.\r\n✔ Kích thích sự phát triển của các sợi tóc con được khỏe mạnh.\r\n✔ Phục hồi mái tóc bị hư tổn nặng\r\n✔ Làm mềm mại mái tóc dày ngang bướng.\r\n❤ HƯỚNG DẪN SỪ DỤNG: \r\n- Làm sạch tóc với dầu gội, xả sạch xà phòng và dùng khăn bông mềm thấm cho ráo nước.\r\n- Lấy một lượng kem ủ vừa đủ và thoa đều lên tóc.\r\n- Bôi kem từ gốc đến ngọn theo từng lớp tóc bắt đầu từ lớp trên cùng, kết hợp massage nhẹ nhàng để dưỡng chất thẩm thấu nhanh hơn.\r\n- Sau khi bôi, quấn toàn bộ tóc lại rồi ủ bằng nón tắm hoặc khăn bông sạch và ấm.\r\n- Ủ tóc khoảng 20-30 phút và xả sạch tóc với nước.\r\n- Nên dùng kem ủ tóc từ 1 – 2 lần/tuần cho hiệu quả dưỡng tóc tốt nhất\r\n- Có thể sử dụng như một loại dầu xả cho tóc, thoa lên tóc sạch trong 1-5 phút.', 'https://localhost/Hair_Spa/img/sp24.png', 220000, 7);
INSERT INTO `sanpham` (`ID`, `TenSP`, `ThuongHieu`, `MoTa`, `Anh`, `Gia`, `SoLuong`) VALUES
(25, 'Serum Dưỡng Tóc Mise En Scene Perfect Serum Golden Marocco Argan Oil', 'Mise En Scene', 'Công dụng:\r\nSerum dưỡng tóc Mise En Scene Perfect 80ml mẫu mới 2020 với thành phần chính đến từ sữa ong chúa, tinh dầu hạt Argan và tinh chất hoa hồng, giúp chăm sóc tóc dễ gãy rụng trở nên mềm mại và rạng ngời.\r\n+ Truyền dinh dưỡng vào sâu từng sợi tóc giúp dưỡng tóc không những bóng, mềm mượt, mà còn dày lên, khỏe lên.\r\n+ Dùng cho tóc hư tổn nặng do thường xuyên nhuộm và sấy, lấy đi dấu hiệu hư tổn nặng nhất đang phát triển dần trên tóc bạn.\r\n+ Đặc biệt giầu Vitamin E, thành phần ngăn ngừa oxy hóa, táo tạo và cung cấp dưỡng chất cho tóc khô.\r\n+ Tinh dầu dưỡng phục hồi tóc Misen Scene của Hàn Quốc có hiệu quả rõ ràng và được đánh giá khả năng dưỡng tóc tốt hơn rất nhiều so với cách thức dùng dầu dừa dưỡng tóc hay các tinh dầu dưỡng tóc.\r\nHướng dẫn sử dụng: \r\n+ Sau khi gội sạch đầu, bạn chờ tóc khô tầm 90%, cho  tinh dầu ra lòng bàn tay và nhẹ nhàng bóp xoa đều lên tóc.\r\nĐể hiệu quả nhất, chúng ta có thể sử dụng sản phẩm này như vầy ạ: \r\n+  để tóc khô tự nhiên đến khi còn hơi ẩm thì bơm serum ra tay rồi thoa lên phần tóc hư tổn (thường là ngọn tóc) rồi sau đó để khô tự nhiên hoặc sấy khô đều được. Sau đó (khi tóc đã khô hẳn), thoa một ít tinh chất nữa lên toàn bộ tóc để đem đến hiệu quả mềm mượt thêm hơn.\r\n+ Tuy nhiên nếu da đầu bạn không phải da dầu thì vẫn có thể thoa một chút serum lên tóc khi tóc đã khô hoàn toàn, để tóc mượt mà hơn, không bị chỉa chỉa, xìa xìa kì dị nữa ạ. Nhưng bạn chỉ thoa một chút thôi, vì nếu thoa nhiều khi tóc khô thì sẽ dễ dẫn đến tình trạng tóc bết đấy ', 'https://localhost/Hair_Spa/img/sp25.png', 150000, 8),
(26, 'Serum dưỡng tóc Keratin Spa pharma', 'Keratin', 'Serum dưỡng tóc  Keratin Spa pharma dành cho tóc khô và hư tổn 100ml\r\n  - Thương hiệu: Spa Pharma\r\n  - Dung tích: 100ml\r\n  - Đối tượng sử dụng: Phù hợp cho cả Nam và Nữ\r\n  -Xuất xứ: Spa Pharma Israel              \r\n❤️Công Dụng:\r\n🌀 Keratin là chất quan trọng nhất để quyết định mái tóc bạn có khoẻ đẹp, dày và óng mượt hay không?\r\n🌀 Keratin là một lớp sừng cấu tạo nên móng tay và tóc, đặc biệt chiếm đến 70% cấu tạo của tóc. Nó chính là một loại protein có tác dụng bảo vệ tóc khỏi hư tổn và giúp tóc chắc khoẻ, tạo vẻ đẹp cho mái tóc. Mái tóc có Keratin đầy đủ sẽ giúp tóc khoẻ mạnh, cải thiện các vấn đề về tóc gãy, tóc tổn thương vì sử dụng nhiều hoá chất…\r\n🌀 Serum dưỡng tóc Keratin Spa pharma dành cho tóc khô và hư tổn 100ml với thành phần chủ yếu là Keratin thiên nhiên- chiết xuất quý giá từ Hoa hồng Jericho, loài mọc xung quanh Biển Chết , cùng dầu Argan, dầu hạt Jojoba, dầu hạnh nhân ngọt và vitamin giúp giữ cho mái tóc của bạn mềm mại, mượt mà, ngậm nước và không xơ rối. cung cấp một lượng cực lớn Keratin và protein nuôi dưỡng mái tóc của bạn\r\n🌀 Sản phẩm giúp phục hồi tóc hiệu quả, hiệu quả hãng cam kết chỉ sau 2 tuần sử dụng.\r\n🌀 Đặc biệt có tác dụng rất rõ ràng trên tóc làm hóa chất, tóc tẩy, tóc xơ rối và gãy rụng.\r\n🌀 Sản phẩm còn có tác dụng hạn chế gãy rụng tóc, kích thích mọc tóc. Mang lại cho bạn mái tóc chắc khỏe, mềm mượt và dễ vào nếp hơn.\r\n🌀Sản phẩm được rating 4,8/5 sao trên các trang làm đẹp uy tín, 1 trong những sản phẩm bán chạy nhất Amazone về chăm sóc tóc chuẩn spa.\r\n🌀Sản phẩm được sử dụng rộng rại tại Spa, salon tóc trên thị trường Châu Âu, đứng top 1 Israel về dòng sản phẩm chăm sóc tóc.\r\n\r\n❤️Khuyên dùng cho mọi đối tượng,đặc biệt là những đối tượng:\r\n1. Muốn tóc suôn mượt vào nếp\r\n2. Hay gãy rụng tóc, muốn mái tóc dày mượt.\r\n3. Muốn chăm sóc tóc chuẩn salon spa tại nhà\r\n4. Tóc khô xơ hư tổn do làm hóa chất\r\n5. Muốn tiết kiệm chi phí để tận hưởng mái tóc óng ả như đi spa tại nhà.', 'https://localhost/Hair_Spa/img/sp26.png', 260000, 28),
(27, 'Dầu Dưỡng Tóc Natural World Argan Oil Of Morocco Hair Treatment Chiết Xuất Dầu Argan Dưỡng Ẩm', 'Natural World', 'Dầu Dưỡng Tóc Natural World Argan Oil Of Morocco Hair Treatment Chiết Xuất Dầu Argan Dưỡng Ẩm 100ml\r\n- Tinh dầu Argan giàu vitamin E và các dưỡng chất cần thiết thấm sâu vào da đầu và chân tóc, nuôi dưỡng và bảo vệ tóc từ gốc đến ngọn. Sản phẩm giúp tái tạo cấu trúc sợ tóc, phục hồi tóc dễ gãy và chẻ ngọn đồng thời bổ sung độ ẩm cho tóc mềm mượt.\r\n- Dầu Argan giúp tóc mọc nhiều, tạo độ dày cho mái tóc, kích thích sản sinh biotin và collagen cho tóc khoẻ mạnh, ngăn chặn tình trạng tóc rụng quá nhiều.\r\n- Bên cạnh đó, sản phẩm còn giúp tóc chống lại quá trình lão hoá và bảo vệ tóc trước những tác nhân xấu từ môi trường như khói, bụi, ánh nắng mặt trời,\r\n- Da đầu được cung cấp độ ẩm cần thiết và dưỡng chất từ dầu Argan nên khoẻ mạnh, tránh được tình trạng không quá khô dẫn đến tróc vảy hay quá nhiều dầu làm tóc bết dính khó chịu.\r\n- Chất dầu nhẹ vàng óng khi thoa lên tóc thì thấm vào da đầu và tóc rất nhanh, không có tình trạng nhờn rít như các loại dầu khác.\r\n- Hương thơm nhẹ nhàng, thoảng thoáng, lưu lâu trên tóc.\r\n- Sản phẩm phù hợp với mọi loại tóc và da đầu.\r\n- Dùng trước khi gội đầu: thoa dầu dưỡng tóc lên mái tóc trước khi gội, chờ khoảng 3-5 phút, sau đó gội đầu như bình thường.\r\n- Dùng để dưỡng: lấy một lượng dầu dưỡng thoa lên tóc từ gốc đến ngọn sau đó massage nhẹ nhàng để dầu thấm đều vào sợi tóc trong khoảng 3-5 phút. Sau đó bạn tha hồ tạo kiểu tóc mình yêu thích.\r\n- Không cần xả lại với nước nếu bạn sử dụng dầu dưỡng tóc sau khi gội.\r\nGhi chú:\r\nCách xem NSX mới trên bao bì: NSX sẽ bao gồm 4 chữ số in dưới đáy chai/dưới đáy hộp sản phẩm và được in theo dạng YYWW, với YY là năm và WW là số thứ tự của tuần trong năm.\r\nVD:\r\nDầu Dưỡng Tóc Natural World Ẩm 100ml  có mã ghi dưới đáy chai 2042 có NSX là: tuần thứ 42 của năm 2020 (10/2020)\r\nDầu Dưỡng Tóc Natural World Ẩm 25ml  có mã ghi dưới đáy chai 2042 có NSX là: tuần thứ 40 của năm 2020 (09/2020)\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất', 'https://localhost/Hair_Spa/img/sp27.png', 350000, 21),
(28, 'Xịt Dưỡng Tóc Hairburst Volume And Growth Elixir Avocado & Coconut Chiết Xuất Bơ và Dừa', 'Hairburst', 'Xịt Dưỡng Tóc Hairburst Volume And Growth Elixir Avocado & Coconut Chiết Xuất Bơ và Dừa 125ml\r\nXịt Dưỡng Tóc Hairburst Volume And Growth Elixir Avocado & Coconut Chiết Xuất Bơ và Dừa 125ml đa chức năng chứa các thành phần có nguồn gốc từ tự nhiên như AnaGain giúp kéo dài vòng đời của tóc và giúp mái tóc dày hơn chỉ trong vòng 3 tháng. Ngoài ra còn chứa Aquaflex XL-30 giúp mái tóc phồng hơn.\r\nThành Phần Chính Và Công Dụng:\r\n- Xịt Dưỡng Tóc Hairburst Volume And Growth Elixir Avocado & Coconut Chiết Xuất Bơ và Dừa 125ml kích thích tóc mọc nhanh, dài và dày, bảo vệ tóc trước những tác nhân gây hại từ môi trường\r\n- Sản phẩm an toàn cho mọi loại tóc, chứa các thành phần thiên nhiên, không chứa paraben.\r\n- Nuôi dưỡng tóc: Protein từ đậu xanh hữu cơ giúp kích hoạt lại sự phát triển của tóc.\r\n- Tăng độ phồng cho tóc: Chứa Aquaflex XL-30 giúp tạo độ phồng cho tóc.\r\n- Tóc dày và bồng bềnh hơn: Anagain giúp giữ nước trên thân tóc nhằm cải thiện vẻ ngoài của tóc giúp tóc dày và bồng bềnh.\r\n- Bảo vệ mái tóc: Sử dụng chai xịt trước khi sấy tóc hoặc sử dụng máy tạo kiểu tóc giúp bảo vệ tóc khỏi sự tổn thương do sức nóng gây ra. Đồng thời cũng bảo vệ tóc khỏi tia UV và ô nhiễm.\r\n- Thân thiện với mái tóc: Không chứa chất tạo bọt và paraben.\r\n- Sản phẩm có nguồn gốc hoàn toàn từ tự nhiên, phù hợp dùng cho người ăn chay.\r\nĐối Tượng Sử Dụng:\r\nXịt Dưỡng Tóc Hairburst Volume And Growth Elixir Avocado & Coconut Chiết Xuất Bơ và Dừa 125ml phù hợp sử dụng cho mọi loại tóc.\r\nHướng Dẫn Sử Dụng:\r\nSau khi gội sạch tóc, hãy xịt tự do lên chân tóc và chiều dài của phần tóc sạch. Dùng máy sấy để tạo độ phồng cho tóc và tạo kiểu theo ý thích.\r\nHSD: 3 năm kể từ ngày sản xuất\r\n', 'https://localhost/Hair_Spa/img/sp28.png', 850000, 20),
(29, 'Dầu dưỡng tóc Tsubaki phục hồi hư tổn', 'Tsubaki', 'Kích thước bao gồm hộp:\r\nCao: 19.8 cm\r\nNgang: 11 cm\r\nDày: 4.5 cm\r\nThành Phần\r\n\"\"○ Chứa Dầu phục hồi phân tử Nano giúp thẩm thấu sâu, phục hồi tóc chẻ ngọn, tóc hư tổn nặng, bảo vệ tóc khỏi tác hại của tia UV và ngăn ngừa hư tổn do nhiệt độ cao của máy ép, máy sấy tóc… \r\n○ Chứa hàm lượng cao tinh dầu Hoa trà Nhật giúp phục hồi chuyên sâu và cung cấp độ ẩm cho tóc bóng mượt\"\"\"\r\nCông dụng\r\n\"Dầu dưỡng tóc cao cấp phục hồi tóc hư tổn 7 trong 1:\r\n- Phục hồi hư tổn cho tóc Uốn, Duỗi, Nhuộm\r\n- Bảo vệ tóc khỏi tác hại của tia UV\r\n- Ngăn chặn hư tổn từ nhiệt\r\n- Dưỡng ẩm\r\n- Tăng độ bóng\r\n- Tạo kiểu\r\n- Giúp tóc vào nếp\r\n○ Phục hồi chuyên sâu nhờ tinh dầu hoa trà Nhật giúp cung cấp độ ẩm, cho tóc bóng mượt, vào nếp mà không gây bết dính \r\n○ Cải thiện tình trạng khô rối, gãy nếp\r\n○ Bảo vệ tóc khỏi tác động của tia UV, ngăn chặn hư tổn từ nhiệt của máy ép, máy sấy tóc v.v…\r\n○ Hương hoa và quả mọng tươi mát, thanh lịch\"\r\n\"Hướng dẫn sử dụng:\r\n● Dùng cho tóc ẩm hoặc đã khô ● Lấy một lượng vừa đủ ( khoảng 2-3 lần ấn) và xoa đều trong lòng bàn tay và thoa lên đuôi tóc , massage nhẹ nhàng dần về phần thân tóc. Tránh bôi trực tiếp lên da dầu.\"\r\nNgày sản xuất: Xem trên bao bì sản phẩm\r\nHạn sử dụng: 3 năm kể từ ngày sản xuất \r\nXuất xứ: Nhật Bản', 'https://localhost/Hair_Spa/img/sp29.png', 230000, 10),
(30, 'Tinh Dầu Dưỡng Tóc Moroccanoil 100ml Chính hãng ( Set Limited)', 'Moroccanoil', 'TINH DẦU DƯỠNG TÓC MOROCCANOIL TREATMENT \r\nThông Tin Sản Phẩm:\r\n- Xuất xứ: Isreal \r\n- Nhà NKPP: Công ty TNHH Sáng Tạo Phong Cách Sống \r\n-Quy cách : Đủ size 25ML-100ML-125ML-200ML\r\n- CAM KẾT HÀNG CHÍNH HÃNG 100%\r\n-Không bán hàng rởm.\r\nTINH DẦU DƯỠNG TÓC MOROCCANOIL TREATMENT \r\n1.Công dụng: \r\nHãy sở hữu mái tóc óng ả, mềm mượt và khỏe mạnh mà bạn luôn mong ước. Dầu dưỡng tóc Moroccanoil® Treatment là sản phẩm tiên phong trong lĩnh vực chăm sóc tóc chiết xuất từ tinh dầu và đã tạo ra tiếng vang trên toàn thế giới về dầu argan. Là nền tảng đích thực cho việc tạo mẫu tóc, dầu dưỡng tóc Moroccanoil Treatment có thể sử dụng như dầu xả, công cụ tạo kiểu hay hoàn thiện kiểu tóc. Được chiết xuất từ dầu argan giàu chất chống ôxy hóa, sản phẩm làm thay đổi hoàn toàn mái tóc này giúp chống rối, đẩy nhanh thời gian làm khô tóc và làm tăng độ óng ả—cho tóc được cung cấp đủ dưỡng chất, dễ chải và suôn mượt sau mỗi lần sử dụng. Tỏa sáng khác biệt so với những người khác. \r\n2.Cách sử dụng: \r\nThoa một lượng bằng 1-2 nhát xịt tinh dầu Moroccanoil Treatment lên tóc sạch, đã lau khô bằng khăn, từ giữa thân tóc đến ngọn tóc. Sấy khô hoặc để khô tự nhiên. Thoa lên tóc khô để chống xoăn rối, dưỡng tóc chẻ ngọn và làm suôn mượt tóc. MẸO: Trộn một vài giọt dầu dưỡng tóc Moroccanoil Treatment với dầu hấp dưỡng ẩm sâu Moroccanoil Intense Hydrating Mask, Mặt nạ Moroccanoil dưỡng ẩm siêu nhẹ Weightless Hydrating Mask hoặc Mặt nạ phục hồi tóc Restorative Hair Mask để tăng cường dưỡng chất cho tóc. ', 'https://localhost/Hair_Spa/img/sp30.png', 750000, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uudai`
--

CREATE TABLE `uudai` (
  `ID` tinyint(2) NOT NULL,
  `TenUd` varchar(100) NOT NULL,
  `GiaGoc` int(11) NOT NULL,
  `GiaUd` int(10) NOT NULL,
  `Anh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `uudai`
--

INSERT INTO `uudai` (`ID`, `TenUd`, `GiaGoc`, `GiaUd`, `Anh`) VALUES
(1, 'Combo Tẩy + Nhuộm', 600000, 500000, 0),
(2, 'Combo Cắt + Uốn + Nhuộm', 1000000, 800000, 0),
(3, 'Combo Cắt + Gội', 300000, 250000, 0),
(4, 'Combo Duỗi + Phục hồi', 700000, 550000, 0),
(5, 'Combo Phục Hồi + Nhuộm', 700000, 550000, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cskh`
--
ALTER TABLE `cskh`
  ADD PRIMARY KEY (`MaPhanHoi`);

--
-- Chỉ mục cho bảng `csvc`
--
ALTER TABLE `csvc`
  ADD PRIMARY KEY (`MaVatChat`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nhanvien` (`nhanvien`),
  ADD KEY `ca_3` (`ca`),
  ADD KEY `ca` (`ca`) USING BTREE,
  ADD KEY `ca_2` (`ca`) USING BTREE,
  ADD KEY `ca_4` (`ca`) USING BTREE;

--
-- Chỉ mục cho bảng `hoivien`
--
ALTER TABLE `hoivien`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `listdichvu`
--
ALTER TABLE `listdichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `uudai`
--
ALTER TABLE `uudai`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cskh`
--
ALTER TABLE `cskh`
  MODIFY `MaPhanHoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `csvc`
--
ALTER TABLE `csvc`
  MODIFY `MaVatChat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `hoivien`
--
ALTER TABLE `hoivien`
  MODIFY `ID` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `listdichvu`
--
ALTER TABLE `listdichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `uudai`
--
ALTER TABLE `uudai`
  MODIFY `ID` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Cơ sở dữ liệu: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Đang đổ dữ liệu cho bảng `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"hairspa\",\"table\":\"hoivien\"},{\"db\":\"hairspa\",\"table\":\"sanpham\"},{\"db\":\"hairspa\",\"table\":\"cskh\"},{\"db\":\"hairspa\",\"table\":\"dichvu\"},{\"db\":\"hairspa\",\"table\":\"listdichvu\"},{\"db\":\"hairspa\",\"table\":\"uudai\"},{\"db\":\"hairspa\",\"table\":\"csvc\"},{\"db\":\"hairspa\",\"table\":\"CSVC\"},{\"db\":\"hairspa\",\"table\":\"cosovc\"},{\"db\":\"hairspa\",\"table\":\"nhansu\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('hairspa', 'nhansu', 'tennv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Đang đổ dữ liệu cho bảng `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'hairspa', 'hoivien', '[]', '2021-09-06 02:48:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-09-17 00:44:35', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"vi\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Chỉ mục cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Chỉ mục cho bảng `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Chỉ mục cho bảng `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Chỉ mục cho bảng `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Chỉ mục cho bảng `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Chỉ mục cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Chỉ mục cho bảng `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Chỉ mục cho bảng `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Chỉ mục cho bảng `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Chỉ mục cho bảng `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Cơ sở dữ liệu: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
