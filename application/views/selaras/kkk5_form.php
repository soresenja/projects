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
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Sinkronisasi Program</h3>
  <div class="card-body">
    <div>
      <form action="<?php echo base_url(). 'home/tambah_aksi'; ?>" method="post">
        <label for="formGroupExampleInput">Bidang</label>
        <!--
        Pilihan bidang dari database daftar_bidang_pn
        -->
        <select class="form-control" name="">
          <option selected>Pilih</option>
          <option value=""></option>
        </select>
        <label for="formGroupExampleInput">Subbidang</label>
        <!--
        Pilihan subbidang dari database daftar_subbidang_pn sesuai bidang yang dipilih
        -->
        <select class="form-control" name="">
          <option selected>Pilih</option>
          <option value=""></option>
        </select>
        <label for="formGroupExampleInput">Program Prioritas Nasional</label>
        <!--
        Pilihan program dari database daftar_pn sesuai subbidang yang dipilih di atas
        -->
        <select class="form-control" name="">
          <option selected>Pilih</option>
          <option value=""></option>
        </select>
        <label for="formGroupExampleInput">Urusan</label>
        <!--
        Pilihan urusan dari database daftar_urusan
        -->
        <select class="form-control" name="">
          <option selected>Pilih</option>
          <option value=""></option>
        </select>
        <label for="formGroupExampleInput">Program RPJMD</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="">
          <label for="formGroupExampleInput">OPD penanggungjawab</label>
          <!--
          Pilihan opd dari database daftar_opd
          -->
          <select class="form-control" name="">
            <option selected>Pilih</option>
            <option value=""></option>
          </select>
          <label for="formGroupExampleInput">Indikator Selaras?</label>
          <!--
          isian ini masuk ke kkk3d/index sesuai row indikator rpjmn yang dipilih di atas
        -->
          <select class="form-control" name="">
            <option selected>Pilih</option>
            <option value="">Selaras</option>
            <option value="">Selaras dengan catatan</option>
            <option value="">Tidak selaras</option>
          </select>


          <label for="formGroupExampleInput">Keterangan</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Hanya diisi jika tidak selaras atau selaras dengan catatan" name="">
        </div>
      </form>
      <!--
      fungsi menyimpan isian pada database dan menginput kolom id_provinsi sesuai asal user (sumber: tabel user)
      isian masuk ke index pada row program RPJMN yang dipilih
      -->
      <input type="submit" value="Simpan">
      <a href="<?=base_url('kkk5/index')?>"><input type="submit" value="Batal"></a>
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
