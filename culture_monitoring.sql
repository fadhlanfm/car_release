-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 07:07 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `culture_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `kode` varchar(10) NOT NULL,
  `kode_unit` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`kode`, `kode_unit`, `nama`, `last_update`) VALUES
('AMIDM', 'SUBAM', 'Mataram', '2016-07-15 07:23:06'),
('AMQDM', 'UPGAM', 'Ambon', '2016-07-15 07:23:06'),
('AMSDM', 'JKTAM', 'Amsterdam', '2016-07-15 07:23:06'),
('BDJDM', 'UPGAM', 'Banjarmasin', '2016-07-15 07:23:06'),
('BDODM', 'JKTAM', 'Bandung', '2016-07-15 07:23:06'),
('BEJDM', 'UPGAM', 'Berau', '2016-07-15 07:23:06'),
('BIKDM', 'UPGAM', 'Biak', '2016-07-15 07:23:06'),
('BJSDM', 'SHAAM', 'Beijing', '2016-07-15 07:23:06'),
('BKKDM', 'SINAM', 'Bangkok', '2016-07-15 07:23:06'),
('BKSDM', 'MESAM', 'Bengkulu', '2016-07-15 07:23:06'),
('BMUDM', 'SUBAM', 'Bima', '2016-07-15 07:23:06'),
('BPNDM', 'UPGAM', 'Balikpapan', '2016-07-15 07:23:06'),
('BTHDM', 'MESAM', 'Batam', '2016-07-15 07:23:06'),
('BTJDM', 'MESAM', 'Banda Aceh', '2016-07-15 07:23:06'),
('BUWDM', 'UPGAM', 'Bau-bau', '2016-07-15 07:23:06'),
('BWXDM', 'SUBAM', 'Banyuwangi', '2016-07-15 07:23:06'),
('CANDM', 'SHAAM', 'Guangzhou', '2016-07-15 07:23:06'),
('DJBDM', 'MESAM', 'Jambi', '2016-07-15 07:23:06'),
('DJJDM', 'UPGAM', 'Jayapura', '2016-07-15 07:23:06'),
('DPSDM', 'SUBAM', 'Denpasar', '2016-07-15 07:23:06'),
('DTBDM', 'MESAM', 'Silangit', '2016-07-15 07:23:06'),
('ENEDM', 'SUBAM', 'Ende', '2016-07-15 07:23:06'),
('FLZDM', 'MESAM', 'Pinangsori', '2016-07-15 07:23:06'),
('GNSDM', 'MESAM', 'Gunungsitoli', '2016-07-15 07:23:06'),
('GTODM', 'UPGAM', 'Gorontalo', '2016-07-15 07:23:06'),
('HKGDM', 'SHAAM', 'Hongkong', '2016-07-15 07:23:06'),
('JBBDM', 'SUBAM', 'Jember', '2016-07-15 07:23:06'),
('JEDDM', 'JKTAM', 'Jeddah', '2016-07-15 07:23:06'),
('JKTDM', 'JKTAM', 'Jakarta', '2016-07-15 07:23:06'),
('JOGDM', 'SUBAM', 'Jogjakarta', '2016-07-15 07:23:06'),
('KDIDM', 'UPGAM', 'Kendari', '2016-07-15 07:23:06'),
('KOEDM', 'SUBAM', 'Kupang', '2016-07-15 07:23:06'),
('KTGDM', 'UPGAM', 'Ketapang', '2016-07-15 07:23:06'),
('KULDM', 'SINAM', 'Kuala Lumpur', '2016-07-15 07:23:06'),
('LBJDM', 'SUBAM', 'Labuan Bajo', '2016-07-15 07:23:06'),
('LONDM', 'JKTAM', 'London', '2016-07-15 07:23:06'),
('LSWDM', 'MESAM', 'Lhokseumawe', '2016-07-15 07:23:06'),
('LUVDM', 'UPGAM', 'Langgur', '2016-07-15 07:23:06'),
('LUWDM', 'UPGAM', 'Luwuk', '2016-07-15 07:23:06'),
('MDCDM', 'UPGAM', 'Manado', '2016-07-15 07:23:06'),
('MELDM', 'SYDAM', 'Melbourne', '2016-07-15 07:23:06'),
('MESDM', 'MESAM', 'Medan', '2016-07-15 07:23:06'),
('MJUDM', 'UPGAM', 'Mamuju', '2016-07-15 07:23:06'),
('MKQDM', 'UPGAM', 'Merauke', '2016-07-15 07:23:06'),
('MKWDM', 'UPGAM', 'Manokwari', '2016-07-15 07:23:06'),
('MLGDM', 'SUBAM', 'Malang', '2016-07-15 07:23:06'),
('OSADM', 'TYOAM', 'Osaka', '2016-07-15 07:23:06'),
('PDGDM', 'MESAM', 'Padang', '2016-07-15 07:23:06'),
('PERDM', 'SYDAM', 'Perth', '2016-07-15 07:23:06'),
('PGKDM', 'MESAM', 'Pangkal Pinang', '2016-07-15 07:23:06'),
('PKNDM', 'UPGAM', 'Pangkalanbun', '2016-07-15 07:23:06'),
('PKUDM', 'MESAM', 'Pekanbaru', '2016-07-15 07:23:06'),
('PKYDM', 'UPGAM', 'Palangkaraya', '2016-07-15 07:23:06'),
('PLMDM', 'MESAM', 'Palembang', '2016-07-15 07:23:06'),
('PLWDM', 'UPGAM', 'Palu', '2016-07-15 07:23:06'),
('PNKDM', 'UPGAM', 'Pontianak', '2016-07-15 07:23:06'),
('PSUDM', 'UPGAM', 'Putussibau', '2016-07-15 07:23:06'),
('SBGDM', 'MESAM', 'Sabang', '2016-07-15 07:23:06'),
('SELDM', 'TYOAM', 'Seoul', '2016-07-15 07:23:06'),
('SHADM', 'SHAAM', 'Shanghai', '2016-07-15 07:23:06'),
('SINDM', 'SINAM', 'Singapura', '2016-07-15 07:23:06'),
('SOCDM', 'SUBAM', 'Solo', '2016-07-15 07:23:06'),
('SOQDM', 'UPGAM', 'Sorong', '2016-07-15 07:23:06'),
('SQGDM', 'UPGAM', 'Sintang', '2016-07-15 07:23:06'),
('SRGDM', 'SUBAM', 'Semarang', '2016-07-15 07:23:06'),
('SUBDM', 'SUBAM', 'Surabaya', '2016-07-15 07:23:06'),
('SWQDM', 'SUBAM', 'Sumbawa Besar', '2016-07-15 07:23:06'),
('SXKDM', 'UPGAM', 'Saumlaki', '2016-07-15 07:23:06'),
('SYDDM', 'SYDAM', 'Sydney', '2016-07-15 07:23:06'),
('TIMDM', 'UPGAM', 'Timika', '2016-07-15 07:23:06'),
('TJQDM', 'MESAM', 'Tanjung Pandan', '2016-07-15 07:23:06'),
('TKGDM', 'MESAM', 'Tanjung Karang', '2016-07-15 07:23:06'),
('TMCDM', 'SUBAM', 'Tambolaku', '2016-07-15 07:23:06'),
('TNJDM', 'MESAM', 'Tanjung Pinang', '2016-07-15 07:23:06'),
('TRKDM', 'UPGAM', 'Tarakan', '2016-07-15 07:23:06'),
('TTEDM', 'UPGAM', 'Ternate', '2016-07-15 07:23:06'),
('TYODM', 'TYOAM', 'Tokyo', '2016-07-15 07:23:06'),
('UPGDM', 'UPGAM', 'Ujungpandang', '2016-07-15 07:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `direktorat`
--

CREATE TABLE `direktorat` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direktorat`
--

