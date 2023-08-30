-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Jun 2020 pada 11.10
-- Versi server: 10.1.44-MariaDB-cll-lve
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
domisili
--
-- Database: `pasputpa_proyek_akhir`
--
CREATE DATABASE pasputpa_proyek_akhir
USE pasputpa_proyek_akhir
-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` INT(10) NOT NULL,
  `judul` VARCHAR(255) NOT NULL,
  `tanggal` DATE NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `gambar` VARCHAR(255) NOT NULL,
  `isi` TEXT NOT NULL,
  `kategori` VARCHAR(255) NOT NULL,
  `tag` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `author`, `gambar`, `isi`, `kategori`, `tag`) VALUES
(4, 'Pasir Putih Parparean', '2020-05-22', 'Denny Abraham Sinaga', '5ed2551cb685b.jpg', '<p>Pasir Putih Parparean adalah salah satu objek wisata yang berada di Parparean II, Porsea. Objek wisata ini memiliki daya tarik tersendiri kepada pencari senja sebab indahnya <em>sunset </em>di lokasi pantai. Bukan hanya senja, pasir pantai ini juga memiliki ciri khas tersendiri dimana pasir pantai yang selain lembut juga terkadang berwarna kehitaman bila terkena pantulan sinar matahari yang tenggelam sorenya.</p>\r\n\r\n<p>Pantai ini memiliki lanskap pantai yang indah dan sekaligus dapat menenangkan hati siapapun yang mengunjunginya. Pasput adalah nama khas yang diberikan oleh pengunjung mulai dari pantai ini ditemukan sampai dikelola. Pasput memiliki tiga lokasi pantai yang masing-masing memiliki lahan parkir yang cukup bagi kamu yang ingin berkunjung ke pantai ini. Kamu tidak perlu takut kekurangan lahan parkir, dan untuk masuk ke pantai ini juga tidak dikenakan biaya masuk. Apabila kamu menuju objek wisata dengan kendaraan bermotor kamu hanya cukup membayar sewa parkir saja dimana Rp2000 untuk sepeda motor, Rp5000 untuk mobil, dan Rp10000 untuk bus. Masing-masing lokasi pantai dikelola oleh masyarakat yang berkolaborasi dengan desa Parparean II dalam memajukan objek wisata yang dikenal dengan nama Pasput ini. Fasilitas dan wahana dapat dinikmati mulai dari yang gratis hingga berbayar.</p>\r\n\r\n<p>Fasilitas yang disediakan selain dari lahan parkir adalah gajebo, pondok, dan juga kamar mandi. Selain itu terdapat beberapa wahana yang dapat dimainkan bebas oleh wisatawan yang berkunjung. Untuk kamu yang ingin berkunjung ke Pasput silakan lihat Peta lokasi pantai ini yang telah dicantumkan di halaman depan situs ini. Yuk, kunjungi Pasir Putih Parparean!</p>\r\n', 'Wisatawan', 'Berenang'),
(5, 'Pasput, Memori Indah Kecilku', '2020-05-26', 'Denny Abraham Sinaga', '5ed25568311e8.jpg', '<p>Selama kami besar di tempat ini, indah rasanya kami menghabiskan masa kecil di bibir pantai ini. Kami tak pernah lelah mengarungi birunya Danau Toba yang menyimpan beribu cerita bagi mereka yang membuatnya. Banyak yang berkata rumah adalah tempat untuk kembali dan kami menyadari Pantai Pasir Putih adalah rumah di sanubari kami semua. Daya magis yang ditampilkan oleh Pantai Pasir Putih di desa kami Parparean, tidak pernah mengecewakan. Tak pernah lekang di ingatan kami bagaimana rasanya berenang di Danau Toba, menikmati anugerah Tuhan Yang Maha Kuasa, yang telah mengukir indah pegunungan sejauh mata memandang, yang melukis indah hamparan cakrawala di atas kepala kami. Betapa beruntungnya kami besar di tempat ini. Setiap kali menikmati indahnya matahari tenggelam dari sudut Pantai Pasir Putih, selalu saja ada perasaan bahagia bak seekor kupu-kupu menari di perut dan ingin rasanya mengulang perasaan itu setiap hari. Rasa yang amat mewah untuk seorang anak kecil yang masih belum mengerti mengenai bagaimana cara kerja dunia.</p>\r\n\r\n<p><br />\r\nTak bosan-bosannya kami membanggakan kemajuan yang ada di Pasir Putih. Keindahan Pasir Putih adalah kebanggan bagi kami semua dan merupakan sebuah kehormatan bagi kami untuk membagikannya kepada setiap orang. kami mengharap semua orang yang datang dari segala penjuru negeri, bisa mengolah rasa dengan inderanya untuk memahami betapa luar biasanya anugerah Tuhan kepada kita semua. Hal ini dikarenakan Pasir Putih penuh dengan memori kebahagiaan bagi kami yang tumbuh dan besar di sana. Kami hendak membagikannya ke dunia karena kami sadar, anugerah Tuhan diciptakan untuk semua orang tanpa terkecuali siapa pun.</p>\r\n', 'Wisatawan', 'Aktivitas Wisatawan,Family Time'),
(8, 'Polres Tobasa Bubarkan Pengunjung Di Pantai Pasir Putih', '2020-06-13', 'Denny Abraham Sinaga', '5ee79297a1a12.jpg', '<p>Personil Satuan Polres Tobasa membubarkan sejumlah warga yang berkerumun dikawasan wisata pantai Pasir Putih Kecamatan Porsea Kabupaten Toba, Sabtu (13 /06/2020) sekira pukul 09.30 Wib. Kapolres Tobasa AKBP Akala Fikta Jaya S.I.K melalui Kabag Ops Polres Tobasa Kompol Drs.Efendi Sinaga melakukan pembubaran dilakukan dengan cara menyentuh langsung secara Preventif kepada pengunjung dengan menghimbau untuk kembali dan berdisiplin dirumah guna mencegah dan memutus terjadinya penyebaran Covid 19.<br />\r\n<br />\r\n&ldquo;Ya benar, kita himbau agar mematuhi himbauan pemerintah untuk membatasi kegiatan diluar rumah, Sosial Distancing, selalu memakai masker, selalu mencuci tangan dan hindari tempat keramaian,&rdquo; terang Kabag Ops Polres Tobasa Drs.Efendi Sinaga<br />\r\n<br />\r\nMenurut Efendi Sinaga , pembubaran ini dilaksanakan dalam rangka menindaklanjuti himbauan pemerintah tentang pembatasan sosial atau sosial distancing ditengah situasi Pandemi Global Covid-19 dalam mencegah penyebaran Covid-19.<br />\r\n<br />\r\nAdapun himbauan dan pembubaran Pengunjung tempat Wisata Pasir Putih dilakukan utk pencegahan Penyebaran Covid- 19 di Tobasa mengingat Kabupaten Tobasa masih Zona Kuning.<br />\r\nLanjutnya, &ldquo;kami juga mengajak para pengunjung dan pengusaha yang ada di pantai untuk mendukung kebijakan pemerintah menuju tatanan kehidupan baru atau New Normal yang aman dari Covid-19 dengan meningkatkan kedisiplinan, kesadaran yang dari diri sendiri dan mematuhi aturan dari petugas yang ada&rdquo;.<br />\r\n<br />\r\nSementara itu, Kabag Ops Polres Tobasa Kompol Drs.Efendi Sinaga menambahkan bahwa New Normal ini adalah kebijakan membuka kembali aktivitas ekonomi, sosial dan kegiatan publik secara terbatas dengan menggunakan standar protokol kesehatan yang sebelum pandemi Covid-19 ini tidak ada.<br />\r\n<br />\r\n&ldquo;Ya, New Normal yang dimaksud adalah upaya menyelamatkan hidup warga, yang utamanya agar warga yang memerlukan aktivitas di luar rumah dapat bekerja dengan menggunakan standar protokol kesehatan yang ditetapkan. Jadi bukan sekedar bebas bergerombol atau keluyuran,&rdquo; pungkas Kompol Drs Efendi Sinaga<br />\r\n<br />\r\nKegiatan ini di laksanakan agar para Pengusaha agar tidak menerima Tamu sebelum benar-benar diterapkan Protokoler Kesehatan di Tempat Usahanya.<br />\r\n<br />\r\n&ldquo;Pembubaran ini dimaksudkan untuk mencegah masyarakat berkumpul guna memutus rantai penyebaran Covid-19&rdquo; , pungkasnya. Turut hadir yg melakukan kegiatan Kabag Ops Kompol Drs.Efendi Sinaga, Gugus Tugas covid-19 Kabupaten Toba, Dinas Parawisata Kabupaten Toba, Koramil Porsea Kapten Lumbantoruan, Camat Porsea Albert Manurung dan Aparat Desa Parparean II Tumbur Napitupulu ( HS/KTN ).</p>\r\n', 'Wisatawan', 'Aktivitas Wisatawan'),
(9, 'Spearfishing di Pasput', '2020-06-02', 'Denny Abraham Sinaga', '5ee51c103f538.jpg', '<p>Beberapa hari lalu, sejumlah wisatawan lokal yang berkunjung ke Pasir Putih Parparean sedang melakukan aktivitas <em>spearfishing</em>. Spearfishing atau memanah ikan adalah hal lazim yang dilakukan oleh penduduk Toba dan sudah menjadi suatu kegiatan yang lumayan sering dilakukan terlebih ditengah pandemi seperti ini.</p>\r\n\r\n<p>Sejumlah wisatawan lokal yang berkunjung terlihat sedang mengumpulkan hasil tembakan mereka yang kabarnya mendapat hasil yang cukup besar. Tidak perlu terkejut sebab mengingat potensi sumber daya ikan di Danau Toba cukup berlimpah.</p>\r\n\r\n<p>&quot;Kami sudah sering melakukan <em>spearfishing </em>dan kalian juga dapat menonton aksi kami ketika di bawah. Videonya saya upload di Spearfishing Danau Toba&quot;, kata salah satu spearo yang berasal dari Balige. Banyaknya tangkapan yang didapat pun menarik wisatawan lainnya untuk melihat mereka. Berbagai aktivitas dilakukan di Pantai Pasir Putih Parparean ini, mulai dari sekedar berkumpul, olahraga, mengabadikan foto dan juga bahkan melakukan <em>spearfishing</em>.</p>\r\n', 'Wisatawan', 'Aktivitas Wisatawan , Spearfishing'),
(10, 'Hebat, Kini Pasput Tempat Syuting Film ', '2020-06-07', 'Denny Abraham Sinaga', '5ee561921c321.jpg', '<p>Pantai Pasir Putih Parparean Kabupaten Toba Samosir adalah salah satu andalan lokasi wisata yang sangat gencar di promosikan. Pasalnya pantai ini menyimpan banyak misteri&nbsp; keindahan yang belum tergali, yaitu&nbsp; pasir putih yang sangat bersih ditambah keramahan warga disekitar pantai , dan&nbsp; kondisi Pantai yang lebih luas daerahnya dan dilengkapi dengan jogging track untuk menikmati pemandangan alam di sekitar pantai, dan merupakan destinasi wisata&nbsp; yang lagi dikembangkan. Yang menarik perhatian, bahwa sekarang ini pantai pasir putih menjadi salah satu objek pengambilan lokasi syuting film dari Mabes Polri yang disutradarai&nbsp; Ponti Gea dengan judul Sang Prawira.</p>\r\n\r\n<p>Forum Koordinasi Pimpinan Daerah (Forkopimda) Kabupaten Toba Samosir turut ambil bagian dalam mensukseskan syuting pembuatan film Layar Lebar &ldquo;Sang Prawira&rdquo; di Pantai Pasir Putih Parparean, Kecamatan Porsea, Kabupaten Toba Samosir, untuk mengenalkan adat Batak dan obyek wisatanya, pada Rabu (7/8/2019).</p>\r\n\r\n<p dir=\"auto\">Pengambilan syuting&nbsp; Film sang prawira&nbsp; turut dihadiri oleh Bupati Toba Samosir Darwin Siagian,&nbsp; Wakil Bupati Toba Samosir Hulman Sitorus, Kapolres Toba Samosir AKBP Agus Waluyo SIK, Dandim Letkol Rico Siagian , dan pejabat dilingkungan pemerintahan Toba Samosir.</p>\r\n\r\n<p dir=\"auto\">Salah satu keberhasilan dari Kapolres Tobasa, AKBP Agus Waluyo SIK, dalam mengkondisikan lokasi syuting film &ldquo;Sang Prawira&rdquo; di Kabupaten Toba Samosir, dalam upaya meningkatkan kunjungan wisata yang ditetapkan pemerintah pusat sebagai kawasan strategis pariwisata nasional (KSPN).</p>\r\n\r\n<p dir=\"auto\">Kapolres mengatakan, &ldquo;Moment ini sangat penting dan dapat menguntungkan Kabupaten Toba Samosir, sebagai bentuk promosi obyek wisata di kabupaten ini, khususnya Pasput Parparean, Kecamatan Porsea, agar dikenal di dalam negeri dan mancanegara.&rdquo;</p>\r\n\r\n<p dir=\"auto\">Sebab kabupaten ini mempunyai potensi pariwisata yang pantas di nikmati oleh wisatawan, selain dari pemandangan, danaunya yang terbentuk dari letusan gunung Toba, juga tidak kalah pentingnya adat Batak yang memiliki ciri khas dengan tor &ndash; tor dan &ldquo;Dalihan Natolu&rdquo; , terang Kapolres.</p>\r\n\r\n<p dir=\"auto\">Sementara, Bupati Tobasa Darwin Siagian sangat bangga dan mendukung penuh pelaksanaan dari syuting film yang diprakarsai oleh Polda Sumatera Utara, menjadikan kabupaten ini dapat mengisi durasi film Sang Prawira.</p>\r\n\r\n<p dir=\"auto\">Harapan kita, dengan dengan film ini, dapat membantu kita dalam mempromosikan obyek wisata Kabupaten Toba Samosir. Sebab film ini nantinya akan disaksikan atau di tonton oleh masyarakat dunia.</p>\r\n\r\n<p dir=\"auto\">Sehingga nantinya seluruh dunia akan mengetahui obyek wisata yang begitu indah disertai dengan adat budaya Batak, dapat dikatakan dengan dana yang minim dapat promosikan wisata kita secara maksimal, yang nantinya disaksikan ribuan penonton film ini tentang Kabupaten Toba Samosir, terang Darwin.</p>\r\n\r\n<p dir=\"auto\">Sutradara Film Layar lebar Sang Prawira, Ponti Gea, lulusan Eropa (Swiss, Italia dan Hungaria), lokasi syuting ini, tidak terlepas dari arahan Kapolres Tobasa, AKBP Agus Waluyo SIK, disamping promosi obyek wisata Kabupaten Toba Samosir.</p>\r\n\r\n<p dir=\"auto\">Terpisah, Kepala pusat dokumentasi bidang pengkajian kebudayaan Batak Universitas HKBP Nomensen, Manguji Nababan, bahwa film ini menyajikan untuk membuat ruang kreasi kepada anak muda, guna mempertahankan nilai-nilai kebudayaan Batak serta kearifan lokal yang ada. (MC Tobasa)</p>\r\n', 'Film', 'Budaya'),
(12, 'Menelusuri Sunset di Porsea', '2020-06-03', 'Denny Abraham Sinaga', '5ee56408e0ea3.jpg', '<p>Pantai Pasir Putih Parparean menjadi salah satu tempat untuk mengejar cantiknya sunset dan mengabadikan momen-momennya. Tidak sedikit traveler yang datang ke Pantai Pasir Putih Parparean demi mengejar sunsetnya.</p>\r\n\r\n<p><br />\r\nPantai ini adalah surga yang sembunyi di tanah Parparean II, Porsea, Kabupaten Toba. Hal yang menjadi daya tariknya adalah pantai dengan pasir putih nan halus, serta pemandangan matahari pada saat terbenam yang memikat mata bagi siapapun yang melihatnya. Banyak wisatawan lokal yang sering berkunjung untuk melihat pemandangan matahari terbenam atau sunset di Pantai Pasput. Tidak hanya melihat, mereka juga kerap kali mengabadikan momen tersebut bersama&nbsp; sanak-keluarga, teman, ataupun pasangan.</p>\r\n\r\n<p>Perlahan namun pasti, matahari mulai pulang ke arah peraduannya. Semburat warna oranye pun terlihat memantul dengan air pantai membuat pemandangan di Pantai Pasput pun semakin indah. Perjuangan penelusuran sunset bagi siapapun yang berkunjung ke pantai ini tentu wajib terbayar dengan keindahannya.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Wisatawan', 'Aktivitas Wisatawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` VARCHAR(255) NOT NULL,
  `judul` VARCHAR(255) NOT NULL,
  `deskripsi` VARCHAR(255) NOT NULL,
  `gambar` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `deskripsi`, `gambar`) VALUES
