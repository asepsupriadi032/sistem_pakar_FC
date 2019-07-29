-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 09:15 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, '@admin', 'admin123.');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_anak` varchar(25) NOT NULL,
  `usia_anak` int(3) NOT NULL,
  `jk_anak` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `nama_anak`, `usia_anak`, `jk_anak`) VALUES
(1, 'ef', 3, 'laki-laki'),
(2, 'ef', 3, 'laki-laki'),
(3, 'ef', 3, 'laki-laki'),
(4, 'ef', 3, 'laki-laki'),
(5, 'ef', 3, 'laki-laki'),
(6, 'ef', 3, 'laki-laki'),
(7, 'ef', 3, 'laki-laki'),
(8, 'ef', 3, 'laki-laki'),
(9, 'ef', 3, 'laki-laki'),
(10, 'ef', 3, 'laki-laki'),
(11, 'ef', 3, 'laki-laki'),
(12, '', 0, ''),
(13, '', 0, ''),
(14, '', 0, ''),
(15, '', 0, ''),
(16, 'ef', 3, 'laki-laki'),
(17, 'asep', 21, 'laki-laki'),
(18, 'asep', 3, 'laki-laki'),
(19, 'asep', 21, 'laki-laki'),
(20, 'asep', 3, 'laki-laki'),
(21, 'asep', 21, 'perempuan'),
(22, 'asep', 3, 'perempuan'),
(23, 'ss', 21, 'perempuan'),
(24, 'nmn', 0, 'perempuan'),
(25, 'nmn', 12, 'perempuan'),
(26, 'nmn', 12, 'perempuan'),
(27, 'nmn', 12, 'perempuan'),
(28, 'nmn', 12, 'perempuan'),
(29, 'LAILLA', 20, 'perempuan'),
(30, 'nmn', 2, 'perempuan'),
(31, 'nmn', 2, 'laki-laki'),
(32, 'sa', 1, 'perempuan'),
(33, 'sa', 1, 'laki-laki'),
(34, 'sa', 1, 'laki-laki'),
(35, 'sa', 12, 'laki-laki'),
(36, 'asd', 23, 'laki-laki'),
(37, 'jk', 21, 'perempuan'),
(38, 'fd', 1, 'laki-laki'),
(39, 'nmn', 2, 'perempuan'),
(40, 'sa', 23, 'laki-laki'),
(41, 'sa', 12, 'laki-laki'),
(42, 'nmn', 12, 'perempuan'),
(43, 'nmn', 0, 'perempuan'),
(44, 'sa', 1, 'perempuan'),
(45, 'sa', 12, 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa_pasien`
--

