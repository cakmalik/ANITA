    <section class="ftco-section mt-1">
        <div class="container">
            <div class="row">
                <div class="col-md-11 ">
                    <form action="<?= base_url('evaluasi/frontKelas') ?>" method="POST">
                        <div class="form-group">
                            <select class="form-control" name="kelas">
                                <?php $datKelas = $this->db->get('kelas')->result_array(); ?>
                                <?php foreach ($datKelas as $dk) : ?>
                                    <option value="<?= $dk['id_kelas']; ?>"><?= $dk['kelas']; ?></option>

                                <?php endforeach ?>
                                <input type="hidden" name="nama_kelas" value="<?= $dk['kelas']; ?>" />
                            </select>
                        </div>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">FILTER</button>
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12 heading-section text-center ftco-animate">

                    <div class="overflow-auto">
                        <div class="text-center">
                            <!-- <h3><b><?php echo 'Nilai Kelas ' . $judul  ?></b></h3> -->
                        </div>



                        <table class="table mt-3">
                            <tr>
                                <thead class="table-dark">
                                    <th>Kelas</th>
                                    <th>Nama</th>
                                    <th>Surat</th>
                                    <th>Nilai</th>
                                    <th>Penguji</th>
                                    <th>Tgl</th>
                                    <th>Detail</th>
                                </thead>
                            </tr>
                            <?php foreach ($kategori as $dt) : ?>

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
                                $nilaitotalX = $nilai * $dapat_pk;
                                $nilaitotal = number_format($nilaitotalX, 1);
                                //untuk menentukan angka blakang koma
                                //echo round(angka, jml angka blakang koma)
                                ?>


                                <tr>

                                    <td><?= $dt->kelas ?></td>
                                    <td><?= $dt->nama ?></td>
                                    <td><?= $dt->id_surat ?></td>
                                    <?php if ($nilaitotal < 80) : ?>
                                        <td style="color: red;"><?= $nilaitotal ?></td>
                                    <?php else : ?>
                                        <td style="color: green;"><?= $nilaitotal ?></td>
                                    <?php endif ?>
                                    <td><?= $dt->guru_penguji ?></td>
                                    <td><?= $dt->tanggal ?></td>
                                    <?php if ($nilaitotal < 80) : ?>
                                        <td><?php echo anchor('front/detail_nilai/' . $dt->id_uji, '<div class="btn btn-danger btn-small"><i class="fa fa-star"></i></div>') ?></td>
                                    <?php else : ?>
                                        <td><?php echo anchor('front/detail_nilai/' . $dt->id_uji, '<div class="btn btn-primary btn-small"><i class="fa fa-search-plus"></i></div>') ?></td>
                                    <?php endif ?>

                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
    </section>
    </div>