<div class="overflow-auto"><!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
<!-- <button class="btn btn-primary"><i class="fa fa-search-plus">Tambah</i></button> -->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Juz ke</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $no = 1;
        foreach ($juz as $j) :?>
        <tr>
          <td><?php echo $j->nama_juz ?></td>
      </td>
    </tr>
     <?php endforeach; ?>
  </tbody>
</table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 