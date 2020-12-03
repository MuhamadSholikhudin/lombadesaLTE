-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 05.10
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
(3, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 2020, '2020-08-02', '2020-07-31', 0);

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
(10, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'JEKULO', 'BULUNG CANGKRING', 2020, 2),
(11, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'MEJOBO', 'JEPANG PAKIS', 2020, 2),
(12, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'DAWE', 'SAMIREJO', 2020, 2),
(13, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'BAE', 'DERSALAM', 2020, 2),
(14, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'KALIWUNGU', 'BAKALANKRAPYAK', 2020, 2),
(15, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'JATI', 'JETIS KAPUAN', 2020, 2),
(16, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'KOTA KUDUS', 'JANGGALAN', 2020, 2),
(17, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'GEBOG', 'GRIBIG', 2020, 2),
(18, 'PENDAFTARAN LOMBA DESA KABUPATEN KUDUS TH 2020', 3, '2020-07-31', 'UNDAAN', 'WONOSOCO', 2020, 2);

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
(12, 18, '2020-09-20', 2),
(13, 10, '2020-09-20', 2),
(14, 11, '2020-09-20', 2),
(15, 12, '2020-09-20', 2),
(16, 13, '2020-09-20', 2),
(17, 14, '2020-09-20', 2),
(18, 15, '2020-09-20', 2),
(19, 16, '2020-09-20', 2),
(20, 17, '2020-09-20', 2);

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

--
-- Dumping data untuk tabel `juara_lomba`
--