INSERT INTO `direktorat` (`kode`, `nama`, `last_update`) VALUES
('JKTDC', 'Services', '2016-07-15 02:21:12'),
('JKTDE', 'Maintenance & Information Technology', '2016-07-15 02:21:12'),
('JKTDF', 'Finance & Risk Management', '2016-07-15 02:21:12'),
('JKTDG', 'Cargo', '2016-07-15 02:21:12'),
('JKTDI', 'Human Capital & Corporate Affairs', '2016-07-15 02:21:12'),
('JKTDN', 'Commercial', '2016-07-15 02:21:12'),
('JKTDO', 'Operations', '2016-07-15 02:21:12'),
('JKTDZ', 'President & CEO', '2016-07-15 02:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(5) NOT NULL,
  `kode_dir` varchar(10) NOT NULL,
  `kode_unit` varchar(5) NOT NULL,
  `kode_branch` varchar(10) DEFAULT NULL,
  `nama_program` varchar(150) NOT NULL,
  `deskripsi_program` varchar(1500) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `tujuan_merubah_perilaku` varchar(300) NOT NULL,
  `target_flyhi0` varchar(150) NOT NULL,
  `satuan_flyhi0` varchar(150) NOT NULL,
  `target_flyhi1` varchar(150) NOT NULL,
  `satuan_flyhi1` varchar(150) NOT NULL,
  `target_flyhi2` varchar(150) NOT NULL,
  `satuan_flyhi2` varchar(150) NOT NULL,
  `target_flyhi3` varchar(150) NOT NULL,
  `satuan_flyhi3` varchar(150) NOT NULL,
  `target_flyhi4` varchar(150) NOT NULL,
  `satuan_flyhi4` varchar(150) NOT NULL,
  `aktifitas0` varchar(150) NOT NULL,
  `target0` varchar(150) NOT NULL,
  `satuan0` varchar(150) NOT NULL,
  `aktifitas1` varchar(150) NOT NULL,
  `target1` varchar(150) NOT NULL,
  `satuan1` varchar(150) NOT NULL,
  `aktifitas2` varchar(150) NOT NULL,
  `target2` varchar(150) NOT NULL,
  `satuan2` varchar(150) NOT NULL,
  `aktifitas3` varchar(150) NOT NULL,
  `target3` varchar(150) NOT NULL,
  `satuan3` varchar(150) NOT NULL,
  `aktifitas4` varchar(150) NOT NULL,
  `target4` varchar(150) NOT NULL,
  `satuan4` varchar(150) NOT NULL,
  `tujuan_capai_kinerja_0` int(1) DEFAULT '0',
  `target_financial0` varchar(150) NOT NULL,
  `satuan_financial0` varchar(150) NOT NULL,
  `target_financial1` varchar(150) NOT NULL,
  `satuan_financial1` varchar(150) NOT NULL,
  `target_financial2` varchar(150) NOT NULL,
  `satuan_financial2` varchar(150) NOT NULL,
  `target_financial3` varchar(150) NOT NULL,
  `satuan_financial3` varchar(150) NOT NULL,
  `target_financial4` varchar(150) NOT NULL,
  `satuan_financial4` varchar(150) NOT NULL,
  `tujuan_capai_kinerja_1` int(1) DEFAULT '0',
  `target_customer0` varchar(150) NOT NULL,
  `satuan_customer0` varchar(150) NOT NULL,
  `target_customer1` varchar(150) NOT NULL,
  `satuan_customer1` varchar(150) NOT NULL,
  `target_customer2` varchar(150) NOT NULL,
  `satuan_customer2` varchar(150) NOT NULL,
  `target_customer3` varchar(150) NOT NULL,
  `satuan_customer3` varchar(150) NOT NULL,
  `target_customer4` varchar(150) NOT NULL,
  `satuan_customer4` varchar(150) NOT NULL,
  `tujuan_capai_kinerja_2` int(1) DEFAULT '0',
  `target_ibp0` varchar(150) NOT NULL,
  `satuan_ibp0` varchar(150) NOT NULL,
  `target_ibp1` varchar(150) NOT NULL,
  `satuan_ibp1` varchar(150) NOT NULL,
  `target_ibp2` varchar(150) NOT NULL,
  `satuan_ibp2` varchar(150) NOT NULL,
  `target_ibp3` varchar(150) NOT NULL,
  `satuan_ibp3` varchar(150) NOT NULL,
  `target_ibp4` varchar(150) NOT NULL,
  `satuan_ibp4` varchar(150) NOT NULL,
  `tujuan_capai_kinerja_3` int(1) DEFAULT '0',
  `target_lg0` varchar(150) NOT NULL,
  `satuan_lg0` varchar(150) NOT NULL,
  `target_lg1` varchar(150) NOT NULL,
  `satuan_lg1` varchar(150) NOT NULL,
  `target_lg2` varchar(150) NOT NULL,
  `satuan_lg2` varchar(150) NOT NULL,
  `target_lg3` varchar(150) NOT NULL,
  `satuan_lg3` varchar(150) NOT NULL,
  `target_lg4` varchar(150) NOT NULL,
  `satuan_lg4` varchar(150) NOT NULL,
  `metode_monitoring` varchar(150) NOT NULL,
  `other0` varchar(150) NOT NULL,
  `metode_enforcement_positif` varchar(150) NOT NULL,
  `other1` varchar(150) NOT NULL,
  `metode_enforcement_negatif` varchar(150) NOT NULL,
  `other2` varchar(150) NOT NULL,
  `nama_ketua` varchar(150) NOT NULL,
  `email_ketua` varchar(150) NOT NULL,
  `nama_sekre_bendahara` varchar(150) NOT NULL,
  `email_sekre_bendahara` varchar(150) NOT NULL,
  `posisi_0` varchar(150) NOT NULL,
  `nama_0` varchar(150) NOT NULL,
  `email_0` varchar(150) NOT NULL,
  `posisi_1` varchar(150) NOT NULL,
  `nama_1` varchar(150) NOT NULL,
  `email_1` varchar(150) NOT NULL,
  `posisi_2` varchar(150) NOT NULL,
  `nama_2` varchar(150) NOT NULL,
  `email_2` varchar(150) NOT NULL,
  `posisi_3` varchar(150) NOT NULL,
  `nama_3` varchar(150) NOT NULL,
  `email_3` varchar(150) NOT NULL,
  `posisi_4` varchar(150) NOT NULL,
  `nama_4` varchar(150) NOT NULL,
  `email_4` varchar(150) NOT NULL,
  `posisi_5` varchar(150) NOT NULL,
  `nama_5` varchar(150) NOT NULL,
  `email_5` varchar(150) NOT NULL,
  `posisi_6` varchar(150) NOT NULL,
  `nama_6` varchar(150) NOT NULL,
  `email_6` varchar(150) NOT NULL,
  `posisi_7` varchar(150) NOT NULL,
  `nama_7` varchar(150) NOT NULL,
  `email_7` varchar(150) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `file_monitoring` varchar(100) NOT NULL,
  `type_monitoring` varchar(30) NOT NULL,
  `size_monitoring` int(11) NOT NULL,
  `file_positif` varchar(100) NOT NULL,
  `type_positif` varchar(30) NOT NULL,
  `size_positif` int(11) NOT NULL,
  `file_negatif` varchar(100) NOT NULL,
  `type_negatif` varchar(30) NOT NULL,
  `size_negatif` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `komentar` varchar(2500) NOT NULL,
  `hasil_flyhi0` varchar(150) NOT NULL,
  `hasil_flyhi1` varchar(150) NOT NULL,
  `hasil_flyhi2` varchar(150) NOT NULL,
  `hasil_flyhi3` varchar(150) NOT NULL,
  `hasil_flyhi4` varchar(150) NOT NULL,
  `hasil0` varchar(150) NOT NULL,
  `hasil1` varchar(150) NOT NULL,
  `hasil2` varchar(150) NOT NULL,
  `hasil3` varchar(150) NOT NULL,
  `hasil4` varchar(150) NOT NULL,
  `hasil_financial0` varchar(150) NOT NULL,
  `hasil_financial1` varchar(150) NOT NULL,
  `hasil_financial2` varchar(150) NOT NULL,
  `hasil_financial3` varchar(150) NOT NULL,
  `hasil_financial4` varchar(150) NOT NULL,
  `hasil_customer0` varchar(150) NOT NULL,
  `hasil_customer1` varchar(150) NOT NULL,
  `hasil_customer2` varchar(150) NOT NULL,
  `hasil_customer3` varchar(150) NOT NULL,
  `hasil_customer4` varchar(150) NOT NULL,
  `hasil_ibp0` varchar(150) NOT NULL,
  `hasil_ibp1` varchar(150) NOT NULL,
  `hasil_ibp2` varchar(150) NOT NULL,
  `hasil_ibp3` varchar(150) NOT NULL,
  `hasil_ibp4` varchar(150) NOT NULL,
  `hasil_lg0` varchar(150) NOT NULL,
  `hasil_lg1` varchar(150) NOT NULL,
  `hasil_lg2` varchar(150) NOT NULL,
  `hasil_lg3` varchar(150) NOT NULL,
  `hasil_lg4` varchar(150) NOT NULL,
  `status_res` int(1) NOT NULL DEFAULT '0',
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `kode_dir`, `kode_unit`, `kode_branch`, `nama_program`, `deskripsi_program`, `start`, `end`, `tujuan_merubah_perilaku`, `target_flyhi0`, `satuan_flyhi0`, `target_flyhi1`, `satuan_flyhi1`, `target_flyhi2`, `satuan_flyhi2`, `target_flyhi3`, `satuan_flyhi3`, `target_flyhi4`, `satuan_flyhi4`, `aktifitas0`, `target0`, `satuan0`, `aktifitas1`, `target1`, `satuan1`, `aktifitas2`, `target2`, `satuan2`, `aktifitas3`, `target3`, `satuan3`, `aktifitas4`, `target4`, `satuan4`, `tujuan_capai_kinerja_0`, `target_financial0`, `satuan_financial0`, `target_financial1`, `satuan_financial1`, `target_financial2`, `satuan_financial2`, `target_financial3`, `satuan_financial3`, `target_financial4`, `satuan_financial4`, `tujuan_capai_kinerja_1`, `target_customer0`, `satuan_customer0`, `target_customer1`, `satuan_customer1`, `target_customer2`, `satuan_customer2`, `target_customer3`, `satuan_customer3`, `target_customer4`, `satuan_customer4`, `tujuan_capai_kinerja_2`, `target_ibp0`, `satuan_ibp0`, `target_ibp1`, `satuan_ibp1`, `target_ibp2`, `satuan_ibp2`, `target_ibp3`, `satuan_ibp3`, `target_ibp4`, `satuan_ibp4`, `tujuan_capai_kinerja_3`, `target_lg0`, `satuan_lg0`, `target_lg1`, `satuan_lg1`, `target_lg2`, `satuan_lg2`, `target_lg3`, `satuan_lg3`, `target_lg4`, `satuan_lg4`, `metode_monitoring`, `other0`, `metode_enforcement_positif`, `other1`, `metode_enforcement_negatif`, `other2`, `nama_ketua`, `email_ketua`, `nama_sekre_bendahara`, `email_sekre_bendahara`, `posisi_0`, `nama_0`, `email_0`, `posisi_1`, `nama_1`, `email_1`, `posisi_2`, `nama_2`, `email_2`, `posisi_3`, `nama_3`, `email_3`, `posisi_4`, `nama_4`, `email_4`, `posisi_5`, `nama_5`, `email_5`, `posisi_6`, `nama_6`, `email_6`, `posisi_7`, `nama_7`, `email_7`, `file`, `type`, `size`, `file_monitoring`, `type_monitoring`, `size_monitoring`, `file_positif`, `type_positif`, `size_positif`, `file_negatif`, `type_negatif`, `size_negatif`, `status`, `komentar`, `hasil_flyhi0`, `hasil_flyhi1`, `hasil_flyhi2`, `hasil_flyhi3`, `hasil_flyhi4`, `hasil0`, `hasil1`, `hasil2`, `hasil3`, `hasil4`, `hasil_financial0`, `hasil_financial1`, `hasil_financial2`, `hasil_financial3`, `hasil_financial4`, `hasil_customer0`, `hasil_customer1`, `hasil_customer2`, `hasil_customer3`, `hasil_customer4`, `hasil_ibp0`, `hasil_ibp1`, `hasil_ibp2`, `hasil_ibp3`, `hasil_ibp4`, `hasil_lg0`, `hasil_lg1`, `hasil_lg2`, `hasil_lg3`, `hasil_lg4`, `status_res`, `last_update`) VALUES
(9, 'JKTDI', 'JKTID', '', 'a', 'a', '2017-10-04', '2017-10-18', 'F (Efficient & Effective)', '5', '2', '', '', '', '', '', '', '', '', 'Percepatan Proses', '1', '3', '', '', '', '', '', '', '', '', '', '', '', '', 1, '1000000', 'Rupiah', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 'Laporan Pelaksanan Kegiatan', '', 'Happy Icon', '', 'Pegawai Telatan of the month', '', 'fadhlan', 'fahdla@jlsdkf.cjl', 'skdjflk', 'lskdjflkj@kjdf.kj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15130-draft-jadwal-2016-2-ilkom---master---v5.pdf', 'application/pdf', 365, '98145-', '', 0, '18629-', '', 0, '49461-', '', 0, 1, 'bagus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2017-10-06 06:32:58'),
(12, 'JKTDG', 'CC', '', 'asdf', 'sadf', '2017-10-04', '2017-10-05', 'L (Loyalty)', '1', '2', '', '', '', '', '', '', '', '', 'Menjaga Reputasi/Image Perusahaan', '1', '3', 'Percepatan Proses', '1', '3', '', '', '', '', '', '', '', '', '', 1, '1234', 'Hari', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 'Laporan Pelaksanan Kegiatan', '', 'Appreciation for employee â€œPersonal Daysâ€ (birthdays, pension, anniversaries, etc.)', '', 'Punishment Speeches', '', 'sdf', 'sdf@sdf', 'sdf@sdf', 'sdf@sdf', 'Program Pendukung', 'sdf@sdf', 'sdf@sdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '33185-13-44-1-pb.pdf', 'application/pdf', 854, '49007-', '', 0, '21021-', '', 0, '75154-', '', 0, 0, '', '1', '', '', '', '', '1', '1', '', '', '', '1234', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-10-06 00:45:39'),
(13, 'JKTDZ', 'JKTDA', '', 'Dorong Semangat Efisiensi Waktu', 'Program ini berguna untuk memacu semangat anggota unit dalam kerja efisien secara waktu', '2017-09-25', '2017-10-03', 'F (Efficient & Effective)', '5', '2', '', '', '', '', '', '', '', '', 'Efisiensi', '200', '3', 'Menjaga Reputasi/Image Perusahaan', '100', '3', '', '', '', '', '', '', '', '', '', 1, '20000000', 'Rupiah', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 'Monitoring pencapaian atau realisasi KPI', '', 'Recognition Speeches', '', 'Pegawai Telatan of the month', '', 'Syaiful Mustamin', 'syaiful@gmail.com', 'Joko Suseno', 'joko@gmail.com', 'Dokumentasi & Publikasi', 'Adnan Husna', 'adnan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '61207-draft-jadwal-2016-2-ilkom---master---v5.pdf', 'application/pdf', 365, '29765-', '', 0, '90786-', '', 0, '64105-', '', 0, 0, 'Dikonsultasikan ke VP', '3', '', '', '', '', '200', '110', '', '', '', '30000000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-10-06 06:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `kode` varchar(10) NOT NULL,
  `kode_dir` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`kode`, `kode_dir`, `nama`, `last_update`) VALUES
