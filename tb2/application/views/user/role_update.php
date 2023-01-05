<title><?php echo $judul; ?></title>
<br>
<button onclick="history.back()" class="btn btn-link ml-4">< Kembali</button>
<br><br>

<h1 class="h1 ml-4 text-gray-900"><b><?php echo $judul ?></b></h1>
<br><br><br>

<!--$data_user_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('role/insert_submit/'); ?>">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Role</label>
			<div class="col-sm-6">
				<input name="status" value="<?php echo $role_single['role']; ?>" required="" class="form-control">
			</div>
		</div>

		<input type="hidden" null="yes" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
		<a href="<?php echo site_url('role/read'); ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
	</form>
</form>