CREATE TABLE `diagnosa_pasien` (
  `id_diagnosa` int(4) NOT NULL,
  `id_pasien` int(4) NOT NULL,
  `kd_gejala` varchar(6) NOT NULL,
  `gejala_pasien` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa_pasien`
--

INSERT INTO `diagnosa_pasien` (`id_diagnosa`, `id_pasien`, `kd_gejala`, `gejala_pasien`) VALUES
(77, 28, 'G001', '0'),
(78, 28, 'G002', '0'),
(79, 28, 'G003', '0'),
(80, 28, 'G004', '0'),
(81, 28, 'G005', '0'),
(82, 28, 'G006', '0'),
(83, 28, 'G007', '0'),
(84, 28, 'G008', '0'),
(85, 28, 'G009', '0'),
(86, 28, 'G010', '0'),
(87, 28, 'G012', '0'),
(88, 28, 'G013', '0'),
(89, 28, 'G014', '0'),
(90, 28, 'G015', '0'),
(91, 28, 'G016', '0'),
(92, 28, 'G017', '0'),
(93, 28, 'G018', '0'),
(94, 28, 'G019', '0'),
(95, 28, 'G020', '0'),
(96, 28, 'G021', '0'),
(97, 28, 'G022', '0'),
(98, 28, 'G023', '0'),
(99, 28, 'G024', '0'),
(100, 28, 'G025', 'G025'),
(101, 28, 'G001', 'G001'),
(102, 28, 'G002', '0'),
(103, 28, 'G003', 'G003'),
(104, 28, 'G004', '0'),
(105, 28, 'G005', '0'),
(106, 28, 'G006', '0'),
(107, 28, 'G007', '0'),
(108, 28, 'G008', '0'),
(109, 28, 'G009', '0'),
(110, 28, 'G010', '0'),
(111, 28, 'G012', '0'),
(112, 28, 'G013', '0'),
(113, 28, 'G014', '0'),
(114, 28, 'G015', '0'),
(115, 28, 'G016', '0'),
(116, 28, 'G017', '0'),
(117, 28, 'G018', '0'),
(118, 28, 'G019', '0'),
(119, 28, 'G020', '0'),
(120, 28, 'G021', '0'),
(121, 28, 'G022', '0'),
(122, 28, 'G023', '0'),
(123, 28, 'G024', '0'),
(124, 28, 'G025', 'G025'),
(125, 28, 'G001', '0'),
(126, 28, 'G002', '0'),
(127, 28, 'G003', '0'),
(128, 28, 'G004', '0'),
(129, 28, 'G005', '0'),
(130, 28, 'G006', '0'),
(131, 28, 'G007', '0'),
(132, 28, 'G008', '0'),
(133, 28, 'G009', '0'),
(134, 28, 'G010', '0'),
(135, 28, 'G012', '0'),
(136, 28, 'G013', '0'),
(137, 28, 'G014', '0'),
(138, 28, 'G015', '0'),
(139, 28, 'G016', '0'),
(140, 28, 'G017', '0'),
(141, 28, 'G018', '0'),
(142, 28, 'G019', '0'),
(143, 28, 'G020', '0'),
(144, 28, 'G021', '0'),
(145, 28, 'G022', '0'),
(146, 28, 'G023', '0'),
(147, 28, 'G024', '0'),
(148, 28, 'G025', 'G025'),
(149, 29, 'G001', '0'),
(150, 29, 'G002', '0'),
(151, 29, 'G003', '0'),
(152, 29, 'G004', '0'),
(153, 29, 'G005', '0'),
(154, 29, 'G006', '0'),
(155, 29, 'G007', '0'),
(156, 29, 'G008', '0'),
(157, 29, 'G009', '0'),
(158, 29, 'G010', '0'),
(159, 29, 'G011', '0'),
(160, 29, 'G012', '0'),
(161, 29, 'G013', '0'),
(162, 29, 'G014', '0'),
(163, 29, 'G015', '0'),
(164, 29, 'G016', '0'),
(165, 29, 'G017', '0'),
(166, 29, 'G018', '0'),
(167, 29, 'G019', '0'),
(168, 29, 'G020', '0'),
(169, 29, 'G021', '0'),
(170, 29, 'G022', '0'),
(171, 29, 'G023', '0'),
(172, 29, 'G024', '0'),
(173, 30, 'G001', 'G001'),
(174, 30, 'G002', '0'),
(175, 30, 'G003', 'G003'),
(176, 30, 'G004', 'G004'),
(177, 30, 'G005', '0'),
(178, 30, 'G006', '0'),
(179, 30, 'G007', '0'),
(180, 30, 'G008', '0'),
(181, 30, 'G009', '0'),
(182, 30, 'G010', '0'),
(183, 30, 'G011', '0'),
(184, 30, 'G012', '0'),
(185, 30, 'G013', '0'),
(186, 30, 'G014', '0'),
(187, 30, 'G015', '0'),
(188, 30, 'G016', '0'),
(189, 30, 'G017', '0'),
(190, 30, 'G018', '0'),
(191, 30, 'G019', '0'),
(192, 30, 'G020', '0'),
(193, 30, 'G021', '0'),
(194, 30, 'G022', '0'),
(195, 30, 'G023', '0'),
(196, 30, 'G024', '0'),
(197, 35, 'G001', '0'),
(198, 35, 'G002', '0'),
(199, 35, 'G003', '0'),
(200, 35, 'G004', '0'),
(201, 35, 'G005', '0'),
(202, 35, 'G006', '0'),
(203, 35, 'G007', '0'),
(204, 35, 'G008', '0'),
(205, 35, 'G009', '0'),
(206, 35, 'G010', '0'),
(207, 35, 'G011', '0'),
(208, 35, 'G012', '0'),
(209, 35, 'G013', '0'),
(210, 35, 'G014', '0'),
(211, 35, 'G015', '0'),
(212, 35, 'G016', '0'),
(213, 35, 'G017', '0'),
(214, 35, 'G018', '0'),
(215, 35, 'G019', '0'),
(216, 35, 'G020', '0'),
(217, 35, 'G021', '0'),
(218, 35, 'G022', '0'),
(219, 35, 'G023', 'G023'),
(220, 35, 'G024', 'G024'),
(221, 36, 'G001', 'G001'),
(222, 36, 'G002', 'G002'),
(223, 36, 'G003', 'G003'),
(224, 36, 'G004', 'G004'),
(225, 36, 'G005', 'G005'),
(226, 36, 'G006', 'G006'),
(227, 36, 'G007', '0'),
(228, 36, 'G008', '0'),
(229, 36, 'G009', '0'),
(230, 36, 'G010', '0'),
(231, 36, 'G011', '0'),
(232, 36, 'G012', '0'),
(233, 36, 'G013', '0'),
(234, 36, 'G014', '0'),
(235, 36, 'G015', '0'),
(236, 36, 'G016', '0'),
(237, 36, 'G017', '0'),
(238, 36, 'G018', '0'),
(239, 36, 'G019', '0'),
(240, 36, 'G020', '0'),
(241, 36, 'G021', '0'),
(242, 36, 'G022', '0'),
(243, 36, 'G023', '0'),
(244, 36, 'G024', '0'),
(245, 37, 'G001', 'G001'),
(246, 37, 'G002', 'G002'),
(247, 37, 'G003', 'G003'),
(248, 37, 'G004', 'G004'),
(249, 37, 'G005', 'G005'),
(250, 37, 'G006', 'G006'),
(251, 37, 'G007', '0'),
(252, 37, 'G008', '0'),
(253, 37, 'G009', '0'),
(254, 37, 'G010', '0'),
(255, 37, 'G011', '0'),
(256, 37, 'G012', '0'),
(257, 37, 'G013', '0'),
(258, 37, 'G014', '0'),
(259, 37, 'G015', '0'),
(260, 37, 'G016', '0'),
(261, 37, 'G017', '0'),
(262, 37, 'G018', '0'),
(263, 37, 'G019', '0'),
(264, 37, 'G020', '0'),
(265, 37, 'G021', '0'),
(266, 37, 'G022', '0'),
(267, 37, 'G023', '0'),
(268, 37, 'G024', '0'),
(269, 39, 'G001', 'G001'),
(270, 39, 'G002', 'G002'),
(271, 39, 'G003', 'G003'),
(272, 39, 'G004', 'G004'),
(273, 39, 'G005', 'G005'),
(274, 39, 'G006', 'G006'),
(275, 39, 'G007', '0'),
(276, 39, 'G008', '0'),
(277, 39, 'G009', '0'),
(278, 39, 'G010', '0'),
(279, 39, 'G011', '0'),
(280, 39, 'G012', '0'),
(281, 39, 'G013', '0'),
(282, 39, 'G014', '0'),
(283, 39, 'G015', '0'),
(284, 39, 'G016', '0'),
(285, 39, 'G017', '0'),
(286, 39, 'G018', '0'),
(287, 39, 'G019', '0'),
(288, 39, 'G020', '0'),
(289, 39, 'G021', '0'),
(290, 39, 'G022', '0'),
(291, 39, 'G023', '0'),
(292, 39, 'G024', '0'),
(293, 40, 'G001', '0'),
(294, 40, 'G002', 'G002'),
(295, 40, 'G003', 'G003'),
(296, 40, 'G004', '0'),
(297, 40, 'G005', '0'),
(298, 40, 'G006', '0'),
(299, 40, 'G007', '0'),
(300, 40, 'G008', '0'),
(301, 40, 'G009', '0'),
(302, 40, 'G010', '0'),
(303, 40, 'G011', '0'),
(304, 40, 'G012', 'G012'),
(305, 40, 'G013', '0'),
(306, 40, 'G014', '0'),
(307, 40, 'G015', '0'),
(308, 40, 'G016', '0'),
(309, 40, 'G017', '0'),
(310, 40, 'G018', 'G018'),
(311, 40, 'G019', '0'),
(312, 40, 'G020', '0'),
(313, 40, 'G021', '0'),
(314, 40, 'G022', '0'),
(315, 40, 'G023', '0'),
(316, 40, 'G024', '0'),
(317, 41, 'G001', '0'),
(318, 41, 'G002', '0'),
(319, 41, 'G003', '0'),
(320, 41, 'G004', 'G004'),
(321, 41, 'G005', '0'),
(322, 41, 'G006', 'G006'),
(323, 41, 'G007', 'G007'),
(324, 41, 'G008', 'G008'),
(325, 41, 'G009', 'G009'),
(326, 41, 'G010', '0'),
(327, 41, 'G011', '0'),
(328, 41, 'G012', 'G012'),
(329, 41, 'G013', '0'),
(330, 41, 'G014', '0'),
(331, 41, 'G015', '0'),
(332, 41, 'G016', '0'),
(333, 41, 'G017', '0'),
(334, 41, 'G018', '0'),
(335, 41, 'G019', '0'),
(336, 41, 'G020', '0'),
(337, 41, 'G021', '0'),
(338, 41, 'G022', '0'),
(339, 41, 'G023', '0'),
(340, 41, 'G024', '0'),
(341, 42, 'G001', 'G001'),
(342, 42, 'G002', 'G002'),
(343, 42, 'G003', 'G003'),
(344, 42, 'G004', 'G004'),
(345, 42, 'G005', 'G005'),
(346, 42, 'G006', 'G006'),
(347, 42, 'G007', '0'),
(348, 42, 'G008', '0'),
(349, 42, 'G009', '0'),
(350, 42, 'G010', '0'),
(351, 42, 'G011', '0'),
(352, 42, 'G012', '0'),
(353, 42, 'G013', '0'),
(354, 42, 'G014', '0'),
(355, 42, 'G015', '0'),
(356, 42, 'G016', '0'),
(357, 42, 'G017', '0'),
(358, 42, 'G018', '0'),
(359, 42, 'G019', '0'),
(360, 42, 'G020', '0'),
(361, 42, 'G021', '0'),
(362, 42, 'G022', '0'),
(363, 42, 'G023', '0'),
(364, 42, 'G024', '0'),
(365, 43, 'G001', 'G001'),
(366, 43, 'G002', 'G002'),
(367, 43, 'G003', 'G003'),
(368, 43, 'G004', 'G004'),
(369, 43, 'G005', 'G005'),
(370, 43, 'G006', 'G006'),
(371, 43, 'G007', '0'),
(372, 43, 'G008', '0'),
(373, 43, 'G009', '0'),
(374, 43, 'G010', '0'),
(375, 43, 'G011', '0'),
(376, 43, 'G012', '0'),
(377, 43, 'G013', '0'),
(378, 43, 'G014', '0'),
(379, 43, 'G015', '0'),
(380, 43, 'G016', '0'),
(381, 43, 'G017', '0'),
(382, 43, 'G018', '0'),
(383, 43, 'G019', '0'),
(384, 43, 'G020', '0'),
(385, 43, 'G021', '0'),
(386, 43, 'G022', '0'),
(387, 43, 'G023', '0'),
(388, 43, 'G024', '0'),
(389, 44, 'G001', 'G001'),
(390, 44, 'G002', 'G002'),
(391, 44, 'G003', 'G003'),
(392, 44, 'G004', 'G004'),
(393, 44, 'G005', '0'),
(394, 44, 'G006', 'G006'),
(395, 44, 'G007', '0'),
(396, 44, 'G008', '0'),
(397, 44, 'G009', '0'),
(398, 44, 'G010', 'G010'),
(399, 44, 'G011', 'G011'),
(400, 44, 'G012', 'G012'),
(401, 44, 'G013', 'G013'),
(402, 44, 'G014', '0'),
(403, 44, 'G015', '0'),
(404, 44, 'G016', '0'),
(405, 44, 'G017', '0'),
(406, 44, 'G018', '0'),
(407, 44, 'G019', '0'),
(408, 44, 'G020', '0'),
(409, 44, 'G021', '0'),
(410, 44, 'G022', '0'),
(411, 44, 'G023', '0'),
(412, 44, 'G024', '0'),
(413, 45, 'G001', 'G001'),
(414, 45, 'G002', 'G002'),
(415, 45, 'G003', 'G003'),
(416, 45, 'G004', 'G004'),
(417, 45, 'G005', 'G005'),
(418, 45, 'G006', 'G006'),
(419, 45, 'G007', '0'),
(420, 45, 'G008', '0'),
(421, 45, 'G009', '0'),
(422, 45, 'G010', '0'),
(423, 45, 'G011', '0'),
(424, 45, 'G012', '0'),
(425, 45, 'G013', '0'),
(426, 45, 'G014', '0'),
(427, 45, 'G015', '0'),
(428, 45, 'G016', '0'),
(429, 45, 'G017', '0'),
(430, 45, 'G018', '0'),
(431, 45, 'G019', '0'),
(432, 45, 'G020', '0'),
(433, 45, 'G021', '0'),
(434, 45, 'G022', '0'),
(435, 45, 'G023', '0'),
(436, 45, 'G024', '0');

-- --------------------------------------------------------

--
-- Table structure for table `saran_user`
--

CREATE TABLE `saran_user` (
  `no` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_handphone` int(12) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran_user`
--

INSERT INTO `saran_user` (`no`, `nama`, `email`, `no_handphone`, `pesan`) VALUES
(23, 'GT', '@admin', 12, '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kd_gejala` varchar(5) NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kd_gejala`, `gejala`) VALUES
('G001', 'Hidung tersumbat atau mengeluarkan ingus'),
('G002', 'Bersin'),
('G003', 'Batuk kering'),
('G004', 'Demam antara suhu 37,2<sup>o</sup> C-40<sup>o</sup> C'),
('G005', 'Sakit Kepala'),
('G006', 'Kelelahan dan merasa lemas'),
('G007', 'Demam bisa berlangsung selama 1-7 hari'),
('G008', 'Ruam atau bintik-bintik merah pada kulit'),
('G009', 'Nyeri pada otot, sendi, dan tulang demam muncul'),
('G010', 'Mata merah dan berair'),
('G011', 'Sensitif terhadap cahaya'),
('G012', 'Kehilangan nafsu makan dan menurun'),
('G013', 'Ruam atau bintik-bintik putih keabuan di mulut dan tenggorokan'),
('G014', 'BAB lebih dari 3 hari'),
('G015', 'BAB sudah tidak berampas/cair'),
('G016', 'Sakit perut seperti melilit/diremas-remas'),
('G017', 'Tanda-tanda dehidrasi, mulut dan kulit kering'),
('G018', 'Batuk lebih dari 2 minggu'),
('G019', 'Murung'),
('G020', 'Lekas marah'),
('G021', 'Nyeri dada/batuk berdarah'),
('G022', 'Berat badan menurun'),
('G023', 'Kurang fokus'),
('G024', 'Keluar cacing dalam feses');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `kd_penyakit` varchar(5) NOT NULL,
  `penyakit` varchar(25) NOT NULL,
  `solusi` text NOT NULL,
  `pencegahan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `penyebab` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`kd_penyakit`, `penyakit`, `solusi`, `pencegahan`, `deskripsi`, `penyebab`, `gambar`) VALUES
