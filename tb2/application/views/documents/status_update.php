<title><?php echo $judul; ?></title>

<br>
<button onclick="history.back()" class="btn btn-link ml-4">
	< Kembali</button>
		<br><br>

		<h1 class="h1 ml-4 text-gray-900"><b><?php echo $judul ?></b></h1>

		<form method="post" action="<?php echo site_url('status/update_submit/' . $status_single['status_code']); ?>" class="ml-4">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">status code</label>
				<div class="col-sm-2">
					<input name="status_code" value="<?php echo $status_single['status_code'] ?>" required="" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">status</label>
				<div class="col-sm-6">
					<input name="status" value="<?php echo $status_single['status'] ?>" required="" class="form-control">
				</div>
			</div>

			<input type="hidden" null="yes" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
			<a href="<?php echo site_url('status/'); ?>" class="btn btn-danger">Kembali</a>
			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		</form>