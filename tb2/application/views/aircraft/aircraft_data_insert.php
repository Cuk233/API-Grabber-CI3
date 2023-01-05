<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<meta charset="utf-8">
	<title><?php echo $judul; ?></title>
</head>

<body>
	<?php if ($response == null) : ?>
		<script>
			$(document).ready(function() {
				alert('Data Not found');
				window.location.href = "<?php echo site_url('aircraft_data/submit') ?>";
			});
		</script>

	<?php else : ?>
		<form method="post" action="<?php echo site_url('aircraft_data/insert_submit/'); ?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Revision Number</label>
				<div class="col-sm-2">
					<input type="number" name="revision_number" value="<?php echo $response['revision_detail']['revision'] ?>" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Maintenance Type</label>
				<div class="col-sm-6">
					<input name="maintenance_type" value="<?php echo $response['revision_detail']['main_type'] ?>" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ac Reg</label>
				<div class="col-sm-6">
					<input name="ac_reg" value="<?php echo $response['revision_detail']['ac_reg'] ?>" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ac type</label>
				<div class="col-sm-6">
					<select name="ac_type" class="form-control">
						<?php foreach ($aircraft_type as $type) : ?>
							<?php if ($response['revision_detail']['ac_type'] == $aircraft_data_single['ac_type']) : ?>
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
					<input name="engine_type" value="" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Customer</label>
				<div class="col-sm-6">
					<input name="customer" value="<?php echo $response['revision_detail']['customer'] ?>" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Date in</label>
				<div class="col-sm-6">
					<input type='date' name="date_in" value="<?php echo $response['revision_detail']['start_date'] ?>" class="form-control">
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Date out</label>
				<div class="col-sm-6">
					<input type="date" name="date_out" value="<?php echo $response['revision_detail']['end_date'] ?>" class="form-control">
				</div>
			</div>
			<!-------------------------------------Later------------------------------------------------------------------->
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-6">
					<select name="status_code" class="form-control">
						<option selected>...</option>
						<option value="OPEN">
							OPEN
						</option>
						<option value="PRGS">
							Progress
						</option>
						<option value="CLSD">
							Closed
						</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Project Owner</label>
				<div class="col-sm-6">
					<input name="project_owner" value="<?php echo $response['revision_detail']['project_owner'] ?>" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hangar Location</label>
				<div class="col-sm-6">
					<input name="hangar_location" value="<?php echo $response['revision_detail']['location'] ?>" class="form-control">
				</div>
			</div>
			<br>
			<a href="<?php echo site_url('aircraft_data/'); ?>" class="btn btn-danger">Kembali</a>
			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		</form>
	<?php endif; ?>

</body>

</html>