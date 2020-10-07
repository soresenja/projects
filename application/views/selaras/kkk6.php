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
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Sinkronisasi Kerangka Pendanaan Program dan Kegiatan yang Mendukung Prioritas Nasional</h3>
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
  <thead>
    <tr>
      <th rowspan="3" scope="col">Bidang Urusan Pemerintahan</th>
      <th rowspan="3" scope="col">Program Prioritas Pembangunan Nasional</th>
      <th rowspan="3" scope="col">Indikator Kinerja Program (Outcome)</th>
      <th rowspan="3" scope="col">Kondisi Kinerja Awal RPJMD (Tahun 0)</th>
      <th colspan="15" scope="col">Kerangka Pendanaan  RPJMD Provinsi Periode 2017-2022 (juta rupiah)</th>
      <th rowspan="3" scope="col">Kondisi Kinerja Akhir RPJMD (Tahun 5)</th>
      <th rowspan="3" scope="col">Telah Didukung dengan Penganggaran</th>
      <th rowspan="3" scope="col">Keterangan Apabila tidak terdapat anggaran di salah satu tahun</th>
    </tr>
    <tr>
      <th colspan="3" scope="col">2018</th>
      <th colspan="3" scope="col">2019</th>
      <th colspan="3" scope="col">2020</th>
      <th colspan="3" scope="col">2021</th>
      <th colspan="3" scope="col">2022</th>
    </tr>
    <tr>
      <th scope="col">Target</th>
      <th scope="col">Rp</th>
      <th scope="col">Sumber Dana</th>
      <th scope="col">Target</th>
      <th scope="col">Rp</th>
      <th scope="col">Sumber Dana</th>
      <th scope="col">Target</th>
      <th scope="col">Rp</th>
      <th scope="col">Sumber Dana</th>
      <th scope="col">Target</th>
      <th scope="col">Rp</th>
      <th scope="col">Sumber Dana</th>
      <th scope="col">Target</th>
      <th scope="col">Rp</th>
      <th scope="col">Sumber Dana</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($sync_dana as $s){
    ?>
    <tr>
      <td><?php echo $s->bidang ?></td>
      <td><?php echo $s->program_pn ?></td>
      <td><?php echo $s->indikator ?></td>
      <td><?php echo $s->kondisi0 ?></td>
      <td><?php echo $s->target1 ?></td>
      <td><?php echo $s->rp1 ?></td>
      <td><?php echo $s->dana1 ?></td>
      <td><?php echo $s->target2 ?></td>
      <td><?php echo $s->rp2 ?></td>
      <td><?php echo $s->dana2 ?></td>
      <td><?php echo $s->target3 ?></td>
      <td><?php echo $s->rp3 ?></td>
      <td><?php echo $s->dana3 ?></td>
      <td><?php echo $s->target4 ?></td>
      <td><?php echo $s->rp4 ?></td>
      <td><?php echo $s->dana4 ?></td>
      <td><?php echo $s->target5 ?></td>
      <td><?php echo $s->rp5 ?></td>
      <td><?php echo $s->dana5 ?></td>
      <td><?php echo $s->kondisi5 ?></td>
      <td><?php echo $s->dukungan ?></td>
      <td><?php echo $s->keterangan ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<p>Jumlah Program RPJMD yang selaras RPJMN didukung dengan penganggaran dalam 5 tahun RPJMD: 80</p>
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
