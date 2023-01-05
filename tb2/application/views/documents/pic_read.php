<a href=" <?php echo site_url('pic/insert'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless table-hover shadow p-3 mb-5 bg-white rounded" id="datatables">
	<thead class="thead-blue">
		<tr>
			<th>id_pic</th>
			<th>pic_name</th>
			<th>created_at</th>
			<th>updated_at</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>

        <?php foreach ($pic as $pic_) : ?>
			<tr>
				<td><?php echo $pic_['id_pic']; ?></td>
				<td><?php echo $pic_['pic_name']; ?></td>
				<td><?php echo $pic_['created_at']; ?></td>
				<td><?php echo $pic_['updated_at']; ?></td>
				<td>
				<a href="<?php echo site_url('pic/update/' . $pic_['id_pic']); ?>">
                            Ubah
                        </a>

                        <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('pic/delete/' . $pic_['id_pic']); ?>" onClick="return confirm('Apakah anda yakin?')">
                            Hapus
                        </a>
			</td>

			</tr>

		<?php endforeach ?>
	</tbody>
</table>