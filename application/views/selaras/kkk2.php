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
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
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
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Sinkronisasi Arah Kebijakan dan Strategi Pembangunan</h3>
  <div class="card-body">
    <div>
      <span class="float-right mb-3 mr-2">
        <a href="<?=base_url('kkk2/input')?>" class="text-success">
          <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
        </a>
      </span>
      <table class="table table-bordered">
  <thead>
    <tr>
      <th class="text-center" scope="col">No.</th>
      <th class="text-center" scope="col">Arah Kebijakan RPJMN (Nawa Cita)</th>
      <th class="text-center" scope="col">Arah Kebijakan RPJMD Provinsi</th>
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
    foreach($sync_arah as $s){
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <!--
      kolom arah_rpjmn pada database diganti id_arahrpjmn, mengambil data dari sumber: tabel daftar_arahrpjmn
      kolom ini otomatis menampilkan seluruh data pada database daftar_arahrpjmn
      -->
        <td><?php echo $s->arahrpjmn ?></td>
        <td><?php echo $s->arah_rpjmd ?></td>
        <td><?php echo $s->selaras ?></td>
        <td><?php echo $s->keterangan ?></td>
        <!--
        fungsi: hapus isian kolom 3-5 pada tabel
      -->
        <td><?php echo anchor('kkk2/hapus/'.$s->id_sync_arah,'Hapus'); ?></td>
        <!--
        edit untuk mengisi/edit kolom 3-5 pada tabel view
      -->
        <td><a href="<?=base_url('kkk2/input')?>">edit</a></td>
    </tr>
  <?php } ?>
    <tr>
      <td></td>
      <td colspan="2">Total Keselarasan</td>
      <td>4
        <!--
        menghitung jumlah "selaras" pada cell di atasnya
        -->
      </td>
    </tr>
    <tr>
      <td></td>
      <td colspan="2">Persentase Keselarasan</td>
      <td>100%
        <!--
        persentase jumlah selaras dengan jumlah isian pada kolom sebelumnya (kolom ke 3)
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
