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

	<form method="post" action="<?php echo site_url('ppe_wo/update_submit/' . $ppe_wo_single['wo_number']); ?>">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">WO Number</label>
			<div class="col-sm-4">
				<input name="wo_number" value="<?php echo $ppe_wo_single['wo_number'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-4">
				<input name="description" value="<?php echo $ppe_wo_single['description'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">quantity</label>
			<div class="col-sm-4">
				<input name="quantity" value="<?php echo $ppe_wo_single['quantity'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date in</label>
			<div class="col-sm-4">
				<input type='date' name="date_in" value="<?php echo $ppe_wo_single['date_in'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date out</label>
			<div class="col-sm-4">
				<input type='date' name="date_out" value="<?php echo $ppe_wo_single['date_out'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">SP in</label>
			<div class="col-sm-4">
				<input name="sp_in" value="<?php echo $ppe_wo_single['sp_in'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">SP out</label>
			<div class="col-sm-4">
				<input name="sp_out" value="<?php echo $ppe_wo_single['sp_out'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-6">
				<select name="status" class="form-control">
					<?php foreach ($status as $status) : ?>
						<?php if ($status['status_code'] == $ppe_wo_single['status']) : ?>
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
				<input type='number' name="revision_number" value="<?php echo $ppe_wo_single['revision_number'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Component location</label>
			<div class="col-sm-4">
				<input name="component_location" value="<?php echo $ppe_wo_single['component_location'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">PIC</label>
			<div class="col-sm-6">
				<select name="id_pic" class="form-control">
					<?php foreach ($pic as $pic) : ?>
						<?php if ($pic['id_pic'] == $ppe_wo_single['id_pic']) : ?>
							<option value="<?php echo $pic['id_pic']; ?>" selected><?php echo $pic['pic_name']; ?></option>
						<?php else : ?>
							<option value="<?php echo $pic['id_pic']; ?>"><?php echo $pic['pic_name']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Component removed status</label>
			<div class="col-sm-4">
				<input name="component_removed_status" value="<?php echo $ppe_wo_single['component_removed_status'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Doc number</label>
			<div class="col-sm-4">
				<input name="doc_number" value="doc_number" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Doc type</label>
			<div class="col-sm-6">
				<select name="id_doc" class="form-control">
					<?php foreach ($doctype as $doctype) : ?>
						<?php if ($doctype['id_doc'] == $ppe_wo_single['id_doc']) : ?>
							<option value="<?php echo $doctype['id_doc']; ?>" selected><?php echo $doctype['doc_name']; ?></option>
						<?php else : ?>
							<option value="<?php echo $doctype['id_doc']; ?>"><?php echo $doctype['doc_name']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Job Type</label>
			<div class="col-sm-6">
				<select name="job_type" class="form-control">
					<?php foreach ($job_type as $job_type) : ?>
						<?php if ($doctype['id_doc'] == $ppe_wo_single['id_doc']) : ?>
							<option value="<?php echo $job_type['id_job']; ?>" selected><?php echo $job_type['job_name']; ?></option>
						<?php else : ?>
							<option value="<?php echo $job_type['id_job']; ?>"><?php echo $job_type['job_name']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ID PPE</label>
			<div class="col-sm-4">
				<input name="id_ppe" value="<?php echo $ppe_wo_single['id_ppe'] ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">remark</label>
			<div class="col-sm-4">
				<input name="remark" value="" <?php echo $ppe_wo_single['remark'] ?>" class="form-control">
			</div>
		</div>

		<input type="hidden" null="yes" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">

		<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		<a href="<?php echo site_url('ppe_wo/'); ?>" class="btn btn-danger">Kembali</a>
	</form>

</body>

</html>