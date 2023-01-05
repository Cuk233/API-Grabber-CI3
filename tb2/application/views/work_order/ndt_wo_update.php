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

	<form method="post" action="<?php echo site_url('ndt_wo/update_submit/' . $ndt_wo_single['wo_number']); ?>">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">WO Number</label>
			<div class="col-sm-4">
				<select name="wo_number" class="form-control">
					<?php foreach ($ppe_wo as $ppe) : ?>
						<?php if ($ppe['wo_number'] == $ndt_wo_single['wo_number']) : ?>
							<option value="<?php echo $ppe['wo_number'] ?>" selected><?php echo $ppe['wo_number'] ?></option>
						<?php else : ?>
							<option value="<?php echo $ppe['wo_number'] ?>"><?php echo $ppe['wo_number'] ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date in</label>
			<div class="col-sm-4">
				<input type='date' name="date_in" value="<?php echo $ndt_wo_single['date_in'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date out</label>
			<div class="col-sm-4">
				<input type='date' name="date_out" value="<?php echo $ndt_wo_single['date_out'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-4">
				<select name="status" class="form-control">
					<?php foreach ($status as $status) : ?>
						<?php if ($status['status_code'] == $ndt_wo_single['status']) : ?>
							<option value="<?php echo $status['status_code']; ?>" selected><?php echo $status['status']; ?></option>
						<?php else : ?>
							<option value="<?php echo $status['status_code']; ?>"><?php echo $status['status']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Revision number</label>
			<div class="col-sm-4">
				<input type='number' name="revision_number" value="<?php echo $ndt_wo_single['revision_number'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Remark</label>
			<div class="col-sm-4">
				<input name="remark" value="<?php echo $ndt_wo_single['remark'] ?>" class="form-control">
			</div>
		</div>

		<input type="hidden" null="yes" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">

		<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		<a href="<?php echo site_url('ndt_wo/'); ?>" class="btn btn-danger">Kembali</a>
	</form>

</body>

</html>