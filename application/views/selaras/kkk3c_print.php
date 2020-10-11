<!DOCTYPE html>
<html>
<head>
	<title><?=$judul?></title>
	<style type="text/css">
		*{
			font-family: arial;
		}
		table{
			width: 100%;
			border-collapse: collapse;
		}
		table, th, td {
		  border: 1px solid black;
		}
		td{
			text-align: center;
		}
		thead{
			font-weight: bold;
		}
		.text-center{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1 class="text-center">Sinkronisasi Tujuan</h1>
	<table>
		<thead>
			<tr>
				<td>No.</td>
				<td>Tujuan RPJMN</td>
				<td>Tujuan RPJMD</td>
				<td>Selaras Antara RPJMN dan RPJMD</td>
				<td>Keterangan</td>
			</tr>
		</thead>
		<tbody>
		    <?php
		    $no = 1;
		    foreach($sync_tujuan as $s){
		    ?>
		    <tr>
		      	<td><?=$no++ ?></td>
		        <td><?=$s->tu_rpjmn ?></td>
		        <td><?=$s->tu_rpjmd ?></td>
		        <td><?=$s->selaras ?></td>
		        <td><?=$s->keterangan ?></td>
		    </tr>
		    <?php } ?>
		    <tr>
		      <td colspan="3">Total Keselarasan</td>
		      <td colspan="2"><?=$visi_sel?></td>
		    </tr>
		    <tr>
		      <td colspan="3">Persentase Keselarasan</td>
		      <td colspan="2"><?= number_format(($visi_sel/$visi_total)*100, 2, ',', ' ')?>%</td>
		    </tr>
		</tbody>
	</table>
</body>
<script type="text/javascript">
	window.print();
</script>
</html>