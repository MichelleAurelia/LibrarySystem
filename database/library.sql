-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2025 pada 15.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'J.K. Rowling', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(2, 'Tere Liye', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(3, 'Andrea Hirata', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(4, 'Dewi Lestari', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(5, 'Habiburrahman El Shirazy', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(6, 'Pramoedya Ananta Toer', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(7, 'N. Gregory Mankiw', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(8, 'Yuval Noah Harari', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(9, 'Stephen Hawking', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(10, 'Agatha Christie', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(11, 'George Orwell', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(12, 'Dan Brown', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(13, 'F. Scott Fitzgerald', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(14, 'J.R.R. Tolkien', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(15, 'Ahmad Fuadi', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(16, 'Raditya Dika', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(17, 'Paulo Coelho', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(18, 'Harper Lee', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(19, 'John Green', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(20, 'C.S. Lewis', '2025-12-06 06:38:40', '2025-12-06 06:38:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `author_book`
--

CREATE TABLE `author_book` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `author_book`
--

INSERT INTO `author_book` (`id`, `author_id`, `book_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 7, 4, NULL, NULL),
(5, 9, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 14, 8, NULL, NULL),
(9, 6, 9, NULL, NULL),
(10, 18, 10, NULL, NULL),
(11, 13, 12, NULL, NULL),
(12, 15, 13, NULL, NULL),
(13, 2, 15, NULL, NULL),
(14, 19, 16, NULL, NULL),
(15, 4, 17, NULL, NULL),
(16, 11, 18, NULL, NULL),
(17, 16, 19, NULL, NULL),
(18, 17, 20, NULL, NULL),
(19, 2, 21, NULL, NULL),
(20, 20, 22, NULL, NULL),
(21, 2, 23, NULL, NULL),
(22, 12, 24, NULL, NULL),
(23, 3, 26, NULL, NULL),
(24, 12, 27, NULL, NULL),
(25, 4, 32, NULL, NULL),
(26, 9, 33, NULL, NULL),
(27, 2, 35, NULL, NULL),
(28, 18, 36, NULL, NULL),
(29, 11, 37, NULL, NULL),
(30, 3, 38, NULL, NULL),
(31, 11, 38, NULL, NULL),
(32, 3, 39, NULL, NULL),
(33, 7, 39, NULL, NULL),
(34, 4, 40, NULL, NULL),
(35, 7, 40, NULL, NULL),
(36, 18, 41, NULL, NULL),
(37, 8, 42, NULL, NULL),
(38, 14, 42, NULL, NULL),
(39, 18, 43, NULL, NULL),
(40, 19, 43, NULL, NULL),
(41, 1, 44, NULL, NULL),
(42, 8, 44, NULL, NULL),
(43, 2, 45, NULL, NULL),
(44, 17, 45, NULL, NULL),
(45, 18, 46, NULL, NULL),
(46, 20, 46, NULL, NULL),
(47, 9, 47, NULL, NULL),
(48, 15, 47, NULL, NULL),
(49, 2, 48, NULL, NULL),
(50, 12, 48, NULL, NULL),
(51, 15, 49, NULL, NULL),
(52, 12, 50, NULL, NULL),
(53, 10, 51, NULL, NULL),
(54, 12, 51, NULL, NULL),
(55, 10, 52, NULL, NULL),
(56, 11, 53, NULL, NULL),
(57, 20, 53, NULL, NULL),
(58, 18, 54, NULL, NULL),
(59, 20, 55, NULL, NULL),
(60, 17, 1, NULL, NULL),
(61, 19, 1, NULL, NULL),
(62, 11, 2, NULL, NULL),
(63, 3, 3, NULL, NULL),
(64, 20, 3, NULL, NULL),
(65, 3, 4, NULL, NULL),
(66, 13, 5, NULL, NULL),
(67, 1, 6, NULL, NULL),
(68, 12, 6, NULL, NULL),
(69, 2, 7, NULL, NULL),
(70, 17, 7, NULL, NULL),
(71, 5, 8, NULL, NULL),
(72, 12, 8, NULL, NULL),
(73, 16, 9, NULL, NULL),
(74, 18, 9, NULL, NULL),
(75, 3, 10, NULL, NULL),
(76, 13, 10, NULL, NULL),
(77, 16, 11, NULL, NULL),
(78, 7, 12, NULL, NULL),
(79, 10, 13, NULL, NULL),
(80, 3, 14, NULL, NULL),
(81, 10, 14, NULL, NULL),
(82, 4, 15, NULL, NULL),
(83, 12, 15, NULL, NULL),
(84, 1, 16, NULL, NULL),
(85, 14, 16, NULL, NULL),
(86, 19, 17, NULL, NULL),
(87, 15, 18, NULL, NULL),
(88, 19, 18, NULL, NULL),
(89, 8, 19, NULL, NULL),
(90, 14, 19, NULL, NULL),
(91, 4, 20, NULL, NULL),
(92, 6, 21, NULL, NULL),
(93, 19, 21, NULL, NULL),
(94, 9, 22, NULL, NULL),
(95, 4, 23, NULL, NULL),
(96, 12, 23, NULL, NULL),
(97, 4, 24, NULL, NULL),
(98, 11, 24, NULL, NULL),
(99, 9, 25, NULL, NULL),
(100, 15, 25, NULL, NULL),
(101, 1, 26, NULL, NULL),
(102, 4, 26, NULL, NULL),
(103, 5, 27, NULL, NULL),
(104, 20, 27, NULL, NULL),
(105, 2, 28, NULL, NULL),
(106, 10, 28, NULL, NULL),
(107, 1, 29, NULL, NULL),
(108, 10, 29, NULL, NULL),
(109, 14, 30, NULL, NULL),
(110, 8, 31, NULL, NULL),
(111, 20, 31, NULL, NULL),
(112, 3, 32, NULL, NULL),
(113, 4, 33, NULL, NULL),
(114, 11, 33, NULL, NULL),
(115, 12, 34, NULL, NULL),
(116, 8, 35, NULL, NULL),
(117, 12, 36, NULL, NULL),
(118, 9, 37, NULL, NULL),
(119, 14, 37, NULL, NULL),
(120, 2, 38, NULL, NULL),
(121, 3, 38, NULL, NULL),
(122, 6, 39, NULL, NULL),
(123, 12, 39, NULL, NULL),
(124, 5, 40, NULL, NULL),
(125, 10, 40, NULL, NULL),
(126, 6, 41, NULL, NULL),
(127, 4, 42, NULL, NULL),
(128, 9, 42, NULL, NULL),
(129, 6, 43, NULL, NULL),
(130, 18, 43, NULL, NULL),
(131, 4, 44, NULL, NULL),
(132, 7, 44, NULL, NULL),
(133, 6, 45, NULL, NULL),
(134, 19, 45, NULL, NULL),
(135, 13, 46, NULL, NULL),
(136, 20, 46, NULL, NULL),
(137, 1, 47, NULL, NULL),
(138, 8, 48, NULL, NULL),
(139, 14, 48, NULL, NULL),
(140, 7, 49, NULL, NULL),
(141, 13, 50, NULL, NULL),
(142, 14, 50, NULL, NULL),
(143, 4, 51, NULL, NULL),
(144, 15, 51, NULL, NULL),
(145, 7, 52, NULL, NULL),
(146, 8, 52, NULL, NULL),
(147, 17, 53, NULL, NULL),
(148, 20, 53, NULL, NULL),
(149, 5, 54, NULL, NULL),
(150, 10, 55, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `publish_year` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `status` enum('available','borrowed') NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `description`, `publish_year`, `publisher`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Harry Potter and the Sorcerer\'s Stone', 'storage/images/harry_potter.jpg', 'Petualangan Harry Potter tahun pertama.', '1997', 'Bloomsbury', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(2, 'Laskar Pelangi', 'storage/images/laskar_pelangi.jpg', 'Perjalanan anak-anak Belitung.', '2005', 'Bentang Pustaka', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(3, 'Hujan', 'storage/images/hujan.jpg', 'Novel fiksi sains karya Tere Liye.', '2016', 'Republika', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(4, 'Principles of Economics', 'storage/images/principlesOfEconomics.jpg', 'Buku dasar ilmu ekonomi oleh N. Gregory Mankiw.', '2017', 'Cengage Learning', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(5, 'A Brief History of Time', 'storage/images/aBriefHistory.jpg', 'Penjelasan sains karya Stephen Hawking.', '1988', 'Bantam Dell Publishing', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(6, 'Harry Potter and the Sorcerer\'s Stone', 'storage/images/harry_potter.jpg', 'Petualangan Harry Potter tahun pertama.', '1997', 'Bloomsbury', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(7, 'Laskar Pelangi', 'storage/images/laskar_pelangi.jpg', 'Perjalanan hidup anak-anak Belitung dalam meraih pendidikan.', '2005', 'Bentang Pustaka', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(8, 'The Hobbit', 'storage/images/the_hobbit.jpg', 'Petualangan Bilbo Baggins mencari harta karun naga Smaug.', '1937', 'George Allen & Unwin', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(9, 'Bumi Manusia', 'storage/images/bumi_manusia.jpg', 'Kisah cinta Minke dan Annelies di era kolonial Belanda.', '1980', 'Hasta Mitra', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(10, 'To Kill a Mockingbird', 'storage/images/to_kill_a_mockingbird.jpg', 'Kisah tentang keadilan dan rasisme di Selatan Amerika.', '1960', 'J.B. Lippincott & Co.', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(11, '5 CM', 'storage/images/5cm.jpg', 'Perjalanan lima sahabat menuju puncak Mahameru.', '2005', 'Grasindo', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(12, 'The Great Gatsby', 'storage/images/the_great_gatsby.jpg', 'Kisah Jay Gatsby dan obsesi terhadap Daisy Buchanan.', '1925', 'Charles Scribner\'s Sons', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(13, 'Negeri 5 Menara', 'storage/images/negeri_5_menara.jpg', 'Kisah enam santri yang mengejar mimpi dari pesantren Gontor.', '2009', 'Gramedia', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(14, 'The Catcher in the Rye', 'storage/images/catcher_in_the_rye.jpg', 'Perjalanan remaja Holden Caulfield setelah dikeluarkan sekolah.', '1951', 'Little, Brown and Company', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(15, 'Pulang', 'storage/images/pulang.jpg', 'Kisah pulang kampung para penghuni Tanah Surga karya Tere Liye.', '2015', 'Republika', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(16, 'The Fault in Our Stars', 'storage/images/fault_in_our_stars.jpg', 'Kisah cinta dua remaja pengidap kanker.', '2012', 'Dutton Books', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(17, 'Perahu Kertas', 'storage/images/perahu_kertas.jpg', 'Kisah cinta Kugy dan Keenan dalam perjalanan hidup mereka.', '2009', 'Bentang Pustaka', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(18, '1984', 'storage/images/1984.jpg', 'Dunia distopia dengan pengawasan total oleh Big Brother.', '1949', 'Secker & Warburg', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(19, 'Koala Kumal', 'storage/images/koala_kumal.jpg', 'Kumpulan cerita lucu dan menyentuh tentang patah hati.', '2015', 'GagasMedia', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(20, 'The Alchemist', 'storage/images/the_alchemist.jpg', 'Perjalanan Santiago mencari harta karun dan takdir hidupnya.', '1988', 'HarperTorch', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(21, 'Rembulan Tenggelam di Wajahmu', 'storage/images/rembulan.jpg', 'Perjalanan spiritual seorang anak bernama Ray.', '2009', 'Republika', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(22, 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe', 'storage/images/narnia.jpg', 'Empat bersaudara memasuki dunia Narnia melalui lemari pakaian.', '1950', 'Geoffrey Bles', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(23, 'Hujan', 'storage/images/hujan.jpg', 'Kisah perjalanan Lail yang hidup di tengah bencana besar dunia.', '2016', 'Gramedia', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(24, 'The Da Vinci Code', 'storage/images/da_vinci_code.jpg', 'Misteri pembunuhan yang mengungkap rahasia kuno Gereja.', '2003', 'Doubleday', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(25, 'Sabtu Bersama Bapak', 'storage/images/sabtu_bersama_bapak.jpg', 'Pesan-pesan seorang ayah kepada keluarganya setelah ia tiada.', '2014', 'GagasMedia', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(26, 'Sang Pemimpi', 'storage/images/sang_pemimpi.jpg', 'Kisah Ikal dan Arai mengejar mimpi sampai ke Prancis.', '2006', 'Bentang Pustaka', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(27, 'Origin', 'storage/images/origin.jpg', 'Robert Langdon menyelidiki misteri besar tentang asal-usul manusia.', '2017', 'Doubleday', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(28, 'Habis Gelap Terbitlah Terang', 'storage/images/habis_gelap.jpg', 'Kumpulan surat Kartini yang menginspirasi emansipasi wanita.', '1922', 'Balai Pustaka', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(29, 'Rich Dad Poor Dad', 'storage/images/rich_dad_poor_dad.jpg', 'Tentang pola pikir finansial untuk mencapai kebebasan finansial.', '1997', 'Warner Books', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(30, 'The Silent Patient', 'storage/images/the_silent_patient.jpg', 'Seorang perempuan yang berhenti berbicara setelah membunuh suaminya.', '2019', 'Celadon Books', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(31, 'The Subtle Art of Not Giving a F*ck', 'storage/images/subtle_art.jpg', 'Pendekatan baru dalam menjalani hidup dengan fokus pada hal bermakna.', '2016', 'Harper', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(32, 'Filosofi Kopi', 'storage/images/filosofi_kopi.jpg', 'Kumpulan cerita pendek tentang kopi dan kehidupan.', '2006', 'Bentang Pustaka', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(33, 'A Brief History of Time', 'storage/images/brief_history_time.jpg', 'Penjelasan ilmiah mengenai kosmos dan teori fisika modern.', '1988', 'Bantam Dell Publishing Group', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(34, 'Sherlock Holmes: A Study in Scarlet', 'storage/images/study_in_scarlet.jpg', 'Kisah pertama Sherlock Holmes memecahkan kasus misterius.', '1887', 'Ward Lock & Co.', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(35, 'Pusaran', 'storage/images/pusaran.jpg', 'Sebuah kisah petualangan dan misteri karya penulis Indonesia.', '2020', 'Gramedia', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(36, 'Nam cupiditate in aut.', 'https://via.placeholder.com/300x400.png/00dd88?text=books+illo', 'Adipisci voluptates est numquam asperiores optio. Sint consectetur eligendi est quibusdam. Dolor nihil deleniti animi unde.', '2008', 'Kerluke Ltd', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(37, 'Asperiores vero voluptatibus.', 'https://via.placeholder.com/300x400.png/00ff55?text=books+suscipit', 'Nemo dolorem corrupti quo. Qui in non hic ullam similique cupiditate. Reiciendis ut enim nam dolore ad nobis. Voluptates impedit omnis et ut. Vel sed non in quos quam.', '2013', 'Lehner, Crooks and Koelpin', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(38, 'Accusantium doloremque voluptate.', 'https://via.placeholder.com/300x400.png/00dd33?text=books+et', 'Doloremque tempore quisquam iusto suscipit autem et excepturi. Ut corporis velit omnis id cupiditate tenetur. Modi aut aut assumenda rem iure consectetur ad. Qui hic et autem harum quos.', '2021', 'Bahringer, Barton and Powlowski', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(39, 'Id voluptatem quisquam.', 'https://via.placeholder.com/300x400.png/0000bb?text=books+id', 'Quibusdam ipsam hic quia illo rerum possimus. Voluptatum consectetur quibusdam in maxime dolor quia molestias.', '2022', 'Flatley, Mayer and Witting', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(40, 'Est impedit blanditiis quasi.', 'https://via.placeholder.com/300x400.png/0099aa?text=books+laborum', 'Autem quia deserunt vel et voluptas quasi vitae corrupti. Et aut voluptas rerum ut. Alias doloremque repellendus in enim facere. Omnis ab assumenda et natus aut ex officia.', '1993', 'Kessler and Sons', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(41, 'Qui impedit quisquam alias sit.', 'https://via.placeholder.com/300x400.png/001144?text=books+hic', 'Ratione illum consequatur velit esse. Animi voluptas suscipit eum soluta nam ab autem.', '1986', 'Pouros Inc', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(42, 'Eos ut voluptatem magnam.', 'https://via.placeholder.com/300x400.png/000066?text=books+voluptatem', 'Repellat blanditiis ea qui dignissimos eius. Expedita voluptates quasi animi sit. Provident maxime sed eos itaque quibusdam.', '2022', 'Becker-Gusikowski', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(43, 'Molestiae odio debitis qui quia.', 'https://via.placeholder.com/300x400.png/00bb88?text=books+ducimus', 'Dolorem libero tempore earum molestiae sed. Velit veritatis et nobis enim. Voluptatem id repellendus magni quis. Voluptas recusandae voluptas quis sapiente perspiciatis earum voluptas.', '1987', 'Haag-Lynch', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(44, 'Eaque voluptatem dicta provident.', 'https://via.placeholder.com/300x400.png/00ffcc?text=books+saepe', 'Nisi molestiae quo vero hic. Placeat asperiores ea numquam similique. Rerum similique earum labore blanditiis totam labore.', '2021', 'Welch and Sons', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(45, 'Voluptatem quia quisquam ut.', 'https://via.placeholder.com/300x400.png/0022aa?text=books+et', 'Eligendi est et iure dolorem tempore ut accusantium. Corrupti dicta et saepe qui velit rerum. Reprehenderit officia officiis illum ex molestias.', '1995', 'Lynch Ltd', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(46, 'Molestiae nostrum exercitationem sit.', 'https://via.placeholder.com/300x400.png/00ccdd?text=books+amet', 'Quaerat enim facilis voluptas voluptatem ut minus omnis deleniti. Dicta delectus id corporis ea. Dolor ab aut quo nemo animi. Culpa accusamus saepe est voluptatem veniam necessitatibus voluptate quas.', '1982', 'Grant-King', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(47, 'Aliquam quis aperiam.', 'https://via.placeholder.com/300x400.png/00aa44?text=books+exercitationem', 'Qui perferendis vel nisi blanditiis ipsa. Voluptatem iure quia eaque voluptatem.', '2005', 'Ryan PLC', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(48, 'Minus adipisci in.', 'https://via.placeholder.com/300x400.png/00aa77?text=books+molestiae', 'Saepe autem quo consequuntur consequuntur officiis aut quasi perspiciatis. Similique consequuntur rem minus sed labore.', '1988', 'Tillman-DuBuque', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(49, 'Veniam sed.', 'https://via.placeholder.com/300x400.png/0011ff?text=books+rerum', 'Nisi laudantium et repellat facere nostrum. Non excepturi voluptatem nihil enim ipsum unde dolores. Omnis quasi fuga architecto provident impedit itaque voluptas commodi.', '1972', 'Hagenes PLC', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(50, 'Neque culpa quis reiciendis.', 'https://via.placeholder.com/300x400.png/00dd55?text=books+dolorem', 'Eius occaecati sit eos earum dolorum fugiat explicabo. Placeat reprehenderit totam inventore perspiciatis expedita qui.', '1996', 'Bradtke-Dooley', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(51, 'Labore nemo ipsum alias.', 'https://via.placeholder.com/300x400.png/0088cc?text=books+reiciendis', 'Non voluptatum deleniti nesciunt soluta rerum dolor quibusdam. Dolorum quia dolore exercitationem libero. Deserunt qui accusantium excepturi vel sint.', '1988', 'Kunze, Larkin and Price', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(52, 'Eos et.', 'https://via.placeholder.com/300x400.png/007700?text=books+velit', 'Optio voluptate dolor numquam eum mollitia. Sed provident consequatur iure commodi labore quibusdam. Et repellendus qui delectus accusantium qui voluptas. Eum ullam quo error dolores.', '2011', 'Mitchell LLC', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(53, 'Voluptatibus repellat id nostrum hic.', 'https://via.placeholder.com/300x400.png/00aaff?text=books+veniam', 'Ipsam accusamus ipsam et ab est qui quisquam. Iusto quibusdam magni a totam sint illum. Qui modi doloribus tenetur et ab unde ut.', '2016', 'Hermann and Sons', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(54, 'Ut modi corrupti libero.', 'https://via.placeholder.com/300x400.png/004422?text=books+ducimus', 'Consequatur esse voluptates molestiae tenetur. Corporis fugiat vero vero voluptatibus. Est cum maxime atque adipisci corporis quasi. Voluptas blanditiis tenetur et et maxime quam dolorem.', '1981', 'Volkman-Schuppe', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(55, 'Debitis esse delectus.', 'https://via.placeholder.com/300x400.png/0011aa?text=books+sed', 'Illum alias ut rerum rerum ducimus earum quae impedit. Vero natus consequuntur dicta consequatur et nulla aut. Odit ut quis nemo. Culpa alias placeat qui.', '2002', 'Senger-Fadel', 'available', '2025-12-06 06:38:40', '2025-12-06 06:38:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_category`
--

CREATE TABLE `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `book_category`
--

INSERT INTO `book_category` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 1, NULL, NULL),
(5, 2, 9, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 3, 6, NULL, NULL),
(8, 4, 9, NULL, NULL),
(9, 4, 11, NULL, NULL),
(10, 5, 6, NULL, NULL),
(11, 5, 7, NULL, NULL),
(12, 6, 1, NULL, NULL),
(13, 6, 2, NULL, NULL),
(14, 6, 3, NULL, NULL),
(15, 7, 1, NULL, NULL),
(16, 7, 21, NULL, NULL),
(17, 8, 2, NULL, NULL),
(18, 8, 15, NULL, NULL),
(19, 9, 21, NULL, NULL),
(20, 10, 18, NULL, NULL),
(21, 10, 21, NULL, NULL),
(22, 11, 21, NULL, NULL),
(23, 12, 18, NULL, NULL),
(24, 12, 21, NULL, NULL),
(25, 13, 21, NULL, NULL),
(26, 14, 18, NULL, NULL),
(27, 14, 21, NULL, NULL),
(28, 15, 21, NULL, NULL),
(29, 16, 12, NULL, NULL),
(30, 16, 21, NULL, NULL),
(31, 17, 12, NULL, NULL),
(32, 17, 21, NULL, NULL),
(33, 19, 21, NULL, NULL),
(34, 20, 15, NULL, NULL),
(35, 21, 21, NULL, NULL),
(36, 22, 2, NULL, NULL),
(37, 22, 15, NULL, NULL),
(38, 23, 21, NULL, NULL),
(39, 24, 13, NULL, NULL),
(40, 24, 14, NULL, NULL),
(41, 25, 21, NULL, NULL),
(42, 26, 21, NULL, NULL),
(43, 27, 13, NULL, NULL),
(44, 27, 14, NULL, NULL),
(45, 30, 14, NULL, NULL),
(46, 31, 17, NULL, NULL),
(47, 32, 21, NULL, NULL),
(48, 33, 4, NULL, NULL),
(49, 33, 6, NULL, NULL),
(50, 34, 13, NULL, NULL),
(51, 34, 18, NULL, NULL),
(52, 35, 15, NULL, NULL),
(53, 35, 21, NULL, NULL),
(54, 36, 9, NULL, NULL),
(55, 36, 12, NULL, NULL),
(56, 37, 4, NULL, NULL),
(57, 37, 8, NULL, NULL),
(58, 38, 16, NULL, NULL),
(59, 38, 21, NULL, NULL),
(60, 39, 10, NULL, NULL),
(61, 39, 16, NULL, NULL),
(62, 39, 18, NULL, NULL),
(63, 40, 18, NULL, NULL),
(64, 41, 2, NULL, NULL),
(65, 41, 6, NULL, NULL),
(66, 42, 13, NULL, NULL),
(67, 43, 10, NULL, NULL),
(68, 43, 11, NULL, NULL),
(69, 43, 21, NULL, NULL),
(70, 44, 6, NULL, NULL),
(71, 44, 8, NULL, NULL),
(72, 44, 12, NULL, NULL),
(73, 45, 11, NULL, NULL),
(74, 45, 17, NULL, NULL),
(75, 46, 3, NULL, NULL),
(76, 46, 17, NULL, NULL),
(77, 47, 9, NULL, NULL),
(78, 47, 14, NULL, NULL),
(79, 47, 16, NULL, NULL),
(80, 48, 11, NULL, NULL),
(81, 48, 12, NULL, NULL),
(82, 49, 5, NULL, NULL),
(83, 50, 3, NULL, NULL),
(84, 51, 6, NULL, NULL),
(85, 51, 8, NULL, NULL),
(86, 52, 8, NULL, NULL),
(87, 52, 17, NULL, NULL),
(88, 53, 1, NULL, NULL),
(89, 53, 15, NULL, NULL),
(90, 53, 19, NULL, NULL),
(91, 54, 11, NULL, NULL),
(92, 55, 1, NULL, NULL),
(93, 1, 7, NULL, NULL),
(94, 1, 20, NULL, NULL),
(95, 1, 21, NULL, NULL),
(96, 2, 13, NULL, NULL),
(97, 2, 14, NULL, NULL),
(98, 3, 1, NULL, NULL),
(99, 3, 14, NULL, NULL),
(100, 3, 15, NULL, NULL),
(101, 4, 13, NULL, NULL),
(102, 5, 6, NULL, NULL),
(103, 5, 13, NULL, NULL),
(104, 6, 5, NULL, NULL),
(105, 7, 7, NULL, NULL),
(106, 7, 13, NULL, NULL),
(107, 7, 19, NULL, NULL),
(108, 8, 1, NULL, NULL),
(109, 8, 7, NULL, NULL),
(110, 8, 16, NULL, NULL),
(111, 9, 20, NULL, NULL),
(112, 10, 7, NULL, NULL),
(113, 10, 9, NULL, NULL),
(114, 10, 20, NULL, NULL),
(115, 11, 10, NULL, NULL),
(116, 11, 11, NULL, NULL),
(117, 12, 6, NULL, NULL),
(118, 12, 8, NULL, NULL),
(119, 13, 14, NULL, NULL),
(120, 14, 4, NULL, NULL),
(121, 14, 11, NULL, NULL),
(122, 15, 1, NULL, NULL),
(123, 16, 8, NULL, NULL),
(124, 16, 16, NULL, NULL),
(125, 17, 5, NULL, NULL),
(126, 17, 20, NULL, NULL),
(127, 18, 17, NULL, NULL),
(128, 18, 21, NULL, NULL),
(129, 19, 11, NULL, NULL),
(130, 20, 5, NULL, NULL),
(131, 21, 8, NULL, NULL),
(132, 21, 16, NULL, NULL),
(133, 21, 17, NULL, NULL),
(134, 22, 1, NULL, NULL),
(135, 22, 18, NULL, NULL),
(136, 22, 21, NULL, NULL),
(137, 23, 3, NULL, NULL),
(138, 24, 2, NULL, NULL),
(139, 24, 20, NULL, NULL),
(140, 25, 7, NULL, NULL),
(141, 25, 15, NULL, NULL),
(142, 25, 19, NULL, NULL),
(143, 26, 13, NULL, NULL),
(144, 27, 5, NULL, NULL),
(145, 27, 9, NULL, NULL),
(146, 28, 4, NULL, NULL),
(147, 28, 12, NULL, NULL),
(148, 28, 18, NULL, NULL),
(149, 29, 4, NULL, NULL),
(150, 29, 15, NULL, NULL),
(151, 29, 17, NULL, NULL),
(152, 30, 2, NULL, NULL),
(153, 30, 3, NULL, NULL),
(154, 30, 20, NULL, NULL),
(155, 31, 8, NULL, NULL),
(156, 32, 5, NULL, NULL),
(157, 33, 7, NULL, NULL),
(158, 33, 12, NULL, NULL),
(159, 34, 5, NULL, NULL),
(160, 34, 17, NULL, NULL),
(161, 34, 20, NULL, NULL),
(162, 35, 4, NULL, NULL),
(163, 35, 5, NULL, NULL),
(164, 35, 13, NULL, NULL),
(165, 36, 8, NULL, NULL),
(166, 37, 7, NULL, NULL),
(167, 37, 11, NULL, NULL),
(168, 38, 1, NULL, NULL),
(169, 38, 4, NULL, NULL),
(170, 38, 5, NULL, NULL),
(171, 39, 1, NULL, NULL),
(172, 39, 13, NULL, NULL),
(173, 39, 20, NULL, NULL),
(174, 40, 13, NULL, NULL),
(175, 40, 15, NULL, NULL),
(176, 40, 18, NULL, NULL),
(177, 41, 6, NULL, NULL),
(178, 42, 16, NULL, NULL),
(179, 42, 19, NULL, NULL),
(180, 43, 8, NULL, NULL),
(181, 43, 13, NULL, NULL),
(182, 43, 20, NULL, NULL),
(183, 44, 1, NULL, NULL),
(184, 44, 8, NULL, NULL),
(185, 45, 1, NULL, NULL),
(186, 45, 2, NULL, NULL),
(187, 46, 14, NULL, NULL),
(188, 47, 9, NULL, NULL),
(189, 47, 13, NULL, NULL),
(190, 47, 17, NULL, NULL),
(191, 48, 5, NULL, NULL),
(192, 48, 7, NULL, NULL),
(193, 48, 20, NULL, NULL),
(194, 49, 12, NULL, NULL),
(195, 49, 13, NULL, NULL),
(196, 50, 1, NULL, NULL),
(197, 51, 2, NULL, NULL),
(198, 51, 20, NULL, NULL),
(199, 52, 3, NULL, NULL),
(200, 52, 20, NULL, NULL),
(201, 53, 13, NULL, NULL),
(202, 54, 3, NULL, NULL),
(203, 54, 9, NULL, NULL),
(204, 54, 12, NULL, NULL),
(205, 55, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `borrows`
--

CREATE TABLE `borrows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `borrow_date` date NOT NULL DEFAULT curdate(),
  `due_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `status` enum('borrowed','returned') NOT NULL DEFAULT 'borrowed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `borrows`
--

INSERT INTO `borrows` (`id`, `user_id`, `book_id`, `borrow_date`, `due_date`, `return_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 37, '2025-12-06', '2025-12-20', NULL, 'borrowed', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(2, 2, 36, '2025-12-06', '2025-12-20', NULL, 'borrowed', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(3, 3, 24, '2025-12-06', '2025-12-20', NULL, 'borrowed', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(4, 4, 23, '2025-12-06', '2025-12-20', NULL, 'borrowed', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(5, 5, 10, '2025-12-06', '2025-12-20', NULL, 'borrowed', '2025-12-06 06:38:40', '2025-12-06 06:38:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Novel', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(2, 'Fantasy', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(3, 'Fiction', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(4, 'Non-Fiction', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(5, 'Technology', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(6, 'Science', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(7, 'History', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(8, 'Biography', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(9, 'Education', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(10, 'Comics', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(11, 'Economy', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(12, 'Romance', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(13, 'Mystery', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(14, 'Thriller', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(15, 'Adventure', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(16, 'Philosophy', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(17, 'Self-Help', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(18, 'Classic', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(19, 'Children', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(20, 'Poetry', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(21, 'Drama', '2025-12-06 06:38:40', '2025-12-06 06:38:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000002_create_jobs_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2025_12_02_175715_create_users_table', 3),
(7, '2025_12_02_175901_create_categories_table', 3),
(8, '2025_12_02_175942_create_authors_table', 3),
(9, '2025_12_02_175954_create_books_table', 3),
(10, '2025_12_02_180115_create_author_book_table', 3),
(11, '2025_12_02_180118_create_book_category_table', 3),
(12, '2025_12_02_181308_create_borrows_table', 3),
(13, '2025_12_04_062725_create_sessions_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('YJKIMwj6cOFPW5bVkTM4629lQQvudHUrSdruJYpz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkpGV0pORXM4MnJGMVJUcVNVV2hBOWpUTnlodnhKTHlYV1J0elMxMSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1765029756);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jeisen', 'Jeisen@example.com', '$2y$12$m/bWdeWxpsnFXDzl4qSAj.4vNfhiQAzLRLFN4bMYKXZeafDzezmqu', '2025-12-06 06:38:39', '2025-12-06 06:38:39'),
(2, 'Michelle', 'michelle@example.com', '$2y$12$zOhuIwtY1pW0HutqH05KZ.OnwY6vUGgpR8AHsTqrVTJEPPMZEBcIO', '2025-12-06 06:38:39', '2025-12-06 06:38:39'),
(3, 'Carlson', 'carlson@example.com', '$2y$12$qVpAlt9ieayiJyezVlopHevjMue.nCLfx03jVYqUV5Trp7Frmin9G', '2025-12-06 06:38:39', '2025-12-06 06:38:39'),
(4, 'John', 'john@example.com', '$2y$12$/R9DlfOsQ567s5StDSuG5OsoLEAOdwnnUXAIuV9AnoNjFRaEcJsOy', '2025-12-06 06:38:40', '2025-12-06 06:38:40'),
(5, 'Samuel', 'samuel@example.com', '$2y$12$vBd/mnajNBg58GlN0CuSiuia0GnU/fbAeZfimR3ATr7U6WnRWkShq', '2025-12-06 06:38:40', '2025-12-06 06:38:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `author_book`
--
ALTER TABLE `author_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_book_author_id_foreign` (`author_id`),
  ADD KEY `author_book_book_id_foreign` (`book_id`);

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrows_book_id_foreign` (`book_id`),
  ADD KEY `borrows_user_id_book_id_index` (`user_id`,`book_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `author_book`
--
ALTER TABLE `author_book`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT untuk tabel `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `author_book`
--
ALTER TABLE `author_book`
  ADD CONSTRAINT `author_book_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `author_book_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `borrows_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