('P001', 'ISPA', '1. Meningkatkan sistem imun<br>\r\n2. Mengkonsumsi makanan bergizi<br>\r\n3. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n4. Istirahat yang cukup<br>\r\n5. Therapy (obat-obatan dan antibiotik sesuai resep dokter)<br>\r\n6. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>\r\n7. Tindakan medis jika perlu seperti inhalasi<br>', '1. Jaga kebersihan dan kelembapan ruangan<br>\r\n2. Jauhkan anak dari asap rokok dan polusi udara<br>\r\n3. Gunakan masker kepada anak<br>\r\n4. Terapkan pola hidup sehat pada anak sejak dini<br>', 'ISPA merupakan penyakit saluran pernafasan akut', 'penyebabnya yaitu', 'ispa.jpg'),
('P002', 'DBD', '1. Mengkonsumsi makanan bergizi<br>\r\n2. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n3. Istirahat yang cukup<br>\r\n4. Therapy (obat-obatan)<br>\r\n5. Melakukan cek darah jika perlu<br>\r\n6. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Jaga kebersihan dan kelembapan ruangan<br>\r\n2. Melakukan 3M (Menguras, Menutup, dan Mengubur)<br>\r\n3. Memberikan lotion/anti nyamuk<br>\r\n4. Pasang kelambu di tempat tidur anak<br>\r\n5. Terapkan pola hidup sehat pada anak sejak dini<br>', '', '', 'dbd.jpg'),
('P003', 'Campak', '1. Mengkonsumsi makanan bergizi<br>\r\n2. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n3. Batasi kontak anak dengan lingkungan sekitar<br>\r\n4. Istirahat yang cukup<br>\r\n5. Therapy (obat-obatan)<br>\r\n6. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Jauhkan anak dari penderita campak(melalui percikan ludah yang keluar dari batuk/bersin)<br>\r\n2. Pemberian imunisasi mumps-measles-rubella (MMR) alias imunisasi campak, gondongan, dan rubella<br>', '', '', 'campak.jpg'),
('P004', 'Diare', '1. Mengkonsumsi makanan bergizi<br>\r\n2. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n3. Minum oralit<br>\r\n4. Tetapi usahakan pemberian obat diare anak seminimal mungkin untuk menghindari diare kronis<br>\r\n5. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Mencuci tangan anak secara rutin, terutama setelah bermain atau sebelum dan sesudah makan<br>\r\n2. Membersihkan badan anak setelah BAB/BAK<br>\r\n3. Orang dewasa yang merawat anak juga perlu menjaga kebersihan agar tidak menularkan mikroorganisme kepada anak<br>\r\n4. Perhatikan kebersihan makanan dan minuman yang diberikan pada anak<br>\r\n5. Jika anak yang masih mengonsumsi ASI, makanan yang dikonsumsi ibunya harus bergizi<br>\r\n6. Hindari memberikan makanan yang biasa dikonsumsi orang dewasa seperti pedas, asam, dan bergas<br>\r\n7. Jika anak sudah tidak mengonsumsi ASI, berikan susu formula yang sesuai usia anak<br>\r\n8. Terapkan pola hidup sehat pada anak sejak dini<br>', '', '', 'diare.jpg'),
('P005', 'TBC', '1. Meningkatkan sistem imun<br>\r\n2. Mengkonsumsi makanan bergizi<br>\r\n3. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n4. Istirahat yang cukup<br>\r\n5. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Pemberian vaksinasi BCG untuk merangsang pembentukan antibodi terhadap bakteri TB<br>\r\n2. Jauhkan anak dari penderita<br>\r\n3. Pisahkan peralatan makan<br>\r\n4. Cari sumber penularan dan obati sumber penularan dengan tuntas<br>\r\n5. Terapkan pola hidup sehat pada anak sejak dini<br>', '', '', 'tbc.jpg'),
('P006', 'Cacingan', '1. Meningkatkan sistem imun<br>\r\n2. Mengkonsumsi makanan bergizi<br>\r\n3. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n4. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Jaga kebersihan<br>\r\n2. Memberikan obat cacing seperti combantrin setiap 6 bulan sekali<br>\r\n3. Mencuci tangan anak secara rutin sebelum dan setelah beraktifitas<br>\r\n4. Terapkan pola hidup sehat pada anak sejak dini<br>', '', '', 'cacingan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_relasi`
--

CREATE TABLE `tbl_relasi` (
  `kd_relasi` int(11) NOT NULL,
  `kd_penyakit` varchar(5) NOT NULL,
  `kd_gejala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_relasi`
--

INSERT INTO `tbl_relasi` (`kd_relasi`, `kd_penyakit`, `kd_gejala`) VALUES
(13, 'P001', 'G001'),
(14, 'P001', 'G002'),
(18, 'P001', 'G003'),
(21, 'P001', 'G004'),
(23, 'P001', 'G005'),
(26, 'P001', 'G006'),
(27, 'P002', 'G004'),
(33, 'P002', 'G006'),
(37, 'P002', 'G007'),
(42, 'P002', 'G008'),
(43, 'P002', 'G009'),
(45, 'P002', 'G012'),
(47, 'P003', 'G001'),
(50, 'P003', 'G002'),
(52, 'P003', 'G003'),
(54, 'P003', 'G004'),
(56, 'P003', 'G006'),
(59, 'P003', 'G010'),
(61, 'P003', 'G011'),
(64, 'P003', 'G012'),
(66, 'P003', 'G013'),
(68, 'P004', 'G004'),
(70, 'P004', 'G006'),
(71, 'P004', 'G014'),
(72, 'P004', 'G015'),
(73, 'P004', 'G016'),
(74, 'P004', 'G017'),
(76, 'P005', 'G006'),
(77, 'P005', 'G012'),
(78, 'P005', 'G018'),
(79, 'P005', 'G019'),
(80, 'P005', 'G020'),
(81, 'P005', 'G021'),
(82, 'P005', 'G022'),
(83, 'P006', 'G006'),
(84, 'P006', 'G012'),
(85, 'P006', 'G023'),
(86, 'P006', 'G024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `diagnosa_pasien`
--
ALTER TABLE `diagnosa_pasien`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `saran_user`
--
ALTER TABLE `saran_user`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `tbl_relasi`
--
ALTER TABLE `tbl_relasi`
  ADD PRIMARY KEY (`kd_relasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `diagnosa_pasien`
--
ALTER TABLE `diagnosa_pasien`
  MODIFY `id_diagnosa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT for table `saran_user`
--
ALTER TABLE `saran_user`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_relasi`
--
ALTER TABLE `tbl_relasi`
  MODIFY `kd_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
