<div class="overflow-auto"><div class="container">
  <div class="row">
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-left">
      <button class="btn btn-primary mb-2 " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
      </button> <?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Wali Kelas</th>
      <th scope="col">No Hp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $no = 1;
        foreach ($kelas->result() as $k) :?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $k->kelas ?></td>
          <td><?php echo $k->wali_kelas ?></td>
          <td><?php echo $k->no_hp ?></td> 
      <td><a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
      <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
    </tr>
     <?php endforeach; ?>
  </tbody>
</table>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content --> 

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('kelas/tambah_aksi'); ?>
        <div class="form-group">
          <label>Nama Kelas</label>
          <input type="text" name="kelas" class="form-control">
        </div>
        <div class="form-group">
          <label>Wali Kelas</label>
          <input type="text" name="wali_kelas" class="form-control">
        </div>
        <div class="form-group">
          <label>No Hp</label>
          <input type="text" name="no_hp" class="form-control">
        </div>
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
     <?php form_close(); ?> 
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


  </div>
</div>