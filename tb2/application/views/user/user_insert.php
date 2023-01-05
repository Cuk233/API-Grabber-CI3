<title><?php echo $judul; ?></title>
<br>
<button onclick="history.back()" class="btn btn-link ml-4">< Kembali</button>
<br><br>

<h1 class="h1 ml-4 text-gray-900"><b><?php echo $judul ?></b></h1>
<br><br><br>

<!--$data_user_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('user/insert_submit/'); ?>" class="ml-4">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ID Number</label>
			<div class="col-sm-6">
				<input name="status" value="" required="" class="form-control">
			</div>
		</div>
        <div class="form-group row">
			<label class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-6">
				<input name="status" value="" required="" class="form-control">
			</div>
		</div>
        <div class="form-group row">
			<label class="col-sm-2 col-form-label">Job Title</label>
			<div class="col-sm-6">
				<input name="status" value="" required="" class="form-control">
			</div>
		</div>
        <div class="form-group row">
			<label class="col-sm-2 col-form-label">PIC</label>
			<div class="col-sm-6">
				<select name="id_pic" class="form-control">
					<?php foreach ($pic as $pic_) : ?>
						<option value="<?php echo $pic_['id_pic']; ?>"><?php echo $pic_['pic_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Role</label>
			<div class="col-sm-6">
				<select name="id_role" class="form-control">
					<?php foreach ($user_role as $role) : ?>
						<option value="<?php echo $role['id_role']; ?>"><?php echo $role['role']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<a href="<?php echo site_url('user/read'); ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
	</form>
</form>