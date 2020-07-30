<div class="overflow-auto"><!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
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
      <th class="table-success">Nama</th>
      <td class="table-success"><?= $dt->nama; ?></td>
    </tr>
   <tr>
      <th class="table-success">Kelas</th>
      <td class="table-success"><?= $dt->kelas; ?></td>
    </tr>
    <tr>
      <th class="table-success">Surat</th>
      <td class="table-success"><?= $dt->surat; ?></td>
    </tr>
    <tr>
      <th class="table-success">Ayat</th>
      <td class="table-success"><?= $dt->ayat_ke . '-' .$dt->sampai; ?></td>
    </tr>
    <tr>
      <th class="table-success">Guru Penguji</th>
      <td class="table-success"><?= $dt->guru_penguji; ?></td>
    </tr>
     <tr>
      <?php if ($nilaitotal >= 80): ?>
      <td class="table-dark text-center" >Nilai <h1><strong><?= $nilaitotal; ?></strong></h1></td>
        <?php else: ?>
      <td class="table-danger text-center" >Nilai <h1><strong><?= $nilaitotal; ?></strong></h1></td>
      <?php endif ?>
      <td></td>
    </tr>
    
</table>


<table class="table">
	<tr>
      <th class="table-success">Pengetahuan :</th>
    </tr>
    <tr>
    	<td><?= $tanpa_p ?></td>
    </tr>
    <tr>
      <th class="table-success">Keterampilan :</th>
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
