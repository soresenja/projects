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
  <!--
  tambahkan tombol print
  -->
  <span>tombol print</span>
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Sinkronisasi Misi</h3>
  <div class="card-body">
    <div>
      <span class="float-right mb-3 mr-2">
        <a href="<?=base_url('kkk3b/input')?>" class="text-success">
          <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
        </a>
      </span>
      <table class="table table-bordered">
  <thead>
    <tr>
      <th class="text-center" scope="col">No.</th>
      <th class="text-center" scope="col">Misi RPJMN</th>
      <th class="text-center" scope="col">Misi Kepala Daerah dan RPJMD</th>
      <th class="text-center" scope="col">Selaras Antara RPJMN dengan RPJMD</th>
      <th class="text-center" scope="col">Keterangan</th>
      <th class="text-center" colspan="2" scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <!--
    isian pada masing2 kolom, jika ada data yang sama di merge menjadi 1 cell
    -->
    <?php
    $no = 1;
    foreach($sync_misi as $s){
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <!--
      kolom visirpjmn pada database diganti id_misirpjmn, mengambil data dari sumber: tabel daftar_misirpjmn
      kolom ini otomatis menampilkan seluruh data pada database daftar_misirpjmn
      -->
        <td><?php echo $s->misirpjmn ?></td>
        <td><?php echo $s->misi_rpjmd ?></td>
        <td><?php echo $s->selaras ?></td>
        <td><?php echo $s->keterangan ?></td>
      <!--
      fungsi: hapus isian kolom 3-5 pada tabel
    -->
      <td><?php echo anchor('kkk3b/hapus/'.$s->id_sync_misi,'Hapus'); ?></td>
      <!--
      edit untuk mengisi/edit kolom 3-5 pada tabel view
    -->
      <td><a href="<?=base_url('kkk3b/input')?>">edit</a></td>
    </tr>
    <?php } ?>
    <tr>
      <td></td>
      <td colspan="2">Total Keselarasan</td>
      <td><?=$data_selaras;?></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="2">Persentase Keselarasan</td>
      <td><?=($total != 0)? $jumlah = (number_format(( $hitung_selaras / $total ) *100, 2, ',', ' '))."%":''?></td>
    </tr>
  </tbody>
</table>
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
