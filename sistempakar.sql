-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 05:46 AM
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
(8, 'Faradisa Adzkiya Putri', 3, 'perempuan'),
(9, 'Dzafran Hafidz Abqory', 2, 'laki-laki');

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
(1, 1, 'G001', 'G001'),
(2, 1, 'G002', 'G002'),
(3, 1, 'G003', 'G003'),
(4, 1, 'G004', 'G004'),
(5, 1, 'G005', 'G005'),
(6, 1, 'G006', 'G006'),
(7, 1, 'G007', '0'),
(8, 1, 'G008', '0'),
(9, 1, 'G009', '0'),
(10, 1, 'G010', '0'),
(11, 1, 'G011', '0'),
(12, 1, 'G012', '0'),
(13, 1, 'G013', '0'),
(14, 1, 'G014', '0'),
(15, 1, 'G015', '0'),
(16, 1, 'G016', '0'),
(17, 1, 'G017', '0'),
(18, 1, 'G018', '0'),
(19, 1, 'G019', '0'),
(20, 1, 'G020', '0'),
(21, 1, 'G021', '0'),
(22, 1, 'G022', '0'),
(23, 1, 'G023', '0'),
(24, 1, 'G024', '0'),
(25, 2, 'G001', '0'),
(26, 2, 'G002', 'G002'),
(27, 2, 'G003', '0'),
(28, 2, 'G004', '0'),
(29, 2, 'G005', '0'),
(30, 2, 'G006', '0'),
(31, 2, 'G007', '0'),
(32, 2, 'G008', '0'),
(33, 2, 'G009', '0'),
(34, 2, 'G010', '0'),
(35, 2, 'G011', '0'),
(36, 2, 'G012', '0'),
(37, 2, 'G013', '0'),
(38, 2, 'G014', '0'),
(39, 2, 'G015', '0'),
(40, 2, 'G016', '0'),
(41, 2, 'G017', '0'),
(42, 2, 'G018', '0'),
(43, 2, 'G019', '0'),
(44, 2, 'G020', '0'),
(45, 2, 'G021', '0'),
(46, 2, 'G022', '0'),
(47, 2, 'G023', '0'),
(48, 2, 'G024', '0'),
(49, 4, 'G001', '0'),
(50, 4, 'G002', '0'),
(51, 4, 'G003', '0'),
(52, 4, 'G004', '0'),
(53, 4, 'G005', '0'),
(54, 4, 'G006', '0'),
(55, 4, 'G007', '0'),
(56, 4, 'G008', '0'),
(57, 4, 'G009', '0'),
(58, 4, 'G010', 'G010'),
(59, 4, 'G011', '0'),
(60, 4, 'G012', '0'),
(61, 4, 'G013', '0'),
(62, 4, 'G014', '0'),
(63, 4, 'G015', '0'),
(64, 4, 'G016', '0'),
(65, 4, 'G017', '0'),
(66, 4, 'G018', '0'),
(67, 4, 'G019', '0'),
(68, 4, 'G020', '0'),
(69, 4, 'G021', '0'),
(70, 4, 'G022', '0'),
(71, 4, 'G023', '0'),
(72, 4, 'G024', '0'),
(73, 6, 'G001', 'G001'),
(74, 6, 'G002', 'G002'),
(75, 6, 'G003', 'G003'),
(76, 6, 'G004', 'G004'),
(77, 6, 'G005', 'G005'),
(78, 6, 'G006', 'G006'),
(79, 6, 'G007', '0'),
(80, 6, 'G008', '0'),
(81, 6, 'G009', '0'),
(82, 6, 'G010', '0'),
(83, 6, 'G011', '0'),
(84, 6, 'G012', '0'),
(85, 6, 'G013', '0'),
(86, 6, 'G014', '0'),
(87, 6, 'G015', '0'),
(88, 6, 'G016', '0'),
(89, 6, 'G017', '0'),
(90, 6, 'G018', '0'),
(91, 6, 'G019', '0'),
(92, 6, 'G020', '0'),
(93, 6, 'G021', '0'),
(94, 6, 'G022', '0'),
(95, 6, 'G023', '0'),
(96, 6, 'G024', '0'),
(97, 6, 'G001', 'G001'),
(98, 6, 'G002', 'G002'),
(99, 6, 'G003', 'G003'),
(100, 6, 'G004', 'G004'),
(101, 6, 'G005', 'G005'),
(102, 6, 'G006', 'G006'),
(103, 6, 'G007', '0'),
(104, 6, 'G008', '0'),
(105, 6, 'G009', '0'),
(106, 6, 'G010', '0'),
(107, 6, 'G011', '0'),
(108, 6, 'G012', '0'),
(109, 6, 'G013', '0'),
(110, 6, 'G014', '0'),
(111, 6, 'G015', '0'),
(112, 6, 'G016', '0'),
(113, 6, 'G017', '0'),
(114, 6, 'G018', '0'),
(115, 6, 'G019', '0'),
(116, 6, 'G020', '0'),
(117, 6, 'G021', '0'),
(118, 6, 'G022', '0'),
(119, 6, 'G023', '0'),
(120, 6, 'G024', '0'),
(121, 6, 'G001', 'G001'),
(122, 6, 'G002', 'G002'),
(123, 6, 'G003', 'G003'),
(124, 6, 'G004', 'G004'),
(125, 6, 'G005', 'G005'),
(126, 6, 'G006', 'G006'),
(127, 6, 'G007', '0'),
(128, 6, 'G008', '0'),
(129, 6, 'G009', '0'),
(130, 6, 'G010', '0'),
(131, 6, 'G011', '0'),
(132, 6, 'G012', '0'),
(133, 6, 'G013', '0'),
(134, 6, 'G014', '0'),
(135, 6, 'G015', '0'),
(136, 6, 'G016', '0'),
(137, 6, 'G017', '0'),
(138, 6, 'G018', '0'),
(139, 6, 'G019', '0'),
(140, 6, 'G020', '0'),
(141, 6, 'G021', '0'),
(142, 6, 'G022', '0'),
(143, 6, 'G023', '0'),
(144, 6, 'G024', '0'),
(145, 7, 'G001', 'G001'),
(146, 7, 'G002', 'G002'),
(147, 7, 'G003', 'G003'),
(148, 7, 'G004', 'G004'),
(149, 7, 'G005', 'G005'),
(150, 7, 'G006', 'G006'),
(151, 7, 'G007', '0'),
(152, 7, 'G008', '0'),
(153, 7, 'G009', '0'),
(154, 7, 'G010', '0'),
(155, 7, 'G011', '0'),
(156, 7, 'G012', '0'),
(157, 7, 'G013', '0'),
(158, 7, 'G014', '0'),
(159, 7, 'G015', '0'),
(160, 7, 'G016', '0'),
(161, 7, 'G017', '0'),
(162, 7, 'G018', '0'),
(163, 7, 'G019', '0'),
(164, 7, 'G020', '0'),
(165, 7, 'G021', '0'),
(166, 7, 'G022', '0'),
(167, 7, 'G023', '0'),
(168, 7, 'G024', '0'),
(169, 8, 'G001', 'G001'),
(170, 8, 'G002', 'G002'),
(171, 8, 'G003', 'G003'),
(172, 8, 'G004', 'G004'),
(173, 8, 'G005', 'G005'),
(174, 8, 'G006', 'G006'),
(175, 8, 'G007', '0'),
(176, 8, 'G008', '0'),
(177, 8, 'G009', '0'),
(178, 8, 'G010', '0'),
(179, 8, 'G011', '0'),
(180, 8, 'G012', '0'),
(181, 8, 'G013', '0'),
(182, 8, 'G014', '0'),
(183, 8, 'G015', '0'),
(184, 8, 'G016', '0'),
(185, 8, 'G017', '0'),
(186, 8, 'G018', '0'),
(187, 8, 'G019', '0'),
(188, 8, 'G020', '0'),
(189, 8, 'G021', '0'),
(190, 8, 'G022', '0'),
(191, 8, 'G023', '0'),
(192, 8, 'G024', '0'),
(193, 9, 'G001', '0'),
(194, 9, 'G002', '0'),
(195, 9, 'G003', '0'),
(196, 9, 'G004', 'G004'),
(197, 9, 'G005', '0'),
(198, 9, 'G006', 'G006'),
(199, 9, 'G007', 'G007'),
(200, 9, 'G008', 'G008'),
(201, 9, 'G009', 'G009'),
(202, 9, 'G010', '0'),
(203, 9, 'G011', '0'),
(204, 9, 'G012', '0'),
(205, 9, 'G013', '0'),
(206, 9, 'G014', '0'),
(207, 9, 'G015', '0'),
(208, 9, 'G016', '0'),
(209, 9, 'G017', '0'),
(210, 9, 'G018', '0'),
(211, 9, 'G019', '0'),
(212, 9, 'G020', '0'),
(213, 9, 'G021', '0'),
(214, 9, 'G022', '0'),
(215, 9, 'G023', '0'),
(216, 9, 'G024', '0');

