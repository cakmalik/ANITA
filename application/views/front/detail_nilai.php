    <section class="ftco-section mt-1">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 heading-section text-center ftco-animate">

      <div class="overflow-auto">
        <div class="text-center">
        <?php foreach ($getdata_id as $key) {
        } ?>
        <h5>Nilai<br><b><?= $key->nama; ?></b></h5>
      </div>

<?php foreach ($getdata_id as $dt) : ?>
  <?php 

      //KODEKU UNTUK HITUNG KARAKTER
      //mengambil Jumlah ayat yang di uji
      $a = $dt->ayat_ke;
      $b = $dt->sampai;
      $jml_ayat_total = $b-$a+1;
      $jml_ayat_total_pk = $jml_ayat_total * 2 ;

      $p_koma = $dt->p;
      $k_koma = $dt->k;

      $newp = str_replace(',', '', $p_koma);
      $newk = str_replace(',', '', $k_koma);

      $tanpa_p = str_replace('p', '', $p_koma);
      $tanpa_k = str_replace('k', '', $k_koma);


      $jml_p = strlen($newp);
      $jml_k = strlen($newk);

      $jml_pk = $jml_p + $jml_k;
      $jml_ayat_pk = $jml_pk/2;
      // echo $jml_p;

      // echo $jml_ayat_total;

      //menentukan nilai tiap item ( 100 / p) 
      $nilai = 100 / $jml_ayat_total_pk;
      
      //Nilai 

$nilaipsaja = substr_count($newp, "p");
$nilaiksaja = substr_count($newk, "k");

$dapat_pk = $nilaipsaja+$nilaiksaja;
      // echo $nilaitotal;

$nilaitotalX= $nilai * $dapat_pk;
$nilaitotal= number_format($nilaitotalX,1);
      //untuk menentukan angka blakang koma
      //echo round(angka, jml angka blakang koma)
      ?>



<table class="table mb-5">
   <tr>
      <th class="table-dark" style="text-align: right;">Kelas</th>
      <th class="table-dark">:</th>
      <td class="table-dark" style="text-align: left;"><?= $dt->kelas; ?></td>
    </tr>
    <tr>
      <th class="table-dark" style="text-align: right;">Surat</th>
      <th class="table-dark">:</th>
      <td class="table-dark" style="text-align: left;"><?= $dt->surat; ?></td>
    </tr>
    <tr>
      <th class="table-dark" style="text-align: right;">Ayat</th>
      <th class="table-dark">:</th>
      <td class="table-dark" style="text-align: left;"><?= $dt->ayat_ke . '-' .$dt->sampai; ?></td>
    </tr>
    <tr>
      <th class="table-dark" style="text-align: right;">Guru Penguji</th>
      <th class="table-dark">:</th>
      <td class="table-dark" style="text-align: left;"><?= $dt->guru_penguji; ?></td>
    </tr>
     <tr>
      <th></th>
      <?php if ($nilaitotal<80): ?>
      <td class="table-danger" style="text-align: center;"><h1 style="color: red;"><strong><?= $nilaitotal; ?></strong></h1></td>
        <?php else: ?>
      <td class="table-success" style="text-align: center;"><h1 style="color: green;"><strong><?= $nilaitotal; ?></strong></h1></td>        
      <?php endif ?>
      <th></th>
    </tr>
</table>


<table class="table">
	<tr>
      <th class="table-dark">Pengetahuan :</th>
    </tr>
    <tr>
    	<td><?= $tanpa_p ?></td>
    </tr>
    <tr>
      <th class="table-dark">Keterampilan :</th>
    </tr>
    <tr>
    	<td><?= $tanpa_k ?></td>
    </tr>	

    <?php endforeach; ?>

</table>






</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
</div></div></section>