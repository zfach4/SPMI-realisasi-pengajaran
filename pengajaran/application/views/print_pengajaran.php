<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Realisasi Pengajaran | Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/summernote/summernote.css" >
  <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fontawesome.com/" rel="stylesheet">
  <!-- datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
</head>
<body>
	<div>
		<table class="table">
    		<thead align="center">
    			<tr>
    				<th>Mata Kuliah</th>
	    			<th>Kode</th>
	    			<th>Semester</th>
	    			<th>SKS</th>
	    			<th>Dosen Pengampu</th>
	    			<th>Tahun Ajaran</th>
	    			<th>Capaian Pembelajaran MK</th>
	    			<th>Jurusan</th>
	    			<th>Program Studi</th>
	    			<th>Metode Penilaian</th>
	    			<th>Daftar Referensi</th>
	    			<th>Pertemuan Ke-</th>
	    			<th>Tanggal</th>
	    			<th>Jam</th>
	    			<th>Pokok Bahasan</th>
	    			<th>Metode Pengajaran</th>
	    			<th>Modul</th>
	    		</tr>
    		</thead>
    		<tbody>
    			<?php 
	    		foreach ($pengajaran as $ajaran) : ?>
	    		<tr>
	    			<td><?php echo $ajaran['mata_kuliah'] ?></td>
	    			<td><?php echo $ajaran['kode'] ?></td>
	    			<td><?php echo $ajaran['semester'] ?></td>
	    			<td><?php echo $ajaran['sks'] ?></td>
	    			<td><?php echo $ajaran['dosen_pengampu'] ?></td>
	    			<td><?php echo $ajaran['tahun_ajaran']; ?></td>
	    			<td><?php echo $ajaran['capaian_mk']; ?></td>
	    			<td><?php echo $ajaran['jurusan']; ?></td>
	    			<td><?php echo $ajaran['program_studi']; ?></td>
	    			<td><?php echo $ajaran['metode_penilaian']; ?></td>
	    			<td><?php echo $ajaran['daftar_referensi']; ?></td>
	    			<td><?php echo $ajaran['pertemuan_ke']; ?></td>
	    			<td><?php echo $ajaran['tanggal']; ?></td>
	    			<td><?php echo $ajaran['jam']; ?></td>
	    			<td><?php echo $ajaran['pokok_bahasan']; ?></td>
	    			<td><?php echo $ajaran['metode_pengajaran']; ?></td>
	    			<td><?php echo $ajaran['modul']; ?></td>
	    		</tr>
	    		<?php endforeach; ?>
    		</tbody>
    	</table>

    	<a href="<?php echo base_url('pengajaran/index'); ?>">Terimakasih</a>

    	<script type="text/javascript">
    		window.print();
    	</script>

    </div>
</body>
</html>
    	