('GAL001', 'Spearfishing\r\n', 'Masyarakat lokal yang sedang melakukan spearfishing atau menembak ikan. Ikan yang didapat juga sangat banyak membuktikan kualitas ekosistem yang masih bagus. ', '5ece33f5cee8f.jpg'),
('GAL002', 'Berenang', 'Wisatawan yang sedang menikmati pantai dengan melakukan kegiatan berenang.', '5ece1771d01aa.jpg'),
('GAL003', 'Seluncur!', 'Anak-anak kecil yang menikmati wahana seluncuran di lokasi pantai.', '5ece17832f380.jpg'),
('GAL004', 'Ayunan', 'Dua anak kecil yang sedang bermain dengan menggunakan wahana ayunan di pantai.', '5ece1799a6df3.jpg'),
('GAL005', 'Santai bro!', 'Wisatawan yang sedang bersantai di pondok yang disediakan pemilik pantai untuk menghibur diri dengan pemandangan pantai yang indah dan membuat hati sejuk.', '5ece17adaae86.jpg'),
('GAL006', '#Family Time', 'Wisatawan yang membawa keluarganya untuk menikmati pantai dengan berteduh di sebuah kursi sambil memesan makanan dan souvenir pantai.', '5ece17c0d1558.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` VARCHAR(255) NOT NULL,
  `nama` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
('KAT001', 'Budaya'),
('KAT002', 'Ekonomi'),
('KAT003', 'Pendidikan'),
('KAT005', 'Film'),
('KAT006', 'Wisatawan'),
('KAT007', 'Wahana'),
('KAT008', 'Produk'),
('KAT009', 'Makanan'),
('KAT010', 'Event'),
('KAT011', 'Peta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id_tag` VARCHAR(255) NOT NULL,
  `nama` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id_tag`, `nama`) VALUES
('TAG001', 'Aktivitas Wisatawan'),
('TAG002', 'Ekonomi'),
('TAG003', 'Budaya'),
('TAG004', 'Berenang'),
('TAG005', 'Spearfishing'),
('TAG006', 'Family Time'),
('TAG007', 'Swafoto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` INT(11) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `tanggal_registrasi` DATE NOT NULL,
  `status` ENUM('aktif','tidak') NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `tanggal_registrasi`, `status`) VALUES
(1, 'denny22', '9f07f2b2c077c184aeb1b0527351712a3692efea', '2020-05-01', 'aktif'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2020-05-13', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
