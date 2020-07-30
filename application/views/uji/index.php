<div class="overflow-auto">
	<form method="post" action="<?php echo base_url('uji/input_nilai_uji'); ?>">
	<div class="container-fluid">
	   <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


<input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>"/>
<input type="hidden" name="id_evaluasi" value="<?php echo $id_evaluasi; ?>"/>
<input type="hidden" name="nilai_kategori" value="<?php echo $kategori; ?>"/>
<?php foreach ($evaluasi as $e ) :?>
<input type="hidden" name="surat" value="<?php echo $e->id_surat; ?>"/>
<?php endforeach; ?>

<div class="container-fluid">
	<section class="section text-left">
		<select class="form-control" name="id_siswa">
			<option>Nama Siswa</option>
			<?php foreach ($siswa->result() as $row) : ?>
				<option value="<?= $row->id_siswa ?>"><?= $row->nama ?></option>
			<?php endforeach; ?>
		</select>
		<div class="form-group row mt-3">
		<div class="col-md-3">
			<label class="ml-3">Guru Penguji </label>
		</div>
		<div class="col-md-9">
			<input type="text" name="guru_penguji" class="form-control" value="<?= $user['name']; ?>" readonly>
		</div>
	</div>
	</section>
</div>

	
<?php foreach ($dari as $d) {
} ?>
<?php foreach ($sampai as $s) {
} ?>
<?php
//buatanku untuk mempermudah membuat kolom otomatis
$jmlkolom = $s-$d+1 ;

?>

<br>

<section class="section text-center">
	<table class="table">
		<tr>
			<th>#</th>
			<th>Pengetahuan</th>
			<th>Keterampilan</th>
		</tr>
		<?php for($i=$d; $i<=$s; $i++):?>
		<tr>
			<td>ayat</td>
			<td>
				<input type="checkbox" name="p[]" value="<?= $i . 'p' ?>"><?= $i ?>
			</td>
			<td>
				<input type="checkbox" name="k[]" value="<?= $i . 'k' ?>"><?= $i ?>
			</td>
		</tr>
		<?php endfor; ?>

	</table>
</section>
<section class="section text-center">
<button class="btn btn-success" type="submit">Input Nilai</button>
</section>
</form>

</div>
</div>