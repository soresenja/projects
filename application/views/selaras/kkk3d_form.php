<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <?php $this->load->view('template/header_style.php') ?>
  </head>
  <body class="hold-transition sidebar-mini" style="background-color: #071a52">

  <!-- Site wrapper -->
  <div class="wrapper">
    <?php $this->load->view('partials/header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #e2f3f5">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Form Isian</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content" style="background-color: #e2f3f5">
        <div class="container-fluid">
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Sinkronisasi Sasaran</h3>
  <div class="card-body">
    <div>
      <form action="<?php echo base_url(). 'kkk3d/simpan'; ?>" method="post">
        <div class="form-group">
          <label>Pilih tujuan RPJMN</label>
            <select class="form-control" name="a">
              <option selected>Pilih</option>
              <option value="1">Dimensi pembangunan manusia dan masyarakat</option>
              <option value="2">Dimensi pembangunan sektor unggulan</option>
              <option value="3">Dimensi pemerataan dan kewilayahan</option>

                <!--
                  pilihan muncul dari kolom sasaran rpjmn pada daftar sebelumnya (kkkd.php)
                  atau dari sasaran pada database daftar_sasaranrpjmn dengan kondisi database sync_tujuan bernilai "selaras"
                  sumber:
                  sync_tujuan
                  daftar_sasaranrpjmn
                -->
              </option>
            </select>
          <label>Pilih sasaran RPJMN</label>
            <select class="form-control" name="b">
              <option selected>Pilih</option>
              <option value="1">Pembangunan Manusia dan Masyarakat</option>
              <option value="2">Ekonomi Makro</option>
              <option value="3">Pendidikan</option>
                <!--
                  pilihan muncul dari kolom sasaran rpjmn pada daftar sebelumnya (kkkd.php)
                  atau dari sasaran pada database daftar_sasaranrpjmn dengan kondisi database sync_tujuan bernilai "selaras"
                  sumber:
                  sync_tujuan
                  daftar_sasaranrpjmn
                -->
              </option>
            </select>
            <label>Pilih indikator RPJMN</label>
              <select class="form-control" name="c">
                <option selected>Pilih</option>
                <option value="1">Indeks Pembangunan Manusia (IPM)</option>
                <option value="2">Indeks Pembangunan Masyarakat</option>
                <option value="3">Indeks Gini</option>

                  <!--
                  pilihan muncul berdasarkan indikator ini masuk sasaran mana dan apakah sasaran itu masuk ke tujuan yang bernilai "selaras"
                  sumber:
                  sync_tujuan
                  daftar_sasaranrpjmn
                  daftar_indikator_rpjmn
                  -->
                </option>
              </select>
          <label for="formGroupExampleInput">Sasaran RPJMD</label>
            <input type="text" class="form-control" name="d">
          <label for="formGroupExampleInput">Indikator RPJMD</label>
          <!--
          tambahkan fitur untuk menambah kotak isian baru, isian ini bisa lebih dari satu untuk tiap sasaran rpjmd
          -->
            <input type="text" class="form-control" name="e">


          <label for="formGroupExampleInput">Sasaran Selaras?</label>
          <!--
          isian ini masuk ke kkk3d/index sesuai row indikator rpjmn yang dipilih di atas
        -->
          <select class="form-control" name="f">
            <option selected>Pilih</option>
            <option value="selaras">Selaras</option>
            <option value="selaras dengan catatan">Selaras dengan catatan</option>
            <option value="tidak selaras">Tidak selaras</option>
          </select>
          <label>Keterangan</label>
            <input type="text" class="form-control" placeholder="Hanya diisi jika tidak selaras atau selaras dengan catatan" name="g">
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="<?= base_url('kkk3d/index') ?>" class="btn btn-danger">Batal</a>
      </form>
      <!--
      fungsi menyimpan isian pada database dan menginput kolom id_provinsi sesuai asal user (sumber: tabel user)

      -->
        </div>
      </section>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>

    <footer class="main-footer" style="background-color: #071a52">
      <div class="float-right d-none d-sm-block">
        <b>Version</b>
      </div>
      <strong>Copyright &copy; 2020 <a href=""></a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php $this->load->view('template/footer_style.php') ?>
  </body>
  </html>
