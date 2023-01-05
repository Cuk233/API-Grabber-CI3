<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo $judul; ?></title>
</head>

<body>

	<form method="post" action="<?php echo site_url('role/insert_submit/'); ?>">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Role</label>
			<div class="col-sm-6">
				<input name="status" value="" required="" class="form-control">
			</div>
		</div>

		<input type="hidden" null="yes" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
		<a href="<?php echo site_url('role/read'); ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
	</form>

</body>

</html>