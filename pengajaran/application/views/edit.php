<div class="content-wrapper">
	<section class="content">
		<?php foreach ($pengajaran as $ajaran) { ?>

		<form action="<?php echo base_url().'pengajaran/update'; ?>" method="post">
			
			<div class="form-group">
	        		<label>Mata Kuliah</label>
	        		<input type="hidden" name="id" class="form-control" value="<?php echo $ajaran['id']; ?>">
	        		<input type="text" name="mata_kuliah" class="form-control" value="<?php echo $ajaran['mata_kuliah']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Kode</label>
	        		<input type="text" name="kode" class="form-control" value="<?php echo $ajaran['kode']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Semester</label>
	        		<input type="text" name="semester" class="form-control" value="<?php echo $ajaran['semester']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>SKS</label>
	        		<input type="text" name="sks" class="form-control" value="<?php echo $ajaran['sks']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Dosen Pengampu</label>
	        		<input type="text" name="dosen_pengampu" class="form-control" value="<?php echo $ajaran['dosen_pengampu']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Tahun Ajaran</label>
	        		<textarea name="tahun_ajaran" rows="10" class="form-control summernote" required="*"><?php echo $ajaran['tahun_ajaran']; ?></textarea>
	        		<!-- <input type="text" name="tahun_ajaran" class="form-control" value="<?php //echo $ajaran['tahun_ajaran']; ?>" required="*"> -->
	        	</div>

	        	<div class="form-group">
	        		<label>Capaian Pembelajaran MK</label>
	        		<textarea name="capaian_mk" rows="10" class="form-control summernote" required="*"><?php echo $ajaran['capaian_mk']; ?></textarea>
	        		<!-- <input type="text" name="capaian_mk" class="form-control" value="<?php //echo $ajaran['capaian_mk']; ?>" required="*"> -->
	        	</div>

	        	<div class="form-group">
	        		<label>Jurusan</label>
	        		<input type="text" name="jurusan" class="form-control" value="<?php echo $ajaran['jurusan']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Program Studi</label>
	        		<input type="text" name="program_studi" class="form-control" value="<?php echo $ajaran['program_studi']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Metode Penilaian</label>
	        		<textarea name="metode_penilaian" rows="10" class="form-control summernote" required="*"><?php echo $ajaran['metode_penilaian']; ?></textarea>
	        		<!-- <input type="text" name="metode_penilaian" class="form-control" value="<?php //echo $ajaran['metode_penilaian']; ?>" required="*"> -->
	        	</div>

	        	<div class="form-group">
	        		<label>Daftar Referensi</label>
	        		<textarea name="daftar_referensi" rows="10" class="form-control summernote" required="*"><?php echo $ajaran['daftar_referensi']; ?></textarea>
	        		<!-- <input type="text" name="daftar_referensi" class="form-control"value="<?php //echo $ajaran['daftar_referensi']; ?>" required="*"> -->
	        	</div>

	        	<div class="form-group">
	        		<label>Pertemuan Ke-</label>
	        		<input type="text" name="pertemuan_ke" class="form-control" value="<?php echo $ajaran['pertemuan_ke']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Tanggal</label>
	        		<!-- <input type="date" name="tanggal" class="form-control" required="*"> -->
	        		<input type="text" name="tanggal" class="form-control datepicker" value="<?php echo $ajaran['tanggal']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Jam</label>
	        		<input type="text" name="jam" class="form-control" value="<?php echo $ajaran['jam']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Pokok Bahasan</label>
	        		<input type="text" name="pokok_bahasan" class="form-control" value="<?php echo $ajaran['pokok_bahasan']; ?>" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Metode Pengajaran</label>
	        		<textarea name="metode_pengajaran" rows="10" class="form-control summernote" required="*"><?php echo $ajaran['metode_pengajaran']; ?></textarea>
	        		<!-- <input type="text" name="metode_pengajaran" class="form-control" value="<?php //echo $ajaran['metode_pengajaran']; ?>" required="*"> -->
	        	</div>

	        	<div class="form-group">
	        		<label>Diklat/Modul</label>
	        		<input type="text" name="modul" class="form-control" value="<?php echo $ajaran['modul']; ?>" required="*">
	        	</div>

	        	<a href="<?php echo base_url('pengajaran/index'); ?>" class="btn btn-danger">Kembali</a>
	        	<button type="submit" class="btn btn-primary">Simpan</button>


		</form>
		
		<?php } ?>
	</section>
</div>