('CC', 'JKTDG', 'Cargo Commercial', '2016-07-15 03:02:03'),
('CO', 'JKTDG', 'Cargo Operations', '2016-07-15 03:02:03'),
('JKTAM', 'JKTDN', 'Jakarta Raya Region', '2016-07-15 03:21:18'),
('JKTCC', 'JKTDC', 'Cabin Services', '2016-07-15 03:11:05'),
('JKTCD', 'JKTDN', 'Coordinator Sales & Distribution', '2016-07-15 03:21:18'),
('JKTCG', 'JKTDC', 'Ground Services', '2016-07-15 03:11:05'),
('JKTCI', 'JKTDC', 'Inflight Services', '2016-07-15 03:11:05'),
('JKTCM', 'JKTDN', 'Marketing', '2016-07-15 03:21:18'),
('JKTCP', 'JKTDN', 'Alliance & Partnership Management', '2016-07-15 03:21:18'),
('JKTCR', 'JKTDN', 'Customer Relation Management', '2016-07-15 03:25:32'),
('JKTDA', 'JKTDZ', 'Internal Audit', '2016-07-15 02:54:55'),
('JKTDB', 'JKTDZ', 'Corporate Development Strategy', '2016-07-15 02:52:47'),
('JKTDH', 'JKTDZ', 'Acquisition & Aircraft Management', '2016-07-15 02:54:55'),
('JKTDK', 'JKTDZ', 'Corporate Security', '2016-07-15 02:54:55'),
('JKTDP', 'JKTDZ', 'Corporate Communication', '2016-07-15 02:56:23'),
('JKTDV', 'JKTDZ', 'Corporate Quality, Safety & Environment Management', '2016-07-15 02:54:55'),
('JKTEC', 'JKTDN', 'Digital Business', '2016-07-15 03:21:18'),
('JKTIB', 'JKTDI', 'Business Support & General Affairs', '2016-07-15 02:57:55'),
('JKTID', 'JKTDI', 'Human Capital Management', '2016-07-15 02:57:55'),
('JKTIH', 'JKTDI', 'SBU Garuda Sentra Medika', '2016-07-15 02:57:55'),
('JKTML', 'JKTDE', 'Aircraft Maintenance Management', '2016-07-15 03:09:21'),
('JKTMQ', 'JKTDE', 'Airworthiness Management', '2016-07-15 03:09:21'),
('JKTMX', 'JKTDE', 'IT Strategy', '2016-07-15 03:11:40'),
('JKTOF', 'JKTDO', 'Flight Operations', '2016-07-15 03:03:56'),
('JKTOG', 'JKTDO', 'Operation Planning & Control', '2016-07-15 03:03:56'),
('JKTOS', 'JKTDO', 'Operation Support', '2016-07-15 03:03:56'),
('JKTRZ', 'JKTDN', 'Revenue Management', '2016-07-15 03:21:18'),
('JKTVZ', 'JKTDI', 'Learning & Development', '2016-08-05 06:28:40'),
('JKTWA', 'JKTDF', 'Financial Accounting', '2016-07-15 03:00:09'),
('JKTWF', 'JKTDF', 'Treasury Management', '2016-07-15 03:00:09'),
('JKTWI', 'JKTDZ', 'Corporate Secretary & Investor Relation', '2016-07-15 02:54:55'),
('JKTWL', 'JKTDF', 'Financial Analysis', '2016-07-15 03:00:09'),
('JKTWR', 'JKTDF', 'Enterprise Risk Management', '2016-07-15 03:00:09'),
('MESAM', 'JKTDN', 'Sumatera Region', '2016-07-15 03:21:18'),
('SHAAM', 'JKTDN', 'China Region', '2016-07-15 03:21:18'),
('SINAM', 'JKTDN', 'Asia Region', '2016-07-15 03:21:18'),
('SUBAM', 'JKTDN', 'Jawa, Bali, Nusa Tenggara Region', '2016-07-15 03:21:18'),
('SYDAM', 'JKTDN', 'South West Pacific Region', '2016-07-15 03:21:18'),
('TYOAM', 'JKTDN', 'Japan & Korea Region', '2016-07-15 03:21:18'),
('UPGAM', 'JKTDN', 'Kalimanta, Sulawesi, & Papua Region', '2016-07-15 03:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` int(11) NOT NULL,
  `dir` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `branch` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `role`, `dir`, `unit`, `branch`) VALUES
