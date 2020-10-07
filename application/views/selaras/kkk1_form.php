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
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">SINKRONISASI ISU STRATEGIS</h3>
  <div class="card-body">
    <div>
      <span>//tampilkan isian row terkait isian ini dari kolom rpjmn dari halaman sebelumnya (kolom ke 2)</span>
      <form action="<?php echo base_url(). 'kkk1/simpan'; ?>" method="post">
        <div class="form-group">
          <label>Isu Strategis RPJMN</label>
          <select class="form-control" name="a">
            <option selected>Pilih</option>
            <option value="1">Menghadirkan kembali negara untuk melindungi segenap bangsa dan memberikan rasa aman kepada seluruh warga negara</option>
            <option value="2">Membuat Pemerintah selalu hadir dengan membangun tata kelola pemerintahan yang bersih, efektif, demokratis, dan terpercaya</option>
            <option value="3">Membangun Indonesia dari pinggiran dengan memperkuat daerah-daerah dan desa dalam kerangka negara kesatuan</option>
          </select>
          <label for="formGroupExampleInput">Isu Strategis RPJMD</label>
            <input type="text" class="form-control" name="b">
          <label>Selaras?</label>
          <select class="form-control" name="c">
            <option selected>Pilih</option>
            <option value="Selaras">Selaras</option>
            <option value="Selaras dengan catatan">Selaras dengan catatan</option>
            <option value="Tidak selaras">Tidak selaras</option>
          </select>
          <label>Keterangan</label>
            <input type="text" class="form-control" placeholder="Hanya diisi jika tidak selaras atau selaras dengan catatan" name="d">
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="<?= base_url('kkk1/index') ?>" class="btn btn-danger">Batal</a>
      </form>
        </div>
      </section>
<!--
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              <br>
            </div>
          </form>
        </div>
      -->

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
