<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-12">

            <div class="card o-hidden border-0 shadow-lg my-3">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-">

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Pencapaian</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=1;
    foreach ($siswa->result() as $s) :?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $s->nama ?></td>
      <td><?= $s->id_kelas ?></td>
      <td><a href=""><i class="fa fa-award"></i> Cek Prestasi</a></td>
    </tr>
  <?php endforeach; ?>
    
  </tbody>
</table>

</div></div></div></div></div></div></div></div>
</div>