-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 09:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waithere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(15) NOT NULL,
  `restoran_id` int(15) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `admin_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `booking_id` int(15) NOT NULL,
  `restoran_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `reservasi_id` int(15) NOT NULL,
  `hari_reservasi` date NOT NULL,
  `jam_reservasi` time NOT NULL,
  `jumlah` int(10) NOT NULL,
  `admin_id` int(15) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `nama_restoran` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `reservasi_id` int(15) NOT NULL,
  `restoran_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `hari_reservasi` date NOT NULL,
  `jam_reservasi` varchar(100) NOT NULL,
  `request` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`reservasi_id`, `restoran_id`, `user_id`, `jumlah`, `hari_reservasi`, `jam_reservasi`, `request`) VALUES
(1, 10014, 111001, 4, '2022-05-12', '16.00 - 18.00', '3');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `restoran_id` int(15) NOT NULL,
  `nama_restoran` varchar(50) NOT NULL,
  `alamat_restoran` varchar(500) NOT NULL,
  `notelp_resto` varchar(20) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`restoran_id`, `nama_restoran`, `alamat_restoran`, `notelp_resto`, `menu`, `foto`, `kategori`) VALUES
(10001, 'Amuz at SCBD', 'The Energy Building (2nd Floor,Lot 11A,SCBD, Jl. Jend. Sudirman No.Kav. 52-53, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190', '0212505064', 'https://telegra.ph/file/16b777d170f95f69e2198.jpg', 'https://telegra.ph/file/f66bc43dd3291c17fd5ae.jpg', 'Fine Dining'),
(10002, 'Namaaz Dining', 'Jl. Gunawarman No.42, RT.5/RW.2, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110', '08111557798', 'https://telegra.ph/file/03e4a840c5908532a35f9.jpg', 'https://telegra.ph/file/94bf03884848484104de2.jpg', 'Fine Dining'),
(10003, '3 Wise Monkeys', 'Jl. Senopati No.46, RT.6/RW.2, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110', '081211777746', 'https://telegra.ph/file/35fa9eb4dde232741d9dd.jpg', 'https://telegra.ph/file/44fc1afaa792767401c23.jpg', 'All You Can Eat'),
(10004, 'Henshin At The Westin', 'Level 67-69, The Westin Jakarta Jalan H.R. Rasuna Said Kav. C-22A, RT.2/RW.5, Karet Kuningan, Setiabudi, South Jakarta City, Jakarta 12940', '02127887768', 'https://telegra.ph/file/76ece6c689aa6c6a4cad4.jpg', 'https://telegra.ph/file/af60102e127b1ad548c72.jpg', 'Fine Dining'),
(10005, 'Dear Butter', 'JL KH ABDULLAH SYAFE 1 No.1, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12860', '081314679755', 'https://telegra.ph/file/24b241653d66af889f3c3.jpg', 'https://telegra.ph/file/e3ee87e98b867ea701843.jpg', 'Dessert'),
(10006, 'Kintan Buffet', 'Jl. Asia Afrika No.19, RT.1/RW.3, Gelora, Tanah Abang, Central Jakarta City, Jakarta 10270', '02172781410', 'https://telegra.ph/file/2a1d7d9a4400884a4dbb1.jpg', 'https://telegra.ph/file/8d2cd746b48d794caa7f7.jpg', 'All You Can Eat'),
(10007, 'The Awan Lounge', 'Kosenda Hotel Rooftop, Jl. KH. Wahid Hasyim No.127, Kb. Kacang, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10240', '02131936868', 'https://telegra.ph/file/1cf330436b652f75ec258.jpg', 'https://telegra.ph/file/eab6140ba9272cf87e091.jpg', 'Bar & Lounge'),
(10008, 'Tipsy Monkey Bar & Lounge', 'jl mandara permai VII the metro blok 6 No KU, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14460', '08121353168', 'https://telegra.ph/file/05660e18025eb2007b5da.jpg', 'https://telegra.ph/file/b37bd90e0ff68a567d53a.jpg', 'Bar & Lounge'),
(10009, 'Hause Rooftop', 'Tower 2 MD Place, Jl. Setia Budi Selatan No.7, RT.5/RW.1, Kuningan, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910', '02129529852', 'https://telegra.ph/file/68fd80de36b79ca98f2c5.jpg', 'https://telegra.ph/file/d51feb7400be9ec095b5b.jpg', 'Casual Dining'),
(10010, 'Union', 'Plaza Senayan, Lantai Ground, Jl. Asia Afrika, Senayan, Jakarta', '02157905862', 'https://telegra.ph/file/0ffcca395adeec65f82ee.jpg', 'https://telegra.ph/file/361c3af15010c00ef2413.jpg', 'Brunch'),
(10011, 'Pippo', 'Senayan City, Lantai Lower Ground, Jl. Asia Afrika, Senayan, Jakarta', '02172781089', 'https://telegra.ph/file/4881615a815c4c961cfeb.jpg', 'https://telegra.ph/file/491a8ac322b7c446a56ee.jpg', 'Brunch'),
(10012, 'Kilo Lounge Jakarta', 'Jl. Gunawarman No.16, RT.5/RW.2, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110', '081291038188', 'https://telegra.ph/file/c409dc8a1ef804f449622.jpg', 'https://telegra.ph/file/0703551cac542c8f7af47.jpg', 'Bar & Lounge'),
(10013, 'Three Buns Jakarta', 'Jl. Senopati No.90, RT.7/RW.3, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110', '02129307780', 'https://telegra.ph/file/65a84a7c52516d1c830b7.jpg', 'https://telegra.ph/file/9280bb924c4ad6365d6d4.jpg', 'Fast Food'),
(10014, 'SĒL Gunawarman', 'Jl. Gunawarman No. 53, Senopati, Jakarta', '02127939051', 'https://telegra.ph/file/05ca3ffe556c214fa4863.jpg', 'https://telegra.ph/file/59b80626d80172ebbb256.jpg', 'Brunch'),
(10016, 'Taco Bell', 'Jl. Senopati No.96, RW.3, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110', '08118143548', 'https://telegra.ph/file/0d4679ef7fe62a74e18e3.jpg', 'https://telegra.ph/file/d0da1bc25f6a9b2a77a42.jpg', 'Fast Food'),
(10017, 'Bottega Ristorante', 'Gedung Fairground, Jl. Jend. sudirman kav 52-53 Jl. Scbd No.Lot 14, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190', '02151402266', 'https://telegra.ph/file/a46ce0dae01967d0fa952.jpg', 'https://telegra.ph/file/5c13fb4c525e6c4acaf19.jpg', 'Casual Dining'),
(10018, 'Kina', 'Jl. Birah II No.82, Rw. Bar., Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12180', '088908880282', 'https://telegra.ph/file/c46f501d4995d4fac85ad.jpg', 'https://telegra.ph/file/b93be44f971027d514583.jpg', 'Coffee Shop'),
(10019, 'Le Quartier', 'Jl. Gunawarman No.34, RT.5/RW.2, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110', '02172788003', 'https://telegra.ph/file/40bb8309125b2c6f3879c.jpg', 'https://telegra.ph/file/a55fadd9400919f33cf91.jpg', 'Casual Dining'),
(10020, 'Ecaps', 'Jl. Kemang Raya No.17, RT.10/RW.5, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730', '085253139696', 'https://telegra.ph/file/018cbf4d4c7e0ee371490.jpg', 'https://telegra.ph/file/c5e99781bce4f122b673d.jpg', 'Coffee Shop'),
(10021, 'Delicious Cake & Bakery', 'Jl. Jend. Sudirman No.Kav 1, RT.10/RW.11, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10250', '0215742208', 'https://telegra.ph/file/84ec0b5140d9391aa1b63.jpg', 'https://telegra.ph/file/dbbe08f28e60b049af672.jpg', 'Bakery'),
(10022, 'Exquise Pattiserie', 'Rumah Cokro, Jl. HOS. Cokroaminoto No.42A, RW.4, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310', '0213161413', 'https://telegra.ph/file/6185b6eb67017cd17a1fc.jpg', 'https://telegra.ph/file/4638f3b61f6e102717b3e.jpg', 'Bakery'),
(10023, 'SKYE', 'BCA Tower Lt. 56, Jl. M.H. Thamrin No. 1, RT.001 / RW.005, Menteng, RT.1/RW.5, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350', '02123586996', 'https://telegra.ph/file/22cd4d0cbee7111002827.png', 'https://telegra.ph/file/1167758e4bf1a49495e0f.jpg', 'Live Music'),
(10024, 'Pepper Lunch ', 'Jl. Raya Casablanca No.88, RT.4/RW.14, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870', '02129488662', 'https://telegra.ph/file/69425cd15041895669b66.jpg', 'https://telegra.ph/file/d7eef3b6e75794ed456b3.jpg', 'Fast Food'),
(10025, 'Kkuldak', 'Mall Klp. Gading, Jl. Boulevard Raya No.Utara, RT.13/RW.18, Klp. Gading Tim., Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240', '02145853633', 'https://telegra.ph/file/309465d65973581282fb2.jpg', 'https://telegra.ph/file/f75fbd19d989b4be7af51.jpg', 'Street Food'),
(10026, 'Reddog', 'Mall Gandaria City LG-107, Jl. Sultan Iskandar Muda No.48, RT.10/RW.6, Kby. Lama Utara, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12240', '081931255351', 'https://telegra.ph/file/6e712632d41e4a1867e78.jpg', 'https://telegra.ph/file/2d2f7ccdaa0be90dc4d2e.jpg', 'Street Food'),
(10027, 'Okiro Box', 'Jl. Boulevard Raya No.1, RT.13/RW.18, Klp. Gading Tim., Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240', '0215301008', 'https://telegra.ph/file/fd890f50923eb70334526.jpg', 'https://telegra.ph/file/8c258b496a25852195156.jpg', 'Street Food'),
(10028, 'Honu Poke & Matcha Bar', 'Jl. Kemang Sel. No.125, RT.1/RW.2, Bangka, Mampang Prapatan, South Jakarta City, Jakarta 12730', '02171793580', 'https://telegra.ph/file/f3a4409a8e2a00acd5ce2.jpg', 'https://telegra.ph/file/5bbeb53e0a4846f4f438d.jpg', 'Beverages'),
(10029, 'Toko Kopi Tuku', 'Jl. Moh. Kahfi 1 No.2, RW.2, Ciganjur, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630', '08118802113', 'https://telegra.ph/file/704e667fc5f144ab9e6f7.jpg', 'https://telegra.ph/file/932cdf4edbbf7c0ce7b33.jpg', 'Beverages'),
(10030, 'Piston Brake Bikers Bar', 'Jl. Gandaria 1 No.83, RT.2/RW.3, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140', ' 0217205281', 'https://telegra.ph/file/4eb81960c53159d4f1614.jpg', 'https://telegra.ph/file/4866b9a4ef4fe8f60eaf6.jpg', 'Live Music'),
(10031, 'Sumoboo', 'Kota Kasablanka Lt. LG, Jl. Casablanca Kav. 88, RT.14/RW.5, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12960', '021229475130', 'https://telegra.ph/file/6d6c3b7a9e95994bef075.jpg', 'https://telegra.ph/file/c28238836a356589b5b66.jpg', 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `notelp_user` int(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_user`, `email_user`, `username`, `notelp_user`, `password`) VALUES
(111000, 'ovelin', 'ovelinn@gmail.com', 'user123', 82430420, 'secret'),
(111001, 'a', 'a', 'pokemon', 3, '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `restoran_admin` (`restoran_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `reservasi_id` (`reservasi_id`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `id_restoran` (`restoran_id`),
  ADD KEY `id_admin` (`admin_id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`reservasi_id`),
  ADD KEY `restoran_id` (`restoran_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`restoran_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `restoran_admin` FOREIGN KEY (`restoran_id`) REFERENCES `restoran` (`restoran_id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `id_admin` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `id_restoran` FOREIGN KEY (`restoran_id`) REFERENCES `reservasi` (`restoran_id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`user_id`) REFERENCES `reservasi` (`user_id`),
  ADD CONSTRAINT `reservasi_id` FOREIGN KEY (`reservasi_id`) REFERENCES `reservasi` (`reservasi_id`);

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `restoran_id` FOREIGN KEY (`restoran_id`) REFERENCES `restoran` (`restoran_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
