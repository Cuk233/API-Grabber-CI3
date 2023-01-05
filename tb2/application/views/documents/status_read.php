<a href=" <?php echo site_url('status/insert'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless table-hover display responsive nowrap shadow p-3 mb-5 bg-white rounded" id="datatables">
	<thead class="thead-blue">
		<tr>
			<th>status code</th>
			<th>status name</th>
			<th>created at</th>
			<th>updated at</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($status as $status_) : ?>
			<tr>
				<td><?php echo $status_['status_code']; ?></td>
				<td><?php echo $status_['status']; ?></td>
				<td><?php echo $status_['created_at']; ?></td>
				<td><?php echo $status_['updated_at']; ?></td>
				<td>
					<a href="<?php echo site_url('status/update/' . $status_['status_code']); ?>">
						Ubah
					</a>

					<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('status/delete/' . $status_['status_code']); ?>" onClick="return confirm('Apakah anda yakin?')">
						Hapus
					</a>
				</td>

			</tr>

		<?php endforeach ?>
	</tbody>
</table>