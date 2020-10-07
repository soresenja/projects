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
          <!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Analisis Keselarasan RKPD dengan RKP : Dukungan Program</h3>
  <div class="card-body">
    <div>
      <p>Provinsi: g</p>
      <p>Tahun: 2020</p>
      <p>Nilai: 100,00</p>
      <table class="table table-bordered table-responsive">
  <thead>
    <tr>
      <th rowspan="2" scope="col">No.</th>
      <th rowspan="2" scope="col">Uraian Program</th>
      <th colspan="5" scope="col">Pembangunan Manusia dan Pengentasan Kemiskinan</th>
      <th colspan="5" scope="col">Infrastruktur dan Pemerataan Wilayah</th>
      <th colspan="5" scope="col">Nilai Tambah Sektor Riil, Industrialisasi, dan Kesempatan Kerja</th>
      <th colspan="5" scope="col">Ketahanan Pangan, Air, Energi dan Lingkungan Hidup</th>
      <th colspan="5" scope="col">Stabilitas Keamanan Nasional</th>
    </tr>
    <tr>
      <th scope="col">Program Prioritas Perlindungan Sosial dan Tata Kelola Kependudukan</th>
      <th scope="col">Program Prioritas Peningkatan Akses dan Mutu Pelayanan Kesehatan</th>
      <th scope="col">Program Prioritas Pemerataan Layanan Pendidikan Berkualitas dan Pengembangan Iptek-Inovasi</th>
      <th scope="col">Program Prioritas Pengentasan Kemiskinan</th>
      <th scope="col">Program Prioritas Revolusi Mental, Pembangunan Kebudayaan, dan Prestasi Bangsa</th>
      <th scope="col">Program Prioritas Perluasan Infrastruktur Dasar</th>
      <th scope="col">Program Prioritas Penguatan Infrastruktur Kawasan Tertinggal dan Ketahanan Bencana</th>
      <th scope="col">Program Prioritas Peningkatan Konektivitas Multimoda dan Antarmoda Mendukung Pertumbuhan Ekonomi</th>
      <th scope="col">Program Prioritas Peningkatan Infrastruktur Perkotaan</th>
      <th scope="col">Program Prioritas Perluasan Teknologi Informasi dan Komunikasi</th>
      <th scope="col">Program Prioritas Penguatan Kewirausahaan dan UMKM</th>
      <th scope="col">Program Prioritas Peningkatan Nilai Tambah dan Investasi Sektor Riil</th>
      <th scope="col">Program Prioritas Peningkatan Produktivitas Tenaga Kerja dan Pencipataan Lapangan Kerja</th>
      <th scope="col">Program Prioritas Peningkatan Ekspor Bernilai Tambah Tinggi dan Penguatan TKDN</th>
      <th scope="col">Penguatan Pilar Pertumbuhan dan Daya Saing Ekonomi</th>
      <th scope="col">Program Prioritas Peningkatan Ketersediaan, Akses dan Kualitas Konsumsi Pangan</th>
      <th scope="col">Program Prioritas Peningkatan Kuaintitas, Kualitas dan Aksesibilitas Air</th>
      <th scope="col">Program Prioritas Pemenuhan Kebutuhan Energi melalui Peningkatan EBT</th>
      <th scope="col">Program Prioritas Peningkatan Daya Dukung SDA dan Daya Tampung Lingkungan</th>
      <th scope="col">Penguatan Ketahanan Bencana</th>
      <th scope="col">Program Prioritas Penguatan Kemampuan Pertahanan</th>
      <th scope="col">Program Prioritas Peningkatan Diplomasi Politik dan Kerjasama Internasional</th>
      <th scope="col">Program Prioritas Penguatan Sistem Peradilan dan Upaya Antikorupsi</th>
      <th scope="col">Program Prioritas Penanggulangan Terorisme, Peningkatan Keamanan Siber, dan Penguatan Keamanan Laut</th>
      <th scope="col">Program Prioritas Penanggulangan Narkotika dan Penguatan Kamtibmas</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($sync_prorkprkpd as $s){
    ?>
    <tr>
      <td><?php echo $s->no_program ?></td>
      <td><?php echo $s->program ?></td>
      <td><?php echo $s->p_a1 ?></td>
      <td><?php echo $s->p_a2 ?></td>
      <td><?php echo $s->p_a3 ?></td>
      <td><?php echo $s->p_a4 ?></td>
      <td><?php echo $s->p_a5 ?></td>
      <td><?php echo $s->p_b1 ?></td>
      <td><?php echo $s->p_b2 ?></td>
      <td><?php echo $s->p_b3 ?></td>
      <td><?php echo $s->p_b4 ?></td>
      <td><?php echo $s->p_b5 ?></td>
      <td><?php echo $s->p_c1 ?></td>
      <td><?php echo $s->p_c2 ?></td>
      <td><?php echo $s->p_c3 ?></td>
      <td><?php echo $s->p_c4 ?></td>
      <td><?php echo $s->p_c5 ?></td>
      <td><?php echo $s->p_d1 ?></td>
      <td><?php echo $s->p_d2 ?></td>
      <td><?php echo $s->p_d3 ?></td>
      <td><?php echo $s->p_d4 ?></td>
      <td><?php echo $s->p_d5 ?></td>
      <td><?php echo $s->p_e1 ?></td>
      <td><?php echo $s->p_e2 ?></td>
      <td><?php echo $s->p_e3 ?></td>
      <td><?php echo $s->p_e4 ?></td>
      <td><?php echo $s->p_e5 ?></td>
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
