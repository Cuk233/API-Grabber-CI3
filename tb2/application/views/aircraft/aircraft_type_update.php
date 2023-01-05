<title><?php echo $judul; ?></title>

<br>
<button onclick="history.back()" class="btn btn-link ml-4">
	< Kembali</button>
		<br><br>

		<h1 class="h1 ml-4 text-gray-900"><b><?php echo $judul ?></b></h1>
		<br><br><br>

		<form method="post" action="<?php echo site_url('aircraft_type/update_submit/' . $aircraft_type_single['actype_code']); ?>" class="ml-4">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">actype_code</label>
				<div class="col-sm-2">
					<input disabled type="text" name="actype_code" value="<?php echo $aircraft_type_single['actype_code']; ?>" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">actype_name</label>
				<div class="col-sm-2">
					<input type="text" name="actype_name" value="<?php echo $aircraft_type_single['actype_name']; ?>" class="form-control">
				</div>
			</div>

			<input type="hidden" null="yes" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">


			<input type="hidden" null="yes" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
			<a href="<?php echo site_url('aircraft_type/'); ?>" class="btn btn-danger">Kembali</a>
		</form>