<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo $judul; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

	<form method="post" action="<?php echo site_url('ndt_wo/insert_submit/'); ?>">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">WO Number</label>
			<div class="col-sm-4">
				<select name="wo_number" class="form-control">
					<?php foreach ($ppe_wo as $ppe) : ?>
						<option value="<?php echo $ppe['wo_number'] ?>"><?php echo $ppe['wo_number'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date in</label>
			<div class="col-sm-4">
				<input type='date' name="date_in" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date out</label>
			<div class="col-sm-4">
				<input type='date' name="date_out" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-4">
				<input name="status" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
				<datalist id="datalistOptions">
					<?php foreach ($status as $status) : ?>
						<option value="<?php echo $status['status_code']; ?>"><?php echo $status['status']; ?></option>
					<?php endforeach; ?>
				</datalist>

				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Revision number</label>
			<div class="col-sm-4">
				<input type='number' name="revision_number" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Remark</label>
			<div class="col-sm-4">
				<input name="remark" value="" class="form-control">
			</div>
		</div>

		<input type="hidden" null="yes" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">

		<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		<a href="<?php echo site_url('ndt_wo/'); ?>" class="btn btn-danger">Kembali</a>
	</form>

</body>

</html>