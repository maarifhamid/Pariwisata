-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 02:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siowisja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(25) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('ilham', 'ilham'),
('doni', 'doni'),
('dyandra', 'dyandra'),
('tika', 'tika');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `wisata` varchar(50) NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `name`, `wisata`, `rate`) VALUES
(26, 'Gibran', 'Jambi Paradise', 3.7),
(27, 'Dini', 'Jambi Paradise', 3.6),
(28, 'Dyandra', 'Gunung Kerinci', 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `parent_komentar_id` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `parent_komentar_id`, `komentar`, `nama_pengirim`, `date`) VALUES
(1, 0, 'Siowisja sangat bermanfaat', 'Dyandra', '2020-12-01 09:06:55'),
(2, 0, 'Sangat membantu dalam mencari wisata di Jambi', 'Doni', '2020-12-01 09:06:55'),
(7, 0, 'Siowisja sangat membantu kami dalam mencari wisata di Jambi', 'Dini Andriani', '2020-12-11 02:54:20'),
(8, 0, 'Siowisja sangat bermanfaat', 'ilham', '2020-12-11 07:10:29'),
(9, 8, 'Sangat membantu', 'Ilham', '2020-12-11 07:11:00'),
(10, 0, 'Siowisja sangat membantu saya dalam menemukan wisata terbaik di jambi', 'ilham', '2020-12-11 07:27:36'),
(11, 10, 'iya siowisja ini sangat bermanfaat', 'Syahirul', '2020-12-11 07:28:26'),
(12, 0, 'mantap siowisja', 'uwu', '2020-12-15 06:55:55'),
(13, 12, 'Jos Gandos', 'Gaskan', '2020-12-15 09:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int(11) NOT NULL,
  `judul_profil` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `isi_profil` text COLLATE latin1_general_ci NOT NULL,
  `gambar_profil` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `judul_profil`, `isi_profil`, `gambar_profil`) VALUES
