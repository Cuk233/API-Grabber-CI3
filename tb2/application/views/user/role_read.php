<a href=" <?php echo site_url('role/insert'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless table-hover shadow p-3 mb-5 bg-white rounded" id="datatables">
	<thead class="thead-blue">
		<tr>
			<th>ID role</th>
			<th>Role</th>
			<th>Created at</th>
			<th>Updated at</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($role as $role_) : ?>
			<tr>
				<td><?php echo $role_['id_role']; ?></td>
				<td><?php echo $role_['role']; ?></td>
				<td><?php echo $role_['created_at']; ?></td>
				<td><?php echo $role_['updated_at']; ?></td>
				<td>
					<a href="<?php echo site_url('role/update/' . $role_['id_role']); ?>">
						Ubah
					</a>

					<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('role/delete/' . $role_['id_role']); ?>" onClick="return confirm('Apakah anda yakin?')">
						Hapus
					</a>
				</td>

			</tr>

		<?php endforeach ?>
	</tbody>
</table>