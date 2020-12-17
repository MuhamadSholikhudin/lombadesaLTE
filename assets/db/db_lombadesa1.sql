-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2020 pada 12.49
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lombadesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `paragraf1` text NOT NULL,
  `paragraf2` text NOT NULL,
  `tgl_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `gambar`, `paragraf1`, `paragraf2`, `tgl_buat`) VALUES
(1, 'Juata lomba denga tahun 2020', 'photo61362497808929694681.jpg', '    c', 'c', '2020-07-30'),
(2, 'Demaan juara lomba desa tahun 2020', 'WhatsApp_Image_2020-07-24_at_15_35_36.jpeg', ' asdafafadf', 'asdasdsad', '2020-07-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `no_daftar` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_buat` date NOT NULL,
  `status_daftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`no_daftar`, `judul`, `tahun`, `tgl_selesai`, `tgl_buat`, `status_daftar`) VALUES
(4, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 2020, '2020-12-10', '2020-12-16', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_ajuan`
--

CREATE TABLE `hasil_ajuan` (
  `no_hasilajuan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `no_daftar` int(11) NOT NULL,
  `tgl_ajuan` date NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status_ajuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_ajuan`
--

INSERT INTO `hasil_ajuan` (`no_hasilajuan`, `judul`, `no_daftar`, `tgl_ajuan`, `kecamatan`, `desa`, `tahun`, `status_ajuan`) VALUES
(20, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'JEKULO', 'BULUNG CANGKRING', 2020, 2),
(21, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'BAE', 'GONDANG MANIS', 2020, 2),
(22, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'DAWE', 'KANDANG MAS', 2020, 2),
(23, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'MEJOBO', 'HADIWARNO', 2020, 2),
(24, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'KALIWUNGU', 'BAKALANKRAPYAK', 2020, 2),
(25, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'GEBOG', 'BESITO', 2020, 2),
(26, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'KOTA KUDUS', 'DEMANGAN', 2020, 2),
(27, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'JATI', 'LORAM KULON', 2020, 2),
(28, 'FORM PENGAJUAN LOMBA DESA TAHUN 2020', 4, '2020-12-02', 'UNDAAN', 'UNDAAN LOR', 2020, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_lomba`
--

CREATE TABLE `jadwal_lomba` (
  `no_jadwal` int(11) NOT NULL,
  `no_hasilajuan` int(11) NOT NULL,
  `tgl_jadwal` date NOT NULL,
  `status_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_lomba`
--

INSERT INTO `jadwal_lomba` (`no_jadwal`, `no_hasilajuan`, `tgl_jadwal`, `status_jadwal`) VALUES
(23, 20, '2020-12-03', 2),
(24, 21, '2020-12-03', 2),
(25, 22, '2020-12-03', 2),
(26, 23, '2020-12-03', 2),
(27, 24, '2020-12-03', 2),
(28, 25, '2020-12-03', 2),
(29, 26, '2020-12-03', 2),
(30, 27, '2020-12-03', 2),
(31, 28, '2020-12-03', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `juara_lomba`
--

CREATE TABLE `juara_lomba` (
  `id_juara` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `juara` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `total_dadu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_penilaian`
--

CREATE TABLE `kriteria_penilaian` (
  `id_kriteria` int(11) NOT NULL,
  `judul` text NOT NULL,
  `nilai_maks` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_penilaian`
--

INSERT INTO `kriteria_penilaian` (`id_kriteria`, `judul`, `nilai_maks`, `kategori`, `tahun`) VALUES
(1, 'Pelaksanaan Musyawarah Desa->Kapan Dilaksanakan (Waktu Pelaksanaan: Lampirkan Fotocopy Data Pendukung) antara lain : =>1 : Tidak Ada, 2 : Ada', 2, 'P1', 2020),
(2, 'Peserta Musyawarah Desa, Keterwakilan unsur masyarakat->lampirkan fotocopy bukti daftar hadir notulen rapat=>1 : Tidak Ada, 2 : Ada', 2, 'P1', 2020),
(3, 'Peserta Musyawarah Desa, Keterwakilan unsur Pemerintah Desa->lampirkan fotocopy bukti daftar hadir notulen rapat=>1 : Tidak Ada, 2 : Ada', 2, 'P1', 2020),
(4, 'Adanya musyawarah perencanaan identifikasi bencana=>1 : Tidak Ada, 2 : Ada', 2, 'P2', 2020),
(5, 'Ketersediaan peta bencana beserta rambu0rambunya=>1 : Tidak Ada, 2 : Ada', 2, 'P2', 2020),
(6, 'Sosialisasi mengenai peta bencana pada masyarakat dalam waktu 2 tahun terakhir ini=>1 : Tidak Ada, 2 : Ada', 2, 'P2', 2020),
(7, 'Pengamanan Lingkungan  Dan Manusia, Kerja sama pelestarian lingkungan=>1 : Tidak Ada, 2 : Ada', 2, 'P3', 2020),
(8, 'Pengamanan Lingkungan  Dan Manusia, Kerja sama pemantauan limbah perusahaan yang ada di desa=>1 : Tidak Ada, 2 : Ada', 2, 'P3', 2020),
(9, 'Pengamanan Lingkungan  Dan Manusia, kerja sama pendaur ulangan limbah=>1 : Tidak Ada, 2 : Ada', 2, 'P3', 2020),
(10, 'Data masyarakat miskin->Data penerima manfaat   bansos rastra (cukupditunjukkan file di laptop/komputer desa)- Pengoprasian aplikasi SIKS-NG ditunjukkan oleh operator desa- FC APBDesa yang menunjukkan program /kegiatan bidang sosial - Antara lain bedah rumah, bantuan alaat bantu untuk orang difabel (cacat), santunan fakir miskin, bantuan permoddalan untuk masy.miskin dll- dokumentasi pelaksanaaan kegiatan yg dimaksud=>1 : Tidak Ada, 2 : Ada', 2, 'P11', 2020),
(11, 'Program penanggulangan kemiskinan=>1 : Tidak Ada, 2 : Ada', 2, 'P11', 2020),
(12, 'Penyusunan Analisis Kebutuhan Peningkatan Kkapasitas Masyarakat->Fc APBDesa yg menunjukkan kegiatan pelatihan, pemberian ketrampilan, sosialisasi/FGD pembahasan peningkatan kapasitas masyarakat- Dokumentasi pelaksanaan=>1 : Tidak Ada, 2 : Ada', 2, 'P11', 2020),
(13, 'Jumlah kematian bayi->Buku data/catatan kelahiran bayi;Buku Data/ Catatan kematian=>1 : Penurunan < 10% Dari Tahun Sebelumnya, 4 : Penurunan > 10% Dari Tahun Sebelumnya', 4, 'P10', 2020),
(14, 'Jumlah balita gizi buruk->Buku data/catatan kelahiran bayi;Buku Data/ Catatan kematian=>1 : Penurunan < 10% Dari Tahun Sebelumnya, 2 : Penurunan > 10% Dari Tahun Sebelumnya', 2, 'P10', 2020),
(15, 'jumlah balita meninggal->Buku data/catatan balita meninggal=>2 : Kurang Dari 1%, 1 : Lebih Dari 1%', 2, 'P10', 2020),
(16, 'Penduduk yang tidak bisa baca tulis=>4 : Tidak Ada, 1 : Ada', 4, 'P9', 2020),
(17, 'Jumlah penduduk tidak tamat SD/sederajat=>4 : < 1%, 1 : > 1%', 4, 'P9', 2020),
(18, 'Jumlah penduduk tidak tamat SLTP/sederajat=>4 : < 1%, 1 : > 1%', 4, 'P9', 2020),
(19, 'Adanya produk unggulan->Lampirkan foto produk unggulan dan beri ilustrasi singkat.=>1 : Tidak Ada, 2 : Ada', 2, 'P8', 2020),
(20, 'Adanya Peran pemerintah dalam mengelola produk unggulan->Sebutkan kegiatan pembinaan/pendampingan yang telah dilakukan;Lampirkan daftar hadir dan dokumentasinya.=>1 : Tidak Ada, 2 : Ada', 2, 'P8', 2020),
(21, 'Adanya keuntungan finansial untuk dari aktivitas ekonomi produktif->Data pendapatan riil keluarga (data pendapatan per kapita pada daftar isian data perkembangan desa).=>1 : Tidak Ada, 2 : Ada', 2, 'P8', 2020),
(22, 'Pelestarian Adat dan Budaya, Pembinaan Partisipasi masyarakat dalam pelestarian adat dan budaya=>1 : Tidak Ada, 2 : Ada', 2, 'P7', 2020),
(23, 'Pelestarian Adat dan Budaya, keterlibatan kelembagaan adat dalam pelestarian adat dan budaya=>1 : Tidak Ada, 2 : Ada', 2, 'P7', 2020),
(24, 'Pelestarian Adat dan Budaya, Pembinaan seni budaya setempat->Oleh Siapa, sebutkan=>1 : Tidak Ada, 2 : Ada', 2, 'P7', 2020),
(25, 'Ketersediaan sistem teknologi informasi berbasis internet Jaringan Internet->Lampirkan Screenshoot koneksi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(26, 'Ketersediaan sistem teknologi informasi berbasis internet Website Desa->Lampirkan Screenshoot koneksi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(27, 'Perangkat komputer Software dengan spesifikasi minimal untuk operasi jaringan internet->Lampirkan Screenshoot koneksi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(28, 'Strategi dalam pemberdayaan masyarakat perencanaan pembangunan partidipatif masyarakat (P3MD)(Khusus diisi desa)->Lampirkan dokumen : =>1 : Tidak Ada, 2 : Ada', 2, 'P5', 2020),
(29, 'Strategi dalam pemberdayaan masyarakat Peningkatan kapasitas kelompok masyarakat tahun terakhir->Lampirkan dokumen :=>1 : Tidak Ada, 2 : Ada', 2, 'P5', 2020),
(30, 'Strategi dalam pemberdayaan masyarakat Fasilitas dalam pemasaran produk unggulan dari masyarakat->Lampirkan dokumen :=>1 : Tidak Ada, 2 : Ada', 2, 'P5', 2020),
(31, 'Materi yang dibahas di Musyawarah Desa Penataan Desa->Lampirkan fotocopy dokumen :Perdes tentang penataan desa=>1 : Tidak Ada 2 : Ada', 2, 'P4', 2020),
(32, 'Materi yang dibahas di Musyawarah Desa Perencanaan pembangunan desa->Lampirkan fotocopy dokumen :Perdes tentang penataan desa=>1 : Tidak Ada 2 : Ada', 2, 'P4', 2020),
(33, 'Materi yang dibahas di Musyawarah Desa Peraturan Desa tentang RPJMDesa->Lampirkan fotocopy dokumen :Perdes tentang penataan desa=>1 : Tidak Ada 2 : Ada', 2, 'P4', 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `telepon`) VALUES
('Muhamad Sh', '201753117', 'Kudus', '08976535375');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `dadu1` int(11) NOT NULL,
  `dadu2` int(11) NOT NULL,
  `no_jadwal` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nilai1`, `nilai2`, `dadu1`, `dadu2`, `no_jadwal`, `id_kriteria`, `nama`, `tahun`) VALUES
(1, 2, 2, 3, 3, 23, 1, 'A. KRISTIANUS MARYONO', 2020),
(2, 1, 1, 4, 0, 23, 2, 'A. KRISTIANUS MARYONO', 2020),
(3, 2, 2, 5, 2, 23, 3, 'A. KRISTIANUS MARYONO', 2020),
(4, 2, 2, 3, 3, 24, 1, 'A. KRISTIANUS MARYONO', 2020),
(5, 2, 0, 4, 0, 24, 2, 'A. KRISTIANUS MARYONO', 2020),
(6, 1, 2, 1, 5, 24, 3, 'A. KRISTIANUS MARYONO', 2020),
(7, 0, 2, 0, 4, 25, 1, 'A. KRISTIANUS MARYONO', 2020),
(8, 2, 1, 5, 4, 25, 2, 'A. KRISTIANUS MARYONO', 2020),
(9, 1, 0, 2, 0, 25, 3, 'A. KRISTIANUS MARYONO', 2020),
(10, 2, 2, 5, 5, 26, 1, 'A. KRISTIANUS MARYONO', 2020),
(11, 1, 2, 1, 5, 26, 2, 'A. KRISTIANUS MARYONO', 2020),
(12, 2, 2, 4, 5, 26, 3, 'A. KRISTIANUS MARYONO', 2020),
(13, 2, 2, 5, 5, 27, 1, 'A. KRISTIANUS MARYONO', 2020),
(14, 2, 2, 5, 5, 27, 2, 'A. KRISTIANUS MARYONO', 2020),
(15, 2, 2, 5, 5, 27, 3, 'A. KRISTIANUS MARYONO', 2020),
(16, 1, 2, 3, 5, 28, 1, 'A. KRISTIANUS MARYONO', 2020),
(17, 2, 1, 3, 0, 28, 2, 'A. KRISTIANUS MARYONO', 2020),
(18, 2, 2, 4, 3, 28, 3, 'A. KRISTIANUS MARYONO', 2020),
(19, 2, 2, 3, 5, 29, 1, 'A. KRISTIANUS MARYONO', 2020),
(20, 1, 2, 2, 4, 29, 2, 'A. KRISTIANUS MARYONO', 2020),
(21, 1, 2, 2, 4, 29, 3, 'A. KRISTIANUS MARYONO', 2020),
(22, 2, 1, 4, 1, 30, 1, 'A. KRISTIANUS MARYONO', 2020),
(23, 2, 2, 3, 5, 30, 2, 'A. KRISTIANUS MARYONO', 2020),
(24, 2, 2, 5, 3, 30, 3, 'A. KRISTIANUS MARYONO', 2020),
(25, 1, 2, 2, 4, 31, 1, 'A. KRISTIANUS MARYONO', 2020),
(26, 1, 2, 1, 4, 31, 2, 'A. KRISTIANUS MARYONO', 2020),
(27, 2, 2, 5, 4, 31, 3, 'A. KRISTIANUS MARYONO', 2020),
(28, 2, 2, 4, 3, 23, 4, 'ABDUL SUNARNO', 2020),
(29, 1, 1, 0, 0, 23, 5, 'ABDUL SUNARNO', 2020),
(30, 2, 2, 5, 2, 23, 6, 'ABDUL SUNARNO', 2020),
(31, 1, 2, 0, 3, 23, 7, 'ACHMAD NASOKAH', 2020),
(32, 1, 2, 0, 5, 23, 8, 'ACHMAD NASOKAH', 2020),
(33, 1, 1, 0, 0, 23, 9, 'ACHMAD NASOKAH', 2020),
(34, 2, 2, 2, 5, 24, 4, 'ABDUL SUNARNO', 2020),
(35, 1, 2, 0, 4, 24, 5, 'ABDUL SUNARNO', 2020),
(36, 2, 1, 3, 0, 24, 6, 'ABDUL SUNARNO', 2020),
(37, 2, 2, 2, 3, 25, 4, 'ABDUL SUNARNO', 2020),
(38, 1, 2, 0, 5, 25, 5, 'ABDUL SUNARNO', 2020),
(39, 2, 1, 3, 0, 25, 6, 'ABDUL SUNARNO', 2020),
(40, 1, 2, 0, 2, 26, 4, 'ABDUL SUNARNO', 2020),
(41, 1, 2, 0, 3, 26, 5, 'ABDUL SUNARNO', 2020),
(42, 1, 2, 0, 3, 26, 6, 'ABDUL SUNARNO', 2020),
(43, 1, 1, 0, 0, 27, 4, 'ABDUL SUNARNO', 2020),
(44, 1, 1, 0, 0, 27, 5, 'ABDUL SUNARNO', 2020),
(45, 1, 1, 0, 0, 27, 6, 'ABDUL SUNARNO', 2020),
(46, 1, 1, 0, 0, 28, 4, 'ABDUL SUNARNO', 2020),
(47, 2, 2, 3, 4, 28, 5, 'ABDUL SUNARNO', 2020),
(48, 2, 2, 3, 4, 28, 6, 'ABDUL SUNARNO', 2020),
(49, 1, 1, 0, 0, 29, 4, 'ABDUL SUNARNO', 2020),
(50, 2, 2, 2, 1, 29, 5, 'ABDUL SUNARNO', 2020),
(51, 2, 1, 4, 0, 29, 6, 'ABDUL SUNARNO', 2020),
(52, 1, 1, 0, 0, 30, 4, 'ABDUL SUNARNO', 2020),
(53, 1, 1, 0, 0, 30, 5, 'ABDUL SUNARNO', 2020),
(54, 1, 2, 0, 5, 30, 6, 'ABDUL SUNARNO', 2020),
(55, 2, 2, 4, 5, 31, 4, 'ABDUL SUNARNO', 2020),
(56, 1, 2, 0, 3, 31, 5, 'ABDUL SUNARNO', 2020),
(57, 2, 2, 4, 4, 31, 6, 'ABDUL SUNARNO', 2020),
(58, 1, 1, 0, 0, 24, 7, 'ACHMAD NASOKAH', 2020),
(59, 2, 2, 5, 3, 24, 8, 'ACHMAD NASOKAH', 2020),
(60, 1, 2, 0, 4, 24, 9, 'ACHMAD NASOKAH', 2020),
(61, 2, 1, 3, 0, 25, 7, 'ACHMAD NASOKAH', 2020),
(62, 1, 2, 0, 4, 25, 8, 'ACHMAD NASOKAH', 2020),
(63, 2, 1, 4, 0, 25, 9, 'ACHMAD NASOKAH', 2020),
(64, 2, 1, 3, 0, 26, 7, 'ACHMAD NASOKAH', 2020),
(65, 2, 2, 5, 3, 26, 8, 'ACHMAD NASOKAH', 2020),
(66, 1, 2, 0, 5, 26, 9, 'ACHMAD NASOKAH', 2020),
(67, 2, 1, 4, 0, 27, 7, 'ACHMAD NASOKAH', 2020),
(68, 2, 1, 4, 0, 27, 8, 'ACHMAD NASOKAH', 2020),
(69, 2, 1, 4, 0, 27, 9, 'ACHMAD NASOKAH', 2020),
(70, 1, 0, 0, 0, 28, 7, 'ACHMAD NASOKAH', 2020),
(71, 1, 1, 0, 0, 28, 8, 'ACHMAD NASOKAH', 2020),
(72, 2, 0, 3, 0, 28, 9, 'ACHMAD NASOKAH', 2020),
(73, 1, 1, 0, 0, 29, 7, 'ACHMAD NASOKAH', 2020),
(74, 1, 1, 0, 0, 29, 8, 'ACHMAD NASOKAH', 2020),
(75, 1, 1, 0, 0, 29, 9, 'ACHMAD NASOKAH', 2020),
(76, 2, 0, 3, 0, 30, 7, 'ACHMAD NASOKAH', 2020),
(77, 1, 2, 0, 5, 30, 8, 'ACHMAD NASOKAH', 2020),
(78, 1, 1, 0, 0, 30, 9, 'ACHMAD NASOKAH', 2020),
(79, 2, 2, 5, 5, 31, 7, 'ACHMAD NASOKAH', 2020),
(80, 2, 2, 5, 5, 31, 8, 'ACHMAD NASOKAH', 2020),
(81, 2, 2, 5, 5, 31, 9, 'ACHMAD NASOKAH', 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hakakses` int(11) NOT NULL,
  `penempatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama`, `hakakses`, `penempatan`) VALUES
(1, 'STAF PMD', '123', 'STAF PMD', 2, 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA'),
(2, 'MEJOBO', '123', 'KECAMATAN MEJOBO', 3, 'MEJOBO'),
(3, 'JEKULO', '123', 'KECAMATAN JEKULO', 3, 'JEKULO'),
(4, 'DAWE', '123', 'KECAMATAN DAWE', 3, 'DAWE'),
(5, 'BAE', '123', 'KECAMATAN BAE', 3, 'BAE'),
(6, 'KOTA KUDUS', '123', 'KECAMATAN KOTA KUDUS', 3, 'KOTA KUDUS'),
(7, 'JATI', '123', 'KECAMATAN JATI', 3, 'JATI'),
(8, 'KALIWUNGU', '123', 'KECAMATAN KALIWUNGU', 3, 'KALIWUNGU'),
(9, 'UNDAAN', '123', 'KECAMATAN UNDAAN', 3, 'UNDAAN'),
(10, 'GEBOG', '123', 'KECAMATAN GEBOG', 3, 'GEBOG'),
(11, 'TENAGA AHLI', '123', 'KHOSIM', 1, 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA'),
(12, 'ADMIN SEKDA', '123', 'BAJIRUT', 4, 'SEKDA KUDUS'),
(16, '196307211989021001', '123', 'A. KRISTIANUS MARYONO', 5, 'P1'),
(17, '197505032007011001', '123', 'ABDUL SUNARNO', 5, 'P2'),
(18, '197405272007011002', '123', 'ACHMAD NASOKAH', 5, 'P3'),
(19, '196602151989021001', '123', 'ACHRONI', 5, 'P4'),
(20, '197706221999031009', '123', 'ADANG KURNIAWAN, S.T.', 5, 'P5'),
(21, '196803011989021001', '123', 'ADI KUSMANTO', 5, 'P6'),
(22, '196708171990031005', '123', 'AGUS HARYONO PUTRO', 5, 'P7'),
(23, '197803261999031003', '123', 'AHMAD BUSYAIRUDDIN', 5, 'P8'),
(24, '198108032005012001', '123', 'ANYS SURYANING FITRIYATI, A.Md. ', 5, 'P9'),
(25, '198501052009121002', '123', 'ARI MURSANDHI, A.Md.', 5, 'P10'),
(26, '196201201988031002', '123', 'BUDIYONO', 5, 'P11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `kode_wilayah` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`kode_wilayah`, `kecamatan`, `desa`) VALUES
(1, 'JEKULO', 'BULUNG CANGKRING'),
(2, 'JEKULO', 'PLADEN'),
(3, 'MEJOBO', 'JEPANG PAKIS'),
(4, 'MEJOBO', 'TENGGELES'),
(5, 'KALIWUNGU', 'BAKALANKRAPYAK'),
(6, 'KALIWUNGU', 'PRAMBATAN KIDUL'),
(7, 'KALIWUNGU', 'PRAMBATAN LOR'),
(8, 'KALIWUNGU', 'GARUNG KIDUL'),
(9, 'KALIWUNGU', 'SETROKALANGAN'),
(10, 'KALIWUNGU', 'BANGET'),
(11, 'KALIWUNGU', 'BLIMBING KIDUL'),
(12, 'KALIWUNGU', 'SIDOREKSO'),
(13, 'KALIWUNGU', 'GAMONG'),
(14, 'KALIWUNGU', 'KEDUNGDOWO'),
(15, 'KALIWUNGU', 'GARUNG LOR'),
(16, 'KALIWUNGU', 'KARANGAMPEL'),
(17, 'KALIWUNGU', 'MIJEN'),
(18, 'KALIWUNGU', 'KALIWUNGU'),
(19, 'KALIWUNGU', 'PAPRINGAN'),
(20, 'KOTA KUDUS', 'JANGGALAN'),
(21, 'KOTA KUDUS', 'DEMANGAN'),
(22, 'KOTA KUDUS', 'MLATI LOR'),
(23, 'KOTA KUDUS', 'NGANGUK'),
(24, 'KOTA KUDUS', 'KRAMAT'),
(25, 'KOTA KUDUS', 'DEMAAN'),
(26, 'KOTA KUDUS', 'LANGGARDALEM'),
(27, 'KOTA KUDUS', 'KAUMAN'),
(28, 'KOTA KUDUS', 'DAMARAN'),
(29, 'KOTA KUDUS', 'KRANDON'),
(30, 'KOTA KUDUS', 'SINGOCANDI'),
(31, 'KOTA KUDUS', 'GLANTENGAN'),
(32, 'KOTA KUDUS', 'KALIPUTU'),
(33, 'KOTA KUDUS', 'BARONGAN'),
(34, 'KOTA KUDUS', 'BURIKAN'),
(35, 'KOTA KUDUS', 'RENDENG'),
(36, 'JATI', 'JETIS KAPUAN'),
(37, 'JATI', 'TANJUNG KARANG'),
(38, 'JATI', 'JATI WETAN'),
(39, 'JATI', 'PASURUAN KIDUL'),
(40, 'JATI', 'PASURUAN LOR'),
(41, 'JATI', 'PLOSO'),
(42, 'JATI', 'JATI KULON'),
(43, 'JATI', 'GETAS PEJATEN'),
(44, 'JATI', 'LORAM KULON'),
(45, 'JATI', 'LORAM WETAN'),
(46, 'JATI', 'JEPANG PAKIS'),
(47, 'JATI', 'MEGAWON'),
(48, 'JATI', 'NGEMBAL KULON'),
(49, 'JATI', 'TUMPANG KRASAK'),
(50, 'UNDAAN', 'WONOSOCO'),
(51, 'UNDAAN', 'LAMBANGAN'),
(52, 'UNDAAN', 'KALIREJO'),
(53, 'UNDAAN', 'MEDINI'),
(54, 'UNDAAN', 'SAMBUNG'),
(55, 'UNDAAN', 'GLAGAHWARU'),
(56, 'UNDAAN', 'KUTUK'),
(57, 'UNDAAN', 'UNDAAN KIDUL'),
(58, 'UNDAAN', 'UNDAAN TENGAH'),
(59, 'UNDAAN', 'KARANG ROWO'),
(60, 'UNDAAN', 'LARIKREJO'),
(61, 'UNDAAN', 'UNDAAN LOR'),
(62, 'UNDAAN', 'WATES'),
(63, 'UNDAAN', 'NGEMPLAK'),
(64, 'UNDAAN', 'TERANGMAS'),
(65, 'UNDAAN', 'BERUGENJANG'),
(66, 'MEJOBO', 'GULANG'),
(67, 'MEJOBO', 'JEPANG'),
(68, 'MEJOBO', 'PAYAMAN'),
(69, 'MEJOBO', 'KIRIG'),
(70, 'MEJOBO', 'TEMULUS'),
(71, 'MEJOBO', 'KESAMBI'),
(72, 'MEJOBO', 'JOJO'),
(73, 'MEJOBO', 'HADIWARNO'),
(74, 'MEJOBO', 'MEJOBO'),
(75, 'MEJOBO', 'GOLANTEPUS'),
(76, 'MEJOBO', 'TENGGELES'),
(77, 'JEKULO', 'SADANG'),
(78, 'JEKULO', 'BULUNG CANGKRING'),
(79, 'JEKULO', 'BULUNG KULON'),
(80, 'JEKULO', 'SIDOMULYO'),
(81, 'JEKULO', 'GONDOHARUM'),
(82, 'JEKULO', 'TERBAN'),
(83, 'JEKULO', 'PLADEN'),
(84, 'JEKULO', 'KLALING'),
(85, 'JEKULO', 'JEKULO'),
(86, 'JEKULO', 'HADIPOLO'),
(87, 'JEKULO', 'HONGGOSOCO'),
(88, 'JEKULO', 'TANJUNG REJO'),
(89, 'BAE', 'DERSALAM'),
(90, 'BAE', 'NGEMBAL REJO'),
(91, 'BAE', 'KARANG BENER'),
(92, 'BAE', 'GONDANG MANIS'),
(93, 'BAE', 'PEDAWANG'),
(94, 'BAE', 'BACIN'),
(95, 'BAE', 'PANJANG'),
(96, 'BAE', 'PEGANJARAN'),
(97, 'BAE', 'PURWOREJO'),
(98, 'BAE', 'BAE'),
(99, 'GEBOG', 'GRIBIG'),
(100, 'GEBOG', 'KLUMPIT'),
(101, 'GEBOG', 'GETASRABI'),
(102, 'GEBOG', 'PADURENAN'),
(103, 'GEBOG', 'KARANG MALANG'),
(104, 'GEBOG', 'BESITO'),
(105, 'GEBOG', 'JURANG'),
(106, 'GEBOG', 'GONDOSARI'),
(107, 'GEBOG', 'KEDUNG SARI'),
(108, 'GEBOG', 'MENAWAN'),
(109, 'GEBOG', 'RAHTAWU'),
(110, 'DAWE', 'SAMIREJO'),
(111, 'DAWE', 'CENDONO'),
(112, 'DAWE', 'MARGOREJO'),
(113, 'DAWE', 'REJOSARI'),
(114, 'DAWE', 'KANDANG MAS'),
(115, 'DAWE', 'GLAGAH KULON'),
(116, 'DAWE', 'TERGO'),
(117, 'DAWE', 'CRANGGANG'),
(118, 'DAWE', 'LAU'),
(119, 'DAWE', 'PIJI'),
(120, 'DAWE', 'PUYOH'),
(121, 'DAWE', 'SOCO'),
(122, 'DAWE', 'TERNADI'),
(123, 'DAWE', 'KAJAR'),
(124, 'DAWE', 'KUWUKAN'),
(125, 'DAWE', 'DUKUH WARINGIN'),
(126, 'DAWE', 'JAPAN'),
(127, 'DAWE', 'COLO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indeks untuk tabel `hasil_ajuan`
--
ALTER TABLE `hasil_ajuan`
  ADD PRIMARY KEY (`no_hasilajuan`),
  ADD KEY `no_daftar` (`no_daftar`);

--
-- Indeks untuk tabel `jadwal_lomba`
--
ALTER TABLE `jadwal_lomba`
  ADD PRIMARY KEY (`no_jadwal`),
  ADD KEY `no_hasilajuan` (`no_hasilajuan`);

--
-- Indeks untuk tabel `juara_lomba`
--
ALTER TABLE `juara_lomba`
  ADD PRIMARY KEY (`id_juara`);

--
-- Indeks untuk tabel `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `no_jadwal` (`no_jadwal`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`kode_wilayah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `hasil_ajuan`
--
ALTER TABLE `hasil_ajuan`
  MODIFY `no_hasilajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `jadwal_lomba`
--
ALTER TABLE `jadwal_lomba`
  MODIFY `no_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `juara_lomba`
--
ALTER TABLE `juara_lomba`
  MODIFY `id_juara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `kode_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_ajuan`
--
ALTER TABLE `hasil_ajuan`
  ADD CONSTRAINT `hasil_ajuan_ibfk_1` FOREIGN KEY (`no_daftar`) REFERENCES `daftar` (`no_daftar`);

--
-- Ketidakleluasaan untuk tabel `jadwal_lomba`
--
ALTER TABLE `jadwal_lomba`
  ADD CONSTRAINT `jadwal_lomba_ibfk_1` FOREIGN KEY (`no_hasilajuan`) REFERENCES `hasil_ajuan` (`no_hasilajuan`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria_penilaian` (`id_kriteria`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`no_jadwal`) REFERENCES `jadwal_lomba` (`no_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
