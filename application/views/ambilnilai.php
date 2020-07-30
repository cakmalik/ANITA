<!-- Begin Page Content -->
<div class="container">
  <div class="row">
	<div class="col-md-12">
		<div class="col-md-12">

<?php echo form_open_multipart('ambilnilai/inputEvaluasi'); ?>

				<div class="form-group">
	                <div class="col-md-6">
	                    <select name="id_kelas" id="id_kelas" class="form-control">
	                    	<option value="0"> Pilih Kelas</option>
	                    	<?php foreach($data->result() as $row):?>
	                    		<option value="<?php echo $row->kelas;?>"><?php echo $row->kelas;?></option>
	                    	<?php endforeach;?>
	                    </select>
	                </div>
	            </div>
	           
				<div class="form-group">
	                <div class="col-md-6">
	                    <select name="kategori" id="kategori" class="form-control">
	                    	<option value="0"> Pilih kategori</option>
	                    	<?php foreach($kategorievaluasi->result() as $row):?>
	                    		<option value="<?php echo $row->kategori;?>"><?php echo $row->kategori;?></option>
	                    	<?php endforeach;?>
	                    </select>
	                </div>
	            </div>


	            <div class="form-group">
	                <div class="col-md-6">
	                    <select name="id_juz" id="id_juz" class="form-control">
	                    	<option> Juz </option>
	                    	<?php foreach($juz->result() as $row):?>
	                    		<option value="<?php echo $row->nama_juz;?>"><?php echo $row->nama_juz;?></option>
	                    	<?php endforeach;?>
	                    </select>
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="col-md-6">
	                    <select name="id_surat" id="id_surat" class="form-control">
	                    	<option> Surat </option>
	                    	<?php foreach($surat->result() as $row):?>
	                    		<option value="<?php echo $row->nama_surat;?>"><?php echo $row->nama_surat . ' | ' . $row->nama_surat?></option>
	                    	<?php endforeach;?>
	                    </select>
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="col-md-6">
	                    <input class="form-control" name="ayat_ke" placeholder="Ayat ke" />
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="col-md-6">
	                    <input class="form-control" name="sampai" placeholder="Sampai" />
	                </div>
	            </div>
	            <?php $tgl = date("Y-m-d H:i:s");?>
	            <input type="hidden" name="tanggal" value="<?= $tgl; ?>">
	            <button class="btn btn-primary ml-3" type="submit"> Apply </button>
<?php form_close(); ?> 			
		</div>
	</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#kategori').change(function(){
			var id=$(this).val();
			$.ajax({
				url : "<?php echo base_url();?>index.php/ambilnilai/get_subkategori",
				method : "POST",
				data : {id: id},
				async : false,
		        dataType : 'json',
				success: function(data){
					var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<option>'+data[i].nama+'</option>';
		            }
		            $('.subkategori').html(html);
					
				}
			});
		});
	});
</script>
</body>
</html>