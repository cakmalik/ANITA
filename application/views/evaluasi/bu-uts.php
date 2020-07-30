<div class="text-center">
  <h5><b>DATA UTS SISWA</b></h5>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
<!-- <a href="<?= base_url('ambilnilai'); ?>" class="btn btn-primary mb-3">Ambil Nilai</a> -->

 
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Kelas</th>
      <th scope="col">Nama</th>
      <th scope="col">Surat</th>
      <th scope="col">Ayat</th>
      <th scope="col">Nilai</th>
      <th scope="col">Lihat</th>
    </tr>
  </thead>
      <?php foreach ($joinkelas->result() as $n) : ?>
      <?php foreach ($joinsiswa->result() as $js) : ?>
      <?php foreach ($joineva->result() as $je) : ?>
      <?php foreach ($nilai->result() as $nn) : ?>
    <tr>
      <?php 
      //KODEKU UNTUK HITUNG KARAKTER
      $p_koma = $nn->p;
      $k_koma = $nn->k;
      $newp = str_replace(',', '', $p_koma);
      $newk = str_replace(',', '', $k_koma);
      $jml_p = strlen($newp);
      $jml_k = strlen($newk);
      // echo $jml_p;

      //mengambil Jumlah ayat yang di uji
      $a = $je->ayat_ke;
      $b = $je->sampai;
      $jml_ayat_total = $b-$a+1;
      // echo $jml_ayat_total;

      //menentukan nilai tiap item ( 100 / p) 
      $nilai = 100 / $jml_ayat_total;
      
      //Nilai 
      $nilaitotal= $nilai * $jml_p;
      // echo $nilaitotal;

      //untuk menentukan angka blakang koma
      //echo round(angka, jml angka blakang koma)
       ?>

        <td><?= $n->kelas ?></td>
        <td><?= $js->nama ?></td>
        <td><?= $js->surat  ?></td>
        <td><?= $nn->p ?></td>
        <td><?= $je->ayat_ke . '-' . $je->sampai ?></td>

        <td><?php echo round($nilaitotal,0);?></td>
        <td>
          <?php echo anchor('evaluasi/detail_nilai/'.$je->id_uji, '<div class="btn btn-primary btn-small"><i class="fa fa-search-plus"></i></div>') ?>
        </td>

    </tr>
      <?php endforeach; ?>
      <?php endforeach; ?>
      <?php endforeach; ?>
      <?php endforeach; ?>
  <tbody>


















































































            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });



                $('.form-check-input').on('click', function() {
                    const menuId = $(this).data('menu');
                    const roleId = $(this).data('role');

                    $.ajax({
                        url: "<?= base_url('admin/changeaccess'); ?>",
                        type: 'post',
                        data: {
                            menuId: menuId,
                            roleId: roleId
                        },
                        success: function() {
                            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                        }
                    });

                });
            </script>

            </body>

            </html> 