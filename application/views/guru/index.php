<div class="overflow-auto"><!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-left">
      <button class="btn btn-primary mb-2 " data-toggle="" data-target="#"><i class="fa fa-plus"></i>
      </button> <?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
<!-- <button class="btn btn-primary"><i class="fa fa-search-plus">Tambah</i></button> -->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Hp</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $no = 1;
        foreach ($guru as $g) :?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $g->name ?></td>
          <td><?php echo $g->alamat ?></td>
          <td><?php echo $g->no_hp ?></td> 
    </tr>
     <?php endforeach; ?>
  </tbody>
</table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Guru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <?php echo form_open_multipart('guru/tambah_aksi'); ?>

          <div class="form-group">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
          </div>
         
          <div class="form-group">
            <label>No Hp</label>
            <input type="text" name="nohp_siswa" class="form-control">
          </div>

          
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>   

        <?php form_close(); ?> 
      </div>
      <div class="modal-footer">
</div>
</div>
</div>
</div>


