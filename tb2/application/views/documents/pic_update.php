<title><?php echo $judul; ?></title>

<br>
<button onclick="history.back()" class="btn btn-link ml-4">
	< Kembali</button>
		<br><br>

		<h1 class="h1 ml-4 text-gray-900"><b><?php echo $judul ?></b></h1>

		<form method="post" action="<?php echo site_url('pic/update_submit/' . $pic_single['id_pic']); ?>" class="ml-4">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">PIC name</label>
				<div class="col-sm-4">
					<input type="text" name="pic_name" value="<?php echo $pic_single['pic_name']; ?>" class="form-control">
				</div>
			</div>
			<input type="hidden" null="yes" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">

		</form>