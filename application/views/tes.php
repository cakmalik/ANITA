<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?= base_url('tes/inputdata') ?>">
		<?php for ($i=1; $i < 3; $i++) :?>
		<input type="checkbox" name="tesp[]" value="<?= $i . 'p' ?>"><?= $i . 'p' ?>
		<input type="checkbox" name="tesk[]" value="<?= $i . 'k' ?>"><?= $i . 'k' ?>
	<?php endfor; ?>

	<button type="submit">Basmalah</button>
		
	</form>
</body>
</html>