-- --------------------------------------------------------

--
-- Table structure for table `saran_user`
--

CREATE TABLE `saran_user` (
  `no` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_handphone` varchar(13) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran_user`
--

INSERT INTO `saran_user` (`no`, `nama`, `email`, `no_handphone`, `pesan`) VALUES
(31, 'Yusuf Cahyo', 'cahyoyusuf3@gmail.co', '085770956671', 'Website bagus, tampilan menarik '),
(32, 'Nur Faizah Islamiati', 'nurislami@gmail.com', '085889012731', ' perbanyak lagi tentang penyakitnya');

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
('P001', 'ISPA', '1. Meningkatkan sistem imun<br>\r\n2. Mengkonsumsi makanan bergizi<br>\r\n3. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n4. Istirahat yang cukup<br>\r\n5. Therapy (obat-obatan dan antibiotik sesuai resep dokter)<br>\r\n6. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>\r\n7. Tindakan medis jika perlu seperti inhalasi<br>', '1. Jaga kebersihan dan kelembapan ruangan<br>\r\n2. Jauhkan anak dari asap rokok dan polusi udara<br>\r\n3. Gunakan masker kepada anak<br>\r\n4. Terapkan pola hidup sehat pada anak sejak dini<br>', 'Infeksi saluran pernapasan akut atau sering disebut sebagai ISPA adalah terjadinya infeksi yang parah pada bagian sinus, tenggorokan, saluran udara, atau paru-paru. Infeksi saluran pernapasan akut (ISPA) merupakan salah satu penyebab kematian tersering pada anak di negara sedang berkembang. Infeksi yang terjadi lebih sering disebabkan oleh virus meski bakteri juga bisa menyebabkan kondisi ini.', 'Virus yang biasanya merupakan penyebab penyakit ISPA yaitu rhinoviruses, RSV, adenovirus, virusinfulenza, atau virus parainfluenza, dan lebih sering menyerang pada bayi dan anak-anak daripada orang dewasa.<br>\r\nISPA dipengaruhi oleh berbagai macam faktor risiko, diantaranya: <br>\r\n1. Faktor lingkungan<br>\r\nFaktor lingkungan meliputi pencemaran udara dalam rumah (asap rokok dan asap hasil pembakaran bahan bakar untuk memasak dengan konsentrasi yang tinggi), ventilasi rumah dan kepadatan hunian.<br>\r\n2.	Faktor individu anak <br>\r\nFaktor individu anak meliputi umur anak, berat badan lahir, status gizi, vitamin A, dan status imunisasi.<br>\r\n3.	Faktor perilaku<br>\r\nFaktor perilaku meliputi perilaku pencegahan dan penanggulangan ISPA pada bayi atau peran aktif keluarga/masyarakat dalam menangani penyakit ISPA.', 'ispa.jpg'),
('P002', 'DBD', '1. Mengkonsumsi makanan bergizi<br>\r\n2. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n3. Istirahat yang cukup<br>\r\n4. Therapy (obat-obatan)<br>\r\n5. Melakukan cek darah jika perlu<br>\r\n6. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Jaga kebersihan dan kelembapan ruangan<br>\r\n2. Melakukan 3M (Menguras, Menutup, dan Mengubur)<br>\r\n3. Memberikan lotion/anti nyamuk<br>\r\n4. Pasang kelambu di tempat tidur anak<br>\r\n5. Terapkan pola hidup sehat pada anak sejak dini<br>', 'Penyakit Demam Berdarah Dengue adalah penyakit infeksi virus akut yang disebabkan oleh virus Dengue dan terutama menyerang anak- anak dengan ciri- ciri demam tinggi mendadak dengan manifestasi perdarahan dan bertendensi menimbulkan shock dan kematian. Masa inkubasi penyakit ini diperkirakan lebih kurang 7 hari.', 'Penyebabnya yaitu bisa ditularkan melalui gigitan nyamuk Aedes aegypti dan mungkin juga Albopictus. Kedua jenis nyamuk ini terdapat hampir di seluruh pelosok Indonesia kecuali ketinggian lebih dari 1000 meter diatas permukaan laut. <br>\r\nFaktor lainnya yaitu faktor lingkungan biasanya yang banyak air tergenang dan barang-barang yang memungkinkan air tergenang.<br>\r\nFaktor musim dan letak geografis, periode epidemi yang terutama berlangsung selama musim hujan dan erat kaitannya dengan kelembaban pada musim hujan. Hal tersebut menyebabkan peningkatan aktivitas vektor dalam menggigit karena didukung oleh lingkungan yang baik untuk masa inkubasi.\r\n', 'dbd.jpg'),
('P003', 'Campak', '1. Mengkonsumsi makanan bergizi<br>\r\n2. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n3. Batasi kontak anak dengan lingkungan sekitar<br>\r\n4. Istirahat yang cukup<br>\r\n5. Therapy (obat-obatan)<br>\r\n6. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Jauhkan anak dari penderita campak(melalui percikan ludah yang keluar dari batuk/bersin)<br>\r\n2. Pemberian imunisasi mumps-measles-rubella (MMR) alias imunisasi campak, gondongan, dan rubella<br>', 'Campak merupakan penyakit yang sangat menular dan menjadi salah satu penyebab utama kematian anak di berbagai negara berkembang termasuk Indonesia. Campak ditandai dengan munculnya ruam kemerahan di seluruh tubuh akibat infeksi virus. Campak dapat menyebabkan komplikasi serius, terutama pada bayi dan anak-anak. Komplikasi penyakit campak antara lain radang selaput otak (meningitis), radang paru â€“ paru, infeksi telinga.', 'Campak disebabkan oleh paramiksovirus. Penularan terjadi melalui percikan ludah dari hidung, mulut maupun tenggorokan penderita campak.', 'campak.jpg'),
('P004', 'Diare', '1. Mengkonsumsi makanan bergizi<br>\r\n2. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n3. Minum oralit<br>\r\n4. Tetapi usahakan pemberian obat diare anak seminimal mungkin untuk menghindari diare kronis<br>\r\n5. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Mencuci tangan anak secara rutin, terutama setelah bermain atau sebelum dan sesudah makan<br>\r\n2. Membersihkan badan anak setelah BAB/BAK<br>\r\n3. Orang dewasa yang merawat anak juga perlu menjaga kebersihan agar tidak menularkan mikroorganisme kepada anak<br>\r\n4. Perhatikan kebersihan makanan dan minuman yang diberikan pada anak<br>\r\n5. Jika anak yang masih mengonsumsi ASI, makanan yang dikonsumsi ibunya harus bergizi<br>\r\n6. Hindari memberikan makanan yang biasa dikonsumsi orang dewasa seperti pedas, asam, dan bergas<br>\r\n7. Jika anak sudah tidak mengonsumsi ASI, berikan susu formula yang sesuai usia anak<br>\r\n8. Terapkan pola hidup sehat pada anak sejak dini<br>', 'Diare merupakan kondisi yang ditandai dengan encernya tinja yang dikeluarkan dengan frekuensi buang air besar (BAB) yang lebih sering dibandingkan dengan biasanya. Pada umumnya, diare terjadi akibat konsumsi makanan atau minuman yang terkontaminasi bakteri, virus, atau parasit.', 'Diare bisa timbul akibat beberapa faktor berikut, yaitu:<br>\r\n1.	Infeksi virus akibat mengonsumsi makanan dan minuman yang kotor.<br>\r\n2.	Infeksi bakteri yang juga bisa menyebabkan keracunan makanan (campylobacter), clostridum difficile, Escherichia coli, salmonella, dan shigella.<br>\r\n3.	Efek samping obat-obatan tertentu.<br>\r\n4.	Mengonsumsi alcohol dan kopi secara berlebihan.', 'diare.jpg'),
('P005', 'TBC', '1. Meningkatkan sistem imun<br>\r\n2. Mengkonsumsi makanan bergizi<br>\r\n3. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n4. Istirahat yang cukup<br>\r\n5. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Pemberian vaksinasi BCG untuk merangsang pembentukan antibodi terhadap bakteri TB<br>\r\n2. Jauhkan anak dari penderita<br>\r\n3. Pisahkan peralatan makan<br>\r\n4. Cari sumber penularan dan obati sumber penularan dengan tuntas<br>\r\n5. Terapkan pola hidup sehat pada anak sejak dini<br>', 'Tuberkulosis (TBC atau TB) adalah penyakit yang banyak menyerang paru-paru. Penyakit tuberkulosis biasanya menular melalui udara yang tercemar dengan bakteri Mycobacterium tuberculosis yang dilepaskan pada saat penderita batuk.', 'TBC bisa ditularkan dari beberapa faktor penyebab, yaitu:<br>\r\n1.	Pertumbuhan penduduk yang tidak memiliki pola tertentu<br>\r\n2.	Urbanisasi yang tidak terkontrol dan terencana<br>\r\n3.	Kehidupan penduduk yang berdesakan<br>\r\n4.	Pola hidup masyarakat tidak sehat<br>\r\n5.	Status gizi masyarakat buruk<br>\r\n6.	Imunisasi tidak merata<br>', 'tbc.jpg'),
('P006', 'Cacingan', '1. Meningkatkan sistem imun<br>\r\n2. Mengkonsumsi makanan bergizi<br>\r\n3. Memperbanyak minum, untuk < 2 tahun diberikan ASI dan > 2 tahun diberikan air putih sehari +/- 1 liter<br>\r\n4. Periksakan kondisi anak ke tenaga medis (dokter) jika sudah dianggap kronis<br>', '1. Jaga kebersihan<br>\r\n2. Memberikan obat cacing seperti combantrin setiap 6 bulan sekali<br>\r\n3. Mencuci tangan anak secara rutin sebelum dan setelah beraktifitas<br>\r\n4. Terapkan pola hidup sehat pada anak sejak dini<br>', 'Cacingan merupakan penyakit yang diakibatkan cacing parasit yang berkembang biak di dalam sistem pencernaan manusia. Penyebab cacingan yang populer di Indonesia adalah cacing pita, cacing kremi, dan cacing tambang. Biasanya cacing bisa dengan mudah menular.', 'Cacingan bisa timbul akibat beberapa faktor berikut, yaitu:<br>\r\n1.	Pola hidup yang tidak sehat<br>\r\n2.	Makanan yang terkontaminasi<br>\r\n3.	Jari yang kotor<br>\r\n4.	Proses memasak yang kurang baik<br>\r\n5.	Tidak menjaga kebersihan anus<br>', 'cacingan.jpg');

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
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `diagnosa_pasien`
--
ALTER TABLE `diagnosa_pasien`
  MODIFY `id_diagnosa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `saran_user`
--
ALTER TABLE `saran_user`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_relasi`
--
ALTER TABLE `tbl_relasi`
  MODIFY `kd_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
