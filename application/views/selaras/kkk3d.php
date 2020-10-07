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
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Sinkronisasi Sasaran, dan Indikator RPJMD dengan RPJMN</h3>
  <div class="card-body">
    <div>
      <span class="float-right mb-3 mr-2">
        <a href="<?=base_url('kkk3d/input')?>" class="text-success">
          <!--
          untuk menginput baru
        -->
          <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
        </a>
      </span>
      <table class="table table-bordered">
        <!--
        tambahkan fitur search pada table
        -->
  <thead>
    <tr>
      <th class="text-center" rowspan="2" scope="col">No.</th>
      <th class="text-center" colspan="3" scope="col">RPJMN</th>
      <th class="text-center" colspan="2" scope="col">RPJMD</th>
      <th class="text-center" rowspan="2" scope="col">Sasaran Selaras Antara RPJMN dengan RPJMD</th>
      <th class="text-center" rowspan="2" scope="col">Keterangan</th>
      <th class="text-center" rowspan="2" colspan="2" scope="col">Aksi</th>
    </tr>
    <tr>
      <th class="text-center" scope="col">Tujuan</th>
      <th class="text-center" scope="col">Sasaran</th>
      <th class="text-center" scope="col">Indikator</th>
      <th class="text-center" scope="col">Sasaran</th>
      <th class="text-center" scope="col">Indikator</th>
    </tr>
  </thead>
  <tbody>
    <!--
    isian pada masing2 kolom, jika ada data yang sama di merge menjadi 1 cell
    -->
    <?php
    $no = 1;
    foreach($sync_sasaran as $s){
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <!--
      kolom tu_rpjmn pada database diganti menjadi id_sync_tujuan
      kolom ini otomatis menampilkan data berdasarkan isian dari database sync_tujuan, jika tidak selaras, maka tidak muncul lagi pada kolom ini dan pada penilaian selanjutnya
      -->
        <td><?php echo $s->tu_rpjmn ?></td>
        <!--
        kolom sa_rpjmn pada database diganti id_sasaranrpjmn, mengambil data dari sumber: tabel daftar_sasaranrpjmn
        isian pada kolom sasaran tergantung tujuan mana yang ditampilkan pada kolom sebelumnya
        -->
        <td><?php echo $s->sa_rpjmn ?></td>
        <td><?php echo $s->indikator_rpjmn ?></td>
        <td><?php echo $s->sa_rpjmd ?></td>
        <!--
        kolom sasaran dan indikator rpjmd bisa kosong isinya, jika memang ada sasaran dan indikator rpjmn yang tidak dipilih pada form
      -->
        <td><?php echo $s->i_rpjmd ?></td>
        <td><?php echo $s->selaras ?></td>
        <td><?php echo $s->keterangan ?></td>
        <!--
        fungsi: hapus isian kolom 4-7 pada tabel
        muncul pada row sasaran rpjmd saja, bukan masing2 indikator
        yang dihapus ada sasaran rpjmd beserta seluruh indikatornya
      -->
        <td><?php echo anchor('kkk3d/hapus/'.$s->id_sync_sasaran,'Hapus'); ?></td>
        <!--
        edit untuk edit kolom 4-7 pada tabel view, jika sudah pernah mengisi, maka isian akan muncul di form
        muncul pada row sasaran rpjmd saja, bukan masing2 indikator
        yang diedit atau diinput adalah sasaran rpjmd beserta seluruh indikatornya
        bisa juga untuk menginput baru, sesuai row terkait
      -->
        <td><a href="<?=base_url('kkk3d/input')?>">edit</a></td>
    </tr>
  <?php } ?>
  <tr>
    <td></td>
    <td colspan="4">Jumlah Sasaran RPJMN: </td>
    <td>
      <!--
      menghitung jumlah "sasasaran RPJMN" pada cell di atasnya
      -->
    </td>
  </tr>
  <tr>
    <td></td>
    <td colspan="4">JUMLAH SASARAN RPJMD YANG MENDUKUNG RPJMN: </td>
    <td>
      <!--
      menghitung jumlah "selaras" pada cell di atasnya
      -->
    </td>
  </tr>
  <tr>
    <td></td>
    <td colspan="4">Persentase Sasaran RPJMN yang telah didukung oleh sasaran RPJMD: </td>
    <td>
      <!--
      menghitung persentase jumlah "selaras" dibandingkan dengan jumlah sasaran rpjmn
      -->
    </td>
  </tr>
  </tbody>
</table>
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
  <script>
  const $tableID = $('#table');
const $BTN = $('#export-btn');
const $EXPORT = $('#export');

const newTr = `
<tr class="hide">
<td class="pt-3-half" contenteditable="true"></td>
<td class="pt-3-half" contenteditable="true">Example</td>
<td class="pt-3-half" contenteditable="true">Example</td>
<td class="pt-3-half" contenteditable="true">Example</td>
<td class="pt-3-half" contenteditable="true">Example</td>
<td class="pt-3-half">
  <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
  <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
</td>
<td>
  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
</td>
</tr>`;

$('.table-add').on('click', 'i', () => {

 const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

 if ($tableID.find('tbody tr').length === 0) {

   $('tbody').append(newTr);
 }

 $tableID.find('table').append($clone);
});

$tableID.on('click', '.table-remove', function () {

 $(this).parents('tr').detach();
});

$tableID.on('click', '.table-up', function () {

 const $row = $(this).parents('tr');

 if ($row.index() === 0) {
   return;
 }

 $row.prev().before($row.get(0));
});

$tableID.on('click', '.table-down', function () {

 const $row = $(this).parents('tr');
 $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.on('click', () => {

 const $rows = $tableID.find('tr:not(:hidden)');
 const headers = [];
 const data = [];

 // Get the headers (add special header logic here)
 $($rows.shift()).find('th:not(:empty)').each(function () {

   headers.push($(this).text().toLowerCase());
 });

 // Turn all existing rows into a loopable array
 $rows.each(function () {
   const $td = $(this).find('td');
   const h = {};

   // Use the headers from earlier to name our hash keys
   headers.forEach((header, i) => {

     h[header] = $td.eq(i).text();
   });

   data.push(h);
 });

 // Output the result
 $EXPORT.text(JSON.stringify(data));
});
  </script>
  </body>
  </html>
