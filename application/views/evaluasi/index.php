<div class="overflow-auto">
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800 text-left">
      <button class="btn btn-primary mb-2 " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
      </button> Ambil Nilai</h1>

    <div class="row">
      <div class="col-lg-12">
        <?= $this->session->flashdata('message'); ?>
      </div>
    </div>
    <!-- <a href="<?= base_url('ambilnilai'); ?>" class="btn btn-primary mb-3">Ambil Nilai</a> -->


    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kelas</th>
          <th scope="col">Surat</th>
          <th scope="col">Ayat ke</th>
          <th scope="col">Kategori</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Act</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $no = 1;
        foreach ($join->result() as $ev) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $ev->kelas ?></td>
            <td><?= $ev->id_surat ?></td>
            <td><?= $ev->ayat_ke . '-' . $ev->sampai ?></td>
            <td><?= $ev->kategori ?></td>
            <td><?= $ev->tanggal ?></td>
            <td>

              <?php echo anchor('uji/get_uji_nama/' . $ev->id_kelas . '/' . $ev->ayat_ke . '/' . $ev->sampai . '/' . $ev->id_kelas . '/' . $ev->id_evaluasi . '/' . $ev->kategori, '<div class="btn btn-primary btn-small">Uji siswa</div>') ?>

              <?php echo anchor('evaluasi/hapus/' . $ev->id_evaluasi, '<div onclick="return confirm(`Yakin ?`)" class="btn btn-danger btn-small"><i class="fa fa-trash"></i></div>'); ?>

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
        <h4 class="modal-title" id="exampleModalLabel">Pengambilan Nilai</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('ambilnilai/inputEvaluasi'); ?>

        <div class="form-group">
          <div class="col-lg-12">
            <select name="id_kelas" id="id_kelas" class="form-control">
              <option value="0"> Pilih Kelas</option>
              <?php foreach ($data->result() as $row) : ?>
                <option value="<?php echo $row->id_kelas; ?>"><?php echo $row->kelas; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-12">
            <select name="kategori" id="kategori" class="form-control">
              <option value="0"> Pilih kategori</option>
              <?php foreach ($kategorievaluasi->result() as $row) : ?>
                <option value="<?php echo $row->kategori; ?>"><?php echo $row->kategori; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>


        <div class="form-group">
          <div class="col-lg-12">
            <select name="id_juz" id="id_juz" class="form-control">
              <option> Juz </option>
              <?php foreach ($juz->result() as $row) : ?>
                <option value="<?php echo $row->nama_juz; ?>"><?php echo $row->nama_juz; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
            <select name="id_surat" id="id_surat" class="form-control">
              <option> Surat </option>
              <?php foreach ($surat->result() as $row) : ?>
                <option value="<?php echo $row->nama_surat; ?>"><?php echo $row->nomor_surat . ' | ' . $row->nama_surat ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
            <input class="form-control" name="ayat_ke" placeholder="Ayat ke" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
            <input class="form-control" name="sampai" placeholder="Sampai" />
          </div>
        </div>
        <?php $tgl = date("Y-m-d H:i:s"); ?>
        <input type="hidden" name="tanggal" value="<?= $tgl; ?>">
        <button class="btn btn-primary ml-3" type="submit"> Apply </button>
        <?php form_close(); ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>