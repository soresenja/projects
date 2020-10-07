-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 04:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminlte_copy`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_arahrpjmn`
--

CREATE TABLE `daftar_arahrpjmn` (
  `id_arahrpjmn` int(11) NOT NULL,
  `arahrpjmn` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_bidang_pn`
--

CREATE TABLE `daftar_bidang_pn` (
  `id_bidang_pn` int(11) NOT NULL,
  `bidang_pn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_indikator_rpjmn`
--

CREATE TABLE `daftar_indikator_rpjmn` (
  `id_indikatorrpjmn` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_sasaranrpjmn` int(11) NOT NULL,
  `indikator_rpjmn` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_isurpjmn`
--

CREATE TABLE `daftar_isurpjmn` (
  `id_isu_rpjmn` int(11) NOT NULL,
  `isu_rpjmn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kabkota`
--

CREATE TABLE `daftar_kabkota` (
  `id_kabkota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `kabkota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_misirpjmn`
--

CREATE TABLE `daftar_misirpjmn` (
  `id_misirpjmn` int(11) NOT NULL,
  `id_visirpjmn` int(11) NOT NULL,
  `misirpjmn` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_opd`
--

CREATE TABLE `daftar_opd` (
  `id_daftar_opd` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `opd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pn`
--

CREATE TABLE `daftar_pn` (
  `id_pn` int(11) NOT NULL,
  `id_subbidang_pn` int(11) NOT NULL,
  `no_pn` int(11) NOT NULL,
  `pn` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_provinsi`
--

CREATE TABLE `daftar_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_risiko_opd`
--

CREATE TABLE `daftar_risiko_opd` (
  `id_daftar_risiko_opd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_sasaranrpjmn`
--

CREATE TABLE `daftar_sasaranrpjmn` (
  `id_sasaranrpjmn` int(11) NOT NULL,
  `id_tujuanrpjmn` int(11) NOT NULL,
  `sa_rpjmn` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_subbidang_pn`
--

CREATE TABLE `daftar_subbidang_pn` (
  `id_subbidang_pn` int(11) NOT NULL,
  `id_bidang_pn` int(11) NOT NULL,
  `no_subbidang_pn` varchar(10) NOT NULL,
  `subbidang_pn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tujuanrpjmn`
--

CREATE TABLE `daftar_tujuanrpjmn` (
  `id_tujuanrpjmn` int(11) NOT NULL,
  `tu_rpjmn` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_urusan`
--

CREATE TABLE `daftar_urusan` (
  `id_urusan` int(11) NOT NULL,
  `urusan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_visirpjmn`
--

CREATE TABLE `daftar_visirpjmn` (
  `id_visirpjmn` int(11) NOT NULL,
  `visi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `iku_op_opd`
--

CREATE TABLE `iku_op_opd` (
  `id_ikuop_opd` int(11) NOT NULL,
  `tap_kegiatan` varchar(200) NOT NULL,
  `iku_op` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `iku_stra_opd`
--

CREATE TABLE `iku_stra_opd` (
  `id_ikustra_opd` int(11) NOT NULL,
  `iku_stra_opd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `infokom`
--

CREATE TABLE `infokom` (
  `id_infokom` int(11) NOT NULL,
  `butuh_pengendalian` varchar(200) NOT NULL,
  `media` varchar(100) NOT NULL,
  `penyedia` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `rencana_waktu` varchar(50) NOT NULL,
  `real_waktu` varchar(50) NOT NULL,
  `ket_infokom` varchar(200) NOT NULL,
  `metode_pantau` varchar(200) NOT NULL,
  `penanggungjawab_pantau` varchar(100) NOT NULL,
  `rencana_waktu_pantau` varchar(100) NOT NULL,
  `real_waktu_pantau` varchar(100) NOT NULL,
  `keterangan_pantau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konteks_op_opd`
--

CREATE TABLE `konteks_op_opd` (
  `id_konteksop_opd` int(11) NOT NULL,
  `tap_konteks_opd` varchar(100) NOT NULL,
  `sasaran_op_opd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konteks_pemda`
--

CREATE TABLE `konteks_pemda` (
  `id_kontekspemda` int(11) NOT NULL,
  `penetapan` varchar(100) NOT NULL,
  `sasaran` varchar(200) NOT NULL,
  `iku` varchar(200) NOT NULL,
  `prioritas_program` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konteks_stra_opd`
--

CREATE TABLE `konteks_stra_opd` (
  `id_kontekstra_opd` int(11) NOT NULL,
  `risk_stra_opd` varchar(100) NOT NULL,
  `sasaran_stra_opd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_iprogram`
--

CREATE TABLE `link_iprogram` (
  `id_link_iprogram` int(11) NOT NULL,
  `urusan` varchar(100) NOT NULL,
  `opd_penanggungjawab` varchar(100) NOT NULL,
  `program` varchar(200) NOT NULL,
  `ik_prpjmd` varchar(200) NOT NULL,
  `ik_prkpd` varchar(200) NOT NULL,
  `selaras` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_isasaran`
--

CREATE TABLE `link_isasaran` (
  `id_link_isasaran` int(11) NOT NULL,
  `opd_penanggungjawab` varchar(500) NOT NULL,
  `sasaran` varchar(300) NOT NULL,
  `isasaran` varchar(200) NOT NULL,
  `orientasi` varchar(30) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_jprogram`
--

CREATE TABLE `link_jprogram` (
  `id_link_jprogram` int(11) NOT NULL,
  `urusan` varchar(50) NOT NULL,
  `opd_penanggungjawab` varchar(100) NOT NULL,
  `jml_prpjmd` int(2) NOT NULL,
  `jml_prkpd` int(2) NOT NULL,
  `selaras` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_kegprogram`
--

CREATE TABLE `link_kegprogram` (
  `id_link_kegprogram` int(11) NOT NULL,
  `urusan` varchar(200) NOT NULL,
  `opd_penanggungjawab` varchar(500) NOT NULL,
  `sasaran` varchar(400) NOT NULL,
  `program` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `link` varchar(20) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_oikegiatan`
--

CREATE TABLE `link_oikegiatan` (
  `id_link_oikegiatan` int(11) NOT NULL,
  `urusan` varchar(200) NOT NULL,
  `opd_penanggungjawab` varchar(500) NOT NULL,
  `sasaran` varchar(400) NOT NULL,
  `program` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `ikegiatan` varchar(300) NOT NULL,
  `orientasi` varchar(30) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_oiprogram`
--

CREATE TABLE `link_oiprogram` (
  `id_link_oiprogram` int(11) NOT NULL,
  `urusan` varchar(200) NOT NULL,
  `opd_penanggungjawab` varchar(500) NOT NULL,
  `sasaran` varchar(300) NOT NULL,
  `program` varchar(200) NOT NULL,
  `iprogram` varchar(200) NOT NULL,
  `orientasi` varchar(30) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_program`
--

CREATE TABLE `link_program` (
  `id_link_program` int(11) NOT NULL,
  `urusan` varchar(100) NOT NULL,
  `opd_penanggungjawab` varchar(100) NOT NULL,
  `prpjmd` varchar(200) NOT NULL,
  `prkpd` varchar(200) NOT NULL,
  `selaras` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_sasaran`
--

CREATE TABLE `link_sasaran` (
  `id_link_sasaran` int(11) NOT NULL,
  `opd_penanggungjawab` varchar(500) NOT NULL,
  `sasaran` varchar(300) NOT NULL,
  `orientasi` varchar(20) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_sasaranprogram`
--

CREATE TABLE `link_sasaranprogram` (
  `id_link_sasaranp` int(11) NOT NULL,
  `urusan` varchar(200) NOT NULL,
  `opd_penanggungjawab` varchar(500) NOT NULL,
  `sasaran` varchar(400) NOT NULL,
  `program` varchar(200) NOT NULL,
  `link` varchar(20) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_subkegiatan`
--

CREATE TABLE `link_subkegiatan` (
  `id_link_subkegiatan` int(11) NOT NULL,
  `urusan` varchar(200) NOT NULL,
  `opd_penanggungjawab` varchar(500) NOT NULL,
  `sasaran` varchar(400) NOT NULL,
  `program` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `subkegiatan` varchar(200) NOT NULL,
  `link` varchar(20) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_target`
--

CREATE TABLE `link_target` (
  `id_link_target` int(11) NOT NULL,
  `urusan` varchar(100) NOT NULL,
  `opd_penanggungjawab` varchar(100) NOT NULL,
  `program` varchar(200) NOT NULL,
  `ik_prpjmd` varchar(200) NOT NULL,
  `target_rpjmd` varchar(100) NOT NULL,
  `target_rkpd` varchar(50) NOT NULL,
  `selaras` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mr`
--

CREATE TABLE `mr` (
  `id_mr` int(11) NOT NULL,
  `sumberdata` varchar(20) NOT NULL,
  `kelemahan` varchar(200) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mr_analisis_pemda`
--

CREATE TABLE `mr_analisis_pemda` (
  `id_mr_analisis_pemda` int(11) NOT NULL,
  `iden_risk` varchar(200) NOT NULL,
  `uraian_risk` varchar(200) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `skala_dampak` int(1) NOT NULL,
  `skala_kemungkinan` int(1) NOT NULL,
  `skala_risiko` int(2) NOT NULL,
  `pemilik` varchar(200) NOT NULL,
  `penyebab` varchar(200) NOT NULL,
  `dampak` varchar(200) NOT NULL,
  `pengendalian` varchar(300) NOT NULL,
  `celah` varchar(300) NOT NULL,
  `rtp` varchar(300) NOT NULL,
  `t_waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mr_iden_opopd`
--

CREATE TABLE `mr_iden_opopd` (
  `id_mr_iden_straopd` int(11) NOT NULL,
  `program` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `indikator` varchar(200) NOT NULL,
  `tahap` varchar(100) NOT NULL,
  `uraian_risk` varchar(200) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `pemilik` varchar(200) NOT NULL,
  `sebab` varchar(100) NOT NULL,
  `sumber_sebab` varchar(50) NOT NULL,
  `cuc` varchar(5) NOT NULL,
  `dampak` varchar(100) NOT NULL,
  `pihak_dampak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mr_iden_straopd`
--

CREATE TABLE `mr_iden_straopd` (
  `id_mr_iden_straopd` int(11) NOT NULL,
  `id_daftar_risiko_opd` int(11) NOT NULL,
  `id_sasaran` int(11) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `sasaran` varchar(200) NOT NULL,
  `ik` varchar(200) NOT NULL,
  `uraian_risk` varchar(200) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `sebab` varchar(100) NOT NULL,
  `sumber_sebab` varchar(50) NOT NULL,
  `cuc` varchar(5) NOT NULL,
  `dampak` varchar(100) NOT NULL,
  `pihak_dampak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mr_rtp`
--

CREATE TABLE `mr_rtp` (
  `id_mr_rtp` int(11) NOT NULL,
  `iden_risk` varchar(200) NOT NULL,
  `uraian_risk` varchar(200) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `pemilik` varchar(200) NOT NULL,
  `pengendalian` varchar(300) NOT NULL,
  `celah` varchar(300) NOT NULL,
  `rtp` varchar(300) NOT NULL,
  `t_waktu` varchar(100) NOT NULL,
  `r_waktu` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `penyedia` varchar(200) NOT NULL,
  `media` varchar(200) NOT NULL,
  `m_pantau` varchar(200) NOT NULL,
  `pemantau` varchar(100) NOT NULL,
  `t_waktu_pantau` varchar(100) NOT NULL,
  `r_waktu_pantau` varchar(100) NOT NULL,
  `keterangan_pantau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persepsi_rtp`
--

CREATE TABLE `persepsi_rtp` (
  `id_persepsi_rtp` int(11) NOT NULL,
  `sub_unsur` varchar(200) NOT NULL,
  `hasil_reviu` varchar(50) NOT NULL,
  `uraian_reviu` varchar(200) NOT NULL,
  `hasil_survey` varchar(50) NOT NULL,
  `uraian_survey` varchar(200) NOT NULL,
  `simpulan` varchar(50) NOT NULL,
  `penjelasan` varchar(200) NOT NULL,
  `rtp_lingkungan` varchar(200) NOT NULL,
  `penanggungjawab` varchar(50) NOT NULL,
  `target` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `risk_op_opd`
--

CREATE TABLE `risk_op_opd` (
  `id_risk_opopd` int(11) NOT NULL,
  `uraian_risk` varchar(200) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `sebab` varchar(100) NOT NULL,
  `sumber_sebab` varchar(50) NOT NULL,
  `CUC` varchar(5) NOT NULL,
  `dampak` varchar(100) NOT NULL,
  `pihak_dampak` varchar(100) NOT NULL,
  `skala_dampak` int(1) NOT NULL,
  `skala_kemungkinan` int(1) NOT NULL,
  `skala_risiko` int(2) NOT NULL,
  `pengendalian` varchar(200) NOT NULL,
  `celah_kendali` varchar(100) NOT NULL,
  `rtp` varchar(200) NOT NULL,
  `target_waktu` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `rtp_event` varchar(200) NOT NULL,
  `realisasi_rtp` varchar(200) NOT NULL,
  `keterangan_realisasi` varchar(200) NOT NULL,
  `terjadi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `risk_pemda`
--

CREATE TABLE `risk_pemda` (
  `id_risk_pemda` int(11) NOT NULL,
  `uraian_risk` varchar(200) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `sebab` varchar(100) NOT NULL,
  `sumber_sebab` varchar(50) NOT NULL,
  `CUC` varchar(5) NOT NULL,
  `dampak` varchar(100) NOT NULL,
  `pihak_dampak` varchar(100) NOT NULL,
  `skala_dampak` int(1) NOT NULL,
  `skala_kemungkinan` int(1) NOT NULL,
  `skala_risiko` int(2) NOT NULL,
  `pengendalian` varchar(200) NOT NULL,
  `celah_kendali` varchar(100) NOT NULL,
  `rtp` varchar(200) NOT NULL,
  `target_waktu` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `rtp_event` varchar(200) NOT NULL,
  `realisasi_rtp` varchar(200) NOT NULL,
  `keterangan_realisasi` varchar(200) NOT NULL,
  `terjadi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `risk_stra_opd`
--

CREATE TABLE `risk_stra_opd` (
  `id_risk_straopd` int(11) NOT NULL,
  `uraian_risk` varchar(200) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `sebab` varchar(100) NOT NULL,
  `sumber_sebab` varchar(50) NOT NULL,
  `CUC` varchar(5) NOT NULL,
  `dampak` varchar(100) NOT NULL,
  `pihak_dampak` varchar(100) NOT NULL,
  `skala_dampak` int(1) NOT NULL,
  `skala_kemungkinan` int(1) NOT NULL,
  `skala_risiko` int(2) NOT NULL,
  `pengendalian` varchar(200) NOT NULL,
  `celah_kendali` varchar(100) NOT NULL,
  `rtp` varchar(200) NOT NULL,
  `target_waktu` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `rtp_event` varchar(200) NOT NULL,
  `realisasi_rtp` varchar(200) NOT NULL,
  `keterangan_realisasi` varchar(200) NOT NULL,
  `terjadi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_arah`
--

CREATE TABLE `sync_arah` (
  `id_sync_arah` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_arahrpjmn` int(11) NOT NULL,
  `arah_rpjmd` varchar(300) NOT NULL,
  `selaras` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_dana`
--

CREATE TABLE `sync_dana` (
  `id_sync_dana` int(11) NOT NULL,
  `bidang` varchar(200) NOT NULL,
  `program_pn` varchar(300) NOT NULL,
  `indikator` varchar(300) NOT NULL,
  `kondisi0` varchar(200) NOT NULL,
  `target1` varchar(100) NOT NULL,
  `rp1` varchar(50) NOT NULL,
  `dana1` varchar(100) NOT NULL,
  `target2` varchar(100) NOT NULL,
  `rp2` varchar(50) NOT NULL,
  `dana2` varchar(100) NOT NULL,
  `target3` varchar(100) NOT NULL,
  `rp3` varchar(50) NOT NULL,
  `dana3` varchar(100) NOT NULL,
  `target4` varchar(100) NOT NULL,
  `rp4` varchar(50) NOT NULL,
  `dana4` varchar(100) NOT NULL,
  `target5` varchar(100) NOT NULL,
  `rp5` varchar(50) NOT NULL,
  `dana5` varchar(100) NOT NULL,
  `kondisi5` varchar(100) NOT NULL,
  `dukungan` varchar(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_indikator`
--

CREATE TABLE `sync_indikator` (
  `id_sync_sasaran` int(11) NOT NULL,
  `tu_rpjmn` varchar(200) NOT NULL,
  `sa_rpjmn` varchar(200) NOT NULL,
  `i_rpjmn` varchar(300) NOT NULL,
  `i_rpjmd` varchar(300) NOT NULL,
  `selaras` varchar(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_irkprkpd`
--

CREATE TABLE `sync_irkprkpd` (
  `id_sync_rkprkpd` int(11) NOT NULL,
  `pn` varchar(200) NOT NULL,
  `program_rkp` varchar(300) NOT NULL,
  `indikator_rkp` varchar(300) NOT NULL,
  `target_rkp` varchar(50) NOT NULL,
  `satuan_rkp` varchar(50) NOT NULL,
  `program_rkpd` varchar(300) NOT NULL,
  `indikator_rkpd` varchar(300) NOT NULL,
  `target_rkpd` varchar(50) NOT NULL,
  `satuan_rkpd` varchar(50) NOT NULL,
  `selaras` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `skor_i` varchar(5) NOT NULL,
  `skor_s` varchar(5) NOT NULL,
  `skor_pr` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_misi`
--

CREATE TABLE `sync_misi` (
  `id_sync_misi` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_misirpjmn` varchar(300) NOT NULL,
  `misi_rpjmd` varchar(300) NOT NULL,
  `selaras` varchar(30) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_program`
--

CREATE TABLE `sync_program` (
  `no` int(11) NOT NULL,
  `no_program` varchar(10) NOT NULL,
  `program_pn` varchar(300) NOT NULL,
  `uu` varchar(200) NOT NULL,
  `program_rpjmd` varchar(300) NOT NULL,
  `opd` varchar(300) NOT NULL,
  `selaras` varchar(200) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_prorkprkpd`
--

CREATE TABLE `sync_prorkprkpd` (
  `id_sync_prorkprkpd` int(11) NOT NULL,
  `no_program` varchar(2) NOT NULL,
  `program` varchar(200) NOT NULL,
  `p_a1` varchar(5) NOT NULL,
  `p_a2` varchar(5) NOT NULL,
  `p_a3` varchar(5) NOT NULL,
  `p_a4` varchar(5) NOT NULL,
  `p_a5` varchar(5) NOT NULL,
  `p_b1` varchar(5) NOT NULL,
  `p_b2` varchar(5) NOT NULL,
  `p_b3` varchar(5) NOT NULL,
  `p_b4` varchar(5) NOT NULL,
  `p_b5` varchar(5) NOT NULL,
  `p_c1` varchar(5) NOT NULL,
  `p_c2` varchar(5) NOT NULL,
  `p_c3` varchar(5) NOT NULL,
  `p_c4` varchar(5) NOT NULL,
  `p_c5` varchar(5) NOT NULL,
  `p_d1` varchar(5) NOT NULL,
  `p_d2` varchar(5) NOT NULL,
  `p_d3` varchar(5) NOT NULL,
  `p_d4` varchar(5) NOT NULL,
  `p_d5` varchar(5) NOT NULL,
  `p_e1` varchar(5) NOT NULL,
  `p_e2` varchar(5) NOT NULL,
  `p_e3` varchar(5) NOT NULL,
  `p_e4` varchar(5) NOT NULL,
  `p_e5` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_rkprkpd`
--

CREATE TABLE `sync_rkprkpd` (
  `id_sync_rkprkpd` int(11) NOT NULL,
  `pn` varchar(200) NOT NULL,
  `sasaran_rkp` varchar(300) NOT NULL,
  `indikator_rkp` varchar(300) NOT NULL,
  `target_rkp` varchar(50) NOT NULL,
  `satuan_rkp` varchar(50) NOT NULL,
  `pd` varchar(200) NOT NULL,
  `sasaran_rkpd` varchar(300) NOT NULL,
  `indikator_rkpd` varchar(300) NOT NULL,
  `target_rkpd` varchar(50) NOT NULL,
  `satuan_rkpd` varchar(50) NOT NULL,
  `selaras` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `skor_i` varchar(5) NOT NULL,
  `skor_s` varchar(5) NOT NULL,
  `skor_p` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_rpjmd`
--

CREATE TABLE `sync_rpjmd` (
  `id_sync_rpjmd` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_isu_rpjmn` int(11) NOT NULL,
  `rpjmd` varchar(200) NOT NULL,
  `selaras` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_sasaran`
--

CREATE TABLE `sync_sasaran` (
  `id_sync_sasaran` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_tujuanrpjmn` int(11) NOT NULL,
  `id_sasaranrpjmn` int(11) NOT NULL,
  `id_indikatorrpjmn` int(11) NOT NULL,
  `sa_rpjmd` varchar(300) NOT NULL,
  `i_rpjmd` varchar(300) NOT NULL,
  `selaras` varchar(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_sasaran_backup`
--

CREATE TABLE `sync_sasaran_backup` (
  `id_sync_sasaran` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `tu_rpjmn` varchar(200) NOT NULL,
  `sa_rpjmn` varchar(200) NOT NULL,
  `i_rpjmn` varchar(300) NOT NULL,
  `sa_rpjmd` varchar(300) NOT NULL,
  `i_rpjmd` varchar(300) NOT NULL,
  `selaras` varchar(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_tujuan`
--

CREATE TABLE `sync_tujuan` (
  `id_sync_tujuan` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_tujuanrpjmn` int(11) NOT NULL,
  `tu_rpjmd` varchar(300) NOT NULL,
  `selaras` varchar(30) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sync_visi`
--

CREATE TABLE `sync_visi` (
  `id_sync_visi` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `visirpjmn` varchar(300) NOT NULL,
  `visi_rpjmd` varchar(300) NOT NULL,
  `selaras` varchar(20) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabkota` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_arahrpjmn`
--
ALTER TABLE `daftar_arahrpjmn`
  ADD PRIMARY KEY (`id_arahrpjmn`);

--
-- Indexes for table `daftar_bidang_pn`
--
ALTER TABLE `daftar_bidang_pn`
  ADD PRIMARY KEY (`id_bidang_pn`);

--
-- Indexes for table `daftar_indikator_rpjmn`
--
ALTER TABLE `daftar_indikator_rpjmn`
  ADD PRIMARY KEY (`id_indikatorrpjmn`);

--
-- Indexes for table `daftar_isurpjmn`
--
ALTER TABLE `daftar_isurpjmn`
  ADD PRIMARY KEY (`id_isu_rpjmn`);

--
-- Indexes for table `daftar_kabkota`
--
ALTER TABLE `daftar_kabkota`
  ADD PRIMARY KEY (`id_kabkota`);

--
-- Indexes for table `daftar_misirpjmn`
--
ALTER TABLE `daftar_misirpjmn`
  ADD PRIMARY KEY (`id_misirpjmn`);

--
-- Indexes for table `daftar_opd`
--
ALTER TABLE `daftar_opd`
  ADD PRIMARY KEY (`id_daftar_opd`);

--
-- Indexes for table `daftar_pn`
--
ALTER TABLE `daftar_pn`
  ADD PRIMARY KEY (`id_pn`);

--
-- Indexes for table `daftar_provinsi`
--
ALTER TABLE `daftar_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `daftar_risiko_opd`
--
ALTER TABLE `daftar_risiko_opd`
  ADD PRIMARY KEY (`id_daftar_risiko_opd`);

--
-- Indexes for table `daftar_sasaranrpjmn`
--
ALTER TABLE `daftar_sasaranrpjmn`
  ADD PRIMARY KEY (`id_sasaranrpjmn`);

--
-- Indexes for table `daftar_subbidang_pn`
--
ALTER TABLE `daftar_subbidang_pn`
  ADD PRIMARY KEY (`id_subbidang_pn`);

--
-- Indexes for table `daftar_tujuanrpjmn`
--
ALTER TABLE `daftar_tujuanrpjmn`
  ADD PRIMARY KEY (`id_tujuanrpjmn`);

--
-- Indexes for table `daftar_urusan`
--
ALTER TABLE `daftar_urusan`
  ADD PRIMARY KEY (`id_urusan`);

--
-- Indexes for table `daftar_visirpjmn`
--
ALTER TABLE `daftar_visirpjmn`
  ADD PRIMARY KEY (`id_visirpjmn`);

--
-- Indexes for table `iku_op_opd`
--
ALTER TABLE `iku_op_opd`
  ADD PRIMARY KEY (`id_ikuop_opd`);

--
-- Indexes for table `iku_stra_opd`
--
ALTER TABLE `iku_stra_opd`
  ADD PRIMARY KEY (`id_ikustra_opd`);

--
-- Indexes for table `infokom`
--
ALTER TABLE `infokom`
  ADD PRIMARY KEY (`id_infokom`);

--
-- Indexes for table `konteks_op_opd`
--
ALTER TABLE `konteks_op_opd`
  ADD PRIMARY KEY (`id_konteksop_opd`);

--
-- Indexes for table `konteks_pemda`
--
ALTER TABLE `konteks_pemda`
  ADD PRIMARY KEY (`id_kontekspemda`);

--
-- Indexes for table `konteks_stra_opd`
--
ALTER TABLE `konteks_stra_opd`
  ADD PRIMARY KEY (`id_kontekstra_opd`);

--
-- Indexes for table `link_iprogram`
--
ALTER TABLE `link_iprogram`
  ADD PRIMARY KEY (`id_link_iprogram`);

--
-- Indexes for table `link_isasaran`
--
ALTER TABLE `link_isasaran`
  ADD PRIMARY KEY (`id_link_isasaran`);

--
-- Indexes for table `link_jprogram`
--
ALTER TABLE `link_jprogram`
  ADD PRIMARY KEY (`id_link_jprogram`);

--
-- Indexes for table `link_kegprogram`
--
ALTER TABLE `link_kegprogram`
  ADD PRIMARY KEY (`id_link_kegprogram`);

--
-- Indexes for table `link_oikegiatan`
--
ALTER TABLE `link_oikegiatan`
  ADD PRIMARY KEY (`id_link_oikegiatan`);

--
-- Indexes for table `link_oiprogram`
--
ALTER TABLE `link_oiprogram`
  ADD PRIMARY KEY (`id_link_oiprogram`);

--
-- Indexes for table `link_program`
--
ALTER TABLE `link_program`
  ADD PRIMARY KEY (`id_link_program`);

--
-- Indexes for table `link_sasaran`
--
ALTER TABLE `link_sasaran`
  ADD PRIMARY KEY (`id_link_sasaran`);

--
-- Indexes for table `link_sasaranprogram`
--
ALTER TABLE `link_sasaranprogram`
  ADD PRIMARY KEY (`id_link_sasaranp`);

--
-- Indexes for table `link_subkegiatan`
--
ALTER TABLE `link_subkegiatan`
  ADD PRIMARY KEY (`id_link_subkegiatan`);

--
-- Indexes for table `link_target`
--
ALTER TABLE `link_target`
  ADD PRIMARY KEY (`id_link_target`);

--
-- Indexes for table `mr`
--
ALTER TABLE `mr`
  ADD PRIMARY KEY (`id_mr`);

--
-- Indexes for table `mr_analisis_pemda`
--
ALTER TABLE `mr_analisis_pemda`
  ADD PRIMARY KEY (`id_mr_analisis_pemda`);

--
-- Indexes for table `mr_iden_opopd`
--
ALTER TABLE `mr_iden_opopd`
  ADD PRIMARY KEY (`id_mr_iden_straopd`);

--
-- Indexes for table `mr_iden_straopd`
--
ALTER TABLE `mr_iden_straopd`
  ADD PRIMARY KEY (`id_mr_iden_straopd`);

--
-- Indexes for table `mr_rtp`
--
ALTER TABLE `mr_rtp`
  ADD PRIMARY KEY (`id_mr_rtp`);

--
-- Indexes for table `persepsi_rtp`
--
ALTER TABLE `persepsi_rtp`
  ADD PRIMARY KEY (`id_persepsi_rtp`);

--
-- Indexes for table `risk_op_opd`
--
ALTER TABLE `risk_op_opd`
  ADD PRIMARY KEY (`id_risk_opopd`);

--
-- Indexes for table `risk_pemda`
--
ALTER TABLE `risk_pemda`
  ADD PRIMARY KEY (`id_risk_pemda`);

--
-- Indexes for table `risk_stra_opd`
--
ALTER TABLE `risk_stra_opd`
  ADD PRIMARY KEY (`id_risk_straopd`);

--
-- Indexes for table `sync_arah`
--
ALTER TABLE `sync_arah`
  ADD PRIMARY KEY (`id_sync_arah`);

--
-- Indexes for table `sync_dana`
--
ALTER TABLE `sync_dana`
  ADD PRIMARY KEY (`id_sync_dana`);

--
-- Indexes for table `sync_indikator`
--
ALTER TABLE `sync_indikator`
  ADD PRIMARY KEY (`id_sync_sasaran`);

--
-- Indexes for table `sync_irkprkpd`
--
ALTER TABLE `sync_irkprkpd`
  ADD PRIMARY KEY (`id_sync_rkprkpd`);

--
-- Indexes for table `sync_misi`
--
ALTER TABLE `sync_misi`
  ADD PRIMARY KEY (`id_sync_misi`);

--
-- Indexes for table `sync_program`
--
ALTER TABLE `sync_program`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `sync_prorkprkpd`
--
ALTER TABLE `sync_prorkprkpd`
  ADD PRIMARY KEY (`id_sync_prorkprkpd`);

--
-- Indexes for table `sync_rkprkpd`
--
ALTER TABLE `sync_rkprkpd`
  ADD PRIMARY KEY (`id_sync_rkprkpd`);

--
-- Indexes for table `sync_rpjmd`
--
ALTER TABLE `sync_rpjmd`
  ADD PRIMARY KEY (`id_sync_rpjmd`);

--
-- Indexes for table `sync_sasaran`
--
ALTER TABLE `sync_sasaran`
  ADD PRIMARY KEY (`id_sync_sasaran`);

--
-- Indexes for table `sync_sasaran_backup`
--
ALTER TABLE `sync_sasaran_backup`
  ADD PRIMARY KEY (`id_sync_sasaran`);

--
-- Indexes for table `sync_tujuan`
--
ALTER TABLE `sync_tujuan`
  ADD PRIMARY KEY (`id_sync_tujuan`);

--
-- Indexes for table `sync_visi`
--
ALTER TABLE `sync_visi`
  ADD PRIMARY KEY (`id_sync_visi`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_arahrpjmn`
--
ALTER TABLE `daftar_arahrpjmn`
  MODIFY `id_arahrpjmn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daftar_bidang_pn`
--
ALTER TABLE `daftar_bidang_pn`
  MODIFY `id_bidang_pn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `daftar_indikator_rpjmn`
--
ALTER TABLE `daftar_indikator_rpjmn`
  MODIFY `id_indikatorrpjmn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `daftar_isurpjmn`
--
ALTER TABLE `daftar_isurpjmn`
  MODIFY `id_isu_rpjmn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `daftar_kabkota`
--
ALTER TABLE `daftar_kabkota`
  MODIFY `id_kabkota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_misirpjmn`
--
ALTER TABLE `daftar_misirpjmn`
  MODIFY `id_misirpjmn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftar_opd`
--
ALTER TABLE `daftar_opd`
  MODIFY `id_daftar_opd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_pn`
--
ALTER TABLE `daftar_pn`
  MODIFY `id_pn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_provinsi`
--
ALTER TABLE `daftar_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_risiko_opd`
--
ALTER TABLE `daftar_risiko_opd`
  MODIFY `id_daftar_risiko_opd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_sasaranrpjmn`
--
ALTER TABLE `daftar_sasaranrpjmn`
  MODIFY `id_sasaranrpjmn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `daftar_subbidang_pn`
--
ALTER TABLE `daftar_subbidang_pn`
  MODIFY `id_subbidang_pn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `daftar_tujuanrpjmn`
--
ALTER TABLE `daftar_tujuanrpjmn`
  MODIFY `id_tujuanrpjmn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daftar_urusan`
--
ALTER TABLE `daftar_urusan`
  MODIFY `id_urusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `daftar_visirpjmn`
--
ALTER TABLE `daftar_visirpjmn`
  MODIFY `id_visirpjmn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iku_op_opd`
--
ALTER TABLE `iku_op_opd`
  MODIFY `id_ikuop_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iku_stra_opd`
--
ALTER TABLE `iku_stra_opd`
  MODIFY `id_ikustra_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infokom`
--
ALTER TABLE `infokom`
  MODIFY `id_infokom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konteks_op_opd`
--
ALTER TABLE `konteks_op_opd`
  MODIFY `id_konteksop_opd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konteks_pemda`
--
ALTER TABLE `konteks_pemda`
  MODIFY `id_kontekspemda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konteks_stra_opd`
--
ALTER TABLE `konteks_stra_opd`
  MODIFY `id_kontekstra_opd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_iprogram`
--
ALTER TABLE `link_iprogram`
  MODIFY `id_link_iprogram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `link_isasaran`
--
ALTER TABLE `link_isasaran`
  MODIFY `id_link_isasaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `link_jprogram`
--
ALTER TABLE `link_jprogram`
  MODIFY `id_link_jprogram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `link_kegprogram`
--
ALTER TABLE `link_kegprogram`
  MODIFY `id_link_kegprogram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=512;

--
-- AUTO_INCREMENT for table `link_oikegiatan`
--
ALTER TABLE `link_oikegiatan`
  MODIFY `id_link_oikegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=560;

--
-- AUTO_INCREMENT for table `link_oiprogram`
--
ALTER TABLE `link_oiprogram`
  MODIFY `id_link_oiprogram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `link_program`
--
ALTER TABLE `link_program`
  MODIFY `id_link_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `link_sasaran`
--
ALTER TABLE `link_sasaran`
  MODIFY `id_link_sasaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `link_sasaranprogram`
--
ALTER TABLE `link_sasaranprogram`
  MODIFY `id_link_sasaranp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `link_subkegiatan`
--
ALTER TABLE `link_subkegiatan`
  MODIFY `id_link_subkegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1429;

--
-- AUTO_INCREMENT for table `link_target`
--
ALTER TABLE `link_target`
  MODIFY `id_link_target` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `mr`
--
ALTER TABLE `mr`
  MODIFY `id_mr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mr_analisis_pemda`
--
ALTER TABLE `mr_analisis_pemda`
  MODIFY `id_mr_analisis_pemda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mr_iden_opopd`
--
ALTER TABLE `mr_iden_opopd`
  MODIFY `id_mr_iden_straopd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mr_iden_straopd`
--
ALTER TABLE `mr_iden_straopd`
  MODIFY `id_mr_iden_straopd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mr_rtp`
--
ALTER TABLE `mr_rtp`
  MODIFY `id_mr_rtp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `persepsi_rtp`
--
ALTER TABLE `persepsi_rtp`
  MODIFY `id_persepsi_rtp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `risk_op_opd`
--
ALTER TABLE `risk_op_opd`
  MODIFY `id_risk_opopd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `risk_pemda`
--
ALTER TABLE `risk_pemda`
  MODIFY `id_risk_pemda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `risk_stra_opd`
--
ALTER TABLE `risk_stra_opd`
  MODIFY `id_risk_straopd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sync_arah`
--
ALTER TABLE `sync_arah`
  MODIFY `id_sync_arah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sync_dana`
--
ALTER TABLE `sync_dana`
  MODIFY `id_sync_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `sync_indikator`
--
ALTER TABLE `sync_indikator`
  MODIFY `id_sync_sasaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `sync_irkprkpd`
--
ALTER TABLE `sync_irkprkpd`
  MODIFY `id_sync_rkprkpd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `sync_misi`
--
ALTER TABLE `sync_misi`
  MODIFY `id_sync_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sync_program`
--
ALTER TABLE `sync_program`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;

--
-- AUTO_INCREMENT for table `sync_prorkprkpd`
--
ALTER TABLE `sync_prorkprkpd`
  MODIFY `id_sync_prorkprkpd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `sync_rkprkpd`
--
ALTER TABLE `sync_rkprkpd`
  MODIFY `id_sync_rkprkpd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `sync_rpjmd`
--
ALTER TABLE `sync_rpjmd`
  MODIFY `id_sync_rpjmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sync_sasaran`
--
ALTER TABLE `sync_sasaran`
  MODIFY `id_sync_sasaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `sync_sasaran_backup`
--
ALTER TABLE `sync_sasaran_backup`
  MODIFY `id_sync_sasaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `sync_tujuan`
--
ALTER TABLE `sync_tujuan`
  MODIFY `id_sync_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sync_visi`
--
ALTER TABLE `sync_visi`
  MODIFY `id_sync_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
