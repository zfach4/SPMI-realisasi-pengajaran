<div class="content-wrapper">
	<section class="content">
		<h3 class="m-0 text-dark">Realisasi Pengajaran
            	<small>Detail Data</small>
        </h3>
		<br>
		<table class="table">
			<tr>
				<th>Mata Kuliah</th>
				<td><?php echo $detail->mata_kuliah ?></td>
			</tr>
			<tr>
				<th>Kode</th>
				<td><?php echo $detail->kode ?></td>
			</tr>
			<tr>
				<th>Semester</th>
				<td><?php echo $detail->semester ?></td>
			</tr>
			<tr>
				<th>SKS</th>
				<td><?php echo $detail->sks ?></td>
			</tr>
			<tr>
				<th>Dosen Pengampu</th>
				<td><?php echo $detail->dosen_pengampu ?></td>
			</tr>
			<tr>
				<th>Tahun Ajaran</th>
				<td><?php echo $detail->tahun_ajaran ?></td>
			</tr>
			<tr>
				<th>Capaian Pembelajaran MK</th>
				<td><?php echo $detail->capaian_mk ?></td>
			</tr>
			<tr>
				<th>Jurusan</th>
				<td><?php echo $detail->jurusan ?></td>
			</tr>
			<tr>
				<th>Program Studi</th>
				<td><?php echo $detail->program_studi ?></td>
			</tr>
			<tr>
				<th>Metode Penilaian</th>
				<td><?php echo $detail->metode_penilaian ?></td>
			</tr>
			<tr>
				<th>Daftar Referensi</th>
				<td><?php echo $detail->daftar_referensi ?></td>
			</tr>
			<tr>
				<th>Pertemuan Ke-</th>
				<td><?php echo $detail->pertemuan_ke ?></td>
			</tr>
	    	<tr>
				<th>Tanggal</th>
				<td><?php echo $detail->tanggal ?></td>
			</tr>
			<tr>
				<th>Jam</th>
				<td><?php echo $detail->jam ?></td>
			</tr>
			<tr>
				<th>Pokok Bahasan</th>
				<td><?php echo $detail->pokok_bahasan ?></td>
			</tr>
			<tr>
				<th>Metode Pengajaran</th>
				<td><?php echo $detail->metode_pengajaran ?></td>
			</tr>
			<tr>
				<th>Modul</th>
				<td><?php echo $detail->modul ?></td>
			</tr>
		</table>
		<br>
		<a href="<?php echo base_url('pengajaran/index'); ?>" class="btn btn-primary">Kembali</a>
	</section>
</div>