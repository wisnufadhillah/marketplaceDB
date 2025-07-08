-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2025 at 02:29 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2952`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'lanesra@gmail.com', 'a5375c7f48244c8f4876ee6f97bbda4d91fe1665', 'Lanesra, M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto_artikel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`) VALUES
(1, 'Sejarah Kain Katun Beserta Manfaatnya', '<p>Sebagai Bahan pakaian yang cukup nyaman bila dikenakan oleh setiap orang. Itulah yang menjadikan kain katun populer dikalangan masyarakat. Apalagi jenis kain yang terbuat dari serat alami, sudah dikenal sejak 5000 tahun sebelum masehi.</p>\r\n\r\n<p>Pakaian yang terbuat dari kain katun memiliki beberapa manfaat yang luar biasa bagi kesehatan tubuh. Makin sering mengenakan pakaian dengan jenis bahan ini, beberapa permasalahan tubuh bisa teratasi. Berikut ini merupakan keuntungannya</p>\r\n\r\n<ol>\r\n	<li>Meminimalkan pertumbuhan bakteri pada tubuh</li>\r\n	<li>Menghindarkan terjadinya iritasi</li>\r\n	<li>Termasuk kain non-alergi</li>\r\n</ol>\r\n', 'katun.jpg'),
(2, '5 Manfaat Rahasia di Balik Pemakaian Outer', '<ol>\r\n	<li>Membuat Hal Simple Menjadi Unik</li>\r\n	<li>Musim Dingin Tetap Modis</li>\r\n	<li>Menutupi Bagian Dada dan Lengan</li>\r\n	<li>Tidak Terasa Panas</li>\r\n	<li>Memberikan Kesan Langsing</li>\r\n</ol>\r\n', 'Outer.jpg'),
(3, '7 Karateristik Kain Linen Yang Wajib Kamu Ketahui Sebelum Belanja Pakaian', '<ol>\r\n	<li>Linen Yang berkualitas tinggi memiliki permukaan yang sangat halus dan rapi.</li>\r\n	<li>Kain linen sangat identik dengan warna putih, sedikit pucat dan natural.</li>\r\n	<li>kain linen termasuk kedalam golongan serat nabati terkuat jika dibandingkan dengan serat alami jenis lain. Permukaan kain linen terlihat berkilau dan memiliki ketebalan yang konsisten.</li>\r\n	<li>Semakin sering dicuci permukaan kain linen akan menjadi semakin lembut, namun jika tidak dirawat dengan baik juga bisa rusak dan terlihat kurang menarik.</li>\r\n	<li>Pakaian yang terbuat dari bahan linen tidak hanya halus, mengkilap dan terlihat mahal tapi juga tidak mudah kotor.</li>\r\n	<li>Bahan linen akan terasa sangat sejuk saat dikenakan didaerah yang bersuhu panas dan akan bersifat menghangatkan ketika cuaca dingin.</li>\r\n	<li>Kain linen bisa rusak karena jamur, keringat dan pemutih sehingga membutuhkan perawatan yang khusus</li>\r\n</ol>\r\n', 'linen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `foto_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `foto_kategori`) VALUES
(1, 'fashion wanita', 'kategori_hijab.jpg'),
(2, 'sparepart motor', 'sss.jpg'),
(4, 'makanan', 'burger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int NOT NULL,
  `id_member_jual` int NOT NULL,
  `id_member_beli` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int NOT NULL,
  `email_member` varchar(100) NOT NULL,
  `password_member` varchar(100) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat_member` text NOT NULL,
  `wa_member` varchar(50) NOT NULL,
  `kode_distrik_member` varchar(10) NOT NULL,
  `nama_distrik_member` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email_member`, `password_member`, `nama_member`, `alamat_member`, `wa_member`, `kode_distrik_member`, `nama_distrik_member`) VALUES
(1, 'arifrahman@amikom.ac.id', 'eb8848597b2b1d0bf9a92f439c5a9625f83ab435', 'Arif Nur Rohman M.Kom', 'Purwomatani Kalasan Sleman', '08990423789', '419', 'Kabupaten Sleman DI Yogyakarta'),
(2, 'lanesra@amikom.ac.id', 'a5375c7f48244c8f4876ee6f97bbda4d91fe1665', 'Lanesra', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', '081336952939', '377', 'Kabupaten Purworejo Jawa Tengah'),
(3, 'budi@gmail.com', '83161a62f22277c65a6cdb7ebc314f218c376c63', 'Budi Darmawan', 'Bandung Barat Nomor 12 Belakang Kampus AMK', '081336952939', '24', 'Kabupaten Bandung Barat Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `id_member` int NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `berat_produk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_member`, `id_kategori`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `berat_produk`) VALUES
(1, 1, 1, 'Hijab segi empat ', 90000, 'hijabsegi.jpg', 'Assalamualaikum. Sebelum membeli, mohon untuk membaca deskripsi produk terlebih dahulu! Karena produk yg kami jual sesuai dengan deskripsi ya ?\r\n\r\nReady stock siap kirim!\r\n\r\nAlesha voal menggunakan bahan voal Arabian Original import memiliki karakteristik flowly, ringan, nyaman dan mudah diatur. \r\n\r\nHijab dijahit lipit kecil dengan benang yang senada. Jahitan rapih dan rapat sehingga jahitan tidak mudah terlepas. \r\n\r\nUkuran hijab 120cm, ukuran hijab sebelum dipotong adalah 124 x 124. Jadi InsyaAllah ukuran tidak kurang dari 120cm. Kami menjahit sesuai dengan serat benangnya sehingga hasilnya presisi dan tidak bergelombang.\r\n\r\n\r\nDisclaimer.\r\nProduk yg di foto adalah benar produk yg kami jual, kami mengusahakan untuk menampilkan foto produk yg sesuai dengan aslinya. Warna bisa berbeda sedikit karena pengaruh device yg berbeda. Oleh karena itu apabila ingin melihat gambar yg lain, bisa hubungi kami via chat. \r\nSilahkan diorder ❤', 200),
(2, 1, 1, 'Mukena Travel Dewasa Silky', 200000, 'hijb2.jpeg', 'Mukena mewah bahan Santorini Silk Premium, yang lembut dan dingin di kulit.  Menggunakan bahan yang ringan namun tidak mudah terbang ketika digunakan dan tidak menimbulkan bunyi kresek kresek. Mukena dewasa dengan size jumbo\r\nJahitan halus, rapih standar butik. Produk dikemas dengan rapih dan wangi. Mukena dilengkapi dengan wadahnya yang cantik dan kecil sehingga mudah dibawa kemanapun.\r\n\r\nMukena cocok untuk daily, travelling, seserahan ataupun hadiah ustzah atau guru.\r\n\r\nsize \r\nAtasan\r\nPD 126 cm\r\nPB 137 cm\r\nLubang muka bisa di adjust menggunakan resleting berkualitas yang tidak mudah rusak\r\nBagian risleting terlapisi kain sehingga tidak menimbulkan gatal pada wajah.\r\n\r\nBawahan\r\nPanjang rok 124cm\r\nLIngkar  rok 70 cm - melar sampai 145cm\r\nMenggunakan karet yang tidak mudah kendor.  \r\n\r\n*note (Harap dicuci terlebih dahulu sebelum digunakan), cuci manual sangat di sarankan agar produk awet.', 200),
(4, 1, 1, 'Hijab Kuliah', 85000, 'hijab-kuliah-4.jpg', 'Style Hijab yang cocok untuk kuliah', 200),
(5, 1, 4, 'Ayam geprek', 15000, 'geprek.png', 'Sensasi Rasa Geprek yang sangat pedas', 200);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int NOT NULL,
  `caption_slider` text NOT NULL,
  `foto_slider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `caption_slider`, `foto_slider`) VALUES
(1, 'New Arrivals At Our Marketplace', 'banner_1.png'),
(2, 'Banyak Pilihan Warna Tersedia', 'banner_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `id_member_beli` int NOT NULL,
  `id_member_jual` int NOT NULL,
  `tanggal_transaksi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `belanja_transaksi` int NOT NULL,
  `status_transaksi` enum('pesan','lunas','batal','dikirim','selesai') NOT NULL DEFAULT 'pesan',
  `ongkir_transaksi` int NOT NULL,
  `total_transaksi` int NOT NULL,
  `bayar_transaksi` int NOT NULL,
  `distrik_pengirim` varchar(255) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `wa_pengirim` varchar(50) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `distrik_penerima` varchar(255) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `wa_penerima` varchar(50) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `nama_ekspedisi` varchar(100) NOT NULL,
  `layanan_ekspedisi` varchar(100) NOT NULL,
  `estimasi_ekspedisi` varchar(50) NOT NULL,
  `berat_ekspedisi` varchar(50) NOT NULL,
  `resi_ekspedisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_transaksi`, `id_member_beli`, `id_member_jual`, `tanggal_transaksi`, `belanja_transaksi`, `status_transaksi`, `ongkir_transaksi`, `total_transaksi`, `bayar_transaksi`, `distrik_pengirim`, `nama_pengirim`, `wa_pengirim`, `alamat_pengirim`, `distrik_penerima`, `nama_penerima`, `wa_penerima`, `alamat_penerima`, `nama_ekspedisi`, `layanan_ekspedisi`, `estimasi_ekspedisi`, `berat_ekspedisi`, `resi_ekspedisi`) VALUES
(1, '', 1, 2, '2025-03-18 07:43:05', 100000, 'pesan', 20000, 120000, 120000, 'Bantul', 'Lanesra', '08990423789', 'Bambanglipuro No 12 Bantul', 'Sleman', 'Arif Nur Rohman', '089530168889', 'Purwomartani RT 4 Kalasan Sleman', 'JNE', 'Kilat', '1 Hari', '1000', NULL),
(2, '202506201759006378', 2, 1, '2025-06-20 17:59:00', 0, 'pesan', 60000, 60000, 60000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'JNE Trucking', '60000', '0', NULL),
(3, '202506201800372932', 2, 1, '2025-06-20 18:00:37', 0, 'pesan', 60000, 60000, 60000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'JNE Trucking', '60000', '0', NULL),
(4, '202506201801004337', 2, 1, '2025-06-20 18:01:00', 30000, 'pesan', 60000, 90000, 90000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'JNE Trucking', '60000', '400', NULL),
(5, '202506201804423876', 2, 1, '2025-06-20 18:04:42', 30000, 'pesan', 60000, 90000, 90000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'JNE Trucking', '60000', '400', NULL),
(6, '202506201809428866', 2, 1, '2025-06-20 18:09:42', 30000, 'pesan', 60000, 90000, 90000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'JNE Trucking', '60000', '400', NULL),
(7, '202506210856211177', 2, 1, '2025-06-21 08:56:21', 1050000, 'lunas', 18000, 1068000, 1068000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'Yakin Esok Sampai', '18000', '1600', NULL),
(8, '202506211333042606', 2, 1, '2025-06-21 13:33:04', 875000, 'lunas', 18000, 893000, 893000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'Yakin Esok Sampai', '18000', '2000', 'JN212001'),
(9, '202506241209155461', 2, 1, '2025-06-24 12:09:15', 780000, 'pesan', 15000, 795000, 795000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'Layanan Reguler', '15000', '1000', NULL),
(10, '202506241212588709', 2, 1, '2025-06-24 12:12:58', 90000, 'pesan', 18000, 108000, 108000, 'Kabupaten Sleman DI Yogyakarta', 'Arif Nur Rohman M.Kom', '08990423789', 'Purwomatani Kalasan Sleman', 'Kabupaten Purworejo Jawa Tengah', 'Lanesra', '081336952939', 'Hargorojo RT 4 RW 2 Bagelan (Timur Masjid Al Ihsan)', 'Jalur Nugraha Ekakurir (JNE)', 'Yakin Esok Sampai', '18000', '200', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int NOT NULL,
  `id_transaksi` int NOT NULL,
  `id_produk` int NOT NULL,
  `nama_beli` varchar(255) NOT NULL,
  `harga_beli` int NOT NULL,
  `jumlah_beli` int NOT NULL,
  `jumlah_rating` int DEFAULT NULL,
  `ulasan_rating` text,
  `waktu_rating` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `id_produk`, `nama_beli`, `harga_beli`, `jumlah_beli`, `jumlah_rating`, `ulasan_rating`, `waktu_rating`) VALUES
(5, 1, 2, 'Mukena Travel Dewasa Silky', 50000, 1, NULL, NULL, NULL),
(6, 1, 1, 'Hijab Segi Empat', 50000, 1, NULL, NULL, NULL),
(7, 5, 5, 'Ayam geprek', 15000, 2, NULL, NULL, NULL),
(8, 6, 5, 'Ayam geprek', 15000, 2, NULL, NULL, NULL),
(9, 7, 2, 'Mukena Travel Dewasa Silky', 200000, 3, 5, 'Mantap!', '2025-06-23 16:42:16'),
(10, 7, 1, 'Hijab segi empat ', 90000, 5, 5, 'Jos Poll!', '2025-06-23 16:42:16'),
(11, 8, 1, 'Hijab segi empat ', 90000, 5, 4, 'Bagus Sekali!', '2025-06-23 16:26:07'),
(12, 8, 4, 'Hijab Kuliah', 85000, 5, 5, 'Produk mantap, next order lagi!', '2025-06-23 16:26:07'),
(13, 9, 1, 'Hijab segi empat ', 90000, 2, NULL, NULL, NULL),
(14, 9, 2, 'Mukena Travel Dewasa Silky', 200000, 3, NULL, NULL, NULL),
(15, 10, 1, 'Hijab segi empat ', 90000, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