(1, 'admin', 'admin', -1, NULL, NULL, NULL),
(3, 'JKTDK', 'JKTDK', 1, 'JKTDZ', 'JKTDK', NULL),
(4, 'JKTDB', 'JKTDB', 1, 'JKTDZ', 'JKTDB', NULL),
(5, 'JKTDH', 'JKTDH', 1, 'JKTDZ', 'JKTDH', NULL),
(6, 'JKTDP', 'JKTDP', 1, 'JKTDZ', 'JKTDP', NULL),
(7, 'JKTDV', 'JKTDV', 1, 'JKTDZ', 'JKTDV', NULL),
(8, 'JKTWI', 'JKTWI', 1, 'JKTDZ', 'JKTWI', NULL),
(9, 'JKTDA', 'JKTDA', 1, 'JKTDZ', 'JKTDA', NULL),
(10, 'JKTOF', 'JKTOF', 1, 'JKTDO', 'JKTOF', NULL),
(11, 'JKTOG', 'JKTOG', 1, 'JKTDO', 'JKTOG', NULL),
(12, 'JKTOS', 'JKTOS', 1, 'JKTDO', 'JKTOS', NULL),
(13, 'JKTEC', 'JKTEC', 1, 'JKTDN', 'JKTEC', NULL),
(14, 'JKTRZ', 'JKTRZ', 1, 'JKTDN', 'JKTRZ', NULL),
(15, 'JKTCR', 'JKTCR', 1, 'JKTDN', 'JKTCR', NULL),
(16, 'JKTCD', 'JKTCD', 1, 'JKTDN', 'JKTCD', NULL),
(17, 'JKTCM', 'JKTCM', 1, 'JKTDN', 'JKTCM', NULL),
(18, 'JKTCP', 'JKTCP', 1, 'JKTDN', 'JKTCP', NULL),
(19, 'JKTIH', 'JKTIH', 1, 'JKTDI', 'JKTIH', NULL),
(20, 'JKTID', 'JKTID', 1, 'JKTDI', 'JKTID', NULL),
(21, 'JKTIB', 'JKTIB', 1, 'JKTDI', 'JKTIB', NULL),
(22, 'JKTVZ', 'JKTVZ', 1, 'JKTDI', 'JKTVZ', NULL),
(23, 'CC', 'CC', 1, 'JKTDG', 'CC', NULL),
(24, 'CO', 'CO', 1, 'JKTDG', 'CO', NULL),
(25, 'JKTWA', 'JKTWA', 1, 'JKTDF', 'JKTWA', NULL),
(26, 'JKTWR', 'JKTWR', 1, 'JKTDF', 'JKTWR', NULL),
(27, 'JKTWL', 'JKTWL', 1, 'JKTDF', 'JKTWL', NULL),
(28, 'JKTWF', 'JKTWF', 1, 'JKTDF', 'JKTWF', NULL),
(29, 'JKTMQ', 'JKTMQ', 1, 'JKTDE', 'JKTMQ', NULL),
(30, 'JKTMX', 'JKTMX', 1, 'JKTDE', 'JKTMX', NULL),
(31, 'JKTML', 'JKTML', 1, 'JKTDE', 'JKTML', NULL),
(32, 'JKTCI', 'JKTCI', 1, 'JKTDC', 'JKTCI', NULL),
(33, 'JKTCG', 'JKTCG', 1, 'JKTDC', 'JKTCG', NULL),
(34, 'JKTCC', 'JKTCC', 1, 'JKTDC', 'JKTCC', NULL),
(35, 'JEDDM', 'JEDDM', 1, 'JKTDN', 'JKTAM', 'JEDDM'),
(36, 'JKTDM', 'JKTDM', 1, 'JKTDN', 'JKTAM', 'JKTDM'),
(37, 'LONDM', 'LONDM', 1, 'JKTDN', 'JKTAM', 'LONDM'),
(38, 'BDODM', 'BDODM', 1, 'JKTDN', 'JKTAM', 'BDODM'),
(39, 'AMSDM', 'AMSDM', 1, 'JKTDN', 'JKTAM', 'AMSDM'),
(40, 'PGKDM', 'PGKDM', 1, 'JKTDN', 'MESAM', 'PGKDM'),
(41, 'DTBDM', 'DTBDM', 1, 'JKTDN', 'MESAM', 'DTBDM'),
(42, 'FLZDM', 'FLZDM', 1, 'JKTDN', 'MESAM', 'FLZDM'),
(43, 'GNSDM', 'GNSDM', 1, 'JKTDN', 'MESAM', 'GNSDM'),
(44, 'DJBDM', 'DJBDM', 1, 'JKTDN', 'MESAM', 'DJBDM'),
(45, 'MESDM', 'MESDM', 1, 'JKTDN', 'MESAM', 'MESDM'),
(46, 'PLMDM', 'PLMDM', 1, 'JKTDN', 'MESAM', 'PLMDM'),
(47, 'LSWDM', 'LSWDM', 1, 'JKTDN', 'MESAM', 'LSWDM'),
(48, 'SBGDM', 'SBGDM', 1, 'JKTDN', 'MESAM', 'SBGDM'),
(49, 'PKUDM', 'PKUDM', 1, 'JKTDN', 'MESAM', 'PKUDM'),
(50, 'PDGDM', 'PDGDM', 1, 'JKTDN', 'MESAM', 'PDGDM'),
(51, 'BTJDM', 'BTJDM', 1, 'JKTDN', 'MESAM', 'BTJDM'),
(52, 'BKSDM', 'BKSDM', 1, 'JKTDN', 'MESAM', 'BKSDM'),
(53, 'TNJDM', 'TNJDM', 1, 'JKTDN', 'MESAM', 'TNJDM'),
(54, 'TKGDM', 'TKGDM', 1, 'JKTDN', 'MESAM', 'TKGDM'),
(55, 'TJQDM', 'TJQDM', 1, 'JKTDN', 'MESAM', 'TJQDM'),
(56, 'BTHDM', 'BTHDM', 1, 'JKTDN', 'MESAM', 'BTHDM'),
(57, 'SHADM', 'SHADM', 1, 'JKTDN', 'SHAAM', 'SHADM'),
(58, 'HKGDM', 'HKGDM', 1, 'JKTDN', 'SHAAM', 'HKGDM'),
(59, 'BJSDM', 'BJSDM', 1, 'JKTDN', 'SHAAM', 'BJSDM'),
(60, 'CANDM', 'CANDM', 1, 'JKTDN', 'SHAAM', 'CANDM'),
(61, 'BKKDM', 'BKKDM', 1, 'JKTDN', 'SINAM', 'BKKDM'),
(62, 'KULDM', 'KULDM', 1, 'JKTDN', 'SINAM', 'KULDM'),
(63, 'SINDM', 'SINDM', 1, 'JKTDN', 'SINAM', 'SINDM'),
(64, 'JOGDM', 'JOGDM', 1, 'JKTDN', 'SUBAM', 'JOGDM'),
(65, 'BWXDM', 'BWXDM', 1, 'JKTDN', 'SUBAM', 'BWXDM'),
(66, 'SRGDM', 'SRGDM', 1, 'JKTDN', 'SUBAM', 'SRGDM'),
(67, 'TMCDM', 'TMCDM', 1, 'JKTDN', 'SUBAM', 'TMCDM'),
(68, 'DPSDM', 'DPSDM', 1, 'JKTDN', 'SUBAM', 'DPSDM'),
(69, 'SUBDM', 'SUBDM', 1, 'JKTDN', 'SUBAM', 'SUBDM'),
(70, 'ENEDM', 'ENEDM', 1, 'JKTDN', 'SUBAM', 'ENEDM'),
(71, 'SOCDM', 'SOCDM', 1, 'JKTDN', 'SUBAM', 'SOCDM'),
(72, 'JBBDM', 'JBBDM', 1, 'JKTDN', 'SUBAM', 'JBBDM'),
(73, 'LBJDM', 'LBJDM', 1, 'JKTDN', 'SUBAM', 'LBJDM'),
(74, 'AMIDM', 'AMIDM', 1, 'JKTDN', 'SUBAM', 'AMIDM'),
(75, 'SWQDM', 'SWQDM', 1, 'JKTDN', 'SUBAM', 'SWQDM'),
(76, 'KOEDM', 'KOEDM', 1, 'JKTDN', 'SUBAM', 'KOEDM'),
(77, 'BMUDM', 'BMUDM', 1, 'JKTDN', 'SUBAM', 'BMUDM'),
(78, 'MLGDM', 'MLGDM', 1, 'JKTDN', 'SUBAM', 'MLGDM'),
(79, 'MELDM', 'MELDM', 1, 'JKTDN', 'SYDAM', 'MELDM'),
(80, 'PERDM', 'PERDM', 1, 'JKTDN', 'SYDAM', 'PERDM'),
(81, 'SYDDM', 'SYDDM', 1, 'JKTDN', 'SYDAM', 'SYDDM'),
(82, 'TYODM', 'TYODM', 1, 'JKTDN', 'TYOAM', 'TYODM'),
(83, 'OSADM', 'OSADM', 1, 'JKTDN', 'TYOAM', 'OSADM'),
(84, 'SELDM', 'SELDM', 1, 'JKTDN', 'TYOAM', 'SELDM'),
(85, 'SXKDM', 'SXKDM', 1, 'JKTDN', 'UPGAM', 'SXKDM'),
(86, 'BPNDM', 'BPNDM', 1, 'JKTDN', 'UPGAM', 'BPNDM'),
(87, 'MKWDM', 'MKWDM', 1, 'JKTDN', 'UPGAM', 'MKWDM'),
(88, 'BUWDM', 'BUWDM', 1, 'JKTDN', 'UPGAM', 'BUWDM'),
(89, 'MDCDM', 'MDCDM', 1, 'JKTDN', 'UPGAM', 'MDCDM'),
(90, 'TIMDM', 'TIMDM', 1, 'JKTDN', 'UPGAM', 'TIMDM'),
(91, 'BIKDM', 'BIKDM', 1, 'JKTDN', 'UPGAM', 'BIKDM'),
(92, 'BEJDM', 'BEJDM', 1, 'JKTDN', 'UPGAM', 'BEJDM'),
(93, 'BDJDM', 'BDJDM', 1, 'JKTDN', 'UPGAM', 'BDJDM'),
(94, 'AMQDM', 'AMQDM', 1, 'JKTDN', 'UPGAM', 'AMQDM'),
(95, 'TRKDM', 'TRKDM', 1, 'JKTDN', 'UPGAM', 'TRKDM'),
(96, 'TTEDM', 'TTEDM', 1, 'JKTDN', 'UPGAM', 'TTEDM'),
(97, 'DJJDM', 'DJJDM', 1, 'JKTDN', 'UPGAM', 'DJJDM'),
(98, 'SQGDM', 'SQGDM', 1, 'JKTDN', 'UPGAM', 'SQGDM'),
(99, 'SOQDM', 'SOQDM', 1, 'JKTDN', 'UPGAM', 'SOQDM'),
(100, 'MKQDM', 'MKQDM', 1, 'JKTDN', 'UPGAM', 'MKQDM'),
(101, 'MJUDM', 'MJUDM', 1, 'JKTDN', 'UPGAM', 'MJUDM'),
(102, 'KDIDM', 'KDIDM', 1, 'JKTDN', 'UPGAM', 'KDIDM'),
(103, 'PKNDM', 'PKNDM', 1, 'JKTDN', 'UPGAM', 'PKNDM'),
(104, 'PKYDM', 'PKYDM', 1, 'JKTDN', 'UPGAM', 'PKYDM'),
(105, 'LUWDM', 'LUWDM', 1, 'JKTDN', 'UPGAM', 'LUWDM'),
(106, 'PLWDM', 'PLWDM', 1, 'JKTDN', 'UPGAM', 'PLWDM'),
(107, 'PNKDM', 'PNKDM', 1, 'JKTDN', 'UPGAM', 'PNKDM'),
(108, 'PSUDM', 'PSUDM', 1, 'JKTDN', 'UPGAM', 'PSUDM'),
(109, 'LUVDM', 'LUVDM', 1, 'JKTDN', 'UPGAM', 'LUVDM'),
(110, 'KTGDM', 'KTGDM', 1, 'JKTDN', 'UPGAM', 'KTGDM'),
(111, 'GTODM', 'GTODM', 1, 'JKTDN', 'UPGAM', 'GTODM'),
(112, 'UPGDM', 'UPGDM', 1, 'JKTDN', 'UPGAM', 'UPGDM'),
(113, 'admin1', 'admin1', -1, NULL, NULL, NULL),
(114, '', '', 1, '', '', ''),
(115, '', '', 1, '', '', ''),
(117, 'admin2', 'admin2', -1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kode_unit` (`kode_unit`);

--
-- Indexes for table `direktorat`
--
ALTER TABLE `direktorat`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode` (`kode_unit`) USING BTREE,
  ADD KEY `kode_branch` (`kode_branch`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kode_dir` (`kode_dir`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`,`username`),
  ADD KEY `branch_id_idx` (`branch`),
  ADD KEY `unit_id_idx` (`unit`),
  ADD KEY `dir_id_idx` (`dir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`kode_unit`) REFERENCES `unit` (`kode`);

--
-- Constraints for table `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`kode_dir`) REFERENCES `direktorat` (`kode`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
