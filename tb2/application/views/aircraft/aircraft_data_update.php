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

	<form method="post" action="<?php echo site_url('aircraft_data/update_submit/' . $aircraft_data_single['revision_number']); ?>" class="ml-4">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Revision Number</label>
			<div class="col-sm-2">
				<input name="revision_number" value="<?php echo $aircraft_data_single['revision_number']; ?>" required="" class="form-control" disabled>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Maintenance Type</label>
			<div class="col-sm-6">
				<input name="maintenance_type" value="<?php echo $aircraft_data_single['maintenance_type']; ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Ac Reg</label>
			<div class="col-sm-6">
				<input name="ac_reg" value="<?php echo $aircraft_data_single['ac_reg']; ?>" required="" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Ac type</label>
			<div class="col-sm-6">
				<select name="ac_type" class="form-control">
					<?php foreach ($aircraft_type as $type) : ?>
						<?php if ($type['actype_code'] == $aircraft_data_single['ac_type']) : ?>
							<option value="<?php echo $type['actype_code']; ?>" selected><?php echo $type['actype_name']; ?></option>
						<?php else : ?>
							<option value="<?php echo $type['actype_code']; ?>"><?php echo $type['actype_name']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Engine Type</label>
			<div class="col-sm-6">
				<input name="engine_type" value="<?php echo $aircraft_data_single['engine_type']; ?>" required="" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Customer</label>
			<div class="col-sm-6">
				<input name="customer" value="<?php echo $aircraft_data_single['customer']; ?>" required="" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date in</label>
			<div class="col-sm-6">
				<input type='date' name="date_in" value="<?php echo $aircraft_data_single['date_in']; ?>" required="" class="form-control">
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date out</label>
			<div class="col-sm-6">
				<input type="date" name="date_out" value="<?php echo $aircraft_data_single['date_out']; ?>" class="form-control">
			</div>
		</div>
		<!-------------------------------------Later------------------------------------------------------------------->
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-6">
				<select name="status" class="form-control">

					<option selected>...</option>
					<?php if ($aircraft_data_single['status'] == 'OPEN') : ?>
						<option value="OPEN" selected>
							OPEN
						</option>
						<option value="PRGS">
							PROGRESS
						</option>
						<option value="CLSD">
							CLOSED
						</option>
					<?php elseif ($aircraft_data_single['status'] == 'PRGS') : ?>
						<option value="OPEN">
							OPEN
						</option>
						<option value="PRGS" selected>
							PROGRESS
						</option>
						<option value="CLSD">
							CLOSED
						</option>
					<?php elseif ($aircraft_data_single['status'] == 'CLSD') : ?>
						<option value="OPEN">
							OPEN
						</option>
						<option value="PRGS">
							PROGRESS
						</option>
						<option value="CLSD" selected>
							CLOSED
						</option>
					<?php endif; ?>
					<!--<?php foreach ($status_code as $status) : ?>
						<?php if ($status['status_code'] == $aircraft_data_single['status']) : ?>
							<option value="<?php echo $status['status_code']; ?>" selected><?php echo $status['status']; ?></option>
						<?php else : ?>
							<option value="<?php echo $status['status_code']; ?>"><?php echo $status['status']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>-->
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Project Owner</label>
			<div class="col-sm-6">
				<input name="project_owner" value="<?php echo $aircraft_data_single['project_owner']; ?>" required="" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Hangar Location</label>
			<div class="col-sm-6">
				<input name="hangar_location" value="<?php echo $aircraft_data_single['hangar_location']; ?>" required="" class="form-control">
			</div>
		</div>
		<br>
		<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		<a href="<?php echo site_url('aircraft_data/'); ?>" class="btn btn-danger">Kembali</a>
	</form>

</body>

</html>