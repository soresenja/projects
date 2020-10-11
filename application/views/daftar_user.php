<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <?php $this->load->view('template/header_style.php') ?>

    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
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
          <!-- Editable table -->
<div class="card">

  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">USER</h3>
  <div class="card-body">
    <div>
      <span class="float-right mb-3 mr-2">
        <a href="<?=base_url('crud/tambah')?>" class="text-success">
          <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
        </a>
      </span>
  <table class="table table-bordered table-striped text-center" id="example1">
  <thead>
    <tr>
      <td scope="col">No.</td>
      <td scope="col">Provinsi</td>
      <td scope="col">Kabupaten/Kota</td>
      <td scope="col">Username</td>
      <td scope="col">Password</td>
      <td scope="col">Nama Lengkap</td>
      <td scope="col">Jabatan</td>
      <td scope="col">Unit Kerja</td>
      <td scope="col">Level</td>
      <td scope="col">Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach($user as $u){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->provinsi ?></td>
        <td><?php echo $u->kabkota ?></td>
        <td><?php echo $u->username ?></td>
        <td><?php echo $u->pass ?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->jabatan ?></td>
        <td><?php echo $u->unit ?></td>
        <td><?php echo $u->level ?></td>
        <td><?php echo anchor('crud/hapus/'.$u->id_user,'Hapus'); ?> | <a href="<?=base_url('crud/edit')?>" class="btn btn-warning">Edit</a></td>
    </tr>
  <?php } ?>
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
    <script src="<?= base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script>
      $(function() {
          $("#example1").DataTable();
      });
    </script>
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
