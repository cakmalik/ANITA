<div class="overflow-auto"><div class="container">
      <div class="row">
        <div class="col-lg-12">
          
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-left">
      <button class="btn btn-primary mb-2 " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
      </button> <?= $title; ?></h1>

    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">No Hp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $no = 1;
        foreach ($siswa as $s) :?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $s->nama ?></td>
          <td><?php echo $s->kelas ?></td>
          <td><?php echo $s->nohp_siswa ?></td> 
      <!-- <td onclick="javascript: return confirm('Yakin Hapus Bos?')"><?= anchor('siswa/hapus/'.$s->id_siswa, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>'); ?>
      </td> -->
      <td>
        <button class="btn btn-success" data-toggle="modal" data-target="#editmodal"><i class="fa fa-edit"></i>
      </button>
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
        <h4 class="modal-title" id="exampleModalLabel">Tambah Siswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <?php echo form_open_multipart('siswa/tambah_aksi'); ?>

          <div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <select class="form-control" name="id_kelas">
              <?php foreach ($kelas->result() as $k): ?>
                <option value="<?= $k->id_kelas; ?>"><?= $k->kelas; ?></option>
              <?php endforeach ?>
            </select>
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

</div>