INSERT INTO `juara_lomba` (`id_juara`, `tahun`, `kecamatan`, `desa`, `juara`, `total_nilai`, `total_dadu`) VALUES
(1, 2020, 'JEKULO', 'BULUNG CANGKRING', 1, 48, 20);

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
(4, 'Peserta Musyawarah Desa, Keterwakilan Badan Permusyawarahan Desa->lampirkan fotocopy bukti daftar hadir notulen rapat=>1 : Tidak Ada, 2 : Ada', 2, 'P1', 2020),
(5, 'Peserta Musyawarah Desa, Waktu pelaksanaan Musyawarah Perencanaan Pembangunan Desa=>1 : setelah bulan juni tahun berjalan, 2 : sampai dengan bulan juni tahun berjalan', 2, 'P1', 2020),
(6, 'Musyawarah Dusun, Partisipasi Masyarakat=>1 : Tidak Ada, 5 : Ada', 5, 'P1', 2020),
(7, 'Musyawarah Dusun, Rasio Laki-Laki Dan Perempuan=>1 : Tidak Seimbang, 3 : Seimbang', 3, 'P1', 2020),
(8, 'Swadaya Masyarakat Untuk Pembangunan Sarana Prasarana Desa 2 Tahun Terakhir, Partisipasi Pendanaan Masyarakat=>1 : Tidak Ada, 2 : Ada', 2, 'P1', 2020),
(9, 'Swakelola Masyarakat Untuk Pembangunan Sarana Prasarana Desa 2 Tahun Terakhir, Partisipasi Pengelolaan Pembangunan oleh Masyarakat=>1 : Tidak Ada Tim Pengelola Kegiatan, 2 : Ada Tim Pengelola Kegiatan', 2, 'P1', 2020),
(10, 'Gotong Royong Penduduk Desa 2 Tahun Terakhir, Aktifitas Gotong Royong Penduduk=>1 : Tidak Ada, 4 : Ada', 4, 'P1', 2020),
(11, 'Ketersediaan sistem teknologi informasi berbasis internet Jaringan Internet->Lampirkan Screenshoot koneksi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(12, 'Ketersediaan sistem teknologi informasi berbasis internet Website Desa->Lampirkan Screenshoot koneksi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(13, 'Perangkat komputer Software dengan spesifikasi minimal untuk operasi jaringan internet->Lampirkan Screenshoot koneksi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(14, 'Perangkat komputer Hardware dengan spesifikasi minimal untuk operasi jaringan internet->Lampirkan Spek Komputer=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(15, 'Administrasi Berbasis Teknologi Informasi Adimistrasi Umum->Lampirkan Screenshoot=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(16, 'Administrasi Berbasis Teknologi Informasi Adimistrasi kependudukan->Lampirkan Screenshoot=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(17, 'Administrasi Berbasis Teknologi Informasi Adimistrasi Keuangan->Lampirkan Screenshoot koneksi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(18, 'Administrasi Berbasis Teknologi Informasi Adimistrasi BPD (khusus diisi oleh desa)->Lampirkan Screenshoot=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(19, 'Administrasi Berbasis Teknologi Informasi Adimistrasi pembangunan->Lampirkan Screenshoot=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(20, 'Administrasi Berbasis Teknologi Informasi Adimistrasi Lainnya->Lampirkan Screenshoot=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(21, 'Perangkat mengelola teknologi informasi->Lampirkan Surat Tugas=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(22, 'Tersedia tokoh pemuda teknopreneur di tingkat RT/RW->Lampirkan Kepengurusan=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(23, 'Perpustakaan online->Lampirkan Screenshoot Aplikasi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(24, 'Internet gratis/Hotspot->Lampirkan Foto wifi/koneksi wifi=>1 : Tidak Ada, 2 : Ada', 2, 'P6', 2020),
(25, 'Jumlah kematian bayi->Buku data/catatan kelahiran bayi;Buku Data/ Catatan kematian=>1 : Penurunan < 10% Dari Tahun Sebelumnya, 4 : Penurunan > 10% Dari Tahun Sebelumnya', 4, 'P10', 2020),
(26, 'Jumlah balita gizi buruk->Buku data/catatan kelahiran bayi;Buku Data/ Catatan kematian=>1 : Penurunan < 10% Dari Tahun Sebelumnya, 2 : Penurunan > 10% Dari Tahun Sebelumnya', 2, 'P10', 2020),
(27, 'jumlah balita meninggal->Buku data/catatan balita meninggal=>2 : Kurang Dari 1%, 1 : Lebih Dari 1%', 2, 'P10', 2020),
(28, 'Posyandu Keberadaan Posyandu->Buku/data baseline Posyandu per Desa lengkap (semua Posyandu yang ada di Desa berdasarkan strata=>1 : Tidak Ada, 4 : Ada', 4, 'P10', 2020),
(29, 'Posyandu Kelembagaan->SK Pokja Posyandu;Data Posyandu berdasarkan strata=>1 : Pratama, 4 : Di Atas Pratama', 4, 'P10', 2020),
(30, 'Posyandu Jumlah RT Pengguna Sumber Air Lainnya->Ada data kesehatan lingkungan lengkap=>1 : Tidak Ada, 2 : Ada', 2, 'P10', 2020),
(31, 'Kepemilikan Jamban Dalam Rumah Tangga (RT) Total RT  mempunyai jamban/WC sendiri->Data jumlah rumah tangga yang mempunyai jamban/WC sendiri=>1 : Menurun, 2 : Tetap, 3 : Meningkat', 3, 'P10', 2020),
(32, 'Kepemilikan Jamban Dalam Rumah Tangga (RT) Total RT yang tidak memiliki jamban/WC sendiri->Data jumlah rumah tangga yang tidak memiliki jamban/WC sendiri=>3 : Menurun, 2 : Tetap, 1 : Meningkat', 3, 'P10', 2020),
(33, 'Kepemilikan Jamban Dalam Rumah Tangga (RT) Total RT pengguna MCK umum->Data rumah tangga yang pengguna MCK umum=>1 : Menurun, 2 : Tetap, 3 : Meningkat', 3, 'P10', 2020),
(34, 'Kepemilikan Jamban Dalam Rumah Tangga (RT) Total RT pengguna MCK di sungai/kali->Data rumah tangga pengguna MCK disungai/kali=>3 : Menurun, 2 : Tetap, 1 : Meningkat', 3, 'P10', 2020),
(35, 'Kepemilikan Jamban Dalam Rumah Tangga (RT) Total RT yang tidak mendapat air bersih->Data rumah tangga yang tidak mendapat air bersih=>3 : Menurun, 2 : Tetap, 1 : Meningkat', 2, 'P10', 2020),
(36, 'Puskesmas/balai pengobatan=>1 : Tidak Ada, 2 : Ada', 2, 'P10', 2020),
(37, 'Fasilitas Kesehatan Lingkungan Bidan/mantri/Dokter=>1 : Tidak Ada, 2 : Ada', 2, 'P10', 2020),
(38, 'Fasilitas Kesehatan Lingkungan Jamban Keluarga/MCK=>1 : Tidak Ada, 2 : Ada', 2, 'P10', 2020);

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
(1, 1, 1, 1, 1, 13, 1, 'AGUS', 2020),
(2, 1, 1, 1, 1, 13, 2, 'AGUS', 2020),
(3, 1, 1, 1, 1, 13, 3, 'AGUS', 2020),
(4, 1, 1, 1, 1, 13, 4, 'AGUS', 2020),
(5, 1, 1, 1, 1, 13, 5, 'AGUS', 2020),
(6, 1, 1, 1, 1, 13, 6, 'AGUS', 2020),
(7, 1, 1, 1, 1, 13, 7, 'AGUS', 2020),
(8, 1, 1, 1, 1, 13, 8, 'AGUS', 2020),
(9, 1, 1, 1, 1, 13, 9, 'AGUS', 2020),
(10, 1, 1, 1, 1, 13, 10, 'AGUS', 2020),
(11, 1, 2, 1, 2, 14, 1, 'AGUS', 2020),
(12, 1, 2, 1, 2, 14, 2, 'AGUS', 2020),
(13, 1, 2, 1, 2, 14, 3, 'AGUS', 2020),
(14, 1, 2, 1, 2, 14, 4, 'AGUS', 2020),
(15, 1, 2, 1, 3, 14, 5, 'AGUS', 2020),
(16, 1, 2, 1, 2, 14, 6, 'AGUS', 2020),
(17, 1, 2, 1, 2, 14, 7, 'AGUS', 2020),
(18, 1, 2, 1, 2, 14, 8, 'AGUS', 2020),
(19, 1, 2, 1, 4, 14, 9, 'AGUS', 2020),
(20, 1, 3, 1, 2, 14, 10, 'AGUS', 2020),
(21, 1, 1, 1, 2, 15, 1, 'AGUS', 2020),
(22, 1, 1, 1, 2, 15, 2, 'AGUS', 2020),
(23, 1, 1, 1, 3, 15, 3, 'AGUS', 2020),
(24, 1, 2, 1, 4, 15, 4, 'AGUS', 2020),
(25, 1, 2, 1, 1, 15, 5, 'AGUS', 2020),
(26, 1, 2, 1, 5, 15, 6, 'AGUS', 2020),
(27, 1, 1, 1, 1, 15, 7, 'AGUS', 2020),
(28, 1, 2, 1, 1, 15, 8, 'AGUS', 2020),
(29, 1, 2, 1, 3, 15, 9, 'AGUS', 2020),
(30, 0, 0, 1, 2, 15, 10, 'AGUS', 2020),
(31, 1, 2, 1, 2, 16, 1, 'AGUS', 2020),
(32, 1, 2, 2, 3, 16, 2, 'AGUS', 2020),
(33, 1, 2, 1, 3, 16, 3, 'AGUS', 2020),
(34, 2, 2, 3, 2, 16, 4, 'AGUS', 2020),
(35, 2, 1, 2, 1, 16, 5, 'AGUS', 2020),
(36, 3, 1, 3, 3, 16, 6, 'AGUS', 2020),
(37, 3, 1, 4, 2, 16, 7, 'AGUS', 2020),
(38, 2, 1, 2, 2, 16, 8, 'AGUS', 2020),
(39, 2, 1, 3, 3, 16, 9, 'AGUS', 2020),
(40, 2, 1, 4, 1, 16, 10, 'AGUS', 2020),
(41, 2, 2, 4, 5, 17, 1, 'AGUS', 2020),
(42, 2, 2, 3, 4, 17, 2, 'AGUS', 2020),
(43, 1, 2, 1, 3, 17, 3, 'AGUS', 2020),
(44, 2, 2, 4, 4, 17, 4, 'AGUS', 2020),
(45, 1, 2, 1, 2, 17, 5, 'AGUS', 2020),
(46, 2, 1, 1, 1, 17, 6, 'AGUS', 2020),
(47, 1, 2, 1, 5, 17, 7, 'AGUS', 2020),
(48, 1, 1, 2, 1, 17, 8, 'AGUS', 2020),
(49, 2, 2, 3, 5, 17, 9, 'AGUS', 2020),
(50, 2, 1, 3, 2, 17, 10, 'AGUS', 2020),
(51, 2, 2, 4, 2, 18, 1, 'AGUS', 2020),
(52, 1, 1, 2, 1, 18, 2, 'AGUS', 2020),
(53, 2, 1, 4, 1, 18, 3, 'AGUS', 2020),
(54, 2, 2, 5, 5, 18, 4, 'AGUS', 2020),
(55, 1, 2, 1, 4, 18, 5, 'AGUS', 2020),
(56, 2, 3, 3, 3, 18, 6, 'AGUS', 2020),
(57, 1, 1, 1, 1, 18, 7, 'AGUS', 2020),
(58, 2, 1, 3, 1, 18, 8, 'AGUS', 2020),
(59, 1, 2, 1, 3, 18, 9, 'AGUS', 2020),
(60, 2, 2, 4, 4, 18, 10, 'AGUS', 2020),
(61, 2, 2, 5, 4, 19, 1, 'AGUS', 2020),
(62, 2, 2, 4, 4, 19, 2, 'AGUS', 2020),
(63, 1, 2, 1, 4, 19, 3, 'AGUS', 2020),
(64, 2, 1, 2, 1, 19, 4, 'AGUS', 2020),
(65, 2, 1, 5, 1, 19, 5, 'AGUS', 2020),
(66, 1, 1, 1, 1, 19, 6, 'AGUS', 2020),
(67, 2, 3, 1, 5, 19, 7, 'AGUS', 2020),
(68, 1, 1, 1, 2, 19, 8, 'AGUS', 2020),
(69, 2, 2, 4, 4, 19, 9, 'AGUS', 2020),
(70, 2, 1, 4, 1, 19, 10, 'AGUS', 2020),
(71, 2, 1, 3, 1, 20, 1, 'AGUS', 2020),
(72, 2, 1, 3, 2, 20, 2, 'AGUS', 2020),
(73, 2, 1, 4, 1, 20, 3, 'AGUS', 2020),
(74, 2, 1, 5, 3, 20, 4, 'AGUS', 2020),
(75, 2, 2, 4, 5, 20, 5, 'AGUS', 2020),
(76, 2, 4, 4, 2, 20, 6, 'AGUS', 2020),
(77, 2, 2, 4, 4, 20, 7, 'AGUS', 2020),
(78, 1, 2, 1, 5, 20, 8, 'AGUS', 2020),
(79, 1, 2, 2, 3, 20, 9, 'AGUS', 2020),
(80, 1, 3, 1, 4, 20, 10, 'AGUS', 2020),
(95, 2, 0, 0, 0, 13, 11, 'ALI', 2020),
(96, 2, 0, 0, 0, 13, 12, 'ALI', 2020),
(97, 2, 0, 0, 0, 13, 13, 'ALI', 2020),
(98, 2, 0, 0, 0, 13, 14, 'ALI', 2020),
(99, 2, 0, 0, 0, 13, 15, 'ALI', 2020),
(100, 2, 0, 0, 0, 13, 16, 'ALI', 2020),
(101, 2, 0, 0, 0, 13, 17, 'ALI', 2020),
(102, 2, 0, 0, 0, 13, 18, 'ALI', 2020),
(103, 2, 0, 0, 0, 13, 19, 'ALI', 2020),
(104, 2, 0, 0, 0, 13, 20, 'ALI', 2020),
(105, 2, 0, 0, 0, 13, 21, 'ALI', 2020),
(106, 2, 0, 0, 0, 13, 22, 'ALI', 2020),
(107, 2, 0, 0, 0, 13, 23, 'ALI', 2020),
(108, 2, 0, 0, 0, 13, 24, 'ALI', 2020);

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
(1, 'stafpmd', '123', 'Staff', 2, 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA'),
(2, 'MEJOBO', '123', 'KECAMATAN MEJOBO', 3, 'MEJOBO'),
(3, 'JEKULO', '123', 'KECAMATAN JEKULO', 3, 'JEKULO'),
(4, 'DAWE', '123', 'KECAMATAN DAWE', 3, 'DAWE'),
(5, 'BAE', '123', 'KECAMATAN BAE', 3, 'BAE'),
(6, 'KOTA KUDUS', '123', 'KECAMATAN KOTA KUDUS', 3, 'KOTA KUDUS'),
(7, 'JATI', '123', 'KECAMATAN JATI', 3, 'JATI'),
(8, 'KALIWUNGU', '123', 'KECAMATAN KALIWUNGU', 3, 'KALIWUNGU'),
(9, 'UNDAAN', '123', 'KECAMATAN UNDAAN', 3, 'UNDAAN'),
(10, 'GEBOG', '123', 'KECAMATAN GEBOG', 3, 'GEBOG'),
(11, 'tenagaahli', '123', 'KHOSIM', 1, 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA'),
(12, 'adminsekda', '123', 'BAJIRUT', 4, 'SEKDA KUDUS'),
(13, 'AGUS', '123', 'AGUS', 5, 'P1'),
(14, 'ANANG', '123', 'ANANG', 5, 'P10'),
(15, 'ALI', '123', 'ALI', 5, 'P6');

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
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hasil_ajuan`
--
ALTER TABLE `hasil_ajuan`
  MODIFY `no_hasilajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `jadwal_lomba`
--
ALTER TABLE `jadwal_lomba`
  MODIFY `no_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `juara_lomba`
--
ALTER TABLE `juara_lomba`
  MODIFY `id_juara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
