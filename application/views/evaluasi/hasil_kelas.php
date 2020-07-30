<div class="overflow-auto">
    <div class="text-center mb-99">
        <h5><b>DATA NILAI</b></h5>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-9  pl-1">
            <form action="<?= base_url('evaluasi/kelas') ?>" method="POST">
                <div class="form-group">
                    <select class="form-control" name="kelas">
                        <?php $datKelas = $this->db->get('kelas')->result_array(); ?>
                        <?php foreach ($datKelas as $dk) : ?>
                            <option value="<?= $dk['id_kelas']; ?>"><?= $dk['kelas']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">FILTER</button>
        </div>
        </form>
    </div>
    <br>
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
                    <th scope="col">Hapus</th>
                </tr>
            </thead>
            <?php foreach ($getdata as $dt) : ?>
                <?php

                //KODEKU UNTUK HITUNG KARAKTER
                //mengambil Jumlah ayat yang di uji
                $a = $dt->ayat_ke;
                $b = $dt->sampai;
                $jml_ayat_total = $b - $a + 1;
                $jml_ayat_total_pk = $jml_ayat_total * 2;

                $p_koma = $dt->p;
                $k_koma = $dt->k;

                $newp = str_replace(',', '', $p_koma);
                $newk = str_replace(',', '', $k_koma);

                $tanpa_p = str_replace('p', '', $p_koma);
                $tanpa_k = str_replace('k', '', $k_koma);


                $jml_p = strlen($newp);
                $jml_k = strlen($newk);

                $jml_pk = $jml_p + $jml_k;
                $jml_ayat_pk = $jml_pk / 2;
                // echo $jml_p;

                // echo $jml_ayat_total;

                //menentukan nilai tiap item ( 100 / p) 
                $nilai = 100 / $jml_ayat_total_pk;

                //Nilai 

                $nilaipsaja = substr_count($newp, "p");
                $nilaiksaja = substr_count($newk, "k");

                $dapat_pk = $nilaipsaja + $nilaiksaja;
                // echo $nilaitotal;

                $nilaitotal = $nilai * $dapat_pk;
                  $nilaitotal = ceil($nilaitotal);

                //untuk menentukan angka blakang koma
                //echo round(angka, jml angka blakang koma)
                ?>


                <tr>
                    <td><?= $dt->kelas ?></td>
                    <td><?= $dt->nama ?></td>
                    <td><?= $dt->id_surat ?></td>
                    <td><?= $dt->ayat_ke . '- ' .  $dt->sampai ?></td>
                    <?php if ($nilaitotal <= 80) : ?>
                        <td class="badger badge-danger text-center"><?= $nilaitotal ?></td>
                    <?php else : ?>
                        <td class="badger badge-success text-center"><?= $nilaitotal ?></td>
                    <?php endif ?>
                    <td>
                        <?php echo anchor('evaluasi/detail_nilai/' . $dt->id_uji, '<div class="btn btn-primary btn-small"><i class="fa fa-search-plus"></i></div>') ?>
                    </td>
                    <td>
                        <?php echo anchor('evaluasi/hapusHasilSiswa/' . $dt->id_uji, '<div class="btn btn-danger btn-small"><i class="fa fa-trash"></i></div>') ?>
                    </td>

                </tr>
            <?php endforeach; ?>
            <tbody>


            </tbody>
        </table>
    </div>
</div>
















































































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