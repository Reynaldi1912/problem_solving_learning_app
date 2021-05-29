-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2021 pada 05.06
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_proyek1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_diagram`
--

CREATE TABLE `activity_diagram` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `activity_diagram`
--

INSERT INTO `activity_diagram` (`id`, `link`, `ide_id`) VALUES
(1, 'https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasa_program`
--

CREATE TABLE `bahasa_program` (
  `id` int(11) NOT NULL,
  `nama_bahasa` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahasa_program`
--

INSERT INTO `bahasa_program` (`id`, `nama_bahasa`, `keterangan`) VALUES
(2, 'PHP', ' Bahasa program yang digunakan untuk mengembangkan halaman web yang dinamis. Mempelajari PHP akan sangat berguna untuk pemilik situs web karena PHP bisa mempersingkat kode yang ada di halaman web sehingga bisa ditampung ke dalam seperangkat aturan.'),
(3, 'C++', 'C++ juga memiliki keuntungan, yaitu lebih mudah untuk mempelajari bahasa C lainnya seperti C# dan C. Semua bahasa C umumnya dipandang sebagai bahasa program tingkat menengah.'),
(4, 'Java', 'Adalah bahasa pemograman paling populer dan paling banyak digunakan di dunia. Fleksibilitas menjadi keunggulannya, dapat dipakai untuk berbagai kebutuhan. Mulai dari pemograman jaringan, pengembangan website, perangkat lunak, dan sebagainya.'),
(7, 'Swift', 'Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `database_ide`
--

CREATE TABLE `database_ide` (
  `id` int(11) NOT NULL,
  `nama_database` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `database_ide`
--

INSERT INTO `database_ide` (`id`, `nama_database`, `keterangan`) VALUES
(1, 'MySQL', 'Ialah sebuah perangkat lunak pada system manajemen basis data SQL atau DBMS ( database management system ) yang multithread, multi user, dengan sekitar 6 juta instalasi diseluruh dunia. MySQLAB membuat MySQL tersedia sebagai perangkat lunak gratis dibawah lisensi GNU General Public License ( GPL ) tetapi mereka juga menjual dibawah lisensi komersial untuk kasus-kasus dimana penggunaanya tidak cocok dengan penggunaan GPL'),
(2, 'Firebird', 'Firebird atau disebut juga FirebirdSQL ialah system manajemen basidata relasional yang menawarkan fitur-fitur yang terdapat dalam standar ANSI SQL-99 dan SQL-2003. RDBMS ini berjalan baik di Linux, Windows maupun pada sejumlah platform Unix. Firebird di arahkan dan di-maintain oleh FirebirdSQL Foundation. Ia merupakan turunan dari Interbase versi open source milik Borland. Modul-modul kode baru ditambahkan pada Firebird dan berlisensi dibawah Initial Developer’s Public License ( IDPL ) sementara modul-modul aslinya dirilis oleh Inprise berlisensi dibawah InterBase Public License1.0. kedua lisensi tersebut merupakan versi modifikasi dari Mozilla Public License 1.1.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivirabless`
--

CREATE TABLE `delivirabless` (
  `id` int(11) NOT NULL,
  `flowchart_id` int(11) DEFAULT NULL,
  `activity_diagram_id` int(11) DEFAULT NULL,
  `erd_id` int(11) DEFAULT NULL,
  `wireframe_id` int(11) DEFAULT NULL,
  `komponen_desain_id` int(11) DEFAULT NULL,
  `ui_desan_id` int(11) DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `erd`
--

CREATE TABLE `erd` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `erd`
--

INSERT INTO `erd` (`id`, `link`, `ide_id`) VALUES
(1, 'https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur`
--

CREATE TABLE `fitur` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isUtama` tinyint(1) NOT NULL,
  `estimasi_waktu` varchar(30) NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fitur`
--

INSERT INTO `fitur` (`id`, `nama`, `isUtama`, `estimasi_waktu`, `ide_id`) VALUES
(1, 'Fitur Memilih Tempat Magang\r\n', 0, '15 - 30 ', 1),
(2, 'Fitur Filter Tempat Magang', 0, '15 - 30 ', 1),
(3, 'Landing Page Website', 1, '3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur_kerjakan`
--

CREATE TABLE `fitur_kerjakan` (
  `id` int(11) NOT NULL,
  `fitur_utama_id` int(11) NOT NULL,
  `fitur_tambahan_id` int(11) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `flowchart`
--

CREATE TABLE `flowchart` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `flowchart`
--

INSERT INTO `flowchart` (`id`, `link`, `ide_id`) VALUES
(1, 'https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `framework`
--

CREATE TABLE `framework` (
  `id` int(11) NOT NULL,
  `nama_framework` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `framework`
--

INSERT INTO `framework` (`id`, `nama_framework`, `keterangan`) VALUES
(1, 'Laravel', 'Laravel adalah framework terkenal yang digunakan mengembangkan aplikasi yang sangat kuat. Framework ini sangat fleksibel dan dapat diskalakan dengan menawarkan fitur khusus rentang tinggi yang mungkin Anda butuhkan'),
(3, 'Symfony', 'Symfony membantu Anda mengembangkan aplikasi yang kuat dengan fitur-fiturnya yang paling bagus. Pada tahun 2005, Symfony diluncurkan dengan arsitektur MVC, penggunaan kembali kode, session management, routing URI yang fleksibel, dan dukungan platform yang berbeda untuk kelas basis data.'),
(5, ' Yii', 'Framework ini paling terkenal dengan sejumlah fiturnya terutama untuk CodeCeption dan integrasi PHP. Yii Framework adalah salah satu framework PHP paling ringan yang mudah diperluas dan dipasang.'),
(6, 'Zend', 'Sulit untuk mengalahkan frame Zend jika Anda mencari aplikasi industri skala besar. Framework ini menyediakan hampir semua fitur OOP menjadi framework berorientasi objek seperti enkapsulasi dll. Zend terintegrasi dengan baik pada lingkungan yang memfasilitasi pengembangan produk software  berkualitas tinggi untuk perusahaan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambaran_ide`
--

CREATE TABLE `gambaran_ide` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambaran_ide`
--

INSERT INTO `gambaran_ide` (`id`, `judul`, `keterangan`, `ide_id`) VALUES
(2, 'Tempat Magang Tidak Sesuai', 'Ridiculus et placerat eu eget elementum quam. Enim id pulvinar etiam diam eget. Luctus sollicitudin dolor viverra ac. Non rhoncus faucibus mattis morbi varius ut suspendisse cras nec. Amet purus sapien in mattis vitae malesuada quis eget nec. Morbi sodales in donec enim. Nibh ipsum, faucibus hendrerit erat. Risus scelerisque nisl, ultrices lacus, tortor lobortis sem amet.Sem vitae, at feugiat facilisis massa sit nibh neque porttitor. Habitasse ipsum tristique cras dui ac porta iaculis ac. Pellentesque ornare amet aliquet pellentesque urna. Gravida urna tincidunt viverra in egestas. Vel, arcu mauris dignissim morbi proin ultrices nisi tellus. Sodales sed eget risus, nullam augue. Tristique quam arcu, et viverra aenean in. Laoreet mauris non lectus aliquam dolor volutpat donec lectus viverra. Ut duis quisque est habitant eu, sagittis, elit dolor vestibulum. Tristique gravida sollicitudin diam faucibus sit ut nec ullamcorper turpis.\r\n\r\n', 1),
(3, 'Intesitas Cahaya Menentukan', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n', 3),
(4, 'Tidak Berjalan Jika Tidak Ada Kamera', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ide`
--

CREATE TABLE `ide` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `img` text NOT NULL,
  `hari` varchar(20) NOT NULL,
  `rating` double NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ide`
--

INSERT INTO `ide` (`id`, `judul`, `img`, `hari`, `rating`, `kategori_id`, `level_id`) VALUES
(1, 'Website Portal Magang', 'assets/img/ide.png', '15 - 30 Hari', 4.5, 2, 1),
(2, 'Aplikasi Pembayaran & Validasi Online', 'assets/img/ide.png', '10 - 20 Hari', 4.3, 1, 1),
(3, 'Aplikasi Pengenalan Wajah', 'assets/img/ide.png', '15 - 45 Hari', 4.9, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `color`) VALUES
(1, 'MOBILE', 'Mobile'),
(2, 'FULL STACK WEB', 'fullstack-web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_ide`
--

CREATE TABLE `komentar_ide` (
  `id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `keterangan` text NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `ide_id` int(11) NOT NULL,
  `rating` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar_ide`
--

INSERT INTO `komentar_ide` (`id`, `komentar`, `keterangan`, `users_id`, `ide_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Ide nya sangat Keren', 'Ridiculus et placerat eu eget elementum quam. Enim id pulvinar etiam diam eget. Luctus sollicitudin dolor viverra ac.', 4, 1, 4.5, '2021-05-20 10:21:19', NULL),
(2, 'Ide nya sangat indpiratif , aku ingin mencoba ide ini', 'Ridiculus et placerat eu eget elementum quam. Enim id pulvinar etiam diam eget. Luctus sollicitudin dolor viverra ac.', 6, 1, 4.7, '2021-05-20 10:24:07', NULL),
(3, 'Ide nya sangat membantu proyek yang saya kerjakan', 'Ridiculus et placerat eu eget elementum quam. Enim id pulvinar etiam diam eget. Luctus sollicitudin dolor viverra ac.', 7, 1, 5, '2021-05-20 10:54:40', NULL),
(4, 'Ide nya Sangat Keren', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat ', 6, 3, 4.7, '2021-05-28 02:00:56', NULL),
(5, 'wah Susah Nih Pasti Idenya', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos ', 4, 2, 4, '2021-05-28 02:01:17', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_desain`
--

CREATE TABLE `komponen_desain` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komponen_desain`
--

INSERT INTO `komponen_desain` (`id`, `link`, `ide_id`) VALUES
(1, 'https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(20) NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `nama_level`, `icon`) VALUES
(1, 'Rook', 'assets/img/icon small/small-puzzle-icon.png'),
(2, 'Pro', 'assets/img/icon small/medium-puzzle-icon.png'),
(3, 'Vet', 'assets/img/icon small/big-puzzle-icon.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_28_133030_tambah_kolom', 2),
(5, '2021_04_29_015938_tambah_kolom_github', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_fitur`
--

CREATE TABLE `sub_fitur` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `fitur_id` int(11) NOT NULL,
  `estimasi_waktu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_fitur`
--

INSERT INTO `sub_fitur` (`id`, `nama`, `deskripsi`, `fitur_id`, `estimasi_waktu`) VALUES
(1, 'Menampilkan Informasi Tempat Magang', 'Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi. Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget pellentesque. Ut urna nunc arcu id tempor.', 1, '3 - 5'),
(2, 'Fitur Pencarian Tempat Magang', 'Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi. Velit, nibh sem egestas sit urna curabitur leo.', 1, '3 - 5'),
(3, 'Fitur Filter Tempat Magang', 'Natoque enim varius tortor dictum ac. Dui sodales odio vestibulum augue malesuada blandit nibh netus et. Sit sed viverra maecenas suspendisse ut laoreet in enim. Egestas tellus quis leo nibh ut id dolor lacus velit.', 1, '3 - 5'),
(4, 'Fitur Menentukan Durasi Magang', 'Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi. Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget pellentesque. Ut urna nunc arcu id tempor.', 2, '3 - 5'),
(5, 'Fitur Upload CV & Surat Keterangan Magang', 'Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi. Velit, nibh sem egestas sit urna curabitur leo.', 2, '3 - 5'),
(6, 'Section Hero', 'Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi. Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget pellentesque. Ut urna nunc arcu id tempor.', 3, '1'),
(7, 'Section Fitur-fitur Website', 'Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi. Velit, nibh sem egestas sit urna curabitur leo.', 3, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tantangan`
--

CREATE TABLE `tantangan` (
  `id` int(11) NOT NULL,
  `judul_tantangan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tantangan`
--

INSERT INTO `tantangan` (`id`, `judul_tantangan`, `keterangan`, `ide_id`) VALUES
(1, 'Membuat Tampilan untuk 2 User Berbeda', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorum sint obcaecati, expedita praesentium eveniet totam aliquam! Nihil beatae laboriosam illum repudiandae error sit eum, reiciendis, molestiae aut odit cupiditate! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur maiores illum voluptates voluptatem eveniet dolore, sunt officiis? Ad possimus labore blanditiis quisquam reiciendis, nemo officiis expedita eligendi sit nisi quibusdam!', 1),
(2, 'Membuat 2 LoginYang berbeda', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorum sint obcaecati, expedita praesentium eveniet totam aliquam! Nihil beatae laboriosam illum repudiandae error sit eum, reiciendis, molestiae aut odit cupiditate! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur maiores illum voluptates voluptatem eveniet dolore, sunt officiis? Ad possimus labore blanditiis quisquam reiciendis, nemo officiis expedita eligendi sit nisi quibusdam!', 1),
(3, 'Klasifikasi Gambar Berdasarkan Intensitas Cahaya', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n', 3),
(4, 'Integrasi Kamera Untuk Scan QR', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n', 2),
(5, 'Membutuhkan Dataset Banyak', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fuga similique praesentium eos beatae placeat dignissimos eum reprehenderit distinctio soluta, obcaecati, facilis blanditiis quibusdam porro autem pariatur! Alias, nulla molestiae.\r\n', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknologi_kerjakan`
--

CREATE TABLE `teknologi_kerjakan` (
  `id` int(11) NOT NULL,
  `framework` varchar(50) NOT NULL,
  `bahasa_program` varchar(50) NOT NULL,
  `database_ide` varchar(50) NOT NULL,
  `version_control` varchar(50) NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ide_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `teknologi_kerjakan`
--

INSERT INTO `teknologi_kerjakan` (`id`, `framework`, `bahasa_program`, `database_ide`, `version_control`, `users_id`, `ide_id`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'PHP', 'Firebird', 'Github', 5, 1, '2021-05-29 02:47:38', '2021-05-28 20:05:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ui_desain`
--

CREATE TABLE `ui_desain` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ui_desain`
--

INSERT INTO `ui_desain` (`id`, `link`, `ide_id`) VALUES
(1, 'https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `auth_type`, `github_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Reynaldi1912', 'Reynaldi Ramadhani Eka Purnomo', 'reynaldi.rl14@gmail.com', NULL, NULL, NULL, '$2y$10$ZZXa87rbHAizowKUlIFf2.GkIQbr2TRcE/QEclfCluB4JXJKmz632', NULL, '2021-05-02 20:41:47', '2021-05-02 20:41:47'),
(5, NULL, 'Reynaldi Ramadhani', 'nexrey19@gmail.com', 'github', '55469516', NULL, 'eyJpdiI6ImNGV0NJZWJQMDdYU3hpTEphZm9xbFE9PSIsInZhbHVlIjoiSmlsS3pRUUNMVHZ6N3h6cy84bkZPSEhRUUJDaVBaMjZtRWU3d3prOUJFbz0iLCJtYWMiOiI4M2FkMGRlMDYzMzhkMjA4ODEyMGI0YTVjM2MyOGVhYmQ5OGFkMWZlMTk0YTk3YTNlN2VhNmEzMDA1NTIwOTU5In0=', NULL, '2021-05-02 20:50:00', '2021-05-02 20:50:00'),
(6, 'dicky19', 'Dicky Juniar', 'dicky@gmail.com', NULL, NULL, NULL, '$2y$10$IsikCriyxEBUTuK16CPJH.Ja/I3eDi.NDYr7GjQxZOKc5JuKsRoGC', NULL, '2021-05-20 03:22:02', '2021-05-20 03:22:02'),
(7, 'Genadi19', 'Genadi Dharma', 'Genadi@gmail.com', NULL, NULL, NULL, '$2y$10$04yDpMLaYtsTcbXD4j4InOC6bH9r/pePgqyURE0z2PiMuydRfRKIm', NULL, '2021-05-20 03:54:32', '2021-05-20 03:54:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `version_control`
--

CREATE TABLE `version_control` (
  `id` int(11) NOT NULL,
  `nama_version_control` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `version_control`
--

INSERT INTO `version_control` (`id`, `nama_version_control`, `keterangan`) VALUES
(1, 'Github', 'GitHub adalah layanan hos web bersama untuk proyek pengembangan perangkat lunak yang menggunakan sistem kendali versi Git dan layanan hosting internet. Hal ini banyak digunakan untuk kode komputer.'),
(2, 'Gitlab', 'GitLab adalah sebuah manajer repositori Git berbasis web dengan fitur wiki dan pelacakan masalah, menggunakan lisensi sumber terbuka, dikembangkan oleh GitLab Inc. Perangkat lunak ini ditulis oleh Dmitriy Zaporozhets dan Valery Sizov dari Ukraina. Kode yang ditulis adalah Ruby');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wireframe`
--

CREATE TABLE `wireframe` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `ide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wireframe`
--

INSERT INTO `wireframe` (`id`, `link`, `ide_id`) VALUES
(1, 'https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_diagram`
--
ALTER TABLE `activity_diagram`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `bahasa_program`
--
ALTER TABLE `bahasa_program`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `database_ide`
--
ALTER TABLE `database_ide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `delivirabless`
--
ALTER TABLE `delivirabless`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `erd`
--
ALTER TABLE `erd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `fitur_kerjakan`
--
ALTER TABLE `fitur_kerjakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `flowchart`
--
ALTER TABLE `flowchart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `framework`
--
ALTER TABLE `framework`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambaran_ide`
--
ALTER TABLE `gambaran_ide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `ide`
--
ALTER TABLE `ide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar_ide`
--
ALTER TABLE `komentar_ide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `komponen_desain`
--
ALTER TABLE `komponen_desain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sub_fitur`
--
ALTER TABLE `sub_fitur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fitur_id` (`fitur_id`);

--
-- Indeks untuk tabel `tantangan`
--
ALTER TABLE `tantangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `teknologi_kerjakan`
--
ALTER TABLE `teknologi_kerjakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `ui_desain`
--
ALTER TABLE `ui_desain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indeks untuk tabel `version_control`
--
ALTER TABLE `version_control`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wireframe`
--
ALTER TABLE `wireframe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ide_id` (`ide_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_diagram`
--
ALTER TABLE `activity_diagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bahasa_program`
--
ALTER TABLE `bahasa_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `database_ide`
--
ALTER TABLE `database_ide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `delivirabless`
--
ALTER TABLE `delivirabless`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `erd`
--
ALTER TABLE `erd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `fitur_kerjakan`
--
ALTER TABLE `fitur_kerjakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `flowchart`
--
ALTER TABLE `flowchart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `framework`
--
ALTER TABLE `framework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `gambaran_ide`
--
ALTER TABLE `gambaran_ide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ide`
--
ALTER TABLE `ide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komentar_ide`
--
ALTER TABLE `komentar_ide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komponen_desain`
--
ALTER TABLE `komponen_desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sub_fitur`
--
ALTER TABLE `sub_fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tantangan`
--
ALTER TABLE `tantangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `teknologi_kerjakan`
--
ALTER TABLE `teknologi_kerjakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ui_desain`
--
ALTER TABLE `ui_desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `version_control`
--
ALTER TABLE `version_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `wireframe`
--
ALTER TABLE `wireframe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `activity_diagram`
--
ALTER TABLE `activity_diagram`
  ADD CONSTRAINT `activity_diagram_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `delivirabless`
--
ALTER TABLE `delivirabless`
  ADD CONSTRAINT `delivirabless_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `delivirabless_ibfk_2` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `erd`
--
ALTER TABLE `erd`
  ADD CONSTRAINT `erd_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `fitur`
--
ALTER TABLE `fitur`
  ADD CONSTRAINT `fitur_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `fitur_kerjakan`
--
ALTER TABLE `fitur_kerjakan`
  ADD CONSTRAINT `fitur_kerjakan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fitur_kerjakan_ibfk_2` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `flowchart`
--
ALTER TABLE `flowchart`
  ADD CONSTRAINT `flowchart_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `gambaran_ide`
--
ALTER TABLE `gambaran_ide`
  ADD CONSTRAINT `gambaran_ide_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `ide`
--
ALTER TABLE `ide`
  ADD CONSTRAINT `ide_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`),
  ADD CONSTRAINT `ide_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `komentar_ide`
--
ALTER TABLE `komentar_ide`
  ADD CONSTRAINT `komentar_ide_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `komentar_ide_ibfk_2` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `komponen_desain`
--
ALTER TABLE `komponen_desain`
  ADD CONSTRAINT `komponen_desain_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `sub_fitur`
--
ALTER TABLE `sub_fitur`
  ADD CONSTRAINT `sub_fitur_ibfk_1` FOREIGN KEY (`fitur_id`) REFERENCES `fitur` (`id`);

--
-- Ketidakleluasaan untuk tabel `tantangan`
--
ALTER TABLE `tantangan`
  ADD CONSTRAINT `tantangan_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `teknologi_kerjakan`
--
ALTER TABLE `teknologi_kerjakan`
  ADD CONSTRAINT `teknologi_kerjakan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `teknologi_kerjakan_ibfk_2` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `ui_desain`
--
ALTER TABLE `ui_desain`
  ADD CONSTRAINT `ui_desain_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);

--
-- Ketidakleluasaan untuk tabel `wireframe`
--
ALTER TABLE `wireframe`
  ADD CONSTRAINT `wireframe_ibfk_1` FOREIGN KEY (`ide_id`) REFERENCES `ide` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
