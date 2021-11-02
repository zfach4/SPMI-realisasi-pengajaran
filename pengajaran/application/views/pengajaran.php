<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Realisasi Pengajaran
            	<small>Control Panel</small>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">

    	<div class="navbar-form navbar-right">
	    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah aduan</button>

	    	<a href="<?php echo base_url('pengajaran/print') ?>" class="btn btn-danger"><i class="fa fa-print"> Print</i></a>

	    	<!-- <a href="<?php //echo base_url('pengajaran/pdf') ?>" class="btn btn-warning"><i class="fa fa-file disabled"> Export PDF</i></a> -->
	    </div>

    	<!-- <div class="navbar-form navbar-right">
    		<?php //form_open('pengajaran/search') ?>
    		<input type="text" name="keyword" class="form-control" placeholder="Search">
    			<button type="submit" class="btn btn-success">Cari</button>
    		<?php //form_close() ?>
    	</div> -->

    	<!-- <div class="input-group input-group-sm navbar-right navbar-form">
	        <?php //form_open('pengajaran/search') ?>
	        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="keyword">
	        <div class="input-group-append">
	          <button class="btn btn-navbar" type="submit">
	            <i class="fas fa-search"></i>
	          </button>
	        </div>
	        <?php //form_close() ?>
      	</div> -->

    	<table class="table">
    		<thead align="center">
    			<tr>
    				<th>Mata Kuliah</th>
	    			<th>Kode</th>
	    			<th>Semester</th>
	    			<th>SKS</th>
	    			<th>Dosen Pengampu</th>
	    			<!-- <th>Tahun Ajaran</th>
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
	    			<th>Modul</th> -->
	    			<th colspan="3">Aksi</th>
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
	    			<!-- <td><?php //echo $ajaran['tahun_ajaran']; ?></td>
	    			<td><?php //echo $ajaran['capaian_mk']; ?></td>
	    			<td><?php //echo $ajaran['jurusan']; ?></td>
	    			<td><?php //echo $ajaran['program_studi']; ?></td>
	    			<td><?php //echo $ajaran['metode_penilaian']; ?></td>
	    			<td><?php //echo $ajaran['daftar_referensi']; ?></td>
	    			<td><?php //echo $ajaran['pertemuan_ke']; ?></td>
	    			<td><?php //echo $ajaran['tanggal']; ?></td>
	    			<td><?php //echo $ajaran['jam']; ?></td>
	    			<td><?php //echo $ajaran['pokok_bahasan']; ?></td>
	    			<td><?php //echo $ajaran['metode_pengajaran']; ?></td>
	    			<td><?php //echo $ajaran['modul']; ?></td> -->
	    			<td><?php echo anchor('pengajaran/detail/'.$ajaran['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
	    			<td onclick="javascript: return confirm('Anda yakin menghapus data ini?') "><?php echo anchor('pengajaran/hapus/'.$ajaran['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
	    			<td><?php echo anchor('pengajaran/edit/'.$ajaran['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
	    		</tr>
	    		<?php endforeach; ?>
    		</tbody>
    	</table>
    </section>

    <!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">Form Input Realisasi Pengajaran</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	        <?php echo form_open_multipart('pengajaran/tambah_aksi'); ?>
	        	
	        	<div class="form-group">
	        		<label>Mata Kuliah</label>
	        		<!-- <select name="jenis_aduan" class="form-control" required="*">
	        			<option>Pelayanan</option>
	        			<option>Sarana Prasarana</option>
	        		</select> -->
	        		<input type="text" name="mata_kuliah" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Kode</label>
	        		<input type="text" name="kode" class="form-control" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Semester</label>
	        		<input type="text" name="semester" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>SKS</label>
	        		<input type="text" name="sks" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Dosen Pengampu</label>
	        		<input type="text" name="dosen_pengampu" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Tahun Ajaran</label>
	        		<!-- <input type="text" name="tahun_ajaran" class="form-control"> -->
	        		<textarea name="tahun_ajaran" rows="10" class="form-control summernote" required="*"></textarea>
	        	</div>

	        	<div class="form-group">
	        		<label>Capaian Pembelajaran MK</label>
	        		<!-- <input type="text" name="capaian_mk" class="form-control"> -->
	        		<textarea name="capaian_mk" rows="10" class="form-control summernote" required="*"></textarea>
	        	</div>

	        	<div class="form-group">
	        		<label>Jurusan</label>
	        		<input type="text" name="jurusan" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Program Studi</label>
	        		<input type="text" name="program_studi" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Metode Penilaian</label>
	        		<!-- <input type="text" name="metode_penilaian" class="form-control"> -->
	        		<textarea name="metode_penilaian" rows="10" class="form-control summernote" required="*"></textarea>
	        	</div>

	        	<div class="form-group">
	        		<label>Daftar Referensi</label>
	        		<!-- <input type="text" name="daftar_referensi" class="form-control"> -->
	        		<textarea name="daftar_referensi" rows="10" class="form-control summernote" required="*"></textarea>
	        	</div>

	        	<div class="form-group">
	        		<label>Pertemuan Ke-</label>
	        		<input type="text" name="pertemuan_ke" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Tanggal</label>
	        		<!-- <input type="date" name="tanggal" class="form-control" required="*"> -->
	        		<input type="text" name="tanggal" class="form-control datepicker" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Jam</label>
	        		<input type="text" name="jam" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Pokok Bahasan</label>
	        		<input type="text" name="pokok_bahasan" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Metode Pengajaran</label>
	        		<!-- <input type="text" name="metode_pengajaran" class="form-control"> -->
	        		<textarea name="metode_pengajaran" rows="10" class="form-control summernote" required="*"></textarea>
	        	</div>

	        	<div class="form-group">
	        		<label>Diklat/Modul</label>
	        		<input type="text" name="modul" class="form-control">
	        	</div>

	        	<!-- <div class="form-group">
	        		<label>Upload File</label>
	        		<input type="file" name="file" class="form-control" required="*">
	        	</div> -->

	        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
	       		<button type="submit" class="btn btn-primary">Simpan</button>

	        <?php echo form_close(); ?>
	      </div>
	    </div>
	  </div>
	</div>
</div>

	