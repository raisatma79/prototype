-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2026 at 09:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsump`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_fasilitas`, `deskripsi`, `gambar`) VALUES
(1, 'Ambulance 24 Jam', 'RSU Muhammadiyah Ponorogo memiliki 3 Armada Ambulance 24 Jam yang terdiri dari 1 ambulance jenazah, 1 ambulance AGD, dan 1 ambulance untuk transportasi. Melayani Jemput Pasien ke RSU Muhammadiyah (Khusus Dalam Kota).', 'https://rsumponorogo.com/images/fasilitas/ambulance-1.jpg'),
(2, 'Radiologi 24 Jam', 'Instalasi Radiologi menggunakan komputer untuk membuat gambar cross-sectional tulang, pembuluh darah, dan jaringan lunak yang ada di dalam tubuh. Instalasi Radiologi memberi layanan berupa USG Abdomen, USG Soft Tissue, USG Color Doppler, X-ray, dan CT-Scan', 'https://rsumponorogo.com/images/fasilitas/9082c927-3a49-40ab-bf0f-a51f9ef1bfb5.jpg'),
(3, 'AntarMU', 'Untuk kemudahan pelayanan sekaligus mengurangi waktu tunggu pasien Rawat Jalan, kami menyediakan layanan antar obat sampai rumah untuk semua wilayah. Spesial untuk radius 15 Km tidak dipungut biaya.', 'https://rsumponorogo.com/images/banner/7.jpg'),
(4, 'Farmasi 24 Jam', 'RSUMP melayani farmasi klinis dengan didukung Apoteker dan tenaga farmasi yang kompeten dan sistem komputerisasi yang memadai sehingga membuat layanan yang diberikan lebih cepat dan tepat sesuai respon time yang berlaku.', 'https://media.istockphoto.com/id/927873044/photo/running-his-pharmacy-like-a-well-oiled-machine.jpg?s=170667a&w=0&k=20&c=W1Tk6WhReaw8dJ5tFBIMVMyIV3jzIKtTFZpUYi7L0z0='),
(5, 'Laboratorium 24 Jam', 'Dilengkapi dengan alat-alat yang memadai dan sesuai standar akreditasi serta didukung oleh Dokter Spesialis Patologi Klinis yang kompeten dan terlatih, Laboratorium RSU Muhammadiyah Ponorogo melayani pemeriksaan seperti tes narkoba, troponin, anti HAV, dan layanan lainnya.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS2SGQMc_etpr6pyIGvGg4iFpZg_RpdJvIkWwXhmvQAGJkmUvB-n56jFlu&s=10'),
(6, 'Instalasi Gizi', 'Instalasi Gizi dikepalai oleh Ahli gizi (Nutrisionist) yang terlatih dan kompeten yang mengatur pengelolaan diet dan gizi pasien. Instalasi Gizi juga menyediakan layanan catering gizi yang sehat untuk masyarakat secara umum.', 'https://rsumponorogo.com/images/fasilitas/IMG_4954.JPG'),
(7, 'Instalasi Bedah Central', 'Instalasi Bedah Sentral RSU Muhammadiyah Ponorogo melayani pembedahan (operasi) dan pembiusan (anestesi) 24 jam dengan peralatan medis yang modern dengan didukung oleh Dokter yang professional serta tenaga perawat yang kompeten dan terlatih.', 'https://rsumponorogo.com/images/fasilitas/ruang-operasi.jpg'),
(8, 'Homecare', 'Layanan perawatan kesehatan dan pendampingan yang diberikan langsung di rumah pasien oleh tenaga medis untuk memberikan kenyamanan maksimal bagi pasien yang kesulitan untuk bepergian bolak-balik ke rumah sakit.', 'https://destinyhelpershomecareservices.com/wp-content/uploads/2024/03/young-black-nurse-assisting-senor-man-to-get-up-1.webp'),
(9, 'Pemulasaran Jenazah', 'Layanan Pemulasaran Jenazah meliputi memandikan, mengkafani dan mensholatkan.\r\nUntuk menjaga nilai-nilai islaminya, kami bentuk tim khusus untuk jenazah laki-laki ditangani petugas laki-laki dan untuk jenazah perempuan ditangani petugas perempuan.', 'https://rsumponorogo.com/images/fasilitas/WhatsApp%20Image%202025-10-15%20at%2010.23.22.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `indikator_mutu`
--

CREATE TABLE `indikator_mutu` (
  `id` int(11) NOT NULL,
  `aspek` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun` int(10) NOT NULL,
  `gambar` text NOT NULL,
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indikator_mutu`
--

INSERT INTO `indikator_mutu` (`id`, `aspek`, `deskripsi`, `tahun`, `gambar`, `UPDATED_AT`) VALUES
(1, 'Kepatuhan upaya pencegahan risiko pasien jatuh', 'Indicator mutu kepatuhan upaya pencegahan risiko pasien jatuh sesuai dengan standar yang ditentukan adalah 100%. Perolehan capaian pada periode Januari – Maret 2026 adalah bulan Januari 100%, bulan februari 100%, dan bulan Maret 100%. Capaian rata – rata pada periode ini sebesar 100%. Kepatuhan upaya pencegahan risiko jatuh pasien adalah pelaksanaan ketiga upaya pencegahan jatuh pada pasien rawat inap yang berisiko tinggi jatuh sesuai dengan standar yang ditetapkan rumah sakit.\r\n\r\nUpaya pencegahan risiko jatuh meliputi Asesment awal risiko jatuh, Assesment ulang risiko jatuh, dan Intervensi pencegahan risiko jatuh.', 2026, 'https://rsumponorogo.com/images/laporan/6.jpg', '2026-08-03 08:18:28'),
(2, 'Kepatuhan waktu visite Dokter', 'Indikator mutu kepatuhan waktu visite dokter sesuai dengan standar yang ditetapkan adalah >80%. Pada periode Januari – Maret 2026 dapat diperoleh hasil bulan Januari 89,7%, bulan Februaru 91,4%, dan bulan Maret 88,4%. Capain trrtinggi berada pada bulan Februari sebesar 91,4%. Waktu visite dokter adalah waktu kunjungan dokter untuk melihat perkembangan pasien yang menjadi tanggung jawabnya dan waktu yang ditetapkan adalah pukul 06.00 – 14.00.', 2026, 'https://rsumponorogo.com/images/laporan/4.jpg', '2026-08-03 08:18:28'),
(3, 'Waktu tanggap Operasi Seksio Sesarea emergensi', 'Indikator waktu tanggap operasi seksio sesarea sesuai dengan standar yang ditetapkan adalah >85%. sedang capaian di TW I (Januari – Maret) adalah bulan Januari 100%, bulan Februari 100%, dan bulan Maret 100%. Hasil capaian sudah sesuai standar yang ditetapkan ≥ 80% secara konsisten. Yang termasuk seksio sesarea emergensi kategori I adalah fetal distress menetap, prolapse tali pusat atau tali pusat menumbung, gagal vakum/forsep, rupture uteri imminent, rupture uteri, perdarahan ante partum dengan perdarahan aktif.', 2026, 'https://rsumponorogo.com/images/laporan/2.jpg', '2026-08-03 08:18:28'),
(4, 'Kepatuhan penggunaan Alat Pelindung Diri (APD)', 'Indikator mutu kepatuhan penggunaan alat pelindung diri (APD) sesuai dengan standar yang ditetapkan adalah 100%. Pada periode Januari – Maret 2026 hasil capaian kepatuhan penggunaan alat pelindung diri (APD) diperoleh bulan Januari 89,5%, bulan Februari 90,4%, dan bulan Maret 89,6%. Kepatuhan Penggunaan APD adalah kepatuhan petugas dalam menggunakan APD dengan tepat sesuai dengan indikasi ketika melakukan tindakan yang memungkinkan tubuh atau membrane mukosa terkena atau terpercik darah atau cairan tubuh atau cairan infeksius lainnya berdasarkan jenis risiko transmisi (Kontak, droplet dan airborne).', 2026, 'https://rsumponorogo.com/images/laporan/1.jpg', '2026-08-03 08:18:28'),
(5, 'KEPATUHAN KEBERSIHAN TANGAN', 'Dari grafik diatas menunjukkan bahwa Indikator Kepatuhan Kebersihan Tangan di triwulan II 2022 yang dilakukan di RSU Muhammadiyah Ponorogo masih dalam batas yang aman artinya masih sesuai dengan standar yang seharusnya, meskipun ada beberapa bulan dimana terjadi penurunan kepatuhan tetapi akan terus dilakukan upaya untuk memperbaikinya. Kepatuhan kebersihan tangan sangat penting dalam keberhasilan sebuah pelayanan supaya tidak menimbulkan infeksi silang dalam perawatan.', 2022, 'https://rsumponorogo.com/images/laporan/KEBERSIHAN%20TANGAN.JPG', '2026-08-03 11:30:20'),
(6, 'PENUNDAAN OPERASI ELEKTIF', 'Dari grafik diatas didapatkan gambaran bahwa untuk Indikator Penundaan Operasi Elektif selama triwulan II 2022 di RSU Muhammadiyah Ponorogo adalah 0% artinya tidak ada kejadian penundaan operasi yang sudah dijadwalkan. Pelaksanaan operasi sesui dengan jadwalnya menjadi perhatian supaya tidak terjadi penundaan dalam pelayanan yang bisa berakibat dalam perpanjangan hari perawatan sehingga berimbas dalam besarnya pembiayaan.', 2022, 'https://rsumponorogo.com/images/laporan/INM2.JPG', '2026-08-03 11:30:20'),
(7, 'PELAPORAN HASIL KRITIS LABORATORIUM', 'Dari gambar grafik diatas untuk Indikator Pelaporan Hasil Kritis Laboratorium selama Triwulan II 2022 menunjukkan tren penurunan yang masih dalam batas aman. Pelaporan hasil kritis ini terkait ketepatan waktu dalam pelaporannya, dan ada upaya untuk melakukan perbaikan supaya ada peningkatan untuk mendukung asuhan pasien yang lebih optimal.', 2022, 'https://rsumponorogo.com/images/laporan/INM%204.JPG', '2026-08-03 11:30:20'),
(8, 'KEPATUHAN WAKTU VISITE DOKTER', 'Dari grafik diatas dapat terlihat bahwa pencapaian Indikator Kepatuhan Waktu Visite Dokter selama triwulan II 2022 di RSU Muhammadiyah Ponorogo menunjukkan trend yang terus meningkat dari bulan ke bulan. Ini menunjukkan komitment untuk selalu berusaha dalam perbaikan untuk peningkatan. Ketepatan waktu visite dokter spesialis sangat penting dalam kesinambungan pelayanan. ', 2022, 'https://rsumponorogo.com/images/laporan/INM%203.JPG', '2026-08-03 11:30:20'),
(9, 'KEPATUHAN PENGGUNAAN FORMULARIUM NASIONAL', 'Dari grafik diatas dapat terlihat bahwa Indikator Kepatuhan Penggunaan Formularium Nasional selama Triwulan II 2022 di RSU Muhammadiyah Ponorogo  mencapai 100% dari bulan ke bulan. Pencapaian ini sudah sesuai dengan target dan standar yang telah ditentukan, sehingga perlu upaya untuk mempertahankanya. Kepatuhan penggunaan formularium nasional sangat penting untuk dilaksanakan supaya tidak ada penambahan biaya bagi pasien dengan fasilitas BPJS.', 2022, 'https://rsumponorogo.com/images/laporan/INM%205.JPG', '2026-08-03 11:31:33'),
(10, 'KEPUASAN PASIEN', 'Dari grafik diatas untuk indicator Kepuasan Pasien selama triwulan II 2022 di RSU Muhammadiyah Ponorogo dapat terlihat adanya tren peningkatan dari bulan ke bulan. Pencapaian sudah diatas standar yang ditetapkan oleh pemerintah yaitu > 76,61%. Hal ini karena adanya upaya perbaikan untuk meningkatkan mutu dalam pelayanan. Kepuasan Pelanggan menjadi tolok ukur keberhasilan suatu pelayanan dan harus selalu ada upaya untuk meningkatkan.   ', 2022, 'https://rsumponorogo.com/images/laporan/INM%206.JPG', '2026-08-03 11:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `nama_informasi` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `nama_informasi`, `gambar`) VALUES
(1, 'perubahan nomor layanan', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCIh-MRfnVUviaFbSbxr0zcBYcaigElEP_f6RrLtlruzzjwkmNbQxYYb8&s=10'),
(2, 'aplikas mobile', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQylaDGj890vFGilRk_yWYVEXEsz5Q3wlF6d7GxN6Ue6ISIIgE3zdO0BPAd&s=10'),
(3, 'promo klinik estetika', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUdC0VBKuiNua4LXg4nZ6A5FyZ7oz2_wm3vYc3OYzlF_zwxK6fy9OR3ao&s=10'),
(4, 'layanan laboratorium', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeVlbhX0LCa0ZIBSSaBwGorxBoav2ELvELP2RwhlU1LQV3p3gvts9X7-w&s=10');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id` int(100) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `senin` varchar(50) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(50) NOT NULL,
  `kamis` varchar(50) NOT NULL,
  `jumat` varchar(50) NOT NULL,
  `sabtu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id`, `dokter_id`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`) VALUES
(1, 1, '', '08.30 - Selesai', '08.30 - Selesai', '', '08.30 - Selesai', ''),
(2, 2, '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 - 14.00'),
(3, 3, '09.00 - Selesai', '09.00 - Selesai', '09.00 - Selesai', '', '09.00 - Selesai', '09.00 - Selesai'),
(4, 4, '14.15 - 15.00', '18.00 - 20.00', '14.15 - 15.00', '14.15 - 15.00', '14.30 - 15.30', ''),
(5, 5, '', '15.45 - 17.45', '15.45 - 17.45', '', '15.00 - 17.00', ''),
(6, 6, '12.15 - 14.00', '12.15 - 14.00', '', '12.15 - 14.00', '12.15 - 14.00', ''),
(7, 7, '18.00 - Selesai', '', '', '15.00 - Selesai', '18.00 - Selesai', ''),
(8, 8, '07.00 - 11.00', '07.00 - 11.00', '07.00 - 11.00', '07.00 - 11.00', '07.00 - 11.00', '07.00 - 11.00'),
(9, 9, '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '08.00 – 12.00'),
(10, 10, '07.00 - 16.00', '07.00 - 15.00', '07.00 - 16.00', '07.00 - 15.00', '07.00 - 16.00', ''),
(11, 11, '09.00 - 13.00', '09.00 - 13.00', '09.00 - 13.00', '09.00 - 13.00', '09.00 - 12.00', ''),
(12, 12, '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00'),
(13, 13, '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 10.00'),
(14, 14, '07.00 - 10.00', '07.00 - 10.00', '07.00 - 10.00', '07.00 - 10.00', '07.00 - 10.00', '07.00 - 10.00'),
(15, 15, '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00', '07.00 – 14.00'),
(16, 16, '12.15 - 14.00', '12.15 - 14.00', '12.15 - 14.00', '12.15 - 14.00', '', ''),
(17, 17, '19.30 - 22.30', '', '19.30 - 22.30', '', '19.30 - 22.30', ''),
(18, 18, '08.30 - Selesai', '', '', '08.30 - Selesai', '', '08.30 - Selesai'),
(19, 19, '09.00 - 14.00', '09.00 - 14.00', '09.00 - 14.00', '09.00 - 14.00', '09.00 - 14.00', '09.00 - 14.00');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` smallint(5) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_telepon` varchar(50) DEFAULT NULL,
  `keluhan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `nama_pengirim`, `alamat`, `email`, `nomor_telepon`, `keluhan`, `created_at`) VALUES
(11, 'Saya', 'Jl.Sultan Agung No.72', 'a710220079@student.ums.ac.id', '089524154389', 'dsafargaf', '2026-07-29 19:16:30'),
(12, 'rais', 'Jl.Sultan Agung No.72', 'a710220079@student.ums.ac.id', '089524154389', 'nyeri pundak', '2026-08-05 20:15:17'),
(13, 'Rais Atma', 'Jl.Sultan Agung No.72', 'a710220079@student.ums.ac.id', '089524154389', 'nyeri sendi pada pundak', '2026-08-05 20:19:00'),
(14, 'Rais Atma', NULL, 'raisatmaramadhan@gmail.com', '089524154389', 'muntaber', '2026-08-05 20:36:46'),
(15, 'Albert Vincent', NULL, 'a710220091@student.ums.ac.id', NULL, 'badan panas dingin, kepala pusing, badan lemas', '2026-08-05 20:49:10'),
(16, 'Albert Vincent', NULL, 'a710220091@student.ums.ac.id', NULL, 'lower back pain', '2026-08-08 00:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `id` int(11) NOT NULL,
  `nama_poliklinik` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `layanan_2` varchar(100) NOT NULL,
  `layanan_3` varchar(100) NOT NULL,
  `sub_layanan` text NOT NULL,
  `sub_layanan_2` text NOT NULL,
  `sub_layanan_3` text NOT NULL,
  `jadwal` varchar(200) NOT NULL,
  `gambar_poliklinik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`id`, `nama_poliklinik`, `deskripsi`, `layanan`, `layanan_2`, `layanan_3`, `sub_layanan`, `sub_layanan_2`, `sub_layanan_3`, `jadwal`, `gambar_poliklinik`) VALUES
(1, 'Klinik Gigi', 'Untuk perawatan dan mengatasi permasalahan gigi Anda, KLINIK GIGI RSU MUHAMMADIYAH PONOROGO menyediakan layanan sbb:', 'Layanan Pencegahan Kerusakan Gigi', 'Layanan Perawatan Umum', 'Layanan Keindahan Gigi', 'Membersihkan karang gigi (Ultrasonic Scaller)\r\nPelapisan lekuk gigi (Fissure Sealant)\r\nLapisan pencegahan caries (Topical Application Flour)', 'Pemeriksaan Umum\r\nTambalan dengan sinar\r\nTambalan dengan amalgam/ logam\r\nTambal gigi anak\r\nPerawatan saluran akar\r\nPencabutan gigi\r\nPemasangan gigi palsu\r\nPemasangan kawat gigi/ behel\r\nDental Veneer', 'Pemasangan Permata Gigi (Dental Piercings)', 'Senin - Sabtu : 08.30 - Selesai', 'https://rsumponorogo.com/images/klinik/klinik-gigi.jpg'),
(2, 'Klinik Bedah Umum', 'Klinik Bedah Umum adalah klinik yang memberikan pelayanan yang menyeluruh terhadap keluhan-keluhan terkait ilmu bedah.\r\nPelayanan di Klinik Bedah RSUMP meliputi', 'Konsultasi, Pemeriksaan dan pengobatan penyakit-penyakit', ' Tindakan/ operasi bedah minor', 'Kontrol post operasi', 'Hernia\r\nHemorrhoid (wasir/ambeien)\r\nBPH (Pembesaran Prostat Jinak)', 'Sirkumsisi (Khitan)\r\nDebridement Ulkus/ Perawatan luka termasuk rawat luka diabetes/ gangrene', '', 'Senin - Jumat : 07.00 - 18.00\r\nSabtu : 07.00 - 12.00', 'https://rsumponorogo.com/images/klinik/klinik-bedah-umum.jpg'),
(3, 'Klinik Internis-Penyakit Dalam', 'Klinik penyakit dalam ini memberikan pelayanan penanganan masalah kesehatan organ dalam tanpa bedah, seperti hipertensi, diabetes melitus, liver, sakit ginjal, sakit lambung, dll. Ditangani oleh dokter spesialis penyakit dalam yang profesional dan berpengalaman dibidangnya serta ditunjang dengan fasilitas yang memadai sesuai dengan kebutuhan pasien, keluhan pasien mengenai penyakit dalam dapat ditangani dengan baik.', 'Imunisasi bagi Dewasa', 'Layanan Klinik Diabetes Melitus Terpadu', ' Pelayanan Kuratif (Pengobatan)', 'Imunisasi Meningitis\r\nImunisasi Influenza\r\nImunisasi Hepatitis', 'Medical Check Up (Cek Gula Darah, Tekanan Darah)\r\nKlinik Penyakit Dalam (konsultasi dengan dokter spesialis internis untuk menilai faktor risiko penyakit DM dan pengobatan kemungkinan komplikasinya)\r\n', 'Konsultasi, penanganan penyakit DM\r\nKlinik Bedah Umum: Tindakan perawatan luka diabet', 'Senin : 08.00 - 14.30\r\nSelasa : 08.00 - 14.00\r\nRabu : 08.00 - 14.30\r\nKamis : 08.00 - 14.00\r\nJumat : 08.00 - 14.30\r\nSabtu : 08.00 - 10.00', 'https://rsumponorogo.com/images/klinik/klinik-internis.jpg'),
(4, 'Klinik Gizi', 'Kebutuhan gizi harus diperhatikan dalam pemberian makanan dan minuman untuk menunjang aktivitas dan kesehatan seseorang. Terlebih lagi dalam keadaan sakit atau dalam perawatan, maka pemberian gizi yang baik dan sesuai akan membantu dalam upaya pencegahan, memperpendek masa perawatan dan membantu proses penyembuhan.', 'Konsultasi', 'Diet Penyakit', '', 'konsultasi ditujukan agar memperoleh ASI dengan jumlah cukup dan berkualitas\r\nKonsultasi gizi anak\r\nKonsultasi tentang tahap-tahap pemberian makanan pada bayi > 6 bulan anak usia < 5 tahun agar memperoleh zat gizi yang cukup dan untuk mendidik tentang pola kebiasaan makanan anak yang baik dan teratur.\r\nPicky eater (anak sulit makan)\r\nPengendalian berat badan (obesitas atau malnutrisi)', 'Diet gangguan lambung dan usus.\r\nDiet penyakit hati dan kantung empedu\r\nDiet Penyakit Diabetes Mellitus\r\nDiet Penyakit Jantung\r\nDiet pada Hipertensi (tekanan darah tinggi)\r\nDiet pada Hiperkolesterdemi (kolesterol tinggi)\r\nDiet Penyakit Ginjal\r\nDiet Penyakit Gout Artritis (asam urat)', '', 'Senin - Jumat : 09.00 - 14.00\r\nSabtu : 08.00 - 14.00', 'https://rsumponorogo.com/images/klinik/klinik-gizi.jpg'),
(5, 'Klinik Obsgyn', 'Klinik Kebidanan dan Kandungan RSU Muhammadiyah Ponorogo ditangani oleh dokter-dokter spesialis obsgyn (Sp.OG) yang sudah berpengalaman dibidangnya serta didukung oleh penggunaan alat USG untuk mengetahui perkembangan janin pada ibu hamil.', 'Konsultasi, Pemeriksaan dan skrining kesehatan', '', '', 'Konsultasai masalah kesuburan, gangguan menstruasi, gangguan hormonal, syndrome menopause\r\nPemeriksaan kehamilan dengan USG 3-4 Dimensi\r\nSkrining kesehatan janin dan infeksi virus (TORCH)\r\nDeteksi dini kelainan pada janin\r\nKonsultasi dan Pemasangan alat kontrasepsi\r\nPap smear/ IVA\r\nPersalinan\r\nInfertilitas (Konsultasi Kesuburan dan Keinginan Punya Anak)\r\n', '', '', 'Senin : 07.00 - 18.30\r\nSelasa : 07.00 - 20.00\r\nRabu : 07.00 - 18.30\r\nKamis : 07.00 - 18.30\r\nJumat : 07.00 - 18.30\r\nSabtu : 09.00 - 12.00', 'https://rsumponorogo.com/images/klinik/klinik-absgyn.jpg'),
(6, 'Klinik Orthopaedi-Bedah Tulang', 'Klinik  Bedah Tulang (Orthopaedi)  RSU Muhammadiyah Ponorogo ditangani oleh dokter spesialis Orthopedi yang profesional dalam menangani permasalahan tulang dan sendi serta semua keluhan yang berkaitan dengan alat gerak tubuh.', 'Kasus yang ditangani di Klinik orthopedi RSUMP', '', '', 'Low Back Pain (LBP/ Nyeri Tulang Belakang)\r\nSkoliosis (Kelainan/ kelengkungan Tulang Belakang)\r\nOsteoarthritis (radang sendi)\r\nOsteoporosis (pengeroposan tulang)\r\nTrauma (patah tulang, dislokasi, cidera otot dan urat)\r\nTumor Musculoskeletal (tumor anggota gerak tubuh)\r\nKelainan congenital/ bawaan lahir (kaki bengkok sejak lahir)\r\nKasus bedah tulang lainnya seperti cedera olah raga, infeksi pada seluruh anggota gerak tubuh', '', '', 'Senin : 19.30 - 22.30\r\nRabu : 19.30 - 22.30\r\nJumat : 19.30 - 22.30', 'https://rsumponorogo.com/images/klinik/klinik-ortopedi.jpg'),
(7, 'Instalasi Gawat Darurat (IGD)', 'Memberikan pelayanan 24 jam diutamakan untuk kasus gawat darurat yang membutuhkan penanganan segera dari dokter dan perawat yang professional didukung dengan peralatan canggih yang memadai. IGD RSUMP siap menangani kejadian luar biasa: musibah massal, bencana alam, kebakaran, keracunan masal dan disaster yang lain.', 'Fasilitas', 'Layanan Kedaruratan', 'Layanan Kedaruratan Medis', 'Dokter dan perawat jaga yang terlatih\r\nAmbulance 24 Jam (antar pasien dan jemput pasien dalam kota)\r\nLABORATORIUM & BDRS 24 JAM\r\nFARMASI 24 JAM\r\nRADIOLOGI & CT SCAN\r\nINSTALASI RAWAT INAP\r\nINSTALASI GIZI\r\nINSTALASI BEDAH SENTRAL/ KAMAR OPERASI\r\nICU – ICCU\r\nDOKTER – DOKTER SPESIALIS', 'Kedaruratan Bedah\r\nKecelakaan lalu lintas\r\nKecelakaan olah raga\r\nKecelakaan rumah tangga\r\nLuka bakar\r\nKecelakaan kerja', 'KEDARURATAN JANTUNG: Nyeri Dada, Penyakit Jantung Koroner, Syok\r\nKEDARURATAN PERNAFASAN: Asma, Batuk Darah\r\nKEDARURATAN SYARAF: Stroke, Kejang, Koma\r\nKEDARURATAN ANAK: Kejang, Demam, Demam Tinggi\r\nKEDARURATAN PENCERNAAN: Keracunan, Diare, Muntah Darah\r\nKEDARURATAN SALURAN KENCING: Kencing Batu, Kencing Darah\r\nKENCING MANIS, KRISIS HIPERTENSI\r\nINFEKSI, DEMAM BERDARAH', 'Melayani 24 Jam', 'https://rsumponorogo.com/images/fasilitas/IGD-P1-B.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_berita`
--

CREATE TABLE `tabel_berita` (
  `id` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_berita`
--

INSERT INTO `tabel_berita` (`id`, `tipe`, `judul`, `slug`, `date`, `sumber`, `gambar`, `konten`) VALUES
(1, 'Berita', 'RSU Muhammadiyah Ponorogo Gelar Silaturahmi dengan Warga Sekitar untuk Perkuat Sinergi', 'RSU-Muhammadiyah-Ponorogo-Gelar-Silaturahmi-dengan-Warga-Sekitar-untuk Perkuat-Sinergi', '2026-03-13', 'Humas RSUMP', 'https://rsumponorogo.com/images/news_enl/WhatsApp%20Image%202026-03-13%20at%2013.24.40%20(2).jpeg', 'Dalam rangka mempererat hubungan dengan masyarakat sekitar, RSU Muhammadiyah Ponorogo menyelenggarakan kegiatan silaturahmi bersama warga lingkungan sekitar pada Jumat, 13 Maret 2026 di Aula RSU Muhammadiyah Ponorogo. Kegiatan ini menjadi momen penting untuk membangun komunikasi yang baik antara pihak rumah sakit dengan masyarakat.\r\n\r\nSuasana pertemuan berlangsung hangat dan penuh keakraban. Dalam kesempatan tersebut, pihak rumah sakit menyampaikan apresiasi kepada warga yang selama ini telah memberikan dukungan terhadap keberadaan dan pelayanan rumah sakit. Selain itu, kegiatan ini juga menjadi wadah untuk diskusi secara terbuka terkait berbagai hal yang berkaitan dengan lingkungan sekitar.\r\n\r\n“Salah satu jalan menuju syurga adalah silul arham atau menyambung silaturahmi, seperti yang diajarkan oleh Nabi kita,” ujar Drs. H. Bambang Dri Atmojo, M.Pd selaku Ketua Pimpinan Cabang Muhammadiyah Ponorogo Kota.\r\n\r\nDalam sesi diskusi, beberapa warga juga menyampaikan masukan serta harapan agar hubungan baik yang telah terjalin dapat terus dipertahankan. Pihak rumah sakit menyambut baik berbagai saran yang disampaikan sebagai bentuk sinergi antara institusi pelayanan kesehatan dengan masyarakat. Diskusi berlangsung secara santai namun tetap penuh makna, mencerminkan adanya keterbukaan dan keinginan bersama untuk terus menjaga hubungan yang harmonis.\r\n\r\nWarga sekitar berharap kegiatan seperti ini dapat terus dilaksanakan secara berkelanjutan. Melalui silaturahmi yang terjaga, hubungan baik antara RSU Muhammadiyah Ponorogo dan warga sekitar diharapkan semakin erat, sehingga bersama-sama dapat mendukung terciptanya pelayanan kesehatan yang lebih baik bagi masyarakat. Kegiatan silaturahmi ini juga menjadi langkah penting dalam memperkuat kebersamaan antara rumah sakit dan masyarakat sekitar. Dengan komunikasi yang baik serta kerja sama yang saling mendukung, diharapkan tercipta lingkungan yang kondusif, nyaman, dan harmonis bagi semua pihak.\r\n\r\n\"Terima kasih kami sudah diundang, bisa memberikan sumbangsih atau unek-unek terhadap rumah sakit. Harapan kami setiap ada kegiatan rumah sakit selalu begini, \" ujar salah satu warga disela-sela diskusi.'),
(2, 'Berita', 'RSU Muhammadiyah Ponorogo Gelar Media Gathering Perkuat Sinergi Informasi', 'RSU-Muhammadiyah-Ponorogo-Gelar-Media-Gathering-Perkuat-Sinergi-Informasi', '2026-02-18', 'Humas RSUMP', 'https://rsumponorogo.com/images/news_enl/frth.jpg', 'Humas RSU Muhammadiyah Ponorogo (RSUMP) menggelar kegiatan Media Gathering bersama insan media di Kabupaten Ponorogo, Senin (16/2/2026), bertempat di Omah Mawar. Kegiatan ini bertujuan mempererat kemitraan sekaligus memperkuat sinergi dalam penyampaian informasi kesehatan yang edukatif, akurat, dan terpercaya.\r\nDirektur RSUMP, dr. Barunanto, M.Si., menegaskan pentingnya komunikasi yang baik antara rumah sakit dan media guna meminimalkan kesalahpahaman informasi serta membangun kerja sama yang berkelanjutan.\r\n\r\nAcara berlangsung hangat dan interaktif melalui diskusi serta sesi tanya jawab. Para peserta media menyambut positif kegiatan ini dan berharap kolaborasi antara rumah sakit dan media dapat terus terjalin guna menghadirkan pemberitaan yang objektif.'),
(3, 'Berita', 'Tim DMC RSU Muhammadiyah Ponorogo Beri Layanan Kesehatan Gratis', 'Tim-DMC-RSU-Muhammadiyah-Ponorogo-Beri-Layanan-Kesehatan-Gratis', '2024-12-17', 'https://muhammadiyahponorogo.or.id/', 'https://muhammadiyahponorogo.or.id/wp-content/uploads/2024/12/IMG-20241216-WA0199-768x576.jpg', 'Banjir yang terjadi akibat hujan deras selama 2 hari terakhir telah menyebabkan banyak rumah terendam air, akses jalan terganggu, dan masyarakat kehilangan fasilitas kesehatan yang memadai. Menyadari kondisi tersebut Tim Medis DMC (Disaster Medic Committee) RSU Muhammadiyah Ponorogo turun langsung ke lapangan untuk memberikan layanan kesehatan kepada para korban banjir yang melanda sejumlah wilayah di Kabupaten Ponorogo, Senin (16/12/24).\r\n\r\nTim Medis DMC mengerahkan tenaga kesehatan, obat-obatan, dan peralatan medis ke lokasi terdampak untuk memastikan kebutuhan kesehatan para korban dapat terpenuhi. Langkah ini merupakan bagian dari misi kemanusiaan RSU Muhammadiyah Ponorogo untuk membantu masyarakat yang terdampak bencana alam.\r\n\r\nTim Medis RSUM Ponorogo Edi Suwito SKep Ns menjelaskan layanan kesehatan yang diberikan mencakup pemeriksaan kesehatan umum, pengobatan penyakit akibat banjir seperti infeksi saluran pernapasan akut (ISPA), diare, hingga penyakit kulit. Selain itu, tim juga memberikan edukasi kepada masyarakat tentang pentingnya menjaga kebersihan lingkungan dan air bersih di tengah situasi banjir.\r\n\r\n“Kami berupaya memastikan masyarakat yang terdampak bencana mendapatkan akses layanan kesehatan dengan cepat dan tepat. Fokus kami adalah mencegah penyebaran penyakit yang sering muncul setelah banjir,” terangnya.\r\n\r\nSelain memberikan layanan kesehatan, tim juga memberikan dukungan psikososial kepada masyarakat, terutama anak-anak dan lansia, yang terdampak trauma akibat banjir. Langkah ini diharapkan dapat membantu memulihkan kondisi mental mereka di tengah situasi darurat.\r\n\r\nKehadiran tim medis ini mendapatkan apresiasi dari masyarakat setempat. Salah satu warga Riyanto menyampaikan rasa terima kasihnya atas layanan kesehatan yang diberikan.\r\n\r\n“Kami sangat bersyukur atas bantuan dari RSU Muhammadiyah Ponorogo, di situasi seperti ini, layanan kesehatan memang sangat kami butuhkan,” ucapnya.\r\n\r\nTim DMC RSU Muhammadiyah Ponorogo berkomitmen untuk terus mendampingi para korban hingga situasi kembali normal. Mereka juga mengimbau masyarakat untuk tetap waspada terhadap potensi banjir susulan dan menjaga kesehatan selama masa pemulihan bencana.'),
(4, 'Berita', 'RSUM dan Ikatan Apoteker Indonesia Berbagi 85 Paket Sembako untuk Pasien Rawat Inap', 'RSUM-dan-Ikatan-Apoteker-Indonesia-Berbagi 85-Paket-Sembako-untuk-Pasien-Rawat-Inap', '2024-04-06', 'https://muhammadiyahponorogo.or.id/', 'https://muhammadiyahponorogo.or.id/wp-content/uploads/2024/04/IMG-20240406-WA0003.jpg', 'Rumah Sakit Umum Muhammadiyah (RSUM) bersama Ikatan Apoteker Indonesia (IAI) Ponorogo berbagi 85 paket sembako dan takjil untuk pasien rawat inap kelas II dan III, Jumat (5/4/24).\r\n\r\nKepala Instalasi Farmasi RSUM, apt Chris Purnamasari S Farm mengatakan kegiatan tersebut telah dilakukan dari tahun ke tahun.\r\n\r\n“Tak hanya berbagi, di bulan ramadhan RSUM juga selalu ada program khusus seperti tahfidh dan tahsin yang bisa diikuti semua orang”\r\n\r\nChris berharap suasana dan keberkahan ramadhan benar-benar bisa dirasakan oleh pasien dan keluarga.\r\n\r\n“Pasien terlihat senang, semoga kita bisa konsisten dan terus berlanjut di tahun-tahun berikutnya,” harap dia.\r\n\r\nSenada dengan itu, Ketua IAI Cabang Ponorogo, apt Nasruhan Arifianto S Farm M Farm Klin juga mengungkapkan rasa terima kasihnya kepada semua pihak yang telah mendukung kegiatan tersebut.\r\n\r\n“Terima kasih, saya yakin kegiatan tidak akan berjalan tanpa dukungan semua pihak,”'),
(5, 'Berita', 'Periksa Gratis Bersama Komunitas Al Manar', 'Periksa-Gratis-Bersama-Komunitas-Al-Manar', '2022-06-13', 'Humas RSUMP', 'https://rsumponorogo.com/images/news_enl/04321a87-1f9d-49d7-9670-cd5add19373c.jpg', 'Sebagai wujud pengabdiannya, kali ini Rumah Sakit Umum Muhammadiyah Ponorogo (RSUMP), mengadakan bakti sosial bersama komunitas pengajian Ahad Pagi Al Manar di halaman Universitas Muhammadiyah Ponorogo. Minggu (12/06).\r\n\r\nTerlihat antusias para jama\'ah untuk melakukan pengecekan gula darah, asam urat tensi dan konsultasi mengenai kondisi kesehatan yang lainnya.\r\n\r\nAlkhamdulillahirobbil ‘alamin, semoga dengan Rahmat dan Karunia-Nya, RSUMP terus istiqomah dalam memberikan pengabdian terbaiknya kepada umat. Amin yra'),
(6, 'Berita', 'Pendampingan Mentari TB for Maternal dan Child Health', 'Pendampingan-Mentari-TB-for-Maternal-dan-Child-Health', '2024-06-10', 'Humas RSUMP', 'https://rsumponorogo.com/images/news_enl/mch2.jpg', 'Dalam rangka menurunkan angka kematian ibu dan bayi baru lahir, Majelis Pembinaan Kesehatan Umum Pimpinan Pusat Muhammadiyah bekerjasama dengan USAID Indonesia mengadakan program Mentari TB for Maternal & Child Health (MCH) berupa lokakarya dan pendampingan melalui jaringan rumah sakit Muhammadiyah-Aisyiyah (RSMA) di Indonesia.\r\n\r\nRSU Muhammadiyah Ponorogo (RSUMP) mendapatkan jadwal pendampingan mulai tanggal 06 -07 Juni 2024. Bertempat di Aula RSUMP, acara dibuka oleh Kepala Dinas Kesehatan Kabupaten Ponorogo, Dyah Ayu Puspitaningarti, S.K.M, M.Kes sebagai fasilitator acara sekaligus pemateri.\r\n\r\nKegiatan ini dilaksanakan selama dua hari secara luring dan satu hari secara daring untuk pra (05/06) dan pasca pendampingan, dengan tujuan untuk meningkatkan keterampilan rumah sakit dalam mengisi APKK dan APKR, membangun komitmen dan memperluas akses pelayanan kesehatan ibu dan bayi baru lahir yang berkualitas.\r\n\r\nSasaran pendampingan ini adalah direktur rumah sakit, ketua komkep, yanmed, komdis, dokter spesialis kandungan, dokter spesialis anak, kepala keperawatan, IGD, VK, Kebidanan, VK/NICU, dan OK. Dimentori oleh tim RS Jejaring, kegiatan ini berjalan lancar dengan kegiatan diskusi, presentasi, juga hospital tour untuk menelaah singkat standar pelayanan guna peningkatan mutu pelayanan ibu dan bayi baru lahir.');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dokter`
--

CREATE TABLE `tabel_dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `gambar_dokter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_dokter`
--

INSERT INTO `tabel_dokter` (`id`, `nama_dokter`, `spesialis`, `gambar_dokter`) VALUES
(1, 'drg. Yanni Nur Sukmariyanti', 'Klinik Gigi', 'https://rsumponorogo.com/images/dokter/Yani.jpg'),
(2, 'dr. Hj. Rina Kurniawati', 'Klinik Umum', 'https://rsumponorogo.com/images/dokter/DR%20RINA.jpg'),
(3, 'dr. H. Ilyas Sofana, Sp. OG', 'Klinik Obsgyn', 'https://rsumponorogo.com/images/dokter/DR.%20Ilyas%20S.jpg'),
(4, 'dr. Ratna W, Sp. OG', 'Klinik Obsgyn', 'https://rsumponorogo.com/images/dokter/dr.%20Ratna%20web.jpg'),
(5, 'dr. Pipit Soesilowati T. I, Sp. N', 'Klinik Saraf', 'https://www.rsumponorogo.com/images/dokter/WhatsApp%20Image%202024-09-25%20at%2009.59.28.jpeg'),
(6, 'dr. Muchtar Machjudin, Sp. S', 'Klinik Saraf', 'https://www.rsumponorogo.com/images/dokter/muchtar%20web.jpg'),
(7, 'dr. Araafi H. M, Sp, OG', 'Klinik Obsgyn', 'https://www.rsumponorogo.com/images/dokter/dr%20Araafi.jpg'),
(8, 'dr. Dian Fikri R, Sp. OG', 'Klinik Obsgyn', 'https://www.rsumponorogo.com/images/dokter/IMG-20241126-WA0043-removebg-preview.jpg'),
(9, 'dr. Ardantri Dyana SP', 'Klinik TB DOTS\r\nKlinik Umum', 'https://www.rsumponorogo.com/images/dokter/dr-ardantri.jpg'),
(10, 'dr. Nuriza K, Sp. JP', 'Klinik Jantung', 'https://www.rsumponorogo.com/images/dokter/DR.%20NURIZA-removebg-preview.jpg'),
(11, 'dr. Tonny Hartono, Sp.B', 'Klinik Bedah Umum', 'https://www.rsumponorogo.com/images/dokter/tonny.jpg'),
(12, 'dr. Indra Wahono Suhariyanto', 'Klinik Umum', 'https://rsumponorogo.com/images/dokter/DR%20INDRA-removebg-preview.jpg'),
(13, 'dr. Herlambang S. P., M.M.R, Sp. PD', 'Klinik Internis-Penyakit Dalam', 'https://rsumponorogo.com/images/dokter/dr._herlambang-removebg-preview-removebg-preview.jpg'),
(14, 'dr. Intan Salinurasa, Sp. B', 'Klinik Bedah Umum', 'https://rsumponorogo.com/images/dokter/intan.jpg'),
(15, 'dr. Yuniar Tri Rahmawati', 'Klinik Umum', 'https://rsumponorogo.com/images/dokter/DOKTER%20DOKTER.jpg'),
(16, 'dr. Danang Kusuma Adi, Sp. PD', 'Klinik Internis-Penyakit Dalam', 'https://rsumponorogo.com/images/dokter/DR%20DANANG.jpg'),
(17, 'dr. Rachmat Saleh R, Sp.OT', 'Klinik Orthopaedi-Bedah Tulang', 'https://rsumponorogo.com/images/dokter/rahmat.jpg'),
(18, 'drg. Restia Rahmadhani', 'Klinik Gigi', 'https://rsumponorogo.com/images/dokter/drg.%20Restia%20web.jpg'),
(19, 'Deni Wahyuti, S. Gz', 'Klinik Gizi', 'https://rsumponorogo.com/images/dokter/Bu_Deni-removebg-preview%20web.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ruang_inap`
--

CREATE TABLE `tabel_ruang_inap` (
  `id` int(11) NOT NULL,
  `nama_ruang` varchar(100) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar_kamar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_ruang_inap`
--

INSERT INTO `tabel_ruang_inap` (`id`, `nama_ruang`, `fasilitas`, `harga`, `gambar_kamar`) VALUES
(1, 'KH. Ahmad Dahlan Perawatan VVIP', 'AC\r\nKitchen Set\r\nKulkas\r\n1 Bed 3 Crank\r\nTelepon\r\nNurse Call\r\nTV\r\nSofa Penunggu Pasien\r\nMeja Kursi Tamu\r\nKursi Penunggu Pasien\r\nRak handuk\r\nKamar mandi dalam\r\nOverbed table\r\nBedside table\r\nWater heater', 'Rp.50.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/IMG_8283.JPG'),
(2, 'KH. Ahmad Dahlan Perawatan VIP', '1 Tempat tidur pasien\r\nKursi Penunggu Pasien- Meja\r\nNurse Call\r\nBedside table\r\nKulkas\r\nAC\r\nSofa\r\nKamar mandi dalam\r\nTV\r\n1 Bed 3 Crank', 'Rp.450.000, 00', 'https://rsumponorogo.com/images/ruang_rawat_thm/KELAS%20VIP.JPG'),
(3, 'KH. Ahmad Dahlan Kelas III', ' 5 – 6 Tempat tidur pasien\r\nKursi Penunggu Pasien- Meja\r\nNurse Call\r\nRak Handuk\r\nBedside table\r\nAC\r\nKamar mandi dalam\r\nTV', 'Rp.100.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/KELAS%203.jpg'),
(4, 'KH. Ahmad Dahlan Kelas II', '2 Tempat tidur pasien\r\nKursi Penunggu Pasien- Meja\r\nNurse Call\r\nRak Handuk\r\nBedside table\r\nAC\r\nKamar mandi dalam\r\nTV', 'Rp.150.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/Kelas%202.jpg'),
(5, 'KH. Ahmad Dahlan Kelas I', '1 Tempat tidur pasien\r\nKursi Penunggu Pasien- Meja\r\nNurse Call\r\nRak Handuk\r\nBedside table\r\nAC\r\nKamar mandi dalam\r\nTV', 'Rp.300.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/KELAS%201.jpg'),
(6, 'KH. AR. Fahrudin Perawatan VIP', 'AC\r\nKulkas\r\n1 Bed 3 Crank\r\nTelepon\r\nNurse Call\r\nTV\r\nSofa Penunggu Pasien\r\nMeja Kursi Tamu\r\nKursi Penunggu Pasien\r\nRak handuk\r\nKamar mandi dalam\r\nOverbed table\r\nBedside table\r\nWater heater', 'Rp.350.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/WhatsApp%20Image%202026-07-15%20at%2013.00.47.jpeg'),
(7, 'KH. AR. Fahrudin Kelas III', '4 – 6 Tempat tidur pasien\r\nKursi Penunggu Pasien\r\nRak Handuk\r\nBedside table\r\nKipas angin\r\nKamar mandi dalam\r\nTV\r\nAC', 'Rp.100.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/mansur%203.jpg'),
(8, 'KH. AR. Fahrudin Kelas II', '2 Tempat tidur pasien\r\nKursi penunggu pasien\r\nBeside table\r\nKamar mandi dalam\r\nKipas Angin\r\nAC', 'Rp.150.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/WhatsApp%20Image%202026-07-15%20at%2013.00.41%20(1).jpeg'),
(9, 'KH. AR. Fahrudin Kelas I', '1 Tempat tidur pasien\r\nKursi penunggu pasien\r\nRak handuk\r\nKamar mandi dalam\r\nBedside table\r\nKipas angin\r\nAC', 'Rp.300.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/WhatsApp%20Image%202026-07-15%20at%2013.00.43.jpeg'),
(11, 'KH. Mas Mansur Perawatan VIP', '1 Bed 3 Crank\r\nTelepon\r\nTV\r\nSofa Penunggu Pasien\r\nKursi Penunggu Pasien\r\nRak Handuk\r\nKamar Mandi Dalam\r\nBedside table\r\nKipas angin/ AC', 'Rp.350.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/vip-(standar)-mas-mansur.jpg'),
(12, 'KH. Mas Mansur Kelas III', '4 – 6 Tempat tidur pasien\r\nKursi Penunggu Pasien\r\nRak Handuk\r\nBedside table\r\nKipas angin\r\nKamar mandi dalam\r\nTV\r\nAC', 'Rp.100.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/kelas-3-mansur.jpg'),
(13, 'KH. Mas Mansur Kelas II', '2 Tempat tidur pasien\r\nKursi penunggu pasien\r\nBeside table\r\nKamar mandi dalam\r\nKipas Angin\r\nAC', 'Rp.150.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/IMG_1467.JPG'),
(14, 'KH. Mas Mansur Kelas I', '1 Tempat tidur pasien\r\nKursi penunggu pasien\r\nRak handuk\r\nKamar mandi dalam\r\nBedside table\r\nKipas angin\r\nAC', 'Rp.300.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/WhatsApp%20Image%202026-03-16%20at%2014.59.38.jpeg'),
(15, 'Siti Walidah Perawatan VIP', 'AC\r\nKulkas\r\n1 Bed 3 crank\r\nTV\r\nPemanas Air\r\nSofa Penunggu Pasien\r\nKursi Penunggu Pasien\r\nKamar Mandi Dalam\r\nBedside table', 'Rp.450.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/WhatsApp%20Image%202026-03-04%20at%2015.19.54.jpeg'),
(16, 'Siti Walidah Kelas III', '4 –6 Tempat tidur pasien\r\nKursi Penunggu Pasien\r\nRak Handuk\r\nBedside table\r\nKipas angin\r\nKamar mandi dalam\r\nAC', 'Rp.100.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/kelas-3-siti-walidah.jpg'),
(17, 'Siti Walidah Kelas II', '2 Tempat tidur pasien\r\nKursi penunggu pasien\r\nBeside table\r\nKamar mandi dalam\r\nAC dan Kipas Angin', 'Rp.150.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/kelas-II-walidah.jpg'),
(18, 'Siti Walidah Kelas I', 'AC\r\nTV\r\n1 Tempat tidur pasien\r\nKursi penunggu pasien\r\nRak handuk\r\nKamar mandi dalam\r\nBedside table', 'Rp.300.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/WhatsApp%20Image%202026-03-16%20at%2014.59.39.jpeg'),
(19, 'ICU-ICCU', '6 BED STANDAR ICU-ICCU\r\nVENTILATOR\r\nPATIENT MONITOR\r\nDEFRIBRILATOR\r\nSUCTION PUMP\r\nINFUSE PUMP\r\nSYRINGE PUMP\r\nALAT VENTILASI MANUAL\r\nOKSIGEN SENTRAL\r\nNEBULIZER\r\nELECTROCARDIOGRAPHY', 'Rp.350.000,00', 'https://www.rsumponorogo.com/images/ruang_rawat_thm/ICU-rsum-ponorogo.jpg'),
(20, 'Darwis Perawatan VIP', '1 Tempat tidur pasien\r\nKursi Penunggu Pasien- Meja\r\nNurse Call\r\nBedside table\r\nKulkas\r\nAC\r\nSofa\r\nKamar mandi dalam\r\nTV\r\n1 Bed 3 Crank', 'Rp.450.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/IMG_8278.JPG'),
(21, 'Darwis Kelas III', '5 – 6 Tempat tidur pasien\r\nKursi Penunggu Pasien- Meja\r\nNurse Call\r\nRak Handuk\r\nBedside table\r\nAC\r\nKamar mandi dalam\r\nTV', 'Rp.100.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/IMG_9998.JPG'),
(22, 'Darwis Kelas II', '2 Tempat tidur pasien\r\nKursi Penunggu Pasien- Meja\r\nNurse Call\r\nRak Handuk\r\nBedside table\r\nAC\r\nKamar mandi dalam\r\nTV', 'R0.150.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/IMG_0087.JPG'),
(23, 'Darwis Kelas I', '1 Tempat tidur pasien\r\nKursi Penunggu Pasien- Meja\r\nNurse Call\r\nRak Handuk\r\nBedside table\r\nAC\r\nKamar mandi dalam\r\nTV', 'Rp.300.000,00', 'https://rsumponorogo.com/images/ruang_rawat_thm/IMG_0029.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indikator_mutu`
--
ALTER TABLE `indikator_mutu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD UNIQUE KEY `dokter_id` (`dokter_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_ruang_inap`
--
ALTER TABLE `tabel_ruang_inap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `indikator_mutu`
--
ALTER TABLE `indikator_mutu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tabel_ruang_inap`
--
ALTER TABLE `tabel_ruang_inap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD CONSTRAINT `jadwal_dokter_ibfk_1` FOREIGN KEY (`dokter_id`) REFERENCES `tabel_dokter` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
