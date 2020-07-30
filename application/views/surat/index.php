<div class="overflow-auto"><!-- Begin Page Content -->
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
      <th scope="col">Surat ke</th>
      <th scope="col">Nama Surat</th>
      <th scope="col">Jml Ayat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($surat as $s) :?>
        <tr>
          <td><?php echo $s->nomor_surat ?></td>
          <td><?php echo $s->nama_surat ?></td>
          <td><?php echo $s->jumlah_ayat ?></td> 
      <!-- <td><a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
      <td onclick="return confirm('Yakin?')"><?= anchor('surat/hapus/'.$s->id,'<div class="btn btn-danger"><i class="fa fa-trash"></i></div>');?>
      </td>
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
        <h4 class="modal-title" id="exampleModalLabel">Tambah Surat</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <?php echo form_open_multipart('surat/tambah_aksi'); ?>

          <div class="form-group">
            <label>Nomor Surat / Surat ke</label>
            <input type="text" name="nomor_surat" class="form-control">
          </div>
          
          <div class="form-group">
            <label>Nama Surat</label>
            <input type="text" name="nama_surat" class="form-control">
          </div>
          <div class="form-group">
            <label>Jumlah Ayat</label>
            <input type="text" name="jumlah_ayat" class="form-control">
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


