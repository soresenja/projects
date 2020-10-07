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
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Sinkronisasi Program Daerah dengan Prioritas Nasional, Program Prioritas, dan Kegiatan Prioritas Berdasarkan Indikator dan Pembagian Urusan Pemerintahan</h3>
  <div class="card-body">
    <div>
      <span class="float-right mb-3 mr-2">
        <a href="<?=base_url('kkk5/input')?>" class="text-success">
          <!--
          untuk menginput baru
        -->
          <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
        </a>
      </span>
      <table class="table table-bordered table-responsive">
        <!--
        pagination hanya di table ini saja
        tabel dibawahnya tidak
        -->
  <thead>
    <tr>
      <th class="text-center" scope="col">No. Program</th>
      <th class="text-center" scope="col">Program Prioritas Nasional</th>
      <th class="text-center" scope="col">Urusan dalam UU No. 23/14</th>
      <th class="text-center" scope="col">Program RPJMD</th>
      <th class="text-center" scope="col">SKPD Penanggung Jawab</th>
      <th class="text-center" scope="col">Selaras Antara RPJMN dengan RPJMD</th>
      <th class="text-center" scope="col">Keterangan Apabila Belum Selaras</th>
      <th class="text-center" rowspan="2" colspan="2" scope="col">Aksi</th>
    </tr>
    <!--
    tambahkan fitur search pada table
    -->
  </thead>
  <tbody>
    <tr>
      <td>//id_bidang_pn id_subbidang_pn pada tabel daftar_pn</td>
      <td>//bidang_pn</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>//no_subbidang_pn dari id_subbidang_pn pada tabel daftar_pn</td>
      <td>subbidang_pn</td>
    </tr>
    <?php
    foreach($sync_program as $s){
    ?>
    <tr>
      <!--
      no_program dan program_pn pada database diganti id_pn yang berkaitan dengan daftar_pn
      no_pn di bawah adalah isian pada tabel daftar_pn kolom no_pn
      tampilan no_pn muncul otomatis
      -->
      <td>no_pn</td>
      <!--
      program_pn di bawah diganti menjadi id_pn (dari tabel daftar_pn, mengambil isian kolom pn)
      tampilan program_pn muncul otomatis
      -->
      <td><?php echo $s->program_pn ?></td>
      <td><?php echo $s->uu ?></td>
      <td><?php echo $s->program_rpjmd ?></td>
      <td><?php echo $s->opd ?></td>
      <td><?php echo $s->selaras ?></td>
      <td><?php echo $s->keterangan ?></td>
      <!--
      tampilan di atas menampilkan seluruh bidang, subbidang, dan pn pada database dan isian terkait dengan variabel2 itu
      -->
      <!--
      fungsi: hapus isian kolom 3-7 pada tabel
      muncul pada row program_pn saja
    -->
      <td>hapus</td>
      <!--
      edit untuk edit kolom 3-7 pada tabel view, jika sudah pernah mengisi, maka isian akan muncul di form
      muncul pada row program_pn saja
      bisa juga untuk menginput baru, sesuai row terkait
    -->
      <td><a href="<?=base_url('kkk5/input')?>">edit</a></td>
    </tr>

  <?php } ?>
  <tr>
    <td></td>
    <td colspan="2">Subtotal Program RPJMD di (munculkan nama bidang terkait yang ada di atas)</td>
    <td>//jumlah program rpjmd yang diinput per bidang</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <!--
  selanjutnya muncul lagi bidang subbidang dan program yang lain , kemudian sub total lagi
  row total program yang ada di bawah ini muncul di row paling akhir dari tabel ini
  -->
  <tr>
    <td></td>
    <td colspan="2">Total Program</td>
    <td colspan="4">//jumlah program rpjmd yang diinput dari jumlah subtotal</td>
  </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tr>
    <td>Persentase Total Program Bidang RPJMN yang didukung Program RPJMD:</td>
    <td>//total isian program_rpjmd dibagi total hitungan program_pn</td>
  </tr>
  <tr>
    <td>// seluruh nama bidang dari daftar_bidang_pn</td>
    <td>//total isian program_rpjmd per bidang dibagi total isian program_pn per bidang</td>
  </tr>
  <tr>
    <td>// seluruh nama bidang dari daftar_bidang_pn</td>
    <td>//total isian program_rpjmd per bidang dibagi total isian program_pn per bidang</td>
  </tr>
  <!--
  dst. sampai seluruh bidang muncul
  -->
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
