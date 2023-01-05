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

	<form method="post" action="<?php echo site_url('ppe_wo/insert_submit/'); ?>">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">WO Number</label>
			<div class="col-sm-4">
				<input name="wo_number" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-4">
				<input name="description" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">quantity</label>
			<div class="col-sm-4">
				<input name="quantity" value="" required="" class="form-control">
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
			<label class="col-sm-2 col-form-label">SP in</label>
			<div class="col-sm-4">
				<input name="sp_in" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">SP out</label>
			<div class="col-sm-4">
				<input name="sp_out" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-6">
				<select name="status" class="form-control">
					<?php foreach ($status as $status) : ?>
						<option value="<?php echo $status['status_code']; ?>"><?php echo $status['status']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Revision number</label>
			<div class="col-sm-4">
				<input name="revision_number" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
				<datalist id="datalistOptions">
					<?php foreach ($aircraft_data as $data) : ?>
						<option value="<?php echo $data['revision_number']; ?>"><?php echo $data['revision_number']; ?></option>
					<?php endforeach; ?>
				</datalist>

				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Component location</label>
			<div class="col-sm-4">
				<input name="component_location" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">PIC</label>
			<div class="col-sm-6">
				<select name="id_pic" class="form-control">
					<?php foreach ($pic as $pic) : ?>
						<option value="<?php echo $pic['id_pic']; ?>"><?php echo $pic['pic_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Component removed status</label>
			<div class="col-sm-4">
				<input name="component_removed_status" value="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Doc number</label>
			<div class="col-sm-4">
				<input name="doc_number" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Doc type</label>
			<div class="col-sm-6">
				<select name="id_doc" class="form-control">
					<?php foreach ($doctype as $doctype) : ?>
						<option value="<?php echo $doctype['id_doc']; ?>"><?php echo $doctype['doc_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Job Type</label>
			<div class="col-sm-6">
				<select name="job_type" class="form-control">
					<?php foreach ($job_type as $job_type) : ?>
						<option value="<?php echo $job_type['id_job']; ?>"><?php echo $job_type['job_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ID PPE</label>
			<div class="col-sm-4">
				<input name="id_ppe" value="" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">remark</label>
			<div class="col-sm-4">
				<input name="remark" value="" class="form-control">
			</div>
		</div>

		<input type="hidden" null="yes" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">

		<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		<a href="<?php echo site_url('ppe_wo/'); ?>" class="btn btn-danger">Kembali</a>
	</form>

</body>

</html>