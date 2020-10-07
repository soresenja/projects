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
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">PENDAFTARAN USER BARU</h3>
  <div class="card-body">
    <div>
      <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
        <div class="form-group">
          <label>Provinsi</label>
          <!--
          dropdown tabel daftar_provinsi: provinsi, kolom provinsi pada database diganti dengan id_provinsi
        -->
          <input type="text" name="provinsi" class="form-control">
        </div>
        <div class="form-group">
          <label>Kabupaten/Kota</label>
          <!--
          dropdown tabel daftar_kabkota: id_provinsi->kabkota, kolom kabkota pada database user diganti dengan id_kabkota
        -->
          <input type="text" name="kabkota" class="form-control">
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="pass" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label>Jabatan</label>
          <input type="text" name="jabatan" class="form-control">
        </div>
        <div class="form-group">
          <label>Unit Kerja</label>
          <input type="text" name="unit" class="form-control">
        </div>
      <div class="form-group">
        <label>Level</label>
      <!--
      admin bisa melihat semua menu, user 1 dan user 2 bisa melihat semua menu selain menu user & menu informasi umum
      -->
        <select class="form-control" name="level">
          <option selected>Pilih</option>
          <option value="1">1. Admin</option>
          <option value="2">2. User 1</option>
          <option value="3">3. User 2</option>
        </select>
      </div>
      <button class="btn btn-primary" type="submit">Daftar</button>
      <a href="<?= base_url('crud/index') ?>" class="btn btn-danger">Batal</a>
    	</form>
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