(1, 'Tentang Kota Jambi', 'Provinsi Jambi dibentuk berdasarkan Undang-Undang Darurat Nomor 19 tahun 1957, tentang Pembentukan Daerah-Daerah Swatantra Tingkat I Sumatera Barat, Jambi dan Riau, yang kemudian ditetapkan menjadi Undang-Undang Nomor 61 tahun 1958 (Lembaran Negara Tahun 1958 Nomor 112), yang terdiri dari 5 Kabupaten dan 1 Kota. Pada tahun 1999, dilakukan pemekaran terhadap beberapa wilayah administratif di Provinsi Jambi melalui Undang-undang Nomor 54 tahun 1999 tentang pembentukan Kabupaten Sarolangun, Kabupaten Tebo, Kabupaten Muaro Jambi dan Kabupaten Tanjung Jabung Timur. Selanjutnya melalui Undang-undang nomor 25 tahun 2008, tentang Pembentukan Kota Sungai Penuh, sehingga sampai tahun 2010, secara administratif Provinsi Jambi menjadi 9 Kabupaten dan 2 Kota.\r\n\r\n	Kedua atas Undang-Undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah dan Peraturan Pemerintah Nomor 19 Tahun 2010 tentang Tata Cara Pelaksanaan Tugas dan Wewenang serta Kedudukan Keuangan Gubernur sebagai Wakil Pemerintah di Wilayah Provinsi sebagaimana telah di ubah dengan Peraturan Pemerintah Nomor 24 tahun 2011, maka Gubernur juga berkewajiban menyampaikan informasi kegiatan yang dilaksanakan oleh Instansi Vertikal yang berada pada wilayah Pemerintah Provinsi Jambi.\r\n\r\nLetak Wilayah dan Topografi\r\n\r\n	Secara geografis Provinsi Jambi terletak pada 0o45’-2o45’ Lintang Selatan dan 101o10’-104o55’ Bujur Timur di bagian tengah Pulau Sumatera, sebelah Utara berbatasan dengan Provinsi Riau, Sebelah Timur dengan Laut Cina Selatan Provinsi Kepulauan Riau, sebelah Selatan berbatasan dengan Provinsi Sumatera Selatan dan sebelah Barat berbatasan dengan Provinsi Sumatera Barat. Posisi Provinsi Jambi cukup strategis karena langsung berhadapan dengan kawasan pertumbuhan ekonomi yaitu IMS-GT (Indonesia, Malaysia, Singapura Growth Triangle). Luas wilayah Provinsi Jambi sesuai dengan Undang-undang Nomor 19 tahun 1957, tentang Pembentukan Daerah-Daerah Swatantra Tingkat I Sumatera Barat, Jambi dan Riau, yang kemudian ditetapkan menjadi Undang-Undang Nomor 61 tahun 1958 (Lembaran Negara Tahun 1958 Nomor 112) adalah seluas 53.435,72 km2 dengan luas daratan 50.160,05 km2 dan luas perairan 3.274,95 Km2 yang terdiri atas :\r\n\r\n\r\n    Kabupaten Kerinci 3.355,27 Km2 (6,67%)\r\n    Kabupaten Bungo 4.659 Km2 (9,25%)\r\n    Kabupaten Merangin 7.679 Km2 (15,25%)\r\n    Kabupaten Sarolangun 6.184 Km2 (12,28%)\r\n    Kabupaten Batanghari 5.804 Km2 (11,53%)\r\n    Kabupaten Muaro Jambi 5.326 Km2 (10,58%)\r\n    Kabupaten Tanjab Barat 4.649,85 Km2 (9,24%)\r\n    Kabupaten Tanjab Timur 5.445 Km2 (10,82%)\r\n    Kabupaten Tebo 6.641 Km2 (13,19%)\r\n    Kota Jambi 205,43 Km2 (0,41%)\r\n    Kota Sungai Penuh 391,5 Km2 (0,78%)\r\n\r\n\r\n	Secara administratif, jumlah kecamatan dan desa/kelurahan di Provinsi Jambi tahun 2019 sebanyak 141 Kecamatan dan 1.375 Desa/Kelurahan, dimana jumlah Kecamatan dan Desa/Kelurahan terbanyak di Kabupaten Merangin yaitu 24 Kecamatan dan 215 Desa/Kelurahan.', 'kota jambi.jpg'),
(5, 'Tentang Siowisja', 'Siowisja merupakan singkatan dari sistem informasi objek Wisata Jambi. Website ini berisi informasi seputar wisata yang ada di Jambi.\r\n\r\nWebsite ini bertujuan agar wisatawan yang ingin berkunjung ke wisata Jambi dapat mudah mencari informasi mengenai tempat wisata yang ingin dikunjungi.\r\n\r\nDengan dibuatnya website ini diharapkan dapat membantu Anda dalam mencari sebuah informasi wisata di Jambi.\r\n\r\nKami dari tim develope mengucapkan terima kasih karena telah berkunjung ke website kami. Kritik dana saran Anda sangat kami harapkan agar website ini semakin maju dan berkembang. Sekian dari kami, terima kasih.', 'Siowisja.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id_rating` int(11) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `judul_wisata` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_informasi` text COLLATE latin1_general_ci NOT NULL,
  `gambar_wisata` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id_rating`, `username`, `judul_wisata`, `isi_informasi`, `gambar_wisata`) VALUES
(7, 'admin', 'Gunung Kerinci', 'Gunung Kerinci adalah gunung berapi terkenal dengan puncak tertinggi di Indonesia. Gunung ini sekaligus menjadi gunung tertinggi kedua di Indonesia setelah Jaya Wijaya di Papua. Objek wisata di Jambi ini menawarkan suasana sejuk dan pemandangan pagi hari yang memukau. Pastikan Toppers tidak lupa untuk melakukan summit attack dalam kegiatan hikingmu yah, Toppers! Karena pemandangan matahari terbit di Puncak Kerinci akan jadi momen tak terlupakan. Lokasi: Perbatasan Provinsi Jambi dengan Sumatera Barat Jam Operasional: 24 Jam Harga Tiket: Gratis', 'gunung - Copy.jpg'),
(5, 'admin', 'Telaga Biru', 'Sesuai namanya, Telaga Biru memiliki perairan dengan corak biru bening dan bakal tampak berkilauan kala saat diterpa sinar mentari. Lokasi tepatnya ada di desa Tanjung Alam, Kecamatan Sungai Tenang, Kabupaten Merangin. Telaga ini berada di ketinggian 2033 mdpl dan masuk dalam kawasan Hutan Produksi Lainnya (HPL). Berbatasan langsung dengan Taman Nasional Kerinci Seblat (TNKS). Permukaan air tenang dan jernih jadi keunggulan telaga ini. Saking jernihnya, Teman Traveler bisa lho bercermin di sini. Cukup menarik bukan? Di salah satu sudut telaga terdapat pohon melintang yang kerap dijadikan sebagai spot foto oleh para pengunjung. Begitu pula dengan jembatan menuju pondok peristirahatan buatan warga. Lokasi Telagai Biru memang cukup tersembunyi di dalam hutan, sehingga tidak banyak orang tahu soal keberadaannya. Namun jangan salah, tempat ini sangat asri dan sejuk. Bila Teman Traveler berniat melepas penat dengan mengagumi pesona alam, destinasi ini adalah pilihan tepat.Nama Telaga Biru mulai disematkan sejak 2016 oleh Bupati Merangin, kala beliau datang berkunjung ke sini. Sebelumnya tempat ini pertama kali ditemukan oleh seorang warga Tanjung Alam yang sedang mencari burung. Ia lantas menceritakan soal temuannya tersebut pada warga sekitar. Jika diukur, diameter Telaga Biru berkisar di angka 20 meter. Sementara untuk kedalamannya hingga kini belum diketahui secara pasti.', 'telaga - Copy.jpg'),
(4, 'admin', 'Gentala Arasy', 'Gentala Arasy adalah museum budaya yang populer sebagai simbol Islam di Kota Jambi. Wisata Museum di Jambi ini menjadi rumah bagi ratusan koleksi benda bersejarah yang menjadi saksi bisu perjalanan Islam di Jambi. Koleksi-koleksi tersebut diperoleh dari ulama-ulama yang menghibahkannya, dibeli, ataupun dipinjam dari beberapa lembaga. Toppers bisa berjalan-jalan sambil melihat pemandangan sore atau malam hari di sebuah jembatan yang dibangun dekat tempat wisata di Jambi ini, Jembatan Gentala Arasy. Jembatan yang dibangun dengan anggaran delapan puluh delapan milyar rupiah ini memiliki pemandangan yang terkenal luar biasa cantik dihiasi lampu-lampu pada malam hari. Lokasi: Arab Melayu, Pelayangan, Arab Melayu, Pelayangan, Kota Jambi, Jambi Jam Operasional: Senin-Jumat 8.00-16.00; Sabtu-Minggu 8.00-13.00 Harga Tiket: Anak-anak Rp 1.500 dan Dewasa Rp 2.000', 'gentala - Copy.jpeg'),
(10, 'admin', 'Danau Belibis', 'Satu lagi objek wisata Jambi populer dengan ciri khas yang ditampilkan pada nama tempatnya, Danau Belibis. Bukan danaunya berbentuk Burung Belibis, ciri khas danau ini adalah sekitaran danaunya yang dihuni oleh banyak Burung Belibis. Danau yang termasuk bagian kawasan Kerinci ini mampu menyihir pandangan para pelancong dengan berjuta pesonanya. Lokasi: Giri Mulyo, Kayu Aro, Kerinci Regency, Jambi Jam Operasional: 24 Jam Harga Tiket: Gratis', 'Belibis - Copy.jpg'),
(11, 'admin', 'Jambi Paradise', 'Jambi Paradise adalah salah satu objek wisata Jambi berupa taman air yang dapat kamu kunjungi di Kota Jambi. Tidak hanya menyediakan tempat bermain air, kamu juga dapat berjalan-jalan santai dengan view yang asri. Jika kamu memilih bersantai dengan keluarga, Jambi Paradise bisa jadi salah satu opsi objek wisata Jambi terkenal dan terfavorit untukmu. Lokasi: Desa Talang Belido Kebon IX, Simpang Acai, Sungai Gelam, Mekar Jaya, Sungai Gelam, Kota Jambi, Jambi Jam Operasional: 10.00 – 18.00 Harga Tiket: Hari kerja Rp 20.000; Hari libur Rp. 30.000', 'paradise - Copy.jpg'),
(12, 'Wisata', 'Danau Biru Muara Tembesi', 'Danau Biru Muara Tembesi adalah tempat wisata danau cantik yang awalnya terbentuk akibat aktivitas penggalian tanah untuk produksi batu bata. Tidak seperti kebanyakan danau, Danau Biru Muara Tembesi ini terkenal memiliki warna air biru kehijauan yang sangat indah. Lokasi: Desa Kebun Baru, Kecamatan Muara Tembesi, Kabupaten Batanghari, Jambi Jam Operasional: 24 Jam Harga Tiket: Gratis', 'tembesi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasi`
--

CREATE TABLE `tbl_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  `gambar` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_rekomendasi`
--

INSERT INTO `tbl_rekomendasi` (`id_rekomendasi`, `username`, `judul`, `isi`, `gambar`) VALUES
(5, 'Wisata', 'Jambi Paradise', 'Jambi Paradise adalah salah satu objek wisata Jambi berupa taman air yang dapat kamu kunjungi di Kota Jambi. Tidak hanya menyediakan tempat bermain air, kamu juga dapat berjalan-jalan santai dengan view yang asri. Jika kamu memilih bersantai dengan keluarga, Jambi Paradise bisa jadi salah satu opsi objek wisata Jambi terkenal dan terfavorit untukmu. Lokasi: Desa Talang Belido Kebon IX, Simpang Acai, Sungai Gelam, Mekar Jaya, Sungai Gelam, Kota Jambi, Jambi Jam Operasional: 10.00 – 18.00 Harga Tiket: Hari kerja Rp 20.000; Hari libur Rp. 30.000', 'paradise.jpg'),
(6, 'Wisata', 'Telaga Biru', 'Sesuai namanya, Telaga Biru memiliki perairan dengan corak biru bening dan bakal tampak berkilauan kala saat diterpa sinar mentari. Lokasi tepatnya ada di desa Tanjung Alam, Kecamatan Sungai Tenang, Kabupaten Merangin. Telaga ini berada di ketinggian 2033 mdpl dan masuk dalam kawasan Hutan Produksi Lainnya (HPL). Berbatasan langsung dengan Taman Nasional Kerinci Seblat (TNKS). Permukaan air tenang dan jernih jadi keunggulan telaga ini. Saking jernihnya, Teman Traveler bisa lho bercermin di sini. Cukup menarik bukan? Di salah satu sudut telaga terdapat pohon melintang yang kerap dijadikan sebagai spot foto oleh para pengunjung. Begitu pula dengan jembatan menuju pondok peristirahatan buatan warga. Lokasi Telagai Biru memang cukup tersembunyi di dalam hutan, sehingga tidak banyak orang tahu soal keberadaannya. Namun jangan salah, tempat ini sangat asri dan sejuk. Bila Teman Traveler berniat melepas penat dengan mengagumi pesona alam, destinasi ini adalah pilihan tepat.Nama Telaga Biru mulai disematkan sejak 2016 oleh Bupati Merangin, kala beliau datang berkunjung ke sini. Sebelumnya tempat ini pertama kali ditemukan oleh seorang warga Tanjung Alam yang sedang mencari burung. Ia lantas menceritakan soal temuannya tersebut pada warga sekitar. Jika diukur, diameter Telaga Biru berkisar di angka 20 meter. Sementara untuk kedalamannya hingga kini belum diketahui secara pasti.', 'telaga.jpg'),
(7, 'Wisata', 'Taman Telun Berasap', 'Taman ini berada di wilayah Taman Nasional Kerinci. Artinya, Taman ini berada di sekitaran Gunung Kerinci.\r\n\r\nObjek wisata Jambi favorit ini amat populer dengan air terjunnya yang memiliki ketinggian mencapai 50 meter, serta percikan air yang jatuh ke permukaan air membuat efek asap disekitaran tempat wisata air terjun.\r\n\r\nLokasi: Desa Telun Berasap, Kecamatan Kayu Aro, Kabupaten Kerinci, Jambi\r\nJam Operasional: 08.00 – 17.00\r\nHarga Tiket: Dewasa Rp 10.000', 'taman.jpg'),
(8, 'Wisata', 'Danau Belibis', 'Satu lagi objek wisata Jambi populer dengan ciri khas yang ditampilkan pada nama tempatnya, Danau Belibis. Bukan danaunya berbentuk Burung Belibis, ciri khas danau ini adalah sekitaran danaunya yang dihuni oleh banyak Burung Belibis. Danau yang termasuk bagian kawasan Kerinci ini mampu menyihir pandangan para pelancong dengan berjuta pesonanya. Lokasi: Giri Mulyo, Kayu Aro, Kerinci Regency, Jambi Jam Operasional: 24 Jam Harga Tiket: Gratis', 'Belibis.jpg'),
(10, 'admin', 'Air Terjun Talang Temulun', 'Air Terjun yang berada di kawasan Gunung Kerinci ini telah ditemukan sejak 1995, meski demikian keasriannya masih tetap terjaga. Air terjun ini memiliki panorama eksotis yang tidak akan ditemukan di tempat lain.\r\n\r\nAir terjun ini bahkan dijuluki surga tersembunyi dari Jambi, berkat keindahan alamnya yang paripurna. Kawasan yang masuk ke dalam area konservasi Taman Nasional ini bisa ditempuh dengan mendaki trek alami yang berada di balik lebatnya hutan.', 'Air-Terjun-Talang-Kemulun.jpg'),
(4, 'Wisata', 'Gunung Kerinci', 'Gunung Kerinci adalah gunung berapi terkenal dengan puncak tertinggi di Indonesia. Gunung ini sekaligus menjadi gunung tertinggi kedua di Indonesia setelah Jaya Wijaya di Papua. Objek wisata di Jambi ini menawarkan suasana sejuk dan pemandangan pagi hari yang memukau. Pastikan Toppers tidak lupa untuk melakukan summit attack dalam kegiatan hikingmu yah, Toppers! Karena pemandangan matahari terbit di Puncak Kerinci akan jadi momen tak terlupakan. Lokasi: Perbatasan Provinsi Jambi dengan Sumatera Barat Jam Operasional: 24 Jam Harga Tiket: Gratis', 'gunung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id_wisata` int(11) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `kategori` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  `gambar` text COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','T') COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`id_wisata`, `username`, `kategori`, `judul`, `isi`, `gambar`, `headline`) VALUES
(8, 'admin', 'Wisata', 'Gunung Kerinci', 'Gunung Kerinci adalah gunung berapi terkenal dengan puncak tertinggi di Indonesia. Gunung ini sekaligus menjadi gunung tertinggi kedua di Indonesia setelah Jaya Wijaya di Papua.\r\n\r\nObjek wisata di Jambi ini menawarkan suasana sejuk dan pemandangan pagi hari yang memukau.\r\n\r\nPastikan Toppers tidak lupa untuk melakukan summit attack dalam kegiatan hikingmu yah, Toppers! Karena pemandangan matahari terbit di Puncak Kerinci akan jadi momen tak terlupakan.\r\n\r\nLokasi: Perbatasan Provinsi Jambi dengan Sumatera Barat\r\nJam Operasional: 24 Jam\r\nHarga Tiket: Gratis', 'gunung.jpg', 'Y'),
(2, 'admin', 'Wisata', 'Telaga Biru', 'Sesuai namanya, Telaga Biru memiliki perairan dengan corak biru bening dan bakal tampak berkilauan kala saat diterpa sinar mentari. Lokasi tepatnya ada di desa Tanjung Alam, Kecamatan Sungai Tenang, Kabupaten Merangin. Telaga ini berada di ketinggian 2033 mdpl dan masuk dalam kawasan Hutan Produksi Lainnya (HPL). Berbatasan langsung dengan Taman Nasional Kerinci Seblat (TNKS). Permukaan air tenang dan jernih jadi keunggulan telaga ini. Saking jernihnya, Teman Traveler bisa lho bercermin di sini. Cukup menarik bukan?\r\n\r\nDi salah satu sudut telaga terdapat pohon melintang yang kerap dijadikan sebagai spot foto oleh para pengunjung. Begitu pula dengan jembatan menuju pondok peristirahatan buatan warga. Lokasi Telagai Biru memang cukup tersembunyi di dalam hutan, sehingga tidak banyak orang tahu soal keberadaannya. Namun jangan salah, tempat ini sangat asri dan sejuk. Bila Teman Traveler berniat melepas penat dengan mengagumi pesona alam, destinasi ini adalah pilihan tepat.Nama Telaga Biru mulai disematkan sejak 2016 oleh Bupati Merangin, kala beliau datang berkunjung ke sini. Sebelumnya tempat ini pertama kali ditemukan oleh seorang warga Tanjung Alam yang sedang mencari\r\nburung. Ia lantas menceritakan soal temuannya tersebut pada warga sekitar.\r\n\r\nJika diukur, diameter Telaga Biru berkisar di angka 20 meter. Sementara untuk kedalamannya hingga kini belum diketahui secara pasti.', 'telaga.jpg', 'Y'),
(3, 'admin', 'Wisata', 'Jambi Paradise', 'Jambi Paradise adalah salah satu objek wisata Jambi berupa taman air yang dapat kamu kunjungi di Kota Jambi. Tidak hanya menyediakan tempat bermain air, kamu juga dapat berjalan-jalan santai dengan view yang asri.\r\n\r\nJika kamu memilih bersantai dengan keluarga, Jambi Paradise bisa jadi salah satu opsi objek wisata Jambi terkenal dan terfavorit untukmu.\r\n\r\nLokasi: Desa Talang Belido Kebon IX, Simpang Acai, Sungai Gelam, Mekar Jaya, Sungai Gelam, Kota Jambi, Jambi\r\nJam Operasional: 10.00 – 18.00\r\nHarga Tiket: Hari kerja Rp 20.000; Hari libur Rp. 30.000', 'paradise.jpg', 'Y'),
(11, 'admin', 'Wisata', 'Gentala Arasy', 'Gentala Arasy adalah museum budaya yang populer sebagai simbol Islam di Kota Jambi. Wisata Museum di Jambi ini menjadi rumah bagi ratusan koleksi benda bersejarah yang menjadi saksi bisu perjalanan Islam di Jambi. Koleksi-koleksi tersebut diperoleh dari ulama-ulama yang menghibahkannya, dibeli, ataupun dipinjam dari beberapa lembaga.\r\n\r\nToppers bisa berjalan-jalan sambil melihat pemandangan sore atau malam hari di sebuah jembatan yang dibangun dekat tempat wisata di Jambi ini, Jembatan Gentala Arasy. Jembatan yang dibangun dengan anggaran delapan puluh delapan milyar rupiah ini memiliki pemandangan yang terkenal luar biasa cantik dihiasi lampu-lampu pada malam hari.\r\n\r\nLokasi: Arab Melayu, Pelayangan, Arab Melayu, Pelayangan, Kota Jambi, Jambi\r\n\r\nJam Operasional: Senin-Jumat  8.00-16.00; Sabtu-Minggu 8.00-13.00\r\nHarga Tiket: Anak-anak Rp 1.500 dan Dewasa Rp 2.000', 'gentala.jpeg', 'Y'),
(9, 'admin', 'Wisata', 'Danau Biru Muara Tembesi', 'Danau Biru Muara Tembesi adalah tempat wisata danau cantik yang awalnya terbentuk akibat aktivitas penggalian tanah untuk produksi batu bata.\r\n\r\nTidak seperti kebanyakan danau, Danau Biru Muara Tembesi ini terkenal memiliki warna air biru kehijauan yang sangat indah.\r\n\r\nLokasi: Desa Kebun Baru, Kecamatan Muara Tembesi, Kabupaten Batanghari, Jambi\r\nJam Operasional: 24 Jam\r\nHarga Tiket: Gratis', 'tembesi.jpg', 'Y'),
(10, 'admin', 'Wisata', 'Danau Belibis', 'Satu lagi objek wisata Jambi populer dengan ciri khas yang ditampilkan pada nama tempatnya, Danau Belibis. Bukan danaunya berbentuk Burung Belibis, ciri khas danau ini adalah sekitaran danaunya yang dihuni oleh banyak Burung Belibis. Danau yang termasuk bagian kawasan Kerinci ini mampu menyihir pandangan para pelancong dengan berjuta pesonanya. Lokasi: Giri Mulyo, Kayu Aro, Kerinci Regency, Jambi Jam Operasional: 24 Jam Harga Tiket: Gratis', 'Belibis.jpg', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  MODIFY `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
