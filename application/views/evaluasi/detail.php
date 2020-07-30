<div class="overflow-auto">
	<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

<div class="container">
<div class="row">
<div class="col-md-6">
	<table class="table">
		<tr>
			<th>Nama</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
		<tr>
			<th>Kelas</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
		<tr>
			<th>Guru Penguji</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
		<tr>
			<th>Kategori</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
		<tr>
			<th>Tanggal</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
	</table>
</div>
<div class="col-md-6">
	<table class="table">
		<tr>
			<th>Juz</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
		<tr>
			<th>Surat</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
		<tr>
			<th>Ayat</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
		<tr>
			<th>Nilai</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
		<tr>
			<th>Publish</th>
			<td><?= $detail->id_siswa ?></td>
		</tr>
	</table>
</div>
</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 